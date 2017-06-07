-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jun 2017 pada 05.28
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aeroponik`
--

CREATE TABLE `aeroponik` (
  `id_aero` int(11) NOT NULL,
  `nama_aero` varchar(255) NOT NULL,
  `deskripsi_aero` text NOT NULL,
  `gambar_aero` varchar(255) NOT NULL,
  `validasi_aero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aeroponik`
--

INSERT INTO `aeroponik` (`id_aero`, `nama_aero`, `deskripsi_aero`, `gambar_aero`, `validasi_aero`) VALUES
(2, 'Tanaman Udara Bisa Terbanggg', '<p>Tanaman Udara Bisa Terbaaaangg kkwkwkwwkwk&nbsp;Tanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwkTanaman Udara Bisa Terbaaaangg kkwkwkwwkwk</p>\r\n', 'images/PicsArt_05-12-02.36.39.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsitekturtanaman`
--

CREATE TABLE `arsitekturtanaman` (
  `id_arsitektur` int(11) NOT NULL,
  `nama_arsitektur` varchar(255) NOT NULL,
  `deskripsi_arsitektur` text NOT NULL,
  `gambar_arsitektur` varchar(255) NOT NULL,
  `validasi_arsitektur` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsitekturtanaman`
--

INSERT INTO `arsitekturtanaman` (`id_arsitektur`, `nama_arsitektur`, `deskripsi_arsitektur`, `gambar_arsitektur`, `validasi_arsitektur`) VALUES
(1, 'Rumah Tanaman', '<p>Lorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;IpsumLorem RUMAH&nbsp;Ipsum</p>\r\n', 'images/house.png', 0),
(2, '[USER] Tanaman Rumah', '<p>Tanaman yang baik adalah rumah yang baik wkwkwkwkwkwkTanaman yang baik adalah rumah yang baik wkwkwkwkwkwkTanaman yang baik adalah rumah yang baik wkwkwkwkwkwkTanaman yang baik adalah rumah yang baik wkwkwkwkwkwkTanaman yang baik adalah rumah yang baik wkwkwkwkwkwkTanaman yang baik adalah rumah yang baik wkwkwkwkwkwkTanaman yang baik adalah rumah yang baik wkwkwkwkwkwkTanaman yang baik adalah rumah yang baik wkwkwkwkwkwk</p>\r\n', 'images/house.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cara_tanam`
--

CREATE TABLE `cara_tanam` (
  `id_caratanam` int(11) NOT NULL,
  `type_caratanam` varchar(255) NOT NULL,
  `deskrpsi_caratanam` text CHARACTER SET hp8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hidroponik`
--

CREATE TABLE `hidroponik` (
  `id_hidro` int(11) NOT NULL,
  `nama_hidro` varchar(255) NOT NULL,
  `deskripsi_hidro` text NOT NULL,
  `gambar_hidro` varchar(255) NOT NULL,
  `validasi_hidro` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hidroponik`
--

INSERT INTO `hidroponik` (`id_hidro`, `nama_hidro`, `deskripsi_hidro`, `gambar_hidro`, `validasi_hidro`) VALUES
(1, 'Maen Aerrrrrr', '<p>Lorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUMLorem AER IPSUM</p>\r\n', 'images/Hidro.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_tanaman`
--

CREATE TABLE `kalender_tanaman` (
  `kalendertanaman_id` int(5) NOT NULL,
  `tanam_id` varchar(5) NOT NULL,
  `username_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_tanaman`
--

CREATE TABLE `penyakit_tanaman` (
  `id_penyakit` int(11) NOT NULL,
  `judul_tanaman` char(15) NOT NULL,
  `deskripsi_penyakit` longtext NOT NULL,
  `gambar_penyakit` varchar(255) NOT NULL,
  `validasi_penyakit` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit_tanaman`
--

INSERT INTO `penyakit_tanaman` (`id_penyakit`, `judul_tanaman`, `deskripsi_penyakit`, `gambar_penyakit`, `validasi_penyakit`) VALUES
(4, 'Tanaman Penyaki', '<p>isdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkwisdeet aja tanaman lu broo wkwkwkkwkw</p>\r\n', 'images/hidroo.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabulangpot`
--

CREATE TABLE `tabulangpot` (
  `id_tabulangpot` int(11) NOT NULL,
  `nama_tabulangpot` varchar(255) NOT NULL,
  `deskripsi_tabulangpot` text NOT NULL,
  `gambar_tabulangpot` varchar(255) NOT NULL,
  `validasi_tabulangpot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabulangpot`
--

INSERT INTO `tabulangpot` (`id_tabulangpot`, `nama_tabulangpot`, `deskripsi_tabulangpot`, `gambar_tabulangpot`, `validasi_tabulangpot`) VALUES
(1, 'wkkwkwkwkwkw', '<p>ukulelelelleleleel</p>\r\n', 'images/4.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `Aktif` int(11) NOT NULL DEFAULT '1',
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `pass`, `Aktif`, `gambar`) VALUES
(1, 'Muhammad Luthfir Rahman', 'jakarta48', 'm.luthfirrahman97@gmail.com', '6d7942bd0dce1c46f4a96e8d6a79729c', 1, ''),
(16, 'user', 'rahasia', 'user@gmail.com', '6d7942bd0dce1c46f4a96e8d6a79729c', 1, ''),
(17, 'coba', 'kwkwkwkwk', 'coba@gmail.com', '6d7942bd0dce1c46f4a96e8d6a79729c', 1, ''),
(18, 'bibubibab', 'jakarta48', 'bibu@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, ''),
(19, 'kwkwkwk', 'kwwkwkwk', 'kwkwkwkwkwk@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, ''),
(20, 'bebas', 'jakarta', 'bebas@gmail.com', 'fea7c9448cdffd8b2191cafdd3ca0c58', 1, ''),
(21, 'Muhammad Luthfir', 'Jakarta', 'm.luthfirrahman@gmail.com', '6d7942bd0dce1c46f4a96e8d6a79729c', 1, 'images/Logo_IPB.svg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aeroponik`
--
ALTER TABLE `aeroponik`
  ADD PRIMARY KEY (`id_aero`);

--
-- Indexes for table `arsitekturtanaman`
--
ALTER TABLE `arsitekturtanaman`
  ADD PRIMARY KEY (`id_arsitektur`);

--
-- Indexes for table `cara_tanam`
--
ALTER TABLE `cara_tanam`
  ADD PRIMARY KEY (`id_caratanam`);

--
-- Indexes for table `hidroponik`
--
ALTER TABLE `hidroponik`
  ADD PRIMARY KEY (`id_hidro`);

--
-- Indexes for table `penyakit_tanaman`
--
ALTER TABLE `penyakit_tanaman`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tabulangpot`
--
ALTER TABLE `tabulangpot`
  ADD PRIMARY KEY (`id_tabulangpot`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aeroponik`
--
ALTER TABLE `aeroponik`
  MODIFY `id_aero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `arsitekturtanaman`
--
ALTER TABLE `arsitekturtanaman`
  MODIFY `id_arsitektur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cara_tanam`
--
ALTER TABLE `cara_tanam`
  MODIFY `id_caratanam` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hidroponik`
--
ALTER TABLE `hidroponik`
  MODIFY `id_hidro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penyakit_tanaman`
--
ALTER TABLE `penyakit_tanaman`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabulangpot`
--
ALTER TABLE `tabulangpot`
  MODIFY `id_tabulangpot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
