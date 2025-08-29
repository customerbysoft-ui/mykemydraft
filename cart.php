<?php
require __DIR__ . '/config.php';

// Update quantities / remove items
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_check();
    if (isset($_POST['update'])) {
        foreach (($_POST['qty'] ?? []) as $pid => $qty) {
            $pid = (int)$pid;
            $qty = max(0, (int)$qty);
            if ($qty === 0) { unset($_SESSION['cart'][$pid]); }
            else { $_SESSION['cart'][$pid] = $qty; }
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['cart'] = [];
    }
    header('Location: cart.php');
    exit;
}

// Build cart items
$cart = $_SESSION['cart'] ?? [];
$items = [];
$total = 0;
if ($cart) {
    $ids = implode(',', array_map('intval', array_keys($cart)));
    $stmt = $pdo->query("SELECT id, name, price, image FROM products WHERE id IN ($ids)");
    $rows = $stmt->fetchAll();
    foreach ($rows as $r) {
        $qty = (int)($cart[$r['id']] ?? 0);
        $subtotal = $qty * (float)$r['price'];
        $items[] = ['id'=>$r['id'],'name'=>$r['name'],'price'=>$r['price'],'image'=>$r['image'],'qty'=>$qty,'subtotal'=>$subtotal];
        $total += $subtotal;
    }
}

include __DIR__ . '/header.php';
?>
<h1 class="mb-4">Your Cart</h1>
<?php if (!$items): ?>
  <div class="alert alert-warning">Cart is empty. <a href="/index.php">Go shopping</a>.</div>
<?php else: ?>
<form method="post" class="card p-3">
  <?php csrf_input(); ?>
  <div class="table-responsive">
    <table class="table table-dark align-middle">
      <thead><tr><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th></tr></thead>
      <tbody>
        <?php foreach ($items as $it): ?>
        <tr>
          <td>
            <div class="d-flex align-items-center gap-2">
              <img src="<?php echo htmlspecialchars($it['image'] ?: '/assets/placeholder.png'); ?>" alt="" style="width:50px;height:50px;object-fit:cover;border-radius:6px;">
              <span><?php echo htmlspecialchars($it['name']); ?></span>
            </div>
          </td>
          <td>₹<?php echo number_format((float)$it['price'], 2); ?></td>
          <td style="max-width:100px"><input type="number" name="qty[<?php echo (int)$it['id']; ?>]" class="form-control form-control-sm" value="<?php echo (int)$it['qty']; ?>" min="0"></td>
          <td>₹<?php echo number_format((float)$it['subtotal'], 2); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr><th colspan="3" class="text-end">Total</th><th>₹<?php echo number_format((float)$total, 2); ?></th></tr>
      </tfoot>
    </table>
  </div>
  <div class="d-flex justify-content-between">
    <button class="btn btn-outline-light" name="update">Update Cart</button>
    <div>
      <button class="btn btn-outline-light me-2" name="clear">Clear</button>
      <a class="btn btn-primary" href="/checkout.php">Proceed to Checkout</a>
    </div>
  </div>
</form>
<?php endif; ?>
<?php include __DIR__ . '/footer.php'; ?>
