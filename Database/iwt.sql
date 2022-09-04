-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 10:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicationform`
--

CREATE TABLE `applicationform` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `emp_status` varchar(20) NOT NULL,
  `com_name01` varchar(30) NOT NULL,
  `com_name02` varchar(30) NOT NULL,
  `com_name03` varchar(30) NOT NULL,
  `job_title01` varchar(20) NOT NULL,
  `job_title02` varchar(20) NOT NULL,
  `job_title03` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicationform`
--

INSERT INTO `applicationform` (`id`, `fname`, `lname`, `address`, `email`, `phone`, `emp_status`, `com_name01`, `com_name02`, `com_name03`, `job_title01`, `job_title02`, `job_title03`, `message`) VALUES
(17, 'madushi', 'Praweena', 'Panadura\r\n                           ', 'praweena@gmail.com', '0715296351', 'Employed', 'vertusa', 'orel it', '', 'senior software engi', 'data analyst', '', '6 years experience as a senior software engineer'),
(18, 'Gethmi', 'hasinika', 'Marawila', 'gethmi@gmail.com', '0714582124', 'Employed', 'abc', 'cakeLabs', '', 'network engineer', 'software engineer', '', ' 5 years experience.'),
(19, 'Nisal', 'Perera', '\r\n 12/43,Kandy                      ', 'Nisal@gmail.com', '0712121222', 'Employed', 'cortex', 'cde bank', 'virtusa', 'senior software engi', 'Cyber security', 'Data Analyist', 'Salary Expected at least Rs.100000'),
(20, 'vimukthi', 'maduwantha', '246/A Hettipola road, Kuliyapitiya\r\n              ', 'vimukthi7788@gmail.com', '0778456659', 'Student', '', '', '', '', '', '', 'Expect the salary 250000'),
(21, 'Vinura', 'Anupama', '\r\nNegombo                     ', 'vinura@gmail.com', '0772583691', 'Employed', 'boc ', '', '', 'HR manager', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(11, 'Madhushi Praweena', 'praweena@gmail.com', 'what are the qualifications'),
(12, 'gethmi', 'gethmi@gmail.com', 'what are the qualifications?'),
(13, 'Nisal', 'Nisal@gmail.com', 'What is Minimum Salary?'),
(14, 'Vimukthi Msdauwantha', 'vimukthi7788@gmail.com', 'what are the qualifications?'),
(15, 'Vinura Anupama', 'vinura@gmail.com', 'What is Minimum Salary?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `comments` varchar(150) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `femail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `experience`, `comments`, `fname`, `femail`) VALUES
(8, 'Good', 'Good service', 'Madhushi Praweena', 'praweena@gmail.com'),
(9, 'Average', 'Average Service', 'gethmi', 'gethmi@gmail.com'),
(10, 'Average', 'Good Service', 'Nisal', 'nisal@gmail.com'),
(11, 'Good', 'Good service', 'vimukthi', 'vimukthi7788@gmail.com'),
(12, 'Average', 'average good', 'Vinura Anupama', 'vinura@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cardname` varchar(10) NOT NULL,
  `creditnumber` varchar(20) NOT NULL,
  `expiremonth` varchar(10) NOT NULL,
  `expireyear` varchar(5) NOT NULL,
  `cvv` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `fullname`, `email`, `address`, `city`, `cardname`, `creditnumber`, `expiremonth`, `expireyear`, `cvv`) VALUES
(12, 'Madhushi Praweena', 'praweena@gmail.com', 'Panadura', 'Colombo', 'Madhushi P', '7845963512589635', 'march', '2029', '586'),
(13, 'Gethmi Hasinika', 'gethmi@gmail.com', '129/23,de mel road,Maravila', 'Negombo', 'Gethmi Has', '1212525244445421', 'May', '2028', '752'),
(14, 'Nisal Perera', 'Nisal@gmail.com', '12/58,Kandy', 'Kandy', 'Nisal Pere', '4521632598987456', 'October', '2030', '592'),
(15, 'Vimukthi Maduwantha', 'vimukthi7788@gmail.com', '421/A Kurunagala road , Kuliyapitiya', 'kuliyapitiya', 'Vimukthi M', '0000111122223333', 'August', '2022', '345'),
(16, 'Vinura Anupama', 'vinura@gmail.com', 'Negombo', 'Negombo', 'Vinura Anu', '7845963225810369', 'april', '2030', '859');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `email`, `password`) VALUES
('Gethmi Hasinika', 'gethmi@gmail.com', 'gethmi123'),
('Nisal', 'Nisal@gmail.com', 'nisal123'),
('Praweena', 'praweena@gmail.com', 'praweena@1999'),
('Vimukthi Maduwantha', 'vimukthi7788@gmail.com', '123123'),
('Vinura', 'vinura@gmail.com', 'vinura@1999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicationform`
--
ALTER TABLE `applicationform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicationform`
--
ALTER TABLE `applicationform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
