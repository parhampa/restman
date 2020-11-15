-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 01:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `addone`
--

CREATE TABLE `addone` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT 0,
  `more_info` text COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `pass` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`username`, `pass`, `name`, `family`, `tel`, `email`, `active`) VALUES
('admin', '44332211', 'admin', 'admin', '9155554433', 'email@web.com', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL DEFAULT 0,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `keywords` text COLLATE utf8_persian_ci DEFAULT NULL,
  `describ` text COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `fid`, `name`, `keywords`, `describ`) VALUES
(1, 0, 'traditional', 'kajsdkj', 'sdkasjdhsss'),
(2, 1, 'birjandi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `pass` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `mob` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `hbd_year` int(11) NOT NULL,
  `hbd_month` int(11) NOT NULL,
  `hbd_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `pass`, `name`, `family`, `email`, `tel`, `mob`, `address`, `postal_code`, `hbd_year`, `hbd_month`, `hbd_day`) VALUES
('ali', '1234', 'ali', 'hasani', 'ali@gmail.com', '123456789', '1234568789', 'sadczxczxc', 1235468, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `more_info` text COLLATE utf8_persian_ci DEFAULT NULL,
  `pic1` text COLLATE utf8_persian_ci DEFAULT NULL,
  `pic2` text COLLATE utf8_persian_ci DEFAULT NULL,
  `pic3` text COLLATE utf8_persian_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_persian_ci DEFAULT NULL,
  `size1name` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `size1price` int(11) DEFAULT 0,
  `size2name` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `size2price` int(11) DEFAULT 0,
  `size3name` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `size3price` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `rest_id`, `name`, `more_info`, `pic1`, `pic2`, `pic3`, `keywords`, `size1name`, `size1price`, `size2name`, `size2price`, `size3name`, `size3price`) VALUES
(1, 1, 'pitza', 'adaskk', '../uploads/37b8a135e3dc2c7a0f3767d696112eb5WhatsApp Image 2020-10-19 at 21.50.07.jpeg', '../uploads/37b8a135e3dc2c7a0f3767d696112eb5WhatsApp Image 2020-10-19 at 21.51.09.jpeg', '../uploads/37b8a135e3dc2c7a0f3767d696112eb5WhatsApp Image 2020-10-19 at 22.00.18.jpeg', 'asdasdasd', '21313', 2312, '213213', 2312, '123123', 213213);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_name`
--

CREATE TABLE `restaurant_name` (
  `id` int(11) NOT NULL,
  `name` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `tel1` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `tel2` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `mob1` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `mob2` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `logo` text COLLATE utf8_persian_ci DEFAULT NULL,
  `manager` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `delivery_price` decimal(10,0) NOT NULL DEFAULT 0,
  `instagarm` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `facebook` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `about` text COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `restaurant_name`
--

INSERT INTO `restaurant_name` (`id`, `name`, `address`, `tel1`, `tel2`, `mob1`, `mob2`, `email`, `logo`, `manager`, `delivery_price`, `instagarm`, `facebook`, `about`) VALUES
(1, 'asdk', 'hjasdjahs', '2515', '35135', '3515', '35135', '35135', NULL, '351351', '351222', '', '5315', '351351');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addone`
--
ALTER TABLE `addone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_name`
--
ALTER TABLE `restaurant_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addone`
--
ALTER TABLE `addone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant_name`
--
ALTER TABLE `restaurant_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
