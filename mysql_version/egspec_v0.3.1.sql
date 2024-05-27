-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 09:19 AM
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
('courses_intake', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:16:{i:0;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:1;s:11:\"course_name\";s:30:\"B.E – Mechanical Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:01\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:01\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:1;s:11:\"course_name\";s:30:\"B.E – Mechanical Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:01\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:01\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:2;s:11:\"course_name\";s:49:\"B.E – Electronics and Communication Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:02\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:02\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:2;s:11:\"course_name\";s:49:\"B.E – Electronics and Communication Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:02\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:02\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:3;s:11:\"course_name\";s:44:\"B.E – Electrical & Electronics Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:04\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:04\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:3;s:11:\"course_name\";s:44:\"B.E – Electrical & Electronics Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:04\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:04\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:4;s:11:\"course_name\";s:38:\"B.E – Computer Science & Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:05\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:05\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:4;s:11:\"course_name\";s:38:\"B.E – Computer Science & Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:05\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:05\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:5;s:11:\"course_name\";s:33:\"B.Tech – Information Technology\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:07\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:07\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:5;s:11:\"course_name\";s:33:\"B.Tech – Information Technology\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:07\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:07\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:5;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:6;s:11:\"course_name\";s:25:\"B.E – Civil Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:08\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:08\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:6;s:11:\"course_name\";s:25:\"B.E – Civil Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:08\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:08\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:6;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:7;s:11:\"course_name\";s:31:\"B.E – Bio-Medical Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:09\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:09\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:7;s:11:\"course_name\";s:31:\"B.E – Bio-Medical Engineering\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:09\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:09\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:7;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:8;s:11:\"course_name\";s:46:\"B.Tech – Computer Science & Business Systems\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:11\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:11\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:8;s:11:\"course_name\";s:46:\"B.Tech – Computer Science & Business Systems\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:11\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:11\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:8;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:9;s:11:\"course_name\";s:51:\"B.Tech – Artificial Intelligence and Data Science\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:13\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:13\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:9;s:11:\"course_name\";s:51:\"B.Tech – Artificial Intelligence and Data Science\";s:11:\"course_type\";s:2:\"ug\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:13\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:13\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:9;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:10;s:11:\"course_name\";s:40:\"M.E ( Computer Science and Engineering )\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:14\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:14\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:10;s:11:\"course_name\";s:40:\"M.E ( Computer Science and Engineering )\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:14\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:14\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:10;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:11;s:11:\"course_name\";s:27:\"M.E (Communication Systems)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:16\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:16\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:11;s:11:\"course_name\";s:27:\"M.E (Communication Systems)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:16\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:16\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:11;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:12;s:11:\"course_name\";s:31:\"M.E (Manufacturing Engineering)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:17\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:17\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:12;s:11:\"course_name\";s:31:\"M.E (Manufacturing Engineering)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:17\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:12;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:13;s:11:\"course_name\";s:34:\"M.E (Power Electronics and Drives)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:19\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:19\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:13;s:11:\"course_name\";s:34:\"M.E (Power Electronics and Drives)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:19\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:19\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:13;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:14;s:11:\"course_name\";s:31:\"M.E (Environmental Engineering)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:20\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:20\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:14;s:11:\"course_name\";s:31:\"M.E (Environmental Engineering)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:18;s:10:\"created_at\";s:19:\"2024-04-22 09:10:20\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:20\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:14;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:15;s:11:\"course_name\";s:48:\"MCA – Master of Computer Applications ( 2 yrs)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:21\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:21\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:15;s:11:\"course_name\";s:48:\"MCA – Master of Computer Applications ( 2 yrs)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:60;s:10:\"created_at\";s:19:\"2024-04-22 09:10:21\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:21\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:15;O:28:\"App\\Models\\CoursesAndIntakes\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:19:\"courses_and_intakes\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:16;s:11:\"course_name\";s:49:\"MBA – Master of Business Administration (2 Yrs)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:24\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:24\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:16;s:11:\"course_name\";s:49:\"MBA – Master of Business Administration (2 Yrs)\";s:11:\"course_type\";s:2:\"pg\";s:6:\"intake\";i:120;s:10:\"created_at\";s:19:\"2024-04-22 09:10:24\";s:10:\"updated_at\";s:19:\"2024-04-22 09:10:24\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:11:\"course_name\";i:1;s:11:\"course_type\";i:2;s:6:\"intake\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716311298),
('general_poster_slider', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:21:\"App\\Models\\PostSlider\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:12:\"post_sliders\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:1;s:9:\"page_name\";s:7:\"general\";s:17:\"desktop_image_url\";s:28:\"/assets/images/egspec-1.webp\";s:16:\"mobile_image_url\";s:31:\"/assets/images/holi_sale_3.webp\";s:9:\"href_link\";s:1:\"/\";s:8:\"alt_name\";s:6:\"egspec\";s:10:\"created_at\";s:19:\"2024-03-29 14:13:54\";s:10:\"updated_at\";s:19:\"2024-03-29 14:13:54\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:1;s:9:\"page_name\";s:7:\"general\";s:17:\"desktop_image_url\";s:28:\"/assets/images/egspec-1.webp\";s:16:\"mobile_image_url\";s:31:\"/assets/images/holi_sale_3.webp\";s:9:\"href_link\";s:1:\"/\";s:8:\"alt_name\";s:6:\"egspec\";s:10:\"created_at\";s:19:\"2024-03-29 14:13:54\";s:10:\"updated_at\";s:19:\"2024-03-29 14:13:54\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:5:{i:0;s:9:\"page_name\";i:1;s:17:\"desktop_image_url\";i:2;s:16:\"mobile_image_url\";i:3;s:9:\"href_link\";i:4;s:8:\"alt_name\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716706126),
('general_slider_images', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:8:{i:0;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:1;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:62:\"/assets/images/Accredited/National_Board_of_Accreditation.webp\";s:7:\"alt_tag\";s:31:\"National Board of Accreditation\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:1;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:62:\"/assets/images/Accredited/National_Board_of_Accreditation.webp\";s:7:\"alt_tag\";s:31:\"National Board of Accreditation\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:2;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:51:\"/assets/images/Accredited/Anna_University_Logo.webp\";s:7:\"alt_tag\";s:15:\"Anna University\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:2;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:51:\"/assets/images/Accredited/Anna_University_Logo.webp\";s:7:\"alt_tag\";s:15:\"Anna University\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:3;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:40:\"/assets/images/Accredited/NAAC_LOGO.webp\";s:7:\"alt_tag\";s:4:\"NAAC\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:3;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:40:\"/assets/images/Accredited/NAAC_LOGO.webp\";s:7:\"alt_tag\";s:4:\"NAAC\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:4;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:76:\"/assets/images/Accredited/National_Institutional_Ranking_Framework_logo.webp\";s:7:\"alt_tag\";s:40:\"National Institutional Ranking Framework\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:4;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:76:\"/assets/images/Accredited/National_Institutional_Ranking_Framework_logo.webp\";s:7:\"alt_tag\";s:40:\"National Institutional Ranking Framework\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:5;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award2.webp\";s:7:\"alt_tag\";s:21:\"CISCO Network Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:5;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award2.webp\";s:7:\"alt_tag\";s:21:\"CISCO Network Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:5;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:6;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award5.webp\";s:7:\"alt_tag\";s:18:\"VM Ware IT Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:6;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:37:\"/assets/images/Accredited/award5.webp\";s:7:\"alt_tag\";s:18:\"VM Ware IT Academy\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:6;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:7;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:44:\"/assets/images/Accredited/ISO_9001-2015.webp\";s:7:\"alt_tag\";s:13:\"ISO 9001-2015\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:7;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:44:\"/assets/images/Accredited/ISO_9001-2015.webp\";s:7:\"alt_tag\";s:13:\"ISO 9001-2015\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:7;O:22:\"App\\Models\\SliderImage\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:13:\"slider_images\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:8;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:77:\"/assets/images/Accredited/All_India_Council_for_Technical_Education_logo.webp\";s:7:\"alt_tag\";s:41:\"All India Council for Technical Education\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:8;s:10:\"department\";s:7:\"general\";s:9:\"image_url\";s:77:\"/assets/images/Accredited/All_India_Council_for_Technical_Education_logo.webp\";s:7:\"alt_tag\";s:41:\"All India Council for Technical Education\";s:10:\"created_at\";s:19:\"2024-03-29 14:12:57\";s:10:\"updated_at\";s:19:\"2024-03-29 14:12:57\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1716706124);

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

--
-- Dumping data for table `whats_app_messages`
--

INSERT INTO `whats_app_messages` (`id`, `name`, `whatsapp_number`, `created_at`, `updated_at`) VALUES
(11, 'RA', '919942502245', '2024-05-22 04:22:11', '2024-05-22 04:22:11'),
(12, 'RAGHAVAN', '91934223822', '2024-05-25 03:03:56', '2024-05-25 03:03:56');

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

--
-- AUTO_INCREMENT for table `whats_app_messages`
--
ALTER TABLE `whats_app_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `women_empowerment_cell_members`
--
ALTER TABLE `women_empowerment_cell_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
