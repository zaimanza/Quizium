-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 08:42 AM
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
  `InstructorID` int(11) NOT NULL,
  `quizName` varchar(255) NOT NULL,
  `dateOpen` date NOT NULL,
  `dateClose` date NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'Aina', 'ena', '123', '', '');

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
(62, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '624', 'WYG-GHT-WXT', 0),
(63, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '625', 'WYG-GHT-WXT', 0),
(64, 2, 'Test', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '627', 'WYG-GHT-WXT', 0),
(65, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-24 00:00:00', '629', 'WYG-GHT-WXT', 0),
(66, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', '632', 'WYG-GHT-WXT', 0),
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
(115, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(116, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(117, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(118, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(119, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(120, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(121, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(122, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(123, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(124, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(125, 2, 'cuba', '2021-01-23 22:04:00', '2021-01-23 22:04:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(126, 2, 'cuba', '2021-01-23 22:04:00', '2021-01-23 22:04:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT', 0),
(127, 2, 'testing date', '2021-01-23 22:20:00', '2021-01-23 22:20:00', '123', 'WYG-GHT-WXT', 0),
(128, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', '0', 0),
(129, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', '0', 0),
(130, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', '0', 0),
(131, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', '0', 0),
(132, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', 'UMN', 0),
(133, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', '0', 0),
(134, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', '0', 0),
(135, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', '0', 0),
(136, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', 'KCG-NOM-SUW', 0),
(137, 2, 'Testing 123', '2021-01-23 22:39:00', '2021-01-23 22:39:00', 'Apakah ini bisa terjadi?', 'RQU-BUA-XQF', 0),
(138, 2, 'test code', '2021-01-23 22:45:00', '2021-01-22 22:45:00', '123', 'KHA-YBJ-ING', 0);

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
(59, 'q1', '1', '23', '3', 115, '1', ''),
(60, 'q1', '1', '23', '3', 116, '1', ''),
(61, 'q1', '1', '23', '3', 117, '1', ''),
(62, 'q1', '1', '23', '3', 118, '1', ''),
(63, '1', '2', '3', '1', 120, '2', ''),
(64, '1', '2', '3', '1', 121, '2', ''),
(65, '1', '2', '3', '1', 122, '2', ''),
(66, '1', '2', '3', '1', 123, '2', ''),
(67, '1', '2', '3', '1', 124, '2', ''),
(68, 'test1', '1', '2', '3', 125, '1', ''),
(69, 'test1', '1', '2', '3', 126, '1', ''),
(70, 'test1', '1', '2', '3', 127, '1', ''),
(71, 'q1', '1', '2', '3', 128, '1', ''),
(72, 'q1', '1', '2', '3', 129, '1', ''),
(73, 'q1', '1', '2', '3', 130, '1', ''),
(74, 'q1', '1', '2', '3', 131, '1', ''),
(75, 'q1', '1', '2', '3', 132, '1', ''),
(76, 'q1', '1', '2', '3', 133, '1', ''),
(77, 'q1', '1', '2', '3', 134, '1', ''),
(78, 'q1', '1', '2', '3', 135, '1', ''),
(79, 'q1', '1', '2', '3', 136, '1', ''),
(80, 'q1', '1', '2', '3', 137, '1', ''),
(81, 'test code', '1', '2', '3', 138, '1', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `matrixNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  ADD PRIMARY KEY (`answeredQuizID`),
  ADD KEY `answeredquiz_ibfk_1` (`InstructorID`),
  ADD KEY `StudentID` (`StudentID`);

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
  MODIFY `answeredQuizID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answeredquizquestion`
--
ALTER TABLE `answeredquizquestion`
  MODIFY `answeredQuizQuestionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `quizanswer`
--
ALTER TABLE `quizanswer`
  MODIFY `quizAnswerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizquestion`
--
ALTER TABLE `quizquestion`
  MODIFY `quizQuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  ADD CONSTRAINT `answeredquiz_ibfk_1` FOREIGN KEY (`InstructorID`) REFERENCES `instructor` (`instructorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answeredquiz_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
