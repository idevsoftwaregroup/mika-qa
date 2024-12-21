-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2024 at 10:40 PM
-- Server version: 10.11.2-MariaDB-1
-- PHP Version: 8.1.12-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qualityassurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `fullname` text NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_position` int(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_created` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `phone_number`, `job_title`, `job_position`, `company`, `description`, `date_created`) VALUES
(1, 'contractor', 'حمیدرضا فروزش', '0010', '09029983102', 'رییس کارگاه', 3, 'گروه ساختمانی همپایه', 'سرپرست کارگاه مربوط به گروه ساختمانی همپایه', '2024-03-30 11:41:09'),
(2, 'user#1', 'کاربر شماره ۱', '0010', '۰۰۱۰', 'سرپرست واحد ابنیه و فیشینگ / سازه', 2, 'میکا', NULL, '2024-03-30 12:36:54'),
(3, 'user#2', 'کاربر شماره ۲', '0010', '۰۰۱۰', 'سرپرست واحد الکتریکال', 2, 'میکا', NULL, '2024-03-30 12:37:49'),
(4, 'user#3', 'کاربر شماره ۳', '0010', '۰۰۱۰', 'سرپرست واحد مکانیکال', 2, 'میکا', NULL, '2024-03-30 12:38:27'),
(5, 'user#4', 'کاربر شماره ۴', '0010', '۰۰۱۰', 'سرپرست HSE', 2, 'میکا', NULL, '2024-03-30 12:39:02'),
(6, 'user#5', 'کاربر شماره ۵', '0010', '۰۰۱۰', 'سرپرست واحد نقشه برداری', 2, 'میکا', NULL, '2024-03-30 12:39:43'),
(7, 'owner', 'کاربر سرپرست کارگاه', '0010', '۰۰۱۰', 'رییس کارگاه', 3, 'میکا', NULL, '2024-03-30 12:40:41'),
(9, 'idevsoftwaregroup', 'Arash Ataei', '0010', '09029983102', 'Developer and Manager of Software Dev. Team', 1, 'Mika Center Office', 'I am Arash Ataei', NULL),
(10, 'admin', 'Administrator', '1101', '09029983102', 'Developer and Manager of Software Dev. Team', 1, 'Mika Center Office', 'I am Arash Ataei', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
