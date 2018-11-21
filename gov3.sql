-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2018 at 07:59 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gov3`
--

-- --------------------------------------------------------

--
-- Table structure for table `affidavits`
--

DROP TABLE IF EXISTS `affidavits`;
CREATE TABLE IF NOT EXISTS `affidavits` (
  `aid` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

DROP TABLE IF EXISTS `caste`;
CREATE TABLE IF NOT EXISTS `caste` (
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `casteeligibility`
--

DROP TABLE IF EXISTS `casteeligibility`;
CREATE TABLE IF NOT EXISTS `casteeligibility` (
  `name` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  PRIMARY KEY (`name`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
CREATE TABLE IF NOT EXISTS `certificates` (
  `cid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

DROP TABLE IF EXISTS `domain`;
CREATE TABLE IF NOT EXISTS `domain` (
  `domain_id` varchar(7) NOT NULL,
  `no_of_schemes` int(50) NOT NULL,
  `domain_name` varchar(30) NOT NULL,
  PRIMARY KEY (`domain_id`),
  UNIQUE KEY `domain_name` (`domain_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eligibility`
--

DROP TABLE IF EXISTS `eligibility`;
CREATE TABLE IF NOT EXISTS `eligibility` (
  `id` varchar(15) NOT NULL,
  `statename` varchar(30) DEFAULT NULL,
  `gendercode` varchar(15) NOT NULL,
  `upperagelimit` int(150) DEFAULT NULL,
  `loweragelimit` int(150) DEFAULT NULL,
  `upperincomelevel` int(15) DEFAULT NULL,
  `religionname` varchar(15) NOT NULL,
  `nationalitycountry` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `statename` (`statename`),
  KEY `gendercode` (`gendercode`),
  KEY `religionname` (`religionname`),
  KEY `nationalitycountry` (`nationalitycountry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eligibilityqualifications`
--

DROP TABLE IF EXISTS `eligibilityqualifications`;
CREATE TABLE IF NOT EXISTS `eligibilityqualifications` (
  `code` varchar(15) NOT NULL,
  `id` varchar(15) NOT NULL,
  PRIMARY KEY (`code`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eligiblefor`
--

DROP TABLE IF EXISTS `eligiblefor`;
CREATE TABLE IF NOT EXISTS `eligiblefor` (
  `uid` varchar(15) NOT NULL,
  `scheme_id` varchar(15) NOT NULL,
  PRIMARY KEY (`uid`,`scheme_id`),
  KEY `scheme_id` (`scheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE IF NOT EXISTS `gender` (
  `gendercode` varchar(15) NOT NULL,
  PRIMARY KEY (`gendercode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logincredentials`
--

DROP TABLE IF EXISTS `logincredentials`;
CREATE TABLE IF NOT EXISTS `logincredentials` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

DROP TABLE IF EXISTS `nationality`;
CREATE TABLE IF NOT EXISTS `nationality` (
  `country` varchar(10) NOT NULL,
  PRIMARY KEY (`country`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perksprovided`
--

DROP TABLE IF EXISTS `perksprovided`;
CREATE TABLE IF NOT EXISTS `perksprovided` (
  `aidname` varchar(30) NOT NULL,
  PRIMARY KEY (`aidname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiledetails`
--

DROP TABLE IF EXISTS `profiledetails`;
CREATE TABLE IF NOT EXISTS `profiledetails` (
  `userid` varchar(15) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `statename` varchar(30) NOT NULL,
  `castename` varchar(15) NOT NULL,
  `religioncode` varchar(15) NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `userid` (`userid`),
  KEY `country` (`country`),
  KEY `statename` (`statename`),
  KEY `castename` (`castename`),
  KEY `religioncode` (`religioncode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profilequalifications`
--

DROP TABLE IF EXISTS `profilequalifications`;
CREATE TABLE IF NOT EXISTS `profilequalifications` (
  `userid` varchar(30) NOT NULL,
  `code` varchar(15) NOT NULL,
  PRIMARY KEY (`userid`,`code`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provides`
--

DROP TABLE IF EXISTS `provides`;
CREATE TABLE IF NOT EXISTS `provides` (
  `aidname` varchar(30) NOT NULL,
  `scheme_id` varchar(15) NOT NULL,
  PRIMARY KEY (`aidname`,`scheme_id`),
  KEY `scheme_id` (`scheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
CREATE TABLE IF NOT EXISTS `qualifications` (
  `degreename` varchar(30) NOT NULL,
  `code` varchar(15) NOT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `degreename` (`degreename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

DROP TABLE IF EXISTS `religion`;
CREATE TABLE IF NOT EXISTS `religion` (
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requiresaffidavits`
--

DROP TABLE IF EXISTS `requiresaffidavits`;
CREATE TABLE IF NOT EXISTS `requiresaffidavits` (
  `aid` varchar(20) NOT NULL,
  `scheme_id` varchar(15) NOT NULL,
  PRIMARY KEY (`aid`,`scheme_id`),
  KEY `scheme_id` (`scheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirescertificates`
--

DROP TABLE IF EXISTS `requirescertificates`;
CREATE TABLE IF NOT EXISTS `requirescertificates` (
  `cid` varchar(15) NOT NULL,
  `scheme_id` varchar(15) NOT NULL,
  PRIMARY KEY (`cid`,`scheme_id`),
  KEY `scheme_id` (`scheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

DROP TABLE IF EXISTS `schemes`;
CREATE TABLE IF NOT EXISTS `schemes` (
  `domain_id` varchar(15) NOT NULL,
  `scheme_id` varchar(15) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `result_date` date DEFAULT NULL,
  `type1` set('private','government') DEFAULT NULL,
  `type2` set('central','state') DEFAULT NULL,
  `type3` set('individual','group') DEFAULT NULL,
  `scheme_name` varchar(100) NOT NULL,
  `eligibilityid` varchar(15) NOT NULL,
  `application_fee` int(8) NOT NULL,
  PRIMARY KEY (`scheme_id`),
  UNIQUE KEY `scheme_name` (`scheme_name`),
  KEY `domain_id` (`domain_id`),
  KEY `eligibilityid` (`eligibilityid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `statename` varchar(15) NOT NULL,
  PRIMARY KEY (`statename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casteeligibility`
--
ALTER TABLE `casteeligibility`
  ADD CONSTRAINT `casteeligibility_ibfk_1` FOREIGN KEY (`id`) REFERENCES `eligibility` (`id`),
  ADD CONSTRAINT `casteeligibility_ibfk_2` FOREIGN KEY (`name`) REFERENCES `caste` (`name`);

--
-- Constraints for table `eligibility`
--
ALTER TABLE `eligibility`
  ADD CONSTRAINT `eligibility_ibfk_1` FOREIGN KEY (`statename`) REFERENCES `state` (`statename`),
  ADD CONSTRAINT `eligibility_ibfk_2` FOREIGN KEY (`gendercode`) REFERENCES `gender` (`gendercode`),
  ADD CONSTRAINT `eligibility_ibfk_3` FOREIGN KEY (`religionname`) REFERENCES `religion` (`name`),
  ADD CONSTRAINT `eligibility_ibfk_4` FOREIGN KEY (`nationalitycountry`) REFERENCES `nationality` (`country`);

--
-- Constraints for table `eligibilityqualifications`
--
ALTER TABLE `eligibilityqualifications`
  ADD CONSTRAINT `eligibilityqualifications_ibfk_1` FOREIGN KEY (`code`) REFERENCES `qualifications` (`code`),
  ADD CONSTRAINT `eligibilityqualifications_ibfk_2` FOREIGN KEY (`id`) REFERENCES `eligibility` (`id`);

--
-- Constraints for table `eligiblefor`
--
ALTER TABLE `eligiblefor`
  ADD CONSTRAINT `eligiblefor_ibfk_1` FOREIGN KEY (`scheme_id`) REFERENCES `schemes` (`scheme_id`),
  ADD CONSTRAINT `eligiblefor_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `logincredentials`
--
ALTER TABLE `logincredentials`
  ADD CONSTRAINT `logincredentials_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `profiledetails`
--
ALTER TABLE `profiledetails`
  ADD CONSTRAINT `profiledetails_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `profiledetails_ibfk_2` FOREIGN KEY (`country`) REFERENCES `nationality` (`country`),
  ADD CONSTRAINT `profiledetails_ibfk_3` FOREIGN KEY (`statename`) REFERENCES `state` (`statename`),
  ADD CONSTRAINT `profiledetails_ibfk_4` FOREIGN KEY (`castename`) REFERENCES `caste` (`name`),
  ADD CONSTRAINT `profiledetails_ibfk_5` FOREIGN KEY (`religioncode`) REFERENCES `religion` (`name`);

--
-- Constraints for table `profilequalifications`
--
ALTER TABLE `profilequalifications`
  ADD CONSTRAINT `profilequalifications_ibfk_1` FOREIGN KEY (`code`) REFERENCES `qualifications` (`code`),
  ADD CONSTRAINT `profilequalifications_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `profiledetails` (`userid`);

--
-- Constraints for table `provides`
--
ALTER TABLE `provides`
  ADD CONSTRAINT `provides_ibfk_1` FOREIGN KEY (`aidname`) REFERENCES `perksprovided` (`aidname`),
  ADD CONSTRAINT `provides_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `schemes` (`scheme_id`);

--
-- Constraints for table `requiresaffidavits`
--
ALTER TABLE `requiresaffidavits`
  ADD CONSTRAINT `requiresaffidavits_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `affidavits` (`aid`),
  ADD CONSTRAINT `requiresaffidavits_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `schemes` (`scheme_id`);

--
-- Constraints for table `requirescertificates`
--
ALTER TABLE `requirescertificates`
  ADD CONSTRAINT `requirescertificates_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `certificates` (`cid`),
  ADD CONSTRAINT `requirescertificates_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `schemes` (`scheme_id`);

--
-- Constraints for table `schemes`
--
ALTER TABLE `schemes`
  ADD CONSTRAINT `schemes_ibfk_1` FOREIGN KEY (`domain_id`) REFERENCES `domain` (`domain_id`),
  ADD CONSTRAINT `schemes_ibfk_2` FOREIGN KEY (`eligibilityid`) REFERENCES `eligibility` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
