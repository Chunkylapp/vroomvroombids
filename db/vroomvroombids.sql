-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 06:16 AM
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
(1, 'Alexandru', 'Gheorghe', 'chunkylapp@protonmail.com', '2002-04-17', 'chunkylapp', '123123123', 'chunkylapp.jpg'),
(2, 'Drehuta', 'Andreea', 'andreea.dre02@gmail.com', '2001-11-30', 'PandiChan', '123123123', 'PandiChan.jpg'),
(3, 'Marcel', 'Pipescu', 'tccz658@gmail.com', '2021-02-16', 'MarcelPipa123', '123123123', 'MarcelPipa123.jpg'),
(4, 'Test', 'Localhost', 'alexandrugheorghe@localhost', '2021-02-11', 'testlocalhost', '123123123', 'testlocalhost.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_pics`
--

CREATE TABLE `vehicle_pics` (
  `id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `is_first` int(32) NOT NULL,
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
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_pics`
--
ALTER TABLE `vehicle_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
