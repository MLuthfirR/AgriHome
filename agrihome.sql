-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 06:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrihome`
--

-- --------------------------------------------------------

--
-- Table structure for table `cara_tanam`
--

CREATE TABLE `cara_tanam` (
  `idtype_ct` int(5) NOT NULL,
  `type_ct` char(15) NOT NULL,
  `deskrpsi_ct` longtext CHARACTER SET hp8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanaman`
--

CREATE TABLE `jenis_tanaman` (
  `idtype_jt` int(5) NOT NULL,
  `idtype_ct` int(5) NOT NULL,
  `jenis_tanaman` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kalender_tanaman`
--

CREATE TABLE `kalender_tanaman` (
  `kalendertanaman_id` int(5) NOT NULL,
  `tanam_id` varchar(5) NOT NULL,
  `username_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_tanaman`
--

CREATE TABLE `penyakit_tanaman` (
  `id_penyakit` int(5) NOT NULL,
  `nama_tanaman` char(15) NOT NULL,
  `deskripsi_penyakit` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanam`
--

CREATE TABLE `tanam` (
  `tanam_id` int(5) NOT NULL,
  `tanaman_id` varchar(5) NOT NULL,
  `tanggal_tanam` date NOT NULL,
  `tanggal_panen` date NOT NULL,
  `reminder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `tanaman_id` varchar(5) NOT NULL,
  `idtype_jt` int(5) NOT NULL,
  `nama_tanaman` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username_id` varchar(10) NOT NULL,
  `fullname_user` char(15) NOT NULL,
  `password_user` varchar(10) NOT NULL,
  `email_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cara_tanam`
--
ALTER TABLE `cara_tanam`
  ADD PRIMARY KEY (`idtype_ct`);

--
-- Indexes for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  ADD PRIMARY KEY (`idtype_jt`);

--
-- Indexes for table `kalender_tanaman`
--
ALTER TABLE `kalender_tanaman`
  ADD PRIMARY KEY (`kalendertanaman_id`);

--
-- Indexes for table `penyakit_tanaman`
--
ALTER TABLE `penyakit_tanaman`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tanam`
--
ALTER TABLE `tanam`
  ADD PRIMARY KEY (`tanam_id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`tanaman_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  MODIFY `idtype_jt` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kalender_tanaman`
--
ALTER TABLE `kalender_tanaman`
  MODIFY `kalendertanaman_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penyakit_tanaman`
--
ALTER TABLE `penyakit_tanaman`
  MODIFY `id_penyakit` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tanam`
--
ALTER TABLE `tanam`
  MODIFY `tanam_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
