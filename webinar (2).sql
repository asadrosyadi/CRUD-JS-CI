-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 04.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `magic`
--

CREATE TABLE `magic` (
  `id` int(11) NOT NULL,
  `suhu` text NOT NULL,
  `lembap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `magic`
--

INSERT INTO `magic` (`id`, `suhu`, `lembap`) VALUES
(1, '30', '30'),
(2, '28', '29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel`
--

CREATE TABLE `tabel` (
  `id` int(11) NOT NULL,
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `data3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel`
--

INSERT INTO `tabel` (`id`, `data1`, `data2`, `data3`) VALUES
(4, 'Robot 1', '-7.437160', '112.723085');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `magic`
--
ALTER TABLE `magic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel`
--
ALTER TABLE `tabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `magic`
--
ALTER TABLE `magic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel`
--
ALTER TABLE `tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
