-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 07:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_mail`
--

CREATE TABLE `user_mail` (
  `mail_id` int(11) NOT NULL,
  `mail_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_mail`
--

INSERT INTO `user_mail` (`mail_id`, `mail_address`) VALUES
(1, 'imranhadid03@gmail.com'),
(2, 'imranhadid03@gmail.com'),
(3, 'imranhadid03@gmail.com'),
(4, 'imranhadid03@gmail.com'),
(5, 'imranhadid03@gmail.com'),
(6, 'imranhadid03@gmail.com'),
(7, 'imranhadid03@gmail.com'),
(8, 'imranhadid03@gmail.com'),
(9, 'imranhadid03@gmail.com'),
(10, 'imranhadid03@gmail.com'),
(11, 'imranhadid03@gmail.com'),
(12, 'imranhadid03@gmail.com'),
(13, 'imranhadid03@gmail.com'),
(14, 'imranhadid03@gmail.com'),
(15, 'imranhadid03@gmail.com'),
(16, 'imranhadid03@gmail.com'),
(17, 'imranhadid03@gmail.com'),
(18, 'imranhadid03@gmail.com'),
(19, 'imranhadid03@gmail.com'),
(20, 'imranhadid03@gmail.com'),
(21, 'imranhadid03@gmail.com'),
(22, 'imranhadid03@gmail.com'),
(23, 'imranhadid03@gmail.com'),
(24, 'imranhadid03@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_mail`
--
ALTER TABLE `user_mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_mail`
--
ALTER TABLE `user_mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
