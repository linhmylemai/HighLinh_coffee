<?php include __DIR__ . "/layouts/header.php"; ?>

<!-- Hero Section -->
<section class="hero">
  <img src="<?= BASE_URL ?>public/assets/images/banner.png" alt="HighLinh Banner">
  <div class="overlay"></div>
  <div class="hero-caption container">
    <h1>Chào mừng đến với <span>HighLinh Coffee</span></h1>
    <p>Gu cà phê mạnh mẽ – Không gian hiện đại.</p>
    <a class="btn-primary" href="<?= BASE_URL ?>index.php?url=Product/list">
      Khám phá menu <i class="fa-solid fa-arrow-right"></i>
    </a>
    <!-- Thêm nút đăng nhập -->
    <a href="#" class="btn-light" id="openLogin">Đăng nhập</a>
  </div>
</section>

<!-- Product Section -->
<section class="container section">
  <div class="section-head">
    <h2>Sản phẩm nổi bật</h2>
    <a class="link-more" href="<?= BASE_URL ?>index.php?url=Product/list">Xem tất cả</a>
  </div>

  <div class="grid-products">
    <?php if (!empty($products) && is_array($products)): ?>
      <?php foreach ($products as $p): ?>
        <article class="card-product">
          <div class="card-media">
            <img src="<?= BASE_URL ?>public/assets/images/<?= htmlspecialchars($p['image'] ?? 'arabica.jpg') ?>"
                 alt="<?= htmlspecialchars($p['name'] ?? 'Sản phẩm') ?>">
            <span class="badge">HOT</span>
          </div>
          <div class="card-body">
            <h3><?= htmlspecialchars($p['name'] ?? 'Tên sản phẩm') ?></h3>
            <p class="price"><?= number_format($p['price'] ?? 0, 0, ',', '.') ?> VNĐ</p>
            <div class="card-actions">
              <a class="btn-outline" href="<?= BASE_URL ?>index.php?url=Product/detail/<?= (int)($p['id'] ?? 0) ?>">Xem chi tiết</a>
              <button class="btn-primary" onclick="hlAddToCart(<?= (int)($p['id'] ?? 0) ?>)">Thêm</button>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    <?php else: ?>
      <p>Không có sản phẩm nào để hiển thị.</p>
    <?php endif; ?>
  </div>
</section>

<!-- Promo Section -->
<section class="container section promo">
  <div class="promo-card">
    <h3>Thành viên HighLinh</h3>
    <p>Tích điểm mỗi ngày – đổi ly miễn phí, nhận ưu đãi riêng.</p>
    <a class="btn-light" href="<?= BASE_URL ?>index.php?url=User/register">Tham gia ngay</a>
  </div>
</section>

<!-- Popup Login Form -->
<div class="overlay" id="loginOverlay" style="display:none;">
  <div class="auth-card">
    <span class="close-btn" id="closeLogin">&times;</span>
    <h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
    <p>Bạn chưa có tài khoản? <a href="<?= BASE_URL ?>index.php?url=User/register">Đăng ký tại đây</a></p>

    <form method="POST" action="<?= BASE_URL ?>index.php?url=User/login">
      <label>Email *</label>
      <input type="email" name="email" placeholder="Email" required>

      <label>Mật khẩu *</label>
      <input type="password" name="password" placeholder="Mật khẩu" required>

      <p><a href="#">Quên mật khẩu?</a></p>

      <button type="submit">Đăng nhập</button>
    </form>

    <div class="social-login">
      <p>Hoặc đăng nhập bằng</p>
      <div class="social-buttons">
        <a href="#" class="btn fb">Facebook</a>
        <a href="#" class="btn gg">Google</a>
      </div>
    </div>
  </div>
</div>

<script>
  // JS mở/đóng popup login
  document.getElementById("openLogin").onclick = function(e) {
    e.preventDefault();
    document.getElementById("loginOverlay").style.display = "flex";
  };
  document.getElementById("closeLogin").onclick = function() {
    document.getElementById("loginOverlay").style.display = "none";
  };
  window.onclick = function(e) {
    let overlay = document.getElementById("loginOverlay");
    if (e.target === overlay) overlay.style.display = "none";
  };
</script>

<?php include __DIR__ . "/layouts/footer.php"; ?>
