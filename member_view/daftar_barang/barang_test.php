<?php

session_start();
require '../../session_user/session_member.php';

require '../../functions.php';

if (isset($_POST["cari"])) {
    $keyword = $_POST["keyword"];
    $rows = carikamera($keyword);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="../../index/assets/favicon.ico" />
    <title>Halaman Daftar Kamera</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../barang/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <?php include 'navbar.php' ?>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">YUSASI</h1>
                <p class="lead fw-normal text-white-50 mb-0">Choose your favorite camera to capture your special moments.</p>
                <br>
                <a class="btn btn-outline-secondary" href="../cetak_kamera.php" role="button">Cetak Daftar Kamera</a>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $batas = 4;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;
                $id = $_GET['jenisbarang'];

                $data = mysqli_query($conn, "SELECT * FROM tb_produk WHERE jenis_barang='$id'");
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);

                $rows = mysqli_query($conn, "SELECT * FROM tb_produk WHERE jenis_barang='$id' LIMIT $halaman_awal, $batas");
                $nomor = $halaman_awal + 1;
                while ($d = mysqli_fetch_array($rows)) {
                ?>
                    <?php $i = 1; ?>
                    <?php foreach ($rows as $row) : ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-head p-4" style="height:240px;" src="../../img/<?= $row["gambar"]; ?>" />
                                <!-- Product details-->
                                <div class="card-body p-4 text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $row['nama_barang'] ?></h5>
                                    <!-- Product price-->
                                    <h6 class="fw-bolder">Rp. <?= $row['harga'] ?></h6>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="../detail_barang/detail_kamera.php?id= <?= $row["id"]; ?>">Detail</a>
                                    <a class="btn btn-outline-dark mt-auto" href="../sewa_barang/sewa_kamera.php?id=<?= $row["id"]; ?>">Sewa</a>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                <?php
                }
                ?>
            </div>
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman > 1) {
                                                    echo "href='?halaman=$previous'";
                                                } ?>>Previous</a>
                    </li>
                    <?php
                    for ($x = 1; $x <= $total_halaman; $x++) {
                    ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                    echo "href='?halaman=$next'";
                                                } ?>>Next</a>
                    </li>
                </ul>
            </nav>
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
    <script src="barang/js/scripts.js"></script>
</body>

</html>