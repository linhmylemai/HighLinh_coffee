<?php require __DIR__ . '/layouts/header.php'; ?>

<?php if (!empty($_SESSION['flash'])): ?>
  <div class="alert success text-center py-2">
    <?= htmlspecialchars($_SESSION['flash']) ?>
  </div>
  <?php unset($_SESSION['flash']); ?>
<?php endif; ?>

<!-- ===================== HERO ===================== -->
<section class="hero" role="banner" aria-label="HighLinh Coffee hero">
  <!-- Nếu CSS của bạn hỗ trợ .hero dùng background-image,
       có thể bỏ <img> này đi. Giữ lại để chắc chắn hiển thị. -->
  <img src="<?= BASE_URL ?>public/assets/images/hero.jpg"
       alt="HighLinh Coffee"
       class="hero-img" loading="eager" decoding="async">
  <div class="overlay" aria-hidden="true"></div>
  <div class="hero-caption">
    <h1>ĐẬM VỊ VIỆT <span>CHUẨN GU CÀ PHÊ</span></h1>
    <p>Trải nghiệm Highlands Coffee theo cách của bạn</p>
    <a href="<?= BASE_URL ?>index.php?url=Product/list" class="btn-primary">Khám phá Menu</a>
  </div>
</section>

<!-- ===================== FEATURED PRODUCTS ===================== -->
<section class="section container" aria-labelledby="featured">
  <div class="section-head">
    <h2 id="featured">Sản phẩm nổi bật</h2>
    <a href="<?= BASE_URL ?>index.php?url=Product/list" class="link-more">Xem tất cả</a>
  </div>

  <div class="grid-products">
    <!-- Arabica -->
    <article class="card-product">
      <div class="card-media">
        <img src="<?= BASE_URL ?>public/assets/images/arabica.jpg" alt="Cà phê Arabica" loading="lazy">
        <div class="badge">Mới</div>
      </div>
      <div class="card-body">
        <h3>Cà phê Arabica</h3>
        <span class="price">49.000đ</span>
        <div class="card-actions">
          <a href="<?= BASE_URL ?>index.php?url=Product/detail&id=1" class="btn-outline">Chi tiết</a>
          <a href="<?= BASE_URL ?>index.php?url=Cart/add&id=1" class="btn-primary">Mua ngay</a>
        </div>
      </div>
    </article>

    <!-- Robusta -->
    <article class="card-product">
      <div class="card-media">
        <img src="<?= BASE_URL ?>public/assets/images/robusta.jpg" alt="Cà phê Robusta" loading="lazy">
        <div class="badge">Bán chạy</div>
      </div>
      <div class="card-body">
        <h3>Cà phê Robusta</h3>
        <span class="price">39.000đ</span>
        <div class="card-actions">
          <a href="<?= BASE_URL ?>index.php?url=Product/detail&id=2" class="btn-outline">Chi tiết</a>
          <a href="<?= BASE_URL ?>index.php?url=Cart/add&id=2" class="btn-primary">Mua ngay</a>
        </div>
      </div>
    </article>

    <!-- Combo -->
    <article class="card-product">
      <div class="card-media">
        <img src="<?= BASE_URL ?>public/assets/images/logo.png" alt="Combo đặc biệt" loading="lazy">
        <div class="badge">Ưu đãi</div>
      </div>
      <div class="card-body">
        <h3>Combo đặc biệt</h3>
        <span class="price">99.000đ</span>
        <div class="card-actions">
          <a href="<?= BASE_URL ?>index.php?url=Product/list" class="btn-outline">Chi tiết</a>
          <a href="<?= BASE_URL ?>index.php?url=Cart/add&id=combo" class="btn-primary">Mua ngay</a>
        </div>
      </div>
    </article>
  </div>
</section>

<?php require __DIR__ . '/layouts/footer.php'; ?>
