-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2020 at 06:02 PM
-- Server version: 5.7.29-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satrus32_T250`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_loans`
--

CREATE TABLE `approved_loans` (
  `id` int(255) NOT NULL,
  `accno` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amt` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `dura` varchar(255) NOT NULL,
  `mreturn` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved_loans`
--

INSERT INTO `approved_loans` (`id`, `accno`, `ref`, `type`, `amt`, `interest`, `dura`, `mreturn`, `status`) VALUES
(4, '2575845937', 'HORLOAN333', 'Car', '1,000,000', '22.10', '12', '15,210', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(255) NOT NULL,
  `sn` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `cardpin` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `accno` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `sn`, `exp`, `cvv`, `cardpin`, `type`, `accno`) VALUES
(4, '538990871128890', '12/20', '390', '8213', 'Master', '2575845937'),
(5, '42357859873453', '12/22', '323', '2323', 'Visa', '2575845937');

-- --------------------------------------------------------

--
-- Table structure for table `cot`
--

CREATE TABLE `cot` (
  `id` int(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cot`
--

INSERT INTO `cot` (`id`, `pin`, `type`) VALUES
(47, '273194', 'HMT CODE');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(255) NOT NULL,
  `acct` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dobd` varchar(255) NOT NULL,
  `dobm` varchar(255) NOT NULL,
  `doby` varchar(255) NOT NULL,
  `telcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(2222) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `country` varchar(2000) NOT NULL,
  `enrolldate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `acct`, `title`, `name`, `dobd`, `dobm`, `doby`, `telcode`, `phone`, `email`, `address`, `postcode`, `country`, `enrolldate`) VALUES
(5, 'Current', 'Ms', 'Mike Okaf', '11', 'April', '1990', '213', '10202', 'anc@gmci.com', '102 Lord', '18822', 'Bahrain', '04:21 PM 14 Jul 2019'),
(6, 'Savings', 'Prof', 'John Smith', '11', 'February', '1990', '1', '28273333', 'pamelawenzel4@gmail.com', '102 Wood Land View, Union Hall City, United States', '92927', 'United States of America', '05:40 AM 16 Jul 2019'),
(7, 'Current', 'Mr', 'obinna steve', '24', 'July', '1988', '233', '559933436', 'diazwaxon@gmail.com', 'plot 22 tema', '0233', 'Ghana', '04:52 AM 17 Jul 2019'),
(8, 'Savings', 'Mr', 'john smith', '03', 'August', '1954', '234', '908876543', 'caroladams410@gmail.com', '123 wuse Abuja', '32212', 'Nigeria', '01:54 PM 22 Jul 2019'),
(9, 'Current', 'Mr', 'MICHEAL DESMOND', '24', 'December', '1980', '91', '9821131939', 'ifedibasia1@gmail.com', 'NEW DELHI INDIA', '11001', 'India', '04:18 AM 27 Jul 2019'),
(10, 'Savings', 'Mr', 'murat yazÄ±cÄ±', '25', 'December', '1999', '90', '5314731217', 'hababam.family@gmail.com', 'nur sokak huzur apartman', '34000', 'Turkey', '02:13 PM 27 Jul 2019'),
(11, 'Savings', 'Mr', 'abuk junior', '14', 'January', '1990', '234', '8036338655', 'donabuk@gmail.com', '15 amufi road', '23480', 'Nigeria', '11:23 AM 10 Sep 2019'),
(12, 'Non-Resident Offshore', 'Mr', 'abuk don', '14', 'January', '1990', '234', '8036338655', 'donabuk@gmail.com', '16 amufi road', '23480', 'Nigeria', '11:26 AM 10 Sep 2019');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment2`
--

CREATE TABLE `enrollment2` (
  `id` int(255) NOT NULL,
  `accno` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `q1` varchar(2000) NOT NULL,
  `ans1` varchar(2552) NOT NULL,
  `q2` varchar(2222) NOT NULL,
  `ans2` varchar(2222) NOT NULL,
  `regdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment2`
--

INSERT INTO `enrollment2` (`id`, `accno`, `pin`, `email`, `q1`, `ans1`, `q2`, `ans2`, `regdate`) VALUES
(1, '272282', '222', 'ab@gmcicim.com', 'What is thdhdhe name of your best actor ?', '7722', 'What is your favorite book?', '82828', ''),
(2, '292928883', '334455', 'pamelawenzel4@gmail.', 'What is the name of your best actor ?', 'Mike', 'What is your favorite book?', 'Novel', '05:44 AM 16 Jul 2019'),
(3, '78975767889', '1988', 'diazwaxon@gmail.com', 'What is the name of your best actor ?', 'trump', 'What is your favorite book?', 'bible', '04:54 AM 17 Jul 2019'),
(4, '201290398', '202019', 'caroladams410@gmail.', 'What is the name of your best actor ?', 'honda', 'What is your favorite book?', 'things fall aprt', '01:55 PM 22 Jul 2019'),
(5, '0030417155', '11111', 'ifedibasia1@gmail.co', 'What is the name of your best actor ?', 'Morgan', 'What is your favorite book?', 'Bible', '04:20 AM 27 Jul 2019'),
(6, '10135868888', '258456', 'hababam.family@gmail', 'What is the name of your best actor ?', 'jason statham', 'What is your favorite book?', 'ÅŸeker portakalÄ±', '02:14 PM 27 Jul 2019');

-- --------------------------------------------------------

--
-- Table structure for table `imf`
--

CREATE TABLE `imf` (
  `id` int(255) NOT NULL,
  `pin` varchar(232) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imf`
--

INSERT INTO `imf` (`id`, `pin`, `type`) VALUES
(1, '445577', 'IMF');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `pin`, `type`) VALUES
(1, '925875', 'tax');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `balance` double NOT NULL,
  `pin` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `msg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `user_id`, `acc_no`, `type`, `balance`, `pin`, `status`, `bdate`, `msg`) VALUES
(1, 1, '1300746143', 'ChA', 480000, 12345, 'ACTIVE', '2020-05-02 07:03:08', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `country` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`id`, `user_id`, `address`, `city`, `state`, `zipcode`, `country`) VALUES
(1, 1, 'No 1  Alihagwu, Market street', 'Agbor', 'Adamawa', 332011, 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(10) NOT NULL,
  `tx_no` varchar(20) NOT NULL,
  `tx_type` varchar(10) NOT NULL,
  `amount` double NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `to_accno` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tdate` varchar(40) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `tx_no`, `tx_type`, `amount`, `date`, `description`, `to_accno`, `status`, `tdate`, `comments`, `email`, `phone`) VALUES
(120, 'TX83', 'CREDIT', 1200, '2019-09-22 19:06:51', 'Fund transfer of $1200 to Account 2575845937 Reference# TX83', '2575845937', 'SUCCESS', '10/04/2019', 'ss', 'pamelawenzel4@gmail.com', '09055465822'),
(121, 'TX84', 'CREDIT', 1200, '2019-09-23 02:54:07', 'Fund transfer of $1200 to Account 2575845937 Reference# TX84', '2575845937', 'SUCCESS', '10/04/2019', 'hello', 'pamelawenzel4@gmail.com', '09055465822'),
(122, 'TX85', 'CREDIT', 2000, '2019-09-23 02:58:06', 'Fund transfer of $2000 to Account 2575845937 Reference# TX85', '2575845937', 'SUCCESS', '10/04/2019', 'hello', 'pamelawenzel4@gmail.com', '09055465822'),
(123, 'TX86', 'CREDIT', 1200, '2019-09-23 02:59:01', 'Fund transfer of $1200 to Account 2575845937 Reference# TX86', '2575845937', 'SUCCESS', '10/04/2019', '1', 'pamelawenzel4@gmail.com', '09055465822'),
(124, 'TX87', 'CREDIT', 40000, '2019-09-23 02:59:32', 'Fund transfer of $40000 to Account 2575845937 Reference# TX87', '2575845937', 'SUCCESS', '10/04/2019', 'hh', 'pamelawenzel4@gmail.com', '09055465822'),
(125, 'TX88', 'DEBIT', 1200, '2019-09-23 03:01:08', 'Fund transfer of $1200 to Account 2575845937 Reference# TX88', '2575845937', 'SUCCESS', '10/04/2019', '1', 'pamelawenzel4@gmail.com', '09055465822'),
(126, 'TX89', 'CREDIT', 100, '2019-09-23 03:04:26', 'Fund transfer of $100 to Account 2575845937 Reference# TX89', '2575845937', 'SUCCESS', '10/04/2019', 'hell', 'pamelawenzel4@gmail.com', '09055465822'),
(127, 'TX90', 'debit', 1000, '2019-09-24 10:20:41', 'Fund transfer of $1000 to Account 22277272727727 Reference# TX90', '2575845937', 'SUCCESS', '1990-11-11', 'hello', '', ''),
(128, 'TX91', 'debit', 1000, '2019-09-24 10:24:10', 'Fund transfer of $1000 to Account 27273382828 Reference# TX91', '2575845937', 'SUCCESS', '1990-11-11', 'hello', '', ''),
(129, 'TX92', 'debit', 1000, '2019-09-24 10:37:10', 'Fund transfer of $1000 to Account 83838383888 Reference# TX92', '2575845937', 'SUCCESS', '1990-11-11', 'shshs', '', ''),
(130, 'TX93', 'debit', 1000, '2019-09-24 10:44:29', 'Fund transfer of $1000 to Account 28288282888 Reference# TX93', '2575845937', 'SUCCESS', '1990-11-11', 'hello', '', ''),
(131, 'TX94', 'debit', 2000, '2019-09-24 10:52:46', 'Fund transfer of $2000 to Account 38373773777 Reference# TX94', '2575845937', 'SUCCESS', '1990-11-11', 'HELLO THIS IS A LERT FROM NOTSDHA', '', ''),
(132, 'TX95', 'debit', 2000, '2019-09-24 11:00:24', 'Fund transfer of $2000 to Account 37377383888 Reference# TX95', '2575845937', 'SUCCESS', '1990-11-11', 'hdhhd', '', ''),
(133, 'TX96', 'debit', 2000, '2019-09-24 11:22:02', 'Fund transfer of $2000 to Account 27272727288 Reference# TX96', '2575845937', 'SUCCESS', '2019-11-11', 'hello bro', '', ''),
(134, 'TX97', 'debit', 1828, '2019-09-24 11:33:06', 'Fund transfer of $1828 to Account 737373738388 Reference# TX97', '2575845937', 'SUCCESS', '2019-11-11', 'hello', '', ''),
(135, 'TX98', 'debit', 2999, '2019-09-24 11:49:07', 'Fund transfer of $2999 to Account 8388383888 Reference# TX98', '2575845937', 'SUCCESS', '1190-11-11', 'dhdh', '', ''),
(136, 'TX99', 'debit', 277, '2019-09-24 12:02:44', 'Fund transfer of $277 to Account 27272727777 Reference# TX99', '2575845937', 'SUCCESS', '1990-11-11', 'HDHD', '', ''),
(137, 'TX100', 'CREDIT', 2000, '2019-09-24 12:20:05', 'Fund transfer of $2000 to Account 2575845937 Reference# TX100', '2575845937', 'SUCCESS', '11/03/2019', 'HSBC BANK DEPOSIT', 'pamelawenzel4@gmail.com', '09055465822'),
(138, 'TX101', 'CREDIT', 1000, '2019-09-24 12:22:07', 'Fund transfer of $1000 to Account 2575845937 Reference# TX101', '2575845937', 'SUCCESS', '10/04/2019', '11', 'pamelawenzel4@gmail.com', '09055465822'),
(139, 'TX102', 'DEBIT', 1200, '2019-09-24 12:22:46', 'Fund transfer of $1200 to Account 2575845937 Reference# TX102', '2575845937', 'SUCCESS', '10/01/2018', '11', 'pamelawenzel4@gmail.com', '09055465822'),
(140, 'TX103', 'credit', 2000, '2019-09-24 12:24:40', 'Fund transfer of $2000 to Account 2575845937 Reference# TX103', '2575845937', 'SUCCESS', '10/05/2019', 'hello', 'pamelawenzel4@gmail.com', '09055465822'),
(141, 'TX104', 'credit', 50000, '2019-09-24 12:30:38', 'Fund transfer of $50000 to Account 2575845937 Reference# TX104', '2575845937', 'SUCCESS', '10/07/2019', 'HELLO FCMB', 'pamelawenzel4@gmail.com', '09055465822'),
(142, 'TX105', 'credit', 1200, '2019-09-24 12:33:28', 'Fund transfer of $1200 to Account 2575845937 Reference# TX105', '2575845937', 'SUCCESS', '11/03/2019', 'hell chuks', 'pamelawenzel4@gmail.com', '09055465822'),
(143, 'TX106', 'debit', 1000, '2019-09-24 16:32:18', 'Fund transfer of $1000 to Account 37337737373 Reference# TX106', '2575845937', 'SUCCESS', '2019-09-02', 'hello', '', ''),
(144, 'TX107', 'debit', 2000, '2019-09-24 17:44:07', 'Fund transfer of $2000 to Account 32737377388 Reference# TX107', '2575845937', 'SUCCESS', '1990-11-11', 'hello mike i sa', '', ''),
(145, 'TX108', 'credit', 5000, '2019-09-24 19:11:24', 'Fund transfer of $5000 to Account 3471206576 Reference# TX108', '3471206576', 'SUCCESS', '09/24/2019', 'Payment of Inheritance Funds from HSBC United States', 'gentility205@gmail.com', '5279985622'),
(146, 'TX109', 'debit', 2000, '2019-09-24 19:15:20', 'Fund transfer of $2000 to Account 56784993849 Reference# TX109', '3471206576', 'SUCCESS', '2024-01-10', 'test', '', ''),
(147, 'TX110', 'credit', 2000, '2019-09-24 21:26:32', 'Fund transfer of $2000 from Account 2575845937 Reference# TX110', '2575845937', 'SUCCESS', '2008-03-24', 'Loan', '', ''),
(148, 'TX110', 'debit', 2000, '2019-09-24 21:26:32', 'Fund transfer of $2000 to Account 2575845937 Reference# TX110', '2575845937', 'SUCCESS', '2008-03-24', 'Loan', '', ''),
(149, 'TX111', 'credit', 2000, '2019-09-24 21:26:50', 'Fund transfer of $2000 from Account 2575845937 Reference# TX111', '2575845937', 'SUCCESS', '2008-03-24', 'Loan', '', ''),
(150, 'TX111', 'debit', 2000, '2019-09-24 21:26:50', 'Fund transfer of $2000 to Account 2575845937 Reference# TX111', '2575845937', 'SUCCESS', '2008-03-24', 'Loan', '', ''),
(151, 'TX112', 'debit', 3000, '2019-09-25 06:33:23', 'Fund transfer of $3000 to Account 38388383888 Reference# TX112', '2575845937', 'SUCCESS', '2019-09-22', 'HSBC INHERRITANCE FUNDS', '', ''),
(152, 'TX113', 'debit', 1000, '2019-09-25 07:08:55', 'Fund transfer of $1000 to Account 37373738888 Reference# TX113', '2575845937', 'SUCCESS', '1990-11-11', 'hello', '', ''),
(153, 'TX114', 'credit', 2000, '2019-09-25 07:18:57', 'Fund transfer of $2000 to Account 2575845937 Reference# TX114', '2575845937', 'SUCCESS', '10/04/2019', 'hello', 'pamelawenzel4@gmail.com', '09055465822'),
(154, 'TX115', 'credit', 5000, '2019-09-25 07:20:07', 'Fund transfer of $5000 to Account 2575845937 Reference# TX115', '2575845937', 'SUCCESS', '10/04/2019', 'hello', 'pamelawenzel4@gmail.com', '09055465822'),
(155, 'TX116', 'debit', 300, '2019-09-25 09:27:48', 'Fund transfer of $300 to Account 53678383887 Reference# TX116', '3471206576', 'SUCCESS', '2026-10-08', 'test', '', ''),
(156, 'TX117', 'debit', 400, '2019-09-25 09:40:23', 'Fund transfer of $400 to Account 668883446447 Reference# TX117', '3471206576', 'SUCCESS', '2019-09-26', 'Test', '', ''),
(157, 'TX118', 'credit', 1000, '2019-09-25 17:36:21', 'Fund transfer of $1000 to Account 2575845937 Reference# TX118', '2575845937', 'SUCCESS', '11/03/2019', 'Payment from HSBC', 'pamelawenzel4@gmail.com', '09055465822'),
(158, 'TX119', 'credit', 3000, '2019-09-25 17:40:42', 'Fund transfer of $3000 to Account 2575845937 Reference# TX119', '2575845937', 'SUCCESS', '10/04/2019', 'HSBC', 'pamelawenzel4@gmail.com', '09055465822'),
(159, 'TX120', 'credit', 100, '2019-09-25 17:42:20', 'Fund transfer of $100 to Account 2575845937 Reference# TX120', '2575845937', 'SUCCESS', '11/03/2019', 'HELLO', 'pamelawenzel4@gmail.com', '09055465822'),
(160, 'TX121', 'credit', 1222, '2019-09-26 08:05:56', 'Fund transfer of $1222 to Account 2575845937 Reference# TX121', '2575845937', 'SUCCESS', '10/01/2018', '111', 'pamelawenzel4@gmail.com', '09055465822'),
(161, 'TX122', 'credit', 120, '2019-09-26 08:07:29', 'Fund transfer of $120 to Account 2575845937 Reference# TX122', '2575845937', 'SUCCESS', '10/04/2019', '11', 'pamelawenzel4@gmail.com', '09055465822'),
(162, 'TX123', 'credit', 1200, '2019-09-26 08:11:24', 'Fund transfer of $1200 to Account 2575845937 Reference# TX123', '2575845937', 'SUCCESS', '10/04/2019', '111', 'pamelawenzel4@gmail.com', '09055465822'),
(163, 'TX124', 'debit', 3000, '2019-09-27 11:58:29', 'Fund transfer of $3000 to Account 6863838311 Reference# TX124', '2575845937', 'SUCCESS', '2019-11-09', 'INFORM', '', ''),
(164, 'TX125', 'debit', 1000, '2019-09-28 16:27:25', 'Fund transfer of $1000 to Account 134567789134 Reference# TX125', '2575845937', 'SUCCESS', '2019-09-11', 'bills', '', ''),
(165, 'TX126', 'credit', 1200, '2019-09-28 18:22:47', 'Fund transfer of $1200 to Account 2575845937 Reference# TX126', '2575845937', 'SUCCESS', '10/04/2019', '1', 'pamelawenzel4@gmail.com', '09055465822'),
(166, 'TX127', 'credit', 122, '2019-09-28 18:25:55', 'Fund transfer of $122 to Account 2575845937 Reference# TX127', '2575845937', 'SUCCESS', '10/01/2018', 'hh', 'pamelawenzel4@gmail.com', '09055465822'),
(167, 'TX128', 'credit', 100, '2019-09-29 06:14:19', 'Fund transfer of $100 to Account 2575845937 Reference# TX128', '2575845937', 'SUCCESS', '10/04/2019', 'hello bro', 'pamelawenzel4@gmail.com', '09055465822'),
(168, 'TX129', 'credit', 1200, '2019-09-29 06:21:04', 'Fund transfer of $1200 to Account 2575845937 Reference# TX129', '2575845937', 'SUCCESS', '10/04/2019', '2time', 'pamelawenzel4@gmail.com', '09055465822'),
(169, 'TX130', 'credit', 1200, '2019-09-29 06:30:13', 'Fund transfer of $1200 to Account 2575845937 Reference# TX130', '2575845937', 'SUCCESS', '09/29/2019', 'Payment for loans', 'pamelawenzel4@gmail.com', '09055465822'),
(170, 'TX131', 'credit', 20000, '2019-09-29 06:34:52', 'Fund transfer of $20000 to Account 2575845937 Reference# TX131', '2575845937', 'SUCCESS', '09/29/2019', 'Payment for Insurance', 'pamelawenzel4@gmail.com', '09055465822'),
(171, 'TX132', 'credit', 1000, '2019-09-29 06:43:45', 'Fund transfer of $1000 to Account 2575845937 Reference# TX132', '2575845937', 'SUCCESS', '09/29/2019', 'hello friends', 'pamelawenzel4@gmail.com', '09055465822'),
(172, 'TX133', 'debit', 1000, '2019-09-29 07:43:32', 'Fund transfer of $1000 to Account 28283388328 Reference# TX133', '2575845937', 'SUCCESS', '2019-11-11', 'hello friends', '', ''),
(173, 'TX134', 'debit', 400, '2019-09-29 07:53:50', 'Fund transfer of $400 to Account 56478498774 Reference# TX134', '3471206576', 'SUCCESS', '2021-05-04', 'test', '', ''),
(174, 'TX135', 'debit', 500, '2019-09-29 08:08:37', 'Fund transfer of $500 to Account 89747748634 Reference# TX135', '3471206576', 'SUCCESS', '2019-02-02', 'test', '', ''),
(175, 'TX136', 'debit', 30000, '2019-10-01 08:28:27', 'Fund transfer of $30000 to Account 33738383899 Reference# TX136', '2575845937', 'SUCCESS', '2019-10-08', 'Payment from', '', ''),
(176, 'TX137', 'credit', 1000, '2019-10-02 11:18:43', 'Fund transfer of $1000 to Account 7384192409 Reference# TX137', '7384192409', 'SUCCESS', '10/02/2019', 'PAYMENT FROM HSBC', 'chibyk.bex@gmail.com', '905345802632'),
(177, 'TX138', 'credit', 1200, '2019-10-02 11:50:36', 'Fund transfer of $1200 to Account 7384192409 Reference# TX138', '7384192409', 'SUCCESS', '10/04/2019', 'HSBC PAYMENT FOR IHERRITANCE', 'chibyk.bex@gmail.com', '905345802632'),
(178, 'TX139', 'credit', 1000, '2019-10-04 07:05:54', 'Fund transfer of $1000 to Account 1806059083 Reference# TX139', '1806059083', 'SUCCESS', '04/10/2019', 'payment from HSBC BANK USA', 'digitalforest4@gmail.com', '0905545822'),
(179, 'TX140', 'credit', 500000, '2019-10-04 07:07:08', 'Fund transfer of $500000 to Account 6874654856 Reference# TX140', '6874654856', 'SUCCESS', '04/10/2019', 'Hey', 'adonisone@email.com', '09017029013'),
(180, 'TX141', 'debit', 5000, '2019-10-04 07:14:09', 'Fund transfer of $5000 to Account 281635252 Reference# TX141', '6874654856', 'SUCCESS', '2019-10-04', 'Hey U', '', ''),
(181, 'TX142', 'debit', 2000, '2019-10-04 07:37:03', 'Fund transfer of $2000 to Account 93917638 Reference# TX142', '6874654856', 'SUCCESS', '2019-10-04', 'Hey', '', ''),
(182, 'TX143', 'credit', 2000, '2019-10-09 04:40:51', 'Fund transfer of $2000 to Account 3640990448 Reference# TX143', '3640990448', 'SUCCESS', '09/10/2019', 'Cash Deposit New York Rd', 'reidcollins002@icloud.com', '08151833681'),
(183, 'TX144', 'debit', 30000, '2020-04-30 13:32:15', 'Fund transfer of $30000 to Account 34246335643 Reference# TX144', '7456844499', 'SUCCESS', '2020-04-23', 'test', '', ''),
(184, 'TX145', 'credit', 80000, '2020-04-30 13:36:34', 'Fund transfer of $80000 to Account 7456844499 Reference# TX145', '7456844499', 'SUCCESS', '04-20-2020', 'for transfer to new customer', 'isizyoneroyalboi@gmail.com', '09091962223'),
(185, 'TX146', 'debit', 20000, '2020-05-02 10:31:28', 'Fund transfer of $20000 to Account 9800467483 Reference# TX146', '1300746143', 'SUCCESS', '2020-05-02', 'i dey test am o', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `pics` varchar(200) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `empname` varchar(555) NOT NULL,
  `emptype` varchar(555) NOT NULL,
  `salary` varchar(555) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `boccu` varchar(255) NOT NULL,
  `bemail` varchar(255) NOT NULL,
  `bmobile` varchar(255) NOT NULL,
  `brela` varchar(255) NOT NULL,
  `bage` varchar(255) NOT NULL,
  `badd` varchar(2000) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `ans1` varchar(2000) NOT NULL,
  `ans2` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fname`, `lname`, `pwd`, `email`, `phone`, `gender`, `is_active`, `utype`, `pics`, `bdate`, `dob`, `empname`, `emptype`, `salary`, `bname`, `boccu`, `bemail`, `bmobile`, `brela`, `bage`, `badd`, `q1`, `q2`, `ans1`, `ans2`) VALUES
(1, 'john', 'franck', '*CC67043C7BCFF5EEA5566BD9B1F3C74FD9A5CF5D', 'rameshpatang@gmail.com', '09091962223', 'Male', 'TRUE', 'USER', '4baf3f76543b280e299259bf2342e512.jpg', '2020-05-02 07:03:08', '1990-01-01', 'Fine MAn son', 'self Employed', '$700.00 - $1,000.00', 'shipment Guy', 'student', 'rameshpatang@gnail.com', '09091962223', 'Cousin', '18-25yrs', '12. lago asaba', 'What is your pet name?', 'What is your pet name?', 'dog', 'dog');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_loans`
--
ALTER TABLE `approved_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cot`
--
ALTER TABLE `cot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment2`
--
ALTER TABLE `enrollment2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imf`
--
ALTER TABLE `imf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved_loans`
--
ALTER TABLE `approved_loans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cot`
--
ALTER TABLE `cot`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enrollment2`
--
ALTER TABLE `enrollment2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imf`
--
ALTER TABLE `imf`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
