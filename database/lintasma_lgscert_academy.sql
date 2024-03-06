-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2023 pada 12.26
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lintasma_lgscert_academy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_client`
--

CREATE TABLE `tb_client` (
  `id` int(4) NOT NULL,
  `certificate_code` varchar(20) NOT NULL,
  `training_name` varchar(100) NOT NULL,
  `participant_name` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `acc_name` enum('ABMSC Accredited','The CPD Accredited','Lintas Management System') NOT NULL,
  `agency_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_client`
--

INSERT INTO `tb_client` (`id`, `certificate_code`, `training_name`, `participant_name`, `date`, `acc_name`, `agency_name`) VALUES
(1, 'LGS-CPD/0001-XII-21', 'Pelatihan Pengamanan dan Awareness K3', 'ST ARIFIN', '2021-12-23', 'The CPD Accredited', 'PT Mitracom Solusindo'),
(2, 'LGS-LMS/0001-IX-20', 'Pelatihan Pengenalan Intergrasi ISO 9001:2015, ISO 14001:2015, ISO 45001:2018 dan SMK3 PP 50', 'NOFRONAL', '2020-09-09', 'Lintas Management System', 'PT Noiz Raquti Asia'),
(3, 'LGS-CPD/0002-XII-21', 'Pelatihan Pengamanan dan Awareness K3', 'AHMAD KUSMANA', '2021-12-23', 'The CPD Accredited', 'PT Mitracom Solusindo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_client`
--
ALTER TABLE `tb_client`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
