-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 10:56 PM
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
-- Table structure for table `quote_table`
--

CREATE TABLE `quote_table` (
  `quoteID` int(11) NOT NULL,
  `quoteText` varchar(1500) NOT NULL,
  `quoteAuthor` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote_table`
--

INSERT INTO `quote_table` (`quoteID`, `quoteText`, `quoteAuthor`) VALUES
(1, '"We all die. The goal isn\'t to live forever. The goal is to create something that will."', '- Chuck Palahniuk'),
(2, '"The first step toward success is taken when you refuse to be a captive of the environment in which you first find yourself."', '- Mark Caine'),
(3, '"Excellence is the gradual result of always striving to do better."', '- Pat Riley'),
(4, '"Don\'t aim at success. The more you aim at it and make it a target, the more you are going to miss it. For success, like happiness, cannot be pursued; it must ensue, and it only does so as the unintended side-effect of one\'s personal dedication to a cause greater than oneself or as the by-product of one\'s surrender to a person other than oneself. Happiness must happen, and the same holds for success: you have to let it happen by not caring about it. I want you to listen to what your conscience commands you to do and go on to carry it out to the best of your knowledge. Then you will live to see that in the long-run—in the long-run, I say!—success will follow you precisely because you had forgotten to think about it."', '- Viktor E. Frankl'),
(5, '"Success is not to be measured by the position someone has reached in life, but the obstacles he has overcome while trying to succeed."', '- Booker T. Washington');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quote_table`
--
ALTER TABLE `quote_table`
  ADD PRIMARY KEY (`quoteID`),
  ADD UNIQUE KEY `Primary Key` (`quoteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quote_table`
--
ALTER TABLE `quote_table`
  MODIFY `quoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
