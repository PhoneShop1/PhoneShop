-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 02:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoneshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`userId`, `username`, `first_name`, `last_name`, `email`, `password`, `sex`, `photo`) VALUES
(2, 'hello', 'hi', 'ih', '123456@gmail.com', 'kdr1Tb82U9j46', 'M', ''),
(3, 'hee', 'he', 'she', 'patputhirin@gmail.com', 'kd7gq0mw.d/Ao', 'F', 'upload/1497927394.jpg'),
(4, 'sad', 'ff', 'ff', 'patputhirin@gmail.com', 'kdr1Tb82U9j46', 'F', ''),
(5, 'hello', 'hi', 'ffg', '123456@gmail.com', 'kd7gq0mw.d/Ao', 'M', ''),
(6, 'kea', 'kea', 'kea', 'j@gmail.com', 'kdGGSSGAkHqd.', 'M', 'upload/1497929425.jpg'),
(7, 'asd', 'asd', 'asd', 'j@gmail.com', '123', 'F', ''),
(8, 'hii', 'hi', 'hi', 'patputhirin@gmail.com', '123456', 'F', ''),
(9, 'hhhhhh', 'hh', 'hhh', 'h@gmail.com', '12345', 'F', 'upload/1497971135.png'),
(10, 'sadfgf', 'as', 'sd', 'h@gmail.com', '12345', 'F', ''),
(11, 'hhhhhh1', 'h1', 'h1', 'h@gmail.com', '123456', 'F', ''),
(12, 'gghh', 'gg', 'hh', 'h@gmail.com', '12345', 'F', ''),
(13, 'hhh1', 'dd', 'dd', 'h@gmail.com', '12345', 'F', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`userId`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
