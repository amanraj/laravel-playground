-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 04:53 PM
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
  `college_fees` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `college_fees_details` mediumtext COLLATE utf8_unicode_ci NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `college_type`, `college_location`, `college_accreditation`, `college_contact_number`, `college_email`, `college_website`, `college_entrance_exam`, `college_fees`, `college_fees_details`, `college_addmision_process`, `college_overview`, `college_hostels`, `college_fests`, `college_other_facilities`, `college_placement`, `college_comments`, `college_image_1`, `college_image_2`, `college_image_3`, `college_image_4`, `college_image_5`, `college_image_6`) VALUES
(1, 'IIT BHU', 'Engineering', 'Varanasi, Uttar Pradesh, India.', '', '+91 542 2368158, 6702080', 'dean@iitbhu.ac.in', 'www.iitbhu.ac.in', 'JEE Advanced', '65,000', 'IIT BHU costs about 65000 INR per semester which includes accommodation and food charges.', 'IIT BHU admits its under graduate students by JEE-Mains followed by JEE-Addvanced while Post Graduate students are admitted by JAM/GATE', '', 'IIT(BHU),Varanasi has a residential and co-educational campus built on an area of 400 acres within the larger BHU campus which is spread over nearly 1,300 acres (5.3 km2) at the southern end of Varanasi on the banks of the River Ganges.\r\nThere are 15 hostels for students, 11 for boys, 3 for girls and 1 for married couples.\r\n', '1.	TechNex: TechNex is the annual Technical fest of IIT-BHU. It brings together students from all over the country to participate in the celebration to exploit their knowledge and creative extravagance along with experts from the fields of both academia and industry.\r\n2.	Kashiyatra: The annual social and cultural fest of IIT-BHU.  Indian rock bands Parikrama and Indian Ocean, Indian classical musicians Pandit Hariprasad Chaurasia and Ustad Bismillah Khan, and singers Shubha Mudgal, Shaan, Lucky Ali, Shibani Kashyap and Javed Ali, have performed at Kashiyatra.\r\n', 'The departments hold their own fests every year. Students run an association by the name Kashi Utkarsh. Every year a sports competiton by the name Spardha is conducted.', '•	Accenture\r\n•	Adobe\r\n•	Amazon\r\n•	Applied Materials\r\n•	Axtria\r\n•	Browserstack\r\n•	Career UTS\r\n•	Caterpillar\r\n•	Citicorp\r\n•	Clavileno Capital\r\n•	Eaton\r\n•	Ebay\r\n•	EdgeVerve\r\n•	Epic Systems\r\n•	EXL\r\n•	Fire Eye\r\n•	Flipkart\r\n•	Freescale Semiconductor\r\n•	Futures First\r\n•	Goldman Sachs\r\n•	Google\r\n•	Hindustan Unilever Limited\r\n•	Hospira HealthCare\r\n•	InMobi\r\n•	Lexinnova\r\n•	Microsoft India\r\n•	Microsoft Redmond\r\n•	Microsoft Sales\r\n•	Nutanix\r\n•	Nvidia\r\n•	Oracle\r\n•	Orbees Medical\r\n•	Oyo Rooms\r\n•	Pentium\r\n•	Reliance\r\n•	Samsung Bangalore\r\n•	Snapdeal\r\n•	Spytech\r\n•	Sygmoid Analytics\r\n•	Tata Motors\r\n•	United Health Group\r\n•	Visa\r\n•	Vodafone\r\n•	Walmart\r\n•	Works Applications\r\nThe highest package for the current academic session is of 2.03 crore INR by Oracle.\r\nThe average salary is around 12 lakhs INR for an IIT-BHU student.\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(2, 'IIT Bombay', 'Engineering', 'Mumbai, Maharashtra, India.', '', '+91 (22) 2572 2545 ', 'dean.sa@iitb.ac.in', 'www.iitb.ac.in', 'JEE Advanced', '65,000', 'IIT Bombay costs about 65000 INR per semester which includes accommodation and food charges.', 'IIT Bombay admits its under graduate students by JEE-Mains followed by JEE-Addvanced while Post Graduate students are admitted by JAM/GATE', '', 'There are a total of 15 hostels, of which two hostels (Hostels 10 and 11) and a part of the newly constructed hostel (Hostel 15) are for female students.\r\nDue to its proximity to the Sanjay Gandhi National Park, the campus is yellow and mostly untouched by the pollution of the rest of the city. The proximity of the campus to the national park has also led to occasional sightings of panthers, Leopards and Gharial (Gavialis gangeticus) crocodiles along the banks of Lake Powai.\r\n', '1.MOOD Indigo:  The socio-cultural fest of IIT Bombay is also the largest of its kind in Asia. Usually held in December, it has witnessed personalities like R.D.Burman, Sachin Tendulkar, Amir Khan etc.\r\n\r\n2.Techfest:  Techfest is the science and technology fest of IIT Bombay held from 1998 in the month of January . It became the first fest to hold its events in other countries too.\r\n', 'The campus has its Entrepreneurship Cell to support the growth of startups. It also conducts various Departmental fests every year. The Students’ Gymkhana is the Students’ Governing Body in IIT Bombay.', 'Companies like Deloitte, Airbus, Microsoft, Google, Morgan Stanley India, Qualcomm India, General Electric, Shell etc. made offers to eligible students.\r\nThe highest package for the 2014-2015 session was of 2 crore INR by Facebook.\r\n\r\nThe average salary for the session of 2014-2015 was around 12 lakhs INR.\r\nThe placements of IIT Bombay is what makes it the most cherished IIT in India.\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(3, 'IIT Delhi', 'Engineering', 'Delhi, India.', '', '011 2659 7135', 'webmaster@admin.iitd.ac.in', 'www.iitd.ac.in', 'JEE Advanced', '65,000', 'IIT Delhi costs about 65000 INR per semester which includes accommodation and food charges inside the campus.', 'IIT Delhi admits its under graduate students by JEE-Mains followed by JEE-Addvanced while Post Graduate students are admitted by JAM/GATE', '', 'There are 13 hostels (11 for boys and 2 for girls). There are also apartments for married students. All the hostels are named after mountain ranges in India. \r\nEach Hostel has its distinct culture of sports and cultural activities. Hostels compete in inter hostel events to bring home various trophies which include RCA and GC, which are the highest awards for cultural and sports accomplishments over a year by a particular hostel.\r\n', '1.Rendezvous: Rendezvous is the annual socio-cultural fest of IIT Delhi held in the month of October. It has seen eminent personalities like Arijit Singh, Mohit Chauhan, Anushka Sharma etc.\r\n\r\n2.Tryst: The annual science and technology fest of IIT Delhi held in the month of February-March. Tryst has featured a number of guest lectures of  Kazutaka Kurihara, Anil Kakodkar, and Montek Singh Ahluwalia.\r\n', 'The student council is the Co-curricular and Academic Interaction Council (CAIC). which deals with the academic and co-curricular activities of the students.\r\nThe co-curricular activities under the CAIC are:\r\n•	Robotics Club \r\n•	Entrepreneurship Development Cell \r\n•	Technocracy (consisting of Astronomy Club, Economics Club, Electronics Club and Tech Workshops) \r\n•	Automobile Club (consisting of Formula SAE, Mini Baja, and HPV)\r\n', 'Some of the Top Recruiters\r\n•	AM Marketplace (Limeroad)\r\n•	Facebook\r\n•	Flipkart\r\n•	GlaxoSmithKline Consumer Healthcare\r\n•	Google\r\n•	Hindustan Unilever Limited\r\n•	ITC\r\n•	Microsoft\r\n•	Nestle\r\n•	OlaCabs\r\n•	One97 (PayTM)\r\n•	Snapdeal\r\n•	SSN Logistics (Delhivery)\r\n•	VMock\r\n•	Wipro Consumer Care\r\n•	Zostel\r\nThe highest package for the 2014-15 session was of 1.4 crore INR by Facebook.\r\nThe average salary for the current session is about 12 lakh INR.\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(4, 'IIT Gandhinagar', 'Engineering', 'Gandhinagar, Gujarat,  India', '', '+91 93284 74222', 'office@iitgn.ac.in', 'www.iitgn.ac.in', 'JEE Advanced', '65,000', 'IIT Gandhinagar has its fees around 65,000 INR per semester. It also includes the accommodation and mess services inside the campus.', 'IIT Gandhinagar admits its under graduate students by JEE-Mains followed by JEE-Advanced while Post Graduate students are admitted by JAM/GATE.', '', 'Accommodation facilities for all the undergraduate students are available on campus and in the housing complex across the street from the Institute. There are two hostels for the boys—one inside the campus and the other hostel across the road in the building complexes. There is a separate girls'' hostel within the campus for the undergraduate women students.\r\nThe permanent campus of IIT Gandhinagar is under construction and expected to be operational from the academic session 2015-16. It is going to be a pollution-free and green zone which will operater on solar power.\r\n', '1.Amalthea: Amalthea is the student organised technical summit of IIT Gandhinagar. The summit focuses purely on spreading technical knowledge and suffusing enthusiasm in minds to work for the greater good of man.\r\n \r\n2.Blithchron: Blithchron is the cultural festival of IIT Gandhinagar that happens during the month of January, and typically lasts for two days.  Some of the lead performers at the festival each year include Nitin Malik of Parikrama fame, Dr. Kumar Viswas the poet, Agnee and other performers.\r\n', 'Some other initiatives of IIT Gandhinagar include Pragya, Palantir, Jashn , HallaBol, Udaan ,Eureka, MuSty.\r\nStudents are represented by the Students'' Senate, a legislative body consisting of student representatives.\r\n', 'Top Recruiters\r\n•eClerx Services\r\n•FlipKart\r\n•GridAnts Technologies Private Limited\r\n•Mahindra & Mahindra\r\n•Maruti Suzuki\r\n•Tata Power\r\n•Texas Instruments\r\nThe highest package was of 15 lakhs INR by GridAnts Technologies Private Limited.\r\nThe average salary for the session 2014-15 is about 8 lakhs INR.\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(5, 'IIT Hyderabad', 'Engineering', 'Hyderabad, Andhra Pradesh, India', '', '(040) 2301 6033', 'info@iith.ac.in', 'www.iith.ac.in', 'JEE Advanced', '65,000', 'IIT Hyderabad has its fees around 65,000 INR per semester. It also includes the accommodation and mess services inside the campus.', 'IIT Hyderabad admits its under graduate students by JEE-Mains followed by JEE-Advanced while Post Graduate students are admitted by JAM/GATE.', '', 'It is expected that IIT Hyderabad will shift to its permanent campus by the academic session 2015-2016.\r\nThe academic blocks are newly renovated buildings of Sarath Vikas School Campus. Facilities include hostels, classrooms, offices, recreation, sports and medical facilities. \r\n', 'Elan Elan is the annual technical and cultural festival of IITH. It is usually held during spring, in the beginning of the year (January/February). It includes workshops, lectures, demonstrations, technical exhibitions, cultural performances and live concerts. Competitive activities cover design events, programming, simulations and modeling, quizzes, debates, applied engineering, robotics.', 'Among all the new IITs in the country IIT Hyderabad has been making rapid progress on the research side apart from providing regular B.Tech programmes.\r\nIIT Hyderabad is involved in the DISANET project for disaster mitigation, an Indo-Japanese collaboration.\r\nηvision ηvision is the inter-institute technical festival of IIT Hyderabad.  The fest comprises various technical events, which are decided by the existing technical clubs in IIT Hyderabad and some informal events also.\r\n', '2015 batch statistics-\r\nHighest package offered: 28 Lacs per annum\r\nAverage package offered: 11 Lacs per annum\r\nTop recruiters\r\n•	Amazon\r\n•	Bank of America\r\n•	Dell R&D\r\n•	Eaton\r\n•	Flipkart\r\n•	HP\r\n•	Informatica\r\n•	Mercedes Benz\r\n•	Paypal\r\n•	Snapdeal\r\n•	Strands Life Science\r\n•	Tata Motors\r\n•	UHG\r\n•	UURMI\r\n•	Works application\r\n•	Yahoo Japan\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(6, 'IIT Indore', 'Engineering', 'Indore, Madhya Pradesh, India', '', '0731 243 8717', '', 'www.iiti.ac.in', 'JEE Advanced', '65,000', 'IIT Indore has its fees around 65,000 INR per semester. It also includes the accommodation and mess services inside the campus.', 'IIT Indore admits its under graduate students by JEE-Mains followed by JEE-Advanced while Post Graduate students are admitted by JAM/GATE.', '', 'IIT Indore is currently operating from its temporary campus but is expected to shift to its original permanent campus by the academic session of 2015-16.', 'FluxusFluxus is the annual inter-collegiate cultural festival of IIT Indore, held in February. It consists of several competitions, informal events, workshops and showcases professional performances. \r\nFamous Bollywood singers like Aditi Singh Sharma and Sona Mohapatra have performed at Fluxus.\r\n', 'IIT Indore plans to have world-class research programmes,[10] as it evolves.\r\nIIT-Indore tops in quality research among new IITs\r\n', 'IIT Indore has companies like Flipkart, Amazon, Infosys etc as their top recruiters.\r\nThe highest salary till date is of about 18 lakhs INR and the average salary is about 7 lakha INR.\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(7, 'IIT Kanpur', 'Engineering', 'Kanpur, Uttar Pradesh, India', '', '0512-259-0151', 'dosa@iitk.ac.in', 'www.iitk.ac.in', 'JEE Advanced', '65,000', 'IIT Kanpur has its fees around 65,000 INR per semester. It also includes the accommodation and mess services inside the campus.', 'IIT Kanpur admits its under graduate students by JEE-Mains followed by JEE-Advanced while Post Graduate students are admitted by JAM/GATE.', '', 'IIT Kanpur has 10 boys'' hostels, 2 girls'' hostels and one girls'' residence tower all together called the ''Halls of Residence''.\r\nThere are various Inter Hall events conducted throughout the year which makes Hall life more interesting in IIT Kanpur.\r\n', '1. Antaragni:   The socio-cultural innovative fest of IIT Kanpur. Antaragni witnesses many eminent personalities like Vishal-Shekhar, Sunidhi Chauhan, Atif Aslam etc.\r\n2. Techkriti: Techkriti was started in 1995 with an aim to encourage interest and innovation in technology among students. It has seen lectures by A P J Abdul Kalam, Rakesh Sharma, Richard Stallman etc.\r\n', 'Some events like Udgosh, E-Summit and Vivekananda Youth Leadership Convention are also conducted at IIT Kanpur.\r\nStudents’ Publications: The students bring out a student magazine ''The Campus Magazine'',a monthly newspaper, Vox Populi and NERD, Scientia a science and technology magazine.\r\nThere’s a Students’ Gymkhana which is the students’ government organization of IIT Kanpur.\r\n', 'Some companies that visit IIT Kanpur to recruit their students include :\r\n•	Amazon\r\n•	Facebook\r\n•	Flipkart\r\n•	Goldman Sachs\r\n•	Google\r\n•	Microsoft\r\n•	Mitsubishi\r\n•	Oracle\r\n•	Samsung\r\n•	Tower Research\r\n•	WorldQuant\r\nThe highest salary of an IIT Kanpur student according to 2014-2015 stats is 1.50 Crore INR by Oracle.\r\nThe average salary for the session of 2014-2015 was around 12 lakhs INR.\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(8, 'IIT Kharagpur', 'Engineering', 'Kharagpur,West Bengal,India', '', '9966554433', 'iitkgp@gmail.com', 'www.iitkgp.ac.in', 'JEE Advanced', '75,000', 'IIT Kharagpur has its fees around 65,000 INR per semester. It also includes the accommodation and mess services inside the campus.', 'JEE Advanced', 'Great', 'LLR LBS RP RK', 'SF Ktj', 'Many', 'Good', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(9, 'IIT Patna', 'Engineering', 'Patna, Bihar, India', '', '+91-612-2552067', ' iitpatnaoff@iitp.ac.in', 'www.iitp.ac.in', 'JEE Advanced', '65,000', 'IIT Patna has its fees around 65,000 INR per semester. It also includes the accommodation and mess services inside the campus.', 'IIT Patna admits its under graduate students by JEE-Mains followed by JEE-Advanced while Post Graduate students are admitted by JAM/GATE.', '', 'At present, the institute is operating from a temporary 10 acres (4.0 ha) complex in Pataliputra colony, Patna, in buildings which have been renovated and were previously used by the Naveen Government Polytechnic.\nThe institute will be operational at its permanent campus from the academic session 2015-16.\nCurrently, The students of IIT Patna are accommodated in five hostels.\n', 'Anwesha is the annual techno-cultural fest of Indian Institute of Technology Patna. It is a four-day-long  event usually held towards the end of January every year.[1] The fest hosts technical, cultural, literary, eco and management events. Shatrughna Sinha was the chief guest in the year 2014.', 'The Student Activity Center is the nucleus of all student curricular and extracurricular activities. \n A student gymkhana building is also located in the hostel compound. All the hostels are equipped with common rooms, facilities for indoor games like Table tennis, Carrom etc. Workshops on robotics and other events are also conducted.\n', 'Some of the top recruiters include Snapdeal, Amazon, Yodlee, Flipkart etc.\nThe highest package for the 2014-15 session was of 25 lakhs INR by Amazon.\nThe average salary of an IIT Patna student is about 8 lakhs per annum.\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', ''),
(10, 'IIT Roorkee', 'Engineering', 'Roorkee, Uttarakhand, India', '', '+91-1332-285311', 'regis@iitr.ernet.in', 'www.iitr.ac.in', 'JEE Advanced', '65,000', 'IIT Roorkee has its fees around 65,000 INR per semester. It also includes the accommodation and mess services inside the campus.', 'IIT Roorkee admits its under graduate students by JEE-Mains followed by JEE-Advanced while Post Graduate students are admitted by JAM/GATE.', '', 'IIT Roorkee has 16 hostels also known as Bhawans out of which 2 are for girls. In IIT Roorkee, hostel life includes all the extra-curricular activities which complement the ongoing academic routine.', '1.Thomso: The annual socio-cultural fest of IIT Roorkee has witnessed performances from Farhan Akhtar,Indian Ocean band, comedian Ahsaan Qureshi etc. Thomso is usually conducted in the month of October/November.\r\n\r\n2.Cognizance: Cognizance is the annual science and technology fest of IIT Roorkee and one of the largest technical fests in India.It conducts a variety of robotic events, exhibitions, workshops and various guest lectures.\r\n', 'A salient feature of IIT Roorkee is its hobbies club which is different from other IITs. It aims to nurture the hobbies of its students.\r\nBesides this, there are various departmental fests and National Service Scheme which has more than 700 students under its roll list.\r\n', 'Some of the top recruiters include Microsoft, Facebook, Flipkart, Myntra, Samsung, Oracle.\r\nThe highest package for the session 014-15 was of 1.83 crore INR by Oracle.\r\nThe average salary is about 12 lakhs INR for the academic year 2014-2015.\r\n', '', 'images/colleges/iit_kgp.jpg', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `college_questions_reply`
--

INSERT INTO `college_questions_reply` (`college_question_reply_id`, `college_question_reference_id`, `user_reference_id`, `reply`, `up_vote`, `date`) VALUES
(1, 1, 1, 'this is a general ans to your general question', 5, '0000-00-00 00:00:00'),
(2, 6, 1, 'Hello i am gud', 1, '0000-00-00 00:00:00'),
(3, 1, 3, 'hello', 21, '2015-06-10 08:39:26'),
(4, 1, 1, 'Hello this is candice', 1, '0000-00-00 00:00:00'),
(5, 1, 2, 'this too ', 0, '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_stream`, `course_duration`, `course_content`, `future_scope`, `course_placement`, `job_place_work`, `top_institute`, `course_image_1`, `course_image_2`, `course_image_3`, `course_image_4`) VALUES
(1, 'Aerospace Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(2, 'Biotechnology', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(3, 'Ceramic Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(4, 'Chemical Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(5, 'Chemistry', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(6, 'Civil Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(7, 'Computer Science and Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(8, 'Design', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(9, 'Electrical Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(10, 'Electronics Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(11, 'Electronics and Communication Engineering', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(12, 'Humanities and Social Sciences', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', ''),
(13, 'hydrology', 'engineering', 0, 'Great', 'Good', '', 'Nice', 'IIT Kanpur', '', '', '', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `course_college`
--

INSERT INTO `course_college` (`course_reference_id`, `college_reference_id`, `last_year_stats`) VALUES
(1, 1, ''),
(1, 5, ''),
(1, 7, ''),
(2, 3, ''),
(2, 5, ''),
(2, 10, ''),
(3, 1, ''),
(4, 1, ''),
(4, 2, ''),
(4, 3, ''),
(4, 4, ''),
(4, 5, ''),
(4, 7, ''),
(4, 8, ''),
(4, 9, ''),
(4, 10, ''),
(5, 5, ''),
(5, 10, ''),
(6, 1, ''),
(6, 2, ''),
(6, 3, ''),
(6, 4, ''),
(6, 5, ''),
(6, 7, ''),
(6, 8, ''),
(6, 9, ''),
(6, 10, ''),
(7, 1, ''),
(7, 2, ''),
(7, 3, ''),
(7, 4, ''),
(7, 5, ''),
(7, 7, ''),
(7, 8, ''),
(7, 9, ''),
(7, 10, ''),
(8, 5, ''),
(9, 1, ''),
(9, 2, ''),
(9, 3, ''),
(9, 4, ''),
(9, 5, ''),
(9, 6, ''),
(9, 7, ''),
(9, 8, ''),
(9, 9, ''),
(9, 10, ''),
(10, 1, ''),
(11, 8, ''),
(11, 10, ''),
(12, 8, ''),
(12, 10, ''),
(13, 8, ''),
(13, 10, '');

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
