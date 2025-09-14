<?php
if (session_status() === PHP_SESSION_NONE) session_start();
if (!defined('BASE_URL')) define('BASE_URL', '/HighLinh_Coffee/');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HighLinh Coffee</title>

  <!-- Fonts + Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <!-- CSS -->
  <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/style.css">
  <!-- JS -->
  <script defer src="<?= BASE_URL ?>public/assets/js/main.js"></script>
</head>
<body>

<header class="hl-header">
  <div class="hl-topbar">
    <div class="container">
      <span><i class="fa-solid fa-mug-hot"></i> HighLinh Coffee – Since 2025</span>
      <span class="topbar-right">
        <i class="fa-solid fa-location-dot"></i> Hồ Chí Minh
        <span class="dot"></span>
        <i class="fa-solid fa-phone"></i> 1900 1234
      </span>
    </div>
  </div>

  <nav class="hl-navbar" role="navigation">
    <div class="container nav-inner">
      <a class="brand" href="<?= BASE_URL ?>index.php?url=Home/index">
        <img src="<?= BASE_URL ?>public/images/logo.png" alt="HighLinh Coffee" style="height:50px;" />
        <span>HighLinh Coffee</span>
      </a>

      <ul class="nav-menu">
        <li><a href="<?= BASE_URL ?>index.php?url=Home/index">Trang chủ</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=Product/list">Sản phẩm</a></li>
        <?php if (!empty($_SESSION['user'])): ?>
          <li><a href="<?= BASE_URL ?>index.php?url=Cart/index">Giỏ hàng</a></li>
          <li><a href="<?= BASE_URL ?>index.php?url=Product/list">Menu</a></li>
        <?php endif; ?>
      </ul>

      <div class="login-right">
        <?php if (!empty($_SESSION['user'])): ?>
          <span class="hello">Xin chào, <?= htmlspecialchars($_SESSION['user']['name']) ?></span>
          <a class="login-link" href="<?= BASE_URL ?>index.php?url=User/logout">
            <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất
          </a>
        <?php else: ?>
          <a class="login-link" href="<?= BASE_URL ?>index.php?url=User/login">
            <i class="fa-solid fa-right-to-bracket"></i> Đăng nhập
          </a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
</header>

<main id="content">
