-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 07:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123', 77874512);

-- --------------------------------------------------------

--
-- Table structure for table `double_ac`
--

CREATE TABLE `double_ac` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_ac`
--

INSERT INTO `double_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 301, 'b', 545, '5454', 'gafg', 2, 1, '25-06-2020', '29-06-2020', 1),
(2, 302, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 303, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 304, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 305, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 306, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 307, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, 308, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 309, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, 310, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 311, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 312, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `double_non_ac`
--

CREATE TABLE `double_non_ac` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_non_ac`
--

INSERT INTO `double_non_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 103, 'Akshay ', 74125, '85245698', 'Address of akshay', 0, 2, '25-05-2020', '30-05-2020', 1),
(5, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, 108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, 110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `single_ac`
--

CREATE TABLE `single_ac` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_ac`
--

INSERT INTO `single_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 206, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 207, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 211, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 214, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `single_non_ac`
--

CREATE TABLE `single_non_ac` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `holder_id` int(11) NOT NULL,
  `holder_mobile` varchar(100) NOT NULL,
  `holder_address` varchar(250) NOT NULL,
  `child` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `in_date` varchar(100) NOT NULL,
  `out_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_non_ac`
--

INSERT INTO `single_non_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 1, '', 0, '', '', 0, 0, '', '', 0),
(2, 2, 'Pramod Sharma', 1010, '9878451245', 'xyz nagar , rajasthan', 2, 2, '29-04-2020', '31-04-2020', 1),
(3, 3, '', 0, '', '', 0, 0, '', '', 0),
(4, 4, '', 0, '', '', 0, 0, '', '', 0),
(5, 5, '', 0, '', '', 0, 0, '', '', 0),
(6, 6, '', 0, '', '', 0, 0, '', '', 0),
(7, 7, '', 0, '', '', 0, 0, '', '', 0),
(8, 8, '', 0, '', '', 0, 0, '', '', 0),
(9, 9, '', 0, '', '', 0, 0, '', '', 0),
(10, 10, '', 0, '', '', 0, 0, '', '', 0),
(11, 11, '', 0, '', '', 0, 0, '', '', 0),
(12, 12, '', 0, '', '', 0, 0, '', '', 0),
(13, 13, '', 0, '', '', 0, 0, '', '', 0),
(14, 14, '', 0, '', '', 0, 0, '', '', 0),
(15, 15, '', 0, '', '', 0, 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `double_ac`
--
ALTER TABLE `double_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `double_non_ac`
--
ALTER TABLE `double_non_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `single_ac`
--
ALTER TABLE `single_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `single_non_ac`
--
ALTER TABLE `single_non_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `double_ac`
--
ALTER TABLE `double_ac`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `double_non_ac`
--
ALTER TABLE `double_non_ac`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `single_ac`
--
ALTER TABLE `single_ac`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `single_non_ac`
--
ALTER TABLE `single_non_ac`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
