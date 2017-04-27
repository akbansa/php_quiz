-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 05:49 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quest`
--

-- --------------------------------------------------------

--
-- Table structure for table `quest`
--

CREATE TABLE IF NOT EXISTS `quest` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `quest` varchar(200) NOT NULL,
  `op1` varchar(100) DEFAULT NULL,
  `op2` varchar(100) DEFAULT NULL,
  `op3` varchar(100) DEFAULT NULL,
  `noopt` int(11) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `quest`
--

INSERT INTO `quest` (`qid`, `quest`, `op1`, `op2`, `op3`, `noopt`) VALUES
(1, 'Age', 'upto 30 years', '30-40 years', '40 years and above', 1),
(2, 'No. of Dependents', '0', '1-2', '2 and above', 1),
(3, 'Employment Sector', 'Govt. Sector', 'Private Sector', 'Self Employed', 1),
(4, 'Age', 'upto 30 years', '30-40 years', '40 years and above', 2),
(5, 'No. of Dependents', '0', '1-2', '2 and above', 2),
(6, 'Employment Sector', 'Govt. Sector', 'Private Sector', 'Self Employed', 2),
(7, 'Age', 'upto 30 years', '30-40 years', '40 years and above', 3),
(8, 'No. of Dependents', '0', '1-2', '2 and above', 3),
(9, 'Employment Sector', 'Govt. Sector', 'Private Sector', 'Self Employed', 3),
(10, 'Age', 'upto 30 years', '30-40 years', '40 years and above', 4),
(11, 'No. of Dependents', '0', '1-2', '2 and above', 4),
(12, 'Employment Sector', 'Govt. Sector', 'Private Sector', 'Self Employed', 4),
(13, 'Age', 'upto 30 years', '30-40 years', '40 years and above', 5),
(14, 'No. of Dependents', '0', '1-2', '2 and above', 5),
(15, 'Employment Sector', 'Govt. Sector', 'Private Sector', 'Self Employed', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
