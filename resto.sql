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
-- Table structure for table `resto`
--

CREATE TABLE `resto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resto`
--

INSERT INTO `resto` (`id`, `name`, `email`, `gender`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Sam', 'sam@gmail.com', '', 'test', NULL, NULL),
(2, 'sam', 'sam@gmail.com', 'M', 'text', NULL, NULL),
(3, 'text', 'text@gmail.com', 'option1', 'text', '2024-10-11 08:53:04', '2024-10-11 08:53:04'),
(4, 'text2', 'text2@gmail.com', 'option1', 'text', '2024-10-11 08:58:13', '2024-10-11 08:58:13'),
(5, 'text12 dsg', 'text1@gmail.com', NULL, 'text', '2024-10-11 08:58:38', '2024-10-11 23:02:17'),
(12, 'bhanu', 'bhanu@gmail.com', 'option1', 'text', '2024-10-11 23:10:02', '2024-10-11 23:10:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resto`
--
ALTER TABLE `resto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
