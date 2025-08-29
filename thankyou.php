<?php
require __DIR__ . '/config.php';
include __DIR__ . '/header.php';
$order_id = (int)($_GET['order_id'] ?? 0);
?>
<div class="text-center py-5">
  <h1>Thank you!</h1>
  <p>Your order #<?php echo $order_id; ?> has been placed.</p>
  <a class="btn btn-outline-light" href="/index.php">Continue Shopping</a>
</div>
<?php include __DIR__ . '/footer.php'; ?>
