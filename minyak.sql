-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 03:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minyak`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `nom` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `negeri` varchar(45) NOT NULL,
  `kodproduk` varchar(50) DEFAULT NULL,
  `kuantiti` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `bayar` varchar(50) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `idpekerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`nom`, `nama`, `alamat`, `negeri`, `kodproduk`, `kuantiti`, `harga`, `bayar`, `tarikh`, `idpekerja`) VALUES
(2, 'mizan', 'Jariah Auto, Taman Sri Keramat', 'Kuala Lumpur', '10', '10', 'RM 78', 'RM 780', '2024-01-17', 1),
(3, 'Mizan', 'test', 'Kuala Lumpur', 'M3L', '10', '78', '780', '2024-02-07', 2),
(5, 'Mizan', 'test', 'Kuala Lumpur', 'M3L', '14', '78', 'RM 780', '2024-02-08', 0),
(6, 'Mizan', 'test', 'Kuala Lumpur', 'D', '14', 'RM 78', 'RM 780', '2024-02-03', 0),
(7, 'Mizan', 'test', 'Kuala Lumpur', 'D', '14', 'RM 78', 'RM 780', '2024-02-02', 0),
(8, 'Mizan', 'test', 'Kuala Lumpur', 'D', '14', 'RM 78', 'RM 780', '2024-02-07', 0),
(9, 'Mizan', 'test', 'Kuala Lumpur', 'D', '10', 'RM 78', 'RM 780', '2024-02-06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `logad`
--

CREATE TABLE `logad` (
  `idad` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `emel` varchar(100) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logad`
--

INSERT INTO `logad` (`idad`, `nama`, `emel`, `uname`, `pass`) VALUES
(1, 'Dasri', 'dasri@gmail.com', 'dasri', 'dasri123'),
(2, 'Norhanita', 'norhanita@gmail.com', 'hanita', 'hanita123');

-- --------------------------------------------------------

--
-- Table structure for table `loginsa`
--

CREATE TABLE `loginsa` (
  `idsa` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `emel` varchar(100) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `negeri` varchar(50) DEFAULT NULL,
  `daerah` varchar(100) DEFAULT NULL,
  `bengkel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginsa`
--

INSERT INTO `loginsa` (`idsa`, `name`, `emel`, `uname`, `pass`, `negeri`, `daerah`, `bengkel`) VALUES
(1, 'Ahmad Basir', 'basir@gmail.com', 'basir', 'basir123', 'Kuala Lumpur', 'Taman Sri Keramat Tengah', 'Jariah Auto'),
(2, 'Hasmizan Ismail', 'mizan@gmail.com', 'mizan', 'mizan123', 'Kuala Lumpur', 'Taman Sri Rampai', 'Maf Compact Auto Services'),
(10, 'Abe Jak', 'abejak@gmail.com', 'jak', 'jak123', 'Negeri Sembilan', 'Nilai 2', 'Abejak Workshop');

-- --------------------------------------------------------

--
-- Table structure for table `logki`
--

CREATE TABLE `logki` (
  `idki` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `emel` varchar(100) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logki`
--

INSERT INTO `logki` (`idki`, `nama`, `emel`, `uname`, `pass`) VALUES
(1, 'Ahmad Adam', 'adam95@gmail.com', 'adam', 'adam123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idor` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `negeri` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `senarai` varchar(45) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `idpekerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idor`, `nama`, `negeri`, `alamat`, `senarai`, `tarikh`, `status`, `idpekerja`) VALUES
(1, 'Basir', 'Kuala Lumpur', 'Jariah auto, Taman Sri Keramat Tengah', 'D:5 FS:10', '2024-01-15', '-', 1),
(2, 'ubdsaf', 'Kuala Lumpur', 'dsa', 'fddfdsfddfdsfd', '2024-01-26', 'Sedang dihantar', 2),
(3, 'Basir', 'Kuala Lumpur', 'Jariah Auto, Taman Sri Keramat', 'FS : 10', '2024-02-08', NULL, 1),
(4, 'Basir', 'Kuala Lumpur', 'Jariah Auto, Taman Sri Keramat', 'FS : 24', '2024-02-06', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `num` int(11) NOT NULL,
  `namesa` varchar(50) DEFAULT NULL,
  `bengkel` varchar(50) DEFAULT NULL,
  `negeri` varchar(50) DEFAULT NULL,
  `terang` varchar(50) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `idpekerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`num`, `namesa`, `bengkel`, `negeri`, `terang`, `tarikh`, `idpekerja`) VALUES
(28, 'Basir', 'Jariah Auto', 'Kuala Lumpur', 'FS : 14\r\nSS : 8', '2024-02-08', 0),
(37, 'Basir', 'Jariah Auto', 'Kuala Lumpur', 'FS : 12', '2024-02-06', 1),
(38, 'Basir', 'Jariah Auto', 'Kuala Lumpur', 'D : 10', '2024-01-18', 1),
(39, 'Mizan', 'Maf Compact Auto Services', 'Kuala Lumpur', 'FS : 20', '2024-02-09', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`nom`);

--
-- Indexes for table `logad`
--
ALTER TABLE `logad`
  ADD PRIMARY KEY (`idad`);

--
-- Indexes for table `loginsa`
--
ALTER TABLE `loginsa`
  ADD PRIMARY KEY (`idsa`);

--
-- Indexes for table `logki`
--
ALTER TABLE `logki`
  ADD PRIMARY KEY (`idki`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idor`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `nom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logad`
--
ALTER TABLE `logad`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loginsa`
--
ALTER TABLE `loginsa`
  MODIFY `idsa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logki`
--
ALTER TABLE `logki`
  MODIFY `idki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
