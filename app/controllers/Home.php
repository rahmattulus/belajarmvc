<?php

class Home extends Controller{

    // public $data = ['title' => 'siswa'];

    public function index(){
        // echo "hallo";
        $data['title'] = 'KasWoy';
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer", $data);
    }

    public function login(){
        // echo "hallo";
        $data['title'] = 'Log-In | KasWoy';
        $data['login'] = $this->model('Login_model')->getAllanggota();
        $this->view("templates/header", $data);
        $this->view("home/login", $data);
        $this->view("templates/footer", $data);
    }

    public function list(){
        $data['title'] = 'List | KasWoy';
        $this->view("templates/header", $data);
        $this->view("home/list", $data);
        $this->view("templates/footer", $data);
    }

    public function riwayat(){
        // echo "hallo";
        $data['title'] = 'riwayat | KasWoy';
        $this->view("templates/header", $data);
        $this->view("home/riwayat", $data);
        $this->view("templates/footer", $data);
    }
    public function pemasukan(){
        // echo "hallo";
        $data['title'] = 'Tagihan | KasWoy';
        $this->view("templates/header", $data);
        $this->view("home/pemasukan", $data);
        $this->view("templates/footer", $data);
    }
    public function pengluaran(){
        // echo "hallo";
        $data['title'] = 'Tagihan | KasWoy';
        $this->view("templates/header", $data);
        $this->view("home/pengluaran", $data);
        $this->view("templates/footer", $data);
    }

}