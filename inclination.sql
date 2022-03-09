-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2022 at 06:23 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DB-Inclination`
--

-- --------------------------------------------------------

--
-- Table structure for table `solar_panel_inclination_data`
--

CREATE TABLE `solar_panel_inclination_data` (
  `sl.no` int NOT NULL,
  `solar_panel_id` int NOT NULL,
  `solar_panel_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `panel_inclination_angle_1` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `panel_inclination_angle_2` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `updater_empl_id` varchar(11) NOT NULL,
  `time` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `solar_panel_inclination_data`
--

INSERT INTO `solar_panel_inclination_data` (`sl.no`, `solar_panel_id`, `solar_panel_name`, `panel_inclination_angle_1`, `panel_inclination_angle_2`, `updater_empl_id`, `time`, `location`) VALUES
(1, 3, 'Solar Panel 1', '10.0', '88.5', '1', '2022-03-08 04:38', 'Banglaore 1'),
(2, 6, 'Solar Panel 1', '10.0', '88.5', '1', '2022-03-08 05:18', 'Banglaore 1'),
(3, 6, 'Solar Panel 1', '10.0', '88.5', '1', '2022-03-08 06:25', 'Banglaore 1'),
(4, 19, 'Solar Panel 1', '10.0', '88.5', '1', '2022-03-08 06:37', 'Banglaore 1'),
(5, 23, 'Solar Panel 1', '10.0', '88.5', '1', '2022-03-09 10:38', 'Banglaore 1');

-- --------------------------------------------------------

--
-- Table structure for table `solar_panel_system_information`
--

CREATE TABLE `solar_panel_system_information` (
  `solar_panel_id` int NOT NULL,
  `solar_panel_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `installation_address` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` varchar(256) NOT NULL,
  `installation_angle_1` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `installation_angle_2` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_of_visits` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `solar_panel_system_information`
--

INSERT INTO `solar_panel_system_information` (`solar_panel_id`, `solar_panel_name`, `installation_address`, `time`, `installation_angle_1`, `installation_angle_2`, `no_of_visits`) VALUES
(1, 'Solar panel 1', 'Bangalore 1 ', '2022-03-08 014:58', '22.5', '50.6', 0),
(2, 'Solar panel 2', 'Mysore 1 ', '2022-03-08 014:58', '28.5', '45.6', 0),
(3, 'Solar panel 3', 'mangalore ', '2022-03-08 014:58', '58.5', '25.6', 1),
(5, 'Solar panel 1', 'Mysore', '2022-03-08 04:48', '22.5', '22.5', 0),
(8, 'Solar panel 1', 'Mysore', '2022-03-08 05:14', '22.5', '22.5', 0),
(9, 'Solar panel 1', 'Mysore', '2022-03-08 05:17', '22.5', '22.5', 1),
(10, 'solar panel 22', 'Bidar', '2022-03-08 05:31', '22', '55', 0),
(13, 'solar panel 22', 'Bidar', '2022-03-08 05:31', '22', '55', 0),
(16, '222', '22222', '2022-03-08 05:50', '2222', '2222', 0),
(17, 'panel 2', 'Bidar11', '2022-03-08 06:24', '22', '55', 0),
(18, 'panel 2222', '222222', '2022-03-08 06:31', '222222', '2222222', 0),
(19, '11', '11', '2022-03-08 06:36', '11', '11', 1),
(20, '77', '77', '2022-03-08 06:40', '77', '77', 0),
(21, 'pp', 'pp', '2022-03-08 06:42', 'pp', 'pp', 0),
(22, 'kk', 'kk', '2022-03-08 06:43', 'kk', 'kk', 0),
(23, 'fdfdfdf', 'fdfsff', '2022-03-09 10:35', 'dfdff', 'fdfdff', 1),
(24, 'fdfdfdf', 'fdfsff', '2022-03-09 10:39', 'dfdff', 'fdfdff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `sl.no` int NOT NULL,
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `empl_id` int NOT NULL DEFAULT '0',
  `password` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`sl.no`, `id`, `name`, `mobile`, `address`, `empl_id`, `password`, `date`) VALUES
(1, 1, 'Druva', '8792422947', 'Netiapps', 1, 'ddd', '2022-03-08'),
(2, 2, 'Shashi', '8792422948', 'Netiapps', 2, 'shahsi2123', '2022-03-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solar_panel_inclination_data`
--
ALTER TABLE `solar_panel_inclination_data`
  ADD PRIMARY KEY (`sl.no`);

--
-- Indexes for table `solar_panel_system_information`
--
ALTER TABLE `solar_panel_system_information`
  ADD PRIMARY KEY (`solar_panel_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`sl.no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solar_panel_inclination_data`
--
ALTER TABLE `solar_panel_inclination_data`
  MODIFY `sl.no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `solar_panel_system_information`
--
ALTER TABLE `solar_panel_system_information`
  MODIFY `solar_panel_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `sl.no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
