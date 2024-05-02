-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2024 pada 04.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anggaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggaran`
--

CREATE TABLE `tb_anggaran` (
  `no` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `anggaran` varchar(50) NOT NULL,
  `nominal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_anggaran`
--

INSERT INTO `tb_anggaran` (`no`, `nama`, `jenis_kelamin`, `anggaran`, `nominal`) VALUES
(39, 'asep', 'Laki-Laki', 'agustusan', 100000),
(40, 'angga', 'Laki-Laki', 'agustusan', 150000),
(41, 'ayu', 'Perempuan', 'agustusan', 200000),
(42, 'dani', 'Laki-Laki', 'agustusan', 850000),
(43, 'dimas', 'Laki-Laki', 'agustusan', 500000),
(44, 'putri', 'Perempuan', 'agustusan', 650000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_anggaran`
--
ALTER TABLE `tb_anggaran`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_anggaran`
--
ALTER TABLE `tb_anggaran`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
