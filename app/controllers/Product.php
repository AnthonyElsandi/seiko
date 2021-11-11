<?php

class Product extends Controller{

    public function index() 
    {
        $data['product'] = $this->model('Product_model')->getAllProduct();
        $data['product_category'] = $this->model('Product_category_model')->getAllProductCategory();
        $data['brand'] = $this->model('Brand_model')->getAllBrand();
        $this->view('templates/header');
        $this->view('product/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data = $this->model('Product_model')->getDetailProduct($id);
        $this->view('templates/header');
        $this->view('product/detail', $data);
        $this->view('templates/footer');
    }

    public function addProduct() 
    {
        if ($_SESSION['user']['role_id'] == '1') {
            // var_dump($_POST);
            // var_dump($_FILES);
            $namaFile = $_FILES['product_photo_url']['name'];
            $ukuranFile = $_FILES['product_photo_url']['size'];
            $errorFile = $_FILES['product_photo_url']['error'];
            $tmpName = $_FILES['product_photo_url']['tmp_name'];
            
            //cek apakah upload error
            if ($errorFile == 4) {
                
                Flasher::setFlash('Foto belum di upload');
                header('Location: ' . BASEURL . '/admin');
                exit;
            }

            //cek ekstensi file
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));

            if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
                Flasher::setFlash('File yang diupload bukan gambar');
                header('Location: ' . BASEURL . '/admin');
                exit;
            }

            //cek ukuran gambar
            if ($ukuranFile > 3000000) {
                Flasher::setFlash('Ukuran gambar terlalu besar');
                header('Location: ' . BASEURL . '/admin');
                exit;
            }

            $data = $_POST;
            $data['product_photo_url'] = $namaFile;
            $data['tmp_name'] = $tmpName;

            if ($this->model('Product_model')->insertProduct($data) > 0) {
                Flasher::setFlash('berhasil ditambahkan');
                header('Location: ' . BASEURL . '/admin', true);
                exit;
            } else {
                Flasher::setFlash('gagal ditambahkan');
                header('Location: ' . BASEURL . '/admin');
                exit;
            }

        } else {
            $this->view('templates/header');
            $this->view('home/index');
            $this->view('templates/footer');
        }
        
    }

    public function updateProduct() 
    {
        if ($_SESSION['user']['role_id'] == '1') {
            // var_dump($_POST);
            // var_dump($_FILES);
            $namaFile = $_FILES['product_photo_url']['name'];
            $ukuranFile = $_FILES['product_photo_url']['size'];
            $errorFile = $_FILES['product_photo_url']['error'];
            $tmpName = $_FILES['product_photo_url']['tmp_name'];
            
            //cek apakah upload error
            // if ($errorFile == 4) {
                
            //     Flasher::setFlash('Foto belum di upload');
            //     Flasher::flash();
            //     $data['product'] = $this->model('Product_model')->getAllProduct();
            //     $data['product_category'] = $this->model('Product_category_model')->getAllProductCategory();
            //     $data['brand'] = $this->model('Brand_model')->getAllBrand();
            //     $this->view('templates/header');
            //     $this->view('product/index', $this->data);
            //     $this->view('templates/footer');
            // }

            //cek ekstensi file
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));

            // if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            //     Flasher::setFlash('File yang diupload bukan gambar');
            //     Flasher::flash();
            //     $data['product'] = $this->model('Product_model')->getAllProduct();
            //     $data['product_category'] = $this->model('Product_category_model')->getAllProductCategory();
            //     $data['brand'] = $this->model('Brand_model')->getAllBrand();
            //     $this->view('templates/header');
            //     $this->view('product/index', $this->data);
            //     $this->view('templates/footer');
            // }

            //cek ukuran gambar
            // if ($ukuranFile > 300000) {
            //     Flasher::setFlash('Ukuran gambar terlalu besar');
            //     Flasher::flash();
            //     $data['product'] = $this->model('Product_model')->getAllProduct();
            //     $data['product_category'] = $this->model('Product_category_model')->getAllProductCategory();
            //     $data['brand'] = $this->model('Brand_model')->getAllBrand();
            //     $this->view('templates/header');
            //     $this->view('product/index', $this->data);
            //     $this->view('templates/footer');
            // }

            $data = $_POST;
            $data['product_photo_url'] = $namaFile;
            $data['tmp_name'] = $tmpName;
            // var_dump($data);
            if ($this->model('Product_model')->updateProduct($data) > 0) {
                // Flasher::setFlash('berhasil diubah');
                // Flasher::flash();
                header('Location: ' . BASEURL . '/product');
                exit;
            } else {
                // var_dump($data);
                Flasher::setFlash('gagal diubah');
                header('Location: ' . BASEURL . '/product');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/home');
        }
        
    }

    public function getUpdate()
    {
        $data = $this->model('Product_model')->getDetailProduct($_POST['id']);
        echo json_encode($data);
    }

}