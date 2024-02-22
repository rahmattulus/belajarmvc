<?php

class Insert_model
{
    private $table = "anggota";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insert()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $this->db->query("INSERT INTO `{$this->table}` (`nama`, `password`, `level`) VALUES (:nama, :password, :level)");
            $this->db->bind(':nama', $nama);
            $this->db->bind(':password', $hashed_password);
            $this->db->bind(':level', $level);
            $this->db->execute();
        }
    }
}
