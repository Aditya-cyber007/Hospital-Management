-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 07:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `type` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `email`, `pass`, `type`, `mobile`, `branch`) VALUES
(1, 'Aditya Pratap Singh', 'aditya@outlook.com', '12345', 'Admin', '0', ''),
(2, 'Aman Singh', 'aman@gmail.com', '12345', 'Doctor', '7007047838', ''),
(139, 'giyan', 'giyan@outlook.com', '12345', 'Staff', '0700704783', 'mathura'),
(147, 'Akash', 'akash123@outlook.com', '12345', 'Doctor', '9897000092', ''),
(150, 'anik', 'gupta@outlook.com', '12345', 'Staff', '45435455', 'varanasi'),
(151, 'raman', 'raman@outlook.com', '12345', 'Staff', '345435435', 'varanasi'),
(156, 'mehdi', 'mehdi@outlook.com', '12345', 'Staff', '3244234234', 'mathura'),
(157, 'yogendra', 'yogendra@outlook.com', '12345', 'Staff', '345353555', 'Delhi'),
(159, 'xyz', 'xyz@outlook.com', '12345', 'Doctor', '1234567890', ''),
(160, 'Rakesh', 'rakesh@outlook.com', '12345', 'Doctor', '2345432344', ''),
(161, 'rohan', 'rohan@outlook.com', '12345', 'Staff', '123454321', 'varanasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
