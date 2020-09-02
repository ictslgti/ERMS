CREATE TABLE `academic_year` (
  `academic_year` varchar(10) NOT NULL,
  `academic_year_status` varchar(20) NOT NULL,
  `1semi_startdate` date NOT NULL,
  `1semi_enddate` date NOT NULL,
  `2semi_startdate` date NOT NULL,
  `2semi_enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`academic_year`, `academic_year_status`, `1semi_startdate`, `1semi_enddate`, `2semi_startdate`, `2semi_enddate`) VALUES
('2019/2020', 'Completed', '2020-08-11', '2020-08-20', '2020-09-05', '2020-09-05'),
('2019/2021', 'Active', '2020-08-20', '2020-08-20', '2020-08-28', '2020-08-19'),
('2019/2022', 'Completed', '2020-08-07', '2020-08-13', '2020-08-28', '2020-08-20'),
('2019/2023', 'Completed', '2020-08-14', '2020-08-06', '2020-08-28', '2020-08-27'),
('2019/2024', 'plan', '2020-08-21', '2020-08-27', '2020-08-28', '2020-08-22'),
('2019/2026', 'Completed', '2020-08-19', '2020-08-19', '2020-08-27', '2020-08-26');
