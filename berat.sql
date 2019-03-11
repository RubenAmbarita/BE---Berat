-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 04:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berat`
--

-- --------------------------------------------------------

--
-- Table structure for table `sirclo`
--

CREATE TABLE `sirclo` (
  `id` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Max` int(10) NOT NULL,
  `Min` int(10) NOT NULL,
  `Perbedaan` int(10) NOT NULL,
  `Ratamax` decimal(10,0) NOT NULL,
  `Ratamin` decimal(11,0) NOT NULL,
  `Ratabeda` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sirclo`
--

INSERT INTO `sirclo` (`id`, `Tanggal`, `Max`, `Min`, `Perbedaan`, `Ratamax`, `Ratamin`, `Ratabeda`) VALUES
(6, '2019-03-28', 6, 5, 1, '0', '0', '0'),
(11, '2019-03-28', 10, 8, 2, '0', '0', '0'),
(12, '2019-03-13', 6, 1, 5, '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sirclo`
--
ALTER TABLE `sirclo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sirclo`
--
ALTER TABLE `sirclo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
