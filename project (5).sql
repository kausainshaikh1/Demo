-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 06:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
('aaliya', '123');

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
  `product_description` varchar(50) NOT NULL,
  `product_price` text NOT NULL,
  `quantity` int(50) NOT NULL,
  `product_image` text NOT NULL,
  `category_ID` int(20) NOT NULL,
  `Brand_ID` int(20) NOT NULL,
  `brand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_ID`, `product_name`, `product_description`, `product_price`, `quantity`, `product_image`, `category_ID`, `Brand_ID`, `brand`) VALUES
(1, 'Fepic Designer Wear', '', 'Rs.2150', 0, '5.jpg', 0, 0, ''),
(2, 'GULKAND Collection [D.No.87]', '', 'Rs.1400', 0, '17.jpg', 0, 0, ''),
(3, 'TFH Designer Saree [D.No:88-5107]', '', 'Rs.3500', 0, '12.jpg', 0, 0, ''),
(4, 'Nitya Collection', '', 'Rs.1850', 0, '11.jpg', 0, 0, ''),
(5, 'FIONA Collection', '', 'Rs.2000', 0, '22.jpg', 0, 0, ''),
(6, 'Mohini Glamour Designer Gown', '', 'Rs.3200', 0, '15.jpg', 0, 0, ''),
(7, 'eba Lifestyle [D.No:1158]', '', 'Rs.2850', 0, '9.jpg', 0, 0, ''),
(8, 'Ladies Flavour Collection D.No 1083', '', 'Rs.850', 0, '19.jpg', 0, 0, ''),
(9, 'BELA Fashion [D.No:912]', '', 'Rs.1600', 0, '23.jpg', 0, 0, ''),
(10, 'Aashirwad Collection', '', 'Rs.1900', 0, '14.jpg', 0, 0, ''),
(11, 'A K Khan ', '', 'aaliya', 0, '8.jpg', 0, 0, ''),
(12, 'saaries', '', 'eba colection', 0, '8.jpg', 0, 0, ''),
(13, 'saaries', '', 'eba colection', 0, '8.jpg', 0, 0, ''),
(14, 'saaries', '', 'eba colection', 0, '8.jpg', 0, 0, ''),
(15, 'saaries', '', 'eba colection', 0, '8.jpg', 0, 0, ''),
(16, 'abc', '', 'ashok', 0, '10.jpg', 0, 0, ''),
(39, 'eba fassion collection[Sarees]', 'eba fasion collection', '1500', 2, '', 4, 2, 'eba');

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
('aaliya', 'chopdarqamrunnisa123', '123', '123');

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_ID`);

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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
