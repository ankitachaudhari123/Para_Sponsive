-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 04:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `para_sponsive`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_id` double NOT NULL,
  `user_id` double NOT NULL,
  `p_price` double NOT NULL,
  `p_qty` int(255) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_id`, `user_id`, `p_price`, `p_qty`, `total`) VALUES
(76, 1, 3, 500, 3, 1500),
(77, 1, 3, 500, 3, 1952),
(78, 1, 1, 450, 1, 450);

-- --------------------------------------------------------

--
-- Table structure for table `orderd_product`
--

CREATE TABLE `orderd_product` (
  `id` int(11) NOT NULL,
  `user_id` double NOT NULL,
  `orderd_id` varchar(1000) NOT NULL,
  `p_id` varchar(1000) NOT NULL,
  `price` double NOT NULL,
  `qty` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderd_product`
--

INSERT INTO `orderd_product` (`id`, `user_id`, `orderd_id`, `p_id`, `price`, `qty`, `total`) VALUES
(25, 9, 'DMS1355849979', '1', 450, 3, 1350),
(26, 9, 'DMS1355849979', '2', 560, 2, 1120),
(27, 9, 'DMS313953727', '3', 899, 4, 3596),
(28, 9, 'DMS313953727', '4', 1499, 5, 7495),
(29, 19, 'DMS1115633181', '1', 450, 1, 450),
(30, 19, 'DMS1115633181', '4', 1499, 1, 1499),
(31, 19, 'DMS2141397699', '2', 560, 1, 560),
(32, 19, 'DMS2141397699', '4', 1499, 7, 10493),
(33, 19, 'DMS2141397699', '3', 899, 4, 3596),
(34, 19, 'DMS595691869', '2', 560, 1, 560),
(35, 19, 'DMS595691869', '4', 1499, 7, 10493),
(36, 19, 'DMS595691869', '3', 899, 4, 3596),
(37, 19, 'DMS1545615471', '2', 560, 1, 560),
(38, 19, 'DMS1545615471', '4', 1499, 7, 10493),
(39, 19, 'DMS1545615471', '3', 899, 4, 3596),
(40, 19, 'DMS566876287', '2', 560, 1, 560),
(41, 19, 'DMS566876287', '4', 1499, 7, 10493),
(42, 19, 'DMS566876287', '3', 899, 4, 3596),
(43, 19, 'DMS1376750050', '4', 1499, 8, 11992),
(44, 19, 'DMS1376750050', '3', 899, 4, 3596),
(45, 19, 'DMS1376750050', '4', 1499, 8, 11992),
(46, 19, 'DMS1376750050', '3', 899, 4, 3596),
(47, 9, 'DMS302866924', '1', 450, 1, 450),
(48, 9, 'DMS302866924', '6', 500, 1, 500),
(49, 9, 'DMS302866924', '2', 560, 2, 1120),
(50, 9, 'DMS302866924', '5', 680, 1, 680),
(51, 9, 'DMS302866924', '3', 899, 1, 899),
(52, 9, 'DMS302866924', '4', 1499, 1, 1499),
(53, 9, 'DMS965086629', '1', 450, 1, 450),
(54, 9, 'DMS965086629', '1', 450, 1, 450),
(55, 9, 'DMS926305130', '1', 450, 1, 450),
(56, 9, 'DMS865273680', '1', 450, 1, 450),
(57, 9, 'DMS957908362', '1', 450, 1, 450),
(58, 9, 'DMS1503704179', '1', 450, 1, 450),
(59, 9, 'DMS1503704179', '1', 450, 1, 450),
(60, 9, 'DMS1503704179', '1', 450, 1, 450),
(61, 9, 'DMS1503704179', '1', 450, 1, 450),
(62, 9, 'DMS1503704179', '1', 450, 1, 450),
(63, 9, 'DMS1503704179', '1', 450, 1, 450),
(64, 9, 'DMS1503704179', '1', 450, 1, 450),
(65, 9, 'DMS1902572565', '1', 450, 1, 450),
(66, 9, 'DMS279374738', '1', 450, 1, 450),
(67, 19, 'DMS744961457', '1', 450, 2, 900),
(68, 9, 'DMS1740482136', '1', 450, 1, 450),
(69, 9, 'DMS1740482136', '5', 680, 1, 680),
(70, 9, 'DMS1309516920', '1', 450, 1, 450),
(71, 9, 'DMS1309516920', '5', 680, 1, 680),
(72, 9, 'DMS1525622772', '1', 450, 1, 450),
(73, 9, 'DMS1525622772', '6', 500, 1, 500),
(74, 9, 'DMS568560604', '1', 450, 1, 450),
(75, 9, 'DMS416390607', '1', 450, 2, 900),
(76, 9, 'DMS1802443457', '1', 450, 1, 450);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `user_id` double NOT NULL,
  `order_id` varchar(1000) NOT NULL,
  `order_date` date NOT NULL,
  `shopping_id` double NOT NULL,
  `total_amount` double NOT NULL,
  `shipping_amount` double NOT NULL,
  `grand_total` double NOT NULL,
  `payment_status` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `user_id`, `order_id`, `order_date`, `shopping_id`, `total_amount`, `shipping_amount`, `grand_total`, `payment_status`, `status`) VALUES
(16, 19, 'DMS1545615471 ', '2023-01-17', 34, 14649, 80, 14729, 1, 0),
(17, 19, 'DMS566876287 ', '2023-01-17', 35, 14649, 80, 14729, 1, 2),
(18, 19, 'DMS1376750050 ', '2023-01-18', 36, 15588, 80, 15668, 1, 1),
(19, 19, 'DMS1376750050 ', '2023-01-18', 37, 15588, 80, 15668, 1, 3),
(20, 9, 'DMS302866924 ', '2023-01-18', 38, 5148, 80, 5228, 1, 0),
(21, 9, 'DMS965086629 ', '2023-01-18', 39, 450, 80, 530, 0, 0),
(22, 9, 'DMS965086629 ', '2023-01-18', 40, 450, 80, 530, 0, 0),
(23, 9, 'DMS926305130 ', '2023-01-18', 41, 450, 80, 530, 0, 0),
(24, 9, 'DMS865273680 ', '2023-01-18', 42, 450, 80, 530, 0, 0),
(25, 9, 'DMS957908362 ', '2023-01-18', 43, 450, 80, 530, 0, 0),
(26, 9, 'DMS1503704179 ', '2023-01-19', 21, 450, 80, 530, 0, 0),
(27, 9, 'DMS1503704179 ', '2023-01-19', 21, 450, 80, 530, 0, 0),
(28, 9, 'DMS1503704179 ', '2023-01-19', 21, 450, 80, 530, 0, 0),
(29, 9, 'DMS1503704179 ', '2023-01-19', 21, 450, 80, 530, 0, 2),
(30, 9, 'DMS1503704179 ', '2023-01-19', 21, 450, 80, 530, 0, 0),
(31, 9, 'DMS1503704179 ', '2023-01-19', 44, 450, 80, 530, 0, 0),
(32, 9, 'DMS1503704179 ', '2023-01-19', 21, 450, 80, 530, 0, 0),
(33, 9, 'DMS1902572565 ', '2023-01-19', 21, 450, 80, 530, 0, 0),
(34, 9, 'DMS279374738 ', '2023-01-19', 21, 450, 80, 530, 0, 3),
(35, 19, 'DMS1058812732 ', '2023-01-20', 0, 0, 0, 0, 0, 1),
(36, 19, 'DMS744961457 ', '2023-01-20', 45, 900, 80, 980, 1, 0),
(37, 9, 'DMS1740482136 ', '2023-03-01', 21, 1130, 80, 1210, 0, 0),
(38, 9, 'DMS1309516920 ', '2023-03-01', 21, 1130, 80, 1210, 1, 0),
(39, 9, 'DMS1525622772 ', '2023-03-01', 21, 950, 80, 1030, 0, 0),
(40, 9, 'DMS568560604 ', '2023-08-06', 21, 450, 80, 530, 0, 0),
(41, 9, 'DMS416390607 ', '2023-10-24', 21, 900, 80, 980, 0, 0),
(42, 9, 'DMS1802443457 ', '2024-01-03', 21, 450, 80, 530, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` varchar(1000) NOT NULL,
  `order_date` datetime NOT NULL,
  `amount` double NOT NULL,
  `shiping_id` varchar(1000) NOT NULL,
  `payment_id` double NOT NULL,
  `status` enum('Pending','Confirm','Cancle','Deliverd') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(1000) NOT NULL,
  `p_img` varchar(1000) NOT NULL,
  `p_price` double NOT NULL,
  `p_discount` float NOT NULL,
  `p_mrp` double NOT NULL,
  `p_des` text NOT NULL,
  `p_qty` int(255) NOT NULL,
  `status` enum('Active','Deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_img`, `p_price`, `p_discount`, `p_mrp`, `p_des`, `p_qty`, `status`) VALUES
(1, 'Striped t-shirt', 'product-11.jpg', 450, 5, 500, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', 3, 'Active'),
(2, 'Black dress', 'product-12-2.jpg', 560, 5, 700, '', 5, 'Active'),
(3, 'Blue jeans', 'product-13-1.jpg', 899, 10, 999, '', 2, 'Active'),
(4, 'Black jacket', 'product-13-3.jpg', 1499, 10, 1899, '', 3, 'Active'),
(5, 'Best blue shirt', '54654654.jpg', 680, 10, 850, 'Description', 2, 'Active'),
(6, 'Yellow T-shirt', 'product-14-3.jpg', 500, 5, 550, '', 8, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `p_id` double NOT NULL,
  `user_id` double NOT NULL,
  `rating` int(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `p_id`, `user_id`, `rating`, `message`) VALUES
(9, 1, 9, 5, 'test'),
(10, 1, 9, 4, 'wewe'),
(11, 1, 9, 5, 'testing'),
(12, 1, 9, 3, 'tezrf'),
(13, 1, 9, 3, 'fbvcx'),
(14, 4, 19, 3, 'ghvghv'),
(15, 1, 19, 5, 'awr'),
(16, 1, 9, 5, 'werfg'),
(17, 1, 0, 5, 'nice ');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id` int(11) NOT NULL,
  `user_id` double NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `mobile` varchar(1000) NOT NULL,
  `pincode` varchar(1000) NOT NULL,
  `flat_name_or_house_no` varchar(1000) NOT NULL,
  `area_or_street` varchar(1000) NOT NULL,
  `landmark` varchar(1000) NOT NULL,
  `town_or_city` varchar(1000) NOT NULL,
  `state` varchar(1000) NOT NULL,
  `countary` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`id`, `user_id`, `full_name`, `mobile`, `pincode`, `flat_name_or_house_no`, `area_or_street`, `landmark`, `town_or_city`, `state`, `countary`) VALUES
(21, 9, 'Ankita', '7878878', '421303', 'sjv', 'bhdb', 'hbhd', 'hbsd', 'hasbd', 'hbdhf'),
(38, 9, 'ankita', '1234567890', '421312', 'ankita', 'khupari', 'shop', 'kudus', 'maharashtra', 'india'),
(45, 0, 'Milind Vavare', '7066683038', '421303', 'Test', 'Test', 'Test', 'Palghar', 'Maharashtra', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Mobile_No` varchar(10000) NOT NULL,
  `Name` varchar(400) NOT NULL,
  `User_Profile_image` varchar(200) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `Email`, `Password`, `Mobile_No`, `Name`, `User_Profile_image`, `Status`) VALUES
(9, 'ankita@gmail.com', 'ankita123', '7264046052', 'Ankita Chaudhari', '', 0),
(19, 'milind123@gmail.com', 'Milind123@', '2147483647', 'Milind', '', 0),
(24, 'sarthakvavare123@gmail.com', 'Password', '8390146725', 'Sarthak vavare', '', 1),
(25, 'sarthakvavare123@gmail.com', 'Password', '8390146725', 'Sarthak vavare', '', 1),
(26, 'sarthakvavare123@gmail.com', 'Password', '8390146725', 'Sarthak vavare', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orderd_product`
--
ALTER TABLE `orderd_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `orderd_product`
--
ALTER TABLE `orderd_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
