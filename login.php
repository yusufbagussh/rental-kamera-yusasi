<?php
require_once 'session_user/session_login.php';

require 'functions.php';

// if (isset($_POST["login_member"])) {

// 	$username = $_POST["username"];
// 	$password = $_POST["password"];
// 	$level = $_POST["level"];

// 	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and level = '$level'");

// 	//cek username
// 	if (mysqli_num_rows($result) === 1) {

// 		//cek password 
// 		$rows = mysqli_fetch_assoc($result);
// 		if (password_verify($password, $rows["password"])) {
// 			//cek session
// 			$_SESSION["login_member"] = true;
// 			header("Location: member_view/dashboard.php");
// 		}
// 		exit;
// 	}
// } elseif (isset($_POST["login_admin"])) {

// 	$username = $_POST["username"];
// 	$password = $_POST["password"];
// 	$level = $_POST["level"];

// 	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and level = '$level'");
// 	// $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and level='$level'");

// 	//cek username
// 	if (mysqli_num_rows($result) === 1) {

// 		//cek password 
// 		$rows = mysqli_fetch_assoc($result);
// 		if (password_verify($password, $rows["password"])) {
// 			//cek session
// 			$_SESSION["login_admin"] = true;
// 			header("Location: admin_view/dashboard_admin.php");
// 		}
// 		exit;
// 	}

// 	$error = true;
// }

if (isset($_POST["login"])) {
	//menangkap value username dan password yang diinputkan
	$username = $_POST["username"];
	$password = $_POST["password"];

	//cari di database berdasarkan username
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {

		//cek password 
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			if ($row["level"] === 'admin') {
				//buat session
				$_SESSION["login_admin"] = true;
				header("Location: admin_view/dashboard_admin.php");
			} else {
				$_SESSION['login_member'] = true;
				header("Location: member_view/dashboard.php");
			}
		}
		$_SESSION['pesan'] = true;
	}
	$_SESSION['pesan'] = true;
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
	<title>Halaman Login</title>
</head>

<body>

	<body>
		<div id="layoutAuthentication">
			<style type="text/css">
				#layoutAuthentication {
					background-image: url("dashboard/p.jpg");
					background-size: cover;
				}
			</style>
			<?php if (isset($error)) : ?>
				<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
					<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
						<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
					</symbol>
				</svg>
				<div class="alert alert-danger d-flex align-items-center" role="alert">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
						<use xlink:href="#exclamation-triangle-fill" />
					</svg>
					<div>
						Username atau Password Salah
					</div>
				</div>
			<?php endif; ?>
			<div id="layoutAuthentication_content">
				<main>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-5">
								<div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
									<div class="card-header">
										<h3 class="text-center font-weight-light my-4 text-white">Login</h3>
									</div>
									<div class="card-body">

										<?php if (isset($_SESSION['pesan'])) : ?>
											<div class="alert alert-danger alert-dismissible fade show" role="alert">
												Data yang Anda masukkan salah !
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div>
										<?php endif ?>

										<form action="" method="POST">
											<div class="form-floating mb-3">
												<input class="form-control" name="username" id="username" type="text" />
												<label for="username" class="form-label">Username</label>
											</div>
											<div class="form-floating mb-3">
												<input class="form-control" name="password" id="password" type="password" />
												<label for="password" class="form-label">Password</label>
											</div>
											<div class="form-floating mb-3">
												<div class="d-flex align-items-center justify-content-center mt-4 mb-0">
													<button class="btn btn-primary" type="submit" name="login">Login</button>
												</div>
												<div class="card-footer text-center text-white py-3">
													<a href="akun.php" div class="text-reset">Need an account? Sign up!</a>
												</div>
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
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="dashboard/js/scripts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>