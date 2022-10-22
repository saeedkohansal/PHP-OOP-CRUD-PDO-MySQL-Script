-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 02:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_list`
--

CREATE TABLE `cars_list` (
  `id` int(11) NOT NULL,
  `brand` varchar(16) NOT NULL,
  `model` varchar(16) NOT NULL,
  `type` varchar(16) NOT NULL,
  `engine` varchar(16) NOT NULL,
  `year` int(4) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars_list`
--

INSERT INTO `cars_list` (`id`, `brand`, `model`, `type`, `engine`, `year`, `added`, `updated`) VALUES
(1, 'BMW', '1 Series', 'Roadster', 'Inline 4', 2020, '2022-09-10 14:39:05', '2022-09-10 22:50:58'),
(2, 'BMW', 'X5', 'Luxury Cars', 'Inline 6', 2019, '2022-09-10 14:40:37', '2022-09-10 22:50:56'),
(3, 'Tesla', 'Model S', 'Luxury Cars', 'Electric', 2021, '2022-09-10 14:57:09', '2022-09-10 22:50:55'),
(4, 'Ferrari', 'Portofino', 'Sports Cars', 'V8', 2018, '2022-09-10 15:00:20', '2022-09-10 22:50:48'),
(5, 'Ferrari', '812 Superfast', 'Super Cars', 'V12', 2018, '2022-09-10 15:03:54', '2022-09-10 15:18:13'),
(6, 'Mercedes-Benz', 'A-Class', 'Compact Cars', 'Inline 4', 2018, '2022-09-10 15:05:09', '2022-09-10 15:18:14'),
(7, 'Mercedes-Benz', 'GLS', 'Luxury Cars', 'Inline 6', 2020, '2022-09-10 15:05:09', '2022-09-10 15:20:04'),
(8, 'Porsche', 'Taycan', 'Luxury Cars', 'Electric', 2020, '2022-09-10 15:14:46', '2022-09-10 15:18:16'),
(9, 'Porsche', 'Cayenne', 'Family Cars', 'V6', 2018, '2022-09-10 15:16:07', '2022-09-10 15:18:18'),
(10, 'Tesla', 'Cybertruck', 'Family Cars', 'Electric', 2021, '2022-09-10 15:18:24', '2022-09-10 15:19:16'),
(11, 'Bentley', 'Bentayga', 'Luxury Cars', 'V8', 2021, '2022-09-12 07:33:09', '2022-09-12 09:22:45'),
(12, 'Bentley', 'Mulsanne', 'Luxury Cars', 'V8', 2017, '2022-09-12 07:33:50', '2022-09-12 09:22:46'),
(13, 'Aston-Martin', 'DB11', 'Sports Cars', 'V12', 2017, '2022-09-12 07:35:12', '2022-09-12 09:22:48'),
(14, 'Aston-Martin', 'Rapide', 'Luxury Cars', 'V12', 2010, '2022-09-12 07:40:00', '2022-09-12 09:22:49'),
(15, 'Aston-Martin', 'Vanquish', 'Luxury Cars', 'V12', 2014, '2022-09-12 07:41:53', '2022-09-12 09:22:50'),
(16, 'Aston-Martin', 'Vulcan', 'Super Cars', 'V12', 2016, '2022-09-12 07:42:51', '2022-09-12 09:22:51'),
(17, 'Bugatti', 'Centodieci', 'Super Cars', 'W16', 2020, '2022-09-12 09:18:07', '2022-09-12 09:22:52'),
(18, 'Bugatti', 'Chiron', 'Super Cars', 'W16', 2018, '2022-09-12 09:19:37', '2022-09-12 09:22:53'),
(19, 'Bugatti', 'Divo', 'Super Cars', 'W16', 2019, '2022-09-12 09:20:36', '2022-09-12 09:22:54'),
(20, 'Lamborghini', 'Aventador', 'Sports Cars', 'V12', 2012, '2022-09-12 09:22:03', '2022-09-12 09:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_list`
--
ALTER TABLE `cars_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_list`
--
ALTER TABLE `cars_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
