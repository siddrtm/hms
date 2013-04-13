-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2013 at 04:18 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(5) NOT NULL,
  `pass` varchar(10) NOT NULL DEFAULT 'root',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('admin', 'root');

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
  `no` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`receptionistid`,`docid`,`patientid`),
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
  `pass` varchar(10) NOT NULL DEFAULT 'root',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `type`, `department`, `salary`, `pass`) VALUES
('d1', 'ms', 'gynacology', 50000, 'root'),
('d10', 'h', 'js', 23, '123'),
('d2', 'md', 'ortho', 50000, 'root'),
('d3', 'ms', 'ortho', 100, 'root'),
('d4', 'MD', 'ENT', 60000, 'root'),
('d8', 'wijwidj', 'djwidjidwjdi', 2000, 'root');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `name` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`name`, `price`) VALUES
('combiflam', 30),
('crocin', 20),
('disprin', 10),
('fdgds', 456);

-- --------------------------------------------------------

--
-- Table structure for table `medicineprescription`
--

CREATE TABLE IF NOT EXISTS `medicineprescription` (
  `docid` varchar(5) NOT NULL,
  `patientid` int(3) NOT NULL,
  `duration` int(3) NOT NULL,
  `dose` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `medicinename` varchar(15) NOT NULL,
  PRIMARY KEY (`docid`,`patientid`,`medicinename`),
  KEY `docid` (`docid`),
  KEY `patientid` (`patientid`),
  KEY `medicinename` (`medicinename`),
  KEY `medicinename_2` (`medicinename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicineprescription`
--

INSERT INTO `medicineprescription` (`docid`, `patientid`, `duration`, `dose`, `timestamp`, `medicinename`) VALUES
('d1', 5, 36, 2, '2013-04-08 18:30:00', 'fdgds'),
('d1', 7, 7, 2, '2012-04-04 18:30:00', 'fdgds'),
('d1', 24, 3, 2, '2013-04-04 18:30:00', 'fdgds');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `id` varchar(5) NOT NULL,
  `shift` varchar(7) NOT NULL,
  `salary` int(6) NOT NULL,
  `pass` varchar(10) NOT NULL DEFAULT 'root',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `shift`, `salary`, `pass`) VALUES
('2', 'morning', 3000, 'root'),
('n1', 'night', 10, 'root'),
('n2', 'morning', 4000, 'root'),
('n7', 'night', 200, 'root');

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
  `nurseid` varchar(5) DEFAULT NULL,
  `roomno` int(3) DEFAULT NULL,
  `description` varchar(100) DEFAULT 'none',
  `datedischarged` timestamp NULL DEFAULT NULL,
  `dateadmitted` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pass` varchar(10) NOT NULL DEFAULT 'root',
  PRIMARY KEY (`id`),
  KEY `nurseid` (`nurseid`),
  KEY `nurseid_2` (`nurseid`),
  KEY `roomno` (`roomno`),
  KEY `dob` (`dob`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `bloodgroup`, `dob`, `totalbill`, `sex`, `address`, `nurseid`, `roomno`, `description`, `datedischarged`, `dateadmitted`, `pass`) VALUES
(5, 'hvj', 'o+', '2013-04-02', 43577, 'm', 'hjbiuhbjk', 'n2', 1, 'bjbjk', '2013-04-03 18:30:00', '2013-04-09 18:30:00', 'root'),
(7, 'siddharth sharma', 'A+', '0000-00-00', 9629, 'm', 'ratlam', NULL, NULL, 'headache problem', '2013-04-05 18:30:00', '2013-04-06 20:02:49', 'root'),
(24, 'shubham', 'a+', '2007-02-13', 2968, 'm', 'kota', '2', 220, 'none', '2013-04-07 15:16:23', '2013-04-07 15:16:23', 'root'),
(25, 'abhishek', 'A+', '1992-10-09', 0, 'm', 'jaipur', NULL, NULL, 'fracture', NULL, '2013-04-08 22:50:57', 'root'),
(26, 'raman', 'o+', '1990-10-07', 0, 'm', 'agra', NULL, NULL, 'cold', NULL, '2013-04-08 23:02:30', 'raman');

--
-- Triggers `patient`
--
DROP TRIGGER IF EXISTS `patientage1`;
DELIMITER //
CREATE TRIGGER `patientage1` AFTER INSERT ON `patient`
 FOR EACH ROW begin
insert into patientage values (new.dob , YEAR(CURDATE())-YEAR(new.dob));
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `patientage`
--

CREATE TABLE IF NOT EXISTS `patientage` (
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  KEY `dob` (`dob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patientage`
--

INSERT INTO `patientage` (`dob`, `age`) VALUES
('2007-02-13', 6),
('2013-04-02', 1),
('1992-10-09', 21),
('1990-10-07', 23);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE IF NOT EXISTS `receptionist` (
  `id` varchar(5) NOT NULL,
  `salary` int(6) NOT NULL,
  `shifts` varchar(7) NOT NULL,
  `pass` varchar(10) NOT NULL DEFAULT 'root',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `salary`, `shifts`, `pass`) VALUES
('3', 4567, 'evening', 'root'),
('r1', 30000, 'morning', 'root'),
('r5', 10000, 'morning', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `no` int(3) NOT NULL,
  `type` varchar(7) NOT NULL,
  `cost` int(5) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`no`, `type`, `cost`) VALUES
(1, 'GENERAL', 2000),
(2, 'GENERAL', 3000),
(3, 'checkup', 4000),
(220, 'checkup', 232);

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
  `available` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `dob` (`dob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `dob`, `sex`, `address`, `available`) VALUES
('2', 'fassdf', '2013-04-24', 'f', 'dafasf', 0),
('3', 'fdsfdf', '2013-04-06', 'm', 'rehtrhtr', 1),
('4', 'grgrh', '2013-04-19', 'm', 'gvgr', 0),
('d1', 'chirag', '0003-05-06', 'm', 'kota', 0),
('d10', 'ca', '1989-02-02', 'm', 'r', 1),
('d2', 'gokul', '1992-04-09', 'm', 'kota', 1),
('d3', 'gaurav', '1992-03-04', 'm', 'kota', 1),
('d4', 'python', '2013-04-11', 'm', 'ceocecj', 1),
('d7', 'python', '2013-04-05', 'm', 'wewewew', 1),
('d8', 'gggggg', '2013-04-12', 'm', 'dkowdkwodk', 1),
('doc', 'KAMAL', '1988-04-04', 'm', 'indore', 1),
('n1', 'joyce', '1990-05-06', 'f', 'malviya nagar', 0),
('n2', 'rita', '1989-03-04', 'f', 'jagatpura', 0),
('n7', 'chiinu', '2013-04-04', 'f', 'ewewew', 1),
('r1', 'richa', '1885-12-21', 'f', 'vegas', 1),
('r3', 'kriti', '2013-04-04', 'f', 'wewewewrere', 1),
('r5', 'alicia', '1995-03-06', 'f', 'raja park', 1),
('w', 'raju', '2012-12-01', 'm', 'jaipur', 1),
('w1', 'abhishek parashar', '1990-01-01', 'm', 'kota', 1),
('w2', 'shubham sharma', '1989-02-02', 'm', 'chomu', 1);

--
-- Triggers `staff`
--
DROP TRIGGER IF EXISTS `patientage2`;
DELIMITER //
CREATE TRIGGER `patientage2` AFTER INSERT ON `staff`
 FOR EACH ROW begin
insert into staffage values (new.dob , YEAR(CURDATE())-YEAR(new.dob));
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `staffage`
--

CREATE TABLE IF NOT EXISTS `staffage` (
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  KEY `dob` (`dob`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffage`
--

INSERT INTO `staffage` (`dob`, `age`) VALUES
('0003-05-06', 45),
('2013-04-06', 67),
('2013-04-10', 21),
('2013-04-19', 76),
('1992-04-09', 21),
('0000-00-00', 2013),
('1992-05-09', 21),
('1885-12-21', 128),
('1990-01-01', 23),
('1989-02-02', 24),
('1989-03-04', 24),
('1992-10-09', 21),
('2013-04-11', 0),
('2013-04-05', 0),
('1988-04-04', 25),
('1989-02-02', 24),
('2013-04-04', 0),
('2013-04-12', 0),
('2013-04-04', 0),
('1995-03-06', 18),
('2012-12-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `name` varchar(15) NOT NULL,
  `cost` int(6) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`, `cost`) VALUES
('blood test', 500),
('HIV test', 7000),
('swine flu test', 5000),
('therapy', 3245);

-- --------------------------------------------------------

--
-- Table structure for table `testsuggestion`
--

CREATE TABLE IF NOT EXISTS `testsuggestion` (
  `docid` varchar(5) NOT NULL DEFAULT '',
  `patientid` int(3) NOT NULL,
  `result` varchar(9) DEFAULT NULL,
  `testname` varchar(15) NOT NULL DEFAULT '',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`docid`,`patientid`,`testname`),
  KEY `testname` (`testname`),
  KEY `patientid` (`patientid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testsuggestion`
--

INSERT INTO `testsuggestion` (`docid`, `patientid`, `result`, `testname`, `timestamp`) VALUES
('d1', 5, 'positive', 'therapy', '2013-04-08 18:30:00'),
('d1', 7, NULL, 'therapy', '2012-03-03 18:30:00'),
('d8', 5, 'a+,hemo 1', 'blood test', '2013-04-09 08:21:34'),
('d8', 5, NULL, 'HIV TEST', '2013-04-09 08:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `wardboy`
--

CREATE TABLE IF NOT EXISTS `wardboy` (
  `id` varchar(5) NOT NULL,
  `shifts` varchar(7) NOT NULL,
  `salary` int(5) NOT NULL,
  `pass` varchar(10) NOT NULL DEFAULT 'root',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wardboy`
--

INSERT INTO `wardboy` (`id`, `shifts`, `salary`, `pass`) VALUES
('4', 'morning', 0, 'root'),
('w', 'morning', 4000, 'root'),
('w1', 'morning', 2000, 'root'),
('w2', 'night', 2500, 'root');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointpatient`
--
ALTER TABLE `appointpatient`
  ADD CONSTRAINT `appointpatient_ibfk_1` FOREIGN KEY (`receptionistid`) REFERENCES `receptionist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointpatient_ibfk_2` FOREIGN KEY (`docid`) REFERENCES `doctor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointpatient_ibfk_3` FOREIGN KEY (`patientid`) REFERENCES `patient` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cleaningservice`
--
ALTER TABLE `cleaningservice`
  ADD CONSTRAINT `cleaningservice_ibfk_1` FOREIGN KEY (`wardboyid`) REFERENCES `wardboy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cleaningservice_ibfk_2` FOREIGN KEY (`roomno`) REFERENCES `room` (`no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`nurseid`) REFERENCES `nurse` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`roomno`) REFERENCES `room` (`no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD CONSTRAINT `receptionist_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testsuggestion`
--
ALTER TABLE `testsuggestion`
  ADD CONSTRAINT `testsuggestion_ibfk_1` FOREIGN KEY (`docid`) REFERENCES `doctor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `testsuggestion_ibfk_2` FOREIGN KEY (`testname`) REFERENCES `test` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `testsuggestion_ibfk_3` FOREIGN KEY (`patientid`) REFERENCES `patient` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wardboy`
--
ALTER TABLE `wardboy`
  ADD CONSTRAINT `wardboy_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
