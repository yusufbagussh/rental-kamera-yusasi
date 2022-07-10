<?php
session_start();
require '../../session_user/session_admin.php';

require '../../functions.php';

$id = $_GET["id"];

if (hapusBarang($id) > 0) {
    echo "
    <script>
            alert('Data berhasil dihapus!');
            document.location.href = '../daftar_data/data_aksesoris.php';
        </script>
    ";
} else {
    echo "
    <script>
            alert('Data gagal dihapus!');
            document.location.href = '../daftar_data/data_aksesoris.php';
        </script>
    ";
}
