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
-- Table structure for table `college_questions_reply`
--

CREATE TABLE IF NOT EXISTS `college_questions_reply` (
  `college_question_reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_question_reference_id` int(11) NOT NULL,
  `user_reference_id` int(11) NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `up_vote` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`college_question_reply_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `college_questions_reply`
--

INSERT INTO `college_questions_reply` (`college_question_reply_id`, `college_question_reference_id`, `user_reference_id`, `reply`, `up_vote`, `date`) VALUES
(1, 1, 1, 'this is a general ans to your general question', 4, '0000-00-00 00:00:00'),
(2, 6, 1, 'Hello i am gud', 1, '0000-00-00 00:00:00'),
(3, 1, 3, 'hello', 21, '2015-06-10 08:39:26'),
(4, 1, 1, 'Hello this is candice', 1, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
