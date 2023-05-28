-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 05:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `tblreview`
--

CREATE TABLE `tblreview` (
  `id` int(11) NOT NULL,
  `nocontract` text CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `hasil` int(11) NOT NULL,
  `komentar` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`id`, `nocontract`, `hasil`, `komentar`, `timestamp`) VALUES
(1, '1', 1, 'Semua fungsi dapat sudah dicoba dan aman.', '2023-05-24 11:01:51'),
(2, '1', 1, 'fungsi aman.', '2023-05-24 12:31:01'),
(3, '1', 1, 'Setelah dites aman.', '2023-05-24 12:44:07'),
(4, '1', 1, 'Dari hasil simulasi aman.', '2023-05-25 04:25:33'),
(6, '0x9C818e93C0884f75f48d93a9BDB2E994f8d77b86', 1, 'Fungsi telah dilakukan tes pada simulasi dan sesuai dengan brosur.', '2023-05-28 15:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblsmartcontract`
--

CREATE TABLE `tblsmartcontract` (
  `nocontract` varchar(300) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `date` varchar(40) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `flag` varchar(300) NOT NULL,
  `brosur` text DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblsmartcontract`
--

INSERT INTO `tblsmartcontract` (`nocontract`, `date`, `hash`, `flag`, `brosur`, `datetime`) VALUES
('0x9C818e93C0884f75f48d93a9BDB2E994f8d77b86', '2022-12-23', '0xf471319166c06a71c89d8b404d91d4736cd353876c7899b7d5624e089b311e7f', '33e9f70c65177a128dd7dce09bd78bd79f784b07225cc6ce08ac2044494156d1', 'contoh-brosur.pdf', '2023-05-28 09:05:08'),
('1', '12 Desember 2022', '1', '1', 'brosur1.pdf', '2023-05-24 11:26:49'),
('10', '2023-05-15', '1', '1', '', '2023-05-26 13:00:26'),
('100', '2023-05-10', 'qwrwq', 'rqwrqwr', 'GSM Logo BRIN.pdf', '2023-05-26 13:10:38'),
('2', '2023-05-15', '3', '4', 'tes', '2023-05-26 12:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `lastLogin` datetime NOT NULL,
  `createTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `name`, `email`, `password`, `lastLogin`, `createTime`) VALUES
(1, 'pengguna', 'pengguna@gmail.com', '123123', '2022-08-04 00:00:00', '2022-08-28 07:59:55'),
(2, 'lembaga', 'lembaga@gmail.com', '123123', '2023-05-24 13:54:00', '2023-05-24 13:54:12'),
(3, 'publik', 'publik@gmail.com', '123123', '2023-05-26 12:00:03', '2023-05-26 12:00:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsmartcontract`
--
ALTER TABLE `tblsmartcontract`
  ADD PRIMARY KEY (`nocontract`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
