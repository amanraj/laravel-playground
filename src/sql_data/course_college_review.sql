-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 03:10 PM
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
-- Table structure for table `course_college_review`
--

CREATE TABLE IF NOT EXISTS `course_college_review` (
  `course_college_review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL,
  `review_date` datetime NOT NULL,
  `course_content_rating` double(8,2) NOT NULL,
  `course_placement_rating` double(8,2) NOT NULL,
  `course_future_scope_rating` double(8,2) NOT NULL,
  `course_faculty_rating` double(8,2) NOT NULL,
  `course_content` text COLLATE utf8_unicode_ci NOT NULL,
  `faculty` text COLLATE utf8_unicode_ci NOT NULL,
  `top_institutes` text COLLATE utf8_unicode_ci NOT NULL,
  `future_scope` text COLLATE utf8_unicode_ci NOT NULL,
  `placement` text COLLATE utf8_unicode_ci NOT NULL,
  `job_place_work` text COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_rating` double(8,2) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`course_college_review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `course_college_review`
--

INSERT INTO `course_college_review` (`course_college_review_id`, `course_reference_id`, `college_reference_id`, `review_date`, `course_content_rating`, `course_placement_rating`, `course_future_scope_rating`, `course_faculty_rating`, `course_content`, `faculty`, `top_institutes`, `future_scope`, `placement`, `job_place_work`, `reviewer_name`, `reviewer_description`, `reviewer_college`, `reviewer_rating`, `review`) VALUES
(1, 1, 1, '2015-05-06 11:20:40', 9.60, 5.60, 7.60, 3.50, 'Great', '', 'IIT Delhi', 'No', '', 'Comfy', 'Rajiv', 'RR', 'IIT Delhi', 8.60, 'Wonderfull');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
