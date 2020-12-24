-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 06:15 AM
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
-- Database: `routinemaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `Teacher_initial` varchar(11) DEFAULT NULL,
  `Course_Code` varchar(10) DEFAULT NULL,
  `Course_Sections` varchar(5) DEFAULT NULL,
  `Room` varchar(11) DEFAULT NULL,
  `Slots` varchar(11) DEFAULT NULL,
  `Day` varchar(200) DEFAULT NULL,
  `Course_section_count` int(11) DEFAULT 0,
  `Batch_section_count` int(11) NOT NULL DEFAULT 0,
  `Batch_section_weekly_count` int(11) NOT NULL DEFAULT 0,
  `Teacher_count` int(11) NOT NULL DEFAULT 0,
  `Teacher_weekly_count` int(11) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Code` varchar(10) NOT NULL,
  `Course_Title` varchar(50) DEFAULT NULL,
  `Course_Type` varchar(20) DEFAULT NULL,
  `Course_Semester` int(11) DEFAULT NULL,
  `Course_Credit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Code`, `Course_Title`, `Course_Type`, `Course_Semester`, `Course_Credit`) VALUES
('AOL101', 'Art of Living', 'Theory', 1, 3),
('BGS101', 'Bangladesh Studies', 'Theory', 6, 3),
('EMP101', 'Employability 360', 'Theory', 7, 3),
('ENG101', 'English-1', 'Theory', 1, 3),
('GE235', 'Principles of Accounting, Business and Economics', 'Theory', 6, 3),
('MAT101', 'Mathematics-1', 'Theory', 2, 3),
('MAT102', 'Mathematics-2', 'Theory', 3, 3),
('PHY101', 'Physics-1', 'Theory', 2, 3),
('SE111', 'Computer Fundamentals', 'Theory', 1, 3),
('SE112', 'Computer Fundamentals Lab', 'Lab', 1, 1),
('SE113', 'Introduction to Software Engineering', 'Theory', 1, 3),
('SE121', 'Structured Programming', 'Theory', 2, 3),
('SE122', 'Structured Programming Lab', 'Lab', 2, 1),
('SE123', 'Discrete Mathematics', 'Theory', 2, 3),
('SE131', 'Data Structure', 'Theory', 3, 3),
('SE132', 'Data Structure Lab', 'Lab', 3, 1),
('SE133', 'Software Development Project', 'Lab', 3, 3),
('SE211', 'Object Oriented Concepts', 'Lab', 4, 3),
('SE212', 'Software Requirement, Specifications and Analysis', 'Theory', 4, 3),
('SE213', 'Digital Electronics and Logic Design', 'Theory', 4, 3),
('SE214', 'Algorithm Design and Analysis', 'Theory', 4, 3),
('SE215', 'Algorithm Design and Analysis Lab', 'Lab', 4, 1),
('SE221', 'Object Oriented Design', 'Lab', 5, 3),
('SE222', 'Computer Architecture', 'Theory', 5, 3),
('SE223', 'Database System', 'Theory', 5, 3),
('SE224', 'Database System Lab', 'Lab', 5, 1),
('SE225', 'Data Communication and Computer Networking', 'Theory', 7, 3),
('SE226', 'Data Communication and Computer Networking Lab', 'Lab', 7, 1),
('SE231', 'System Analysis and Design Project', 'Lab', 6, 3),
('SE232', 'Operating System and System Programming', 'Theory', 6, 3),
('SE233', 'Operating System and System Programming Lab', 'Lab', 6, 1),
('SE234', 'Theory of Computing', 'Theory', 6, 3),
('SE311', 'Design Pattern', 'Lab', 7, 3),
('SE312', 'Software Quality Assurance and Testing', 'Theory', 7, 3),
('SE313', 'Software Quality Assurance and Testing Lab', 'Lab', 7, 1),
('SE321', 'Software Engineering Web Application', 'Theory', 8, 3),
('SE322', 'Software Engineering Web Application Lab', 'Lab', 8, 1),
('SE323', 'Software Architecture and Design', 'Theory', 8, 3),
('SE331', 'Software Engineering Design Project', 'Lab', 9, 3),
('SE332', 'Information System Security', 'Theory', 9, 3),
('SE333', 'Artificial Intelligence', 'Theory', 9, 3),
('SE334', 'Artificial Intelligence Lab', 'Lab', 9, 1),
('SE341', 'Numerical Analysis', 'Theory', 8, 3),
('SE345', 'Management Information System', 'Theory', 8, 3),
('SE441', 'Software Engineering Professional Ethics', 'Theory', 9, 3),
('SE541', 'Introduction to Robotics', 'Theory', 5, 3),
('STA101', 'Statistics-1', 'Theory', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `room_list`
--

CREATE TABLE `room_list` (
  `Room_Serial` int(11) NOT NULL,
  `Room_Num` int(11) DEFAULT NULL,
  `Building_Code` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_list`
--

INSERT INTO `room_list` (`Room_Serial`, `Room_Num`, `Building_Code`) VALUES
(1, 601, 'AB'),
(2, 501, 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_id` int(11) NOT NULL,
  `Teacher_Name` varchar(50) DEFAULT NULL,
  `Teacher_Initial` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_id`, `Teacher_Name`, `Teacher_Initial`) VALUES
(0, 'Amit Rudro', 'AR'),
(101, 'abcan cq', 'abc'),
(102, 'egrwg3rf', 'bcd'),
(103, 'qegdqkehd', 'def'),
(104, 'vccbhwdc', 'efg'),
(105, 'hcvdhwb', 'fgh'),
(106, 'dbscgjvc', 'ghi'),
(107, 'khgwchjbcwk', 'hij'),
(108, 'hvdhjewbk', 'ijk'),
(109, 'gycwkcbwc', 'cde'),
(201, 'ajdvcwn', 'jkl'),
(202, 'gdsvwbh', 'klm'),
(203, 'msdbvwjknl', 'lmn'),
(204, 'kjahvcehbj', 'mno'),
(205, 'hvjchkb', 'nop'),
(206, 'hvchdcbmw', 'opq'),
(207, 'mbcshjdcbw', 'pqr'),
(208, 'gnvcbj', 'qrs'),
(209, 'gfchgvjbhkn', 'rst'),
(301, 'dfcvgjbk', 'stu'),
(302, 'fvgbhnj', 'tuv'),
(303, 'xrdtcvghjb', 'uvw'),
(304, 'szxdcfgvh', 'vwx'),
(305, 'loikujnyby', 'wxy'),
(306, 'tfgjvhbmvngc', 'xyz'),
(307, 'njhukyjthfgv', 'abd'),
(308, 'bvcdhxh', 'cba'),
(309, 'jndqjedn', 'dcb'),
(1234567, 'Md Shohel Arman', 'MSA');

-- --------------------------------------------------------

--
-- Table structure for table `timeslots`
--

CREATE TABLE `timeslots` (
  `Slots` int(11) NOT NULL,
  `Timeframe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeslots`
--

INSERT INTO `timeslots` (`Slots`, `Timeframe`) VALUES
(1, '08:30AM-10:00AM'),
(2, '10:00AM-11:30AM'),
(3, '11:30AM-01:00PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Code`);

--
-- Indexes for table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`Room_Serial`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_id`);

--
-- Indexes for table `timeslots`
--
ALTER TABLE `timeslots`
  ADD PRIMARY KEY (`Slots`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
