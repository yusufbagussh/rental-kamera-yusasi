<?php
require 'functions.php';

$rows = query("SELECT * FROM tb_sewa");

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
    <h1>DAFTAR BARANG RENTAL</h1>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr class="table table-dark table-bordered table-hover">
            <th scope="col">No.</th>
            <th scope="col">Nama Penyewa</th>
            <th scope="col">ID Penyewa</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">ID Barang</th>
            <th scope="col">Harga Sewa</th>
            <th scope="col">Lama Sewa</th>
            <th scope="col">Jumlah (Unit)</th>
            <th scope="col">Tanggal Sewa</th>
            <th scope="col">Alamat Penyewa</th>
            <th scope="col">Jenis Pembayaran</th>
            <th scope="col">Metode Pengambilan</th>
            <th scope="col">Total Biaya</th>
        </tr>';
$i = 1;
foreach ($rows as $row) {
    $html .= '<tr>
                <td>' . $i++ . '</td>
                <td>' . $row["nama_member"] . '</td>
                <td>' . $row["id_penyewa"] . '</td>
                <td>' . $row["nama_barang"] . '</td>
                <td>' . $row["id_barang"] . '</td>
                <td>' . $row["harga_sewa"] . '</td>
                <td>' . $row["lama_sewa"] . '</td>
                <td>' . $row["jumlah"] . '</td>
                <td>' . $row["tanggal_sewa"] . '</td>
                <td>' . $row["alamat"] . '</td>
                <td>' . $row["pembayaran"] . '</td>
                <td>' . $row["pengiriman"] . '</td>
                <td>' . $row["total_biaya"] . '</td>
            </tr>';
}
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-sewa.pdf', \Mpdf\Output\Destination::INLINE);
