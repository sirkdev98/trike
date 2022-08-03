-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 10:00 AM
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
  `gender` varchar(50) NOT NULL,
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

INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `gender`, `extname`, `address1`, `barangay`, `contactnumber`, `sfname`, `smname`, `slaname`, `bday`, `type`, `licensenum`, `licensetype`, `licensevalid`, `picname`) VALUES
(104, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', '', 'TALA', 'BALUT', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-24', 'OPERATOR', '1233321', 'PROFESSIONAL', '2022-08-03', '62e9c759b16d4.jpeg'),
(105, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', '', 'TALA', 'PACAR', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-23', 'OPERATOR', 'liccc', 'PROFESSIONAL', '2022-08-03', '62e9caae46e10.jpeg');

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

-- --------------------------------------------------------

--
-- Table structure for table `dropped`
--

CREATE TABLE `dropped` (
  `dropid` int(11) NOT NULL,
  `dmvfileno` varchar(55) NOT NULL,
  `dplateno` varchar(55) NOT NULL,
  `dengineno` varchar(55) NOT NULL,
  `dchasisno` varchar(55) NOT NULL,
  `dmaker` varchar(55) NOT NULL,
  `dmotorcolor` varchar(55) NOT NULL,
  `dpistondisp` varchar(55) NOT NULL,
  `dcor` varchar(55) NOT NULL,
  `dornum` varchar(55) NOT NULL,
  `trikeid` varchar(55) NOT NULL,
  `remarks` varchar(55) NOT NULL,
  `dropdate` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `franchiserecord`
--

CREATE TABLE `franchiserecord` (
  `id` int(55) NOT NULL,
  `franchiseapplication` date NOT NULL,
  `franchiseapproval` date NOT NULL,
  `franchiseexpiration` date NOT NULL,
  `trikeid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `franchiserecord`
--

INSERT INTO `franchiserecord` (`id`, `franchiseapplication`, `franchiseapproval`, `franchiseexpiration`, `trikeid`) VALUES
(27, '2022-08-03', '2022-08-08', '2025-08-08', '3124'),
(28, '2022-09-02', '0000-00-00', '0000-00-00', '3125'),
(29, '2022-09-08', '0000-00-00', '0000-00-00', '3126'),
(30, '2022-08-03', '0000-00-00', '0000-00-00', '3127'),
(31, '2022-08-03', '0000-00-00', '0000-00-00', '3128');

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
  `remarks` varchar(105) NOT NULL,
  `trikeid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`id`, `sidecar_windshield`, `funcitioning_horn`, `signal_lights`, `tail_lights`, `topchain_cover`, `whitered_headlights`, `light_inside`, `mufflers`, `roof`, `side_mirrors`, `upholstery`, `wheels`, `remarks`, `trikeid`) VALUES
(77, 'OK', 'OK', 'OK', 'OK', '', '', '', '', '', '', '', '', '', '3124'),
(78, '', '', '', '', '', '', '', '', '', '', '', '', '', '3125'),
(79, '', '', '', '', '', '', '', '', '', '', '', '', '', '3126'),
(80, '', '', '', '', '', '', '', '', '', '', '', '', '', '3127'),
(81, '', '', '', '', '', '', '', '', '', '', '', '', '', '3128');

-- --------------------------------------------------------

--
-- Table structure for table `mtop`
--

CREATE TABLE `mtop` (
  `id` int(55) NOT NULL,
  `mtopfee` varchar(55) NOT NULL,
  `annualstickerfee` varchar(55) NOT NULL,
  `mtopplatefee` varchar(55) NOT NULL,
  `operatoridfee` varchar(55) NOT NULL,
  `driveridfee` varchar(55) NOT NULL,
  `parkingfee` varchar(55) NOT NULL,
  `droppingfee` varchar(55) NOT NULL,
  `confirmationfee` varchar(55) NOT NULL,
  `certificationofnorecordfee` varchar(55) NOT NULL,
  `transferfee` varchar(55) NOT NULL,
  `farematrix` varchar(55) NOT NULL,
  `bodynumberstickerfee` varchar(55) NOT NULL,
  `environmentalfee` varchar(55) NOT NULL,
  `mtoptotal` varchar(55) NOT NULL,
  `mtopdate` varchar(55) NOT NULL,
  `mtopexpiration` varchar(55) NOT NULL,
  `renewaldate` varchar(55) NOT NULL,
  `penalty` varchar(55) NOT NULL,
  `trikeid` varchar(55) NOT NULL,
  `status` varchar(213) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtop`
--

INSERT INTO `mtop` (`id`, `mtopfee`, `annualstickerfee`, `mtopplatefee`, `operatoridfee`, `driveridfee`, `parkingfee`, `droppingfee`, `confirmationfee`, `certificationofnorecordfee`, `transferfee`, `farematrix`, `bodynumberstickerfee`, `environmentalfee`, `mtoptotal`, `mtopdate`, `mtopexpiration`, `renewaldate`, `penalty`, `trikeid`, `status`) VALUES
(14, '200', '', '', '', '', '', '', '', '', '', '', '', '', '200', '2022-08-03', '2023-12-31', '', '', '3124', 'paid'),
(15, '200', '150', '250', '', '', '', '', '', '', '', '', '', '', '600', '2022-08-03', '2023-12-31', '', '', '3125', 'paid'),
(16, '200', '', '', '', '', '', '', '', '', '', '', '', '', '200', '2022-08-03', 'pending', '', '', '3126', 'pending'),
(17, '200', '', '', '', '', '', '', '', '', '', '', '', '', '200', '2022-08-03', '2023-12-31', '', '', '3127', 'paid'),
(18, '200', '', '', '', '', '', '', '', '', '', '', '', '', '200', '2022-08-03', '$11Asia/Manila3108312023p23Asia/ManilaamThu, 03 Aug 202', '', '', '3128', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `mtopamount`
--

CREATE TABLE `mtopamount` (
  `id` int(55) NOT NULL,
  `mtopfee` varchar(55) NOT NULL,
  `annualstickerfee` varchar(55) NOT NULL,
  `mtopplatefee` varchar(55) NOT NULL,
  `operatoridfee` varchar(55) NOT NULL,
  `driveridfee` varchar(55) NOT NULL,
  `parkingfee` varchar(55) NOT NULL,
  `droppingfee` varchar(55) NOT NULL,
  `confirmationfee` varchar(55) NOT NULL,
  `certificationofnorecordfee` varchar(55) NOT NULL,
  `transferfee` varchar(55) NOT NULL,
  `farematrix` varchar(55) NOT NULL,
  `bodynumberstickerfee` varchar(55) NOT NULL,
  `environmentalfee` varchar(55) NOT NULL,
  `penalty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtopamount`
--

INSERT INTO `mtopamount` (`id`, `mtopfee`, `annualstickerfee`, `mtopplatefee`, `operatoridfee`, `driveridfee`, `parkingfee`, `droppingfee`, `confirmationfee`, `certificationofnorecordfee`, `transferfee`, `farematrix`, `bodynumberstickerfee`, `environmentalfee`, `penalty`) VALUES
(1, '200', '150', '250', '25', '25', '35', '60', '100', '100', '1000', '50', '300', '75', '50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `paymentid` int(55) NOT NULL,
  `payable` varchar(55) NOT NULL,
  `amount` varchar(55) NOT NULL,
  `ornumber` varchar(55) NOT NULL,
  `trikeid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`paymentid`, `payable`, `amount`, `ornumber`, `trikeid`) VALUES
(10, 'Confirmation', '60', '2222', '3124');

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
(2, 'admin', 'admin1', 'Khristian Harold', 'Vicente', '', 'ADMIN', '', '', '0000-00-00 00:00:00'),
(3, 'otro1', 'otro1', 'Anicia', 'Macauba', 'Amor', 'admin', 'otro', '', '0000-00-00 00:00:00'),
(4, 'otro2', 'otro2', 'Teresita', 'Bianzon', '', 'admin', 'OIC-OTRO', '', '0000-00-00 00:00:00'),
(5, 'otro3', 'otro3', 'John Nori', 'Pili', 'Amor', 'admin', 'Otro Staff', '', '0000-00-00 00:00:00'),
(6, 'otro4', 'otro4', 'Vergz', 'Sulangi', '', 'admin', 'Otro Staff', '', '0000-00-00 00:00:00'),
(7, 'mayor', 'mayor1', 'EFREN', 'PASCUAL, JR.', 'E.', 'admin', 'MUNICIPAL MAYOR', '', '0000-00-00 00:00:00');

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
(3, 'APOTODA', '', '', 'GREEN'),
(4, 'BACMATODA', '', '', 'GREEN'),
(5, 'BALTODA 1', '', '', 'RED'),
(6, 'BALTODA 2', '', '', 'RED'),
(7, 'BAMODA', '', '', 'GREEN'),
(8, 'BASITODA', '', '', 'BLUE'),
(9, 'CALTODA', '', '', 'YELLOW'),
(10, 'DATTODA', '', '', 'RED'),
(11, 'GUECO-PARAISOTODA', '', '', 'GREEN'),
(12, 'KABALUTANTODA', '', '', 'RED'),
(13, 'KAMADO', '', '', 'GREEN'),
(14, 'KATODA', '', '', 'WHITE'),
(15, 'LOTODA', '', '', 'BLUE'),
(16, 'MARIAFETODA', '', '', 'GREEN'),
(17, 'MASTODA', '', '', 'YELLOW'),
(18, 'METODA', '', '', 'GREEN'),
(19, 'MPTODA', '', '', 'GREEN'),
(20, 'MTTODA', '', '', 'GREEN'),
(21, 'MUTODA', '', '', 'GREEN'),
(22, 'NVLTODA', '', '', 'WHITE'),
(23, 'NVMHTODA', '', '', 'WHITE'),
(24, 'OPMTODA', '', '', 'GREEN'),
(25, 'OPTODA', '', '', 'BLUE'),
(26, 'OTTODA', '', '', 'WHITE'),
(27, 'P.B.TODA', '', '', 'YELLOW'),
(28, 'PACARTODA', '', '', 'YELLOW'),
(29, 'PALTODA', '', '', 'YELLOW'),
(30, 'PANT. LUMA PH. 2TODA', '', '', 'BLUE'),
(31, 'PAPATODA', '', '', 'YELLOW'),
(32, 'PAPTODA', '', '', 'BLUE'),
(33, 'PARATODA', '', '', 'GREEN'),
(34, 'PETODA', '', '', 'GREEN'),
(35, 'PIL TODA 1', '', '', 'YELLOW'),
(36, 'PIL TODA 2', '', '', 'YELLOW'),
(37, 'POTODA POB', '', '', 'BLUE'),
(38, 'POTODAPAG', '', '', 'WHITE'),
(39, 'PSRTODA', '', '', 'RED'),
(40, 'RHEATODA', '', '', 'GREEN'),
(41, 'SHOTODA', '', '', 'GREEN'),
(42, 'SILAHISTODA', '', '', 'BLUE'),
(43, 'ST. JOSEPHTODA', '', '', 'GREEN'),
(44, 'TAGTODA', '', '', 'RED'),
(45, 'TALATODA', '', '', 'WHITE'),
(46, 'TALTODA', '', '', 'RED'),
(47, 'TAPTODA', '', '', 'RED'),
(48, 'TETODA 1', '', '', 'BLUE'),
(49, 'TETODA 2', '', '', 'BLUE'),
(50, 'TMTODA', '', '', 'GREEN'),
(51, 'VILLATODA', '', '', 'WHITE'),
(52, 'WATODA', '', '', 'BLUE'),
(53, 'ZAMTODA', '', '', 'YELLOW');

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

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `trikeid`) VALUES
(150, 'Added tricycle', 'Added tricycle', '2022-08-03', 'done', '', 3124),
(151, 'Added MTOP for payment', 'for payment mtop', '2022-08-03', 'done', '', 3124),
(152, 'Added payment for mtop', 'Added payment', '2022-08-03', 'done', '', 3124),
(153, 'Added tricycle', 'Added tricycle', '2022-08-03', 'done', '', 3125),
(154, 'Added MTOP for payment', 'for payment mtop', '2022-08-03', 'done', '', 3125),
(155, 'Added payment for mtop', 'Added payment', '2022-08-03', 'done', '', 3125),
(156, 'Printed Form', 'generate or print form', '2022-08-03', 'done', '', 3124),
(157, 'Updated Inspection Details', 'Updated Inspection Details', '2022-08-03', 'done', '', 3124),
(158, 'Printed Form', 'generate or print form', '2022-08-03', 'done', '', 3124),
(159, 'Created record', 'Created record', '2022-08-03', 'done', '', 3126),
(160, 'Added MTOP for payment', 'for payment mtop', '2022-08-03', 'done', '', 3126),
(161, 'Printed Form', 'generate or print form', '2022-08-03', 'done', '', 3126),
(162, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-08-03', 'done', '', 3124),
(163, 'Created record', 'Created record', '2022-08-03', 'done', '', 3127),
(164, 'Added MTOP for payment', 'for payment mtop', '2022-08-03', 'done', '', 3127),
(165, 'Added payment for mtop', 'Added payment', '2022-08-03', 'done', '', 3127),
(166, 'Created record', 'Created record', '2022-08-03', 'done', '', 3128),
(167, 'Added MTOP for payment', 'for payment mtop', '2022-08-03', 'done', '', 3128),
(168, 'Added payment for mtop', 'Added payment', '2022-08-03', 'done', '', 3128);

-- --------------------------------------------------------

--
-- Table structure for table `tricycle`
--

CREATE TABLE `tricycle` (
  `id` int(120) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `extname` varchar(44) NOT NULL,
  `mvfileno` varchar(50) NOT NULL,
  `plateno` varchar(50) NOT NULL,
  `engineno` varchar(50) NOT NULL,
  `chasisno` varchar(50) NOT NULL,
  `maker` varchar(50) NOT NULL,
  `motorcolor` varchar(55) NOT NULL,
  `pistondisp` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `ornum` varchar(50) NOT NULL,
  `applicationdate` varchar(50) NOT NULL,
  `brgycode` varchar(22) NOT NULL,
  `bodynum` varchar(50) NOT NULL,
  `operatorid` varchar(50) NOT NULL,
  `toda` varchar(55) NOT NULL,
  `sidecarcolor` varchar(55) NOT NULL,
  `inspectionstat` varchar(55) NOT NULL,
  `classification` varchar(55) NOT NULL,
  `currentmtop` date NOT NULL,
  `currentfranchise` date NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tricycle`
--

INSERT INTO `tricycle` (`id`, `fname`, `mname`, `lname`, `extname`, `mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `motorcolor`, `pistondisp`, `cor`, `ornum`, `applicationdate`, `brgycode`, `bodynum`, `operatorid`, `toda`, `sidecarcolor`, `inspectionstat`, `classification`, `currentmtop`, `currentfranchise`, `status`) VALUES
(3124, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '123123', '123', '1231', 'qwe', 'toyota', 'BLACK', 'yea', '', '', '2022-08-03', '55', '5555', '104', 'MTTODA ', 'GREEN', '', 'Public', '0000-00-00', '2025-08-08', ''),
(3125, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '123123', '123', '123123', '123123', '13123', 'red', '123123', 'adasd', '12313', '2022-09-02', '22', '1213', '105', 'KAMADO ', 'GREEN', '', 'Public', '2022-08-31', '0000-00-00', ''),
(3126, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '231', '123', '123123', '1312', '13123', 'BLACK', 'ppp', '555', '12313', '2022-09-08', '15', '1212', '104', 'BALTODA 2', 'RED', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3127, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '231', '123', '333', '1312', 'asdad', 'red', '123123', 'adasd', '90221', '2022-08-03', '33', '1512', '104', 'APOTODA', 'GREEN', '', 'Public', '2023-12-31', '0000-00-00', ''),
(3128, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '231', '123', '123123', '123123', 'asdad', 'red', '123123', '555', '90221', '2022-08-03', '23', '4121', '104', 'BACMATODA', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', '');

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
-- Indexes for table `dropped`
--
ALTER TABLE `dropped`
  ADD PRIMARY KEY (`dropid`);

--
-- Indexes for table `franchiserecord`
--
ALTER TABLE `franchiserecord`
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
-- Indexes for table `mtopamount`
--
ALTER TABLE `mtopamount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`paymentid`);

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
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dropped`
--
ALTER TABLE `dropped`
  MODIFY `dropid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `franchiserecord`
--
ALTER TABLE `franchiserecord`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `mtop`
--
ALTER TABLE `mtop`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mtopamount`
--
ALTER TABLE `mtopamount`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `paymentid` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `toda`
--
ALTER TABLE `toda`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
