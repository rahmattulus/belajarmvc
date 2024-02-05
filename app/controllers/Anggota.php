<?php
class Anggota extends Controller{
    public function index(){
        $data['title'] = 'Data Anggota';
        $data['anggota'] = $this->model('anggota_model')->getAllanggota();
        // var_dump($data);
        $this->view("templates/header", $data);
        $this->view("anggota/index", $data);
        $this->view("templates/footer", $data);
    }

    public function login(){
        $data['title'] = 'login';
        $data['login'] = $this->model('Login_model')->getAllanggota();
        $this->view("templates/header", $data);
        $this->view("anggota/login", $data);
        $this->view("templates/footer", $data);
    }
}