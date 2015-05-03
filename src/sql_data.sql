-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 11:50 AM
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
(1, 'Candice', 'candice123@gmail.com', 'candice', '9865356985', 'images/ambassdors/candice.jpg', 1, 'Aerospace Engineering', 'Hi I am Candice.I am a fourth year U.G. student in the department of Aerospace Engineering.I am from Jaipur , Rajasthan.', '', NULL, '2015-05-03 06:32:00', '0000-00-00 00:00:00'),
(2, 'Isha', 'isha28@yahoo.in', 'iamisha', '9658364525', 'images/ambassdors/candice.jpg', 2, 'Biotechnology', 'Hi its Isha here.I am a fourth year student from the dept. of Biotechnology.I am from Jamshedpur.', '', NULL, '2015-05-03 06:34:00', '0000-00-00 00:00:00'),
(3, 'Rohan', 'rohancool@hotmail.com', 'coolroh', '9632547632', 'images/ambassdors/candice.jpg', 3, 'Computer Science Engineering', 'Myself Rohan from the dept. of computer science engineerig.I am from Banglore.', '', NULL, '2015-05-03 06:37:00', '0000-00-00 00:00:00'),
(4, 'Hrishikesh', 'rishi@yahoo.com', 'krishi', '9654236587', 'images/ambassdors/candice.jpg', 4, 'Metallurgy And Material Science', 'Hi I am Hrishikesh Menon .I am 23 years old.I am from Varanasi.', '', NULL, '2015-05-02 18:30:00', '0000-00-00 00:00:00'),
(5, 'Mugdha', 'mathur24@hotmail.com', 'mugmath', '7654823687', 'images/ambassdors/candice.jpg', 5, 'Mathematics And Computing', 'Hi I am Mugdha Mathur from the dept. of Mathematics and computing. I am from Mumbai.', '', NULL, '2015-05-03 06:40:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_accrediation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  `college_image_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_image_6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `college_forum_questions`
--

INSERT INTO `college_forum_questions` (`question_id`, `question_college_id`, `user_reference_id`, `question_type`, `question_title`, `question_description`, `want_answer`, `date`) VALUES
(1, 1, 1, 'general', 'general question', 'this is a general question', 2, '2015-05-03 14:00:00'),
(2, 2, 2, 'admission', 'admission related', 'this is an admission related question', 52, '2015-03-11 10:00:00'),
(3, 3, 3, 'campus', 'campus related', 'this is a campus related question', 0, '2015-06-08 00:00:00'),
(4, 4, 4, 'placement', 'placement related', 'this is a placement related question', 32, '2015-02-01 00:00:00'),
(5, 5, 5, 'admission', 'admission related', 'this is another question  related to admission', 0, '2015-05-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `college_questions_reply`
--

CREATE TABLE IF NOT EXISTS `college_questions_reply` (
  `college_question_reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college_question_reference_id` int(11) NOT NULL,
  `user_reference_id` int(11) NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `up_vaote` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`college_question_reply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `college_overall_rating` double(8,2) NOT NULL,
  `college_campuslife_rating` double(8,2) NOT NULL,
  `college_hostel_rating` double(8,2) NOT NULL,
  `college_location_rating` double(8,2) NOT NULL,
  `college_facilities_rating` double(8,2) NOT NULL,
  PRIMARY KEY (`college_review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `future_scope` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `job_place_work` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `top_institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_content`, `future_scope`, `job_place_work`, `top_institute`, `course_image_1`, `course_image_2`, `course_image_3`, `course_image_4`) VALUES
(1, 'Aerospace Engineering', 'Aerospace engineering is the primary branch of engineering concerned with the research, design process, development, construction, testing, science and technology of aircraft and spacecraft. It is divided into two major and overlapping branches: aeronautical engineering and astronautical engineering.', 'This is a growing field.There are vast possibilities in this area.And it is bound to grow in the coming years.', 'The job conditions are pretty good.You have all the fascilities provided.', 'IIT Kanpur , IIT Kharagpur , IIT Mumbai', 'images/colleges/iit_kgp.jpg', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp_lg_3.jpg'),
(2, 'Civil Engineering', 'Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including works like roads, bridges, canals, dams, and buildings.', 'This course is in demand these days.It has been since long.So it is possible that it may have further enhanced opportuities.', 'The job conditions vary from company to comapany.', 'IIT Roorkee , ISM Dhanbad , IIT Kanpur', 'images/colleges/iit_kgp.jpg', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp_lg_3.jpg'),
(3, 'Mechanical Engineering', 'Mechanical engineering is the discipline that applies the principles of engineering, physics, and materials science for the design, analysis, manufacturing, and maintenance of mechanical systems.', 'This is an evergreen branch so there is always a lot of scope.', 'This requires a lot of fieldwork and toying around wwith big machines.', 'IIT Roorkee , IIT Kharagpur , IIT Delhi', 'images/colleges/iit_kgp.jpg', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp_lg_3.jpg'),
(4, 'Chemical Engineering', 'Chemical Engineering is a branch of engineering that applies physical sciences (e.g. chemistry and physics) and life sciences (e.g. biology, microbiology and biochemistry) together with mathematics and economics to produce, transform, transport, and properly use chemicals, materials and energy.', 'It has a lot of scope in future.', 'The working conditions are not very good.', 'IIT Mumbai , IIT Delhi , IIT Madras', 'images/colleges/iit_kgp.jpg', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp_lg_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course_college`
--

CREATE TABLE IF NOT EXISTS `course_college` (
  `course_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_college_rating`
--

CREATE TABLE IF NOT EXISTS `course_college_rating` (
  `course_college_rating_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_reference_id` int(11) NOT NULL,
  `college_reference_id` int(11) NOT NULL,
  `course_content_rating` double(8,2) NOT NULL,
  `course_placemet_rating` double(8,2) NOT NULL,
  `course_future_scope_rating` double(8,2) NOT NULL,
  `course_faculty_rating` double(8,2) NOT NULL,
  PRIMARY KEY (`course_college_rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_college_review`
--

CREATE TABLE IF NOT EXISTS `course_college_review` (
  `course_college_review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_refference_id` int(11) NOT NULL,
  `college_refference_id` int(11) NOT NULL,
  `review_date` datetime NOT NULL,
  `job_place_work` text COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_rating` double(8,2) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`course_college_review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
-- Table structure for table `course_questions_reply`
--

CREATE TABLE IF NOT EXISTS `course_questions_reply` (
  `course_question_reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_question_reference_id` int(11) NOT NULL,
  `user_reference_id` int(11) NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `up_vaote` int(11) NOT NULL,
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
  `reviewer_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewer_rating` double(8,2) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`course_review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `course_review`
--

INSERT INTO `course_review` (`course_review_id`, `course_reference_id`, `reviewer_name`, `reviewer_description`, `reviewer_college`, `reviewer_rating`, `review`) VALUES
(1, 1, 'Isha', 'U.G. Final Year Student', 'IIT Kanpur', 8.20, 'This is a great course.Lots of opportunities.'),
(2, 2, 'Candice', 'Final Year Student', 'IIT Mumbai', 9.25, 'This is a great course.Lots of job and research opportunities.'),
(3, 1, 'Rohan', 'Final Year Student', 'IIT Kharagpur', 8.75, 'This is a very good course if one is really interested.');

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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_user_email_unique` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
