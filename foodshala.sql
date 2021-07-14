-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 09:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `food` int(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `name`, `email`, `phone`, `food`, `password`, `cpassword`, `role`) VALUES
(1, 'Baisnavee', 'baisnavee.panda08@gmail.com', '8895635744', 1, '$2y$10$Nwy7BMrG3.uA/98bTgQTAezKftv6U6SXYje5/bdHGa.', '', 1),
(2, 'Bidisha', 'bidisha@gmail.com', '7868443356', 0, '$2y$10$8SGDGQ.uWmPStlM5wcG2neevNEXhrFxR3DFLmT2lGK2', '', 1),
(3, 'Sona', 'sona@gmail.com', '8895735655', 0, '$2y$10$ne1.tmz8AKRDMrV8.v/moelJz1.7U3AZgi.43zc7cz3wC.zDnXiha', '', 1),
(4, 'Test', 'test@gmail.com', '8967548906', 1, '$2y$10$../ChmKEBDwCZYH0F.9k3urGFKzMBbAyE6G2MqI2V2DZZnEPGMSwC', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `resturant_id` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `availability` int(1) NOT NULL DEFAULT 1,
  `ordered` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `price`, `resturant_id`, `status`, `availability`, `ordered`) VALUES
(1, 'Egg noodles', 99, '1', 1, 1, 0),
(2, 'American Choupsey', 199, '2', 0, 0, 0),
(3, 'Chilly Chicken', 149, '1', 1, 1, 0),
(4, 'Fried Rice', 99, '1', 0, 1, 0),
(5, 'Rice', 50, '1', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `resturant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `item_name`, `price`, `resturant_id`) VALUES
(1, 'Sona', 'Fried Rice', 99, 1),
(2, 'Sona', 'Chilly Chicken', 149, 1),
(3, 'Test', 'Egg noodles', 99, 1),
(4, 'Sona', 'Egg noodles', 99, 1),
(5, 'Sona', 'American Choupsey', 199, 2),
(6, 'Sona', 'Egg noodles', 99, 1),
(7, 'Sona', 'American Choupsey', 199, 2),
(8, 'Test', 'Egg noodles', 99, 1),
(9, 'Test', 'Egg noodles', 99, 1),
(10, 'Test', 'American Choupsey', 199, 2),
(11, 'Test', 'Egg noodles', 99, 1),
(12, 'Sona', 'Egg noodles', 99, 1),
(13, 'Sona', 'Egg noodles', 99, 1),
(14, 'Sona', 'Egg noodles', 99, 1),
(15, 'Sona', 'Egg noodles', 99, 1),
(16, 'Sona', 'Egg noodles', 99, 1),
(17, 'Sona', 'Egg noodles', 99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resturant_reg`
--

CREATE TABLE `resturant_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resturant_reg`
--

INSERT INTO `resturant_reg` (`id`, `name`, `address`, `email`, `phone`, `password`, `cpassword`, `role`) VALUES
(1, 'Eatarie', 'Saheed Nagar', 'eatarie@gmail.com', '8908544236', '$2y$10$7Ey/axEXLztlKz4z4n890OWCeSr3ROxjWgj7bFzNGy62YwPsgONJa', '', 0),
(2, 'Silver Streak', 'Nayapalli', 'silverstreak@gmail.com', '7868443356', '$2y$10$B2IeCOLrXMFZ8eQSBon3U.EadRp/YzerKUSikk06hSdb3dhNZzI/y', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturant_reg`
--
ALTER TABLE `resturant_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `resturant_reg`
--
ALTER TABLE `resturant_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
