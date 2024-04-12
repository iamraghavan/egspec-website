-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 05:17 AM
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
(1, 'Mechanical Engineering', '/assets/images/department/bachelors/ME_EGSPEC01.jpg', 'raghavan_egspec', 'bachelors', 'Description of Mechanical Engineering course.', 'url_to_mechanical_featured_image', 'ME_EGSPEC01', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(2, 'Artificial Intelligence & Data Science', '/assets/images/department/bachelors/AIDS_EGSPEC032.avif', 'raghavan_egspec', 'bachelors', 'Description of Artificial Intelligence & Data Science Department.', 'url_to_civil_featured_image', 'AIDS_EGSPEC032', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(3, 'Civil Engineering', '/assets/images/department/bachelors/CE_EGSPEC02.jpg', 'raghavan_egspec', 'bachelors', 'Description of Civil Engineering course.', 'url_to_civil_featured_image', 'CE_EGSPEC02', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(4, 'Electrical and Electronics Engineering', '/assets/images/department/bachelors/EEE_EGSPEC03.jpg', 'raghavan_egspec', 'bachelors', 'Description of Electrical and Electronics Engineering course.', 'url_to_electrical_featured_image', 'EEE_EGSPEC03', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(5, 'Electronics and Communication Engineering', '/assets/images/department/bachelors/ECE_EGSPEC04.jpg', 'raghavan_egspec', 'bachelors', 'Description of Electronics and Communication Engineering course.', 'url_to_ec_featured_image', 'ECE_EGSPEC04', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(6, 'Computer Science and Engineering', '/assets/images/department/bachelors/CSE_EGSPEC05.jpg', 'raghavan_egspec', 'bachelors', 'Description of Computer Science and Engineering course.', 'url_to_cs_featured_image', 'CSE_EGSPEC05', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(7, 'Information Technology', '/assets/images/department/bachelors/IT_EGSPEC06.jpg', 'raghavan_egspec', 'bachelors', 'Description of Information Technology course.', 'url_to_it_featured_image', 'IT_EGSPEC06', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(8, 'Biomedical Engineering', '/assets/images/department/bachelors/BME_EGSPEC07.jpg', 'raghavan_egspec', 'bachelors', 'Description of Biomedical Engineering course.', 'url_to_biomedical_featured_image', 'BME_EGSPEC07', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(9, 'Computer Science & Business Systems Engineering', '/assets/images/department/bachelors/CSBSE_EGSPEC08.jpg', 'raghavan_egspec', 'bachelors', 'Description of Computer Science & Business Systems Engineering course.', 'url_to_csbse_featured_image', 'CSBSE_EGSPEC08', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(10, 'Mechanical Engineering', '/assets/images/department/bachelors/ME_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Mechanical Engineering course.', 'url_to_featured_image', 'MEM_EGSPEC01', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(11, 'Manufacturing Engineering', '/assets/images/department/masters/MF_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Manufacturing Engineering course.', 'url_to_featured_image', 'MF_EGSPEC01', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(12, 'Computer Science and Engineering', '/assets/images/department/bachelors/CSE_EGSPEC05.jpg', 'raghavan_egspec', 'masters', 'Description of Computer Science and Engineering course.', 'url_to_featured_image', 'CS_EGSPEC01', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(13, 'Power Electronics and Drives', '/assets/images/department/masters/PED_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Power Electronics and Drives course.', 'url_to_featured_image', 'PED_EGSPEC01', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(14, 'Communication Systems', '/assets/images/department/masters/CSYS_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Communication Systems course.', 'url_to_featured_image', 'CSYS_EGSPEC01', '2024-04-04 14:42:06', '2024-04-04 14:42:06'),
(15, 'Environmental Engineering', '/assets/images/department/masters/ENV_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Environmental Engineering course.', 'url_to_featured_image', 'ENV_EGSPEC01', '2024-04-04 14:42:06', '2024-04-04 14:42:06');

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
(1, 'B.E – Mechanical Engineering', 'ug', 120, '2024-04-07 14:01:28', '2024-04-07 14:01:28'),
(2, 'B.E – Electronics and Communication Engineering', 'ug', 120, '2024-04-07 14:01:29', '2024-04-07 14:01:29'),
(3, 'B.E – Electrical & Electronics Engineering', 'ug', 60, '2024-04-07 14:01:29', '2024-04-07 14:01:29'),
(4, 'B.E – Computer Science & Engineering', 'ug', 120, '2024-04-07 14:01:30', '2024-04-07 14:01:30'),
(5, 'B.Tech – Information Technology', 'ug', 60, '2024-04-07 14:01:30', '2024-04-07 14:01:30'),
(6, 'B.E – Civil Engineering', 'ug', 60, '2024-04-07 14:01:31', '2024-04-07 14:01:31'),
(7, 'B.E – Bio-Medical Engineering', 'ug', 60, '2024-04-07 14:01:31', '2024-04-07 14:01:31'),
(8, 'B.Tech – Computer Science & Business Systems', 'ug', 60, '2024-04-07 14:01:31', '2024-04-07 14:01:31'),
(9, 'B.Tech – Artificial Intelligence and Data Science', 'ug', 60, '2024-04-07 14:01:32', '2024-04-07 14:01:32'),
(10, 'M.E ( Computer Science and Engineering )', 'pg', 18, '2024-04-07 14:01:32', '2024-04-07 14:01:32'),
(11, 'M.E (Communication Systems)', 'pg', 18, '2024-04-07 14:01:33', '2024-04-07 14:01:33'),
(12, 'M.E (Manufacturing Engineering)', 'pg', 18, '2024-04-07 14:01:33', '2024-04-07 14:01:33'),
(13, 'M.E (Power Electronics and Drives)', 'pg', 18, '2024-04-07 14:01:34', '2024-04-07 14:01:34'),
(14, 'M.E (Environmental Engineering)', 'pg', 18, '2024-04-07 14:01:34', '2024-04-07 14:01:34'),
(15, 'MCA – Master of Computer Applications ( 2 yrs)', 'pg', 60, '2024-04-07 14:01:35', '2024-04-07 14:01:35'),
(16, 'MBA – Master of Business Administration (2 Yrs)', 'pg', 120, '2024-04-07 14:01:35', '2024-04-07 14:01:35');

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
(1, '2024_04_04_142812_create_ads_sliders_table', 1),
(2, '0001_01_01_000000_create_users_table', 2),
(3, '0001_01_01_000001_create_cache_table', 2),
(4, '0001_01_01_000002_create_jobs_table', 2),
(5, '2024_03_22_055814_create_slider_images_table', 2),
(6, '2024_03_23_181614_create_personal_access_tokens_table', 2),
(7, '2024_03_25_093225_create_post_sliders_table', 2),
(8, '2024_03_25_164956_create_courses_table', 2),
(9, '2024_03_29_170714_create_industry_academic_partnering_table', 2),
(10, '2024_04_02_054306_create_certifications_table', 2),
(11, '2024_04_02_061209_add_page_section_to_certifications_table', 2),
(12, '2024_04_07_135750_create_courses_and_intakes_table', 3);

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
(1, 'general', 'https://egspec.blob.core.windows.net/egspec-assets/egspec-1.webp', '/assets/images/holi_sale_3.webp', '/', 'egspec', '2024-03-29 14:13:54', '2024-03-29 14:13:54');

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
('0iYa2fU5bBzFMBHQ4wYqmvLBz9YxNqcevyuaSqge', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJamxCYzA5MFVFSnBjMlp1WlRsdFNUaHNMMHREVWxFOVBTSXNJblpoYkhWbElqb2lSWGRqWTFobGJ6WnJRVTFDYzFWWlFYQXlNMDFYVTNReU5uUkNMME5qU0ZwQ2RHc3lOelpYWW1WclRVcDBXRFExZFhCNU9UZzJRVFV6UjJVdmVra3dMMDVsY2xWWU1qWXhORVJYTUdVMVJFWkJNbXMzZFdocU4xSkNkbWxDWkc1UVFtczJTVlFyVDA5dksybFVXaXRzUlU1c1dWUlNkSGxFT0hkM1lUTmFTUzlaUjBOSlFsUXpiaTlqVDFCRk5sRm9ka05XZERrMWVETkpha3BqVlhWR00xUnpUWFU0VDBFdlVHMUJjVzl1UmxNdlJFNUViVk50UlVObE1IZ3JaMlF5TURKcVdqVjFUM2h2UWpCM05tNDVaa296Y2xKeFFXVkNTMWxCT1RrMGFXWkdiMk5DWTNWRmNubExhV2d3Y0hCM2FpczVheTlHUVhrM2JGWkxka1pUY0hZMllWRmliREpTYlZKSGRGWk5Oa1JYTjA0M1NIYzlQU0lzSW0xaFl5STZJamt5TWpjM05qTXlNbUppTlRJNVpUTTJZVGN5WkdJeE16ZzJNV1JrWkRObVlqQmhOR1l6TlRkaFpEWmlPR0UzTnpCa05qazJOVGxqTXpJek1UazNOallpTENKMFlXY2lPaUlpZlE9PQ==', 1712572156),
('747mGZFInEbRdqeUVnCj3MTuqfzO3Q79Dp0i6TJN', NULL, '54.83.100.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbllyYW0xNFRVWmlaelJMVDJwR1ZHRkVaaTlKY1djOVBTSXNJblpoYkhWbElqb2llVmxZYkVkM01qZHphV2xDYjNrM2VuRlRiMVZZS3pOUGEyeGljalozUjJRME5uaDVjWFpQUjA5d1RERlNlVmxrU1M5WU1FZFRaRzlFV2pCUmVtUkhWa1EyZEdKV2QwMUNhRXRFT0hwVk5WSlJWelo2Wmk5UE1uUTNiM2Q1ZDA0M1drRnpVRVJTYlcxT05VbFBiRTFSVFdod2RXUlFWeTlIVGxKbkwybHlSRnBqSzBWUmVDdENlRFpvUzBOclkwWTBSV3cyZEdOMFZsRllhbmszYm1GemIyaGpjbWt3Vnk5R1lYUm5QU0lzSW0xaFl5STZJamMyTURka05qVmtZakppTVdRMFlqUTRPR00zTlRVMVkyUTBaRE5rTkdOa1pXRTVaV0V6WTJSbE4yVTBNemc1TkRBd01EZGtZamN6TnpOa1lURTRZallpTENKMFlXY2lPaUlpZlE9PQ==', 1712549630),
('8ag6Osu4kvPG44oQPT0FEgKYcFeQt788bsxK8Ma1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa2cwWmxWak1HOUhNRmx0VlhRM2FtUkJaRmcxY2tFOVBTSXNJblpoYkhWbElqb2lVWEpqZEcxdVFscFlaR2xoVTJWM1oxWjJRMXBpUkhKMllYb3dRMmN6YkVWa1dXdE9TbGxsYmtGUmFtMWpOV1ZvVFc0eEwyTnVNRUpyY2t0Q1MweHFXbnBPVGxoWlZVbzBiR2xVTTFGUVpucDJhbWhNU3pKeGJYUktZVkY2VHl0dGFtdG5ZMUJOVm01VU0ySnNXbmM0YVdkRWVrWTRSamhaWVZCU1MwWk5TRzg1UTFSU1owcEpWMnhITWpCNkszSmxNVXBDWnpCM1oxSmFOVWc1V2pWSWJGSnVZbGw1TlVoWVRrZEpMMEZ3SzB0WFkydDZlRmtyVVhBeVpYWTRiMlVyZW1kYWREaFlaRTFpV2xsR2FsUnRORTkzVFhsaVJEa3ZaamxVZDFoRk9VTTBWVzk1T1dGb1JVZ3dOVWRuWm01M1ZEQTRZMVo2VFU5V1N6SnpRM1oyVm1Jd1FYWnhkR0ZYY2xsT05IQkZTRzlDZUhFeVVESlNOVmRSY2xJeVkwZHZVV2cyT0hkTlRrNWpZa2s5SWl3aWJXRmpJam9pTW1VNU1UQmxaRGRqTXpJNFlqSXhORFkwTVdabVlXTTJZMlpoTlRFMlkyWXlObU5tWkdSaVpUTmlPR05qWm1aaE9HWXpOV1l6WmpjNFpHVTFOVGswWXlJc0luUmhaeUk2SWlKOQ==', 1712473567),
('dk5Vf3yCSJa0FQdxnAGhqvt1mrNJyfUNQQ9tyj9b', NULL, '192.168.100.104', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'ZXlKcGRpSTZJbVZ1VXpSeWFuVkdVelp2WVhGdFlteFFORVkwU0hjOVBTSXNJblpoYkhWbElqb2labU0zVkZCMGNsTm1iR1kwZDNveWVWWkthMUJtVlZjcmJXNUNXWE4yZW14TFlYQm1PV0ZCT0hoWVRpdEpZVGg2Um05d2RuVjJNMDFWU1cweWRVRTNjbTl6VnlzellpOVVlSGRGVVRkWWNIUm9ZazFLT0ZsWVltTXZabTF2VTNOWVVXVkZUalZWTUhZNFJscEhiVEU1UVVoM2FXbEJaRzB2WTIweGFWVlhkVlowVEhKYWRFUjZaSE5RVXpWaFZrSkNWR0ZPV0RKM1NscHJNbFZUT0ZGdmEwNUNOME5GUkZBMFpXNTNTMFZHWVRCeVRuaHVkV0p0TDFFM2EzbFZhR04xUjFwNGRGUjVSV0ZOWmxoemNFNUNLMHhyUWtVd1dHSnNhREp2ZEVkSGNWTXdWVTh3WkRkRlMwRnRORlpRVFROb2FEZExjbWxyWVRKT2MyRTJjbGRvYjA5TlFtUlBiMkZ3YmxSalptcFVZWEEwTVdsRVRVTTRTVGx5VDNoVE1USmhTek5oYlhad1MzRTFNVzh3YjNCaWNVeHJkRzVuV1hkWGRITm1aRWRuVTJNaUxDSnRZV01pT2lJeE0ySmtObUkzWXpVeU1ERm1ZVEk0Tm1Vek1EWmlaREJqT1dKaFlXSXlOV1l5TXpkbE1HRTNPRFpoTVdZeVl6Y3dPREkzTXpWak5UQmtOVEU1TkRFNElpd2lkR0ZuSWpvaUluMD0=', 1712638912),
('fTAEjxSl1uq9bpXqdVVX3XWmKp3zhBZlLvssVElC', NULL, '18.212.229.196', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbkZCVm14VlExcGFSSFZtVkVVNGVtaHdiRXRQWWxFOVBTSXNJblpoYkhWbElqb2laSEZEWTA1WGJHcGxTbE56VjB4cGRraFpaRGR0Y0ZobmRUTjFTMVo1TkU5bFExUmFlRUpOVDBodVkwOU1hV3BDWWtkM1ZXZEtkRUZLYjBWVmFTOXFLMEpLUVUxSGNteGtkRVY2WVhGWU1GcHhWRTVJWVRCeGNESTFRVTVMYVRWYWNqaHZZa0pUYW1sV1dYbHBWaXRsUjBjek5tcHhlWG8xTHpaU2Jtd3laa1ZKVUV0R1J6RmhkM1JTYUZKYVNXeHhRV2xOYjBSSVUzcHZiR0pXZHpoTmFHTllhbFpKZVUxNWRETm5QU0lzSW0xaFl5STZJamhpTVRVeFlUZG1abVpsWVdabVptUTNNbU5qWmpFek1HVXpOVE0zT1RRMVlqUTRZemsyT0daak5tSXhZemRtTVRoaFlqWXdOalV5TXpJMU9EVTNNV01pTENKMFlXY2lPaUlpZlE9PQ==', 1712581639),
('IkFPcs8Apmg2PqGS3j2RoWXaSDiVlr9zNYNbeALN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbE56Ym1SRVFqTjFOMngwVjBjMWMwY3JWbWcxSzNjOVBTSXNJblpoYkhWbElqb2libE5DYWxwM1pFNXBXVzgyTUZJck1rbE9PV0ZNTTBKWlVFZDFlRmt6VTNkV1kxUnVVSFZHYnk5SFVEQkROMmRTVWpaaVpVcDZVVW81SzJRM1Z6TllNMHc1ZGxWQmQybERMM2RTVVRsbllVbE5Ua0poUzI4d2VXaEVVRUl6WTNSWGN6ZE1NMVZxT0RGdWRtTnBRakJNUm04NU1rUmxVVTlIVWxwMlMyMDVaWFpFUWxwVFkySnhkREpqWkZkMlRVRTRMMFE1V0VZM1NXMU5ia1pEVW1GQmRXeDZiV3RxVG1OS2VXNVJMM1JwVDBKMGRGVkVRVVZHWlVkSWIxZHZVRU5ETUZwbVdHdFZUSEZOYjJKaGVVWlRXVzVaYW1WNk5rcDJOMlY2VVRsU01EQjZkamhyVVUxWU5HVjFNbEE1WTJsd1dVaGpRMm94VWpKTWRVaDVVamRZYUZsVmNuWlZhRlk0TjNkSVVXUlNia3RpTUdkcE5tZGxjemRXUlRZMWFWaDFObHBRVTFZNFVsUldiSE5aZWpSeE1sSndaRGR1WmxOYVUzZzVhVVE0Y1dVaUxDSnRZV01pT2lJNE5UVXlaR05oWm1Fd1lUVTRNbVV6WmpNd01qVmhNMlJsWW1JMk1XTXpNV0k1TnpWbFlXRTFObVpoTldObE5qSm1OREF6TkRjNU5XRTBORGsyTVRJeUlpd2lkR0ZuSWpvaUluMD0=', 1712638716),
('Inp8HohkTzZrwEH4aRnfrXq2ltrX2rkbjTcrAUlT', NULL, '66.249.82.9', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'ZXlKcGRpSTZJbTVWYW5ONE5qWkZZM1ppY1RsNldHMVRiakZJTmxFOVBTSXNJblpoYkhWbElqb2lPR3MzTkhWWlZqUlpiRVZ5VTNJdlFVTnFOMWxsVldkVlExbHNVRGhOTlRoNFFXSnRNMUJSVW1OME9XdEthREZrZUVGR1NGWjRLeXRsVlRkMk9VMXpRV2RMZFZWSloxaFdNREJHV2l0RlZqWTVUMFU0TlhkdGVVaG9WemNyY0ZsMlFWTm9RMjk2ZEZoT1JWQlNXRWwzWmtKSGQxWm5iRzB5TlV4aGJXdHJMM1ZIVkhWSlQxZGlReXNyWnpWMVppc3JPVnBXTUZOYVowZEJPRlFyTmxSV2NWUnZSeTlWU2pCVGQzZ3JOVTVvUWxNd1VtZGpPRUoxTjBsdVVGVlBPVmhhYWpab1RpOUxXRkpYV21wa09IZGlkM1JIVW0xeGVtZ3hOa0ZPU1hKV05XVTJabmRUTm5Fd09HbDZXWEpWYzJJM2NqbHVjWEZSUlVOSFYwcFFjalJ1WVZWaWVreHpWa28zTlhZeldXZEpaMlJ4TDNZNGFVRTlQU0lzSW0xaFl5STZJbUV4TjJVeFlUZGhaRFkyTW1Oak16QmxObVZqWW1RelpEWXpNamhrTlRBd056azNNR1F6TjJFMk56VXdPVFJrTlRaallURmpOVFk1WkRVMFkyWm1NamdpTENKMFlXY2lPaUlpZlE9PQ==', 1712487519),
('l673txKV4vpwFfyjRc44hRvVwBF4M7OaZmEubE5v', NULL, '117.192.159.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbGxTU2pndlNXRmhjVzB3TjI0d09HcHpjRTlRWVZFOVBTSXNJblpoYkhWbElqb2lNVVl6WjIxVlJqZERibU4yVERSTE1FcHhTVVEzY0dwNWRqVlFWVkZzVFZWMWVrcE1kR1ZNVlZkWFluQjZWM3BXZEVSd1dsZDJhMmN3TVhwcVlUQnJLMmRCVlM5NGNVRmllVzR2Wm1OaVVFdElRMDAzYUdSb2NYSlFSMk0yVTFCWGRtcDNORVF4ZDJ0eUsxbE1LMFF5YURCMFRVeGxXRGwyVVRjeVdTOXZLMGhMT0ZCWWIySmxaakEwTUV3eVdqZzVNeXRrU25sNlVWQnRNR05UVTJacGVVdEVOVXcxV21SMWIxVlpQU0lzSW0xaFl5STZJakF5TTJFd1pHSmhPR1V5TUdVME5HTmpPRGhpTVRKbU1XUTNNemhsT1RNeVl6a3paREU0WmprMFpHWTBNMlJqTVRVeVpXUXdaRFJsTkdGalpUUmpOR1FpTENKMFlXY2lPaUlpZlE9PQ==', 1712584951),
('lAPRKOdA8fR27iq1t4eS9pzGWXpcvs0c6n6yJ8sE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbFZrVFZwSVQxRjBhVGh6YVVObVUyOUdRVFJMVWxFOVBTSXNJblpoYkhWbElqb2lZMUJYWlZaUkwxRmlUVlF3YzNGbmVITkVjMXB6UzFCUGNtbzRiV0ptVVhaSVlWcEhMM0Z6WkZRM1lVb3liVUpGYzNWeVV6VTNaVXBOS3pONFdIQTRaa0l5T0VodVMwMXVjRFJ3ZERNMWJXcGtTMDU1VlZOYVVXUlBiMDg0VUhVclRXTnNRVXBTZUUxWmJFWTFTRFF3TXpBeWIwMXZOR1p0VEVadVNWRkpRVXQ1VW1oSGVYTmlORFY1T1RoYVowNTZNSHBQV25kclYzQXJNakkxVVVOTk1VcEZaa1pNVDB4dk5raHZZalJ6YW1SdFNqZGxVRXB5YlRFeVlXUndVbEkwVFdneU1GWnpaRFJJUmtwR1JGWklWMVozVTNabFRWWjJkV05zVWtoSlYwOVZWVTgwUVdWMFVHUjNLMlJUT0RSVWQyNU9lRWxhUmt0WFdrWmtka3RIVUVsdVVURkhWMGd5VUcxbFdVaFJlV3huZEdocFZITm5ZMFpNUVhsb1JqRTVReTlOYjJKR1dUVm1kamc5SWl3aWJXRmpJam9pTkdZME1XTTBORFZsWmpWa1pEWXlNRGM1TXpabFlUaGtZVEUzT1dGbVkyWXlZV0l4WkRoaU1EZG1NelUwWlRkak9XVmxOMlUzWWpOa01qZGhZakEwTlNJc0luUmhaeUk2SWlKOQ==', 1712471767),
('LYzhMv8bb4oQs9aZkYv1URyASMgNoa1WEKqLlvVu', NULL, '66.249.82.13', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'ZXlKcGRpSTZJbVJTWWtwMmJteFRNRTlVUjNSSFVVTjVaa0ZvTm5jOVBTSXNJblpoYkhWbElqb2lRWFJRTDAxMmVpczVhSFZOVjFKcUswZE1VVE5SWkZWUWVreHZTMU5sU0hodWFXOXhWbWgxYW1kVlluaEZaRzFsVEhOblFuTTJUVWhzYzFWd01uZzNhazFpUVZGMFkxWk1RMEZCZFRsRUwwNVdTVzg0Vnk5ck1HODBMMko2VldnNGFVdG9MMEp3WVRkc056bGphek53UjB4WVN6aEVUbVpqTnpCdVRqQTFSMHR3UldVcmNFNDVNbEZ3VkhaT1pUbDJRMlpqZW1GcVNsVTFZVlEzYnpNeE9YVnNOR0oxZURkSUwyZDJNMVZLYVhWbU1VTlpkRVJQU1dwYVlqQXhjbE40Y1hGS1ZIUnROV3h1VjNKSVFqazFabEV2Y2s0ck9Xd3lNbVphUlhFM05DdG9iMWhoZDFaTU5uUXJRbVI0UkV4SlRTdFVSVlp1UWsxUGIzcFpXV0Z0YkdwWmNHNVVjRTlsUTFkd2RXcG9kbVpGYmsxS2FHYzlQU0lzSW0xaFl5STZJak5sTXpNME1HWTRNRFF3WXpFNE4yWmtaV1psTnpWbFpEVmxPRFU1TnpnMFl6Z3paRE15TURVMlpETXhZV1EwTVRVMVpURTJOMlkyTldNeVl6a3hZV1VpTENKMFlXY2lPaUlpZlE9PQ==', 1712487491),
('MKx9VKpCVXGnzD9Z4sHBIhihIGDaHoqVk8IvU2gp', NULL, '198.235.24.44', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'ZXlKcGRpSTZJamRZUzNGTlJVOXJXamR0ZGpCUE9XVlJka2hOUkdjOVBTSXNJblpoYkhWbElqb2lTWEpDTTIxT2NVdHFTalV4VEVzM1YwNXllRUZuY1dNMFUycGlWVzFOU0cxWFdsUTFkWFJRZDNKRk0zQnZRVWhLV0ZWa1dXeDNOalZDWkdwVVIyTTVUemswWjFaQmFERm9XbXBtZDJab1NWTjJOekZ4UlZCbVJtNUJkbllyZW1keU5FTjRaa1pMY2l0amMwTm1SRkY1T1c4clVHVnpWVE0wYjBoM2FsQmxabE5EVUUxSFUxaHJRMHQwT1ZnMVFtZG5lbWR2TVhGTFVsUTNNMU5hVEVWSVVTc3paMlJsVDNsWWRqWkhVMk5QTkU4dll5OUtVbU0wYTNaRVpWWnNPR2xtZWxKS2RpOWtjMHMzTm1GYVEyOXhWV1Z5T0dkUWJUWjBTazVOTWxsTk0yMTZRVk5hTW5SWE1HVm9PRkZvVDJKcWRXaFFkbEZJVDJKUk9HWkRhamRLUkdwV2IyZ3ZMME15YldNM1dHMUVNWEJxVm5jeVMzYzlQU0lzSW0xaFl5STZJbVUxWWpoaFpqWmlNMlprTlRrMk1HSmtOak0yWVRCalkyTTFabU0xWm1SbE5UWTBZV0prTWpsaU4yVTJPRE0yWm1WbFlqWTVOak0zWTJKak1qQTNNMllpTENKMFlXY2lPaUlpZlE9PQ==', 1712633015),
('mUSbrwo5MoomMaJ7KITknRFOkn81TEdFUtBRcIX6', NULL, '193.122.155.11', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'ZXlKcGRpSTZJa05rUkhSVGJtdEZRWGhqU25SdlJDdE9RME5TVVZFOVBTSXNJblpoYkhWbElqb2ljbmdyV2t4aFVWRXhLMjVJTURBNWNWSkVTbGRKZUhJM01VdHRNbXhNTkV4aVlrbFRjM2sxYVNzeVZHYzNVa2xJYzJOelpISTFMMUJWT1dWcU5HcHBhMVUzYkVsYVlVbG9PVmRNZW5GalQydHVlbFZ5VFUxMGREaFhMMjgwTW5sd1NqWmllbW96ZWtsUlIxQkxNMlpPWWtaQlRqTnljMHhOV2tScE1FTTBMM0p4ZUZKNlNEUm9VV2R4UVZsSlZFOTJNbU01SzFwV2JXeHdVMDl6WjJjMlVqSldNa04xTnpWTmVESkpVelUyYzNCdlFsQk9kR1I2WldSSmVHMUZTbFpGYmxFNFVUVk9NV0UwYTJOd2FXMDJMMkZNY0hwdlZXcHdORUY2ZUhscVdXTkxlbXhFV0V0eFJIaHFSM1JXVlRsblpGQmtNekJvWWpsbFFXaFhNbHAxTkRObU5YSXZla1l4ZFZoRFpFNHlTRlpyUjJoamFYYzlQU0lzSW0xaFl5STZJbUl3WlROaE9UazJOV1ZtTTJReE1ETTNZelpoWVRSa09XUTBOVFJoT0RKbFpUZ3pOV1EyWkRabVlUVTBPR1EwWVRWbVpEWmtZMlJqWkdGa01UZzBNamdpTENKMFlXY2lPaUlpZlE9PQ==', 1712511858),
('NgRsySdUvjIWGSJPSV5tLDWIJLCAnzCn96l7QleY', NULL, '205.210.31.10', '', 'ZXlKcGRpSTZJbTVUVERWS2QwSXdiall5UTIxWGJXUnNjVEpMZUdjOVBTSXNJblpoYkhWbElqb2lWVmhEV1V0blFXMXBSMlZIYWtST1lUbFBRbXA1VFZkS09EVk9laXRxVWt4MVVtcExWbWw2UnpWMlF6TkxhVGd2Wmk4MVUzVlhiVTEzYVZaeWFIRjFlbk14VG10eFRuUlFOek0yUVZoNVZIQk9lbVpyUVhGWlJHRkRSRnAwUms1V2N5OW1TbU16UTFKU1FVZzFhMjlVTTFVclVHUmtabXRxZEVWcWJXd3pjMlY2TURsTGVUZHplRUZ2U21Sb1VUWllaWEFySzJsV01rZExSekY2ZERaT1QzZFBkbHA1UVV0V1JXd3ZZV2xrY1VRdlJFbDBiR1UwUVdFck1qRlJXbUpUVmxCSGIxYzNjbVJ0TldGeFozZFpkMkpCVlRRdlRteEVkek13VTBKelpqbG5TRkZGYzJWdmFVUTVVMEV3ZVdjdlRFTk9Xa1oyVmk5SFZUUlFVMXBMWW5SaFZtcEhSVlJ1WjNKbVkxRkNabHAwU0hkT1RIYzlQU0lzSW0xaFl5STZJalZoT1RrME56WmpOVFUxWTJRNU56QXhZamM0WldVelptVTBNelZrTVRka01XUTFZakl3WVRZMVlqTmpaR1l4Tmpsa1pXVXhOalJsT1RRNU1UWm1OV1lpTENKMFlXY2lPaUlpZlE9PQ==', 1712468726),
('qL1CcoUOhgeYWdTIOVhQuibDWXmqAxRhzs2XD2JL', NULL, '198.235.24.26', '', 'ZXlKcGRpSTZJbEZRZFdKTUwxUXpVRVI2VjNNNVVEWjFUVU4zU0VFOVBTSXNJblpoYkhWbElqb2lURmd3UWpGMGFuUldTbmQ2YjJwUVIwbGtSbkZFT1ROaWVHTlBkRlZrT0VrcmFuRm1jVGMxWVZvMllWZEpVbkpoVmtNckt6VnhPR1puYVhsSFVXeEhUa2hNTmxaR2VqZGlTM0ZtVTNSb2EycHVPRmxRT0VwdGEzVm5NMUpuUzFFNFNYWmhiMk5KWVRSWU5qVm1lSFpaUnpjNE5GcDFlRUpuVFZvelEwUk9ValY0TUZKVWNIRXpVa1ZwUTNGNk5rcFJhMEZ1VjNObVNtRlVSVFZxU25sQ1p6bEhWMDFvYW5kYVVtOVBZMnhGYTNGek1YUlRSVXgxYTJRMFEyWXZhR3hMT0d4V0x6Tm9ibU42ZEhOTVIwRndPVlkzWlhGNmQyVkVZbkI0VW1OcmFUVkZSV1EwT0ZOQ1QzcFdjU3RVY2xvelRGcGFla2RxZWxKSVQyOTBUVGRUUjNZNGIwUjVXSGgxUXpGMmVFOXdTMUppTkRGeU0zYzlQU0lzSW0xaFl5STZJbU5qTXpOa05HSTNOR0UwWm1aaFlUSmxORFV4WWpRME5HTTVPVGd3T0RWaE9UTm1PVEZpTnpGaE5qUTNOMlV5TVdOak5UQmtNbVZpTldVMVpXWmtaV01pTENKMFlXY2lPaUlpZlE9PQ==', 1712529574),
('rkhQgm3wfwPjp5kNqTOnhmCDgRouAHcgi9Uu4NKy', NULL, '59.96.238.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa0o2VTAxdVZHUklZemcwUjBkMmNsbHVjeXRQVkZFOVBTSXNJblpoYkhWbElqb2liQzg0Yms5R1dteHpTMlZuSzBrM1dHMU1NbUpXWkRsV2JrZFFUekJWYTFkVFdXTkxhME5GVjFCeE1HWXlPVWRCYW5od2RISk1jVTVMTWxwNWEwOTVPRkpFZFV0R2RYZDFPVkZSTjJJMGIzVjFUbUphTTA0dmJXeHplVWxZUVhOMGVHZzJXV1kzTjBKNlpXeFFlak0wVFZNMVN6Wm1jM1pEVDBGeUswRnNhM2RYVEdkdmJXSndPVzVMVnpWbGJVWm1NMmQ0TDFwV2RtbEtjVXA1V1ROTEwzY3JOMWRXY1U5bmFHUlljR2hXWWtGTlV6ZHpNbFJGWkZOVGN5OWlkbTVFU2tWYWFGWnlPVFIxWm5wV1lUZGxRbkFyUkhaYWRtVm9MM3BzYVRCbVIzbGhORmg1VjFOUGVWaGhaekozUXpWeldIRldkMmt3T0RWek5FSlNkVVE0YUVSVVZsZDRNbHBUTDJWWlptVklaVnA0T1cxT05VRTlQU0lzSW0xaFl5STZJakppTVRreU9UQXhaV1ZtWXpNeVlqRTVaR1kwTnpVMk1UTXhNek5pTkdRMU1EZzRNMkl4TWpSa04yTXpNMkl5WVdObE1XSmxNelJoTUdGaFpHTXhNV1VpTENKMFlXY2lPaUlpZlE9PQ==', 1712489028),
('Smpnyij2pwXNQ5NBqiHEBraN9cc2QLMLZRZQKCmv', NULL, '193.122.155.11', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'ZXlKcGRpSTZJbWxDZDNkaVRVVmlORkJFYjI5elZYbDFTblZYWW1jOVBTSXNJblpoYkhWbElqb2lLekpRU0RSaGJYZEViMFk0Um0xcVRHWlJaVXBtTkhseGRFeEdlbE5pZVd4eU4xZ3ZSbTlGTW1rek9HVmxiakpQTkRseFZrNWhObVJ5ZEVsUmVGVm9WbE5CY3paWUx6Y3dNRVp4ZFZORFRrOTVibU5ZU2tWbVRtVXJOMmhQVXl0VmRYbDViMFpuZDBsMlJVNHlPSGROZFdReVIybFpiSGRsTldreVdYcFVhV3R2VkdSdGNrSkZMeXMwS3pRdmNqazFhMGswSzAwMFprcEhXRzFpTVdkTE1sWk9RVEU1UVRSUlQxbGFWR2xNZEZsNGExRXhUekoxZGxkUWVWZ3hWRXh2V1ZORVN6RTVkWEpNZERObk9XVnhOSGxqU0dselJrcHVlbmxZYTNscE5GTjVRMFJXSzNJMFkxRlZTRW8xZDNKcFJqSmtUV05vY2pkeU0zQkdaU3RoVDNVcllVbzFZbFYxTjB4NU5UYzJUWEZ1UzJvdlFuYzlQU0lzSW0xaFl5STZJamRoWWpkbVl6ZzBZVGszTTJZNVpHUTRPR0l6TnpWalptRTROVFU1T1RjNU5tWTJPR0poT1RZMll6UTRPVE14TTJJMU56QTRZalEzWTJJMU16QTRPVGtpTENKMFlXY2lPaUlpZlE9PQ==', 1712511863),
('Smr3O6Y63LEdnNpLxICHWOjgmMjSTTG75lbWPD33', NULL, '66.249.82.8', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'ZXlKcGRpSTZJblZyUmpock1EQkxUVGxLTkdoemNWRm1kMHNyYzBFOVBTSXNJblpoYkhWbElqb2lTVVZhTnpWblJuVmhXRUl4ZHpWQk9FVlZlR05NVVRVclpIaG5ibmQwZDBKS1VreHNZbFYzYTJwdlVtcDNkMWRYTUVkTWRXRkpUbEpvU1ZsRFFVWlFTSFJuUVVOWVJuZDVOelF4T0VZelptZE1NR2x2YkhJMVdGbDFlVEFyYTJadVRtRjJXV1JxTjJjd0x6aGlVRU14ZVhobFFWQTBUbGRsZEdsVmJtTjBOamxMT0RsdFUzUmpXa2x1VTNnNFdXUk1XRnBGVjJnM2NXVkZUWEZMY1VsaFNESndaMEZrVlhsQ2EwdG1hMHQ1Tm5acVZUQlZWQzlSTms1YWVXaG9OR2gwU2xaV05XWkxNVXRvWmxFelZuaERaVzFqUzFCRWRGQmtWV2hxWm1kR0wwazVSVFYzU1hRMVRERlJUR2N3ZERGMlQyWmhhRlJwZUVzeGJqbFdLMEpDUmxRNU5VTlFOVGxxTlhsaGNHOU9lWHBHVGtGWllVRTlQU0lzSW0xaFl5STZJakprWkRrek9XUm1PRGs1TVRObFkyRTFNVEZtTUdZd05tVTRaVGRtTWpSak9EYzFNemN4Tm1NelpHRTJZVFE1TnpjM05URXhaREZsWkRsak5XTTNORGNpTENKMFlXY2lPaUlpZlE9PQ==', 1712487521),
('WU1VGXcJ7mlArZZW6YFzJgnNWhI2OZmPbbq1Bxmd', NULL, '198.235.24.168', '', 'ZXlKcGRpSTZJa3N6YmtnNFZsUjZWWFZ3WlN0QlN6bG1OMWRKVEhjOVBTSXNJblpoYkhWbElqb2lZMUpsV1VGMWFuSmhNamxGWVhKMU5HMVBSVUp3UzNoMmRDOXpOMjVRT0N0bVNVWXllV1pTSzJWNVlWbFNZVzVxYm5sM1prcGhMMG96ZWxKRVNpOVllRXh0VTA5NmNGbG1lV1kyWmpKcksxQnBVa3hMWkV4QmJVVmpSV05KTlRFeVNXVjJPRlo0Ym5KVU4wcFJNMmxpWms5REwwSktjWGxRZVhaTGRqSnJkMmszTDFkbFJYaFpRV3h0V0RWVFNFNUhTV2RsTlhkdGFuRlRUVU01U21Jdk0ySXJla3hoUmxWSVZISlVPVWxTVEVaYVZ5OWFNWEozWWtoNlZFWlZaWEJKUjFGdk0xaHVjMlpGVW14alpHbFVlbEZ0Y1hkVVdFbFVRM1ZXWTFSWVdVUm9LMjFuZUhac1ZXOTJOUzlJVEM5c2EzTm5VWGRXUzNGWE1HMXlNR3hyTWxGNFZEaHljVnBZY1hrNFpIVkRZeTlqZWpCWFJGRTlQU0lzSW0xaFl5STZJamc1WkdVME9XUTNOakl6WXpabU1UUXdaRGRrTm1JMVlXSTNOamMwWlRBMlkyVmhaRE0zTlRRNVlqRXdNMk01TnpJeVpUUmtPREF3TlRjMFl6QmpZek1pTENKMFlXY2lPaUlpZlE9PQ==', 1712575622),
('XbSXtmY9QRTviEJoO8oRSPC9L2q1O5IM3w3Gxoyd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJakpyWlc1eVpFTkhiVUZWUlVGeGN6QkRTekpOZFVFOVBTSXNJblpoYkhWbElqb2lURVJUVlVkVlRGWkZSblZ1U0ZKd01rNUtTV3BzUjNObFEydFBla04xTlhoeWMxSnNZMlZNVDNvMWFtcGxUV2NyVDNwTFQyMUJZVEZsUjNRMFJGVXpiWFZaUkhKWk5VaHBVbWN2Y1dOUFdEY3JVek12TnpKc2VWWlJRbWxQYUZsTlJtcGhXVGh1YUVGNmRqbHFWV1o0YmxSVmQyTkZkbWRwUmxKRk1rMXhkbTFVUjBZMWF6aDNhbEpoYmpkTlQxWmhRbTA1Vkc1cVNHUlBUMjlyUzFJNVVsb3hhRlpOYVdJcmJFOXdWRFZ2ZW5NNVQxVlhTMGN4Y0RWbFRXZFJka1ZxTWxSVE9GRnJjVkZYUVdRelV6ZGpaV0p6SzJNMGJWZElaMHhFUjFoeU0wb3lZM2hUUjJGU1NIRmlRbVpCZERSNVMwRmhjRmhHZWtSeVYyOVFjemR2VlZReVoyRldUVzl5VG1wd2IzbFNWa3RJVUdKSk9HMHZUblZrUTNKSFYybzBZazlsYWtKMFJGRkZhbGxDWlU1d2IySmtOblpNTDNOc1IyOUhXVkI1Yms0aUxDSnRZV01pT2lJNVlqRXdOMk0yWTJOa01ESTNZbUZoTjJFM1pXWXpNbVE1WTJRNE56Um1PVE01T0dNMFpEQmtNR0ZpTVRrd01Ua3hZelk0TkdJd1lUZzFPREZsTldabElpd2lkR0ZuSWpvaUluMD0=', 1712565361),
('YfDqa1my5JIHEYzhPamc9RJVQ0RQJthblglkp0KN', NULL, '66.249.82.14', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'ZXlKcGRpSTZJbXQ2ZUV0Q2VFdEJNMVZRUTJSUlRqVlhhMFEyWlVFOVBTSXNJblpoYkhWbElqb2llazFLYUhaaGR6SXpjbEF3WlUxM01HRTFXbkpVV0RVd1VIUTBhVzF6UWpVeVNEZFVlRGc0Ykc5UFVFTm9PRzFXT1ZWM1J5OW1lamhFV0cxYVdrbGpielZtU21GMllUbHNLM3AzTTNOSmVqaEJVbFV4YkhOU1RucFJOakZLZG1OWVRFOTNTM1kyVjJsMmVGcHJkVkJTTlRCaGVHWnVlbTVTY3pRMFprcEZUWGcyYzAwNVlYQTNaMlp5Vm10UVVVVTNPVEZ0WW01R05ubGlSMmMzUlRaM1QxY3ZORkIzYTAxU1FubGFjbFV4VnpkalUyY3JaR2RrVG1wclVFazFTV3RZTjFOblpVaEdhbVJWTlVSUVQwVlNibGd3Y0hCUmRGcFpNRVI1ZDFCSGIxSlNlbTVhZFU5dWNtMXRaSGhEY1hKTEwyVkxhamN3VW5ScE0zVlVTMk53T0hKcVFrMDRia05OT0ZSNWRtUk5UWFozU1hNeGVIYzlQU0lzSW0xaFl5STZJbU5rTVdFM1pESmtOakF4WWpBek9UaGxOakEyWXpSallURTFaV1F4WlRGaVlXRmtaV0pqWmpRME1UVXlNMkl5TURCaU9UWXdNbVkyTURjM00yUTNNRElpTENKMFlXY2lPaUlpZlE9PQ==', 1712487483),
('ylgP8ieoYBH0x3KBVv49IIcDGr19ptFCgUVAEmGP', NULL, '192.168.100.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa1ZPY21jelQxVlpRbG8xVHl0Rk5EZElZMnhtVTFFOVBTSXNJblpoYkhWbElqb2liMjlDWmpaWGNXRTNablE0TmpBdmFrWjVTbkpXWTFsRFdFWTJWREl6V1hONmRsWjFkekpzZEVoTmFtUklXRnBXZFUxdFMwVTJhamgyYUZoWFduUnhNakJVVTBKa05IWjFPRlpGZERSQ1YzVXdiRWRRYldvMFNuSnVaalpaVVdoNmVVcFZOVVZSY2tZNVZXMVZOMWR6YW5wU2JuTm9kRVJZWjJsdVdXOXBRV2N3Tm01VVFWRnJVMmxsY0ZKMmJVTlJNVkl5VFVGSU1YRnhjMnhwUm10d2FXODFhMnA2UnpWQmQzSnVlRGN2V0VwVFFrWTBSM0JzTkhOWmFuRnNPRkZOVTI1ck5rOWxkVVZrVEdRMWJscDJhMUJVZVVoclYzYzFXVlZLTUdOWFNqQldPR2RzZVV0emFFeDFkVmRuU2xWdlVHTjVia0pvYURaa1lrTm5hMEpFUzFCRGEwNWhNMjVRVUVzNU5VVlFhSE5TS3pFd0wwcFhOM1pKY1hCMk5FNTNVVmRoUTIxdFNHSktLMFU5SWl3aWJXRmpJam9pTjJWa09EWmtNMk14TjJRMVpHWXpZbVUzWkRKaVl6WTFNV0k1TURjeE9EZzJOalJsTUdOa09UTmlaVGd6TXpKak5tTTBOelZrWWpjMk5XTXhZemRpTkNJc0luUmhaeUk2SWlKOQ==', 1712639613),
('ZFADK96uevUx0RmQ3FLcGR8GtUwdv40J2IVD9cns', NULL, '205.210.31.132', '', 'ZXlKcGRpSTZJa1JZV2tvMmVrbE9jSEV5UVN0VmExUnpkMU56TWxFOVBTSXNJblpoYkhWbElqb2lNR2xvWVhoTlUyUmpUa1VyZGxscFRVNXJhMUpoWm5ab1UwMHJURkZGVEdkc05tODFlbUY2TmxKUldWVXJVVUl3VHpONk5sTlVibEV6WWtvNGVGUmFkWEp4Vm00MWVuQkpTUzlFYjBWSFVuY3JTRlJQUVdGdGVEQlhZMlp0VVd4TmIzSjFlbWRxV1RsUEwzTkNaMFY0Y3prelNWcG9hVVpXT1hCNGFVdFNabmt4TVVRMlQwc3hRbloyVTFBd0sxRkROMFl4TmxkelRIQkZkR1E0VVRncllVaGlPV2d4TTNwWllVSTNRazB3V0V4bU9XZFVXSGhVZDJSdmVteEVhU3RoWmtkUmRHZ3ZaakZEYURVeVp6SlNPR3BGZFdaSmJrMUhNME40Wm0wemFqTlVTM0k1VG5JdlNtOU5LM2gxT0ZGWGEzTnhWMjV6Uld0NmRGWlJNVnBTV1RNck1tMWtZVGMxVVZwRWRtNUVPREZ4VjJNMlZsRTlQU0lzSW0xaFl5STZJbUZsT1RZMlpHTTRNREUyTldFeU5tUmxNV1UzTWpZMFlUQTNNamt5TkRFNU1qUTRNekE1WXpZeE5XTXhOREExTVRBMU4yRXhNamhrTjJJM1ptWmpaak1pTENKMFlXY2lPaUlpZlE9PQ==', 1712505122),
('ZZTOwV6GldpljBAOSoilfZklyzxOt8stWh83IPxP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJakEzYUhCdWFrTmhOMDh4ZVhaQmN6Sm5TamhvWTNjOVBTSXNJblpoYkhWbElqb2lNelZ0ZGtSWVdpOVNTVTFKYzJ4a09HVlRhVUprZW5rdlJFeFNOVWhCZVd0aksxbDVjSE5YTDJ4T01DdGFOV2hpZGxKcmNsbFpkMFpaUm5Cd2NqbG5URk5LTkhKeVZqQXZSbll2VkRsTVlUSndhbTVWZEVaMUsxazNURFY0WW1GbFQxQnNka0ZxU1RSTmVrcEtObEZpWVV0aFNERkdObEJsVkdkWFpHdGpRMEkwYjJSak1XazBMMHRVUlRGME5XVktSblpNY0Zka2NrbE5ja1pSYVhGTFkzRnZXVTgzZEZacVYwWlJNRWhCWTBJMmQwRmtaWFpSZEVwd2J6aEViR1pDVEVWcFMya3ZiVEpFUTJ0V01EUm9Va001ZW5kelpXRnZVRlZSVUdSNFYwRnRhM0ZUUW5GaFZFNURhbTlSWWtKblNVUXJUbEF5ZFVaaWMxVjJlVEY0UWlJc0ltMWhZeUk2SW1abE56Qm1ZVEUwTlRBM1pEZ3dZalUyTnpFd01qa3hOekJoWlRaaE5tUTRORE0zWkRobVpEUTRNamxpTkdFNVlqbGlPRFExWVRVek9HUm1aak15WVRraUxDSjBZV2NpT2lJaWZRPT0=', 1712502663);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_sliders`
--
ALTER TABLE `post_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
