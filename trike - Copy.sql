-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 11:02 AM
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
  `bloodtype` varchar(55) NOT NULL,
  `type` varchar(50) NOT NULL,
  `licensenum` varchar(50) NOT NULL,
  `licensetype` varchar(50) NOT NULL,
  `licensevalid` varchar(50) NOT NULL,
  `cedulanumber` varchar(555) NOT NULL,
  `cedulalocation` varchar(55) NOT NULL,
  `ceduladate` varchar(55) NOT NULL,
  `picname` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driveroperator`
--

INSERT INTO `driveroperator` (`pid`, `fname`, `mname`, `lname`, `gender`, `extname`, `address1`, `barangay`, `contactnumber`, `sfname`, `smname`, `slaname`, `bday`, `bloodtype`, `type`, `licensenum`, `licensetype`, `licensevalid`, `cedulanumber`, `cedulalocation`, `ceduladate`, `picname`) VALUES
(108, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', '', 'TALA', 'CENTRO I', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-30', '', 'OPERATOR', '123asd', 'NON-PROFESSIONAL', '2022-08-08', 'cedulanum', 'location', '2022-09-01', '62f9c8a6a809d.jpeg'),
(118, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '', 'TALA', 'BAGONG PARAISO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-09', '', 'DRIVER', '1233321', 'PROFESSIONAL', '2022-08-09', '', '', '', '62f20daa106ee.png'),
(119, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'gg', 'TALA', '09082646040', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-31', '', 'DRIVER', '123asd', 'NON-PROFESSIONAL', '2022-08-31', '', '', '', '62f20fb3267b2.jpeg'),
(120, 'OLIVER', 'MATAWARAN', 'LALUNA', 'tests', 'JR', 'TALA', '09082646040', 'BALUT', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-09', '', 'DRIVER', 'liccc', 'PROFESSIONAL', '2022-08-09', '', '', '', '62f210d666827.png'),
(121, 'OLIVER', 'MATAWARAN', 'LALUNA', 'tests', 'SUBOK', 'TALA', '09082646040', 'PALIHAN', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-24', '', 'DRIVER', '123asd', 'PROFESSIONAL', '2022-08-09', '', '', '', '62f210fa752b9.png'),
(122, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'JR', 'TALA', 'BAYAN', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-31', '', 'DRIVER', 'COA20192WS553', 'NON-PROFESSIONAL', '2022-08-09', '', '', '', '62f211ca7ef8f.png'),
(123, 'asdasd', 'asdasd', 'asd', '', 'JR', 'address1', 'CENTRO I', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-09', '', 'DRIVER', '123PCSS', 'PROFESSIONAL', '2022-08-09', '', '', '', '62f2121c8475a.png'),
(124, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'JR', 'TALA', 'BAGONG PARAISO', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-09', '', 'DRIVER', '1233321', 'PROFESSIONAL', '2022-08-17', '', '', '', '62f212c5adcdd.png'),
(125, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'ff', 'TALA', 'BAGONG PARAISO', '123123', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-31', '', 'DRIVER', 'liccc', 'NON-PROFESSIONAL', '2022-09-10', '', '', '', '62f222cc2aa68.jpeg'),
(126, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '', 'TALA', 'PALIHAN', '', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-09-09', '', 'DRIVER', 'liccc', 'PROFESSIONAL', '2022-08-11', '', '', '', '62f2226ce6cf4.png'),
(127, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'ww', 'TALA', 'PANTALAN BAGO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-10', '', 'OPERATOR', '1233321', '', '2022-08-10', '', '', '', '62f3202b46807.jpeg'),
(128, 'KHRISTIAN HAROLD', 'PEREZ', 'LALUNA', 'MALE', '123123', 'TALA', 'PANTALAN LUMA', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-09-08', '', 'DRIVER', '1233321', 'PROFESSIONAL', '2022-09-10', '', '', '', '62fb447649eb5.jpeg'),
(129, 'OLIVER', 'MATAWARAN', 'LALUNA', 'FEMALE', 'JR', 'TALA', 'BAGONG PARAISO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-25', '', 'OPERATOR', '123asd', '', '2022-08-16', '', '', '', '62fb4866ec8e4.jpeg'),
(130, 'qwe', 'qweqwe', 'qweq', 'MALE', 'qeqweqweq', 'qweqe', 'PANTALAN BAGO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-17', '', 'DRIVER', '123asd', 'PROFESSIONAL', '2022-08-17', '', '', '', '62fc434d37a04.jpeg'),
(131, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'JR', 'TALA', 'PANTALAN LUMA', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-09-01', '', 'OPERATOR', '123PCSS', '', '2022-08-17', '', '', '', '62fc6b261ed50.jpeg'),
(132, 'OLIVER', 'MATAWARAN', 'LALUNA', '', 'JR', 'TALA', '', 'PALIHAN', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-18', '', 'DRIVER', '123asd', 'PROFESSIONAL', '2022-08-18', '', 'issu', '2022-08-25', '62fd9e91dff29.jpeg'),
(133, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'a', 'TALA', 'BALUT', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-09-01', '', 'DRIVER', '123asd', 'PROFESSIONAL', '2022-09-01', '', 'issu', '', '62fd9ff9b3197.jpeg'),
(134, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'hehe', '11adddd111', 'PANTALAN BAGO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-18', '', 'DRIVER', '123PCSS', 'PROFESSIONAL', '2022-08-18', '1asd14asd', 'asda', '', '62fda0b325006.jpeg'),
(135, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'JR', 'TALA', 'PUKSUAN', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-18', '', 'OPERATOR/DRIVER', '123asd', 'OPERATOR', '2022-08-18', 'cedulanum', 'location', '2022-08-18', '62fda35914ef9.jpeg'),
(136, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', '', 'TALA', 'PANTALAN LUMA', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-24', '', 'OPERATOR', '123PCSS', 'PASSPORT', '2022-08-23', '1asd14asd', 'issu', '2022-08-23', '63043f08d03e2.jpeg'),
(137, 'OLIVERxxxxxxxxxxxxxx', 'MATAWARAN', 'LALUNA', 'MALE', '', 'TALA', 'PANTALAN BAGO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-04', '', 'OPERATOR', '1233321', 'OPERATOR', '2022-08-12', 'cedulanum', 'issu', '2022-08-16', '630440b413b44.jpeg'),
(138, 'OLIVER222222222', 'MATAWARAN', 'LALUNA', 'MALE', 'a', 'TALA', 'BALUT', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-04', '', 'OPERATOR/DRIVER', '1233321', 'National ID', '2022-08-31', 'cedulanum', 'asda', '2022-08-23', '630441775cbba.jpeg'),
(139, 'OLIVER222222222', 'MATAWARAN', 'LALUNA', 'MALE', 'a', 'TALA', 'BALUT', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-04', '', 'OPERATOR/DRIVER', '1233321', 'National ID', '2022-08-31', 'cedulanum', 'asda', '2022-08-23', '6304418441478.jpeg'),
(140, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', '', 'TALA', 'BAYAN', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-23', '', 'OPERATOR', 'COA2211029', 'National ID', '2022-08-23', 'cedulanum', 'issu', '2022-08-08', '630441e6d4e95.jpeg'),
(141, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'JR', 'TALA', 'APOLLO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-25', '', 'OPERATOR', '123PCSS', 'OPERATOR/DRIVER', '2022-08-25', 'cedulanum', 'issu', '2022-08-25', '6306f0253bad9.jpeg'),
(142, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'JR', 'TALA', 'CENTRO II', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-25', '', 'OPERATOR', 'COA2211029', 'VOTERS ID', '2022-08-25', 'cedulanum', 'issu', '2022-08-25', '6306f11ca1a58.jpeg'),
(143, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(144, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'O+', '', '', '', '', '', '', '', ''),
(145, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(146, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'O+', '', '', '', '', '', '', '', ''),
(147, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'JR', 'TALA', 'APOLLO', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-18', 'B+', 'OPERATOR', '123asd', 'PASSPORT', '2022-08-25', 'cedulanum', 'issu', '2022-08-24', '6306f1bcc9184.jpeg'),
(148, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'JR', 'TALA', 'BALUT', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-25', 'AB+', 'OPERATOR/DRIVER', '123asd', 'OPERATOR', '2022-08-25', 'cedulanum', 'location', '2022-08-25', '6306f23deffed.jpeg'),
(149, 'OLIVER', 'MATAWARAN', 'LALUNA', 'MALE', 'JR', 'TALA', 'BALUT', '09082646040', 'OLIVER', 'MATAWARAN', 'LALUNA', '2022-08-25', 'O-', 'OPERATOR', 'COA2211029', 'Philippine Postal ID', '2022-08-26', 'cedulanum', 'locatio', '2022-08-31', '6306f4b16183f.jpeg');

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
(5, '6666', '3132', '110'),
(6, '6666', '3132', '110'),
(7, '6666', '3132', '112'),
(8, '6666', '3132', '113'),
(9, '6666', '3132', '114'),
(10, '6666', '3132', '115'),
(11, '6666', '3132', '116'),
(12, '6666', '3132', '117'),
(13, '6666', '3132', '118'),
(14, '6666', '3132', '119'),
(15, '6666', '3132', '120'),
(16, '6666', '3132', '121'),
(17, '6666', '3132', '122'),
(18, '6666', '3132', '123'),
(19, '6666', '3132', '124'),
(20, '6666', '3132', '125'),
(21, '6666', '3132', '126'),
(22, '6669', '3132', '128'),
(23, '5510', '3133', '128'),
(24, '6669', '3132', '130'),
(25, '6669', '3132', '132'),
(26, '6669', '3132', '133'),
(27, '6669', '3132', '134');

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
(35, '2022-08-08', '0000-00-00', '0000-00-00', '3132'),
(36, '2022-08-10', '0000-00-00', '0000-00-00', '3133'),
(37, '2022-08-16', '0000-00-00', '0000-00-00', '3134'),
(38, '2022-08-17', '0000-00-00', '0000-00-00', '3135'),
(39, '2022-08-18', '0000-00-00', '0000-00-00', '3136'),
(40, '2022-08-23', '0000-00-00', '0000-00-00', '3137'),
(41, '2022-08-23', '0000-00-00', '0000-00-00', '3138'),
(42, '2022-08-24', '0000-00-00', '0000-00-00', '3139'),
(43, '2022-08-24', '0000-00-00', '0000-00-00', '3140'),
(44, '2022-08-23', '0000-00-00', '0000-00-00', '3141'),
(45, '2022-08-23', '0000-00-00', '0000-00-00', '3142'),
(46, '2022-08-17', '0000-00-00', '0000-00-00', '3143'),
(47, '2022-09-02', '0000-00-00', '0000-00-00', '3144'),
(48, '2022-08-25', '0000-00-00', '0000-00-00', '3145'),
(49, '2022-08-25', '0000-00-00', '0000-00-00', '3146'),
(50, '0000-00-00', '0000-00-00', '0000-00-00', '3147'),
(51, '0000-00-00', '0000-00-00', '0000-00-00', '3148');

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
(85, 'OK', 'OK', 'OK', '', '', '', '', '', '', '', '', '', '', '3132'),
(86, '', '', '', '', '', '', '', '', '', '', '', '', '', '3133'),
(87, '', '', '', '', '', '', '', '', '', '', '', '', '', '3134'),
(88, '', '', '', '', '', '', '', '', '', '', '', '', '', '3135'),
(89, '', '', '', '', '', '', '', '', '', '', '', '', '', '3136'),
(90, '', '', '', '', '', '', '', '', '', '', '', '', '', '3137'),
(91, '', '', '', '', '', '', '', '', '', '', '', '', '', '3138'),
(92, '', '', '', '', '', '', '', '', '', '', '', '', '', '3139'),
(93, '', '', '', '', '', '', '', '', '', '', '', '', '', '3140'),
(94, '', '', '', '', '', '', '', '', '', '', '', '', '', '3141'),
(95, '', '', '', '', '', '', '', '', '', '', '', '', '', '3142'),
(96, '', '', '', '', '', '', '', '', '', '', '', '', '', '3143'),
(97, '', '', '', '', '', '', '', '', '', '', '', '', '', '3144'),
(98, '', '', '', '', '', '', '', '', '', '', '', '', '', '3145'),
(99, '', '', '', '', '', '', '', '', '', '', '', '', '', '3146'),
(100, '', '', '', '', '', '', '', '', '', '', '', '', '', '3147'),
(101, '', '', '', '', '', '', '', '', '', '', '', '', '', '3148');

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
  `status` varchar(213) NOT NULL,
  `mtopor` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtop`
--

INSERT INTO `mtop` (`id`, `mtopfee`, `annualstickerfee`, `mtopplatefee`, `operatoridfee`, `driveridfee`, `parkingfee`, `droppingfee`, `confirmationfee`, `certificationofnorecordfee`, `transferfee`, `farematrix`, `bodynumberstickerfee`, `environmentalfee`, `mtoptotal`, `mtopdate`, `mtopexpiration`, `renewaldate`, `penalty`, `trikeid`, `status`, `mtopor`) VALUES
(29, '200', '', '', '', '', '', '', '', '', '', '', '', '', '200', '2022-08-10', '2019-10-30', '', '', '3132', 'paid', ''),
(31, '200', '150', '250', '25', '25', '35', '', '', '100', '1000', '', '', '', '1785', '2022-08-17', '2023-02-28', '', '', '3135', 'paid', '56645646465'),
(32, '200', '150', '250', '', '', '', '', '', '', '', '', '', '', '600', '2022-08-25', 'pending', '', '', '3144', 'pending', '');

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
(2, 'admin', 'admin2022', 'Khristian Harold', 'Vicente', '', 'ADMIN', '', '', '0000-00-00 00:00:00'),
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
(179, 'Added tricycle', 'Added tricycle', '2022-08-08', 'done', '', 3132),
(180, 'Added MTOP for payment', 'for payment mtop', '2022-08-08', 'done', '', 3132),
(181, 'Added MTOP for payment', 'for payment mtop', '2022-08-08', 'done', '', 3132),
(182, 'Added MTOP for payment', 'for payment mtop', '2022-08-08', 'done', '', 3132),
(183, 'Added payment for mtop', 'Added payment', '2022-08-08', 'done', '', 3132),
(184, 'Added MTOP for payment', 'for payment mtop', '2022-08-08', 'done', '', 3132),
(185, 'Added payment for mtop', 'Added payment', '2022-08-08', 'done', '', 3132),
(186, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(187, 'Printed Form', 'generate or print form', '2022-08-09', 'done', '', 3132),
(188, 'Added MTOP for payment', 'for payment mtop', '2022-08-09', 'done', '', 3132),
(189, 'Added payment for mtop', 'Added payment', '2022-08-09', 'done', '', 3132),
(190, 'Removed Driver 4', 'removed driver from tricycle', '2022-08-09', 'done', '', 3132),
(191, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(192, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(193, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(194, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(195, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(196, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(197, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(198, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(199, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(200, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(201, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(202, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(203, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(204, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(205, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(206, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(207, 'Added New Driver', 'added driver to tricycle', '2022-08-09', 'done', '', 3132),
(208, 'Added tricycle', 'Added tricycle', '2022-08-10', 'done', '', 3133),
(209, 'Added MTOP for payment', 'for payment mtop', '2022-08-10', 'done', '', 3133),
(210, 'Added payment for mtop', 'Added payment', '2022-08-10', 'done', '', 3133),
(211, ' Inspection Details', 'Updated Inspection Details', '2022-08-10', 'done', '', 3132),
(212, 'Khristian Harold Updated Inspection Details', 'Updated Inspection Details', '2022-08-10', 'done', '', 3132),
(213, 'Khristian Harold Printed Form', 'generate or print form', '2022-08-10', 'done', '', 3132),
(214, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-10', 'done', '', 3132),
(215, 'Khristian Harold Added payment for mtop', 'Added payment', '2022-08-10', 'done', '', 3132),
(216, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-10', 'done', '', 3132),
(217, 'Khristian Harold Added payment for mtop', 'Added payment', '2022-08-10', 'done', '', 3132),
(218, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-10', 'done', '', 3133),
(219, 'Khristian Harold Added payment for mtop', 'Added payment', '2022-08-10', 'done', '', 3133),
(220, 'Khristian Harold Added New Driver', 'added driver to tricycle', '2022-08-11', 'done', '', 3132),
(221, 'Khristian Harold Added Existing Driver', 'added driver to tricycle', '2022-08-16', 'done', '', 0),
(222, 'Added tricycle', 'Added tricycle', '2022-08-16', 'done', '', 3134),
(223, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-16', 'done', '', 3134),
(224, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-16', 'done', '', 3134),
(225, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2022-08-16', 'done', '', 3134),
(226, 'Khristian Harold Added New Driver', 'added driver to tricycle', '2022-08-17', 'done', '', 3132),
(227, 'Added tricycle', 'Added tricycle', '2022-08-17', 'done', '', 3135),
(228, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-17', 'done', '', 3135),
(229, 'Khristian Harold Added payment for mtop', 'Added payment', '2022-08-17', 'done', '', 3135),
(230, 'Khristian Harold Added New Driver', 'added driver to tricycle', '2022-08-18', 'done', '', 3132),
(231, 'Khristian Harold Added New Driver', 'added driver to tricycle', '2022-08-18', 'done', '', 3132),
(232, 'Khristian Harold Added New Driver', 'added driver to tricycle', '2022-08-18', 'done', '', 3132),
(233, 'Added tricycle', 'Added tricycle', '2022-08-18', 'done', '', 3136),
(234, 'Added tricycle', 'Added tricycle', '2022-08-23', 'done', '', 3137),
(235, 'Added tricycle', 'Added tricycle', '2022-08-23', 'done', '', 3138),
(236, 'Added tricycle', 'Added tricycle', '2022-08-23', 'done', '', 3139),
(237, 'Added tricycle', 'Added tricycle', '2022-08-23', 'done', '', 3140),
(238, 'Added tricycle', 'Added tricycle', '2022-08-23', 'done', '', 3141),
(239, 'Created record', 'Created record', '2022-08-23', 'done', '', 3142),
(240, 'Created record', 'Created record', '2022-08-23', 'done', '', 3143),
(241, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2022-08-23', 'done', '', 3143),
(242, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2022-08-23', 'done', '', 3143),
(243, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2022-08-23', 'done', '', 3143),
(244, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2022-08-23', 'done', '', 3143),
(245, 'Created record', 'Created record', '2022-08-25', 'done', '', 3144),
(246, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-25', 'done', '', 3144),
(247, 'Added tricycle', 'Added tricycle', '2022-08-25', 'done', '', 3145),
(248, 'Added tricycle', 'Added tricycle', '2022-08-25', 'done', '', 3146),
(249, 'Added tricycle', 'Added tricycle', '2022-08-25', 'done', '', 3147),
(250, 'Added tricycle', 'Added tricycle', '2022-08-25', 'done', '', 3148),
(251, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-25', 'done', '', 3132),
(252, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2022-08-25', 'done', '', 3132),
(253, 'Khristian Harold Added MTOP for payment', 'for payment mtop', '2022-08-25', 'done', '', 3133),
(254, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2022-08-25', 'done', '', 3133);

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
  `parking` varchar(55) NOT NULL,
  `parkinglocation` varchar(55) NOT NULL,
  `acquisitiondate` varchar(55) NOT NULL,
  `yearmodel` varchar(55) NOT NULL,
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

INSERT INTO `tricycle` (`id`, `fname`, `mname`, `lname`, `extname`, `mvfileno`, `plateno`, `engineno`, `chasisno`, `maker`, `motorcolor`, `pistondisp`, `cor`, `ornum`, `parking`, `parkinglocation`, `acquisitiondate`, `yearmodel`, `applicationdate`, `brgycode`, `bodynum`, `operatorid`, `toda`, `sidecarcolor`, `inspectionstat`, `classification`, `currentmtop`, `currentfranchise`, `status`) VALUES
(3132, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '231', '120', '123123', '123123', 'asdad', 'red', 'ppp', '', '90221', '', '', '', '', '2022-08-08', '66', '6669', '108', 'METODA ', 'GREEN', '', 'Public', '2022-10-30', '0000-00-00', ''),
(3133, 'OLIVER', 'MATAWARAN', 'LALUNA', 'ww', '11', '229', '123123', '1312', '', 'BLACK', 'ppp', 'adasd', '', '', '', '', '', '2022-08-10', '22', '5510', '127', 'BALTODA 2 ', 'RED', '', 'Utility', '2022-09-30', '0000-00-00', ''),
(3134, 'OLIVER', 'MATAWARAN', 'LALUNA', 'JR', '2314', '4444', '5555', '123', 'asdad', 'red', '123123', 'adasd', '12313', '', '', '', '', '2022-08-16', '11', '1223', '129', 'METODA ', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3135, 'OLIVER', 'MATAWARAN', 'LALUNA', 'JR', '2314', '222', '333', '1312', 'asdad', 'BLACK', 'ppp', '555', '12313', '', '', '', '', '2022-08-17', '55', '1223', '131', 'BAMODA ', 'GREEN', '', 'Public', '2023-02-28', '0000-00-00', ''),
(3136, 'OLIVER', 'MATAWARAN', 'LALUNA', 'JR', '231', '123', '333', '1312', 'KAWASAKI', 'reeee', '123', '131', 'or112', '', '', '', '', '2022-08-18', '23', '3456', '135', 'BACMATODA ', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3137, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '231', '123123', '333', '123123', '13123', 'red', '123', '123123', '12313', 'Yes', '12332', '2022-08-31', '1232', '2022-08-23', '15', '1212', '', 'BALTODA 1', 'RED', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3138, 'OLIVERxxxxxxxxxxxxxx', 'MATAWARAN', 'LALUNA', '', '231', '123', '1231', '1312', 'asdad', 'reeee', '123123', 'adasd', '12313', 'Yes', '12332', '2022-08-23', '1232', '2022-08-23', '55', '1212', '', 'METODA', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3139, 'OLIVER222222222', 'MATAWARAN', 'LALUNA', 'a', '3333', 'qwe', '5555', '25112', 'tttt', 'RED', 'qwe', '123', '123', 'Yes', 'parking loc', '2022-09-06', '2222', '2022-08-24', '55', '1233', '', 'MASTODA', 'YELLOW', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3140, 'OLIVER222222222', 'MATAWARAN', 'LALUNA', 'a', '3333', 'qwe', '5555', '25112', 'tttt', 'RED', 'qwe', '123', '123', 'Yes', 'parking loc', '2022-09-06', '2222', '2022-08-24', '55', '1233', '', 'MASTODA', 'YELLOW', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3141, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '3333', '4444', '8891228', 'qwe', '13123', 'BLACK', '123123', 'adasd', '12313', 'Yes', '12332', '2022-08-23', '2222', '2022-08-23', '22', '9979', '140', 'KATODA', 'WHITE', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3142, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '11', '222', '123123', '1312', 'asdad', 'red', 'ppp', '555', '12313', 'No', '', '', '', '2022-08-23', '11', '1223', '108', 'BAMODA', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3143, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '11', '123123', '1231', '123123', 'asdad', 'BLACK', '123123', '123123', '90221', 'Yeseee', 'Yeseee', '2022-08-16', '2223', '2022-08-17', '22', '2222', '108', 'BALTODA 2', 'RED', 'inspectionstat', 'Public', '0000-00-00', '0000-00-00', ''),
(3144, 'OLIVER', 'MATAWARAN', 'LALUNA', '', '231', '123123', '123123', '123123', '13123', 'BLACK', 'ppp', '555', '12313', 'Yes', '12332', '2022-08-18', '2222', '2022-09-02', '22', '2412', '108', 'BALTODA 2', 'RED', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3145, 'OLIVER', 'MATAWARAN', 'LALUNA', 'JR', '231', '123123', '333', '1312', 'asdad', 'BLACK', 'ppp', 'adasd', '90221', 'No', '', '2022-08-25', '2222', '2022-08-25', '15', '1123', '141', 'APOTODA', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3146, 'OLIVER', 'MATAWARAN', 'LALUNA', 'JR', '00122921', 'qwe', '8891228', '25112', 'toyota', 'reeee', 'YES', '131', '90221', 'Yes', '12332', '2022-08-25', '2222', '2022-08-25', '44', '1523', '142', 'CALTODA', 'YELLOW', '', 'Public', '0000-00-00', '0000-00-00', ''),
(3147, 'OLIVER', 'MATAWARAN', 'LALUNA', 'JR', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No', '', '', '', '', '22', '2222', '147', 'BACMATODA', 'GREEN', '', 'Public', '0000-00-00', '0000-00-00', 'no unit'),
(3148, 'OLIVER', 'MATAWARAN', 'LALUNA', 'JR', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No unit', 'No', '', '', '', '', '33', '3333', '148', 'BALTODA 2', 'RED', '', 'Public', '0000-00-00', '0000-00-00', 'no unit');

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
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `dropped`
--
ALTER TABLE `dropped`
  MODIFY `dropid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `franchiserecord`
--
ALTER TABLE `franchiserecord`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `mtop`
--
ALTER TABLE `mtop`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `mtopamount`
--
ALTER TABLE `mtopamount`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `paymentid` int(55) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;
--
-- AUTO_INCREMENT for table `tricycle`
--
ALTER TABLE `tricycle`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3149;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
