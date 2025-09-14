<?php
class User {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Đăng ký user mới
    public function register(string $name, string $email, string $password): bool {
        // Hash password để bảo mật
        $hashed = password_hash($password, PASSWORD_BCRYPT);

        try {
            $sql = "INSERT INTO users (name, email, password, created_at) 
                    VALUES (:name, :email, :password, NOW())";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([
                ':name'     => $name,
                ':email'    => $email,
                ':password' => $hashed
            ]);
        } catch (PDOException $e) {
            // Ví dụ: duplicate email
            return false;
        }
    }

    // Đăng nhập bằng NAME
    public function checkLoginByName(string $name, string $password) {
        $sql = "SELECT id, name, email, password 
                FROM users 
                WHERE name = :n 
                LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':n' => $name]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            unset($user['password']); // Không trả mật khẩu ra ngoài
            return $user;
        }
        return false;
    }
}
