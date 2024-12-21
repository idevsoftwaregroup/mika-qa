-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2024 at 02:23 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `dateTimeCreated` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL
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
  `checklist_id` int(11) NOT NULL,
  `projectname` varchar(255) DEFAULT NULL,
  `contractor_name` varchar(255) DEFAULT NULL,
  `contract_number` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `permit_id` varchar(150) DEFAULT NULL,
  `checklistID` text NOT NULL,
  `crew` varchar(255) DEFAULT NULL,
  `axis` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `time_to_action` varchar(255) DEFAULT NULL,
  `permit_credit` varchar(255) DEFAULT NULL,
  `operation_description` text DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `file_name` text DEFAULT NULL,
  `file_size` text DEFAULT NULL,
  `file_data` text DEFAULT NULL,
  `discipline_group` text DEFAULT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`checklist_id`, `projectname`, `contractor_name`, `contract_number`, `discipline`, `permit_id`, `checklistID`, `crew`, `axis`, `floor`, `block`, `zone`, `time_to_action`, `permit_credit`, `operation_description`, `date_created`, `file_name`, `file_size`, `file_data`, `discipline_group`, `status`) VALUES
(9, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'عملیات اجرای وال پست', 'ESK-P-301015-001000', 'ESK-C-301015-001000', 'asdasd', 'asdas', 'dada', 'dasd', 'asdasda', '15 days', '۲۳ hours', 'asdasdasdadas', '2024-09-03 16:30:46', NULL, NULL, NULL, 'سفت کاری و نازک کاری', 'Accept'),
(10, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'ESK-P-301015-001002', 'ESK-C-301015-001002', 'dfsdfsd', 'fsdfs', 'fsdf', 'fsdf', 'sdfsdfs', '', '', 'asdasda', '2024-09-03 21:24:55', NULL, NULL, NULL, 'سفت کاری و نازک کاری', 'Accept'),
(11, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'ESK-P-301015-001003', 'ESK-C-301015-001003', 'asd', 'asda', 'sdasd', 'sad', 'asda', '', '', 'asdas', '2024-09-04 01:18:50', NULL, NULL, NULL, 'سفت کاری و نازک کاری', 'issued');

-- --------------------------------------------------------

--
-- Table structure for table `checklistItemsActions`
--

CREATE TABLE `checklistItemsActions` (
  `id` int(11) NOT NULL,
  `item` text NOT NULL,
  `actionStatus` varchar(150) NOT NULL,
  `permit_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(150) NOT NULL,
  `user_name` text NOT NULL,
  `submitted_at` text NOT NULL,
  `description` text NOT NULL,
  `discipline` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklistItemsActions`
--

INSERT INTO `checklistItemsActions` (`id`, `item`, `actionStatus`, `permit_id`, `project_id`, `user_name`, `submitted_at`, `description`, `discipline`) VALUES
(14, '0', 'Accept', 'ESK-P-301015-001000', '1', 'user4', '2024-09-03 16:49:38', 'شسشسییسبسیبسیبس', ''),
(15, '1', 'Accept', 'ESK-P-301015-001000', '1', 'user4', '2024-09-03 16:49:38', 'شسشسییسبسیبسیبس', ''),
(16, '0', 'Accept', 'ESK-P-301015-001000', '1', 'owner', '2024-09-03 16:50:25', 'qweqweqeqeqeq', ''),
(34, 'کنترل استفاده از وادار قائم در دیوار با طول بیش از ۴ متر', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(35, 'کنترل استفاده از وادار افقی در دیوار با طول بیش از ۳/۵ متر', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(36, 'کنترل فاصله جداسازی دیوار از ستون', 'Reject', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(37, 'کنترل فاصله جداسازی دیوار از سقف', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(38, 'کنترل عرض شاخک فلزی', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(39, 'کنترل فاصله بین راس خرپا در میلگرد بستر', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(40, 'کنترل طول همپوشانی شاخک و میلگرد طولی در میلگرد بستر', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(41, 'کنترل مفصلی بودن وادار قائم به کف سازه', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(42, 'کنترل کشوئی بودن اتصال وادار قائم به زیر سقف', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(43, 'کنترل فاصله ناودانی به وادار زیر سقف', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(44, 'کنترل مطابقت مقاطع وال پست با نقشه شاپ', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(45, 'کنترل نصب وادار در محل تقاطع دو دیوار', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(46, 'کنترل محل و محور نصب وال پست های قائم', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(47, 'کنترل اجرای ضد زنگ مقاطع فلزی', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی'),
(48, 'کنترل ابعاد کلیه وادارها', 'Accept', 'ESK-P-301015-001002', '1', 'owner', '2024-09-03 21:57:02', 'این توضیحات از سمت مدیر کارگاه کارفرما میباشند. به آنها توجه نکنید.', 'کرسی چینی');

-- --------------------------------------------------------

--
-- Table structure for table `checklist_items`
--

CREATE TABLE `checklist_items` (
  `id` int(11) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `createdDateTime` text NOT NULL,
  `operation_description` varchar(255) NOT NULL,
  `review_criteria` varchar(255) NOT NULL,
  `control_method_tool` varchar(255) NOT NULL,
  `minimum_check_value` varchar(50) NOT NULL,
  `considerations` varchar(255) NOT NULL,
  `allowable_tolerance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checklist_items`
--

INSERT INTO `checklist_items` (`id`, `discipline_id`, `createdDateTime`, `operation_description`, `review_criteria`, `control_method_tool`, `minimum_check_value`, `considerations`, `allowable_tolerance`) VALUES
(1, 10, '2024-05-04 22:27:48', 'کنترل استفاده از وادار قائم در دیوار با طول بیش از ۴ متر', 'آیین نامه', 'متر', '۱۰۰', 'بند پ ۱-۱-۱-۴-۱-۶ پیوست آیین نامه ۲۸۰۰ ص ۲', 'ندارد'),
(2, 10, '2024-05-04 22:27:48', 'کنترل استفاده از وادار افقی در دیوار با طول بیش از ۳/۵ متر', 'آیین نامه', 'متر', '۱۰۰', 'بند پ ۱-۱-۱-۴-۱-۶ پیوست آیین نامه ۲۸۰۰ ص ۲', 'ندارد'),
(3, 10, '2024-05-04 22:27:48', 'کنترل فاصله جداسازی دیوار از ستون', 'آیین نامه', 'متر', '۱۰۰', 'بند پ ۱-۱-۱-۴-۱-۶ پیوست آیین نامه ۲۸۰۰ ص ۳', 'ندارد'),
(4, 10, '2024-05-04 22:27:48', 'کنترل فاصله جداسازی دیوار از سقف', 'آیین نامه', 'متر', '۱۰۰', 'بند پ ۱-۱-۱-۴-۱-۶ پیوست آیین نامه ۲۸۰۰ ص ۳', 'ندارد'),
(5, 10, '2024-05-04 22:27:48', 'کنترل عرض شاخک فلزی', 'آیین نامه', 'متر', '۱۰۰', 'تصویر ص ۷ پیوست ۶ آیین نامه ۲۸۰۰', 'ندارد'),
(6, 10, '2024-05-04 22:27:48', 'کنترل فاصله بین راس خرپا در میلگرد بستر', 'آیین نامه', 'متر', '۱۰۰', 'تصویر ص ۷ پیوست ۶ آیین نامه ۲۸۰۰', 'ندارد'),
(7, 10, '2024-05-04 22:27:48', 'کنترل طول همپوشانی شاخک و میلگرد طولی در میلگرد بستر', 'آیین نامه', 'متر', '۱۰۰', 'تصویر ص ۷ پیوست ۶ آیین نامه ۲۸۰۰', 'ندارد'),
(8, 10, '2024-05-04 22:27:48', 'کنترل مفصلی بودن وادار قائم به کف سازه', 'آیین نامه', 'بصری', '۱۰۰', 'بند پ ۱-۲-۴-۱-۶ پیوست آیین نامه ۲۸۰۰ ص ۸', 'ندارد'),
(9, 10, '2024-05-04 22:27:48', 'کنترل کشوئی بودن اتصال وادار قائم به زیر سقف', 'آیین نامه', 'بصری', '۱۰۰', 'بند پ ۱-۲-۴-۱-۶ پیوست آیین نامه ۲۸۰۰ ص ۸', 'ندارد'),
(10, 10, '2024-05-04 22:27:48', 'کنترل فاصله ناودانی به وادار زیر سقف', 'آیین نامه', 'متر', '۱۰۰', 'تصویر ص ۹ پیوست ۶ آیین نامه ۲۸۰۰', 'ندارد'),
(11, 10, '2024-05-04 22:27:48', 'کنترل مطابقت مقاطع وال پست با نقشه شاپ', 'نقشه', 'بصری', '۱۰۰', 'ندارد', 'ندارد'),
(12, 10, '2024-05-04 22:27:48', 'کنترل نصب وادار در محل تقاطع دو دیوار', 'آیین نامه', 'بصری', '۱۰۰', 'بند پ ۷-۲-۴-۱-۶ پیوست آیین نامه ۲۸۰۰ ص ۳', 'ندارد'),
(13, 10, '2024-05-04 22:27:48', 'کنترل محل و محور نصب وال پست های قائم', 'نقشه', 'دوربین نقشه برداری', '۱۰۰', 'ندارد', 'ندارد'),
(14, 10, '2024-05-04 22:27:48', 'کنترل اجرای ضد زنگ مقاطع فلزی', 'ندارد', 'بصری', '۱۰۰', 'ندارد', 'ندارد'),
(15, 10, '2024-05-04 22:27:48', 'کنترل ابعاد کلیه وادارها', 'نقشه', 'متر', '۱۰۰', 'ندارد', 'ندارد'),
(16, 11, '2024-09-03 20:15:46', 'شماره یک', 'شسیدمشس', 'پمپسشیپشسم', 'پمسپشمیپشم', 'پپمیسشپمیپش', 'ندارد'),
(17, 11, '2024-09-03 20:15:46', 'شسیشس', 'یشسی', 'شسیش', 'یشس', 'یشسی', 'شیش');

-- --------------------------------------------------------

--
-- Table structure for table `checklist_status`
--

CREATE TABLE `checklist_status` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `checklist_item_id` text NOT NULL,
  `status` text NOT NULL,
  `submitted_at` text NOT NULL,
  `permit_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplines`
--

CREATE TABLE `disciplines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `group` varchar(1500) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disciplines`
--

INSERT INTO `disciplines` (`id`, `name`, `group`, `code`) VALUES
(10, 'کرسی چینی', 'سفت کاری و نازک کاری', '1'),
(11, 'عملیات اجرای وال پست', 'سفت کاری و نازک کاری', '66d73d16b1a63');

-- --------------------------------------------------------

--
-- Table structure for table `discipline_group`
--

CREATE TABLE `discipline_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(50) DEFAULT NULL,
  `discipline_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discipline_group`
--

INSERT INTO `discipline_group` (`group_id`, `group_name`, `discipline_id`) VALUES
(1, 'سفت کاری و نازک کاری', 10);

-- --------------------------------------------------------

--
-- Table structure for table `permitDisciplines`
--

CREATE TABLE `permitDisciplines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permitDisciplines`
--

INSERT INTO `permitDisciplines` (`id`, `name`, `group_name`, `code`) VALUES
(1, 'عملیات اجرای وال پست', 'سفت کاری و نازک کاری', '11'),
(2, 'کرسی چینی', 'سفت کاری و نازک کاری', '66d73db750770');

-- --------------------------------------------------------

--
-- Table structure for table `permitItems`
--

CREATE TABLE `permitItems` (
  `id` int(11) NOT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `permit_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTimeCreated` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permitItemsSelection`
--

CREATE TABLE `permitItemsSelection` (
  `id` int(11) NOT NULL,
  `lastActivity` varchar(255) DEFAULT NULL,
  `documentations` varchar(255) DEFAULT NULL,
  `workingMaterials` varchar(255) DEFAULT NULL,
  `tools` varchar(255) DEFAULT NULL,
  `env` varchar(255) DEFAULT NULL,
  `hse` varchar(255) DEFAULT NULL,
  `discipline_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permitItemsSelection`
--

INSERT INTO `permitItemsSelection` (`id`, `lastActivity`, `documentations`, `workingMaterials`, `tools`, `env`, `hse`, `discipline_id`) VALUES
(1, 'چک لیست عملیات اسکلت تراز مربوطه', 'نقشه های شاپ براساس ویرایش ۴ پیوست ۶ آیین نامه ۲۸۰۰', 'وال پست', 'دریل', 'دما : ۳۷ درجه', 'تجهیزات حفاظت فردی', 1),
(3, NULL, NULL, 'ناودانی', 'سنگ فرز', 'وضعیت جوی : آفتابی', 'ایمنی مسیر تردد', 1),
(4, NULL, NULL, 'رول بولت', 'دستگاه جوش', 'سرعت باد : 14KM/H', 'حفاظ گذاری مناطق پرتگاهی', 1),
(5, NULL, NULL, 'پیچ و انکر بولت', 'تراز لیزری', NULL, 'تامین جایگاه کاری ایمن', 1),
(6, NULL, NULL, 'میلگرد', NULL, NULL, 'تامین روشنائی', 1),
(7, NULL, NULL, 'الکترود', NULL, NULL, 'کنترل محیط و ابزار', 1),
(8, NULL, NULL, 'پلیت', NULL, NULL, NULL, 1),
(9, 'آیتم شماره یک دیسیپلین کرسی چینی', 'یسکپکسیپب', 'پیسبکسی', 'کمویبوکمسی', 'کپسکیبسی', 'پسیپبیسپ', 2),
(10, 'سیبسی', 'بسیبس', 'سیبس', 'ندارد', 'ندارد', 'ندارد', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permitItemsSelectionDone`
--

CREATE TABLE `permitItemsSelectionDone` (
  `id` int(11) NOT NULL,
  `discipline_id` text DEFAULT NULL,
  `dateTimeCreated` text DEFAULT NULL,
  `permit_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permitItemsSelectionDone`
--

INSERT INTO `permitItemsSelectionDone` (`id`, `discipline_id`, `dateTimeCreated`, `permit_id`) VALUES
(22, '1', '2024-07-03 10:59:44', 'PNE-P-202004-44714'),
(23, '1', '2024-07-06 13:41:34', 'PNE-P-202004-117286'),
(24, '1', '2024-07-07 14:36:37', 'PNE-P-202004-623339'),
(25, '1', '2024-07-07 14:47:14', 'PNE-P-202004-439450'),
(26, '1', '2024-07-08 06:51:19', 'PNE-P-202004-977546'),
(27, '1', '2024-08-16 13:10:37', 'PNE-P-202004-818917'),
(28, '1', '2024-08-17 06:37:45', 'CNT-P-301015-818918'),
(29, '1', '2024-08-17 07:13:52', 'CNT-P-301015-818919'),
(30, '1', '2024-09-03 10:21:29', 'CNT-P-301015-000001'),
(31, '1', '2024-09-03 13:54:04', 'ESK-P-301015-001000'),
(32, '1', '2024-09-03 16:30:00', 'ESK-P-301015-001001'),
(33, NULL, '2024-09-03 16:32:01', 'ESK-P-301015-001001'),
(34, NULL, '2024-09-03 16:41:23', 'ESK-P-301015-001001'),
(35, '2', '2024-09-03 17:21:25', 'ESK-P-301015-001002'),
(36, '2', '2024-09-04 00:33:31', 'ESK-P-301015-001003'),
(37, '2', '2024-09-04 17:42:30', 'ESK-P-301015-001004'),
(38, '2', '2024-09-05 08:19:46', 'ESK-P-301015-001005'),
(39, '2', '2024-09-05 13:34:23', 'ESK-P-301015-001006');

-- --------------------------------------------------------

--
-- Table structure for table `permits`
--

CREATE TABLE `permits` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `contractor_name` varchar(255) NOT NULL,
  `contract_number` varchar(50) NOT NULL,
  `discipline` varchar(100) NOT NULL,
  `crew` varchar(100) DEFAULT NULL,
  `axis` varchar(100) DEFAULT NULL,
  `floor` varchar(100) DEFAULT NULL,
  `block` varchar(100) DEFAULT NULL,
  `zone` varchar(100) DEFAULT NULL,
  `operation_description` text DEFAULT NULL,
  `time_to_action` varchar(50) DEFAULT NULL,
  `permit_credit` varchar(50) DEFAULT NULL,
  `permit_id` varchar(150) NOT NULL,
  `last_activity` text DEFAULT NULL,
  `checklistID` text DEFAULT NULL,
  `status` varchar(150) NOT NULL,
  `type` text DEFAULT NULL,
  `dateTimeCreated` text DEFAULT NULL,
  `file_name` text NOT NULL,
  `file_size` text NOT NULL,
  `file_data` text NOT NULL,
  `discipline_group` text DEFAULT NULL,
  `isIssued` text DEFAULT NULL,
  `protection` text DEFAULT NULL,
  `dir` text NOT NULL,
  `dateTimeDone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permits`
--

INSERT INTO `permits` (`id`, `project_name`, `contractor_name`, `contract_number`, `discipline`, `crew`, `axis`, `floor`, `block`, `zone`, `operation_description`, `time_to_action`, `permit_credit`, `permit_id`, `last_activity`, `checklistID`, `status`, `type`, `dateTimeCreated`, `file_name`, `file_size`, `file_data`, `discipline_group`, `isIssued`, `protection`, `dir`, `dateTimeDone`) VALUES
(40, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'عملیات اجرای وال پست', 'asdasd', 'asdas', 'dada', 'dasd', 'asdasda', 'asdasdasdadas', '1221212 days', '1403/06/25', 'ESK-P-301015-001000', '', '14', 'Accept', 'Permit', '2024-09-03 12:41:18', '../../uploads/ESK-P-301015-001000_2024-09-03/ins.png', '121312', '../../uploads/ESK-P-301015-001000_2024-09-03/ins.png', 'سفت کاری و نازک کاری', 'Yes', 'Yes', '../../uploads/ESK-P-301015-001000_2024-09-03/', '2024-09-03 16:28:42'),
(43, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'سشی', 'شیشسی', 'شسیش', 'شسیشس', 'یشسیش', 'sadasdas', '211231231 hours', '', 'ESK-P-301015-001001', '', '12', 'issued', 'Permit', '2024-09-03 16:41:18', '../../uploads/ESK-P-301015-001001_2024-09-03/SecureAccess Verify.pdf', '406202', '../../uploads/ESK-P-301015-001001_2024-09-03/SecureAccess Verify.pdf', 'سفت کاری و نازک کاری', 'Yes', NULL, '../../uploads/ESK-P-301015-001001_2024-09-03/', NULL),
(44, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'dfsdfsd', 'fsdfs', 'fsdf', 'fsdf', 'sdfsdfs', 'asdasda', '12 hours', '1403/06/26', 'ESK-P-301015-001002', '', NULL, 'Accept', 'Permit', '2024-09-03 17:21:19', '../../uploads/ESK-P-301015-001002_2024-09-03/mika.png', '30580', '../../uploads/ESK-P-301015-001002_2024-09-03/mika.png', 'سفت کاری و نازک کاری', 'Yes', 'Yes', '../../uploads/ESK-P-301015-001002_2024-09-03/', '2024-09-03 19:20:33'),
(45, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'asd', 'asda', 'sdasd', 'sad', 'asda', 'asdas', '12 days', '1403/06/28', 'ESK-P-301015-001003', '', NULL, 'Accept', 'Permit', '2024-09-04 00:29:37', '../../uploads/ESK-P-301015-001003_2024-09-04/ins.png', '121312', '../../uploads/ESK-P-301015-001003_2024-09-04/ins.png', 'سفت کاری و نازک کاری', 'Yes', 'Yes', '../../uploads/ESK-P-301015-001003_2024-09-04/', '2024-09-04 00:53:26'),
(46, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'asdas', 'dasd', 'asdas', 'sada', 'asda', 'sadas', '2121 days', '23 hours', 'ESK-P-301015-001004', 'ESK-C-301015-001003', NULL, 'Accept', 'Permit', '2024-09-04 16:50:28', '../../uploads/ESK-P-301015-001004_2024-09-04/Simple Product Launch Plan.png', '138133', '../../uploads/ESK-P-301015-001004_2024-09-04/Simple Product Launch Plan.png', 'سفت کاری و نازک کاری', 'Yes', 'Yes', '../../uploads/ESK-P-301015-001004_2024-09-04/', '2024-09-05 08:01:31'),
(47, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'عطائی', 'دارایمحور عمودی', 'سوم شمالی', 'اول غربی', 'شماره ۳', 'دارای توضیحات خاصی نمی باشد.', '12 hours', '12 hours', 'ESK-P-301015-001005', '', NULL, 'Accept', 'Permit', '2024-09-05 08:18:08', '../../uploads/ESK-P-301015-001005_2024-09-05/Simple Product Launch Plan.png', '138133', '../../uploads/ESK-P-301015-001005_2024-09-05/Simple Product Launch Plan.png', 'سفت کاری و نازک کاری', 'Yes', 'Yes', '../../uploads/ESK-P-301015-001005_2024-09-05/', '2024-09-05 13:17:51'),
(48, 'برج غربی پروژه اسکان', 'همپایه', 'ESK-CNT-301015-021121', 'کرسی چینی', 'sadas', 'asda', 'jnn', 'mmkm', 'lmlmlm', 'sadasd', '1223333 days', NULL, 'ESK-P-301015-001006', '', NULL, 'issued', 'Permit', '2024-09-05 13:33:10', '../../uploads/ESK-P-301015-001006_2024-09-05/sa-v.svg', '98582', '../../uploads/ESK-P-301015-001006_2024-09-05/sa-v.svg', 'سفت کاری و نازک کاری', 'Yes', NULL, '../../uploads/ESK-P-301015-001006_2024-09-05/', NULL);

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
  `dateTimeCreated` text NOT NULL,
  `discipline` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permit_status`
--

INSERT INTO `permit_status` (`id`, `permit_id`, `user_id`, `status`, `items`, `description`, `dateTimeCreated`, `discipline`) VALUES
(35, 'CNT-P-301015-000001', 'user1', 'in progress', '[\"\\u062a\\u062c\\u0647\\u06cc\\u0632\\u0627\\u062a \\u062d\\u0641\\u0627\\u0638\\u062a \\u0641\\u0631\\u062f\\u06cc\"]', 'asda', '2024-09-03 10:21:54', ''),
(36, 'CNT-P-301015-000001', 'owner', 'Accept', '[\"\\u0686\\u06a9 \\u0644\\u06cc\\u0633\\u062a \\u0639\\u0645\\u0644\\u06cc\\u0627\\u062a \\u0627\\u0633\\u06a9\\u0644\\u062a \\u062a\\u0631\\u0627\\u0632 \\u0645\\u0631\\u0628\\u0648\\u0637\\u0647\",\"\\u0646\\u0642\\u0634\\u0647 \\u0647\\u0627\\u06cc \\u0634\\u0627\\u067e \\u0628\\u0631\\u0627\\u0633\\u0627\\u0633 \\u0648\\u06cc\\u0631\\u0627\\u06cc\\u0634 \\u06f4 \\u067e\\u06cc\\u0648\\u0633\\u062a \\u06f6 \\u0622\\u06cc\\u06cc\\u0646 \\u0646\\u0627\\u0645\\u0647 \\u06f2\\u06f8\\u06f0\\u06f0\",\"\\u062f\\u0645\\u0627 : \\u06f3\\u06f7 \\u062f\\u0631\\u062c\\u0647\",\"\\u062a\\u062c\\u0647\\u06cc\\u0632\\u0627\\u062a \\u062d\\u0641\\u0627\\u0638\\u062a \\u0641\\u0631\\u062f\\u06cc\"]', '', '2024-09-03 10:29:10', ''),
(37, 'ESK-P-301015-001000', 'user2', 'in progress', '[\"\\u0686\\u06a9 \\u0644\\u06cc\\u0633\\u062a \\u0639\\u0645\\u0644\\u06cc\\u0627\\u062a \\u0627\\u0633\\u06a9\\u0644\\u062a \\u062a\\u0631\\u0627\\u0632 \\u0645\\u0631\\u0628\\u0648\\u0637\\u0647\",\"\\u0646\\u0642\\u0634\\u0647 \\u0647\\u0627\\u06cc \\u0634\\u0627\\u067e \\u0628\\u0631\\u0627\\u0633\\u0627\\u0633 \\u0648\\u06cc\\u0631\\u0627\\u06cc\\u0634 \\u06f4 \\u067e\\u06cc\\u0648\\u0633\\u062a \\u06f6 \\u0622\\u06cc\\u06cc\\u0646 \\u0646\\u0627\\u0645\\u0647 \\u06f2\\u06f8\\u06f0\\u06f0\",\"\\u0648\\u0627\\u0644 \\u067e\\u0633\\u062a\",\"\\u0646\\u0627\\u0648\\u062f\\u0627\\u0646\\u06cc\",\"\\u0633\\u0646\\u06af \\u0641\\u0631\\u0632\",\"\\u062f\\u0645\\u0627 : \\u06f3\\u06f7 \\u062f\\u0631\\u062c\\u0647\",\"\\u0648\\u0636\\u0639\\u06cc\\u062a \\u062c\\u0648\\u06cc : \\u0622\\u0641\\u062a\\u0627\\u0628\\u06cc\",\"\\u0633\\u0631\\u0639\\u062a \\u0628\\u0627\\u062f : 14KM\\/H\",\"\\u0627\\u06cc\\u0645\\u0646\\u06cc \\u0645\\u0633\\u06cc\\u0631 \\u062a\\u0631\\u062f\\u062f\",\"\\u062d\\u0641\\u0627\\u0638 \\u06af\\u0630\\u0627\\u0631\\u06cc \\u0645\\u0646\\u0627\\u0637\\u0642 \\u067e\\u0631\\u062a\\u06af\\u0627\\u0647\\u06cc\"]', 'asdasdasdasdasdas', '2024-09-03 13:54:51', ''),
(39, 'ESK-P-301015-001000', 'owner', 'Accept', '[\"\\u062f\\u0631\\u06cc\\u0644\",\"\\u0633\\u0646\\u06af \\u0641\\u0631\\u0632\"]', '', '2024-09-03 16:28:42', ''),
(40, 'ESK-P-301015-001001', 'user2', 'in progress', '[\"\\u0686\\u06a9 \\u0644\\u06cc\\u0633\\u062a \\u0639\\u0645\\u0644\\u06cc\\u0627\\u062a \\u0627\\u0633\\u06a9\\u0644\\u062a \\u062a\\u0631\\u0627\\u0632 \\u0645\\u0631\\u0628\\u0648\\u0637\\u0647\",\"\\u0646\\u0642\\u0634\\u0647 \\u0647\\u0627\\u06cc \\u0634\\u0627\\u067e \\u0628\\u0631\\u0627\\u0633\\u0627\\u0633 \\u0648\\u06cc\\u0631\\u0627\\u06cc\\u0634 \\u06f4 \\u067e\\u06cc\\u0648\\u0633\\u062a \\u06f6 \\u0622\\u06cc\\u06cc\\u0646 \\u0646\\u0627\\u0645\\u0647 \\u06f2\\u06f8\\u06f0\\u06f0\"]', 'asdas', '2024-09-03 16:30:24', ''),
(42, 'ESK-P-301015-001002', 'user1', 'in progress', '[\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\"]', 'adasdada', '2024-09-03 18:43:15', ''),
(43, 'ESK-P-301015-001002', 'user2', 'in progress', '[\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\"]', 'qweqweq', '2024-09-03 19:17:20', ''),
(44, 'ESK-P-301015-001002', 'owner', 'Accept', '[\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\"]', 'asdasd', '2024-09-03 19:20:33', 'test'),
(46, 'ESK-P-301015-001003', 'user1', 'in progress', '[\"\\u0622\\u06cc\\u062a\\u0645 \\u0634\\u0645\\u0631\\u0627\\u0647 \\u06cc\\u06a9 \\u062f\\u06cc\\u0633\\u06cc\\u067e\\u0644\\u06cc\\u0646 \\u06a9\\u0631\\u0633\\u06cc \\u0686\\u06cc\\u0646\\u06cc\",\"\\u0633\\u06cc\\u0628\\u0633\\u06cc\",\"\\u06cc\\u0633\\u06a9\\u067e\\u06a9\\u0633\\u06cc\\u067e\\u0628\",\"\\u0628\\u0633\\u06cc\\u0628\\u0633\"]', 'qqweqweqeq', '2024-09-04 00:45:32', 'کرسی چینی'),
(47, 'ESK-P-301015-001003', 'owner', 'Accept', '[\"\\u0622\\u06cc\\u062a\\u0645 \\u0634\\u0645\\u0631\\u0627\\u0647 \\u06cc\\u06a9 \\u062f\\u06cc\\u0633\\u06cc\\u067e\\u0644\\u06cc\\u0646 \\u06a9\\u0631\\u0633\\u06cc \\u0686\\u06cc\\u0646\\u06cc\",\"\\u0633\\u06cc\\u0628\\u0633\\u06cc\",\"\\u06cc\\u0633\\u06a9\\u067e\\u06a9\\u0633\\u06cc\\u067e\\u0628\",\"\\u0628\\u0633\\u06cc\\u0628\\u0633\",\"\\u067e\\u06cc\\u0633\\u0628\\u06a9\\u0633\\u06cc\",\"\\u0633\\u06cc\\u0628\\u0633\",\"\\u06a9\\u0645\\u0648\\u06cc\\u0628\\u0648\\u06a9\\u0645\\u0633\\u06cc\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\",\"\\u06a9\\u067e\\u0633\\u06a9\\u06cc\\u0628\\u0633\\u06cc\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\",\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\"]', 'اطلاعات مورد تایید میب اشد. لطفا پیگیری لازم انجام شود.', '2024-09-04 00:53:26', 'کرسی چینی'),
(48, 'ESK-P-301015-001004', 'user3', 'in progress', '[\"\\u06cc\\u0633\\u06a9\\u067e\\u06a9\\u0633\\u06cc\\u067e\\u0628\",\"\\u0628\\u0633\\u06cc\\u0628\\u0633\",\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\"]', 'sadasda', '2024-09-04 19:21:01', 'کرسی چینی'),
(52, 'ESK-P-301015-001004', 'owner', 'Accept', '[\"ESK-C-301015-001003\",\"\\u067e\\u0633\\u06cc\\u067e\\u0628\\u06cc\\u0633\\u067e\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\"]', 'test now 4', '2024-09-05 08:01:31', 'کرسی چینی'),
(53, 'ESK-P-301015-001005', 'owner', 'Accept', '[\"\\u06a9\\u067e\\u0633\\u06a9\\u06cc\\u0628\\u0633\\u06cc\",\"\\u0646\\u062f\\u0627\\u0631\\u062f\"]', 'sadsada', '2024-09-05 13:17:51', 'کرسی چینی');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `contract_number` varchar(50) DEFAULT NULL,
  `contractor_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `disciplineGroupName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `contract_number`, `contractor_name`, `date`, `disciplineGroupName`) VALUES
(1, 'برج غربی پروژه اسکان', 'ESK-CNT-301015-021121', 'همپایه', '2024-02-10', '[\"softhard\",\"structure\"]'),
(7, 'برج شرقی پروژه اسکان', 'ESK-CNT-000001-121212', 'همپایه ۲', '1403-06-06', '[\"softhard\"]');

-- --------------------------------------------------------

--
-- Table structure for table `projectPersonnel`
--

CREATE TABLE `projectPersonnel` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `shift` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` text NOT NULL,
  `projectID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectPersonnel`
--

INSERT INTO `projectPersonnel` (`id`, `job_title`, `shift`, `name`, `role`, `projectID`, `userID`) VALUES
(1, 'سرپرست کارگاه پیمانکار', 'شب', 'حمیدرضا فروزش', 'contractor', 1, 1),
(2, 'سرپرست کارگاه کارفرما', 'روز', 'کاربر سرپرست کارگاه', 'owner', 1, 7),
(3, 'سرپرست واحد ابنیه و فیشینگ / سازه', 'روز', 'کاربر شماره ۱', 'owner', 1, 2),
(4, 'سرپرست واحد الکتریکال ۲', 'روز', 'کاربر شماره ۲', 'owner', 1, 3),
(5, 'سرپرست واحد مکانیکال', 'شب', 'کاربر شماره ۳', 'owner', 1, 4),
(6, 'سرپرست HSE', 'روز', 'کاربر شماره ۴', 'owner', 1, 5),
(8, 'سرپرست واحد نقشه برداری', 'روز', 'کاربر شماره ۵', 'owner', 1, 6),
(13, 'سرپرست کارگاه', 'روز', 'contractor', 'contractor', 7, 1),
(14, 'سرپرست ابنیه', 'روز', 'user1', 'owner', 7, 2),
(15, 'سرپرست کارگاه', 'روز', 'owner', 'owner', 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `seen_log`
--

CREATE TABLE `seen_log` (
  `id` int(11) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `seen_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `item_id` text NOT NULL,
  `user_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seen_log`
--

INSERT INTO `seen_log` (`id`, `item_type`, `seen_at`, `item_id`, `user_id`) VALUES
(1, 'Permit', '2024-07-09 11:25:20', 'PNE-P-202004-559467', 'user#1'),
(3, 'Permit', '2024-08-15 19:48:00', 'PNE-P-202004-977546', 'user#1'),
(4, 'Permit', '2024-07-09 11:25:20', 'PNE-P-202004-44714', 'user#2'),
(5, 'Permit', '2024-08-12 10:06:18', 'PNE-P-202004-977546', 'user#2'),
(6, 'Permit', '2024-08-11 13:34:57', 'PNE-P-202004-44714', 'owner'),
(7, 'Permit', '2024-07-09 11:25:20', 'PNE-P-202004-117286', 'owner'),
(8, 'Permit', '2024-08-12 10:06:43', 'PNE-P-202004-977546', 'owner'),
(9, 'Permit', '2024-08-15 20:41:50', 'PNE-P-202004-663725', 'user#1'),
(10, 'Permit', '2024-08-15 20:41:05', 'PNE-P-202004-37331', 'user#1'),
(11, 'Permit', '2024-08-15 19:50:28', 'PNE-P-202004-439450', 'user#1'),
(12, 'Permit', '2024-08-15 20:21:39', 'PNE-P-202004-623339', 'user#1'),
(13, 'Permit', '2024-07-14 07:26:05', 'PNE-P-202004-117286', 'user#1'),
(14, 'Permit', '2024-07-09 14:49:40', 'PNE-P-202004-559467', 'owner'),
(15, 'Permit', '2024-07-23 09:21:50', 'PNE-P-202004-559467', 'contractor'),
(16, 'Permit', '2024-07-09 14:47:57', 'PNE-P-202004-559467', 'user#2'),
(17, 'Permit', '2024-07-09 15:17:23', '6', 'user#1'),
(18, 'Permit', '2024-07-14 06:53:47', 'PNE-P-202004-439450', 'contractor'),
(19, 'Permit', '2024-07-14 07:32:08', 'PNE-P-202004-37331', 'user#2'),
(20, 'Permit', '2024-08-12 09:09:50', 'PNE-P-202004-117286', 'contractor'),
(21, 'Permit', '2024-08-12 10:07:45', 'PNE-P-202004-977546', 'contractor'),
(22, 'Permit', '2024-07-30 13:51:56', 'PNE-P-202004-387870', 'user#1'),
(23, 'Permit', '2024-07-30 13:53:02', 'PNE-P-202004-289477', 'user#1'),
(24, 'Permit', '2024-07-30 13:53:22', 'PNE-P-202004-387870', 'user#2'),
(25, 'Permit', '2024-07-31 06:10:42', 'PNE-P-202004-347857', 'contractor'),
(26, 'Permit', '2024-07-30 14:23:18', 'PNE-P-202004-347857', 'user#1'),
(27, 'Permit', '2024-07-30 14:23:53', 'PNE-P-202004-347857', 'user#2'),
(28, 'Permit', '2024-08-05 05:11:07', 'PNE-P-202004-347857', 'owner'),
(29, 'Permit', '2024-07-31 10:24:04', 'PNE-P-202004-186021', 'user#1'),
(30, 'Permit', '2024-07-31 10:27:45', 'PNE-P-202004-186021', 'user#2'),
(31, 'Permit', '2024-08-10 10:01:20', 'PNE-P-202004-186021', 'owner'),
(32, 'Permit', '2024-08-10 10:19:33', 'PNE-P-202004-186021', 'contractor'),
(33, 'Permit', '2024-08-11 07:38:21', 'PNE-P-202004-863985', 'user#1'),
(34, 'Permit', '2024-08-11 07:37:19', 'PNE-P-202004-17151', 'user#1'),
(35, 'Permit', '2024-08-11 07:42:10', 'PNE-P-202004-447375', 'user#1'),
(36, 'Permit', '2024-08-11 07:42:13', 'PNE-P-202004-458273', 'user#1'),
(37, 'Permit', '2024-08-11 07:42:17', 'PNE-P-202004-412809', 'user#1'),
(38, 'Permit', '2024-08-11 07:42:25', 'PNE-P-202004-447376', 'user#1'),
(39, 'Permit', '2024-08-11 07:44:38', 'PNE-P-202004-29170', 'user#1'),
(40, 'Permit', '2024-08-11 08:10:45', 'PNE-P-202004-29170', 'user#2'),
(41, 'Permit', '2024-08-11 12:59:48', 'PNE-P-202004-439450', 'owner'),
(42, 'Permit', '2024-08-15 21:28:24', 'PNE-P-202004-623339', 'owner'),
(43, 'Permit', '2024-08-16 00:24:30', 'PNE-P-202004-128288', 'owner'),
(44, 'Permit', '2024-08-16 13:12:41', 'PNE-P-202004-818917', 'user#1'),
(45, 'Permit', '2024-08-16 13:13:17', 'PNE-P-202004-818917', 'user#2'),
(46, 'Permit', '2024-08-16 13:13:53', 'PNE-P-202004-818917', 'owner'),
(47, 'Permit', '2024-08-17 06:59:52', 'CNT-P-301015-818918', 'owner'),
(48, 'Permit', '2024-09-03 00:42:45', 'CNT-P-301015-818919', 'owner'),
(49, 'Permit', '2024-08-17 07:18:49', 'CNT-P-301015-818919', 'user#1'),
(50, 'Permit', '2024-08-17 07:33:37', 'CNT-P-301015-818919', 'user#2'),
(51, 'Permit', '2024-09-03 10:21:47', 'CNT-P-301015-000001', 'user#1'),
(52, 'Permit', '2024-09-03 10:22:06', 'CNT-P-301015-000001', 'owner'),
(53, 'Permit', '2024-09-03 13:54:28', 'ESK-P-301015-001000', 'user#2'),
(54, 'Permit', '2024-09-03 16:28:32', 'ESK-P-301015-001000', 'owner'),
(55, 'Permit', '2024-09-03 16:30:18', 'ESK-P-301015-001001', 'user#2'),
(56, 'Permit', '2024-09-03 16:48:35', 'ESK-P-301015-001001', 'user#4'),
(57, 'Permit', '2024-09-03 16:33:04', 'ESK-P-301015-001001', 'contractor'),
(58, 'Permit', '2024-09-03 19:20:25', 'ESK-P-301015-001002', 'owner'),
(59, 'Permit', '2024-09-03 19:17:03', 'ESK-P-301015-001001', 'user#1'),
(60, 'Permit', '2024-09-03 18:43:05', 'ESK-P-301015-001002', 'user#1'),
(61, 'Permit', '2024-09-03 19:17:14', 'ESK-P-301015-001002', 'user#2'),
(62, 'Permit', '2024-09-04 00:09:28', 'ESK-P-301015-001002', 'contractor'),
(63, 'Permit', '2024-09-04 00:45:20', 'ESK-P-301015-001003', 'user1'),
(64, 'Permit', '2024-09-04 19:25:13', 'ESK-P-301015-001003', 'owner'),
(65, 'Permit', '2024-09-04 19:08:59', 'ESK-P-301015-001004', 'user1'),
(66, 'Permit', '2024-09-04 19:07:42', 'ESK-P-301015-001001', 'user1'),
(67, 'Permit', '2024-09-04 19:20:36', 'ESK-P-301015-001004', 'user3'),
(68, 'Permit', '2024-09-05 08:01:10', 'ESK-P-301015-001004', 'owner'),
(69, 'Permit', '2024-09-05 07:32:59', 'ESK-P-301015-001001', 'owner'),
(70, 'Permit', '2024-09-05 14:20:39', 'ESK-P-301015-001005', 'owner'),
(71, 'Permit', '2024-09-05 14:20:20', 'ESK-P-301015-001005', 'contractor'),
(72, 'Permit', '2024-09-05 13:08:22', 'ESK-P-301015-001004', 'contractor'),
(73, 'Permit', '2024-09-05 13:09:02', 'ESK-P-301015-001003', 'contractor'),
(74, 'Permit', '2024-09-05 13:42:01', 'ESK-P-301015-001006', 'contractor'),
(75, 'Permit', '2024-09-05 14:17:01', 'ESK-P-301015-001006', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `type` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `date_created` text DEFAULT NULL,
  `proccessID` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `type`, `status`, `date_created`, `proccessID`) VALUES
(58, 'Permit', 'Accept', '2024-09-03 10:29:10', 'CNT-P-301015-000001'),
(59, 'Checklist', 'issued', '2024-09-03 10:29:30', 'CNT-C-301015-000001'),
(60, 'Permit', 'Accept', '2024-09-03 16:28:42', 'ESK-P-301015-001000'),
(61, 'Permit', 'in progress', '2024-09-03 16:30:24', 'ESK-P-301015-001001'),
(62, 'Checklist', 'issued', '2024-09-03 16:30:46', 'ESK-C-301015-001000'),
(63, 'Permit', 'issued', '2024-09-03 16:31:58', 'ESK-P-301015-001001'),
(64, 'Permit', 'issued', '2024-09-03 16:41:18', 'ESK-P-301015-001001'),
(65, 'Checklist', 'Accept', '2024-09-03 16:50:25', 'ESK-P-301015-001000'),
(66, 'Permit', 'Accept', '2024-09-03 19:20:33', 'ESK-P-301015-001002'),
(67, 'Checklist', 'issued', '2024-09-03 21:24:55', 'ESK-C-301015-001002'),
(68, 'Checklist', 'Accept', '2024-09-03 21:32:25', 'ESK-P-301015-001002'),
(70, 'Permit', 'Accept', '2024-09-04 00:53:26', 'ESK-P-301015-001003'),
(71, 'Checklist', 'issued', '2024-09-04 01:18:50', 'ESK-C-301015-001003'),
(72, 'Permit', 'Accept', '2024-09-05 08:01:31', 'ESK-P-301015-001004'),
(73, 'Permit', 'Accept', '2024-09-05 13:17:51', 'ESK-P-301015-001005'),
(74, 'Permit', 'issued', '2024-09-05 13:33:10', 'ESK-P-301015-001006');

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
(2, 'user1', 'کاربر شماره ۱', '0010', '۰۰۱۰', 'سرپرست واحد ابنیه و فیشینگ / سازه', 2, 'میکا', NULL, '2024-03-30 12:36:54'),
(3, 'user2', 'کاربر شماره ۲', '0010', '۰۰۱۰', 'سرپرست واحد الکتریکال', 2, 'میکا', NULL, '2024-03-30 12:37:49'),
(4, 'user3', 'کاربر شماره ۳', '0010', '۰۰۱۰', 'سرپرست واحد مکانیکال', 2, 'میکا', NULL, '2024-03-30 12:38:27'),
(5, 'user4', 'کاربر شماره ۴', '0010', '۰۰۱۰', 'سرپرست HSE', 2, 'میکا', NULL, '2024-03-30 12:39:02'),
(6, 'user5', 'کاربر شماره ۵', '0010', '۰۰۱۰', 'سرپرست واحد نقشه برداری', 2, 'میکا', NULL, '2024-03-30 12:39:43'),
(7, 'owner', 'کاربر سرپرست کارگاه', '0010', '۰۰۱۰', 'رییس کارگاه', 3, 'میکا', NULL, '2024-03-30 12:40:41'),
(9, 'idevsoftwaregroup', 'Arash Ataei', '0010', '09029983102', 'Developer and Manager of Software Dev. Team', NULL, 'Mika Center Office', 'I am Arash Ataei', NULL),
(10, 'admin', 'Administrator', '0010', '09029983102', 'Developer and Manager of Software Dev. Team', NULL, 'Mika Center Office', 'I am Arash Ataei', NULL),
(11, 'contractor_911', 'مطهری', '0010', '09029983012', 'سرپرست کارگاه پیمانکار', 3, 'متفرقه', 'ایشان به عنوان سرپرست کارگاه کارفرما برای پروژه مختلفی با میکا در حال همکاری می باشند.', '2024-04-04 11:03:23'),
(12, 'owner_m', 'محمدیانی', '1101', '0010', 'سرپرست کارگاه کارفرما', 3, 'میکا', 'سرپرست شماره ۲ کارگاه کارفرما', '2024-04-04 12:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`checklist_id`);

--
-- Indexes for table `checklistItemsActions`
--
ALTER TABLE `checklistItemsActions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklist_items`
--
ALTER TABLE `checklist_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discipline_id` (`discipline_id`);

--
-- Indexes for table `disciplines`
--
ALTER TABLE `disciplines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group` (`group`(768));

--
-- Indexes for table `discipline_group`
--
ALTER TABLE `discipline_group`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `discipline_id` (`discipline_id`);

--
-- Indexes for table `permitDisciplines`
--
ALTER TABLE `permitDisciplines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permitItems`
--
ALTER TABLE `permitItems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permitItemsSelection`
--
ALTER TABLE `permitItemsSelection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_permitItemsSelection_discipline` (`discipline_id`);

--
-- Indexes for table `permitItemsSelectionDone`
--
ALTER TABLE `permitItemsSelectionDone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permits`
--
ALTER TABLE `permits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permit_status`
--
ALTER TABLE `permit_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectPersonnel`
--
ALTER TABLE `projectPersonnel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seen_log`
--
ALTER TABLE `seen_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
  MODIFY `checklist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `checklistItemsActions`
--
ALTER TABLE `checklistItemsActions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `checklist_items`
--
ALTER TABLE `checklist_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `disciplines`
--
ALTER TABLE `disciplines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permitDisciplines`
--
ALTER TABLE `permitDisciplines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permitItems`
--
ALTER TABLE `permitItems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permitItemsSelection`
--
ALTER TABLE `permitItemsSelection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permitItemsSelectionDone`
--
ALTER TABLE `permitItemsSelectionDone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permits`
--
ALTER TABLE `permits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `permit_status`
--
ALTER TABLE `permit_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projectPersonnel`
--
ALTER TABLE `projectPersonnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seen_log`
--
ALTER TABLE `seen_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checklist_items`
--
ALTER TABLE `checklist_items`
  ADD CONSTRAINT `fk_discipline_id` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discipline_group`
--
ALTER TABLE `discipline_group`
  ADD CONSTRAINT `discipline_group_ibfk_1` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines` (`id`);

--
-- Constraints for table `permitItemsSelection`
--
ALTER TABLE `permitItemsSelection`
  ADD CONSTRAINT `fk_permitItemsSelection_discipline` FOREIGN KEY (`discipline_id`) REFERENCES `permitDisciplines` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
