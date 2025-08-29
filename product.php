<?php
require __DIR__ . '/config.php';
$id = (int)($_GET['id'] ?? 0);

$stmt = $pdo->prepare("SELECT id, name, description, price, image FROM products WHERE id=?");
$stmt->execute([$id]);
$p = $stmt->fetch();

if (!$p) {
    header('HTTP/1.0 404 Not Found');
    echo "Product not found";
    exit;
}

include __DIR__ . '/header.php';
?>
<div class="row g-4">
  <div class="col-md-5">
    <img class="w-100 product-img" style="height:auto" src="<?php echo htmlspecialchars($p['image'] ?: '/assets/placeholder.png'); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
  </div>
  <div class="col-md-7">
    <h1><?php echo htmlspecialchars($p['name']); ?></h1>
    <p class="text-secondary"><?php echo nl2br(htmlspecialchars($p['description'])); ?></p>
    <p class="h4">₹<?php echo number_format((float)$p['price'], 2); ?></p>
    <form method="post" action="/index.php">
      <?php csrf_input(); ?>
      <input type="hidden" name="product_id" value="<?php echo (int)$p['id']; ?>">
      <button class="btn btn-primary" name="add_to_cart">Add to Cart</button>
    </form>
  </div>
</div>
<?php include __DIR__ . '/footer.php'; ?>
