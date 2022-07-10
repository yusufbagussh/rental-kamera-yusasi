<?php
session_start();
require '../../session_user/session_admin.php';

require '../../functions.php';

$id = $_GET["id"];
// var_dump($id);

//query data mahasiswa berdasarkan id
$row = query("SELECT * FROM tb_sewa WHERE id = $id")[0];
// var_dump($anime["Nama Anime"]);

//cek apakah tombol submit sudah ditekan atau belom
if (isset($_POST["submit"])) {
    // var_dump($_POST);

    //cek apakah data berhasil diubah atau tidak
    if (ubahSewa($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = '../daftar_data/data_sewa.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href = 'ubah_sewa.php';
        </script>
        ";
    }
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="dashboard/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="index/assets/favicon.ico" />
    <title>Halaman Ubah Data Sewa</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="#page-top">YUSASI Rental Kamera</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dashboard_admin.php #home">Home</a>
                                <!-- <li><a href="barang.php" class="active">Daftar Kamera</a></li>
                                    <li><a href="sewa.php" class="active">Daftar HDCam</a></li>
                                    <li><a href="member.php" class="active">Daftar Aksesoris</a></li> -->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="dashboard_admin.php #about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="dashboard_admin.php #profil">Profil</a></li>
                            <li class="nav-item"><a class="nav-link" href="dashboard_admin.php #contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </nav>
    </body>
    <div id="layoutAuthentication">
        <style type="text/css">
            #layoutAuthentication {
                background-image: url("../../dashboard/p.jpg");
                background-size: cover;
            }
        </style>
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4 text-white">Halaman Ubah Data</h3>
                                </div>
                                <div class="card-body text-white">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <div class="mb-3">
                                            <label for="nama_member" class="form-label">Nama Penyewa</label>
                                            <input type="text" class="form-control" name="nama_member" for="nama_member" value="<?= $row['nama_member']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_member" class="form-label">ID Penyewa</label>
                                            <input type="text" class="form-control" name="id_member" for="id_member" value="<?= $row['id_member']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_barang" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang" for="nama_barang" value="<?= $row['nama_barang']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_barang" class="form-label">ID Barang</label>
                                            <input type="text" class="form-control" name="id_barang" for="id_barang" value="<?= $row['id_barang']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga_sewa" class="form-label">Harga Sewa</label>
                                            <input type="text" class="form-control" name="harga_sewa" for="harga_sewa" value="<?= $row['harga_sewa']; ?>">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <label for="lama_sewa" class="form-label">Lama Sewa</label>
                                                    <input type="text" class="form-control" name="lama_sewa" for="lama_sewa" value="<?= $row['lama_sewa']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jumlah" class="form-label">Jumlah (Unit)</label>
                                                    <input type="text" class="form-control" name="jumlah" for="jumlah" value="<?= $row['jumlah']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
                                                    <input type="text" class="form-control" name="tanggal_sewa" for="tanggal_sewa" value="<?= $row['tanggal_sewa']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" for="alamat" value="<?= $row['alamat']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pembayaran" class="form-label">Pilih Pembayaran</label>
                                                    <select class="form-select" type="text" name="pembayaran" id="pembayaran" for="pembayaran" aria-label="Default select example">
                                                        <option selected>"<?= $row['pembayaran']; ?>"</option>
                                                        <option value="cash">Via Cash</option>
                                                        <option value="bca">Via BCA (571129811 a.n. Yusasi)</option>
                                                        <option value="ovo">Via OVO (081236303951 a.n. Yusasi)</option>
                                                        <option value="gopay">Via GoPay (081236303951 a.n. Yusasi)</option>
                                                        <option value="dana">Via DANA (081236303951 a.n. Yusasi)</option>
                                                        <option value="linkaja">Via LinkAja (081236303951 a.n. Yusasi)</option>
                                                        <option value="shopeepay">Via ShopeePay (081236303951 a.n. Yusasi)</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pengiriman" class="form-label">Pilih Pengiriman / Pengambilan Barang</label>
                                                    <select class="form-select" type="text" name="pengiriman" id="pengiriman" for="pengiriman" aria-label="Default select example">
                                                        <option selected><?= $row['pengiriman']; ?></option>
                                                        <option value="ambil">Ambil Sendiri</option>
                                                        <option value="antar">Barang Diantar</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="total_biaya" class="form-label">Total Biaya</label>
                                                    <input type="text" class="form-control" name="total_biaya" id="total_biaya" value="<?= $row['total_biaya']; ?>">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <button class="btn btn-primary" button type="submit" name="submit">Ubah Data</button>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-dark mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center">
                    <footer class="footer bg-black small text-center text-white-50">
                        <div class="container px-4 px-lg-5">Copyright &copy; YUSASI Rental Kamera</div>
                    </footer>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="dashboard/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="index/js/scripts.js"></script>
</body>

</html>