-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 04:54 PM
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
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_stream` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `future_scope` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `course_placement` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `job_place_work` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `top_institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_stream`, `course_duration`, `course_content`, `future_scope`, `course_placement`, `job_place_work`, `top_institute`, `course_image_1`, `course_image_2`, `course_image_3`, `course_image_4`) VALUES
(1, 'Aerospace Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(2, 'Biotechnology', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(3, 'Ceramic Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(4, 'Chemical Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(5, 'Chemistry', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(6, 'Civil Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(7, 'Computer Science and Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(8, 'Design', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(9, 'Electrical Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(10, 'Electronics Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(11, 'Electronics and Communication Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(12, 'Humanities and Social Sciences', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(13, 'hydrology', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
