<?php

class Login_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserDetail($data) {
        $query = 'SELECT * FROM tb_user tu
             JOIN tb_role tr ON tu.role_id = tr.role_id
             WHERE user_name = :user_name
             AND user_password = :user_password';
        $this->db->query($query);
        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('user_password', $data['user_password']);
        return $this->db->single();
    }
}