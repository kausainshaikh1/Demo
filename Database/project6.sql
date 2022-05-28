-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 09:45 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Brand_ID` int(20) NOT NULL,
  `Brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Brand_ID`, `Brand_name`) VALUES
(11, 'Aashirwad'),
(12, 'FEPIC'),
(13, 'FIONA'),
(14, 'NITYA'),
(15, 'Sana Safinaz'),
(16, 'Ladies Flavour'),
(17, 'INAYA'),
(18, 'Mohini Glamour'),
(19, 'Nakkashi'),
(20, 'HOT LADY'),
(21, 'TFH'),
(22, 'MAISHA'),
(23, 'INAAYAT'),
(24, 'AARAV'),
(25, 'GULKAND'),
(26, 'eba Lifestyle'),
(27, 'VINK'),
(28, 'BELA Fashion'),
(29, 'Deepsy'),
(30, 'Arihant NX');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Item_Id` int(30) NOT NULL,
  `Item_Name` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `img` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_ID` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_ID`, `category_name`) VALUES
(1, 'Dress Materials'),
(2, 'Kurtis'),
(3, 'Gowns'),
(4, 'Sarees'),
(5, 'Lehangas'),
(6, 'Casual Wear'),
(7, 'Party Wear'),
(8, 'Designer Wear');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `customer_name` varchar(20) NOT NULL,
  `Email_ID` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `MobileNumber` int(12) NOT NULL,
  `FullAddress` varchar(255) NOT NULL,
  `State` varchar(200) NOT NULL,
  `land_mark` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_ID` int(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country_name` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email_ID` varchar(20) NOT NULL,
  `phone_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_ID`, `customer_name`, `address`, `country_name`, `state`, `city`, `email_ID`, `phone_no`) VALUES
(1, 'Muneeb Shakeel Ahmed', 'Sunshree kangan apartments, NIBM Road, Kondhwa', 'India', 'Maharashtra', 'Pune', 'muneebsac@gmail.com', '9890148341'),
(4, 'Fareeha Shakeel Chog', 'Sunshree kangan apartments, NIBM Road, Kondhwa', 'India', 'Maharashtra', 'Pune', 'fareehashakeel00@gma', '9527789215'),
(5, 'asmaa shakeel', 'Sunshree kangan apartments, NIBM Road, Kondhwa', 'India', 'Maharashtra', 'Pune', 'asmaa123@gmail.com', '8909876545'),
(6, 'Kausain Shaikh', 'shastrinagar', 'India', 'Maharashtra', 'Pune', 'kausainshaikh1999@gm', '8909865432'),
(7, 'Myra Khan', 'Kondhwa', 'India', 'Maharashtra', 'Pune', 'myra123@gmail.com', '7654567890'),
(8, 'Shamsiya Khan', 'Camp', 'India', 'Maharashtra', 'Pune', 'shamsi123@gmail.com', '8909876780'),
(9, 'Seema Choglay', 'Safal Complex', 'India', 'Maharashtra', 'Pune', 'seemachoglay@gmail.c', '8906546677'),
(10, 'Tasmiya Shaikh', 'Raheja Vistas', 'India', 'Maharashtra', 'Mumbai', 'tasmiyashaikh@gmail.', '7877899865'),
(11, 'shayban khan', 'camp', 'india', 'maharashtra', 'pune', 'shayban123@gmail.com', '7898765432'),
(12, 'shayban khan', 'camp', 'india', 'maharashtra', 'pune', 'shayban123@gmail.com', '8248252825');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `EmpID` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MoblieNumber` varchar(12) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `Action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `EmpID`, `FullName`, `MoblieNumber`, `RegDate`, `Action`) VALUES
(5, '111', 'hh', '1234567890', '2021-10-08 12:11:39', 1),
(6, '112', 'hgs', '0987654321', '2021-10-08 16:22:53', 1),
(7, '113', 'gg', '1234567890', '2021-10-08 16:23:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('Admin', 'Admin'),
('fareeha.choglay', 'fareeha123'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('Admin', 'Admin'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.shakeel', 'fareeha'),
('fareeha.shakeel', 'fareeha'),
('fareeha.shakeel', 'fareeha'),
('fareeha.shakeel', 'fareeha'),
('fareeha.shakeel', 'fareeha'),
('fareeha.shakeel', 'fareeha'),
('fareeha.choglay', 'faree'),
('fareeha.choglay', 'fareeha123'),
('fareeha.shakeel', 'fareeha'),
('Admin', 'Admin'),
('fareeha.shakeel', 'fareeha'),
('fareeha.choglay', 'fareeha123'),
('fareeha.shakeel', 'fareeha'),
('Admin', 'Admin'),
('fareeha.shakeel', 'fareeha'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('admin', 'Admin'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('fareeha.choglay', 'fareeha123'),
('Admin', 'Admin'),
('imran', '123'),
('aaliya', '123'),
('', ''),
('aaliya', '123'),
('', ''),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', ''),
('aaliya', '123`'),
('', ''),
('', ''),
('', ''),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('aaliya', '123'),
('hi', 'hi'),
('hey', 'hey'),
('yy', 'yy');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(20) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `product_ID` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `datee` date NOT NULL,
  `product_price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `customer_name`, `product_ID`, `product_name`, `datee`, `product_price`, `quantity`, `status`) VALUES
(1, 'shayban', 101, 'abc', '2020-03-03', 5400, 2, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_ID` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `collections` text NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `product_pattern` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `product_stiched` varchar(50) NOT NULL,
  `product_image` blob NOT NULL,
  `category_ID` int(20) NOT NULL,
  `Brand_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_ID`, `product_name`, `collections`, `product_category`, `company_name`, `brand`, `price`, `description`, `product_pattern`, `quantity`, `product_color`, `size`, `product_stiched`, `product_image`, `category_ID`, `Brand_ID`) VALUES
(51, 'Alnayab', 'Designer Wear', 'Lehngas', 'amazon ', 'zara', '1000', 'good prject', 'full embroidery', '2', 'Pink', 'XL', 'Semi Stiched', 0x31332e6a7067, 0, 0),
(52, 'SS', 'Designer Wear', 'Gowns', 'JDHJ', 'SDJKA', '1225', 'HJHADJKFSA', 'NJDNJ', '4', 'Red', 'XL', 'Full Stiched', 0x417262617a2e706e67, 0, 0),
(53, 'ndj', 'Casual Wear', 'Dress Material', 'fmk', 'fjs', '12345', 'jfkkk', 'jfd', '12', 'Red', 'XL', 'Full Stiched', 0x417262617a2e706e67, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reportttracking`
--

CREATE TABLE `reportttracking` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(40) NOT NULL,
  `Remark` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `PostingTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `RemarkBy` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(20) NOT NULL,
  `Email_ID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `Email_ID`, `password`, `confirm_password`) VALUES
('fareeha.shakeel', 'fareehashakeel00@gma', 'faree', 'faree'),
('kausain123', 'kausainshaikh1999@gm', 'kausain123', 'kausain123'),
('kausain123', 'kausainshaikh1999@gm', 'kausain123', 'kausain'),
('kausain123', 'kausainshaikh1999@gm', 'kausain123', 'kausain123'),
('shakeelchoglay', 'shakeelchoglay@yahoo', 'shakeel123', 'shake'),
('shakeelchoglay', 'shakeelchoglay@yahoo', 'shakeel123', 'shakeel123'),
('shakeelchoglay', 'shakeelchoglay@yahoo', 'shakeel123', 'shakeel123'),
('shakeelchoglay', 'shakeelchoglay@yahoo', 'shakeel123', 'shakeel123'),
('', '', '', ''),
('seema.shakeel', 'seemachoglay@gmail.c', 'seema2005', 'seema2005'),
('muneeb.shakeel', 'muneebsac@gmail.com', 'muneeb', 'muneeb'),
('Admin', 'admin@example.com', 'Admin', 'Admin'),
('fareee', 'faree@gmail.com', '123456', '123456'),
('fareee', 'faree@gmail.com', '123456', '123456'),
('fareee', 'faree@gmail.com', '123456', '123456'),
('fareee', 'faree@gmail.com', '123456', '123456'),
('shakeelch', 'shak@gmail.com', '980', '980'),
('myra12', 'myra123@gmail.com', 'myra', 'myra'),
('shamsiya.khan', 'shamsi123@gmail.com', 'shamsi123', 'shamsi123'),
('shakeel.123', 'shakeelchoglay@yahoo', 'shakeel123', 'shakeel123'),
('shamsiya', 'shamsi123@gmail.com', 'shamsi', 'shamsi'),
('fareeha.choglay', 'fareehashakeel100@gm', 'fareeha123', 'fareeha123'),
('fareeha.shakeel', 'fareehashakeel00@gma', 'fareeha', 'fareeha'),
('fareeha.shakeel', 'fareehashakeel00@gma', 'fareeha', 'fareeha'),
('aaliya', 'chopdaraaliya1999@gm', '12345', '12345'),
('admin', 'chopdaraaliya1999@gm', '123', '123'),
('chopdar aaliya', 'chopdaraaliya1999@gm', '123', '123'),
('chopdar aaliya', 'chopdaraaliya1999@gm', '123', '123'),
('fareeha.shakeel', 'fareehashakeel00@gma', 'faree', 'faree'),
('kausain', 'kausu123@gmail.com', 'kausu', 'kausu'),
('imran', 'imran123@gmail.com', '123', '123'),
('aaliya', 'chopdarqamrunnisa123', '123', '123'),
('hi', 'hi@gmail.com', 'hi', 'hi'),
('hey', 'hey@gmail.com', 'hey', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `contact_no` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `contact_no`, `email`, `password`, `cpassword`, `token`, `status`) VALUES
(20, 'aaliya', '8237698194', 'chopdaraaliya1999@gmail.com', '$2y$10$tYatCHvPKpoePUGEZdJp6OwFFTf0XhqJ.la3k/2EN.H1Pgdws6KG2', '$2y$10$AeUI577vv1tKopIxMa2ux.fdJgqJe7a4BXClkbb4v5a9ZlH6qsnT.', '5f999c1b2eb0ec03b369d8cee57346', 'active'),
(21, 'kausain', '7843012342', 'kausainshaikh1999@gmail.com', '$2y$10$hcC7uF.CB15YC4FjgOagneqQ0x5jZrrL25JxwddcMjoVT8bzBbfO6', '$2y$10$zN7ggevOqMIuDm3fyPpEFuegiXBxb8dUqNTlvuk0xMwPHQtiyMrBK', '2b6d1d40399b4f32b4ecb14a0e358c', 'active'),
(24, 'hh', '1234567890', 'hussainsp15@gmail.com', '$2y$10$sXeDNHEs5vj05ag9AcqeLeeByKplFlnpDdnFXet3vyBCvFQV1O4L6', '$2y$10$I5KNPVHa4WyYfEjiTohJJO9a1U7NrVfnYo8VOVlOEyp/3v.AIL08C', '3b169c680e08f80495eefbfabafa9e', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`id`, `username`, `contact_no`, `address`, `order_no`, `created`) VALUES
(11, 'hh', '1234567890', 'jjh', '937277033', '2021-10-08 13:00:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Brand_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Item_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `customer_ID` (`customer_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_ID`),
  ADD KEY `category_ID` (`category_ID`),
  ADD KEY `Brand_ID` (`Brand_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Brand_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Item_Id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
