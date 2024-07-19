-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 09:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boatreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `boats`
--

CREATE TABLE `boats` (
  `boatid` int(55) NOT NULL,
  `classification` varchar(55) NOT NULL,
  `homeport` varchar(55) NOT NULL,
  `vesselname` varchar(55) NOT NULL,
  `material` varchar(55) NOT NULL,
  `motor` varchar(55) NOT NULL,
  `placebuilt` varchar(55) NOT NULL,
  `yearbuilt` varchar(55) NOT NULL,
  `rlength` varchar(55) NOT NULL,
  `rbreadth` varchar(55) NOT NULL,
  `rdepth` varchar(55) NOT NULL,
  `gtonnage` varchar(55) NOT NULL,
  `tlength` varchar(55) NOT NULL,
  `tbreadth` varchar(55) NOT NULL,
  `tdepth` varchar(55) NOT NULL,
  `ntonnage` varchar(55) NOT NULL,
  `bodynumber` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `ownerid` varchar(55) NOT NULL,
  `franchiseapplication` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boats`
--

INSERT INTO `boats` (`boatid`, `classification`, `homeport`, `vesselname`, `material`, `motor`, `placebuilt`, `yearbuilt`, `rlength`, `rbreadth`, `rdepth`, `gtonnage`, `tlength`, `tbreadth`, `tdepth`, `ntonnage`, `bodynumber`, `status`, `ownerid`, `franchiseapplication`) VALUES
(20, 'Public', '1', '2', 'Wood', 'Motorized', 'orani', '2023', '1', '2', '3', '4', '5', '6', '7', '8', '22222222', 'new', '19', '2023-06-20'),
(21, 'Family', 'PILAPIL PALIHAN', 'DHENZEL NHICA', 'Wood', 'Motorized', 'PULO KABALUTAN', '2022', '7.60', '.89', '.65', '.46', '6.80', '.44', '.58', '.41', 'BA-OA-973', 'new', '18', '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `fisherfolks`
--

CREATE TABLE `fisherfolks` (
  `id` int(11) NOT NULL,
  `bodynumber` int(11) NOT NULL,
  `boatid` int(11) NOT NULL,
  `fisherfolkid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `franchiserecord`
--

CREATE TABLE `franchiserecord` (
  `id` int(55) NOT NULL,
  `franchiseapplication` varchar(55) NOT NULL,
  `franchiseapproval` varchar(55) NOT NULL,
  `franchiseexpiration` varchar(55) NOT NULL,
  `trikeid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `id` int(55) NOT NULL,
  `boatid` varchar(55) NOT NULL,
  `enginemake` varchar(55) NOT NULL,
  `serialnumber` varchar(55) NOT NULL,
  `horsepower` varchar(55) NOT NULL,
  `dateadded` varchar(55) NOT NULL,
  `dateremoved` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`id`, `boatid`, `enginemake`, `serialnumber`, `horsepower`, `dateadded`, `dateremoved`, `status`) VALUES
(16, '20', '9', '', '11', '2023-06-20 11:50:50', '', 'active'),
(17, '21', 'YAMMA', '', '12', '2023-06-20 15:05:34', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `ownerfisherfolk`
--

CREATE TABLE `ownerfisherfolk` (
  `pid` int(150) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `extname` varchar(55) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `civilstat` varchar(55) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `contactnumber` varchar(55) NOT NULL,
  `placeofbirth` varchar(55) NOT NULL,
  `residentsince` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `hhincome` varchar(55) NOT NULL,
  `religion` varchar(55) NOT NULL,
  `education` varchar(55) NOT NULL,
  `children` varchar(55) NOT NULL,
  `livlihood` varchar(55) NOT NULL,
  `sfname` varchar(50) NOT NULL,
  `smname` varchar(50) NOT NULL,
  `slaname` varchar(50) NOT NULL,
  `srelationship` varchar(55) NOT NULL,
  `saddress` varchar(55) NOT NULL,
  `scontactnumber` varchar(55) NOT NULL,
  `bday` date NOT NULL,
  `bloodtype` varchar(55) NOT NULL,
  `type` varchar(50) NOT NULL,
  `licensenum` varchar(50) NOT NULL,
  `licensetype` varchar(50) NOT NULL,
  `licensevalid` varchar(50) NOT NULL,
  `cedulanumber` varchar(555) NOT NULL,
  `cedulalocation` varchar(55) NOT NULL,
  `ceduladate` varchar(55) NOT NULL,
  `fishr` varchar(55) NOT NULL,
  `picname` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownerfisherfolk`
--

INSERT INTO `ownerfisherfolk` (`pid`, `fname`, `mname`, `lname`, `extname`, `gender`, `civilstat`, `address1`, `barangay`, `contactnumber`, `placeofbirth`, `residentsince`, `nationality`, `hhincome`, `religion`, `education`, `children`, `livlihood`, `sfname`, `smname`, `slaname`, `srelationship`, `saddress`, `scontactnumber`, `bday`, `bloodtype`, `type`, `licensenum`, `licensetype`, `licensevalid`, `cedulanumber`, `cedulalocation`, `ceduladate`, `fishr`, `picname`) VALUES
(18, 'DENNIS ', 'BITUIN ', 'CAPULI', '', 'MALE', 'Married', 'PILAPIL', 'PALIHAN', '09568191464', 'ORANI', '1995', 'FILIPINO', '5000', 'ROMAN CATHOLIC', 'High School', '2', 'CAPTURE FISHING', 'GISELLE ', 'MACATULAD', 'CAPULI', 'srelationship', 'saddress', 'scontactnumber', '1995-03-04', '', 'OWNER/FISHERFOLK', ' 0809-0039A-C0495D_C10000-7', 'VOTERS ID', '', '10586942', 'ORANI, BATAAN ', '2023-06-20', 'BA-OA-000251-2015', '64911e0b2c3cd.jpeg'),
(19, 'Test', 'test', 'test', 'test', 'MALE', 'Single', '123', 'BALUT', '9912312312', 'Hermosa', '2121', 'fil', '2', '', 'Elementary', '1', 'AQUA CULTURE', 'w', 'we', 'wer', 'srelationship', 'saddress', 'scontactnumber', '2023-03-23', '', 'OWNER', ' 123PCSS', 'SENIOR ID', '', '1', '2', '2023-06-20', '1234', '64912c336adfb.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `payableamount`
--

CREATE TABLE `payableamount` (
  `id` int(55) NOT NULL,
  `idfee` int(55) NOT NULL,
  `registrationfee` int(55) NOT NULL,
  `permitfee` int(55) NOT NULL,
  `inspectionfee` int(55) NOT NULL,
  `environmentalfee` int(55) NOT NULL,
  `transferfee` int(55) NOT NULL,
  `changeenginefee` int(55) NOT NULL,
  `changehullcolor` int(55) NOT NULL,
  `changedimension` int(55) NOT NULL,
  `changename` int(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payableamount`
--

INSERT INTO `payableamount` (`id`, `idfee`, `registrationfee`, `permitfee`, `inspectionfee`, `environmentalfee`, `transferfee`, `changeenginefee`, `changehullcolor`, `changedimension`, `changename`, `status`) VALUES
(1, 50, 50, 50, 75, 100, 125, 150, 100, 100, 100, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(55) NOT NULL,
  `idfee` int(55) NOT NULL,
  `registrationfee` int(55) NOT NULL,
  `permitfee` int(55) NOT NULL,
  `inspectionfee` int(55) NOT NULL,
  `environmentalfee` int(55) NOT NULL,
  `transferfee` int(55) NOT NULL,
  `changeenginefee` int(55) NOT NULL,
  `changehullcolor` int(55) NOT NULL,
  `changedimension` int(55) NOT NULL,
  `changename` int(55) NOT NULL,
  `penalty` varchar(55) NOT NULL,
  `total` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `ornumb` varchar(55) NOT NULL,
  `paymentdate` date NOT NULL,
  `expiration` varchar(50) NOT NULL,
  `boatid` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `idfee`, `registrationfee`, `permitfee`, `inspectionfee`, `environmentalfee`, `transferfee`, `changeenginefee`, `changehullcolor`, `changedimension`, `changename`, `penalty`, `total`, `status`, `ornumb`, `paymentdate`, `expiration`, `boatid`) VALUES
(79, 50, 100, 100, 75, 100, 125, 150, 100, 100, 100, '0', '1000', 'paid', 'ornumb', '2024-01-03', '2025-02-28', '21');

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
(2, 'admin', 'admin2022*', 'Khristian Harold', 'Vicente', '', 'ADMIN', '', '', '0000-00-00 00:00:00'),
(3, 'otro1', 'otro1', 'Anicia', 'Macauba', 'Amor', 'admin', 'otro', '', '0000-00-00 00:00:00'),
(4, 'otro*', 'otro*', 'Teresita', 'Vianzon', '', 'admin', 'OIC-OTRO', '', '0000-00-00 00:00:00'),
(5, 'otro3', '0623Grace', 'John Nori', 'Pili', 'Amor', 'admin', 'Otro Staff', '', '0000-00-00 00:00:00'),
(6, 'otro4', 'otro4', 'Vergz', 'Sulangi', '', 'admin', 'Otro Staff', '', '0000-00-00 00:00:00'),
(7, 'mayor', 'mayor1', 'EFREN', 'PASCUAL, JR.', 'E.', 'admin', 'MUNICIPAL MAYOR', '', '0000-00-00 00:00:00');

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
  `boatid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction`, `description`, `date`, `status`, `type`, `boatid`) VALUES
(22, ' Added Boat data', 'Added boat', '2023-05-02', 'done', '', 14),
(23, ' Added Boat data', 'Added boat', '2023-05-02', 'done', '', 15),
(24, ' Added Boat data', 'Added boat', '2023-05-02', 'done', '', 16),
(25, 'Khristian Harold Added Boat data', 'Added boat', '2023-05-02', 'done', '', 17),
(26, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-02', 'done', '', 17),
(27, 'Khristian Harold Added payment for registration', 'Added payment', '2023-05-02', 'done', '', 17),
(28, 'Khristian Harold Added Boat data', 'Added boat', '2023-05-04', 'done', '', 18),
(29, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-04', 'done', '', 18),
(30, 'Khristian Harold Added payment for registration', 'Added payment', '2023-05-04', 'done', '', 18),
(31, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2023-05-06', 'done', '', 17),
(32, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-06', 'done', '', 0),
(33, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-06', 'done', '', 0),
(34, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(35, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(36, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(37, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(38, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(39, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(40, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(41, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(42, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(43, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(44, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(45, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(46, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(47, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-08', 'done', '', 0),
(48, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-09', 'done', '', 0),
(49, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-09', 'done', '', 0),
(50, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-09', 'done', '', 0),
(51, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-11', 'done', '', 0),
(52, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-15', 'done', '', 17),
(53, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-15', 'done', '', 17),
(54, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-15', 'done', '', 17),
(55, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-15', 'done', '', 17),
(56, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-15', 'done', '', 17),
(57, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-15', 'done', '', 17),
(58, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-15', 'done', '', 17),
(59, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-15', 'done', '', 17),
(60, 'Khristian Harold Added payment for registration', 'Added payment', '2023-05-15', 'done', '', 17),
(61, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-15', 'done', '', 17),
(62, 'Khristian Harold Added payment for registration', 'Added payment', '2023-05-15', 'done', '', 17),
(63, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-15', 'done', '', 17),
(64, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-15', 'done', '', 17),
(65, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-15', 'done', '', 0),
(66, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-15', 'done', '', 17),
(67, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-15', 'done', '', 0),
(68, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(69, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(70, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(71, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(72, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(73, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(74, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(75, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(76, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(77, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(78, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(79, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(80, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(81, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(82, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(83, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(84, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-16', 'done', '', 0),
(85, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(86, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(87, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(88, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(89, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(90, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(91, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(92, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(93, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(94, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(95, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(96, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(97, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(98, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(99, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(100, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(101, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(102, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(103, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(104, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(105, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(106, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(107, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(108, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(109, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(110, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(111, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(112, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(113, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(114, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(115, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(116, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(117, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(118, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(119, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(120, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(121, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(122, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(123, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(124, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(125, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(126, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(127, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(128, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(129, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(130, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(131, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(132, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(133, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(134, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(135, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(136, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(137, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(138, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(139, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(140, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(141, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(142, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(143, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(144, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(145, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(146, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(147, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(148, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(149, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(150, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(151, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(152, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(153, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(154, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(155, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(156, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(157, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(158, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(159, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(160, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(161, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(162, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(163, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(164, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-16', 'done', '', 0),
(165, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(166, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(167, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(168, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(169, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(170, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(171, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(172, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(173, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(174, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(175, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(176, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(177, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(178, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 18),
(179, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 18),
(180, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(181, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(182, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(183, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(184, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(185, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(186, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(187, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-16', 'done', '', 0),
(188, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(189, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(190, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(191, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(192, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(193, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(194, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(195, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-16', 'done', '', 17),
(196, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-16', 'done', '', 17),
(197, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-18', 'done', '', 0),
(198, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-18', 'done', '', 17),
(199, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-18', 'done', '', 17),
(200, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-18', 'done', '', 0),
(201, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-20', 'done', '', 0),
(202, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2023-05-20', 'done', '', 17),
(203, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-05-20', 'done', '', 17),
(204, 'Khristian Harold Printed Form', 'generate or print form', '2023-05-20', 'done', '', 0),
(205, 'Khristian Harold Added payment for registration', 'Added payment', '2023-05-20', 'done', '', 17),
(206, 'Khristian Harold Added Boat data', 'Added boat', '2023-06-01', 'done', '', 19),
(207, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-06-01', 'done', '', 19),
(208, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-01', 'done', '', 0),
(209, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-19', 'done', '', 0),
(210, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-19', 'done', '', 0),
(211, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-19', 'done', '', 0),
(212, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-19', 'done', '', 0),
(213, 'Khristian Harold Added Boat data', 'Added boat', '2023-06-20', 'done', '', 20),
(214, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2023-06-20', 'done', '', 20),
(215, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2023-06-20', 'done', '', 20),
(216, ' Added Boat data', 'Added boat', '2023-06-20', 'done', '', 0),
(217, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2023-06-20', 'done', '', 21),
(218, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-20', 'done', '', 0),
(219, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-20', 'done', '', 0),
(220, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-20', 'done', '', 0),
(221, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-21', 'done', '', 0),
(222, 'Khristian Harold Printed Form', 'generate or print form', '2023-06-21', 'done', '', 0),
(223, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2024-01-03', 'done', '', 20),
(224, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2024-01-03', 'done', '', 20),
(225, 'Khristian Harold Edited Franchise Details', 'edited franchise', '2024-01-03', 'done', '', 21),
(226, 'Khristian Harold Edit MTOP', 'Edit MTOP', '2024-01-03', 'done', '', 21),
(227, 'Khristian Harold Added Boat Registration for payme', 'for payment registration', '2024-01-03', 'done', '', 21),
(228, 'Khristian Harold Added payment for registration', 'Added payment', '2024-01-03', 'done', '', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boats`
--
ALTER TABLE `boats`
  ADD PRIMARY KEY (`boatid`);

--
-- Indexes for table `fisherfolks`
--
ALTER TABLE `fisherfolks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchiserecord`
--
ALTER TABLE `franchiserecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownerfisherfolk`
--
ALTER TABLE `ownerfisherfolk`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payableamount`
--
ALTER TABLE `payableamount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boats`
--
ALTER TABLE `boats`
  MODIFY `boatid` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fisherfolks`
--
ALTER TABLE `fisherfolks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franchiserecord`
--
ALTER TABLE `franchiserecord`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ownerfisherfolk`
--
ALTER TABLE `ownerfisherfolk`
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payableamount`
--
ALTER TABLE `payableamount`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
