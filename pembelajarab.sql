-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2023 pada 08.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembelajarab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_asrama`
--

CREATE TABLE `pendidikan_asrama` (
  `id` int(11) NOT NULL,
  `nama_kitab` text DEFAULT NULL,
  `nama_muallim` text DEFAULT NULL,
  `tanggal_pelajaran` date DEFAULT NULL,
  `jam_pelajaran` datetime DEFAULT NULL,
  `kelas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendidikan_asrama`
--

INSERT INTO `pendidikan_asrama` (`id`, `nama_kitab`, `nama_muallim`, `tanggal_pelajaran`, `jam_pelajaran`, `kelas`) VALUES
(1, 'al muyassar', 'mohammad ali', '2023-06-01', '2023-06-27 11:05:16', 'A II'),
(2, 'allahulkafi', 'walid', '2023-06-24', '0000-00-00 00:00:00', 'A I'),
(3, 'alhuakih', 'mohammad alpin', '2023-06-03', '0000-00-00 00:00:00', 'B I');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendidikan_asrama`
--
ALTER TABLE `pendidikan_asrama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendidikan_asrama`
--
ALTER TABLE `pendidikan_asrama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
