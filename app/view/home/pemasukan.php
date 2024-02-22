<?php
// session_start();

// if (!isset($_SESSION["login"])) {
//     echo "<script>
//             window.location.href = 'http://localhost/kaswoymvc/public/home/login';
//             alert('Anda siapa | LOG-IN DULU!!');
//           </script>";
//     exit;
// }
?>
<style>
    body {
        background-color: #D1F6F6;
    }

    @import url('https://fonts.googleapis.com/css2?family=Doppio+One&family=Inter&display=swap');

    /* .atas{
      
    } */

    .table {
        border-radius: 10px;
    }

    h1 {
        font-family: 'Doppio One';
    }

    .profil {
        font-family: 'Doppio One';
    }

    th td {
        font-family: 'Inter';
        align-items: center;


    }
</style>

<body>

    <nav class="navbar navbar-lg navbar-light">
        <div class="container d-flex justify-content-between align-items-center">
            <a class=" ms-0" href="../">
                <img class="logo" src="../../public/image/kaswoy1.png" alt="kaswoy1" style="width: 150px;">
            </a>
            <div class="d-flex align-items-center">
                <div class="text-end me-2">
                    <p class="m-0"><b><?= $_SESSION['username'] ?></b></p>
                    <p class="m-0">XI PPLG 1</p>
                </div>
                <i class="fas fa-user fa-3x"></i>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Pemasukan</h4>
            </div>

            <div class="container p-4" style="background-color: #fff;">
                <div class="form-floating mb-3" style="max-width: 35%;">
                    <select class="form-select" id="toggleView" aria-label="Floating label select example">
                        <option value="table">Iuran Rutin</option>
                        <option value="form">Lainnya</option>
                    </select>
                    <label for="toggleView">Jenis Pemasukan</label>
                </div>

                <div class="card-body">
                    <div class="table-responsive ps-5 pe-5" id="tableView">
                        <h4 class="p-2 m-0">Iuran Rutin</h4>
                        <form method="POST" action="pemasukan">
                            <table class="main table text-center">
                                <div class="form-floating" style="max-width: 35%;">
                                    <select class="form-select" id="floatingSelect" name="bulan" aria-label="Floating label select example" required>
                                        <option selected disabled>Open this select Month</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                    <label for="floatingSelect">Pilih Bulan</label>
                                </div>
                            </table>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="min-width: 275px;">Nama</th>
                                        <th class="text-center">Week 1</th>
                                        <th class="text-center">Week 2</th>
                                        <th class="text-center">Week 3</th>
                                        <th class="text-center">Week 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['anggota'] as $key) { ?>
                                        <input type="hidden" name="id_siswa" value="<?= $key['id'] ?>">
                                        <tr>
                                            <td><?= $key['nama'] ?></td>
                                            <!-- Letakkan input hidden di dalam kolom yang sama -->
                                            <td>
                                                <input class="form-check-input" type="checkbox" name="status[<?= $key['id'] ?>][1]" value="Sudah Bayar" <?php if (isset($_POST['status'][$key['id']][1])) echo 'checked'; ?> style="cursor: pointer;">
                                            </td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" name="status[<?= $key['id'] ?>][2]" value="Sudah Bayar" <?php if (isset($_POST['status'][$key['id']][2])) echo 'checked'; ?> style="cursor: pointer;">
                                            </td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" name="status[<?= $key['id'] ?>][3]" value="Sudah Bayar" <?php if (isset($_POST['status'][$key['id']][3])) echo 'checked'; ?> style="cursor: pointer;">
                                            </td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" name="status[<?= $key['id'] ?>][4]" value="Sudah Bayar" <?php if (isset($_POST['status'][$key['id']][4])) echo 'checked'; ?> style="cursor: pointer;">
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                            <div class="d-grid gap-5 pt-3">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>

                        </form>

                    </div>

                    <div class="" id="formView" style="display: none;">
                        <div class="p-5 m-0">
                            <h4>Pemasukan Lainnya</h4>
                            <form class="user">
                                <div class="form-group pb-3 ">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nominal">
                                </div>
                                <div class="form-group pb-3 ">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Keterangan">
                                </div>
                                <div class="d-grid gap-5 pt-3">
                                    <button class="btn btn-primary" type="button">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>