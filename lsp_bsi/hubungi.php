<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="in">
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
    <!-- end of header -->

    <!-- Navigasi -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary mt-2">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="beranda.php">Branda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portopolio.php">Portopolio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="hubungi.php">Hubungi</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- end navigasi -->

    <!-- Form hubungi kami -->
    <section id="kontak" class="kontak pt-5 pb-5">
        <div class="container">
            <h1 class="mb-4 text-center">Let's Get In Touch!</h1>
            <div class="row">
                <div class="col-md-10 col-xl-8">
                    <form method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input id="nama" name="nama" class="form-control" placeholder="Nama" type="text">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" name="email" class="form-control" placeholder="Email" type="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4" type="text"></textarea>
                        </div>
                        <button name="submit" class="btn btn-primary form-control" type="submit">Hubungi Kami</button>
                    </form>
                    <!-- Post Metode -->
                    <?php
                    if (isset($_POST['submit'])) {
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $pesan = $_POST['pesan'];

                        $insert = mysqli_query($con, "INSERT INTO hubungi VALUES (
                            null,
                            '" . $nama . "',
                            '" . $email . "',
                            '" . $pesan . "' ) ");
                        if ($insert) {
                            echo '<script>alert("Simpan Data Berhasil")</script>';
                            echo '<script>window.location="hubungi.php"</script>';
                        } else {
                            echo '<script>alert("Simpan Data Gagal")</script>' . mysqli_error($conn);
                            echo '<script>window.location="hubungi.php"</script>';
                        }
                    }
                    ?>
                    <!-- end post metode -->
                </div>
            </div>
        </div>

        <!-- read Pemanggilan database melalui looping php -->
        <div class="row">
        <?php
        $data = mysqli_query($con, "SELECT * FROM hubungi");
        foreach ($data as $a) : ?>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><?= $a['nama'] ?></li>
                <li class="list-group-item"><?= $a['email'] ?></li>
                <li class="list-group-item"><?= $a['pesan'] ?></li>
            </ul>
        </div>
        <?php endforeach; ?>
        </div>
        <!-- end read Pemanggilan database melalui looping php -->
    </section>

    <!-- Footer -->
    <footer class="page-footer fixed-bottom font-small bg-primary">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-light">© 2023 Copyright Fadhly
        </div>
    </footer>
    <!-- end Footer -->
</body>
</html>