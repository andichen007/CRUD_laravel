-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2020 pada 03.24
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larahub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_buat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_diperbaharui` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `isi`, `tgl_buat`, `tgl_diperbaharui`, `coment_id`) VALUES
(1, 'ini adalah jawabannya', '2020-07-04', '2020-07-04', 1),
(2, 'ini adalah jawabannya', '2020-07-04', '2020-07-04', 2),
(3, 'ini adalah jawabannya', '2020-07-04', '2020-07-04', 3),
(4, 'ini adalah jawabannya', '2020-07-04', '2020-07-04', 4),
(5, 'ini adalah jawabannya', '2020-07-04', '2020-07-04', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_diperbaharui` date NOT NULL,
  `quest_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `judul`, `isi`, `tgl_buat`, `tgl_diperbaharui`, `quest_id`) VALUES
(1, 'Judul Satu', 'Ini adalah contoh isi pertanyaan', '2020-07-04', '2020-07-04', NULL),
(2, 'Judul Dua', 'Ini adalah contoh isi pertanyaan', '2020-07-04', '2020-07-04', NULL),
(3, 'Judul Tiga', 'Ini adalah contoh isi pertanyaan', '2020-07-04', '2020-07-04', NULL),
(4, 'Judul Empat', 'Ini adalah contoh isi pertanyaan', '2020-07-04', '2020-07-04', NULL),
(5, 'Judul Lima', 'Ini adalah contoh isi pertanyaan', '2020-07-04', '2020-07-04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
