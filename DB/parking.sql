-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 09:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(2, 'Shreedhar', 'Bhandari', 'shreedhar@gmail.com', '9585b59133b3bad6f25708a14af26b97', '9841204411', 'superadmin', 'active'),
(4, 'Abhishek', 'Karki', 'abhishek@gmail.com', 'f589a6959f3e04037eb2b3eb0ff726ac', '9808831720', 'superadmin', 'active');

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
  `entry_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`book_id`, `type`, `location`, `number`, `contact`, `entry_time`, `amount`) VALUES
(8, 'two', '2', 'ba2pa2222', '2222222222', '2018-12-07 04:22:18', '10'),
(10, 'two', '2', 'ba3pa3333', '4820523000', '2018-12-07 04:37:09', '10'),
(13, 'two', '2', 'ba1pa1111', '1111111111', '2018-12-07 07:14:40', NULL),
(14, 'two', '2', 'ba1pa1111', '1111111111', '2018-12-07 07:16:34', NULL),
(15, 'four', '3', 'ka34tyla', '9867452345', '2018-12-07 07:19:04', NULL);

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
(6, 'Sanima Bank', 25, 50, 75);

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
('Sanima Bank', 'Naxal', 'FourWheeler TwoWheeler ', '56', '60', 25, 15, 3, 'yes', 0, 1, 25, 14);

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
  `sec_location` varchar(20) NOT NULL,
  `sec_locid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_securitylogin`
--

INSERT INTO `tbl_securitylogin` (`sec_id`, `sec_fname`, `sec_lname`, `sec_email`, `sec_password`, `sec_phoneno`, `sec_location`, `sec_locid`) VALUES
(1, 'subin', 'adhikari', 'subin@gmail.com', '95c31bc0ebabaac9eda009feaa8cd7ad', 9860275399, '0', 0),
(2, 'Avisek', 'Karki', 'avisek@gmail.com', '198e9fe27bbeeb89537ba8a93eb39b92', 9867542345, 'city center', 0),
(3, 'Ram', 'Lama', 'ram@gmail.com', '4641999a7679fcaef2df0e26d11e3c72', 9845667899, '', 0),
(4, 'Avisek', 'Karki', 'avisek@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 981111111, '3', 0),
(6, 'Avisek', 'Karki', 'avisek@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 981111111, '3', 0),
(7, 'Hari', 'Lal', 'hari@gmail.com', 'a9bcf1e4d7b95a22e2975c812d938889', 9841204411, '3', 0);

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
  MODIFY `adm_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `book_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_cashcollection`
--
ALTER TABLE `tbl_cashcollection`
  MODIFY `cash_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_parkingreg`
--
ALTER TABLE `tbl_parkingreg`
  MODIFY `park_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_securitylogin`
--
ALTER TABLE `tbl_securitylogin`
  MODIFY `sec_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
