-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2024 at 07:54 AM
-- Server version: 8.0.39-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.18

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `pin` int NOT NULL,
  `dateTimeCreated` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pin`, `dateTimeCreated`, `username`) VALUES
(1, 1101, '2024-09-03', 'idevsoftwaregroup');

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `checklist_id` int NOT NULL,
  `projectname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contractor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discipline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permit_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checklistID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `crew` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_to_action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permit_credit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operation_description` text COLLATE utf8mb4_unicode_ci,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_name` text COLLATE utf8mb4_unicode_ci,
  `file_size` text COLLATE utf8mb4_unicode_ci,
  `file_data` text COLLATE utf8mb4_unicode_ci,
  `discipline_group` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklistItemsActions`
--

CREATE TABLE `checklistItemsActions` (
  `id` int NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionStatus` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permit_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `submitted_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklistItemsActions`
--


-- --------------------------------------------------------

--
-- Table structure for table `checklist_items`
--

CREATE TABLE `checklist_items` (
  `id` int NOT NULL,
  `discipline_id` int NOT NULL,
  `createdDateTime` text COLLATE utf8mb4_general_ci NOT NULL,
  `operation_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `review_criteria` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `control_method_tool` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `minimum_check_value` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `considerations` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `allowable_tolerance` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checklist_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `checklist_status`
--

CREATE TABLE `checklist_status` (
  `id` int NOT NULL,
  `user_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `checklist_item_id` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  `submitted_at` text COLLATE utf8mb4_general_ci NOT NULL,
  `permit_id` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplines`
--

CREATE TABLE `disciplines` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(1500) COLLATE utf8mb4_general_ci NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disciplines`
--


-- --------------------------------------------------------

--
-- Table structure for table `permitItems`
--

CREATE TABLE `permitItems` (
  `id` int NOT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `permit_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTimeCreated` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permitItemsSelection`
--

CREATE TABLE `permitItemsSelection` (
  `id` int NOT NULL,
  `lastActivity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documentations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workingMaterials` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tools` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `env` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discipline_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permitItemsSelection`
--



-- --------------------------------------------------------

--
-- Table structure for table `permitItemsSelectionDone`
--

CREATE TABLE `permitItemsSelectionDone` (
  `id` int NOT NULL,
  `discipline_id` text COLLATE utf8mb4_unicode_ci,
  `dateTimeCreated` text COLLATE utf8mb4_unicode_ci,
  `permit_id` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permitItemsSelectionDone`
--


-- --------------------------------------------------------

--
-- Table structure for table `permits`
--

CREATE TABLE `permits` (
  `id` int NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contractor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crew` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axis` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operation_description` text COLLATE utf8mb4_unicode_ci,
  `time_to_action` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permit_credit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permit_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` text COLLATE utf8mb4_unicode_ci,
  `checklistID` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci,
  `dateTimeCreated` text COLLATE utf8mb4_unicode_ci,
  `file_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline_group` text COLLATE utf8mb4_unicode_ci,
  `isIssued` text COLLATE utf8mb4_unicode_ci,
  `protection` text COLLATE utf8mb4_unicode_ci,
  `dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTimeDone` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permits`
--

-- --------------------------------------------------------

--
-- Table structure for table `permit_status`
--

CREATE TABLE `permit_status` (
  `id` int NOT NULL,
  `permit_id` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_general_ci,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `dateTimeCreated` text COLLATE utf8mb4_general_ci NOT NULL,
  `discipline` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permit_status`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contractor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `disciplineGroupName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `projectImage` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `projectPersonnel`
--

CREATE TABLE `projectPersonnel` (
  `id` int NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `projectID` int NOT NULL,
  `userID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectPersonnel`
--

-- --------------------------------------------------------

--
-- Table structure for table `seen_log`
--

CREATE TABLE `seen_log` (
  `id` int NOT NULL,
  `item_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seen_log`
--



-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `date_created` text COLLATE utf8mb4_unicode_ci,
  `proccessID` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_position` int DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date_created` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--


--
-- Indexes for dumped tables
--

