-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2024 at 11:11 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklistItemsActions`
--
ALTER TABLE `checklistItemsActions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklistItemsActions`
--
ALTER TABLE `checklistItemsActions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
