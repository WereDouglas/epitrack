-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2016 at 06:05 AM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cohort`
--

INSERT INTO `cohort` (`id`, `name`, `track`, `year`, `created`) VALUES
(1, 'Cohort i 1997', 'LAB', '', '2015-07-23'),
(2, 'cohort ii 2001', 'LAB', '2015', '2015-07-23'),
(3, 'cohort 23', 'TESTED', '2017', '2016-03-10');

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
(1, '075233672', '1', 'Mobile', '2015-07-26'),
(3, 'were@aol.com', '1', 'e-mail', '2015-07-26');

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
  `name` text NOT NULL,
  `studentID` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `participants` varchar(50) NOT NULL,
  `objective` text NOT NULL,
  `role` text NOT NULL,
  `description` text NOT NULL,
  `dos` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE IF NOT EXISTS `employment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `organisation` text NOT NULL,
  `position` text NOT NULL,
  `country` text NOT NULL,
  `location` text NOT NULL,
  `sector` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `period` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `studentID`, `organisation`, `position`, `country`, `location`, `sector`, `contact`, `created`, `file`, `period`) VALUES
(2, 1, 'World Bank', 'Chief Administration', 'Ethiopia', 'Malakai', 'Waste management', '067222889-12', '2015-07-27', NULL, NULL);

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
-- Table structure for table `outbreak`
--

CREATE TABLE IF NOT EXISTS `outbreak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `name` text NOT NULL,
  `country` text NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `outbreak`
--

INSERT INTO `outbreak` (`id`, `studentID`, `name`, `country`, `region`, `max`, `min`, `onset`, `dates`, `lab`, `confirm`, `etiology`, `findings`, `dos`, `verified`) VALUES
(1, 2, 'Test ', 'Uganda', 'Weather', '3', '1', '0000-00-00', '03/24/2016 - 03/29/2016', 'no', 'yes', 'Testing this ', 'testing ', '2016-03-10', 'false'),
(2, 1, 'Medication', 'Kenya', 'Kenya', '56', '34', '1457643600', '03/23/2016 - 03/28/2016', 'no', 'yes', 'System management', 'Spread and outreach ', '2016-03-10', 'false'),
(3, 1, 'Signal', 'Kenya', 'Middle East', '45', '2', '0', '03/15/2016 - 03/17/2016', 'yes', 'yes', 'irrigation region wa', 'Interested', '2016-03-10', 'false');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id`, `file`, `studentID`, `title`, `country`, `eventType`, `eventName`, `date`, `location`, `submissionDate`, `accepted`, `presentationType`, `dos`, `summary`, `author`, `presenter`) VALUES
(1, 'AM_Slides_for_HIPS_Presentation-_Final2.ppt', 1, 'HIPPS presentation', 'Uganda', 'Seminar', 'HIPPS', '0000-00-00', 'Mukono', '2015-08-04', 'yes', 'Oral', '2015-08-04', 'Hipps malaria Presentation', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `file`, `title`, `abstract`, `country`, `link`, `dos`, `accepted`, `verified`, `studentID`, `author`) VALUES
(1, 'AM_Slides_for_HIPS_Presentation-_Final.ppt', 'HIPPS presentation', 'This is a medication program for  Uganda - Kenya', 'Kenya', 'HIPPS Government program ', '2015-08-04', 'no', 'false', 1, 'Micheal');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `studentID`, `name`, `institute`, `completion`, `graduation`, `verified`, `created`) VALUES
(1, '1', 'Masters (MBA)', 'Makerere University', '2015-08-19', '2015-08-19', 'false', '2016-03-12 00:00:00');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `image`, `fname`, `lname`, `other`, `email`, `gender`, `dob`, `country`, `password`, `contact`, `cohort`, `submitted`, `status`) VALUES
(1, '24.jpg', 'Shamim', 'Namuyanjas', 'Musis', 'weredouglas@accessmobileinc.com', 'female', '2015-07-26', 'Uganda', 'AOgbi5xSHjgr5q1P2QhjALwDSPGYt9Cg7LwWLetszFkwpc9Q6w55eCgSDnMmbu5d1wbGVcrKgVkaKlqX1Cg03w==', '0414237890', 'cohort ii 2001', '2015-07-24', 'active'),
(2, 'DSC_6320.JPG', 'Richard', 'Omondi', 'Chancellor', 'richard@cred.org', 'male', '2015-07-26', 'Uganda', 'diYuaIre3iv78PsE8hhys6mo3Au0ZY4WuL+5Lkf2dZ7amvoxRtasgTkod8qc08W8QEzB2qi5E1R2mEzB9QqYVA==', '0782481746', 'cohort ii 2001', '2015-07-24', 'active'),
(3, '241.jpg', 'Richard', 'Barungis', 'Moses', 'richard@epitrack.com', 'male', '2015-08-11', 'Kenya', '11OxvFj0x9cH/NKyf7Z2WFJjAKDryZipsJCdkrT9cmbM1uBhKmLMKefefw+qreeWeC3SU3oZ8lhxPh45uuRk2g==', ' 2547890123', 'Cohort i 1997', '2015-08-13', 'false'),
(4, '21.jpg', 'Andrew', 'Muleesi', 'Mayanja', 'info@aws.com', 'male', '2015-08-17', 'Uganda', 'oYfzp5HJ8zICM349+GqR4wM66l9Qo98YEdWFykg+sOYAenOcJ8DpahmVFZTUb8SF2dlezvuj7Acr9KxEJ+MoaQ==', '25472045897', 'cohort ii 2001', '2015-08-16', 'false'),
(5, 'bashirimg.jpg', 'Bashir', 'Twesigye', '', 'bashir@credUganda.org', 'male', '1965-03-16', 'Uganda', '7BPMoeOhQFU/dZE+Pr7uZ/smoblY1w/NzHaEW25QIvh5Z1VVRHKveWxWeP1luY9yz9bGm4LJqmf7v/7GRto5uw==', '+256772060272', 'cohort ii 2001', '2016-03-11 09:28:28', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE IF NOT EXISTS `study` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `name` text NOT NULL,
  `onset` date NOT NULL,
  `dissemination` date NOT NULL,
  `findings` text NOT NULL,
  `dos` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `studentID`, `name`, `onset`, `dissemination`, `findings`, `dos`) VALUES
(1, 1, 'Water Reed', '2015-08-04', '2015-08-04', 'How Cholera is spread to a patient again', '2015-08-04'),
(2, 1, 'Whooping Cough', '2015-08-04', '2015-08-04', 'Whooping cough spreading rate in South Africa', '2015-08-04'),
(3, 1, 'River plate', '0000-00-00', '0000-00-00', 'River plate and red eye diseases', '2015-08-04');

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
  `region` date NOT NULL,
  `finding` text NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'Douglas', 'Were', 'weredouglas@gmail.com', 'Uganda', 'p36+hyMjYIDk3GT8BYdlReRrT4rfwsL1O9DpJyN5wvf5r0nbaWNzg3Oa2I6udGVF1iBnxKy1r3VL5bCKhYzytw==', '0782481746', '2016-03-14 00:00:00', 'false', '2', '24.jpg'),
(3, 'Andrew', 'Muleeyi', 'andrew@yahoo.com', 'Kenya', '78y7Wh9SjRw/5CnoNJOSvebllXcTC/2psQOkoY+Mryn0Mzu5VQoz1LO5VUtoqDqLCicbcULaFYmN//QKZGkGew==', '0782481746', '2016-03-10 14:25:55', 'active', '1', NULL),
(4, 'Paul', 'Silivia', 'info@cred.org', 'Uganda', 'Mki3MGiqfyvktmjFw7Qo2CRpWT64z4SO9iATuTYGTWDIyxSNIw7rFFf5r6D0jdYcn7bs/nOLi6PMOBMO4RwBgQ==', '0789231212', '2016-03-14 17:12:32', 'false', '2', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
