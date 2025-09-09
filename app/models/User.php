<?php
class User {
    private PDO $db;
    public function __construct(PDO $db) { $this->db = $db; }

    // Đăng nhập bằng USERNAME
    public function checkLoginByUsername(string $username, string $password) {
        $sql = "SELECT id, name, email, username, password FROM users WHERE username = :u LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':u' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            unset($user['password']);
            return $user;
        }
        return false;
    }

    // Đăng nhập bằng EMAIL
    public function checkLoginByEmail(string $email, string $password) {
        $sql = "SELECT id, name, email, username, password FROM users WHERE email = :e LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':e' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            unset($user['password']);
            return $user;
        }
        return false;
    }

    // Tương thích ngược: cho phép truyền username **hoặc** email
    public function checkLogin(string $identifier, string $password) {
        if (strpos($identifier, '@') !== false) {
            return $this->checkLoginByEmail($identifier, $password);
        }
        return $this->checkLoginByUsername($identifier, $password);
    }
}
