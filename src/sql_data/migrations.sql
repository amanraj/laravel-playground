-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 06:44 AM
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
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_03_143851_create_college_table', 1),
('2015_05_03_143910_create_college_rating_table', 1),
('2015_05_03_143917_create_college_review_table', 1),
('2015_05_03_143942_create_course_table', 1),
('2015_05_03_143955_create_course_college_table', 1),
('2015_05_03_144013_create_course_college_rating_table', 1),
('2015_05_03_144028_create_course_college_review_table', 1),
('2015_05_03_144040_create_course_review_table', 1),
('2015_05_03_144120_create_college_forum_questions_table', 1),
('2015_05_03_144132_create_course_forum_questions_table', 1),
('2015_05_03_144155_create_course_questions_reply_table', 1),
('2015_05_03_144210_create_college_questions_reply_table', 1),
('2015_05_03_144245_create_users_table', 1),
('2015_05_03_144302_create_ambassadors_table', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
