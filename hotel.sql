-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 05:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `telp`, `alamat`, `status`) VALUES
(2, 'HanifFadillah', 'dillapri', '081382728278', 'Pasar Baru Padang', 'Pasif'),
(3, 'angelinadinar', 'angelina', '081275571314', 'Jl. Prof. Dr. Hamka No. 169 Padang', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `idbooking` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `idkamar` int(11) NOT NULL,
  `lama` int(5) NOT NULL,
  `harga` double NOT NULL,
  `totalbayar` double NOT NULL,
  `idhotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `tanggal`, `jam`, `idkamar`, `lama`, `harga`, `totalbayar`, `idhotel`) VALUES
(1, '2016-12-03', '12:34:00', 3, 3, 600000, 1500000, 4),
(2, '2016-12-15', '02:13:00', 7, 4, 1500000, 6000000, 4),
(3, '2016-12-15', '02:15:00', 4, 4, 600000, 2400000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
`idhotel` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `detail` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`idhotel`, `nama`, `telp`, `alamat`, `detail`) VALUES
(4, 'Pangeran Beach Hotel', '07218488579', 'Lolong Padang', 'Hotel bintang 5 dengan kualitas terbaik'),
(5, 'Minang Resourch Hote', '0751388373', 'Jl. M. Supratman', 'Hotel pertama di kota padang dan masih dapat bersaing dengan baik hingga kini.'),
(6, 'Hotel Sawahan', '07511282738', 'Jl. Sawahan Padang', 'Hotel dengan harga terjangkau dan fasilitas yang tidak mengecewakan.'),
(7, 'Basco Grand Hotel', '07218432873', 'Jl. Khatib Padang', 'Fasilitas terbaik lokasi di pusat kota dekat dengan Basco Grand mall');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
`idkamar` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `harga` double NOT NULL,
  `idhotel` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`idkamar`, `jenis`, `harga`, `idhotel`, `status`) VALUES
(2, 'Standart room', 500000, 4, 'Kosong'),
(3, 'Superior room', 600000, 4, 'Booking'),
(4, 'Deluxe room', 800000, 4, 'Kosong'),
(5, 'Junior Suite', 1000000, 4, 'Penuh'),
(6, 'Suite room', 1200000, 4, 'Kosong'),
(7, 'Presidential', 1500000, 4, 'Booking'),
(8, 'Standart room', 300000, 5, 'Penuh'),
(9, 'Superior room', 500000, 5, 'Kosong'),
(10, 'Deluxe room', 600000, 5, 'Booking');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `telp`, `alamat`, `status`) VALUES
(3, 'SantiRahmah', 'sarahaja', '081273836282', 'Pauh padang', 'Aktif'),
(4, 'YusufAhmad', 'yusuf87', '085723982480', 'Lubuk Buaya Padang', 'Pasif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`idbooking`), ADD KEY `idkamar` (`idkamar`), ADD KEY `idhotel` (`idhotel`), ADD KEY `idkamar_2` (`idkamar`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
 ADD PRIMARY KEY (`idhotel`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`idkamar`), ADD KEY `idhotel` (`idhotel`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
MODIFY `idhotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
MODIFY `idkamar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`idkamar`) REFERENCES `kamar` (`idkamar`) ON UPDATE CASCADE,
ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`idhotel`) REFERENCES `hotel` (`idhotel`) ON UPDATE CASCADE;

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`idhotel`) REFERENCES `hotel` (`idhotel`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
