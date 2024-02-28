-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 05:08 AM
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
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1709019069),
('m240227_073001_create_student_table_migration', 1709019072);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_class` varchar(100) NOT NULL,
  `max_marks_x` double NOT NULL,
  `obtained_marks_x` double NOT NULL,
  `max_marks_insubject_y` double NOT NULL,
  `obtained_marks_insubject_y` double NOT NULL,
  `x_normalized` double NOT NULL,
  `y_normalized` double NOT NULL,
  `index_formula` double NOT NULL,
  `other_weightage` double NOT NULL,
  `merit_index` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_class`, `max_marks_x`, `obtained_marks_x`, `max_marks_insubject_y`, `obtained_marks_insubject_y`, `x_normalized`, `y_normalized`, `index_formula`, `other_weightage`, `merit_index`) VALUES
(1, 'Shiv Kumar', 'B. Sc.', 1350, 981, 450, 0, 363.33, 0, 363.33, 10, 363.33),
(2, 'Arpit kumar', 'B.A.', 5400, 3600, 1800, 1400, 333.33, 388.89, 1111.11, 20, 1131.11),
(3, 'Rakesh Patel', '12 th', 500, 100, 100, 20, 500, 60, 620, 250, 870),
(4, 'Amit Sharma', 'B. Sc.', 500, 100, 250, 50, 200, 300, 800, 70, 870);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
