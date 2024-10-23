-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 06:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(11) NOT NULL,
  `patientid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `consultationtype` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `patientid`, `doctorid`, `date`, `time`, `reason`, `consultationtype`, `status`, `notes`) VALUES
(1, 0, 1, '2023-10-11', '10:14:00.000000', 'reason', 'In-Person', 'Pending', 'sda'),
(2, 0, 5, '2023-10-07', '08:12:00.000000', 'reason', 'In-Person', 'Pending', 'adfd'),
(3, 0, 5, '2023-10-28', '10:11:00.000000', 'reason', 'In-Person', 'Pending', 'wergd'),
(4, 0, 5, '2023-10-19', '09:19:00.000000', 'reason', 'In-Person', 'Pending', 'sdffsd'),
(5, 0, 5, '2023-10-19', '09:19:00.000000', 'reason', 'In-Person', 'Pending', 'sdffsd'),
(6, 0, 5, '2023-10-19', '09:19:00.000000', 'reason', 'In-Person', 'Pending', 'sdffsd'),
(7, 0, 5, '2023-10-09', '09:30:00.000000', 'reason', 'In-Person', 'Pending', 'aswesrdfhjg'),
(8, 0, 5, '2023-10-11', '09:32:00.000000', 'reason', 'In-Person', 'Pending', 'ADSfgbh'),
(9, 0, 5, '2023-11-03', '09:33:00.000000', 'reason', 'In-Person', 'Pending', 'ASDFDV'),
(10, 18, 5, '2023-10-19', '09:59:00.000000', 'reason', 'In-Person', 'cancelled', 'asdfsedgrhngmj,hk.jgfds');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `specialization` varchar(1000) NOT NULL,
  `contactnum` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `workingdays` varchar(100) NOT NULL,
  `workstart` time(6) NOT NULL,
  `workend` time(6) NOT NULL,
  `roomnum` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `firstname`, `middlename`, `lastname`, `specialization`, `contactnum`, `email`, `workingdays`, `workstart`, `workend`, `roomnum`, `password`) VALUES
(5, 'Romark', 'Antonio', 'Bayan', 'cardio', '09195912107', 'romark7bayan@gmail.com', 'monday', '10:03:00.000000', '22:03:00.000000', 7, 'Rom');

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

CREATE TABLE `medicalhistory` (
  `historyid` int(11) NOT NULL,
  `patientid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `existingcondition` varchar(1000) NOT NULL,
  `otherinfo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`historyid`, `patientid`, `date`, `existingcondition`, `otherinfo`) VALUES
(0, 0, '2023-10-26', 'sd', 'sd'),
(0, 0, '2023-10-26', 'wrwe', 'wetg'),
(0, 0, '2023-10-26', 'fshgkl.sfcjgk', 'asdfzxcgjvkhsdxcghkj'),
(0, 0, '2023-10-26', 'sdfsdf', 'sdfsdf'),
(0, 0, '2023-10-26', 'sdfsdf', 'sdfsdf'),
(0, 0, '2023-10-26', 'sdfsdf', 'sdfsdf'),
(0, 0, '2023-10-26', 'adfszxcgh', 'aszDXFCHJG'),
(0, 0, '2023-10-26', 'sdzfdgvbfhnm', 'ADSZfxgcv hm'),
(0, 0, '2023-10-26', 'ASDSV', 'sadsafc'),
(0, 18, '2023-10-26', 'adsfjkl,kuhytgrf', 'DSAFAFDVGBHNFMHJ,HGF');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `email`, `password`, `dateofbirth`, `age`, `gender`, `address`, `phone`) VALUES
(1, 'Romark', 'Bayan', 'romark7bayan@gmail.com', 'rom', '2023-10-02', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(4, 'Romark', 'Bayan', 'r@gmail.com', 'rom', '0000-00-00', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(7, 'Romark', 'Bayan', 'romark7w4tbayan@gmail.com', 'rom', '2023-10-11', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(10, 'Romark', 'Bayan', 'romark7bayani@gmail.com', 'Rom', '2023-10-12', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(12, 'Romark', 'Bayan', 'romark7bayano@gmail.com', 'Rom', '0000-00-00', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(13, 'Romarkoooo', 'Bayan', 'rom@gmail.com', 'crom', '2023-10-02', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(14, 'Romarkoooo', 'Bayanli', 'romi@gmail.com', 'rom', '2023-10-02', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(15, 'RomarkIII', 'BayanII', 'romark@gmail.com', 'rom', '2023-10-02', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(16, 'Romark', 'Bayan', 'romarkoooo7bayan@gmail.com', 'rom', '2023-10-03', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(18, 'Romark', 'Bayan', 'romammmmm@gmail.com', 'rom', '2023-10-02', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107'),
(21, 'Romark', 'Bayan', 'mark7bayan@gmail.com', 'rom', '2023-10-05', 0, 'Male', 'Lot 1 Blk 20 Michigan st, Lakewood Subdivsion Brgy. Sumacab Este', '09195912107');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `queryid` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contactnumber` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryid`, `fullname`, `contactnumber`, `email`, `message`) VALUES
(1, 'Romark Bayan', '09195912107', 'romark7bayan@gmail.com', '35647'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, 'Romark Bayan', '09195912107', 'romark7bayan@gmail.com', 'hello'),
(8, 'Romark Bayan', '09195912107', 'romark7bayan@gmail.com', 'hello'),
(9, 'Romark Bayan', '09195912107', 'romark7bayan@gmail.com', 'hello'),
(10, 'Romark Bayan', '09195912107', 'romark7bayan@gmail.com', 'fffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusid` int(11) NOT NULL,
  `patientid` int(11) NOT NULL,
  `appointmentid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusid`, `patientid`, `appointmentid`, `status`) VALUES
(1, 0, 0, 'Pending'),
(2, 0, 0, 'Pending'),
(3, 0, 0, 'Pending'),
(4, 0, 0, 'Pending'),
(5, 0, 0, 'Pending'),
(6, 0, 0, 'Pending'),
(7, 0, 8, 'Pending'),
(8, 0, 9, 'Pending'),
(9, 18, 10, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`queryid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `queryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
