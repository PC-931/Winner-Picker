-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 07:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winner`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phno` varchar(255) DEFAULT NULL,
  `submissions` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `name`, `email`, `phno`, `submissions`) VALUES
(18, 'Sanjeev', 'sanjeev@gmail.com', '8373928832', 2),
(19, 'Priya Singh', 'priyasingh931hal@gmail.com', '9919243588', 1),
(20, 'Vinod', 'vinod@gmail.com', '8795981811', 3),
(22, 'Sadhana', 'sadhana@gmail.com', '7376492598', 4),
(23, 'test5', 'test5@gmail.com', '5555555555', 5),
(24, 'test6', 'test6@gmail.com', '6666666666', 6),
(25, 'test7', 'test7@gmail.com', '7777777777', 7),
(26, 'Sanjeev', 'sanjeevsingh.931amethi@gmail.com', '9554717974', 5),
(27, 'test8', 'test8@gmail.com', '8888888888', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
