-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2022 at 04:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinevoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `aname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`, `aname`) VALUES
(1, 'admin@gmail.com', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidate2nd`
--

CREATE TABLE `candidate2nd` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `enrollid` varchar(40) CHARACTER SET latin1 NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Bio` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `Votess` int(100) NOT NULL,
  `approve_status` int(20) DEFAULT 0 COMMENT '0 for pending, 1 for approve, 2 for reject'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidate3rd`
--

CREATE TABLE `candidate3rd` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `enrollid` varchar(40) CHARACTER SET latin1 NOT NULL,
  `photo` varchar(255) NOT NULL,
  `Bio` varchar(1000) NOT NULL,
  `Votess` int(100) NOT NULL,
  `approve_status` int(11) DEFAULT 0 COMMENT '0 for pending, 1 for approve, 2 for reject'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `enrollid` varchar(40) CHARACTER SET latin1 NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Bio` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `Votess` int(100) NOT NULL,
  `approve_status` int(11) DEFAULT 0 COMMENT '0 for pending, 1 for approved, 2 for reject'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `email`, `mobile`, `enrollid`, `photo`, `Bio`, `Votess`, `approve_status`) VALUES
(44, 'KP Oli', 'kpba@gmail.com', 9805678910, '234567', 'YAMALE.png', 'ex pm of Nepal,pension increment, Dharhara reconstructed.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `message` varchar(250) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'abhi', 'jaiswalabhi089@gmail.com', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `name` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `number` bigint(20) DEFAULT NULL,
  `suggestion` varchar(250) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `name`, `email`, `number`, `suggestion`) VALUES
(1, 'abhi', 'jaiswalabhij089@gmail.com', 9821417430, 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `voterid` bigint(15) NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `citizenfront` varchar(255) NOT NULL,
  `citizenback` varchar(255) NOT NULL,
  `status` varchar(11) CHARACTER SET latin1 NOT NULL,
  `Votes` varchar(11) CHARACTER SET latin1 NOT NULL,
  `votes2` varchar(11) NOT NULL,
  `votes3` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `password`, `address`, `dob`, `voterid`, `photo`, `citizenfront`, `citizenback`, `status`, `Votes`, `votes2`, `votes3`) VALUES
(26, 'Abhishek Jaiswal', 9821417430, '123456', 'Baneswor', '2001-04-02', 98214174, 'IMG-20181215-WA0053.jpg', 'citifront.png', 'citiback.png', 'ON', 'YES', 'NO', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `candidate2nd`
--
ALTER TABLE `candidate2nd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate3rd`
--
ALTER TABLE `candidate3rd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate2nd`
--
ALTER TABLE `candidate2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `candidate3rd`
--
ALTER TABLE `candidate3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
