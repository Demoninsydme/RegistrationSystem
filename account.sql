-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 06:21 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `mname`, `bday`, `age`, `gender`, `address`, `grade`, `guardian`, `relationship`, `contact`, `email`, `status`) VALUES
(5, 'kim', 'kim', 'kim', 'kim', 'kim', '1997-02-25', 22, 'female', '252 Old Quezon City', 'Grade9', 'Luvy', 'Mother', '09098423712', 'k.mans@yahoo.com', ''),
(6, 'mik', 'mik', 'mik', 'mik', 'mik', '1997-02-02', 22, 'Male', '252 Old Quezon City', 'Grade11', 'Luvy Mansos', 'Mother', '09357124584', 'k@yahoo.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `usersback`
--

CREATE TABLE `usersback` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersback`
--

INSERT INTO `usersback` (`id`, `username`, `password`, `fname`, `lname`, `mname`, `bday`, `age`, `gender`, `address`, `grade`, `guardian`, `relationship`, `contact`, `email`, `status`) VALUES
(5, 'kim', 'kim', 'kim', 'kim', 'kim', '1997-02-25', 22, 'female', '252 Old Quezon City', 'Grade9', 'Luvy', 'Mother', '09098423712', 'k.mans@yahoo.com', ''),
(6, 'mik', 'mik', 'mik', 'mik', 'mik', '1997-02-02', 22, 'Male', '252 Old Quezon City', 'Grade11', 'Luvy Mansos', 'Mother', '09357124584', 'k@yahoo.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersback`
--
ALTER TABLE `usersback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usersback`
--
ALTER TABLE `usersback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
