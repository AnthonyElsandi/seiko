<?php

class Home extends Controller {
    public function index()
    {
        if (isset($_SESSION['user']))
        {
            $this->view('templates/header');
            $this->view('home/index');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . '/login');
        }
        
    }
}