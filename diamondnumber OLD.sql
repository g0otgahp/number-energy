-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2017 at 12:05 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- Table structure for table `dmn_account`
--

CREATE TABLE `dmn_account` (
  `account_id` int(11) NOT NULL,
  `account_date` date NOT NULL,
  `account_type` int(11) NOT NULL,
  `account_category` int(11) NOT NULL,
  `account_detail` text NOT NULL,
  `account_quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_account`
--

INSERT INTO `dmn_account` (`account_id`, `account_date`, `account_type`, `account_category`, `account_detail`, `account_quantity`) VALUES
(1, '0000-00-00', 1, 1, 'ขายเบอร์มือถือให้ลูกค้า', 5000),
(2, '2017-03-18', 1, 1, 'sadasfsadad', 2313),
(3, '2017-03-18', 2, 3, 'ขายเบอร์มือถือให้ลูกค้า', 5000),
(4, '2017-03-18', 2, 2, 'd'';saf;skdaDASFDA', 3000),
(5, '2013-05-11', 2, 3, 'sdfsdfsdfsdf', 400),
(6, '2017-05-11', 1, 1, 'sdfsdfsdfsdf', 400);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_account_category`
--

CREATE TABLE `dmn_account_category` (
  `account_category_id` int(11) NOT NULL,
  `account_category_type` int(11) NOT NULL,
  `account_category_code` varchar(10) NOT NULL,
  `account_category_list` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_account_category`
--

INSERT INTO `dmn_account_category` (`account_category_id`, `account_category_type`, `account_category_code`, `account_category_list`) VALUES
(1, 1, '001', 'รายได้หลักจากการขาย'),
(2, 2, '001', 'สาธารณูปโภค'),
(3, 2, '002', 'ค่าเช่าพื้นที่/เช่าห้อง');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_account_type`
--

CREATE TABLE `dmn_account_type` (
  `account_type_id` int(11) NOT NULL,
  `account_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_account_type`
--

INSERT INTO `dmn_account_type` (`account_type_id`, `account_type_name`) VALUES
(1, 'รายรับ'),
(2, 'รายจ่าย');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_actipromo`
--

CREATE TABLE `dmn_actipromo` (
  `actipromo_id` int(11) NOT NULL,
  `actipromo_type` int(11) NOT NULL,
  `actipromo_image` varchar(50) NOT NULL,
  `actipromo_name` varchar(300) NOT NULL,
  `actipromo_detail` text NOT NULL,
  `actipromo_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_actipromo`
--

INSERT INTO `dmn_actipromo` (`actipromo_id`, `actipromo_type`, `actipromo_image`, `actipromo_name`, `actipromo_detail`, `actipromo_date`) VALUES
(2, 2, 'dmn20170317181020.jpg', 'สฟหกยาฟหยนกายฟาหยาฟยหาปยฟาหยแาฟยหแา', 'sdkaposdoajdposajodjasdj', '2017-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_actipromo_type`
--

CREATE TABLE `dmn_actipromo_type` (
  `actipromo_type_id` int(11) NOT NULL,
  `actipromo_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_actipromo_type`
--

INSERT INTO `dmn_actipromo_type` (`actipromo_type_id`, `actipromo_type_name`) VALUES
(1, 'กิจกรรม'),
(2, 'โปรโมชั่น');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_agent`
--

CREATE TABLE `dmn_agent` (
  `agent_id` int(11) NOT NULL,
  `agent_code` varchar(10) NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `agent_tel` varchar(20) NOT NULL,
  `agent_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_agent`
--

INSERT INTO `dmn_agent` (`agent_id`, `agent_code`, `agent_name`, `agent_tel`, `agent_email`) VALUES
(1, '001', 'สมชาย', '', ''),
(4, '12', 'sdasda', 'dasda', 'sdasfsa');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_customer`
--

CREATE TABLE `dmn_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_tel` varchar(20) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_sex` int(11) NOT NULL,
  `customer_birthday` date NOT NULL,
  `customer_job` varchar(200) NOT NULL,
  `customer_relate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_customer`
--

INSERT INTO `dmn_customer` (`customer_id`, `customer_name`, `customer_tel`, `customer_email`, `customer_sex`, `customer_birthday`, `customer_job`, `customer_relate`) VALUES
(1, 'ชัยวัฒน์ ชยพาณิชย์สกุล', '0845081615', 'amoolras@gmail.com', 1, '1989-12-26', 'นักวิเคราะห์', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_customer_sex`
--

CREATE TABLE `dmn_customer_sex` (
  `customer_sex_id` int(11) NOT NULL,
  `customer_sex_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_customer_sex`
--

INSERT INTO `dmn_customer_sex` (`customer_sex_id`, `customer_sex_name`) VALUES
(1, 'ชาย'),
(2, 'หญิง');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_employees`
--

CREATE TABLE `dmn_employees` (
  `employees_id` int(11) NOT NULL,
  `employees_name` varchar(300) NOT NULL,
  `employees_tel` varchar(20) NOT NULL,
  `employees_secretcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_employees`
--

INSERT INTO `dmn_employees` (`employees_id`, `employees_name`, `employees_tel`, `employees_secretcode`) VALUES
(1, 'ชัยวัฒน์', '0856081615', '4dff58e4ce631fa98e850c91e903a0d4'),
(2, 'พนักงานสต๊อกกลาง', '0856081615', '595d84c413b3df61c84603be140b2830');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_level`
--

CREATE TABLE `dmn_level` (
  `dmn_level_id` int(11) NOT NULL,
  `dmn_level_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_level`
--

INSERT INTO `dmn_level` (`dmn_level_id`, `dmn_level_name`) VALUES
(1, 'ผู้ดูแลระบบ'),
(2, 'พนักงานขาย');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_mobile_network`
--

CREATE TABLE `dmn_mobile_network` (
  `mobile_network_id` int(11) NOT NULL,
  `mobile_network_code` varchar(100) NOT NULL,
  `mobile_network_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_mobile_network`
--

INSERT INTO `dmn_mobile_network` (`mobile_network_id`, `mobile_network_code`, `mobile_network_name`) VALUES
(1, '001', 'AIS'),
(2, '002', 'Dtac'),
(5, '003', 'TRUE');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_product`
--

CREATE TABLE `dmn_product` (
  `product_id` int(11) NOT NULL,
  `product_round` int(11) NOT NULL,
  `product_mobile_network` int(11) NOT NULL,
  `product_number` varchar(20) NOT NULL,
  `product_expired` date NOT NULL,
  `product_cost` float NOT NULL,
  `product_sale` float NOT NULL,
  `product_agent` int(11) NOT NULL,
  `product_date` date NOT NULL,
  `product_time` time NOT NULL,
  `product_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_product`
--

INSERT INTO `dmn_product` (`product_id`, `product_round`, `product_mobile_network`, `product_number`, `product_expired`, `product_cost`, `product_sale`, `product_agent`, `product_date`, `product_time`, `product_status`) VALUES
(1, 3, 5, '856081615', '0000-00-00', 900, 1, 0, '2017-04-17', '09:49:39', 0),
(2, 3, 5, '0856081615', '0000-00-00', 300, 900, 1, '2017-04-17', '09:54:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_relate`
--

CREATE TABLE `dmn_relate` (
  `relate_id` int(11) NOT NULL,
  `relate_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_relate`
--

INSERT INTO `dmn_relate` (`relate_id`, `relate_name`) VALUES
(1, 'ผู้มีปฏิสัมพันธ์ที่ดี'),
(2, 'ผู้ตอบรับ กิจกรรม/โปรโมชั่น/แนะนำสินค้า'),
(3, 'ลูกค้าทั่วไป'),
(4, 'ลูกค้าคนสำคัญ');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_round`
--

CREATE TABLE `dmn_round` (
  `round_id` int(11) NOT NULL,
  `round_round` int(11) NOT NULL,
  `round_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_round`
--

INSERT INTO `dmn_round` (`round_id`, `round_round`, `round_datetime`) VALUES
(1, 0, '0000-00-00 00:00:00'),
(2, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_user`
--

CREATE TABLE `dmn_user` (
  `dmn_user_id` int(11) NOT NULL,
  `dmn_user_username` varchar(100) NOT NULL,
  `dmn_user_password` varchar(150) NOT NULL,
  `dmn_user_level` int(11) NOT NULL,
  `dmn_user_secretcode` varchar(100) NOT NULL,
  `dmn_user_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_user`
--

INSERT INTO `dmn_user` (`dmn_user_id`, `dmn_user_username`, `dmn_user_password`, `dmn_user_level`, `dmn_user_secretcode`, `dmn_user_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'd0f8ba36753dadc3020dd3392f838e95', 1),
(2, 'amoolras@gmail.com', '97db1846570837fce6ff62a408f1c26a', 1, '4dff58e4ce631fa98e850c91e903a0d4', 1),
(3, 'info@esanstudio.com', 'asdasd', 2, '595d84c413b3df61c84603be140b2830', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmn_account`
--
ALTER TABLE `dmn_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `dmn_account_category`
--
ALTER TABLE `dmn_account_category`
  ADD PRIMARY KEY (`account_category_id`);

--
-- Indexes for table `dmn_account_type`
--
ALTER TABLE `dmn_account_type`
  ADD PRIMARY KEY (`account_type_id`);

--
-- Indexes for table `dmn_actipromo`
--
ALTER TABLE `dmn_actipromo`
  ADD PRIMARY KEY (`actipromo_id`);

--
-- Indexes for table `dmn_actipromo_type`
--
ALTER TABLE `dmn_actipromo_type`
  ADD PRIMARY KEY (`actipromo_type_id`);

--
-- Indexes for table `dmn_agent`
--
ALTER TABLE `dmn_agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `dmn_customer`
--
ALTER TABLE `dmn_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dmn_customer_sex`
--
ALTER TABLE `dmn_customer_sex`
  ADD PRIMARY KEY (`customer_sex_id`);

--
-- Indexes for table `dmn_employees`
--
ALTER TABLE `dmn_employees`
  ADD PRIMARY KEY (`employees_id`);

--
-- Indexes for table `dmn_level`
--
ALTER TABLE `dmn_level`
  ADD PRIMARY KEY (`dmn_level_id`);

--
-- Indexes for table `dmn_mobile_network`
--
ALTER TABLE `dmn_mobile_network`
  ADD PRIMARY KEY (`mobile_network_id`);

--
-- Indexes for table `dmn_product`
--
ALTER TABLE `dmn_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `dmn_relate`
--
ALTER TABLE `dmn_relate`
  ADD PRIMARY KEY (`relate_id`);

--
-- Indexes for table `dmn_round`
--
ALTER TABLE `dmn_round`
  ADD PRIMARY KEY (`round_id`);

--
-- Indexes for table `dmn_user`
--
ALTER TABLE `dmn_user`
  ADD PRIMARY KEY (`dmn_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmn_account`
--
ALTER TABLE `dmn_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dmn_account_category`
--
ALTER TABLE `dmn_account_category`
  MODIFY `account_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dmn_account_type`
--
ALTER TABLE `dmn_account_type`
  MODIFY `account_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_actipromo`
--
ALTER TABLE `dmn_actipromo`
  MODIFY `actipromo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_actipromo_type`
--
ALTER TABLE `dmn_actipromo_type`
  MODIFY `actipromo_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_agent`
--
ALTER TABLE `dmn_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dmn_customer`
--
ALTER TABLE `dmn_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dmn_customer_sex`
--
ALTER TABLE `dmn_customer_sex`
  MODIFY `customer_sex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_employees`
--
ALTER TABLE `dmn_employees`
  MODIFY `employees_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_level`
--
ALTER TABLE `dmn_level`
  MODIFY `dmn_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_mobile_network`
--
ALTER TABLE `dmn_mobile_network`
  MODIFY `mobile_network_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dmn_product`
--
ALTER TABLE `dmn_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_relate`
--
ALTER TABLE `dmn_relate`
  MODIFY `relate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dmn_round`
--
ALTER TABLE `dmn_round`
  MODIFY `round_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_user`
--
ALTER TABLE `dmn_user`
  MODIFY `dmn_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
