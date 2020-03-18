-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 10:59 AM
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
('Ati', '12345', 'Ati Nur Fatimah', 'Majalengka', '081222333444');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_akta`
--

CREATE TABLE `jenis_akta` (
  `id` varchar(5) NOT NULL,
  `nama_jenis` varchar(20) DEFAULT NULL
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
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(40) DEFAULT NULL,
  `id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`no_ktp`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `id`) VALUES
('67890', 'Nooby', 'Sindang', 'Majalengka', '2019-04-01', 'Bikin Kerja', '01');

-- --------------------------------------------------------

--
-- Table structure for table `notaris`
--

CREATE TABLE `notaris` (
  `no_akta` int(5) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id` varchar(30) DEFAULT NULL,
  `nama_pihak` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notaris`
--

INSERT INTO `notaris` (`no_akta`, `tgl`, `id`, `nama_pihak`) VALUES
(1212014, '2020-03-18', '01', 'Suebdgd'),
(2122014, '2020-03-18', '02', 'Cobaaa');

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
  `no_aktap` int(5) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id` varchar(5) DEFAULT NULL,
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

INSERT INTO `ppat` (`no_aktap`, `tgl`, `id`, `pihak_1`, `pihak_2`, `no_hak`, `letak`, `luas_tanah`, `luas_bangunan`, `harga_transaksi`, `nop`, `njop`, `ssp`) VALUES
(121212, '2020-03-18', '02', 'Lah', 'Jih', '12114', 'Cibatu', 12, 12, 30000, 2000, 423424, 424),
(123456, '2020-03-18', '02', 'sueb', 'suni', '1212', 'maja', 12, 2, 6000000, 34, 563, 343);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_klien`
-- (See below for the actual view)
--
CREATE TABLE `v_klien` (
`no_ktp` varchar(20)
,`nama` varchar(30)
,`alamat` varchar(30)
,`tempat_lahir` varchar(30)
,`tanggal_lahir` date
,`pekerjaan` varchar(40)
,`nama_jenis` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_notaris`
-- (See below for the actual view)
--
CREATE TABLE `v_notaris` (
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
CREATE TABLE `v_ppat` (
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
-- Structure for view `v_klien`
--
DROP TABLE IF EXISTS `v_klien`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_klien`  AS  select `klien`.`no_ktp` AS `no_ktp`,`klien`.`nama` AS `nama`,`klien`.`alamat` AS `alamat`,`klien`.`tempat_lahir` AS `tempat_lahir`,`klien`.`tanggal_lahir` AS `tanggal_lahir`,`klien`.`pekerjaan` AS `pekerjaan`,`jenis_akta`.`nama_jenis` AS `nama_jenis` from (`klien` join `jenis_akta`) where `klien`.`id` = `jenis_akta`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_notaris`
--
DROP TABLE IF EXISTS `v_notaris`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_notaris`  AS  select `no_akta` AS `no_akta`,`tgl` AS `tgl`,`jenis_akta`.`nama_jenis` AS `nama_jenis`,`nama_pihak` AS `nama_pihak` from (`notaris` join `jenis_akta` on(`id` = `jenis_akta`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_ppat`
--
DROP TABLE IF EXISTS `v_ppat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ppat`  AS  select `ppat`.`no_aktap` AS `no_aktap`,`ppat`.`tgl` AS `tgl`,`jenis_akta`.`nama_jenis` AS `nama_jenis`,`ppat`.`pihak_1` AS `pihak_1`,`ppat`.`pihak_2` AS `pihak_2`,`ppat`.`no_hak` AS `no_hak`,`ppat`.`letak` AS `letak`,`ppat`.`luas_tanah` AS `luas_tanah`,`ppat`.`luas_bangunan` AS `luas_bangunan`,`ppat`.`harga_transaksi` AS `harga_transaksi`,`ppat`.`nop` AS `nop`,`ppat`.`njop` AS `njop`,`ppat`.`ssp` AS `ssp` from (`ppat` join `jenis_akta` on(`ppat`.`id` = `jenis_akta`.`id`)) ;

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
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `id` (`id`);

--
-- Indexes for table `notaris`
--
ALTER TABLE `notaris`
  ADD PRIMARY KEY (`no_akta`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ppat`
--
ALTER TABLE `ppat`
  ADD PRIMARY KEY (`no_aktap`),
  ADD KEY `id` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klien`
--
ALTER TABLE `klien`
  ADD CONSTRAINT `klien_ibfk_1` FOREIGN KEY (`id`) REFERENCES `jenis_akta` (`id`);

--
-- Constraints for table `notaris`
--
ALTER TABLE `notaris`
  ADD CONSTRAINT `notaris_ibfk_1` FOREIGN KEY (`id`) REFERENCES `jenis_akta` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ppat`
--
ALTER TABLE `ppat`
  ADD CONSTRAINT `jenis_akta` FOREIGN KEY (`id`) REFERENCES `jenis_akta` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
