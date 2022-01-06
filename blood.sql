-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 01:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `b_request_id` int(11) NOT NULL,
  `sno` int(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`b_request_id`, `sno`, `blood_group`, `name`, `dt`) VALUES
(4, 3, 'A+', 'aditya Raj', '2021-02-28'),
(5, 6, 'B+', 'Kilwish', '2021-03-01'),
(6, 4, 'O-', 'sultan', '2021-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `blood_resord`
--

CREATE TABLE `blood_resord` (
  `sno` int(255) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `donar_name` varchar(255) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_resord`
--

INSERT INTO `blood_resord` (`sno`, `blood_group`, `donar_name`, `dt`) VALUES
(3, 'A+', 'aditya Raj', '2021-02-26'),
(4, 'O-', 'sultan', '2021-02-26'),
(5, 'A+', 'Abhinav Kumar', '2021-02-26'),
(6, 'B+', 'Kilwish', '2021-03-01'),
(7, 'O-', 'sultan', '2021-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_user`
--

CREATE TABLE `hospital_user` (
  `uid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(255) NOT NULL DEFAULT 'hospital'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_user`
--

INSERT INTO `hospital_user` (`uid`, `name`, `password`, `dt`, `user_type`) VALUES
(1, 'aditya', '$2y$10$67ea/zxsUV2vvkZGZJzMiOExke9SEXbSF18xiF2SiC..hlssclAD.', '2021-02-28', 'hospital'),
(2, 'root', '$2y$10$3T9UgKw00oUnadx/ueFeO.cZR6tUKPJfZVlucA8vAXNoyux8HZd/6', '2021-02-28', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `password`, `dt`, `user_type`) VALUES
(1, 'aditya', '$2y$10$H6yJIa0tkz/aEQW06tn1juVIsxrZDQUrF/DxKXqNwb0gP3g.rvIx6', '2021-02-26', 'user'),
(2, 'abhinav', '$2y$10$eOYeZFgFJiAEbfzjJ1XbjOLxnZsKQxsQ7lLaTApEYbLtta/Wf5X42', '2021-02-26', 'user'),
(4, 'admin', '$2y$10$SxidjHZ.pHN87bUhwCxQGuWnxYjcjkukhqm7uulZvVabZmED2NUIm', '2021-02-26', 'user'),
(5, 'root', '$2y$10$srhtMClj0elZmmTG1P3Pt.q3N.yHLlzy2cv3gMPA9CzCe.QlIQQHW', '2021-02-28', 'user'),
(6, 'kilwish', '$2y$10$UKTESoMDfdO/rDdozLzRH.Q9Fki7vd8PfPIN3bnZQ1IUMmzQpY5/O', '2021-03-01', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`b_request_id`);

--
-- Indexes for table `blood_resord`
--
ALTER TABLE `blood_resord`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hospital_user`
--
ALTER TABLE `hospital_user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `b_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blood_resord`
--
ALTER TABLE `blood_resord`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hospital_user`
--
ALTER TABLE `hospital_user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
