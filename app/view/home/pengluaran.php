<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KasWoy</title>
    <link rel="shortcut icon" href="../img/logo kas woy 1;1-01.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4f10ca1bd3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Doppio+One&family=Inter&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #D1F6F6;
    }

    @import url('https://fonts.googleapis.com/css2?family=Doppio+One&family=Inter&display=swap');

    /* .atas{
      
    } */

    .table{
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
          <a class=" ms-0" href="landingPage.html">
            <img class="logo" src="../img/KAS WOY 1;2-01.png" alt="" style="width: 150px;">
            </a>
            <div class="d-flex align-items-center">
              <div class="text-end me-2">
                <p class="m-0">Nama</p>
                <p class="m-0">XI PPLG 1</p>
              </div>
              <i class="fas fa-user fa-2x"></i>
            </div>
        </div>
      </nav>
      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Pengeluaran</h4>
      <div class="container-fluid">
      <div class="p-5 m-0">
                                    <form class="user">
                                        <div class="form-group pb-3 ">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Nominal">
                                        </div>
                                        <div class="form-group pb-3 ">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Keterangan">
                                        </div>
                                        <div class="d-grid gap-5 pt-3">
                                        <button class="btn btn-primary" type="button">Update</button>
                                        </div>
  

                                            
                                    </form>
                                </div>
      

    <div class="table p-3" style="background-color: #fff;">
        <table class="main table text-center">
            <div class="form-floating mb-3" style="max-width: 35%;">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>Open this select Month</option>
                  <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
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

              <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nominal</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>13 Agustus 2023</td>
                                            <td>150.000</td>
                                            <td>Banner</td>
                                        </tr>
                                        <tr>
                                            <td>14 Agustus 2023</td>
                                            <td>10.000</td>
                                            <td>Minuman karnaval</td>
                                        </tr>
                                        <tr>
                                            <td>15 Agustus 2023</td>
                                            <td>107.000</td>
                                            <td>Lauk tumpeng</td>
                                        </tr>
                                        <tr>
                                            <td>15 Agustus 2023</td>
                                            <td>200.000</td>
                                            <td>Nasi + Hiasan tumpeng</td>
                                        </tr>
                                         <tr>
                                            <td>15 Agustus 2023</td>
                                            <td>120.000</td>
                                            <td>Ayam tumpeng</td>
                                        </tr>
                                         <tr>
                                            <td>7 September 2023</td>
                                            <td>10.000</td>
                                            <td>HVS</td>
                                        </tr>
                                         <tr>
                                            <td>13 September 2023</td>
                                            <td>14.000</td>
                                            <td>Folio</td>
                                        </tr>
                                         <tr>
                                            <td>35 September 2023</td>
                                            <td>37.000</td>
                                            <td>pepeleg sehat</td>
                                        </tr>
                                          <tr>
                                            <td>30 September 2023</td>
                                            <td>33.500</td>
                                            <td>(P5 KPO) co card + print</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            

</body>

</html>