-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 10:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(5) NOT NULL,
  `category` varchar(100) NOT NULL,
  `exam_time_in_minutes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `exam_time_in_minutes`) VALUES
(5, 'C#', '60'),
(8, 'Programming', '60'),
(9, 'Math', '45'),
(11, 'Mesimi elektronisa', '60');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `wrong_answer` varchar(100) NOT NULL,
  `exam_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `username`, `exam_type`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(4, 'arlindmislimi', 'Programming', '2', '1', '1', '2021-01-20'),
(5, 'blendim', 'Programming', '2', '2', '0', '2021-01-20'),
(6, 'arlindmislimi', 'Math', '4', '3', '1', '2021-01-20'),
(7, 'arlindmislimi', 'Math', '4', '3', '1', '2021-01-20'),
(8, 'arlindmislimi', 'Math', '4', '2', '2', '2021-01-20'),
(9, 'blendim', 'Math', '3', '2', '1', '2021-01-20'),
(10, 'arlindmislimi', 'Math', '3', '2', '1', '2021-01-20'),
(11, 'arlindmislimi', 'Programming', '3', '3', '0', '2021-01-20'),
(12, 'arlindmislimi', 'Math', '3', '2', '1', '2021-01-20'),
(13, 'arlindmislimi', 'Programming', '4', '4', '0', '2021-01-20'),
(14, 'arlindmislimi', 'Programming', '6', '6', '0', '2021-01-20'),
(15, 'arlindmislimi', 'Programming', '6', '5', '1', '2021-01-20'),
(16, 'arlindmislimi', 'Programming', '6', '6', '0', '2021-01-20'),
(17, 'arlindmislimi', 'Programming', '7', '7', '0', '2021-01-20'),
(18, 'arlindmislimi', 'Programming', '7', '7', '0', '2021-01-20'),
(19, 'arlindmislimi', 'Programming', '7', '6', '1', '2021-01-20'),
(20, 'arlindmislimi', 'Programming', '7', '3', '4', '2021-01-20'),
(21, 'arlindmislimi', 'Programming', '7', '0', '7', '2021-01-20'),
(22, 'arlindmislimi', 'Programming', '7', '0', '7', '2021-01-20'),
(23, 'blendim', 'Programming', '7', '0', '7', '2021-01-20'),
(24, 'arlindmislimi', 'Programming', '7', '5', '2', '2021-01-20'),
(25, 'arlindmislimi', 'Programming', '7', '4', '3', '2021-01-20'),
(26, 'arlindmislimi', 'Programming', '7', '3', '4', '2021-01-20'),
(27, 'arlindmislimi', 'Programming', '7', '6', '1', '2021-01-20'),
(28, 'arlindmislimi', 'Math', '3', '2', '1', '2021-01-20'),
(29, 'arlindmislimi', 'Math', '3', '2', '1', '2021-01-20'),
(30, 'arlindmislimi', 'Math', '3', '2', '1', '2021-01-20'),
(31, 'blendim', 'Math', '3', '3', '0', '2021-01-20'),
(32, 'velidisejni', 'Math', '4', '4', '0', '2021-01-20'),
(33, 'velidisejni', 'Programming', '7', '7', '0', '2021-01-20'),
(34, 'velidisejni', 'Programming', '7', '6', '1', '2021-01-21'),
(35, 'arlindmislimi', 'Programming', '7', '0', '7', '2021-01-23'),
(36, 'arlindmislimi', 'Programming', '7', '1', '6', '2021-01-25'),
(37, 'bleron', 'Programming', '8', '7', '1', '2021-01-25'),
(38, 'bleron', 'Math', '4', '0', '4', '2021-01-25'),
(39, 'arlindmislimi', 'Programming', '8', '0', '8', '2021-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `category`) VALUES
(5, '1', 'C# eshte e krijuar nga ?', 'Guido van Rossum', 'Anders Hejlsberg', 'Bjarne Stroustrup', 'James Gosling', 'Anders Hejlsberg', 'C#'),
(7, '1', '10+4=?', '14', '12', '11', '6', '14', 'Programming'),
(8, '2', '20-9 = ', '11', '29', '85', '180', '11', 'Programming'),
(9, '1', '21+21 = ', '0', '40', '42', '24', '42', 'Math'),
(10, '2', '5+7 = ', '36', '12', '56', '40', '12', 'Math'),
(13, '3', '60+20 = ', '40', '1200', '80', '70', '80', 'Programming'),
(15, '4', 'var x=5; x++; var y=x+4; y= ?', '9', '8', '10', '11', '10', 'Programming'),
(16, '5', 'Kush e krijoi gjuhen programore Python ?', 'Bjarne Stroustrup', 'Guido Van Rossum', 'Elon Musk', 'Bill Gates', 'Guido Van Rossum', 'Programming'),
(18, '6', 'Cila prej ketyre me poshte nuk eshte gjuhe Programore ?', 'C++', 'Java', 'Golang', 'Css', 'Css', 'Programming'),
(19, '7', 'a=8; //checkbox, b=4; //checkbox   if(a.checked) { c=a/b } else c=a*b; Sa do te jete vlera e c nese selektohet b ? ?', '32', '4', '2', '48', '32', 'Programming'),
(20, '3', '98-56 = ?', '42', '44', '32', '46', '42', 'Math'),
(21, '4', '46+54 = ?', '110', '90', '100', '120', '100', 'Math'),
(23, '8', '2+2', '4', '2', '8', '16', '4', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Arlind', 'Mislimi', 'arlindmislimi', 'arlind123', 'arlindmislimi@gmail.com', '075813750'),
(5, 'Blendi', 'Mislimi', 'blendim', 'blendi123', 'blendi@gmail.com', '075999999'),
(18, 'Velid', 'Isejni', 'velidisejni', 'velid123', 'velid@gmail.com', '075075075'),
(19, 'Bleron', 'Ajredini', 'bleron', 'bleron123', 'bleron@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
