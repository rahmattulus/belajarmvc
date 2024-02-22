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
        </div>
    </nav>

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Admin</h3>
            </div>

            <div class="container p-4" style="background-color: #fff;">
                <h4>Insert data</h4>
                <div class="form-floating mb-3" style="max-width: 35%;">
                    <select class="form-select" id="jenis" aria-label="Floating label select example">
                        <option value="table">Manual</option>
                        <option value="form">Import</option>
                    </select>
                    <label for="toggleView">Jenis Pemasukan</label>
                </div>

                <div class="card-body">
                    <div class="container mt-4 p-2" id="manual" style="max-width: 75%;">
                        <h4>Tambah Member</h4>
                        <form method="post" action="admin">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input class="form-control form-control-sm" type="text" name="nama" id="nama" placeholder="nama" aria-label=".form-control-sm example" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input class="form-control form-control-sm" type="password" name="password" id="password" placeholder="password" aria-label=".form-control-sm example" required>
                            </div>
                            <div class="mb-3" style="display: none;">
                                <label for="exampleInputPassword1" class="form-label">Level</label>
                                <select class="form-select" name="level" id="level" aria-label="Floating label select example">
                                    <option value="3">Anggota</option>
                                </select>
                            </div>
                            <div class="d-grid gap-5 pt-3">
                                <button class="btn btn-primary" type="submit">+ Tambah</button>
                            </div>
                        </form>
                    </div>

                    <div class="" id="import" style="display: none;">
                        <div class="p-5 m-0">
                            <h4>Import File Excel</h4>
                            <form class="user">
                                <div class="form-group pb-3 ">
                                    <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nominal">
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
    <!--  -->