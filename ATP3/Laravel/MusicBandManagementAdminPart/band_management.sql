-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 10:57 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `band_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'sunzid', 'sunzid'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bandconcerts`
--

CREATE TABLE `bandconcerts` (
  `bandName` varchar(50) NOT NULL,
  `concertNo` int(11) NOT NULL,
  `concertName` varchar(1000) NOT NULL,
  `concertDateTime` datetime NOT NULL,
  `concertVenue` varchar(1000) NOT NULL,
  `ticketQuantity` int(11) NOT NULL,
  `perTicketPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandconcerts`
--

INSERT INTO `bandconcerts` (`bandName`, `concertNo`, `concertName`, `concertDateTime`, `concertVenue`, `ticketQuantity`, `perTicketPrice`) VALUES
('Linkin Park', 1, 'Tribute to Chester', '2017-12-06 16:00:00', 'Newyork', 500, 200),
('Linkin Park', 2, 'TexasLive', '2017-12-09 16:00:00', 'Texas', 50, 1000),
('Shironamhin', 3, 'Joy Bangla', '2017-12-29 16:00:00', 'Dhaka', 20000, 500),
('Linkin Park', 4, 'Billion Stars', '2017-12-18 16:00:00', 'Las Vegas', 60000, 5000),
('Linkin Park', 10, 'yoyo', '2017-12-26 14:20:05', 'ghg', 45, 21);

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE `bands` (
  `bandId` int(11) NOT NULL,
  `bandName` varchar(50) NOT NULL,
  `bandType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bands`
--

INSERT INTO `bands` (`bandId`, `bandName`, `bandType`) VALUES
(1, 'Linkin Park', 'Rock'),
(2, 'Shironamhin', 'Folk'),
(3, 'Shunno', 'Metal'),
(4, 'Nemesis', 'Rock'),
(5, 'Aurthohin', 'Metal'),
(6, 'Artcelll', 'Metal');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticketId` int(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userMobileNo` int(50) NOT NULL,
  `concertName` varchar(50) NOT NULL,
  `concertDateTime` datetime NOT NULL,
  `issueDate` date NOT NULL,
  `concertVenue` varchar(500) NOT NULL,
  `ticketQuantity` int(50) NOT NULL,
  `totalPrice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticketId`, `userName`, `userEmail`, `userMobileNo`, `concertName`, `concertDateTime`, `issueDate`, `concertVenue`, `ticketQuantity`, `totalPrice`) VALUES
(6, 'Protik', 'protik.hore@gmail.com', 1912969336, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 3, 60),
(7, 'sunzid', 'sunzid02@gmail.com', 1674563623, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 2, 40),
(8, 'songita', 'dhar@protik.com', 123, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 2, 40),
(9, 'rabbi', 'rabbi@yahoo.com', 1675298797, 'Tribute to Chester', '2017-12-06 16:00:00', '2017-11-15', 'Newyork', 2, 40),
(10, 'abu', 'abu@babu.com', 1235465, 'Joy Bangla', '2017-12-29 16:00:00', '2017-11-15', 'Dhaka', 2, 400),
(12, 'dfgg', 'grtgre@bhgh.com', 2586, 'Joy Bangla', '2017-12-29 16:00:00', '2017-11-15', 'Dhaka', 3, 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `bandconcerts`
--
ALTER TABLE `bandconcerts`
  ADD PRIMARY KEY (`concertNo`),
  ADD UNIQUE KEY `concertNo` (`concertNo`);

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`bandId`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketId`),
  ADD UNIQUE KEY `mn` (`userMobileNo`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bandconcerts`
--
ALTER TABLE `bandconcerts`
  MODIFY `concertNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
  MODIFY `bandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticketId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
