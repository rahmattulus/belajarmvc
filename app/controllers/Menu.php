<?php

class Menu extends Controller{

    public function list(){
        // echo "Ini Siswa";
        $data['nama']= 'Agusz';
        $this->view("templates/header");
        $this->view("menu/list", $data);
        $this->view("templates/footer");
    }
    
}