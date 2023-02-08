<!DOCTYPE html>
<html lang="in">


<!--header-->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />

    <title>Gallery</title>
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

    <!-- Navigasi -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary mt-2">
        <a class="navbar-brand" href="#">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                    <a class="nav-link" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item active">
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

    <div class="main">
</div>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container">
                <h1 class="display-4 text-center">&nbsp;</h1>
                <p  class="lead text-center ">did you have a nice day ?. </p>
                
        </div>
    </div>
    <!-- end jumbotron -->


        <!-- Card gallery -->
        <section>
    <div class="row">
        <div class="col">
            <div class="card mb-2" style="width: 18rem;">
                <img class="card-img-top" src="Aset/gambar1.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Latihan Bela Negara Dalam Sesi Pelatihan Baris-berbaris di kemala balrom universitas esa unggul.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-2" style="width: 18rem;">
                <img class="card-img-top" src="Aset/gambar2.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Latihan Bela Negara Dalam Sesi Pelatihan Baris-berbaris di kemala balrom universitas esa unggul.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-2" style="width: 18rem;">
                <img class="card-img-top" src="Aset/gambar3.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Foto bersama Trainer Mayor Infantri I gede agung </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-5" style="width: 18rem;">
                <img class="card-img-top" src="Aset/gambar4.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Pembekalan nilai bela negara.</p>
                </div>
               
            </div>
        </div>
        </section>
        <!-- end of card gallery -->


    </div>

    </div>
    <!-- Footer -->
    <footer class="page-footer font-small bg-primary">

        <!-- Copyright -->
        <div class="footer-copyright text-center text-light py-3">© 2023 Copyright Fadhly
        </div>
        <!-- Copyright -->

    </footer>
    <!-- end Footer -->
</body>

</html>