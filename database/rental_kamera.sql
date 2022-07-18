-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2022 at 12:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_kamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `akun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `no_hp`, `gambar`, `akun`) VALUES
(1, 'Umar Syaifullah', '2022-07-09', 'laki - laki', 'Wonogiri', 'fullo@gmail.com', '089670198915', '62c9342805a51.png', '1'),
(2, 'Yusuf Bagus Sungging Herlambang', '2022-07-09', 'laki - laki', 'Sukoharjo', 'bagus@gmail.com', '089670198915', '62c9496121785.jpg', '2'),
(3, 'Dhimas Risang Maulana', '2022-07-18', 'laki - laki', 'Grogol', 'dhimas@gmail.com', '089670198915', '62d545f8a2801.png', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_barang`
--

CREATE TABLE `tb_jenis_barang` (
  `id` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_barang`
--

INSERT INTO `tb_jenis_barang` (`id`, `nama_barang`) VALUES
(1, 'Kamera'),
(2, 'Hdcam'),
(3, 'Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jenis_barang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama_barang`, `harga`, `keterangan`, `gambar`, `jenis_barang`) VALUES
(1, 'Kamera Canon 1100D', '100000', 'Kamera Canon EOS 1100D Kit ini dibekali spesifikasi resolusi 12MP dengan sensor CMOS, ISO 100-6400, shutter speed 30-1/4000 detik, dan HD video. ', 'KC1100D.jpg', '1'),
(2, 'Kamera Nikon D90', '200000', '12.9 megapixel DX-format CMOS sensor (effective pixels: 12.3 million) 3.0-inch 920,000 pixel (VGA x 3 colors) TFT-LCD (same as D3 and D300) Live View with contrast-detect AF, face detection Image sensor cleaning (sensor shake) Illuminated focus points', 'KND90.jpg', '1'),
(3, 'Kamera Mirrorless Fujifilm X-H1 (Body Only)', '385000', '24.3MP APS-C X-Trans CMOS III Sensor X-Processor Pro Engine 5-Axis In-Body Image Stabilization Internal DCI 4K Video dan F-Log Gamma 0.75x 3.69m-Dot Electronic Viewfinder', 'KMFu.jpg', '1'),
(4, 'Kamera IR Canon 40D IR V9.8 +Canon 18-55mm', '350000', '100–1600 in 1/3 EV steps; 3200 expansion available Storage media: CompactFlash (CF) (Type I or Type II) and Microdrive (max 32GB) Focus areas: 9 user points (cross type)', 'KIR Canon 40D.jpg', '1'),
(5, 'Kamera 360 Ricoh Theta S', '200000', 'Kamera 360 Theta S, memiliki sensor CMOS 1/2,3 inci dengan resolusi masing-masing 12 megapixel.Untuk video , ia bisa merekam dalam resolusi 1080p selama 25 menit.', 'K360 Ricoh The.jpg', ''),
(6, 'Kamera Medium Format Phase one', '3600000', 'Phase One XF (Image: Phase One XF 100MP) Seharga mobil KIA Grand Sedona, kamera Phase One XF 100 megapixel adalah sebuah kamera medium format yang memiliki sensor beresolusi ekstra besar, yakni 100 megapixel. Perangkat kamera ini adalah gabungan bodi Phas', 'KMF.jpg', '1'),
(7, 'KC5D MK IV', '600000', '30.4MP Full-Frame CMOS Sensor DIGIC 6+ Image Processor 3.2″ 1.62m-Dot Touchscreen LCD Monitor DCI 4K Video at 30 fps; 8.8MP Still Grab 61-Point High Density Reticular AF', 'KC5D MK IV.jpg', '1'),
(8, 'KND850', '600000', 'frame dengan resolusi 45,4 megapiksel. Kamera ini memiliki continuous shooting speed maksimal hingga 7fps, sehingga kamu bisa memotret 7 gambar dalam satu detik.', 'KND850.jpg', '1'),
(9, 'KND7500', '400000', 'Sensor APS-C, 20 MP EXPEED 5 processor ISO 100-51200, bisa ditingkatkan ke ISO 1.6 juta Kecepatan foto berturut-turut 8 foto per detik, buffer 50 foto RAW 14 bit Video 4K UHD', 'KND7500.jpg', '1'),
(10, 'KVHSony PD 177', '300000', 'Resolusi Kamera 1.37 MP, Zoom Optik x 20, Zoom Digital , Tipe Memori HDD', 'KVHSony PD 177.jpg', '2'),
(11, 'KVHSony HXR-MC2500', '250000', '1/4″ Exmor R CMOS Sensor 26.8mm Equivalent Wide-Angle Lens Records SD in DV AVI File OLED Viewfinder with 1.44 Million Dots Flip-Up 3″ LCD with 921k Dot Resolution', 'Sony HXR-MC2500.jpg', '2'),
(12, 'Kamera Video Handycam Panasonic MDH-2', '240000', 'Kamera Film 35 mm Video: 28,0 - 729,6 mm [16:9] 36,2 - 893,0 mm [4:3] Foto: 33,2 - 697,6 mm [3:2] 28,0 - 729,6 mm [16:9] 33,9 - 712,6 mm [4:3] Diameter Filter: 49 mm: Merek Lensa: Lensa Panasonic: BAGIAN KAMERA Cahaya Standar: 1.400 lx: Cahaya Minimum: 2 ', 'KVH.png', '2'),
(13, 'Sony Camcorder CX 190', '130000', 'Key specs\r\nsensor type: CMOS\r\noptical sensor size: 1/5.8 in\r\neffective megapixels: 1.31 Mpx\r\nmaximum aperture: 3.2\r\nauto focus: yes\r\ndisplay diagonal: 2.7 in\r\ntouchscreen: no\r\nmaximum resolution: 1920, 1080 px', 'OIP.jpg', '2'),
(14, 'Kamera Video Handycam Panasonic MDH-2', '240000', 'Kamera Film 35 mm Video: 28,0 - 729,6 mm [16:9] 36,2 - 893,0 mm [4:3] Foto: 33,2 - 697,6 mm [3:2] 28,0 - 729,6 mm [16:9] 33,9 - 712,6 mm [4:3] Diameter Filter: 49 mm: Merek Lensa: Lensa Panasonic: BAGIAN KAMERA Cahaya Standar: 1.400 lx: Cahaya Minimum: 2 ', 'KVH.png', '2'),
(17, 'Sony 8Mm Camcorder', '600000', 'Sensor\r\nTIPE SENSOR\r\nSensor CMOS Exmor R bercahaya belakang jenis 1/2.5 (7,20mm)\r\nPIKSEL EFEKTIF (VIDEO)\r\nsekitar 8,29 Megapiksel(16:9)2\r\nPIKSEL EFEKTIF (FOTO)\r\nsekitar 8,29 Megapiksel (16:9)/sekitar 6,22 Megapiksel (4:3)\r\nProsesor\r\nPROSESOR GAMBAR\r\nProse', 's-l1000.jpg', '2'),
(18, 'Tripod Manfrotto 725B', '40000', 'Manfrotto 725B adalah tripod kecil yang solid dan ringan yang akan melakukan pekerjaan itu, tetapi jelas tidak memiliki beberapa fitur tripod yang lebih mahal. Ada beberapa hal yang harus Anda ketahui sebelum memutuskan untuk membeli tripod ini. Kepala bo', 'Tripod Manfrotto 725B.jpg', '3'),
(19, 'Tripod Monopod Manfrotto', '40000', 'Material  Aluminium Bobot	1,56 kg Tinggi maksimum  150 cm Tinggi minimum  40 cm Daya tahan beban  Maks. 8 kg Jumlah bagian kaki  4 Kepala  Ball head', 'Tipod Monopod Manfrotto.jpg', '3'),
(20, 'Tripod Libec', '60000', 'Tripod TH 650 EX Video Didesain untuk digunakan dengan camcorder DV dan HD yang lebih kecil saat ini, Libec’s 650EX adalah sistem tripod all-in-one yang ringkas. ', 'Tripod Libec.jpg', '3'),
(21, 'Fujifilm XF 27mm f2.8 Pancake', '60000', 'Fujifilm XF 27mm f2.8 pancake Fujinon The Fujifilm XF 27mm f2.8 pancake Fujinon Lens from Fujifilm is an extremely compact (2.41 x 0.91?), lightweight (2.75 oz) prime lens with a versatile 35mm equivalent focal length of 41mm. It provides a 55.5° angle of', 'Fujifilm XF.jpg', '3'),
(22, 'Beholder DS1', '200000', 'The Beholder Gimbal DS1 is a 3-axis handheld camera stabilizer designed for large DSLRs and mirrorless cameras to achieve smooth, stable footage.', 'BeholderDS1.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_sewa` varchar(100) NOT NULL,
  `lama_sewa` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tanggal_sewa` datetime NOT NULL,
  `alamat` text NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `pengiriman` varchar(100) NOT NULL,
  `total_biaya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sewa`
--

INSERT INTO `tb_sewa` (`id`, `nama_member`, `id_member`, `nama_barang`, `id_barang`, `harga_sewa`, `lama_sewa`, `jumlah`, `tanggal_sewa`, `alamat`, `pembayaran`, `pengiriman`, `total_biaya`) VALUES
(1, 'Umar Syaifullah', 1, 'Beholder DS1', 22, '200000', '2', '3', '2022-07-09 15:56:52', 'Wonogiri', 'Via Cash', 'Barang Ambil Sendiri', '1200000'),
(2, 'Dhimas Risang Maulana', 3, 'Kamera Canon 1100D', 1, '100000', '2', '3', '2022-07-18 18:37:46', 'Grogol', 'Via Cash', 'Barang Ambil Sendiri', '600000'),
(3, 'Dhimas Risang Maulana', 3, 'Kamera Nikon D90', 2, '200000', '2', '3', '2022-07-18 18:58:32', 'Grogol', 'Via Cash', 'Barang Ambil Sendiri', '1200000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Umar Syaifullah', 'umarsyaifullah', '$2y$10$4zUjXWXJV8BoVYZMlAMg3u2Oqb7hIMUBItkhCAk.F7z/CphpjhR56', 'member'),
(2, 'Yusuf Bagus Sungging Herlambang', 'yusufbagus', '$2y$10$5OYvVPw9Mmaq62R4fOJTcuBUsQR1LRleiyjcSLRXgKayp0YYBI5FC', 'admin'),
(3, 'Dhimas Risang Maulana', 'dhimasrisang', '$2y$10$Y8tctb/csRDQdHvzxkhqgu4HcxZOkFuD3y8JdMBY9q78Ns/X5KrG.', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_barang`
--
ALTER TABLE `tb_jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jenis_barang`
--
ALTER TABLE `tb_jenis_barang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
