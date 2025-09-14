<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController extends Controller {
    private $productModel;

    public function __construct($db) {
        $this->productModel = new Product($db);
    }

    public function list() {
        // ❌ Sai: $products = $this->productModel->getAllProducts();
        $products = $this->productModel->getAll(); // ✅ gọi đúng hàm
        require_once __DIR__ . '/../views/product/list.php';
    }

    public function detail($id) {
        $product = $this->productModel->getById($id);
        if (!$product) {
            echo "Sản phẩm không tồn tại!";
            return;
        }
        require_once __DIR__ . '/../views/product/detail.php';
    }
}
