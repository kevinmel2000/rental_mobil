-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2019 at 03:33 PM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(15) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_telp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `nik`, `nama`, `alamat`, `jenis_kelamin`, `no_telp`) VALUES
(187662, '0022', 'riski', 'jakarta timur ', 'pria', 929288123),
(187663, '009', 'galang', 'genteng banyuwangi', 'pria', 882923),
(187664, '098', 'zista', 'sempu', 'wanita', 1123),
(187665, '3275', 'nagieb', 'jakarta', 'pria', 896486049),
(187666, '67648389', 'muamar', 'muara', 'pria', 89765565);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `id_driver` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_driver` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `harga_driver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`id_driver`, `nik`, `nama_driver`, `no_telepon`, `jenis_kelamin`, `harga_driver`) VALUES
(2, '22', 'wahono', '1', 'pria', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `merk_mobil` varchar(20) NOT NULL,
  `plat_nomor` varchar(20) NOT NULL,
  `warna_mobil` varchar(10) NOT NULL,
  `tahun_pembuatan` date NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id_mobil`, `id_type`, `merk_mobil`, `plat_nomor`, `warna_mobil`, `tahun_pembuatan`, `harga_sewa`, `foto`) VALUES
(13, 2, 'Avanza', '11123', 'hitam', '2019-11-07', 123312, 'avanza_hitam.jpg'),
(14, 2, 'Honda Jazz', '123123', 'merah', '2019-11-15', 12300, 'images.jpeg'),
(15, 2, 'datsun', 'b2354trd', 'merah', '2014-06-16', 350000, '2328588455.png'),
(16, 2, 'datsun', 'B 5687 THU', 'kuning', '2019-11-19', 679000, 'images1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` varchar(100) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `total` int(11) NOT NULL,
  `qty_hari` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `jaminan` varchar(10) NOT NULL,
  `status_transaksi` varchar(20) NOT NULL,
  `code_transaksi` varchar(50) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_customer`, `id_mobil`, `id_driver`, `tanggal_mulai`, `tanggal_kembali`, `total`, `qty_hari`, `denda`, `jaminan`, `status_transaksi`, `code_transaksi`, `tgl_transaksi`) VALUES
('5ddf4f98c7cfe', 187666, 14, 2, '2019-11-28', '2019-11-30', 0, 2, 100, 'ktp', 'lunas', '#1661419296', '2019-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_mobil`
--

CREATE TABLE `tbl_type_mobil` (
  `id_type` int(11) NOT NULL,
  `nama_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_type_mobil`
--

INSERT INTO `tbl_type_mobil` (`id_type`, `nama_type`) VALUES
(1, 'sport'),
(2, 'matic');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(2, 'riski', 'riski@yopmail.com', '21232f297a57a5a743894a0e4a801fc3', '1'),
(3, 'galang', 'galang@yopmail.com', '21232f297a57a5a743894a0e4a801fc3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_type_mobil`
--
ALTER TABLE `tbl_type_mobil`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187667;
--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_type_mobil`
--
ALTER TABLE `tbl_type_mobil`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
