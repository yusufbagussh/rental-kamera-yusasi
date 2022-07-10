<?php
// if (isset($_POST["submit"])) {
//     echo "
//         <script>
//             alert('Data telah berhasil dilakukan
//             silahkan lakukan pembayaran');
//             document.location.href = 'output.php';
//         </script>
//         ";
// } else {
//     echo "
//         <script>
//             alert('Pemesanan gagal dilakukan!');
//             document.location.href = 'kamera.php';
//         </script>
//         ";
// }
// if (mysqli_affected_rows($conn) > 0) {
//     echo "berhasil";
// } else {
//     echo "gagal";
//     echo "<br>";
//     echo mysqli_error($conn);
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="index/assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Hasil Keluaran</title>
</head>

<body class="body2">
    <main>
        <div class="container">
            <h1 class="font-weight-bold text-center mt-3 mb-3">
                INFORMASI PEMESANAN
            </h1>
            <form action="" method="POST">
                <table class="table table-striped ">
                    <?php
                    require 'functions.php';
                    $no = 1;
                    $query    = mysqli_query($conn, "SELECT * FROM tb_sewa ORDER BY id DESC LIMIT 1");
                    while ($row    = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="text-white">
                            <td>Nama Penyewa</td>
                            <td><?= $row['nama_member'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Barang yang Disewa</td>
                            <td><?= $row['nama_barang'] ?></td>
                        </tr class="text-white">
                        <tr class="text-white">
                            <td>Harga Sewa</td>
                            <td><?= $row['harga_sewa'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Lama Sewa</td>
                            <td><?= $row['lama_sewa'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Mulai Sewa</td>
                            <td><?= $row['tanggal_sewa'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Jumlah Unit</td>
                            <td><?= $row['jumlah'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Alamat Rumah</td>
                            <td><?= $row['alamat'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Metode Pembayaran</td>
                            <td><?= $row['pembayaran'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Metode Pengiriman/Pengambilan</td>
                            <td><?= $row['pengiriman'] ?></td>
                        </tr>
                        <tr class="text-white">
                            <td>Total Biaya</td>
                            <td><?= $row['total_biaya'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <b></b>
                <div class="container text-center">
                    <a class="btn btn-primary" href="cetak_data/cetak_sewa2.php" role="button">Cetak</a>
                    <!-- <a class="btn btn-primary" type="submit" onclick="return confirm('Pemeesanan telah berhasil dilakukan. Silahkan lakukan pembayaran dan konfirmasi');document.location.href = 'kamera.php';" name="submit">Pesan Sekarang</a> -->
                    <!-- <button type="submit" name="submit">Cetak</button> -->
                </div>
                <div class="container text-center">
                    <a href="member_view/dashboard.php" class="link-white">
                        << Back to Home</a>
                </div>
                <style>
                    @import url(https://fonts.googleapis.com/css?family=Roboto);

                    .whatsapp {
                        font-family: Roboto, Arial, Sans-serif;
                        font-size: 14px;
                        font-weight: 400;
                        right: 5%;
                        position: fixed;
                        bottom: 0;
                        z-index: 999;
                    }

                    a {
                        color: #fff;
                        text-decoration: none;
                        transition: ease-in-out .2s
                    }

                    a:hover {
                        box-shadow: 0 1px 4px rgba(0, 0, 0, .12), 0 1px 3px rgba(0, 0, 0, .24);
                        color: #fff
                    }

                    body {
                        background-color: black;
                    }

                    .container {
                        color: white;
                    }

                    h1 {
                        font-family: monospace;
                    }

                    .icons {
                        background: #25d366;
                        border-radius: 10px 10px 0 0;
                        display: block;
                        height: 42px;
                        margin-bottom: 20px;
                        width: 220px
                    }

                    .icons:hover {
                        background: #128c7e
                    }

                    .icons span {
                        display: block;
                        left: 5px;
                        top: 5px;
                        transform: translate(0, 10px)
                    }

                    svg {
                        border-radius: 10px;
                        display: block;
                        fill: #fff;
                        float: left;
                        height: 42px;
                        margin-right: 5px;
                        -webkit-transition: ease-in-out .175s;
                        transition: ease-in-out .175s;
                        width: 42px
                    }
                </style>
                <div class="whatsapp">
                    <a class="icons" target="_blank" href="https://api.whatsapp.com/send?phone=+628816763094&text=Kirimkan bukti pemesanan dan pembayaran melalui nomor ini"><svg viewBox="0 0 800 800">
                            <path d="M519 454c4 2 7 10-1 31-6 16-33 29-49 29-96 0-189-113-189-167 0-26 9-39 18-48 8-9 14-10 18-10h12c4 0 9 0 13 10l19 44c5 11-9 25-15 31-3 3-6 7-2 13 25 39 41 51 81 71 6 3 10 1 13-2l19-24c5-6 9-4 13-2zM401 200c-110 0-199 90-199 199 0 68 35 113 35 113l-20 74 76-20s42 32 108 32c110 0 199-89 199-199 0-111-89-199-199-199zm0-40c133 0 239 108 239 239 0 132-108 239-239 239-67 0-114-29-114-29l-127 33 34-124s-32-49-32-119c0-131 108-239 239-239z" />
                        </svg><span>Konfirmasi Pembayaran</span></a>
                </div>
            </form>
        </div>
    </main>
    <script src="script.js"></script>
</body>

</html>