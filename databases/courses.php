CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Duration_Of_Course` int(11) NOT NULL,
  `ojt_duration` int(11) NOT NULL,
  `nvq_level` varchar(10) NOT NULL,
   `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `Duration_Of_Course`, `ojt_duration`, `nvq_level`) VALUES
(1, '5it', 'information communic', 12, 6, '5');
