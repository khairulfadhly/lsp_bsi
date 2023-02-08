<!DOCTYPE html>
<html lang="in">


<!--header-->
<head>
       
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style.css" />

    <title>Beranda</title>
</head>

<body>
    <!-- Header -->
    <header>
    <div class="card text-center text-light bg-primary pb-3 pt-3">
        <!-- Media object -->
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
<!-- end Media object -->

    </header>
<!-- end of header -->

    <!-- Navigasi -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary mt-2">
        <a class="navbar-brand" href="beranda.php">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portopolio.php">Portopolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hubungi.php">Hubungi</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navigasi -->
<!-- main gambar -->
    <main role="main" class="container-fluid" style="height: 100%;">
        <div class="row">
            <div class="col-lg-8">
                <div>
                <div class="col-lr-7 mt-2"><img class="img-fluid rounded mb-4 mb-lg-0" src="Aset/beranda.png" alt="..." /></div>          
                </div>
            </div>
<!-- end main gambar -->

            <!--  card about me -->
            <div class="col-lg-4 ">
                <div class="card text-white bg-primary mb-5" style="max-height: 100%;">
                <h5 class="card-title text-center mt-3">About Me</h5>
                    <center><img class = "gambar mt-5" src="Aset/ww.png" alt=""></center>
                    <div class="card-body">
                    <div class="shadow p-3 mb-2 bg-transparent rounded text-light text-center">Khairul Fadhly</div>
                    <div class="shadow p-3 mb-2 bg-transparent rounded text-light text-center">77222163</div>
                    <div class="shadow p-3 mb-2 bg-transparent rounded text-light text-center">Mahasiswa peserta MBKM Bela Negara dan juga peserta sertifikasi profesi yang di selengarakan oleh BSI</div>

                    </div>
                </div>
            </div>

            <!-- end card about me -->
            
        </div>
    </main><!-- /.container -->

    <!-- Footer -->
    <footer class="page-footer fixed-bottom font-small bg-primary">

        <!-- Copyright -->
        <div class="footer-copyright text-center text-light py-3">© 2023 Copyright Fadhly
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</body>

</html>