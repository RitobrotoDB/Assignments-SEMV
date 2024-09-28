-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 06:49 AM
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
-- Database: `assignment1_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_Id` int(5) NOT NULL,
  `Member_name` varchar(30) NOT NULL,
  `Member_address` varchar(50) DEFAULT NULL,
  `Acc_Open_Date` date DEFAULT NULL,
  `Membership_type` varchar(20) DEFAULT NULL,
  `Fees_paid` int(4) DEFAULT NULL,
  `max_books_allowed` int(2) DEFAULT NULL,
  `Penalty_amount` float(7,2) DEFAULT NULL
) ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_Id`, `Member_name`, `Member_address`, `Acc_Open_Date`, `Membership_type`, `Fees_paid`, `max_books_allowed`, `Penalty_amount`) VALUES
(1, 'Sayantan Sinha', 'Pune', '2010-12-01', 'Lifetime', 2000, 6, 5.00),
(2, 'Abhirup Sarkar', 'Kolkata', '2011-01-11', 'Annual', 1400, 3, 0.00),
(3, 'Ritesh Bhuniya', 'Gujarat', '2011-02-20', 'Quarterly', 350, 2, 100.00),
(4, 'Paresh sen', 'Tripura', '2011-03-21', 'Half Yearly', 700, 1, 200.00),
(5, 'Sohini Haldar', 'Birbhum', '2011-04-11', 'Lifetime', 2000, 6, 10.00),
(6, 'Suparna Biswas', 'Kolkata', '2011-04-12', 'Half Yearly', 700, 1, 0.00),
(7, 'Suranjana Basu', 'Purulia', '2011-06-30', 'Annual', 1400, 3, 50.00),
(8, 'Arpita Roy', 'Kolkata', '2011-07-11', 'Half Yearly', 700, 1, 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
