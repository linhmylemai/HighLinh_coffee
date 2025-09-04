<?php
require_once __DIR__ . '/../core/Database.php';

class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        try {
            $sql = "SELECT * FROM Products";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Nếu query lỗi thì throw ra cho controller xử lý
            throw new Exception("Lỗi truy vấn Product: " . $e->getMessage());
        }
    }
}
