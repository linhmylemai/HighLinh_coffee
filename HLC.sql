-- Xóa database cũ (nếu có)
DROP DATABASE IF EXISTS highlinhcoffee;
CREATE DATABASE highlinhcoffee CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE highlinhcoffee;

-- ==========================
-- Bảng Categories (Loại sản phẩm)
-- ==========================
CREATE TABLE Categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==========================
-- Bảng Products (Sản phẩm)
-- ==========================
CREATE TABLE Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
    category_id INT,
    image VARCHAR(255), -- thêm cột image
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES Categories(id)
        ON DELETE CASCADE ON UPDATE CASCADE
);

-- ==========================
-- Insert Categories
-- ==========================
INSERT INTO Categories (name, description) VALUES
('Coffee - Pha Phin', 'Các loại cà phê pha phin truyền thống'),
('Coffee - Pha Máy', 'Các loại cà phê pha máy hiện đại'),
('Tea', 'Các loại trà giải khát'),
('Ice Blended', 'Các loại thức uống đá xay');

-- ==========================
-- Bảng Users
-- ==========================
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  username VARCHAR(50) UNIQUE NOT NULL,
  email VARCHAR(150) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (name, username, email, password)
VALUES ('mailin', 'mailin', 'lin@gmail.com', '123');

-- ==========================
-- Insert Products
-- ==========================

-- Coffee - Pha Phin
INSERT INTO Products (name, description, price, stock, category_id, image) VALUES
('Đen Đá', 'Cà phê phin đen đá', 25000, 100, 1, 'den_da.png'),
('Đen Nóng', 'Cà phê phin đen nóng', 25000, 100, 1, 'den_nong.png'),
('Sữa Đá', 'Cà phê phin sữa đá', 29000, 100, 1, 'sua_da.png'),
('Sữa Nóng', 'Cà phê phin sữa nóng', 29000, 100, 1, 'sua_nong.png'),
('Bạc Xỉu Đá', 'Cà phê bạc xỉu đá', 29000, 100, 1, 'bac_xiu_da.png'),
('Bạc Xỉu Nóng', 'Cà phê bạc xỉu nóng', 29000, 100, 1, 'bac_xiu_nong.png');

-- Coffee - Pha Máy
INSERT INTO Products (name, description, price, stock, category_id, image) VALUES
('Espresso Nóng', 'Cà phê espresso nóng', 35000, 100, 2, 'espresso_nong.png'),
('Espresso Đá', 'Cà phê espresso đá', 35000, 100, 2, 'espresso_da.jpg'),
('Latte Nóng', 'Cà phê latte nóng', 45000, 100, 2, 'latte_nong.jpg'),
('Latte Đá', 'Cà phê latte đá', 45000, 100, 2, 'latte_da.jpg'),
('Cappuccino Nóng', 'Cà phê cappuccino nóng', 50000, 100, 2, 'capuccino_nong.jpg'),
('Cappuccino Đá', 'Cà phê cappuccino đá', 50000, 100, 2, 'capuccino_da.jpg');

-- Tea
INSERT INTO Products (name, description, price, stock, category_id, image) VALUES
('Trà Đào Cam Sả', 'Trà đào cam sả mát lạnh', 39000, 100, 3, 'tra_dao_cam_sa.jpg'),
('Trà Tắc Xí Muội', 'Trà tắc xí muội chua ngọt', 35000, 100, 3, 'tra_tac_xi_muoi.jpg'),
('Trà Xanh Thái', 'Trà xanh Thái thơm béo', 35000, 100, 3, 'tra_xanh_thai.jpg'),
('Trà Đào Sữa Đá', 'Trà đào sữa đá', 39000, 100, 3, 'tra_dao_sua.jpg'),
('Trà Hoa Cúc Mật Ong', 'Trà hoa cúc mật ong thanh mát', 39000, 100, 3, 'tra_hoa_cuc.jpg');

-- Ice Blended
INSERT INTO Products (name, description, price, stock, category_id, image) VALUES
('Matcha Đá Xay', 'Thức uống matcha đá xay', 55000, 100, 4, 'matcha.jpg'),
('Cacao Đá Xay', 'Thức uống cacao đá xay', 55000, 100, 4, 'cacao.jpg');
