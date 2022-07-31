-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 05:12 PM
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
(98, 'Testing fname', 'Middle', 'Last', 'MALE', 'ext', 'SUBOK@gnau.com', 'PANTALAN BAGO', '123', 'Testing fname', 'Testing fname', 'qwe', '2022-07-18', 'OPERATOR', '22112', 'PROFESSIONAL', '2022-07-18', '62d3bad7294da.jpeg'),
(99, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', '', 'TALA', 'CALERO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-07-14', 'DRIVER', '123asd', 'OPERATOR', '2022-07-27', '62d61719e4043.png'),
(100, 'OLIVER2', 'MATAWARAN2', 'LALUNA', 'FEMALE', '', 'TALA', 'PACAR', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '0000-00-00', 'DRIVER', '123', 'OPERATOR', '2022-07-14', '62d76200bdb26.jpeg'),
(101, 'qweqwe', 'qweqwe', 'qwe', 'MALE', 'asd', 'asd', 'APOLLO', '123123', '', '', '', '2022-07-29', 'OPERATOR', 'liccc', 'PROFESSIONAL', '2022-07-29', '62e39007ca905.jpeg'),
(102, 'George', 'Arlong', 'Bush', 'MALE', '', 'orani', 'BALUT', '09275109013', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-07-30', 'OPERATOR/DRIVER', 'liccc', 'PROFESSIONAL', '2022-07-30', '62e49f08d4bf4.jpeg'),
(103, 'FNAME', 'MNAME', 'LNAME', 'MALE', '', 'eeeee', 'BALUT', '123123', 'sFNAME', 'sMNAME', 'sLANAME', '2022-07-30', 'OPERATOR', '22112', 'PROFESSIONAL', '2022-07-30', '62e52c2a35098.jpeg'),
(104, 'ffname', 'mmname', 'llname', 'FEMALE', 'xxname', 'qweqweqwe', 'PACAR', '123', 'qwe', 'qwe', 'qwe', '2022-07-30', 'OPERATOR', '22112', 'PROFESSIONAL', '2022-07-30', '62e52cce5b15a.jpeg'),
(105, 'Testing fname', 'Middle', 'Last', 'MALE', 'ext', 'adress', 'PANTALAN LUMA', '123', '', '', '', '2022-07-31', 'OPERATOR', '22112', 'PROFESSIONAL', '2022-07-31', '62e698ce85101.jpeg');

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
(1, '1234', '3116', '99'),
(2, '1234', '3116', '100'),
(3, '9999', '3118', '99');

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

--
-- Dumping data for table `dropped`
--

INSERT INTO `dropped` (`dropid`, `dmvfileno`, `dplateno`, `dengineno`, `dchasisno`, `dmaker`, `dmotorcolor`, `dpistondisp`, `dcor`, `dornum`, `trikeid`, `remarks`, `dropdate`) VALUES
(7, '22', 'SUBOK', '052389', '221', 'asd', 'blue', 'asd', 'SUBOK', 'asdq', '3116', '', '2022-07-17'),
(8, '22', 'SUBOK', '052389', '221', 'asd', 'blue', 'asd', 'SUBOK', 'asdq', '3116', '', '2022-07-17'),
(9, '2314', '123123', '123123222', '1231231', '2314', 'red', '12312', '123qwe', 'qwe123', '3117', '', '2022-07-21'),
(10, 'asdasd', 'SUBOK', '052389', 'SUBOK', 'asd', 'blue', 'asd', 'SUBOK', 'asdq', '3116', '', '2022-07-26');

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
(19, '2022-07-17', '2022-07-19', '2025-07-19', '3116'),
(20, '2022-07-19', '2022-07-19', '2025-07-19', '3117'),
(21, '2022-08-01', '0000-00-00', '0000-00-00', '3118'),
(22, '2022-07-30', '0000-00-00', '0000-00-00', '3119'),
(23, '2022-07-29', '0000-00-00', '0000-00-00', '3120'),
(24, '2022-07-30', '0000-00-00', '0000-00-00', '3121'),
(25, '2022-07-30', '0000-00-00', '0000-00-00', '3122'),
(26, '2022-07-30', '0000-00-00', '0000-00-00', '3123'),
(27, '0000-00-00', '0000-00-00', '0000-00-00', '3124'),
(28, '2022-07-31', '0000-00-00', '0000-00-00', '3125');

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
(69, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '', 'OK', 'OK', 'OK', 'OK ALL', '3116'),
(70, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'The quick brown fox jumps over the lazy dogs', '3117'),
(71, '', '', '', '', '', '', '', '', '', '', '', '', '', '3118'),
(72, 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '', '', '', '', '', '', 'OKOK', '3119'),
(73, '', '', '', '', '', '', '', '', '', '', '', '', '', '3120'),
(74, '', '', '', '', '', '', '', '', '', '', '', '', '', '3121'),
(75, '', '', '', '', '', '', '', '', '', '', '', '', '', '3122'),
(76, '', '', '', '', '', '', '', '', '', '', '', '', '', '3123'),
(77, '', '', '', '', '', '', '', '', '', '', '', '', '', '3124'),
(78, 'OK', 'OK', 'OK', 'OK', '', '', '', '', '', '', '', '', '', '3125');

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
  `penalty` varchar(55) NOT NULL,
  `trikeid` varchar(55) NOT NULL,
  `status` varchar(213) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtop`
--

INSERT INTO `mtop` (`id`, `mtopfee`, `annualstickerfee`, `mtopplatefee`, `operatoridfee`, `driveridfee`, `parkingfee`, `droppingfee`, `confirmationfee`, `certificationofnorecordfee`, `transferfee`, `farematrix`, `bodynumberstickerfee`, `environmentalfee`, `mtoptotal`, `mtopdate`, `mtopexpiration`, `penalty`, `trikeid`, `status`) VALUES
(1, '200', '150', '250', '', '', '', '', '', '', '', '', '', '', '600', '2022-07-20', '2023-12-31', '', '3116', ''),
(2, '200', '150', '250', '25', '25', '', '', '100', '100', '', '', '', '', '850', '2022-07-27', '2023-12-31', '', '3118', ''),
(3, '200', '150', '250', '', '', '', '', '', '', '', '', '', '', '600', '2022-07-27', '2023-12-31', '', '3117', 'pending'),
(4, '200', '150', '250', '', '', '', '', '', '', '', '', '', '', '600', '2022-07-29', 'pending', '', '3119', 'pending'),
(5, '200', '', '', '', '', '35', '60', '', '', '', '', '', '', '295', '2022-07-28', 'pending', '', '3119', 'pending'),
(6, '200', '150', '250', '25', '', '', '', '', '', '', '', '', '', '625', '2022-07-29', 'pending', '', '3119', 'pending'),
(7, '200', '', '', '', '0', '35', '', '100', '', '', '', '', '', '335', '2022-07-29', 'pending', '', '3120', 'pending'),
(8, '200', '', '250', '25', '', '', '60', '', '', '', '', '', '', '535', '2022-07-29', 'pending', '', '3116', 'pending'),
(9, '200', '', '250', '25', '', '', '', '', '', '', '', '', '', '475', '2022-07-29', '2023-12-31', '', '3119', 'paid'),
(10, '200', '', '250', '25', '', '', '', '', '', '', '', '', '', '475', '2022-07-30', 'pending', '', '3121', 'pending'),
(12, '200', '150', '250', '25', '25', '35', '60', '100', '100', '1000', '50', '300', '75', '2720', '2022-07-30', 'pending', '50', '3122', 'pending'),
(13, '200', '150', '250', '25', '25', '35', '60', '100', '100', '1000', '50', '300', '75', '2720', '2022-07-31', '2023-12-31', '50', '3125', 'paid');

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
(1, 'Confirmation', '100', '12345', ''),
(2, 'Confirmation', '60', '5555', '3116'),
(3, 'Confirmation', '60', '', '3117'),
(4, 'No record', '60', '12345', '3116'),
(5, 'No record', '60', '342222', '3116'),
(6, 'No record', '60', '3422223', '3116'),
(7, 'No record', '60', '123', '3116'),
(8, 'No record', '60', '123', '3116'),
(9, 'No record', '60', '324', '3117');

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
(71, 'Added tricycle', 'Added tricycle', '2022-07-17', 'done', '', 3116),
(72, 'Added new unit', 'Added new unit', '2022-07-17', 'done', '', 3116),
(73, 'DROPPED UNIT', 'DROPPED Unit', '2022-07-17', 'done', '', 3116),
(74, 'Get Dropped Unit', ' Get DROPPED Unit', '2022-07-17', 'done', '', 3116),
(75, 'DROPPED UNIT', 'DROPPED Unit', '2022-07-17', 'done', '', 3116),
(76, 'Get Dropped Unit', ' Get DROPPED Unit', '2022-07-17', 'done', '', 3116),
(77, 'DROPPED UNIT', 'DROPPED Unit', '2022-07-17', 'done', '', 3116),
(78, 'Added new unit', 'Added new unit', '2022-07-17', 'done', '', 3116),
(79, 'DROPPED UNIT', 'DROPPED Unit', '2022-07-17', 'done', '', 3116),
(80, 'Get Dropped Unit', ' Get DROPPED Unit', '2022-07-17', 'done', '', 3116),
(81, 'Printed Form', 'generate or print form', '2022-07-19', 'done', '', 3116),
(82, 'Added New Driver', 'added driver to tricycle', '2022-07-19', 'done', '', 3116),
(83, 'Added New Driver', 'added driver to tricycle', '2022-07-19', 'done', '', 3116),
(84, 'Printed Form', 'generate or print form', '2022-07-19', 'done', '', 3116),
(85, 'Printed Form', 'generate or print form', '2022-07-19', 'done', '', 3116),
(86, 'Created record', 'Created record', '2022-07-19', 'done', '', 3117),
(87, 'Created record', 'Created record', '2022-07-19', 'done', '', 3118),
(88, 'Updated MTOP', 'updated mtop', '2022-07-20', 'done', '', 3116),
(89, 'Updated MTOP', 'updated mtop', '2022-07-20', 'done', '', 3118),
(90, 'Added Existing Driver', 'added driver to tricycle', '2022-07-20', 'done', '', 0),
(91, 'Printed Form', 'generate or print form', '2022-07-20', 'done', '', 3116),
(92, 'DROPPED UNIT', 'DROPPED Unit', '2022-07-21', 'done', '', 3117),
(93, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(94, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(95, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(96, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(97, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(98, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(99, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(100, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(101, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(102, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(103, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(104, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(105, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(106, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(107, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(108, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(109, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-25', 'done', '', 3116),
(110, 'Printed Form', 'generate or print form', '2022-07-25', 'done', '', 3116),
(111, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-25', 'done', '', 3116),
(112, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-26', 'done', '', 3117),
(113, 'DROPPED UNIT', 'DROPPED Unit', '2022-07-26', 'done', '', 3116),
(114, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-26', 'done', '', 3116),
(115, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-26', 'done', '', 3116),
(116, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-26', 'done', '', 3116),
(117, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-27', 'done', '', 3116),
(118, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-27', 'done', '', 3116),
(119, 'Printed Form', 'generate or print form', '2022-07-27', 'done', '', 3118),
(120, 'Printed Form', 'generate or print form', '2022-07-27', 'done', '', 3117),
(121, 'Updated MTOP', 'updated mtop', '2022-07-27', 'done', '', 3117),
(122, 'Paid and Printer Cert of Confirmation', 'edited franchise', '2022-07-28', 'done', '', 3117),
(123, 'Printed Form', 'generate or print form', '2022-07-28', 'done', '', 3117),
(124, 'Printed Form', 'generate or print form', '2022-07-29', 'done', '', 3118),
(125, 'Printed Form', 'generate or print form', '2022-07-29', 'done', '', 3116),
(126, 'Added tricycle', 'Added tricycle', '2022-07-29', 'done', '', 3119),
(127, 'Added MTOP for payment', 'for payment mtop', '2022-07-29', 'done', '', 3119),
(128, 'Added MTOP for payment', 'for payment mtop', '2022-07-29', 'done', '', 3119),
(129, 'Added MTOP for payment', 'for payment mtop', '2022-07-29', 'done', '', 3119),
(130, 'Added MTOP for payment', 'for payment mtop', '2022-07-29', 'done', '', 3119),
(131, 'Added MTOP for payment', 'for payment mtop', '2022-07-29', 'done', '', 3116),
(132, 'Added MTOP for payment', 'for payment mtop', '2022-07-29', 'done', '', 3119),
(133, 'Added payment for mtop', 'Added payment', '2022-07-29', 'done', '', 3119),
(134, 'Created record', 'Created record', '2022-07-29', 'done', '', 3120),
(135, 'Printed Form', 'generate or print form', '2022-07-29', 'done', '', 3116),
(136, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-29', 'done', '', 3119),
(137, 'Created record', 'Created record', '2022-07-30', 'done', '', 3121),
(138, 'Added MTOP for payment', 'for payment mtop', '2022-07-30', 'done', '', 3121),
(139, 'Printed Form', 'generate or print form', '2022-07-30', 'done', '', 3121),
(140, 'Added tricycle', 'Added tricycle', '2022-07-30', 'done', '', 3122),
(141, 'Added MTOP for payment', 'for payment mtop', '2022-07-30', 'done', '', 3122),
(142, 'Printed Form', 'generate or print form', '2022-07-30', 'done', '', 3122),
(143, 'Added MTOP for payment', 'for payment mtop', '2022-07-30', 'done', '', 3122),
(144, 'Printed Form', 'generate or print form', '2022-07-30', 'done', '', 3122),
(145, 'Added tricycle', 'Added tricycle', '2022-07-30', 'done', '', 3123),
(146, 'Added tricycle', 'Added tricycle', '2022-07-30', 'done', '', 3124),
(147, 'Printed Form', 'generate or print form', '2022-07-30', 'done', '', 3124),
(148, 'Added tricycle', 'Added tricycle', '2022-07-31', 'done', '', 3125),
(149, 'Updated Inspection Details', 'Updated Inspection Details', '2022-07-31', 'done', '', 3125),
(150, 'Added MTOP for payment', 'for payment mtop', '2022-07-31', 'done', '', 3125),
(151, 'Added payment for mtop', 'Added payment', '2022-07-31', 'done', '', 3125);

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
(3116, 'Middle', 'Middle', 'Last', 'ext', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', '2022-07-17', '11', '1234', '98', 'BACMATODA ', 'GREEN', '', 'Public', '2022-07-06', '2023-07-19', 'no unit'),
(3117, 'Testing fname', 'Middle', 'Last', 'ext', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', 'dropped', '2022-07-19', '25', '5522', '98', 'BACMATODA', 'GREEN', '', 'Public', '2022-07-06', '2025-07-19', 'no unit'),
(3118, 'Testing fname', 'Middle', 'Last', 'ext', '123123', '123213', '123123', '123', '123', '123', '123', '13', '123', '2022-08-01', '99', '9999', '98', 'ZAMTODA', 'YELLOW', '', 'Public', '2022-07-06', '0000-00-00', ''),
(3119, 'qweqwe', 'qweqwe', 'qwe', 'asd', 'qweqwewqe', 'qweqwe', 'qqww', 'weqasd', 'qqwee', 'ewqe', 'wqeqw', 'qweqw', 'qwe', '2022-07-30', '12', '5789', '101', 'MARIAFETODA ', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3120, 'qweqwe', 'qweqwe', 'qwe', 'asd', 'qqqww', 'qwe', 'tassf', 'qwe', 'qweqwe', 'q', 'ewq', 'qweqw', 'qwe', '2022-07-29', '33', '4213', '101', 'METODA', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3121, 'Testing fname', 'Middle', 'Last', 'ext', '123123', '123', '123', '23', '222', '33', '212', '123', '123', '2022-07-30', '22', '2222', '98', 'BALTODA 2', 'RED', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3122, 'Arlong', 'Arlong', 'Bush', '', '231', '123123', '333', '123123', 'KAWASAKI', '123', 'qwe', '131', 'or112', '2022-07-30', '01', '3456', '102', 'KAMADO ', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3123, 'MNAME', 'MNAME', 'LNAME', '', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', '2022-07-30', '22', '2222', '103', 'BAMODA ', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', 'no unit'),
(3124, 'ffname', 'mmname', 'llname', 'xxname', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', '', '55', '5555', '104', 'BALTODA 1 ', 'RED', '', 'Public', '0000-00-00', '0000-00-00', 'no unit'),
(3125, 'Testing fname', 'Middle', 'Last', 'ext', 'qweqwe', 'qwe', 'qweqwe', 'qweqwe', 'Toyota', ' Maker Motor Color', 'PISTON123', '1233333', '1233321', '2022-07-31', '23', '1244', '105', 'MPTODA ', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', '');

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
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `mtop`
--
ALTER TABLE `mtop`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mtopamount`
--
ALTER TABLE `mtopamount`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `paymentid` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3126;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
