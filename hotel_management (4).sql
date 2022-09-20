-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 05:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `customer_mobile` bigint(20) NOT NULL,
  `customer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `customer_address`, `customer_mobile`, `customer_name`) VALUES
(25643, 'marathahalli,bangalore-37', 930798098, 'Ridhima'),
(998609, 'sarjapura,bangalore-29', 83749808, 'Himanshi'),
(984750, 'kadbessanahalli,bangalore-36', 54235238392, 'yuthvik'),
(9309, 'bommanahalli,bangalore-49', 32684, 'jayesh'),
(984750, 'kadbessanahalli,bangalore-36', 54235238392, 'yuthvik'),
(9309, 'bommanahalli,bangalore-49', 32684, 'jayesh'),
(0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `doubleroom`
--

CREATE TABLE `doubleroom` (
  `sno` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `customerid` int(10) NOT NULL,
  `child` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `indate` date NOT NULL,
  `outdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doubleroom`
--

INSERT INTO `doubleroom` (`sno`, `roomno`, `customerid`, `child`, `adult`, `indate`, `outdate`, `status`, `customer_name`, `customer_mobile`, `customer_address`) VALUES
(3, 300, 9309, 2, 2, '2022-02-24', '2022-02-28', 1, 'jayesh', '32684', 'bommanahalli,bangalore-49'),
(5, 301, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '', '', ''),
(6, 302, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '', '', '');

--
-- Triggers `doubleroom`
--
DELIMITER $$
CREATE TRIGGER `m_tgr` AFTER UPDATE ON `doubleroom` FOR EACH ROW insert into customer (customerid,customer_address,customer_mobile,customer_name)VALUES
(NEW.customerid,NEW.customer_address,NEW.customer_mobile,NEW.customer_name)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USER ID` varchar(20) NOT NULL,
  `LOGIN ROLE ID` varchar(20) NOT NULL,
  `LOGINUSERNAME` varchar(20) NOT NULL,
  `LOGINPASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USER ID`, `LOGIN ROLE ID`, `LOGINUSERNAME`, `LOGINPASSWORD`) VALUES
('admin123', 'admin', 'gun123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` varchar(20) NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `customerid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `payment_amount`, `payment_date`, `payment_method`, `customerid`) VALUES
('86347', 50000, '2022-02-10', 'CARD', '9854750'),
('09809', 35000, '2022-02-06', 'UPI', '25643'),
('74399', 60000, '2022-02-11', 'NET BANKING', '998609'),
('86347', 50000, '2022-02-10', 'CARD', '9854750'),
('78634', 60000, '2022-02-28', 'UPI', '9309');

-- --------------------------------------------------------

--
-- Table structure for table `singlenonacroom`
--

CREATE TABLE `singlenonacroom` (
  `sno` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `customerid` int(10) NOT NULL,
  `child` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `indate` date NOT NULL,
  `outdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `customer_address` varchar(250) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singlenonacroom`
--

INSERT INTO `singlenonacroom` (`sno`, `roomno`, `customerid`, `child`, `adult`, `indate`, `outdate`, `status`, `customer_address`, `customer_mobile`, `customer_name`) VALUES
(5, 200, 998609, 0, 1, '2022-02-05', '2022-02-11', 1, 'sarjapura,bangalore-29', '83749808', 'Himanshi'),
(6, 201, 984750, 2, 3, '2022-02-05', '2022-02-10', 1, 'kadbessanahalli,bangalore-36', '54235238392', 'yuthvik'),
(7, 202, 0, 0, 0, '0000-00-00', '0000-00-00', 0, '', '', '');

--
-- Triggers `singlenonacroom`
--
DELIMITER $$
CREATE TRIGGER `m_trig` AFTER UPDATE ON `singlenonacroom` FOR EACH ROW insert into customer (customerid,customer_address,customer_mobile,customer_name)VALUES
(NEW.customerid,NEW.customer_address,NEW.customer_mobile,NEW.customer_name)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `singleroom`
--

CREATE TABLE `singleroom` (
  `sno` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `customerid` int(10) NOT NULL,
  `child` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `indate` varchar(20) NOT NULL,
  `outdate` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `customer_address` varchar(250) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singleroom`
--

INSERT INTO `singleroom` (`sno`, `roomno`, `customerid`, `child`, `adult`, `indate`, `outdate`, `status`, `customer_address`, `customer_mobile`, `customer_name`) VALUES
(6, 100, 0, 0, 0, '', '', 0, '', '', ''),
(7, 101, 0, 0, 0, '', '', 0, '', '', ''),
(8, 102, 0, 0, 0, '', '', 0, '', '', '');

--
-- Triggers `singleroom`
--
DELIMITER $$
CREATE TRIGGER `my_trigger` AFTER UPDATE ON `singleroom` FOR EACH ROW insert into customer (customerid,customer_address,customer_mobile,customer_name)VALUES
(NEW.customerid,NEW.customer_address,NEW.customer_mobile,NEW.customer_name)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doubleroom`
--
ALTER TABLE `doubleroom`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LOGINUSERNAME`),
  ADD UNIQUE KEY `USER ID` (`USER ID`),
  ADD UNIQUE KEY `LOGIN ROLE ID` (`LOGIN ROLE ID`),
  ADD UNIQUE KEY `LOGINPASSWORD` (`LOGINPASSWORD`);

--
-- Indexes for table `singlenonacroom`
--
ALTER TABLE `singlenonacroom`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `singleroom`
--
ALTER TABLE `singleroom`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doubleroom`
--
ALTER TABLE `doubleroom`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `singlenonacroom`
--
ALTER TABLE `singlenonacroom`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `singleroom`
--
ALTER TABLE `singleroom`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`USER ID`) REFERENCES `user` (`USER ID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
