<?php
session_start();

require '../session_user/session_dashboard.php';

require '../functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Member</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../dashboard/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../index/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="../index/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#page-top">YUSASI Rental Kamera</a>
        <!-- Navbar-->
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
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
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
                        </a>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link collapsed" href="daftar_barang/kamera.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-camera"></i></div>Daftar Kamera
                            </a>
                            <a class="nav-link collapsed" href="daftar_barang/hdcam.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-video"></i></div>Daftar Handycam
                            </a>
                            <a class="nav-link collapsed" href="daftar_barang/aksesoris.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-microphone"></i></div>Daftar Aksesoris
                            </a>
                        </nav>
                        <a class="nav-link collapsed" href="../logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Member
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4" id="home">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Daftar Kamera</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="daftar_barang/kamera.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Daftar Handycam</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="daftar_barang/hdcam.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Daftar Aksesoris</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="daftar_barang/aksesoris.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <img class="img-fluid" src="../index/assets/img/camera.jpg" />
                    </div>
                    <!-- About-->
                    <section class="about-section text-center" id="about">
                        <div class="container px-4 px-lg-5">
                            <div class="row gx-4 gx-lg-5 justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="text-white mb-4">What is YUSASI Rental Kamera?</h2>
                                    <p class="text-white-50">
                                        One of the web-based rental cameras, handycams, and camera accessories in Solo
                                    </p>
                                </div>
                            </div>
                            <img class="img-fluid" src="../index/assets/img/images.png" alt="..." />
                        </div>
                        <!-- Profil -->
                        <section class="contact-section bg-black" id="profil">
                            <h3 class="text-center text-white mt-0">Let's Get To Know Us</h3>
                            <br>
                            <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5">
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card py-4 h-100">
                                            <div class="card-body text-center text-black">
                                                <img class="img-fluid" src="../index/assets/img/yusuf.png" style="height:150px;" alt="..." />
                                                <hr class="my-3 mx-auto" />
                                                <h4 class="text-uppercase m-0">Yusuf Bagus S.H.</h4>
                                                <hr class="my-3 mx-auto" />
                                                <div class="small text-black-50">Langenharjo, Sukoharjo</div>
                                                <div class="small text-black-50">yusuf.herlambang27@gmail.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card py-4 h-100">
                                            <div class="card-body text-center text-black">
                                                <img class="img-fluid" src="../index/assets/img/sinta.png" style="height:150px;" alt="..." />
                                                <hr class="my-3 mx-auto" />
                                                <h4 class="text-uppercase m-0">Sinta Athaya R.</h4>
                                                <hr class="my-3 mx-auto" />
                                                <div class="small text-black-50">Banjarsari, Surakarta</div>
                                                <div class="small text-black-50">sintaathaya001@gmail.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card py-4 h-100">
                                            <div class="card-body text-center text-black">
                                                <img class="img-fluid" src="../index/assets/img/saka.png" style="height:150px;" alt="..." />
                                                <hr class="my-3 mx-auto" />
                                                <h4 class="text-uppercase m-0">Saka Pangestu P.</h4>
                                                <hr class="my-3 mx-auto" />
                                                <div class="small text-black-50">Kalijambe, Sragen</div>
                                                <div class="small text-black-50">sakapangestuputra228@gmail.com</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Contact-->
                        <section class="contact-section bg-black text-white" id="contact">
                            <h3 class="text-center text-white mt-0">Please Contact Us</h3>
                            <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5">
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="mt-5">
                                            <div class="mb-2"><i class="fas fa-map-marked-alt text-primary"></i></div>
                                            <h3 class="h4 mb-2">Address</h3>
                                            <p class="text-muted mb-0">Dokter Sutomo 12 Street, Solo</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="mt-5">
                                            <div class="mb-2"><i class="fas fa-envelope text-primary"></i></div>
                                            <h3 class="h4 mb-2">Email</h3>
                                            <p class="text-muted mb-0">yusasi@student.uns.ac.id</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="mt-5">
                                            <div class="mb-2"><i class="fas fa-mobile-alt text-primary"></i></div>
                                            <h3 class="h4 mb-2">Phone</h3>
                                            <p class="text-muted mb-0">+62 812-3630-3951</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </section>
                    </section>
            </main>
            <footer class="footer bg-black small text-center text-white-50">
                <div class="container px-4 px-lg-5">Copyright &copy; YUSASI Rental Kamera</div>
            </footer>
        </div>
    </div>
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