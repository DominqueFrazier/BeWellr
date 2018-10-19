-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 05:37 PM
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
-- Table structure for table `intervention_results`
--

CREATE TABLE IF NOT EXISTS `intervention_results` (
  `user_id` bigint(255) NOT NULL,
  `date` tinytext,
  `weekNumber` tinyint(4) NOT NULL,
  `dayOfWeekNumber` tinyint(4) NOT NULL,
  `IBScore` tinyint(4) NOT NULL,
  `FSScore` tinyint(4) NOT NULL,
  `PAScore` tinyint(4) NOT NULL,
  `PGScore` tinyint(4) NOT NULL,
  `TotalScore` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intervention_results`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
