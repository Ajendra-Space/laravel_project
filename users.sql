-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 07:03 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `contact` int(10) DEFAULT NULL,
  `gender` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `gender`, `address`, `created_at`, `updated_at`) VALUES
(1, 'text', 'text@gmail.com', '$2y$12$3guDfCm267VU19M/nLMZF./EIURx1uFvahyu41fnD5X9/MsG3NXgW', 0, 'option1', 'text', '2024-10-11 21:11:08', '2024-10-11 21:11:08'),
(3, 'text', 'tefdxt@gmail.com', '$2y$12$SBqbz3KAl./4wPktReHzteKAMIpXXQfONsvwSwd4O5/GzFXLTzUbm', 1230123012, 'option1', 'text', '2024-10-11 21:20:21', '2024-10-11 21:20:21'),
(4, 'bhanu', 'bhanu@gmail.com', '$2y$12$vJPvNdYta4SRj3pA7lBUhe3bLQDkKl3LESwbMO8PjNzGI/4LX1/oe', 1471471470, 'option1', 'test', '2024-10-11 23:12:41', '2024-10-11 23:12:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
