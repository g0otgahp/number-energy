-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 01:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diamondnumber`
--

-- --------------------------------------------------------

--
-- Table structure for table `dmn_customer_type`
--

CREATE TABLE `dmn_customer_type` (
  `customer_type_id` int(11) NOT NULL,
  `customer_type_name` varchar(100) NOT NULL,
  `customer_type_status` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_customer_type`
--

INSERT INTO `dmn_customer_type` (`customer_type_id`, `customer_type_name`, `customer_type_status`) VALUES
(2, 'ซุปเปอร์ไซย่า', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmn_customer_type`
--
ALTER TABLE `dmn_customer_type`
  ADD PRIMARY KEY (`customer_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmn_customer_type`
--
ALTER TABLE `dmn_customer_type`
  MODIFY `customer_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
