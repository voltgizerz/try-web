-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 06:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gd4_9455_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(10) NOT NULL,
  `name` varchar(192) NOT NULL,
  `gender` varchar(192) NOT NULL,
  `email` varchar(192) NOT NULL,
  `nomorHandphone` varchar(192) NOT NULL,
  `pendidikan` varchar(192) NOT NULL,
  `cumlaude` varchar(192) NOT NULL,
  `ipk` float(3,2) NOT NULL,
  `alamat` varchar(192) NOT NULL,
  `kota` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `name`, `gender`, `email`, `nomorHandphone`, `pendidikan`, `cumlaude`, `ipk`, `alamat`, `kota`) VALUES
(200, 'FELIX FERNANDO WIJAYA', '0', 'felix.felix@gmail.com', '1234565656', '3', '1', 4.00, 'Gang Delima 3A NO 12 ', 'Yogyakarta'),
(201, 'BOERHAN', '0', 'SDAS@gmail.com', '4444444444', '2', '1', 3.77, 'ertert', 'ertertert'),
(202, 'JHONYYY', '1', 'JONYY@gmasdil.com', '1234444449', '1', '0', 1.01, 'ASD', 'ASDSDSDSD');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(192) NOT NULL,
  `email` varchar(192) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nomorHandphone` varchar(10) NOT NULL,
  `jenisKelamin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `tanggalLahir`, `nomorHandphone`, `jenisKelamin`) VALUES
(28, 'ASDAS', 'ASDASdW@GMAIL.COM', '2019-12-12', '1234567891', 0),
(29, 'FELIX FERNANDO WIJAYA', 'FELIX.BROKU@GMAIL.COM', '1999-10-29', '0895617171', 0),
(30, 'ggggg', 'asd1@gmail.com', '1999-12-11', '1234561212', 1),
(33, 'JHONYYYYYYYsdf', 'fjony@gmail.com', '2018-10-10', '8787878787', 1),
(36, 'michael', 'qweqweqweq@gmauil.com', '1999-12-12', '1232323232', 1),
(37, 'Scuderia Ferrari', '2323d@gmail.com', '1999-12-12', '1232323232', 0),
(38, 'Terbalik', 'dasd@gmail.com', '1991-10-10', '1233333333', 0),
(39, 'wewe', 'asdas@gmail.com', '1999-12-18', '1232323232', 1),
(40, 'Jajang', 'fgfgdfg@gmail.com', '1999-12-12', '1098989898', 1),
(43, 'asdasd', 'sdswed@gmail.com', '1999-10-10', '1232323232', 0),
(63, 'ANDA BURHAN', 'BURHANNNNNNN@gmail.com', '1999-12-01', '1256565656', 0),
(64, 'Saya Siapa', 'asds@gmail.com', '1999-12-01', '1256565656', 0),
(65, 'JONY ASD', 'JONY2@GMAIL.COM', '1999-12-12', '1233333443', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `Name` varchar(192) NOT NULL,
  `Email` varchar(192) NOT NULL,
  `Password` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'FELIX FERNANDO WIJAYA', 'felix.asui@gmail.com', '$2y$10$.DYcLI3uWIMOwjKTfLGvEOlrFXb/CnENEJo48Det.27AB.BDIdr2W'),
(2, 'MAMANG MICIN', 'MAMANG@GMAIL.COM', '$2y$10$YIzB2pLhZ1mczQ3CuZAln.BfuF36n1qDgWbkB33pTgiSPNEVEPqhe'),
(3, 'BURHAN SUQD', 'burhan112@gmail.com', '$2y$10$OupS5R36PPbODt1YZwfOj.xWCSqBKu7sEa4L2pbpm.2Qk9fwSCBw6'),
(4, 'asdasd', 'asdasui@gmail.com', '$2y$10$KY0PnBbfSkYokYnsK300O.5uGoiOfyiFzLzlIefIzfOo4KeQoPlnO'),
(5, 'asdasdasd', 'felix.asuasdasdi@gmail.com', '$2y$10$xnxSWMD64vx1fzdKeSa2w.1Ss8CVseyPizE8w8akbmOV7SRfngr1y'),
(6, 'asdasdasd', 'felix.asdsdsui@gmail.com', '$2y$10$3epG9/SIHnco5csOfzUBE.et2nXCxvnDf.u1F60S7hlvHgmYuq4Hq'),
(9, 'KANNG BOERHAN', '', '$2y$10$XPs5Y434BmyxMqJRDoa8J.JGYSIZj7KjC4yUsUc0N0JFehJT4b.bS'),
(10, 'KANG BOERHAN', 'BOERHAN@GMAIL.COM', '$2y$10$fCX2ZR5F3BZxCb5ICZYRVufZBduFzxFeTbRpM.YX/oR4kZDR.2w0e'),
(11, 'burhannn', 'burhan1@gmail.com', '$2y$10$fN7OlQ5DgTZs.q8JPs8c9Oerdp50JxN/tdAvdtvzDdMEW2nHBkL2G'),
(12, 'asdasd', 'efefef@gmail.com', '$2y$10$J9EZGqkv/Ohvp0yB3jxdku2kODLKGKnAo6s19GdSKzgPNShwOWWPO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
