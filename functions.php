<?php
// $conn = mysqli_connect('bariskode.online', 'bariskod', 'passforlife9', 'bariskod_rental_kamera');
$conn = mysqli_connect("localhost", "root", "", "rental_kamera");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama = $data['nama'];
    $tempat_tanggal_lahir = $data['tempat_tanggal_lahir'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $email = $data['email'];
    $no_hp = $data['no_hp'];

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $akun = $data['akun'];

    //query insert data
    $query = "INSERT INTO tb_anggota VALUES
('', '$nama', '$tempat_tanggal_lahir', '$jenis_kelamin', '$alamat', '$email', '$no_hp', '$gambar', $akun)
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    //     if (mysqli_query($conn, $query)) {
    //         echo "Record updated successfully";
    //     } else {
    //         echo "Error updating record: " . mysqli_error($conn);
    //     }
}

function tambah2($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama_barang = $data['nama_barang'];
    $harga = $data['harga'];
    $keterangan = $data['keterangan'];

    $gambar2 = uploadGambar();
    if (!$gambar2) {
        return false;
    }

    $jenis_barang = $data['jenis_barang'];
    //query insert data
    $query = "INSERT INTO tb_produk VALUES
('', '$nama_barang', '$harga', '$keterangan', '$gambar2', '$jenis_barang')
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah3($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama_member = $data['nama_member'];
    $id_member = $data['id_member'];
    $nama_barang = $data['nama_barang'];
    $id_barang = $data['id_barang'];
    $harga_sewa = $data['harga_sewa'];
    $lama_sewa = $data['lama_sewa'];
    $jumlah = $data['jumlah'];
    $tanggal_sewa = $data['tanggal_sewa'];
    $alamat = $data['alamat'];
    $pembayaran = $data['pembayaran'];
    $pengiriman = $data['pengiriman'];
    $total_biaya = $data['total_biaya'];

    //query insert data
    $query = "INSERT INTO tb_sewa VALUES
('', '$nama_member', '$id_member', '$nama_barang', '$id_barang', '$harga_sewa', '$lama_sewa', '$jumlah', '$tanggal_sewa', '$alamat', '$pembayaran', '$pengiriman', '$total_biaya')
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function tambah_kamera($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama_barang = $data['nama_barang'];
    $harga = $data['harga'];
    $keterangan = $data['keterangan'];

    $gambar2 = uploadGambar();
    if (!$gambar2) {
        return false;
    }
    $jenis_barang = $data['jenis_barang'];
    //query insert data
    $query = "INSERT INTO tb_produk VALUES
('', '$nama_barang', '$harga', '$keterangan', '$gambar2', '$jenis_barang')
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_hdcam($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama_barang = $data['nama_barang'];
    $harga = $data['harga'];
    $keterangan = $data['keterangan'];

    $gambar2 = uploadGambar();
    if (!$gambar2) {
        return false;
    }
    //query insert data
    $query = "INSERT INTO tb_hdcam VALUES
('', '$nama_barang', '$harga', '$keterangan', '$gambar2')
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_aksesoris($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama_barang = $data['nama_barang'];
    $harga = $data['harga'];
    $keterangan = $data['keterangan'];

    $gambar2 = uploadGambar();
    if (!$gambar2) {
        return false;
    }
    //query insert data
    $query = "INSERT INTO tb_aksesoris VALUES
('', '$nama_barang', '$harga', '$keterangan', '$gambar2')
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['foto_ktp']['name'];
    $ukuranFile = $_FILES['foto_ktp']['size'];
    $error = $_FILES['foto_ktp']['error'];
    $tmpName = $_FILES['foto_ktp']['tmp_name'];

    //cek apakah tidak ada foto_ktp yang diupload
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar terlebih dahulu')
        </script>";
        return false;
    }
    //cek apakah yang diupload foto_ktp atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    // $ekstensiGambar s= explode(delimiter,string) delimiter --> utk memecah string menjadi array
    //ex : herlambang.jpg --> ['herlambang', 'jpg']
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }
    //cek jika ukuran terlalu besar
    if ($ukuranFile > 10000000) {
        echo "<script>
            alert('ukuran gambar anda terlalu besar');
            </script>
            ";
        return false;
    }

    //lolos pengecekan, foto_ktp siap diupload
    //generate nama foto_ktp baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return ($namaFileBaru);
}
function uploadGambar()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada foto_ktp yang diupload
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar terlebih dahulu')
        </script>";
        return false;
    }
    //cek apakah yang diupload foto_ktp atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
    // $ekstensiGambar s= explode(delimiter,string) delimiter --> utk memecah string menjadi array
    //ex : herlambang.jpg --> ['herlambang', 'jpg']
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    //cek jika ukuran terlalu besar
    if ($ukuranFile > 1000000000) {
        echo "<script>
        alert('ukuran gambar anda terlalu besar');
        </script>
        ";
        return false;
    }

    //lolos pengecekan, foto_ktp siap diupload
    //generate nama foto_ktp baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../../img/' . $namaFileBaru);

    return ($namaFileBaru);

    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function hapus($id)
{
    global $conn;
    $query = "DELETE FROM tb_anggota WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusBarang($id)
{
    global $conn;
    $query = "DELETE FROM tb_produk WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusAksesoris($id)
{
    global $conn;
    $query = "DELETE FROM tb_aksesoris WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusKamera($id)
{
    global $conn;
    $query = "DELETE FROM tb_kamera WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusHdcam($id)
{
    global $conn;
    $query = "DELETE FROM tb_hdcam WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusSewa($id)
{
    global $conn;
    $query = "DELETE FROM tb_sewa WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusMember($id)
{
    global $conn;
    $query = "DELETE FROM tb_anggota WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = $data["nama"];
    $tempat_lahir = $data["tempat_tanggal_lahir"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $alamat = $data["alamat"];
    $email = $data["email"];
    $no_hp = $data["no_hp"];
    $gambarLama = $data["gambarLama"];

    //CEK apakah user pilih gambar baru atau tidak
    if ($_FILES['foto_ktp']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $akun = $data["akun"];
    //query insert data
    $query = "UPDATE tb_anggota SET
nama = '$nama',
alamat = '$alamat',
jenis_kelamin = '$jenis_kelamin',
tempat_tanggal_lahir = '$tempat_lahir',
email = '$email',
no_hp = '$no_hp',
foto_ktp = '$gambar',
akun = '$akun'
WHERE id = '$id'
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function ubahBarang($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = $data["nama_barang"];
    $harga = $data["harga"];
    $keterangan = $data["keterangan"];
    $gambarLama = $data["gambarLama"];
    $jenis_barang = $data["jenis_barang"];

    //CEK apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadGambar();
    }
    //query insert data
    $query = "UPDATE tb_produk SET
nama_barang = '$nama',
harga = '$harga',
keterangan = '$keterangan',
gambar = '$gambar',
jenis_barang = '$jenis_barang'
WHERE id = '$id'
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function ubahKamera($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = $data["nama_barang"];
    $harga = $data["harga"];
    $keterangan = $data["keterangan"];
    $gambarLama = $data["gambarLama"];

    //CEK apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadGambar();
    }
    //query insert data
    $query = "UPDATE tb_kamera SET
nama_barang = '$nama',
harga = '$harga',
keterangan = '$keterangan',
gambar = '$gambar'
WHERE id = '$id'
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function ubahHdcam($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = $data["nama_barang"];
    $harga = $data["harga"];
    $keterangan = $data["keterangan"];
    $gambarLama = $data["gambarLama"];

    //CEK apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadGambar();
    }
    //query insert data
    $query = "UPDATE tb_hdcam SET
nama_barang = '$nama',
harga = '$harga',
keterangan = '$keterangan',
gambar = '$gambar'
WHERE id = '$id'
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function ubahAksesoris($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = $data["nama_barang"];
    $harga = $data["harga"];
    $keterangan = $data["keterangan"];
    $gambarLama = $data["gambarLama"];

    //CEK apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadGambar();
    }
    //query insert data
    $query = "UPDATE tb_aksesoris SET
nama_barang = '$nama',
harga = '$harga',
keterangan = '$keterangan',
gambar = '$gambar'
WHERE id = '$id'
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function ubahSewa($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama_member = $data["nama_member"];
    $id_member = $data["id_member"];
    $nama_barang = $data["nama_barang"];
    $id_barang = $data["id_barang"];
    $harga_sewa = $data["harga_sewa"];
    $lama_sewa = $data["lama_sewa"];
    $jumlah = $data["jumlah"];
    $tanggal_sewa = $data["tanggal_sewa"];
    $alamat = $data["alamat"];
    $pembayaran = $data["pembayaran"];
    $pengiriman = $data["pengiriman"];
    $total_biaya = $data["total_biaya"];

    //query insert data
    $query = "UPDATE tb_sewa SET
nama_member = '$nama_member',
id_member = '$id_member',
nama_barang = '$nama_barang',
id_barang = '$id_barang',
harga_sewa = '$harga_sewa',
lama_sewa = '$lama_sewa',
jumlah = '$jumlah',
tanggal_sewa = '$tanggal_sewa',
alamat = '$alamat',
pembayaran = '$pembayaran',
pengiriman = '$pengiriman',
total_biaya = '$total_biaya'
WHERE id = '$id'
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}

function carimember($keyword)
{
    $query = "SELECT * FROM tb_anggota WHERE nama LIKE
    '%$keyword%'
    OR tempat_tanggal_lahir LIKE '%$keyword%'
    OR jenis_kelamin LIKE '%$keyword%'
    OR alamat LIKE '%$keyword%'
    OR email LIKE '%$keyword%'
    OR no_hp LIKE '%$keyword%'
    ";
    return query($query);
}

function carikamera($keyword)
{
    $query = "SELECT * FROM tb_kamera WHERE nama_barang LIKE
    '%$keyword%'
    OR harga LIKE '%$keyword%'
    OR keterangan LIKE '%$keyword%'
    ";
    return query($query);
}

function carihdcam($keyword)
{
    $query = "SELECT * FROM tb_hdcam WHERE nama_barang LIKE
    '%$keyword%'
    OR harga LIKE '%$keyword%'
    OR keterangan LIKE '%$keyword%'
    ";
    return query($query);
}

function cariaksesoris($keyword)
{
    $query = "SELECT * FROM tb_aksesoris WHERE nama_barang LIKE
    '%$keyword%'
    OR harga LIKE '%$keyword%'
    OR keterangan LIKE '%$keyword%'
    ";
    return query($query);
}

function caribarang($keyword)
{
    $query = "SELECT * FROM tb_barang WHERE nama_barang LIKE
    '%$keyword%'
    OR harga LIKE '%$keyword%'
    OR keterangan LIKE '%$keyword%'
    ";
    return query($query);
}

function carisewa($keyword)
{
    $query = "SELECT * FROM tb_sewa WHERE nama_member LIKE
    '%$keyword%'
    OR nama_barang LIKE '%$keyword%'
    OR jumlah LIKE '%$keyword%'
    OR harga_sewa LIKE '%$keyword%'
    OR tanggal_sewa LIKE '%$keyword%'
    OR pembayaram LIKE '%$keyword%'
    OR pengiriman LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data)
{
    global $conn;
    $nama_lengkap = $data['nama_lengkap'];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $level = strtolower(stripslashes($data["level"]));

    //cek username sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar!');
        </script>";
        return false;
    }
    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama_lengkap', '$username', '$password', '$level')");

    return mysqli_affected_rows($conn);
}

function registrasi_admin($data)
{
    global $conn;
    // $nama_lengkap = strtolower(stripslashes($data["nama_lengkap"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM admins WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar!');
        </script>";
        return false;
    }
    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan admin baru ke database
    mysqli_query($conn, "INSERT INTO admins VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
