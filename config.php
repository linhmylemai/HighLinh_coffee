<?php
// ============================
// Database configuration
// ============================
if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_USER')) define('DB_USER', 'root');   // XAMPP mặc định
if (!defined('DB_PASS')) define('DB_PASS', '');       // XAMPP mặc định rỗng
if (!defined('DB_NAME')) define('DB_NAME', 'HLC');    // Nhớ import file HLC.sql

// ============================
// Base URL
// Nếu chạy tại: http://localhost/CAFE/HighLinh_coffee/
// ============================
if (!defined('BASE_URL')) define('BASE_URL', '/CAFE/HighLinh_coffee/');

// ============================
// Debug (bật khi dev)
// ============================
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'localhost') {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(0);
}

// Không cần đóng tag PHP để tránh rò ký tự ngoài ý muốn.
