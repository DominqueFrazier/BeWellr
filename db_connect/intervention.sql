-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 08:30 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intervention`
--
ALTER TABLE `intervention`
  ADD PRIMARY KEY (`questionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intervention`
--
ALTER TABLE `intervention`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
