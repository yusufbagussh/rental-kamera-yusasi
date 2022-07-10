<?php
session_start();
require '../../session_user/session_admin.php';

require '../../functions.php';

$conn = mysqli_connect("localhost", "root", "", "rental_kamera");

//cek apakah tombol submit sudah ditekan atau belom
if (isset($_POST["submit"])) {
	// var_dump($_POST);

	//cek apakah data berhasil di tambahkan atau tidak
	if (tambah_kamera($_POST) > 0) {
		echo "
        <script>
            alert('Data berhasil dimasukkan!');
            document.location.href = '../daftar_data/data_kamera.php';
        </script>
        ";
	} else {
		echo "
        <script>
            alert('Data gagal dimasukkan!');
            document.location.href = 'tambah_kamera.php';
        </script>
        ";
	}
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
	<title>Halaman Tambah Barang Rental</title>
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
									<h3 class="text-center font-weight-light my-4 text-white">Tambah Daftar Barang</h3>
								</div>
								<div class="card-body text-white">
									<form action="" method="POST" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="nama_barang" class="form-label">Nama Barang</label>
											<input type="text" class="form-control" name="nama_barang" id="nama_barang" required>
										</div>
										<div class="mb-3">
											<label for="harga" class="form-label">Harga Sewa</label>
											<input type="text" class="form-control" name="harga" id="harga" required>
										</div>
										<div class="mb-3">
											<label for="keterangan" class="form-label">Keterangan</label>
											<input type="text" class="form-control" name="keterangan" id="keterangan" required>
										</div>
										<div class="mb-3">
											<label for="gambar" class="form-label">Gambar Barang</label>
											<input type="file" class="form-control" name="gambar" for="gambar" required>
										</div>
										<div class="mb-3">
											<label for="jenis_barang" class="form-label">Jenis Barang</label>
											<select class="form-select" type="text" name="jenis_barang" id="jenis_barang" aria-label="Default select example">
												<option selected>Open this select menu</option>
												<option value="1">Kamera</option>
												<option value="2">Handycam</option>
												<option value="3">Aksesoris</option>
											</select>
										</div>
										<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
											<button class="btn btn-primary" button type="submit" name="submit">Tambah Data</button>
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