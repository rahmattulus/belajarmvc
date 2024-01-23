<?php

class Home extends Controller{

    // public $data = ['title' => 'siswa'];

    public function index($nama = "Agus", $hobi = "Memancing"){
        // echo "hallo";
        // $data['title'] = 'siswa';
        $this->view("templates/header");
        $this->view("home/index");
        $this->view("templates/footer");
    }

    public function login($nama = "Agus", $hobi = "Memancing"){
        // echo "hallo";
        $this->view("templates/header");
        $this->view("home/login");
        $this->view("templates/footer");
    }

    public function list(){
        // echo "Ini Siswa";
        // $data['nama']= 'Agusz';
        $this->view("templates/header");
        $this->view("home/list");
        $this->view("templates/footer");
    }

    public function riwayat($nama = "Agus", $hobi = "Memancing"){
        // echo "hallo";
        $this->view("templates/header");
        $this->view("home/riwayat");
        $this->view("templates/footer");
    }
    public function tagihan($nama = "Agus", $hobi = "Memancing"){
        // echo "hallo";
        $this->view("templates/header");
        $this->view("home/tagihan");
        $this->view("templates/footer");
    }

}