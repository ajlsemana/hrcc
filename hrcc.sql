-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2016 at 02:08 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `gender`, `role`, `contact_no`, `birthdate`, `joining_date`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'joseph.semana@bluemena.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'Aiman Joseph', 'Semana', 'joseph.semana@bluemena.com', '', 1, '', '', '', '', '2rI3nAxK1W3CfABGjbaSn4YhVzMvQMZ8aNM8gxhnumSooXvjp7RlIyNZnejK', '2016-08-03 08:17:20', '2016-08-04 08:13:36'),
(2, 'ajlsemana@gmail.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'Aiman Joseph', 'Semana', 'ajlsemana@gmail.com', 'Male', 5, '0565492779', '', '2016-07-28', '3.png', '7ySeZ7K14VCg22qAMANOPBpYAt90pPwwPBHKlZf9QXKl8ZnVahLOk3yTfhuI', '2016-08-03 08:17:20', '2016-08-03 08:34:45'),
(3, 'aiman_semana@yahoo.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'John', 'Doe', 'aiman_semana@yahoo.com', 'Male', 5, '0551234566', '1985-06-30', '2010-03-05', '2.png', '7ySeZ7K14VCg22qAMANOPBpYAt90pPwwPBHKlZf9QXKl8ZnVahLOk3yTfhuI', '2016-08-03 08:17:20', '2016-08-03 08:34:45'),
(4, 'abp@altitude.com', '$2y$10$pmJQZwDovHnRPyd7urbbLu/Otdw29PcJhkLrItYHLbvCk9W6M0juS', 'Abegail', 'Perez', 'abp@altitude.com', 'Female', 2, '0507790623', '', '2013-10-16', '', '7ySeZ7K14VCg22qAMANOPBpYAt90pPwwPBHKlZf9QXKl8ZnVahLOk3yTfhuI', '2016-08-03 08:17:20', '2016-08-03 08:34:45'),
(11, 'ayman.soliman@bluemena.com', '$2y$10$yys8by9UNt/34Wy81tzZF.S7a2HfJZR2PGou5qp/LCptxlQ8jVCNy', 'Ayman', 'Soliman', 'ayman.soliman@bluemena.com', 'Male', 4, '0557412856', '1986-02-13', '2013-07-10', '', NULL, '2016-08-04 10:17:56', '0000-00-00 00:00:00'),
(12, 'rbk@altitude.com', '$2y$10$ICsCvnyYYSx5Y/b1afi/h.uLH42YpVS4woGhVlgWvuZqbIGPkXaHq', 'Riadh', 'Boukhris', 'rbk@altitude.com', 'Male', 2, '0561234958', '1985-01-01', '2000-08-06', '', NULL, '2016-08-04 10:19:18', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
