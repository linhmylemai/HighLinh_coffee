// Toggle menu trên mobile
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.nav-toggle');
  const menu = document.querySelector('.nav-menu');
  if (btn && menu) {
    btn.addEventListener('click', () => {
      menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
      menu.style.flexDirection = 'column';
      menu.style.gap = '14px';
      menu.style.padding = '12px 0';
    });
  }
});

function hlToast(msg){
  let t = document.querySelector('.hl-toast');
  if(!t){
    t = document.createElement('div');
    t.className = 'hl-toast';
    document.body.appendChild(t);
  }
  t.textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 1800);
}

// giả lập thêm giỏ hàng
function hlAddToCart(id){
  // TODO: gọi AJAX tới CartController/add/id
  hlToast('Đã thêm sản phẩm #' + id + ' vào giỏ hàng');
}
