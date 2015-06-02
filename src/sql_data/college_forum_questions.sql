-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 03:07 PM
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
-- Table structure for table `college_forum_questions`
--

CREATE TABLE IF NOT EXISTS `college_forum_questions` (
  `question_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_college_id` int(11) NOT NULL,
  `user_reference_id` int(11) NOT NULL,
  `question_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `want_answer` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `college_forum_questions`
--

INSERT INTO `college_forum_questions` (`question_id`, `question_college_id`, `user_reference_id`, `question_type`, `question_title`, `question_description`, `want_answer`, `date`) VALUES
(1, 1, 1, 'general', 'general question', 'this is a general question', 2, '2015-05-03 14:00:00'),
(2, 2, 2, 'admission', 'admission related', 'this is an admission related question', 52, '2015-03-11 10:00:00'),
(3, 3, 3, 'campus', 'campus related', 'this is a campus related question', 0, '2015-06-08 00:00:00'),
(4, 4, 4, 'placement', 'placement related', 'this is a placement related question', 32, '2015-02-01 00:00:00'),
(5, 5, 5, 'admission', 'admission related', 'this is another question  related to admission', 0, '2015-05-02 00:00:00'),
(6, 1, 1, 'general', 'general question', 'hi i am shubham', 0, '0000-00-00 00:00:00'),
(7, 1, 1, 'general', 'general', 'hello what all can we do?', 0, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
