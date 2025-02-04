-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 10:28 AM
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
-- Database: `admin-signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ismail', '$2y$10$TNlli9C0X8biR'),
(2, 'VUAI MAKAME', '$2y$10$voNXaayxO/7/S'),
(3, 'VUAI MAKAME', '$2y$10$V2g4ukWZRCTgt'),
(4, 'Sahil makame', '$2y$10$TbDSALgNWwwbQ'),
(5, 'suhail', '$2y$10$mltgT3FwIscx8'),
(6, 'khadija ali', '$2y$10$5DKUkmuI7M5V1'),
(7, 'ismail', '$2y$10$x1UnsYR2VEOzn'),
(8, 'ismail', '$2y$10$hWNjFd5yKrtNq'),
(9, 'ismail', '$2y$10$HmZBUE2p7kOE3'),
(10, 'ismail', '$2y$10$o.8N3ddts4tsN'),
(11, 'ismail', '$2y$10$1LgL/Sd5fAD3X'),
(12, 'juma', '$2y$10$ggqhPRmWYHK6E'),
(13, 'juma', '$2y$10$kpmgKZoVr.317'),
(14, 'ismail', '$2y$10$1zwkPrgonWZdj'),
(15, 'ismail', '$2y$10$sWbf07U3BX8IR'),
(16, 'ismail', '$2y$10$Uh/im5GmY4lCe'),
(17, 'ismail', '$2y$10$WOnsJNXZcmLse'),
(18, 'ismail', '$2y$10$N/3lCA4Q1ZOB4'),
(19, 'ismail', '$2y$10$G00ZxhtOvFGd3'),
(20, 'ismail', '$2y$10$bIHiIRwVZPDcO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
