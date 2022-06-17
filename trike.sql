-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 07:09 PM
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
(39, 'Testing fname', 'Middle', 'Last', 'ext', 'SUBOK@gnau.com', '09275109013', 'Apollo', 'Testing fname', 'Testing fname', 'Testing fname', '2022-06-17', 'OPERATOR/DRIVER', '22112', 'OPERATOR/DRIVER', '2022-06-17', '62ac858c64b3a.png'),
(40, 'Testing fname', 'Middle', 'Last', 'ext', 'Leona@asd.acom', 'Balut', '123123', 'Testing fname', 'Testing fname', 'SUBOK', '2022-06-17', 'DRIVER', '22112', 'OPERATOR', '2022-06-17', '62ac91642c074.png'),
(41, 'Testing fname', 'Middle', 'Last', 'ext', 'SUBOK@gnau.com', '22133', 'Apollo', 'Testing fname', 'Testing fname', 'Testing fname', '2022-06-17', 'OPERATOR', '22112', 'OPERATOR', '2022-06-18', '62aca4b0c9fa2.png'),
(42, 'PUBLIC', 'PUBLIC', 'PUBLIC', 'PUBLIC', 'asdasd@ASD.COM', '123123', 'Apollo', 'Testing fname', 'Testing fname', 'Testing fname', '2022-06-18', 'OPERATOR', '22112', 'OPERATOR', '2022-06-25', '62aca5ce71f0f.png');

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
(1, '1233', '10', '40');

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `id` int(11) NOT NULL,
  `sidecar_windshield` varchar(55) NOT NULL,
  `funcitioning_horn` varchar(50) NOT NULL,
  `signal_lights` varchar(55) NOT NULL,
  `tail_lights` varchar(55) NOT NULL,
  `topchain_cover` varchar(55) NOT NULL,
  `whitered_headlights` varchar(55) NOT NULL,
  `light_inside` varchar(55) NOT NULL,
  `mufflers` varchar(55) NOT NULL,
  `roof` varchar(55) NOT NULL,
  `side_mirrors` varchar(55) NOT NULL,
  `upholstery` varchar(55) NOT NULL,
  `wheels` varchar(55) NOT NULL,
  `remarks` varchar(55) NOT NULL,
  `trikeid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`id`, `sidecar_windshield`, `funcitioning_horn`, `signal_lights`, `tail_lights`, `topchain_cover`, `whitered_headlights`, `light_inside`, `mufflers`, `roof`, `side_mirrors`, `upholstery`, `wheels`, `remarks`, `trikeid`) VALUES
(5, 'sidecar_windshield', 'funcitioning_horn', 'signal_lights', 'tail_lights', 'topchain_cover', 'whitered_headlights', 'light_inside', 'mufflers', 'roof	', 'side_mirrors', 'upholstery', 'wheels', 'remarks', '10'),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '11'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', '12');

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
  `sidecarcolor` varchar(55) NOT NULL,
  `inspectionstat` varchar(55) NOT NULL,
  `classification` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tricycle`
--

INSERT INTO `tricycle` (`id`, `fname`, `mname`, `lname`, `mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `pistondisp`, `cor`, `ornum`, `franchisedate`, `brgycode`, `bodynum`, `operatorid`, `toda`, `sidecarcolor`, `inspectionstat`, `classification`) VALUES
(10, 'Testing fname', 'Middle', 'Last', 'asdasd', 'SUBOK', 'SUBOK', 'SUBOK', 'SUBOK', 'asd', 'SUBOK', 'SUBOK', '2022-06-17', '22', '1233', '39', '', '', '', 'Utility'),
(11, 'Testing fname', 'Middle', 'Last', 'asdasd', 'SUBOK', 'SUBOK', 'SUBOK', 'SUBOK', 'asd', 'SUBOK', 'SUBOK', '2022-06-17', '22', '1233', '41', '', '', '', 'Public'),
(12, 'PUBLIC', 'PUBLIC', 'PUBLIC', 'asdasd', 'SUBOK', 'SUBOK', 'SUBOK', 'SUBOK', 'asd', 'SUBOK', 'SUBOK', '2022-06-18', '22', '1234', '42', '', '', '', 'Family');

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
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
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
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
