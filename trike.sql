-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 03:01 AM
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
(89, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'SUBOK', 'TALA', '09082646040', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '0000-00-00', 'OPERATOR', '123PCSS', 'OPERATOR', '2022-07-15', '62cfb5a4992a6.jpeg');

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
(5, '2022-07-08', '2022-07-12', '2025-07-12', '3102'),
(6, '2022-07-15', '2022-07-12', '2025-07-12', '3103'),
(7, '2022-07-15', '2022-07-12', '2025-07-12', '3104'),
(8, '2022-07-12', '2022-07-12', '2025-07-12', '3105');

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
(55, '', '', '', '', '', '', '', '', '', '', '', '', '', '3102'),
(56, '', '', '', '', '', '', '', '', '', '', '', '', '', '3103'),
(57, '', '', '', '', '', '', '', '', '', '', '', '', '', '3104'),
(58, '', '', '', '', '', '', '', '', '', '', '', '', '', '3105');

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
  `trikeid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtop`
--

INSERT INTO `mtop` (`id`, `mtopfee`, `annualstickerfee`, `mtopplatefee`, `operatoridfee`, `driveridfee`, `parkingfee`, `droppingfee`, `confirmationfee`, `certificationofnorecordfee`, `transferfee`, `farematrix`, `bodynumberstickerfee`, `environmentalfee`, `mtoptotal`, `mtopdate`, `mtopexpiration`, `trikeid`) VALUES
(13, '200', '150', '250', '', '', '', '', '', '', '', '', '', '', '600', '2022-07-08', '2023-07-08', '3102'),
(14, '200', '150', '250', '25', '25', '', '', '100', '100', '', '', '300', '75', '1525', '2021-01-08', '2022-01-08', '3103'),
(15, '200', '', '250', '25', '', '', '', '', '', '', '', '', '', '475', '2022-07-12', '2023-07-12', '3103'),
(16, '200', '', '', '', '', '', '', '', '', '', '', '', '75', '275', '2022-07-13', '2023-07-13', '3105');

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
  `environmentalfee` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtopamount`
--

INSERT INTO `mtopamount` (`id`, `mtopfee`, `annualstickerfee`, `mtopplatefee`, `operatoridfee`, `driveridfee`, `parkingfee`, `droppingfee`, `confirmationfee`, `certificationofnorecordfee`, `transferfee`, `farematrix`, `bodynumberstickerfee`, `environmentalfee`) VALUES
(1, '200', '150', '250', '25', '25', '35', '60', '100', '100', '1000', '50', '300', '75');

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
(13, 'Updated MTOP', 'updated mtop', '2022-07-08', 'done', '', 3102),
(14, 'Updated MTOP', 'updated mtop', '2022-07-08', 'done', '', 3103),
(15, 'Printed Form', 'generate or print form', '2022-07-11', 'done', '', 3102),
(16, 'Printed Form', 'generate or print form', '2022-07-11', 'done', '', 3102),
(17, 'DROPPED FRANCHISE', 'drop franchise', '2022-07-11', 'done', '', 0),
(18, 'DROPPED FRANCHISE', 'drop franchise', '2022-07-11', 'done', '', 3102),
(19, 'Updated MTOP', 'updated mtop', '2022-07-12', 'done', '', 3103),
(20, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3103),
(21, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3103),
(22, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3103),
(23, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3103),
(24, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3103),
(25, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3103),
(26, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(27, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(28, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(29, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(30, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(31, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(32, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(33, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(34, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(35, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(36, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(37, 'Edited Franchise Details', 'edited franchise', '2022-07-12', 'done', '', 3105),
(38, 'Updated MTOP', 'updated mtop', '2022-07-13', 'done', '', 3105);

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
(3102, 'MATAWARAN', 'MATAWARAN', 'LALUNA', 'SUBOK', '231', '123123', '333', '444', 'asdad', 'red', 'ppp', '555', '', '2022-07-08', '15', '1231', '89', 'BACMATODA ', 'GREEN', '', 'Public', '2022-07-06', '2025-07-12', 'dropped'),
(3103, 'OLIVER', 'MATAWARAN', 'LALUNA', 'SUBOK', '1', '1', '1', '1', '1', 'reeee', '1', '1', '1', '2022-07-16', '11', '1111', '89', 'TMTODA', 'GREEN', 'inspectionstat', 'Public', '2022-07-06', '2025-07-12', ''),
(3104, 'OLIVER', 'MATAWARAN', 'LALUNA', '<br /><b>Notice</b>:  Undefined variable: ex', '2314', '123123', '333', '1312', '13123', 'red', '123123', '555', '90221', '2022-07-15', '21', '1231', '14', 'BACMATODA', 'GREEN', '', 'Public', '0000-00-00', '2025-07-12', ''),
(3105, 'OLIVER', 'MATAWARAN', 'LALUNA', 'SUBOK', '231', '123', '123123', '444', 'asdad', 'red', 'ppp', '', '90221', '2022-07-17', '15', '2223', '89', 'APOTODA', 'GREEN', 'inspectionstat', 'Public', '2022-07-06', '2025-07-12', '');

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
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `franchiserecord`
--
ALTER TABLE `franchiserecord`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `mtop`
--
ALTER TABLE `mtop`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `mtopamount`
--
ALTER TABLE `mtopamount`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `toda`
--
ALTER TABLE `toda`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
