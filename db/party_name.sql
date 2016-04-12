-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2016 at 06:20 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `party_name`
--

CREATE TABLE IF NOT EXISTS `party_name` (
  `party_id` int(11) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(15) NOT NULL,
  PRIMARY KEY (`party_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `party_name`
--

INSERT INTO `party_name` (`party_id`, `party_name`) VALUES
(1, 'Bata Shoes'),
(2, 'Servis Shoes'),
(3, 'Stylo Shoes'),
(4, 'Borjan Shoes'),
(5, 'Metro Shoes'),
(6, 'Aerosoft Shoes'),
(7, 'Console Shoes'),
(8, 'ECS Shoes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
