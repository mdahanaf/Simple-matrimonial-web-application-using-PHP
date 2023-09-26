-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 10:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahlia`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `birth_year` int(11) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `education` varchar(200) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `username`, `full_name`, `district`, `birth_year`, `blood_group`, `education`, `gender`) VALUES
(1, 'ahanaf', 'Md. Ahanaf Hossain Shahol Khan', 'Barisal', 2002, 'AB+', 'Madrasa', 'Male'),
(2, 'rafiz', 'M Rafiz Uddin', 'Dhaka', 2001, 'A+', 'Madrasa', 'male'),
(3, 'nafso', 'Nafso Kho Finland', 'Khulna', 2009, 'A+', 'General', 'Male'),
(4, 'nafisa', 'Nafisa Nusu', 'Barisal', 1999, 'O-', 'Madrasa', 'Female'),
(5, 'sumaiya', 'Sumaiya Rahman', 'Sylhet', 2005, 'O-', 'Madrasa', 'Female'),
(6, 'saiful', 'Saiful Islam Saif', 'Barisal', 1995, 'O+', 'General', 'Male'),
(7, 'israt', 'Mst. Israt Jahan', 'Dhaka', 2000, 'B-', 'Madrasa', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `password`) VALUES
(1, 'ahanaf', '1234'),
(2, 'rafiz', '6789'),
(3, 'nafso', 'naf'),
(5, 'nafisa', 'nafi23'),
(6, 'sumaiya', 'sumu'),
(7, 'saiful', 'saif'),
(10, 'israt', 'isau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
