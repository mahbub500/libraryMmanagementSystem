-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 01:42 PM
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
(3, 1000, 'Yarul Islam', 'Md. Rofique', 'Saleha Begum', 1, 3268609463, 'yarul@gmail.com', '1995-12-03', 'S.Sc,H.Sc', 'Mehide.jpg', '2', 1515297025, 'Noakhali \r\n\r\n                    \r\n\r\n             '),
(4, 1, 'Siful Islam', 'Rohim', 'Syla begum', 1, 3268609464, 'sifulI@gmail.com', '1996-03-12', 'S.Sc,H.Sc,Honurs', 'Mehide.jpg', '8', 1829493782, 'Noakhli \r\n\r\n                    \r\n\r\n              '),
(6, 1, 'Fuhad', 'Abul khair', 'laily begum', 2, 3268609465, 'fuhad@gmail.com', '1996-02-24', 'S.Sc,H.Sc', 'Mehide.jpg', '1', 1829493782, 'Bamni \r\n\r\n                    \r\n\r\n                '),
(8, 1000, 'Rahil', 'Hosain', 'Fasia', 1, 3265648, 'mo@gmail.com', '2021-08-28', 'H.Sc,Honors', 'Mehide.jpg', '2', 145415, 'Rampur \r\n\r\n                    '),
(10, 0, 'Korim', 'Rohim', 'laily begum', 1, 326589675, 'korim@gmail.com', '2021-02-04', 'S.Sc,H.Sc', 'Mehide.jpg', '1', 1515297025, '                                         ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `is_admin`, `password`, `created_at`) VALUES
(2, 'admin', 1, '$2y$10$nslXrauHhZvbAAAnT8HZWOtmLw6doSiWwx.zJtpQmYztVRAwNRhWy', '2021-08-30 13:29:17'),
(3, 'rohim', 0, '$2y$10$.iZN.h5wYlJB.E7j1NgrguqpOT4Mc1vnLc6hvmtn/IA8cdGtIWvGu', '2021-08-30 14:12:23'),
(4, 'user', 0, '$2y$10$IX.aL4V7xaEL7iqvSxbrSussfrdA54Fwai/yoRXLFHMIrCrv/dnTy', '2021-08-30 15:54:31');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
