-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:45 AM
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
-- Database: `skillscan360`
--

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cellphone` varchar(255) NOT NULL,
  `field_of_study` varchar(255) NOT NULL,
  `profile_pic` blob NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `start_time` datetime NOT NULL,
  `finish_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`id`, `name`, `surname`, `location`, `email`, `cellphone`, `field_of_study`, `profile_pic`, `password`, `created_at`, `start_time`, `finish_time`) VALUES
(8, 'Khauhelo', 'Sam', 'Midrand', 'support@k-telsolutions.co.za', '0780592019', 'Computer Science', '', '$2y$10$2eGaSkGG8NrTBQDRNrMWBe0SBcKG1/zP9X4jVkDbwJxdwQwPkFumy', '2024-05-07 08:48:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Lukes', 'Ndebele', 'Midrand', 'luke@k-telsolutions.co.za', '0713957384', 'Business Management', '', '$2y$10$5F0dX8AeOVh0OGqj7mzAbeR04xxo9ux828QQx9yyE7G6QhX4K1YQ.', '2024-05-07 09:24:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Lilians', 'Tumelo', 'Thembisa', 'lilia@ktel.co.za', '0780320074', 'Business Management', '', '$2y$10$tdvMJNmwpdUUZSIhM66cTupHo8eJrAuJ7PEOecg0ksN9OpYD0ZAxS', '2024-05-08 09:17:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersignup`
--
ALTER TABLE `usersignup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
