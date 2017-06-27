-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 11:52 AM
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
-- Table structure for table `dmn_abountus`
--

CREATE TABLE `dmn_abountus` (
  `abountus_id` int(11) NOT NULL,
  `abountus_detail` varchar(5000) NOT NULL,
  `abountus_address` varchar(1000) NOT NULL,
  `abountus_phone` varchar(20) NOT NULL,
  `abountus_email` varchar(100) NOT NULL,
  `abountus_line` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_abountus`
--

INSERT INTO `dmn_abountus` (`abountus_id`, `abountus_detail`, `abountus_address`, `abountus_phone`, `abountus_email`, `abountus_line`) VALUES
(1, '<p>ทำนายเบอร์มือถือ โดยนักวิเคราะห์พลังตัวเลข ..ออกแบบเบอร์มงคล</p>', '42 / 167 อาคารเพชรเจริญ ถนน นวมินทร์ 161 แขวงนวลจันทร์ เขต บึงกุ่ม กรุงเทพฯ 10230', '094-6393945', 'thailandnumber19@gmail.com', '6356159');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_account`
--

CREATE TABLE `dmn_account` (
  `account_id` int(11) NOT NULL,
  `account_date` date NOT NULL,
  `account_type` int(11) NOT NULL,
  `account_category` int(11) NOT NULL,
  `account_detail` varchar(500) NOT NULL,
  `account_quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_account`
--

INSERT INTO `dmn_account` (`account_id`, `account_date`, `account_type`, `account_category`, `account_detail`, `account_quantity`) VALUES
(1, '2017-05-11', 1, 1, 'ขายเบอร์มือถือ', 5000),
(2, '2017-05-11', 1, 1, 'ขายเบอร์มือถือ', 4000),
(3, '2017-05-02', 1, 3, 'ขายเบอร์มือถือ', 5000),
(4, '0000-00-00', 2, 2, 'ค่าซ่อมแอร์', 2000),
(5, '0000-00-00', 2, 3, 'ค่าซ่อมพัดลม', 200),
(7, '2017-05-01', 1, 1, 'ขายเบอร์มือถือ', 1500),
(10, '2017-05-11', 1, 1, 'ขายเบอร์ Dtac', 500),
(11, '2017-05-03', 1, 1, 'ขายเบอร์มือถือ', 4000),
(12, '2017-05-04', 1, 1, 'ขายเบอร์มือถือ', 6000),
(13, '2017-05-05', 1, 1, 'ขายเบอร์มือถือ', 8000),
(14, '2017-05-06', 1, 1, 'ขายเบอร์มือถือ', 2000),
(15, '2017-05-07', 1, 1, 'ขายเบอร์มือถือ', 3500),
(16, '2017-05-08', 1, 1, 'ขายเบอร์มือถือ', 4500),
(17, '2017-05-09', 1, 1, 'ขายเบอร์มือถือ', 20000),
(18, '2017-05-10', 1, 1, 'ขายเบอร์มือถือ', 9500),
(19, '2017-06-22', 1, 1, 'ขายเบอร์มือถือ', 8900),
(20, '2017-06-22', 1, 1, 'ขายเบอร์มือถือ', 15000);

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
  `actipromo_title` varchar(100) NOT NULL,
  `actipromo_subtitle` varchar(100) NOT NULL,
  `actipromo_detail` text NOT NULL,
  `actipromo_date` date NOT NULL,
  `actipromo_date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_actipromo`
--

INSERT INTO `dmn_actipromo` (`actipromo_id`, `actipromo_type`, `actipromo_image`, `actipromo_name`, `actipromo_title`, `actipromo_subtitle`, `actipromo_detail`, `actipromo_date`, `actipromo_date_end`) VALUES
(2, 1, 'dmn20170317181020.jpg', '202020', '', 'รายละเอียดย่อ', '<p>sdkaposdoajdposajodjasdj</p>', '2017-03-17', '0000-00-00'),
(3, 2, '20170505134315.png', 'ซิมใหม่ ล่าสุด', '', 'รายละเอียดย่อ', 'ซิมใหม่เบอร์สวย ส่งเสริมการงาน ราคาถูก', '2017-05-05', '0000-00-00'),
(4, 1, 'dmn20170505133737.jpg', 'กด Like กด Shere Fan Page ลุ้นรับรางวัลมากมาย', '', 'รายละเอียดย่อ', 'ติดตามรายละเอียดได้ที่ Fan Page : https://www.facebook.com/', '2017-05-05', '0000-00-00'),
(5, 2, '20170505134550.png', 'Dtac เบอร์ใหม่', '', 'รายละเอียดย่อ', 'เบอร์ใหม่ 10 ส่งเสริมการเงินดีเยี่ยม เลขสวย', '2017-05-05', '0000-00-00'),
(7, 1, '20170505135229.png', 'AIS ใจดีแจกค่าขนม สมัครโปรโมชั่นเน็ตวันนี้ รับฟรี ค่าโทร 20 บาท', '', 'เพียงสมัครโปรโมชั่น เน็ต อะไรก้ได้รับโบนัสค่าโทรฟรี 20 บาท', '<p style=\"text-align: center;\">เพียงสมัครโปรโมชั่น เน็ต อะไรก้ได้รับโบนัสค่าโทรฟรี 20 บาท</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto; width: 300px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACBCAYAAAB6iIfxAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0Q4N0REODNBMDY0MTFFNEI5QkFERTA3NjhGQkYxNEEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0Q4N0REODRBMDY0MTFFNEI5QkFERTA3NjhGQkYxNEEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3RDg3REQ4MUEwNjQxMUU0QjlCQURFMDc2OEZCRjE0QSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3RDg3REQ4MkEwNjQxMUU0QjlCQURFMDc2OEZCRjE0QSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqSEAwIAAB/fSURBVHja7F0JnBTF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\" /></p>\r\n<p>&nbsp;</p>', '2017-05-05', '0000-00-00'),
(8, 1, '20170509212704.jpg', 'Nation TV - เว็บไซต์สถานีข่าวอันดับ 1 ของเมืองไทย ', '', 'Nation TV - เว็บไซต์สถานีข่าวอันดับ 1 ของเมืองไทย ', '<p><span style=\"color: #000000;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../theme/tinymce/source/640_6gjh66fabbef6jkkj6caa.jpg\" width=\"640\" height=\"335\" /></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"color: #000000;\">Nation TV - เว็บไซต์สถานีข่าวอันดับ 1 ของเมืองไทย \"นายฐากร ตัณฑสิทธิ์ เลขาธิการคณะกรรมการกิจการกระจายเสียง กิจการโทรทัศน์ และกิจการโทรคมนาคมแห่งชาติ (เลขาธิการ กสทช.) กล่าวว่า วันนี้ (8 พ.ค. 2560) ตัวแทนบริษัท ทริปเปิลที อินเทอร์เน็ต จำกัด ผู้ให้บริการอินเทอร์เน็ต 3BB ได้เข้าพบพร้อมทำหนังสือมาชี้แจง กรณีที่ลูกค้า 3BB ไม่สามารถใช้งาน Google และ YouTube ได้เมื่อวันที่ 6 พ.ค. 2560 ที่ผ่านมา โดยทางบริษัทฯ ได้ชี้แจงว่าปัญหาดังกล่าวเกิดจากทีมงาน Google ต่างประเทศได้มีการซ่อมบำรุงระบบส่งผลให้ไม่สามารถใช้งาน Google และ YouTube ได้ ซึ่งทางทีมงาน 3BB ได้ประสานงานอย่างใกล้ชิด โดย Google สามารถเริ่มใช้งานได้ตั้งแต่เวลา 12.00 น. และ YouTube สามารถเริ่มใช้งานได้ตั้งแต่เวลา 23.00 น. ของวันที่ 6 พ.ค. 2560 ทั้งนี้ บริษัท ทริปเปิลที อินเทอร์เน็ต จำกัด ได้เสนอแผนเยียวยาให้กับผู้ใช้บริการ 3BB ทุกราย โดยจะใช้งานบริการ MONOMAXX ซึ่งเป็นบริการให้ชมภาพยนตร์ลิขสิทธิ์ของ MONO ผ่านแอปพลิเคชัน มูลค่า 129 บาท ได้ฟรี 1 เดือน\"สำนักงาน กสทช. เห็นว่าแผนเยียวยาที่บริษัท ทริปเปิลที อินเทอร์เน็ต จำกัด เสนอมาเป็นประโยชน์ต่อผู้ใช้บริการ 3BB จึงให้บริษัทฯ ดำเนินการได้ทันที\" นายฐากร กล่าว\"</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../theme/tinymce/source/640_5affbiabddhb59f8gi8c9.jpg\" width=\"640\" height=\"854\" /></p>\r\n<p>อ่านต่อที่: http://www.nationtv.tv/main/content/economy-business/378546418/</p>', '2017-05-09', '0000-00-00'),
(11, 2, '20170509215111.jpg', 'Dtac Free 4G Pocket WIFITT', '', 'รับฟรี super 4G pocket wifi จากดีแทค เมื่อเปิดเบอร์ใหม่พร้อมสมัคร share package พิเศษ รับส่วนลด 200 ', '<p><img src=\"../../theme/tinymce/source/super-4G-Pocket-Wifi_lead-graphic-D.jpg\" alt=\"\" width=\"1160\" height=\"270\" /></p>\r\n<h4 class=\"dp-block text-center\" style=\"text-align: center;\">รับฟรี super 4G pocket wifi จากดีแทค เมื่อเปิดเบอร์ใหม่พร้อมสมัคร share package<br />พิเศษ รับส่วนลด 200 บาท นาน 12 เดือน บน share package</h4>\r\n<p><img src=\"../../theme/tinymce/source/111.jpg\" alt=\"\" width=\"984\" height=\"308\" /></p>\r\n<h4 class=\"dp-block text-center\" style=\"text-align: center;\">ให้คุณเปลี่ยนสัญญาณ 4G เป็น Wifi Hotspot ออนไลน์ง่ายและเร็วขึ้น จะที่ไหนก็แชร์สัญญาณได้ไม่มีสะดุด</h4>\r\n<h2 class=\"dp-block text-center font-c-blue\" style=\"text-align: center;\">สมัครเลยวันนี้ ที่ศูนย์บริการดีแทคทุกสาขา</h2>', '2017-05-09', '0000-00-00');

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
  `agent_email` varchar(200) NOT NULL,
  `agent_link` varchar(100) NOT NULL,
  `agent_data` varchar(255) NOT NULL,
  `agent_note` varchar(255) NOT NULL,
  `agent_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_agent`
--

INSERT INTO `dmn_agent` (`agent_id`, `agent_code`, `agent_name`, `agent_tel`, `agent_email`, `agent_link`, `agent_data`, `agent_note`, `agent_status`) VALUES
(1, '001', 'สมชาย', '0802929291', 'dfdfo@ad.com', '', '', '', 1),
(4, '12', 'sdasda', 'dasda', 'sdasfsa', '', '', '', 1),
(5, '005', 'สมควร', '0886665412', 'somkua@gmail.com', '', '', '', 1);

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
  `customer_relate` int(11) NOT NULL,
  `customer_link` varchar(100) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_note` varchar(255) NOT NULL,
  `customer_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_customer`
--

INSERT INTO `dmn_customer` (`customer_id`, `customer_name`, `customer_tel`, `customer_email`, `customer_sex`, `customer_birthday`, `customer_job`, `customer_relate`, `customer_link`, `customer_address`, `customer_note`, `customer_status`) VALUES
(1, 'ชัยวัฒน์ ชยพาณิชย์สกุล', '0845081615', 'amoolras@gmail.com', 1, '1989-12-26', 'นักวิเคราะห์', 1, '', '', 'จองเบอร์ 080 889xxx', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `dmn_employees`
--

CREATE TABLE `dmn_employees` (
  `employees_id` int(11) NOT NULL,
  `employees_name` varchar(300) NOT NULL,
  `employees_tel` varchar(20) NOT NULL,
  `employees_secretcode` varchar(100) NOT NULL,
  `employees_salary_type` int(11) NOT NULL,
  `employees_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_employees`
--

INSERT INTO `dmn_employees` (`employees_id`, `employees_name`, `employees_tel`, `employees_secretcode`, `employees_salary_type`, `employees_status`) VALUES
(1, 'ชัยวัฒน์', '0856081615', '4dff58e4ce631fa98e850c91e903a0d4', 1, 1),
(2, 'พนักงานสต๊อกกลาง', '0856081615', '595d84c413b3df61c84603be140b2830', 2, 1),
(3, 'ธีรเดช บุญนภา', '0804805243', '58d22c69acb583ee2fcbcd88a7778d19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_general_config`
--

CREATE TABLE `dmn_general_config` (
  `general_config_id` int(11) NOT NULL,
  `general_config_txt_top` varchar(100) NOT NULL,
  `general_config_txt_bot` varchar(100) NOT NULL,
  `general_config_pic` varchar(20) NOT NULL,
  `general_config_admin_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_general_config`
--

INSERT INTO `dmn_general_config` (`general_config_id`, `general_config_txt_top`, `general_config_txt_bot`, `general_config_pic`, `general_config_admin_pic`) VALUES
(1, 'เบอร์มือถือส่งผลต่อชีวิต', 'ทำนายเบอร์มือถือฟรี เพชร พลังเลขสินค้าทั้งหมด', '20170505100511.png', '20170511125347.png');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_import_tmp`
--

CREATE TABLE `dmn_import_tmp` (
  `import_id` int(11) NOT NULL,
  `import_round` int(11) NOT NULL,
  `import_network_id` int(11) NOT NULL,
  `import_number` varchar(20) NOT NULL,
  `import_cost` int(11) NOT NULL,
  `import_price` int(11) NOT NULL,
  `import_agent_id` int(11) NOT NULL,
  `import_product_type` varchar(100) NOT NULL,
  `import_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `dmn_import_tmp`
--

INSERT INTO `dmn_import_tmp` (`import_id`, `import_round`, `import_network_id`, `import_number`, `import_cost`, `import_price`, `import_agent_id`, `import_product_type`, `import_status`) VALUES
(1, 1, 1, '0823738122', 500, 1800, 1, 'การเงิน เสน่ห์ ', 1),
(2, 1, 2, '0829191919', 550, 1900, 1, 'การเงิน การงาน เสน่ห์ โชคลาภ ', 1),
(3, 1, 1, '0928321229', 1200, 2900, 1, 'การเงิน เสน่ห์ โชคลาภ ', 1),
(4, 1, 2, '0804805243', 1250, 3000, 1, 'การเงิน เสน่ห์ ', 1),
(5, 1, 3, '0821551290', 11000, 20000, 1, 'การเงิน เสน่ห์ โชคลาภ ปัญญา', 1),
(6, 1, 2, '0801551289', 11500, 21000, 1, 'การเงิน การงาน เสน่ห์ โชคลาภ ปัญญา', 1),
(7, 2, 1, '0809999999', 500, 1800, 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_level`
--

CREATE TABLE `dmn_level` (
  `dmn_level_id` int(11) NOT NULL,
  `dmn_level_name` varchar(100) NOT NULL,
  `dmn_level_salary` int(11) NOT NULL,
  `dmn_level_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_level`
--

INSERT INTO `dmn_level` (`dmn_level_id`, `dmn_level_name`, `dmn_level_salary`, `dmn_level_status`) VALUES
(1, 'ผู้ดูแลระบบ', 15000, 1),
(2, 'พนักงานขาย', 9000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_log`
--

CREATE TABLE `dmn_log` (
  `log_id` int(11) NOT NULL,
  `log_date` datetime NOT NULL,
  `log_product_id` int(11) NOT NULL,
  `log_customer_id` int(11) NOT NULL,
  `log_employee_id` int(11) NOT NULL,
  `log_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_log`
--

INSERT INTO `dmn_log` (`log_id`, `log_date`, `log_product_id`, `log_customer_id`, `log_employee_id`, `log_status`) VALUES
(1, '2017-06-22 15:17:04', 9, 1, 2, 3),
(2, '2017-06-22 16:29:54', 9, 1, 2, 4),
(3, '2017-06-22 19:17:56', 8, 1, 1, 3),
(4, '2017-06-22 19:19:24', 7, 1, 2, 3),
(5, '2017-06-22 19:24:29', 7, 1, 2, 4),
(6, '2017-06-22 19:42:13', 8, 1, 1, 99),
(7, '2017-06-22 20:04:20', 8, 1, 2, 3),
(8, '2017-06-22 20:05:35', 8, 1, 2, 99),
(9, '2017-06-22 20:08:25', 8, 1, 2, 3),
(10, '2017-06-22 20:13:46', 8, 1, 2, 4),
(11, '2017-06-22 23:20:26', 9, 1, 2, 3),
(12, '2017-06-22 23:20:31', 9, 1, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_log_la`
--

CREATE TABLE `dmn_log_la` (
  `log_la_id` int(11) NOT NULL,
  `employees_sc` varchar(100) NOT NULL,
  `log_la_date_start` datetime NOT NULL,
  `log_la_date_end` datetime NOT NULL,
  `log_la_day` int(11) NOT NULL,
  `log_la_hour` int(11) NOT NULL,
  `log_la_note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_log_la`
--

INSERT INTO `dmn_log_la` (`log_la_id`, `employees_sc`, `log_la_date_start`, `log_la_date_end`, `log_la_day`, `log_la_hour`, `log_la_note`) VALUES
(1, '595d84c413b3df61c84603be140b2830', '2017-06-23 19:00:00', '2017-06-23 20:00:00', 0, 1, 'ป่วย'),
(2, '595d84c413b3df61c84603be140b2830', '2017-06-23 19:00:00', '2017-06-23 23:00:00', 0, 4, 'ซื้อของเข้าบ้าน'),
(3, '595d84c413b3df61c84603be140b2830', '2017-06-05 17:51:00', '2017-06-07 17:51:00', 2, 0, '555'),
(4, '595d84c413b3df61c84603be140b2830', '2017-06-01 15:47:00', '2017-06-02 15:47:00', 1, 0, 'เอื้ออ');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_mobile_network`
--

CREATE TABLE `dmn_mobile_network` (
  `mobile_network_id` int(11) NOT NULL,
  `mobile_network_code` varchar(100) NOT NULL,
  `mobile_network_name` varchar(200) NOT NULL,
  `mobile_network_pic` varchar(20) NOT NULL DEFAULT 'no_pic.png',
  `mobile_network_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_mobile_network`
--

INSERT INTO `dmn_mobile_network` (`mobile_network_id`, `mobile_network_code`, `mobile_network_name`, `mobile_network_pic`, `mobile_network_status`) VALUES
(1, '001', 'AIS', '20170512092821.jpg', 1),
(2, '002', 'Dtac', '20170512092825.jpg', 1),
(3, '003', 'TRUE', '20170512092828.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_product`
--

CREATE TABLE `dmn_product` (
  `product_id` int(11) NOT NULL,
  `product_round` int(11) NOT NULL DEFAULT '0',
  `product_mobile_network` int(11) NOT NULL,
  `product_number` varchar(20) NOT NULL,
  `product_expired` date NOT NULL,
  `product_cost` float NOT NULL,
  `product_sale` float NOT NULL,
  `product_agent` int(11) NOT NULL,
  `product_date` date NOT NULL,
  `product_time` time NOT NULL,
  `product_date_sale` date NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_status` int(11) NOT NULL DEFAULT '1',
  `product_requiment` int(11) NOT NULL DEFAULT '0',
  `product_note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_product`
--

INSERT INTO `dmn_product` (`product_id`, `product_round`, `product_mobile_network`, `product_number`, `product_expired`, `product_cost`, `product_sale`, `product_agent`, `product_date`, `product_time`, `product_date_sale`, `product_type`, `product_status`, `product_requiment`, `product_note`) VALUES
(1, 1, 1, '0823738122', '0000-00-00', 500, 1800, 1, '2017-05-25', '05:48:49', '0000-00-00', 'การเงิน เสน่ห์ ', 2, 0, ''),
(2, 1, 2, '0829191919', '0000-00-00', 550, 1900, 1, '2017-05-26', '05:48:49', '0000-00-00', 'การเงิน การงาน เสน่ห์ โชคลาภ ', 1, 0, ''),
(7, 0, 1, '0811919191', '0000-00-00', 500, 1800, 1, '2017-05-26', '05:59:41', '0000-00-00', 'การเงิน การงาน เสน่ห์ โชคลาภ ', 1, 0, 'facebook 555+'),
(8, 0, 1, '0889551935', '0000-00-00', 5000, 8900, 1, '2017-06-19', '20:16:01', '0000-00-00', 'การเงิน การงาน เสน่ห์ โชคลาภ ปัญญา', 1, 0, '65456456'),
(9, 0, 1, '0809999999', '0000-00-00', 2000, 15000, 1, '2017-06-20', '16:10:17', '2017-06-21', '', 1, 1, 'facebook : 456'),
(10, 0, 2, '0808888888', '0000-00-00', 5000, 8900, 5, '2017-06-20', '16:48:00', '0000-00-00', '', 2, 0, ''),
(11, 2, 1, '0809999999', '0000-00-00', 500, 1800, 1, '2017-06-26', '16:40:42', '0000-00-00', '', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_product_type`
--

CREATE TABLE `dmn_product_type` (
  `product_type_id` int(11) NOT NULL,
  `product_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_product_type`
--

INSERT INTO `dmn_product_type` (`product_type_id`, `product_type_name`) VALUES
(1, 'การเงิน'),
(2, 'การงาน'),
(3, 'เสน่ห์'),
(4, 'โชคลาภ'),
(5, 'ปัญญา');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_relate`
--

CREATE TABLE `dmn_relate` (
  `relate_id` int(11) NOT NULL,
  `relate_name` varchar(300) NOT NULL,
  `relate_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_relate`
--

INSERT INTO `dmn_relate` (`relate_id`, `relate_name`, `relate_status`) VALUES
(1, 'ผู้มีปฏิสัมพันธ์ที่ดี', 1),
(2, 'ผู้ตอบรับ กิจกรรม/โปรโมชั่น/แนะนำสินค้า', 1),
(3, 'ลูกค้าทั่วไป', 1),
(4, 'ลูกค้าคนสำคัญ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_round`
--

CREATE TABLE `dmn_round` (
  `round_id` int(11) NOT NULL,
  `round_round` int(11) NOT NULL,
  `round_agent_id` int(11) NOT NULL,
  `round_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_round`
--

INSERT INTO `dmn_round` (`round_id`, `round_round`, `round_agent_id`, `round_datetime`) VALUES
(2, 1, 1, '2017-05-26 05:48:44'),
(3, 2, 0, '2017-06-26 16:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `dmn_salary`
--

CREATE TABLE `dmn_salary` (
  `dmn_salary_id` int(11) NOT NULL,
  `dmn_salary_day` int(11) NOT NULL,
  `dmn_salary_time` int(11) NOT NULL,
  `dmn_salary_comission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_salary`
--

INSERT INTO `dmn_salary` (`dmn_salary_id`, `dmn_salary_day`, `dmn_salary_time`, `dmn_salary_comission`) VALUES
(1, 310, 35, 100);

-- --------------------------------------------------------

--
-- Table structure for table `dmn_story`
--

CREATE TABLE `dmn_story` (
  `story_id` int(11) NOT NULL,
  `story_name` varchar(255) NOT NULL,
  `story_detail` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dmn_story`
--

INSERT INTO `dmn_story` (`story_id`, `story_name`, `story_detail`) VALUES
(1, 'เลขศุภเคราะห์', '<p style=\"text-align: center;\">เลขศุภเคราะห์ 2, 4, 6, 5, 9, ส่งเสริมความสุขสบาย อ่อนโยน นุมนวล ค่อยเป็นค่อยไป ไม่มีโทษในทางเสียหายรุนแรง เเต่ขาดพลังเเละความขยัน ขาดควาแข็งแกร่ง จัดเป็นประเภท บุญฤทธิ์ สำหรับเลขศุภเคราะห์ในเบอร์มือถือเป็นส่วนประกอบที่ขาดไม่ได้ เพราะหมายถึง ความสุข ทรัพย์ อ่อนโยยน สติปัญญา โชคลาภแต่ก็มีข้อเสีย ถ้าหากเบอร์มือถือเป็นเลขศุภเคราะห์ล้วนก็จะส่งผลให้ขาดพลังงาน ขาดความขยัน ประสบความสำเร็จได้ช้า ผู้ไม่มีความรู้เรื่องโหราศาสตร์ทางด้านตัวเลข สามารถเลือกใช้เลขศุภเคราะห์ล้วนได้ เพื่อง่ายต่อการหาเบอร์ด้วยตนเอง #วิธีนี้เป็นหลักเบื้องต้น ในการหาเบอร์แบบง่ายที่สุด ยังไม่ครอบคลุมในความต้องการผู้ใช้เบอร์ ที่อยากจะให้ตัวเลขไปส่งผลแบบเน้นเฉพาะ และความเหมาะสมในอาชีพ ซึ่งในแต่ละคนมีความต้องการแตกต่างกัน</p>'),
(2, 'การใช้หลายเบอร์ร่วมกัน', '<p style=\"text-align: left;\">การใช้หลายๆเบอร์รวมกัน จะส่งผลอย่างไร ? ปกติผมจะเเนะนำให้ใช้เบอร์ที่เหมาะสมกับตัวเองที่สุดเพียงเบอร์เดียว เเต่บางคนอาจมีความจำเป็นต้องใช้หลายเบอร์ เพื่อรองรับธุรกิจการงาน ขอสรุปให้เห็น ความเเตกแต่งดังนี้</p>\r\n<ol>\r\n<li style=\"text-align: left;\">เบอร์ดี + เบอร์ดี = หนุนกัน ส่งผลให้ดีขึ้น ในกรณีที่จำเป็นต้องใช้หลายเบอร์</li>\r\n<li style=\"text-align: left;\">เบอร์ดี + เบอร์เสีย = คานกัน ยังมีอิทพลของเลขเสียทำให้มีอุปสรรคอยู่บ้าง เเต่ก้ยังดีกว่าใช้เบอร์เสียเบอร์เดียว</li>\r\n<li style=\"text-align: left;\">เบอร์เสีย + เบอร์เสีย = ส่งผลเสียหายรุนเเรง เพราะได้รับอิทธิพลของเสียมากขึ้น</li>\r\n</ol>'),
(4, 'เลขบาปเคราะห์', '<p style=\"text-align: center;\">เลขบาปเคราะห์ 0, 1, &nbsp;3, &nbsp;7, &nbsp;8, เลขเหล่านี้ในทางโหราศาตสร์ด้านตัวเลข จัดว่าเป็นกลุ่มเลขที่ส่งผลในทางอิทธิฤทธิ์ มีพลังความรุนแรง และไม่ค่อยเป็นมิตรกับเลขอื่น&nbsp;จัดเป็นประเภทให้ผลด้านความก้าวร้าว รุนแรง</p>\r\n<p style=\"text-align: center;\">จึงแนะนำให้หลีกเลี่ยงเลขเหล่านี้ในเบอร์มือถือ 7 ตัวท้าย สำหรับผู้ไม่มีความรู้ด้านตัวเลข แต่สำหรับนักวิเคราะห์ตัวเลขในเบอร์มือถือส่วนใหญ่จะชอบเบอร์ที่มีเลขบาปเคราะห์ปะปนอยู่ในตำแหน่งที่ดีและกระทบกับเลขที่เป็นมิตรกัน เพื่อส่งเสริม พละกำลัง ความขยันอดทน ทำให้เห็นผลเร็ว และมีความจำเป็นอย่างมากในบางอาชีพ</p>'),
(5, 'เลขคู่ศัตรูชนิดรุนแรง', '<p style=\"text-align: center;\"><strong>เลขคู่ศัตรูชนิดรุนแรง</strong></p>\r\n<p style=\"text-align: center;\">เป็นเลขต้องห้ามในเบอร์มือถือ. มีทั้งหมด 29 คู่ ถ้ามีอยู่ภายในกลุ่มเลข 7 ตัวท้ายของเบอร์มือถือแม้แต่คู่เดียวก็จะส่งผลเสียหายอย่างรุนแรง. ถ้าหากมีควรเปลี่ยนเบอร์</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">00&nbsp;</span> ส่งผลเสียต่อ สุขภาพ การเงิน การงาน ความเครียด อุปสรรคปัญหามากมาย</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">01 &ndash; 10</span>&nbsp; โดนกลั่นแกล้ง ถูกแทงข้างหลัง คนนินทา ทำให้เสียชื่อเสียง</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">02 &ndash; 20</span> &nbsp;มีปัญหาเรื่องความรักและการเงิน คนอื่นเบียดเบียนทางการเงิน</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">03 &ndash; 30</span> &nbsp;อารมณ์ร้อนรุนแรง วู่วาม ประมาท เกิดความเสียหาย</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">06 &ndash; 60</span>&nbsp; การเงินและความรักเสียหาย รายได้ไม่พอจ่าย เงินรั่ว</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">07 &ndash; 70</span>&nbsp; รับปัญหาภาระหนัก เครียด เก็บกด เป็นทุกข์</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">08 &ndash; 80</span>&nbsp; ลุ่มหลง มัวเมา ถูกดึงดูดไปทางทางที่เสียหาย ขาดสติ</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">13 &ndash; 31</span>&nbsp; ใจร้อนวู่วาม ขาดความรอบครอบ การตัดสินใจผิดพลาด มีปัญหากับคนอื่น</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">17 -71</span>&nbsp; ใจร้อน ประมาท มีเรื่องทะเลาะ เอาแต่ใจตนเอง</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">18 &ndash; 81</span>&nbsp;&nbsp;ถูกโกง ทำคุณกับคนไม่ขึ้น มีปัญหากับคนรอบข้าง</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">27 &ndash; 72</span>&nbsp;&nbsp;ระวังถูกเบียดเบียนเรื่องการเงิน รายจ่ายมากกว่ารายรับ ปัญหาหนี้สิน</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">37 &ndash; 73</span>&nbsp; &nbsp;รับเคราะห์ร้าย ระวังอุบัติเหตุ ทำงานหนัก พักผ่อนน้อย</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">38 &ndash; 83</span>&nbsp; &nbsp;ขาดสติ คิดเร็ว ทำเร็ว เกิดเรื่องเดือดร้อน แก้ปัญหาด้วยอารมณ์</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">48 &ndash; 84</span> &nbsp; ระวังถูกโกง เรื่องเอกสารสัญญา ถูกเบี้ยวงาน มีคนน้ำเรื่องเดือดร้อนมาให้</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #0000ff;\">67 &ndash; 76</span>&nbsp;&nbsp;คู่พระศุกร์เข้าพระเสาร์แทรก อุปสรรคการเงินและความรัก ต้องแก้ปัญหาไม่จบสิ้น</p>'),
(6, 'อันตรายจากเลข 0', '<p style=\"text-align: center;\"><strong>เลข 0 ดาวมฤตยู&nbsp;</strong>ส่งผลเสียที่สุดใน เรื่องสุขภาพ เพราะมีอิทธิพลในการดึงดูดโรคภัยต่างๆ เข้ามาสู่ตัวผู้ครอบครอง</p>\r\n<p style=\"text-align: center;\">เพราะว่าเลข 0 คือตัวแทนเชื้อโรค ไวรัส สิ่งที่มองไม่เห็นและจับต้องไม่ได้ เป็นเลขที่ขัดขวางอิทธิพลด้านดีของเลขอื่นๆ และทำให้ข้อดี กลายเป็น ข้อเสียได้&nbsp;เช่น เลข 6 มีเสน่ห์&nbsp;ดึงดูดทรัพย์ แต่เมื่อกระทบกับเลข 0 คือ 06 / 60 ส่งผลให้เป็นเสน่ห์ด้านลบ เป็นคนเจ้าชู้ และทำให้เงินรั่วได้</p>\r\n<p style=\"text-align: center;\">เลข 1 มีความโดดเด่น เป็นผุ้นำเมื่อกระทบกับ 0 คือ 01 / 10 ทำให้เสียชื่อเสี่ยง มีคนนินทาให้ร้าย</p>\r\n<p style=\"text-align: center;\">แนะนำให้หลีกเลี่ยงในเบอร์มือถือ 7 ตัวท้ายเพราะเป็นเลขที่ให้โทษมากกว่าให้คุณ</p>'),
(7, 'กลุ่มเลขส่งเสริมงานค้าขาย', '<p style=\"text-align: center;\">กลุ่มเลขส่งเสริมการค้า 14, 41, 15, 51, 16, 61, 22, 23, 32, 24, 42, 26, 62, 29, 92, 46, 64, 56, 65, 66, 69, 96,</p>\r\n<p style=\"text-align: center;\">เลขการเงิน เสน่ห์ ( 1, 2, 6 ) เมื่อกระทบกับเลขที่เป็นมิตรกันภายในเบอร์มือถือจะส่งผลดีต่อการค้าขาย ดึงดูดพรัพย์ให้ผู้ใช้เบอร์</p>\r\n<p style=\"text-align: center;\">เช่น กระทบกับเลข 4 , 5 การติดต่อสื่อสาร มีความน่าเชื่อถือ</p>\r\n<p style=\"text-align: center;\">14 , 41 , 15 , 51 24 , 42 , 46 , 64 , 56 , 65 , ส่งเสริมให้ การค้าขายราบรื่น มีวาทศิลป์ สร้างความน่าเชื่อถือ</p>\r\n<p style=\"text-align: center;\">กระทบกับเลข 1 &nbsp;( มีเสน่ห์ โดดเด่น มีชื่อเสียง )</p>\r\n<p style=\"text-align: center;\">16 , 61 ค้าขายดี สร้างความโดดเด่นในธุรกิจ กอบโกยผลประโยชน์ได้มาก</p>\r\n<p style=\"text-align: center;\">กระทบกับกลุ่มเลข 3 พลังงาน ความขยัน อุตสาหพยายาม</p>\r\n<p style=\"text-align: center;\">32 , 23 , 36 , 63 ส่งเสริมให้ การค้าขายดี มีเสน่ห์แรง ดึงดูดทรัพย์ได้มาก บริการธุรกิจได้ดี</p>\r\n<p style=\"text-align: center;\">กระทบกับเลข 9 สิ่งศักดิ์สิทธ์ โชคลาภ</p>\r\n<p style=\"text-align: center;\">29 , 92 , 69, 96 มีความคิดสร้างสรรค์ มีโชคลาภทางการเงิน สิ่งศักดิ์สิทธิ์เกลื้อหนุน</p>'),
(8, 'เลขรับเรื่องซวย', '<p style=\"text-align: center;\"><strong>5 &nbsp;อันดับเลขคู่ภายในเบอร์มือถือ รับเรื่องซวย</strong></p>\r\n<p style=\"text-align: center;\"><strong>00</strong>&nbsp; &nbsp;ปัญหาสุขภาพ โรคร้ายแรง<br /><strong>37 &ndash; 73&nbsp;</strong> รับเคราะห์ร้าย เสี่ยงอุบัติเหตุ<br /><strong>67 &ndash; 76&nbsp;</strong> มีอุปสรรคด้านการเงิน และความรัก<br /><strong>18 &ndash; 81</strong>&nbsp; โดนโกง ถูกหักหลัง<br /><strong>07 &ndash; 70</strong>&nbsp; รับเรื่องเครียด อมทุกข์</p>\r\n<p style=\"text-align: center;\">ระวังอย่าให้มีในเบอร์มือถือ 7 ตัวท้าย หากมีควรเปลี่ยนเบอร์</p>'),
(9, 'ทำไมต้องหลีกเลี่ยง 0, 3, 7, 8,?', '<p style=\"text-align: center;\">ผมเเนะนำให้คนทั่วไปหลีกเลี่ยงเลข 0,3,7,8 ภายในเบอร์มือถือ 7 ตัวท้ายเพียงเพื่อปกกันอันตรายจากอิทธิพลด้านที่ไม่ดี ของตัวเลขเหล่านี้&nbsp;เพราะเป็นกลุ่มเลข &rdquo; เลขบาปเคราะห์ &rdquo; ให้ผลรุนแรง มีพลังมาก ทำให้ผู้ครอบครอง ใจร้อน ประมาท อาจเกิดความเสียหายได้&nbsp;แต่ก็ไม่ได้หมายความว่าเป็นเลขไม่ดีเสมอไป ในทางตรงกันข้ามถ้าเลขเหล่านี้ มีการวางตำเเหน่งที่ดีในเบอร์มือถือและมีความเหมาะสมกับผู้ใช้เบอร์โดยตรง&nbsp;ก็จะส่งผลดีเป็นทวีคูณ สำหรับการเลือกสรรเบอร์ของผม โดยมากแล้วจะเลือกเบอร์ที่มีเลขบาปเคราะห์กระทบกับเลขที่เป็นมิตรกันในตำเเหน่งที่ดี เพื่อให้เกิดพลังที่เห็นผลชัดเจนมากขึ้น</p>\r\n<p style=\"text-align: center;\">&rdquo; วิธีนี้เป็นหลักการพื้นฐานในการหาเบอร์ด้วยตนเอง สำหรับคนที่ไม่มีความรู้เรื่องพลังตัวเลขเท่านั้น &rdquo;</p>'),
(10, 'วิธีหาเบอร์ด้วยตนเอง', '<p style=\"text-align: center;\"><strong>สูตรเลือกเบอร์มงคลด้วยตนเอง</strong></p>\r\n<p style=\"text-align: center;\">สำหรับบผู้ไม่รู้วิชาโหราศาสตร์ด้านตัวเลข ควรหลีกเลี่ยงเลข 0, &nbsp;3,&nbsp;&nbsp;7, &nbsp;8, ภายในเบอร์มือถือ 7 ตัวท้าย</p>\r\n<p style=\"text-align: center;\">เลข 0, 3, 7, 8, ในทางโหราศาตสร์ด้านตัวเลข จัดว่าเป็นเลขบาปเคราะห์ ที่ส่งผลในทางอิทธิฤทธิ์ มีพลังความรุนแรง และไม่ค่อยเป็นมิตรกับเลขอื่น จึงแนะนำให้หลีกเลี่ยงเลขเหล่านี้ในเบอร์มือถือ 7 ตัวท้ายสำหรับผู้ไม่มีความรู้ด้านตัวเลข &nbsp;เพื่อป้องกันอิทธิพลความรุนแรงของเลขบาปเคราะห์&nbsp;และง่ายต่อการหาเบอร์ด้วยตนเอง</p>\r\n<p style=\"text-align: center;\">แต่วิธีนี้เป็นหลักการเบื้องต้น ในการหาเบอร์แบบง่ายที่สุด แต่ยังไม่ครอบคลุมสำหรับผู้ที่อยากได้เบอร์ไปส่งผลโดยตรงตามเรื่องที่ต้องการ เช่น ความเหมาะสมในอาชีพการงาน, &nbsp;ความรัก, การเงินม&nbsp;เป็นต้น&nbsp;ซึ่งในแต่ละคนมีความต้องการแตกต่าง</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"background-color: #ffffff; color: #ff6600;\">เลขคู่ศัตรูที่ส่งผลเสียรุนแรงมากที่สุด คือ &nbsp;00 &nbsp;01 &nbsp;10 &nbsp;02 &nbsp;20 &nbsp;03 &nbsp;30 &nbsp;06 &nbsp;60 &nbsp;07 &nbsp;70 &nbsp;08 &nbsp;80 &nbsp;13 &nbsp;31 &nbsp;17 &nbsp;71 &nbsp;18 &nbsp;81 &nbsp;27 &nbsp;72 &nbsp;37 &nbsp;73 &nbsp;38 &nbsp;83 &nbsp;48 &nbsp;84 &nbsp;67 &nbsp;76&nbsp;&nbsp;และเลข 0 &nbsp;&nbsp; ควรหลีกเลี่ยงไม่ให้มีอยู่ภายในเบอร์มือถือ 7 ตัวท้าย</span></p>'),
(11, 'ทำไมไม่รวมเลข 3 ตัวหน้า ?', '<p style=\"text-align: center;\">ทำไมไม่รวม เลข 3 ตัวหน้า ? / เลข 3 ตัวหน้าบ่งบอกถึงอะไร ?</p>\r\n<p style=\"text-align: center;\">..เมื่อก่อน กสทช.กำหนดรหัสเลขนำหน้าขึ้นมาเพื่อให้มีความหลากหลายของหมายเลขโทรศัพท์ และบ่งบอกผู้ให้บริการเครือข่ายเช่น 02 AIS / 03 Truemove / 05 Dtac *</p>\r\n<p style=\"text-align: center;\">*เมื่อปี 2549 ได้มีการเพิ่มจำนวนเเลขในเบอร์มือถือให้มี 10 หลักเพื่อขยายจำนวนเบอร์มือถือที่มีผู้ใช้งานเพิ่มมากขึ้น โดยการเติมเลข 8 ท้าย 0 ตัวหน้า. ซึ่งก็ไม่ใช้เลขที่ส่งผลต่อชีวิตเหมือนกัน ในปัจจุบันผู้ใช้บริการสามารถย้ายเครือข่ายโดยใช้เบอร์เดิมได้ จึงบ่งบอกผู้ให้บริการเครือข่ายจากเลข 3 ตัวหน้าไม่ได้เหมือนเดิม</p>\r\n<p style=\"text-align: center;\">ส่วนเลขรหัสโทรศัพมือถือ 7 ตัวท้าย ซึ่งถูกกำหนดให้เป็นรหัสเพื่อใช้สื่อสารกับผู้รับบริการหมายเลขนั้นๆโดยตรง ทำให้อิทธิพลของภายในทั้งเจ็ดตัวตัวส่งผลต่อคนที่ใช้เบอร์</p>\r\n<p style=\"text-align: center;\">สำหรับการวิเคราะห์พลังตัวเลขในเบอร์มือถือในช่วงเเรกๆนั้น ครูบา -อาจารย์ ได้เคยนำเอาเลขทั้งหมดในเบอร์มือถือมาวิเคราะห์เเต่ไม่สามารถวิเคราะห์ได้อย่างถูกต้องเเม่นยำ จึงได้ลองตัดเลข 3 ตัวหน้าทิ้งไป เเละนำเอาเฉพาะเลข 7 ตัวท้ายมาวิเคราะห์ แล้วเก็บข้อมูล ปรากฎว่าเกิดความเเม่นยำเเละชัดเจนมากขึ้น<br />แต่ทั้งหมดนี้ขึ้นอยู่กับการพิสูจน์ของตัวท่านเอง</p>');

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
(2, 'amoolras@gmail.com', '97db1846570837fce6ff62a408f1c26a', 2, '4dff58e4ce631fa98e850c91e903a0d4', 1),
(3, 'info@esanstudio.com', 'asdasd', 1, '595d84c413b3df61c84603be140b2830', 1),
(4, 'tuna_sang@hotmail.com', '16ab909a2d5d874ffb6f0a27158ed536', 1, '58d22c69acb583ee2fcbcd88a7778d19', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmn_abountus`
--
ALTER TABLE `dmn_abountus`
  ADD PRIMARY KEY (`abountus_id`);

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
-- Indexes for table `dmn_customer_type`
--
ALTER TABLE `dmn_customer_type`
  ADD PRIMARY KEY (`customer_type_id`);

--
-- Indexes for table `dmn_employees`
--
ALTER TABLE `dmn_employees`
  ADD PRIMARY KEY (`employees_id`);

--
-- Indexes for table `dmn_general_config`
--
ALTER TABLE `dmn_general_config`
  ADD PRIMARY KEY (`general_config_id`);

--
-- Indexes for table `dmn_import_tmp`
--
ALTER TABLE `dmn_import_tmp`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `dmn_level`
--
ALTER TABLE `dmn_level`
  ADD PRIMARY KEY (`dmn_level_id`);

--
-- Indexes for table `dmn_log`
--
ALTER TABLE `dmn_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `dmn_log_la`
--
ALTER TABLE `dmn_log_la`
  ADD PRIMARY KEY (`log_la_id`);

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
-- Indexes for table `dmn_product_type`
--
ALTER TABLE `dmn_product_type`
  ADD PRIMARY KEY (`product_type_id`);

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
-- Indexes for table `dmn_salary`
--
ALTER TABLE `dmn_salary`
  ADD PRIMARY KEY (`dmn_salary_id`);

--
-- Indexes for table `dmn_story`
--
ALTER TABLE `dmn_story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `dmn_user`
--
ALTER TABLE `dmn_user`
  ADD PRIMARY KEY (`dmn_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmn_abountus`
--
ALTER TABLE `dmn_abountus`
  MODIFY `abountus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dmn_account`
--
ALTER TABLE `dmn_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
  MODIFY `actipromo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dmn_actipromo_type`
--
ALTER TABLE `dmn_actipromo_type`
  MODIFY `actipromo_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_agent`
--
ALTER TABLE `dmn_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- AUTO_INCREMENT for table `dmn_customer_type`
--
ALTER TABLE `dmn_customer_type`
  MODIFY `customer_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_employees`
--
ALTER TABLE `dmn_employees`
  MODIFY `employees_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dmn_general_config`
--
ALTER TABLE `dmn_general_config`
  MODIFY `general_config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dmn_import_tmp`
--
ALTER TABLE `dmn_import_tmp`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dmn_level`
--
ALTER TABLE `dmn_level`
  MODIFY `dmn_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dmn_log`
--
ALTER TABLE `dmn_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dmn_log_la`
--
ALTER TABLE `dmn_log_la`
  MODIFY `log_la_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dmn_mobile_network`
--
ALTER TABLE `dmn_mobile_network`
  MODIFY `mobile_network_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dmn_product`
--
ALTER TABLE `dmn_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dmn_product_type`
--
ALTER TABLE `dmn_product_type`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dmn_relate`
--
ALTER TABLE `dmn_relate`
  MODIFY `relate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dmn_round`
--
ALTER TABLE `dmn_round`
  MODIFY `round_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dmn_salary`
--
ALTER TABLE `dmn_salary`
  MODIFY `dmn_salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dmn_story`
--
ALTER TABLE `dmn_story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dmn_user`
--
ALTER TABLE `dmn_user`
  MODIFY `dmn_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
