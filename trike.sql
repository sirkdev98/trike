-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 05:51 PM
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
(45, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'JR', 'LEONA SUBD', 'Balut', '09275109013', 'JEEMAY', 'ANGELES', 'LABRADOR', '2022-06-24', 'OPERATOR', 'COA2211029', 'NON-PROFESSIONAL', '2031-05-23', '62b52ef09cf56.png'),
(46, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'TALA', 'Balut', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-02', 'DRIVER', '123PCSS', 'PROFESSIONAL', '2022-05-31', '62b677e3950b3.png'),
(47, 'Test driver', 'Test driver', 'Test driver', '', 'asdas', 'Apollo', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-06-07', 'DRIVER', '123PCSS', 'NON-PROFESSIONAL', '2022-06-23', '62b67a963ad4b.png');

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
(9, '2221', '15', '123'),
(10, '2221', '15', '47');

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
(10, 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', '15'),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '16'),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', '17'),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', '18'),
(14, '', '', '', '', '', '', '', '', '', '', '', '', '', '19'),
(15, '', '', '', '', '', '', '', '', '', '', '', '', '', '20'),
(16, '', '', '', '', '', '', '', '', '', '', '', '', '', '21'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '22');

-- --------------------------------------------------------

--
-- Table structure for table `mtop`
--

CREATE TABLE `mtop` (
  `id` int(50) NOT NULL,
  `mtopdate` date NOT NULL,
  `mtopexpiration` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `mtopyear` varchar(50) NOT NULL,
  `trikeid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `toda`
--

CREATE TABLE `toda` (
  `id` int(55) NOT NULL,
  `toda` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `description` varchar(51) NOT NULL,
  `color` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toda`
--

INSERT INTO `toda` (`id`, `toda`, `barangay`, `description`, `color`) VALUES
(1, 'MUTODA', 'MULAWIN', '', 'RED'),
(2, 'BATODA', 'BALUT', '', 'BLUE');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(50) NOT NULL,
  `transaction` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `trikeid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(15, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', '00122921', 'ZXC 231', '8891228', '25112', 'KAWASAKI', 'YES', '21002', '90221', '2022-06-24', '12', '2221', '45', '', '', '', 'Public'),
(16, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', '231', '123123', '1231', '1312', 'asdad', 'ppp', 'adasd', '12313', '2022-06-24', '12', '1231', '45', '', '', '', 'Public'),
(17, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', '231', '123123', '123123', '123123', 'qwe', 'qwe', '123123', '90221', '2022-06-24', '11', '2512', '45', '', '', '', 'Public'),
(18, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'asdasd', 'SUBOK', 'SUBOK', 'SUBOK', 'asd', 'asd', 'SUBOK', 'SUBOK', '2022-06-16', '33', '1234', '45', '', '', '', 'Public'),
(19, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'asdasd', '22', '052389', '221', 'asd', 'qwe', 'asd', 'asdq', '2022-06-26', '12', '2211', '45', '', 'BLUE', '', 'Public'),
(20, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', '22', '22', '052389', '221', 'asd', 'qwe', 'asd', 'asdq', '2022-06-26', '23', '1244', '45', 'MUTODA', 'WHITE', '', 'Public'),
(21, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', 'asdasd', '22', 'SUBOK', '221', 'asd', 'qwe', '123', '22112', '2022-06-26', '22', '1234', '45', 'MUTODA', '', '', 'Public'),
(22, 'KHRISTIAN HAROLD', 'PEREZ', 'VICENTE', '22', '22', '052389', '221', 'asd', 'qwe', 'asd', 'asdq', '2022-06-26', '33', '2231', '45', 'MUTODA', 'RED', '', 'Utility');

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
-- Indexes for table `mtop`
--
ALTER TABLE `mtop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `toda`
--
ALTER TABLE `toda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mtop`
--
ALTER TABLE `mtop`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `toda`
--
ALTER TABLE `toda`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
