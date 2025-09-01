<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HighLinh Coffee</title>

  <!-- Google Fonts + Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <!-- CSS chính -->
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

  <nav class="hl-navbar">
    <div class="container nav-inner">
      <a class="brand" href="<?= BASE_URL ?>index.php?url=Home/index">
        <img src="<?= BASE_URL ?>public/assets/images/logo.png" alt="HighLinh Coffee">
        <span>HighLinh Coffee</span>
      </a>

      <button class="nav-toggle" aria-label="Mở menu"><i class="fa-solid fa-bars"></i></button>

      <ul class="nav-menu">
        <li><a href="<?= BASE_URL ?>index.php?url=Home/index">Trang chủ</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=Product/list">Sản phẩm</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=Cart/index">Giỏ hàng</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=User/login">Đăng nhập</a></li>
      </ul>

      <a class="btn-primary nav-cta" href="<?= BASE_URL ?>index.php?url=Cart/index">
        <i class="fa-solid fa-bag-shopping"></i> Đặt ngay
      </a>
    </div>
  </nav>
</header>
<header class="site-header">
  <div class="container nav-bar">
    <!-- Logo -->
    <a href="<?= BASE_URL ?>" class="logo">
      <img src="<?= BASE_URL ?>public/assets/images/logo.png" alt="HighLinh Coffee">
    </a>

    <!-- Menu -->
    <nav class="main-nav">
      <ul>
        <li><a href="<?= BASE_URL ?>">Trang chủ</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=Product/list">Menu</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=About/index">Giới thiệu</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=Contact/index">Liên hệ</a></li>
      </ul>
    </nav>
  </div>
</header>


<main>

