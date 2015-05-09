-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2015 at 08:04 AM
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
  `ambassadors_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `ambassadors` (`ambassadors_id`, `ambassadors_name`, `ambassadors_email`, `ambassadors_password`, `mobile_number`, `profile_pic`, `ambassadors_college_id`, `branch`, `ambassadors_type`, `ambassadors_intro`, `ip_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Candice', 'candice123@gmail.com', 'candice', '9865356985', 'images/ambassdors/candice.jpg', 1, 'Aerospace Engineering', 'course', 'Hi I am Candice.I am a fourth year U.G. student in the department of Aerospace Engineering.I am from Jaipur , Rajasthan.', '', NULL, '2015-05-03 06:32:00', '0000-00-00 00:00:00'),
(2, 'Isha', 'isha28@yahoo.in', 'iamisha', '9658364525', 'images/ambassdors/candice.jpg', 2, 'Biotechnology', 'college', 'Hi its Isha here.I am a fourth year student from the dept. of Biotechnology.I am from Jamshedpur.', '', NULL, '2015-05-03 06:34:00', '0000-00-00 00:00:00'),
(3, 'Rohan', 'rohancool@hotmail.com', 'coolroh', '9632547632', 'images/ambassdors/candice.jpg', 3, 'Computer Science Engineering', 'course', 'Myself Rohan from the dept. of computer science engineerig.I am from Banglore.', '', NULL, '2015-05-03 06:37:00', '0000-00-00 00:00:00'),
(4, 'Hrishikesh', 'rishi@yahoo.com', 'krishi', '9654236587', 'images/ambassdors/candice.jpg', 4, 'Metallurgy And Material Science', 'college', 'Hi I am Hrishikesh Menon .I am 23 years old.I am from Varanasi.', '', NULL, '2015-05-02 18:30:00', '0000-00-00 00:00:00'),
(5, 'Mugdha', 'mathur24@hotmail.com', 'mugmath', '7654823687', 'images/ambassdors/candice.jpg', 5, 'Mathematics And Computing', 'college', 'Hi I am Mugdha Mathur from the dept. of Mathematics and computing. I am from Mumbai.', '', NULL, '2015-05-03 06:40:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
