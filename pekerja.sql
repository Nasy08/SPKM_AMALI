-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maklumatpekerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `id` int(3) NOT NULL,
  `nama_pekerja` varchar(50) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`id`, `nama_pekerja`, `no_kp`, `jantina`, `no_hp`) VALUES
(0, 'ANIQ NAUFAL BIN MUHAMMAD AZRAEI', '020828160169', 'LELAKI', '01162190399'),
(2, 'MUHAMMAD ANAS BIN SUHAIMI', '030531100019', 'LELAKI', '0169520918'),
(4, 'ISHUARIYA A/P PONAN', '030610080616', 'PEREMPUAN', '01133688927'),
(1, 'ANIQ NAUFAL BIN SALEHUDDIN', '031021101671', 'LELAKI', '0192606424'),
(6, 'ANIS ZAHIRA BINTI AZRAF', '080820106422', 'PEREMPUAN', '801117141009'),
(5, 'MUHAMMAD ADAM BIN NAZRI', '850902140975', 'LELAKI', '0133138765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`no_kp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
