-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2015 at 02:02 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ISLI`
--

-- --------------------------------------------------------

--
-- Table structure for table `isli_staff`
--

CREATE TABLE IF NOT EXISTS `isli_staff` (
  `staff_id` int(20) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `isli_staff`
--

INSERT INTO `isli_staff` (`staff_id`, `staff_name`, `username`, `password`, `email`) VALUES
(1, 'venkat', 'venkat', 'venkat', 'v@gmail.com'),
(2, 'passd', 'root', 'code4good', 'p@dddd.com'),
(3, '', '', '', ''),
(4, 'passddwsd', 'root', 'code4good', 'p@ddsfdsdd.com');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE IF NOT EXISTS `principal` (
  `principal_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `principal_name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  PRIMARY KEY (`principal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`principal_id`, `username`, `password`, `principal_name`, `email_id`) VALUES
(1, 'snake', 'sn', '', ''),
(2, 'root', 'code4good', 'parth', 'p@dddd.com'),
(3, 'root', 'code4good', 'pdd', 'suryaproperties77@gm'),
(4, 'root', 'code4good', 'ddcds', 's');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE IF NOT EXISTS `priority` (
  `id` int(11) NOT NULL,
  `priority_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id`, `priority_name`, `status`, `rank`, `domain`, `score`) VALUES
(566, 'mss', '1', 2, '1', 25),
(78, 'mqw', '0', 4, '2', 10),
(22, 'sms', '1', 3, '1', 22);

-- --------------------------------------------------------

--
-- Table structure for table `school_table`
--

CREATE TABLE IF NOT EXISTS `school_table` (
  `school_name` varchar(50) NOT NULL,
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school_visit`
--

CREATE TABLE IF NOT EXISTS `school_visit` (
  `visit` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `principal_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_visit`
--

INSERT INTO `school_visit` (`visit`, `school_id`, `principal_id`, `category`, `score`) VALUES
(1, 1, 2, 'Teacher Actions', 6),
(2, 2, 3, 'Student Actions', 7),
(3, 5, 6, 'Labs', 3),
(1, 6, 5, 'Environment', 9),
(7, 3, 4, 'Neatness', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
