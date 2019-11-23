-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 04:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `jenis_makanan` varchar(64) DEFAULT NULL,
  `harga_makanan` int(11) DEFAULT NULL,
  `nama_makanan` varchar(64) DEFAULT NULL,
  `id_restoran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `jenis_makanan`, `harga_makanan`, `nama_makanan`, `id_restoran`) VALUES
(1, 'Fast ', 210, 'Ini 123', 2),
(2, 'dwada', 2131, 'dwada', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_makanan` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nohp_pegawai` varchar(64) DEFAULT NULL,
  `alamat_pegawai` varchar(128) DEFAULT NULL,
  `email_pegawai` varchar(64) DEFAULT NULL,
  `password_pegawai` varchar(64) DEFAULT NULL,
  `nama_pegawai` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nohp_pegawai`, `alamat_pegawai`, `email_pegawai`, `password_pegawai`, `nama_pegawai`) VALUES
(3, '123131', ' admin ', 'admin@admin.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(64) DEFAULT NULL,
  `alamat_pelanggan` varchar(128) DEFAULT NULL,
  `nohp_pelanggan` varchar(64) DEFAULT NULL,
  `email_pelanggan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `nohp_pelanggan`, `email_pelanggan`) VALUES
(1, 'Rezky Revindo', ' Jln. Intan VII no. 234 Pegambiran, Padang ', '123', 'rezkyrevindo3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id_restoran` int(11) NOT NULL,
  `nama_restoran` varchar(64) DEFAULT NULL,
  `jam_buka` varchar(64) DEFAULT NULL,
  `alamat_restoran` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id_restoran`, `nama_restoran`, `jam_buka`, `alamat_restoran`) VALUES
(2, 'wdadwadad', '21:02', 'dayehulolt'),
(3, 'hallu', '12:03', 'adawwdaagfagaga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id_restoran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id_restoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
