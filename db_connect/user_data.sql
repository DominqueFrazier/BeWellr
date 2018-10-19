-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 07:19 PM
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
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` bigint(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `email`, `saltedhash`, `firstname`, `lastname`, `dob`, `weight`, `height`, `gender`, `workstatus`, `organization`, `occupation`, `ethnicity`, `maritalstatus`, `education`) VALUES
(6, 'patino37@yahoo.com', '$2y$10$PpaAI2I0nZ/tpGPzb3qJA./fIcGJdxTjCfzJ/w72pmiZp4A5Yh5km', 'Jose', 'Patino', '1992-08-08', 270, 72, 'Male', 'Part Time', 'East Carolina University', 'Bartender', 'Hispanic', 'Live with significant other', 'College Graduate'),
(7, 'yahiaseidi@hotmails.com', '$2y$10$akdJpsg7XC.uMak1C5Qbuu08Q95LaV2pdTJD53PnFBAMpwq5ZE.ae', 'Yahia', 'Seidi', '1990-01-01', 150, 60, 'Female', 'Full Time', 'ECU School of Medicine', 'Bank Teller', 'Native American', 'Married', 'Some Highschool');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
