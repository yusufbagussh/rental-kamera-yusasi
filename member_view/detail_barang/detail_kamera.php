<?php
session_start();
require '../../session_user/session_member.php';

require '../../functions.php';
$id = $_GET["id"];
// var_dump($id);

//query data mahasiswa berdasarkan id
$row = query("SELECT * FROM tb_produk WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Detail Kamera</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../barang/css/styles.css" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../index/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../detail/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">YUSASI Rental Kamera</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="dashboard.php">Home</a></li>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="dashboard.php #about">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="dashboard.php #profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link active" href="dashboard.php #contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">YUSASI</h1>
                <p class="lead fw-normal text-white-50 mb-0">Choose your favorite camera to capture your special moments.</p>
            </div>
        </div>
    </header>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-4"><img class="card-img-top mb-5 mb-md-0" src="../../img/<?= $row['gambar']; ?>" alt="..." /></div>
                <div class="col-md-8">
                    <h1 class="display-5 fw-bolder"><?= $row['nama_barang']; ?></h1>
                    <div class="fs-5 mb-5">
                        <span>Rp. <?= $row['harga']; ?></span>
                    </div>
                    <p class="lead"><?= $row['keterangan']; ?></p>
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <a class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                << Back</a>
                                    <a class="btn btn-outline-dark mt-auto" href="../sewa_barang/sewa_kamera.php?id=<?= $row["id"]; ?>">Sewa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; YUSASI Rental Kamera</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="detail/js/scripts.js"></script>
    <script src="barang/js/scripts.js"></script>
</body>

</html>