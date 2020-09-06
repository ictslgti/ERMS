-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 06:22 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE IF NOT EXISTS `assessments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `batch` int(11) NOT NULL,
  `module` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `percentage` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`id`, `name`, `batch`, `module`, `type`, `percentage`) VALUES
(1, 'quiz', 4, 'K72T001M01', 'Theroy', 20),
(2, 'normalization', 4, 'K72T001M01', 'Theroy', 20),
(3, 'sql', 4, 'K72T001M01', 'Practical', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
