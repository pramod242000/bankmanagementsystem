-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 06:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `accountno` int(11) NOT NULL,
  `accountname` varchar(255) DEFAULT NULL,
  `mobileno` bigint(225) DEFAULT NULL,
  `emailid` varchar(225) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`accountno`, `accountname`, `mobileno`, `emailid`, `amount`, `date`) VALUES
(20211000, 'PRAMOD', 7676700571, 'm123pramod@gmail.com', 700, '2021-11-03 16:50:05'),
(20211001, 'UMESH', 6361214274, 'hello@gmail.com', 1320, '2021-11-03 16:50:15'),
(20211002, 'JAYA', 9743649598, 'hai@gmail.com', 1100, '2021-11-03 16:50:33'),
(20211003, 'BOSE', 8142724297, 'hai1@gmail.com', 2000, '2021-11-03 16:51:24'),
(20211004, 'PRASHANTH', 8142724297, 'hai2@gmail.com', 710, '2021-11-03 16:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `transhist`
--

CREATE TABLE `transhist` (
  `ID` int(11) NOT NULL,
  `sender` bigint(225) DEFAULT NULL,
  `receiver` bigint(225) DEFAULT NULL,
  `amount` bigint(20) NOT NULL,
  `dot` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transhist`
--

INSERT INTO `transhist` (`ID`, `sender`, `receiver`, `amount`, `dot`) VALUES
(2, 20211004, 20211000, 200, '2021-11-06 18:27:05'),
(3, 20211004, 20211000, 200, '2021-11-06 18:27:46'),
(4, 20211000, 20211001, 200, '2021-11-06 18:27:55'),
(5, 20211001, 20211004, 200, '2021-11-06 18:28:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `transhist`
--
ALTER TABLE `transhist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `accountno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20211005;

--
-- AUTO_INCREMENT for table `transhist`
--
ALTER TABLE `transhist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
