-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 10:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name(title)` varchar(60) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `publication` varchar(100) NOT NULL,
  `mrp` decimal(6,2) NOT NULL,
  `issbn_number` int(20) NOT NULL,
  `language` varchar(15) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `release_date` varchar(20) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name(title)`, `writer`, `publication`, `mrp`, `issbn_number`, `language`, `catagory`, `image`, `release_date`, `quantity`) VALUES
(1, 'Higher Cryptogams', 'Prof. Saiful Islam', 'Kabir Publication', '1000.58', 9874, 'Bangla', 'Research', '', 'November 2001', 10),
(2, 'Molecular Genetics', 'Prof. Yearul Islam', 'Hasan Publication', '1680.58', 9454, 'Bangla', 'Research', '', 'November 2011', 1),
(5, 'Molecular Genetics', 'Prof. Yearul Islam', 'Hasan Publication', '1680.58', 9054, 'Bangla', 'Research', '', 'November 2011', 1),
(6, 'Plant Anatomy', 'Prof. Faisal Khan', 'Khan Publication', '1058.58', 4584, 'Bangla', 'Research', '', 'January 2002', 6),
(7, 'Plant Embriology', 'Prof. Saiful Islam', 'Kabir Publication', '1780.58', 6571, 'Bangla', 'Research', '', 'February 2004', 7),
(8, 'Biotechnology', 'Prof. Shifa Akter', 'Kabir Publication', '100.58', 9873, 'Bangla', 'Research', '', 'November 2001', 3),
(9, 'Agronomy', 'Prof. Kowshar Bhai', 'Kabir Publication', '2340.58', 7563, 'Bangla', 'Research', '', 'November 2001', 0),
(10, 'Horticulture', 'Prof. Ruma AKter', 'Kabir Publication', '1300.58', 6547, 'Bangla', 'Research', '', 'April 2021', 20),
(11, 'Bio-diversity', 'Dr. Al-Amin', 'Kabir Publication', '400.58', 1452, 'Bangla', 'Research', '', 'March 2010', 10),
(12, 'Limnoculture', 'Prof. Imran Hossain', 'Kabir Publication', '56.59', 6987, 'Bangla', 'Research', '', 'November 2001', 5),
(13, 'Tissue Culture', 'Dr. MAhbubur Rahman', 'Kabir Publication', '609.69', 6969, 'Bangla', 'Research', '', 'November 2001', 6),
(14, 'Genetics', 'Prof. Moazzem Hossain', 'Khan Publication', '470.57', 4242, 'Bangla', 'Research', '', 'November 2001', 7),
(15, 'Biostats', 'Prof. Maruf Hossain', 'Kabir Publication', '325.80', 1204, 'Bangla', 'math', '', 'April 2021', 8),
(16, 'Polymorphology', 'Prof. Mainul Islam', 'Hasan Publication', '130.85', 9574, 'Bangla', 'Research', '', 'November 2001', 9),
(17, 'Agriculture', 'Dr. Noor Muhammad', 'Kabir Publication', '360.51', 3240, 'Bangla', 'agriculture', '', 'November 2001', 12),
(18, 'Plant History', 'Prof. Osman Vai', 'Khan Publication', '786.52', 1257, 'Bangla', 'Research', '', 'February 2004', 22),
(21, 'Molecular Genetics', 'Prof. Yearul Islam', 'Hasan Publication', '1680.58', 9050, 'Bangla', 'Research', '', 'November 2011', 1),
(24, 'Molecular Genetics', 'Prof. Yearul Islam', 'Hasan Publication', '1680.58', 5050, 'Bangla', 'Research', '', 'November 2011', 1),
(25, 'Plant Anatomy', 'Prof. Faisal Khan', 'Khan Publication', '1058.58', 4580, 'Bangla', 'Research', '', 'January 2002', 6),
(28, 'Molecular Genetics', 'Prof. Yearul Islam', 'Hasan Publication', '1680.58', 5150, 'Bangla', 'Applied', '', 'November 2011', 1),
(31, 'Plant Anatomy', 'Prof. Faisal Khan', 'Khan Publication', '1058.58', 4586, 'Bangla', 'Applied', '', 'January 2002', 6),
(32, 'Plant Embriology', 'Prof. Saiful Islam', 'Kabir Publication', '1780.58', 6574, 'Bangla', 'Applied', '', 'February 2004', 7),
(33, 'Biotechnology', 'Prof. Shifa Akter', 'Kabir Publication', '100.58', 9973, 'Bangla', 'Applied', '', 'November 2001', 3),
(36, 'Plant Anatomy', 'Prof. Faisal Khan', 'Khan Publication', '1058.58', 45860, 'Bangla', 'Applied', '', 'January 2002', 6),
(39, 'Plant Anatomy', 'Prof. Faisal Khan', 'Khan Publication', '1058.58', 45862, 'Bangla', 'Applied', '', 'January 2002', 6),
(40, 'Plant Embriology', 'Prof. Saiful Islam', 'Kabir Publication', '1780.58', 65740, 'Bangla', 'Applied', '', 'February 2004', 7),
(44, 'CFC Cycle', 'Dr. Al-Amin', 'Kabir Publication', '480.55', 4569, 'Bangla', 'Applied', '', 'November 2001', 19),
(47, 'CFC Cycle', 'Dr. Al-Amin', 'Kabir Publication', '480.55', 45690, 'Bangla', 'Applied', '', 'November 2001', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `issbn_number` (`issbn_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
