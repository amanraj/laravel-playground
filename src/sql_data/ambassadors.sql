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
-- Table structure for table `ambassadors`
--

CREATE TABLE IF NOT EXISTS `ambassadors` (
  `ambassadors_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ambassadors_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ambassadors_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ambassadors_password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ambassadors_college_id` int(11) NOT NULL,
  `branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ambassadors_intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ambassadors_id`),
  UNIQUE KEY `ambassadors_ambassadors_email_unique` (`ambassadors_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ambassadors`
--

INSERT INTO `ambassadors` (`ambassadors_id`, `ambassadors_name`, `ambassadors_email`, `ambassadors_password`, `mobile_number`, `profile_pic`, `ambassadors_college_id`, `branch`, `ambassadors_intro`, `ip_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Candice', 'candice@gmail.com', '$2y$10$J5v67g4ng6XetM.bCNLbU./am/w8BaOiadgQmGEshJFozXfZIn52m', '8765097654', 'images/ambassdors/candice.jpg', 1, 'Aero', 'hey hii people this is candice.					\r\n				                \r\n				    				        \r\n				    				        \r\n				    				        \r\n				    				        \r\n				    				        \r\n				    ', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Isha', 'isha@gmail.com', '$2y$10$m8vlLGgRsxV2PGGvztkYce8.FM0JumtWZkV4U4UIt8x/g74nVPLSW', '9874563215', 'images/ambassdors/candice.jpg', 5, 'computer science and engineering', 'Hey guys hws u doin', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Sonam', 'sonam@hotmail.com', '$2y$10$3VcTvrabOIecGsgji7suyehk7C3lm3oNsgzwdbRQ21GDJ1HSAMmcq', '7896541256', 'images/ambassdors/candice.jpg', 8, 'Ceramic engineering', 'hey hii all', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Swati', 'swati@gmail.com', '$2y$10$KyC0bvTTa0ALkzWaQ9haReF7yZYPyrnM7C2CfY.1KD7BIzGkn.lnm', '9856478539', 'images/ambassdors/candice.jpg', 7, 'mathematics and computing', 'Hey everybody hi ', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Pooja', 'pooja@gmail.com', '$2y$10$hTJpBaUFunoNLawJ0ar7Mu9I34Z1gBUm1eXm0Jr.nt9olnuM9WXwe', '7856942314', 'images/ambassdors/candice.jpg', 3, 'humanities and social sciences', 'hello everybody', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
