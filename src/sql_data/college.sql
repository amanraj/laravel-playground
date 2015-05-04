-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 06:42 AM
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
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_accrediation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_entrance_exam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_fees` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `college_addmision_process` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `college_overview` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `college_hostels` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `college_fests` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `college_other_facilities` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `college_placement` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `college_image_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
