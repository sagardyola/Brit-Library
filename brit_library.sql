-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 05:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brit_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask_a_librarian`
--

CREATE TABLE `ask_a_librarian` (
  `a_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `explanation` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ask_a_librarian`
--

INSERT INTO `ask_a_librarian` (`a_id`, `question`, `explanation`, `name`, `email`, `status`) VALUES
(1, 'Where is it?', 'How can it be', 'Sagar Dyola', 'sagar@yaho.com', 'community'),
(2, 'sss', 'dasda', '', 'asd@yahoo.com', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `status`, `feedback`) VALUES
(1, 'Sagar Dyola', 'sagardyola@gmail.com', 'alumni', 'Good'),
(2, 'sss', 'sdf@gmao.com', 'student', 'gg'),
(3, 'Sunita Ghale', 'sunitaghale55@gmail.com', 'student', 'Very good.');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `N_ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`N_ID`, `email`) VALUES
(1, 'sagardyola@gmail.com'),
(2, 'sagar'),
(3, 'sagar'),
(4, 'sunitaghale55@gmail.com'),
(5, 'aa@ggg.com'),
(6, '12345@gmail.com'),
(7, 'wqrqe4@yamas.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask_a_librarian`
--
ALTER TABLE `ask_a_librarian`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`N_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ask_a_librarian`
--
ALTER TABLE `ask_a_librarian`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `N_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
