-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 03:01 PM
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
-- Database: `noticeboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Noticedate` date NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`ID`, `Name`, `Type`, `Noticedate`, `Message`) VALUES
(1, 'Lack of water Supply', 'Announcements', '2021-10-04', 'This is to inform you that there is a shortage of drinking & domestic water “due to breakage of water pipeline near our society”. Please make necessary arrangement to store water as per your requirement till Tommorow Evening 6pm. Avoid wastage of water, save drops of water.\r\nInconvenience is regretted.'),
(2, 'Ganpati celebration Discusssion', 'Events', '2021-10-04', 'On the auspicious occasion of Ganesh chaturti, the Society has organized a event followed by activities. All members of the society are requested to attend the event discussion in the clubhouse of the society at 8:00 pm on the 2nd of September..\r\nThank You,\r\nThanekar Parkland.'),
(3, 'meeting regarding water problem', 'Announcements', '2021-10-05', 'today there is meeting in clubhouse at 8.00 pm evening all are requested to attend the meeting.'),
(4, 'Diwali celebration Discusssion', 'Events', '2022-07-12', 'dicussion on event');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
