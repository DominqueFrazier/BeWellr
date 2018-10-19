-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2017 at 12:01 PM
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
-- Table structure for table `unverified_users`
--

CREATE TABLE IF NOT EXISTS `unverified_users` (
`user_id` bigint(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verificationKey` varchar(255) DEFAULT NULL,
  `saltedhash` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `weight` int(50) DEFAULT NULL,
  `height` int(50) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `workstatus` varchar(200) DEFAULT NULL,
  `organization` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `ethnicity` varchar(200) DEFAULT NULL,
  `maritalstatus` varchar(200) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unverified_users`
--
ALTER TABLE `unverified_users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unverified_users`
--
ALTER TABLE `unverified_users`
MODIFY `user_id` bigint(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
