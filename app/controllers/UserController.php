<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once "app/models/User.php";

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    // Đăng ký
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name     = trim($_POST['name']);
            $email    = trim($_POST['email']);
            $password = trim($_POST['password']);

            if (empty($name) || empty($email) || empty($password)) {
                $error = "Vui lòng nhập đầy đủ thông tin!";
            } else {
                if ($this->userModel->register($name, $email, $password)) {
                    header("Location: index.php?url=User/login");
                    exit();
                } else {
                    $error = "Đăng ký thất bại. Email đã tồn tại!";
                }
            }
        }

        require_once "app/views/user/register.php";
    }

    // Đăng nhập
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email    = trim($_POST['email']);
            $password = trim($_POST['password']);

            if (empty($email) || empty($password)) {
                $error = "Vui lòng nhập email và mật khẩu!";
            } else {
                $user = $this->userModel->checkLogin($email, $password);

                if ($user) {
                    $_SESSION['user'] = [
                        'id'    => $user['id'],
                        'name'  => $user['name'],
                        'email' => $user['email']
                    ];
                    header("Location: index.php?url=Home/index");
                    exit();
                } else {
                    $error = "Email hoặc mật khẩu không đúng!";
                }
            }
        }

        require_once "app/views/user/login.php";
    }

    // Đăng xuất
    public function logout() {
        session_destroy();
        header("Location: index.php?url=Home/index");
        exit();
    }
}
