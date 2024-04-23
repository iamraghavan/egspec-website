-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2024 at 04:09 PM
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
(19, '2024_04_23_155314_create_nss_and_red_ribbon_club_table', 4);

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
(1, 'general', 'https://egspec.blob.core.windows.net/egspec-assets/egspec-1.webp', '/assets/images/holi_sale_3.webp', '/', 'egspec', '2024-03-29 14:13:54', '2024-03-29 14:13:54');

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
('1yrgGSkjRMLXnyzwlI80VBqLqg6jZSNibZeh8VyO', NULL, '117.243.149.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbTFhUW1sdlZGUnhObVJ5VUhSWE1VWjFUWEpLWjJjOVBTSXNJblpoYkhWbElqb2lZazFxVm5nMFN6SmlaVU5QUTIxa1pYWk1NVVE1ZEZsUWFWQnhaMGxYWjA4MGVWbHVWVTl3WWsxUFJrUndaelF3VWtWV01qUlJNM0JOYXk4MlNIaFZNMkpOU2xkS1ZqbGFOMEo0Vm1wa05YRTRVRU5pTDBGRGRFNWxNWFJOYW5GYWVTOUlSRVpPY25kbFltZzVWa293VXl0Rk0xUXdURWRUWW1OTmEyd3ljbU5EVm5oNlkweE5TQzkwV0ZSMVpuUkViWFZDU1ZWU2J6bEROa2RSVVVsTFZVcDZMMkpMT1hkaVFTdGhiMmxWWTIxelQybDJRa05xVEdKRVJtNWlXRkZCZEhWR01HcHNLMnR0VmtsalRFTnlabkptY0VseWJVNVJkbU1yTTBSQ1lsZDVlSFp4VEV4NUx6RnJNMUJaU0d0VFRIWk5ORGgxWVRRd05XTnhlbGhEY3pWVUswVlVkelphUVdKR1JHOW9ZbVJYU2xaTE9GVnVjVkJYU1RSUVRWZFBPV28yTjNsSVJVVmxhVms5SWl3aWJXRmpJam9pWm1ZM09UVTRZV1F6WkdOaFl6UTVOekF6WldVeVptUm1Oamd5TkRaaU4ySTJOamt3TVRSa1kyTmxNak15TTJFM016TTVNbVpoTVRWa01ESXpNRE5oTnlJc0luUmhaeUk2SWlKOQ==', 1713720458),
('6omFb18KmDdIMIrWCbbaOlGFmtiWTNzcooUg9eFt', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbTlKV2poTVUyc3daemRsZVVRMVkyTnJZWEZWYlVFOVBTSXNJblpoYkhWbElqb2lZV0k0UkdnemExUkdiVzlETkhGeFVqWklhbVEyWkVSSWRqTlNPV1JPYjFVNVdtUjZXRmhMWkdnclZsRjRaa1pwUXpaRGJqTmpRV2xSYldodk1WTnNkSEIyVTBwNk4yVm1SMGR5Vm5wWmFFcDFNSGxSVGt4eFFVZE5jR3hhTDJNdk1qSlBVbUppWldsRVRYWTVlQ3RTU2pNMlRXaDRNRFpzTkVoQmRGbHdXRm9yYVhaWE9FTk9XbFpZSzNSbFlsaHVkRm8xVFhwcVlra3dla2wwTnpaU1UwSTFWRGszVFhoUFJrSmFWRWN6V0ZSME9UZEtaM1kzVTNBMWQydFJaME5WUldSdk1YbFFiRVJuVmsxV1R5dDFkVGRwUkhVMlUxWnFTRGMyVEVSQlZsaENTMkZsTmsxWVFqZzNVVFppU1ZwNFRHNVJLMEZ4Vms1S1dWZ3ZPRTA0UVVwcmNVeHlSbUptV2taUlRVOXNjRWd4V0hSNE0zYzlQU0lzSW0xaFl5STZJbUl5TkRCak9HRXpNR1l6WXpSallqZzRORGt3WXpaaVlqRXpOV0ZpWlRWaE1UVmxObU0xTVROa1lUUmpabUk0T1dZeFpUaGxNMk14WlRjNU5qTmhZVFFpTENKMFlXY2lPaUlpZlE9PQ==', 1713769383),
('A6tvgpnwtIsVo4vBxnmJD53l3iUXwAkD6X37Dyhm', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJamxOVWxCUmExSmlhMW80YjFJd05IaHhkWEExV1ZFOVBTSXNJblpoYkhWbElqb2lkMjh3TmxGaGRHNXdlVzlYTlVoWFRVWkxXbTl5ZW1aQ1UwVm5hQzlyTjFGQ2NXRkVRbmhPVDJKc2NYQnNZM05EVGl0YU0wRXllazFPUkRNclREQTBTbXhHWWxKbWFGQlhRWEZ5TjFBNVlsSlpRbkp3YWpkaVVHTklMeXQ1YVhCb1dEVm5aVmhZYTJaR2IwUTBNeXR3Um1sdlJGcDRjV2hsTkdSTGFVZHpSazVYY2xVNGJ6UjBiVmhZYW5SamJrWmtkM0p6U3prd1MzcE9ZeTlIZWpoVlMzUk5hRE4zVkRGT2FXWnZXbmdyUzFkR1psWkZWV053Y0ZOVUsxSk5RMjV6VVhkNmR6bGlaelJIYzBwSlJEZFBka3hXVVdwamMwbHlXRlpHWTNSVFprNXRZVWx4Vm10cGFETnRVRUZVTUZCVWR6QXlWR1JEVERWTk1HcFdaVE14TDNSaFdYa3JXREY1U3paalRFTlpaMDAyYmpGdGJVRTlQU0lzSW0xaFl5STZJakl5TjJRMk5qRTJaakk1TlRVNFpUUmlOell3WVdJeFpEZzNOelZtWm1NNE5USm1OemhpWWpsaU1XTTROV05sTlRBelptTmhZV1ZsTTJRek4yRTBNRElpTENKMFlXY2lPaUlpZlE9PQ==', 1713769398),
('bicRAQMPE5hknd21pqmY4eXuphrKm6NuTvN4anZi', NULL, '123.58.193.194', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'ZXlKcGRpSTZJak53Y3pCVlZrbGFMMHhMVm14d0szVXhWRzlaZVVFOVBTSXNJblpoYkhWbElqb2lla1ZNTmxRelUyaEtaV1JyZFdkYU1EUXZWMkZEVTNFME0yRlZaVmg2WlRsMlltZDNNMFJLWVZoS00yaHJXUzk0WTFOU1dIZzNkVEV6TWpOWWRWaFpha1p4VGpGNllqZHdZVlpLVURWSmNrMXpPWEJoTlU5d1FVVjNlRkIxYWpOUE4xUnBMMDlOU1VsdWMwZGxiVnBRUVcxS2FFMWpVMWhyWmxNNFoxaFNUbkI2Ym1VMVZFWTJjRmh0VERSamNTOW5NMjU2TVdaWmJqaDBXalp3UTBzdlRFczVlbW81TVU5TWFUaDNLM2hzZGtKUVZVeE9XWGxZYlZWWVFVSnpVMGhKWVU0eWNXcEhSbUprTURRNFlVZFlablZYVEcxbVp5dFhORmhoVTNoRVZHTlJRbkpFZVVkRldXVkNNVzAwV0Zkc01FdFdORFZFY2t0ekwwcHdSSEpJVXlzNE1IbHNOVWRJV0dSQ2VVRlJURnBqTDBkTFkyYzlQU0lzSW0xaFl5STZJalEwTXprME5HTm1NMk0zWVRJNU1HWTJZV1U1TW1VNU56bGpPV1JsWTJWa05tWmtZVEF5WVdVM01tRmhOall5TVRCak4yVmhZekUwT0RZeE56STBZV0lpTENKMFlXY2lPaUlpZlE9PQ==', 1713780152),
('cCX4C2MU7s2eIPBpti2bJT12BtECEiB7d1ohZAZF', NULL, '101.36.110.201', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_0) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11', 'ZXlKcGRpSTZJbU5RVTFwUU5GWjNjRmh6WmtnMVdsbEpRbUU1YTBFOVBTSXNJblpoYkhWbElqb2lNVEU0ZG1aaFVWQllMMmhMY1ZwMlNVNUVSM1JHYWsxWlUyUkZjRlJCVHpWdWNVdEpRMG8yU205aU16UnpWMGRSWmpKRVdVWTJaV2RQVlhSVlowTmhXRkUwVTNscFdGRnpTbWRaUldac1NFdGFUbE5wTjFZdlRrTTRkV05oYW5SQmFreHZkR2huYm5KNlpFeENhbGdyYjBkMFdWTjBhVzE2Y2s5SFVucHFVbTExZERWRmRFeFdRM0ZuTkRScVdIWktRMjlMVjNkdWVGcEpkMUpEZVhwMFZTOW1aM0E0VkRnM1VESmhhVmRzYkd4V01WcHllRkppZFhnck4wcFlaMWRwT0V4UVVXRndVekpuYkhWbFYxQjBjbTE2ZWt0RGFURlFkVkUzTjNNeE16WjRjbEZPZG1aaFluTjBlbll6YlUxdVpVRjBPVEpqYjNFMlUwUXlUek14V0dnNGNUZEZhVlJITlVWWWJHRjBSMUEwTVhaNlpWRTlQU0lzSW0xaFl5STZJakZoTW1FM016STJaRGd3TldVMk9EWTBOVEJsTWpCbVpEYzFPV1V3TTJNd01HWmxaVEEwWmpjNE5UQXlNRFExTmpobE56Sm1NalpoT1RFM05qSmxNVElpTENKMFlXY2lPaUlpZlE9PQ==', 1713787070),
('G3NnsUOTgMhcUUE2QaNCHcjgElSQcfILRxNBfULO', NULL, '123.58.193.194', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_0) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11', 'ZXlKcGRpSTZJbkJrTjBNMlVXVjNRVE5vTDAxVVIyWnlVMHRHY1hjOVBTSXNJblpoYkhWbElqb2laVGRsU1hWVk5ITlNWR3RZU0VaSGRTdEZTbEV6YVZRMlUwVkJjbFkzV2tWbk5rMVJiMjgzY2toTFRuUnlRalJIVmtKa09FSnpXREZqZG5aU01VTlphbU5xVDI1SVJXOXpVbUpqVTBsVGFFbDFNM2hPV21kUmFrTlBUVGRvTkhKck5uSktjbEJhVEU1VFJqaFJUemMxVUcwMVlWcDVPSGxTVlRoRlUxSnJlbVpPUnpoRllsUlNObGcxTWpJeWIxRXhjRkpYWTJ0cGRXNUxWbkV5U2pCdVNEaGlUamRLT0dGNGVIRXhiRTlJT1VsS2FrOWxUR0pyUVM4MlRsWlVjMnBZTlVsd01uTnhTV1pTVkU0d2VFRTBVMnd2TlZSV04zcFZOVE5ITjBvMUx6QXlia051ZVRkMFVEQjJXSFpHZWpSUE5WTlVZMEp3VkVOTVYzVnhSMVJDUzBVeFZuTklhMUJhVUhOMFFXVlBSbkZ3ZWtkV09FRTlQU0lzSW0xaFl5STZJakUxTW1SbU5EWTRNakZtTkRoaFpESmxZekEzWm1aa01EQmpNREUyWm1FMU5qa3pZak5tTURRNE5EUTROemsyTW1FMk1UZ3hNRGs0T0dKa01UVmxOMk1pTENKMFlXY2lPaUlpZlE9PQ==', 1713780814),
('lHwvEGvDexFG8pGrJcXpkBMCaIbfFTnXMXKioGF7', NULL, '64.23.201.223', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbVZ2U1RkdlpUVXpTRlJwWkZCVWVsZzFaMjR2VVZFOVBTSXNJblpoYkhWbElqb2lOak5pV2paeGRqSmhaRU5wTVdwdlpXeHJUM0phTDJWWlVYUjJhMUkxVlRsMmVEVmlURTFOUXpneFNUTnlSakJqWVRsdmNFTkNObVpsU0VWMFRVWlNiblpXVW5JNGFsQlJjemM1WlN0Wk1ubHFNRXhDTUZSMkswOURNVFF5WnpSQlpEUjNZbVZuZUVwMFdDOTFaV1JaYVRCTE1HVXpaMDk2V0RaSE4ySlpWWFZHUzBnelJYUjRWbWxHWW5wbVRFeHFjVVJwWmtZcksyZDRaRGs1T1dodVdtMVhlV0kxWW5SMGRWbzBVRkZaUXpoTVdFMVVNeXQzWlROVmRFODRkMllyT0ZCNUwwcFJaMU5XU3pSUlpGVkZMMFJYTUdKdmVITlRTVVpqVVZFelRXTk1iWGxWTW5nM1NqaFlSMUpNU1ZBeVZFZFBUMmh4Wm1Sa01GbEdTWGhDU0UxaFowZ3ZRMmh1U0RWS09HOTVWRUk0THpGS01FRTlQU0lzSW0xaFl5STZJbUpoWmpNek1UVTNOVFF5TlRObE56QXlORE0yT0RaaVpUVmxNakJoTUdNNU5UQTJOamhsWWpsbU1EZ3lZV0ZpWkdaaE16TTNNR00zT1RkbU1qWTBOMklpTENKMFlXY2lPaUlpZlE9PQ==', 1713837507),
('PziByXXoI7ZqRwoTB3iuLDUSv7oGbs3O7d6FTr6A', NULL, '18.171.235.119', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbEZFWWtFMVZIcHJWM0o0V1N0UlUzZDRTazloYUVFOVBTSXNJblpoYkhWbElqb2lWelF4Wms4dmNteHlkRmhCSzJOdFNEQldUR1V3WmxvelMwaE1MMDVOTlM4clIxSk1helYzVTFOSVR6aDRWR3h2YVVwVFVpc3dablY1Y0ZOalQwNWpRV3BaZDBkbFptRlVUbEI0UkhRdldsWlNlRlJDYmtkclRUTjJLMk5xZWpad2RqZDBNRWd4TVhoclRXMVZTRk5ZZDBobU5IQkhjRk5rTm5welYxTlJZVXQxWTBSemQwNXFhMDUyVkRoNVVGSlpORlpwT1daRmNGTlFOME5NVGpCVlozQkdMME5pT1ZKU1JDOUZQU0lzSW0xaFl5STZJbUkzTXpoa1pUY3lNbU16WWpCbVl6VTNObU5pTVRGaU1ETmtNVEJrWkRSa016VXdNVEZrT0RCbU5qRTRPR1ZrT1RZd05ETmtNRE0xTXpCbE16Z3hNVFVpTENKMFlXY2lPaUlpZlE9PQ==', 1713829791),
('qtv2gHmS2o3TSaTg6u89vSIf11whQD0TFcxzeSvU', NULL, '101.36.110.201', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'ZXlKcGRpSTZJbGhOT0ZneGQyeEVUVkpJU0daU1VYZDJjM0JYUm1jOVBTSXNJblpoYkhWbElqb2lOSGx1Ym1OYWNqRnpRa1ZGUzFaQk5tOUpLMU5NYVRJMmJYcDVLM1psV2tFcmJVNVdkSE5DYnk5VWVXdFJiWHBDV1ZVMllrZHNla05vU1Zjd1VWSnZiQzl5WlhWeUsxb3ZjVnA0YzA1TVlsSXdXR2htTnpCcGFVVnFVbXBGUVVFNVZFWlRhRk56TkVoUlZVbDBTVUZtZERsSVIzY3JiazVwYUc1dU5taGljWHB1ZWpad01HVmxMMFZ2SzJWUVJtUm5hVEpYSzBndlRqUmlRUzloV214bkwzRktUWE52ZVRKRVNUbG5jekJFUzBvMGVVTmtaR1Z4VjFsNWRqRkhWMUpUYUcxTVprRXZkWEpoT1Vrd2RVUTFObFpvVjFaRWEyc3lNUzk2UVd0bGEzVXdlR1ZST1Zsc2QydzVZMU42VG1oMFVFczVSVVZVUjNjMk0yaFRiVXRrTmt4Q05uaGxRakJEUlVWa1lrTXpkMmRsY2pJMVpsRTlQU0lzSW0xaFl5STZJakl6TkRSbFpHSmhNVFprTW1Oak9XTmpZalF6TmpJM04yRTBNekpoTkRVd1l6UmlNR1F6WVRZek16WXhZVEU1TVRRd1lqRTRNVEZrTjJVeE56TmpaVFFpTENKMFlXY2lPaUlpZlE9PQ==', 1713785339),
('RdraRDe5NmNUGnFMYLPyBOazp3phqjKac79aclLG', NULL, '35.192.73.84', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/117.0.5938.132 Safari/537.36', 'ZXlKcGRpSTZJbE16ZDNWVGFuSlhVRlI2U0ZCWmNXTjZNV1JoY2tFOVBTSXNJblpoYkhWbElqb2lRU3M0TTNsd2RFbFZNRGsxVjFaeFJtSk9WalJHT1VoaFVVcGxlbHBRZUZwTVFTdEJVRlJHYTJsVWVHZDFjWEJZWWxSeWFFRnNVM1JsZUM5T1RrMVhMemxpUTJoQlltWXZZVTEyUVVocGREWmlkR04wYlVkb2MwbEdRbmx1VVZCTldXZzRla3hQVFdSUEswVXZkMWRSTW1kNWVsSTVSV05wYmtKT2QzcFFXVEY1ZVVac09VbEhjMWt2YUVscFpIQkhhbXRWVGpNd1ZFRjNhMFJyY0VKSGVucGhLMEp6TDAxb00zcHNRalZyYURkUlFVWnliRVZKU1dKTU5YQkhhVlJKVlcxcWNVTXpja3RITm1KTmEzWXllWEpJWTFFM1pXMWFabUYzTVhKNFNIQXpPVVpXWkZjeFVubE9VMnRSTkRoRGJHUmxWalJIZERKVmNtUktORWhVUkhSQmQwTjZVRlEyY21WVE5ETTNPR05xVTNJd05uYzlQU0lzSW0xaFl5STZJbUkzTkdRNU5qY3pNR1E0WmpRMU5UbGhNV0U0TldVM1pUUmxZV0ZrTVdOa1lqbGlaVEEwTWpBMk9XSTVZVGd3WW1WbE1qQmtOakZrWm1Vek56Rm1PVGdpTENKMFlXY2lPaUlpZlE9PQ==', 1713826418),
('RWB4jXWi2FKGlqNxyeGKc2ZMQGS82A7IBNY0Syog', NULL, '65.154.226.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'ZXlKcGRpSTZJbTVRTldRMVZVVm1lVGh2U1RaTFkwa3ZOSEZ1VlZFOVBTSXNJblpoYkhWbElqb2lkR1p6ZGxaS2FVZExRM1Y2VGtkeE4zZFNaRFJPWW0xVFVYWnBVWG81ZEZkS00zcHhXamszZUN0dVpVZ3JWbTFNVVhKMVUwRm5ZMDlYUlVGb2Ixb3dTMnA1V1d4S2VYZ3ZNMDFvVFUwd2FEZFpSblJRUlRNelQyRXZhVGMwUWlzclZWVlVjV1prU1cweWMzVnRiMnA1TjFnM2FHWkVhMlJvZDFKRlVGbHZZazQzVkZOTE4wOHJaMkprZWxsVmRFMXpTRTlxVDAwd2NGUkJaelZUVVUxbWVuTlZieTlhTlhsNmJpODRPRFU1VW5WalIyTXljRmN3U2xoclF6YzJTVWRLUVdsek5tUnBVR2RZVmpZemFscGxWMHdyVTNWUlRDOVJRVUk1Tms5cVRGSXlZamszTkhsNVlYWldNM1JJWXpCelNXVm5hWGRIZEdsMk1tOUdkbWQyWm1OVWNVVktRV05EY2s1NmJGQnBNbVJrVGk5alptYzlQU0lzSW0xaFl5STZJamt3TURNMU1UQTBZVE5oWldNM01tTXpNRGhpTjJVMU1qRXhaV1ZsWVRJNE5HRTFPVEF6WWpJMU9URXpaalk0TURBeE5XWTRNR0poWlRsa05EbGpZMllpTENKMFlXY2lPaUlpZlE9PQ==', 1713801976),
('uBCr7NHtwXDx8yG4fRvKZkuOKMdyU8941NURLdwE', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbkpUZVVwRFlVYzBiRTlIYVhJM1FtaEtZazh6Ym1jOVBTSXNJblpoYkhWbElqb2lhMkZYY2tOdFFqZFpjMGhEWjFNMFYzRTFRamRHWjAxemVIa3JXRTg0VGxSVFNIWnhja3RuVmxsR1pVcGpTbkk1WTJaSFNFcGpORmRLZHpoYVYwVnFNMmc0ZDNBeU9TOTNjbkZCVTJaRVlXNHlPVnAwSzFkck9VZEdVWGhoUWxWbk1HUnlNbFV4WlVrMVVYSjZhbGxwY0ZobFdFdE1iVlJQVnpCd1VWSXdialJEVEdORVRUUm5PR0pHVlV3MEsyRktaVGQ2YjFNdlNsSnZZWGRYVURoa1ZVa3JVRUZOZUhscFV6bERhak5ZU0dkRE9YYzVhemxaTjNjd2RtdFdUMjFMYjBKNVRYUk1LMDFNY1VaRlFqTm1hMWxIWm5CTWNYTnRORlJDT0VoTFdXTnVLM2hKUlZneWNGb3lSVWcwV2tWeU1GQTVSWE5vYWxCQlRuTnNkbFJSUm1saGMzbERZa2x1ZDJ4elJqQkNXVlVyVlZSVlFtYzlQU0lzSW0xaFl5STZJbVJqT1RZNE9UVmhabVZoTXpOak5qVmtORGM0WlRjME5qSTNNemN3TXpGbU0ySXdPV1UwWW1WbU0yRTRZbUl4TkdFeU9HUmhOak0xWTJNNVkySmtPV0VpTENKMFlXY2lPaUlpZlE9PQ==', 1713769385),
('XjXzO2lF36r3oxDhCGsjwjXzcuxlnBaaZ7UMTRe4', NULL, '117.243.149.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa2xuTTFScmFrMUVia0pEVjNKR1ZIQlBUSE54TkZFOVBTSXNJblpoYkhWbElqb2lkSEp0YWs5M1ExUmhZekJWU1hGdFZIRjJiazlhYVVOeFVucEtlRnBSWkRaMGFYRldSVGhEYW5GTlQzWXdRMFUyVDFkME9UazBaVzFWUVd4VlJFRkxabTlTTVdwSk1qaENLMWsxVjJWdk1HWkpjV2hwTlhkcVdIWkthM05IZUhCTUwyUk5PRTh5ZEM5UmFuWkxjV0Z1TVRCUmQxcDVibFpYYmtod2JpdDFhMnBpYTNsVlFucGtSVXhpVmtGaU1sWlBkbEExZW1kalJYUlBRMkp6T0VSU1dHNTBOazFEZDFOeE1taFZQU0lzSW0xaFl5STZJbVJsTmpOaVpEazBOVEppWkRneFlUTmtNbUl3WXpGbE5EWTFaVFUzWW1VeU1qSXdOV0UzTUdNMk4yTXdOV0UzWmpNNFlqUmlaV1F4TkdObE56QmhPV0lpTENKMFlXY2lPaUlpZlE9PQ==', 1713720318),
('XteY2xNiNFh6yXzLzxFGNCPEfBexDbUYtnFIjjLp', NULL, '103.155.136.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa3MxVFZCcVFrUk5OeXNyTkdFeFkxUk5aVVZWVTFFOVBTSXNJblpoYkhWbElqb2lUbmR3YWxKcVluRlNVWEpNT1dWNFVXb3pMMHg1UjFOaGF6aDNTblUyYlcxMU0xVldVRFF5ZEdaME0xTTJheTlhYUdGUlpXRjVkbVZKWWpGclVFVkhiRUZTYkVOMGNrVnhSRmxXYVVoU2FrdGlMM0JYV0RKMmEyeHNOVEJYUVdZNE9IcEZWV0ZJVVVNcmJXaGxWMmh0UmpkbFRHSm1UWEJJWTFCMk1rczRXa0ZvT1RKSGMycFRhaXQzUzJaWmVsbGlTVUZ0UTJsbk0xTk5WSE5UVW5WSVlqY3JURFphVlhGaFp6TXJjMUpEWTBJd2ExRkdSM28zSzNad2NGWjZlbTVVV25SdmRVVTVORGNyWnpjcmNIQnpiRFZ6V1VvemVHc3lNV3hPTkdGc1dGaFFaVU53VDA5a2FUTm1OazVJZG5Sck5uVkdXVEJXYTBSWWFuVmpabFIxVFZoWVoyaG1lV05MTWxsamIyNXBNRTVPYjIxMk5WRTlQU0lzSW0xaFl5STZJakZtTjJWbU1tTmpaVE0yTWpFeU4yTTROalF3TmpBellqZ3pZVEkxT1RWaU1qQTJObUkxTkRNNFpUVmhabVZtTXpGbVl6azBNelprT1RCaU1tVmhPVFFpTENKMFlXY2lPaUlpZlE9PQ==', 1713769392);

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

--
-- Dumping data for table `whats_app_messages`
--

INSERT INTO `whats_app_messages` (`id`, `name`, `whatsapp_number`, `created_at`, `updated_at`) VALUES
(3, 'RAGHAVAN JEEVA', '919942502245', '2024-04-17 07:18:47', '2024-04-17 07:18:47'),
(5, 'RAGHAVAN JEEVA', '919344223822', '2024-04-21 17:26:39', '2024-04-21 17:26:39');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
