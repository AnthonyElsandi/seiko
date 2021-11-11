<?php

class Product_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct() {
        $this->db->query(
            'SELECT * FROM tb_product tp
            JOIN tb_product_category tpc ON tp.product_category_id = tpc.product_category_id
            JOIN tb_brand tb ON tp.brand_id = tb.brand_id'
        );
        return $this->db->resultSet();
    }

    public function insertProduct($data) {
        $query = 
        "INSERT INTO tb_product VALUES('', :product_name, :product_price, :product_desc, :product_availability, :product_photo_url, :product_category_id, :brand_id)";

        $this->db->query($query);
        $this->db->bind('product_name', $data['product_name']);
        $this->db->bind('product_price', $data['product_price']);
        $this->db->bind('product_desc', $data['product_desc']);
        $this->db->bind('product_availability', '');
        $this->db->bind('product_photo_url', $data['product_photo_url']);
        $this->db->bind('product_category_id', $data['product_category_id']);
        $this->db->bind('brand_id', $data['brand_id']);

        $this->db->execute();
        // var_dump($data['tmp_name']);
        move_uploaded_file($data['tmp_name'], 'D:/XAMPP/htdocs/seiko/public/images/'.$data['product_photo_url']);

        return $this->db->rowAfeccted();
    }

    public function updateProduct($data) {
        $query = 
        "UPDATE tb_product
         SET product_name = :product_name,
         product_price = :product_price,
         product_desc = :product_desc,
         product_availability = :product_availability,
         product_photo_url = :product_photo_url,
         product_category_id = :product_category_id,
         brand_id = :brand_id
         WHERE product_id = :product_id";

        $this->db->query($query);
        $this->db->bind('product_name', $data['product_name']);
        $this->db->bind('product_price', $data['product_price']);
        $this->db->bind('product_desc', $data['product_desc']);
        $this->db->bind('product_availability', '');
        $this->db->bind('product_photo_url', $data['product_photo_url']);
        $this->db->bind('product_category_id', $data['product_category_id']);
        $this->db->bind('brand_id', $data['brand_id']);
        $this->db->bind('product_id', $data['product_id']);

        $this->db->execute();
        // var_dump($data);
        move_uploaded_file($data['tmp_name'], 'D:/XAMPP/htdocs/seiko/public/images/'.$data['product_photo_url']);

        return $this->db->rowAfeccted();
    }

    public function getDetailProduct($id) {
        $this->db->query(
            'SELECT * FROM tb_product tp INNER JOIN tb_product_category tpc
            ON tp.product_category_id = tpc.product_category_id WHERE tp.product_id =:id'
        );
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}