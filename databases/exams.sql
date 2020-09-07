-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 12:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erms`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(4) UNSIGNED NOT NULL,
  `exam` varchar(8) NOT NULL,
  `dept_name` varchar(60) NOT NULL,
  `course` varchar(30) NOT NULL,
  `batch` varchar(12) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `module` varchar(8) NOT NULL,
  `exam_type` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam`, `dept_name`, `course`, `batch`, `semester`, `module`, `exam_type`, `date`) VALUES
(29, 'INSTITUT', ' Automotive & Agricultural\r\nTechnology Department', 'A+', ' 04', '1 st', 'EMP-MO1', 'P', '2020-09-10'),
(35, 'INSTITUT', ' Automotive & Agricultural\r\nTechnology Department', 'B+', ' 04', '2 nd', 'EMP-MO1', 'T', '2020-09-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`,`exam`,`dept_name`,`course`,`batch`,`semester`,`module`,`exam_type`),
  ADD UNIQUE KEY `exam_id_3` (`exam_id`,`exam_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
