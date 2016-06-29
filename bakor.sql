-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jun 2016 pada 17.49
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` varchar(15) NOT NULL,
  `kemeja` int(11) NOT NULL,
  `dasi` int(11) NOT NULL,
  `sabuk` int(11) NOT NULL,
  `kaos` int(11) NOT NULL,
  `rambut` int(11) NOT NULL,
  `idcard` int(11) NOT NULL,
  `waktu` varchar(24) NOT NULL,
  `tanggal` text NOT NULL,
  `celana` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `remember_token`) VALUES
(1, 'admin', '$2y$10$sYmPtIq4leUCHlVfM5Dev.lTL9AqRFpkOhVJS.pwG4cze.1Y/x3b.', '03voiFApF3cyT02rwS3ktU8MwxnRCwuHMfnXDVqeQTnRBHlvcVxGp962cHDt'),
(2, 'a', '$2y$10$gp6bRa3xl03y9YCk9o2g4.eIZJEliJMo4doMPPr6iFEP/LHyayfLC', ''),
(3, 'zxzx', '$2y$10$tzlUpTWC38B2kY1RZlHrYuqZw4zvZ0iThzUB6Xcov1XgBlf65Zubm', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin`
--

CREATE TABLE IF NOT EXISTS `izin` (
  `id` int(11) NOT NULL,
  `nrp` text NOT NULL,
  `nama` text NOT NULL,
  `jamkeluar` text NOT NULL,
  `jamkembali` text NOT NULL,
  `alasan` text NOT NULL,
  `tanggal` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
