-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 05:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notaris`
--
CREATE DATABASE IF NOT EXISTS `notaris` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `notaris`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `alamat`, `telepon`) VALUES
('Admin', '123456', 'Ati Nur Fatimah', 'Majalengka', '085220804079');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_akta`
--

DROP TABLE IF EXISTS `jenis_akta`;
CREATE TABLE IF NOT EXISTS `jenis_akta` (
  `id` varchar(2) NOT NULL,
  `nama_jenis` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_akta`
--

INSERT INTO `jenis_akta` (`id`, `nama_jenis`) VALUES
('01', 'Notaris'),
('02', 'PPAT');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pajak`
--

DROP TABLE IF EXISTS `jenis_pajak`;
CREATE TABLE IF NOT EXISTS `jenis_pajak` (
  `id_jenis_pajak` char(2) NOT NULL,
  `nama_jenis_pajak` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_pajak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_pajak`
--

INSERT INTO `jenis_pajak` (`id_jenis_pajak`, `nama_jenis_pajak`) VALUES
('01', 'Pembeli'),
('02', 'Penjual'),
('03', 'Progressive');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

DROP TABLE IF EXISTS `klien`;
CREATE TABLE IF NOT EXISTS `klien` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(40) DEFAULT NULL,
  `jenis_akta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notaris`
--

DROP TABLE IF EXISTS `notaris`;
CREATE TABLE IF NOT EXISTS `notaris` (
  `no_akta` int(5) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id` varchar(30) DEFAULT NULL,
  `nama_pihak` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no_akta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notaris`
--

INSERT INTO `notaris` (`no_akta`, `tgl`, `id`, `nama_pihak`) VALUES
(21220, '2014-10-16', '02', 'Cobaaa');

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

DROP TABLE IF EXISTS `pajak`;
CREATE TABLE IF NOT EXISTS `pajak` (
  `luas_tanah` int(5) DEFAULT NULL,
  `luas_bangunan` int(5) DEFAULT NULL,
  `harga_tanah` int(20) DEFAULT NULL,
  `harga_bangunan` int(20) DEFAULT NULL,
  `harga_transaksi` int(20) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ppat`
--

DROP TABLE IF EXISTS `ppat`;
CREATE TABLE IF NOT EXISTS `ppat` (
  `no_aktap` int(5) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id` varchar(30) DEFAULT NULL,
  `pihak_1` varchar(50) DEFAULT NULL,
  `pihak_2` varchar(50) DEFAULT NULL,
  `no_hak` varchar(40) DEFAULT NULL,
  `letak` varchar(40) DEFAULT NULL,
  `luas_tanah` int(5) DEFAULT NULL,
  `luas_bangunan` int(5) DEFAULT NULL,
  `harga_transaksi` int(20) DEFAULT NULL,
  `nop` int(20) DEFAULT NULL,
  `njop` int(20) DEFAULT NULL,
  `ssp` int(20) DEFAULT NULL,
  PRIMARY KEY (`no_aktap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ppat`
--

INSERT INTO `ppat` (`no_aktap`, `tgl`, `id`, `pihak_1`, `pihak_2`, `no_hak`, `letak`, `luas_tanah`, `luas_bangunan`, `harga_transaksi`, `nop`, `njop`, `ssp`) VALUES
(12121, '2014-10-30', '02', 'wawad', 'bian', '12144', 'Cibatu', 12, 12, 30000, 2000, 423424, 424);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_notaris`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_notaris`;
CREATE TABLE IF NOT EXISTS `v_notaris` (
`no_akta` int(5)
,`tgl` date
,`nama_jenis` varchar(20)
,`nama_pihak` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ppat`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_ppat`;
CREATE TABLE IF NOT EXISTS `v_ppat` (
`no_aktap` int(5)
,`tgl` date
,`nama_jenis` varchar(20)
,`pihak_1` varchar(50)
,`pihak_2` varchar(50)
,`no_hak` varchar(40)
,`letak` varchar(40)
,`luas_tanah` int(5)
,`luas_bangunan` int(5)
,`harga_transaksi` int(20)
,`nop` int(20)
,`njop` int(20)
,`ssp` int(20)
);

-- --------------------------------------------------------

--
-- Structure for view `v_notaris`
--
DROP TABLE IF EXISTS `v_notaris`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_notaris`  AS  
	select `no_akta` AS `no_akta`,`tgl` AS `tgl`,`jenis_akta`.`nama_jenis` AS `nama_jenis`,`nama_pihak` AS `nama_pihak` 
	from (`notaris` join `jenis_akta` on(`id` = `jenis_akta`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_ppat`
--
DROP TABLE IF EXISTS `v_ppat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ppat`  AS  
	select `ppat`.`no_aktap` AS `no_aktap`,`ppat`.`tgl` AS `tgl`,`jenis_akta`.`nama_jenis` AS `nama_jenis`,`ppat`.`pihak_1` AS `pihak_1`,
	`ppat`.`pihak_2` AS `pihak_2`,`ppat`.`no_hak` AS `no_hak`,`ppat`.`letak` AS `letak`,`ppat`.`luas_tanah` AS `luas_tanah`,
	`ppat`.`luas_bangunan` AS `luas_bangunan`,`ppat`.`harga_transaksi` AS `harga_transaksi`,
	`ppat`.`nop` AS `nop`,`ppat`.`njop` AS `njop`,`ppat`.`ssp` AS `ssp` 
	from (`ppat` join `jenis_akta` on(`ppat`.`id` = `jenis_akta`.`id`)) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
