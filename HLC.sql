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
-- Insert Products
-- ==========================

-- Coffee - Pha Phin
INSERT INTO Products (name, description, price, stock, category_id) VALUES
('Đen Đá', 'Cà phê phin đen đá', 25000, 100, 1),
('Đen Nóng', 'Cà phê phin đen nóng', 25000, 100, 1),
('Sữa Đá', 'Cà phê phin sữa đá', 29000, 100, 1),
('Sữa Nóng', 'Cà phê phin sữa nóng', 29000, 100, 1),
('Bạc Xỉu Đá', 'Cà phê bạc xỉu đá', 29000, 100, 1),
('Bạc Xỉu Nóng', 'Cà phê bạc xỉu nóng', 29000, 100, 1);

-- Coffee - Pha Máy
INSERT INTO Products (name, description, price, stock, category_id) VALUES
('Espresso Nóng', 'Cà phê espresso nóng', 35000, 100, 2),
('Espresso Đá', 'Cà phê espresso đá', 35000, 100, 2),
('Latte Nóng', 'Cà phê latte nóng', 45000, 100, 2),
('Latte Đá', 'Cà phê latte đá', 45000, 100, 2),
('Cappuccino Nóng', 'Cà phê cappuccino nóng', 50000, 100, 2),
('Cappuccino Đá', 'Cà phê cappuccino đá', 50000, 100, 2);

-- Tea
INSERT INTO Products (name, description, price, stock, category_id) VALUES
('Trà Đào Cam Sả', 'Trà đào cam sả mát lạnh', 39000, 100, 3),
('Trà Tắc Xí Muội', 'Trà tắc xí muội chua ngọt', 35000, 100, 3),
('Trà Xanh Thái', 'Trà xanh Thái thơm béo', 35000, 100, 3),
('Trà Đào Sữa Đá', 'Trà đào sữa đá', 39000, 100, 3),
('Trà Hoa Cúc Mật Ong', 'Trà hoa cúc mật ong thanh mát', 39000, 100, 3);

-- Ice Blended
INSERT INTO Products (name, description, price, stock, category_id) VALUES
('Matcha Đá Xay', 'Thức uống matcha đá xay', 55000, 100, 4),
('Cacao Đá Xay', 'Thức uống cacao đá xay', 55000, 100, 4);
