<?php
require 'functions.php';
$rows = query("SELECT * FROM tb_produk WHERE jenis_barang=1");

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
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Gambar</th>
        </tr>';

$i = 1;
foreach ($rows as $row) {
    $html .= '<tr>
                <td>' . $i++ . '</td>
                <td>' . $row["nama_barang"] . '</td>
                <td>' . $row["harga"] . '</td>
                <td>' . $row["keterangan"] . '</td>
                <td><img src="img/' . $row["gambar"] . '" width="100"></td>
                </td>
            </tr>';
}
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-kamera.pdf', \Mpdf\Output\Destination::INLINE);
