-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 03:53 AM
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
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(3) NOT NULL,
  `result` varchar(200) NOT NULL,
  `percent` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `result`, `percent`) VALUES
(1, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '10%'),
(2, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '20%'),
(3, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '30%'),
(4, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '40%'),
(5, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '50%'),
(6, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '60%'),
(7, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '70%'),
(8, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '80%'),
(9, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '90%'),
(10, 'Fixed Deposits/Taxsaver Fixed deposit/Recurring Deposits', '100%'),
(11, 'Equity Linked Savings Scheme (ELSS)', '10%'),
(12, 'Equity Linked Savings Scheme (ELSS)', '20%'),
(13, 'Equity Linked Savings Scheme (ELSS)', '30%'),
(14, 'Equity Linked Savings Scheme (ELSS)', '40%'),
(15, 'Equity Linked Savings Scheme (ELSS)', '50%'),
(16, 'Equity Linked Savings Scheme (ELSS)', '60%'),
(17, 'Equity Linked Savings Scheme (ELSS)', '70%'),
(18, 'Equity Linked Savings Scheme (ELSS)', '80%'),
(19, 'Equity Linked Savings Scheme (ELSS)', '90%'),
(20, 'Equity Linked Savings Scheme (ELSS)', '100%'),
(21, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '10%'),
(22, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '20%'),
(23, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '30%'),
(24, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '40%'),
(25, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '50%'),
(26, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '60%'),
(27, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '70%'),
(28, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '80%'),
(29, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '90%'),
(30, 'Mutual Funds (Equity & Debt funds)/Systematic Investment Plan(SIP)', '100%'),
(31, 'Equity Stocks & Shares/Initial Public Offerings', '10%'),
(32, 'Equity Stocks & Shares/Initial Public Offerings', '20%'),
(33, 'Equity Stocks & Shares/Initial Public Offerings', '30%'),
(34, 'Equity Stocks & Shares/Initial Public Offerings', '40%'),
(35, 'Equity Stocks & Shares/Initial Public Offerings', '50%'),
(36, 'Equity Stocks & Shares/Initial Public Offerings', '60%'),
(37, 'Equity Stocks & Shares/Initial Public Offerings', '70%'),
(38, 'Equity Stocks & Shares/Initial Public Offerings', '80%'),
(39, 'Equity Stocks & Shares/Initial Public Offerings', '90%'),
(40, 'Equity Stocks & Shares/Initial Public Offerings', '100%'),
(41, 'Public Provident Fund', '10%'),
(42, 'Public Provident Fund', '20%'),
(43, 'Public Provident Fund', '40%'),
(44, 'Public Provident Fund', '40%'),
(45, 'Public Provident Fund', '50%'),
(46, 'Public Provident Fund', '60%'),
(47, 'Public Provident Fund', '70%'),
(48, 'Public Provident Fund', '80%'),
(49, 'Public Provident Fund', '90%'),
(50, 'Public Provident Fund', '100%'),
(51, 'Pension Scheme', '10%'),
(52, 'Pension Scheme', '20%'),
(53, 'Pension Scheme', '50%'),
(54, 'Pension Scheme', '40%'),
(55, 'Pension Scheme', '50%'),
(56, 'Pension Scheme', '60%'),
(57, 'Pension Scheme', '70%'),
(58, 'Pension Scheme', '80%'),
(59, 'Pension Scheme', '90%'),
(60, 'Pension Scheme', '100%'),
(61, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '10%'),
(62, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '20%'),
(63, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '60%'),
(64, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '40%'),
(65, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '50%'),
(66, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '60%'),
(67, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '70%'),
(68, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '80%'),
(69, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '90%'),
(70, 'Physical Gold/Gold ETF (Exchange Traded Funds)', '100%'),
(71, 'Term Insurance Plan', '10%'),
(72, 'Term Insurance Plan', '20%'),
(73, 'Term Insurance Plan', '70%'),
(74, 'Term Insurance Plan', '40%'),
(75, 'Term Insurance Plan', '50%'),
(76, 'Term Insurance Plan', '60%'),
(77, 'Term Insurance Plan', '70%'),
(78, 'Term Insurance Plan', '80%'),
(79, 'Term Insurance Plan', '90%'),
(80, 'Term Insurance Plan', '100%'),
(81, 'Endowment Policy', '10%'),
(82, 'Endowment Policy', '20%'),
(83, 'Endowment Policy', '80%'),
(84, 'Endowment Policy', '40%'),
(85, 'Endowment Policy', '50%'),
(86, 'Endowment Policy', '60%'),
(87, 'Endowment Policy', '70%'),
(88, 'Endowment Policy', '80%'),
(89, 'Endowment Policy', '90%'),
(90, 'Endowment Policy', '100%'),
(91, 'Unit Linked Insurance Plan(ULIP)', '10%'),
(92, 'Unit Linked Insurance Plan(ULIP)', '20%'),
(93, 'Unit Linked Insurance Plan(ULIP)', '90%'),
(94, 'Unit Linked Insurance Plan(ULIP)', '40%'),
(95, 'Unit Linked Insurance Plan(ULIP)', '50%'),
(96, 'Unit Linked Insurance Plan(ULIP)', '60%'),
(97, 'Unit Linked Insurance Plan(ULIP)', '70%'),
(98, 'Unit Linked Insurance Plan(ULIP)', '80%'),
(99, 'Unit Linked Insurance Plan(ULIP)', '90%'),
(100, 'Unit Linked Insurance Plan(ULIP)', '100%');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
