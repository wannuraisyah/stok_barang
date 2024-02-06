-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 06:38 PM
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
  `id` int(11) NOT NULL,
  `kod_produk` varchar(45) NOT NULL,
  `kuantiti` varchar(45) NOT NULL,
  `harga` varchar(45) NOT NULL,
  `nilai` varchar(45) NOT NULL,
  `bayar` varchar(45) NOT NULL,
  `tarikh_kemaskini` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `loginsa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logad`
--

CREATE TABLE `logad` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `emel` varchar(80) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logad`
--

INSERT INTO `logad` (`id`, `nama`, `emel`, `uname`, `pass`) VALUES
(1, 'wan dasri shah', 'dasri@gmail.com', 'dasri', 'dasri123'),
(2, 'Norhanita', 'norhanita@gmail.com', 'hanita', 'hanita123');

-- --------------------------------------------------------

--
-- Table structure for table `loginsa`
--

CREATE TABLE `loginsa` (
  `id` int(11) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `daerah` varchar(30) NOT NULL,
  `bengkel` varchar(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emel` varchar(100) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginsa`
--

INSERT INTO `loginsa` (`id`, `negeri`, `daerah`, `bengkel`, `name`, `emel`, `uname`, `pass`) VALUES
(1, 'Kuala Lumpur', 'Taman Sri Keramat Tengah', 'Jariah Auto', 'Ahmad Basir', 'ahmadbasir@gmail.com', 'basir', 'basir123'),
(2, 'Kuala Lumpur', 'Tmn. Sri Rampai', 'Maf Compact Auto Services', 'Hasmizan Ismail', 'hasmizan@gmail.com', 'mizan', 'mizan123'),
(3, 'Negeri Sembilan', 'Nilai', 'Abejak Workshop', 'Abe Jak', 'jak123@gmail.com', 'Abe Jak', 'jak123'),
(4, 'Negeri Sembilan', 'Nilai', 'Solahudin Enterprise', 'Solahudin', 'solahudin@gmail.com', 'solahudin', 'solahudin123'),
(5, 'Selangor', 'Kajang', 'kilang', 'Ahmad', 'ahmad@gmail.com', 'ahmad', 'ahmad123');

-- --------------------------------------------------------

--
-- Table structure for table `logki`
--

CREATE TABLE `logki` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `emel` varchar(80) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logki`
--

INSERT INTO `logki` (`id`, `nama`, `emel`, `uname`, `pass`) VALUES
(1, 'Ahmad', 'ahmad@gmail.com', 'ahmad', 'ahmad123');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `nom` int(250) NOT NULL,
  `namesa` varchar(30) NOT NULL,
  `bengkel` varchar(30) NOT NULL,
  `negeri` varchar(30) NOT NULL,
  `terang` varchar(150) NOT NULL,
  `tarikh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`nom`, `namesa`, `bengkel`, `negeri`, `terang`, `tarikh`) VALUES
(2, 'Basir', 'Jariah Auto', 'Kuala Lumpur', 'FS:5\r\nD:2\r\nMG:10', '2024-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kod_produk`),
  ADD KEY `fk_barang_loginsa_idx` (`loginsa_id`);

--
-- Indexes for table `logad`
--
ALTER TABLE `logad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginsa`
--
ALTER TABLE `loginsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logki`
--
ALTER TABLE `logki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`nom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logad`
--
ALTER TABLE `logad`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loginsa`
--
ALTER TABLE `loginsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logki`
--
ALTER TABLE `logki`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `nom` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_loginsa` FOREIGN KEY (`loginsa_id`) REFERENCES `loginsa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
