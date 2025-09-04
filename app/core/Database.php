<?php
class Database {
    private static $instance = null;

    public static function getConnection() {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO(
                    "mysql:host=localhost;dbname=highlinhcoffee;charset=utf8mb4", // ✅ đúng tên DB
                    "root", // user
                    ""      // password
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Kết nối CSDL thất bại: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
