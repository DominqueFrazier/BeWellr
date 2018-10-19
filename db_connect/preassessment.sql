-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 08:20 PM
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
-- Table structure for table `preassessment`
--

CREATE TABLE `preassessment` (
  `questionid` int(200) NOT NULL,
  `question` text NOT NULL,
  `YA` int(1) NOT NULL,
  `A` int(1) NOT NULL,
  `OA` int(1) NOT NULL,
  `social` int(1) NOT NULL,
  `vocational` int(1) NOT NULL,
  `emotional` int(1) NOT NULL,
  `physical` int(1) NOT NULL,
  `intellectual` int(1) NOT NULL,
  `spiritual` int(1) NOT NULL,
  `environmental` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preassessment`
--

INSERT INTO `preassessment` (`questionid`, `question`, `YA`, `A`, `OA`, `social`, `vocational`, `emotional`, `physical`, `intellectual`, `spiritual`, `environmental`) VALUES
(1, 'I treat difficult situations as possible opportunities.', 1, 1, 1, 0, 0, 1, 0, 0, 0, 0),
(2, 'My schoolwork prepares me to do important work.', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(3, 'What I do at work is important.', 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
(4, 'I support laws that protect our environment', 1, 1, 1, 0, 0, 0, 0, 0, 0, 1),
(5, 'I make an effort to stay in contact with my family/friends.', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(6, 'I expend moderate amounts of energy when I am physically active', 1, 1, 1, 0, 0, 0, 1, 0, 0, 0),
(7, 'I consult a higher power for answers.', 1, 1, 1, 0, 0, 0, 0, 0, 1, 0),
(8, 'I manage life’s situations well.', 1, 1, 1, 0, 0, 1, 0, 0, 0, 0),
(9, 'I enjoy the schoolwork I do.', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(10, 'I enjoy the work I do.', 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
(11, 'I recycle.', 1, 1, 1, 0, 0, 0, 0, 0, 0, 1),
(12, 'I have beneficial communication with family/friends.', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(13, 'I work at improving my verbal skills/vocabulary', 1, 1, 1, 0, 0, 0, 0, 1, 0, 0),
(14, 'I incorporate physical activity into my day.', 1, 1, 1, 0, 0, 0, 1, 0, 0, 0),
(15, 'I am involved in religious activities.', 1, 1, 1, 0, 0, 0, 0, 0, 1, 0),
(16, 'I cope well with problems I experience in life.', 1, 1, 1, 0, 0, 1, 0, 0, 0, 0),
(17, 'I am inspired by the work I do at school.', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(18, 'I am inspired by what I do at work.', 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
(19, 'I support political candidates that favor healthy environment policy', 1, 1, 1, 0, 0, 0, 0, 0, 0, 1),
(20, 'I have pleasant interactions with family and friends.', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(21, 'I work at improving my writing skills.', 1, 1, 1, 0, 0, 0, 0, 1, 0, 0),
(22, 'I eat whole (unprocessed) foods.', 1, 1, 1, 0, 0, 0, 0, 0, 0, 1),
(23, 'I manage stressful situations well.', 1, 1, 1, 0, 0, 1, 0, 0, 0, 0),
(24, 'My schoolwork is satisfying.', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(25, 'The work I do is satisfying.', 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
(26, 'I display affection toward loved ones', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(27, 'I read.', 1, 0, 1, 0, 0, 0, 0, 1, 0, 0),
(28, 'I develop my spirituality', 0, 1, 1, 0, 0, 0, 0, 0, 1, 0),
(29, 'I make healthy food choices', 1, 1, 1, 0, 0, 0, 1, 0, 0, 0),
(30, 'I pray/talk to a higher power.', 1, 1, 1, 0, 0, 0, 0, 0, 1, 0),
(31, 'My daily activities are important.', 0, 0, 1, 0, 1, 0, 0, 0, 0, 0),
(32, 'I am involved in activities that require me to think (use my mental abilities).', 0, 0, 1, 0, 0, 0, 0, 1, 0, 0),
(33, 'I enjoy my daily activities', 0, 0, 1, 0, 1, 0, 0, 0, 0, 0),
(34, 'My daily activities inspire me.', 0, 0, 1, 0, 1, 0, 0, 0, 0, 0),
(35, 'My daily activities are satisfying.', 0, 0, 1, 0, 1, 0, 0, 0, 0, 0),
(36, 'I only use what I need for my daily activities (I don\'t use more than I need).', 0, 0, 1, 0, 0, 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preassessment`
--
ALTER TABLE `preassessment`
  ADD PRIMARY KEY (`questionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preassessment`
--
ALTER TABLE `preassessment`
  MODIFY `questionid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
