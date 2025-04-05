-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2025 at 01:41 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `verifyPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `name`, `username`, `password`, `verifyPassword`) VALUES
(1, 'souliana', 'souli', '1234', '1234'),
(2, 'souliana', 'souli', '1234', '1234'),
(3, 'souliana', 'souli', '1234', '1234'),
(4, 'souliana', 'souli', '1234', '1234'),
(5, 'souliana', 'souli', '1234', '1234'),
(6, 'maryChalice', 'maryChalice', 'ecilahCyram1', 'ecilahCyram1'),
(7, 'bingleBob', 'binglebobstein', 'binglebobstein', 'binglebobstein'),
(8, 'BlueBellington', 'Bluebellington', '12HectorsInAnApple', '12HectareesInAnApple');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`name`, `price`, `image_url`) VALUES
('Chopper T-shirt', 26, 'images/chopper_tshirt_front.png'),
('Eaten t-shirt', 20, 'images/eaten_tshirt_front.png'),
('Eaten Jeans', 26, 'images/eaten_jeans.png'),
('Eaten Beanie', 10, 'images/eaten_beanie.png'),
('Stranded Sweatshirt', 46, 'images/stranded_sweatshirt_front.png'),
('Yearn Sweater', 51, 'images/yearn_front.png');

-- --------------------------------------------------------

--
-- Table structure for table `itemsincart`
--

CREATE TABLE `itemsincart` (
  `username` text NOT NULL,
  `items` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itemsincart`
--

INSERT INTO `itemsincart` (`username`, `items`, `size`, `color`) VALUES
('maryChalice', 'Chopper T-shirt', 'xl', ''),
('maryChalice', 'Chopper T-shirt', 'xl', ''),
('<?php echo $username; ?>', 'Beanie', 'm', 'black'),
('guest', 'Beanie', 'm', 'black'),
('binglebobstein', 'Beanie', 'm', 'white'),
('binglebobstein', 'Beanie', 'l', 'white'),
('binglebobstein', 'Stranded Sweatshirt', 'm', 'white'),
('binglebobstein', 'Yearn Sweater', 'm', 'black'),
('binglebobstein', 'Stranded Sweatshirt', 's', 'white'),
('maryChalice', 'Eaten Jeans', 'm', 'black'),
('maryChalice', 'Chopper T-shirt', 's', 'white'),
('Bluebellington', 'Yearn Sweater', 's', 'white'),
('Bluebellington', 'Eaten Beanie', 'm', 'white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
