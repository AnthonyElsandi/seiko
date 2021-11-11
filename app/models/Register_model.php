<?php

class Register_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function registerAccount($data) {
        $query = "INSERT INTO tb_user VALUES('', 2, :user_name, :user_email, :user_password)";

        $this->db->query($query);
        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('user_email', $data['user_email']);
        $this->db->bind('user_password', $data['user_password']);
        $this->db->execute();

        return $this->db->rowAfeccted();
    }
}