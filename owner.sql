-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 11:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owner`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_order`
--

CREATE TABLE `form_order` (
  `id` int(200) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(30) NOT NULL,
  `seafood` varchar(255) NOT NULL,
  `steak` varchar(255) NOT NULL,
  `salad` varchar(255) NOT NULL,
  `drink` varchar(255) NOT NULL,
  `dessert` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_order`
--

INSERT INTO `form_order` (`id`, `date`, `name`, `number`, `seafood`, `steak`, `salad`, `drink`, `dessert`, `status`) VALUES
(4, '2021-11-04', 'Alya', '1A', 'Baked Scrod,1', '', 'Caesar Salad,3,House Salad,2', '', '', 'Selesai'),
(5, '2021-11-04', 'Edo', '15B', ',,,,Grilled Oyster,1,', ',,,,', 'Caesar Salad,2,,,,', ',,Juice,3,,', ',,,,', 'Selesai'),
(6, '2021-11-10', 'Gilang', '17A', 'Baked Scrod,1,,,,,', ',,,,', ',,,,', ',,,,Smoothie,2', ',,,,', 'Selesai'),
(7, '2021-11-11', 'Hani', '10B', ',,,,Grilled Oyster,3,', ',,,,', ',,,,', ',,Juice,2,,Smoothie,1', ',,,Fudge Sundae ,1,', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'PurpleRestaurant', '636b310ac909dca274b488c119d1e79c'),
(3, 'Edi', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_order`
--
ALTER TABLE `form_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_order`
--
ALTER TABLE `form_order`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
