<?php

class Login extends Controller{

    public function index() 
    {
        if (isset($_SESSION['user']))
        {
            unset($_SESSION['user']);
        }
        $this->view('login/index');
    }

    public function login()
    {
        $data = $this->model('Login_model')->getUserDetail($_POST);
        
        if($data) {

            $_SESSION['user'] = [
                'user_id' => $data['user_id'],
                'user_name' => $data['user_name'],
                'role_id' => $data['role_id']
            ];

            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            header('Location: ' . BASEURL . '/login');
        }
        
    }

}