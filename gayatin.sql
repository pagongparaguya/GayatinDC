-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 04:06 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gayatin`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE IF NOT EXISTS `allergies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `allergyname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`id`, `patientid`, `allergyname`) VALUES
(4, 18, '123'),
(5, 18, '321'),
(6, 20, 'bitin'),
(7, 20, 'pahumot'),
(8, 20, 'relo'),
(9, 20, 'mata'),
(10, 20, 'ilong '),
(11, 20, 'nose'),
(12, 21, 'gugma'),
(13, 22, 'iro'),
(14, 23, 'allergy1'),
(15, 23, 'allergy1');

-- --------------------------------------------------------

--
-- Table structure for table `chronicailments`
--

CREATE TABLE IF NOT EXISTS `chronicailments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `chronicailmentname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `chronicailments`
--

INSERT INTO `chronicailments` (`id`, `patientid`, `chronicailmentname`) VALUES
(1, 20, 'sakit'),
(2, 20, 'akong'),
(3, 20, 'ngipon'),
(4, 20, 'karon'),
(5, 20, 'sa'),
(6, 21, 'Conan syndrome'),
(7, 23, 'ailment1'),
(8, 23, 'ailment1');

-- --------------------------------------------------------

--
-- Table structure for table `drugstaken`
--

CREATE TABLE IF NOT EXISTS `drugstaken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `drugname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `drugstaken`
--

INSERT INTO `drugstaken` (`id`, `patientid`, `drugname`) VALUES
(5, 18, '123'),
(6, 18, '321'),
(7, 18, 'weed'),
(8, 20, 'kayasa doh'),
(9, 20, 'wa sa '),
(10, 20, 'gd ta ani'),
(11, 20, 'ba'),
(12, 21, 'love and other drugs'),
(13, 23, 'drug1'),
(14, 23, 'drug1'),
(15, 23, 'drug3');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contactno` varchar(16) NOT NULL,
  `telno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `officeaddress` varchar(150) NOT NULL,
  `officetelno` varchar(20) NOT NULL,
  `occlusion` varchar(20) NOT NULL,
  `periodontalcondition` varchar(50) NOT NULL,
  `oralhygiene` varchar(20) NOT NULL,
  `prevhistoryofbleeding` varchar(20) NOT NULL,
  `bloodpressure` varchar(20) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `lastmodifiedby` varchar(50) NOT NULL,
  `datemodified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `middlename`, `sex`, `address`, `contactno`, `telno`, `gender`, `maritalstatus`, `officeaddress`, `officetelno`, `occlusion`, `periodontalcondition`, `oralhygiene`, `prevhistoryofbleeding`, `bloodpressure`, `createdby`, `lastmodifiedby`, `datemodified`) VALUES
(18, 'Christian', 'Ompads', 'Hello', 'Female', 'Nasipit', '9123123135', '123-3456', 'Female', 'Married', 'Balay', 'N/A', 'Class II - 1', 'Normal', 'Poor', 'No', 'none', '', '', '0000-00-00'),
(19, 'Andre Paulo', 'Paraguya', 'Ambot', 'Female', 'Cagayan', '9123213123', '123-456', 'Female', 'Married', 'Ayala', 'none', 'Class II - 1', 'Normal', 'Poor', 'No', 'none123', '', '', '0000-00-00'),
(20, 'Enricke Paulo', 'Kee', 'Key', 'Male', 'Balay', '09123123135', '424-1234', 'Male', 'Married', 'USC - TC', '424-0000', 'Class II (Div.1)', 'With Periodontal Problem', 'Good', 'No', '140/5004', '', 'test', '0000-00-00'),
(21, 'andre', 'loves', 'pie', 'Female', 'taga Talamban', '09059217526', '72247', 'Female', 'Single', 'IBMd', '722471', 'None', 'Normal', 'Good', 'Yes', '100/500', 'test', 'conan', '0000-00-00'),
(22, 'Og', 'gungob', 'ambot', 'Male', 'consolacion', '09090909312', '424-1234', 'Male', 'Married', 'none', '424-0000', 'Class I', 'Normal', 'Good', 'Yes', '150/200', 'doe', 'test', '0000-00-00'),
(23, 'andre', 'abellanosa', 'dili gwapo', 'Male', 'taga Talamban', '09334079445', '722471', 'Male', 'Married', 'USC - TC', '1234466', 'Class II (Div.1)', 'Normal', 'Good', 'Yes', '100/300', 'test', 'test', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'test', 'test', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
