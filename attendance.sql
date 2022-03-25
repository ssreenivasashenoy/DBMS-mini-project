-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 02:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `A_NAME` varchar(255) NOT NULL,
  `A_PASS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_NAME`, `A_PASS`) VALUES
(1, 'test', 'test'),
(2, 'test1', 'test1'),
(3, 'admin', 'admin'),
(4, 'new', 'new'),
(5, 'abcd@gmail.com', '1234'),
(6, 'student', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `AT_ID` int(11) NOT NULL,
  `S_ID` varchar(255) DEFAULT NULL,
  `ATTEND` int(11) DEFAULT NULL,
  `ST_ID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`AT_ID`, `S_ID`, `ATTEND`, `ST_ID`) VALUES
(1, 'CS001', 10, 'ST001'),
(10, 'CS002', 2, 'ST001'),
(11, 'EC001', 2, 'ST001'),
(12, 'ME001', 1, 'ST001'),
(13, 'IS001', 1, 'ST001'),
(14, 'EC003', 1, 'ST001');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `B_ID` varchar(255) NOT NULL,
  `B_NAME` varchar(255) NOT NULL,
  `SEATS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`B_ID`, `B_NAME`, `SEATS`) VALUES
('1', 'COMPUTER SCIENCE', 0),
('2', 'ELECTRONICS AND COMMUNICATION', 0),
('3', 'INFORMATION AND SCIENCE', 0),
('4', 'MECHANICAL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `L_ID` int(11) NOT NULL,
  `S_ID` varchar(255) DEFAULT NULL,
  `DAYS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`L_ID`, `S_ID`, `DAYS`) VALUES
(1, 'CS001', 8),
(2, 'CS002', 3),
(3, 'CS003', 3),
(4, 'ME002', 2),
(5, 'EC002', 2),
(6, 'EC001', 1),
(7, 'EC003', 1),
(8, 'IS001', 1),
(9, 'ME001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ST_ID` varchar(11) NOT NULL,
  `ST_NAME` varchar(255) DEFAULT NULL,
  `B_ID` varchar(255) DEFAULT NULL,
  `ST_ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ST_ID`, `ST_NAME`, `B_ID`, `ST_ADDRESS`) VALUES
('ST001', 'ABC', '1', 'MANGALORE'),
('ST002', 'XYZ', '2', 'MANGALORE'),
('ST003', 'PQR', '3', 'MANGALORE'),
('ST004', 'EFG', '4', 'MANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_ID` varchar(255) NOT NULL,
  `S_NAME` varchar(255) DEFAULT NULL,
  `B_ID` varchar(255) DEFAULT NULL,
  `S_ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_ID`, `S_NAME`, `B_ID`, `S_ADDRESS`) VALUES
('CS001', 'ABC', '1', 'MANGALORE'),
('CS002', 'DEF', '1', 'MANGALORE'),
('CS003', 'GHI', '1', 'MANGALORE'),
('EC001', 'JKL', '2', 'MANGALORE'),
('EC002', 'MNO', '2', 'MANGALORE'),
('EC003', 'PQR', '2', 'MANGALORE'),
('IS001', 'STU', '3', 'MANGALORE'),
('ME001', 'VWX', '4', 'MANGALORE'),
('ME002', 'YZ', '4', 'MANGALORE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `attend`
--
ALTER TABLE `attend`
  ADD PRIMARY KEY (`AT_ID`),
  ADD KEY `S_ID` (`S_ID`),
  ADD KEY `ST_ID` (`ST_ID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`L_ID`),
  ADD KEY `S_ID` (`S_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ST_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attend`
--
ALTER TABLE `attend`
  MODIFY `AT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `L_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attend`
--
ALTER TABLE `attend`
  ADD CONSTRAINT `attend_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `attend_ibfk_2` FOREIGN KEY (`ST_ID`) REFERENCES `staff` (`ST_ID`) ON DELETE CASCADE;

--
-- Constraints for table `leave`
--
ALTER TABLE `leave`
  ADD CONSTRAINT `leave_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `branch` (`B_ID`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `branch` (`B_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
