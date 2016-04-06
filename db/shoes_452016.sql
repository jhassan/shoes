-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2016 at 06:58 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoes`
--
CREATE DATABASE IF NOT EXISTS `shoes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shoes`;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) DEFAULT NULL,
  `user_login` varchar(32) DEFAULT NULL,
  `user_password` varchar(32) DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `user_email` varchar(20) DEFAULT NULL,
  `user_permissions` varchar(255) DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: admin, 0: client',
  `employee_id` int(11) NOT NULL DEFAULT '0',
  `sales_report_status` tinyint(1) NOT NULL DEFAULT '0',
  `sales_report_url` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `user_name`, `user_login`, `user_password`, `user_status`, `user_email`, `user_permissions`, `user_type`, `employee_id`, `sales_report_status`, `sales_report_url`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'jawad@gmail.com', '5,4', 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_no` varchar(20) DEFAULT NULL,
  `group_id` varchar(10) DEFAULT NULL,
  `sale_price` int(10) NOT NULL DEFAULT '0',
  `purchase_price` int(10) NOT NULL DEFAULT '0',
  `discount_amount` int(11) DEFAULT '0',
  `party_id` int(11) DEFAULT '0',
  `date_purchase` datetime DEFAULT NULL,
  `date_sale` datetime DEFAULT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_detail` (
  `purchase_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_code` varchar(10) DEFAULT NULL,
  `sh_credit` int(11) DEFAULT '0',
  `sh_debit` int(11) DEFAULT '0',
  PRIMARY KEY (`purchase_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sizes`
--

CREATE TABLE IF NOT EXISTS `tbl_sizes` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_sizes`
--

INSERT INTO `tbl_sizes` (`size_id`, `size_code`) VALUES
(1, 'L_36'),
(2, 'L_37'),
(3, 'L_38'),
(4, 'L_39'),
(5, 'L_40'),
(6, 'L_41'),
(7, 'L_03'),
(8, 'L_04'),
(9, 'L_05'),
(10, 'L_06'),
(11, 'L_07'),
(12, 'G_06'),
(13, 'G_07'),
(14, 'G_08'),
(15, 'G_09'),
(16, 'G_10'),
(17, 'G_11'),
(18, 'G_02'),
(19, 'G_03'),
(20, 'G_04'),
(21, 'G_05'),
(22, 'G_39'),
(23, 'G_40'),
(24, 'G_41'),
(25, 'G_42'),
(26, 'G_43'),
(27, 'G_44'),
(28, 'G_45'),
(29, 'C_07'),
(30, 'C_08'),
(31, 'C_09'),
(32, 'C_10'),
(33, 'C_11'),
(34, 'C_12'),
(35, 'C_13'),
(36, 'C_01'),
(37, 'C_03'),
(38, 'C_04'),
(39, 'C_05'),
(40, 'C_06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
