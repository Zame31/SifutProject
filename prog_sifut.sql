-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2015 at 08:14 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prog_sifut`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapang`
--

CREATE TABLE `lapang` (
  `id_lapang` char(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapang`
--

INSERT INTO `lapang` (`id_lapang`, `nama`, `aktif`) VALUES
('LP01', 'Lapang Sintetis 1', 'Y'),
('LP02', 'Lapang Sintetis 2', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_pelanggan` int(11) NOT NULL,
  `id_member` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `langganan` date NOT NULL,
  `kuota_main` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_pelanggan`, `id_member`, `username`, `password`, `aktif`, `tanggal_daftar`, `langganan`, `kuota_main`) VALUES
(6, 'M6', 'zamzam', 'c20ad4d76fe97759aa27a0c99bff6710', 'Y', '2015-12-26 01:39:23', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `non_member`
--

CREATE TABLE `non_member` (
  `id_pelanggan` int(11) NOT NULL,
  `id_non_member` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_member`
--

INSERT INTO `non_member` (`id_pelanggan`, `id_non_member`) VALUES
(7, 'NM7'),
(8, 'NM8'),
(9, 'NM9'),
(10, 'NM10'),
(11, 'NM11');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_telp`, `email`) VALUES
(6, 'Zamzam Nurzaman', 'Jl.Cigadung Raya Timur Rt/rw 02/14 bandung', '085720760068', 'znurzamanz@gmail.com'),
(7, 'a', 'a', 'a', ''),
(8, 'd', 'd', 'd', ''),
(9, 'd', 'd', 'd', ''),
(10, 'rrr', 'r', 'r', ''),
(11, 'g', 'g', 'g', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pesan` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `status_pemesan` varchar(30) NOT NULL,
  `id_lapang` char(8) NOT NULL,
  `id_waktu` char(8) NOT NULL,
  `tarif` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pesan`, `tanggal_pesan`, `status_pemesan`, `id_lapang`, `id_waktu`, `tarif`, `status`, `id_pelanggan`) VALUES
(7, '2015-12-26', 'sss', 'LP01', 'J01', 130000, 'www', 6),
(8, '2015-12-26', 'sssss', 'LP01', 'J02', 150000, 'tidak dikonfirmasi', 9),
(9, '2015-12-26', 'sssss', 'LP02', 'J03', 150000, 'tidak dikonfirmasi', 10),
(10, '2015-12-26', 'sssss', 'LP02', 'J05', 150000, 'tidak dikonfirmasi', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` char(8) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `harga`) VALUES
('T01', 130000),
('T02', 150000),
('T03', 175000);

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` char(8) NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu_awal`, `waktu_akhir`) VALUES
('J01', '08:00:00', '09:00:00'),
('J02', '09:00:00', '10:00:00'),
('J03', '10:00:00', '11:00:00'),
('J04', '11:00:00', '12:00:00'),
('J05', '12:00:00', '13:00:00'),
('J06', '13:00:00', '14:00:00'),
('J07', '14:00:00', '15:00:00'),
('J08', '15:00:00', '16:00:00'),
('J09', '16:00:00', '17:00:00'),
('J10', '17:00:00', '18:00:00'),
('J11', '18:00:00', '19:00:00'),
('J12', '19:00:00', '20:00:00'),
('J13', '20:00:00', '21:00:00'),
('J14', '21:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_lapang`
--

CREATE TABLE `waktu_lapang` (
  `id_lapang` char(8) NOT NULL,
  `id_waktu` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_lapang`
--

INSERT INTO `waktu_lapang` (`id_lapang`, `id_waktu`) VALUES
('LP01', 'J01'),
('LP01', 'J02'),
('LP01', 'J03'),
('LP01', 'J04'),
('LP01', 'J05'),
('LP01', 'J06');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_tarif`
--

CREATE TABLE `waktu_tarif` (
  `id_waktu` char(8) NOT NULL,
  `id_tarif` char(8) NOT NULL,
  `status` enum('normal','weekend') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_tarif`
--

INSERT INTO `waktu_tarif` (`id_waktu`, `id_tarif`, `status`) VALUES
('J01', 'T01', 'normal'),
('J02', 'T01', 'normal'),
('J03', 'T01', 'normal'),
('J04', 'T01', 'normal'),
('J05', 'T01', 'normal'),
('J06', 'T01', 'normal'),
('J07', 'T01', 'normal'),
('J08', 'T02', 'normal'),
('J09', 'T02', 'normal'),
('J10', 'T02', 'normal'),
('J11', 'T02', 'normal'),
('J12', 'T02', 'normal'),
('J13', 'T02', 'normal'),
('J14', 'T02', 'normal'),
('J01', 'T02', 'weekend'),
('J02', 'T02', 'weekend'),
('J03', 'T02', 'weekend'),
('J04', 'T02', 'weekend'),
('J05', 'T02', 'weekend'),
('J06', 'T02', 'weekend'),
('J07', 'T02', 'weekend'),
('J08', 'T03', 'weekend'),
('J09', 'T03', 'weekend'),
('J10', 'T03', 'weekend'),
('J11', 'T03', 'weekend'),
('J12', 'T03', 'weekend'),
('J13', 'T03', 'weekend'),
('J14', 'T03', 'weekend');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapang`
--
ALTER TABLE `lapang`
  ADD PRIMARY KEY (`id_lapang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `non_member`
--
ALTER TABLE `non_member`
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pesan`),
  ADD KEY `id_lapang` (`id_lapang`),
  ADD KEY `id_waktu` (`id_waktu`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indexes for table `waktu_lapang`
--
ALTER TABLE `waktu_lapang`
  ADD KEY `id_lapang` (`id_lapang`),
  ADD KEY `id_waktu` (`id_waktu`);

--
-- Indexes for table `waktu_tarif`
--
ALTER TABLE `waktu_tarif`
  ADD KEY `id_waktu` (`id_waktu`),
  ADD KEY `id_tarif` (`id_tarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `non_member`
--
ALTER TABLE `non_member`
  ADD CONSTRAINT `non_member_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_lapang`) REFERENCES `lapang` (`id_lapang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `waktu_lapang`
--
ALTER TABLE `waktu_lapang`
  ADD CONSTRAINT `waktu_lapang_ibfk_1` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `waktu_lapang_ibfk_2` FOREIGN KEY (`id_lapang`) REFERENCES `lapang` (`id_lapang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `waktu_tarif`
--
ALTER TABLE `waktu_tarif`
  ADD CONSTRAINT `waktu_tarif_ibfk_1` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `waktu_tarif_ibfk_2` FOREIGN KEY (`id_tarif`) REFERENCES `tarif` (`id_tarif`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
