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
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `id` int(20) NOT NULL,
  `name5` varchar(250) NOT NULL,
  `photo5` varchar(250) NOT NULL,
  `price5` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`id`, `name5`, `photo5`, `price5`) VALUES
(1, 'Daifuku', 'dessert_daifuku.jpg', '23k'),
(2, 'Fudge Cake', 'dessert_fudgecake.jpg', '36k'),
(3, 'Petite Treat', 'dessert_petitetreat.png', '26k'),
(4, 'Fudge Sundae', 'dessert_fudgesundae.png', '36k'),
(5, 'Sterusel Pie', 'dessert_steruselpie.png', '26k');

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `id` int(20) NOT NULL,
  `name4` varchar(250) NOT NULL,
  `photo4` varchar(250) NOT NULL,
  `price4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`id`, `name4`, `photo4`, `price4`) VALUES
(1, 'Coca Cola', 'drink_cocacola.png', '12k'),
(2, 'Immuniser', 'drink_immuniser.png', '14k'),
(3, 'Juice', 'drink_juice.png', '14k'),
(4, 'Pepsi', 'drink_pepsi.png', '14k'),
(5, 'Smoothie', 'drink_smoothie.jpg', '11k');

-- --------------------------------------------------------

--
-- Table structure for table `salad`
--

CREATE TABLE `salad` (
  `id` int(20) NOT NULL,
  `name3` varchar(250) NOT NULL,
  `photo3` varchar(250) NOT NULL,
  `price3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salad`
--

INSERT INTO `salad` (`id`, `name3`, `photo3`, `price3`) VALUES
(1, 'Caesar Salad', 'salad_caesar.png', '66k'),
(2, 'Chicken Salad', 'salad_chicken.png', '36k'),
(3, 'House Salad', 'salad_house.png', '43k'),
(4, 'Red Salad', 'salad_red.jpg', '28k'),
(5, 'Chicken Waldrof', '618380456a64d.jpg', '40k');

-- --------------------------------------------------------

--
-- Table structure for table `seafood`
--

CREATE TABLE `seafood` (
  `id` int(20) NOT NULL,
  `name1` varchar(250) NOT NULL,
  `photo1` varchar(250) NOT NULL,
  `price1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seafood`
--

INSERT INTO `seafood` (`id`, `name1`, `photo1`, `price1`) VALUES
(2, 'Baked Scrod', 'seafood_bakedscrod.jpg', '31k'),
(3, 'Fish And Chips', 'seafood_fishnchips.jpg', '57k'),
(4, 'Grilled Lobster Tail', '61828e8a9a84f.jpg', '142k'),
(8, 'Fresh Salmon', '61828f13da208.jpg', '44k'),
(11, 'Grilled Oyster', '61828e01ea197.jpg', '22k'),
(15, 'Crab With Garlic Butter', '61838014be3ef.jpg', '110k');

-- --------------------------------------------------------

--
-- Table structure for table `steak`
--

CREATE TABLE `steak` (
  `id` int(20) NOT NULL,
  `name2` varchar(250) NOT NULL,
  `photo2` varchar(250) NOT NULL,
  `price2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steak`
--

INSERT INTO `steak` (`id`, `name2`, `photo2`, `price2`) VALUES
(1, 'Mushroom Sirloin', 'steak_mushroomsirloin.jpg', '57k'),
(2, 'Prime Rib', 'steak_primerib.jpg', '72k'),
(3, 'Royal Sirloin', 'steak_royalsirloin.png', '115k'),
(4, 'Sliced Sirloin', 'steak_slicedsirloin.jpg', '86k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salad`
--
ALTER TABLE `salad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seafood`
--
ALTER TABLE `seafood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steak`
--
ALTER TABLE `steak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salad`
--
ALTER TABLE `salad`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seafood`
--
ALTER TABLE `seafood`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `steak`
--
ALTER TABLE `steak`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
