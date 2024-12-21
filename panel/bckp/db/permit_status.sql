-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2024 at 10:50 PM
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
-- Table structure for table `permit_status`
--

CREATE TABLE `permit_status` (
  `id` int(11) NOT NULL,
  `permit_id` varchar(150) DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text DEFAULT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description` text NOT NULL,
  `dateTimeCreated` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permit_status`
--

INSERT INTO `permit_status` (`id`, `permit_id`, `user_id`, `status`, `items`, `description`, `dateTimeCreated`) VALUES
(35, 'CNT-P-301015-000001', 'user1', 'in progress', '[\"\\u062a\\u062c\\u0647\\u06cc\\u0632\\u0627\\u062a \\u062d\\u0641\\u0627\\u0638\\u062a \\u0641\\u0631\\u062f\\u06cc\"]', 'asda', '2024-09-03 10:21:54'),
(36, 'CNT-P-301015-000001', 'owner', 'Accept', '[\"\\u0686\\u06a9 \\u0644\\u06cc\\u0633\\u062a \\u0639\\u0645\\u0644\\u06cc\\u0627\\u062a \\u0627\\u0633\\u06a9\\u0644\\u062a \\u062a\\u0631\\u0627\\u0632 \\u0645\\u0631\\u0628\\u0648\\u0637\\u0647\",\"\\u0646\\u0642\\u0634\\u0647 \\u0647\\u0627\\u06cc \\u0634\\u0627\\u067e \\u0628\\u0631\\u0627\\u0633\\u0627\\u0633 \\u0648\\u06cc\\u0631\\u0627\\u06cc\\u0634 \\u06f4 \\u067e\\u06cc\\u0648\\u0633\\u062a \\u06f6 \\u0622\\u06cc\\u06cc\\u0646 \\u0646\\u0627\\u0645\\u0647 \\u06f2\\u06f8\\u06f0\\u06f0\",\"\\u062f\\u0645\\u0627 : \\u06f3\\u06f7 \\u062f\\u0631\\u062c\\u0647\",\"\\u062a\\u062c\\u0647\\u06cc\\u0632\\u0627\\u062a \\u062d\\u0641\\u0627\\u0638\\u062a \\u0641\\u0631\\u062f\\u06cc\"]', '', '2024-09-03 10:29:10'),
(37, 'ESK-P-301015-001000', 'user2', 'in progress', '[\"\\u0686\\u06a9 \\u0644\\u06cc\\u0633\\u062a \\u0639\\u0645\\u0644\\u06cc\\u0627\\u062a \\u0627\\u0633\\u06a9\\u0644\\u062a \\u062a\\u0631\\u0627\\u0632 \\u0645\\u0631\\u0628\\u0648\\u0637\\u0647\",\"\\u0646\\u0642\\u0634\\u0647 \\u0647\\u0627\\u06cc \\u0634\\u0627\\u067e \\u0628\\u0631\\u0627\\u0633\\u0627\\u0633 \\u0648\\u06cc\\u0631\\u0627\\u06cc\\u0634 \\u06f4 \\u067e\\u06cc\\u0648\\u0633\\u062a \\u06f6 \\u0622\\u06cc\\u06cc\\u0646 \\u0646\\u0627\\u0645\\u0647 \\u06f2\\u06f8\\u06f0\\u06f0\",\"\\u0648\\u0627\\u0644 \\u067e\\u0633\\u062a\",\"\\u0646\\u0627\\u0648\\u062f\\u0627\\u0646\\u06cc\",\"\\u0633\\u0646\\u06af \\u0641\\u0631\\u0632\",\"\\u062f\\u0645\\u0627 : \\u06f3\\u06f7 \\u062f\\u0631\\u062c\\u0647\",\"\\u0648\\u0636\\u0639\\u06cc\\u062a \\u062c\\u0648\\u06cc : \\u0622\\u0641\\u062a\\u0627\\u0628\\u06cc\",\"\\u0633\\u0631\\u0639\\u062a \\u0628\\u0627\\u062f : 14KM\\/H\",\"\\u0627\\u06cc\\u0645\\u0646\\u06cc \\u0645\\u0633\\u06cc\\u0631 \\u062a\\u0631\\u062f\\u062f\",\"\\u062d\\u0641\\u0627\\u0638 \\u06af\\u0630\\u0627\\u0631\\u06cc \\u0645\\u0646\\u0627\\u0637\\u0642 \\u067e\\u0631\\u062a\\u06af\\u0627\\u0647\\u06cc\"]', 'asdasdasdasdasdas', '2024-09-03 13:54:51'),
(39, 'ESK-P-301015-001000', 'owner', 'Accept', '[\"\\u062f\\u0631\\u06cc\\u0644\",\"\\u0633\\u0646\\u06af \\u0641\\u0631\\u0632\"]', '', '2024-09-03 16:28:42'),
(40, 'ESK-P-301015-001001', 'user2', 'in progress', '[\"\\u0686\\u06a9 \\u0644\\u06cc\\u0633\\u062a \\u0639\\u0645\\u0644\\u06cc\\u0627\\u062a \\u0627\\u0633\\u06a9\\u0644\\u062a \\u062a\\u0631\\u0627\\u0632 \\u0645\\u0631\\u0628\\u0648\\u0637\\u0647\",\"\\u0646\\u0642\\u0634\\u0647 \\u0647\\u0627\\u06cc \\u0634\\u0627\\u067e \\u0628\\u0631\\u0627\\u0633\\u0627\\u0633 \\u0648\\u06cc\\u0631\\u0627\\u06cc\\u0634 \\u06f4 \\u067e\\u06cc\\u0648\\u0633\\u062a \\u06f6 \\u0622\\u06cc\\u06cc\\u0646 \\u0646\\u0627\\u0645\\u0647 \\u06f2\\u06f8\\u06f0\\u06f0\"]', 'asdas', '2024-09-03 16:30:24'),
(42, 'ESK-P-301015-001002', 'user1', 'in progress', '[\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\"]', 'adasdada', '2024-09-03 18:43:15'),
(43, 'ESK-P-301015-001002', 'user2', 'in progress', '[\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\"]', 'qweqweq', '2024-09-03 19:17:20'),
(44, 'ESK-P-301015-001002', 'owner', 'Accept', '[\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\"]', 'asdasd', '2024-09-03 19:20:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permit_status`
--
ALTER TABLE `permit_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permit_status`
--
ALTER TABLE `permit_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
