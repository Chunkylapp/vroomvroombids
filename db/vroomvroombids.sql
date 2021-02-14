-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 09:29 PM
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
(1, 'Aleexandru', 'Gheorghe', 'chunkylapp@protonmail.com', '2002-04-17', 'chunkylapp', '123123123', 'chunkylapp.jpeg'),
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

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `user_id`, `make`, `model`, `year`, `mileage`, `fuel_type`, `cubic_inches`, `transmission`, `horsepower`, `bid_price`, `reserve`, `bid_id`, `ending_time`, `color`, `vin`, `location_country`, `location_city`, `location_state`, `description`) VALUES
(1, 1, 'dodge', 'Viper', 2017, 1000, 'Gas', 238, 'Manual', 660, 100000, 100000, 1, '2021-02-28 00:00:00.000000', 'White', 1234567890, 'United States', 'San Francisco', 'California', 'White Viper ACR. Full carbon fibre. Clean title.'),
(2, 1, 'dodge', 'Challenger', 2020, 500, 'Gas', 328, 'Manual', 707, 0, 50000, 1, '2021-02-26 00:00:00.000000', 'Blue', 2147483647, 'United States', 'Sacramento', 'California', 'Black Challenger'),
(3, 2, 'ford', 'Mustang', 2010, 50000, 'Gas', 328, 'Automatic', 450, 5100, 5000, 2, '2021-02-27 00:00:00.000000', 'Red', 2147483647, 'United States', 'Los Angeles', 'California', 'Red Ford Mustang GT. Clean title. Low mileage.'),
(4, 2, 'audi', 'R8', 2020, 500, 'Gas', 400, 'Automatic', 650, 0, 95000, 2, '2021-02-26 00:00:00.000000', 'Black', 694373757, 'United States', 'New York City', 'New York', 'Metallic black Audi R8 V10 Plus. Clean title, barely driven.'),
(5, 2, 'ford', 'F-150', 2020, 5000, 'Gas', 400, 'Automatic', 720, 0, 70000, 2, '2021-03-31 00:00:00.000000', 'Red', 2147483647, 'United States', 'Austin', 'Texas', 'Red Ford F-150 Raptor. Tuned to 720, WHP this truck is an absolute beast. All options, clean title'),
(6, 2, 'lamborghini', 'Huracán', 2014, 45000, 'Gas', 400, 'Automatic', 640, 0, 140000, 2, '2021-02-18 00:00:00.000000', 'Blue', 2147483647, 'United States', 'Miami', 'Florida', 'Sky Blue Lamborghini Huracan. Clean title, driven only on the weekends. Kept in garage. Pristine paintjob, no scratches, no dents. Serviced only at Lamborghini dealerships.');

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
-- Dumping data for table `vehicle_pics`
--

INSERT INTO `vehicle_pics` (`id`, `ad_id`, `is_first`, `pic`) VALUES
(1, 1, 1, '0_0_1.jpg'),
(2, 1, 0, '0_1_2.jpg'),
(3, 1, 0, '0_2_3.jpg'),
(4, 1, 0, '0_3_4.jpg'),
(5, 2, 1, '0_0_s-l1600.jpg'),
(6, 2, 0, '0_1_s-l1602.jpg'),
(10, 3, 1, '3_0_s-454.jpg'),
(11, 3, 0, '3_1_s25235jpg.jpg'),
(12, 3, 0, '3_2_s63636jpg.jpg'),
(13, 4, 1, '4_0_457457.jpg'),
(14, 4, 0, '4_1_647457.jpg'),
(15, 4, 0, '4_2_678678.jpg'),
(16, 4, 0, '4_3_3453453.jpg'),
(17, 4, 0, '4_4_3453477.jpg'),
(18, 5, 1, '5_0_546456jpg.jpg'),
(19, 5, 0, '5_1_567567.jpg'),
(20, 5, 0, '5_2_45645645.jpg'),
(21, 6, 1, '6_0_43534535.jpg'),
(22, 6, 0, '6_1_67867959.jpg'),
(23, 6, 0, '6_2_89089089.jpg'),
(24, 6, 0, '6_3_123123123).jpg'),
(25, 6, 0, '6_4_123556677.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle_pics`
--
ALTER TABLE `vehicle_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
