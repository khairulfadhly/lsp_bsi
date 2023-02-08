<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Portopolio</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="card text-center text-light bg-primary pb-3 pt-3">
            <div class="media">
                <img class="mr-3 ml-3" src="Aset/Logo-LSPBSI.png" width="120px" height="30px">
                <div class="media-body">
                    <h5 class="mt-0">Lembaga Sertifikasi Profesi</h5>
                </div>
                <div class="media-end">
                <h5 class="mt-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
            </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- Navigasi -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary mt-2">
        <a class="navbar-brand" href="#">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">

                <a class="nav-link" href="beranda.php">Branda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="portopolio.php">Portopolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hubungi.php">Hubungi</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- end navigasi -->
<!-- Card portopolio  -->
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Khairul Fadhly</h5>
                    <p>Mahasiswa Peserta Sertifikasi Profesi</p>
                    <p>Universitas Esa Unggul</p>
                    <p>Peserta MBKM Bela negara</p>
                    <p>77222162</p>
                    <a href="https://www.instagram.com/khairul.panda/" target="_blank" class="btn btn-outline-primary btn-block"><i class="fa-brands fa-instagram"></i> Instagram</a>
                    <a href="https://github.com/khairulfadhly" target="_blank" class="btn btn-outline-primary btn-block"><i class="fa-brands fa-github"></i> Github</a>
                </div>
            </div>
        </div>
        <!-- Card untuk foto portopolio -->
        <div class="card" style="width: 20.3rem;">
            <img src="Aset/ww.png" class="card-img-top">
        </div>
    </div>




    <!-- Footer -->
    <footer class="page-footer fixed-bottom font-small bg-primary">
        <!-- Copyright -->
        <div class="footer-copyright text-light text-center py-3">© 2023 Copyright Fadhly
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>