<?php
require_once __DIR__ . '/../core/Database.php';

class Product {
    private PDO $db;
    public function __construct(PDO $db) { $this->db = $db; }

    public function getAll() {
        $sql = "SELECT p.*, c.name AS category 
                FROM Products p
                LEFT JOIN Categories c ON p.category_id = c.id";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     public function getAllProducts() {          // <-- thêm dòng này
        return $this->getAll();                  //     để tương thích tên cũ
    }
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT p.*, c.name AS category 
                                    FROM Products p
                                    LEFT JOIN Categories c ON p.category_id = c.id
                                    WHERE p.id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
