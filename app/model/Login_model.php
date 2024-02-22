<?php
class Login_model
{
    private $table = "anggota";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMember()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->db->query("SELECT * FROM {$this->table} WHERE nama = :username");
            $this->db->bind(':username', $username);
            $this->db->execute();

            $user = $this->db->single();

            // Periksa apakah $user bukan null dan memiliki kunci "password"
            if ($user && isset($user['password'])) {
                if (password_verify($password, $user['password'])) {
                    // Proses login berhasil
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['nama'];
                    $_SESSION['user_level'] = $user['level'];
                    header('Location: http://localhost/kaswoymvc/public/');
                    exit();
                } else {
                    session_start();
                    $_SESSION['error_message'] = "Username atau password salah.";
                    header('Location: http://localhost/kaswoymvc/public/home/login');
                    exit();
                }
            } else {
                session_start();
                $_SESSION['error_message'] = "Data tidak ditemukan";
                header('Location: http://localhost/kaswoymvc/public/home/login');
                exit();
            }
        }
    }
}
