-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2016 at 04:47 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epitrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `submitted` date NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `title`, `image`, `submitted`, `status`) VALUES
(1, 'F1', 'hamilton1.jpg', '2015-07-25', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` text NOT NULL,
  `reciever` text NOT NULL,
  `message` text NOT NULL,
  `datetimes` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `reciever`, `message`, `datetimes`) VALUES
(1, 'Shamim Namuyanjas Mu', 'Shamim Namuyanjas Musis', 'Sending out', '2015-08-04 14:25:29'),
(2, 'Richard', 'Richard', 'Hey', '2015-08-04 14:26:24'),
(3, 'Shamim Namuyanjas Mu', 'Shamim Namuyanjas Musis', 'Hey', '2015-08-04 14:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cohort`
--

CREATE TABLE IF NOT EXISTS `cohort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `track` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cohort`
--

INSERT INTO `cohort` (`id`, `name`, `track`, `year`, `created`, `country`, `end`) VALUES
(1, 'Cohort i', 'LAB', '2014', '2015-07-23', 'Uganda', '2018'),
(2, 'cohort ii ', 'LAB', '2015', '2015-07-23', NULL, NULL),
(3, 'cohort 23', 'VET', '2017', '2016-03-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact` varchar(50) NOT NULL,
  `studentID` varchar(20) NOT NULL,
  `type` text NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact`, `studentID`, `type`, `created`) VALUES
(1, '075223367521', '1', 'E-mail', '2015-07-26'),
(3, 'were@gmail.com', '1', 'E-mail', '2015-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `image`, `name`) VALUES
(1, 'KENY00011.GIF', 'Kenya'),
(2, 'UGAN00011.GIF', 'Uganda'),
(3, 'RWAN0001.GIF', 'Rwanda'),
(5, 'TANZ00011.GIF', 'Tanzania'),
(6, 'GHAN00011.GIF', 'Ghana');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `studentID` int(11) NOT NULL,
  `start` varchar(50) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL,
  `participants` varchar(50) DEFAULT NULL,
  `objective` text,
  `role` text,
  `description` text,
  `dos` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `studentID`, `start`, `end`, `participants`, `objective`, `role`, `description`, `dos`) VALUES
(1, 'TEST ', 1, '2016-06-08', '1900-12-07', NULL, 'more data', 'instructor', 'Testings ', '2016-07-05'),
(2, 'TEST', 1, '1467838800', '1468357200', NULL, 'information', 'participant', '<p>TEST</p>', '2016-07-05'),
(3, 'USER', 1, '07/01/2016', '07/11/2016', NULL, NULL, 'participant', '<p>USER</p>', '2016-07-05'),
(4, 'BSc in Information Science', 1, '07/20/2016', '07/05/2016', NULL, NULL, 'instructor', '<p>BSc in Information Science</p>', '2016-07-30'),
(5, 'BSc in Information Science', 1, '07/20/2010', '07/01/2016', NULL, NULL, 'participant', '<p>BSc in Information Science</p>', '2016-07-30'),
(6, 'BSc in Information Science', 1, '07/28/2016', '07/18/2016', NULL, '<p>BSc in Information Science in information&nbsp;</p>', 'participant', '<p>BSc in Information Science</p>', '2016-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE IF NOT EXISTS `employment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `organisation` text NOT NULL,
  `position` text NOT NULL,
  `country` text,
  `location` text NOT NULL,
  `sector` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `period` varchar(50) DEFAULT NULL,
  `startDate` varchar(255) DEFAULT NULL,
  `endDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `studentID`, `organisation`, `position`, `country`, `location`, `sector`, `contact`, `created`, `file`, `period`, `startDate`, `endDate`) VALUES
(2, 1, 'World Bank', 'Chief Administration', 'Angola', 'Malakai', 'Waste management', '078889234', '2016-07-30', NULL, NULL, '2016-07-11', '2016-07-17'),
(3, 1, 'UNMA', 'Accounts.', 'Aruba', 'Kampalas', 'none', '2132324', '2016-07-30', NULL, NULL, '2016-07-12', '2016-07-18'),
(4, 1, 'TEST', 'IT', 'Western Sahara', 'UTS', 'IT  ', '0781023433', '2016-07-07', NULL, NULL, '2016-07-04', '2016-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `country` text NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `posted` text NOT NULL,
  `registered` datetime NOT NULL,
  `status` text NOT NULL,
  `venue` text NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `country`, `startdate`, `enddate`, `posted`, `registered`, `status`, `venue`, `starttime`, `endtime`) VALUES
(1, 'Travel to Seminar', 'Travel seminar ffor Projects', 'Uganda', '2015-07-25', '2015-07-22', 'test', '2015-07-25 11:29:39', 'active', '', '15:28:45', '15:09:00'),
(2, 'TGIF', '', 'Kenya', '2015-07-22', '2015-07-14', 'test', '2015-07-25 15:09:05', 'active', '', '18:08:30', '15:09:00'),
(3, 'Kadanke', 'Dance music party', 'Uganda', '2016-03-09', '2016-03-10', 'test', '2016-03-08 12:05:25', 'active', '', '15:02:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE IF NOT EXISTS `fields` (
  `file` varchar(500) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dos` varchar(300) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `studentID` varchar(500) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`file`, `name`, `dos`, `location`, `notes`, `studentID`, `id`) VALUES
('CC_lists_And_Group_messaging.pdf', 'Ebola study Masaka', '16-07-04', 'Kenya', 'Study done with Water reed projecr Makerere', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outbreak`
--

CREATE TABLE IF NOT EXISTS `outbreak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `name` text NOT NULL,
  `country` text,
  `region` text NOT NULL,
  `max` varchar(100) NOT NULL,
  `min` varchar(100) NOT NULL,
  `onset` varchar(255) DEFAULT NULL,
  `dates` varchar(255) NOT NULL,
  `lab` text NOT NULL,
  `confirm` text NOT NULL,
  `etiology` text NOT NULL,
  `findings` text NOT NULL,
  `dos` date NOT NULL,
  `verified` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `outbreak`
--

INSERT INTO `outbreak` (`id`, `studentID`, `name`, `country`, `region`, `max`, `min`, `onset`, `dates`, `lab`, `confirm`, `etiology`, `findings`, `dos`, `verified`) VALUES
(1, 2, 'Test ', 'Uganda', 'Weather', '3', '1', '0000-00-00', '03/24/2016 - 03/29/2016', 'no', 'yes', 'Testing this ', 'testing ', '2016-03-10', 'true'),
(2, 1, 'Medication', 'Uganda', 'undefined', '56', '34', '2016-07-13', '03/23/2016 - 03/28/2016', 'undefined', 'no', 'undefined', 'Spread and outreach others ', '2016-03-10', 'false'),
(3, 1, 'Signal', 'Kenya', 'undefined', '49', '2', '2016-07-12', '03/15/2016 - 03/17/2016', 'undefined', 'no', 'undefined', 'Interested', '2016-03-10', 'false'),
(4, 1, 'none', 'Uganda', 'undefined', '28', '3', '2016-07-20', '07/11/2016 - 07/20/2016', 'undefined', 'no', 'undefined', 'nones', '2016-07-04', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE IF NOT EXISTS `pending` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object` varchar(255) DEFAULT NULL,
  `content` text,
  `action` text,
  `oid` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `created` varchar(50) DEFAULT NULL,
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `object`, `content`, `action`, `oid`, `user`, `created`, `type`) VALUES
(4, 'employment', ' ', 'delete', '2', 'Shamim Namuyanjas Musis', '2016-04-01 08:29:07', 'student'),
(5, 'employment', ' ', 'delete', '2', 'Shamim Namuyanjas Musis', '2016-04-01 08:29:44', 'student'),
(6, 'employment', '{"organisation":"World Bank","location":"Malakai","position":"Chiefs Administration","country":"Ethiopia","sector":"Waste management","contact":"067222889-12","created":"2016-04-01"}', 'update', '2', 'Shamim Namuyanjas Musis', '2016-04-01 08:56:57', 'student'),
(7, 'employment', ' ', 'delete', '2', 'Shamim Namuyanjas Musis', '2016-04-01 09:00:00', 'student'),
(8, 'employment', '{"organisation":"World Bank","location":"Malaba","position":"Chief Administration","country":"Ethiopia","sector":"Waste management","contact":"067222889-12","created":"2016-04-01"}', 'update', '2', 'Shamim Namuyanjas Musis', '2016-04-01 09:00:16', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `studentID` int(11) NOT NULL,
  `title` text NOT NULL,
  `country` text NOT NULL,
  `eventType` text NOT NULL,
  `eventName` text NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `submissionDate` date NOT NULL,
  `accepted` text NOT NULL,
  `presentationType` text NOT NULL,
  `dos` date NOT NULL,
  `summary` text NOT NULL,
  `author` text,
  `presenter` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id`, `file`, `studentID`, `title`, `country`, `eventType`, `eventName`, `date`, `location`, `submissionDate`, `accepted`, `presentationType`, `dos`, `summary`, `author`, `presenter`) VALUES
(1, 'AM_Slides_for_HIPS_Presentation-_Final2.ppt', 1, 'HIPPS presentation', 'Uganda', 'Seminar', 'HIPPS', '0000-00-00', 'Mukono', '2015-08-04', 'yes', 'Oral', '2015-08-04', 'Hipps malaria Presentation', NULL, NULL),
(2, 'aartestsheet6.xlsx', 1, '', 'Uganda', 'Conference', 'Data Information systems', '0000-00-00', 'undefined', '2016-07-04', 'yes', 'Poster', '2016-07-08', '<p>none</p>', 'undefined', 'undefined'),
(3, 'CC_errors_2.0', 1, 'Later Date', 'Bahrain', 'Meeting', 'Later Date', '0000-00-00', 'Uganda', '2016-07-30', 'no', 'Oral', '2016-07-30', '<p>Information</p>', 'Doug', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `abstract` text NOT NULL,
  `country` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `dos` date NOT NULL,
  `accepted` text NOT NULL,
  `verified` text NOT NULL,
  `studentID` int(11) NOT NULL,
  `author` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `file`, `title`, `abstract`, `country`, `link`, `dos`, `accepted`, `verified`, `studentID`, `author`) VALUES
(1, 'AM_Slides_for_HIPS_Presentation-_Final.ppt', 'HIPPS presentation', 'This is a medication program for  Uganda - Kenya', 'Kenya', 'HIPPS Government program ', '2015-08-04', 'no', 'true', 1, 'Micheal'),
(2, 'allergies.xlsx', 'Homageses', 'none informal', 'Uganda', 'www.google.com', '2016-07-04', 'no', 'false', 1, 'Michael'),
(3, ' ', 'TESTS', 'Tests', 'Bahamas', 'www.google.com', '2016-07-05', 'no', 'true', 1, 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `institute` text NOT NULL,
  `completion` date NOT NULL,
  `graduation` date NOT NULL,
  `verified` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `studentID`, `name`, `institute`, `completion`, `graduation`, `verified`, `created`) VALUES
(1, '1', 'Masters (MBA)', 'Makerere University', '2016-07-13', '2016-07-12', 'False', '2016-07-07 00:00:00'),
(2, '5', 'Bsc  Computing', 'kyambogo.', '2016-07-12', '1900-12-14', 'true', '2016-07-07 00:00:00'),
(3, '2', 'Masters (MBA)', 'Makerere University', '2016-07-13', '1900-12-13', 'False', '2016-07-07 00:00:00'),
(4, '1', 'Masters (MBA)', 'Makerere University', '2016-07-13', '2016-07-12', 'False', '2016-07-07 21:16:46'),
(5, '1', 'Bsc  Computing', 'kyambogo.', '2016-07-12', '1900-12-30', 'true', '2016-07-07 00:00:00'),
(6, '2', 'Bsc  Computing', 'kyambogo.', '2016-07-12', '1900-12-14', 'true', '2016-07-07 21:18:44'),
(7, '1', 'Masters (MBA)', 'Makerere University', '2016-07-13', '1900-12-13', 'False', '2016-07-07 21:18:49'),
(8, '5', 'Bsc  Computing', 'kyambogo.', '2016-07-12', '2016-08-19', 'False', '2016-07-07 00:00:00'),
(9, '3', 'Bsc  Computing', 'kyambogo.', '2016-07-12', '2016-08-19', 'False', '2016-07-07 21:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `other` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `cohort` varchar(50) NOT NULL,
  `submitted` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `complete` varchar(255) DEFAULT NULL,
  `date_complete` varchar(255) DEFAULT NULL,
  `comments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `image`, `fname`, `lname`, `other`, `email`, `gender`, `dob`, `country`, `password`, `contact`, `cohort`, `submitted`, `status`, `complete`, `date_complete`, `comments`) VALUES
(1, '24.jpg', 'Fidelis', 'Mwagas', 'Paul', 'weredouglas@accessmobileinc.com', 'female', '2015-07-26', 'Uganda', 'AOgbi5xSHjgr5q1P2QhjALwDSPGYt9Cg7LwWLetszFkwpc9Q6w55eCgSDnMmbu5d1wbGVcrKgVkaKlqX1Cg03w==', '07892321021', 'cohort ii 2001', '2015-07-24', 'active', 'Alot of work', '2016-09-12', NULL),
(2, 'ISMAIL_WANDERA6.jpg', 'Richards', 'Omondi', 'Chancellor', 'richard@cred.org', 'male', '2015-07-26', 'Uganda', 'diYuaIre3iv78PsE8hhys6mo3Au0ZY4WuL+5Lkf2dZ7amvoxRtasgTkod8qc08W8QEzB2qi5E1R2mEzB9QqYVA==', '0782481746', 'cohort ii 2001', '2015-07-24', 'active', NULL, NULL, NULL),
(3, 'OFFICE_WED.jpg', 'Richard', 'Barungis', 'Moses', 'richard@epitrack.com', 'male', '2015-08-11', 'Kenya', '11OxvFj0x9cH/NKyf7Z2WFJjAKDryZipsJCdkrT9cmbM1uBhKmLMKefefw+qreeWeC3SU3oZ8lhxPh45uuRk2g==', ' 2547890123', 'Cohort i 1997', '2015-08-13', 'false', NULL, NULL, NULL),
(4, '21.jpg', 'Andrew', 'Muleesi', 'Mayanja', 'info@aws.com', 'male', '2015-08-17', 'Uganda', 'oYfzp5HJ8zICM349+GqR4wM66l9Qo98YEdWFykg+sOYAenOcJ8DpahmVFZTUb8SF2dlezvuj7Acr9KxEJ+MoaQ==', '25472045897', 'cohort ii 2001', '2015-08-16', 'active', NULL, NULL, NULL),
(5, 'OFFICE_WED.jpg', 'Bashir', 'Twesigye', '', 'bashir@credUganda.org', 'male', '1965-03-16', 'Uganda', '7BPMoeOhQFU/dZE+Pr7uZ/smoblY1w/NzHaEW25QIvh5Z1VVRHKveWxWeP1luY9yz9bGm4LJqmf7v/7GRto5uw==', '+256772060272', 'cohort ii 2001', '2016-03-11 09:28:28', 'false', NULL, NULL, NULL),
(6, 'ISMAIL_WANDERA6.jpg', 'Ismail', ' Wandera', '', 'Alert@gmail.com', 'male', '2016-07-26', 'Uganda', 'kvlj5owg01IWMZ9YAtSiLreowe6BD33wLOnji1EHezlqkdXOKErETb1bwO2m3LCJV5cACTlLI+MCS3JKSpPELw==', '0782349012', 'Cohort i 1997', '2016-07-30 11:10:38', 'false', NULL, NULL, NULL),
(7, 'OFFICE_WED.jpg', 'Odoki', 'Morris', '', 'morris@gmail.com', 'male', '1997-07-04', 'Uganda', 'NK9fraGpNHEvb/QbWCfK/VbU7681ZaDK3dgE97svUHqsvd6PwKbOpTbBtxh0jEupUybeqfYTpvYZyVn4wD+ykw==', '07890123', 'cohort 23', '2016-07-30 11:40:05', 'false', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE IF NOT EXISTS `study` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `name` text NOT NULL,
  `onset` varchar(50) DEFAULT NULL,
  `dissemination` varchar(50) DEFAULT NULL,
  `findings` text NOT NULL,
  `dos` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `studentID`, `name`, `onset`, `dissemination`, `findings`, `dos`) VALUES
(1, 1, 'Water Reed', '2015-08-04', '2015-08-04', 'How Cholera is spread to a patient again', '2015-08-04'),
(2, 1, 'Whooping Cough', '2015-08-04', '2015-08-04', 'Whooping coughs spreading rate in South Africa', '2015-08-04'),
(3, 1, 'River plate', '2016-06-14', '0000-00-00', 'River plate and red eye diseases', '2015-08-04'),
(4, 1, 'Water Reed', '0000-00-00', '0000-00-00', 'information study\n', '2016-07-04'),
(5, 1, 'TEST ', '0000-00-00', '0000-00-00', '<p>TEST</p>', '2016-07-05'),
(6, 1, 'TEST ', '07/14/2016', '07/20/2016', '<p>TEST&nbsp;</p>', '2016-07-05'),
(7, 1, 'Whooping Cough', '2015-08-04', '2015-08-04', 'Whooping coughs spreading rate in South Africa', '2016-07-30'),
(8, 1, 'River plate', '1900-12-20', '0000-00-00', 'River plate and red eye diseases', '2016-07-30'),
(9, 1, 'River plate', '2016-06-14', '0000-00-00', 'River plate and red eye diseases', '2016-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `surveillance`
--

CREATE TABLE IF NOT EXISTS `surveillance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `verified` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `region` varchar(255) DEFAULT NULL,
  `finding` text NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `surveillance`
--

INSERT INTO `surveillance` (`id`, `studentID`, `name`, `verified`, `type`, `region`, `finding`, `date`, `created`) VALUES
(1, '1', 'Reeders', 'false', 'Laboratory', 'Algeria', 'We have received your registration.\nAn email and calendar invitation will be sent to you prior to the webinar that contains the video link to the video conference. ebola', '2016-07-19', '2016-07-07 00:00:00'),
(2, '1', 'Makers', 'true', 'Laboratory', 'Cambodia', 'We have received your registration.\nAn email and calendar invitation will be sent to you prior to the webinar that contains the video link to the video conference. malaria', '2016-07-12', '2016-07-07 00:00:00'),
(3, '1', 'Winder fest', 'true', 'Active', 'Uganda', '<p>This is information in regard &nbsp;to your survey</p>', '2016-07-30', '2016-07-30 12:23:12'),
(4, '1', 'Polio', 'false', 'Active', 'Anguilla', '<p>Testing this&nbsp;</p>', '2016-07-19', '2016-07-30 12:52:30'),
(5, '1', 'Malaria', 'true', 'Passive', 'Uganda', '<p>This is a malaria test</p>', '2016-07-26', '2016-07-30 12:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `track` text NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `track`, `created`) VALUES
(1, 'EPIs', '2015-07-23'),
(2, 'LAB', '2015-07-23'),
(4, 'USER', '2016-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `registered` datetime NOT NULL,
  `status` text NOT NULL,
  `level` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `country`, `password`, `contact`, `registered`, `status`, `level`, `image`) VALUES
(1, 'Douglas', 'Were', 'weredouglas@gmail.com', 'Uganda', 'p36+hyMjYIDk3GT8BYdlReRrT4rfwsL1O9DpJyN5wvf5r0nbaWNzg3Oa2I6udGVF1iBnxKy1r3VL5bCKhYzytw==', '0782481746', '2016-03-14 00:00:00', 'false', '1', '24.jpg'),
(3, 'Andrew', 'Muleeyi', 'andrew@yahoo.com', 'Uganda', '78y7Wh9SjRw/5CnoNJOSvebllXcTC/2psQOkoY+Mryn0Mzu5VQoz1LO5VUtoqDqLCicbcULaFYmN//QKZGkGew==', '0782481746', '2016-03-10 14:25:55', 'active', '2', NULL),
(4, 'Paul', 'Silivia', 'info@cred.org', 'Uganda', 'Mki3MGiqfyvktmjFw7Qo2CRpWT64z4SO9iATuTYGTWDIyxSNIw7rFFf5r6D0jdYcn7bs/nOLi6PMOBMO4RwBgQ==', '0789231212', '2016-03-14 17:12:32', 'false', '2', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
