-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2018 at 03:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onedate`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Message`) VALUES
(3016, 'a', 'aa@xx.cc', 'aa'),
(6002, 's', 's@a.x', 's');

-- --------------------------------------------------------

--
-- Table structure for table `petition`
--

CREATE TABLE `petition` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Progress_confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petition`
--

INSERT INTO `petition` (`ID`, `Name`, `Email`, `City`, `Country`, `Progress_confirm`) VALUES
(8877, 'q', 'aa@xx.cc', 'a', 'a', ''),
(10049, 'we', 'aa@xx.cc', 'w', 'w', 'Checked'),
(17292, 'clinton were', 'clinton@cohesiondigital.co.uk', 'mombasa', 'Kenya', 'Checked'),
(18749, 'we', 'aa@xx.cc', 'w', 'w', 'Checked'),
(22125, 's', 's@a.x', 's', 's', 'Checked'),
(24517, 'we', 'aa@xx.cc', 'w', 'w', 'Checked'),
(33315, 'we', 'aa@xx.cc', 'w', 'w', 'Checked'),
(40244, 'q', 'aa@xx.cc', 'a', 'a', 'Checked'),
(44048, 'we', 'aa@xx.cc', 'w', 'w', 'Checked'),
(44695, 'z', 'aa@xx.cc', 'a', 'a', ''),
(60721, 'clinton williams', 'clintonwilliams16@gmail.com', 'Mombasa', 'Kenya', 'Checked'),
(79173, 'we', 'aa@xx.cc', 'w', 'w', 'Checked'),
(90762, 's', 's@a.x', 's', 's', 'Checked'),
(91462, 'q', 'aa@xx.cc', 'a', 'a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `petition`
--
ALTER TABLE `petition`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
