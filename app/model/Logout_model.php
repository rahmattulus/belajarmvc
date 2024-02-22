<?php
class Logout_model{
    public function logout() {
        // Mulai sesi yang ada
        session_start();

        // Menghapus semua variabel sesi
        session_unset();

        // Menghancurkan sesi
        session_destroy();
        header("Location: http://localhost/kaswoymvc/public/home/login");
        exit;
    }
}