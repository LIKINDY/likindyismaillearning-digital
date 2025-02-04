-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 10:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taarifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ismail', '$2y$10$3YpYdPrSWHxBQ'),
(2, 'juma ali', '$2y$10$VNbaKxt3GWHKr'),
(3, 'ismail', '$2y$10$qQgqKRY7XlPCm'),
(4, 'ismail', '$2y$10$1sIqUdlNptZ6f'),
(5, 'ismail', '$2y$10$XXlDjkR.qxLBd'),
(6, 'ismail', '$2y$10$UYWaogaseSAO7'),
(7, 'ismail', '$2y$10$HC8iMwDWYJ3UJ'),
(8, 'ismail', '$2y$10$y8ivgGiTD1gBU'),
(9, 'ismail', '$2y$10$tT0FMF/LGsR24'),
(10, 'ABDUDULHAMID', '$2y$10$MqfxFrd50Ze4w'),
(11, 'ismail', '$2y$10$zhgQ02SUorbc0'),
(12, 'ismail', '$2y$10$rprjaBZwOQYfB'),
(13, 'ismail', '$2y$10$i/apgsricU6ud'),
(14, 'ismail', '$2y$10$80uovygZWA11t');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
