-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 05:24 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `playercart`
--

CREATE TABLE IF NOT EXISTS `playercart` (
  `cartno` int(11) NOT NULL,
  `forename` text NOT NULL,
  `ccost` int(20) NOT NULL,
  `productid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playercart`
--

INSERT INTO `playercart` (`cartno`, `forename`, `ccost`, `productid`) VALUES
(13, 'sagar', 26, 'BVB Retro Football');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jersey` int(3) NOT NULL,
  `age` int(40) NOT NULL,
  `position` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `jersey`, `age`, `position`, `country`) VALUES
(1, 'Roman Wiedenfeller', 1, 33, 'Goalkeeper', 'Germany'),
(2, 'Roman Burki', 38, 20, 'Goalkeeper', 'Germany'),
(3, 'Hendrik Bonmann', 39, 21, 'Goalkeeper', 'Germany'),
(4, 'Jo Ho Park', 3, 27, 'Defense', 'South Korea'),
(5, 'Neven Subotic', 4, 25, 'Defense', 'Serbia'),
(6, 'Mats Hummels', 15, 28, 'Defense', 'Germany'),
(7, 'Sokratis Papastathopoulos', 25, 27, 'Defense', 'Greece'),
(8, 'Lukasz Pisczek', 26, 29, 'Defense', 'Poland'),
(9, 'Matthias Ginter', 29, 21, 'Defense', 'Germany'),
(10, 'Marcel Schmelzer', 29, 27, 'Defense', 'Germany'),
(11, 'Erik Durm', 37, 23, 'Defense', 'Germany'),
(12, 'Jon Goren Stankovic', 13, 20, 'Defense', 'Croatia'),
(13, 'Sven Bender', 6, 26, 'Midfielder', 'Germany'),
(14, 'Jonas Hoffman', 7, 23, 'Midfielder', 'Germany'),
(15, 'IIkay Gundogan', 8, 25, 'Midfielder', 'Germany'),
(16, 'Adnan Januzaj', 9, 21, 'Midfielder', 'Belgium'),
(17, 'Henrikj Mkhitaryan', 10, 24, 'Midfielder', 'Armenia'),
(18, 'Moritz Leitner', 14, 25, 'Midfielder', 'Germany'),
(19, 'Nuri Sahin', 18, 27, 'Midfielder', 'Turkey'),
(20, 'Shinji Kagawa', 23, 26, 'Midfielder', 'Japan'),
(21, 'Julian Weigl', 33, 20, 'Midfielder', 'Germany'),
(22, 'Marco Reus', 11, 26, 'Attack', 'Germany'),
(23, 'Pierre-Emerick Aubameyang', 17, 26, 'Midfielder', 'Gabon'),
(24, 'Adrian Ramos', 20, 29, 'Attacker', 'Columbia'),
(25, 'Thomas Tuchel', 0, 43, 'Head Coach', 'Germany'),
(26, 'Aron Michels', 0, 48, 'Co-Trainer', 'Germany'),
(27, 'Rainer', 0, 55, 'Athletic Trainer', 'Germany'),
(28, 'Wolfgang De Boer', 0, 49, 'Goalkeeping Coach', 'Germany'),
(29, 'Benjamin Weber', 0, 32, 'Trainer', 'Germany'),
(30, 'Andres Beck', 0, 39, 'Fitness Coach', 'Germany'),
(31, 'Florian Wangler', 0, 35, 'Fitness', 'Germany');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL,
  `forename` text NOT NULL,
  `surname` text NOT NULL,
  `date` date NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `forename`, `surname`, `date`, `number`, `email`, `password`) VALUES
(31, 'arth', 'shah', '1995-12-11', 2147483647, 'arthshah94@gmail.com', '202cb962ac59075b964b07152d234b70'),
(32, 'harsh', 'shah', '1111-11-11', 2147483647, 'hvs@somaiya.edu', '827ccb0eea8a706c4c34a16891f84e7b'),
(33, 'sagar', 'shah', '1993-12-20', 9933788, 'sagarshah1@gmail.com', 'c7cbbf3de4782a8e8fb3db96993f3c3a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playercart`
--
ALTER TABLE `playercart`
  ADD PRIMARY KEY (`cartno`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD UNIQUE KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playercart`
--
ALTER TABLE `playercart`
  MODIFY `cartno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
