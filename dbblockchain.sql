-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 04.31
-- Versi server: 8.0.32
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbblockchain`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblreview`
--

CREATE TABLE `tblreview` (
  `id` int NOT NULL,
  `nocontract` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `hasil` int NOT NULL,
  `komentar` text COLLATE utf8mb3_unicode_ci,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `tblreview`
--

INSERT INTO `tblreview` (`id`, `nocontract`, `hasil`, `komentar`, `timestamp`) VALUES
(1, '1', 1, '463464', '2023-05-24 11:01:51'),
(2, '1', 0, 'fjhfjhfjhfhf', '2023-05-24 12:31:01'),
(3, '1', 0, 'sdads', '2023-05-24 12:44:07'),
(4, '1', 1, 'cgchgcjhcjhcg', '2023-05-25 04:25:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsmartcontract`
--

CREATE TABLE `tblsmartcontract` (
  `nocontract` varchar(300) COLLATE utf8mb3_unicode_ci NOT NULL,
  `hash` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `flag` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `brosur` text COLLATE utf8mb3_unicode_ci,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `tblsmartcontract`
--

INSERT INTO `tblsmartcontract` (`nocontract`, `hash`, `flag`, `brosur`, `datetime`) VALUES
('1', '1', '1', 'sbfkbaslkdfbdaksjbfdjfjasbdjflbalsdjfbads', '2023-05-24 11:26:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `usersID` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `lastLogin` datetime NOT NULL,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`usersID`, `name`, `email`, `password`, `lastLogin`, `createTime`) VALUES
(1, 'admin', 'admin@gmail.com', '123123', '2022-08-04 00:00:00', '2022-08-28 07:59:55'),
(2, 'superuser', 'superuser@gmail.com', '123123', '2023-05-24 13:54:00', '2023-05-24 13:54:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblsmartcontract`
--
ALTER TABLE `tblsmartcontract`
  ADD PRIMARY KEY (`nocontract`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
