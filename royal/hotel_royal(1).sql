-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 05:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
(4, 303, 'shaikh farhan', 2147483647, '5848935456595', 'jhm ', 2, 2, '12/12/2021', '10/08/2021', 1),
(5, 304, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 305, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 306, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 307, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, 308, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 309, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, 310, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 311, 'sdfg', 122, '1213456', 'sdsdsdsd', 0, 5, '12/12/2021', '10/08/2021', 1),
(13, 312, 'shaikh ejaz', 1234567, '15563523236', 'asdsadsd', 4, 5, '12/12/2021', '15/12/2021', 1);

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
(4, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, 108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, 110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 112, 'szvcx', 122, '15563523236', 'aZXxcxzcxzc', 1, 5, '12/12/2021', '15/12/2021', 1);

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
(2, 202, 'shaikh ejaz', 4586965, '56956325', 'kilj', 1, 2, '12/12/2021', '15/12/2021', 1),
(4, 203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 204, 'shaikh ', 5486545, '846985', 'jam mohalla', 2, 4, '2021-09-17', '2021-09-29', 1),
(6, 205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 206, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 207, 'sahil deshmukh', 45869554, '96858495', 'bhusawal', 0, 2, '08/08/2021', '10/08/2021', 1),
(9, 208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 211, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 214, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 215, 'shaikh ejaz', 1234567, '15563523236', 'Xcxcx', 1, 5, '12/12/2021', '15/12/2021', 1);

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
(1, 1, 'ejslmm sjk', 5626, '45869554', 'lkm', 1, 2, '12/12/2021', '10/08/2021', 1),
(2, 2, 'ejaz shaikh', 515252, '5695456252', 'jam', 0, 2, '12/12/2021', '15/12/2021', 1),
(3, 3, 'ejaz sjsl', 56262, '4552512', 'kjm', 0, 2, '12/12/2021', '15/12/2021', 1),
(4, 4, 'shaikh ejaz', 5695563, '15563523236', 'lkoilo', 1, 2, '12/12/2021', '15/12/2021', 1),
(5, 5, 'shaikh ejaz', 526525, '8665656221', 'lkiol,', 1, 2, '12/12/2021', '15/12/2021', 1),
(6, 6, '', 0, '', '', 0, 0, '', '', 0),
(7, 7, 'punkaj sir', 15625, '659856256', 'pune', 2, 2, '06/08/2021', '06/08/2021', 1),
(8, 8, '', 0, '', '', 0, 0, '', '', 0),
(9, 9, '', 0, '', '', 0, 0, '', '', 0),
(10, 10, '', 0, '', '', 0, 0, '', '', 0),
(11, 11, 'ejaz shaikh ', 65896556, '8446931810', 'bhusawal', 0, 0, '05/08/2021', '10/08/2021', 1),
(12, 12, '', 0, '', '', 0, 0, '', '', 0),
(13, 13, '', 0, '', '', 0, 0, '', '', 0),
(14, 14, '', 0, '', '', 0, 0, '', '', 0),
(15, 15, 'shaikh ejaz', 5866965, '789584', 'dssdfghz', 4, 4, '12/12/2021', '10/08/2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `aadhar_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `mobile_number`, `aadhar_number`, `address`, `city`, `pincode`, `email`, `password`, `confirm_password`, `created_at`, `updated_at`) VALUES
(1, 'Ejaz Shaikh ', '8446931810', '62569856256', 'jam mohalla', 'bhusawal', '425201', 'ejaz88337@gmail.com', '$2y$10$GXtn4fF6FTov4O76xNz7Tuu17OIb5FOzS/xMh3oeBOrHvvOwoFUPq', '$2y$10$IWexNZl6AjYdcDLr2qg5De2BmMMZOYo.B8luROl6OxC7AFyf3HfGu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'hussainPathrawal', '9307616840', '85694586245', 'kondwa', 'pune', '411142', 'hussain@gmail.com', '$2y$10$rebP.//h6VLWHAiiGDwPZ.yAqfxluRSALO4tEQteBZZ3XXG6vT8iO', '$2y$10$zlZ7zEULZTjFFx7h9p8CF.5HfRveEDawTzepbXeZm27briTBgN/WO', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
