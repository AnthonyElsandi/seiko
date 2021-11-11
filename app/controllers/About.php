<?php

class About extends Controller{

    public function index($nama = "Anthony", $pekerjaan = "Mahasiswa") 
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

}