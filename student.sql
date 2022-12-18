-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2021 at 04:55 AM
-- Server version: 8.0.26
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `enr` int UNSIGNED DEFAULT NULL,
  `batch` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `userId` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `new_password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  UNIQUE KEY `enr` (`enr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `enr`, `batch`, `dob`, `email`, `contact_no`, `userId`, `new_password`) VALUES
('Aarushi Nair', 1, 'F7', '2001-11-03', 'aarushinair2001@gmail.com', '9711738311', 'Aaru0311', 'abc'),
('Ayushi Nigam', 2, 'F7', '2004-06-21', 'nigamayushi@gmail.com', '9834765843', 'abc', 'def'),
('Nipun Singh Rathore', 3, 'F7', '2003-03-12', 'abc@gmail.com', '9685747576', 'def', 'ghi'),
('Shivam Vasandani', 4, 'F7', '2002-06-23', 'def@gmail.com', '9845637486', 'ghi', 'jkl');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
