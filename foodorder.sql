-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 05:46 PM
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
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('Artt', 'Arthur', 'Art@gmail.com', '0771264735', 'LVL 3, Bilik Dekan, KUPTM', '12345'),
('Sai', 'Saiful', 'Sai@gmail.com', '07758473562', 'LVL 3, Bilik Dekan, KUPTM', '12345'),
('Tesla', 'Tesla Spin', 'tesla@gmail.com', '0993647563', 'LVL 3, Bilik Dekan, KUPTM', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(58, 'Nasi Ayam Penyet', 12, 'Enak di Makan', 6, 'images/AyamPenyet.jpg', 'ENABLE'),
(59, 'Nasi Goreng Kampung', 6, 'Kampung Style', 6, 'images/nasi-goreng-kampung.jpg', 'ENABLE'),
(60, 'Chocolate Cake', 10, 'Chocolate', 6, 'images/Chocolate_Hazelnut_Truffle.jpg', 'ENABLE'),
(61, 'Nasi Goreng USA', 6, 'Import USA ', 6, 'images/usa.jpg', 'ENABLE'),
(62, 'Roti Canai', 1, 'Order now!!!', 6, 'images/Roti-canai.jpg', 'ENABLE'),
(63, 'Jus Tembikai', 5, 'Menyegarkan', 1, 'images/tembikai1.jpg', 'ENABLE'),
(65, 'Italian Coffee', 8, 'Italian Cofee', 1, 'images/coffee.jpg', 'ENABLE'),
(66, 'Tea', 2, 'The simple elixir of tea is of our natural world.', 1, 'images/tea.jpg', 'ENABLE'),
(68, 'Paneer', 85, 'it', 6, 'images/paneer pakora.jpg', 'DISABLE'),
(69, 'Teh Tarik', 2, 'Teh Tarik', 1, 'images/Teh-Tarik.jpg', 'ENABLE'),
(70, 'Ais Lemon Tea', 2, 'The simple elixir of tea is of our natural world.', 1, 'images/ais-lemon-tea.jpg', 'ENABLE'),
(71, 'Samosa', 6, 'Cocktail Crispy Samosa..', 6, 'images/samosa.jpg', 'ENABLE'),
(72, 'Paneer Pakora', 6, 'it gives whole new dimension even to the most boring or dull vegetable', 6, 'images/paneer pakora.jpg', 'ENABLE'),
(73, 'Puff', 3, 'Vegetable Puff, a snack with crisp-n-flaky outer layer and mixed vegetables stuffing', 6, 'images/puff.jpg', 'ENABLE'),
(74, 'Pizza', 15, 'Good and Tasty ', 7, 'images/Pizza.jpg', 'ENABLE'),
(75, 'French Fries', 6, 'Pure Veg and Tasty.', 7, 'frenchfries.jpg', 'DISABLE'),
(76, 'Pakora', 35, 'Pure Vegetable and Tasty.', 6, 'images/Pakora.jpg', 'DISABLE'),
(77, 'Blackpepper Chicken Chop', 12, 'Westen Food', 7, 'images/blackpepper-chicken-chop.jpg', 'ENABLE'),
(78, 'French Fries', 6, 'Pure Veg and Tasty.', 7, 'images/frenchfries.jpg', 'ENABLE'),
(79, 'Pakora', 6, 'TASTY', 6, 'images/Pakora.jpg', 'ENABLE'),
(80, 'Burger Daging Biasa', 3, 'Burger', 7, 'images/burger.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('Artt', 'Arthur', 'Art@gmail.com', '0771264735', 'LVL 3, Bilik Dekan, KUPTM', '12345'),
('Sai', 'Saiful', 'Sai@gmail.com', '07758473562', 'LVL 3, Bilik Dekan, KUPTM', '12345'),
('tesla', 'Tesla Spin', 'tesla@gmail.com', '0993647563', 'LVL 3, Bilik Dekan, KUPTM', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(94, 60, 'Chocolate Cake', 10, 1, '2021-03-11', 'Artt', 6),
(95, 60, 'Chocolate Cake', 10, 1, '2021-03-11', 'Artt', 6),
(96, 59, 'Nasi Goreng Kampung', 6, 1, '2021-03-11', 'Sai', 6),
(97, 80, 'Burger Daging Biasa', 3, 1, '2021-03-11', 'Sai', 7);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'KUPTM Cafe 2', 'cafe2@restaurant.com', '7998562145', 'KUPTM', 'tesla'),
(6, 'KUPTM Cafe', 'KuptmCafe@gmail.com', '9443369040', 'Near Shemelin Star', 'Artt'),
(7, 'Sai Burger ', 'SaiBurger@gmail.com', '0163527465', 'MyTown', 'Sai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
