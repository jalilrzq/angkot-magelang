-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2022 pada 15.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angkot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute_angkot`
--

CREATE TABLE `rute_angkot` (
  `ID_RUTE` varchar(5) NOT NULL,
  `NAMA_RUTE` varchar(50) NOT NULL,
  `KETERANGAN` varchar(70) NOT NULL,
  `ICON` text NOT NULL,
  `DATA_RUTE` text NOT NULL,
  `COLOR` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rute_angkot`
--

INSERT INTO `rute_angkot` (`ID_RUTE`, `NAMA_RUTE`, `KETERANGAN`, `ICON`, `DATA_RUTE`, `COLOR`) VALUES
('R01', 'Jalur 1', 'Terminal Kebonpolo', 'assets/image/jalur/Icon-angkot-1.png', 'assets/image/jalur/jalur-1.png', '4E75FF'),
('R02', 'Jalur 2', 'Terminal Ikhlas', 'assets/image/jalur/Icon-angkot-2.png', 'assets/image/jalur/jalur-2.png', 'FF4E4E'),
('R03', 'Jalur 3', 'Sub Terminal Ikhlas', 'assets/image/jalur/Icon-angkot-3.png', 'assets/image/jalur/jalur-3.png', 'D14EFF'),
('R04', 'Jalur 4', 'Terminal Tidar', 'assets/image/jalur/Icon-angkot-4.png', 'assets/image/jalur/jalur-4.png', '4EF4FF'),
('R05', 'Jalur 5', 'Terminal Tidar', 'assets/image/jalur/Icon-angkot-5.png', 'assets/image/jalur/jalur-5.png', '5CFF4E'),
('R06', 'Jalur 6', 'Terminal Tidar', 'assets/image/jalur/Icon-angkot-6.png', 'assets/image/jalur/jalur-6.png', 'DDE030');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `ID_USER` varchar(5) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID_USER`, `NAME`, `USERNAME`, `PASSWORD`) VALUES
('001', 'RENDI', 'rendi', '2022');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rute_angkot`
--
ALTER TABLE `rute_angkot`
  ADD PRIMARY KEY (`ID_RUTE`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
