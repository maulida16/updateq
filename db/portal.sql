-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 05:01 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Maulida Mei');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` enum('Aktif','Tidak Aktif') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `judul` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tgl_posting` datetime NOT NULL,
  `text_berita` longtext CHARACTER SET latin1 NOT NULL,
  `dilihat` int(11) NOT NULL,
  `gambar` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kategori`, `id_admin`, `judul`, `tgl_posting`, `text_berita`, `dilihat`, `gambar`) VALUES
(1, 1, 1, 'Ashila Sikado Sebut Netizen Tidak Sopan', '2020-12-23 14:03:27', 'Jakarta-2020. Ashila Sikado, yang notabene merupakan seorang youtuber dan juga tiktoker, baru-baru ini menggemparkan dunia tik tok karena pernyataannya yang terang-terangan tidak menyukai seorang netizen yang bertanya soal agamanya. Dia berkata \"Coba lo tanya sama guru lo, sopan nggak bertanya seperti ini. Apalagi dengan orang yang ELO gak kenal.\"', 1, 'default.jpeg'),
(4, 4, 1, 'Chanel skinnyindonesian24 Setelah Bulan Juni 2021', '2020-12-29 05:17:58', 'Setelah memutuskan untuk mundur dari Youtube, kedua kaka beradik Jovi dan Andovi da Lopez ini mengungkap rencana channel skinnyindonesian24 kedepannya. Mereka memutuskan untuk menghapus nama skinnyindonesian24 menjadi da Lopez, nama ayah mereka yang berasal dari Maumere, Nusa Tenggara Timur. Rencananya channel mereka ini akan menjadi channel untuk memperkenalkan budaya dari Nusa Tenggara Timur.', 1, 'Chanel skinnyindonesian24 Setelah Bulan Juni 2021.'),
(7, 4, 1, 'Terungkap, Inilah Kekasih Jang Hansol', '2021-01-03 18:35:36', 'Jang Hansol, sang pemilik channel youtube Korea Reomit, baru-baru ini telah menguak informasi kisah asmaranya dengan Jeanette. Ternyata mereka telah berhubungan selama 4 tahun lamanya. Jeanette adalah teman kampus Jang Hansol di Singapura. Keduanya menjalani lika-liku hidup dalam menjalani hubungan karena kendala jarak. Berhubung kondisi finansial Jang Hansol yang belum stabil, Jeanette memutuskan untuk menjadi pramugari sehingga ia bisa mengunjungi Hansol di Korea Selatan. Namun, keduanya saat ini sudah tidak lagi menjalani hubungan jarak jauh karena Jeanette mendapatkan beasiswa S2 di Korea Selatan.\r\n\r\nWah, romantis sekali ya kisah asmara mereka!\r\n\r\nCategories: Design, Events Tags: #html, #trends', 1, 'Terungkap, Inilah Kekasih Jang Hansol.jpeg'),
(9, 3, 1, 'Akun Twitter Fadli Zon Viral', '2021-01-05 02:40:40', 'Akun twitter milik anggota DPR RI Fadli Zon, @fadlizon jadi perbincangan di lini massa. Pasalnya, akun bercentang biru itu diduga like video porno pada Rabu, 6 Januari 2021 Hal ini terungkap dari tangkapan layar yang beredar terlihat akun milik Fadli Zon sedang tab like sebuah video porno. Sontak saja, Fadli Zon jadi bulan-bulanan netizen. Meskipun kini video tersebut sudah tidak kelihatan di fitur like twitter milik Fadli Zon. Akun @MurtadhaOne1 menulis: Ya ampuun tab like nya anggota @DPR_RI dari @Gerindra ini kok ada video bokep?', 1, 'Akun Twitter Fadli Zon Viral.jpg'),
(10, 2, 1, 'Sabian Tama Sebar Keburukan Awkarin, Netizen Geram', '2021-01-05 03:47:39', 'Jakarta - Sabian Tama digadang-gadang putus dengan Awkarin. Para Netizen menyebutnya selingkuh, namun ia tidak terima. Awal kecurigaan Awakrin bermula ketika Sabian menjalin komunikasi dengan seorang perempuan di bidang fashion. Walaupun komunikasi tersebut sering dilakukan, nyatanya Sabian menyangkal bahwa ia selingkuh. Ia chatting dengan perempuan tersebut murni karena bisnis. <br>\r\nSebelum berpacaran, Sabian sempat memandang sebelah mata terhadap konten-konten Awkarin di YouTube. Saat adiknya menonton YouTube Awkarin beberapa tahun lalu, Sabian mengatakan, \"Ngapain sih nonton vlog kayak gini? Gak ada mutunya, gak ada edukasinya.\" Namun saat di kamar sendirian, Sabian penasaran dan tertarik untuk menontonnya. <br>\r\nNetizen menyayangkan sikap Sabian yang malah terkesan menjatuhkan Awkarin. Banyak netizen yang mengomentari Sabian dan mengatakan bahwa seharusnya Sabian bersyukur pernah menjadi seseorang yang mengisi hati Awkarin, karena sekarang Sabian jadi terkenal dan banyak endorse-an. <br>\r\nWah, kalau mimin pribadi gak bisa komentar apa-apa deh. Lagipula itu urusan mereka berdua >.<\r\n', 1, 'ssfbfsb.jpeg'),
(12, 2, 1, 'lalalalala', '2021-01-05 12:36:52', 'sgsdsdhfhsfjsjfffs', 1, 'lalalalala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_iklan`
--

CREATE TABLE `tb_iklan` (
  `id_iklan` int(5) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `nm_perusahaan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `isi_iklan` text CHARACTER SET latin1 NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `iklan` text CHARACTER SET latin1 NOT NULL,
  `status` enum('Aktif','Tidak Aktif') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Tiktok'),
(2, 'Instagram'),
(3, 'Twitter'),
(4, 'Youtube');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `isi_komentar` text CHARACTER SET latin1 NOT NULL,
  `tgl_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar2`
--

CREATE TABLE `tb_komentar2` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tanggal_mulaikerja` date NOT NULL,
  `tanggal_selesaikerja` date NOT NULL,
  `honor` double NOT NULL,
  `lamakerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  ADD PRIMARY KEY (`id_iklan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `tb_komentar2`
--
ALTER TABLE `tb_komentar2`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_berita` (`id_berita`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  MODIFY `id_iklan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_berita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  ADD CONSTRAINT `tb_iklan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_komentar_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_komentar2`
--
ALTER TABLE `tb_komentar2`
  ADD CONSTRAINT `FK_berita` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
