-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 10:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ROLL` varchar(10) DEFAULT NULL,
  `NAME` varchar(40) NOT NULL,
  `CITY` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ROLL`, `NAME`, `CITY`, `EMAIL`, `DOB`) VALUES
('R7', 'ALICE', 'PATNA', 'DEF@MAIL.COM', '2010-03-05'),
('R3', 'DOE', 'MUMBAI', 'CDE@MAIL.COM', '2002-12-06'),
('R1', 'JOE', 'CALCUTTA', 'ABC@MAIL.COM', '2024-08-07'),
('R2', 'JOHN', 'CALCUTTA', 'BCD@MAIL.COM', '2001-08-06'),
('R8', 'MERMAID', 'CALCUTTA', 'HIJ@MAIL.COM', '2011-03-28'),
('R5', 'RONIL', 'GURGAON', 'EFG@MAIL.COM', '2004-05-05'),
('R6', 'SHUBHAM', 'MUMBAI', 'FGH@MAIL.COM', '2008-09-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`NAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
