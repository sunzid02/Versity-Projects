-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 09:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('Protik', '123'),
('sunzid', 'sun'),
('tanvir', '1234'),
('efe', 'fef'),
('s', 'v'),
('ffff', 'f'),
('vv', 'ff'),
('shaw', 'SHAW'),
('shaw', 'shawn'),
('ndjs', '123456'),
('shaw', '12345'),
('zia', 'zia');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First_Name`, `Last_Name`, `Username`, `Password`, `Email`, `Gender`) VALUES
('Protik', 'Hore', 'Protik', '123', 'protik.hore@gmail.co', 'male'),
('Sunzid', 'Mahmud', 'sunzid', 'sun', 'sunzid02@yahoo.com', 'male'),
('Tanvir', 'Siddiqui', 'tanvir', '123', 'sunzid02@yahoo.com', 'male'),
('Tanvir', 'Siddiqui', 'tanvir', '1234', 'co@gmail.com', 'male'),
('shaw', 'sro', 'shaw', '12345', 'shawn@gmail.com', 'male'),
('zia', 'ZIA', 'zia', 'zia', 'zia@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` int(10) NOT NULL,
  `Home` varchar(20) NOT NULL,
  `Result` varchar(20) NOT NULL,
  `Away` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `Home`, `Result`, `Away`) VALUES
(1, 'Brazil', '5-2', 'Spain'),
(2, 'A', '0-0', 'B'),
(3, 'B', '5-2', 'D'),
(4, 'AC Milan', '2-0', 'InterMilan');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingmatch`
--

CREATE TABLE `upcomingmatch` (
  `ID` int(10) NOT NULL,
  `Team1` varchar(20) NOT NULL,
  `Team2` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(20) NOT NULL,
  `Vanue` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcomingmatch`
--

INSERT INTO `upcomingmatch` (`ID`, `Team1`, `Team2`, `Date`, `Time`, `Vanue`) VALUES
(8, 'Arsenal', 'Liver Pool', '2017-08-19', '4:00AM', 'Anfield'),
(9, 'Real Madrid', 'Barcelona', '2017-08-20', '3:00 PM', 'Campnou'),
(10, 'Man City', 'Man U', '2017-08-19', '4:00AM', 'Oldtrafford'),
(12, 'Bayern', 'Wolfsburg', '2017-08-22', '10:00 PM', 'Allinz Arena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upcomingmatch`
--
ALTER TABLE `upcomingmatch`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `upcomingmatch`
--
ALTER TABLE `upcomingmatch`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
