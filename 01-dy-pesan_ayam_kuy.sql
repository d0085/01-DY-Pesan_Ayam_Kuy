-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 05:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `01-dy-pesan_ayam_kuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `peran` varchar(10) NOT NULL,
  `jml_stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `tgl_waktu` datetime NOT NULL,
  `isi_chat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `jml_permintaan` int(3) NOT NULL,
  `tgl_waktu` datetime NOT NULL,
  `req_id` varchar(20) NOT NULL,
  `acc_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `pengirim` (`pengirim`),
  ADD KEY `penerima` (`penerima`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `req_id` (`req_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`penerima`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`pengirim`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `chat_ibfk_3` FOREIGN KEY (`penerima`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `chat_ibfk_4` FOREIGN KEY (`pengirim`) REFERENCES `akun` (`username`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`req_id`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`acc_id`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`req_id`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`acc_id`) REFERENCES `akun` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
