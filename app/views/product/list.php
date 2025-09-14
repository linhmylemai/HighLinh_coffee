<?php include __DIR__ . '/../layouts/header.php'; ?>

<section class="section container">
  <div class="section-head">
    <h2>Menu Sản Phẩm</h2>
  </div>

  <div class="grid-products">
    <?php foreach ($products as $p): ?>
      <div class="card-product">
        <div class="card-media">
          <img src="<?= BASE_URL ?>public/assets/images/<?= htmlspecialchars($p['image']) ?>" 
               alt="<?= htmlspecialchars($p['name']) ?>">
          <span class="badge"><?= htmlspecialchars($p['category']) ?></span>
        </div>
        <div class="card-body">
          <h3><?= htmlspecialchars($p['name']) ?></h3>
          <p class="price"><?= number_format($p['price']) ?>đ</p>
          <div class="card-actions">
            <a href="<?= BASE_URL ?>index.php?url=Product/detail/<?= $p['id'] ?>" 
               class="btn-primary">Xem chi tiết</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
