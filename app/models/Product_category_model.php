<?php

class Product_category_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProductCategory() {
        $this->db->query(
            'SELECT * FROM tb_product_category'
        );
        return $this->db->resultSet();
    }

}