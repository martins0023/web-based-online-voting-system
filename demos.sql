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
-- Database: `demos`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `contactno`, `gender`, `education`, `address`) VALUES
(1, 'Anuj kumar', 'info@phpgurukul.com', 2147483647, 'Male', 'Graduate', 'H no- 18/1 Bihari puram phase-1 melrose bye pass'),
(2, 'Rahul', 'rahul@ttest.com', 8285703354, 'Male', 'Graduate', 'Test'),
(3, 'Rahul', 'rahul@ttest.com', 8285703354, 'Male', 'Graduate', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activationcode` bigint(200) NOT NULL,
  `status` set('verified','pending','0','1','2','notconfirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `name`, `email`, `password`, `activationcode`, `status`) VALUES
(1, 'oladapo miracle', 'echristine053@gmail.com', '2f12ab9070131d433cdcc1b9663a30bd', 0, '0'),
(2, 'oladapo miracle', 'echristine053@gmail.com', '2f12ab9070131d433cdcc1b9663a30bd', 31754, '0'),
(3, 'oladapo miracle', 'oladapom4@gmail.com', '2f12ab9070131d433cdcc1b9663a30bd', 2732, '0'),
(4, 'oladapo miracle', 'oladapom4@gmail.com', '2f12ab9070131d433cdcc1b9663a30bd', 0, '0'),
(5, 'oladapo miracle', 'echristine053@gmail.com', '0d4a096d78679d57bcbf706b01784f0a', 0, '0'),
(6, '', 'echristine053@gmail.com', '0d4a096d78679d57bcbf706b01784f0a', 97, '0'),
(7, 'oladapo miracle', 'superadmin@gmail.com', '306d2433c562a635a0d00daa43fe896b', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
