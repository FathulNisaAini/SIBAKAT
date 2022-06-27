-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 09:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(8) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_admin` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `gambar`, `id_admin`, `tanggal`, `detail`) VALUES
(1, 'Bansos PKH yang Cair Juni 2022', 'a1.jpg', 1, '2022-06-27', 'Bansos PKH diberikan bagi keluarga yang terdaftar dalam Data Terpadu Kesejahteraan Sosial (DTKS) dan sesuai kategori penerima PKH menurut Kementerian Sosial (Kemensos).'),
(2, 'Cara Cek dan Daftar BLT Anak Sekolah SD, SMP, SMA, Ada Bantuan Rp 4,4 Juta', 'a2.jpeg', 1, '2022-06-20', 'Kementerian Sosial (Kemensos) menyalurkan BLT anak sekolah yang merupakan bagian dari Program Keluarga Harapan (PKH). Anak usia sekolah adalah komponen dalam PKH bersama lansia, disabilitas berat, dan ibu hamil. Program BLT anak sekolah diperuntukkan bagi keluarga miskin yang memiliki anak usia sekolah dengan total mencapai Rp 4,4 juta.\r\n                '),
(3, 'Jokowi Bagikan Bansos di Pasar Baros Serang: Cukup Nggak?', 'a3.jpeg', 1, '2022-06-17', 'mengunjungi Pasar Baros, Kabupaten Serang, untuk menyerahkan sejumlah bantuan sosial bagi penerima manfaat Program Keluarga Harapan (PKH) dan para pedagang. Bantuan yang diberikan senilai Rp 1,2 juta.</p>\r\n                <a href=\"#\" class=\"btn\">selengkapnya'),
(4, 'Tips untuk Menghemat Pengeluaran', '1656098465_dompet.jpg', 1, '2022-06-25', 'Jika ingin berhemat kita harus tau dulu kebutuhan serta hal yang penting serta mendesak yang harus ada sebab jika hal ini tidak di penuhi akan menggangu dan akan mempengarhuikehidupan kita sehari-hari. Karena setipa orang memiliki latar belakang serta kebutuhan yang berbeda-beda, untuk itu kita perlu mempetakan berdasarkan tingkat kebutuhan serta urgensi yang harus di penehui serta hal mendesak yang harus ada.');

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `persyaratan` varchar(255) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `sumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `nama`, `gambar`, `deskripsi`, `persyaratan`, `waktu`, `lokasi`, `sumber`) VALUES
(2, 'Bantuan UMKM', 'a1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '-KTP\r\n-SIM', '2022-06-22', 'Surakarta', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(3, 'Bantuan Anak-anak/Janda', 'bb.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '-KK', '2022-06-23', 'Yogyakarta', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(4, 'Bantuan Sosial', 'a3.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '- Ijazah SMA\r\n- Forklift Certification', '2022-06-27', 'Surakarta', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(5, 'Bantuan Pendidikan PT Sinar Mas', 'a1.jpg', 'Bansos oleh PT Sinar mas kembali Disalurkan Pada Juni 2022. Bansos PKH Diberikan Bagi Keluarga Yang Terdaftar Dalam Data Terpadu Kesejahteraan Sosial (DTKS) Dan Sesuai Kategori Penerima PKH Menurut Kementerian Sosial (Kemensos)', '- Hidup', '2022-06-30', '- Tartarus', 'www.Sinarmas.com'),
(6, 'Bantuan Kesja Pemda Nganjuk', 'a2.jpeg', 'Bansos PKH Tahap II Kembali Disalurkan Pada Juni 2022. Bansos PKH Diberikan Bagi Keluarga Yang Terdaftar Dalam Data Terpadu Kesejahteraan Sosial (DTKS) Dan Sesuai Kategori Penerima PKH Menurut Kementerian Sosial (Kemensos)', '- Memiliki KTP', '2022-07-26', 'Nganjuk', NULL),
(7, 'Pencarian Data PM (Penerima Manfaat) Bansos Melalui DTKS', 'DTKS.png', 'DTKS sekarang menyediakan layanan untuk mencari data penerima manfaat bansos melalui DTKS', '- Memiliki KTP', NULL, 'Web resmi DTKS', 'https://cekbansos.kemensos.go.id/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin A', 'A@gmail.com', '$2y$10$9Gm7JvaaUtizJE03YBZzJeTfmG8INYgatW/WsJpxhs6iDY8yl1nMy'),
(2, 'Muadz', 'muadz@gmail.com', '$2y$10$uDOHzqqE0YVEK05gMeNckejUO9ZPXNpQY3qN3SW28/zthbJnfYqAW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user_foreign` (`id_admin`) USING BTREE;

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `users_id_user_foreign` FOREIGN KEY (`id_admin`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
