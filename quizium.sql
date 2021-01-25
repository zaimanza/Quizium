-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 07:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizium`
--

-- --------------------------------------------------------

--
-- Table structure for table `answeredquiz`
--

CREATE TABLE `answeredquiz` (
  `answeredQuizID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `quizID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answeredquiz`
--

INSERT INTO `answeredquiz` (`answeredQuizID`, `StudentID`, `mark`, `quizID`) VALUES
(3, 1, 2, 142),
(6, 1, 2, 142),
(7, 1, 3, 142),
(8, 1, 1, 139),
(9, 1, 1, 139),
(10, 1, 1, 139),
(11, 1, 0, 138),
(12, 1, 0, 138),
(13, 1, 0, 138),
(14, 1, 0, 142),
(15, 1, 0, 142),
(16, 1, 0, 142),
(17, 1, 0, 142),
(18, 1, 0, 142),
(19, 1, 0, 142),
(20, 1, 0, 142),
(21, 1, 0, 142),
(22, 1, 0, 142),
(23, 1, 0, 141),
(24, 1, 0, 141),
(25, 1, 0, 141),
(26, 1, 0, 141),
(27, 1, 0, 141),
(28, 1, 0, 141),
(29, 1, 0, 141),
(30, 1, 0, 141),
(31, 1, 0, 141),
(32, 1, 67, 141),
(33, 1, 100, 141),
(34, 1, 0, 138);

-- --------------------------------------------------------

--
-- Table structure for table `answeredquizquestion`
--

CREATE TABLE `answeredquizquestion` (
  `answeredQuizQuestionID` int(11) NOT NULL,
  `quizQuestion` varchar(255) NOT NULL,
  `quizAnswer` varchar(255) NOT NULL,
  `correctAnswer` varchar(255) NOT NULL,
  `answeredQuizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructorID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imgName` varchar(255) NOT NULL,
  `imgDir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructorID`, `name`, `username`, `password`, `imgName`, `imgDir`) VALUES
(1, 'Aiman', 'manza', '123', '', ''),
(2, 'Aina', 'ena', '123', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(11) NOT NULL,
  `InstructorID` int(11) NOT NULL,
  `quizName` varchar(255) NOT NULL,
  `dateOpen` datetime NOT NULL,
  `dateClose` datetime NOT NULL,
  `quizDescription` varchar(255) NOT NULL,
  `quizCode` varchar(255) NOT NULL,
  `classAverage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `InstructorID`, `quizName`, `dateOpen`, `dateClose`, `quizDescription`, `quizCode`, `classAverage`) VALUES
(1, 1, 'ITS571', '2020-12-01 00:00:00', '2020-12-02 00:00:00', '1', '0', 0),
(63, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '625', 'WYG-GHT-WXT', 0),
(64, 2, 'Test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '627', 'WYG-GHT-WXT', 0),
(65, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-24 00:00:00', '629', 'WYG-GHT-WXT', 0),
(67, 2, 'Testing', '2021-01-23 00:00:00', '2021-01-24 00:00:00', '634', 'WYG-GHT-WXT', 0),
(68, 2, 'Test', '2021-01-24 00:00:00', '2021-01-25 00:00:00', '636', 'WYG-GHT-WXT', 0),
(69, 2, 'Test 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '637', 'WYG-GHT-WXT', 0),
(70, 2, 'Test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '640', 'WYG-GHT-WXT', 0),
(71, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '644', 'WYG-GHT-WXT', 0),
(72, 2, 'Test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '645', 'WYG-GHT-WXT', 0),
(73, 2, 'Algebra', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '647', 'WYG-GHT-WXT', 0),
(74, 2, 'Try', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '650', 'WYG-GHT-WXT', 0),
(75, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '654', 'WYG-GHT-WXT', 0),
(76, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(77, 2, 'DB', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'bisa', 'WYG-GHT-WXT', 0),
(78, 2, 'test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(79, 2, 'try', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'test', 'WYG-GHT-WXT', 0),
(80, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'bisa', 'WYG-GHT-WXT', 0),
(81, 2, 'Try', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(82, 2, 'Mathematics 1', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Test 1', 'WYG-GHT-WXT', 0),
(83, 2, 'Test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '713', 'WYG-GHT-WXT', 0),
(84, 2, 'Test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(85, 2, 'Cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'test', 'WYG-GHT-WXT', 0),
(86, 2, 'cuba123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'bisa', 'WYG-GHT-WXT', 0),
(87, 2, 'test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'bisa', 'WYG-GHT-WXT', 0),
(89, 2, 'Algebra II', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Mid term test', 'WYG-GHT-WXT', 0),
(90, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Mid term test', 'WYG-GHT-WXT', 0),
(91, 2, 'HCI', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Final Test', 'WYG-GHT-WXT', 0),
(92, 2, 'Input Checking', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(93, 2, 'CSC444 JAVA ', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Final test', 'WYG-GHT-WXT', 0),
(94, 2, 'test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'test', 'WYG-GHT-WXT', 0),
(95, 2, 'test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(96, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(97, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'test', 'WYG-GHT-WXT', 0),
(98, 2, 'test date', '2021-01-23 00:00:00', '2021-01-30 00:00:00', '1', 'WYG-GHT-WXT', 0),
(99, 2, 'testing date', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(100, 2, 'testing date', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(101, 2, 'test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(102, 2, 'test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(103, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '123', 'WYG-GHT-WXT', 0),
(104, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(105, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(106, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(107, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(108, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(109, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(110, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(111, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(112, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(113, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(114, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(136, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', 'KCG-NOM-SUW', 0),
(137, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', 'RQU-BUA-XQF', 0),
(138, 2, 'test code', '2021-01-23 22:45:00', '2021-01-22 22:45:00', '123', 'KHA-YBJ-ING', 0),
(139, 2, 'cuba', '2021-01-24 21:38:00', '2021-01-25 21:38:00', 'Apakah ini bisa terjadi?', 'JBL-KEA-VAQ', 0),
(140, 2, 'Test: DB', '2021-01-24 22:41:00', '2021-01-25 22:41:00', 'Apakah ini bisa terjadi?', 'BPE-QLV-JCZ', 0),
(141, 2, 'cuba try test', '2021-01-24 22:51:00', '2021-01-25 22:52:00', '1051', 'WZQ-CAL-UBX', 0),
(142, 2, 'text', '2021-01-24 22:54:00', '2021-01-24 22:54:00', '123', 'SDH-HFM-OET', 0),
(144, 2, 'update', '2021-01-27 01:05:00', '2021-01-27 01:05:00', 'Apakah ini bisa terjadi?', 'YLP-IHT-GCU', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quizanswer`
--

CREATE TABLE `quizanswer` (
  `quizAnswerID` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `quizQuestionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizanswer`
--

INSERT INTO `quizanswer` (`quizAnswerID`, `answer`, `quizQuestionID`) VALUES
(1, '3', 1),
(2, '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizquestion`
--

CREATE TABLE `quizquestion` (
  `quizQuestionID` int(11) NOT NULL,
  `questionName` varchar(255) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `asnwer3` varchar(255) NOT NULL,
  `quizID` int(11) NOT NULL,
  `correctAnswer` varchar(255) NOT NULL,
  `questionType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizquestion`
--

INSERT INTO `quizquestion` (`quizQuestionID`, `questionName`, `answer1`, `answer2`, `asnwer3`, `quizID`, `correctAnswer`, `questionType`) VALUES
(1, '2 + 2 = WHAT ?', '4', '', '', 1, '', ''),
(2, 'q1', 'a1', 'a2', 'a3', 64, '', ''),
(3, 'q1', 'ans1', 'a2', 'a3', 70, '', ''),
(4, 'q1', 'ans1', 'ans2', 'ans3', 71, '', ''),
(5, 'question 1', 'ans 1', 'ans2', 'ans3', 72, '', ''),
(6, 'Question 1', 'ans1', 'ans2', 'ans3', 73, '', ''),
(7, 'Question 2', 'jawapan 1', 'jawpaan 2', 'jawpaan 3', 73, '', ''),
(8, 'Question 1', 'ans 1', 'ans 2', 'ans 3', 74, '', ''),
(9, 'Question 2', '', '', '', 74, '', ''),
(10, 'Soalan 1', 'ans1', 'ans2', 'asn3', 75, '', ''),
(11, 'Soalan 2', '', '', '', 75, '', ''),
(12, 'soalan 1', '', '', '', 76, '', ''),
(13, 'soalan 1', '', '', '', 77, '', ''),
(14, 'try', '', '', '', 78, '', ''),
(15, 'q1', '', '', '', 79, '', ''),
(16, 'q1', '', '', '', 80, '', ''),
(17, 'q2', '', '', '', 80, '', ''),
(18, 'question 1', 'Aiman', 'Amelia', 'Aina', 81, '', ''),
(19, 'q2', 'ans 1', 'ans 2', 'asn 3', 81, '', ''),
(20, 'Display your name in any language', 'echo \"aiman\"', 'echo \"aiman\";', 'alert(\"aiman\");', 82, '', ''),
(21, 'soalan 1', 'jawapan 1', 'jawpaan 2', 'jawapan 3', 83, '', ''),
(22, 'q1', 'try1', 'try 2', 'try3', 84, '', ''),
(23, 'question 1', 'echo \"aiman\"', 'echo \"aiman\";', 'alert(\"aiman\");', 84, '', ''),
(24, 'question 678', 'Aiman', 'Amelia', 'Aina', 85, '', ''),
(25, 'soalan 2', 'jawapan 1', 'jawapan 2', 'jawapan 3', 85, '', ''),
(26, 'soalan 1', 'test1', 'test2', 'test3', 86, '', ''),
(27, 'soalan 2', 'aiman', 'Amelia', 'aina', 86, '', ''),
(28, 'quiz 1', 'q1', 'q2', 'q3', 87, '', ''),
(29, 'quiz 2', 'London', 'Ireland', 'Birmingham', 87, '', ''),
(32, 'question 1', '4', '2', '1', 89, '', ''),
(33, 'What is visibility?', 'ans 1', 'ans 2', 'ans 3', 91, '', ''),
(34, 'What method is used in Usability Testing?', 'Heuristic Evaluation', 'Visual reality', 'Interview', 91, '', ''),
(35, 'radio', '1', '2', '3', 92, '', ''),
(36, 'text', '4', '5', '6', 92, '', ''),
(37, 'What is visibility?', 'ans1', 'ans2', 'asn3', 93, '', ''),
(38, 'testing', '1', '2', '3', 94, '', ''),
(39, 'test', '1', '2', '3', 95, '', ''),
(40, '11', '1', '2', '3', 96, '', ''),
(41, 'test1', '1', '2', '3', 97, '', ''),
(42, 'test1', '1', '2', '3', 98, '', ''),
(43, 'test', '1', '2', '3', 99, '', ''),
(44, 'test', '1', '2', '3', 100, '', ''),
(45, 'test', '1', '2', '3', 101, '', ''),
(46, 'test', '1', '2', '3', 102, '', ''),
(47, 'q1', '1', '2', '3', 103, '2', ''),
(48, 'q1', '1', '23', '3', 104, '1', ''),
(49, 'q1', '1', '23', '3', 105, '1', ''),
(50, 'q1', '1', '23', '3', 106, '1', ''),
(51, 'q1', '1', '23', '3', 107, '1', ''),
(52, 'q1', '1', '23', '3', 108, '1', ''),
(53, 'q1', '1', '23', '3', 109, '1', ''),
(54, 'q1', '1', '23', '3', 110, '1', ''),
(55, 'q1', '1', '23', '3', 111, '1', ''),
(56, 'q1', '1', '23', '3', 112, '1', ''),
(57, 'q1', '1', '23', '3', 113, '1', ''),
(58, 'q1', '1', '23', '3', 114, '1', ''),
(79, 'q1', '1', '2', '3', 136, '1', ''),
(80, 'q1', '1', '2', '3', 137, '1', ''),
(81, 'test code', '1', '2', '3', 138, '1', 'text'),
(82, 'What is visibility?', 'ans1', 'asn 2', 'ans 3', 139, 'ans1', 'radio'),
(83, 'santui', 'test', 'test2', 'test3', 141, 'test', 'radio'),
(84, 'Capital of south korea', 'Seoul', 'busan', 'itaewon', 141, 'Seoul', 'radio'),
(85, 'q1', 'ans1', 'ans2', 'asn 3', 142, '', 'text'),
(86, 'q2', 'London', 'Ireland', 'Birmingham', 142, '', 'text'),
(87, 'q3', 'Seoul', 'busan', 'itaewon', 142, 'Seoul', 'radio');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `spassword` varchar(255) NOT NULL,
  `matrixNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentName`, `spassword`, `matrixNum`) VALUES
(1, 'Amelia', '123', 12345),
(2, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  ADD PRIMARY KEY (`answeredQuizID`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `answeredquizquestion`
--
ALTER TABLE `answeredquizquestion`
  ADD PRIMARY KEY (`answeredQuizQuestionID`),
  ADD KEY `answeredquizquestion_ibfk_1` (`answeredQuizID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructorID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`),
  ADD KEY `quiz_ibfk_1` (`InstructorID`);

--
-- Indexes for table `quizanswer`
--
ALTER TABLE `quizanswer`
  ADD PRIMARY KEY (`quizAnswerID`),
  ADD KEY `quizQuestionID` (`quizQuestionID`);

--
-- Indexes for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD PRIMARY KEY (`quizQuestionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  MODIFY `answeredQuizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `answeredquizquestion`
--
ALTER TABLE `answeredquizquestion`
  MODIFY `answeredQuizQuestionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `quizanswer`
--
ALTER TABLE `quizanswer`
  MODIFY `quizAnswerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizquestion`
--
ALTER TABLE `quizquestion`
  MODIFY `quizQuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  ADD CONSTRAINT `answeredquiz_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answeredquiz_ibfk_3` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`);

--
-- Constraints for table `answeredquizquestion`
--
ALTER TABLE `answeredquizquestion`
  ADD CONSTRAINT `answeredquizquestion_ibfk_1` FOREIGN KEY (`answeredQuizID`) REFERENCES `answeredquiz` (`answeredQuizID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`InstructorID`) REFERENCES `instructor` (`instructorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quizanswer`
--
ALTER TABLE `quizanswer`
  ADD CONSTRAINT `quizanswer_ibfk_1` FOREIGN KEY (`quizQuestionID`) REFERENCES `quizquestion` (`quizQuestionID`);

--
-- Constraints for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD CONSTRAINT `quizquestion_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
