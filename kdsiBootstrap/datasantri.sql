-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 10:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren_kdsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasantri`
--

CREATE TABLE `datasantri` (
  `id` int(5) NOT NULL,
  `namasantri` varchar(50) DEFAULT NULL,
  `kelamin` varchar(12) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `tlpn` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasantri`
--

INSERT INTO `datasantri` (`id`, `namasantri`, `kelamin`, `tgl_lahir`, `email`, `tlpn`) VALUES
(7, 'Muhammad Imam Ariq Sya\'bana', 'lakilaki', '2022-10-20', 'imambritish@gmail.com', '088213626307'),
(8, 'Imam Syabana', 'lakilaki', '2022-10-02', 'imambritish@gmail.com', '088213626307'),
(9, 'Siti', 'perempuan', '2022-10-27', 'imambritish@gmail.com13', '088213626307'),
(15, 'Budi', 'lakilaki2', '2022-10-05', 'budi@gmail.com', '01234566');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasantri`
--
ALTER TABLE `datasantri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasantri`
--
ALTER TABLE `datasantri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
