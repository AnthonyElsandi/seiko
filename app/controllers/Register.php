<?php

class Register extends Controller{

    public function index() 
    {
        // var_dump("PLUIS");
        $this->view('register/index');
    }

    public function register()
    {
        if ($this->model('Register_model')->registerAccount($_POST) > 0) {
            Flasher::setFlash('berhasil register');
            header('Location: ' . BASEURL . '/login');
            exit;
        } else {
            Flasher::setFlash('gagal register');
            header('Location: ' . BASEURL . '/register');
            exit;
        }
        
    }

}