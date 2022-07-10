<?php

require 'functions.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
        alert('admin baru berhasil ditambahkan');
        document.location.href = 'login.php';
        </script>";
	} else {
		echo mysqli_error($conn);
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
	<title>Halaman Registrasi</title>
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
									<h3 class="text-center font-weight-light my-4 text-white">Masukkan Akun Admin</h3>
								</div>
								<div class="card-body">
									<form action="" method="POST">>
										<div class="form-floating mb-3">
											<input class="form-control" name="nama_lengkap" id="nama_lengkap" type="text" required>
											<label for="nama_lengkap" class="form-label">Nama Lengkap</label>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" name="username" id="username" type="text" />
											<label for="username" class="form-label">Username</label>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" name="password" id="password" type="password" />
											<label for="password" class="form-label">Password</label>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" name="password2" id="password2" type="password" />
											<label for="password2" class="form-label">Konfirmasi Password</label>
										</div>
										<div class="form-floating mb-3">
											<select class="form-select" name="level" aria-label="Default select example" />
											<option selected>Open this select menu</option>
											<option value="Admin">Admin</option>
											</select>
											<label for="level">Status</label>
										</div>
										<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
											<button class="btn btn-primary" type="submit" name="register">Register</button>
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
</body>

</html>