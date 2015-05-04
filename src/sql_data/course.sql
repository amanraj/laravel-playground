-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 06:43 AM
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
(1, 'Aerospace Engineering', 'Aerospace engineering is the primary branch of engineering concerned with the research, design process, development, construction, testing, science and technology of aircraft and spacecraft. ', 'This is a growing field.There are vast possibilities in this area.And it is bound to grow in the coming years.', 'The job conditions are pretty good.You have all the fascilities provided.', 'IIT Kanpur , IIT Kharagpur , IIT Mumbai', 'images/colleges/iit_kgp.jpg', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp_lg_3.jpg'),
(2, 'Civil Engineering', 'Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including works like roads, bridges, canals, dams, and buildings.', 'This course is in demand these days.It has been since long.So it is possible that it may have further enhanced opportuities.', 'The job conditions vary from company to comapany.', 'IIT Roorkee , ISM Dhanbad , IIT Kanpur', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp.jpg', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp_lg_3.jpg'),
(3, 'Mechanical Engineering', 'Mechanical engineering is the discipline that applies the principles of engineering, physics, and materials science for the design, analysis, manufacturing, and maintenance of mechanical systems.', 'This is an evergreen branch so there is always a lot of scope.', 'This requires a lot of fieldwork and toying around wwith big machines.', 'IIT Roorkee , IIT Kharagpur , IIT Delhi', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp.jpg', 'images/colleges/iit_kgp_lg_3.jpg'),
(4, 'Chemical Engineering', 'Chemical Engineering is a branch of engineering that applies physical sciences (e.g. chemistry and physics) and life sciences (e.g. biology, microbiology and biochemistry) together with mathematics and economics to produce, transform, transport, and properly use chemicals, materials and energy.', 'It has a lot of scope in future.', 'The working conditions are not very good.', 'IIT Mumbai , IIT Delhi , IIT Madras', 'images/colleges/iit_kgp_lg_3.jpg', 'images/colleges/iit_kgp_lg_1.jpg', 'images/colleges/iit_kgp_lg_2.jpg', 'images/colleges/iit_kgp.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
