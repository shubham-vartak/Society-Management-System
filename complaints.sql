-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 03:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `combox`
--

CREATE TABLE `combox` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `complaint` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `combox`
--

INSERT INTO `combox` (`ID`, `Title`, `complaint`) VALUES
(1, 'Leakage problem', 'This is to inform that is leakage in my flat due to the society water tank leaking. The tank is placed right above our flat and i request society to change the tank and do take neccessary actions on that.\r\nc-005,Shubham  '),
(2, 'clubhouse complaint', 'This is to inform that electricity switch board near door of clubhouse is not working i request to fix it as soon as possible.'),
(3, 'garden problem', 'there is repairs in garden area '),
(4, 'Leakage problem', 'there is issue in leakage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `combox`
--
ALTER TABLE `combox`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `combox`
--
ALTER TABLE `combox`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
