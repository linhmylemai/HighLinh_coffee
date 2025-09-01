</main>

<footer class="hl-footer">
  <div class="container footer-grid">
    <div>
      <h4>Về HighLinh</h4>
      <p>Đậm vị Việt, chuẩn gu cà phê. Chúng tôi mang đến trải nghiệm cà phê chân thật trong không gian hiện đại.</p>
    </div>
    <div>
      <h4>Liên kết</h4>
      <ul>
        <li><a href="<?= BASE_URL ?>index.php?url=Home/index">Trang chủ</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=Product/list">Menu</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=User/login">Thành viên</a></li>
        <li><a href="<?= BASE_URL ?>index.php?url=Cart/index">Giỏ hàng</a></li>
      </ul>
    </div>
    <div>
      <h4>Nhận ưu đãi</h4>
      <form class="newsletter" onsubmit="event.preventDefault(); hlToast('Đã đăng ký nhận ưu đãi!')">
        <input type="email" placeholder="Email của bạn" required>
        <button class="btn-primary" type="submit">Đăng ký</button>
      </form>
      <div class="socials">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    © <?= date('Y') ?> HighLinh Coffee — Enjoy Your Coffee
  </div>
</footer>
</body>
</html>
