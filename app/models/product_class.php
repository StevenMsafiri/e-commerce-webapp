<?php

class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        $query = "SELECT p.*, c.name as category_name
                                 FROM products p
                                 LEFT JOIN categories c ON p.category_id = c.id";
        return $this->db->read($query);
    }

    public function getProductById($id) {
        $query = "SELECT p.*, c.name as category_name
                                     FROM products p
                                     LEFT JOIN categories c ON p.category_id = c.id
                                     WHERE p.id = ?";
        $data = [$id];
        return $this->db->read($query, $data);
    }

    public function getProductsByCategoryId($category_id) {
        $query = "SELECT p.*, c.name as category_name
                                 FROM products p
                                 LEFT JOIN categories c ON p.category_id = c.id
                                 WHERE p.category_id = ?";
        $data = [$category_id];
        return $this->db->read($query, $data);
    }
}