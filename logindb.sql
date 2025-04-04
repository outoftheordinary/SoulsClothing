-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2025 at 01:06 AM
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
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `collection` text NOT NULL,
  `item` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartitems`
--

INSERT INTO `cartitems` (`id`, `username`, `collection`, `item`, `size`, `color`) VALUES
(1, 'maryChalice', 'stranded', 'Stranded Sweatshirt', 'xl', ''),
(2, 'VixenMaya', 'onepiece', 'Chopper T-shirt', 'xs', ''),
(3, 'maryChalice', 'eaten', 'Eaten Beanie', 's', '');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, 'maryChalice', 'ecilahCyram'),
(2, 'VixenMaya', 'p455w0rd'),
(3, 'eyYOO', 'MYPASSWORDISSOSECUREEEE'),
(4, 'gottem', 'lookAtMyUserName'),
(5, 'bayanas', 'oopsIMeantToTypeBanana1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
