-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 03:04 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ambassadors`
--

INSERT INTO `ambassadors` (`ambassadors_id`, `ambassadors_name`, `ambassadors_email`, `ambassadors_password`, `mobile_number`, `profile_pic`, `ambassadors_college_id`, `branch`, `ambassadors_intro`, `ip_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Candice', 'candice@gmail.com', '$2y$10$J5v67g4ng6XetM.bCNLbU./am/w8BaOiadgQmGEshJFozXfZIn52m', '8765097654', 'images/ambassdors/candice.jpg', 1, 'Aero', 'hey hii people this is candice.					\r\n				                \r\n				    				        \r\n				    				        \r\n				    				        \r\n				    				        \r\n				    				        \r\n				    ', '', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `college_choices`
--

CREATE TABLE IF NOT EXISTS `college_choices` (
  `user_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `college_choices`
--

INSERT INTO `college_choices` (`user_reference_id`, `college_reference_id`) VALUES
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `college_notes`
--

CREATE TABLE IF NOT EXISTS `college_notes` (
  `college_notes_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL,
  `note_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`college_notes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `college_rating`
--

CREATE TABLE IF NOT EXISTS `college_rating` (
  `college_rating_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_reference_id` int(11) NOT NULL,
  `college_overall_rating` double(8,2) NOT NULL,
  `college_campuslife_rating` double(8,2) NOT NULL,
  `college_hostel_rating` double(8,2) NOT NULL,
  `college_location_rating` double(8,2) NOT NULL,
  `college_facilities_rating` double(8,2) NOT NULL,
  PRIMARY KEY (`college_rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college_rating`
--

INSERT INTO `college_rating` (`college_rating_id`, `college_reference_id`, `college_overall_rating`, `college_campuslife_rating`, `college_hostel_rating`, `college_location_rating`, `college_facilities_rating`) VALUES
(1, 1, 6.80, 6.50, 9.30, 7.80, 6.90);

-- --------------------------------------------------------

--
-- Table structure for table `college_review`
--

CREATE TABLE IF NOT EXISTS `college_review` (
  `college_review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_reference_id` int(11) NOT NULL,
  `reviewer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_review_date` datetime NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `college_overall_rating` double(8,2) NOT NULL,
  `college_campuslife_rating` double(8,2) NOT NULL,
  `college_hostel_rating` double(8,2) NOT NULL,
  `college_location_rating` double(8,2) NOT NULL,
  `college_facilities_rating` double(8,2) NOT NULL,
  PRIMARY KEY (`college_review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college_review`
--

INSERT INTO `college_review` (`college_review_id`, `college_reference_id`, `reviewer_name`, `reviewer_college`, `reviewer_description`, `college_review_date`, `review`, `college_overall_rating`, `college_campuslife_rating`, `college_hostel_rating`, `college_location_rating`, `college_facilities_rating`) VALUES
(1, 1, 'Sumit', 'IIT Kharagpur', 'Good Boy', '2015-05-13 07:43:27', 'Great College.Stud', 9.90, 9.80, 6.30, 7.20, 9.60);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_stream`, `course_duration`, `course_content`, `future_scope`, `course_placement`, `job_place_work`, `top_institute`, `course_image_1`, `course_image_2`, `course_image_3`, `course_image_4`) VALUES
(1, 'Aerospace Engineering', 'Engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_choices`
--

CREATE TABLE IF NOT EXISTS `course_choices` (
  `user_reference_id` int(11) NOT NULL,
  `course_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_choices`
--

INSERT INTO `course_choices` (`user_reference_id`, `course_reference_id`, `college_reference_id`) VALUES
(1, 1, 1),
(1, 1, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_college`
--

CREATE TABLE IF NOT EXISTS `course_college` (
  `course_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL,
  `last_year_stats` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_college`
--

INSERT INTO `course_college` (`course_reference_id`, `college_reference_id`, `last_year_stats`) VALUES
(1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `course_college_rating`
--

CREATE TABLE IF NOT EXISTS `course_college_rating` (
  `course_college_rating_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL,
  `course_content_rating` double(8,2) NOT NULL,
  `course_placement_rating` double(8,2) NOT NULL,
  `course_future_scope_rating` double(8,2) NOT NULL,
  `course_faculty_rating` double(8,2) NOT NULL,
  PRIMARY KEY (`course_college_rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `course_college_rating`
--

INSERT INTO `course_college_rating` (`course_college_rating_id`, `course_reference_id`, `college_reference_id`, `course_content_rating`, `course_placement_rating`, `course_future_scope_rating`, `course_faculty_rating`) VALUES
(1, 1, 1, 9.30, 8.50, 9.60, 7.50);

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

-- --------------------------------------------------------

--
-- Table structure for table `course_forum_questions`
--

CREATE TABLE IF NOT EXISTS `course_forum_questions` (
  `question_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_course_id` int(11) NOT NULL,
  `user_reference_id` int(11) NOT NULL,
  `question_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `want_answer` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_notes`
--

CREATE TABLE IF NOT EXISTS `course_notes` (
  `course_notes_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_reference_id` int(11) NOT NULL,
  `course_reference_id` int(11) NOT NULL,
  `note_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`course_notes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_questions_reply`
--

CREATE TABLE IF NOT EXISTS `course_questions_reply` (
  `course_question_reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_question_reference_id` int(11) NOT NULL,
  `user_reference_id` int(11) NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `up_vote` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`course_question_reply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_review`
--

CREATE TABLE IF NOT EXISTS `course_review` (
  `course_review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_reference_id` int(11) NOT NULL,
  `reviewer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_review_date` datetime NOT NULL,
  `reviewer_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_rating` double(8,2) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`course_review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2015_05_03_144302_create_ambassadors_table', 1),
('2015_05_18_112625_create_college_choices_table', 1),
('2015_05_18_112728_create_course_choices_table', 1),
('2015_05_18_112747_create_course_notes_table', 1),
('2015_05_18_112802_create_college_notes_table', 1),
('2015_05_20_052711_create_review_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `campuslife` int(11) NOT NULL,
  `hostel` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `facilities` int(11) NOT NULL,
  `merits` text COLLATE utf8_unicode_ci NOT NULL,
  `demerits` text COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
