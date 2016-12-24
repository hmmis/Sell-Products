-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 09:25 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `p_code` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `p_code`, `color`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'D101', 'Green', 190.50, 3, '2016-12-24 08:10:55', '2016-12-24 08:10:55'),
(2, 'D102', 'Blue', 999.00, 2, '2016-12-24 08:12:34', '2016-12-24 08:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sell`
--

CREATE TABLE `tbl_sell` (
  `id` int(11) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `memo_no` varchar(100) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `total_collection` double(10,2) NOT NULL,
  `due` double(10,2) NOT NULL,
  `selling_date` varchar(30) NOT NULL,
  `delivary_date` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sell`
--

INSERT INTO `tbl_sell` (`id`, `client_name`, `mobile`, `email`, `address`, `memo_no`, `total_price`, `total_collection`, `due`, `selling_date`, `delivary_date`, `created_at`, `updated_at`) VALUES
(1, 'Shovon', '01675555555', 'mislam@g.co', 'Dhaka', 'memo585e2fbbdee699.20171012', 2600.00, 2500.00, 100.00, '2016-12-30', '2016-12-31', '2016-12-24 08:20:11', '2016-12-24 08:20:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `p_code` (`p_code`);

--
-- Indexes for table `tbl_sell`
--
ALTER TABLE `tbl_sell`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `memo_no` (`memo_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sell`
--
ALTER TABLE `tbl_sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
