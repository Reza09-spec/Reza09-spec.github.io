-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 24, 2021 at 10:30 AM
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
-- Database: `lgscert_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_client`
--

CREATE TABLE `tb_client` (
  `id` int(4) NOT NULL,
  `certificate_code` varchar(20) NOT NULL,
  `training_name` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `acc_name` enum('ABMSC Accredited','The CPD Accredited') NOT NULL,
  `agency_name` varchar(50) NOT NULL,
  `client_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_client`
--

INSERT INTO `tb_client` (`id`, `certificate_code`, `training_name`, `date`, `acc_name`, `agency_name`, `client_name`) VALUES
(1, 'LGS-CPD/0001-XII-21', 'Pelatihan Pengamanan dan Awareness K3', '2021-12-23', 'The CPD Accredited', 'PT Mitracom Solusindo', 'ST Arifin'),
(2, 'LGS-CPD/0002-XII-21', 'Pelatihan Pengamanan dan Awareness K3', '2021-12-23', 'The CPD Accredited', 'PT Mitracom Solusindo', 'Ahmad Kusmana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_client`
--
ALTER TABLE `tb_client`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
