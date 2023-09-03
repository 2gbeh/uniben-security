-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2021 at 02:33 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usec_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `@tmp`
--

DROP TABLE IF EXISTS `@tmp`;
CREATE TABLE IF NOT EXISTS `@tmp` (
  `admin_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `names` varchar(50) NOT NULL,
  `gender` enum('M','F') NOT NULL DEFAULT 'M',
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL DEFAULT 'oeii2020',
  `access` int(1) NOT NULL DEFAULT '0',
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`names`, `gender`, `email`, `phone`, `username`, `password`, `access`, `STATUS`, `DATE`, `ID`) VALUES
('tugbeh emmanuel', 'M', 'dehphantom@yahoo.com', '08169960927', '2gbeh', '4444', 4, 0, '2021-01-20 14:32:33', 1),
('imonah emmanuel', 'M', NULL, '09057198780', 'admin', '1234', 2, 0, '2021-01-20 14:32:33', 2);

-- --------------------------------------------------------

--
-- Table structure for table `keylog`
--

DROP TABLE IF EXISTS `keylog`;
CREATE TABLE IF NOT EXISTS `keylog` (
  `admin_id` int(11) NOT NULL,
  `page` varchar(25) NOT NULL,
  `action` int(1) NOT NULL DEFAULT '0',
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='admin activity log';

--
-- Dumping data for table `keylog`
--

INSERT INTO `keylog` (`admin_id`, `page`, `action`, `STATUS`, `DATE`, `ID`) VALUES
(2, 'index.php', 0, 0, '2021-01-20 14:33:42', 1),
(1, 'index.php', 0, 0, '2021-01-20 14:40:17', 2),
(1, 'index.php', 0, 0, '2021-01-20 16:00:54', 3),
(2, 'index.php', 0, 0, '2021-01-21 08:13:46', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `user_id` int(11) NOT NULL,
  `message` varchar(750) NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `message` (`message`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `pass` varchar(25) NOT NULL DEFAULT 'nopass.png',
  `surname` varchar(15) NOT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `fname` varchar(15) NOT NULL,
  `sex` enum('M','F') NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(160) NOT NULL,
  `country` char(3) NOT NULL DEFAULT 'NGA',
  `state` int(3) NOT NULL,
  `lgo` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `edu` varchar(25) NOT NULL,
  `ict` int(1) NOT NULL,
  `emp` varchar(50) NOT NULL DEFAULT 'N/A',
  `emp_addr` varchar(160) NOT NULL DEFAULT 'N/A',
  `marital` int(1) NOT NULL,
  `spouse_bio` varchar(160) NOT NULL DEFAULT 'N/A',
  `children` int(3) NOT NULL DEFAULT '0',
  `kin_name` varchar(50) NOT NULL,
  `kin_rel` varchar(15) NOT NULL,
  `kin_bio` varchar(160) NOT NULL,
  `crime` int(1) NOT NULL,
  `crime_reason` varchar(160) NOT NULL DEFAULT 'N/A',
  `cult` int(1) NOT NULL,
  `cult_name` varchar(25) NOT NULL DEFAULT 'N/A',
  `sign` varchar(25) NOT NULL DEFAULT 'nosign.png',
  `reg_date` date NOT NULL,
  `thumb` varchar(25) NOT NULL DEFAULT 'nothumb.png',
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`pass`, `surname`, `mname`, `fname`, `sex`, `dob`, `address`, `country`, `state`, `lgo`, `email`, `phone`, `edu`, `ict`, `emp`, `emp_addr`, `marital`, `spouse_bio`, `children`, `kin_name`, `kin_rel`, `kin_bio`, `crime`, `crime_reason`, `cult`, `cult_name`, `sign`, `reg_date`, `thumb`, `STATUS`, `DATE`, `ID`) VALUES
('pass.jpg', 'Ejenwengbe', 'Martins', 'Monday', 'M', '1968-05-13', '2 Utomwen Street, off new Lagos Road, Benin City', 'NGA', 13, 'Orhionmwon', 'martins.efenwengbe@uniben.edu', '08058766449', 'First Degre', 1, 'Piedmount Nig Limited', 'Ologbo, Oredo', 2, '2 Utomwen Street, off new Lagos Road, Benin City', 4, 'Stanley Onyenkachi Efenwengbe', 'Son', '2 Utomwen Street, off new Lagos Road, Benin City', 2, ' 	N/A ', 2, ' 	N/A', 'sign.jpg', '2021-01-21', 'thumb.jpg', 0, '2021-01-21 11:05:29', 1),
('pass.png', 'Doe', '', 'John', 'F', '1990-09-17', 'No. 1 College Road, Agbor, Delta State', 'NGA', 11, 'Agbor-Obi', 'jdoe@example.com', '08012345678', 'B.Sc.', 0, 'D. Peterson Foundation', 'No. 6 Orikeze Avenue, Agbor-Obi, Delta State', 2, 'Jane Doe', 2, 'Jack Doe', 'Son', 'No. 1 College Road, Agbor, Delta State', 2, 'N/A', 2, 'N/A', 'sign.png', '2021-01-20', 'thumb.png', 0, '2021-01-21 15:48:27', 2),
('nopass.png', 'Tugbeh', 'Osaretin', 'Emmanuel', 'M', '1992-09-15', '39B Uwasota Road, Ugbowo, Benin City, Edo State', 'NGA', 13, 'Uhunmwode', '', '08169960927', 'M.Sc.', 0, 'N/A', 'N/A', 1, 'N/A', 0, 'Roseline Abieyuwa Tugbeh', 'Mother', '39B Uwasota Road, Ugbowo, Benin City, Edo State', 2, 'N/A', 2, 'N/A', 'nosign.png', '2021-01-22', 'nothumb.png', 0, '2021-01-21 15:48:27', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
