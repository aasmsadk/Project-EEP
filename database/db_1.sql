-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2022 at 07:59 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET utf8 NOT NULL,
  `password` text NOT NULL,
  `type_user` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `type_user` (`type_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `username`, `password`, `type_user`) VALUES
(54, 'admin', 'admin', 1),
(55, 'f', 'f', 2),
(58, 'aasm       ', 'aasm      ', 2),
(65, 'w', 'w', 2),
(66, 'ali', 'al', 3),
(67, 'wbc', 'www', 3),
(68, 'a', 'a', 1),
(70, 'm', 'm', 2),
(71, 'teachrt', 'teachrt', 3),
(72, 'sl', 'sl', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(11) NOT NULL,
  `admin_pass` varchar(11) NOT NULL,
  `	user_id` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `	user_id` (`	user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `audio_id` int(11) NOT NULL AUTO_INCREMENT,
  `audio_name` text NOT NULL,
  `uinv_id` int(2) NOT NULL,
  `foct_id` int(3) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `level_id` int(2) NOT NULL,
  `term_id` int(2) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL,
  `size` text NOT NULL,
  PRIMARY KEY (`audio_id`),
  KEY `uinv_id` (`uinv_id`),
  KEY `foct_id` (`foct_id`),
  KEY `spe_id` (`spe_id`),
  KEY `subject_id` (`subject_id`),
  KEY `term_id` (`term_id`),
  KEY `level_id` (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`audio_id`, `audio_name`, `uinv_id`, `foct_id`, `spe_id`, `subject_id`, `level_id`, `term_id`, `name`, `date`, `type`, `size`) VALUES
(2, 'Ù‚', 4, 13, 16, 65, 1, 3, '', '2020-11-22', 'audio/mpeg', '741074'),
(3, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 1', 4, 13, 16, 83, 1, 3, '', '2020-11-22', 'audio/x-m4a', '640512'),
(4, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 1', 4, 13, 16, 65, 1, 3, 'WA-Ù¢Ù Ù¡Ù©Ù Ù¦Ù Ù£Ù¡Ù¥Ù Ù£Ù¤Ù¦.m4a', '2007-11-22', 'audio/x-m4a', '129022'),
(5, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 3', 4, 13, 16, 65, 1, 3, 'AUD-20200306-WA0001.mp3', '2007-11-22', 'audio/mpeg', '0.78125'),
(6, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 2', 4, 13, 16, 83, 1, 3, 'AUD-20200107-WA0008.m4a', '2008-11-22', 'audio/x-m4a', '0.94327163696289'),
(7, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 3', 4, 13, 16, 83, 1, 3, 'AUD-20200107-WA0008.m4a', '2008-11-22', 'audio/x-m4a', '0.94327163696289'),
(8, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 5', 4, 13, 16, 83, 1, 3, 'My.m4a', '2020-11-22', 'audio/x-m4a', '0.66522598266602');

-- --------------------------------------------------------

--
-- Table structure for table `foct`
--

CREATE TABLE IF NOT EXISTS `foct` (
  `foct_id` int(2) NOT NULL AUTO_INCREMENT,
  `foct_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `un_fk` int(2) NOT NULL,
  PRIMARY KEY (`foct_id`),
  KEY `un_fk` (`un_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `foct`
--

INSERT INTO `foct` (`foct_id`, `foct_name`, `un_fk`) VALUES
(9, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ù‡Ù†Ø¯Ø³Ø© ÙˆØªÙ‚Ù†ÙŠØ© Ø§Ù„Ù…Ø¹Ù„ÙˆÙ', 2),
(10, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø§Ù†Ø³Ø§Ù†ÙŠØ©', 2),
(11, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø§Ù†Ø³Ø§Ù†ÙŠØ©', 3),
(12, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 4),
(13, 'Ø§Ù„Ø§Ø¹Ù„Ø§Ù…', 4),
(14, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ù‡Ù†Ø¯Ø³Ø© ÙˆØªÙ‚Ù†ÙŠØ© Ø§Ù„Ù…Ø¹Ù„ÙˆÙ', 4),
(15, 'ÙƒÙ„ÙŠØ© Ø§Ù„Ø·Ø¨', 3);

-- --------------------------------------------------------

--
-- Table structure for table `graduation_project`
--

CREATE TABLE IF NOT EXISTS `graduation_project` (
  `gre_id` int(11) NOT NULL AUTO_INCREMENT,
  `ger_name` text NOT NULL,
  `supervisor_name` text NOT NULL COMMENT 'اسم المشرف',
  `date_gra` date NOT NULL COMMENT 'تاريخ المشروع',
  `file_name` text NOT NULL,
  `size` int(11) NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `uinv_id` int(2) NOT NULL,
  `foct_id` int(2) NOT NULL,
  `spe_id` int(11) NOT NULL,
  PRIMARY KEY (`gre_id`),
  KEY `uinv_id` (`uinv_id`),
  KEY `foct_id` (`foct_id`),
  KEY `spe_id` (`spe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='مشروع تخرج' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `graduation_project`
--

INSERT INTO `graduation_project` (`gre_id`, `ger_name`, `supervisor_name`, `date_gra`, `file_name`, `size`, `type`, `date`, `uinv_id`, `foct_id`, `spe_id`) VALUES
(4, ' hg ', 'hghj  ', '2022-09-27', 'Ø§Ù„Ø´Ø¨ÙƒØ§Øª.pdf', 500139, 'application/pdf', '2006-10-22', 4, 12, 14),
(5, '', 'lk', '2022-09-26', 'Ø§Ù„Ø´Ø¨ÙƒØ§Øª.pdf', 500139, 'application/pdf', '2006-10-22', 4, 12, 15),
(6, 'sdd', 'ss', '2019-02-15', 'Ø³ÙŠØ³ÙƒÙˆ.PDF', 1750294, 'application/pdf', '2006-10-22', 3, 11, 13);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `level_id` int(2) NOT NULL AUTO_INCREMENT,
  `level_name` text NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
(1, 'level 1'),
(2, 'level 2'),
(3, 'level 3'),
(4, 'level 4'),
(5, 'level 5');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
  `ref_id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_name` text NOT NULL,
  `file_name` text NOT NULL,
  `size` int(11) NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `uinv_id` int(2) NOT NULL,
  `foct_id` int(2) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `level_id` int(2) NOT NULL,
  `term_id` int(4) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`ref_id`),
  KEY `uinv_id` (`uinv_id`),
  KEY `foct_id` (`foct_id`),
  KEY `spe_id` (`spe_id`),
  KEY `term_id` (`term_id`),
  KEY `subject_id` (`subject_id`),
  KEY `level_id` (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='المراجع' AUTO_INCREMENT=19 ;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`ref_id`, `ref_name`, `file_name`, `size`, `type`, `date`, `uinv_id`, `foct_id`, `spe_id`, `level_id`, `term_id`, `subject_id`) VALUES
(13, 'Ù„ØºØ©Ø¹Ø±Ø¨ÙŠØ©   ', 'Ø§Ø³Ø¨Ø§Ø¨ Ø¨Ø·Ø¡ Ø§Ù„Ø¬Ù‡Ø§Ø².pdf', 102081, 'application/pdf', '2010-11-22', 3, 11, 13, 1, 4, 81),
(14, 'Ù„ØºØ©Ø¹Ø±Ø¨ÙŠØ© 102', 'temp.docx', 131457, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2020-11-22', 4, 13, 16, 1, 3, 83),
(15, 'Ù„ØºØ©Ø¹Ø±Ø¨ÙŠØ© 101', 'resource_histogram M.xlsx', 9018, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', '2020-11-22', 4, 13, 16, 1, 3, 83),
(16, 'Ù„ØºØ©Ø¹Ø±Ø¨ÙŠØ© 101', 'resource_histogram M.xlsx', 9018, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', '2020-11-22', 4, 13, 16, 1, 3, 83),
(17, 'hr', 'Ø§Ù„Ø¹Ù„Ø§Ù‚Ø§Øª Ø§Ù„Ø¹Ø§Ù…Ø©.pptx', 247281, 'application/vnd.openxmlformats-officedocument.presentationml.presentation', '2020-11-22', 4, 13, 16, 1, 3, 89),
(18, 'd', 't.txt', 4922, 'text/plain', '2020-11-22', 4, 13, 16, 1, 3, 76);

-- --------------------------------------------------------

--
-- Table structure for table `sepcialist_and_subject`
--

CREATE TABLE IF NOT EXISTS `sepcialist_and_subject` (
  `spe_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  KEY `spe_id` (`spe_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE IF NOT EXISTS `specialist` (
  `spe_id` int(11) NOT NULL AUTO_INCREMENT,
  `spe_name` text NOT NULL,
  `foct_id` int(2) NOT NULL,
  `uinv_id` int(2) NOT NULL,
  PRIMARY KEY (`spe_id`),
  KEY `foct_id` (`foct_id`),
  KEY `uinv_id` (`uinv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`spe_id`, `spe_name`, `foct_id`, `uinv_id`) VALUES
(11, 'ØªÙ‚Ù†ÙŠØ© Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª', 9, 2),
(12, 'Ø´Ø¨ÙƒØ§Øª', 9, 2),
(13, 'Ù…Ø­Ø§Ø³Ø¨Ø©', 11, 3),
(14, 'Ù…Ø®ØªØ¨Ø±Ø§Øª', 12, 4),
(15, 'ØªÙ…Ø±ÙŠØ¶', 12, 4),
(16, 'Ø§Ù„Ø¹Ù„Ø§Ù‚Ø§Øª Ø§Ù„Ø¹Ø§Ù…Ø©', 13, 4),
(17, 'ØµÙŠØ¯Ù„Ø©', 12, 4),
(18, 'ØµÙŠØ¯Ù„Ø©', 15, 3),
(19, 'ØªÙ‚Ù†ÙŠØ© Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª', 14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `specialist_and_level`
--

CREATE TABLE IF NOT EXISTS `specialist_and_level` (
  `level_id` int(2) NOT NULL,
  `spe_id` int(11) NOT NULL,
  KEY `laval_id` (`level_id`),
  KEY `spe_id` (`spe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialist_and_level`
--

INSERT INTO `specialist_and_level` (`level_id`, `spe_id`) VALUES
(1, 16),
(2, 16),
(3, 16),
(4, 16),
(1, 17),
(2, 17),
(3, 17),
(4, 17),
(5, 17),
(1, 19),
(2, 19),
(3, 19),
(4, 19);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` text CHARACTER SET utf8 NOT NULL,
  `addres` text CHARACTER SET utf8 NOT NULL,
  `phone` int(11) NOT NULL,
  `emal` text CHARACTER SET utf8 NOT NULL,
  `uinv_id` int(3) NOT NULL,
  `foct_id` int(2) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `unv_no_student` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `user_id` (`user_id`),
  KEY `foct_id` (`foct_id`),
  KEY `spe_id` (`spe_id`),
  KEY `uinv_id` (`uinv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `addres`, `phone`, `emal`, `uinv_id`, `foct_id`, `spe_id`, `unv_no_student`, `user_id`) VALUES
(21, 'Ø¹Ø§ØµÙ… ØµØ§Ø¯Ù‚ Ø§Ø­Ù…Ø¯', 'ØªØ¹Ø²', 3456455, 'ahmedalameri@gmail.com ', 4, 14, 19, 45452, 58),
(29, 'Ø³Ø¹ÙŠØ¯', 'Ø¨', 545, 'ahmedalameri@gmail.com', 4, 12, 17, 256, 65),
(30, 'Ù…Ø­Ù…Ø¯ Ø¹Ù„ÙŠ Ø§Ø­Ù…Ø¯', 'Ø¹Ø¯Ù†', 778455878, 'dsdhmgfsri@gmail.com    ', 4, 13, 16, 2, 70),
(31, 'ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† Ø§Ù„Ù†Ø§ØµØ±', 'ØªØ¹Ø²', 77754677, 'asdad12@gmail.com', 4, 12, 15, 2323434, 72);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(50) NOT NULL,
  `type_subject` text NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=194 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `SubjectName`, `type_subject`) VALUES
(50, 'Ù…Ù‡Ø§Ø±Ø§Øª Ø­Ø§Ø³ÙˆØ¨', 'نظري'),
(57, 'c++', 'نظري'),
(58, 'c#', 'نظري'),
(60, 'Ø§Ø¯Ø§Ø±Ø© Ø´Ø¨ÙƒØ§Øª', 'نظري'),
(61, 'Ø§Ù†ØªØ±Ù†Øª Ø§Ù„Ø§Ø´ÙŠØ§Ø¡', 'نظري'),
(62, 'Ø­ÙˆØ³Ø¨Ø© Ù…ØªÙ†Ù‚Ù„Ø©', 'نظري'),
(63, 'Ø¨Ø§ÙŠØ«ÙˆÙ†', 'نظري'),
(64, 'Ù„ØºØ© Ø¹Ø±Ø¨ÙŠØ© 101', 'نظري'),
(65, 'Ù„ØºØ© Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© 101', 'نظري'),
(66, 'Ù‡Ù†Ø¯Ø³Ø© Ø¨Ø±Ù…Ø¬ÙŠØ§Øª', 'نظري'),
(67, 'ÙˆØ³Ø§Ø¦Ø· Ù…ØªØ¹Ø¯Ø¯Ø©', 'نظري'),
(68, 'Ø§Ø®Ù„Ø§Ù‚ÙŠØ§Øª Ø­Ø§Ø³ÙˆØ¨', 'نظري'),
(69, 'Ù…Ø¨Ø§Ø¯Ø¦ Ù‚ÙˆØ§Ø¹Ø¯ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª', 'نظري'),
(70, 'Ø­ÙˆØ³Ø© Ø³Ø­Ø§Ø¨ÙŠØ©', 'نظري'),
(71, 'tcp/ip', 'نظري'),
(72, 'Ø§Ù…Ù†ÙŠØ© Ø¨ÙŠØ§Ù†Ø§Øª', 'نظري'),
(73, 'Ø§ÙˆØ±Ø§ÙƒÙ„', 'نظري'),
(74, 'ØªÙ…ÙŠØ² Ø§Ù†Ù…Ø§Ø·', 'نظري'),
(75, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª 101', 'نظري'),
(76, 'Ù…Ù‚Ø¯Ù…Ø© Ø­Ø§Ø³ÙˆØ¨', 'نظري'),
(77, 'Ù…Ø¹Ù…Ø§Ø±ÙŠØ© Ø­Ø§Ø³ÙˆØ¨', 'نظري'),
(78, 'Ù…Ø¹Ø§Ø¬Ø© ØµÙˆØ±', 'نظري'),
(79, 'ØªØµÙˆÙŠØ± ÙÙˆØªÙˆØºØ±Ø§ÙÙŠ', 'نظري'),
(80, 'Ù†Ø¸Ù… ØªØ´ØºÙŠÙ„', 'نظري'),
(81, 'Ù„ØºØ© Ø§Ù†Ø¬Ù„ÙŠØ²ÙŠØ© 102', 'نظري'),
(83, 'Ù„ØºØ© Ø¹Ø±Ø¨ÙŠØ© 102', 'نظري'),
(84, 'Ù‡ÙŠØ§ÙƒÙ„ Ø¨ÙŠØ§Ù†Ø§Øª', 'نظري'),
(85, 'Ø¬Ø§ÙØ§', 'نظري'),
(86, 'C++/oop', 'نظري'),
(87, 'Ø§Ù‚ØªØµØ§Ø¯ Ø¬Ø²Ø¦ÙŠ', 'نظري'),
(88, 'Ø§Ù‚ØªØµØ§Ø¯ ÙƒÙ„ÙŠ', '24'),
(89, 'Ù…Ø¨Ø§Ø¯Ø¦ Ø§Ø¯Ø§Ø±Ø© Ø§Ø¹Ù…Ø§Ù„', '24'),
(90, 'Ù…Ø­Ø§Ø³Ø¨Ø© Ù…Ø§Ù„ÙŠØ©  (Ø£)', '24'),
(91, 'Ù…Ø¨Ø§Ø¯Ø¦ ØªØ³ÙˆÙŠÙ‚', '24'),
(92, 'Ù…Ø­Ø§Ø³Ø¨Ø© Ù…Ø§Ù„ÙŠØ© (Ø¨)', '24'),
(93, 'Ø§Ø¯Ø§Ø±Ø© Ù…Ø¨ÙŠØ¹Ø§Øª', '24'),
(94, 'Ø§Ø¯Ø§Ø±Ø© Ù…Ø´ØªØ±ÙŠØ§Øª', '24'),
(95, 'Ø§Ø¯Ø§Ø±Ø© Ø§Ù„Ø®Ø·Ø± ÙˆØ§Ù„ØªØ§Ù…ÙŠÙ†', '24'),
(96, 'Ø§Ø¯Ø§Ø±Ø© Ù…Ø§Ù„ÙŠØ©', '24'),
(97, 'Ø§Ø¯Ø§Ø±Ø© Ø¹Ø§Ù…Ø©', '24'),
(98, 'Ø§Ø¯Ø§Ø±Ø© Ù†Ø¸Ù… Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø§Ø¯Ø§Ø±ÙŠØ©', '24'),
(99, 'Ù†Ø¸Ø±ÙŠØ§Øª Ù…Ù†Ø¸Ù…Ø©', '24'),
(100, 'Ø§Ø¯Ø§Ø±Ø© Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©', '24'),
(101, 'Ø´Ø±ÙƒØ§Øª Ø§Ù…ÙˆØ§Ù„', '24'),
(102, 'Ù…Ø­Ø§Ø³Ø¨Ø© Ù†ÙØ·ÙŠØ©', '24'),
(103, 'Ø§Ø¯Ø§Ø±Ø© Ø§Ù„Ø¶ÙŠØ§ÙØ©', '24'),
(104, 'Ù…Ø­Ø§Ø³Ø¨Ø© ØªÙƒØ§Ù„ÙŠÙ', '24'),
(105, 'Ø§Ø¯Ø§Ø±Ø© Ø¯ÙˆÙ„ÙŠØ©', '24'),
(106, 'ØªØ­Ù„ÙŠÙ„ Ù…Ø§Ù„ÙŠ', '24'),
(107, 'Ø¯Ø±Ø§Ø³Ø© Ø¬Ø¯ÙˆÙ‰', '24'),
(108, 'Ø¨Ø­ÙˆØ« Ø¹Ù…Ù„ÙŠØ§Øª', '24'),
(109, 'Ø§Ø¯Ø§Ø±Ø© Ø§Ù†ØªØ§Ø¬', '24'),
(110, 'Ø¹Ù„Ø§Ù‚Ø§Øª Ø¹Ø§Ù…Ø©', '24'),
(111, 'Ø§Ø¯Ø§Ø±Ø© Ø§Ø³ØªØ±Ø§ØªÙŠØ¬ÙŠØ©', '24'),
(112, 'Ø§Ø¯Ø§Ø±Ø© Ù…Ø´Ø§Ø±ÙŠØ¹', '24'),
(113, 'Ø§ØµÙˆÙ„ Ø¨Ø­Ø« Ø¹Ù„Ù…ÙŠ', '24'),
(114, 'Ø§Ø¯Ø§Ø±Ø© Ù…Ø¹Ø±ÙØ©', '24'),
(115, 'Ø§Ø¯Ø§Ø±Ø© Ø§Ù„Ø¬ÙˆØ¯Ù‡ Ø§Ù„Ø´Ø§Ù…Ù„Ø©', '24'),
(116, 'Ø§Ø¯Ø§Ø±Ø© ØµØ­ÙŠØ©', '24'),
(117, 'Ù…Ù‡Ø§Ø±Ø§Øª Ø§ØªØµØ§Ù„', '24'),
(118, 'ØµØ­Ø© Ø§Ù†Ø¬Ø§Ø¨ÙŠØ©', '24'),
(119, 'Ø§Ù…Ø±Ø§Ø¶ Ù„Ø«Ø©', '24'),
(120, 'Ø§Ø­ØµØ§Ø¡ ÙˆØ§Ø­ØªÙ…Ø§Ù„Ø§Øª', '24'),
(121, 'Ù…Ù†Ø´Ø¦Ø§Øª Ù…ØªØ®ØµØµØ©', '24'),
(122, 'Ø­ÙˆÙƒØ© Ø§Ù„Ø´Ø±ÙƒØ§Øª', '24'),
(123, 'Ù…Ø­Ø§Ø³Ø¨Ø© Ø§Ø¯Ø§Ø±ÙŠØ©', '24'),
(124, 'Ø§Ù…Ø±Ø§Ø¶ Ø³Ø§Ø±ÙŠØ©', '24'),
(125, 'ØªØ´Ø±ÙŠØ­', '24'),
(126, 'Ø¹Ù„Ù… Ø§Ø¯ÙˆÙŠØ©', '24'),
(127, 'Ø§Ø·Ù‚Ù… Ø¬Ø²Ø¦ÙŠØ©', '24'),
(128, 'Ø§Ù…Ø±Ø§Ø¶ Ø¨Ø§Ø·Ù†ÙŠØ©', '24'),
(129, 'Ø§Ù…Ø±Ø§Ø¶ Ø§Ø·ÙØ§Ù„', '24'),
(130, 'Ø§Ù…Ø±Ø§Ø¶ Ø¬Ø±Ø§Ø­ÙŠØ©', '24'),
(131, 'Ø§Ø­ÙŠØ§Ø¡ Ø¯Ù‚ÙŠÙ‚Ø©', '24'),
(132, 'ÙƒÙŠÙ…ÙŠØ§Ø¡ Ø­ÙŠÙˆÙŠØ©', '24'),
(133, 'Ù…ØµØ·Ù„Ø­Ø§Øª Ø·Ø¨ÙŠØ©', '24'),
(134, 'ÙÙŠØ²ÙŠØ§Ø¡ Ø­ÙŠÙˆÙŠØ©', '24'),
(135, 'ÙƒÙŠÙ…ÙŠØ§Ø¡ ØªØ­Ù„ÙŠÙ„ÙŠØ©', '24'),
(136, 'Ø¬Ø±Ø§Ø­Ø© Ø¹Ø§Ù…Ø©', '24'),
(137, 'Ø§Ø³Ø¹Ø§ÙØ§Øª Ø§ÙˆÙ„ÙŠØ©', '24'),
(138, 'Ø¹Ù„Ù… Ù†Ø¨Ø§Øª', '24'),
(139, 'Ø¹Ù„Ù… Ø³Ù…ÙˆÙ…', '24'),
(140, 'ØªØ®Ø¯ÙŠØ± Ø¹Ø§Ù…', '24'),
(141, 'Ø§Ø´Ø¹Ø© Ø³ÙŠÙ†ÙŠØ©', '24'),
(142, 'Ù†Ø³Ø§Ø¡ ÙˆÙˆÙ„Ø§Ø¯Ø©', '24'),
(143, 'Ù…Ø¹Ø¯Ø§Øª Ø·Ø¨ÙŠØ©', '24'),
(144, 'Ù‚Ø±Ø§Ù† ÙƒØ±ÙŠÙ…', '24'),
(145, 'Ø¹Ù„ÙˆÙ… Ø³ÙŠØ§Ø³ÙŠØ©', '24'),
(146, 'Ø¹Ù„Ù… Ù†ÙØ³', '24'),
(147, 'Ø¹Ù„Ù… Ø§Ø¬ØªÙ…Ø§Ø¹', '24'),
(148, 'Ø«Ù‚Ø§ÙØ© Ø§Ø³Ù„Ø§Ù…ÙŠØ©', '24'),
(149, 'Ù‚Ø§Ù†ÙˆÙ† Ù…Ø¯Ù†ÙŠ', '24'),
(150, 'Ù‚Ø§Ù†ÙˆÙ† ØªØ¬Ø§Ø±ÙŠ', '24'),
(151, 'Ù‚Ø§Ù†ÙˆÙ† Ø¹Ø³ÙƒØ±ÙŠ', '24'),
(152, 'Ù‚Ø§Ù†ÙˆÙ† Ø¹Ø§Ù…', '24'),
(153, 'Ø§Ù…Ø±Ø§Ø¶ Ù†ÙØ³ÙŠØ©', '24'),
(154, 'Ø¨ÙƒØªÙŠØ±ÙŠØ§Ø¡', '24'),
(155, 'Ø±Ø¹Ø§ÙŠØ© Ø§Ù„Ø§Ù… Ø§Ù„Ø­Ø§Ù…Ù„', '24'),
(156, 'ØªØµÙ…ÙŠÙ… Ù…Ù†Ø·Ù‚ÙŠ', '24'),
(157, 'Ù†Ø¸Ù… Ù…Ø¹Ù„ÙˆÙ…Ø§Øª', '24'),
(158, 'ØªØµÙ…ÙŠÙ… ÙˆØªØ­Ù„ÙŠÙ„ Ù†Ø¸Ù…', '24'),
(159, 'Ø§Ø³Ø§Ø³ÙŠØ§Øª ØªØ­Ù„ÙŠÙ„ Ù†Ø¸Ù…', '24'),
(160, 'Ø§Ø¯Ø§Ø±Ø© Ù‚ÙˆØ§Ø¹Ø¯ Ø¨ÙŠØ§Ù†Ø§Øª', '24'),
(161, 'ØªØ·ÙˆÙŠØ± ÙˆÙŠØ¨', '24'),
(162, 'ÙˆÙŠØ¨ Ù…ØªÙ‚Ø¯Ù…', '24'),
(164, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª Ø¨Ø­ØªØ©', '20'),
(165, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª Ù…ØªÙ‚Ø·Ø¹Ø©', '24'),
(166, 'Ø±ÙŠØ§Ø¶ÙŠØ§Øª 102', '0'),
(167, 'ØªØ±Ø§Ø³Ù„ Ø¨ÙŠØ§Ù†Ø§Øª', '24'),
(168, 'ØªÙ†Ù‚ÙŠØ¨ Ø¨ÙŠØ§Ù†Ø§Øª', '24'),
(169, 'Ù…Ø´Ø±ÙˆØ¹ ØªØ®Ø±Ø¬ 1', '24'),
(170, 'Ù…Ø´Ø±ÙˆØ¹ ØªØ®Ø±Ø¬ 2', '24'),
(171, 'ØªØ¬Ø§Ø±Ø© Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©', '24'),
(172, 'Ø¯ÙˆØ§Ø¦Ø± ÙƒÙ‡Ø±Ø¨Ø§Ø¦ÙŠØ©', '24'),
(173, 'Ù…Ø¨Ø§Ø¯Ø¦ ØªØµÙ…ÙŠÙ… Ø¬Ø±Ø§ÙÙƒÙŠ1', '24'),
(174, 'ØªØ§Ø±ÙŠØ® Ø§Ù„ÙÙ†', '24'),
(175, 'Ø§Ù„Ø±Ø³Ù… Ø§Ù„Ø­Ø±', '24'),
(176, 'Ø§Ù„ØµÙˆØ± Ø§Ù„Ø±Ù‚Ù…ÙŠØ©', '24'),
(177, 'Ø¨Ø±Ù…Ø¬Ø© Ø¨ÙŠØ³Ùƒ 1', '24'),
(178, 'Ø§Ù„ØªÙˆØ¬Ø© ÙÙŠ Ø§Ù„Ø´Ø¨ÙƒØ§Øª', '24'),
(179, 'Ø§ØªØµØ§Ù„Ø§Øª Ø§Ù„Ø±Ø§Ø¯Ø§Ø±', '24'),
(180, 'Ù†Ø¸Ù… Ù…ÙˆØ²Ø¹Ø©', '24'),
(181, 'Ø§Ù„Ø§ØªØµØ§Ù„Ø§Øª Ø§Ù„Ø¶ÙˆØ¦ÙŠØ©', '24'),
(182, 'ÙÙ† Ø§Ù„Ø²Ø®Ø±ÙØ©', '24'),
(183, 'XD', '24'),
(184, 'Ù‡Ù†Ø¯Ø³Ø© Ø§Ù„Ù…ÙˆØ¬Ø§Øª', '24'),
(185, 'Ù…Ø¹Ø§Ù„Ø¬Ø© Ø§Ø´Ø§Ø±Ø©', '24'),
(186, 'Ø§ØªØµØ§Ù„Ø§Øª Ø±Ù‚Ù…ÙŠØ©', '24'),
(187, '3D MAX', '24'),
(188, 'Ø³ÙŠÙƒÙˆÙ„ÙˆØ¬ÙŠØ§ Ø§Ù„ØªØµÙ…ÙŠÙ…', '24'),
(189, 'Ø§Ù„ÙÙŠØ¯ÙŠÙˆ Ø§Ù„Ø±Ù‚Ù…ÙŠ', '24'),
(190, 'Ù‡ÙˆÙŠØ© Ø¨ØµØ±ÙŠÙ‡', '24'),
(191, 'Ø§Ù„Ø±Ø³Ù… Ø§Ù„Ù…Ù†Ø¸ÙˆØ±', '24'),
(192, 'Ø§Ù„ØµÙˆØª Ø§Ù„Ø±Ù‚Ù…ÙŠ', '24'),
(193, 'Ø°ÙƒØ§Ø¡ Ø§ØµØ·Ù†Ø§Ø¹ÙŠ', '24');

-- --------------------------------------------------------

--
-- Table structure for table `subject_distroibution`
--

CREATE TABLE IF NOT EXISTS `subject_distroibution` (
  `uinv_id` int(2) NOT NULL,
  `foct_id` int(2) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `level_id` int(2) NOT NULL,
  `term_id` int(4) NOT NULL,
  `subject_id` int(11) NOT NULL,
  KEY `term_id` (`term_id`),
  KEY `spe_id` (`spe_id`),
  KEY `uinv_id` (`uinv_id`),
  KEY `level_id` (`level_id`),
  KEY `foct_id` (`foct_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='توزيع المواد على التخصصات';

--
-- Dumping data for table `subject_distroibution`
--

INSERT INTO `subject_distroibution` (`uinv_id`, `foct_id`, `spe_id`, `level_id`, `term_id`, `subject_id`) VALUES
(2, 9, 11, 1, 3, 58),
(2, 9, 12, 1, 3, 71),
(4, 13, 16, 1, 3, 83),
(3, 11, 13, 1, 4, 81),
(4, 13, 16, 1, 3, 65),
(4, 13, 16, 1, 4, 81),
(4, 13, 16, 1, 3, 76),
(4, 12, 14, 1, 3, 117),
(2, 9, 11, 1, 4, 86),
(4, 13, 16, 1, 3, 89),
(4, 12, 14, 2, 5, 134),
(4, 12, 15, 2, 5, 135),
(4, 12, 15, 4, 9, 116),
(2, 9, 11, 2, 6, 57),
(4, 12, 17, 1, 3, 65),
(4, 12, 17, 1, 3, 50),
(4, 12, 17, 1, 4, 135),
(4, 12, 17, 2, 5, 132),
(4, 12, 17, 1, 3, 64),
(4, 12, 17, 1, 4, 83),
(4, 12, 17, 1, 3, 133),
(4, 12, 17, 1, 4, 126),
(4, 12, 17, 2, 5, 139),
(4, 12, 17, 4, 9, 138),
(4, 12, 17, 5, 11, 155),
(4, 12, 17, 5, 12, 147),
(4, 13, 16, 2, 5, 151),
(4, 14, 19, 1, 3, 50),
(4, 14, 19, 1, 3, 64),
(4, 14, 19, 1, 3, 76),
(4, 14, 19, 1, 3, 148),
(4, 14, 19, 1, 3, 65),
(4, 14, 19, 1, 4, 83),
(4, 14, 19, 1, 4, 117),
(4, 14, 19, 1, 4, 57),
(4, 14, 19, 1, 4, 166),
(4, 14, 19, 1, 4, 156),
(4, 14, 19, 1, 4, 81),
(4, 14, 19, 1, 3, 75),
(4, 14, 19, 2, 5, 69),
(4, 14, 19, 2, 5, 165),
(4, 14, 19, 2, 5, 175),
(4, 14, 19, 2, 5, 77),
(4, 14, 19, 2, 5, 120),
(4, 14, 19, 2, 5, 58),
(4, 14, 19, 2, 6, 159),
(4, 14, 19, 2, 6, 161),
(4, 14, 19, 2, 6, 160),
(4, 14, 19, 2, 6, 67),
(4, 14, 19, 2, 6, 84),
(4, 14, 19, 2, 6, 171),
(4, 14, 19, 3, 7, 162),
(4, 14, 19, 3, 7, 167),
(4, 14, 19, 3, 7, 80),
(4, 14, 19, 3, 7, 58),
(4, 14, 19, 3, 7, 66),
(4, 14, 19, 3, 8, 113),
(4, 14, 19, 3, 8, 88),
(4, 14, 19, 3, 8, 112),
(4, 14, 19, 3, 8, 193),
(4, 14, 19, 4, 9, 78),
(4, 14, 19, 4, 9, 180),
(4, 14, 19, 4, 9, 70),
(4, 14, 19, 4, 9, 85),
(4, 14, 19, 4, 9, 169),
(4, 14, 19, 4, 10, 168),
(4, 14, 19, 4, 10, 161),
(4, 14, 19, 4, 10, 170),
(4, 12, 17, 1, 3, 65),
(4, 12, 17, 1, 3, 64),
(4, 12, 17, 1, 3, 135),
(4, 12, 17, 1, 3, 133),
(4, 12, 17, 1, 4, 132),
(4, 12, 17, 1, 4, 50),
(4, 12, 17, 1, 4, 83),
(4, 12, 17, 1, 4, 81),
(4, 12, 17, 1, 4, 153),
(4, 12, 17, 1, 4, 125),
(4, 12, 17, 2, 5, 130),
(4, 12, 17, 2, 5, 124),
(4, 12, 17, 2, 6, 131),
(4, 12, 17, 2, 6, 120),
(4, 12, 17, 3, 7, 136),
(4, 12, 17, 3, 7, 147),
(4, 12, 17, 3, 7, 146),
(4, 12, 17, 1, 3, 126),
(4, 12, 17, 3, 8, 139),
(4, 12, 17, 4, 9, 118),
(4, 12, 17, 5, 11, 140),
(4, 12, 17, 5, 12, 155),
(4, 12, 17, 5, 11, 116);

-- --------------------------------------------------------

--
-- Table structure for table `summaries`
--

CREATE TABLE IF NOT EXISTS `summaries` (
  `sum_id` int(11) NOT NULL AUTO_INCREMENT,
  `sum_name` text NOT NULL,
  `student_name` text NOT NULL,
  `teacher_name` text NOT NULL,
  `file_name` text NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL,
  `size` int(11) NOT NULL,
  `uinv_id` int(2) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `level_id` int(2) NOT NULL,
  `term_id` int(4) NOT NULL,
  `foct_id` int(2) NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`sum_id`),
  KEY `uinv_id` (`uinv_id`),
  KEY `spe_id` (`spe_id`),
  KEY `level_id` (`level_id`),
  KEY `term_id` (`term_id`),
  KEY `foct_id` (`foct_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='جدول الملخصات' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `summaries`
--

INSERT INTO `summaries` (`sum_id`, `sum_name`, `student_name`, `teacher_name`, `file_name`, `date`, `type`, `size`, `uinv_id`, `spe_id`, `level_id`, `term_id`, `foct_id`, `subject_id`) VALUES
(5, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 1', 'Ø¹Ø§ØµÙ… ØµØ§Ø¯Ù‚ Ø§Ø­Ù…Ø¯      ', 'Ø§Ø­Ù…Ø¯ Ø³Ø¹Ø¯    ', 'd.pdf', '2020-11-22', 'application/pdf', 443404, 4, 16, 1, 3, 13, 83),
(6, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 5', 'Ø³Ø¹ÙŠØ¯', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 'Ø¨Ø­Ø« Ø§Ù„Ø­ÙˆØ³Ø¨Ø©.pdf', '2020-11-22', 'application/pdf', 772768, 4, 16, 1, 3, 13, 83);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `tea_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`tea_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tea_id`, `t_name`, `user_id`) VALUES
(1, 'ali ahmed', 66),
(2, 'Ø¹Ø¨Ø¯Ø§Ù„Ø±Ø­Ù…Ù† Ø§Ø­Ù…Ø¯ Ø¹Ù„ÙŠ', 71);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE IF NOT EXISTS `term` (
  `term_id` int(3) NOT NULL AUTO_INCREMENT,
  `term_name` text NOT NULL,
  `laval_id` int(2) NOT NULL,
  PRIMARY KEY (`term_id`),
  KEY `laval_id` (`laval_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `term_name`, `laval_id`) VALUES
(3, 'term 1', 1),
(4, 'term 2', 1),
(5, 'term 3', 2),
(6, 'term 4', 2),
(7, 'term 5', 3),
(8, 'term 6', 3),
(9, 'term 7', 4),
(10, 'term 8', 4),
(11, 'term 9', 5),
(12, 'term 10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `type_user`
--

CREATE TABLE IF NOT EXISTS `type_user` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` text NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type_user`
--

INSERT INTO `type_user` (`type_id`, `type_name`) VALUES
(1, 'admin'),
(2, 'student'),
(3, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `uinv`
--

CREATE TABLE IF NOT EXISTS `uinv` (
  `uinv_id` int(2) NOT NULL AUTO_INCREMENT,
  `uinv_name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`uinv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uinv`
--

INSERT INTO `uinv` (`uinv_id`, `uinv_name`) VALUES
(2, 'Ø§Ù„Ø¬Ù†Ø¯'),
(3, 'Ø§Ù„Ø­ÙƒÙ…Ø© '),
(4, 'Ø§Ù„Ø¹Ø·Ø§Ø¡');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `vid_id` int(11) NOT NULL AUTO_INCREMENT,
  `vid_name` text CHARACTER SET latin1 NOT NULL,
  `uinv_id` int(2) NOT NULL,
  `foct_id` int(3) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `level_id` int(2) NOT NULL,
  `term_id` int(2) NOT NULL,
  `name` text CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `type` text CHARACTER SET latin1 NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`vid_id`),
  KEY `uinv_id` (`uinv_id`),
  KEY `foct_id` (`foct_id`),
  KEY `spe_id` (`spe_id`),
  KEY `subject_id` (`subject_id`),
  KEY `level_id` (`level_id`),
  KEY `term_id` (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid_id`, `vid_name`, `uinv_id`, `foct_id`, `spe_id`, `subject_id`, `level_id`, `term_id`, `name`, `date`, `type`, `size`) VALUES
(12, 'g', 4, 13, 16, 83, 1, 3, '', '2020-11-22', 'video/mp4', 1757435),
(24, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 4', 4, 13, 16, 65, 1, 3, '', '2020-11-22', 'video/mp4', 1008817),
(25, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 6', 4, 13, 16, 83, 1, 3, 'VID-20210113-WA0003.mp4', '2020-11-22', 'video/mp4', 159308);

-- --------------------------------------------------------

--
-- Table structure for table `year_study`
--

CREATE TABLE IF NOT EXISTS `year_study` (
  `year_d` int(11) NOT NULL AUTO_INCREMENT,
  `year_name` text NOT NULL,
  `date_start_year` date NOT NULL,
  PRIMARY KEY (`year_d`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `you_id` int(11) NOT NULL AUTO_INCREMENT,
  `you_name` text NOT NULL,
  `uinv_id` int(2) NOT NULL,
  `foct_id` int(3) NOT NULL,
  `spe_id` int(11) NOT NULL,
  `level_id` int(2) NOT NULL,
  `term_id` int(2) NOT NULL,
  `date` date NOT NULL,
  `url` text NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`you_id`),
  KEY `uinv_id` (`uinv_id`),
  KEY `foct_id` (`foct_id`),
  KEY `spe_id` (`spe_id`),
  KEY `level_id` (`level_id`),
  KEY `term_id` (`term_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`you_id`, `you_name`, `uinv_id`, `foct_id`, `spe_id`, `level_id`, `term_id`, `date`, `url`, `subject_id`) VALUES
(2, 'Ø§Ù„Ù…Ø­Ø§Ø¶Ø±Ø© 1', 4, 13, 16, 1, 3, '2019-11-22', 'https://www.youtube.com/embed/Wn3bVMLYHhs', 83);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`type_user`) REFERENCES `type_user` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`	user_id`) REFERENCES `account` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `audio_ibfk_2` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `audio_ibfk_3` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `audio_ibfk_4` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `audio_ibfk_5` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `audio_ibfk_6` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foct`
--
ALTER TABLE `foct`
  ADD CONSTRAINT `foct_ibfk_1` FOREIGN KEY (`un_fk`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `references`
--
ALTER TABLE `references`
  ADD CONSTRAINT `references_ibfk_10` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `references_ibfk_11` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `references_ibfk_12` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `references_ibfk_7` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `references_ibfk_8` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `references_ibfk_9` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sepcialist_and_subject`
--
ALTER TABLE `sepcialist_and_subject`
  ADD CONSTRAINT `sepcialist_and_subject_ibfk_1` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sepcialist_and_subject_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specialist`
--
ALTER TABLE `specialist`
  ADD CONSTRAINT `specialist_ibfk_1` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specialist_ibfk_2` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specialist_and_level`
--
ALTER TABLE `specialist_and_level`
  ADD CONSTRAINT `specialist_and_level_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specialist_and_level_ibfk_2` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_distroibution`
--
ALTER TABLE `subject_distroibution`
  ADD CONSTRAINT `subject_distroibution_ibfk_2` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_distroibution_ibfk_3` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_distroibution_ibfk_5` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_distroibution_ibfk_6` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_distroibution_ibfk_7` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_distroibution_ibfk_8` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `summaries`
--
ALTER TABLE `summaries`
  ADD CONSTRAINT `summaries_ibfk_10` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `summaries_ibfk_11` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `summaries_ibfk_12` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `summaries_ibfk_7` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `summaries_ibfk_8` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `summaries_ibfk_9` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `term`
--
ALTER TABLE `term`
  ADD CONSTRAINT `term_ibfk_1` FOREIGN KEY (`laval_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_2` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_3` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_4` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_5` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_6` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `youtube`
--
ALTER TABLE `youtube`
  ADD CONSTRAINT `youtube_ibfk_1` FOREIGN KEY (`uinv_id`) REFERENCES `uinv` (`uinv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `youtube_ibfk_2` FOREIGN KEY (`foct_id`) REFERENCES `foct` (`foct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `youtube_ibfk_3` FOREIGN KEY (`spe_id`) REFERENCES `specialist` (`spe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `youtube_ibfk_4` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `youtube_ibfk_5` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `youtube_ibfk_6` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
