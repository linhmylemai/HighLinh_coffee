<?php require __DIR__ . '/../layouts/header.php'; ?>

<section class="auth-wrapper">
  <div class="auth-card">
    <h2>Đăng nhập</h2>

    <?php if (!empty($error)): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" action="<?= BASE_URL ?>index.php?url=User/login" class="auth-form">
        <input type="text" name="name" placeholder="Tên đăng nhập" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
    </form>

    <p class="auth-meta">
      Chưa có tài khoản?
      <a href="<?= BASE_URL ?>index.php?url=User/register">Đăng ký ngay</a>
    </p>
  </div>
</section>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
