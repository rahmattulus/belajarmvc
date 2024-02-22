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
        $data['login'] = $this->model('Login_model')->getMember();
        // $this->view("templates/header", $data);
        $this->view("home/login", $data);
        $this->view("templates/footer", $data);
    }

    public function logout(){
        $this->model("Logout_model")->logout();
    }
    public function admin(){
        // echo "hallo";
        $data['title'] = 'Log-In | KasWoy';
        $data['insert'] = $this->model('Insert_model')->insert();
        $this->view("templates/header", $data);
        $this->view("home/insert", $data);
        $this->view("templates/footer", $data);
    }

    // public function list(){
    //     $data['title'] = 'List | KasWoy';
    //     $this->view("templates/header", $data);
    //     $this->view("home/list", $data);
    //     $this->view("templates/footer", $data);
    // }

    public function riwayat(){
        // echo "hallo";
        $data['title'] = 'Riwayat | KasWoy';
        $this->view("templates/header", $data);
        $this->view("home/riwayat", $data);
        $this->view("templates/footer", $data);
    }
    public function pemasukan(){
        // echo "hallo";
        $data['title'] = 'Pemasukan | KasWoy';
        $data['anggota'] = $this->model('Anggota_model')->getAllanggota();
        $data['save'] = $this->model('Iuran_model')->save();
        $this->view("templates/header", $data);
        $this->view("home/pemasukan", $data);
        $this->view("templates/footer", $data);
    }
    public function pengeluaran(){
        // echo "hallo";
        $data['title'] = 'Pengeluaran | KasWoy';
        $this->view("templates/header", $data);
        $this->view("home/pengluaran", $data);
        $this->view("templates/footer", $data);
    }

}