-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 09:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vroomvroombids`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `nume` varchar(64) NOT NULL,
  `prenume` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `data_nastere` date NOT NULL,
  `username` varchar(32) NOT NULL,
  `parola` varchar(32) NOT NULL,
  `profile_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nume`, `prenume`, `email`, `data_nastere`, `username`, `parola`, `profile_pic`) VALUES
(1, 'Aleexandru', 'Gheorghe', 'chunkylapp@protonmail.com', '2002-04-17', 'chunkylapp', '123123123', 'chunkylapp.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `year` int(16) NOT NULL,
  `mileage` int(32) NOT NULL,
  `fuel_type` varchar(250) NOT NULL,
  `cubic_inches` int(32) NOT NULL,
  `transmission` varchar(320) NOT NULL,
  `horsepower` int(32) NOT NULL,
  `bid_price` int(255) NOT NULL,
  `reserve` int(255) NOT NULL,
  `bid_id` int(255) NOT NULL,
  `ending_time` datetime(6) NOT NULL,
  `color` text NOT NULL,
  `vin` int(64) NOT NULL,
  `location_country` text NOT NULL,
  `location_city` text NOT NULL,
  `location_state` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `user_id`, `make`, `model`, `year`, `mileage`, `fuel_type`, `cubic_inches`, `transmission`, `horsepower`, `bid_price`, `reserve`, `bid_id`, `ending_time`, `color`, `vin`, `location_country`, `location_city`, `location_state`, `description`) VALUES
(2, 1, 'Audi', 'R8', 2021, 5, 'Gas', 318, 'Automatic', 602, 100000, 210000, 1, '2021-02-16 14:11:13.000000', 'Yellow', 1234151525, 'United States', 'San Francisco', 'California', 'Audi R8 performance. Brand new, low mileage, clean title.');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_pics`
--

CREATE TABLE `vehicle_pics` (
  `id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_pics`
--
ALTER TABLE `vehicle_pics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_pics`
--
ALTER TABLE `vehicle_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
