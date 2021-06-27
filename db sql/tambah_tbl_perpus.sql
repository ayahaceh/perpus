-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 11:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perpus`
--

CREATE TABLE `tbl_perpus` (
  `id` int(1) NOT NULL,
  `nama_perpus` varchar(255) NOT NULL,
  `alamat_perpus` varchar(510) NOT NULL,
  `telp_perpus` varchar(255) NOT NULL,
  `email_perpus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perpus`
--

INSERT INTO `tbl_perpus` (`id`, `nama_perpus`, `alamat_perpus`, `telp_perpus`, `email_perpus`) VALUES
(1, 'Perpustakaan SMK informatika Pasundan Purwakarta', 'Jalan Cut Nyak Dhien No. 86 - Pasundan, Purwakarta', '(0811) 165 7788 ', 'razali.kpu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_perpus`
--
ALTER TABLE `tbl_perpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_perpus`
--
ALTER TABLE `tbl_perpus`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
