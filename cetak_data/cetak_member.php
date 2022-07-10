<?php
require 'functions.php';

$rows = query("SELECT * FROM tb_anggota");

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
            <th scope="col">Nama Anggota</th>
            <th scope="col">Tempat & Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">No. Telepon</th>
            <th scope="col">Foto</th>
        </tr>';

$i = 1;
foreach ($rows as $row) {
    $html .= '<tr>
                <td>' . $i++ . '</td>
                <td>' . $row["nama"] . '</td>
                <td>' . $row["tempat_tanggal_lahir"] . '</td>
                <td>' . $row["jenis_kelamin"] . '</td>
                <td>' . $row["alamat"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>' . $row["no_hp"] . '</td>
                <td><img src="img/' . $row["foto_ktp"] . '" width="100"></td>
                </td>
            </tr>';
}
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-member.pdf', \Mpdf\Output\Destination::INLINE);
