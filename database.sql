-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 07:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `dreamcars`
--
-- --------------------------------------------------------
--
-- Table structure for table `admin`
--
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `admin`
--
INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'pradeep', 'password'),
(2, 'admin', 'admin'),
(3, 'admin1', 'admin1');
-- --------------------------------------------------------
--
-- Table structure for table `cars`
--
CREATE TABLE `cars` (
  `car_id` int(10) NOT NULL,
  `car_name` varchar(20) NOT NULL,
  `image` blob NOT NULL,
  `car_type` varchar(10) NOT NULL,
  `hire_cost` int(8) NOT NULL,
  `capacity` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `cars`
--
INSERT INTO `cars` (`car_id`, `car_name`, `image`, `car_type`, `hire_cost`, `capacity`, `status`) VALUES
(2, 'Scorpio/S5', 0x6262622e6a7067, 'Mahindra', 6449, 8, 'Available'),
(3, 'Xylo/D2', 0x6363632e706e67, 'Mahindra', 6999, 8, 'Available'),
(4, 'Duster/ RXZ', 0x6475737465722e706e67, 'Renault', 6899, 7, 'Available'),
(5, 'Logan/ 1.6 GLS', 0x6c6f67616e2e706e67, 'Renault', 3999, 5, 'Available'),
(6, 'Bolero/ZLX', 0x6161612e6a7067, 'Mahindra', 4999, 7, 'Available'),
(7, 'Kwid/RXL 0.8', 0x6b7769642e706e67, 'Renault', 4499, 5, 'Available'),
(8, 'Fortuner/ 2.4L 2X4 M', 0x666f7274756e65722e706e67, 'Toyota', 6799, 7, 'Available'),
(9, 'Innova Crysta', 0x696e6e6f76612e706e67, 'Toyota', 4799, 8, 'Available'),
(10, 'Elantra', 0x456c616e7472612e706e67, 'Hyundai', 5399, 5, 'Available'),
(11, 'Avanza ', 0x6176616e7a612e706e67, 'Toyota', 8999, 7, 'Available'),
(12, 'Creta / 1.4L VGT CRD', 0x63726574612e706e67, 'Hyundai', 6899, 5, 'Available'),
(13, 'i10 / D lite1086 cc', 0x6931302e706e67, 'Hyundai', 3999, 5, 'Available');
-- --------------------------------------------------------
--
-- Table structure for table `client`
--
CREATE TABLE `client` (
  `fname` varchar(30) NOT NULL,
  `client_id` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `car_id` int(10) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `mpesa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `client`
--
INSERT INTO `client` (`fname`, `client_id`, `id_no`, `gender`, `email`, `phone`, `location`, `car_id`, `status`, `mpesa`) VALUES
('Pradeep', 1, 1920, 'Male', 'pradeepkps19@gmail.com', '7845104680', 'Coimbatore', 0, 'Available', ''),
('Ramachandran', 2, 1001, 'Male', 'manirama218@gmail.com', '9875643210', 'Madurai', 5, 'Approved', '');
-- --------------------------------------------------------
--
-- Table structure for table `hire`
--
CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `message`
--
CREATE TABLE `message` (
  `message` text NOT NULL,
  `msg_id` int(11) NOT NULL,
  `client_id` varchar(10) NOT NULL,
  `time` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `message`
--
 
INSERT INTO `message` (`message`, `msg_id`, `client_id`, `time`, `status`) VALUES
('Hello admin!\r\n', 1, 'pradeepkps', '2019-10-06 16:09:06', 'Unread');
 
--
-- Indexes for dumped tables
--
 
--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);
 
--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);
--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);
--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);
--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 
