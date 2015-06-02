-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 03:12 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_user_email_unique` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `mobile_number`, `confirmation_code`, `profile_pic`, `ip_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shubham', 'shubham.1220@yahoo.in', '$2y$10$DaPIYUJHvP864j3px8uD7OBk0urLWWegh79pS/.ONiFn10eXDWnyu', '8947833293', NULL, '', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Shubham Singhal', 'shubham.singhal0102@gmail.com', '$2y$10$s3JqDjwnbesykvynfKyFVuWKDPVosJxNgye93BS54ipb7dgoPp3He', '9933972050', NULL, '', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Shubham Singhal', 'rchsharma23@gmail.com', '$2y$10$7wv9D2CoNZn83dUIA8fS9.5MldV3QZ6RALmvwnWc62T1jMeaueA.e', '8947833293', 'X1OejTHz1JDYCrYqm2m1FIHRKN1DgF', '', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
