-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2024 at 09:36 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u888860508_pegs`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_sliders`
--

CREATE TABLE `ads_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vertical_slider_url` varchar(255) DEFAULT NULL,
  `vertical_slider_alt_name` varchar(255) DEFAULT NULL,
  `horizontal_slider_url` varchar(255) DEFAULT NULL,
  `horizontal_slider_alt_name` varchar(255) DEFAULT NULL,
  `page_sections` varchar(255) NOT NULL,
  `href_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads_sliders`
--

INSERT INTO `ads_sliders` (`id`, `vertical_slider_url`, `vertical_slider_alt_name`, `horizontal_slider_url`, `horizontal_slider_alt_name`, `page_sections`, `href_link`, `created_at`, `updated_at`) VALUES
(1, '/assets/images/300x600_web_banner_general_01.webp', 'Admission Ads 1', NULL, NULL, 'general', '/', '2024-04-05 05:10:42', '2024-04-05 05:10:42'),
(2, '/assets/images/300x600_web_banner_general_02.webp', 'Admission Ads 2', NULL, NULL, 'general', '/', '2024-04-05 05:10:45', '2024-04-05 05:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('general_poster_slider', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:1;s:9:\"page_name\";s:7:\"general\";s:17:\"desktop_image_url\";s:28:\"/assets/images/egspec-1.webp\";s:16:\"mobile_image_url\";s:31:\"/assets/images/holi_sale_3.webp\";s:9:\"href_link\";s:1:\"/\";s:8:\"alt_name\";s:6:\"egspec\";s:10:\"created_at\";s:19:\"2024-03-29 14:13:54\";s:10:\"updated_at\";s:19:\"2024-03-29 14:13:54\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:1;s:9:\"page_name\";s:7:\"general\";s:17:\"desktop_image_url\";s:28:\"/assets/images/egspec-1.webp\";s:16:\"mobile_image_url\";s:31:\"/assets/images/holi_sale_3.webp\";s:9:\"href_link\";s:1:\"/\";s:8:\"alt_name\";s:6:\"egspec\";s:10:\"created_at\";s:19:\"2024-03-29 14:13:54\";s:10:\"updated_at\";s:19:\"2024-03-29 14:13:54\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716193388),
('general_slider_images', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:8:{i:0;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:1;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:62:\"/assets/images/Accredited/National_Board_of_Accreditation.webp\";s:7:\"alt_tag\";s:31:\"National Board of Accreditation\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:1;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:62:\"/assets/images/Accredited/National_Board_of_Accreditation.webp\";s:7:\"alt_tag\";s:31:\"National Board of Accreditation\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:2;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:51:\"/assets/images/Accredited/Anna_University_Logo.webp\";s:7:\"alt_tag\";s:15:\"Anna University\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:2;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:51:\"/assets/images/Accredited/Anna_University_Logo.webp\";s:7:\"alt_tag\";s:15:\"Anna University\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:3;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:40:\"/assets/images/Accredited/NAAC_LOGO.webp\";s:7:\"alt_tag\";s:4:\"NAAC\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:3;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:40:\"/assets/images/Accredited/NAAC_LOGO.webp\";s:7:\"alt_tag\";s:4:\"NAAC\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:4;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:76:\"/assets/images/Accredited/National_Institutional_Ranking_Framework_logo.webp\";s:7:\"alt_tag\";s:40:\"National Institutional Ranking Framework\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:4;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:76:\"/assets/images/Accredited/National_Institutional_Ranking_Framework_logo.webp\";s:7:\"alt_tag\";s:40:\"National Institutional Ranking Framework\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:5;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award2.webp\";s:7:\"alt_tag\";s:21:\"CISCO Network Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:5;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award2.webp\";s:7:\"alt_tag\";s:21:\"CISCO Network Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:5;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:6;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award5.webp\";s:7:\"alt_tag\";s:18:\"VM Ware IT Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:6;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award5.webp\";s:7:\"alt_tag\";s:18:\"VM Ware IT Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:6;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:7;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:44:\"/assets/images/Accredited/ISO_9001-2015.webp\";s:7:\"alt_tag\";s:13:\"ISO 9001-2015\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:7;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:44:\"/assets/images/Accredited/ISO_9001-2015.webp\";s:7:\"alt_tag\";s:13:\"ISO 9001-2015\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:7;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:8;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:77:\"/assets/images/Accredited/All_India_Council_for_Technical_Education_logo.webp\";s:7:\"alt_tag\";s:41:\"All India Council for Technical Education\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:8;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:77:\"/assets/images/Accredited/All_India_Council_for_Technical_Education_logo.webp\";s:7:\"alt_tag\";s:41:\"All India Council for Technical Education\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716193386),
('icc_slider', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:4:{i:0;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:7;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/1.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-01\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:7;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/1.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-01\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:8;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/2.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-02\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:8;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/2.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-02\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:9;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/3.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-03\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:9;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/3.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-03\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:10;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/4.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-04\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:10;s:9:\"page_name\";s:3:\"icc\";s:17:\"desktop_image_url\";s:87:\"https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/4.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"icc-04\";s:10:\"created_at\";s:19:\"2024-05-19 15:50:45\";s:10:\"updated_at\";s:19:\"2024-05-19 15:50:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716196278);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('wec_data', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:21:{i:0;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:1;s:4:\"name\";s:17:\"Prof.Dr.A.R.Deepa\";s:4:\"role\";s:8:\"Convener\";s:10:\"department\";s:5:\"S & H\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:1;s:4:\"name\";s:17:\"Prof.Dr.A.R.Deepa\";s:4:\"role\";s:8:\"Convener\";s:10:\"department\";s:5:\"S & H\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:2;s:4:\"name\";s:12:\"Mrs. A. Hema\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"MCA\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:2;s:4:\"name\";s:12:\"Mrs. A. Hema\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"MCA\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:3;s:4:\"name\";s:22:\"Mrs. S. Shajathi Begam\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:4:\"CSBS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:3;s:4:\"name\";s:22:\"Mrs. S. Shajathi Begam\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:4:\"CSBS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:14:\"Dr. R. Lavanya\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:2:\"IT\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:14:\"Dr. R. Lavanya\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:2:\"IT\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:11:\"Dr.M. Priya\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"CSE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:5;s:4:\"name\";s:11:\"Dr.M. Priya\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"CSE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:5;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:6;s:4:\"name\";s:12:\"Mrs. K. Usha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:5:\"S & H\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:6;s:4:\"name\";s:12:\"Mrs. K. Usha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:5:\"S & H\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:6;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:13:\"Mrs. S. Latha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"EEE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:13:\"Mrs. S. Latha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"EEE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:7;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:8;s:4:\"name\";s:15:\"Ms. N. Karthika\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:5:\"CIVIL\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:8;s:4:\"name\";s:15:\"Ms. N. Karthika\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:5:\"CIVIL\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:8;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:9;s:4:\"name\";s:18:\"Mrs. B. Asha Daisy\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"MBA\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:9;s:4:\"name\";s:18:\"Mrs. B. Asha Daisy\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"MBA\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:9;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:10;s:4:\"name\";s:14:\"Dr. T. Kavitha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:5:\"S & H\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:10;s:4:\"name\";s:14:\"Dr. T. Kavitha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:5:\"S & H\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:10;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:11;s:4:\"name\";s:17:\"Mrs. Louis Anitha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"BME\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:11;s:4:\"name\";s:17:\"Mrs. Louis Anitha\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:3:\"BME\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:11;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:12;s:4:\"name\";s:24:\"Mrs. S. Angelin Nivedita\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:4:\"AIDS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:12;s:4:\"name\";s:24:\"Mrs. S. Angelin Nivedita\";s:4:\"role\";s:6:\"Member\";s:10:\"department\";s:4:\"AIDS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:12;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:13;s:4:\"name\";s:11:\"P.Dharshana\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:4:\"AIDS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:13;s:4:\"name\";s:11:\"P.Dharshana\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:4:\"AIDS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:13;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:14;s:4:\"name\";s:14:\"R.Adhi Lakshmi\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:5:\"CIVIL\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:14;s:4:\"name\";s:14:\"R.Adhi Lakshmi\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:5:\"CIVIL\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:14;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:15;s:4:\"name\";s:14:\"M.Inmozhi Srii\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"EEE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:15;s:4:\"name\";s:14:\"M.Inmozhi Srii\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"EEE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:15;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:16;s:4:\"name\";s:9:\"K.Abinaya\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"ECE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:16;s:4:\"name\";s:9:\"K.Abinaya\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"ECE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:16;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:17;s:4:\"name\";s:8:\"G.Anitha\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"CSE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:17;s:4:\"name\";s:8:\"G.Anitha\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"CSE\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:17;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:18;s:4:\"name\";s:16:\"R Abinaya Harini\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:2:\"IT\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:18;s:4:\"name\";s:16:\"R Abinaya Harini\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:2:\"IT\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:18;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:19;s:4:\"name\";s:6:\"C.Banu\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:2:\"IT\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:19;s:4:\"name\";s:6:\"C.Banu\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:2:\"IT\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:19;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:20;s:4:\"name\";s:9:\"T.Abirami\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:4:\"CSBS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:20;s:4:\"name\";s:9:\"T.Abirami\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:4:\"CSBS\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:20;O:37:\"App\\Models\\WomenEmpowermentCellMember\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:30:\"women_empowerment_cell_members\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:21;s:4:\"name\";s:14:\"R.Surya Prabha\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"BME\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:21;s:4:\"name\";s:14:\"R.Surya Prabha\";s:4:\"role\";s:22:\"Student Representative\";s:10:\"department\";s:3:\"BME\";s:12:\"program_name\";N;s:4:\"date\";N;s:13:\"beneficiaries\";N;s:10:\"created_at\";N;s:10:\"updated_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"name\";i:1;s:4:\"role\";i:2;s:10:\"department\";i:3;s:12:\"program_name\";i:4;s:4:\"date\";i:5;s:13:\"beneficiaries\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716133300),
('wec_slider', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:5:{i:0;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:2;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/1.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-01\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:2;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/1.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-01\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:3;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/2.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-02\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:3;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/2.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-02\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:4;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/3.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-03\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:4;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/3.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-03\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:5;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/4.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-04\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:5;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/4.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-04\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:6;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/5.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-05\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:6;s:9:\"page_name\";s:3:\"wec\";s:17:\"desktop_image_url\";s:80:\"https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/5.webp\";s:16:\"mobile_image_url\";s:0:\"\";s:9:\"href_link\";s:1:\"#\";s:8:\"alt_name\";s:6:\"wec-05\";s:10:\"created_at\";s:19:\"2024-05-17 15:32:47\";s:10:\"updated_at\";s:19:\"2024-05-17 15:32:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716133302);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_section` varchar(255) DEFAULT NULL,
  `industry` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `name`, `page_section`, `industry`, `created_at`, `updated_at`) VALUES
(17, 'Cloud Infrastructure and Services', 'certifications', 'EMC Corporation', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(18, 'Rational Architect', 'certifications', 'IBM Corporation', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(19, 'C-Programming', 'certifications', 'Amphisoft', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(20, 'Web developer - PHP MySQL', 'certifications', 'Zend/ICTACT', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(21, 'BlueMix', 'certifications', 'IBM', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(22, 'Java Developer', 'certifications', 'Oracle Academy', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(23, 'Big Data Certification', 'certifications', 'DELL EMC Corporation', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(24, 'CCNA', 'certifications', 'CISCO Academy', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(25, 'ORACLE - Java Fundamentals', 'training', '', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(26, 'IBM - Rational SEED', 'training', '', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(27, 'EMC - Cloud Infrastructure and Services', 'training', '', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(28, 'E-Box - Basic C-Programming', 'training', '', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(29, 'CENT - PHP & MySQL', 'training', '', '2024-04-05 05:12:17', '2024-04-05 05:12:17'),
(30, 'IBM - BlueMix', 'training', '', '2024-04-05 05:12:17', '2024-04-05 05:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_committee`
--

CREATE TABLE `complaint_committee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `committee` varchar(255) NOT NULL,
  `contact_details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaint_committee`
--

INSERT INTO `complaint_committee` (`id`, `name`, `address`, `committee`, `contact_details`, `created_at`, `updated_at`) VALUES
(1, 'Dr. M. Arularasu', 'Directorate of Technical Education, Chennai-600 025', 'Chairman', 'tncapitation@gmail.com, cmarul62@gmail.com', NULL, NULL),
(2, 'Dr. P. Thamarai', 'Govenment College of Technology, Coimbatore', 'Member', 'thamdamu@yahoo.com, 9486558500', NULL, NULL),
(3, 'Dr. R. Senthil', 'Anna University, Chennai-600 025', 'Member', 'senthilr68@gmail.com, 7598632796', NULL, NULL),
(4, 'Dr. A. Elayaperumal', 'Anna University, Chennai-600 025', 'Member', 'profelaya@gmail.com, 9940347766, 7299007201', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `image_url`, `created_by`, `course_type`, `description`, `featured_image`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Mechanical Engineering', '/assets/images/department/bachelors/ME_EGSPEC01.jpg', 'raghavan_egspec', 'bachelors', 'Description of Mechanical Engineering course.', 'url_to_mechanical_featured_image', 'ME_EGSPEC01', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(2, 'Artificial Intelligence & Data Science', '/assets/images/department/bachelors/AIDS_EGSPEC032.avif', 'raghavan_egspec', 'bachelors', 'Description of Artificial Intelligence & Data Science Department.', 'url_to_civil_featured_image', 'AIDS_EGSPEC032', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(3, 'Civil Engineering', '/assets/images/department/bachelors/CE_EGSPEC02.jpg', 'raghavan_egspec', 'bachelors', 'Description of Civil Engineering course.', 'url_to_civil_featured_image', 'CE_EGSPEC02', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(4, 'Electrical and Electronics Engineering', '/assets/images/department/bachelors/EEE_EGSPEC03.jpg', 'raghavan_egspec', 'bachelors', 'Description of Electrical and Electronics Engineering course.', 'url_to_electrical_featured_image', 'EEE_EGSPEC03', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(5, 'Electronics and Communication Engineering', '/assets/images/department/bachelors/ECE_EGSPEC04.jpg', 'raghavan_egspec', 'bachelors', 'Description of Electronics and Communication Engineering course.', 'url_to_ec_featured_image', 'ECE_EGSPEC04', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(6, 'Computer Science and Engineering', '/assets/images/department/bachelors/CSE_EGSPEC05.jpg', 'raghavan_egspec', 'bachelors', 'Description of Computer Science and Engineering course.', 'url_to_cs_featured_image', 'CSE_EGSPEC05', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(7, 'Information Technology', '/assets/images/department/bachelors/IT_EGSPEC06.jpg', 'raghavan_egspec', 'bachelors', 'Description of Information Technology course.', 'url_to_it_featured_image', 'IT_EGSPEC06', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(8, 'Biomedical Engineering', '/assets/images/department/bachelors/BME_EGSPEC07.jpg', 'raghavan_egspec', 'bachelors', 'Description of Biomedical Engineering course.', 'url_to_biomedical_featured_image', 'BME_EGSPEC07', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(9, 'Computer Science & Business Systems Engineering', '/assets/images/department/bachelors/CSBSE_EGSPEC08.jpg', 'raghavan_egspec', 'bachelors', 'Description of Computer Science & Business Systems Engineering course.', 'url_to_csbse_featured_image', 'CSBSE_EGSPEC08', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(10, 'Mechanical Engineering', '/assets/images/department/bachelors/ME_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Mechanical Engineering course.', 'url_to_featured_image', 'MEM_EGSPEC01', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(11, 'Manufacturing Engineering', '/assets/images/department/masters/MF_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Manufacturing Engineering course.', 'url_to_featured_image', 'MF_EGSPEC01', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(12, 'Computer Science and Engineering', '/assets/images/department/bachelors/CSE_EGSPEC05.jpg', 'raghavan_egspec', 'masters', 'Description of Computer Science and Engineering course.', 'url_to_featured_image', 'CS_EGSPEC01', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(13, 'Power Electronics and Drives', '/assets/images/department/masters/PED_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Power Electronics and Drives course.', 'url_to_featured_image', 'PED_EGSPEC01', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(14, 'Communication Systems', '/assets/images/department/masters/CSYS_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Communication Systems course.', 'url_to_featured_image', 'CSYS_EGSPEC01', '2024-04-22 09:09:42', '2024-04-22 09:09:42'),
(15, 'Environmental Engineering', '/assets/images/department/masters/ENV_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Environmental Engineering course.', 'url_to_featured_image', 'ENV_EGSPEC01', '2024-04-22 09:09:42', '2024-04-22 09:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `courses_and_intakes`
--

CREATE TABLE `courses_and_intakes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `intake` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_and_intakes`
--

INSERT INTO `courses_and_intakes` (`id`, `course_name`, `course_type`, `intake`, `created_at`, `updated_at`) VALUES
(1, 'B.E – Mechanical Engineering', 'ug', 120, '2024-04-22 09:10:01', '2024-04-22 09:10:01'),
(2, 'B.E – Electronics and Communication Engineering', 'ug', 120, '2024-04-22 09:10:02', '2024-04-22 09:10:02'),
(3, 'B.E – Electrical & Electronics Engineering', 'ug', 60, '2024-04-22 09:10:04', '2024-04-22 09:10:04'),
(4, 'B.E – Computer Science & Engineering', 'ug', 120, '2024-04-22 09:10:05', '2024-04-22 09:10:05'),
(5, 'B.Tech – Information Technology', 'ug', 60, '2024-04-22 09:10:07', '2024-04-22 09:10:07'),
(6, 'B.E – Civil Engineering', 'ug', 60, '2024-04-22 09:10:08', '2024-04-22 09:10:08'),
(7, 'B.E – Bio-Medical Engineering', 'ug', 60, '2024-04-22 09:10:09', '2024-04-22 09:10:09'),
(8, 'B.Tech – Computer Science & Business Systems', 'ug', 60, '2024-04-22 09:10:11', '2024-04-22 09:10:11'),
(9, 'B.Tech – Artificial Intelligence and Data Science', 'ug', 60, '2024-04-22 09:10:13', '2024-04-22 09:10:13'),
(10, 'M.E ( Computer Science and Engineering )', 'pg', 18, '2024-04-22 09:10:14', '2024-04-22 09:10:14'),
(11, 'M.E (Communication Systems)', 'pg', 18, '2024-04-22 09:10:16', '2024-04-22 09:10:16'),
(12, 'M.E (Manufacturing Engineering)', 'pg', 18, '2024-04-22 09:10:17', '2024-04-22 09:10:17'),
(13, 'M.E (Power Electronics and Drives)', 'pg', 18, '2024-04-22 09:10:19', '2024-04-22 09:10:19'),
(14, 'M.E (Environmental Engineering)', 'pg', 18, '2024-04-22 09:10:20', '2024-04-22 09:10:20'),
(15, 'MCA – Master of Computer Applications ( 2 yrs)', 'pg', 60, '2024-04-22 09:10:21', '2024-04-22 09:10:21'),
(16, 'MBA – Master of Business Administration (2 Yrs)', 'pg', 120, '2024-04-22 09:10:24', '2024-04-22 09:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `equipment_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`equipment_id`, `category_id`, `equipment_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Drilling Machine – Pillar', NULL, NULL),
(2, 1, 'Blade Grinder 18”', NULL, NULL),
(3, 1, 'Surface Planner 18” Circular Saw', NULL, NULL),
(4, 1, 'Thickneser', NULL, NULL),
(5, 1, 'Wood Turning Lathe', NULL, NULL),
(6, 1, 'Mechanical Hacksaw Machine 7”', NULL, NULL),
(7, 1, 'Arc Welding TransformerOil cooled – 2Nos', NULL, NULL),
(8, 1, 'Arc Welding TransformerAir cooled – 2Nos', NULL, NULL),
(9, 1, 'Gas Welding (Oxygen & Acetylene Cylinder)', NULL, NULL),
(10, 1, 'Blower', NULL, NULL),
(11, 1, 'Portable Grinder', NULL, NULL),
(12, 1, 'Circular Saw', NULL, NULL),
(13, 1, 'Rotary Hammer', NULL, NULL),
(14, 1, 'Demolition Hammer H.D', NULL, NULL),
(15, 1, 'Planner MH80XI Hitmin', NULL, NULL),
(16, 1, 'Hand Drilling Machine', NULL, NULL),
(17, 1, 'Jig Saw', NULL, NULL),
(18, 1, 'Angle Grinder Machine', NULL, NULL),
(19, 1, 'Hearth Furnace', NULL, NULL),
(20, 1, 'TIG Welding Machine', NULL, NULL),
(21, 2, 'Pneumatic Comparator', NULL, NULL),
(22, 2, 'Heavy Duty Dial Gauge', NULL, NULL),
(23, 2, 'Surface Planner 18” Circular Saw', NULL, NULL),
(24, 2, 'Digital Vernier Caliper', NULL, NULL),
(25, 2, 'Vernier Height Gauge', NULL, NULL),
(26, 2, 'Micrometer', NULL, NULL),
(27, 2, 'Bore Gauge With Dial', NULL, NULL),
(28, 2, 'Vernier Depth Gauge', NULL, NULL),
(29, 2, 'Slip Gauge Setup', NULL, NULL),
(30, 2, 'Gear Tooth Vernier', NULL, NULL),
(31, 2, 'Comparator With Dial Gauge', NULL, NULL),
(32, 2, 'Tool Maker’s Microscope', NULL, NULL),
(33, 2, 'Profile Projector', NULL, NULL),
(34, 2, 'Floating Carriage Micrometer', NULL, NULL),
(35, 2, 'Auto Collimator', NULL, NULL),
(36, 2, 'Optical Comparator', NULL, NULL),
(37, 2, 'Vernier Bevel Protractor', NULL, NULL),
(38, 2, 'Thermocouple With Heat Source', NULL, NULL),
(39, 2, 'Linear Variable Differential Transformer (Lvdt)', NULL, NULL),
(40, 2, 'Platinum Resistance Thermocouple', NULL, NULL),
(41, 2, 'Radiation Pyrometer With Heat Source', NULL, NULL),
(42, 2, 'Optical Pyrometer', NULL, NULL),
(43, 2, 'Surface Roughness Tester', NULL, NULL),
(44, 2, 'Telescopic Gauge', NULL, NULL),
(45, 2, 'Force Measuring Setup', NULL, NULL),
(46, 2, 'Torque Measuring Setup', NULL, NULL),
(47, 2, 'Parallel/Counter Flow Heat Exchanger', NULL, NULL),
(48, 3, 'Single cylinder 4-stroke diesel engine Data Acquisition System electrical loading with alternator', NULL, NULL),
(49, 3, 'Twin cylinder 4-stroke diesel engine mechanical Loading', NULL, NULL),
(50, 3, 'Multi cylinder 4-stroke petrol engine Morse test rope', NULL, NULL),
(51, 3, 'Brake mechanical loading', NULL, NULL),
(52, 3, 'Single cylinder 2-stroke petrol engine cut section Model', NULL, NULL),
(53, 3, 'Single cylinder 4-stroke diesel engine cut section Model', NULL, NULL),
(54, 3, 'Single cylinder 4-stroke diesel engine mechanical loading', NULL, NULL),
(55, 3, 'Single cylinder 4-stroke diesel engine hydraulic loading', NULL, NULL),
(56, 3, 'Single cylinder 4-stroke petrol engine electrical loading', NULL, NULL),
(57, 3, 'Redwood Viscometer', NULL, NULL),
(58, 3, 'Cleave land Open and closed cup Apparatus', NULL, NULL),
(59, 3, 'Saybolt viscometer', NULL, NULL),
(60, 3, 'Exhaust Gas Analyser - 4GAS, CO,HC,CO2,O2', NULL, NULL),
(61, 4, 'Guarded plate apparatus', NULL, NULL),
(62, 4, 'Natural convection-vertical cylinder apparatus', NULL, NULL),
(63, 4, 'Forced convection inside tube apparatus', NULL, NULL),
(64, 4, 'Composite wall apparatus', NULL, NULL),
(65, 4, 'Thermal conductivity of insulating powder apparatus', NULL, NULL),
(66, 4, 'Lagged pipe apparatus', NULL, NULL),
(67, 4, 'Pin-fin apparatus', NULL, NULL),
(68, 4, 'Stefan-Boltzmann apparatus', NULL, NULL),
(69, 4, 'Fluidized Bed Cooling Tower', NULL, NULL),
(70, 4, 'Emissivity measurement apparatus', NULL, NULL),
(71, 4, 'Parallel/counter flow heat exchanger apparatus', NULL, NULL),
(72, 4, 'Single/two stage reciprocating air compressor', NULL, NULL),
(73, 4, 'Refrigeration test rig', NULL, NULL),
(74, 4, 'Air-conditioning test rig', NULL, NULL),
(75, 4, 'LPG Refrigeration test rig', NULL, NULL),
(76, 4, 'Refrigeration - CUT SECTION MODEL', NULL, NULL),
(77, 4, 'Steam turbine test rig', NULL, NULL),
(78, 4, 'Maxima non – IBR Boiler', NULL, NULL),
(79, 5, 'Pilot 4’ Lathe', NULL, NULL),
(80, 5, 'Pilot Lathe Iii', NULL, NULL),
(81, 5, 'Pilot Lathe 41/2 Feet', NULL, NULL),
(82, 5, 'Pilot 6’ Lathe', NULL, NULL),
(83, 5, 'Padmini Student Lathe', NULL, NULL),
(84, 5, 'Turret Lathe', NULL, NULL),
(85, 5, 'Capstan Lathe', NULL, NULL),
(86, 5, 'Atlas Bench Grinder', NULL, NULL),
(87, 5, '18” Shaper', NULL, NULL),
(88, 5, 'Gear Hobbing Machine', NULL, NULL),
(89, 5, 'Smt Universal Radial Drilling M/C', NULL, NULL),
(90, 5, 'Suraj(Sm2) Universal Milling M/C', NULL, NULL),
(91, 5, 'Parrot Pmcv-150 Vertical Surface Grinder', NULL, NULL),
(92, 5, 'Sew 1” Piller Drilling M/C', NULL, NULL),
(93, 5, 'Tool And Cutter Grinder', NULL, NULL),
(94, 5, 'Lathe Tool Dynamometer', NULL, NULL),
(95, 5, 'Parrot Spindle Horizontal Grinder M/C', NULL, NULL),
(96, 5, 'Riat R32 Cylindrical Grinder', NULL, NULL),
(97, 5, '3” Horizontal Planner Machine', NULL, NULL),
(98, 5, 'Gear Shaper Machine', NULL, NULL),
(99, 5, 'Centerless Grinder Machine', NULL, NULL),
(100, 5, 'Milling Tool Dynamometer', NULL, NULL),
(101, 5, 'Tool Makers Microscope', NULL, NULL),
(102, 6, 'Forced Vibration Setup', NULL, NULL),
(103, 6, 'Stroboscope', NULL, NULL),
(104, 6, 'Torsional Vibration Setup – Single', NULL, NULL),
(105, 6, 'Spring Mass and Strip Mass System', NULL, NULL),
(106, 6, 'Whirling Speed of Shaft', NULL, NULL),
(107, 6, 'Dynamic Balancing of Rotors', NULL, NULL),
(108, 6, 'Kinematic of Gear Trains (Simple & Compound)', NULL, NULL),
(109, 6, 'Turn Table Apparatus', NULL, NULL),
(110, 6, 'Cam Study Kit', NULL, NULL),
(111, 6, 'Moment of Inertia by Oscillation', NULL, NULL),
(112, 6, 'Universal Governors', NULL, NULL),
(113, 6, 'Gyroscopic Couple', NULL, NULL),
(114, 6, 'Spring Mass Vibration Setup', NULL, NULL),
(115, 6, 'Vibrating Table', NULL, NULL),
(116, 6, 'Governor Apparatus', NULL, NULL),
(117, 6, 'Transverse Vibration Setup', NULL, NULL),
(118, 6, 'Dynamic balancing – Reciprocating mass', NULL, NULL),
(119, 6, 'Two Rotor Vibration Setup', NULL, NULL),
(120, 6, 'Tachometer, Stop watches and other tools', NULL, NULL),
(121, 7, 'Basic Pneumatic Trainer Kit', NULL, NULL),
(122, 7, 'Air Compressor', NULL, NULL),
(123, 7, 'Hydraulic simulation software – 2000 version 1', NULL, NULL),
(124, 7, 'Pneumatic simulation software – 2000 version 1', NULL, NULL),
(125, 7, '8051 – Microcontroller kit with stepper motor', NULL, NULL),
(126, 7, 'PID Temperature Controller', NULL, NULL),
(127, 7, 'AC servo controller', NULL, NULL),
(128, 7, 'Servo controller interfacing for DC Motor', NULL, NULL),
(129, 7, 'Basic Hydraulic Trainer Kit', NULL, NULL),
(130, 7, 'Pick Place robot', NULL, NULL),
(131, 8, 'Computer system (Dell)', NULL, NULL),
(132, 8, 'HP Laser printer', NULL, NULL),
(133, 8, 'HPDesign jet 100 plotter', NULL, NULL),
(134, 8, 'Computer system(Dell)', NULL, NULL),
(135, 8, 'XL TURN CNC', NULL, NULL),
(136, 8, 'XL MILL CNC', NULL, NULL),
(137, 8, 'Solid works-2004', NULL, NULL),
(138, 8, 'Ansys-ver 11.0', NULL, NULL),
(139, 8, 'Edge CAM', NULL, NULL),
(140, 8, 'Master CAM', NULL, NULL),
(141, 9, 'PIN ON DISC', NULL, NULL),
(142, 9, 'WIRE CUT EDM', NULL, NULL),
(143, 9, 'VIDEO MICROSCOPE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `participant_details` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `organizer_details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `date`, `participant_details`, `venue`, `organizer_details`, `created_at`, `updated_at`) VALUES
(1, 'Management Program for Entrepreneur and Family Business', '2012-07-19', 'IV Year EEE', 'GGB 111', 'EEE Department', NULL, NULL),
(2, 'Guest Lecture on Tools design and Development for young Entrepreneur', '2012-07-22', 'IV Year MECH', 'GGB306', 'Mechanical Department', NULL, NULL),
(3, 'Workshop on Web Designing', '2013-04-22', 'IV Year CSE', 'GGB 204', 'CSE Department', NULL, NULL),
(4, 'Survey on Entrepreneur in Nagapattinam and MSME Official Help Line', '2013-07-18', 'MECH Students', 'Nagapattinam', 'Mechanical Department', NULL, NULL),
(5, 'Students Business Interest', '2013-06-21', 'II, III, IV Year IT Students', 'GGB 104', 'IT Department', NULL, NULL),
(6, 'Women Entrepreneurship', '2013-08-16', 'II,III,IV Year Girls', 'PG Conference', 'EEE', NULL, NULL),
(7, '1 Week Value Added Course On Photoshop, Android & Arduino Tools', '2015-01-08', 'II Year CSE & IT Students', 'Digital Library', 'EDC Cell, CSE & IT', NULL, NULL),
(8, 'Business Stall Competition', '2015-02-18', 'EDC Members, College Students', 'Auditorium', 'EDC Cell, WEC Cell', NULL, NULL),
(9, 'Guest Lecture On How To Become An Effective Entrepreneur(SWOT Analysis)', '2015-02-21', 'EDC Members & IT students', 'Mechanical Seminar hall', 'EDC Cell & IT', NULL, NULL),
(10, 'Business Explorer Contest', '2015-04-09', 'MBA Students and EDC Members', 'PG Conference Hall', 'EDC Cell & MBA', NULL, NULL),
(11, 'Photoshop Competition', '2015-03-18', 'II Year CSE & IT Students', 'CC3 Lab', 'EDC Cell, CSE & IT', NULL, NULL),
(12, 'Entrepreneurship Awareness Meet', '2016-07-11', 'ED Cell Members', 'Dr. APJ Abdul Kalam Block', 'EDC Cell & IT', NULL, NULL),
(13, 'Orientation Programme by FC EDI-TN', '2017-01-20', 'ED Cell Members', 'PG Conference Hall', 'EDC Cell & IT', NULL, NULL),
(14, 'Entrepreneurs Meet', '2017-02-21', 'ED Cell Members', 'PG Conference Hall', 'EDC Cell & IT', NULL, NULL),
(15, 'Workshop on Entrepreneurship', '2017-03-18', 'ED Cell Members', 'PG Conference Hall', 'EDC Cell & IT', NULL, NULL),
(16, 'AGRIPRENEURSHIP - Industry Visit', '2017-03-20', 'ED Cell Members', 'KVK, Sikkal', 'EDC Cell & IT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industry_academic_partnering`
--

CREATE TABLE `industry_academic_partnering` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_image_url` varchar(255) NOT NULL,
  `alt_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industry_academic_partnering`
--

INSERT INTO `industry_academic_partnering` (`id`, `logo_image_url`, `alt_name`, `created_at`, `updated_at`) VALUES
(1, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/oracle-academy.png', 'ORACLE Academy', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(2, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/IBM_logo.svg', 'IBM', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(3, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/EMC_Corporation_logo.svg', 'EMC Corporation', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(4, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/eboxlogo.svg', 'Amphisoft, E-Box', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(5, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/ICT_Academy_Logo.svg', 'ICT Academy', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(6, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/National_Instruments_logo_2020.svg', 'National Instruments', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(7, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Vmware.svg', 'VMWare', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(8, '', 'LinuXpert Systems', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(9, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Cisco_Networking_Academy.svg', 'CISCO Academy', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(10, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Dell_EMC_logo.svg', 'Dell EMC', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(11, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/nifs-logo-mob-1.png', 'NIOS Fire and Safety Institute', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(12, '', 'ABC Bricks Industry', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(13, '', 'College of Fisheries Engineering', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(14, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/AutoCad_logo.svg', 'CAD Academy', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(15, '', 'Praveen NDT Instruments', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(16, 'https://egspec.blob.core.windows.net/egspec-assets/industry-academic-partnering/Multimedia_University_logo.png', 'MULTIMEDIA UNIVERSITY MALAYSIA', '2024-04-05 05:12:42', '2024-04-05 05:12:42'),
(17, '', 'SOUTH EASTERN UNIVERSITY OF SRI LANKA', '2024-04-05 05:12:42', '2024-04-05 05:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"8e276734-ac01-4f0a-aa96-a2e23c42e882\",\"displayName\":\"App\\\\Jobs\\\\SendWhatsAppMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendWhatsAppMessage\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\SendWhatsAppMessage\\\":1:{s:10:\\\"\\u0000*\\u0000message\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:26:\\\"App\\\\Models\\\\WhatsAppMessage\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\"}}', 0, NULL, 1713277852, 1713277852),
(2, 'default', '{\"uuid\":\"3e57d81f-d1ed-4aea-86d8-b3b1a3d6b8d0\",\"displayName\":\"App\\\\Jobs\\\\SendWhatsAppMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendWhatsAppMessage\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\SendWhatsAppMessage\\\":2:{s:7:\\\"\\u0000*\\u0000name\\\";s:14:\\\"RAGHAVAN JEEVA\\\";s:17:\\\"\\u0000*\\u0000whatsappNumber\\\";s:12:\\\"919942502245\\\";}\"}}', 0, NULL, 1713279857, 1713279857);

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_categories`
--

CREATE TABLE `laboratory_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laboratory_categories`
--

INSERT INTO `laboratory_categories` (`category_id`, `category_name`) VALUES
(1, 'Engineering Practices Laboratory'),
(2, 'Metrology and Measurement Laboratory'),
(3, 'Thermal Engineering Laboratory – I'),
(4, 'Thermal Engineering Laboratory – II'),
(5, 'Manufacturing Technology Laboratory – I & II'),
(6, 'Theory of Machines Laboratory'),
(7, 'Mechatronics Laboratory'),
(8, 'CAD/CAM Laboratory'),
(9, 'Research & Development Laboratory');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_22_055814_create_slider_images_table', 1),
(5, '2024_03_23_181614_create_personal_access_tokens_table', 1),
(6, '2024_03_25_093225_create_post_sliders_table', 1),
(7, '2024_03_25_164956_create_courses_table', 1),
(8, '2024_03_29_170714_create_industry_academic_partnering_table', 1),
(9, '2024_04_02_054306_create_certifications_table', 1),
(10, '2024_04_02_061209_add_page_section_to_certifications_table', 1),
(11, '2024_04_04_142812_create_ads_sliders_table', 1),
(12, '2024_04_07_135750_create_courses_and_intakes_table', 1),
(13, '2024_04_09_051558_create_complaint_committee_table', 1),
(14, '2024_04_16_142105_create_whats_app_messages_table', 1),
(15, '2024_04_17_160756_create_equipments_table', 1),
(16, '2024_04_22_084715_create_routes_table', 1),
(17, '2024_04_23_034545_create_sport_data_table', 2),
(18, '2024_04_23_054914_athletes_and_achievements', 3),
(19, '2024_04_23_155314_create_nss_and_red_ribbon_club_table', 4),
(20, '2024_05_16_162744_create_events_table', 5),
(21, '2024_05_17_130520_create_women_empowerment_cell_members_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `nss_and_red_ribbon_club`
--

CREATE TABLE `nss_and_red_ribbon_club` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `pdf_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nss_and_red_ribbon_club`
--

INSERT INTO `nss_and_red_ribbon_club` (`id`, `year`, `pdf_url`, `created_at`, `updated_at`) VALUES
(1, '2017-2018', 'https://egspec.blob.core.windows.net/egspec-assets/nss-and-red-ribbon-club/2017-2018.pdf', NULL, NULL),
(2, '2018-2019', 'https://egspec.blob.core.windows.net/egspec-assets/nss-and-red-ribbon-club/2018-2019.pdf', NULL, NULL),
(3, '2019-2020', 'https://egspec.blob.core.windows.net/egspec-assets/nss-and-red-ribbon-club/2019-2020.pdf', NULL, NULL),
(4, '2020-2021', 'https://egspec.blob.core.windows.net/egspec-assets/nss-and-red-ribbon-club/2020-2021.pdf', NULL, NULL),
(5, '2021-2022', 'https://egspec.blob.core.windows.net/egspec-assets/nss-and-red-ribbon-club/2021-2022.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_sliders`
--

CREATE TABLE `post_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `desktop_image_url` varchar(255) NOT NULL,
  `mobile_image_url` varchar(255) NOT NULL,
  `href_link` varchar(255) DEFAULT NULL,
  `alt_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_sliders`
--

INSERT INTO `post_sliders` (`id`, `page_name`, `desktop_image_url`, `mobile_image_url`, `href_link`, `alt_name`, `created_at`, `updated_at`) VALUES
(1, 'general', '/assets/images/egspec-1.webp', '/assets/images/holi_sale_3.webp', '/', 'egspec', '2024-03-29 14:13:54', '2024-03-29 14:13:54'),
(2, 'wec', 'https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/1.webp', '', '#', 'wec-01', '2024-05-17 15:32:47', '2024-05-17 15:32:47'),
(3, 'wec', 'https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/2.webp', '', '#', 'wec-02', '2024-05-17 15:32:47', '2024-05-17 15:32:47'),
(4, 'wec', 'https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/3.webp', '', '#', 'wec-03', '2024-05-17 15:32:47', '2024-05-17 15:32:47'),
(5, 'wec', 'https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/4.webp', '', '#', 'wec-04', '2024-05-17 15:32:47', '2024-05-17 15:32:47'),
(6, 'wec', 'https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/5.webp', '', '#', 'wec-05', '2024-05-17 15:32:47', '2024-05-17 15:32:47'),
(7, 'icc', 'https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/1.webp', '', '#', 'icc-01', '2024-05-19 15:50:45', '2024-05-19 15:50:45'),
(8, 'icc', 'https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/2.webp', '', '#', 'icc-02', '2024-05-19 15:50:45', '2024-05-19 15:50:45'),
(9, 'icc', 'https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/3.webp', '', '#', 'icc-03', '2024-05-19 15:50:45', '2024-05-19 15:50:45'),
(10, 'icc', 'https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/4.webp', '', '#', 'icc-04', '2024-05-19 15:50:45', '2024-05-19 15:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route` varchar(255) NOT NULL,
  `operated_via` varchar(255) NOT NULL,
  `starting_time` time NOT NULL,
  `total_km` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route`, `operated_via`, `starting_time`, `total_km`, `created_at`, `updated_at`) VALUES
(1, 'Mannargudi', 'Kilvelur-Thiruvarur-Lakshumangudi', '07:05:00', 65, '2024-04-22 09:10:41', '2024-04-22 09:10:41'),
(2, 'Velankanni', 'Akkaraipettai-Poigainallur', '08:00:00', 15, '2024-04-22 09:10:42', '2024-04-22 09:10:42'),
(3, 'Thethakudi', 'Velankanni-Sembodai', '07:30:00', 45, '2024-04-22 09:10:44', '2024-04-22 09:10:44'),
(4, 'Umbalacherry', 'Velankanni-Alangudi-Thalainayar', '07:20:00', 50, '2024-04-22 09:10:45', '2024-04-22 09:10:45'),
(5, 'Srivanjiyam', 'Narimanam-Gangalancherry-Andipandhal', '07:25:00', 40, '2024-04-22 09:10:47', '2024-04-22 09:10:47'),
(6, 'Thillaiyadi', 'Karaikkal-Tharangambadi-Thirukkadaiyur', '07:25:00', 40, '2024-04-22 09:10:48', '2024-04-22 09:10:48'),
(7, 'Sankaranpandhal', 'T.R Pattinam-Karikkal-Poraiyar', '07:25:00', 42, '2024-04-22 09:10:50', '2024-04-22 09:10:50'),
(8, 'Kuthalam', 'Thirumarugal-Sannanallur-Mayiladuthurai', '07:00:00', 70, '2024-04-22 09:10:51', '2024-04-22 09:10:51'),
(9, 'Peralam', 'Karaikkal-Thirunallar-Ambagarathur', '07:30:00', 42, '2024-04-22 09:10:53', '2024-04-22 09:10:53'),
(10, 'Muthupettai', 'Alangudi-Thiruthuraipoondi-Pandi', '07:30:00', 75, '2024-04-22 09:10:55', '2024-04-22 09:10:55'),
(11, 'Sembanorkoil', 'Karikkal-Nedungadu-Arumbakkam', '07:30:00', 50, '2024-04-22 09:10:57', '2024-04-22 09:10:57'),
(12, 'Thirukkuvalai', 'Sikkal-Avarani-Thevur', '07:30:00', 43, '2024-04-22 09:10:58', '2024-04-22 09:10:58'),
(13, 'Thiruvarur', 'Narimanam-Gangalancherry-Senthamangalam', '07:45:00', 38, '2024-04-22 09:11:00', '2024-04-22 09:11:00'),
(14, 'Kudavasal', 'Kilvelur-Thiruvarur-Kattur', '07:10:00', 60, '2024-04-22 09:11:01', '2024-04-22 09:11:01'),
(15, 'Alathambadi', 'Kilvelur-Pulivalam-Mangudi', '07:15:00', 60, '2024-04-22 09:11:03', '2024-04-22 09:11:03'),
(16, 'Koradacherry', 'Kilvelur-Thiruvarur-Ammaiyappan', '07:15:00', 50, '2024-04-22 09:11:04', '2024-04-22 09:11:04'),
(17, 'Earavancherry', 'Annamandapam-Polagam-Poonthottam', '07:15:00', 50, '2024-04-22 09:11:05', '2024-04-22 09:11:05'),
(18, 'Nannilam', 'Thirumarugal-Sannanallur', '07:45:00', 35, '2024-04-22 09:11:15', '2024-04-22 09:11:15'),
(19, 'Nangur', 'Karaikkal-Tharangambadi-Karuvi-Thiruvenkadu', '07:00:00', 55, '2024-04-22 09:11:16', '2024-04-22 09:11:16'),
(20, 'Sirkali', 'Karaikkal-Tharangambadi-Karuvi', '07:10:00', 62, '2024-04-22 09:11:18', '2024-04-22 09:11:18'),
(21, 'Ayakaranpulam', 'Velankanni-Sembodai-Vedharanyam', '07:10:00', 69, '2024-04-22 09:11:20', '2024-04-22 09:11:20'),
(22, 'Karkathi', 'Thirumarugal-Sannanallur-Kollumangudi', '07:20:00', 55, '2024-04-22 09:11:21', '2024-04-22 09:11:21'),
(23, 'Thevur', 'Sikkal-Kilvelur', '07:50:00', 22, '2024-04-22 09:11:25', '2024-04-22 09:11:25'),
(24, 'Kottur', 'Velankanni-Thiruthuraipoondi', '07:10:00', 55, '2024-04-22 09:11:26', '2024-04-22 09:11:26'),
(25, 'Mayiladuthurai', 'Karikkal-Tharangambadi-Akkur-Sembanorkoil', '07:10:00', 63, '2024-04-22 09:11:28', '2024-04-22 09:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2o9yu3TzC3lHTeITi7ZvbEW67u904EhU9PfHBfz7', NULL, '162.142.125.211', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'ZXlKcGRpSTZJbGRtTW5rMmJscHNXV2RFWkVRMGVEVmpVMDkzVlhjOVBTSXNJblpoYkhWbElqb2lZV2t2YVVkWlpVZElOMkZ2ZEhseU1uaEtWRzFVVFRsV2NETk1NMHRyVEUxRUsxcG5iM1p4TWtSMVdHZEVaa0Y1ZVhNd1psSmtNekpRT0VsalVFRk1UVEZ3Y1daRWMzSmlSRGxQY1RaWk5XaFlLM0ZRTXpGbWVDczJlVVZQYTA0elMxRlhWUzkyYVVwbWIyd3JTRXBtV2xodmJDOWtTR2htTVZoWWVtSlRURzU0V1dwd1MxWlFTVThyV0VGYU1qSmpSRVUyVEhadldGUkdObEYzSzNseWMxSnZWWFEzZFRGdE9XcHBZV1l4V0ZoMVZuQXJURVZDYWxWb1dVSXlPRFk0ZG1Gb1QzWjFWMlY2Y25KcFFrNXpVVlpNTjFScGEwUnpUMlpaWjFVNFFrSkllQzl3Um1rdmMwdGhSbkJTYjBaV2VrZENNV014WWs1RGRXMHpaR0pIVkdKb0szTk5TREUzZUVOSU1XaG1UbWxHTVVGMWVrRTlQU0lzSW0xaFl5STZJbUU1WW1WaFlUWTBPR1F3WXpjeE5UZG1NMlkyTWpBd09HUXdZbUZsWWpWaE0yUTVZemN6WXpka1pqUXhaVE0zTlRsbVlUY3laV1EzTTJZd1l6VXlORFVpTENKMFlXY2lPaUlpZlE9PQ==', 1714612720),
('3Br2EkkDjtUNblz3hpYDI6ocqZL0HSdfkUtTq4h1', NULL, '167.248.133.183', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'ZXlKcGRpSTZJakYxTDBoS1VFdHJiMVJNY2pGQ1ZEVkZNbmRGTTJjOVBTSXNJblpoYkhWbElqb2lNVWhpVm01UFoydDZUM05YWnpoNVJYcGFUVGxLVkZadlV5dFplR1IyUW1KWVJUTTFialZIYVdObFNWUnlPUzgzWmxSNlkwWkNVbFpUVldJeVYwOVdXVWR3VUc5UVlUWnpSMnhEYlM5WlRuUjBMMFpQUlZkTVZqaExibU5ZYm1sRVdVWXhSVVYwSzFNMVNGSnFPVlZrUlRKdU0yVllXRkZ2U21GaGNUTnVSVzVPWkVKM1dXNDRSVkF2ZHpGd2FDc3pUaXRQU2tScWRGZEVhVUo0UkVZMGNYUnFSMkZvTWl0dVNEVmhiazFEYm5OSmNWQnVTWGhyU2paSGVqZzNkWEJUUkRaUlEyaFVhMU0yWkRWQk5ISk5Wa3g0UldkWFNHY3dTaTlQVVc0cmJraFNSVXBvU2tzMVZtOXhhbFpxWldrcmRIbGhLelUxVEdVdlNWVjFXVlpaUnpCT05GQjNkVmwxZFcxeFVXZzJXVFpTTTNsbE4wRTlQU0lzSW0xaFl5STZJbUptT0RBNVpUUTJOR0UwWlRZNE5USXdOR0ppTTJZMU0yVXpPR05pWWpJeU5qQm1ZVFppWXpZNU4yTmhZVEpoWkRCallUQXdOamhpWVRNME1tUXpaakFpTENKMFlXY2lPaUlpZlE9PQ==', 1715021541),
('3EPHXXWKAl33X2wmZkQVRZYvnKgJyKbUe3fOevlT', NULL, '120.56.93.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbTl0TjJSbFZIRklibWxDTWpKalkzTjZjbEF5WjJjOVBTSXNJblpoYkhWbElqb2lUWEZMWTBJclEwcG9Ta3hoZGxOS01tbENjbkZ6TWxWVlZUQjNXRlkzUkhwYWEzVkllV3RPVW5KblQxRXJXRTlqU0ZGTFpHUkdSM2h0ZUVGbGQzaEtObnBxWlZkck1taFBVMnhOWkhwVk5taFhhREJqZDBzemJtOUtPSEZ3TkVKcWVGVlVObFJ4YlhRNFZIaFhMMGxHWTNNMmVUZHllVU4yT1ZOWWRUTlNUVEF4YmpaT2NsUnRLMkprYTB0a2FtUXhZemRwWjBaUlFuUkpkakpvY1UwNWNIQlRZalF3V1ZvMlVrVlJQU0lzSW0xaFl5STZJakpqTnpVeU1ERXdORE14T1RZMU1qTTJOR016WTJFNFkyWmhPR0V5WVdNek16VmhZVFppWldNNU5UZGxNakl5TkRWbU5ERXdaakpoWVRFNFl6azNNak1pTENKMFlXY2lPaUlpZlE9PQ==', 1714135349),
('3lYqB7NWGx3ZNZgGRmgqb4K2iNtZnhw8avEYxUms', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbmhVTVROU01WTkVabmx6UlhCUmJFRlZUWEZVVjNjOVBTSXNJblpoYkhWbElqb2lWR2haUXpsb2VIRlpOV1ZSYUdoaVFWaHBNek54TUZOb05ETldTV295Wm5aQkwwNHlkREZYYnpadU9YSmhjMmxUZW5WaVNubEhLME4xYkZGbU4wSTFhbGxEVnpCVGVXTXpOWFJzZFU5dVoxbEZZM0ZOUkU5UVdVNXFla2R2Y1hCdGVFaHFjbXBVWkVZNFpFZDZSMFJhYUhwNEwzUXJNRkJSYUhNMWVWZFdTbXBqWlZwMkx5OW1MMjF4Y1dFM1NYUTFTM0ZMZFdjM2RXcEdhazFYVEhCR1RDdE5MMjlPUkV4SWVtcEhTbWhPVEZWMWEwOUdhVzVLVml0TGJHcHlNbEZ3Y21sSFdYSjZXVk5NU3lzNWExSldUbHB3TW1aVlZsaFVhMHR0ZVhWTlJuSk1VazlKYURCTGQwaHhTRmQ2TkRVeE5EUkRlRlUxTTA5VVMyRktkM3BRZFd4UFJFbFZZazFpWWs5MVpsQmtZbWRLVlUxU2EzYzlQU0lzSW0xaFl5STZJakE1T1RreE56QXdOell4TkdVd1lXTTJNRFUwWTJGaVpHRTVaR1U1WlRFMFl6SmpZMkZtTldOaE9URTNOemd4T0ROak9EVmtaVEkzTldFME5EUXlOamNpTENKMFlXY2lPaUlpZlE9PQ==', 1714643090),
('44TcvEfF50UoH07eS0AtmNBbQQRex4HD0O8UaeN4', NULL, '51.81.46.212', '', 'ZXlKcGRpSTZJbFpqTWtrd1VVOUtiRmhzYUVWRlZVaFlLMEpTZEhjOVBTSXNJblpoYkhWbElqb2lNMkZ5VTJ4SVlUaHNlazFXTTBneVJHUlZSMFpVVW1wSFNUUXhORms0Y1hrNGNXcGxTR2xvT1VsNk9GWTRNWGRQYmxJeWMwNXhPRlpVVDA1alVVUTBTRVZrY1dSMFZrOU9RWHB2VW5oMU1tdEpXRWd5UkdOUmVrZHVXWFF4V0dseU1tUjBhMlF6VkZkelVHaEJSMlZSVTB0NGRtbEJSVXR3YVdaMU1VVnVkaTlXSzBKRGFsaGlTQ3RZSzNRd1lURlZWakp4YVdsVWVVRkphMlpJYVhCcmVXVllNRVpTU0U1Tk1rNVJRemxFTTFBdldqbFBMMW9yUjFWNFNWWjJUSFpTZWpjdlJqVkllWEZOY3l0MmNXNUVTV3h6WTNkdWJYSjZLM05rV2k5MFJXNHdkRUl2YVdsdU5GWnFZa2hPZGtwVGRHWmhkMVJCY1RNMWMwSTBSMWRvZUdaWloySkRibEEwYXpGc1ZGWjVRVk5ZWTNnMmFGRTlQU0lzSW0xaFl5STZJakU0Tm1KaE5qVTJOR05oWXpNM05qTXhZelkyTTJFd1pETXpObUkxTXpBMU5EYzFPRFUxWmpSbU9USmxNVEZpWTJVMllqVTFPV0V3TXpCaU56azJaalFpTENKMFlXY2lPaUlpZlE9PQ==', 1714533637),
('5hNO9JNtgMJUBl3yLDa5E9TGttk3STFNYDAEmgfw', NULL, '198.235.24.181', '', 'ZXlKcGRpSTZJbU56VldwbllXWjJibTF2UVdoSlRtTjVlV1JKVTBFOVBTSXNJblpoYkhWbElqb2lRMUYwV1RkWE1FMXRkR3h4TTI5M1ZUSlBNR0kzTmtaQ01UQXdOVFpoVEZKWFpVZG5lSFpCTTBKQ1ZGZGtOVXMxVTNOd1JuaHRSVmhRYURaMk9HWkhjVzFVTmpWSVNXcDZTVk52UjJJNVpFeHFhR2xvZHpSSVFsQmxPRGc0SzBoaFNWRjBlV3RMVmxwa1NqZHVUMU13TVhsblZucHJNVlZKV2s1a2N6ZFphRzlFVTJSM2VFUTVVV2RGVEhsNWJFbFViM1J1TTBobFVFNW1hamc0Ym5wSlprUnlTSGxoTVhFNE5rRkxOMngxTHpsbk5tNTRWMFpLTURncldYRk5SRVp0TDJKdVNTOWxObmt5YVdSUlJubFNjRXN6UmtSWFNtZDZWMDkyTldkTlRERm9PRkV6VEU1aldHcExUSGwzYm1oemRVNVZURlZHWjJGRk0yeFlXRkEyYzJweVlWaE5VakV3TDFOSFVqazVka1J4ZERVdlRXYzlQU0lzSW0xaFl5STZJbUprTnpkaE9EUXlaV1ZtWWpVNU5Ua3pNV0ZqWmprMk5XRTNOV1ZpTXpSa05EZzVNMlUxWkRZMU1UUTRaV0UwTTJNMVpXRmxNRGM0TkdabVpERTRaVFFpTENKMFlXY2lPaUlpZlE9PQ==', 1716189364),
('5oWzWgMZijBFf0bQoir7yWRYOHwrPY4S1rzyuJFJ', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJblIwZWtacWJuaGhRMDFRZGs1SU9UaEpWR2xZWTNjOVBTSXNJblpoYkhWbElqb2liVE01YkRZeWJ6azVPRGc0UkU1UlJqRktjMlpMVTBSNlNYVnlVMmxhYVhSNWVYcE1kbEJZTUc0M1ZYTkVObTl6Y1VNNGJUSm1kRlJMWTFsMmNrbDRZbXBaV2xoU1JGaHdOMFoxVFZCeE5GSndVbGRqU21sSVRsZ3hNMFJsU2xOeVIwcElka3MwU3psT1ExTm1WQzluZFhKSmNYVkVNR2szWlU5TFpGVjBjMk41Y0hKaGNFNVFRWFJ2WkZaRlNVVkRibkp0TTBaQ1RqazVVek5qU2xsc2N6UXpXRkJ1WjJOYVpIcHFURkJ6ZVRkWVVVOTNhSEZEWnpWWk9TdExURWhoWVVZeE0wWm9hakpvYmtOTFRVMW9kRWxDWVVwcU9UUm1iMDE2U2xGMGVVcFFNamQ2YVVoV04zTkxUa2htT1ZCcVVuQk1jVWM1Y0RGSFJHdGhhek5UWXpSaFIyRjFSbGR3VVVSU2FIWjFVSG9yVm14MloyYzlQU0lzSW0xaFl5STZJall4WVRGak56RmtOR1EyT0dZeVptRmhNRFl3WWpobVptRXpZbUZrWWpKa01EaGhPV05pWkRneE1tVTFOR1ppTURSbFpXWm1NbU5sWldObE1UZGpORGdpTENKMFlXY2lPaUlpZlE9PQ==', 1715157254),
('6SCK6RgAFGceoK1s1bZRBJCTtRyt7xMOIiAnfFBh', NULL, '198.235.24.245', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'ZXlKcGRpSTZJbkl2YXpCVEsxSnllVXROY214M1ZXSjFlVUpwWTBFOVBTSXNJblpoYkhWbElqb2lkVFp1UlUxc1RsbFJha1E1TVRKdGVFWjRlazR4UW1rMVZTOVlSWEJWWkhwdFduSkVhbTFRVWtkMFIyaHBhMmRaV0U4NVduRnZVRzF4V1VkMU0xSm9VR3dyY25SaVpUVnNkMll6ZWxWMlpGUkVaVVkyYW5OSVZXbEtNRzlDSzFJMlRsUkZSalF3TWt4TE5EZFVNRWxhYkZSRFZXWXJSVlkxUzB0VE16QnBlREExZG5WUGQwaExaRXh4YjB4SGJWQmxhbE5ZYkhoQldFNXpVMkowTmxCTlJqSldNRzVtVVRkREwzWnBjV3hEVnl0aFIxZHBUMlUxWWtKckwybDNSV1Z3WjJWaFpEWlBiSGxTZW1oV2NrZHBUa2xHU2twa2JGUlJWa1pZY1ZKM2JsUXpkRzEwWlZCTmFuazBhVlpZVFdkNVJtZDRNRkIzUW1GeEwxbHlUell3SzBWQ01YTm5ZelUySzBZeloybE1lVU56VVU5cmVGRTlQU0lzSW0xaFl5STZJalppWVRFNFlqYzVZVE5rWkRnMFkyRTVZVFExWXpJeFkyVm1aRFZqTlRReU5qQTFOakF5WWpBNE0yWmhOelUwT0Rka1pERXlZall3TURnME56RTRNREVpTENKMFlXY2lPaUlpZlE9PQ==', 1715685111),
('apx8hKHuRbqHAM9ZOmPVIDOTUqH7eT8LrosaVvae', NULL, '205.210.31.228', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'ZXlKcGRpSTZJazlNV1hobFpFZElWRVJHZDBadFlucFVjVUpHVTBFOVBTSXNJblpoYkhWbElqb2lWbXBoVTFoNmRGVjJRVGhMZGpaYVF6Qm5PWGhtTjJ0a1dXOUZSMDEzSzBsa1JrWndja2xNV0hoa1ozUlBVRTkzWXpaV016RjNURTVUWW1SUFJsSkpLemx1TTI5elpWSllNMDFvUmk5MU5FWTRWemhJVEV3MlozSnljMnhPVERZME5VSjJiRVppV2xjMWFuSktTa1pDYWxGSk9XWlJOekZ1TW5kR1EzZEVka2hzVXpOVFpEWTVjbHBYUVZkMWJUUmpWVFZ5Y1Zsd1JUZFFUblZTTTNkdFpWVTJRMHMyVTBGVEsyczNLelJ0ZGxvelNubFFXV1pSWW1oeGRqZEtlRWx0YkZoNlFUSkxOREJJVlRWTGExQjZhM0p6T0V3eWFrVnRNMUZHVW1sNFRtZFBlazA1YjB0TFRsTXZibHByVTNaRE5XUmFObUZEY0VkcmQycEVWMjVPTWxGNFRURkJRblZTT1dsb1JqbGxTRFZWUVVJMGJXYzlQU0lzSW0xaFl5STZJakEzWTJJMVlqWm1OVFptWWpNNE9UVTVaRGN6Wm1SaU1USTBObU0yT1RnM1lUTXhOMkV5TVRkaFltTXlOR1kxWmpOa05ETXlObUUwWmpBeE16Y3pORE1pTENKMFlXY2lPaUlpZlE9PQ==', 1715917987),
('ASLKZBGpel8ff9M8Xr9xkVVqR6kfipPhGlJz1aja', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbUZYT0ZwWlJVRm5kVTlUWkUxUWNtNVhhSFZpWWtFOVBTSXNJblpoYkhWbElqb2lTQ3RDZUVOeU1tSlJaVmR2V21KUmN6aHZWRlJoWTFZeFNuUk9ZWEpHYzJ0NWMwVmxLMHAyVWtGSk5tMXRkQzkxVjBObGVpOVNUekZTTjNNelUyMW5ZMlZKU1Rsd05sUlBUVXRYVVZKSVRrTjRlR2htUW05NFpHMUdSbGx0Y1VsNGNHSXlOamxyZHpWNVYwc3dXRXRQUkcxalVWTnJVemxwZEZwSlFpc3JTbFJ0WVVGMVJWbFpTbVpzWlhvNGFVRk1lblJUT0RORGFsbHJVR2d2WkZReWRrNURiRnB3U0RkeFZuSjFOMGRETjFOQk9GUnhOREp3VG5ObldrSkVVREE1ZFRaQlJtUjFVMHhuVDBGbVF6WmhUWGRYTWxOMVpXaG1hSGRXT1dzclRreGxUMUZ5UWxSMWMwOHZURVlyZFhRNWVtRk1PVWRzUVU5V09VWlZlamh5UTNWTWQzcFBiMGRPTHk5MGF5OVpUelV5WkhOc2JXYzlQU0lzSW0xaFl5STZJbU0wWXpKak1qTmxNalU0WXpFMFltTTJObVJrWkRJM01XWTVZamxrTjJKak1HWmpOamhtTlRCallURXdNVGRrWWpCa09USXpOV1EyT0RjM05XTmpNaklpTENKMFlXY2lPaUlpZlE9PQ==', 1715231068),
('bDCaTfriOm1WoDyZ7zunncMLXn1DUc31T7vY5vPn', NULL, '87.236.176.225', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', 'ZXlKcGRpSTZJbTVqVWtkTlExRk1OR2RxYjJGWVltRkJSa2ROYmxFOVBTSXNJblpoYkhWbElqb2lOalpVTkhkWU5GRXlibEEzWjBKYWNHeDVTM0YxU2tKU1FWUk5kV1U0YlhoaFkyVk5lazlhY1VjM09HNXNURTQyZWtkSWFqaFpXSGxxTVU1TVJGRkZNVEZ2UTNSWlUxRkVhMWswVmtjMlMwUTRVR1ExYTJNcldEbDBRa1pzUW5sWWIwRjJkMjkxTlhKUVJIVldlaXQ1UWsxcGFYQk1NbXRTWm1obE1rRXdhSGRWWkVZMFNFMVdOVWxEVkRSUFN6WnpjSEZWTkc1R2RHeFhka3RTZEdSMEwwNDJSVEk0VW01dU1VUlhUemxDWnpGYVozWlVZM0UzYWtGeFdWSjBNVGRPTWpNd2VXWXdaVGxIVG1SSWJIWkpkMUJoYTJ4R1FXOUlVemxRY1RoWGRVeDVNVlZoWVUxdlRGSlNWVUpUTTBFMWFDdDRjbGxTTUVvd2JVbHBWV2g0VG04emFHOHZVbFZsT1ZGNlJXWlRUelZzYUcxUGFGRTlQU0lzSW0xaFl5STZJalppTW1OaVptSm1ZVEZqTkRsall6RmhNVFpqWldGaE16TTVOVGd3WTJVek1XSm1NVGt4WkRSbE56Y3pNak01TlRRek5tVmxPRGczTWpoaU5XWmpNR1VpTENKMFlXY2lPaUlpZlE9PQ==', 1715491669),
('bn7caCeT7zagFCTRl6JZtBvsdVAvAEZrL3Q9yxF3', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbkJHT0hoS1JtNUNMMHhWVEc1eU9ITnFOVUp0UWtFOVBTSXNJblpoYkhWbElqb2ljVE5YTjFOaE5IVk1XVGxNV1RWak5IUlJWVmxsY0dKUFNHWmtRVmR0TUVkb01WWklMMmN2UlZWNk5XTmlUeTh6TVVzck4zcHZjemxwZVVKNWRFNWlSazVLWmpsemNGUnRSbGxNY21wWEwwYzJVbHBXV1dkcVJ6Tk9XWEpOU1hOUlNuVlNXVlpyV0VONWFHMWpNRGczZDJOdlJIbHdPRUpCVXpsWVRIVlhjVkpzZUhReFVHSjRjV3RaUVdKaE1FdzNNbGR4TldWSmNtNWtUWGxtWm1VdmVGWkhSeTlhU0dWWU1scFNiMkpCT1RSb0wzcDFOVkpyYXpWVGRtUXpiMGg0VFcwMlJWUkJUakpCYmtSVmVsYzRNVEpuVURjNVVtdzVkWGxJVDJwemJDOXZLemRyTDA0ek4xaHRVWEUwUjJkRE16UXZRaXRRWWsxb0sybFFkRzVpWkRkNVZ5OUtaR1ZIUzNabGFURkdZV3QzVjNkWFkxRTlQU0lzSW0xaFl5STZJak00WmpjeE9EY3dZVE5rWlRBMk1qazVZV1V6TURZelpERm1OREF5WWpRd016RmpNVFV5TW1NNVl6TmpaV05tTTJRMk5ESTRZbUk1TkRZNE1XTXpPR1FpTENKMFlXY2lPaUlpZlE9PQ==', 1714643023),
('BN9wNsdYYwVHGI71gEAvbZXvwdYi74DKvPYBTOOO', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbUkxTWpWVVZtY3dkemt5UjJvMmVXTkhaM1U1TWtFOVBTSXNJblpoYkhWbElqb2laVVpIWm1GRFNtOHpjbU01UTB0YVEwRnRTa1ZoZEVaUU1VTXhPRzQyWTI5TVZUSmpLMmgyV2tRek1rbDNRekkwYmtkRGVHa3lkM2hSV1RWNWVEWnVVa3RZYUVkMlpEVlZPSFZrVGpaTE5qRjBhV3dyTUhSWE5reFhOR2hWUlhkMGFtWXZkRzl0VFVkWlEzcDNiMWtyY1ZWV0syaEtlRXBNZHpJNFJXcFpNMlIyYm5KYU5EWnRjblJqWVZJMU5WQlZSVmhRSzFWWFltbDZTWGhvYTJkUlFtSm1SMlZVYTJ4S1VHWkNkR2hQU25jMWFYbGlSeXR5TmxkYVdHTTBPRTFSWlVSbmNVcEdNWEp3YkZaQlVYZFNLMnBoTUVGMmFuVnlaREJqTUVwRWRXWnNLMG81YVROdFZXeDZVM1paYTJaU2FrZ3JSVlZoTkdkSFYzSnVObWcyUmsxdmNGUnJZbmh1TjJodlZHZzRjRWh4U0VSREwyYzlQU0lzSW0xaFl5STZJbUkxWkRrM1pXUmlNakF4WVRnelpUZ3paV1psWTJFNU16azRaR1UxWmpsall6TTBOREkxT0RCbVpUWm1aR1ZrWm1Gak1tSTRNV1F4WWpabU5EbG1ZVEFpTENKMFlXY2lPaUlpZlE9PQ==', 1715158489),
('Cr4WzMvG7JgpAMb6Wf6FmvyrDJQeG8P3d6cCmV6M', NULL, '94.102.49.123', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 'ZXlKcGRpSTZJakZVVVVvNFZqWnhRbXBtVnpONE0xWlBhVGhTYW1jOVBTSXNJblpoYkhWbElqb2lOVEJFVGt4aVYxSndaVE13VEROdmQyUkNkWFJaWkVjMFdVTndNbmhCVmtOSWRsQmphek5HVFVscWJFaFdlbHBPYUhJM1JWUlBiREZYZVVGSmNYVjRSblo2UzI5UFIxcG5iM05uTjFKVVFUVkRhVVV5WlVWNE5FcFBhM2h4YkRoaFdISXpiMEo1VTBseVNWcEVkRXhxTURsNGJrY3dhREJzUW5CTGRqQXhTemxrTjJaeVFqZDBSR0ZSUkVScFVDOHdlVE0wYVVOMWJEbFdXbXRLTDFSU1QwSnRkbVkwTUM5cllrdFdhME00Wld0RlowRmxaMU5yVDBGeFpFUnlUVWQ2ZUVrNFRYQXpWMHh2Tmpsc1pXVllRelo0YVhOaWVtTTFiVzQ0UTBkWVMwMW9iMnN4UW1wVk5XdHVTbFZWYlU5dE1UbFBMMDR6Vm5ZeFZFRnZSRkYzY2pBd1NHTmFXR0ZpWmpneFFVSkNjVEpoV25CbE4zYzlQU0lzSW0xaFl5STZJbVpoTVRObFpESTBOVGsyT1RoaE1HVTJNVEkyTlRBMlpUUm1NVEUxTnpaaU56QTNNR0kyTW1ZMk1HTXlNakZsTW1OaE9UTTVPV0ZtWkRnMFkyVXdNR0VpTENKMFlXY2lPaUlpZlE9PQ==', 1714825806),
('CrQbC3dzQouj7CqM56XCzS4B8EwfWzUrDy7umrCL', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJakpWYTJaWFpWVk5RVU5aU2k5NGMwOXpjMDFLYldjOVBTSXNJblpoYkhWbElqb2laMDlTWmtRM1dTOHdPRlpOYjAxc1VDdFlSMnN3Y1hsNEsyeHBZalJpYms1bmJuSm1MME15VWl0RWJrUlZjWGhEVEVwTlNrTmFaVFYyVldSME1tZGhhVEUxZGpSdk1XaGFhbkpHUkVWWmVrTnhUM2xHV1hOWmVFZHpPSEJhYVVGT2QzaHhSMFJOZEZGM2FGZ3JPVkkzV2tocmVHMVZaa2haU3pKMVZFUTRZMDlWSzI5QlpqTkJjVE5DZEd0dGEzZEVkWEkzUkhrNVoxUnJLelF4VFd0NFRtTjJkVFJEVnpaTFRVVTRQU0lzSW0xaFl5STZJakUxT0dJd05EWmhNelZpWWpFNFpEa3hNalkzT1ROak1tVXpOMkk1TWpoaU0yTTFZMlk0WVRBeVlqa3dNV0ZpTW1VME1qUTBOV1U1WXpGa1pESmhOVE1pTENKMFlXY2lPaUlpZlE9PQ==', 1714214856),
('DYanTV9AJZYp1OjN9QnT4oY9pedz7DoVOSPXXOUm', NULL, '45.83.220.211', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile6.0)', 'ZXlKcGRpSTZJbnBRSzFKcWJ6ZEJWMHhZYkdSblUwVnBTVlJuTjFFOVBTSXNJblpoYkhWbElqb2lSbGhVUmpaUmNrbHJaSEpoTlZkV1ZWWjFTakZWYUV0VGJVMHdlbEJLV2tGdWIwZFVlSEJ3UVdaeWMwTTVURGhHYXpaaU5uWlBWMmxUU0drNVNDOUdlbk5SY25KaWJXMXBOalkyYW5FeVVYbHhTVU5oU1VORFNXVTFaVXhTUkdOMk5XcExTVWR4YTBwbFVYaE9USHB5Y0c5Wk1YUnhhMU0xTjFWTWFrVmhWSGRVTDB0UWEySlRaQzlxTXl0WVJqTk1NemxGVkhBNFZGRlJTSEZLYVRaUWIyRXhkRlJrT1ZSNWF6aEthVUZFV0d4MFNVdHBhV1JJZFVKVFdtNWtaM2gzZWpsa1RsWnhSR015YzFGdk5XRXhlVmxEVTJGR1VWUTNXSFJsVEdWSmRHSTRTRmRUUVhOUmMwSm1WRlpwTDNWVlYybHdZalo0YkVvcmFFUjZUWGhyVlRkdGEybEJaRXhQWkdwTVZUZEVLMmRGUVVGemNIYzlQU0lzSW0xaFl5STZJak5sTkRaak9XTXlPR1F5TnpJME9EZzJZV1UyWlRnNU16TmxZbU01WkdRell6TmxNV1psTlRsalpEaGxNekZsTldRMk1tVTNaREpsTkRJeE1XWTJNVFFpTENKMFlXY2lPaUlpZlE9PQ==', 1714201385),
('EbgDbxncMZQ7aJC7VDbcyUuTDLpU3IlYkv1cfYDz', NULL, '117.243.147.128', 'Mozilla/5.0 (X11; CrOS x86_64 14541.0.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbEl5Y25vM1YxZ3hka0pxZGtGd05FUTNhRlZEU1hjOVBTSXNJblpoYkhWbElqb2lURTkwY204M2NFUlpOMHhWV21sV2VtMVpOazl6VTNadVFYcE5iRUptVVdkbVFVWnZVRVE0ZFVKS04xazFVazR6ZEZwV1ZrNHJWSFVyZVc5Q2VUZzFOV1ZOWjFsMGRTdGtSVnBCV0dNMGRrWnNOMkUxWmxObFVHTXlVR2N2UVZoeFprNXVhak5UZG01WGFqRlJiamh6Ym5sc1NYWlFSMmh6SzBSSFRXUjZRV2cxY21OdWVtSkRVMnQwUWlzMlZ6SlpURVJhVGxWNU1WSlVjM2hVV21NcmNGVkJiMFJtYTNOS2FFaFJVRE4zU1Vjd2RsVmxkRmhLV0cwNVRVVm5PVk5hTDJGQk1uTlZWMXBQZEVwdFVXTklTbGw0WW10UVJFbGpNelF2WkhvMVRHNVBaRzk0Tkc1cVdHbEVjMFZuZEM5clJreElZblp5ZDJaR1NrazVXbFk0ZVhwWGFWVTVSWGN5WVU1S1ZsaEZjVEk1TDFaUFYwRTlQU0lzSW0xaFl5STZJakF6T1dWa01tSTNOR000WmpNMU9HTmlNamRsTjJNelpXWTJPRE5tTmpRME5UWTNNekE0TXpCbE9HWTBORGxpWW1VME5UazVaV05tWTJFME5EVXpObVFpTENKMFlXY2lPaUlpZlE9PQ==', 1715503456),
('evUJkDH6ncdEyov0eOceeDvM81OSNHlTLlcexBKw', NULL, '167.248.133.183', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'ZXlKcGRpSTZJbFJZVjFWSE9URTJWM0IzVEhWaFRVTnROQzkxVFZFOVBTSXNJblpoYkhWbElqb2lTbmh2UWs1UFoyazVkMlJaTjBwdVRtSXlNR0pxUlhKWGNWSjJiRTVqTDNrclVXbE1OMFl2YkZCT1ZFWkJNRE42VHpsSFFuWjNTblpxUWxsaGNFeHRlbVZJZWtKVFMyTkhLMGhGYldsYWVEQkhNR2hLU0hwS1JtTkdVV3RuUmtWdE4zaFZXQzh4VVdRNGQyUm9PQzgyZERGcFUweEhXVVV4VldoU1pqUnNNa1JqUlZGbFZ5ODFXRzA1VUd0aFVVVkNSbk4yVjNRNE1qUjVjREo0TlRGdGJHSnZUbEJzYjJsclUwWnRhRk5qZUVOcE5HTnBZemxCV1U0NGNsUjNOMEVyUVVFNWMybzNTbU5tVGtjMWVHNWhjVzE0WXpRM2VFUnBTak13YzJSdlF6aE1lRXBKU0ZKcU5YRXpaWE5ZVHpGVE1VVXZUM2N6YkRSYWNuSXpiR2R4VFU5WlJVVndiRU5SUWpobVIwa3lXalpaYmtONVVYYzlQU0lzSW0xaFl5STZJbVkyWmpNM1l6ZGlPVEZpT0RRek1HSmtZalJtT1RsaVl6UTNZbUZoTldZeFpqa3dabUUxTXpFeE5qSmlZMkV5WlRGaFlUUXhPRFExWWpZMk1qVXdPV0lpTENKMFlXY2lPaUlpZlE9PQ==', 1715255173),
('F88LGuOyrP5D6aFr4NLyl6ZRopKlzbsuniQr3PrV', NULL, '46.51.152.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.5993.0 Safari/537.36', 'ZXlKcGRpSTZJbkJZSzNacFowczVaWHBvU1RaRE4yTTFSMEZUT0djOVBTSXNJblpoYkhWbElqb2liMmM1Wnl0cGIwTklZMGhaV2tsVU9ETjZhR3MwTjBWMlVuVlBaVzFxTkdkRlowdHZRMHhMWlZvelJUZFNRelpyTm1OTFdEQnRkbEZqVFdZd2QyMHJjMlI2YlRaQk1YcEtLMXByU1ZaMU1XbzFkMFV2YlRsMVJuSkxOVXBXS3pSRmJVeDRRMU52TUdkSk0zYzVTR3BTYTBSd2VVNXFUSFJOTmpoNVRqVTJNa1ZqYW1Ga1dFbGtWeXQwYTNaaWFFMVhkemt2VjBkRFREbEdkRTE0VERRMmFUVklkR0pWTUc5SE1XcEtOVVphV2tseFVuTlZPVTVKY0RZeFZIRmtWVUYxVFRCYVQxb3lMelZLWjFGSllrbERUa015WldVeE9VeE5SMk5LT0ROaGVETjZURVptZDIxcE1uVlRWVlp6TkZJMmJVSmhhbWxHV0ZReFFUbHlRVWwxVFhSRFVuTjBaV0pSZUc5TFNITmhWRWwyUldSbFZGRTlQU0lzSW0xaFl5STZJalEyTTJKalpqa3dabUpoWVRCaFptUXlPRFUxTVdOaE5qbGxNVEkzTmpNM1pUZ3hZVEl5TnpCbFptVTNPR1F5TXpkbE1EWTFaVFE0WW1Ga09EaGxOV1lpTENKMFlXY2lPaUlpZlE9PQ==', 1715158503),
('fESWVN9icWr815ArrqgAARwrXLqCPjmo2rdKraJw', NULL, '52.19.96.241', 'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)', 'ZXlKcGRpSTZJbmRVWlVORk1EQmhiemh3Y2xCdlJYVkRjbkUzZFVFOVBTSXNJblpoYkhWbElqb2lieXRzSzIxTWFYcHVTMlpQUjA4dmQzcGlWWE41WVhwbE1FSkRXRUZWU0ZOVk9GZzBabkJtZFZSdmRqaHFkVGhHVW1FNVNHWXZaQ3RrY1c5Q1dWcFhaQzh5UlVaMlVsazJRblJNYzFZNFdsWkdRVXhsVGtORmRFaFBZekpKYkdZM1VHWjVRaTlEZDNsTVduaG9jMlpxVkc5bGFFWlBhRFJyTW1semVUTkVNRVVyVURodVZqVkhNWGhvZWpKc2JTdHRNMGQ1UVV4d05EWnZURlJpSzNGdlRXOTBiRE5NWTFkTFRuTTFVR3hDYzBncmExaGhRa1F5SzNVMU9UZzNTVVpJVWxOWmVFVk5aREUwTmt0Sk5GbGFLMk5hVFhwNmFqZEZhSGxTWW1GME9XZzBRVVJGTjJSQ2JrWlBMekZRVW1RM1VFcFJORWM1ZUVOSGJYQkNVRTVhT1VrM2FFZzJhMng2TmtGQ1ZTOUxRMUJsSzFrNU1rRTlQU0lzSW0xaFl5STZJak0wWWpNMVltTTRNVGczT0RnMFpHTXlNakptTVRabU1qVmlORE5pWmpnek9UVm1OemN3TURZMFltSTROamcwT1RBMVlXTmhOMk5pWmpZMFptSTNNV0VpTENKMFlXY2lPaUlpZlE9PQ==', 1714987343),
('FGOfiIcKzPooUJNs0bTNJFoknR3WJ2XQAvLXT87E', NULL, '128.14.231.139', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_0) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11', 'ZXlKcGRpSTZJa2x2VWtwMVpDOTBVMmhNTTIxUVprMWlUMDFTZWxFOVBTSXNJblpoYkhWbElqb2lkalZRT1dKYVZtSTVjbGhsU2pVM2ExWjBlRmh2WjJaVU4wTm9RaXN2TWpWRFZEWlRNbXB3TUVkR0wzcG9WMGRqT0ZOV2QwRldhM2xGT0d4dk9UWnJWa3BuY2swd2JUZE1jakZUWTNCYVlrVktXV0ZQUzBkeGFXOTRhMUpGVVcwelUyWnZibVZrTlc1NEsycDBWVXRaVTJrMmVHcHljVXBDUlhGcWFWZDJOMk51YjNabGQyaGlRM1phVDA5aVV5dFVWVk5uTURkS1pTOWpiVGxJVkhCNVRGcHNkVlZQZVdwMVYxSm9NVE5CTXpGRFUzZDBhMGN4VW1acVZFWnpaVVZUVkVwR1ExTk5UWGxzVEVOQ1YyTmlVRVZITjJkYWVVZDBZaXMwVTNaT2JVWnRNVFJhYW5KQk9ETjVWbTFDTmxNM1dFUlhNVkYwZVhCaGRYSnJTMUl2Y0RsbU1sY3pSMjlsSzFwNFIwbHRTbTVOUWxVMFduYzlQU0lzSW0xaFl5STZJbUppTVRjMlpqUXhNVFE1TkRoak5XVTRPVEkwTW1Nd1kyUmhaVEV6TW1FNVl6TmtOVFEyTjJKbE5qY3pOelF3WkRsaVpqZzROemN4WlRRNU5ESXpaRFFpTENKMFlXY2lPaUlpZlE9PQ==', 1714142384),
('fqmWdhfKamBaYaEfzUs0L40HMOH01NUMWR43I3Ve', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbGhRY3pGVVpETTJXVzB6WlhBMk9VZFZiVU0wY0hjOVBTSXNJblpoYkhWbElqb2liMWhwVGpKRFkydEpXVmxJYWtkWlVrcERWMUpsTjBaTlVXZ3dTWGQxVVdrdlNsbHlWMU5zY25KT1luWk5kVGswY0NzMFFVNTFlbWh1UlhFMVZYRjRiWE5xVlRFeVR5OTFOekJ5TTNrNWQzWmhTR3hRY1dOVFpWRnRWbVJWUkRscFF6TnJXbUpUT1ZONGRHOUJNVWhKUjBaM2VUUlVTek4wUzNSVGQxbHdhMGxoUm5ocFNVMWFVVzlKVFZkYVJ5dHNjSEZWZDJZeWRWbFJhRlFyY2tndlNXeEJlRGwwY1hOa2RXZEZUMnROTUZOM05uSlVkemxLU2tSYU5YTnJVVmhVT0hWekwzTnNjRXRpWkVsMFlWTkZlbmxPVkhObFNXRjRkWFphVmtsMWRtMUhWR1ZGTUZOVlRqTnBkM0psYlN0MFRFTndXVEZsZFRaNFdEVllkREp1TW1JNFFYUjJZbGh1WmpCTVVscEVlVnBCU21WbE1HcE1hREZSTldGS01HTnRUalZhYURkV2ExUk1RMGs5SWl3aWJXRmpJam9pTVRreFpEUTNZamszT1RBNU9XSmxZekU1TXpOa056VXhZelZsWlRnMlpUZzVOemd6WmpKaVpXTTRPR1ZrTkRVM05URm1aalF4Tnpsa1pEWXpNR1JrTVNJc0luUmhaeUk2SWlKOQ==', 1714192478),
('g3MjdIXn7gMI58xstGJhrHgwKdpADgIGeHTcnCHv', NULL, '167.248.133.126', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'ZXlKcGRpSTZJblZCUVVKdWVUbE1TRkJ3Wm5KdVltZEhaV1JJYldjOVBTSXNJblpoYkhWbElqb2lkMU41VW5oek9HeG5NMnBNVFVseVZGTnhVbVJtTkVKb2EzY3JUVmxGYXpKbVlrMVZPWHBVVVhwWVF6TkdaMmwyY1U5TFkxUXdSbXg2YkRoSGJqaG5LMHd6V2k5dVZVdHdZbFIwZEc5aEsxZDVWR0p4VlRkaFZYTnZkRnAxVURkbWFHTmhWRFo0TmxkNFVqSkpXR0Y2U2psdlExZFVlbTlyYW1GUmEySlBiRzl5TnpseFNreFlaaXRDZFVVNFR6QjFNMVJHVW05R1ZtNU5TMWw0VkRZeFRrVnVkV1ZPY1U5S09EWllTbGcwU25JelVVNUlaMGRJVERWemIwZExMMnBaVEdOMGVubElPVWh3V1RFeWVTOXpNMUpyZGpsbmJETnBlVmhsUlRGWlFsRm5jMFJ6UTA5blkzRlBWVWxyVUhWVVNIRmphV3B3Wm1WWmVFVkVjR3BZVVV3d2FuTlJka1JFYm5WalVIRnlhVmh5SzFGYWRIYzlQU0lzSW0xaFl5STZJbU00Tm1RM09EWmlZak0xTkRKaVptWXlObUZoWW1RM09URmhOakJtT1RNeE5qbGpZakEzTURFMk1qSXpOalpoTnpFMk5UZzNOelpsT0RrM05qUXhOelVpTENKMFlXY2lPaUlpZlE9PQ==', 1715246933),
('haRuE5LWF0zSfYfI5bexn96D630qEEsrldoRNHtA', NULL, '59.96.235.79', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbE51ZVdkRE1tdzNWek5sUnk5MlRVUklSakp1YzFFOVBTSXNJblpoYkhWbElqb2liVzlPZGswMlRWb3piVTlpVDNwTWFXSnZSRFV2VkV0Tkt6aEJhVXBwUVZGME1FRnBVRUU1WWxGUlFUSktSa2h3TUdRMGEwczNSMUJuUlRkVlpITkhlbWRITDFaMVNFUnhWM2xqV1c5MlpUSjBabUZ6V1RsMVptNVZNRE56ZGxCNmJtd3hPR3RJTm5KdVEzZG1Ua2RXZDNSaVdqVTRibmt5V0VVNU5sRnJVVEJNTnpaS01EZzJZbmxQUTNwYVdGRnRTSGxrYlc5MldXUXJhbEpYYkRsRWFFNHpVa2h1WTBobGVtbDVUbUZGY0RKR1pISkZPRWx0T1VOVGQwWkZORFpsV205T1pXNUtXVkYxTUdSelRGVkVTa3M0ZURodlQxUnFRWGhYTWpaSFJXeHBNbEpwY0hob2RqUkxkVTVzUVZZeGNsWkxlRGx2WnpkT1VURjZMMnRqV2tGeFVtZzJlbkJDYlVOMk5DdDBlalJYVFdaTmEyYzlQU0lzSW0xaFl5STZJalZsTmpsbVlXTXdORGs1TnpVd1ptRTJaVGc1TjJVelpqZGhNRFUyTldGak1HVTFOemRsWlRJNFl6TmxZamsxTkdJd05qZGxOV1V4TW1VNVl6QTJNamdpTENKMFlXY2lPaUlpZlE9PQ==', 1714701565),
('HlKUAPQ9EMMbKDqU6ySxsQM6co1xcbklaiyV9YIW', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJalZOUkZrMGVqSXlObGxYYjFoNmN5dHROVXRzWVhjOVBTSXNJblpoYkhWbElqb2lablpvVG10NFVVeHdZU3REVERkM01GaEhlbmRuYjNVeUswaHhlVkpUYzBwak1sYzNXalZsVldsTk9YbDRlRk5EZFZkUU1IWm5RVnBFYVVacmNWWkNMMjAxTkVWM1FsRXhXVzAxTmxSalREVlVZVWx6V25wdFRuYzBUbEYyYjA1aE9VZENkR3RKUWtONFVrdFJiRFJXT0ROS01ISjNZa1ZXV0c4MGFuY3pWMmcwT0V4TmNXNVZkMmhLVDI1YVVpdHRkMnRGU0Zkb1pHUXpiSGd5SzNKT05uTmllRVJ1VVdkNVIzWllaemxZWjNnMU9URnBja3czWVZkWk5Ga3hXWFUwV2sxQ2VHZGpSbUpGYXpKbFQwVk1VRkJCYkhsYWIwVk9hMDVyVVhjd04xbFFPVzkyY3poVk9ETkliVEZ0UzNocGJETlRia3N5VkVkRmMxbElUWGx5ZHpNM1NEbEVaR2xVUkZaa2JYWm5Vek0wVVRsa2NYYzlQU0lzSW0xaFl5STZJamxsTkdJMFpXSmpOamsxTVRkbU1UaGxObU5rWWpVMU1HRXpaVEl6TnpKa01XTXpZelEzWmpabU5qRmlNakU0TnpreE9XSmlORGRtTnprellUaG1NRGdpTENKMFlXY2lPaUlpZlE9PQ==', 1714460747),
('Hy7ojMWL8ju0ej4tVcUopm9Xn5vmb2bosyjLv56r', NULL, '115.231.78.8', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.2623.112 Safari/537.36', 'ZXlKcGRpSTZJbE5aVUd0UmVIVlllbk4zVkRsMmFFSk9VVFpVWlhjOVBTSXNJblpoYkhWbElqb2lTMnRLZEVSVFVVaEhhMnRDTmpKMk56WlZORnAwT1hoV1UwTXZNekYzT0c5WGRFSkxRU3RWVmxNNWVucHllRVI2ZFVsbFRVUk5Lekk1TTB4Q2NVeEJSVVZEVTBscVVtSnJNRXBZUjJWTk56UllTekJLU25oVFJWb3lRV3RCWVdsS0t5dE9lbTl6SzBSc1UwVkxWR1UxYUdoS1IydEpUVmQ0Wnl0T2VVOXpPRGxITUZCeVpsVkpaekJDYkU1NlpEQlNTM1ZPZWtSeVVUSnZabmh4VGxJNFpWaG5XRTFVSzA1MmVFaHFRMFpNWTFsRFZtWnJaVUp1U2pWT01VMUpZVnBPY25VMVJYRnNSemN6WTFndlkxWlpRMDFoZVc0d2VXOVpVWFZDY0U5Rk1tWkZlVEpoUnk5eWFFUmhkeTkzV2k4dlNpdG9VaTluWVhWS1JrRnpjM0ZDWXpWdGIzWlFZbWs1VVV4eU9GcFFUMU5QUkhOaFluYzlQU0lzSW0xaFl5STZJakUyTkRWaU0yTXpNakUzWXpNd04yWTVZamMwTW1KbU1HRTFNekk1TXpNM1lUUmhPR0kxTlRZM01qWTROakV4TXpaa05tRTNNamhtTldRM05XWTFaRGNpTENKMFlXY2lPaUlpZlE9PQ==', 1715962678),
('ikSuDX6an6lYYM9ShlQ5udgb2T3xeLpjNuRXToRv', NULL, '135.148.100.196', '', 'ZXlKcGRpSTZJalZ5ZEhGa2VreFNhVzFQTkV3eUwwUXZWMkZZWjFFOVBTSXNJblpoYkhWbElqb2liMFY2V0ZVeldERldRWFExUVZkRldqTndLMlZOTjNOQ2IwdE1Sbk5IZEZsNEswZFBXVEZYTm5Wa05HWkpXRlpYZUhOdE1FWklPVTlxT0dkRFMyZENXV2QwZUVjelVtZ3lTbXhyUmtOdVozUlRVREpXWXpWRFJrOUhMelJWVVdSa1ZYZGpkRU56V25SRlUyOXNUVVowU0VZeVprWXpkRWRwWVVkbEszQjROa053V1ROSVFqUkZZVlEwVXpseE1tTmhibmhLVVhkck5HeEZOM0J5WlROcVUzQnlhRU42TW1sbmFFUlNRV0YzUzJsM1p6RkNSbFpMUVV4SVdGaDJLMlJEZVdRMFJYUllkV3BOYm1KeloyRkZNME5TVjI1VE9WQXhjbE12YVU5M1dUVlpNM2MwVFhCSlVGbFJkVWRaY205U05WVjJkM1JrVkVVM1MzUmlNWFZEUm1saFF6WjVlazB6VGs5emVrZFhVSHBZU205MGVHYzlQU0lzSW0xaFl5STZJamxsTnpZNFpXWTBOekZrWVdOaE1EVXdNekkwT1RJd1pUWTJaV016WVRSalpEZG1aalE0TUdVd00ySmtZVEF3TW1NME0yVmpaalJoT1RZM01tSmxPV1lpTENKMFlXY2lPaUlpZlE9PQ==', 1714542462),
('jarzA4KQPLyx9O8fwPsGAP5vbR7JK6ZctETAeECu', NULL, '80.82.70.198', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 'ZXlKcGRpSTZJbTF4YzA1Rk9XeHRhakV2VWxCTFQzcGxPRTVLUldjOVBTSXNJblpoYkhWbElqb2lPRGR2U0ZCeUwxQlViRW96YVRoTVpIbG1XQ3QwY2taV05IaDVabWtyWkdFMVZVZ3laVThyUkU4elRXbzNhVGhPVFN0eksyVnJlSGcxWnpseFlqSnRkMFpzU1hrellrMUhaSEZxVEhsMWFHbzJRazVqYlZrd0wxUnhaVzlSVjJwV2JucGhNRVZUWm14bVNqSlpNWGwyUkU1b1ZHWjBPSFl6TUVrdlF6QnBVa014TmtOWFdsRkdOVEpuUzNCdlkxbFBPWFJGT1VOTVZuWkdVR1pMYmt0MGFqTjBLMGh0UlRWNVRXZE1heXRPZW1vMWIzVmpNRGRMVFVOblRscDVUMVlyTlhWQ1VIRTViSEp5SzJzNFRYUjJaazl4TVRJdlRuaERjRVpLVUc5VmRHTjNZMHhKWTFKWlpuUXlSbVpsWVdaRlJVWlBZMlJEYUd0TWFUWjBXVEEwWlUxVGRYVlhjakk1UTA1VVNHNTNiM0JFUVRsME5FRTlQU0lzSW0xaFl5STZJbVptWTJOaE5EbGlObU0yWVdFNE4yRTVObVV3WVdJNFlUaGtaak0xWW1Rd1pXSmpZVFE1TldOa1lXTmpaR00wWlRoa01UWmxORFprTmpNNU5tWmtZV1FpTENKMFlXY2lPaUlpZlE9PQ==', 1714825792),
('JCWKEL797LqFstXFHkKrurl4LafjbeaOygtuuGgx', NULL, '18.203.138.237', 'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)', 'ZXlKcGRpSTZJbGRaTURKamJVeDZaSEl5UjFSVE0waHZXbUp3YzNjOVBTSXNJblpoYkhWbElqb2lNMVZ1Y21GR1kxTnJXRGRuU0hodGVpczNObUpNVFVNeGQwZHVkbll2Y1hRdlZqZFJRWEJGUkhWVmVqaElWVzluWkZoUWVVbHNSVUYwT1ZFek1VTkhRM2xuTTFNeFJ6SnJWRWs0UWt4UE1pOVBSSFZNUVhOS1oxWndUV2R0WWtSeWJEbFBZMjVuYUROWlkyNUZVMDV1VkVoNVVUTjJaV0UwVEZORWExY3hLM1ZXTlhaU1RWQTRZM0kwSzBRMVJqRkhlVEJ1VjFKaFF6TldUMFpEWkZkeWJrZHNXV3BSYWpaUlJIVjVTSE5RTUhSS1ZWWnZhbEIzVEZCalVGQjVZMHAyTldsbE0ycHFOSGcxZVN0WFlYbEJVbTF3Y1doSlVIRXhTVmR5VlVwWWFpdG1WMVE1UTNoVWJrZEpOalZJVDJwbVVFUklWVzVPVmpkcmFIZGtiRTVTZUhWcEx6SXhUamh5VUM5RlowRXhlSE5yTm1OQ2NVRTlQU0lzSW0xaFl5STZJamcwWm1NNFpEbGlOREk0TUdaa05ERmxPV1U0WWpVNE5UWTBaV1U1TVRWaFlqQTFNVGd4TVRKak1HWTVPRE5pTVdZM1pUUTVOREEyTjJRMFpEZGlOREFpTENKMFlXY2lPaUlpZlE9PQ==', 1715003030),
('khmBq1MIc9CfLXNM84ySWyMHdcYL8ge6T15HF7mn', NULL, '64.23.216.114', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJazFDTjFaWFFrVkZWR1JzUldWRVJXZFRaVWN3YjNjOVBTSXNJblpoYkhWbElqb2lhbkJMVFUxNlpVNVpaMlEzUnpSek0xcFpVa05QY0VGV1VIQnZabmQzVTFJdlZHcHJjMW96WjBobldraEtPWFY1VlhWTFNUWmpZelo1ZUVsQlREaEdaMkY1WmtORUt5OWpWVWMzVTBSSk1sWmliMUJUZEVNMWFsUlVVRVJKWWxscWFHaFRVbFJEZDBwVVVtOVJNVkl4VkZsTU1teG9ka3hXYjNFeE1rUjFOVFJTVkRsR2FqTk5TWFI2VEVWeFNGQkthMEpyWVVKTGFYZHNTVTFqUzJkUmVpOWpkRzFoYVcxUFIycGpPRmczVFVsYVoyVjJlbVpaZVZKcU9VNXphRk0yYmpVd2NFUkNhbFptZG01eFpXbERSMGRWY2xGNWFXVnhVSFpJYlZCTVZHMDNlREZPTmxjNVNYRTBkMjlqVDJ4NVdrOXROWEVyU1dOSlVFbFdaWHBVVFVScmNsVkdTMDV5T1c1UVZtcGxUMkZsUjA1M0syYzlQU0lzSW0xaFl5STZJalZtTW1FNFpXTXhZVEJqTjJZMk9ESmxORFkyTnpRNE5XSTFOV1pqTlRVeE1XRTJOalV6WkdabE4ySTJPV00xTWpKa1ltTTBZbU5rTUdFeE1UUXlOV01pTENKMFlXY2lPaUlpZlE9PQ==', 1715498898),
('KZEgfUyEVxSwqkBFpCYRdOUbySqZy9rP8jk0TvGY', NULL, '188.42.195.140', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 'ZXlKcGRpSTZJa3RaYzJSSlUwMTBja294YkZKUVIzYzNTV1prTTNjOVBTSXNJblpoYkhWbElqb2lRVTl1VW5SR1QwaFFTbGwyUW1SYWMxQXhjRFl6T0RKTFMycEdlVVEzU1U5TmVraFViR2QwSzBSbWVVbFJXallyTlhSQlNVUTNWbVpTV2pSbFdXRmxablI2V2t0b05ESmFhRWd4ZDBaWGFXeGphR1pIZVdsbVIxZHlSVlZtYVZsdVUxTlZUbkZhWkdZMFpFNUJUVzlxUlhBMFdIRkpUbGxFVEZOb1VEaHpVazVQZUZFMFRqSkpUa2RLWTJkemQyZE5WV05KVkRKRk9XRlFkMk5FYXpaU09TdEZWV0V4V0ROVWFtcGtWVmhwYUd0ck4xQnpaRGxIZVdSeVdHVXJVMWhZTTJzMGEwRmtWWGh4VDNKVVNtaE5iRzRyWVZSWU1IYzNXRGhZU1ZWRVNGRjZaeXRxUld4M1dXVkllaXROV210MlVYRlRSMUJJTHpGd04ycEtaRTV6UTBjNWNFazBPVVJMY3pBM1ZHMUVXVXRaYUZsRVRHYzlQU0lzSW0xaFl5STZJbUl3WlRWallUVTROelV6TjJZMU5HWXlNV0k0TW1Ka1ptTmxObUUzTVRKaU5qQTFabVE1WkRRNE4yTXdNMkpqWWpBNVpqZGhObVZtWldNMFptVTROR0VpTENKMFlXY2lPaUlpZlE9PQ==', 1714919316),
('lIPWrrxjjHG8A9bqr7QyiowWd3MZpK4JCYsZ2UWu', NULL, '103.213.38.101', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbWxUTVVSR1NXcDBhWFJQVldwblp6Qm5SVGxqTlhjOVBTSXNJblpoYkhWbElqb2lkVmxQS3padVNqUmhaakZtU3pOS2VqbHZZM1YyZG1wQlVYTmhSbGxFUjNSSWQxZEtOV3BWYUdGR1JtOTNiM2d4UmpGc2RubEhOalp5Y0ZCdWNFaFpRa1pXVW1KS2RWb3pjV1ZCTDBKVWF6SnFRa1pTY1hKU2QyVjRiMDlSY1RsVVdFdFRWbHBQYlhRM1prdFhNM1pXY0RsMVVYWkZPWGxSSzFJME4wNWFUbVZtTTNweWVXVlBVbWt6YjJOWGVtOXJVVmR4UzAxMVdVNUxZMjlHUm5JeFRHWTJiRTFrVWpOU2VtRnZQU0lzSW0xaFl5STZJakF4TkROaFlqTm1NemRtTW1Wa1kyUm1Nak5rTkRGaFlqRXhNemRtTXpVek9XVmxaalZrTkRKaVlUZGtNVE0zT1RNNFpHWTNOMkkxWWpaaVl6ZzBOVGNpTENKMFlXY2lPaUlpZlE9PQ==', 1715617232),
('mNFCrj4qg9RdjxGQM7fkgsa9XB8JZJ6044gqs3y6', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbXR6YldOU1pWQmhjVWRCUTNCblN6UTJkVUY2TlVFOVBTSXNJblpoYkhWbElqb2lkR2xUV1hkTE1rMTVNVWxFU25reVlrZHhWWEpGZEV0NE1VeEhkRlVyVEhJMFJqaDJVeTl5UW01MGQxRjNhREpWWlhWTEwxWllOMk0yTmpSSlMwRkpPVWx6UjJWb1JEUmxhblJZY2pReGFFVjFVM05MUjBoVGIwVTRMMUpMVW1OSGFXWkRXRk5aV0hJeFMwOW9iWEJDVW13NVVITXpjVVpLT1RndmMzbEVja0kwWjFBNGN5OUJiRVV5VFd0WFdHMVRVRzlXUms5WGVIb3hkbEZWU0VaU2VWSlVRbGRZVDBjM0x6bHhNMlpQU1VabllqRTFZV2h4V2xWRGNFZDVZbkEySzFOU1RFcEZjalJuUldKSldVUXZVemRxU2tSMVZIRkxkVEI0WjJsUFZ6aG5Wa1Y2Ym5sVk56ZG1kRUk1YmxKSU1WTk5USGRxVXpkWlMyMW9NRzFSYkVsSFJEZHRWSGhVU0RWa1F6UXpZVlJKVVc1c2IzYzlQU0lzSW0xaFl5STZJakE1WW1NMllqRXhOR0UyTVdWbVpUQmhZek0yT0RCbE0yVTJPVFV5TWpKbFpqWXlOakZqTW1JMU5qUTBOVFJsTVRRNU56ZzFNVFkyTm1ObE1tVXdZek1pTENKMFlXY2lPaUlpZlE9PQ==', 1715231064),
('NCFp5Pq9jrbYsOLNTehHMb0xG2UdMTetX0cO8wgd', NULL, '46.51.152.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.5993.0 Safari/537.36', 'ZXlKcGRpSTZJazU1WWl0eWRGQmxXamR5TDJ4MFFYRTRNRmhyTDJjOVBTSXNJblpoYkhWbElqb2lVV2R3UW05cVdrTkVkM1kzU3pWQmNVWlJaVUZUZWs5UVdtTTRSWHB4WWs1elltbE5WMWh5U25VeVNYZFRjVWRYYVhwelIyWTJjM2t6WkZSM1VEWk5jM3AzWXpJM2VHMVZjRFUwUWpad2JqRklPV1JYWlZOalFWSjVWemhJTlc1RE5uRjRTVzFZVUdOWU4wTnZPVFpIZGxGS1JUUXpUbTFSUm1GWVExQjRZbGhoUXlzeFpqUllTMmxQUXpSeVFqTnhTQzlITVhVNFVVZERTRkJGWnlzelJESnhUMmxXUTBaWGEwZDZTbkpNWm1KMVdHMUNWVXhsY2k5dlppdFpLMUphYkRNek1FMXhVRTF3VjJSRE1YaHphekZETlc5aFlsRlFTVlJRYmxOVU0zZzFhVUpoY1dWWU1HSm9jM1pYYTFVM1dWSkJlREZHWjNwNVRWVjZRMUJCWW1SMVlqZEVjbkZzT1dwdVYzTnpiR1ZRYzNkd0swRTlQU0lzSW0xaFl5STZJbVEzT1dReE0yUTJOelJtWm1GaFpEWm1ZekkyTmpGak1XVTBOemd4WkdNNE5qY3haVGsyWkRBMU5ERTRNemM0Tm1abU9UTmlOR0l6TW1Wak5ERmxaR1VpTENKMFlXY2lPaUlpZlE9PQ==', 1715158503),
('nCjooOCeMC9p3QK00ZzgG4WYcLBkGedXtAJrjdOp', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJazVZTkRWbGRTODNla1l2WkdKR2VEQkJXazV3ZVhjOVBTSXNJblpoYkhWbElqb2lhVXRJVHl0dWMyVkhXRklyWkdzemRVVjJLMGRyUjBGYVluSkpSWFV6UTFKRFMybEVjMUpJYWtaUVZtMDVVVGRSUldacU9HVXhaM0ZXVWxCeGEydDRURnBHY0VKRVUzUTNNR052YTFST1VHUnBhMm80VTBwcWNGcFlRa1EwV1ZndmJGVkdaRUpWYjI1WFVXOXVZalpYVWtZeFRIbEtVVWRwTVhWSWNFRTJURXBzUlVsNlpYUlBkM05YVkdnM1VHUjBORmRoVHpsaVJXRlVabkEwUTNWWlJIWkNNa1pNZG14UlpYcEVWa05hVm1reWRHVmtOemxwTmxVNFUyOWFNVlEwZEVJck4ySnljbmMzWmtwS01GbHNVU3RqYVc5eFdFOTFUVFpaVGtKa1JFc3dkamh1WlZJeE5WUkdNWFZFT1djNFYybERRbXBJYVV4TFdsaElhMEpOWTFweGJrWlVkWGhKV21jd1JHMXNTMGxDYlN0dFdVRTNVRVJvU1U1dFZVNUZOamw0VEVadmVIRktabmwwVUcxNVJUTnNhRUZxTXl0akx5OWhRbkY2WWxjaUxDSnRZV01pT2lKaU4yTmhOMkkwWVdabU5UTmtZVFl3WldVek0yUTFOVEl6TXpFM04ySTNaakl6TURjd1ltSXpaR0ZoTjJVeVlqWmpaR00xWXpGbE9ESXhaRFEzTVRVMklpd2lkR0ZuSWpvaUluMD0=', 1715334243),
('nNeXrXFYkAHBYP3j8QD0pjkKRR8ngFfEbdzP5xPG', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJaXRXWW5wcEsxcFdkVWRSV0dGRVVUUTFjbkp0VldjOVBTSXNJblpoYkhWbElqb2llbnBWZFhwall6QkdaM2wyT1daRlpYTjFXbTlJTW05U1ZXUk5hekJITnpka2RVdExlbEYyZDNKTGFGbGFSbU56YjJGdEwyOXFPRWhETVZBMmRYQTBMMmQ0Y1dWaU9YcHdSVXhuV0RKUFVHSlVUekpTVDFwb1VrNWxTV0oyT0dkVWJuVlZhRUowY25KNFdVZGlNWFpFVjBoTVNGb3hZMHhOV1dGR2MxQkdWME16UkN0TVJFMTBSMjB3VjNaelVtdG1RMVFyVW1wMmFYZHlaVWhhVjBSalQyZ3hUVmRxZVdoWlJDdEpObFJvVmxSTmVuRXJWVmR4TW5OYVVsRlBlVkZPYmpndlpGb3hlWEZRUlZZMk4wSkNiMDlVWTJ0TE0xVlBiWGRYZUVWNFFXRklORUp0Y1V4cFEweDJPR2dyTDI5MFQybGtkMDlpVjBSRGF6QnlTbGxyWkRaemVsWTNSbWhEVFVKaFNDOUVha3R5T1VkWFNtYzlQU0lzSW0xaFl5STZJalk0Tm1JM1pEUXdaRFF3TkdRNE4yTTBOamRsT0dSall6WmhabVJoTVdOa1ltVmhNV0UxTkdFM016Z3dPRGswWVRReU9HWXpaR1ZoTmpka01HVmlaalFpTENKMFlXY2lPaUlpZlE9PQ==', 1714643021),
('NsPF0ytZpl6HtbHzZGUubGzJQVrcjhrwOmengqLE', NULL, '159.65.45.132', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJaXRwSzFGeGVUUkRTa2xGUVRCd2MzTTFXVkEwVWxFOVBTSXNJblpoYkhWbElqb2lVVVUwVjB0WWNqTmlPR3c0Y2xwd1RWWk9SSFE1U1hjcmFIRnhPSFZ0YVc5RVNteEpXbEIyS3k5bGMxTkpNakZ4TlhaRVJreFlSa05LTVVsWWJXUndkR0UxVkhrck4wMXBPRFZwVjIxelZHRkhOSEZpVVhGeWFVcDRNRFY1TTNGMkt6bFRaU3RtYTFoTlpqUm1RV2t6WWtGUWRVVjFTVTFqYWxkcWNWaFpLMGdyYm1WSFJXbDZSVkl3VW14U05WRnNhSHBUU0VST1Z6WkxMMk16VkhadFkyNWpkSHAyTkROSmFHRXhkWGhoUldjMmJGZFpkSEl3WjNCUFp6TjFhV1ZaVXpsRFNEQXhNWE5ZUjNCUWEyOXhRMGxhVEU5elVEaG5NMEZPY0hSTE5UVmhUbE5CWnpoM1UxQkxiV1Y0VmxKb09HOW1MM0pFVlZnMFF6TjFaa2hHYmsxak1rY3hUSFJoUm5WU04xVkJhV2M0YjJsQ1RsRTlQU0lzSW0xaFl5STZJbU15T1dVM05qSXpZVGczTXpnMVlqYzBZbVUwTWpreFlqSXlZemhtWmpneE5UbGhZelpoWWpFMk1qWmxPR1psWVdFNU9EZzNNMkkzWXpCa01UbGtaR1FpTENKMFlXY2lPaUlpZlE9PQ==', 1715083889),
('nv2qDbpsqlNVWQqewcmUNVgSoJE9I6yoavwg5kjm', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbHB4VG14V2JqZHlURm81UVhSMlRqTmljSEpMVkdjOVBTSXNJblpoYkhWbElqb2lZV014YTJSblRUZEhVeXN3YlRoNlJFNU1jM2RzTkVoUVlURnFkMUZWVHpOdE1IZGlTSGh1VVU5MlpWbFFaSE0zTlRWU2VEQmtVMDFOWXpsaGJsTXdNamhSYW1GVFFuRXZMMUpTWVdrMU1uSTFNazlCWVhOMGIyeDBUa1ZFV0RBd1pFTnFSVzFXV1RsaVEzaFJRelpQWW1aWE4wUkJkRFpETW1sTVpVNHdOMkZRVDA5S1UyMXFibEJIVkVkeFprMW9lR2M0WjB4WE1YTkdkRkpNYnpCbVJsZHhZVVpTVldaaFJEQkhWbVZLTlU1UWVFOU9jbXhETWxsVlNHY3lWV2h0WTNVd1JXZHJTV1puUXpOamJXUlNOMUF5YVM5aU0wNXBRa2RKTDJaSFVsRkpkbXB4ZWtoRFNUaDBja3NyWWt3MmVUVjJaV00xYlZCWVZUWklPVnB1Wm5OelZYTlZhelp3VHpSUk1WUnBiSGs1Y1VjemNsRTlQU0lzSW0xaFl5STZJalkyTVRjMU16TmtOalV3TXpRMlpqVmxZalUyWW1Fell6QmhNemc0WldVNU5EZzBabVpsWkRBNFpXWTBaREpqWWpjME5XVXpNakpoWmpJelkySTBOallpTENKMFlXY2lPaUlpZlE9PQ==', 1714643029),
('obPnKymbBvjEFjN0oUhVbBUYpr8giKv1rRNh3yEh', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbEExTDBsSlpreHpOSEZOTURGbk9HTnNTVE5rZUdjOVBTSXNJblpoYkhWbElqb2lUMHR2VVN0eVdGcFhMM05DYVdaSVZEazVlVTFqWVhwTUx6a3pVRGhUZUVORmJrOU5WSHB5TVZobE9TdEhTRUpIVHpGak1sWnpWVWhsVVVrMFduVk9TMHhEWkdsMlR6TnVXSGhQTmtkV1RuazFOSE15TTNKTGVHeGFkWGxwVm14TVZrSlZWV2RYTmpkM09WQnhOMHBTWkVaMFpuRmpTM2t5UjFRMmFHWTNVQzlKTTFOUGRUWldVMGxoZWpsM2EycE1kVll6UzFWeGRrNVZVMjVJUmtWV2MwRlhRemgxWjFSNGNWQjRjVVpOT1dSVUsxTXpjRzh4UkdNNFIwdE1lRXh4THpWSE5HcHRXRXR2YlhwTlpWTktWbUZJZHpSTGQwNUhaWFJxTWsxck5YcERVbmtyVTNsM1p6VmpTRWRPUTFWUFpHTkdObVo0UlZjeWFXNWpkMWw1Y21JcloyUjBSRGwwZW5wM09IbHdTRTQ1WjFGcVREWlJLMjh5ZGpFMmVFOVlZM0ZYUmpGWlVsZzNWbXc1Y0cwMFYwOWtZMDFSU2xaeGRXbHFaVVJ2UlU0aUxDSnRZV01pT2lKa09EVmtOekZqTVdaaU9EQTNNekF4WkRBME0yTmtZVEl3TldVMk9USmhaREppTldVMk1XWmpNR1JpTXpBeE1HRXdOamd5WTJFek9XWmhZV05pTW1ZMUlpd2lkR0ZuSWpvaUluMD0=', 1715247804),
('OUJPE23NsDXvbOEdN88IhNm9EieoGiDd2tWjymbS', NULL, '87.236.176.4', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', 'ZXlKcGRpSTZJbXAxVUhGRllrZFhSbXBtZDBWVUt6WXZlVTEyVjBFOVBTSXNJblpoYkhWbElqb2lSalJPUWxrcllXeE5lbkpUV2xKVWFFWnBSbll2UkRsWWRUVjRibGxCVUdwalpVNHdiMWRyUW00dlFtNWhRakZZVFUxdGFFNDRabWg1TkVkWlltMTNSbTFvTkdocGN5OWlOVUpUUTJ4b1owNUhZbTB4WVVWQlJIY3hSVGg2YWpKbFoxTkdUMEZ0YVdadlIyRlpNbVZWVXpCNlZHTnVNa05VYXpsNEx6bFZhRlZHYm1wcmFXZDVkQzh2ZFZKa01sZHdhR0ZUZW1keE5IWlFTemh0TW1GNVJqVnJZMnBKT1ZkWFFsRllaRTlMVEdacWIzRkRZVlpyTjNKMFkxY3habmxyZGpKek0xazRVMHh6TmpSeVFXa3pPVzVOUkRaUllVZ3haek5uVm5sT0wwdHpiM0JCWkVWS1ZUZ3dVRXBhTUVsSlltUkJXWGxZYmtvelIySlNjMGxTUzJGdVFsbzFNbTlOVjNKMFEyOVNUM2RoTUd4UWVFRTlQU0lzSW0xaFl5STZJams0TVRBNU5UVTBNVGt3TmpKaE1UWTFOVFkwTVRVeFpHUTVObUV6WVdRME5qUXpZelJoTmprek16UmtaVEZrT1Rnd05HSTNOamsxT1dJMllqWmlOMklpTENKMFlXY2lPaUlpZlE9PQ==', 1714277496),
('OXBv8Wad2bnSApgqgEti6NPfnMY81zUm87xPKP2N', NULL, '87.236.176.249', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', 'ZXlKcGRpSTZJbUl4UlRkRFowNTBSVk5oV0RGV1Nra3pVVGxyT1djOVBTSXNJblpoYkhWbElqb2lWblpRZDA5aFQyRnhWbVZYYkdoT05rVmhNRFJRV1dGV2NFcGlhR2hMVjBSRlJEaEdPVWxUVW1NNVZsWTBkbEJqVXpad056SmxabmhpWXpGT2RXeEdOV3BRVkc5cE1HUnpPR05TYm5aaVVVY3dTR3RYUnpFeFJVMXFjRTQzWjJac1ZsZzFaVEJUTlRreWN6ZGFkazB3ZWtwM2FIWXJSelJRU2s5SWFDdEVRbkpxYlZoSldpdFRSVTgwVm5wcFUwbGlObmw1VFhkTk4yNUlTVlpZV200MVZXWlZhRVJVTTFoV2FGVjRPV3RUVHpCSE1ESlhNMmg0VkVSak4yRTVlR0Z2TlVVMlJGSmtjRmxOSzBWaFpGWldRVFF3VkRWRVVXOXBXRWR1TTAweFlrdHFaVmQyV0ZCVlRWbzBaVGxhVkdRelJVZzRURzB5VEROb1RtSTRjVEJCUjNnemNHbEZNSGhQZDI4d1QzWlhSR3cyYTJOVVNrRTlQU0lzSW0xaFl5STZJalkzTUdWalpHTTRaR0poWTJNM1lqUTNNamcwWXpKak16VTNNelJtTTJVMFltVXhPRE5qWWpFNFpqWTFNbVUyWkRsallXSmxZMkk0T0dSaVlUWTVaVFlpTENKMFlXY2lPaUlpZlE9PQ==', 1714224022),
('P6RHrYiUenty5JWIR32McKXPtpirmWnKOz7mLcD9', NULL, '115.231.78.8', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36 QIHU 360SE', 'ZXlKcGRpSTZJa1ZhWTFoWldVWTBSWE0wWm5Cb01IWnNUelUwZFhjOVBTSXNJblpoYkhWbElqb2lkRFV6TWpoNFNGTnZkR05YZFZKMlFWZGxRalJKYlU5dEx6VXpTMVZZV0c5YWJVOVpWRWxPYVdGaGNtZENjVkJXWVRoYVNXdHlibUZzY2xocU0zVm5lRVZyTW5KQmNtRkZURzQzZWtaR2RFcHBkVlpDVEdKdmFtbEZVWFJZU1dWbldVY3hNV04zYms0clRIUlZUekY0VDNZd04zUjRUamxMZFhWU2FFSlpWbk5XYlc5c09XdE9aamxGUTFSQlZVcGhUWEY0UW5CWWJqWjJlVGhzVUhkNFJ6TlNUWEpCYVRKUlNIWkpWRVkyYTJ0dVVXWjVhSFZsTXpCak4zUTJTMmRNY1RKRFYwZzNaVEk1Y21ZMloybHVUbnBGWVM4eVJUTjVRVUpwWkdGd1NEUnZZVXBUWjNodk1VSkVUbWhhZW5wUFJteE1PRXBUYVRaeFNHcFZlREphVm1VNFdFOVZibU5CVlZaQldGQk5NMHRCU0ZNeFRsRTlQU0lzSW0xaFl5STZJak5sTkdFeU16a3dabUZsTmpobFlUWXhZemswTlRoaE5HSmtNR0k1Tm1KbVpXTmpaR0V5TXpsa05HWTJPR0psTldJMk5XWXhOR0kyWW1NMllUUmhaamNpTENKMFlXY2lPaUlpZlE9PQ==', 1715962436),
('qI4uHdD8vsnrospzXB4dLkxXQaaoaGDYXE6j8ETe', NULL, '103.213.38.101', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'ZXlKcGRpSTZJbWxPVTJWYWNtMVBWblJoUW1oc1MxUnFabTFEVFZFOVBTSXNJblpoYkhWbElqb2lTakpwVm5Ga1NYcFpXV3BHVERSRFkyZDZaMmQwYW1WTloxVjZjMkZDVEVkTFdsTnRNMkZ0ZVdOek0yOWhSMFF6T0dkMVdIVlNTWFIyYmxneFQybHdXamhaUTBzMVYxVlBZbWhWSzFKSVQyUXhNSFo1U25kS1VsWkhNREZ6U0RkQmIyVjNNa2hUVkZwRVprNWtRVGszUmtKaldIcFFURTVsV0ROVFMyTkNUbEExY2xSd1ZHUTFZbTkzV1hFclZrdGxkRkZVV1hkMmFsVkZValI1Y2tKc1RVZEZNbWRyYjNKNk9XUjZaRXhzZDA5bE1uQmpia0ozVWs1blFrNVFLMmRJUW5GSlVtZ3ZUMDFyTlZJd1Z6VlFOMjFOWTJGcVNXeFZVRWRwUjJ0VlVuaFFWM1Z5V21WcGJVSjVPSEJ0YURaR1oxUmtjV0ZIVVd0cGIwTXdhVzFNYkhJMFJXMDROMEpEZEdOSGFGQkpkemR0ZEd3MGRXYzlQU0lzSW0xaFl5STZJamt5TjJVM05qSTBNalZrTVRnMU5qa3dNVFU1WXpaallUYzBNMlJtTkRrMU1HUmhZMlk1T1RZelpEY3pOVGRoWlRGa05XSXdZV1ZoTTJFMk5Ea3pNak1pTENKMFlXY2lPaUlpZlE9PQ==', 1715639505),
('qz2ErlQfD1yWWga8pr45hLHz9P8ADKtebojMPLkl', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJalJpWkhCb1NreDJkMmh2YmtseFQyazJRMWRLVUZFOVBTSXNJblpoYkhWbElqb2lRMWRSZEVabk16Sk9TRFZvTlVKS1ZVdGpaMGt6VXpsd1JEQldVaTlTY0ZSQlZ5dEZibmxMVWtaR1ZIbENOV1pzTDBOMmVERmhXV1ZCWVZrMWRVeGlNMDVxY21OSFkwUkdUV2R1ZEdOSE9FMXdjRkJrYkhCMVdXcG5ZMWxQUmxCcWNrZ3pOM3A1U2xGSlFqZzJLekEyWlU1cVNXTm5PVmR2YmxGemJYbEZhbE5RTnpWMGNrUTRObGhCYzFWcWJDODJWRFJ4T0dsSWJVcGxkRTVGV2psNUszUjBZWE42TUZjeVZESmtNWGswUVhSM2RGcGpaRUpJTVZGV00zTkRhRFpDUjFJdldWUktPV1Y2YzNJMk5FWk1jR1JsUTIxcWJrUkhNRk4wVUVNemNtaHdiRmRNWjBkVmQzZGtjbmQ2V1dFeVIxRjNTVFV3U0RGcVRWaERVakpqZDJOWmFHRmlaVzl4Vm1WcmEybDFSbU5DTVdKak5tYzlQU0lzSW0xaFl5STZJak5sWXpVd09XTmhOamN3WkRjMk9ERTBNR05rTnpBM04yRTBNV0ZtWlRnellXTXpOMkpoWWpaa1ltWTNNMkprTkdSbU1EaGxPREpsTkdJNU1HWmxabUVpTENKMFlXY2lPaUlpZlE9PQ==', 1715231065),
('r6nZTv52LIWIee8Ch6RDdOtwRw8toLLurLyfPD0O', NULL, '54.74.137.99', 'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)', 'ZXlKcGRpSTZJa1Z0YXpsNGJXNHlkbTV4ZFU1bllVWnFjVEJhVkhjOVBTSXNJblpoYkhWbElqb2lUazlTYWxaa2FVdERXR1F2TlRSbEwyVkhZbkJyTUM5ck1XVlpPVTV3TlRaWVoxTnZRa1JrZVdNeVNFOUNNbkpGTUU1RVYxaGxPWFpoTlVSMU1VZGplbWxpVmxSNE1HSkxSbXRWVDNaQlYyMHlhQzlaVUVrM2FEVlFLelpWT0ZrclREaFJhV0pOTjFGS1QwNHJaMEphWWxGcE1FOXBORVZYVkVwRk4wMWxWakZxWmtFNVVrbDFhbTVJYm5JclpHUkxaamxQYzI1NWJHNWpZazVwU0VsR09HSk9jV2RRYUhCMlNXSkpMMmhRWnpBeU5rUjJaVTl3YUU5V2NqbFZZWHBJVTFBemFqaGhSMFpuUlZaeVVFNWxXRXR6U2tSMWNIUllVMk5yUzFKblVHSlpiRFpTUkVnNFdFbDRlbXBTTjBGVVpXeFFNVU5xWTB0aVVrVmtkREp3U1VwQmJqUmxXWEZLWm5SSmRXRXZNVVJuVm1jclRXYzlQU0lzSW0xaFl5STZJbUUyTTJKbU9ESTNOVGd4WVRBMll6TXpOekExTkRKaU9UTXpOVEkwTURObU1qVmpaREUyTVdKak9ESTJaV1ppTVRBeE5XSTRPRGhqT0ROa05tUTRNelFpTENKMFlXY2lPaUlpZlE9PQ==', 1714674497),
('RrpS1fHcDo8dxTH67Vy30qJCJ8E0q4q7tHZmdFW4', NULL, '103.213.38.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'ZXlKcGRpSTZJbWRtY2tsTE5tWjFiMWMxY1N0SVJrWkhOVXhSVTJjOVBTSXNJblpoYkhWbElqb2lNa3RPUWxFdk1UWm9hMUUzUlZvM1ZYRklaMnBZTTB3NVVpOTFhVlZsU0VJNGVFb3ZOSGN6ZDNBMVptTjBhMGtyVFhwcVYxWlJablU1VVRoallsTkVLM1FyTVZWVFZGcG9WVmxoT0RkVE9YTjNOVGM0VEdVMGNXeEdja3BzUlhCWWRrcGtXRkpFVjFSd1RuQkZkREZyYjJGbFJrMTRRVkJGTlN0WGNIZ3ZTa1ZSVWtkcGR6SkJkM1pvVUROVmMzSkhjMHhOTUVkWFNGcDZhVzR3Tm1wR00zWmpUbXhRUW5GMVlVVnhWalZrYVdaNE5HaHBNR3A1VEZOeU9VVm5WSEZ0Y1ZwNWNYa3dObk5UYVVGVVEwMXNlVFIxUmxBNGNqZDNiazlZY0ZWV01TOTFiMHBaYVVOVlFUWm1UeTlRU0Rkbk1rVk1Ua3gzTDFaQmMydDRPRU5SVkRKVmJHWnpOVzB5VG5VNVYybE1SSFUzYTJWSFZsRTlQU0lzSW0xaFl5STZJbU5rTnpCbE5EQmxOamhpT0ROa05ETTRaV1psTkdabVpqazVOV1V5T0dNM05qVm1aV1l4TWpFMk4yWTRZalptT0RRM05qazNNekV5WXpBeFlXUTJZbVlpTENKMFlXY2lPaUlpZlE9PQ==', 1715635713),
('SMcEorQQzjCf9yMmIGLCNmpOuGLSS7H0eNQHIGXu', NULL, '92.118.39.244', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'ZXlKcGRpSTZJa2Q2ZG5kWVdqVmhPUzlFYXpGSVJHWTRiamwzV1hjOVBTSXNJblpoYkhWbElqb2lZVUkyYUhGbFJFVktla2N3VDNCeVdIQlNkbU15YVZWTGQwOVFhVWMzTWxoSVlrOW9aVUpWYW1wNFZpczBkakF2V0ZZM2JrSm5VMGxvY1VaelUyUktkSEUzWlVGUVNHTnFUWEZCWmpkMWNVczBjRkZ5VkZKell6Qk1lV2hCZWxnMVdsWnZOVms0ZEZGYVdtSkJMMGxuV2paWFkxZDNSVFo1Vmt0a1NpODRhMndyTW5oSWFGVkplVzA0VDJ0cUwxZDBNVGR3Y21Zck9YVjRjRGhUY1M5U1pqUklORzlwWjFkMlNVdFhaamxxUlVObVR6WTRSbVJ5WWpOcVVGbHFRa0ZhWjA0d2FVdEpWQzlDYUdkWmNuQnROMDFhZEZWUlkyRkVlaXRvVnk5RWJtZE5kR3RRVTFkMFltVklkbEl2VlU1NVYwd3ZkMGQzT1dwMFVXUmhTRkJYTm1scU5GcFFkV1JaTVdWTFdtaE5NWGxXTTNFelQzYzlQU0lzSW0xaFl5STZJamhsWkRkbU1UUTVaRGMzWlRaaVl6VmpNemxpTUdFd09HWmhNV1kwWVRjMVl6TXlaRFJrWVRjd01XSTBPRGxrWVRaak16Y3lNREF6TkRNM00yWXdZemtpTENKMFlXY2lPaUlpZlE9PQ==', 1715286437),
('sPYphTN9z584DuZjKNMaK4yP3OeX9xTlpDyZi6jr', NULL, '95.217.18.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'ZXlKcGRpSTZJblZNVEdSQlZubEJSVTU0U0VwbmRsVTNhRk5aWkVFOVBTSXNJblpoYkhWbElqb2lXRlJ3VFRGeU4zaDZWbWRwYW5ab2NVbEdRMnhuWW10b1Ftc3JlRVpsZFVkMlduZHlkVXhUVlRFd1RVSldTVUpFV2tsMWQxTnBXUzlGWlZkTmR5dFdaRWRCY0VaUWFVVXpha1JvY2pCSVNETXZWSEZwYjJSNVMyZFdia2hRVjBwaWIyWllVakZ3VlROSFZpOW5ka1JoV1RKclpUQkRXbk5zTmpORE5XWlNiRUUyTnk5eFQxZ3pOMUZ6VW5KSGVubHFORkl2ZVVwVGJtOXhZa2xpVXpCeFdDdEJhRlZ1U1ZkNk1FTlRjSFpxZFZKdWNsZGlTRTAwZWpoYVV6RTJlbWczUzI0NE1YWlhTVFY2TWtSMU4ySTJSMFV2VEV4dmJEZFFUMWQ0YVRWalkxcG9NblZTU1RsSWRtNUVWSFl2Y0ROM2RuUkViRFJtYWtjNVpUQk1Na05IU0hGM2VHWk5WMGxsVkRkdlpHSmpZMmhYSzJwR2FsRTlQU0lzSW0xaFl5STZJalJtTkRFM1lXRTBaV00xWWpnellXWTROMk01TW1ZMFlqa3lOVE5rTWpBMU5EUTVNbVJtWkRobU5URm1PR016T0RBNU1ESTJZbVJoTXpnNU1tVXdNbVlpTENKMFlXY2lPaUlpZlE9PQ==', 1714143852),
('TCF45pAlm2WXHBBGECXnh96Qzws6TGRormrLIb10', NULL, '205.210.31.203', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'ZXlKcGRpSTZJbXd3S3poMVIwWklhMnQyUkhwSloyRlJjVXRVTmtFOVBTSXNJblpoYkhWbElqb2lUVnBHVkdwS0t6ZzNaVmgxV0ZNeVRta3JlVXQzTW01bk1sZFhiR1k1VTA1d1VVTnRhbmhGZFM5SGMwdGtia3hrTWxOcE1EZzVXRXcxYjFCNVYwNXJWMnRCTHk5SUx6UTBiSGRuVmpWQlVtOUZRa2RTVm5ZclNXZERabFZSWlZrMVdFVTNRVXRsYmpnM2NXTnFkbXRETTNSaE1rbDBNV3A2YlZKSmNUQnJaRWRWZWpKSE56TnhWMU40YjBsQlprZzBhRUV3SzFsblVXdzNja2QyTlV0WFJqaDRMelV6TlV0V2RIcEpiM0ZaT1ZWMVNqWkJTWE5YYUcxT1JFdDJPVWN5UkN0RmFtMXVPREpMWmpWU1YweExRVkZXUzNNdmJsWkdRa0ZPUkdwRlJYb3pkWFJtWTFaWVV6UXlURVozSzJOelRHMHhWV1Y1TVM5VU5GRkxZbWt6UXpKME5HWTNWRm8yUTFjNGRqUXJNM0ZzVVhGQllVRTlQU0lzSW0xaFl5STZJakl3TldWallUVXdNbU15TjJNek5EVTBZVFpqTURFNU5UVXpZekExTUdGbFlXTmtNVEZqWVdJM1kyTTNNVEV5WW1JeFl6Um1aalJqWldabU9XTXdZamtpTENKMFlXY2lPaUlpZlE9PQ==', 1715353132),
('TIbjAVqRxEFGh1HF8mZQ1fzN0UrSAN9iUwc9zgYc', NULL, '103.213.38.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36', 'ZXlKcGRpSTZJbkIwWlU5eWNVUnhUV2QwZUVGR00ybzBSMk5zWWtFOVBTSXNJblpoYkhWbElqb2lkVUV6WXpCVlN6WkRWR2N2VUdkNldqVXlLekE0ZDNSVVlVcFJVMVZRVDJzeVZtODNjelF5U0Zsd2FrTXhLMlZ2Y1dwV2RUaEZWbGhuTjJ0bmNUTnVRVTFvVlhSNU1YUlVXa0pzY1VGc2FHbG5UMUYzVGxSMk9EbFBkVU15WWpFeVEyWjRXVlV3V0UxTVduUkZTWFpWYUdaR01VOW5NMHBoTDA5dlZFNVVkR2RhTUVKWU9IZ3dhVlJ3VFRGQ1prUTNjR0p1TDBkTVduUmxSV2g2ZG1sdmVFeEdiRGxSZG5kWmNUbE5QU0lzSW0xaFl5STZJalU1Wm1JeE5qRmhZemsxTlRSak1HWTFNVEEwTVdZeU9EWmxNMkUxT0Rrd1pXUTVZell3T0dRME5EUTJabU00T0Roa1ptUmlabVZpTW1GaU9UQXlaamNpTENKMFlXY2lPaUlpZlE9PQ==', 1715604465),
('tkEj0M2gx1kjYwrqNvmv3S186sjc1LnHex17tCIb', NULL, '198.211.104.237', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJalZzYWt4VFRqQnVRVlkwVmxOS2EzaDVZME5CZUVFOVBTSXNJblpoYkhWbElqb2lORWRFU1hWMWVXUm1hRUp2WlVkRE1WTm5kVVZVVHpaMWJsaDRNbTQ1YTIxTGEyMXlSV05qVDJWNFIzQmhSVWxhYkRCdWFWcExNRU5FYWpSdlpVTnRZemRZYlM5ek9ISnBTemMwYzJJdmNFbEpSbXBFVXpaMFFXbEZZVWh4Y2t4clEwZG5Sa2RUVmt0MGExUTRVSE5QU0VKSldIRjBNWEphTmtSUWFVWlhVM05JVlUxSFRXdzBSVlJRVVVOYWQwVmpZVGg1ZEdsVk5FWXpMMU54UW1wYWJ6aHlhRmh3WlhCbGMySnRUV1JrVFc1RmRHVk1PVEJUY2xjd01VUTJUbEZFV0VaTWR6UXdUbFZ4ZFc5d1J6RXlZV0pvWTNKdFdqWjZPVmxyZFRrdkwyWnJWV1pDV1hvM1lYQmlkMFI2ZVZsbldVWnZabEl4ZHpOb2RsRm9PR1pMYmtoSWNtSndia0ZUTkdaQlNtWk1SRXR1ZW1OS2NuYzlQU0lzSW0xaFl5STZJbUZpT1RCa1pHTmpNelF6TjJFNE16UTBPV1prWXpGa05EUXpaVFpqTnprMU5XVTFaVFZrT0RZNU1XUXpOemN6TkRrNVpqWmxOak5oTkRRNFpEUTBaVGtpTENKMFlXY2lPaUlpZlE9PQ==', 1714279326),
('tTztZeCQqthKQVLWeyMxKSkbRRYZMnNE58iim0nl', NULL, '128.14.231.139', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'ZXlKcGRpSTZJamwwTVRCa1RUQXpVMHN4VVVjcldtZEdiMmhIYjJjOVBTSXNJblpoYkhWbElqb2lTV2xUWW5Wb1JVcHFMMmsxYTBaNlptSnRUbGxyUkhOMmVFZG5MMnROZEhoU2MweFZOM3BFTldNdlltWjNSbkI0WlM5VEwyNTZZMUJYUTNRMmJTOVpXbEJIVFhWUGJubHRTbkkzU0RSd1dGUXhNVlpOZWpKaFJVYzJSRmd3TUhWaWREUnZRekJpYkdkalZ6aFhRWHBaSzBRemFVTnpiMHBNSzA1VFoycE9SbFYzVlZoeFprUjZiR05DUkhVM1NGaERibWhXVFhCSVprMVpZbFkwUlVoV05EVTBNRzUxWTA5ek9WaElUVlV6VDBkd1ZVOWhSMGg2U1ZSaVdtTlRRU3ROU0hsSVQwbEpWVzF4Wm14U1RWa3haMUF4VDNBdlZFaHVRaTlPVjNSVlNYSnVka0pRYVRsSWREVXpjamR4ZUV3Mk0wVkhTRkV6UTFCeFJFdEhVMlZGVmxoNFEyaDNiMjFrWmpaMVZuQmhaRll5ZFdaclJHYzlQU0lzSW0xaFl5STZJakl4TldJNE56STRZMll6TmpNNVlUZGlOR1F6WkRoak1XTXhZVE5sTXpoaE5XUXdaREUwTVRoa1lqZGlNR1ZrTkROak16VmxZVE13T1RVeVltUTVOalVpTENKMFlXY2lPaUlpZlE9PQ==', 1714141889),
('u22HWukjBDIbSPiIBSCpohOmrkqGb8yU6TWLfER0', NULL, '51.15.66.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'ZXlKcGRpSTZJbmhFTlVoWmRqRkxjWGhyY1c5cFpFbFpWRWhXY0VFOVBTSXNJblpoYkhWbElqb2liR3RRUWxCQ1Z6RmFWWHBwUVhsQmVsTTVNVlJMZW01cVJpdFlhMmtyWlhFM1JWSkhiWEJCZDNaSlVsY3lkbVpzWW1wSllYbG5MM3BqV0hsRFdVRmhaVlZvYjNneGJuSnNPV0l4V21jNFdHOUNVMmRwZVM4elFrUkZOa05wYkVaelRHMWtXbFUwZW10SWRFa3lRa0ZIUkdGWVJpdFRUa2xJZVRac1dFMDJkMGN2YVVoek9VTTRNakp6UjFCM2J6QjNkR1ZoTW1oSGJuUkVhVGRtYzFoTmJFazFRMGRyZEdkTVkzVnRNbkZpWW14aFptczBNRUpuVURNMmF6QmhhRU15YjNFeFF6SkpabmhzWm1FNFoxRmlXWE4wWjNGS1IxQXZTMjVFTW5oMFFXd3dVVVF2WjBSb1ZtUkllVFZSTDNjME5USnlUREZRYm5wcmFVNW5VazR6T0dGV1dVNXZhR1V6VVRSbGQzSk5kemw0ZEhRNGVYYzlQU0lzSW0xaFl5STZJamd4T1RreFlqQTBPREkwTldNM04ySTJNR0ptT1RSaU1HTTJORFpoWkRZelptTmpZak0xTUdGak5EaGpaRGMwTlRSa09EaGpOemt4TlRVNVptVTJPREFpTENKMFlXY2lPaUlpZlE9PQ==', 1714144558),
('uTx0gkCcohF6fSIbTurDbEuw7LhMpQVGYUX58Bw7', NULL, '120.56.84.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbE5YWTB0M1RscFZjMnBKVm5wcmRUTnFWU3N3VGtFOVBTSXNJblpoYkhWbElqb2lUakV2VFNzeVpVTnVORk5aVVVsWVdVZDBaazV0VHpONlJtaEJXVVF6YWtkd1lXeHZSRWd2Tnk5ak9WQlhhMFZ6TWxSMVVGaHBVRmxtVW13eFJDdFVVVTgxWVVrcmNIRlRURlp4WVRWMFZrTlVVVTFQWTAxc2JWVmlkRklyV1hneVVVeFZWVGRvZERsVk4wZEthbUY2VEd0SFprSjVNbWQxUmxCQ1VXSnBiMHRLYWxaak4wVmtPV1pqTURORUsyaGlVRWhZVFV0bEsweENNRTlUVmpRd1dUTXZZbXB5ZFhWallXcFZNM0JXVm5OYWRHRk9LMjFrTjNWRGRXRXJiVE55VkZOMVEyeG5aVlZxVEhoek9WWm5XV015T0dGSFUzSTFhMHBCYnpKeE9WVktSM2R1VUhkQlZqWndXVFJSV2lzeGJHaHpUWEZaWVZKUkwwVnlNbGxuUTFFck9GaFllazVzTWtkTlIwTmpNa3N6WTA5dE1uYzlQU0lzSW0xaFl5STZJak01TVRobE4yWmtZMkU0T1dGbU5EUmlOR1JoWkRBeVpEZ3lOemt4Wm1ZNFltUmtNR1F6WWpsaU5ERmtZV00yWTJJME16UmtORFkzTlRFMU9ESTJaaklpTENKMFlXY2lPaUlpZlE9PQ==', 1716133267);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VJc5TazY1aZQQqwsHIwR80YozaJjoJ5dzqAg4w2h', NULL, '146.70.188.150', 'Mozilla/5.0 (Linux; Android 11; Pixel 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Mobile Safari/537.36', 'ZXlKcGRpSTZJa05hUkZOWVFtVnhUVTFXUldOUVdFSlJZMGhyYUZFOVBTSXNJblpoYkhWbElqb2lLekpOTDJ4WlVqaG1Sa2xGY2pJeFFtOW1PQ3Q0ZWxsa2VIbGlUSFptVG5nMlUyaHlhemt3UTFaMGIxb3hObnBGTlRkTWMybFhhbVZWYkRGU1NsRllNekk0V1RkWVozbFRSa0UwT0hSSU1FOTFNblpTS3pka1MySlNaVWxwU0hWdVJHNDFUVTF2TlU5cU9UWnNSM0F3UVVweE5uQnlSbWx5VEV0Uk5Xa3pTRE5xV2tsb2RGTTFkbEZhU1dvM2NXbDBOemQxVG5KRVdXVktNR013TDNSNU9UWjVZa1pFU1M5NVpuTjVLMjVOV0doaFFsWnNUaTlRVlRsVVVubFdWMVUzY25Bdk1GSklNeTlrVTFKaFJFOXJRV3hVYWpWa1dHUmpjVnBXVFd0Q1UxVnNhV00wTld3d0swOVBUM1Z4Wm1OamRWazVObFZRV25ORFlVSlhaa1JZTkhGd2NHeE9WekJGVm1oRldVVnlOamhwZG5STmFuYzlQU0lzSW0xaFl5STZJalUyT0RnNE0yRmhOV0ptTlRZMU9XSmpZamt5WVRRMU0yRmtNV001WmpZM016ZG1ZelV4WVRZMVpHTTVZakF4TmpVMlpUTXhNR0U1TTJJMFpERTFZaklpTENKMFlXY2lPaUlpZlE9PQ==', 1714670256),
('VkedMzTSKOKN4UXwwz9EQ0UBj16TY2bFelnObufl', NULL, '80.82.70.198', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 'ZXlKcGRpSTZJbFJNU0M5WmFWTnZkVGRaUmtoSVVtdzVLMmxCY1hjOVBTSXNJblpoYkhWbElqb2lUR0VyVlVOUWJtNXJZVmd2TW1KSlMzTkRVVGRKZFdFMmNWa3pPRmxKUVdab2VWTkJZM0lyT0daM2RrNTBSVlJwYmxSa01EQmpTa2g2U1hKbWJDdHpRV296UTBOS1NEbFpOakpXTm5rMldFeGtOMk5SVGtSUFRWbHVTMFo0VG5jMU0weDFXbWd6TTIxeWRFTlNaa2h5ZFRNMVJuQnJPVFFyWVc1VVZubGtjVzVOU2xGdFptZDJRV05UTTI1aVp6SjNlRVl5WjNseFVqVlJORTAxY2t4U1V6UjNkV1ozVTFCUWIyZDVMMjE2UlRaMk1ERmlTRWdyTlhNeFZUbExUWGRVYW1wVmEyUnBSak5tVFdoWU0zaEhZVmg1U0VnMUwzZG9ZbXN3VXk4MFZWSnBMMHhCV2l0T1YwVm5kWHAzYzFZeU5tZ3laM0UxYkRRMVNtMTBTMU5sZUc1T1RGbHZRMGQwT1hSVFZpOUpSemgyZVZKSGJsRTlQU0lzSW0xaFl5STZJalJoT1RGbU4yRTBOMlE0TWpjeVlUYzRNakl5TVdGaU5tRmhNR1ppT0RaaFl6RTNORFZsWmpSalltTXdORFppT1dFM09XWTVPV1l3WWpFNE5ESTJNemtpTENKMFlXY2lPaUlpZlE9PQ==', 1714919307),
('wtyGS6sDdPRgAHnMlAgjCfVijKC42rp2f6dpcb9v', NULL, '87.236.176.55', 'Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)', 'ZXlKcGRpSTZJbFV5VFhSaE5FbHFNM0kyY0U1VmFVUlNabTlJYkdjOVBTSXNJblpoYkhWbElqb2lhR0ZRVTJwTVNrTlpjSFJvVVVwNGF6ZElVRkp6TlhKYWRYVlZXbGh3ZDNKbmRWRkRaV3h1ZHl0dGQyZHVNREkyUW14UlNGUTJUbFp4TWt0QkwwdHROMk5IYlRCcldGUklUR0ZpYnpVeVR6Vm5TbFJ0U25oclFYWlBOV2gySzA1T1dqVjVhV1pLT0daelpUUjFSRmRZWWt0WVozRXlla0YxVkRCck1YRm9Sa3R3WkZKdFUzVjRRWFZ1YUd0NFdsQk1helJ6YkVoT1psWlRiV2RwYm1vMFpFVXllamxLYUU5eFpqZFdhVWxyY2sxeVdGWm9jWHBuZUhFeWNrZDVaMHRTYkc5VGJ6YzFTek5GUXl0aFFXZHhlRmxsYlZWWk5WUmxkMlJWZG1ad1dpdHZSMDFNUlVGak5sVnhSME55UVhsdlZrNVdlaTh2WjNCamJTdFJWMW92VldSYVNHNWhSM012VUd0bGFISnRWbVV5TTB4bE4wRTlQU0lzSW0xaFl5STZJalF4TVRBellqbGxNREk1TVdFeFl6TTNaRFExTURFMU1tUXlaR1l5WmpBM01qYzNZVGd5WmpRd1lqZ3dPR1F6TjJJd016Vm1aRGN6TjJRNE1EYzVNV1lpTENKMFlXY2lPaUlpZlE9PQ==', 1715527037),
('wYDtSMU6eIcxDbiJnIh50wbYg58Py6iYWXBTHp64', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa0ZZVkZOb2NEZDJWemxZY1hGclYya3ZiR2h6ZDJjOVBTSXNJblpoYkhWbElqb2lXRmRNVEd4MVRqUmxNMkl3TVZOWlRGRnNUVmgzZUhSUVlUSmpURXBzTTFGNmRGbHFlbkZTTmxKSmRXdG1SVmx1YTJKamREbGFlVElyY0hjd2FHTlVPV0psVkhreFlWcG5lbUZyUjBaTVRUVm9NUzlMU1dOWlZ6ZGFZWEZ1TjB0SVFYTnVOQ3M0UWxaeFUySlRaR1E0ZEhWVU9IY3ZTVkk1V0RkQ1VHZFlhazFJYVc5RE9EWkRNR1ZxVTB0NE1HNVJOSEZDWkhORVdXMDBhbFZHVVVKTU1UUTVUSEozZEdkcmVYTmlZa0ZqUnpSR00xazVXVlpTU1VKTGJqZFJNVTh5YkM5b1IzRlVNRXhCVlRKd1VucHRkakZtTW5aaGNtcHVkR0ZLTUM5dFFuVXlSVTlTVTFOblpuZG1URzVxVDBjMGFuQjNTM3AzU3pWYVNqZHBWelpXWVZoVmRUQTFTM2xUTVhFek16RTVaMmxtT1hJM1JsRTlQU0lzSW0xaFl5STZJakJtWm1VM01qZzBZV1kxTkdFMVlqUTBNVFEyTlRjMk9XWmtObVUxTVRkak56RTFaVGMzTTJZM05tRTBOemM0WTJObU56SXlaREE1WkdJMFpXVTFPV1VpTENKMFlXY2lPaUlpZlE9PQ==', 1714192431),
('xeW71nkOXb50HUVXuAhlpGPRbg6rSAcJH7afu1zW', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbVZDY0ZWV1pFWkpka1pDYlU1NlprRXlORnBhZDFFOVBTSXNJblpoYkhWbElqb2lPVkl2VVRGS2VFWnBWMXBwVW05MlJtcDFka3ROWTFSdGFsRnBTV3M0TmtkMmVuSTNWWGQzV0ZOWFRFZGxaMHBhV1Vkb1NHdDFZMEY0Y0RkTE0xSXlaa1JNVm5KcVNHRnhWRVZXU1U5bE9XeG5LM3BOUXpWb1FXTnZXVGxtY0dWUGFuVlRVM0JPVjB0M2VYZHBXbXBYUmxkNVpEbDNWRzV1Y1hkdU5XeGhUVE5HVjJOUWNrbENSbU4yZGtGU1JrSnNaSGgzTUhodWQyaGxjMlJrWkdZelJXeGpWWGREYTFGS1JWcGhTWE01T1RsNU9VTXlja3B1VVVOeVZHbENURlYyVmxaek5qVnBVRWR3YVdWVlJrSTVjSGR1WmxkNmFWTXlSVEIzTVhwdVJrcFdTSFI0TkVKdFRrMXFlVkV2U0dabFpYVndNV0k0TjBNeE5razVVWEZ2VVdzelVFNXhhbEpWYm5WVlNuaHFkR0Z2TnpnMVZsRTlQU0lzSW0xaFl5STZJbVpsTXpaaU9EUmtPV0V5WWpkaU1XWXhaak14WmprME9UUmxOVFl6WW1FMU5tSmxaakkwWWpnd01tTXpNR0psTnpBMVlUaGtNVE0yTURJeU1qZG1ZMk1pTENKMFlXY2lPaUlpZlE9PQ==', 1715157255),
('XucBFeHRAarvne7syStX2PSxbAbr7I9QBCGR67vD', NULL, '117.243.147.128', 'Mozilla/5.0 (X11; CrOS x86_64 14541.0.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbXd2ZURCc0wwOXdSak54UzNGa1ZGQlhRV1kwVjNjOVBTSXNJblpoYkhWbElqb2llbVpHZUVwdmFFWlpWRWMxYW5kS1drdEZiM0EyUTJWaVkxWXJVa3BhVGtKMVdUQlFOV0lyUTBGb1dXaHFXWGszU0dWRlJHdHFVRkkwVTFsNWQweERUVlZ0TjJoa05GbDVSMGRIWlhkeE5YbFhObXgxUkhvek4yTk5WR2hqVTIxdk5ESTNXamxhZGt4T1NsRlhPVmNyWlUwMlVEbFNSRTQyWkVSRFVEVmhiakZvWVdScmFDOVVValJvUVhodWMzTmlVV3RCU2t4QlRWbHVkbWczZFV4Wk1IQnpUMGcxUm1SVVIzVklSMHBVZVRKMWVEWk5SRU0wWTFkMVpHaHdOemQ1YWtaTWVXNXdMMHhDZGs1NFdsRk1VVmRpTVZCbE0zUklTR2hXYTNGeWVtRnVlbms0VmtkRk1rMDRkRUZ1TVZvNVFUSTFkakEzWTFoaWNURmpVbTB6VERkVUwzRmtiR2tyUlVaNFVHRnVZUzl3TVVFNVUyYzlQU0lzSW0xaFl5STZJakEzTlRBMFkyUmhZakZpTVdJek1XVmpZVEkwTURka05qSXlZVFkyWmpKak5URTFNRFk0WVdNd01XSmpNakl3WXpNME56WmpNR0ZqWmpOak5XUTVOMk1pTENKMFlXY2lPaUlpZlE9PQ==', 1715503458),
('Y86oImoKYXfdFUEbKGwjljtLsKnVkyh4iRtZQ2Tn', NULL, '35.86.217.245', 'Mozilla/5.0 (compatible; wpbot/1.1; +https://forms.gle/ajBaxygz9jSR8p8G9)', 'ZXlKcGRpSTZJbUpzYkZOTVZIVlJkMDR3SzNsR2NtRnBZVmRuUzNjOVBTSXNJblpoYkhWbElqb2lOVlpoTTJ4NlRVSXpSVU5uVUZGVVNtRjFjVlUyYzJWTWVuTk5NalJvUVZVMlRuZFFRazAyVkc1b1NWcGlTV3hUZUhsaWJsUmtZV2RJUnk5YVpXWjZZbXA0TTJsbE9XVk5Ua0V2WVhSYUwwNW1SamxIT0ZwTVpFaE1TWFZrU1ZkVVIyaFNXblpaWkVaS2FtSTVVR1JDTTJSTU5YaGljVWR0UlROVVNHdERjVTVUVTI5VGRVVjJXa0pGYWxwMWFIZzRZa2sxUWt4cFdFNWhlR1Z4YlVaR09HVTVRbVIzYjFKdVlpczFiblpUVlhWbk1rTkZOeXRNZDBkamFuRnRVR2gyVkZJek9FRmxRVko0ZWtOVFNYZE5SMkl5ZG5CUFRsTjRTSHAxYjJZeFpIRnBZV2MzUmtFd2RrMU1SMU14Tmt0VlMxSnpkVWhoVDI0eWRFRTJaVTh2Tm5Cek1qUkdjRXRvY0hVM2NEWTJORGs0VGxWb09IYzlQU0lzSW0xaFl5STZJbUV6TkdWak56SXhOVFE1TVdNNE9EVTVNemcwTXpneFpqSTBNbVV5TUdFeVpEZzRNMkprT1dabE16QXdZakptWWpNeVptTmlNbVl3TkRoaU1tRXlOeklpTENKMFlXY2lPaUlpZlE9PQ==', 1715394103),
('YbCzhfGZZOGtFtpZmKESyvAANYIRZH1H4TETi1NZ', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbTk2WnpSVVpVdFlVMEY1TjNSM2FFaG9ZVFJwZG1jOVBTSXNJblpoYkhWbElqb2laemR4VldSQlZIY3dTbHBaYVd0eVFqRmhPVFJMZUhVNVFqZGFVMHdyV2pBelRrRjNlWEJpVkRrclRuWnFXbmRYVEVadGRWcHlVRlpqTVhsVVltNVVVV0p2VmxOVGRGSkdkRFV5VkdaQ2VYTmxiWFZxV1ZJd1JtaHhiVkZQYmpGalVYQnBZVkJ4U1ZGMGJYcGlVVmd3Vm1FMVIzbExNMWhpTmk5aFlrZElPWE5pUVZCUVNtSXdTRVVyWTB4blRYY3pkeTlMUTFCVmNGb3JkVTV1T0ZSNU0yUllVMGQwU21zMVRqZzRQU0lzSW0xaFl5STZJak0wTkRGa01UTmhZelU0TnpNd05UbGxNVFJoTUROak9EY3haV1EzTXprd09XRmpPV0ZoTkdReU5qY3pPR1JtTTJVNU9UVTJNR1UzWkRnMVpqYzNZellpTENKMFlXY2lPaUlpZlE9PQ==', 1714465440),
('yReJ1g3snksvnlAyhIk7MZXFPcMrU96rt1bBqgHp', NULL, '199.45.155.49', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'ZXlKcGRpSTZJa3d2Wm5GbWQyWkVSamsyWmpWdmFIcDZUamhOU1hjOVBTSXNJblpoYkhWbElqb2lPRUpIWmpSSVFtNVZTVUpJSzNaRGNERm5kRkZYYVhsUFdFVnNORGhMWW1GTVdXRnRSUzlGWVhkUFdVeHhkM0pMVldGQlRGRm5OMDl0TlhSbVIza3lTVlF4WjNkdFVGVllRMDFvT1V4R1VTdG9PRlZpYURjdmFYaHZiVWRqYTJWc0sxaG1ZMFJxSzA1UFNuVmpZV1YyVERSalVYazNRV3hEVDBWalNrUkNja3BZVUVoNk4wWjZlVnB2TkZKdFoweG9hMEY2WTNwR1pVNVJkSFYzZURKUFIxTjZTbUptYjBaTFMxSkdiV1ZYZDA1Qk1VMWpkRGxPZFRsT1ZsaFRjbEFyZDA1TGNtcHFkMnBqZVc5RmNqSk9jblZTUVV4bmFHTTVXbGd5VHpobU1IRjZPWHAyTUZGbmJXbzRUVTF0VkZFclptMXJVVmRyWTBOdE4wZFZjRlJIVjNwSVpFTlpRamRzVDJFd1pHWnlOR1JqYW1Sek5sRTlQU0lzSW0xaFl5STZJbUZsWXpObVlqTTFOR1ZrWXpNMlpHRmxZek16TldNd09XTXlZVGN4WVdKaU9HSTVOalExTmpFNU1qVmpNVFEzT1dVME56RTBPVEkxTURobU9HVTJNVElpTENKMFlXY2lPaUlpZlE9PQ==', 1714608909),
('ZPbwJmE428HQM0IWY1vcDROQ0Fh7DVrBnXRP3a1C', NULL, '117.243.147.128', 'Mozilla/5.0 (X11; CrOS x86_64 14541.0.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJalpsYUdZd1ZsaHlhSFZHWW5SbVdUaHpZVEJGYjFFOVBTSXNJblpoYkhWbElqb2lRV3BOYzJJMmJIUkdhMDVGVEZaR1ZIQm5lR3R2TVRKM2VuZGxlWEozYTA1aVEzUjRRalEyTUVSTGMxSjVSV0ptYTJGR2FVNXBWVVozZVVObGFHTkNkVFp0ZFhWS2JHVnlaMkZUUW0xM1lsbElhek14TW5VemJHcERielZqU0V4Q1RtNDVMMjFOTm5aak55OVBkMWhwV0VWelRqbDBZMnhCZFZkUFRtRlBZVTlDWjFCdFZXVXdlRFZzZW5kNVJYSmxUWEZIYTFCSFVXeHRNVWx5V0RVNU9UaHpSMkZOZW5GaWFXbG5ZMHBpTm0xTmN6bGhNREpaTTA1Tk56TjJlV1JQUVRsNGJXOXlVVmMzTVM5VVRtZExlbEpaWm1SWWRtUkhNRlpETkc0Mk5XZzBNREUwWlZSVVpVNUxNbTFPUm5ZeFVuUmFVRmRYU0ZWNmFGaDRlalZZWlZkQ0sycEVWbXNyWW1WS1UzWjNWMDl0WldaS1FWRTlQU0lzSW0xaFl5STZJamt3T0RWbE5qUmpNR1ZtWlRZeVlqYzJOVEpsT1dReVpqQTVPVFJrTURObFlUaGhOalEyWlRreE4yRmpOekk0WVRoaE56TTJZMlU1WmpneE1HRTBaR1lpTENKMFlXY2lPaUlpZlE9PQ==', 1715503478);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `alt_tag` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `department`, `image_url`, `alt_tag`, `created_at`, `updated_at`) VALUES
(1, 'general', '/assets/images/Accredited/National_Board_of_Accreditation.webp', 'National Board of Accreditation', '2024-03-29 14:12:57', '2024-03-29 14:12:57'),
(2, 'general', '/assets/images/Accredited/Anna_University_Logo.webp', 'Anna University', '2024-03-29 14:12:57', '2024-03-29 14:12:57'),
(3, 'general', '/assets/images/Accredited/NAAC_LOGO.webp', 'NAAC', '2024-03-29 14:12:57', '2024-03-29 14:12:57'),
(4, 'general', '/assets/images/Accredited/National_Institutional_Ranking_Framework_logo.webp', 'National Institutional Ranking Framework', '2024-03-29 14:12:57', '2024-03-29 14:12:57'),
(5, 'general', '/assets/images/Accredited/award2.webp', 'CISCO Network Academy', '2024-03-29 14:12:57', '2024-03-29 14:12:57'),
(6, 'general', '/assets/images/Accredited/award5.webp', 'VM Ware IT Academy', '2024-03-29 14:12:57', '2024-03-29 14:12:57'),
(7, 'general', '/assets/images/Accredited/ISO_9001-2015.webp', 'ISO 9001-2015', '2024-03-29 14:12:57', '2024-03-29 14:12:57'),
(8, 'general', '/assets/images/Accredited/All_India_Council_for_Technical_Education_logo.webp', 'All India Council for Technical Education', '2024-03-29 14:12:57', '2024-03-29 14:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `sport_athletes_and_achievements`
--

CREATE TABLE `sport_athletes_and_achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `pdf_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sport_athletes_and_achievements`
--

INSERT INTO `sport_athletes_and_achievements` (`id`, `year`, `pdf_url`, `created_at`, `updated_at`) VALUES
(5, '2019-2020', 'https://egspec.blob.core.windows.net/egspec-assets/sports-athletes-and-achievements/2019_2020_achievement.pdf', NULL, NULL),
(6, '2018-2019', 'https://egspec.blob.core.windows.net/egspec-assets/sports-athletes-and-achievements/2018_2019_achievement.pdf', NULL, NULL),
(7, '2017-2018', 'https://egspec.blob.core.windows.net/egspec-assets/sports-athletes-and-achievements/2017_2018_achievement.pdf', NULL, NULL),
(8, '2016-2017', 'https://egspec.blob.core.windows.net/egspec-assets/sports-athletes-and-achievements/2016_2017_physical_education.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sport_data`
--

CREATE TABLE `sport_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `achieved` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sport_data`
--

INSERT INTO `sport_data` (`id`, `year`, `event`, `venue`, `achieved`, `created_at`, `updated_at`) VALUES
(1, '2020-2021', 'BALL BADMINTON (MEN)', 'E.G.S.PILLAY ENGINEERING COLLEGE,NAGAPATTINAM', 'WINNER-UP', NULL, NULL),
(2, '2020-2021', 'BASKETBALL (MEN)', 'KINGS ENGINEERING COLLEGE, THANJAVUR', 'WINNER-UP', NULL, NULL),
(3, '2020-2021', 'CHESS (MEN)', 'PRIME COLLEGE OF ARCHITECTURE & PLANNING, KILVELUR', 'WINNER-UP', NULL, NULL),
(4, '2020-2021', 'VOLLEY BALL (MEN)', 'ANNA UNIVERSITY COLLEGE OF ENGINEERING THIRUKKUVALAI', 'RUNNER-UP', NULL, NULL),
(5, '2020-2021', 'KABADDI (MEN)', 'PANNA UNIVERSITY COLLEGE OF ENGINEERING THIRUKKUVALAI', 'RUNNER-UP', NULL, NULL),
(6, '2020-2021', 'CHESS (WOMEN)', 'PRIME COLLEGE OF ARCHITECTURE & PLANNING, KILVELUR', 'THIRD PLACE', NULL, NULL),
(7, '2020-2021', 'BADMINTON(WOMEN)', 'PARISUTHAM INSTITUTE OF TECHNOLOGY AND SCIENCE, THANJAVUR', 'FOURTH PLACE', NULL, NULL),
(8, '2020-2021', 'CRICKET FOR MEN', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI & ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'FOURTH PLACE', NULL, NULL),
(9, '2019-2020', 'CHESS FOR WOMEN', 'E.G.S.PILLAY ENGINEERING COLLEGE, NAGAPATTINAM', 'WINNER-UP', NULL, NULL),
(10, '2019-2020', 'BALL BADMINTON MEN', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'WINNER-UP', NULL, NULL),
(11, '2019-2020', 'BADMINTON FOR MEN', 'E.G.S.PILLAY ENGINEERING COLLEGE, NAGAPATTINAM', 'WINNER-UP', NULL, NULL),
(12, '2019-2020', 'BASKETBALL FOR MEN', 'KINGS ENGINEERING COLLEGE, THANJAVUR', 'WINNER-UP', NULL, NULL),
(13, '2019-2020', 'TABLE TENNIS FOR WOMEN', 'PARISUTHAM INSTITUTE OF TECHNOLOGY AND SCIENCE, THANJAVUR', 'RUNNER-UP', NULL, NULL),
(14, '2019-2020', 'HAND BALL', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'RUNNER-UP', NULL, NULL),
(15, '2019-2020', 'CHESS FOR MEN', 'E.G.S.PILLAY ENGINEERING COLLEGE, NAGAPATTINAM', 'THIRD PLACE', NULL, NULL),
(16, '2019-2020', 'TABLE TENNIS FOR MEN', 'PRIME COLLEGE OF ARCHITECTURE & PLANNING, KILVELUR', 'THIRD PLACE', NULL, NULL),
(17, '2019-2020', 'VOLLEYBALL MEN', 'E.G.S.PILLAY ENGINEERING COLLEGE, NAGAPATTINAM', 'THIRD PLACE', NULL, NULL),
(18, '2019-2020', 'CRICKET FOR MEN', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI & ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'FOURTH PLACE', NULL, NULL),
(19, '2018-2019', 'CRICKET FOR MEN', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM & ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'WINNER-UP', NULL, NULL),
(20, '2018-2019', 'TABLE TENNIS FOR WOMEN', 'PRIME COLLEGE OF ARCHITECTURE & PLANNING, KILVELUR', 'WINNER-UP', NULL, NULL),
(21, '2018-2019', 'BADMINTON FOR MEN', 'E.G.S.PILLAY ENGINEERING COLLEGE, NAGAPATTINAM', 'WINNER-UP', NULL, NULL),
(22, '2018-2019', 'CHESS FOR WOMEN', 'A.V.C COLLEGE OF ENGINEERING MAYILADUTHURAI', 'WINNER-UP', NULL, NULL),
(23, '2018-2019', 'BADMINTON FOR WOMEN', 'PARISUTHAM INSTITUTE OF TECHNOLOGY AND SCIENCE, THANJAVUR', 'THIRD PLACE', NULL, NULL),
(24, '2018-2019', 'CHESS FOR MEN', 'A.V.C COLLEGE OF ENGINEERING MAYILADUTHURAI', 'FOURTH PLACE', NULL, NULL),
(25, '2018-2019', 'VOLLEYBALL FOR WOMEN', 'PARISUTHAM INSTITUTE OF TECHNOLOGY AND SCIENCE, THANJAVUR', 'FOURTH PLACE', NULL, NULL),
(26, '2018-2019', 'BALL BADMINTON MEN', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'FOURTH PLACE', NULL, NULL),
(27, '2018-2019', 'TABLE TENNIS FOR MEN', 'PRIME COLLEGE OF ARCHITECTURE & PLANNING, KILVELUR', 'FOURTH PLACE', NULL, NULL),
(28, '2018-2019', 'HAND BALL', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'FOURTH PLACE', NULL, NULL),
(29, '2018-2019', 'BASKETBALL FOR MEN', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'FOURTH PLACE', NULL, NULL),
(30, '2017-2018', 'CRICKET FOR MEN', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI & ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'WINNER-UP', NULL, NULL),
(31, '2017-2018', 'TABLE TENNIS FOR WOMEN', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'WINNER-UP', NULL, NULL),
(32, '2017-2018', 'BASKETBALL', 'ANNAI COLLEGE OF ENGINEERING AND TECHNOLOGY, KUMBAKONAM', 'WINNER-UP', NULL, NULL),
(33, '2017-2018', 'BADMINTON FOR MEN', 'E.G.S.PILLAY ENGINEERING COLLEGE,NAGAPATTINAM', 'WINNER-UP', NULL, NULL),
(34, '2017-2018', 'TABLE TENNIS FOR MEN', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'RUNNER-UP', NULL, NULL),
(35, '2017-2018', 'HAND BALL', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'THIRD PLACE', NULL, NULL),
(36, '2017-2018', 'BASKETBALL WOMEN', 'KINGS COLLEGE OF ENGINEERING,THANNJAVUR', 'THIRD PLACE', NULL, NULL),
(37, '2017-2018', 'ATHLETICS TEAM (MEN & WOMEN)', 'ARASU ENGG. COLLEGE, KUMBAKONAM', 'FOURTH PLACE', NULL, NULL),
(38, '2016-2017', 'CRICKET (MEN)', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'WINNER', NULL, NULL),
(39, '2016-2017', 'TABLE TENNIS (MEN)', 'PRIME COLLEGE OF ARCHITECTURE & PLANNING, KILVELUR', 'WINNER', NULL, NULL),
(40, '2016-2017', 'CHESS (WOMEN)', 'E.G.S.PILLAY ENGINEERING COLLEGE,NAGAPATTINAM', 'RUNNER', NULL, NULL),
(41, '2016-2017', 'BASKETBALL (MEN)', 'KINGS COLLEGE OF ENGINEERING,THANNJAVUR', 'RUNNER', NULL, NULL),
(42, '2016-2017', 'HANDBALL (MEN)', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'RUNNER', NULL, NULL),
(43, '2016-2017', 'TABLE TENNIS (WOMEN)', 'PRIME COLLEGE OF ARCHITECTURE & PLANNING, KILVELUR', 'THIRD PLACE', NULL, NULL),
(44, '2016-2017', 'BADMINTON (MEN)', 'PARISUTHAM INSTITUTE OF TECHNOLOGY AND SCIENCE, THANJAVUR', 'FOURTH PLACE', NULL, NULL),
(45, '2016-2017', 'KABADDI (MEN)', 'PREC VALLEM THANJAVUR', 'FOURTH PLACE', NULL, NULL),
(46, '2016-2017', 'BALL BADMINTON (MEN)', 'A.V.C COLLEGE OF ENGINEERING MAYILADUTHURAI', 'FOURTH PLACE', NULL, NULL),
(47, '2016-2017', 'ATHELETICS FIVE MEDALS', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'SILVER MEDAL -TRIPLE JUMP, 110M HURDLES, BRONZE MEDAL –LONG JUMP, POLE VAULT, DISCUSS THROW', NULL, NULL),
(48, '2016-2017', 'WINNER TEAM PARTICIPATE IN INTER', '', 'ZONAL', NULL, NULL),
(49, '2015-2016', 'CRICKET', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'WINNER', NULL, NULL),
(50, '2015-2016', 'HANDBALL', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'WINNER', NULL, NULL),
(51, '2015-2016', 'BADMINTON', 'KINGS COLLEGE OF ENGINEERING, TANJORE', 'WINNER', NULL, NULL),
(52, '2015-2016', 'VOLLEYBALL', 'E.G.S PILLAY ENGINEERING COLLEGE, NAGAPATTINAM', 'RUNNER', NULL, NULL),
(53, '2015-2016', 'TABLE TENNIS', 'PARISUTHAM INSTITUTE OF TECHNOLOGY AND SCIENCE, THANJAVUR', 'THIRD', NULL, NULL),
(54, '2015-2016', 'BALL BADMINTON', 'A.V.C COLLEGE OF ENGINEERING, MAYILADUTHURAI', 'THIRD', NULL, NULL),
(55, '2015-2016', 'DISCUSS THROW', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'GOLD MEDAL', NULL, NULL),
(56, '2015-2016', 'POLE VAULT', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'BRONZE MEDAL', NULL, NULL),
(57, '2014-2015', 'TABLE TENNIS', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'WINNER-UP', NULL, NULL),
(58, '2014-2015', 'TABLE TENNIS', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'THIRD', NULL, NULL),
(59, '2014-2015', 'CRICKET', 'KINGS COLLEGE OF ENGINEERING, TANJORE', 'RUNNER-UP', NULL, NULL),
(60, '2014-2015', 'BADMINTON', 'KINGS COLLEGE OF ENGINEERING, TANJORE', 'FOURTH', NULL, NULL),
(61, '2014-2015', 'HANDBALL', 'ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE, KOVILVENI', 'RUNNER-UP', NULL, NULL),
(62, '2014-2015', 'BALL BADMINTON', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'WINNER-UP', NULL, NULL),
(63, '2014-2015', 'DISCUSS THROW', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'BRONZE MEDAL', NULL, NULL),
(64, '2014-2015', 'HALF MARATHON', 'ARASU ENGINEERING COLLEGE, KUMBAKONAM', 'BRONZE MEDAL', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whats_app_messages`
--

CREATE TABLE `whats_app_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `whatsapp_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `women_empowerment_cell_members`
--

CREATE TABLE `women_empowerment_cell_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `program_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `beneficiaries` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `women_empowerment_cell_members`
--

INSERT INTO `women_empowerment_cell_members` (`id`, `name`, `role`, `department`, `program_name`, `date`, `beneficiaries`, `created_at`, `updated_at`) VALUES
(1, 'Prof.Dr.A.R.Deepa', 'Convener', 'S & H', NULL, NULL, NULL, NULL, NULL),
(2, 'Mrs. A. Hema', 'Member', 'MCA', NULL, NULL, NULL, NULL, NULL),
(3, 'Mrs. S. Shajathi Begam', 'Member', 'CSBS', NULL, NULL, NULL, NULL, NULL),
(4, 'Dr. R. Lavanya', 'Member', 'IT', NULL, NULL, NULL, NULL, NULL),
(5, 'Dr.M. Priya', 'Member', 'CSE', NULL, NULL, NULL, NULL, NULL),
(6, 'Mrs. K. Usha', 'Member', 'S & H', NULL, NULL, NULL, NULL, NULL),
(7, 'Mrs. S. Latha', 'Member', 'EEE', NULL, NULL, NULL, NULL, NULL),
(8, 'Ms. N. Karthika', 'Member', 'CIVIL', NULL, NULL, NULL, NULL, NULL),
(9, 'Mrs. B. Asha Daisy', 'Member', 'MBA', NULL, NULL, NULL, NULL, NULL),
(10, 'Dr. T. Kavitha', 'Member', 'S & H', NULL, NULL, NULL, NULL, NULL),
(11, 'Mrs. Louis Anitha', 'Member', 'BME', NULL, NULL, NULL, NULL, NULL),
(12, 'Mrs. S. Angelin Nivedita', 'Member', 'AIDS', NULL, NULL, NULL, NULL, NULL),
(13, 'P.Dharshana', 'Student Representative', 'AIDS', NULL, NULL, NULL, NULL, NULL),
(14, 'R.Adhi Lakshmi', 'Student Representative', 'CIVIL', NULL, NULL, NULL, NULL, NULL),
(15, 'M.Inmozhi Srii', 'Student Representative', 'EEE', NULL, NULL, NULL, NULL, NULL),
(16, 'K.Abinaya', 'Student Representative', 'ECE', NULL, NULL, NULL, NULL, NULL),
(17, 'G.Anitha', 'Student Representative', 'CSE', NULL, NULL, NULL, NULL, NULL),
(18, 'R Abinaya Harini', 'Student Representative', 'IT', NULL, NULL, NULL, NULL, NULL),
(19, 'C.Banu', 'Student Representative', 'IT', NULL, NULL, NULL, NULL, NULL),
(20, 'T.Abirami', 'Student Representative', 'CSBS', NULL, NULL, NULL, NULL, NULL),
(21, 'R.Surya Prabha', 'Student Representative', 'BME', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_sliders`
--
ALTER TABLE `ads_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_committee`
--
ALTER TABLE `complaint_committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_id_unique` (`course_id`);

--
-- Indexes for table `courses_and_intakes`
--
ALTER TABLE `courses_and_intakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `industry_academic_partnering`
--
ALTER TABLE `industry_academic_partnering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nss_and_red_ribbon_club`
--
ALTER TABLE `nss_and_red_ribbon_club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_sliders`
--
ALTER TABLE `post_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_athletes_and_achievements`
--
ALTER TABLE `sport_athletes_and_achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_data`
--
ALTER TABLE `sport_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whats_app_messages`
--
ALTER TABLE `whats_app_messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `whats_app_messages_whatsapp_number_unique` (`whatsapp_number`);

--
-- Indexes for table `women_empowerment_cell_members`
--
ALTER TABLE `women_empowerment_cell_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_sliders`
--
ALTER TABLE `ads_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `complaint_committee`
--
ALTER TABLE `complaint_committee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses_and_intakes`
--
ALTER TABLE `courses_and_intakes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equipment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industry_academic_partnering`
--
ALTER TABLE `industry_academic_partnering`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nss_and_red_ribbon_club`
--
ALTER TABLE `nss_and_red_ribbon_club`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_sliders`
--
ALTER TABLE `post_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sport_athletes_and_achievements`
--
ALTER TABLE `sport_athletes_and_achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sport_data`
--
ALTER TABLE `sport_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whats_app_messages`
--
ALTER TABLE `whats_app_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `women_empowerment_cell_members`
--
ALTER TABLE `women_empowerment_cell_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
