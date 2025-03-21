<?php
class CategoryController {
    private $categoryModel;

    public function __construct($categoryModel) {
        $this->categoryModel = $categoryModel;
    }

    public function index() {
        $categories = $this->categoryModel->getAllCategories();
        include 'views/category_list.php';
    }
}