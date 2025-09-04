<?php
if (session_status() === PHP_SESSION_NONE) session_start();

// Chỉnh BASE_URL đúng gốc project của bạn
if (!defined('BASE_URL')) define('BASE_URL', '/CAFE/HighLinh_coffee/');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HighLinh Coffee</title>

  <!-- Google Fonts + Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <!-- CSS -->
  <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/style.css">
  <!-- JS -->
  <script defer src="<?= BASE_URL ?>public/assets/js/main.js"></script>
</head>
<body>
<header class="hl-header">
  <!-- Top bar -->
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

  <!-- Navbar -->
  <nav class="hl-navbar" role="navigation" aria-label="Main navigation">
    <div class="container nav-inner">
      <!-- Logo -->
      <a class="brand" href="<?= BASE_URL ?>index.php?url=Home/index" aria-label="Trang chủ HighLinh Coffee">
        <img src="<?= BASE_URL ?>public/assets/images/logo.png" alt="HighLinh Coffee" style="height:50px; vertical-align:middle;" />
        <span>HighLinh Coffee</span>
      </a>

      <!-- Toggle (mobile) -->
      <button class="nav-toggle" aria-label="Mở menu"><i class="fa-solid fa-bars"></i></button>

      <!-- Menu trái: KHÔNG để nút Đăng nhập ở đây -->
      <ul class="nav-menu" role="menubar">
        <li role="none"><a href="<?= BASE_URL ?>index.php?url=Home/index" role="menuitem">Trang chủ</a></li>
        <li role="none"><a href="<?= BASE_URL ?>index.php?url=Product/list" role="menuitem">Sản phẩm</a></li>
        <?php if (!empty($_SESSION['user'])): ?>
          <li role="none"><a href="<?= BASE_URL ?>index.php?url=Cart/index" role="menuitem">Giỏ hàng</a></li>
        <?php endif; ?>
      </ul>

      <!-- Nút góc phải: chỉ 1 nút duy nhất -->
      <div class="login-right">
        <?php if (!empty($_SESSION['user'])): ?>
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

<main id="content" role="main">
