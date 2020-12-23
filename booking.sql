-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 01:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `mobile`, `booking_date`, `booking_day`) VALUES
(1, 'Umang Bajaniya', 'bajaniyaumang195@gmail.com', '2147483647', '0000-00-00', ''),
(2, 'Umang Bajaniya', 'bajaniyaumang195@gmail.com', '2147483647', '0000-00-00', ''),
(4, 'Nishit', 'nishit@gmail.com', '799800010', '0000-00-00', ''),
(5, 'ankit', 'ankit@gmail.com', '9712443252', '2020-12-31', ''),
(6, 'Nishit', 'bajaniyaumang195@gmail.com', '8866036968', '0000-00-00', ''),
(7, 'ankit', 'ankit@gmail.com', '9712443252', '2020-12-25', ''),
(8, 'Nishit', 'ubajanya@gmail.com', '9712443252', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
