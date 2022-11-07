-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administration`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `verifCode` varchar(25) NOT NULL,
  `chat_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasantri`
--

CREATE TABLE `datasantri` (
  `no` int(5) NOT NULL,
  `namasantri` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelamin` varchar(10) DEFAULT NULL,
  `tlpn` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasantri`
--

-- --------------------------------------------------------

--
-- Table structure for table `infopembayaran`
--

CREATE TABLE `infopembayaran` (
  `no` int(11) NOT NULL,
  `namasantri` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tarif` int(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `lainnya` int(30) DEFAULT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infopembayaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `no` int(5) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `totalkas` int(30) DEFAULT NULL,
  `jenismutasi` varchar(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `besarmutasi` int(30) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  `bulan` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--
-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `no` int(10) NOT NULL,
  `namasantri` varchar(100) DEFAULT NULL,
  `periode` varchar(11) DEFAULT NULL,
  `bidang` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_uk` (`email`),
  ADD UNIQUE KEY `info_email_uk` (`email`);

--
-- Indexes for table `datasantri`
--
ALTER TABLE `datasantri`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `infopembayaran`
--
ALTER TABLE `infopembayaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `datasantri`
--
ALTER TABLE `datasantri`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `infopembayaran`
--
ALTER TABLE `infopembayaran`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
