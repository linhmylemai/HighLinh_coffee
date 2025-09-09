<?php
declare(strict_types=1);

// Từ app/models/ -> quay về gốc dự án rồi vào config/config.php
require_once __DIR__ . '/../../config/config.php';

class Database {
    protected PDO $conn;

    public function __construct() {
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', DB_HOST, DB_NAME);
        try {
            $this->conn = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            exit('Lỗi kết nối DB: ' . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->conn;
    }
}
