<?php
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "rental_kamera");
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Hasil Keluaran</title>
</head>

<body class="body2">
    <main>
        <div class="container">
            <h1 class="font-weight-bold text-center mt-3 mb-3">
                KWITANSI
            </h1>
            <form action="" method="POST">
                <table class="table table-striped ">';
$no = 1;
$query    = mysqli_query($conn, "SELECT * FROM tb_sewa ORDER BY id DESC LIMIT 1");
while ($row    = mysqli_fetch_array($query)) {
    $html .= '<tr>
                            <td>Nama Penyewa</td>
                            <td>: ' . $row["nama_member"] . '</td>
                        </tr>
                        <tr>
                            <td>Barang yang Disewa</td>
                            <td>: ' . $row["nama_barang"] . '</td>
                        </tr>
                        <tr>
                            <td>Harga Sewa</td>
                            <td>: ' . 'Rp' . $row["harga_sewa"] . '</td>
                        </tr>
                        <tr>
                            <td>Lama Sewa</td>
                            <td>: ' . $row["lama_sewa"] . ' Hari' . '</td>
                        </tr>
                        <tr>
                            <td>Mulai Sewa</td>
                            <td>: ' . $row["tanggal_sewa"] . '</td>
                        </tr>
                        <tr>
                            <td>Jumlah Unit</td>
                            <td>: ' . $row["jumlah"] . ' Unit' . '</td>
                        </tr>
                        <tr>
                            <td>Alamat Rumah</td>
                            <td>: ' . $row["alamat"] . '</td>
                        </tr>
                        <tr>
                            <td>Metode Pembayaran</td>
                            <td>: ' . $row["pembayaran"] . '</td>
                        </tr>
                        <tr>
                            <td>Metode Pengiriman/Pengambilan</td>
                            <td>: ' . $row["pengiriman"] . '</td>
                        </tr>
                        <tr>
                            <td>Total Biaya</td>
                            <td>: ' . 'Rp' . $row["total_biaya"] . '</td>
                        </tr>';
}
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('infopemesanan.pdf', \Mpdf\Output\Destination::INLINE);
