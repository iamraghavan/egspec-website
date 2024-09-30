-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2024 at 05:19 AM
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
(11, '2024_04_02_061209_add_page_section_to_certifications_table', 2);

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
('2V6OBYmVRVTisEt0haCVZdjvLjO3GbA8NjByuewJ', NULL, '192.168.100.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbFJHUzNjeE5XbFFaaTlMVEVWSVVHMUZVelpJY2tFOVBTSXNJblpoYkhWbElqb2lVRzVTWkVwSlNtbDJRazF0VkV4VWREWXpaVUZEZURkMVRrUnNTRXBaVmlzclRXaEhlRWxMTml0T0sxcENUakUxV1VOT01UTnNlRVJhV2taYVRuSkJRa2sxT1RoMk5tTXJTazVtY1UxSU9VZ3ZNV2N3WlNzNWIyRmljV05yU0hOM1NteFJSVFp4Y0VOQ1F6WkNZVEJCV0daWVltcHZSV2RPZWxGUVdVbGplWEkzVDJKaVlYZFplRFU0VXpOeFltTllNVEV2TUd0V2RIZGxhMUZEUjBKeGVsQlNXVXRJUmsxSFJ6bENVRFJHYkVaVVdXTXdSMWx1YUUxQlJVTnJSbE5CU25oSGRERXpaMjQxYVVKV1EzSkRjRzFCU2pkak1qQlFTMXB4WTBVNE1rZzFPVEJxSzB4eFYzcDFZamd6T0RFNWIxZG1TMHRSVWl0SU4zVldjekUzY0NJc0ltMWhZeUk2SWpjd016UXlZMkU0Tnpaak16Sm1aVEJsTVRJNE5ESmlZemRoT0RJd01tTTBNamN5TmpBNE5qUmxPRGxtWmpCbVpXSmpZVGczTmpaaE1XUXhNek14WTJZaUxDSjBZV2NpT2lJaWZRPT0=', 1711887356),
('3nAv5sgeFgow9yVWru7wBduG80PQMzbZynv1vp9b', NULL, '104.166.80.158', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'ZXlKcGRpSTZJa3N2YzI1eFRteE1lV2hEYkN0RVFtSnNlbXcxZVhjOVBTSXNJblpoYkhWbElqb2lSM0psT0N0NmRGZEpjbVI1UVZKak1VZzVRVXhHVTB0b1RqWTRRWFppU0VKTlR6TlNhelJyT1U5eFNrZFVTMHRpWWxkTldXUXlRbFpyVXl0bVRtVklRVzlxVGxCWFdWaFdZUzhyVGtsM2MzaEJSSHBZWkUxdlVqVlNRVzgyVlhGT2NEWnVTMFE1WW5ZNVVtOU1hRTAzUVc1cVIxQm9XVWswWldGRFpVbFhUV0l4TTFGUGVYVTRhMFJFUTNWWVdrUTFPRzlsTmtWa1Z6aDVSVXhOTVdsNlZUaDJLMWhSTUVKSlNXRjVTa3RFWjFsdE1HeENkbkl2Ykd4RFNqaGhNMmx3U0RKSVZVWkVSMDk2Y1hWVFJEYzFlak5GTlRCUVQxZFlZVkpFZEdsb00xcHdRbTlZVVN0SU5WUmhla0Z4UjJJNE5rRkxRekpVTUVwb01EZzVkbFpJYTA5cU5UaDNhVUpOV2xKcE1GQktUM1F6VTFFdlJIYzlQU0lzSW0xaFl5STZJbU5pTWpZMk9HSmhPRGd6Wm1FNVpEWm1Zelk0TldaaU9UQmtPVEZrTkdGaU0yUTNOemhrTVRrMk9XUTFNV1V3WkRNM05UYzJOMlEyWmprMk1qYzFOellpTENKMFlXY2lPaUlpZlE9PQ==', 1711975296),
('6EkVDwiWkc0x2TSZQfY9JPhVvDxHkUiEcf3SvDAy', NULL, '104.166.80.102', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'ZXlKcGRpSTZJakF5WkU1Q1RFcEdNMWxGWWtVcmNXdHdaRGhJTTJjOVBTSXNJblpoYkhWbElqb2llSGswU0N0QlMwVklWWEY1Um5oMVUwUTFVbUV6YVhjeU5uRXljbEJpV0VJemVYTkxOVFZrUzBWTVUxTkZNMk5PVkV4RWNFOVpURUowTTJock5uaEZSRnB4Ym05M2NrRlpXSEZxYVZad01GcDBiM1poVGxGdWIwUlVUWG93T0RFeVNrbHFXVXBhSzJKWkswNWFkM0ZUUVdwMk1HSkRSM0o0WlVzeFRURmhUbTVPZWxoRGFFdEhRWE5SVG1aQlFWWkVXRTVZYldoTlNGTk9jRmx0UnpseE0wOXhaaXRNTWpCS1prMXhTRzltWkVSbmFWQXdWSHBMWlZndloweDRSRVUzT0VSTlIySnNWRUpZVUZFcmJEWnlkbUZNYmtGamNteGtSMGxYU2tOM2VuQk1lbFEzV1dJMGRuVktUWFlyUTJnelZETTFRMFJPU25OSE1XeDFNR0UxV0VaUGFVUTRZVkZXV0U1dVUzSlBNVWRHTDJaa1QxRTlQU0lzSW0xaFl5STZJalprWlRrd09EUm1aREprTldJM05UUXhZakV6TldKbVpUbGlaakE0WWpVeE1tWmxObU00TXpaallqVXdNakF3WlRVNU5EYzBNMk0wTXpJMVlUVmpOR1FpTENKMFlXY2lPaUlpZlE9PQ==', 1711975306),
('6ZF9E6Ep21OyworSccrVzsUPJQZl3ZSdLYzFokaz', NULL, '104.131.73.57', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJamxzTjNOVGRqWldPRUZMWmpobVJqVnhXVmhYY2xFOVBTSXNJblpoYkhWbElqb2lNakI0UmpNelFXVXpiSEZOYjNaU05IWlBiVEZOY0VGVU1taENRa0pZYmxKaVpUaEdkRVl5VlhRM2EycFBTekZLWVc0eE5FOU5NV2RwUnpsdmFEQjVaMUpYUVVWMGJVRlNVM2hXV1VKck1YaFFPR1l6UlUxbVdqUkliVFowYkM5bU9FRTFTaXMzTWs5UGNXUlpkbGhEYzBGdVpXWXdUVzFaTWxwTVZVeElRVEpOYUdOWlVFZHphVGx4TXpNNFpDOVFjVGxOV1hOeFowaHVNVk53WkZnNFJHUkRaRzVEUmxGcFEyeFpiV2g0YlUxTFltMUlRalJsUW5KamFsbERUV04yTWtGSGFqZFRUV0p2TDNSVVltZzFNVzk1ZFRKT00yNHljblZ2YjNwQ1JpdElSU3R6VFhVNFF6VmxjbEJyTjNodWNsaHpMMVZqUm01VVFsbHdWRTgyU1RjMk5HRTNkVXR1TjJ0a1oxRTRRbFJ6Wm0xT1lrRTlQU0lzSW0xaFl5STZJalJqWlRZME9HVXpaREE1TVdKaE0yVTJNVGRtTXpjNE9UWmhaVFppTUdFeVlqTmxPR1UwTURneU1EYzVOREU1WXpobU1HSmhOMkV6WVRobU56RTBaVEFpTENKMFlXY2lPaUlpZlE9PQ==', 1711882281),
('IcD0QFKrYJJBRhXY7EvpCqrtRMY1P7OTJu6vdJU4', NULL, '179.43.152.68', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa0pKVWt0c2FXSktkbU56YlM4eFkxSndhbTVEU1VFOVBTSXNJblpoYkhWbElqb2lOVVJxTURSVVlVRnlXbkJxUm5WdmNuWnJWREpaVXpNMFJqaGtTVk16VWpoVGJXMWlUbEoxYVhZMFZWUmlSa2wxUVdzelNFdGhRbFZHVDNwTVpHWm9TMDQwVlVjM2QwOHdka3hFY2xSaVNrMVJMMHhPUkZkT2FHRTNZWEpPUnk5NWMyRTRaMmRNVGpsb1VVVk9SMUIzTjJKTWNtWllTRmMwWTJ0aksyMVZkVUUwWVZKWFNHeGlNVzEwY0ZoUlMxWnhjVWM0VFZCT1NIWm1ibXMwYkVkdFREbFRXVWxUTHpCSmJsQnJQU0lzSW0xaFl5STZJbVV3TURBM1pHUXhPVE5qTlRWa1pUa3dObUk1TWpnMk1Ua3dObU14T1dVME56aGlOalZrTldRMlpESXdNVFZsWlRSa05XUXlOemN4WlRrM1lXVXpNV1FpTENKMFlXY2lPaUlpZlE9PQ==', 1712285212),
('key7BbVNf5fBRd0IPlm5pqPwqizRywDHtUW0CIuu', NULL, '104.131.73.57', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbU5OYTFSdU5VbFNTMU5ITUdWNGVtZ3dSelZDU0djOVBTSXNJblpoYkhWbElqb2lWbkZXVUN0RVRrbERRbGs1ZHpoMlIzVkxkbmwyZGtsbVFtOTBNM2x2Y0VobWMyTnRNemN4YVZGR00yaGhOM1F6S3pFMmJYRlpOVGd5UkZWRFVpdG9abGxsU1ZkeldsbHZaa2h0VGxVdlMySnFNRWh2VG1GMlNXSkZZbEp4VWpsc2MxZFdWV1EyZUhZemMwOW1hWEY1SzBSU2RIRnpXRGxPSzNObU5TdDBjV2hQYTFORlNHUTFWa041V1ZSNFN6Qm9iRXAzSzJsaVdVWk9hVXBhYjBReFpFMUdla1ZrU2pOWFNHNVRSbU5sVDBvMVJVbHBWbVZ4TkRCMVVrSXJXV3h1UmtWMFMwOVVkbmhtYnpCdFMxUnVNa2RGVG01SlFqUkpPSHBpWVhOT1VuWllaM3BZUTBKMGJWQjRZVFpxV1RoVU1tZDFWbEY0VVV0RE1qaFBRVFpDTWtwTlNFd3JVblpQVWtGcFVYcHpRMWt6TDNGcGNrRTlQU0lzSW0xaFl5STZJamcwTlRBMU0yWmxNR1F4WlRWallqbGlNakJtTVdKa09UbGhaRE0wWXpVME5ESTVPV1V3T1dNNE1ETTJNMlpqTkdJMU4yRm1OV0UyWkdFd01UaGhZallpTENKMFlXY2lPaUlpZlE9PQ==', 1711882277),
('QrC4SmtuHB055Xh0mEvapwkvw0xEdWLnZCiZcfdt', NULL, '104.166.80.28', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'ZXlKcGRpSTZJbGMxTDBObWFHMWxNWGN2UjBkTGFWSjJabUY0VTJjOVBTSXNJblpoYkhWbElqb2lXbGRQVUVKdlJuQTNOSEZOYVcxVU1rMUtSSHBrZDB4MFkyTndVV2RPWTIxa1UzbGlUazB3U2tGcGIySjRWVzQwU0hGdFNsVXpNWFJoVkdkMFptbFVZVGh1Y21sc2NtbEZWSFowVnpkYVZIQjNNamRSYVRkRWIzQm9VRk0zVUdZNFpURlNaa1pLY0RrcldtSmFWa1l5VDBkNFZVbzFZUzltVlU5d09FVmpPRzVJU1ZaaWFrRXJjREpPY0UwNWJsWllTMUkxTVZSV2R6Qk1TbUpwZW01eVYyRjRTemhTZVVRM01qVnJVRmROYm1oU1NGcHBPVXhSZVRBNFRtcGFObEJ5T0RCS1JVRnlialprYm5ndlRtUjNRM2NyWjNwaGRGRjNja3QxTUdjdlVGVkhXSFJaYkdwaGIwaE5PRlpRWTNRNVNFRndUVzgyZEU1NGNXcHVUelp2T1RkaVYySnlNemd3TDNRdlp6bENjVTFQTjNvelEwRTlQU0lzSW0xaFl5STZJbVZoT1dRM016WTBabU5tTURRd01tVmtOelJqTnpCak4yUXhaVFZsT1dOaVpqQmxNREl6T0RjMFpUazVaV1ZsWkRKbVkyTmpOV05rTUdOak9XSTVaakVpTENKMFlXY2lPaUlpZlE9PQ==', 1711888773),
('rd0YE6Iy6jAowmfmyUn1UJRlUgOW5xUlGbGOqK9I', NULL, '120.56.95.242', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJakpHTkVSNVdFWnNTelJtT0VWRlpIWlVRazVRTkhjOVBTSXNJblpoYkhWbElqb2laMUpZTDNKd2NYTXpLMU5OVlZrM1drNUhUMlJoVmxsTE0zZFRTV3hTVVZBdlZFTnlhRVE0V2pCSWVISm9iVzlHWVc1SVRFSkpZbGgwZDFWR1EzQkJhRGxLTWxCUldrOW9jeTk2WW5GaE1WUlFjMmxVUkdJNGVGTm5NbVI0WkUweFUxTm1XbkpOUlVSNFN6WkJlbTltYVROVFJDdE5iMlZ6YUhwUlJFNXNUa28zWTFST1MzaHhOUzkyUlVaUWVYVnRTakY1ZUdjMmJsVmFObUZ0VWt0NlpUZDJkM3BaU0hwdFIwbEdkbkZxUW1acmJETk9WMlJvZG5kNGNXcFJTbTUxVGxsUWVsWnFNRUZwZUZRelRrNVNjblpDYm5ka01IcHJWVUZyV0dOak9XWjBNWEJUUTFGeWFXZHBWM0J0TkhoUGVWUTRXRWt5VlRGd2RtSkNkalp6V1ZJMlRYVk9ja0ZXTXpZMVV6Sm1hbkF5YUdGTEswRTlQU0lzSW0xaFl5STZJak5rTWpBd01UY3lZamN4TUdRMU1UWTVOekZtTlRsalpUUTNZakkxTlRneU9XUTJZVEk1TXpBek4yWTJPV05qTldFelpEVTVNakJtTkRGa1lqSXpOV1VpTENKMFlXY2lPaUlpZlE9PQ==', 1711960582),
('UEdTKGVhqFeajW8xg1iPls7tqr2ys4g5TtUn1evq', NULL, '157.51.195.84', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'ZXlKcGRpSTZJalJrTldKWVkyMVNha1ZuYkc1MlNUaFdNRFYxTVdjOVBTSXNJblpoYkhWbElqb2lPVk5PYUZwVmRrTk1VWEE0TW5rMllrbHVTVUZVU0hVdmNETTVlVzFOZVdGNWJFdFlkR3hsTWtJck1DOVFSV2g0VEN0RVpUY3lWbHAwWVc1RlIxWnlhRkpKZHpjd1MycFpSRUZTY0VacWNFeExWR3BtTms0eWQwdHRjWGswUVhsNWQybHplRmQyVmtkWldYcEVkRzkzWmtoNVluTkVXbk5vVTA5dU0wSlZkSFZOYTJaMVpVeDFObkZrVGtGQllrVjJTWGhvTldKVFdGZFRNM2RWZWxwdFJ5c3hPRkF2WVROa2JVeHBNV3hQT0hWTU1EVm1VMk5DUjFCcE5sQklUbVpRYXpWVWNVUjRXbVJhTVdvNGJFUTFWR1k0Y3pSbFoyWTVaV29yUTBkQ05HbE5NVkp4VVdWSlFsQTJkMVI0U0ZGT1EwMVlTMWhIVUVaYU4yZ3ZTbVZUVGxKSVFVZ3lXa1Y1YTJkUWJIUnRiVk5UWnlzNGVFOWFjekEwZVhsNGVEQkNNRmRyYzFoNWNtbFRSMHRDU1VVNU5VUnZSRTV4VVVJMVNXRXZUR05LZG1raUxDSnRZV01pT2lJNU9EUmxNbUUyTUdOaU5EVXhNRE5sT1dNMU9HTXhObVExTldJNVpUSTRZbVptTjJOaFpXVmlNR013WVdKbVpUY3lPREF5T0RBek9UQTRPRFk1TURsbElpd2lkR0ZuSWpvaUluMD0=', 1711850207),
('w6VLNiQnxXzQkMpPihVorRpaXhomHgljj0uRgqrY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbFZJWTI1NVdVeDNkMmx4ZHl0c1dYQlRVeXN5YzFFOVBTSXNJblpoYkhWbElqb2laMEZPYjFaNGNtUnJRMDVUUkRCc05GaDNTbXM0UzFsR1JGZ3dSWEk1YUVWb2NUbElRbmRMTmpkbFltRkNXbkUwYkVGbFJHTnVRVGh1V2xvNU1HWmtlVzFCWWpoYVIzbDFOazFtY21SQlRVRlRlRlpyWlZJd1prbEVWVXBwT1VwaU1WUlhZV1owTWt0b1FqWk1RVms1V0VkYVVVdFRlbTFFTDIweVNWUjJiMmRpT1hkeVkydHlUa1JWYVRRNVQwdGtabWdyVlc5VGNWRlBkblZ0TmpkR1MweFRNMWx5UVVsbWJqSXlZVXRyVVRWTFVYbERkMVpCV2s5TlZqaFBaRzFwUjBwc1pHaFpSVmR4Y0U0d2FsWTNSSFl3YUcwNFlqQnVVVE55V0ZwSVVIcExjVGd6YW1wdWNYVkJVQ3R4Y2s1QmFucFBhWEoxYmtrNFozRnZhRGRpVmtWdlQyazRSRkptVERCSGRuaE9ibTVDTDJWMFNqUkpXamR4SzNONlJIUXhXWEZhY1dNMFJYTXpTV3hVT1M4MVJIazFUMUFyY2xGNFVHUkRaRkI2ZFZvaUxDSnRZV01pT2lKbE5qRTBOR0ZrTlRWalpEUTVObU0xTURrNE1qTTNNR1JrWW1SbE5UUm1OV1JpTVRWa09ERmhORFE1TURBd1pHTTRNRE0xWTJGaVpESTFNbVV6TkRnMklpd2lkR0ZuSWpvaUluMD0=', 1712247464),
('WQXJV0jiodUISy6JYd86kjBxV33ft2NNovRF7PNf', NULL, '120.56.95.242', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbTVzVkhJeWEyVTNkalp5YTJSRlRVRlJTelJTUkZFOVBTSXNJblpoYkhWbElqb2lkemt2VldWT2VIWjRhell3VTNoNE5ra3lWMmhyYTA5eU9GY3ZZWEpwVEcwM1UydDZZMEUzVjJaeUwzaDJTVEpYZEZNeGNWTnVVMEZXZFRGa00yUkhSa2h3Vm01blIyZHlkamRMZFhCSGEyODBjVTkwYmpSdGVuTnliR3hoVTJSRmVGY3dNR2xOUVRsRE1FTnNkU3RIVDBScGVqZ3lhMEZQTkc4MmVGaGFTelJOVlZKUE5tNXpaRmN4VVVvNFdXbHVjSGRTV21wS1RFTlpWak1yTkhkME1HSjNkSFZ1VGtNMmNIWjJNRnBsZUhGbllqSXlSemhDUXpSdmFtMDVTRWd3TWxsdEt6QmplVzVXU0RCeGRVOVlkSE5YSzI4NVJpOUZNemhWVTNkQlVuRjZVa3dyVHpOd1pYcHBTVWx1VldoUGFuaEVOMkl6TTFKV1pXd3hWMmR4TkRKaGJrdGtkbU51U1RWdVQxcFVVbTlXZEZkU00zYzlQU0lzSW0xaFl5STZJalUyTWpZd01EUTBNV0k1WVRWak1tSTBZVFF4WVdWbU4yRm1ZekUxTlRFd05HTTVPVEptT0RGaVl6QmlZakJsTmpnME5URmtNV0kzTVRNNE5ETXpaV01pTENKMFlXY2lPaUlpZlE9PQ==', 1711982732),
('X6ZJ1UvJMsE0bMJv4TbXa7mVsdbhzukFEGhck0id', NULL, '117.221.209.116', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'ZXlKcGRpSTZJaTlRV1hsQ2RIRkdObGhIYTFab2JFWjROMjgyT0VFOVBTSXNJblpoYkhWbElqb2lUbWd5ZW5ad1N6VkVNRlJGYlU1b1IxWlhZek12WkZabFRVNWliemcwTVdGNVVIbFRUVTAwUzJOelYwSndjbE5zUVc4cmIyd3hSMUYxY0RkVlVVNVdkbmh3U0ZsdGRVbFpVSEUyWkVocFZYbFRXazlxY3poSVkwdENhV05STkdoSFZISTFOWEJ5UmpGTmMxQmlWMmt3ZWpjd05UQkRhbmxuVWpGWlYwOU9WQzluTVhwaVVTOXpiR1ZqVDA5VWVYZHBOblk0VnpGUmRWaG1iazB2VUdSMk9IUlNjSEpGWlRCWWNFYzFLMWN6THpOSk1UZDBSMmx3TTFSdFUweEVjSEIwUVRBMllYQmtiMUZsYm1RMlNHdDVZalF6WmtGa2MxWndlREJFZW1GNFlYVjNaWFJPV2tob1VuVkhja2hEYVU5R1luRjJVV0Z3VVZkeldFTktVVUZGYzFSWGFpdHNjRXhGTmtWa2NVOUJMM0JWWm5GV2NrRTlQU0lzSW0xaFl5STZJalExWlRFek5tWmlOV013WWpVelpqYzJNbU5pTWpFME16WmhZbVJoWkdVM09USm1OMkUxTURFM1pqa3hNRFkzTURBeE1UZG1ZV1JoWWpZeFpqUXdOVFFpTENKMFlXY2lPaUlpZlE9PQ==', 1711936720),
('X8PMqxpNVIyEOv7Dj2rgcfbWO625txo19iF4ti9x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa3BUUnk4ck1teFlSMHROVTIxT1lscDVWVmQ0VFZFOVBTSXNJblpoYkhWbElqb2lZemRuWm5jck5VaFJUemsxYlhWNWQwd3lWbGcwVEZFNVlrdFRNMDAxY1UxM2JreFNhVU5xYm5nMk4zcHBLM1ZHTlRkcmQyVXhjbmxtYTBwNmNuZE9kV1JXWVV3cmNYQm5PV05hYzBWcE9GbG1WRk4yVjBsWGJIWnRiWEpSVEZsc1pUZ3laVFJTYkhwUGFVazVWM2R5TDJGRlJsaG1iVkZVZUVobmJ6Y3haVGRTUVhCV1RuZEdhRzVoVURodU0yeEpXSGhJZVRka1dHNHlaa3hxZVRjM1VYUjJhMXBrZEdadmJFZHJkMjV0U3pOclFXUTFPVEJqZFhRd1NqaE1WbXB4Yld4WGFXOUZURFFyYkZKME1ISmhNRkIwVURZMVdrTjBlbTlUVW05bGRscDRNWGQ1Wkd4TFFUTTVibVZETWpaTlpqUmlRbk5LYm1Sek4ycFJiQ3MwYWlJc0ltMWhZeUk2SW1NMU1qSm1OVEpqWWpZNU5EY3dPRFUzTURFNVpqVmtPVFkzT0RGbU5qRmpPRGd4T0RZNVpqTXdZV1ZqTnpNMlpXSXlOVGxqWlRVek9UQmlOV1ZtWXpJaUxDSjBZV2NpT2lJaWZRPT0=', 1712294088),
('yRV2hoYxczi9xEUO7X4PYdeUe8AUTTvUhpm7Boib', NULL, '104.166.80.226', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'ZXlKcGRpSTZJbVZpWlhCUVQwWTFaSE13YUdwMVRtWnViVGxHTUVFOVBTSXNJblpoYkhWbElqb2lRVTlwWWxaMVNuTjRjRTVsTVhSWVYyVklTVWx4Y2psT2NURmtRMHMzWlRGUmRrcEVUMjFMTWpCSFUzcFRPR2wxZVdkT05WQlJPVnBwV1VaaE1WZ3hUbEZSVnpWS1owUkJTelZXTjNOTVptSTBTa05XZVVNek5rcDBRbVpZWjNsUGR5czFTV1J3WlVGVFptTnhPWEJPZDJ0MU1uQldOalZrTTNKdVdFWnpOMkU1YWpOWVVIbHFUVTEyTm5wUlFWSmhLM1IzSzJ4elZqaEVSVE5XV0hJNWJrbHBVbkkyTkhCc1NuZFZjRWt3YzNGak1rWkhXVE4zTVRadFRsaHJZVTVCUkU5NlJGcDZOMU5pTUdJeU9ISTVWRWxQWW0xM2RGbElWM2RMTWt4NGNVdHBSREZGZGtWSGNWQnRXV2dyUm5nME1FbFlVMjVCVFVndldsZDNiMU53V0RWNWIyNXhVbXBSTlVkRmJqZFRRMk5ZVjJaWFZrRTlQU0lzSW0xaFl5STZJamN5TTJRMU1qZ3pPRFV6TlRaaU56aGhZekV6TW1SbFpUYzNPVGsxWTJaaU5HVXhNMlk0TkRaaFltSXhOak16WW1Sak5qQmpZekEyTm1ZMVlqVmlZMlFpTENKMFlXY2lPaUlpZlE9PQ==', 1711888751);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_sliders`
--
ALTER TABLE `post_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
