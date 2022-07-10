<?php

require 'functions.php';

if (isset($_POST["submit"])) {

	if (tambah($_POST) > 0) {
		echo "
        <script>
            alert('data berhasil dimasukkan!');
            document.location.href = 'login.php';
        </script>
        ";
	} else {
		echo "
        <script>
            alert('data gagal dimasukkan dimasukkan!');
            document.location.href = 'login.php';
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
	<title>Halaman Buat Akun</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>

<body>
	<div id="layoutAuthentication">
		<style type="text/css">
			#layoutAuthentication {
				background-image: url("dashboard/p.jpg");
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
									<h3 class="text-center font-weight-light my-4 text-white">Silahkan Registrasi Terlebih Dahulu</h3>
								</div>
								<div class="card-body text-white">
									<form action="" method="POST" enctype="multipart/form-data">
										<?php
										// require 'functions.php';
										$no = 1;
										$query    = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC LIMIT 1");
										while ($row    = mysqli_fetch_array($query)) {
										?>
											<div class="mb-3">
												<label for="nama" class="form-label">Nama</label>
												<input type="text" class="form-control" name="nama" id="nama" value="<?= $row['nama_lengkap'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="tempat_tanggal_lahir" class="form-label">Tanggal Lahir</label>
												<input type="date" class="form-control" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" required>
											</div>
											<div class="mb-3">
												<label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
												<select class="form-select" type="text" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
													<option selected>Open this select menu</option>
													<option value="laki - laki">Laki-laki</option>
													<option value="perempuan">Perempuan</option>
												</select>
											</div>
											<div class="mb-3">
												<label for="alamat" class="form-label">Alamat</label>
												<input type="text" class="form-control" name="alamat" id="alamat" required>
											</div>
											<div class="mb-3">
												<label for="email" class="form-label">Email</label>
												<input type="text" class="form-control" name="email" id="email" required>
											</div>
											<div class="mb-3">
												<label for="no_hp" class="form-label">No. HP</label>
												<input type="text" class="form-control" name="no_hp" id="no_hp" required>
											</div>
											<div class="mb-3">
												<label for="foto_ktp" class="form-label">Foto</label>
												<input type="file" class="form-control" name="foto_ktp" id="foto_ktp" required>
											</div>
											<div class="mb-3">
												<label for="akun" class="form-label">ID Akun</label>
												<input type="text" readonly class="form-control" name="akun" id="akun" value="<?= $row['id'] ?>" readonly>
											</div>
											<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
												<button class="btn btn-primary" button type="submit" name="submit">Submit Data</button>
											</div>
										<?php
										}
										?>
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
</body>

</html>