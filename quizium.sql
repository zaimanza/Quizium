-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 08:09 AM
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
(9, 3, 50, 142),
(28, 6, 45, 142);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructorID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ipassword` varchar(255) NOT NULL,
  `imgName` varchar(255) NOT NULL,
  `imgDir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructorID`, `name`, `username`, `ipassword`, `imgName`, `imgDir`) VALUES
(1, 'Aiman', 'manza', '123', '', ''),
(2, 'Aina Syazana', 'ena', '123', '601383afd1d163.50262585.jpeg', '');

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
  `classAverage` float NOT NULL,
  `numStudents` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `InstructorID`, `quizName`, `dateOpen`, `dateClose`, `quizDescription`, `quizCode`, `classAverage`, `numStudents`) VALUES
(142, 2, 'Quiz 1: General Knowledge', '2021-01-27 11:21:00', '2021-01-28 23:21:00', 'Description', 'SDH-HFM-OET', 0, 30);

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
(85, 'What\'s 2+0?', '0', '2', '3', 142, '2', 'radio'),
(86, 'What\'s the Capital of England?', 'London', 'Ireland', 'Birmingham', 142, 'London', 'radio'),
(87, 'Name any error in computer', 'Syntax error', 'Run time error', 'Logic error', 142, 'Seoul', 'text');

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
(2, 'Aisyah Zanariah', '123', 2020953656),
(3, 'Farrahani Natasha', '123', 2020956453),
(4, 'Nur Sofea Ng', '123', 2020345655),
(5, 'Alya Safiya', '123', 2021345454),
(6, 'Muhammad Shahrizal', '123', 2021989344),
(10, 'Aina Syazana', '123', 2020953759),
(11, 'Aisyah Marrisa', '123', 2020657454);

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
  MODIFY `answeredQuizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `quizquestion`
--
ALTER TABLE `quizquestion`
  MODIFY `quizQuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`InstructorID`) REFERENCES `instructor` (`instructorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD CONSTRAINT `quizquestion_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
