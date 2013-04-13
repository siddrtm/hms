-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2013 at 05:02 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointpatient`
--

CREATE TABLE IF NOT EXISTS `appointpatient` (
  `receptionistid` varchar(5) NOT NULL,
  `docid` varchar(5) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `fee` int(5) NOT NULL DEFAULT '0',
  `patientid` int(3) NOT NULL,
  PRIMARY KEY (`receptionistid`,`docid`),
  KEY `docid` (`docid`),
  KEY `patientid` (`patientid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cleaningservice`
--

CREATE TABLE IF NOT EXISTS `cleaningservice` (
  `wardboyid` varchar(5) NOT NULL,
  `roomno` int(3) NOT NULL,
  PRIMARY KEY (`wardboyid`,`roomno`),
  KEY `roomno` (`roomno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` varchar(5) NOT NULL,
  `type` varchar(10) NOT NULL,
  `department` varchar(15) NOT NULL,
  `salary` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `name` varchar(15) NOT NULL,
  `expirydate` date NOT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicineprescription`
--

CREATE TABLE IF NOT EXISTS `medicineprescription` (
  `docid` varchar(5) NOT NULL,
  `patientid` int(3) NOT NULL,
  `duration` int(3) NOT NULL,
  `dose` int(1) NOT NULL,
  `date` date NOT NULL,
  `medicinename` varchar(15) NOT NULL,
  PRIMARY KEY (`docid`,`patientid`),
  KEY `docid` (`docid`),
  KEY `patientid` (`patientid`),
  KEY `medicinename` (`medicinename`),
  KEY `medicinename_2` (`medicinename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `id` varchar(5) NOT NULL,
  `shift` varchar(7) NOT NULL,
  `salary` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `bloodgroup` varchar(2) NOT NULL,
  `dob` date NOT NULL,
  `totalbill` int(7) NOT NULL DEFAULT '0',
  `sex` char(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nurseid` varchar(5) NOT NULL,
  `roomno` int(3) DEFAULT NULL,
  `description` varchar(100) DEFAULT 'none',
  `datedischarged` date DEFAULT NULL,
  `dateadmitted` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nurseid` (`nurseid`),
  KEY `nurseid_2` (`nurseid`),
  KEY `roomno` (`roomno`),
  KEY `dob` (`dob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patientage`
--

CREATE TABLE IF NOT EXISTS `patientage` (
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  KEY `dob` (`dob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE IF NOT EXISTS `receptionist` (
  `id` varchar(5) NOT NULL,
  `salary` int(6) NOT NULL,
  `shifts` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `no` int(3) NOT NULL,
  `type` varchar(7) NOT NULL,
  `cost` int(5) NOT NULL,
  `capacity` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `sex` char(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dob` (`dob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staffage`
--

CREATE TABLE IF NOT EXISTS `staffage` (
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  KEY `dob` (`dob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `name` varchar(15) NOT NULL,
  `cost` int(6) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testsuggestion`
--

CREATE TABLE IF NOT EXISTS `testsuggestion` (
  `docid` varchar(5) NOT NULL DEFAULT '',
  `patientid` int(3) NOT NULL,
  `result` varchar(9) DEFAULT NULL,
  `testname` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`docid`,`patientid`),
  KEY `testname` (`testname`),
  KEY `patientid` (`patientid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wardboy`
--

CREATE TABLE IF NOT EXISTS `wardboy` (
  `id` varchar(5) NOT NULL,
  `shifts` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointpatient`
--
ALTER TABLE `appointpatient`
  ADD CONSTRAINT `appointpatient_ibfk_3` FOREIGN KEY (`patientid`) REFERENCES `patient` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointpatient_ibfk_1` FOREIGN KEY (`receptionistid`) REFERENCES `receptionist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointpatient_ibfk_2` FOREIGN KEY (`docid`) REFERENCES `doctor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cleaningservice`
--
ALTER TABLE `cleaningservice`
  ADD CONSTRAINT `cleaningservice_ibfk_2` FOREIGN KEY (`roomno`) REFERENCES `room` (`no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cleaningservice_ibfk_1` FOREIGN KEY (`wardboyid`) REFERENCES `wardboy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicineprescription`
--
ALTER TABLE `medicineprescription`
  ADD CONSTRAINT `medicineprescription_ibfk_1` FOREIGN KEY (`docid`) REFERENCES `doctor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `medicineprescription_ibfk_2` FOREIGN KEY (`medicinename`) REFERENCES `medicine` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `medicineprescription_ibfk_3` FOREIGN KEY (`patientid`) REFERENCES `patient` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nurse`
--
ALTER TABLE `nurse`
  ADD CONSTRAINT `nurse_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`roomno`) REFERENCES `room` (`no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`nurseid`) REFERENCES `nurse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patientage`
--
ALTER TABLE `patientage`
  ADD CONSTRAINT `patientage_ibfk_1` FOREIGN KEY (`dob`) REFERENCES `patient` (`dob`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD CONSTRAINT `receptionist_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffage`
--
ALTER TABLE `staffage`
  ADD CONSTRAINT `staffage_ibfk_1` FOREIGN KEY (`dob`) REFERENCES `staff` (`dob`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `testsuggestion`
--
ALTER TABLE `testsuggestion`
  ADD CONSTRAINT `testsuggestion_ibfk_3` FOREIGN KEY (`patientid`) REFERENCES `patient` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `testsuggestion_ibfk_1` FOREIGN KEY (`docid`) REFERENCES `doctor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `testsuggestion_ibfk_2` FOREIGN KEY (`testname`) REFERENCES `test` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wardboy`
--
ALTER TABLE `wardboy`
  ADD CONSTRAINT `wardboy_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
