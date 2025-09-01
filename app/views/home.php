<?php include "./app/views/layouts/header.php"; ?>

<section class="hero">
  <img src="<?= BASE_URL ?>public/assets/images/hero.jpg" alt="HighLinh Banner">
  <div class="hero-caption container">
    <h1>Chào mừng đến với <span>HighLinh Coffee</span></h1>
    <p>Gu cà phê mạnh mẽ – Không gian hiện đại.</p>
    <a class="btn-primary" href="<?= BASE_URL ?>index.php?url=Product/list">
      Khám phá menu <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</section>

<section class="container section">
  <div class="section-head">
    <h2>Sản phẩm nổi bật</h2>
    <a class="link-more" href="<?= BASE_URL ?>index.php?url=Product/list">Xem tất cả</a>
  </div>

  <div class="grid-products">
    <?php foreach($data["products"] as $p): ?>
      <article class="card-product">
        <div class="card-media">
          <img src="<?= BASE_URL ?>public/assets/images/<?= htmlspecialchars($p['image'] ?? 'arabica.jpg') ?>"
               alt="<?= htmlspecialchars($p['name']) ?>">
          <span class="badge">HOT</span>
        </div>
        <div class="card-body">
          <h3><?= htmlspecialchars($p['name']) ?></h3>
          <p class="price"><?= number_format($p['price'], 0, ',', '.') ?> VNĐ</p>
          <div class="card-actions">
            <a class="btn-outline" href="<?= BASE_URL ?>index.php?url=Product/detail/<?= $p['id'] ?>">Xem chi tiết</a>
            <button class="btn-primary" onclick="hlAddToCart(<?= (int)$p['id'] ?>)">Thêm</button>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="container section promo">
  <div class="promo-card">
    <h3>Thành viên HighLinh</h3>
    <p>Tích điểm mỗi ngày – đổi ly miễn phí, nhận ưu đãi riêng.</p>
    <a class="btn-light" href="<?= BASE_URL ?>index.php?url=User/register">Tham gia ngay</a>
  </div>
</section>

<?php include "./app/views/layouts/footer.php"; ?>
