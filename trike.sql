-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 09:38 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trike`
--

-- --------------------------------------------------------

--
-- Table structure for table `driveroperator`
--

CREATE TABLE `driveroperator` (
  `pid` int(150) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `extname` varchar(55) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `sfname` varchar(50) NOT NULL,
  `smname` varchar(50) NOT NULL,
  `slaname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `licensenum` varchar(50) NOT NULL,
  `licensetype` varchar(50) NOT NULL,
  `licensevalid` varchar(50) NOT NULL,
  `picname` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driveroperator`
--

INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `extname`, `address1`, `barangay`, `sfname`, `smname`, `slaname`, `bday`, `type`, `licensenum`, `licensetype`, `licensevalid`, `picname`) VALUES
(1, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'JR', 'ASDA@ASDA.COM', 'Balut', 'JEEMAY', 'A', '', '2024-09-16', 'OPERATOR', '123PCSS', 'OPERATOR', '', ''),
(2, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'JR', 'ASDA@ASDA.COM', 'Balut', 'JEEMAY', 'A', 'LABRADOR', '2024-09-16', 'OPERATOR', '123PCSS', 'OPERATOR', '', ''),
(3, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'JR', 'ASDA@ASDA.COM', 'Balut', 'JEEMAY', 'A', 'LABRADOR', '2024-09-16', 'OPERATOR', '123PCSS', 'OPERATOR', '', ''),
(4, 'ali', 'rizal', 'tala', 'jr', 'pant@asd.com', 'Apollo', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '', 'OPERATOR', '2022-06-15', ''),
(5, 'ali', 'rizal', 'tala', 'jr', 'pant@asd.com', 'Apollo', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '', 'OPERATOR', '2022-06-15', ''),
(6, 'ali', 'rizal', 'tala', 'jr', 'pant@asd.com', 'Apollo', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '', 'OPERATOR', '2022-06-15', ''),
(7, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'ASDA@ASDA.COM', 'Apollo', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR/DRIVER', '123asd', 'OPERATOR/DRIVER', '2022-06-30', ''),
(8, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Apollo', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-21', 'OPERATOR', '123asd', 'OPERATOR', '2022-06-22', '62a830f9db213.png'),
(9, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Calero', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '123asd', 'OPERATOR', '2022-06-15', '62a8383831573.png'),
(10, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Calero', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '123asd', 'OPERATOR', '2022-06-15', '62a838aaad124.png'),
(11, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Balut', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR/DRIVER', '123PCSS', 'OPERATOR', '2022-06-21', '62a839d09d403.png'),
(12, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Balut', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR/DRIVER', '123PCSS', 'OPERATOR', '2022-06-21', '62a83aae57670.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `middle_name` varchar(32) NOT NULL,
  `role` varchar(24) NOT NULL,
  `position` varchar(100) NOT NULL,
  `mac_address` varchar(32) NOT NULL,
  `date_reg` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `first_name`, `last_name`, `middle_name`, `role`, `position`, `mac_address`, `date_reg`) VALUES
(2, 'admin', 'admin1', 'Khristian Harold', 'Vicente', '', 'ADMIN', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tricycle`
--

CREATE TABLE `tricycle` (
  `id` int(120) NOT NULL,
  `mvfileno` varchar(50) NOT NULL,
  `plateno` varchar(50) NOT NULL,
  `engineno` varchar(50) NOT NULL,
  `chasisno` varchar(50) NOT NULL,
  `maker` varchar(50) NOT NULL,
  `pistondisp` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `ornum` varchar(50) NOT NULL,
  `franchisedate` varchar(50) NOT NULL,
  `brgycode` varchar(22) NOT NULL,
  `bodynum` varchar(50) NOT NULL,
  `operatorid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tricycle`
--

INSERT INTO `tricycle` (`id`, `mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `pistondisp`, `cor`, `ornum`, `franchisedate`, `brgycode`, `bodynum`, `operatorid`) VALUES
(1, '11', '222', '333', '444', 'tttt', 'ppp', '555', '666', '2022-06-14', '12', '3456', '10'),
(2, '3333', '4444', '5555', '6666', 'toyota', 'yea', 'cert1', 'or112', '2022-06-21', '12', '1234', '11'),
(3, '3333', '4444', '5555', '6666', 'toyota', 'yea', 'cert1', 'or112', '2022-06-21', '12', '1234', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driveroperator`
--
ALTER TABLE `driveroperator`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tricycle`
--
ALTER TABLE `tricycle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driveroperator`
--
ALTER TABLE `driveroperator`
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
