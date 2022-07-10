<?php

require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="index/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="index/css/styles.css" rel="stylesheet" />
    <title>Home</title>
</head>

<body>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">YUSASI Rental Kamera</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" id="home">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">YUSASI</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Choose your favorite camera to capture your special moments.</h2>
                        <a class="btn btn-primary" href="login.php">Login</a>
                        <a class="btn btn-primary" href="akun.php">Sign Up</a>
                    </div>
                </div>
                <style>
                    .masthead {
                        background-image: url("index/assets/img/bg-cam.jpg");
                    }
                </style>
            </div>
        </header>
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
                <img class="img-fluid" src="index/assets/img/images.png" alt="..." />
            </div>
            <!-- Profil -->
            <section class="contact-section bg-black" id="profil">
                <h3 class="text-center text-white mt-0">Let's Get To Know Us</h3>
                <br>
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <img class="img-fluid" src="index/assets/img/yusuf.png" style="height:150px;" alt="..." />
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
                                <div class="card-body text-center">
                                    <img class="img-fluid" src="index/assets/img/sinta.png" style="height:150px;" alt="..." />
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
                                <div class="card-body text-center">
                                    <img class="img-fluid" src="index/assets/img/saka.png" style="height:150px;" alt="..." />
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
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container px-4 px-lg-5">Copyright &copy; YUSASI Rental Kamera</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="index/js/scripts.js"></script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>