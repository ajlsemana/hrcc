-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 02:05 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) unsigned NOT NULL,
  `uid` int(11) NOT NULL,
  `telephonic` varchar(10) NOT NULL DEFAULT '0',
  `typing` varchar(10) NOT NULL DEFAULT '0',
  `effective_communication` varchar(10) NOT NULL DEFAULT '0',
  `attentive_listening` varchar(10) NOT NULL DEFAULT '0',
  `time_management` varchar(10) NOT NULL DEFAULT '0',
  `multilingual` varchar(10) NOT NULL DEFAULT '0',
  `conflict_resolution` varchar(10) NOT NULL DEFAULT '0',
  `decision_making` varchar(10) NOT NULL DEFAULT '0',
  `handling_irate_customers` varchar(10) NOT NULL DEFAULT '0',
  `rapport_building` varchar(10) NOT NULL DEFAULT '0',
  `persuasion` varchar(10) NOT NULL DEFAULT '0',
  `adaptability` varchar(10) NOT NULL DEFAULT '0',
  `empathy` varchar(10) NOT NULL DEFAULT '0',
  `quick_learner` varchar(10) NOT NULL DEFAULT '0',
  `flexible` varchar(10) NOT NULL DEFAULT '0',
  `creativity` varchar(10) NOT NULL DEFAULT '0',
  `software_exposure` varchar(10) NOT NULL DEFAULT '0',
  `knowledge_retention` varchar(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `uid`, `telephonic`, `typing`, `effective_communication`, `attentive_listening`, `time_management`, `multilingual`, `conflict_resolution`, `decision_making`, `handling_irate_customers`, `rapport_building`, `persuasion`, `adaptability`, `empathy`, `quick_learner`, `flexible`, `creativity`, `software_exposure`, `knowledge_retention`, `created_at`, `updated_at`) VALUES
(1, 2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2016-08-07 08:48:41', NULL),
(2, 4, '0.00', '5.50', '5.67', '0', '7.00', '4.00', '6.00', '0', '9.00', '6.00', '3.00', '7.00', '5.00', '0', '6.00', '0', '5.00', '0', '2016-08-07 08:48:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills_history`
--

CREATE TABLE IF NOT EXISTS `skills_history` (
  `id` int(11) unsigned NOT NULL,
  `uid` int(11) NOT NULL,
  `skill_name` varchar(60) NOT NULL,
  `rate` varchar(10) NOT NULL DEFAULT '0',
  `date_added` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_history`
--

INSERT INTO `skills_history` (`id`, `uid`, `skill_name`, `rate`, `date_added`, `created_at`, `updated_at`) VALUES
(1, 4, 'telephonic', '6.00', '2016-05-10', '2016-05-10 06:09:57', NULL),
(2, 4, 'telephonic', '7.00', '2014-07-10', '2014-07-10 06:10:12', NULL),
(3, 4, 'time_management', '7.00', '2016-08-08', '2016-08-08 06:11:11', NULL),
(4, 4, 'multilingual', '4.00', '2016-08-08', '2016-08-08 06:11:22', NULL),
(5, 4, 'conflict_resolution', '6.00', '2016-08-08', '2016-08-08 06:11:29', NULL),
(6, 4, 'handling_irate_customers', '9.00', '2016-08-08', '2016-08-08 06:11:35', NULL),
(7, 4, 'rapport_building', '6.00', '2016-08-08', '2016-08-08 06:11:40', NULL),
(8, 4, 'adaptability', '7.00', '2016-08-08', '2016-08-08 06:11:45', NULL),
(9, 4, 'flexible', '6.00', '2016-08-08', '2016-08-08 06:11:52', NULL),
(10, 4, 'software_exposure', '5.00', '2016-08-08', '2016-08-08 06:12:09', NULL),
(11, 4, 'effective_communication', '5.67', '2016-08-08', '2016-08-08 06:12:46', NULL),
(12, 4, 'typing', '5.00', '2016-08-08', '2016-08-08 06:13:49', NULL),
(13, 2, 'typing', '5.50', '2013-01-03', '2013-01-03 06:14:02', NULL),
(14, 4, 'telephonic', '3.00', '2011-07-10', '2011-07-10 11:40:57', NULL),
(15, 4, 'telephonic', '1.23', '2016-01-10', '2016-01-10 11:42:59', NULL),
(16, 4, 'telephonic', '9.00', '2016-07-10', '2016-07-10 11:43:08', NULL),
(17, 4, 'telephonic', '3.00', '2016-06-10', '2016-06-10 11:48:42', NULL),
(18, 4, 'telephonic', '7.00', '2016-04-10', '2016-04-10 11:48:50', NULL),
(19, 4, 'empathy', '5.00', '', '2016-08-09 08:31:55', NULL),
(20, 4, 'telephonic', '6.00', '2016-07-20', '2016-07-20 08:32:02', NULL),
(21, 4, 'telephonic', '8.00', '2016-08-09', '2016-08-09 08:32:25', NULL),
(22, 4, 'telephonic', '5.00', '2016-07-30', '2016-07-30 08:35:20', NULL),
(23, 4, 'persuasion', '3.00', '2016-08-09', '2016-08-09 08:36:25', NULL),
(24, 4, 'telephonic', '3.00', '2015-09-11', '2015-09-11 09:34:35', NULL),
(25, 4, 'telephonic', '6.00', '2015-07-31', '2015-07-31 09:37:40', NULL),
(26, 4, 'telephonic', '1.00', '2010-07-10', '2010-07-10 11:09:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1-admin;2-supervisor;3-manager;4-quality executive;5-agent',
  `contact_no` varchar(15) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `joining_date` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `gender`, `role`, `contact_no`, `birthdate`, `joining_date`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'joseph.semana@bluemena.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'Aiman Joseph', 'Semana', 'joseph.semana@bluemena.com', '', 1, '', '', '', '', 'KdTKIlxM6sR3gAS5YDIsDGJqQuS8riutrpGKzChakbykWPyZVgDEM8ufUQhY', '2016-08-03 08:17:20', '2016-08-07 08:17:19'),
(2, 'ajlsemana@gmail.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'Aiman Joseph', 'Semana', 'ajlsemana@gmail.com', 'Male', 5, '0565492779', '', '2010-01-03', '3.png', 'pX3aNM3zNSTH4tZkzpwCNQDIQI6sD3qFOZYYN1H4lPndNFF0AUjtZPYxdfNZ', '2016-08-03 08:17:20', '2016-08-07 08:17:32'),
(3, 'aiman_semana@yahoo.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'John', 'Jacobs', 'aiman_semana@yahoo.com', 'Male', 3, '0551234566', '', '2010-03-05', '2.png', '7ySeZ7K14VCg22qAMANOPBpYAt90pPwwPBHKlZf9QXKl8ZnVahLOk3yTfhuI', '2016-08-03 08:17:20', '2016-08-03 08:34:45'),
(4, 'abp@altitude.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'Abegail', 'Perez', 'abp@altitude.com', 'Female', 5, '0507790623', '1991-10-10', '2010-07-10', '', '7ySeZ7K14VCg22qAMANOPBpYAt90pPwwPBHKlZf9QXKl8ZnVahLOk3yTfhuI', '2016-08-03 08:17:20', '2016-08-03 08:34:45'),
(11, 'ayman.soliman@bluemena.com', '$2y$10$yys8by9UNt/34Wy81tzZF.S7a2HfJZR2PGou5qp/LCptxlQ8jVCNy', 'Ayman', 'Soliman', 'ayman.soliman@bluemena.com', 'Male', 4, '0557412856', '1990-06-03', '2013-07-10', '', NULL, '2016-08-04 10:17:56', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_history`
--
ALTER TABLE `skills_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `skills_history`
--
ALTER TABLE `skills_history`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
