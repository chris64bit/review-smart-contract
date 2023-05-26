-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 06:26 AM
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
  `nocontract` text NOT NULL,
  `hasil` int(11) NOT NULL,
  `komentar` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`id`, `nocontract`, `hasil`, `komentar`, `timestamp`) VALUES
(1, '1', 1, '463464', '2023-05-24 11:01:51'),
(2, '1', 0, 'fjhfjhfjhfhf', '2023-05-24 12:31:01'),
(3, '1', 0, 'sdads', '2023-05-24 12:44:07'),
(4, '1', 1, 'cgchgcjhcjhcg', '2023-05-25 04:25:33'),
(5, '1', 1, 'adafasdfasdfadsfa', '2023-05-26 02:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `tblsmartcontract`
--

CREATE TABLE `tblsmartcontract` (
  `nocontract` varchar(300) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `flag` varchar(300) NOT NULL,
  `brosur` text DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblsmartcontract`
--

INSERT INTO `tblsmartcontract` (`nocontract`, `hash`, `flag`, `brosur`, `datetime`) VALUES
('1', '1', '1', 'sbfkbaslkdfbdaksjbfdjfjasbdjflbalsdjfbads', '2023-05-24 11:26:49');

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
(1, 'pengguna2', 'pengguna2@gmail.com', '123123', '2022-08-04 00:00:00', '2022-08-28 07:59:55'),
(2, 'pengguna1', 'pengguna1@gmail.com', '123123', '2023-05-24 13:54:00', '2023-05-24 13:54:12');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
