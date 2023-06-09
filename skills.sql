-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 02:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills_details`
--

CREATE TABLE `skills_details` (
  `SKILLS_ID` int(10) UNSIGNED NOT NULL,
  `SKILLS` text NOT NULL,
  `TOOLS` text NOT NULL,
  `TECHNOLOGY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills_details`
--

INSERT INTO `skills_details` (`SKILLS_ID`, `SKILLS`, `TOOLS`, `TECHNOLOGY`) VALUES
(1, 'Wed design and development', 'HTML,CSS,PHP,JAVASCRIPT', 'HTML5'),
(2, 'Application development', 'PYTHON,JAVA', 'new java version');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills_details`
--
ALTER TABLE `skills_details`
  ADD PRIMARY KEY (`SKILLS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
