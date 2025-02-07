-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2025 at 05:05 PM
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
-- Database: `usersregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Flatno` int NOT NULL,
  `MobileNo` bigint NOT NULL,
  `nno of family members` int NOT NULL,
  `Password` varchar(20) NOT NULL,
  `active` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Username`, `Email`, `Flatno`, `MobileNo`, `nno of family members`, `Password`, `active`) VALUES
(2, 'Sonali', 'sonali01@gmail.com', 9, 8779635233, 4, '56ddud', 1),
(3, 'Shubham', 'shubhamvartak01@gmail.com', 8, 8779635279, 4, 'sgssjs', 1),
(9, 'ankita', 'ankita@gmail.com', 5, 8927393932, 2, 'shubhu123', 1),
(10, 'sheffer', 'sheffer@gmail.com', 4, 2344567393, 2, 'shubu123', 0),
(12, 'jithin', 'jithin@gmail.com', 1, 8779635278, 3, 'shubhu123', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
