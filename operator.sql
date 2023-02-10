-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 08:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `operator`
--

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` varchar(50) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `codename` varchar(250) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subclass` varchar(50) NOT NULL,
  `rarity` int(10) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `gambar`, `codename`, `class`, `subclass`, `rarity`, `link`) VALUES
('PL05', 'sora.jpg', 'Sora', 'Supporter', 'Bard', 5, 'none'),
('R108', 'myrtle.jpg', 'Myrtle', 'Vanguard', 'Standard Bearer', 4, 'none'),
('R172', 'Lisa.jpg', 'Suzuran', 'Supporter', 'Decel Binder', 6, 'operator/Lisa/lisa.html'),
('RE41', 'Blaze.jpg', 'Blaze', 'Guard', 'Centurion', 6, 'operator/blaze/blaze.html');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
(1, 'narukachisaki', 'naru', 'Naruka'),
(6, 'Ayrann', '1234', 'Amelia'),
(8, 'Eclair', '1234', 'Amelia'),
(9, 'aaaa', '1234', 'Eclair'),
(10, 'add new', '1234', 'New'),
(11, 'ame ame ooo', '1234', 'Amelia'),
(12, '01', '01', ''),
(13, '02', '02', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
