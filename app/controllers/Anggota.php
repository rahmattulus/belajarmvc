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
}