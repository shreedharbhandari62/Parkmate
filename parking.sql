-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminllogin`
--

CREATE TABLE `tbl_adminllogin` (
  `adm_id` bigint(20) NOT NULL,
  `adm_fname` varchar(25) DEFAULT NULL,
  `adm_lname` varchar(25) DEFAULT NULL,
  `adm_email` varchar(50) DEFAULT NULL,
  `adm_password` varchar(255) DEFAULT NULL,
  `adm_phone` varchar(50) DEFAULT NULL,
  `adm_role` enum('superadmin','subadmin') DEFAULT NULL,
  `adm_status` enum('active','inactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adminllogin`
--

INSERT INTO `tbl_adminllogin` (`adm_id`, `adm_fname`, `adm_lname`, `adm_email`, `adm_password`, `adm_phone`, `adm_role`, `adm_status`) VALUES
(2, 'Shreedhar', 'Bhandari', 'shreedhar@gmail.com', '9585b59133b3bad6f25708a14af26b97', '9841204411', 'superadmin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `book_id` bigint(20) NOT NULL,
  `type` enum('two','four') DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `contact` varchar(20) NOT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`book_id`, `type`, `location`, `number`, `contact`, `entry_time`, `amount`) VALUES
(20, 'two', '3', '12345678', '9841204411', '2018-12-07 11:26:45', NULL),
(22, 'two', '3', '12345', '9841204411', '2018-12-07 14:21:09', NULL),
(23, 'two', '3', '12345678', '9841204411', '2018-12-07 14:21:48', NULL),
(24, 'four', '3', 'efgh', '9823124321', '2018-12-07 14:22:16', NULL),
(25, 'two', '3', 'ba10pa20', '9841204411', '2018-12-07 14:31:57', NULL),
(26, 'two', '3', '12345678', '9841204411', '2018-12-07 14:43:13', NULL),
(27, 'four', '5', '12345678', '9841204411', '2018-12-07 14:43:31', NULL),
(28, 'four', '5', 'baek12four', '9823124320', '2018-12-07 14:43:53', NULL),
(29, 'four', '5', 'ba10pa6254', '9773567182', '2018-12-07 14:44:20', NULL),
(30, 'two', '5', '12345', '9841204411', '2018-12-07 14:50:30', NULL),
(31, 'two', '5', '54321', '9823124320', '2018-12-07 14:50:43', NULL),
(32, 'two', '5', '2312w', '9841204411', '2018-12-07 14:50:50', NULL),
(33, 'two', '5', 'ba10pa6254', '9841204411', '2018-12-07 14:51:05', NULL),
(34, 'two', '4', 'ba10pa6254', '9841204411', '2018-12-07 16:01:27', '10'),
(36, 'two', '6', 'bapa123', '9841204411', '2019-06-19 14:33:57', '10'),
(37, 'four', '6', 'bapa1234', '9841204411', '2019-06-19 14:36:41', '20'),
(38, 'four', '6', 'bapa1234', '8219738912', '2019-06-19 14:37:41', '20'),
(39, 'four', '6', 'bapa1234', '9012398123', '2019-06-19 14:38:00', '20'),
(40, 'four', '6', 'bapa1234', '1230997701', '2019-06-19 14:38:16', '20'),
(41, 'two', '3', '12345', '9841204411', '2019-12-13 05:04:10', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cashcollection`
--

CREATE TABLE `tbl_cashcollection` (
  `cash_id` bigint(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `two_wheelers_amount` bigint(50) NOT NULL,
  `four_wheelers_amount` bigint(50) NOT NULL,
  `total_amount` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cashcollection`
--

INSERT INTO `tbl_cashcollection` (`cash_id`, `address`, `two_wheelers_amount`, `four_wheelers_amount`, `total_amount`) VALUES
(5, 'CityCenter', 220, 245, 465),
(6, 'Sanima Bank', 25, 460, 485),
(7, 'KIST College', 10, 20, 30),
(8, 'Nagpokhari  center', 0, 0, 0),
(9, 'KIST College', 10, 20, 30),
(10, 'Patan Mandir', 0, 0, 0),
(11, 'Kapan Mall', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parkingreg`
--

CREATE TABLE `tbl_parkingreg` (
  `park_location` varchar(50) DEFAULT NULL,
  `park_address` varchar(50) DEFAULT NULL,
  `park_vehicle` varchar(255) DEFAULT NULL,
  `park_location_latitude` varchar(50) DEFAULT NULL,
  `park_location_longitude` varchar(50) DEFAULT NULL,
  `park_capacity_twowheelers` bigint(20) DEFAULT NULL,
  `park_capacity_fourwheelers` bigint(20) NOT NULL,
  `park_id` bigint(20) NOT NULL,
  `parking_available` enum('yes','no') NOT NULL,
  `park_booked_twowheelers` bigint(20) NOT NULL,
  `park_booked_fourwheelers` bigint(20) NOT NULL,
  `park_rem_twowheelers` bigint(20) NOT NULL,
  `park_rem_fourwheelers` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parkingreg`
--

INSERT INTO `tbl_parkingreg` (`park_location`, `park_address`, `park_vehicle`, `park_location_latitude`, `park_location_longitude`, `park_capacity_twowheelers`, `park_capacity_fourwheelers`, `park_id`, `parking_available`, `park_booked_twowheelers`, `park_booked_fourwheelers`, `park_rem_twowheelers`, `park_rem_fourwheelers`) VALUES
('Sanima Bank', 'Naxal', 'FourWheeler TwoWheeler ', '56', '60', 25, 15, 3, 'yes', 6, 1, 19, 14),
('KIST College', 'Kamalpokhari', 'FourWheeler TwoWheeler ', '20', '4321', 23, 4, 6, 'yes', 1, 4, 22, 0),
('Patan Mandir', 'Patan', 'FourWheeler TwoWheeler ', '712368716387', '1293698721798', 14, 5, 7, 'yes', 0, 0, 14, 5),
('Kapan Mall', 'Kapan', 'FourWheeler TwoWheeler ', '12345678', '87654321', 90, 40, 8, 'yes', 0, 0, 90, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_securitylogin`
--

CREATE TABLE `tbl_securitylogin` (
  `sec_id` bigint(20) NOT NULL,
  `sec_fname` varchar(50) NOT NULL,
  `sec_lname` varchar(50) NOT NULL,
  `sec_email` varchar(255) NOT NULL,
  `sec_password` varchar(255) NOT NULL,
  `sec_phoneno` bigint(20) NOT NULL,
  `sec_location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_securitylogin`
--

INSERT INTO `tbl_securitylogin` (`sec_id`, `sec_fname`, `sec_lname`, `sec_email`, `sec_password`, `sec_phoneno`, `sec_location`) VALUES
(11, 'Ram', 'Lama', 'ram@gmail.com', '4641999a7679fcaef2df0e26d11e3c72', 9841204411, '3'),
(12, 'Bishal', 'Panta', 'bishal@gmail.com', '1adb27fabdfee91e29a94e3fb02e08bc', 9820456789, '5'),
(13, 'Hari', 'Sharma', 'hari@gmail.com', 'a9bcf1e4d7b95a22e2975c812d938889', 9867000000, '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adminllogin`
--
ALTER TABLE `tbl_adminllogin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_cashcollection`
--
ALTER TABLE `tbl_cashcollection`
  ADD PRIMARY KEY (`cash_id`);

--
-- Indexes for table `tbl_parkingreg`
--
ALTER TABLE `tbl_parkingreg`
  ADD PRIMARY KEY (`park_id`);

--
-- Indexes for table `tbl_securitylogin`
--
ALTER TABLE `tbl_securitylogin`
  ADD PRIMARY KEY (`sec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adminllogin`
--
ALTER TABLE `tbl_adminllogin`
  MODIFY `adm_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `book_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_cashcollection`
--
ALTER TABLE `tbl_cashcollection`
  MODIFY `cash_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_parkingreg`
--
ALTER TABLE `tbl_parkingreg`
  MODIFY `park_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_securitylogin`
--
ALTER TABLE `tbl_securitylogin`
  MODIFY `sec_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
