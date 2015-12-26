-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2015 at 05:34 AM
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
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `langganan` date NOT NULL,
  `kuota_main` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `telepon`, `email`, `username`, `password`, `aktif`, `tanggal_daftar`, `langganan`, `kuota_main`) VALUES
(1, 'aaaaaa', 'aaaaaaaaa', 'aaaaaaaaa', 'aaaaaa', 'aaaaaaa', '552e6a97297c53e592208cf97fbb3b60', 'Y', '2015-12-11 03:05:57', '2015-12-27', 8),
(91900, 'aaaa', 'aaa', 'telepon', 'email', 'username', 'password', 'Y', '0000-00-00 00:00:00', '0000-00-00', 0),
(91901, 'Zamzam', 'Jl.Cigadung Raya Timur Rt/rw 02/14 bandung', '085720760068', 'znurzamanz@gmail.com', 'zamzam', 'd0db05aabb991942a64e1b599ce379f9', 'Y', '2015-12-11 03:22:50', '0000-00-00', 0),
(91902, 'udin balabala', 'sekeloa', '087720210310', 'udin@gmail.com', 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'Y', '2015-12-14 02:28:08', '0000-00-00', 0),
(91903, 'slkdjasdfk', 'slkfjs', '12312', '123123', 'wabaki31', '9dc15f9e4fd5754d567b3e05be76160c', 'Y', '2015-12-22 09:28:03', '0000-00-00', 0),
(91904, 's', 's', 's', 's', 's', '03c7c0ace395d80182db07ae2c30f034', 'Y', '2015-12-22 09:34:26', '0000-00-00', 0),
(91910, 'asflaksdjf', 'alsdkjaslkdaj', 'aslkdjaldksj', 'alskdjalk', 'askdjas', 'a8f5f167f44f4964e6c998dee827110c', 'Y', '2015-12-22 09:39:04', '0000-00-00', 0),
(91913, 'bbqbb', 'b', 'b', 'b', 'bb', '92eb5ffee6ae2fec3ad71c777531578f', 'Y', '2015-12-22 09:49:00', '0000-00-00', 0),
(91914, 'azzz', 'zzzz', 'z', 'z', 'z', 'fbade9e36a3f36d3d676c1b808451dd7', 'Y', '2015-12-22 09:51:16', '0000-00-00', 0),
(91917, 'v', 'vv', 'vv', 'v', 'vv', '9e3669d19b675bd57058fd4664205d2a', 'Y', '2015-12-22 09:59:09', '0000-00-00', 0),
(91919, '111', '1', '1', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'Y', '2015-12-22 10:00:08', '0000-00-00', 0),
(91920, 'awwwr', 'r', 'r', 'rr', 'r', '4b43b0aee35624cd95b910189b3dc231', 'Y', '2015-12-23 06:48:23', '0000-00-00', 0),
(91922, 'uUU', 'u', 'u', 'u', 'u', '7b774effe4a349c6dd82ad4f4f21d34c', 'Y', '2015-12-23 06:49:25', '0000-00-00', 0),
(91923, 'jJJ', 'J', 'J', 'J', 'J', 'ff44570aca8241914870afbc310cdb85', 'Y', '2015-12-23 06:50:45', '0000-00-00', 0),
(91924, 'diki darma', 'cianjur', '085522224444', 'diki@gmail.com', 'diki31', 'd0f3c22a00881199c50cd31088100164', 'Y', '2015-12-25 09:43:15', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `non_member`
--

CREATE TABLE `non_member` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pesan` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `status_pemesan` varchar(30) NOT NULL,
  `id_lapang` char(8) NOT NULL,
  `id_waktu` char(8) NOT NULL,
  `tarif` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pesan`, `tanggal_pesan`, `nama_pemesan`, `status_pemesan`, `id_lapang`, `id_waktu`, `tarif`, `status`) VALUES
(1, '2015-12-16', 'zaza', 'non-member', 'LP01', 'J01', 0, 'menunggu Konfirmasi'),
(2, '2015-12-16', 'zaza', 'non-member', 'LP02', 'J02', 0, 'menunggu Konfirmasi'),
(5, '2015-12-18', 'asdfffa', 'non-member', 'LP01', 'J03', 123111, 'pending'),
(6, '2015-12-16', 'asda', 'asdasda', 'LP02', 'J03', 213123, 'qweq'),
(7, '2015-12-16', 'asadas', 'aasdas', 'LP02', 'J01', 121212, 'asdadas'),
(8, '2015-12-19', 'watafak', 'member', 'LP01', 'J03', 130000, 'pending bro'),
(9, '2015-12-19', 'wawawa', 'non-member', 'LP01', 'J01', 130000, 'menunggu Konfirmasi'),
(12, '2015-12-19', 'qq', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(13, '2015-12-19', 'fff', 'non-member', 'LP02', 'J01', 130000, 'menunggu Konfirmasi'),
(15, '2015-12-19', 'zaaaas', 'non-member', 'LP01', 'J01', 130000, 'menunggu Konfirmasi'),
(16, '2015-12-22', 'qwww', 'non-member', 'LP02', 'J01', 130000, 'menunggu Konfirmasi'),
(17, '2015-12-20', 'eqweqwe', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(18, '2015-12-20', 'wabaki gan', 'non-member', 'LP02', 'J01', 130000, 'menunggu Konfirmasi'),
(19, '2015-12-16', 'ssaaa', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(20, '2015-12-16', 'qqaaa', 'non-member', 'LP01', 'J05', 130000, 'menunggu Konfirmasi'),
(21, '2015-12-22', 'qaaa', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(22, '2015-12-16', 'diki dardaran', 'non-member', 'LP02', 'J11', 175000, 'menunggu Konfirmasi'),
(23, '2015-12-20', 'ssasaa', 'non-member', 'LP01', 'J08', 175000, 'menunggu Konfirmasi'),
(24, '2015-12-22', 'sssssss', 'non-member', 'LP02', 'J06', 150000, 'menunggu Konfirmasi'),
(25, '2015-12-22', 'aasdasd', 'non-member', 'LP01', 'J06', 150000, 'menunggu Konfirmasi'),
(26, '2015-12-20', 'asdasdasaa', 'non-member', 'LP01', 'J05', 150000, 'menunggu Konfirmasi'),
(27, '2015-12-20', '', 'non-member', 'LP01', 'J01', 150000, 'menunggu Konfirmasi'),
(28, '2015-12-20', 'Zamzam Nurzaman', 'non-member', 'LP01', 'J04', 150000, 'menunggu Konfirmasi'),
(29, '2015-12-25', 'aa', 'non-member', 'LP01', 'J02', 150000, 'menunggu Konfirmasi'),
(30, '2015-12-22', 'aaa', 'non-member', 'LP01', 'J03', 130000, 'menunggu Konfirmasi'),
(31, '2015-12-22', 'aaa', 'non-member', 'LP01', 'J03', 130000, 'menunggu Konfirmasi'),
(32, '2015-12-22', 'qqq', 'non-member', 'LP01', 'J05', 130000, 'menunggu Konfirmasi'),
(33, '2015-12-22', 'qqq', 'non-member', 'LP01', 'J05', 130000, 'menunggu Konfirmasi'),
(34, '2015-12-22', 'ww', 'non-member', 'LP02', 'J05', 130000, 'menunggu Konfirmasi'),
(35, '2015-12-25', 'jjjl', 'non-member', 'LP01', 'J13', 175000, 'menunggu Konfirmasi'),
(36, '2015-12-25', 'ddd', 'non-member', 'LP01', 'J01', 150000, 'menunggu Konfirmasi'),
(37, '2015-12-25', 'watafak', 'non-member', 'LP02', 'J01', 150000, 'menunggu Konfirmasi'),
(38, '0000-00-00', 'watafak', 'non-member', 'LP02', 'J01', 150000, 'menunggu Konfirmasi'),
(39, '0000-00-00', 'watafak', 'non-member', 'LP02', 'J01', 150000, 'menunggu Konfirmasi'),
(40, '0000-00-00', 'watafak', 'non-member', 'LP02', 'J01', 150000, 'menunggu Konfirmasi'),
(41, '0000-00-00', 'watafak', 'non-member', 'LP02', 'J01', 150000, 'menunggu Konfirmasi'),
(42, '0000-00-00', 'watafak', 'non-member', 'LP02', 'J01', 150000, 'menunggu Konfirmasi'),
(43, '0000-00-00', 'ss', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(44, '0000-00-00', 'ss', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(45, '0000-00-00', 'ss', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(46, '0000-00-00', 'ss', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(47, '0000-00-00', 'ss', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(48, '0000-00-00', 'ss', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(49, '0000-00-00', 'aaa', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(50, '0000-00-00', 'aaa', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(51, '0000-00-00', 'aaa', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(52, '2015-12-25', 'aaa', 'non-member', 'LP01', 'J03', 150000, 'menunggu Konfirmasi'),
(53, '2015-12-25', 'sss', 'non-member', 'LP01', 'J06', 150000, 'menunggu Konfirmasi'),
(54, '2015-12-25', 'sss', 'non-member', 'LP01', 'J06', 150000, 'menunggu Konfirmasi'),
(55, '2015-12-25', 'sss', 'non-member', 'LP01', 'J06', 150000, 'menunggu Konfirmasi'),
(56, '2015-12-22', 'aa', 'non-member', 'LP01', 'J09', 150000, 'menunggu Konfirmasi'),
(57, '2015-12-22', 'dd', 'non-member', 'LP02', 'J14', 150000, 'menunggu Konfirmasi'),
(58, '2015-12-22', 'fuad al fariiih', 'non-member', 'LP02', 'J10', 150000, 'menunggu Konfirmasi'),
(59, '2015-12-25', 'zazaz', 'non-member', 'LP02', 'J09', 175000, 'menunggu Konfirmasi'),
(60, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(61, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(62, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(63, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(64, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(65, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(66, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(67, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(68, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(69, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(70, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(71, '2015-12-23', 'zamzam', 'non-member', 'LP01', 'J02', 130000, 'menunggu Konfirmasi'),
(72, '2015-12-23', 'rai', 'non-member', 'LP02', 'J04', 130000, 'menunggu Konfirmasi'),
(73, '2015-12-23', 'rai', 'non-member', 'LP02', 'J04', 130000, 'menunggu Konfirmasi'),
(74, '2015-12-23', 'd', 'non-member', 'LP01', 'J01', 130000, 'menunggu Konfirmasi'),
(75, '2015-12-23', 'ww', 'non-member', 'LP01', 'J08', 150000, 'menunggu Konfirmasi'),
(76, '2015-12-23', 'ww', 'non-member', 'LP01', 'J08', 150000, 'menunggu Konfirmasi'),
(77, '2015-12-23', 'dd', 'non-member', 'LP02', 'J08', 150000, 'menunggu Konfirmasi'),
(78, '2015-12-23', 'aa', 'non-member', 'LP01', 'J10', 150000, 'menunggu Konfirmasi'),
(79, '2015-12-25', 'wwqqe', 'non-member', 'LP02', 'J05', 150000, 'menunggu Konfirmasi'),
(80, '2015-12-25', 'ss', 'non-member', 'LP02', 'J02', 150000, 'menunggu Konfirmasi'),
(81, '2015-12-25', 'zamzam', 'non-member', 'LP01', 'J04', 150000, 'menunggu Konfirmasi'),
(82, '2015-12-25', 'diki31', 'non-member', 'LP01', 'J11', 175000, 'menunggu Konfirmasi'),
(83, '2015-12-25', 'diki31', 'non-member', 'LP01', 'J05', 150000, 'menunggu Konfirmasi'),
(84, '2015-12-25', 'S', 'non-member', 'LP02', 'J04', 150000, 'menunggu Konfirmasi'),
(85, '2015-12-26', 'Zamzam Nur', 'non-member', 'LP01', 'J05', 150000, 'menunggu Konfirmasi'),
(86, '2015-12-29', '', 'non-member', 'LP02', 'J02', 130000, 'menunggu Konfirmasi'),
(87, '2015-12-29', 'zamzam', 'non-member', 'LP02', 'J03', 130000, 'menunggu Konfirmasi'),
(88, '2015-12-26', 'sds', 'non-member', 'LP01', 'J02', 150000, 'menunggu Konfirmasi'),
(89, '2015-12-29', 'rohim', 'non-member', 'LP01', 'J01', 130000, 'menunggu Konfirmasi'),
(90, '2015-12-26', 'zamzam', 'non-member', 'LP01', 'J01', 150000, 'menunggu Konfirmasi');

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
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `telepon` (`telepon`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pesan`),
  ADD KEY `id_lapang` (`id_lapang`),
  ADD KEY `id_waktu` (`id_waktu`);

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
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91925;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_lapang`) REFERENCES `lapang` (`id_lapang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`) ON DELETE CASCADE ON UPDATE CASCADE;

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
