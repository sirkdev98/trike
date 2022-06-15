-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 02:29 PM
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
  `contactnumber` varchar(55) NOT NULL,
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

INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `extname`, `address1`, `barangay`, `contactnumber`, `sfname`, `smname`, `slaname`, `bday`, `type`, `licensenum`, `licensetype`, `licensevalid`, `picname`) VALUES
(1, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'JR', 'ASDA@ASDA.COM', 'Balut', '', 'JEEMAY', 'A', '', '2024-09-16', 'OPERATOR', '123PCSS', 'OPERATOR', '', ''),
(2, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'JR', 'ASDA@ASDA.COM', 'Balut', '', 'JEEMAY', 'A', 'LABRADOR', '2024-09-16', 'OPERATOR', '123PCSS', 'OPERATOR', '', ''),
(3, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'JR', 'ASDA@ASDA.COM', 'Balut', '', 'JEEMAY', 'A', 'LABRADOR', '2024-09-16', 'OPERATOR', '123PCSS', 'OPERATOR', '', ''),
(4, 'ali', 'rizal', 'tala', 'jr', 'pant@asd.com', 'Apollo', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '', 'OPERATOR', '2022-06-15', ''),
(5, 'ali', 'rizal', 'tala', 'jr', 'pant@asd.com', 'Apollo', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '', 'OPERATOR', '2022-06-15', ''),
(6, 'ali', 'rizal', 'tala', 'jr', 'pant@asd.com', 'Apollo', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '', 'OPERATOR', '2022-06-15', ''),
(7, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'ASDA@ASDA.COM', 'Apollo', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR/DRIVER', '123asd', 'OPERATOR/DRIVER', '2022-06-30', ''),
(8, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Apollo', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-21', 'OPERATOR', '123asd', 'OPERATOR', '2022-06-22', '62a830f9db213.png'),
(9, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Calero', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '123asd', 'OPERATOR', '2022-06-15', '62a8383831573.png'),
(10, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', '', 'pant@asd.com', 'Calero', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR', '123asd', 'OPERATOR', '2022-06-15', '62a838aaad124.png'),
(11, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Balut', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR/DRIVER', '123PCSS', 'OPERATOR', '2022-06-21', '62a839d09d403.png'),
(12, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'pant@asd.com', 'Balut', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'OPERATOR/DRIVER', '123PCSS', 'OPERATOR', '2022-06-21', '62a83aae57670.png'),
(13, 'Testing fname', 'Middle', 'Last', 'ext', 'Leona@asd.acom', '09275109013', 'Apollo', 'Testing fname', 'Testing fname', 'Testing fname', '2022-06-14', 'OPERATOR/DRIVER', '22112', 'OPERATOR', '2022-06-14', '62a8a8272cfac.png'),
(14, 'test2', 'test2', 'test2', 'test2', '22211@asd.com', '09275109013', 'Calero', 'Testing fname', 'Testing fname', 'Testing fname', '2022-06-14', 'OPERATOR/DRIVER', '22112', 'OPERATOR', '2022-06-15', '62a8a8e6ce47a.png'),
(15, 'OLIVERxxxxxxx', 'MATAWARANxxx', 'LALUNAxx', '123123', '', '', 'Balut', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-16', '', '123asd', 'OPERATOR/DRIVER', '', '62a98629823d5.png'),
(16, 'SUBOK', 'SUBOK', 'SUBOK', 'SUBOK', '', '', 'Apollo', 'NAME', 'OF', 'SPOUSE', '2022-06-22', '', '123asd', 'OPERATOR', '', '62a9869b5c963.png'),
(17, 'SUBOK', 'SUBOK', 'SUBOK', 'SUBOK', '', 'Apollo', '', 'NAME', 'OF', 'SPOUSE', '2022-06-22', '', '123asd', 'OPERATOR', '', '62a98751a9f63.png'),
(18, 'testadd', 'testtestest', 'testadddd', 'qwe', 'add@gawsd.com', 'Apollo', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-15', '', '1233321', 'OPERATOR', '', '62a987ff37faf.png'),
(19, 'testadd', 'testtestest', 'testadddd', 'qwe', 'add@gawsd.com', 'Apollo', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-15', '', '1233321', 'OPERATOR', '', '62a9883d4f830.png'),
(20, 'sir', 'k', 'l', 'ex', 'add@asd.com', 'Apollo', '090909090', 'khrisss', 'tiaan', 'vvvv', '2022-06-16', 'OPERATOR', 'liccc', '', '2022-06-15', '62a98873a6f38.png'),
(21, 'sir', 'k', 'l', 'ex', 'add@asd.com', 'Apollo', '090909090', 'khrisss', 'tiaan', 'vvvv', '2022-06-16', 'OPERATOR', 'liccc', 'OPERATOR', '2022-06-15', '62a98886dec55.png'),
(22, 'sir', 'k', 'l', 'ex', 'add@asd.com', 'Apollo', '090909090', 'khrisss', 'tiaan', 'vvvv', '2022-06-16', 'OPERATOR', 'liccc', '', '2022-06-15', '62a988d40f859.png'),
(23, 'aaaaOLIVER', 'aaaaaaaaaaMATAWARAN', 'aaaaaaaaLALUNA', 'a', 'ASDA@ASDA.COM', 'Apollo', '09082646040', 'tesst1', 'tesst2', 'tesst3', '2022-06-16', '', '123asd', 'OPERATOR', '2022-06-15', '62a98905bc766.png'),
(24, 'aaaaOLIVER', 'aaaaaaaaaaMATAWARAN', 'aaaaaaaaLALUNA', 'a', 'ASDA@ASDA.COM', 'Apollo', '09082646040', 'tesst1', 'tesst2', 'tesst3', '2022-06-16', '', '123asd', 'OPERATOR', '2022-06-15', '62a98a12a3195.png'),
(25, 'aaaaOLIVER', 'aaaaaaaaaaMATAWARAN', 'aaaaaaaaLALUNA', 'a', 'ASDA@ASDA.COM', 'Apollo', '09082646040', 'tesst1', 'tesst2', 'tesst3', '2022-06-16', '', '123asd', 'OPERATOR', '2022-06-15', '62a98a43984cd.png'),
(26, 'SSSSSS', 'DDDDDDDDD', 'FFFFFFf', 'G', 'address', 'Apollo', '09090909', 'Khristian', 'Harold', 'Vicente', '2022-06-15', 'DRIVER', '123asd', 'OPERATOR', '2022-06-15', '62a98a8b1becf.png'),
(27, 'SSSSSS', 'DDDDDDDDD', 'FFFFFFf', 'G', 'address', 'Apollo', '09090909', 'Khristian', 'Harold', 'Vicente', '2022-06-15', 'DRIVER', '123asd', 'OPERATOR', '2022-06-15', '62a98c3c4ee18.png'),
(28, 'Heyy', 'Heyy', 'Heyy', 'Heyy', '092755555', 'Apollo', '09275109013', 'Heyy', 'Heyy', 'Heyy', '2022-06-16', 'DRIVER', '123asd', 'OPERATOR', '2022-06-16', '62a98cc960a9e.png'),
(29, 'Heyy', 'Heyy', 'Heyy', 'Heyy', '092755555', 'Apollo', '09275109013', 'Heyy', 'Heyy', 'Heyy', '2022-06-16', 'DRIVER', '123asd', 'OPERATOR', '2022-06-16', '62a98dc976467.png'),
(30, 'Try', 'my ', 'best', 'hehe', 'orani', 'Apollo', '12345678901', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-15', 'DRIVER', '123asd', 'OPERATOR', '2022-06-16', '62a990fcb85e7.png'),
(31, 'OLIVER', 'MATAWARAN', 'LALUNA', 'jr', 'TALA', 'Apollo', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-29', 'DRIVER', 'liccc', 'OPERATOR', '2022-06-23', '62a9916b1e2dd.png'),
(32, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'TALA', 'Balut', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-14', 'DRIVER', '1233321', 'OPERATOR/DRIVER', '2022-06-16', '62a9991060701.png');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(55) NOT NULL,
  `bdynumber` varchar(55) NOT NULL,
  `trikeid` varchar(55) NOT NULL,
  `driverid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `bdynumber`, `trikeid`, `driverid`) VALUES
(1, '1234', '', '30'),
(2, '1234', '5', '31'),
(3, '1234', '5', '32');

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
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
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
  `operatorid` varchar(50) NOT NULL,
  `toda` varchar(55) NOT NULL,
  `sidecarcolor` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tricycle`
--

INSERT INTO `tricycle` (`id`, `fname`, `mname`, `lname`, `mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `pistondisp`, `cor`, `ornum`, `franchisedate`, `brgycode`, `bodynum`, `operatorid`, `toda`, `sidecarcolor`) VALUES
(1, 'khristian', 'perez', 'vicente', '11', '222', '333', '444', 'tttt', 'ppp', '555', '666', '2022-06-14', '12', '3456', '10', 'TOTODA', 'Red'),
(2, '', '', '', '3333', '4444', '5555', '6666', 'toyota', 'yea', 'cert1', 'or112', '2022-06-21', '12', '1234', '11', 'TOTODA', 'Red'),
(3, '', '', '', '3333', '4444', '5555', '6666', 'toyota', 'yea', 'cert1', 'or112', '2022-06-21', '12', '1234', '12', 'TOTODA', 'Red'),
(4, '', '', '', '22', '22', '22', '221', 'asd', 'asd', 'asd', 'asdq', '2022-06-15', '22', '1234', '13', 'TOTODA', 'Red'),
(5, 'test2', 'test2', 'test2', '22', '22', '22', '123', 'asd', 'asd', '123', '22112', '2022-06-15', '22', '1234', '14', 'TOTODA', 'Red');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driveroperator`
--
ALTER TABLE `driveroperator`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
