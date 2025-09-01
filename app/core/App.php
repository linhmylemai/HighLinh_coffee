<?php
class App {
    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Controller
        if (isset($url[0]) && file_exists("./app/controllers/" . $url[0] . "Controller.php")) {
            $this->controller = $url[0] . "Controller";
            unset($url[0]);
        }
        require_once "./app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // Action
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->action = $url[1];
            unset($url[1]);
        }

        // Params
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/"), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
