<?php
class HomeController extends Controller {
    public function __construct($db = null) {
        // Gọi constructor cha để nhận kết nối DB
        parent::__construct($db);
    }

    public function index() {
        try {
            // Khởi tạo model Product
            $productModel = $this->model("Product");

            // Lấy toàn bộ sản phẩm
            $products = $productModel ? $productModel->getAllProducts() : [];

            // Load view "home" và truyền dữ liệu sang
            $this->view("home", [
                "products" => $products
            ]);

        } catch (Exception $e) {
            // Ghi log lỗi thay vì die() để dễ debug
            error_log("HomeController error: " . $e->getMessage());
            echo "Có lỗi xảy ra khi tải trang chủ!";
        }
    }
}
