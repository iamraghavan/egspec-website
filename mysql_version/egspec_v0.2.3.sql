-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 04:51 PM
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
(1, 'Mechanical Engineering', '/assets/images/department/bachelors/ME_EGSPEC01.jpg', 'raghavan_egspec', 'bachelors', 'Description of Mechanical Engineering course.', 'url_to_mechanical_featured_image', 'ME_EGSPEC01', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(2, 'Artificial Intelligence & Data Science', '/assets/images/department/bachelors/AIDS_EGSPEC032.avif', 'raghavan_egspec', 'bachelors', 'Description of Artificial Intelligence & Data Science Department.', 'url_to_civil_featured_image', 'AIDS_EGSPEC032', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(3, 'Civil Engineering', '/assets/images/department/bachelors/CE_EGSPEC02.jpg', 'raghavan_egspec', 'bachelors', 'Description of Civil Engineering course.', 'url_to_civil_featured_image', 'CE_EGSPEC02', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(4, 'Electrical and Electronics Engineering', '/assets/images/department/bachelors/EEE_EGSPEC03.jpg', 'raghavan_egspec', 'bachelors', 'Description of Electrical and Electronics Engineering course.', 'url_to_electrical_featured_image', 'EEE_EGSPEC03', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(5, 'Electronics and Communication Engineering', '/assets/images/department/bachelors/ECE_EGSPEC04.jpg', 'raghavan_egspec', 'bachelors', 'Description of Electronics and Communication Engineering course.', 'url_to_ec_featured_image', 'ECE_EGSPEC04', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(6, 'Computer Science and Engineering', '/assets/images/department/bachelors/CSE_EGSPEC05.jpg', 'raghavan_egspec', 'bachelors', 'Description of Computer Science and Engineering course.', 'url_to_cs_featured_image', 'CSE_EGSPEC05', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(7, 'Information Technology', '/assets/images/department/bachelors/IT_EGSPEC06.jpg', 'raghavan_egspec', 'bachelors', 'Description of Information Technology course.', 'url_to_it_featured_image', 'IT_EGSPEC06', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(8, 'Biomedical Engineering', '/assets/images/department/bachelors/BME_EGSPEC07.jpg', 'raghavan_egspec', 'bachelors', 'Description of Biomedical Engineering course.', 'url_to_biomedical_featured_image', 'BME_EGSPEC07', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(9, 'Computer Science & Business Systems Engineering', '/assets/images/department/bachelors/CSBSE_EGSPEC08.jpg', 'raghavan_egspec', 'bachelors', 'Description of Computer Science & Business Systems Engineering course.', 'url_to_csbse_featured_image', 'CSBSE_EGSPEC08', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(10, 'Mechanical Engineering', '/assets/images/department/bachelors/ME_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Mechanical Engineering course.', 'url_to_featured_image', 'MEM_EGSPEC01', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(11, 'Manufacturing Engineering', '/assets/images/department/masters/MF_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Manufacturing Engineering course.', 'url_to_featured_image', 'MF_EGSPEC01', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(12, 'Computer Science and Engineering', '/assets/images/department/bachelors/CSE_EGSPEC05.jpg', 'raghavan_egspec', 'masters', 'Description of Computer Science and Engineering course.', 'url_to_featured_image', 'CS_EGSPEC01', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(13, 'Power Electronics and Drives', '/assets/images/department/masters/PED_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Power Electronics and Drives course.', 'url_to_featured_image', 'PED_EGSPEC01', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(14, 'Communication Systems', '/assets/images/department/masters/CSYS_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Communication Systems course.', 'url_to_featured_image', 'CSYS_EGSPEC01', '2024-04-17 16:40:16', '2024-04-17 16:40:16'),
(15, 'Environmental Engineering', '/assets/images/department/masters/ENV_EGSPEC01.jpg', 'raghavan_egspec', 'masters', 'Description of Environmental Engineering course.', 'url_to_featured_image', 'ENV_EGSPEC01', '2024-04-17 16:40:16', '2024-04-17 16:40:16');

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
(1, 'B.E – Mechanical Engineering', 'ug', 120, '2024-04-17 16:40:32', '2024-04-17 16:40:32'),
(2, 'B.E – Electronics and Communication Engineering', 'ug', 120, '2024-04-17 16:40:33', '2024-04-17 16:40:33'),
(3, 'B.E – Electrical & Electronics Engineering', 'ug', 60, '2024-04-17 16:40:35', '2024-04-17 16:40:35'),
(4, 'B.E – Computer Science & Engineering', 'ug', 120, '2024-04-17 16:40:36', '2024-04-17 16:40:36'),
(5, 'B.Tech – Information Technology', 'ug', 60, '2024-04-17 16:40:37', '2024-04-17 16:40:37'),
(6, 'B.E – Civil Engineering', 'ug', 60, '2024-04-17 16:40:39', '2024-04-17 16:40:39'),
(7, 'B.E – Bio-Medical Engineering', 'ug', 60, '2024-04-17 16:40:40', '2024-04-17 16:40:40'),
(8, 'B.Tech – Computer Science & Business Systems', 'ug', 60, '2024-04-17 16:40:41', '2024-04-17 16:40:41'),
(9, 'B.Tech – Artificial Intelligence and Data Science', 'ug', 60, '2024-04-17 16:40:42', '2024-04-17 16:40:42'),
(10, 'M.E ( Computer Science and Engineering )', 'pg', 18, '2024-04-17 16:40:44', '2024-04-17 16:40:44'),
(11, 'M.E (Communication Systems)', 'pg', 18, '2024-04-17 16:40:45', '2024-04-17 16:40:45'),
(12, 'M.E (Manufacturing Engineering)', 'pg', 18, '2024-04-17 16:40:46', '2024-04-17 16:40:46'),
(13, 'M.E (Power Electronics and Drives)', 'pg', 18, '2024-04-17 16:40:47', '2024-04-17 16:40:47'),
(14, 'M.E (Environmental Engineering)', 'pg', 18, '2024-04-17 16:40:49', '2024-04-17 16:40:49'),
(15, 'MCA – Master of Computer Applications ( 2 yrs)', 'pg', 60, '2024-04-17 16:40:50', '2024-04-17 16:40:50'),
(16, 'MBA – Master of Business Administration (2 Yrs)', 'pg', 120, '2024-04-17 16:40:51', '2024-04-17 16:40:51');

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
(48, 1, 'Drilling Machine – Pillar', NULL, NULL),
(49, 1, 'Blade Grinder 18”', NULL, NULL),
(50, 1, 'Surface Planner 18” Circular Saw', NULL, NULL),
(51, 1, 'Thickneser', NULL, NULL),
(52, 1, 'Wood Turning Lathe', NULL, NULL),
(53, 1, 'Mechanical Hacksaw Machine 7”', NULL, NULL),
(54, 1, 'Arc Welding TransformerOil cooled – 2Nos', NULL, NULL),
(55, 1, 'Arc Welding TransformerAir cooled – 2Nos', NULL, NULL),
(56, 1, 'Gas Welding (Oxygen & Acetylene Cylinder)', NULL, NULL),
(57, 1, 'Blower', NULL, NULL),
(58, 1, 'Portable Grinder', NULL, NULL),
(59, 1, 'Circular Saw', NULL, NULL),
(60, 1, 'Rotary Hammer', NULL, NULL),
(61, 1, 'Demolition Hammer H.D', NULL, NULL),
(62, 1, 'Planner MH80XI Hitmin', NULL, NULL),
(63, 1, 'Hand Drilling Machine', NULL, NULL),
(64, 1, 'Jig Saw', NULL, NULL),
(65, 1, 'Angle Grinder Machine', NULL, NULL),
(66, 1, 'Hearth Furnace', NULL, NULL),
(67, 1, 'TIG Welding Machine', NULL, NULL),
(68, 2, 'Pneumatic Comparator', NULL, NULL),
(69, 2, 'Heavy Duty Dial Gauge', NULL, NULL),
(70, 2, 'Surface Planner 18” Circular Saw', NULL, NULL),
(71, 2, 'Digital Vernier Caliper', NULL, NULL),
(72, 2, 'Vernier Height Gauge', NULL, NULL),
(73, 2, 'Micrometer', NULL, NULL),
(74, 2, 'Bore Gauge With Dial', NULL, NULL),
(75, 2, 'Vernier Depth Gauge', NULL, NULL),
(76, 2, 'Slip Gauge Setup', NULL, NULL),
(77, 2, 'Gear Tooth Vernier', NULL, NULL),
(78, 2, 'Comparator With Dial Gauge', NULL, NULL),
(79, 2, 'Tool Maker’s Microscope', NULL, NULL),
(80, 2, 'Profile Projector', NULL, NULL),
(81, 2, 'Floating Carriage Micrometer', NULL, NULL),
(82, 2, 'Auto Collimator', NULL, NULL),
(83, 2, 'Optical Comparator', NULL, NULL),
(84, 2, 'Vernier Bevel Protractor', NULL, NULL),
(85, 2, 'Thermocouple With Heat Source', NULL, NULL),
(86, 2, 'Linear Variable Differential Transformer (Lvdt)', NULL, NULL),
(87, 2, 'Platinum Resistance Thermocouple', NULL, NULL),
(88, 2, 'Radiation Pyrometer With Heat Source', NULL, NULL),
(89, 2, 'Optical Pyrometer', NULL, NULL),
(90, 2, 'Surface Roughness Tester', NULL, NULL),
(91, 2, 'Telescopic Gauge', NULL, NULL),
(92, 2, 'Force Measuring Setup', NULL, NULL),
(93, 2, 'Torque Measuring Setup', NULL, NULL),
(94, 2, 'Parallel/Counter Flow Heat Exchanger', NULL, NULL),
(95, 3, 'Single cylinder 4-stroke diesel engine Data Acquisition System electrical loading with alternator', NULL, NULL),
(96, 3, 'Twin cylinder 4-stroke diesel engine mechanical Loading', NULL, NULL),
(97, 3, 'Multi cylinder 4-stroke petrol engine Morse test rope', NULL, NULL),
(98, 3, 'Brake mechanical loading', NULL, NULL),
(99, 3, 'Single cylinder 2-stroke petrol engine cut section Model', NULL, NULL),
(100, 3, 'Single cylinder 4-stroke diesel engine cut section Model', NULL, NULL),
(101, 3, 'Single cylinder 4-stroke diesel engine mechanical loading', NULL, NULL),
(102, 3, 'Single cylinder 4-stroke diesel engine hydraulic loading', NULL, NULL),
(103, 3, 'Single cylinder 4-stroke petrol engine electrical loading', NULL, NULL),
(104, 3, 'Redwood Viscometer', NULL, NULL),
(105, 3, 'Cleave land Open and closed cup Apparatus', NULL, NULL),
(106, 3, 'Saybolt viscometer', NULL, NULL),
(107, 3, 'Exhaust Gas Analyser - 4GAS, CO,HC,CO2,O2', NULL, NULL),
(108, 4, 'Guarded plate apparatus', NULL, NULL),
(109, 4, 'Natural convection-vertical cylinder apparatus', NULL, NULL),
(110, 4, 'Forced convection inside tube apparatus', NULL, NULL),
(111, 4, 'Composite wall apparatus', NULL, NULL),
(112, 4, 'Thermal conductivity of insulating powder apparatus', NULL, NULL),
(113, 4, 'Lagged pipe apparatus', NULL, NULL),
(114, 4, 'Pin-fin apparatus', NULL, NULL),
(115, 4, 'Stefan-Boltzmann apparatus', NULL, NULL),
(116, 4, 'Fluidized Bed Cooling Tower', NULL, NULL),
(117, 4, 'Emissivity measurement apparatus', NULL, NULL),
(118, 4, 'Parallel/counter flow heat exchanger apparatus', NULL, NULL),
(119, 4, 'Single/two stage reciprocating air compressor', NULL, NULL),
(120, 4, 'Refrigeration test rig', NULL, NULL),
(121, 4, 'Air-conditioning test rig', NULL, NULL),
(122, 4, 'LPG Refrigeration test rig', NULL, NULL),
(123, 4, 'Refrigeration - CUT SECTION MODEL', NULL, NULL),
(124, 4, 'Steam turbine test rig', NULL, NULL),
(125, 4, 'Maxima non – IBR Boiler', NULL, NULL),
(126, 5, 'Pilot 4’ Lathe', NULL, NULL),
(127, 5, 'Pilot Lathe Iii', NULL, NULL),
(128, 5, 'Pilot Lathe 41/2 Feet', NULL, NULL),
(129, 5, 'Pilot 6’ Lathe', NULL, NULL),
(130, 5, 'Padmini Student Lathe', NULL, NULL),
(131, 5, 'Turret Lathe', NULL, NULL),
(132, 5, 'Capstan Lathe', NULL, NULL),
(133, 5, 'Atlas Bench Grinder', NULL, NULL),
(134, 5, '18” Shaper', NULL, NULL),
(135, 5, 'Gear Hobbing Machine', NULL, NULL),
(136, 5, 'Smt Universal Radial Drilling M/C', NULL, NULL),
(137, 5, 'Suraj(Sm2) Universal Milling M/C', NULL, NULL),
(138, 5, 'Parrot Pmcv-150 Vertical Surface Grinder', NULL, NULL),
(139, 5, 'Sew 1” Piller Drilling M/C', NULL, NULL),
(140, 5, 'Tool And Cutter Grinder', NULL, NULL),
(141, 5, 'Lathe Tool Dynamometer', NULL, NULL),
(142, 5, 'Parrot Spindle Horizontal Grinder M/C', NULL, NULL),
(143, 5, 'Riat R32 Cylindrical Grinder', NULL, NULL),
(144, 5, '3” Horizontal Planner Machine', NULL, NULL),
(145, 5, 'Gear Shaper Machine', NULL, NULL),
(146, 5, 'Centerless Grinder Machine', NULL, NULL),
(147, 5, 'Milling Tool Dynamometer', NULL, NULL),
(148, 5, 'Tool Makers Microscope', NULL, NULL),
(149, 6, 'Forced Vibration Setup', NULL, NULL),
(150, 6, 'Stroboscope', NULL, NULL),
(151, 6, 'Torsional Vibration Setup – Single', NULL, NULL),
(152, 6, 'Spring Mass and Strip Mass System', NULL, NULL),
(153, 6, 'Whirling Speed of Shaft', NULL, NULL),
(154, 6, 'Dynamic Balancing of Rotors', NULL, NULL),
(155, 6, 'Kinematic of Gear Trains (Simple & Compound)', NULL, NULL),
(156, 6, 'Turn Table Apparatus', NULL, NULL),
(157, 6, 'Cam Study Kit', NULL, NULL),
(158, 6, 'Moment of Inertia by Oscillation', NULL, NULL),
(159, 6, 'Universal Governors', NULL, NULL),
(160, 6, 'Gyroscopic Couple', NULL, NULL),
(161, 6, 'Spring Mass Vibration Setup', NULL, NULL),
(162, 6, 'Vibrating Table', NULL, NULL),
(163, 6, 'Governor Apparatus', NULL, NULL),
(164, 6, 'Transverse Vibration Setup', NULL, NULL),
(165, 6, 'Dynamic balancing – Reciprocating mass', NULL, NULL),
(166, 6, 'Two Rotor Vibration Setup', NULL, NULL),
(167, 6, 'Tachometer, Stop watches and other tools', NULL, NULL),
(168, 7, 'Basic Pneumatic Trainer Kit', NULL, NULL),
(169, 7, 'Air Compressor', NULL, NULL),
(170, 7, 'Hydraulic simulation software – 2000 version 1', NULL, NULL),
(171, 7, 'Pneumatic simulation software – 2000 version 1', NULL, NULL),
(172, 7, '8051 – Microcontroller kit with stepper motor', NULL, NULL),
(173, 7, 'PID Temperature Controller', NULL, NULL),
(174, 7, 'AC servo controller', NULL, NULL),
(175, 7, 'Servo controller interfacing for DC Motor', NULL, NULL),
(176, 7, 'Basic Hydraulic Trainer Kit', NULL, NULL),
(177, 7, 'Pick Place robot', NULL, NULL),
(178, 8, 'Computer system (Dell)', NULL, NULL),
(179, 8, 'HP Laser printer', NULL, NULL),
(180, 8, 'HPDesign jet 100 plotter', NULL, NULL),
(181, 8, 'Computer system(Dell)', NULL, NULL),
(182, 8, 'XL TURN CNC', NULL, NULL),
(183, 8, 'XL MILL CNC', NULL, NULL),
(184, 8, 'Solid works-2004', NULL, NULL),
(185, 8, 'Ansys-ver 11.0', NULL, NULL),
(186, 8, 'Edge CAM', NULL, NULL),
(187, 8, 'Master CAM', NULL, NULL),
(188, 9, 'PIN ON DISC', NULL, NULL),
(189, 9, 'WIRE CUT EDM', NULL, NULL),
(190, 9, 'VIDEO MICROSCOPE', NULL, NULL);

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
(16, '0001_01_01_000000_create_users_table', 1),
(17, '0001_01_01_000001_create_cache_table', 1),
(18, '0001_01_01_000002_create_jobs_table', 1),
(19, '2024_03_22_055814_create_slider_images_table', 1),
(20, '2024_03_23_181614_create_personal_access_tokens_table', 1),
(21, '2024_03_25_093225_create_post_sliders_table', 1),
(22, '2024_03_25_164956_create_courses_table', 1),
(23, '2024_03_29_170714_create_industry_academic_partnering_table', 1),
(24, '2024_04_02_054306_create_certifications_table', 1),
(25, '2024_04_02_061209_add_page_section_to_certifications_table', 1),
(26, '2024_04_04_142812_create_ads_sliders_table', 1),
(27, '2024_04_07_135750_create_courses_and_intakes_table', 1),
(28, '2024_04_09_051558_create_complaint_committee_table', 1),
(29, '2024_04_16_142105_create_whats_app_messages_table', 1);

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
('Ii4dF1NyVjUKDqIe47VPZNQPGSuFmUKexzvXSCnW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbUp2TUdsWGREWnNVMlZMZWtNeUsxRlFVRVpYVVdjOVBTSXNJblpoYkhWbElqb2lVM3AxVkVSWlJXeHpkelZSU0hSbFJpdHhiREZ4ZVRaSlRHMWpaRGxVVUVGVEt6Um1PV0oxT0hOREsySlRXbnBvVWxCVWMwbG5PVWwzTUZoSWVsRjNSV05xY0hsdVdUQndXVTV6ZEU0elRtZzVjVlF2UVVOalptOUxMMlo1VURCeGJXSkpNV1oyWWpsVk1rWnVhbEUzVm5wVk0zWjNVWEoxZW5aTk5teGxUelkxZERWQlVVNW9TbVYzWmxoRFUxbFRhVnBaZWpGUWVIZ3laMHB6ZUVwMmFtRmxZbVV5UjJGaVJXUkhValUxT0ZKNGEwNXJhMVpFYVdFMllsZ3haM3B3ZVVJeFNUSjNkRzFJV0RsMFJtOURVbGcwWnk5VVJrSnFWSHBCVTNnNU5IcHZhbFEyUTNWcmQwUnFWRnBvTUN0UGNYTnhVekJWU1ZjNFduTmFORWxSUVZSSFUzVTRaRVV2VURaNk9GVlVkamRKU2pkbFRFSklXRkZLZGtwNmJraHZTQ3RrZURGMmJHWTNObEZsZEUxT01XMHlTMHB4YkdRM05IQmpkRXgwVVZJaUxDSnRZV01pT2lKbU1HSmhaRFJpTm1GaE1EbG1NV1ppTXpJM1pUZzRZemMxTURRM05qRm1Zakl3TW1ZNU1tVm1NVFJpTW1KbE5tTTFOekV3TVdZMFlXVm1PV1kyTmpFMUlpd2lkR0ZuSWpvaUluMD0=', 1713370976);

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
(3, 'RAGHAVAN JEEVA', '919942502245', '2024-04-17 07:18:47', '2024-04-17 07:18:47');

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
-- Indexes for table `laboratory_categories`
--
ALTER TABLE `laboratory_categories`
  ADD PRIMARY KEY (`category_id`);

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
-- Indexes for table `whats_app_messages`
--
ALTER TABLE `whats_app_messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `whats_app_messages_whatsapp_number_unique` (`whatsapp_number`);

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
  MODIFY `equipment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

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
-- AUTO_INCREMENT for table `laboratory_categories`
--
ALTER TABLE `laboratory_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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

--
-- AUTO_INCREMENT for table `whats_app_messages`
--
ALTER TABLE `whats_app_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
