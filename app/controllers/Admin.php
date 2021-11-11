<?php

class Admin extends Controller{

    private $error = false;

    public function index() 
    {
        if (isset($_SESSION['flash'])) {
            Flasher::flash();
        }

        if ($_SESSION['user']['role_id'] == '1') {
            $_SESSION['product_category'] = $this->model('Product_category_model')->getAllProductCategory();
            $_SESSION['brand'] = $this->model('Brand_model')->getAllBrand();
            $data['product_category'] = $_SESSION['product_category'];
            $data['brand'] = $_SESSION['brand'];
            // var_dump($data['brand']);
            $this->view('templates/header');
            $this->view('admin/index', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header');
            $this->view('home/index');
            $this->view('templates/footer');
        }
        
    }

}