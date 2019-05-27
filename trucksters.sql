-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 06:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trucksters`
--
CREATE DATABASE trucksters;
-- --------------------------------------------------------

--
-- Table structure for table `trucksterscategories`
--

CREATE TABLE `trucksterscategories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trucksterscategories`
--

INSERT INTO `trucksterscategories` (`id`, `name`) VALUES
(1, 'poultry'),
(2, 'cattle'),
(3, 'fruits'),
(4, 'vegetables'),
(5, 'cereals'),
(6, 'others'),
(7, 'Farming tools');

-- --------------------------------------------------------

--
-- Table structure for table `truckstersitems`
--

CREATE TABLE `truckstersitems` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `quantity` text NOT NULL,
  `pic` blob NOT NULL,
  `uploaderid` int(11) NOT NULL,
  `location` text NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truckstersitems`
--

INSERT INTO `truckstersitems` (`id`, `name`, `price`, `quantity`, `pic`, `uploaderid`, `location`, `categoryid`) VALUES
(11, 'LAYERS', '800', '23413', 0x75706c6f61646564696e666f2f313534303634373738316167726963756c747572652d616e696d616c2d617669616e2d3130313833302e6a7067, 2, 'machakos', 1),
(13, 'MATUNDA', '12121', '345', 0x75706c6f61646564696e666f2f313534303637353831356162756e64616e63652d6167726963756c747572652d62616e616e61732d3236343533372831292e6a7067, 2, 'juja', 4),
(14, 'BULL', '478523784527', '56546', 0x75706c6f61646564696e666f2f31353430363735383432636f772e6a7067, 2, 'juja', 2),
(15, 'MECH DOG', '368534896', '1', 0x75706c6f61646564696e666f2f31353430363735383738726f626f646f672e6a7067, 2, 'juja', 6),
(16, 'MAIZE', '34234', '4546466', 0x75706c6f61646564696e666f2f313534303637353931323530305f465f3130313535313730325f6c4f786b386e39626e4d61754570326b4e723032494c4e393379796c506a4f302e6a7067, 2, 'machakos', 5);

-- --------------------------------------------------------

--
-- Table structure for table `truckstersusers`
--

CREATE TABLE `truckstersusers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `hash` text NOT NULL,
  `phonenumber` text NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `location` text NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truckstersusers`
--

INSERT INTO `truckstersusers` (`id`, `name`, `email`, `password`, `hash`, `phonenumber`, `activated`, `location`, `admin`) VALUES
(1, 'steve', 'almond@gmail.com', '$2y$10$2.1s.Ek/Tg2dnSYkZeqUFeAg9jKoW0/lv7OnIQfd3ytfMopHy6wUy', '$2y$10$2.1s.Ek/Tg2dnSYkZeqUFeAg9jKoW0/lv7OnIQfd3ytfMopHy6wUy', '0702653268', 1, 'juja', '1'),
(2, 'michelle', 'mwendemich@gmail.com', '$2y$10$3fQEQ9nTOD9Oq3VvRpM8f.6ePa2pPVQ3L2XdgqfEGe04.vqXu/afa', '$2y$10$3fQEQ9nTOD9Oq3VvRpM8f.6ePa2pPVQ3L2XdgqfEGe04.vqXu/afa', '0704630092', 1, 'lukenya', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trucksterscategories`
--
ALTER TABLE `trucksterscategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truckstersitems`
--
ALTER TABLE `truckstersitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truckstersusers`
--
ALTER TABLE `truckstersusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trucksterscategories`
--
ALTER TABLE `trucksterscategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `truckstersitems`
--
ALTER TABLE `truckstersitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `truckstersusers`
--
ALTER TABLE `truckstersusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
