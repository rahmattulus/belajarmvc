<style>
    body {
        background-image: url(../img/landing.png);
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
    }


    .yo {
        width: 220px;
        /* margin-bottom: 10px;
    margin-left: 43.4%;
    margin-top: 2%; */
    }

    /* a {
    margin-top: 80px;
    margin-left: 30%;
    
} */
    .container {
        width: 30%;
        min-width: 385px;
        height: auto;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.70);
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        fill-opacity: inherit;
        margin: 20px auto;
        padding: 30px;
    }

    h2 {
        margin-top: 20px;
        margin-bottom: 40px;
        text-align: center;
    }

    input[type="text"],
    input[type="password"] {
        width: 85%;
        height: 30px;
        border-radius: 10px;
        border: 1px solid #000;
        background: rgba(255, 255, 255, 0.70);
        margin-left: 31px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
    }

    input[type="submit"] {
        width: 35%;
        height: 33px;
        border: none;
        border-radius: 5px;
        /* margin-left: 134px; */
        margin-top: 15px;
        background: #92CE98;
    }

    #exampleModal {
        padding: 0;
    }
</style>

<body>
    <!-- <img src="img/landing.png" alt="" class="position-absolute top-0 start-0" style="z-index: -9;"> -->
    <div class="text-center">
        <div class="col-md-12">
            <img class="yo" src="../img/logo kas woy 1;1-01.png" alt="">
        </div>

    </div>

    <div class="position-absolute top-0 end-0 p-5">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-info-circle fa-2x fa-inverse" style="cursor: pointer;"></i>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal" aria-label="Close"></button>
                        <br>
                        <img class="d-flex align-items-center justify-content-center mx-auto mb-5" src="../img/infokw.png" alt="" width="40%">
                        <b class="text-center mt-5">
                            <h2 class="m-0 mt-2">KAS WOY?</h2>
                        </b>
                        <div class="text-center mt-2">
                            <p>KasWoy adalah sebuah platform yang dapat membantu<br> untuk mengelola atau memanajemen Keuangan dalam kelas</p>
                        </div>
                        <!-- <div class="p d-flex align-items-center justify-content-center mx-auto">
                        <P>Powered by</P> 
                        <img class="" src="../img/pplg.png" alt="" style="width: 9%; margin-top: -0.5%;">
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-4">
        <h2>Selamat Datang</h2>
        <form action="index" class="form-registrasi">
            <div class="login">
                <div class="input">
                    <input class="form-control form-control-sm" type="text" placeholder="username" aria-label=".form-control-sm example">

                    <input class="form-control form-control-sm" type="password" placeholder="password" aria-label=".form-control-sm example">

                    <input class="form-control form-control-sm mx-auto" type="submit" value="Masuk">
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>