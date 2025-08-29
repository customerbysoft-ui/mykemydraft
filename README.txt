<?php
require __DIR__ . '/config.php';

// Handle Add to Cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    csrf_check();
    $pid = (int)($_POST['product_id'] ?? 0);
    if ($pid > 0) {
        $_SESSION['cart'][$pid] = ($_SESSION['cart'][$pid] ?? 0) + 1;
        header('Location: cart.php');
        exit;
    }
}

// Fetch products
$stmt = $pdo->query("SELECT id, name, description, price, image FROM products ORDER BY id DESC");
$products = $stmt->fetchAll();

include __DIR__ . '/header.php';
?>
<h1 class="mb-4">Welcome to Bysoft Shop</h1>
<div class="row g-4">
<?php foreach ($products as $p): ?>
  <div class="col-12 col-sm-6 col-lg-3">
    <div class="card h-100 p-3">
      <img class="product-img mb-3" src="<?php echo htmlspecialchars($p['image'] ?: '/assets/placeholder.png'); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
      <h5 class="mb-1"><?php echo htmlspecialchars($p['name']); ?></h5>
      <p class="small text-secondary"><?php echo htmlspecialchars($p['description']); ?></p>
      <div class="d-flex justify-content-between align-items-center">
        <span class="price">₹<?php echo number_format((float)$p['price'], 2); ?></span>
        <form method="post">
          <?php csrf_input(); ?>
          <input type="hidden" name="product_id" value="<?php echo (int)$p['id']; ?>">
          <button class="btn btn-sm btn-primary" name="add_to_cart">Add to Cart</button>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?php if (empty($products)): ?>
  <div class="col-12">
    <div class="alert alert-info">No products yet. Login to Admin and add some!</div>
  </div>
<?php endif; ?>
</div>
<?php include __DIR__ . '/footer.php'; ?>
