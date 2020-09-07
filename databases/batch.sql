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
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batch_no` int(11) NOT NULL,
  `department_code` varchar(20) NOT NULL,
  `NVQ_level` varchar(20) NOT NULL,
  `Academic_year` varchar(11) NOT NULL,
  PRIMARY KEY (`department_code`,`batch_no`,`NVQ_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_no`, `department_code`, `NVQ_level`, `Academic_year`) VALUES
(1, ' ICT', 'BRIDGING', ' 2016/2018'),
(1, ' ICT', 'NVQ-05', ' 2015/2017'),
(2, ' ICT', 'BRIDGING', ' 2017/2019'),
(2, ' ICT', 'NVQ-05', ' 2016/2018'),
(3, ' ICT', 'BRIDGING', ' 2018/2020'),
(3, ' ICT', 'NVQ-05', ' 2017/2019'),
(4, ' ICT', 'BRIDGING', ' 2020/2022'),
(4, ' ICT', 'NVQ-05', ' 2018/2020'),
(5, ' ICT', 'NVQ-05', ' 2020/2022');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
