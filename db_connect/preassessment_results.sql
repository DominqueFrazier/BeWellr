-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2017 at 01:02 PM
-- Server version: 5.5.52-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bewellr`
--

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_results`
--

CREATE TABLE IF NOT EXISTS `preassessment_results` (
  `user_id` bigint(255) NOT NULL,
  `socialScore` tinyint(4) NOT NULL,
  `vocationalScore` tinyint(4) NOT NULL,
  `emotionalScore` tinyint(4) NOT NULL,
  `physicalScore` tinyint(4) NOT NULL,
  `intellectualScore` tinyint(4) NOT NULL,
  `spiritualScore` tinyint(4) NOT NULL,
  `environmentalScore` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
