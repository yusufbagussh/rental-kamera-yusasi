<?php
session_start();
require '../../session_user/session_admin.php';

require '../../functions.php';

$rows = query("SELECT * FROM tb_produk WHERE jenis_barang='2'");

if (isset($_POST["cari"])) {
    $keyword = $_POST["keyword"];
    $rows = caribarang($keyword);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../dashboard/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../index/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="../../index/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Halaman Daftar Barang</title>
    <style>
        @media print {

            .btn-primary,
            .btn-outline-success,
            .aksi {
                display: none;
            }
        }
    </style>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#page-top">YUSASI Rental Kamera</a>
        <!-- Navbar-->
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="dashboard_admin.php #home">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="dashboard_admin.php #about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard_admin.php #profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard_admin.php #contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <style type="text/css">
                    #layoutSidenav {
                        background-color: black;
                        color: white;
                    }
                </style>
                <!-- Navbar Samping -->
                <?php include 'sidebar.php' ?>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Handycam</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Handycam</li>
                    </ol>
                    <div class="container bg-black">
                        <a class="btn btn-primary" href="../tambah_data/tambah_hdcam.php" role="button">Tambahkan Data</a>
                        <a class="btn btn-primary" href="../../cetak_data/cetak_hdcam.php" role="button" target="_blank">Cetak</a>
                    </div>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 bg-black">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-white text-center">
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Keterangan</th>
                                            <th>Gambar</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <?php $i = 1; ?>
                                        <?php foreach ($rows as $row) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $row['nama_barang'] ?></td>
                                                <td><?= $row['harga'] ?></td>
                                                <td><?= $row['keterangan'] ?></td>
                                                <td><img src="../../img/<?= $row["gambar"]; ?>" width="100"></td>
                                                <td class="aksi">
                                                    <a href="../hapus_data/hapus_hdcam.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin??');" class="btn btn-outline-white">Hapus</a>
                                                    <a href="../ubah_data/ubah_hdcam.php?id=<?= $row["id"]; ?>" class="btn btn-outline-white">Edit</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer bg-black small text-center text-white-50">
                <div class="container px-4 px-lg-5">Copyright &copy; YUSASI Rental Kamera</div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="index/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>