-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2023 at 09:24 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payments`
--

-- --------------------------------------------------------

--
-- Table structure for table `payrecords`
--

DROP TABLE IF EXISTS `payrecords`;
CREATE TABLE IF NOT EXISTS `payrecords` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Flatno` int NOT NULL,
  `Amount` int NOT NULL,
  `Status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payrecords`
--

INSERT INTO `payrecords` (`ID`, `Name`, `Flatno`, `Amount`, `Status`) VALUES
(1, 'Shubham', 8, 1000, 'Success'),
(2, 'Sonali', 7, 1000, 'Success');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
