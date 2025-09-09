<?php
declare(strict_types=1);

// Chỉ dùng session khi chạy qua web
if (PHP_SAPI !== 'cli') {
    session_start();
}

/** ========= Đường dẫn cơ bản ========= */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', __DIR__);
define('APP_PATH', ROOT_PATH . DS . 'app');
define('VIEW_PATH', APP_PATH . DS . 'views');

/** ========= Nạp file cấu hình =========
 * Ưu tiên: /config/config.php
 * Fallback: /config.php (gốc dự án) — phù hợp với hiện trạng của bạn
 */
$configCandidates = [
    ROOT_PATH . DS . 'config' . DS . 'config.php', // chuẩn thư mục
    ROOT_PATH . DS . 'config.php',                 // file ở gốc (bạn đang dùng)
];

$configPath = null;
foreach ($configCandidates as $p) {
    if (is_file($p)) { $configPath = realpath($p); break; }
}

if (!$configPath) {
    http_response_code(500);
    exit(
        'Không tìm thấy file cấu hình. Hãy tạo một trong hai:' .
        '<br>- ' . htmlspecialchars($configCandidates[0]) .
        '<br>- ' . htmlspecialchars($configCandidates[1])
    );
}
require_once $configPath;

/** ========= Nạp Core bắt buộc ========= */
$coreFiles = [
    APP_PATH . DS . 'core' . DS . 'App.php',
    APP_PATH . DS . 'core' . DS . 'Controller.php',
];
foreach ($coreFiles as $file) {
    if (!is_file($file)) {
        http_response_code(500);
        exit('Thiếu core file: ' . htmlspecialchars($file));
    }
    require_once $file;
}

/** ========= Autoload Controller / Model / Core ========= */
spl_autoload_register(function (string $class): void {
    $base = APP_PATH . DS;
    $candidates = [
        $base . 'controllers' . DS . $class . '.php',
        $base . 'models'      . DS . $class . '.php',
        $base . 'core'        . DS . $class . '.php',
    ];
    foreach ($candidates as $path) {
        if (is_file($path)) {
            require_once $path;
            return;
        }
    }
});

/** ========= Khởi chạy ứng dụng ========= */
try {
    $app = new App();
} catch (Throwable $e) {
    if (error_reporting() !== 0) { // debug bật trong config.php
        echo '<h1>Application Error</h1>';
        echo '<pre>' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "</pre>";
    } else {
        http_response_code(500);
        echo 'Internal Server Error';
    }
}

// *Không đóng tag PHP để tránh chèn ký tự/HTML ngoài ý muốn*
