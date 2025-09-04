<?php include __DIR__ . "/../layouts/header.php"; ?>

<section class="auth-section container">
  <div class="auth-box">
    <h2>Đăng nhập</h2>
    <p>Bạn chưa có tài khoản? <a href="<?= BASE_URL ?>index.php?url=User/register">Đăng ký ngay</a></p>

    <form action="<?= BASE_URL ?>index.php?url=User/doLogin" method="post" class="auth-form">
      <div class="form-group">
        <label for="username">Tên đăng nhập / Email <span class="required">*</span></label>
        <input type="text" id="username" name="username" placeholder="Nhập tên hoặc email" required>
      </div>

      <div class="form-group">
        <label for="password">Mật khẩu <span class="required">*</span></label>
        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
      </div>

      <button type="submit" class="btn-primary full-width">Đăng nhập</button>
    </form>
  </div>
</section>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
