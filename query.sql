
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2016 at 10:18 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6638524_all`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `message` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` VALUES(1, 'A', 'a@g.com', '1234567899', 'Hhi', '0000-00-00 00:00:00');
INSERT INTO `query` VALUES(2, 'A', 'a@g.com', '1234567899', 'Hhi', '0000-00-00 00:00:00');
INSERT INTO `query` VALUES(3, 'A', 'a@g.com', '1234567899', 'Hhi', '0000-00-00 00:00:00');
INSERT INTO `query` VALUES(4, 'A', 'a@g.com', '1234567899', 'Hhi', '0000-00-00 00:00:00');
INSERT INTO `query` VALUES(5, 'mukesh', 'm@gmail.com', '9334040203', 'hello php', '0000-00-00 00:00:00');
INSERT INTO `query` VALUES(6, 'Sonia', 'd@gmail.com', '1234567899', 'Hell\nI\nHave\nA query about\nDesigning of\nWeb\nPage', '2016-03-28 05:15:11');
INSERT INTO `query` VALUES(7, 'Anshul ', 'kgupta900@yahoo.com', '9810693398', 'I hav to do advanced PHP.. ', '2016-03-29 05:48:30');
INSERT INTO `query` VALUES(8, 'Anshul ', 'kgupta900@yahoo.com', '9810693398', 'I hav to do advanced PHP.. ', '2016-03-29 05:48:30');
INSERT INTO `query` VALUES(9, 'Anshul ', 'kgupta900@yahoo.com', '9810693398', 'I hav to do advanced PHP.. ', '2016-03-29 05:48:31');
INSERT INTO `query` VALUES(10, 'were', 's@g.com', '1234567890', 'mgfiorjgt', '2016-03-31 02:06:31');
INSERT INTO `query` VALUES(11, 'navneet', 'navneetkumarbaghel@gmail.com', '9868616683', 'Hiiiiiii', '2016-04-07 04:40:01');
INSERT INTO `query` VALUES(12, 'mukesh', 'abc@gmail.com', '1234567899', 'Gayshevhejen', '2016-04-11 03:51:40');
INSERT INTO `query` VALUES(13, 'mukesh', 'aaaa@gmail.com', '5544444444', 'fgyghjgkj', '2016-04-11 05:17:57');
INSERT INTO `query` VALUES(14, 'fdsvsd', 'abhikaltec@gmail.com', '9717707343', 'hui', '2016-04-13 02:36:16');
INSERT INTO `query` VALUES(15, 'sdf', 'sds@dd.mi', '1234567890', 'sdfsd', '2016-04-17 02:17:21');
