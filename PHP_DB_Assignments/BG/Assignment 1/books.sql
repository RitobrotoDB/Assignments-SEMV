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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_No` int(6) NOT NULL,
  `Book_Name` varchar(30) NOT NULL,
  `Author_Name` varchar(30) DEFAULT NULL,
  `Cost` float(7,2) DEFAULT NULL,
  `Category` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_No`, `Book_Name`, `Author_Name`, `Cost`, `Category`) VALUES
(101, 'Let Us C', 'Dennis Ritchie', 450.00, 'Others'),
(102, 'Oracle Complete-Ref', 'loni', 550.00, 'Database'),
(103, 'Visual Basic 10', 'bpb', 700.00, 'Others'),
(104, 'Mastering SQL', 'Loni', 450.00, 'Database'),
(105, 'Pl SQL Ref', 'Scott Urman', 750.00, 'Database'),
(106, 'UNIX', 'Sumitava Das', 300.00, 'System'),
(107, 'Optics', 'Ghatak', 600.00, 'Science'),
(108, 'Data Structers', 'G.S Balujia', 600.00, 'Others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
