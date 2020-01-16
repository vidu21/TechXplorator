-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 01:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abes`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_name`) VALUES
(1, 'CS'),
(2, 'IT'),
(3, 'EC'),
(4, 'EN'),
(5, 'ME'),
(6, 'CE'),
(7, 'CEI');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `department` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `Contact` bigint(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `department` varchar(25) NOT NULL,
  `emp_name` varchar(35) NOT NULL,
  `in_time` time(6) NOT NULL,
  `out_time` time(6) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `Contact`, `gender`, `department`, `emp_name`, `in_time`, `out_time`, `date`, `image`) VALUES
(1, '', 0, '', '', '', '00:00:00.000000', '00:00:00.000000', '0000-00-00', ''),
(2, 'vidu', 7526062142, '', 'CEI', 'RM', '00:00:00.000000', '00:00:00.000000', '2020-01-16', ''),
(3, 'vidushee', 8601573431, '', 'IT', 'AS', '00:00:00.000000', '00:00:00.000000', '2020-01-15', ''),
(4, 'abc', 9794585905, 'Male', 'EC', 'RM', '00:00:00.000000', '00:00:00.000000', '2020-01-16', ''),
(5, 'Madhulika Singh', 9425663274, 'Female', 'CS', 'RM', '22:50:00.000000', '08:00:00.000000', '2020-02-05', ''),
(6, 'Priyanka', 7355572894, 'Female', 'IT', 'RM', '15:00:00.000000', '17:00:00.000000', '2020-01-16', 'img20200115174219896.jpg'),
(30, 'khushi', 7355577451, 'Female', 'IT', 'AS', '12:00:00.000000', '13:00:00.000000', '2020-01-16', '$rand20200116014717.png');

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`id`, `email`, `password`, `role`) VALUES
(1, 'vidu.s1999@gmail.com', 'Vidushee', 'admin'),
(2, 'cvx@gmail.com', 'guard', 'guard'),
(3, 'priyanka06092000@gmail.com', 'adref', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login_db`
--
ALTER TABLE `login_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
