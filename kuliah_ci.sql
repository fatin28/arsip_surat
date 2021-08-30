-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 10:49 AM
-- Server version: 5.7.28
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(30) NOT NULL,
  `nomorsurat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `filesurat` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `nomorsurat`, `kategori`, `judul`, `filesurat`, `waktu`) VALUES
(23, '2020/PD3/TU/001', 'Undangan', 'Pengembangan', 'SOAL_TES_OBSERVASI_SERTIKOM_BNSP_20212.pdf', '2021-08-30 15:49:17'),
(24, '2020/PD3/TU/002', 'Nota Dinas', 'Fitur', 'Jadwal_Pelaksanaan_Pembekalan_Sertifikasi_BNSP_Ske', '2021-08-30 15:49:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
