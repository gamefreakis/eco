-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 12:49 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(3, 'exapng', 'exapng@gmail.com', '12345'),
(4, 'flamurcaka', 'fcaka@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `name`) VALUES
(1, 'Cotton'),
(2, 'Leather'),
(3, 'Silk'),
(4, 'Satin'),
(5, 'Denim');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `userid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `categoryid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `manufacturer` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryid`, `name`, `manufacturer`, `price`, `picture`) VALUES
(1000, 1, 'Telio Azurrr', 'Italian Textile', 75, '1.jpg'),
(1001, 2, 'Kaufman', 'MAKPRIMAT', 38, '2.jpg'),
(1002, 3, 'Chantily Lace', 'MAKPRIMATtttt', 20, '3.jpg'),
(1003, 4, 'Buffalo Check', 'Sezam Teks', 50, '4.jpg'),
(1004, 5, 'Telio Hatchi', 'Cotex Textileeee', 68, '5.jpg'),
(1005, 1, 'Jamaica', 'Apex Mills', 50, '6.jpg'),
(1006, 2, 'Juta', 'Apex Mills', 40, '7.jpg'),
(1007, 3, 'Lissabon', 'Baum Textile', 35, '8.jpg'),
(1008, 4, 'Malaga', 'Italian Textile', 35, '9.jpg'),
(1009, 5, 'Vardar', 'Buta Textile', 95, '10.jpg'),
(1012, 1, 'Art', 'Baum Textile', 15, '11.jpg'),
(1014, 2, 'Capri', 'Baum Textile', 30, '12.jpg'),
(1017, 3, 'Honey', 'MAKPRIMAT', 65, '13.jpg'),
(1018, 4, 'Kadife', 'Italian Textile', 105, '14.jpg'),
(1019, 5, 'Madison', 'Cotex', 25, '15.jpg'),
(1020, 1, 'Passat', 'Baum Textile', 10, '16.jpg'),
(1021, 2, 'Petra', 'Cotex', 12, '17.jpg'),
(1022, 3, 'Rumba', 'MAKPRIMAT', 42, '18.jpg'),
(1023, 4, 'Melody', 'MAKPRIMAT', 27, '19.jpg'),
(1024, 5, 'Viva', 'MAKPRIMAT', 55, '20.jpg'),
(1025, 1, 'Valore', 'Italian Textile', 39, '21.jpg'),
(1026, 2, 'Ivory', 'Baum Textile', 52, '22.jpg'),
(1027, 3, 'Flamingo', 'Italian Textile', 56, '23.jpg'),
(1028, 4, 'Joker', 'Cotex', 33, '24.jpg'),
(1029, 5, 'Oslo', 'MAKPRIMAT', 54, '25.jpg'),
(1030, 1, 'Granada', 'Cotex', 12, '26.jpg'),
(1031, 2, 'Real', 'Baum Textile', 63, '27.jpg'),
(1033, 3, 'Havana', 'Italian Textile', 98, '28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tmporders`
--

CREATE TABLE `tmporders` (
  `orderid` int(11) NOT NULL,
  `sessionid` varchar(32) NOT NULL,
  `id` int(10) NOT NULL,
  `price` double NOT NULL,
  `orderdate` date NOT NULL,
  `ordertime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level_id` int(50) DEFAULT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `lastname`, `mobile`, `address`, `city`, `country`, `email`, `password`, `level_id`, `status`) VALUES
('exahzr', 'Erza', 'Haziri', '389705114520', 'Skopje', 'Skopje', 'Macedonia', 'exahzr@gmail.com', '00000', 0, 0),
('flag', 'Flamur', 'Caka', '34456231452', 'Skopje', 'Skopje', 'Macedonia', 'fc24709@seeu.edu.mk', '00000', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmporders`
--
ALTER TABLE `tmporders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1061;

--
-- AUTO_INCREMENT for table `tmporders`
--
ALTER TABLE `tmporders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
