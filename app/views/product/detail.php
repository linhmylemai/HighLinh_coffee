<?php include __DIR__ . '/../layouts/header.php'; ?>

<section class="section container">
  <div class="card-product">
    <div class="card-media">
      <img src="<?= BASE_URL ?>public/assets/images/<?= $product['id'] ?>.jpg" 
           alt="<?= htmlspecialchars($product['name']) ?>">
    </div>
    <div class="card-body">
      <h2><?= htmlspecialchars($product['name']) ?></h2>
      <p><strong>Danh mục:</strong> <?= htmlspecialchars($product['category']) ?></p>
      <p><?= nl2br(htmlspecialchars($product['description'])) ?></p>
      <p class="price"><?= number_format($product['price']) ?>đ</p>
      <div class="card-actions">
        <a href="<?= BASE_URL ?>index.php?url=Cart/add/<?= $product['id'] ?>" class="btn-primary">
          Thêm vào giỏ
        </a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
