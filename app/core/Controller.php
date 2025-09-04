<?php
class Controller {
    protected $db;

    public function __construct($db = null) {
        $this->db = $db;
    }

    public function model($model) {
        $file = __DIR__ . "/../models/" . $model . ".php";
        if (file_exists($file)) {
            require_once $file;
            return new $model($this->db);
        } else {
            throw new Exception("Model không tồn tại: " . $model);
        }
    }

    public function view($view, $data = []) {
        $file = __DIR__ . "/../views/" . $view . ".php";
        if (file_exists($file)) {
            // biến $data sẽ được extract để dùng trong view
            extract($data);
            require $file;
        } else {
            throw new Exception("View không tồn tại: " . $view);
        }
    }
}
