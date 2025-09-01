<?php
require_once __DIR__ . '/Database.php';  // thêm dòng này

class Product extends Database {
    public function __construct() {
        parent::__construct();  // gọi constructor Database
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
