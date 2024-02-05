<?php
class Login_model{
    private $table = "anggota";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllanggota(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];

            $this->db->query("SELECT * FROM {$this->table} WHERE nama = :username");
            $this->db->bind(':username', $username);
            $this->db->execute();

            $user = $this->db->single();

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header('Location: http://localhost/kaswoymvc/public/ ');
            }else {
                echo "Username salah";
            }


        }
    }
}