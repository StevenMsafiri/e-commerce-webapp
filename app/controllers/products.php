<?php

class ProductController extends Controller {
    private $productModel;
    private $categoryModel;

    public function __construct($productModel, $categoryModel) {
        $this->productModel = new productModel;
        $this->categoryModel = new categoryModel;
    }

    public function index() {
        $products = $this->productModel->getAllProducts();
        $categories = $this->categoryModel->getAllCategories();
        include 'views/product_list.php';
    }

    public function show($id) {
        $product = $this->productModel->getProductById($id);
        if ($product) {
            include 'views/product_detail.php';
        } else {
           
            echo "Product not found."; 
        }
    }

    public function listByCategory($category_id) {
        $category = $this->categoryModel->getCategoryById($category_id);
        $products = $this->productModel->getProductsByCategoryId($category_id);
        $categories = $this->categoryModel->getAllCategories();
        if ($products) {
            include 'views/product_list.php';
        } else {
            echo "No products found in this category.";
        }
    }
}