<?php

class Brand_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBrand() {
        $this->db->query(
            'SELECT * FROM tb_brand'
        );
        return $this->db->resultSet();
    }

}