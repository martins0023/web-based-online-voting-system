-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 02:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `import_csv`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userId` int(8) NOT NULL,
  `userName` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userId`, `userName`, `password`, `firstName`, `lastName`) VALUES
(1, 1, 'OLADAPO MIRACLE ABIDEMI', 'NDCOM/18/277', '', ''),
(2, 2, 'ADEBESIN SODIQ ADEBOLA', 'NDCOM/18/206', '', ''),
(3, 1, 'OLADAPO MIRACLE ABIDEMI', 'NDCOM/18/277', '', ''),
(4, 2, 'ADEBESIN SODIQ ADEBOLA', 'NDCOM/18/206', '', ''),
(5, 1, 'OLADAPO MIRACLE ABIDEMI', 'NDCOM/18/277', '', ''),
(6, 2, 'ADEBESIN SODIQ ADEBOLA', 'NDCOM/18/206', '', ''),
(7, 1, 'OLADAPO MIRACLE ABIDEMI', 'NDCOM/18/277', '', ''),
(8, 2, 'ADEBESIN SODIQ ADEBOLA', 'NDCOM/18/206', '', ''),
(9, 1, 'OLADAPO MIRACLE ABIDEMI', 'NDCOM/18/277', '', ''),
(10, 2, 'ADEBESIN SODIQ ADEBOLA', 'NDCOM/18/206', '', ''),
(11, 1, 'OLADAPO MIRACLE ABIDEMI', 'NDCOM/18/277', '', ''),
(12, 2, 'ADEBESIN SODIQ ADEBOLA', 'NDCOM/18/206', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
