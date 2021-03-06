-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 03:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pickprime`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_rating`
--

CREATE TABLE IF NOT EXISTS `college_rating` (
  `college_rating_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_reference_id` int(11) NOT NULL,
  `college_overall_rating` double(8,2) NOT NULL,
  `college_campuslife_rating` double(8,2) NOT NULL,
  `college_hostel_rating` double(8,2) NOT NULL,
  `college_location_rating` double(8,2) NOT NULL,
  `college_facilities_rating` double(8,2) NOT NULL,
  PRIMARY KEY (`college_rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college_rating`
--

INSERT INTO `college_rating` (`college_rating_id`, `college_reference_id`, `college_overall_rating`, `college_campuslife_rating`, `college_hostel_rating`, `college_location_rating`, `college_facilities_rating`) VALUES
(1, 1, 6.80, 6.50, 9.30, 7.80, 6.90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
