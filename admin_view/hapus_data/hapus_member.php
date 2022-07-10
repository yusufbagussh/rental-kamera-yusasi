<?php
session_start();
require '../../session_user/session_admin.php';

require '../../functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
            alert('Data berhasil dihapus!');
            document.location.href = '../daftar_data/data_member.php';
        </script>
    ";
} else {
    echo "
    <script>
            alert('Data gagal dihapus!');
            document.location.href = '../daftar_data/data_member.php';
        </script>
    ";
}
