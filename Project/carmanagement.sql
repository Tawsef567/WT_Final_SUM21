-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 07:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `repassword` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `username`, `fullname`, `email`, `password`, `repassword`, `phone`, `address`, `dob`) VALUES
(4, 'test', 'test', 'test@gmail.com', '$2y$10$fBZcrNMzEXndps0CujrRSeLknB3RgARYqYnvDqguMTjnWY8iN8Lie', '$2y$10$Ovr9EKC8q69dzBCFDjshUeQ06FXr3QYHe8VoG43p5oevSOQ3gImZC', '12345', 'Dhaka, 1200', '00-11-06'),
(5, 'mutasim', 'Mutasim Mahmud', 'mahmudmutasim@gmail.com', '$2y$10$1kdCSWD68zZcxYxqhLgDUeccb7xEtqgE9ojlYrzYTDlTeMQk/wtZC', '$2y$10$7FDZmXIX3iUL/6uTPcV7ie49mUdO75MwYtVm3RIwqLjmcr1wkprBG', '017123456789', 'Dhaka, 1200', '00-01-01'),
(6, '', '', '', '$2y$10$o1em5K4IylXLLeFLkACuseQnu73nIe8oNl6Se5s5zdcP2gHTqYBZO', '$2y$10$8qVvlc8dzP1TWaonOpyfBeUFVq8CsVDwoKNMfhoH18ViXJlMfEoFu', '', '', '70-01-01'),
(7, 'rahi', 'Rahi Bulbul', 'rahi8615@gmail.com', '1234', '1234', '017111111100', 'Dhaka, 1200', '1111-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `repassword` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `username`, `fullname`, `email`, `password`, `repassword`, `phone`, `address`, `dob`) VALUES
(1, 'test', 'test', 'test@gmail.com', '1234', '1234', '1234', 'Dhaka, 1200', '00-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `userid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `repassword` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`userid`, `username`, `fullname`, `email`, `password`, `repassword`, `phone`, `address`, `dob`) VALUES
(1, 'test', 'test', 'test@gmail.com', '1234', '1234', '1234', 'Dhaka, 1200', '00-11-06'),
(2, 'rahi', 'Rahi Bulbul', 'rahi8615@gmail.com', '$2y$10$3iC47qfCF/fCrajtQ0ISQOh1oZYGEfkzbCXjTHzfuIQmrmpo4gJ/.', '$2y$10$MUmzJ8AJU.Y.i8cynrkkiefYemGZd8DQoh5UHi6EaXw7B/ZWClc7m', '017511', 'Dhaka, 1200', '00-11-06'),
(3, 'test2', 'test', 'test@gmail.com', '1234', '1234', '011', 'Test Address', ''),
(4, 'tawsef', 'Tawseful hasan', 'tawsef567@gmail.com', '1234', '1234', '01521114099', 'Dhaka, 1200', '11-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `userid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `repassword` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`userid`, `username`, `fullname`, `email`, `password`, `repassword`, `phone`, `address`, `dob`) VALUES
(1, 'test', 'test', 'test@gmail.com', 'test', 'test', '1234', 'Test Address', '00-11-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `userid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
