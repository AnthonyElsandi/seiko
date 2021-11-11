<?php

class Keranjang_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllItem() {
        $id = $_SESSION['user']['user_id'];
        $this->db->query(
            'SELECT * FROM tb_keranjang WHERE user_id = :user_id'
        );
        return $this->db->resultSet();
    }

}