<?php
// ============================
// Database configuration
// ============================
define('DB_HOST', 'localhost');
define('DB_USER', 'root');        // User mặc định của XAMPP
define('DB_PASS', '');            // Mặc định rỗng trong XAMPP
define('DB_NAME', 'HLC');         // Tên database (nhớ import file HLC.sql)

// ============================
// Base URL (đường dẫn gốc dự án)
// ============================
// Nếu chạy tại: http://localhost/CAFE/HighLinh_coffee/
// thì BASE_URL phải như dưới
define('BASE_URL', '/CAFE/HighLinh_coffee/');

// ============================
// Debug settings (chỉ bật khi dev)
// ============================
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'localhost') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
