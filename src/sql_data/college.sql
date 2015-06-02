-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 03:13 PM
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
  `college_accreditation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  `college_comments` text COLLATE utf8_unicode_ci NOT NULL,
  `college_image_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `college_type`, `college_location`, `college_accreditation`, `college_contact_number`, `college_email`, `college_website`, `college_entrance_exam`, `college_fees`, `college_addmision_process`, `college_overview`, `college_hostels`, `college_fests`, `college_other_facilities`, `college_placement`, `college_comments`, `college_image_1`, `college_image_2`, `college_image_3`, `college_image_4`, `college_image_5`, `college_image_6`) VALUES
(1, 'IIT Kharagpur', 'Engineering', 'West Bengal', '', '9966554433', 'iitkgp@gmail.com', 'www.iitkgp.ac.in', 'JEE Advanced', '75,000', 'JEE Advanced', 'Great', 'LLR LBS RP RK', 'SF Ktj', 'Many', 'Good', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
