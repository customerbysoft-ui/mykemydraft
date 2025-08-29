<?php
require __DIR__ . '/config.php';

$cart = $_SESSION['cart'] ?? [];
if (!$cart) {
    header('Location: cart.php');
    exit;
}

// Simplified order placement (COD / Demo)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_check();
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $address = trim($_POST['address'] ?? '');
    if ($name && $email && $address) {
        $pdo->beginTransaction();
        try {
            $stmt = $pdo->prepare("INSERT INTO orders (customer_name, customer_email, customer_address, status, created_at) VALUES (?,?,?,?,NOW())");
            $stmt->execute([$name, $email, $address, 'PENDING']);
            $order_id = (int)$pdo->lastInsertId();

            // order items
            $ids = implode(',', array_map('intval', array_keys($cart)));
            $q = $pdo->query("SELECT id, price FROM products WHERE id IN ($ids)");
            $priceMap = [];
            foreach ($q as $row) { $priceMap[(int)$row['id']] = (float)$row['price']; }

            $stmtItem = $pdo->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?,?,?,?)");
            foreach ($cart as $pid => $qty) {
                $pid = (int)$pid; $qty = (int)$qty;
                $stmtItem->execute([$order_id, $pid, $qty, $priceMap[$pid] ?? 0]);
            }
            $pdo->commit();
            $_SESSION['cart'] = [];
            header("Location: /thankyou.php?order_id=".$order_id);
            exit;
        } catch (Exception $e) {
            $pdo->rollBack();
            $error = "Order failed: ".$e->getMessage();
        }
    } else {
        $error = "Please fill all fields.";
    }
}

include __DIR__ . '/header.php';
?>
<h1 class="mb-4">Checkout</h1>
<?php if (!empty($error)): ?>
  <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>
<form method="post" class="card p-3">
  <?php csrf_input(); ?>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Full Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="col-12">
      <label class="form-label">Address</label>
      <textarea name="address" class="form-control" rows="3" required></textarea>
    </div>
  </div>
  <div class="d-flex justify-content-end mt-3">
    <button class="btn btn-primary">Place Order (Demo)</button>
  </div>
</form>
<?php include __DIR__ . '/footer.php'; ?>
