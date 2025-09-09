<?php
if (session_status() === PHP_SESSION_NONE) session_start();

require_once __DIR__ . '/../models/User.php';

class UserController {
    private User $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    // ===== Trang mặc định → Home =====
    public function index() {
        header('Location: ' . BASE_URL . 'index.php?url=Home/index');
        exit();
    }

    // ===== Đăng ký =====
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name     = trim($_POST['name'] ?? '');
            $email    = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($name === '' || $email === '' || $password === '') {
                $error = 'Vui lòng nhập đầy đủ thông tin!';
            } else {
                if ($this->userModel->register($name, $email, $password)) {
                    header('Location: ' . BASE_URL . 'index.php?url=User/login');
                    exit();
                } else {
                    $error = 'Đăng ký thất bại. Email đã tồn tại!';
                }
            }
        }
        require_once __DIR__ . '/../views/user/register.php';
    }

    // ===== Đăng nhập =====
    public function login(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $identifier    = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($identifier === '' || $password === '') {
                $error = 'Vui lòng nhập tên đăng nhập và mật khẩu!';
            } else {
                $user = $this->userModel->checkLogin($identifier, $password);

                if ($user) {
                    session_regenerate_id(true); // tăng bảo mật
                    $_SESSION['user'] = [
                        'id'    => $user['id'],
                        'name'  => $user['name'],
                        'email' => $user['email'],
                        'username' => $user['username'] ?? null,
                    ];
                    header('Location: ' . BASE_URL . 'index.php?url=Home/index');
                    exit();
                } else {
                    $error = 'Thông tin đăng nhập không đúng!';
                }
            }
        }
        require_once __DIR__ . '/../views/user/login.php';
    }

    // ===== Đăng xuất =====
    public function logout() {
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }
        session_destroy();

        header('Location: ' . BASE_URL . 'index.php?url=Home/index');
        exit();
    }
}
