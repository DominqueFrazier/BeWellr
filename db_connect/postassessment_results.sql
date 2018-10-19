-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 01:09 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bewellr`
--

-- --------------------------------------------------------

--
-- Table structure for table `postassessment_results`
--

CREATE TABLE `postassessment_results` (
  `user_id` bigint(20) NOT NULL,
  `socialScore` tinyint(4) NOT NULL,
  `vocationalScore` tinyint(4) NOT NULL,
  `emotionalScore` tinyint(4) NOT NULL,
  `physicalScore` tinyint(4) NOT NULL,
  `intellectualScore` tinyint(4) NOT NULL,
  `spiritualScore` tinyint(4) NOT NULL,
  `environmentalScore` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
