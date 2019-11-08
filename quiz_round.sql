-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 01:54 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_round`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `q_ques` text NOT NULL,
  `option_1` varchar(100) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_ques`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`) VALUES
(1, 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 m', '180 m', '324 m', '150 m', '150 m'),
(2, 'Which is greater than 4 ?', ' 5', ' -5', '-1/2', '-25', '5'),
(3, 'Look at this series: 7 10  8 11 9  12  ... What number should come next?', '7', '10', '12', '13', '10'),
(4, 'Find the greatest number that will divide 43  91 and 183 so as to leave the same remainder in each case?', '4', '7', '9', '13', '4'),
(5, 'Look at this series: 53 53 40 40 27 27 ... What number should come next?', '12', '14', '27', '53', '14'),
(6, 'If one-third of one-fourth of a number is 15  then three-tenth of that number is?', '35', '36', '45', '54', '54'),
(7, 'Find the greatest number that will divide 43  91 and 183 so as to leave the same remainder in each case?', '4', '7', '9', '13', '4'),
(8, 'Which is the smallest ?', '-1', '-1/2', '0', '3', '-1'),
(9, 'The sum of ages of 5 children born at the intervals of 3 years each is 50 years. What is the age of the youngest child?', '4 years', '8 years', '10 years', 'None of these', '4 years'),
(10, '3, 5, 11, 14, 17, 21', '21', '17', '14', '3', '14'),
(11, '10, 25, 45, 54, 60, 75, 80', '10', '45', '54', '75', '54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
