<?php include __DIR__ . "/../layouts/header.php"; ?>

<section class="auth-section container">
  <div class="auth-box">
    <h2>Đăng ký</h2>
    <p>Bạn đã có tài khoản? <a href="<?= BASE_URL ?>index.php?url=User/login">Đăng nhập ngay</a></p>

    <form action="<?= BASE_URL ?>index.php?url=User/doRegister" method="post" class="auth-form">
      <div class="form-group">
        <label for="fullname">Họ và tên <span class="required">*</span></label>
        <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên" required>
      </div>

      <div class="form-group">
        <label for="email">Email <span class="required">*</span></label>
        <input type="email" id="email" name="email" placeholder="Nhập email" required>
      </div>

      <div class="form-group">
        <label for="phone">Số điện thoại <span class="required">*</span></label>
        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
      </div>

      <div class="form-group">
        <label for="password">Mật khẩu <span class="required">*</span></label>
        <input type="password" id="password" name="password" placeholder="Tạo mật khẩu" required>
      </div>

      <button type="submit" class="btn-primary full-width">Đăng ký</button>
    </form>
  </div>
</section>

<?php include __DIR__ . "/../layouts/footer.php"; ?>
