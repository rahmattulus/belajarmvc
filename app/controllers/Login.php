<?php
class Login extends Controller{
    public function index(){
        $data['title'] = 'login';
        $data['login'] = $this->model('Login_model')->getAllanggota();
        $this->view("templates/header", $data);
        $this->view("anggota/login", $data);
        $this->view("templates/footer", $data);
    }
}