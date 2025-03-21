<?php

class Category {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllCategories() {
        $query = "SELECT * FROM categories";
        return $this->db->read($query);
    }

     public function getCategoryById($id) {
        $query = "SELECT * FROM categories WHERE id = ?";
        $data = [$id];
        return $this->db->read($query, $data);
    }
}
