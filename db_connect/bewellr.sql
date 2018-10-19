-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 07:19 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `saltedhash` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intervention`
--

CREATE TABLE `intervention` (
  `questionid` int(11) NOT NULL,
  `question` text NOT NULL,
  `food` int(1) NOT NULL,
  `coping` int(1) NOT NULL,
  `physical` int(1) NOT NULL,
  `personal` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intervention`
--

INSERT INTO `intervention` (`questionid`, `question`, `food`, `coping`, `physical`, `personal`) VALUES
(1, 'Today, I was able to show patience in situations that normally cause me to become agitated.', 0, 1, 0, 0),
(2, 'Today, I did not abuse alcohol or other drugs to help cope with stress.', 0, 1, 0, 0),
(3, 'Today, I utilized my support systems in a healthy way by networking, conversing casually, sharing stories, or by expanding my network.', 0, 1, 0, 0),
(4, 'Today, I was able to set a realistic short-term goal.', 0, 1, 0, 0),
(5, 'Today, I was not short with people because I listened actively to their concerns or issues and pondered them before responding.', 0, 1, 0, 0),
(6, 'Today, I accepted responsibility for my actions I can modify, and I was able to let go of things I could not control.', 0, 1, 0, 0),
(7, 'Today, I was able to treat a stressful situation as an opportunity for growth rather than as a dilemma.', 0, 1, 0, 0),
(8, 'Today, I took time to use my own special healthy relaxation technique.', 0, 1, 0, 0),
(9, 'Today, when choosing protein, I ate lean cuts of meat, fish, or poultry, or beans and grains.', 1, 0, 0, 0),
(10, 'Today, I did not have high-calorie, non-nutritious snacks between my meals (if no snacks, answer yes).', 1, 0, 0, 0),
(11, 'Today, my food selection minimized my intake of fats and oils.', 1, 0, 0, 0),
(12, 'Today, I chose carbohydrate-rich foods, such as breads and cereals or fruits and vegetables.', 1, 0, 0, 0),
(13, 'Today, I avoided sugary, non-nutritious foods such as candy bars or pre-sweetened drinks.', 1, 0, 0, 0),
(14, 'Today, I did not overeat at my meals.', 1, 0, 0, 0),
(15, 'Today, I did not overindulge in my consumption of alcoholic beverages.', 1, 0, 0, 0),
(16, 'Today, I took a walk of good duration and distance.', 0, 0, 1, 0),
(17, 'Today, I rode my bike on an errand, or if I drove, I deliberately parked far away from the entrance and walked to the door.', 0, 0, 1, 0),
(18, 'Today, I participated in a physically active sport such as tennis, running, swimming, handball, basketball, or other similar activity.', 0, 0, 1, 0),
(19, 'Today, I went up the stairs, rather than the escalator or elevator, as often as possible.', 0, 0, 1, 0),
(20, 'Today, I participated in a programmed exercise class.', 0, 0, 1, 0),
(21, 'Today, I was involved in some situation that involved continuous physical activity (i.e. at work, with kids, etc.).', 0, 0, 1, 0),
(22, 'Today, I was involved in leisure time physical activity (i.e. ping pong, golf, walk in park, etc.).', 0, 0, 1, 0),
(23, 'Today, I participated in continuous moderate to vigorous activity.', 0, 0, 1, 0),
(24, 'Today I developed my spirituality.', 0, 0, 0, 1),
(25, 'Today I worked at improving my vocabulary, writing, and or verbal skills.', 0, 0, 0, 1),
(26, 'Today I recycled things that had been fully used.', 0, 0, 0, 1),
(27, 'Today I reduced the quantity of materials used by reusing or finding a new way that did not require additional materials.', 0, 0, 0, 1),
(28, 'Today I thought critically before acting so what I did resulted in the greatest common good.', 0, 0, 0, 1),
(29, 'Today I enhanced the quality of someone else’s day.', 0, 0, 0, 1),
(30, 'Today my method of transportation reduced my reliance on fossil fuels (For example, carpool, walk, bike, combine trips, do by email, download music instead of purchase CD, etc.)', 0, 0, 0, 1),
(31, 'Today I did things that improved the quality of my life.', 0, 0, 0, 1),
(32, 'Today I didn\'t perform any of these lifestyle health promoting actions.', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `intervention_results`
--

CREATE TABLE `intervention_results` (
  `user_id` bigint(255) NOT NULL,
  `weekNumber` tinyint(4) NOT NULL,
  `dayOfWeekNumber` tinyint(4) NOT NULL,
  `IBScore` tinyint(4) NOT NULL,
  `FSScore` tinyint(4) NOT NULL,
  `PAScore` tinyint(4) NOT NULL,
  `PGScore` tinyint(4) NOT NULL,
  `TotalScore` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` bigint(250) NOT NULL,
  `user_id` bigint(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `preassessment_results`
--

CREATE TABLE `preassessment_results` (
  `user_id` bigint(255) NOT NULL,
  `socialScore` tinyint(4) NOT NULL,
  `vocationalScore` tinyint(4) NOT NULL,
  `emotionalScore` tinyint(4) NOT NULL,
  `physicalScore` tinyint(4) NOT NULL,
  `intellectualScore` tinyint(4) NOT NULL,
  `spiritualScore` tinyint(4) NOT NULL,
  `environmentalScore` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preassessment_results`
--

INSERT INTO `preassessment_results` (`user_id`, `socialScore`, `vocationalScore`, `emotionalScore`, `physicalScore`, `intellectualScore`, `spiritualScore`, `environmentalScore`) VALUES
(11, 17, 11, 12, 6, 10, 10, 11);

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

-- --------------------------------------------------------

--
-- Table structure for table `unverified_users`
--

CREATE TABLE `unverified_users` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `email`, `saltedhash`, `firstname`, `lastname`, `dob`, `weight`, `height`, `gender`, `workstatus`, `organization`, `occupation`, `ethnicity`, `maritalstatus`, `education`) VALUES
(11, 'jakayla_alston@aol.com', '$2y$10$DtuqN6ync.zmm0gA.F20j.b8q96AQ1d7fNKYv2UNrpDcD8N.PEZ5i', 'Jakayla', 'Alston', '1994-11-16', 250, 63, 'Female', 'Unemployed', 'East Carolina University', 'Student', 'African American-Black', 'Never Married', 'Some Highschool');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `intervention`
--
ALTER TABLE `intervention`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `preassessment`
--
ALTER TABLE `preassessment`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `quote_table`
--
ALTER TABLE `quote_table`
  ADD PRIMARY KEY (`quoteID`),
  ADD UNIQUE KEY `Primary Key` (`quoteID`);

--
-- Indexes for table `unverified_users`
--
ALTER TABLE `unverified_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `intervention`
--
ALTER TABLE `intervention`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` bigint(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `preassessment`
--
ALTER TABLE `preassessment`
  MODIFY `questionid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `quote_table`
--
ALTER TABLE `quote_table`
  MODIFY `quoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `unverified_users`
--
ALTER TABLE `unverified_users`
  MODIFY `user_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
