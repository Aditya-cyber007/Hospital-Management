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
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `sno` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `age` int(8) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`sno`, `name`, `phone`, `age`, `date`) VALUES
(28, 'Aditi', '1234567890', 22, '2021-10-06'),
(29, 'Akriti', '5435435435', 21, '2021-10-06'),
(30, 'Akshi', '2345676543', 22, '2021-10-06'),
(31, 'Evaa', '2345676543', 34, '2021-10-06'),
(32, 'Abhishek', '5435435435', 43, '2021-10-05'),
(33, 'Aditya Pratap Singh', '7006059585', 19, '2021-10-05'),
(34, 'Bishesh Babu', '5435435435', 21, '2021-10-04'),
(35, 'Raman', '4565456546', 23, '2021-10-04'),
(36, 'Rohan', '9598684756', 27, '2021-10-03'),
(38, 'Suman', '4567898765', 88, '2021-10-07'),
(39, 'Sushma', '6388768576', 42, '2021-10-07'),
(40, 'xyz', '2345676543', 22, '2021-10-07'),
(41, 'abc', '957456575', 21, '2021-10-07'),
(42, 'bcd', '4567898765', 28, '2021-10-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
