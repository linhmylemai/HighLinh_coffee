<?php
// Nạp file cấu hình DB
require_once __DIR__ . '/../../config.php';

class Database {
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
                DB_USER,
                DB_PASS
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối DB: " . $e->getMessage());
        }
    }

    // Phương thức để lấy kết nối PDO
    public function getConnection() {
        return $this->conn;
    }
}