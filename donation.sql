-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 03:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_post`
--

CREATE TABLE `donation_post` (
  `postid` int(10) NOT NULL,
  `Userid` int(10) NOT NULL,
  `donation_reason` varchar(100) NOT NULL,
  `donation_date` date DEFAULT NULL,
  `donation_time` time DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `fund` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_post`
--

INSERT INTO `donation_post` (`postid`, `Userid`, `donation_reason`, `donation_date`, `donation_time`, `amount`, `fund`) VALUES
(1, 1, 'Help students develop greater self-awareness and resilience while at the IU School of Medicine so th', '2016-01-01', '01:57:00', 0, 990),
(2, 1, 'Join us in helping to support the farmers and researchers at The Land Institute who are creating a c', '2016-11-01', '15:59:00', 0, 55000),
(3, 2, 'Help students develop greater self-awareness and resilience while at the IU School of Medicine so th', '2014-08-02', '18:59:00', 0, 500),
(4, 2, 'Nonprofits around the world apply and join Donation to access more funding, to build new skills, and', '2017-10-01', '05:54:00', 4000, NULL),
(5, 1, 'Why Do you Need Donation?', '2018-03-18', '00:38:00', 5000, NULL),
(6, 1, 'Why Do you Need Donation?', '2018-03-16', '01:59:00', 0, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `Userid` int(10) NOT NULL,
  `Admin` int(2) DEFAULT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`Userid`, `Admin`, `Password`, `Name`, `email`, `gender`, `age`) VALUES
(1, NULL, '11', 'Mamunur Rashid', 'iammufrad1@gmail.com', 'Male', 23),
(2, NULL, '020', 'Ruhul Amin', 'ruhulamin@gmail.com', 'Male', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD PRIMARY KEY (`postid`),
  ADD UNIQUE KEY `postid` (`postid`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `Userid` (`Userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Admin` (`Admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD CONSTRAINT `donation_post_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `user_details` (`Userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
