-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 06:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicantdb`
--

CREATE TABLE `applicantdb` (
  `appID` int(10) NOT NULL,
  `usrnmapp` varchar(50) NOT NULL,
  `psswrdapp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicantdb`
--

INSERT INTO `applicantdb` (`appID`, `usrnmapp`, `psswrdapp`) VALUES
(1, 'johan', 'johan'),
(7, 'paolo', 'paolo'),
(8, 'James', 'James');

-- --------------------------------------------------------

--
-- Table structure for table `employerdb`
--

CREATE TABLE `employerdb` (
  `empID` int(11) NOT NULL,
  `usrnmemp` varchar(30) NOT NULL,
  `psswrdemp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employerdb`
--

INSERT INTO `employerdb` (`empID`, `usrnmemp`, `psswrdemp`) VALUES
(1, 'johan', 'johan'),
(13, 'paolo', 'paolo');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `file`, `status`) VALUES
(6, 'resumepaolo', '3681-RESUME.pdf', 'Pending'),
(7, 'sample', '6940-schedule.png', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `jobdb`
--

CREATE TABLE `jobdb` (
  `jobcode` int(11) NOT NULL,
  `date` date NOT NULL,
  `position` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobdb`
--

INSERT INTO `jobdb` (`jobcode`, `date`, `position`, `employer`, `description`, `status`) VALUES
(3, '2021-06-23', 'Vocalist', 'paul', 'metal', 'Taken'),
(4, '2021-06-23', 'Dancer', 'paul', 'macho', 'Available'),
(5, '2021-06-30', 'Dancer', 'paolo', 'Pole', 'Few Slots Left');

-- --------------------------------------------------------

--
-- Table structure for table `managementdb`
--

CREATE TABLE `managementdb` (
  `staffID` int(10) NOT NULL,
  `usrnmstaff` varchar(30) NOT NULL,
  `psswrdstaff` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managementdb`
--

INSERT INTO `managementdb` (`staffID`, `usrnmstaff`, `psswrdstaff`) VALUES
(1, 'johan', 'johan'),
(3, 'paul', 'paul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicantdb`
--
ALTER TABLE `applicantdb`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `employerdb`
--
ALTER TABLE `employerdb`
  ADD PRIMARY KEY (`empID`),
  ADD KEY `usrnmemp` (`usrnmemp`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobdb`
--
ALTER TABLE `jobdb`
  ADD PRIMARY KEY (`jobcode`);

--
-- Indexes for table `managementdb`
--
ALTER TABLE `managementdb`
  ADD PRIMARY KEY (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicantdb`
--
ALTER TABLE `applicantdb`
  MODIFY `appID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employerdb`
--
ALTER TABLE `employerdb`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobdb`
--
ALTER TABLE `jobdb`
  MODIFY `jobcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `managementdb`
--
ALTER TABLE `managementdb`
  MODIFY `staffID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
