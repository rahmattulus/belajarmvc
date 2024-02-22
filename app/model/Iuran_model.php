<?php

class Iuran_model
{
    private $table = "iuran";

    
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil nilai dari form
            $bulan = $_POST['bulan'];
            $status = $_POST['status']; // Ini akan berisi status week 1 sampai week 4 untuk setiap anggota

            try {
                // Lakukan iterasi untuk setiap anggota
                foreach ($status as $id_siswa => $minggu) {
                    // Dapatkan status untuk minggu ini
                    foreach ($minggu as $minggu_ke => $sudah_bayar) {

                        // Lakukan insert data ke dalam tabel iuran
                        $this->db->query("INSERT INTO {$this->table} (`id_siswa`, `bulan`, `minggu`, `status`) VALUES (:id_siswa, :bulan, :minggu_ke, :sudah_bayar)");
                        $this->db->bind(':id_siswa', $id_siswa);
                        $this->db->bind(':bulan', $bulan);
                        $this->db->bind(':minggu_ke', $minggu_ke);
                        $this->db->bind(':sudah_bayar', $sudah_bayar);
                        // var_dump($id_siswa, $bulan, $minggu_ke, $sudah_bayar);
                        $this->db->execute();
                        // var_dump($result);

                        // if(!$result){
                        //     echo "Data failed to insert.";
                        // }

                        var_dump($sudah_bayar);
                        if ($sudah_bayar === "Sudah Bayar") {
                            $tanggal = date('d-m-Y');
                            $nominal = 2000;
                            $keterangan = "Iuran Rutin";
                            $this->db->query("INSERT INTO pemasukan (tanggal, keterangan, nominal) VALUES (:tanggal,  :keterangan, :nominal)");
                            $this->db->bind(":tanggal", $tanggal);
                            $this->db->bind(":nominal", $nominal);
                            $this->db->bind(":keterangan", $keterangan);
                            var_dump($tanggal, $nominal, $keterangan);
                             $this->db->execute();
                            
                            // if(!$result){
                            //     echo "Data failed to insert.";
                            // }

                        }
                    }
                }
                return true; // Berhasil menyimpan data
            } catch (PDOException $e) {
                return "Error: " . $e->getMessage();
            }
        }
    }
}
