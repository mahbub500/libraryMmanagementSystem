-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 10:46 AM
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
-- Database: `studentlibery`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(50) NOT NULL,
  `Reg_id` int(50) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Nid` bigint(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `BithDate` date NOT NULL,
  `Education` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `BloodGroup` varchar(5) NOT NULL,
  `Mobile` int(12) NOT NULL,
  `Adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Reg_id`, `FullName`, `FatherName`, `MotherName`, `Gender`, `Nid`, `email`, `BithDate`, `Education`, `image`, `BloodGroup`, `Mobile`, `Adress`) VALUES
(1, 1000, 'Mahbubur Rahman (Update)', 'Saleh Ahmed (update)', 'Nur Hasna (Update)', 2, 6004174006, 'mahbub@gmail.com', '1995-02-25', 'S.Sc,H.Sc', '', '1', 1829493782, 'Rampur bamni\r\n                    \r\n\r\n          \r\n'),
(2, 1000, 'Maruf', 'Saleh Ahmed', 'Nur Hasna n', 1, 3268609462, 'maruf@gmail.com', '2006-09-01', 'S.Sc,H.Sc', 'MEHIDE-001.jpg', '1', 2147483647, 'Rampur \r\n\r\n                    \r\n\r\n               '),
(3, 1000, 'Yarul Islam', 'Md. Rofique', 'Saleha Begum', 1, 3268609463, 'yarul@gmail.com', '1995-12-03', 'S.Sc,H.Sc,Honors,Masters', '0001.jpg', '2', 1515297025, 'Noakhali \r\n\r\n                    \r\n\r\n             '),
(4, 1, 'Siful Islam', 'Rohim', 'Syla begum', 1, 3268609464, 'sifulI@gmail.com', '1996-03-12', 'S.Sc,H.Sc,Honors', 'MEHIDE-001.jpg', '3', 1829493782, 'Noakhli '),
(6, 1, 'Fuhad', 'Abul khair', 'laily begum', 2, 3268609465, 'fuhad@gmail.com', '1996-02-24', 'S.Sc,H.Sc,Honors,Masters', '0001.jpg', '1', 1829493782, 'Bamni ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nid` (`Nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
