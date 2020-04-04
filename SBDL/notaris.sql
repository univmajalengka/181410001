-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 03:36 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `alamat`, `telepon`) VALUES
('18.14.1.0001', '3d7e1a63c795d418e265f5c61f0acbd4', 'Andi Alfian', 'Blok Rabu Desa Sindang', '082320516254'),
('Admin', '25d55ad283aa400af464c76d713c07ad', 'AdminCuk', 'Sindang', '082320516254'),
('Radheya', '283fb6daf09d8e0828c5c5d3baf304ab', 'Radheya', 'Sindang', '082116425051'),
('sbdlunma', '0b4c9c8689d2ba8415b05f1609af016b', 'SBDL Unma', 'Majalengka', '084832748321'),
('Wrusali', 'b5b68d7982b4e8c019bfd87ac66eda69', 'Wrusali', 'Cikesik', '082656909810');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_akta`
--

CREATE TABLE `jenis_akta` (
  `id_jenis_akta` varchar(5) NOT NULL,
  `nama_jenis` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_akta`
--

INSERT INTO `jenis_akta` (`id_jenis_akta`, `nama_jenis`) VALUES
('01', 'Notaris'),
('02', 'PPAT'),
('03', 'Akta Lahir'),
('04', 'Akta Fake'),
('05', 'Akta Trial');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pajak`
--

CREATE TABLE `jenis_pajak` (
  `id_jenis_pajak` char(2) NOT NULL,
  `nama_jenis_pajak` varchar(20) DEFAULT NULL
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

CREATE TABLE `klien` (
  `no_ktp` varchar(20) NOT NULL,
  `nama_klien` varchar(30) DEFAULT NULL,
  `alamat_klien` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(40) DEFAULT NULL,
  `id_jenis_akta` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`no_ktp`, `nama_klien`, `alamat_klien`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `id_jenis_akta`) VALUES
('3210060312980061', 'YUDA SUPARMANTO', 'BLOK MEKARMULYA - DS. CIHAUR', 'Majalengka', '1998-12-03', 'Streaming Game', '03'),
('3210071307980042', 'MUHAMAD HIKAYAT', 'Pataking Kelurahan Munjul', 'Majalengka', '1998-07-13', 'Guardian of the Kios', '03'),
('3210082310990061', 'ANDI ALFIAN', 'Blok Rabu - Sindang', 'Majalengka', '1999-10-23', 'Push Rank', '03'),
('3210131112990061', 'RIZKI ALAM RAMDHANI', 'cempaka - panyingkiran', 'Garut', '1999-11-12', 'Service PC/Laptop', '03'),
('32101402020041', 'HARIS SAKURUDIN', 'Dusun Sukamanah - Desa sukaman', 'Majalengka', '2000-02-01', 'Pengedar Obat Legal', '03'),
('3210143107890001', 'SALAHUDDIN NURUL FAHMI', 'DUSUN SUKAMANAH - BABAKAN', 'Majalengka', '1998-07-31', 'Find Pokemon', '03');

-- --------------------------------------------------------

--
-- Table structure for table `notaris`
--

CREATE TABLE `notaris` (
  `no_akta_n` int(5) NOT NULL,
  `tgl_buat_n` date DEFAULT NULL,
  `id_jenis_akta` varchar(30) DEFAULT NULL,
  `nama_pihak` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notaris`
--

INSERT INTO `notaris` (`no_akta_n`, `tgl_buat_n`, `id_jenis_akta`, `nama_pihak`) VALUES
(10001, '2020-04-04', '01', 'Rudi'),
(10010, '2020-04-04', '01', 'M.Fajar'),
(10011, '2020-04-04', '01', 'Aditya'),
(10100, '2020-04-04', '01', 'Faris Ahmad'),
(10101, '2020-04-04', '01', 'M. Fandi');

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE `pajak` (
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

CREATE TABLE `ppat` (
  `no_akta_p` int(5) NOT NULL,
  `tgl_buat_p` date DEFAULT NULL,
  `id_jenis_akta` varchar(5) DEFAULT NULL,
  `pihak_1` varchar(50) DEFAULT NULL,
  `pihak_2` varchar(50) DEFAULT NULL,
  `no_hak` varchar(40) DEFAULT NULL,
  `letak` varchar(40) DEFAULT NULL,
  `luas_tanah` int(5) DEFAULT NULL,
  `luas_bangunan` int(5) DEFAULT NULL,
  `harga_transaksi` int(20) DEFAULT NULL,
  `nop` int(20) DEFAULT NULL,
  `njop` int(20) DEFAULT NULL,
  `ssp` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ppat`
--

INSERT INTO `ppat` (`no_akta_p`, `tgl_buat_p`, `id_jenis_akta`, `pihak_1`, `pihak_2`, `no_hak`, `letak`, `luas_tanah`, `luas_bangunan`, `harga_transaksi`, `nop`, `njop`, `ssp`) VALUES
(11001, '2020-04-04', '02', 'Andi', 'Radheya', '01', 'Sisi Jalan', 50, 40, 40000000, 98, 980, 999),
(11010, '2020-04-04', '02', 'Rudi', 'PW', '02', 'Tengah Jalan', 50, 20, 50000000, 972, 7897, 900),
(121212, '2020-03-18', '02', 'Lah', 'Jih', '12114', 'Cibatu', 12, 12, 300000, 2000, 423424, 424),
(123456, '2020-03-18', '02', 'sueb', 'suni', '1212', 'maja', 12, 2, 6000000, 34, 563, 343),
(325437, '2020-05-04', '02', 'Radheya', 'Wrusali', '38247', 'Lembah', 100, 50, 2147483647, 328497, 8723849, 28748);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_klien`
-- (See below for the actual view)
--
CREATE TABLE `v_klien` (
`no_ktp` varchar(20)
,`nama_klien` varchar(30)
,`tempat_lahir` varchar(30)
,`tanggal_lahir` date
,`alamat_klien` varchar(30)
,`pekerjaan` varchar(40)
,`jenis_akta` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_notaris`
-- (See below for the actual view)
--
CREATE TABLE `v_notaris` (
`no_akta_n` int(5)
,`tgl` date
,`nama_jenis` varchar(20)
,`nama_pihak` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ppat`
-- (See below for the actual view)
--
CREATE TABLE `v_ppat` (
`no_akta_p` int(5)
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
-- Structure for view `v_klien`
--
DROP TABLE IF EXISTS `v_klien`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_klien`  AS  select `klien`.`no_ktp` AS `no_ktp`,`klien`.`nama_klien` AS `nama_klien`,`klien`.`tempat_lahir` AS `tempat_lahir`,`klien`.`tanggal_lahir` AS `tanggal_lahir`,`klien`.`alamat_klien` AS `alamat_klien`,`klien`.`pekerjaan` AS `pekerjaan`,`jenis_akta`.`nama_jenis` AS `jenis_akta` from (`klien` join `jenis_akta`) where `klien`.`id_jenis_akta` = `jenis_akta`.`id_jenis_akta` ;

-- --------------------------------------------------------

--
-- Structure for view `v_notaris`
--
DROP TABLE IF EXISTS `v_notaris`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_notaris`  AS  select `no_akta_n` AS `no_akta_n`,`tgl_buat_n` AS `tgl`,`jenis_akta`.`nama_jenis` AS `nama_jenis`,`nama_pihak` AS `nama_pihak` from (`notaris` join `jenis_akta`) where `id_jenis_akta` = `jenis_akta`.`id_jenis_akta` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ppat`
--
DROP TABLE IF EXISTS `v_ppat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ppat`  AS  select `ppat`.`no_akta_p` AS `no_akta_p`,`ppat`.`tgl_buat_p` AS `tgl`,`jenis_akta`.`nama_jenis` AS `nama_jenis`,`ppat`.`pihak_1` AS `pihak_1`,`ppat`.`pihak_2` AS `pihak_2`,`ppat`.`no_hak` AS `no_hak`,`ppat`.`letak` AS `letak`,`ppat`.`luas_tanah` AS `luas_tanah`,`ppat`.`luas_bangunan` AS `luas_bangunan`,`ppat`.`harga_transaksi` AS `harga_transaksi`,`ppat`.`nop` AS `nop`,`ppat`.`njop` AS `njop`,`ppat`.`ssp` AS `ssp` from (`ppat` join `jenis_akta`) where `ppat`.`id_jenis_akta` = `jenis_akta`.`id_jenis_akta` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jenis_akta`
--
ALTER TABLE `jenis_akta`
  ADD PRIMARY KEY (`id_jenis_akta`);

--
-- Indexes for table `jenis_pajak`
--
ALTER TABLE `jenis_pajak`
  ADD PRIMARY KEY (`id_jenis_pajak`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`no_ktp`),
  ADD KEY `id` (`id_jenis_akta`);

--
-- Indexes for table `notaris`
--
ALTER TABLE `notaris`
  ADD PRIMARY KEY (`no_akta_n`),
  ADD KEY `id` (`id_jenis_akta`);

--
-- Indexes for table `ppat`
--
ALTER TABLE `ppat`
  ADD PRIMARY KEY (`no_akta_p`),
  ADD KEY `id` (`id_jenis_akta`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klien`
--
ALTER TABLE `klien`
  ADD CONSTRAINT `klien_ibfk_1` FOREIGN KEY (`id_jenis_akta`) REFERENCES `jenis_akta` (`id_jenis_akta`);

--
-- Constraints for table `notaris`
--
ALTER TABLE `notaris`
  ADD CONSTRAINT `notaris_ibfk_1` FOREIGN KEY (`id_jenis_akta`) REFERENCES `jenis_akta` (`id_jenis_akta`) ON UPDATE CASCADE;

--
-- Constraints for table `ppat`
--
ALTER TABLE `ppat`
  ADD CONSTRAINT `jenis_akta` FOREIGN KEY (`id_jenis_akta`) REFERENCES `jenis_akta` (`id_jenis_akta`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
