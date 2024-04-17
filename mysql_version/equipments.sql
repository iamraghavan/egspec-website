-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 04:38 PM
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
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equipment_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `equipment_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`equipment_id`, `category_id`, `equipment_name`) VALUES
(1, 1, 'Drilling Machine – Pillar'),
(2, 1, 'Blade Grinder 18”'),
(3, 1, 'Surface Planner 18” Circular Saw'),
(4, 1, 'Thickneser'),
(5, 1, 'Wood Turning Lathe'),
(6, 1, 'Mechanical Hacksaw Machine 7”'),
(7, 1, 'Arc Welding TransformerOil cooled – 2Nos'),
(8, 1, 'Arc Welding TransformerAir cooled – 2Nos'),
(9, 1, 'Gas Welding (Oxygen & Acetylene Cylinder)'),
(10, 1, 'Blower'),
(11, 1, 'Portable Grinder'),
(12, 1, 'Circular Saw'),
(13, 1, 'Rotary Hammer'),
(14, 1, 'Demolition Hammer H.D'),
(15, 1, 'Planner MH80XI Hitmin'),
(16, 1, 'Hand Drilling Machine'),
(17, 1, 'Jig Saw'),
(18, 1, 'Angle Grinder Machine'),
(19, 1, 'Hearth Furnace'),
(20, 1, 'TIG Welding Machine'),
(21, 2, 'Pneumatic Comparator'),
(22, 2, 'Heavy Duty Dial Gauge'),
(23, 2, 'Surface Planner 18” Circular Saw'),
(24, 2, 'Digital Vernier Caliper'),
(25, 2, 'Vernier Height Gauge'),
(26, 2, 'Micrometer'),
(27, 2, 'Bore Gauge With Dial'),
(28, 2, 'Vernier Depth Gauge'),
(29, 2, 'Slip Gauge Setup'),
(30, 2, 'Gear Tooth Vernier'),
(31, 2, 'Comparator With Dial Gauge'),
(32, 2, 'Tool Maker’s Microscope'),
(33, 2, 'Profile Projector'),
(34, 2, 'Floating Carriage Micrometer'),
(35, 2, 'Auto Collimator'),
(36, 2, 'Optical Comparator'),
(37, 2, 'Vernier Bevel Protractor'),
(38, 2, 'Thermocouple With Heat Source'),
(39, 2, 'Linear Variable Differential Transformer (Lvdt)'),
(40, 2, 'Platinum Resistance Thermocouple'),
(41, 2, 'Radiation Pyrometer With Heat Source'),
(42, 2, 'Optical Pyrometer'),
(43, 2, 'Surface Roughness Tester'),
(44, 2, 'Telescopic Gauge'),
(45, 2, 'Force Measuring Setup'),
(46, 2, 'Torque Measuring Setup'),
(47, 2, 'Parallel/Counter Flow Heat Exchanger'),
(48, 1, 'Drilling Machine – Pillar'),
(49, 1, 'Blade Grinder 18”'),
(50, 1, 'Surface Planner 18” Circular Saw'),
(51, 1, 'Thickneser'),
(52, 1, 'Wood Turning Lathe'),
(53, 1, 'Mechanical Hacksaw Machine 7”'),
(54, 1, 'Arc Welding TransformerOil cooled – 2Nos'),
(55, 1, 'Arc Welding TransformerAir cooled – 2Nos'),
(56, 1, 'Gas Welding (Oxygen & Acetylene Cylinder)'),
(57, 1, 'Blower'),
(58, 1, 'Portable Grinder'),
(59, 1, 'Circular Saw'),
(60, 1, 'Rotary Hammer'),
(61, 1, 'Demolition Hammer H.D'),
(62, 1, 'Planner MH80XI Hitmin'),
(63, 1, 'Hand Drilling Machine'),
(64, 1, 'Jig Saw'),
(65, 1, 'Angle Grinder Machine'),
(66, 1, 'Hearth Furnace'),
(67, 1, 'TIG Welding Machine'),
(68, 2, 'Pneumatic Comparator'),
(69, 2, 'Heavy Duty Dial Gauge'),
(70, 2, 'Surface Planner 18” Circular Saw'),
(71, 2, 'Digital Vernier Caliper'),
(72, 2, 'Vernier Height Gauge'),
(73, 2, 'Micrometer'),
(74, 2, 'Bore Gauge With Dial'),
(75, 2, 'Vernier Depth Gauge'),
(76, 2, 'Slip Gauge Setup'),
(77, 2, 'Gear Tooth Vernier'),
(78, 2, 'Comparator With Dial Gauge'),
(79, 2, 'Tool Maker’s Microscope'),
(80, 2, 'Profile Projector'),
(81, 2, 'Floating Carriage Micrometer'),
(82, 2, 'Auto Collimator'),
(83, 2, 'Optical Comparator'),
(84, 2, 'Vernier Bevel Protractor'),
(85, 2, 'Thermocouple With Heat Source'),
(86, 2, 'Linear Variable Differential Transformer (Lvdt)'),
(87, 2, 'Platinum Resistance Thermocouple'),
(88, 2, 'Radiation Pyrometer With Heat Source'),
(89, 2, 'Optical Pyrometer'),
(90, 2, 'Surface Roughness Tester'),
(91, 2, 'Telescopic Gauge'),
(92, 2, 'Force Measuring Setup'),
(93, 2, 'Torque Measuring Setup'),
(94, 2, 'Parallel/Counter Flow Heat Exchanger'),
(95, 3, 'Single cylinder 4-stroke diesel engine Data Acquisition System electrical loading with alternator'),
(96, 3, 'Twin cylinder 4-stroke diesel engine mechanical Loading'),
(97, 3, 'Multi cylinder 4-stroke petrol engine Morse test rope'),
(98, 3, 'Brake mechanical loading'),
(99, 3, 'Single cylinder 2-stroke petrol engine cut section Model'),
(100, 3, 'Single cylinder 4-stroke diesel engine cut section Model'),
(101, 3, 'Single cylinder 4-stroke diesel engine mechanical loading'),
(102, 3, 'Single cylinder 4-stroke diesel engine hydraulic loading'),
(103, 3, 'Single cylinder 4-stroke petrol engine electrical loading'),
(104, 3, 'Redwood Viscometer'),
(105, 3, 'Cleave land Open and closed cup Apparatus'),
(106, 3, 'Saybolt viscometer'),
(107, 3, 'Exhaust Gas Analyser - 4GAS, CO,HC,CO2,O2'),
(108, 4, 'Guarded plate apparatus'),
(109, 4, 'Natural convection-vertical cylinder apparatus'),
(110, 4, 'Forced convection inside tube apparatus'),
(111, 4, 'Composite wall apparatus'),
(112, 4, 'Thermal conductivity of insulating powder apparatus'),
(113, 4, 'Lagged pipe apparatus'),
(114, 4, 'Pin-fin apparatus'),
(115, 4, 'Stefan-Boltzmann apparatus'),
(116, 4, 'Fluidized Bed Cooling Tower'),
(117, 4, 'Emissivity measurement apparatus'),
(118, 4, 'Parallel/counter flow heat exchanger apparatus'),
(119, 4, 'Single/two stage reciprocating air compressor'),
(120, 4, 'Refrigeration test rig'),
(121, 4, 'Air-conditioning test rig'),
(122, 4, 'LPG Refrigeration test rig'),
(123, 4, 'Refrigeration - CUT SECTION MODEL'),
(124, 4, 'Steam turbine test rig'),
(125, 4, 'Maxima non – IBR Boiler'),
(126, 5, 'Pilot 4’ Lathe'),
(127, 5, 'Pilot Lathe Iii'),
(128, 5, 'Pilot Lathe 41/2 Feet'),
(129, 5, 'Pilot 6’ Lathe'),
(130, 5, 'Padmini Student Lathe'),
(131, 5, 'Turret Lathe'),
(132, 5, 'Capstan Lathe'),
(133, 5, 'Atlas Bench Grinder'),
(134, 5, '18” Shaper'),
(135, 5, 'Gear Hobbing Machine'),
(136, 5, 'Smt Universal Radial Drilling M/C'),
(137, 5, 'Suraj(Sm2) Universal Milling M/C'),
(138, 5, 'Parrot Pmcv-150 Vertical Surface Grinder'),
(139, 5, 'Sew 1” Piller Drilling M/C'),
(140, 5, 'Tool And Cutter Grinder'),
(141, 5, 'Lathe Tool Dynamometer'),
(142, 5, 'Parrot Spindle Horizontal Grinder M/C'),
(143, 5, 'Riat R32 Cylindrical Grinder'),
(144, 5, '3” Horizontal Planner Machine'),
(145, 5, 'Gear Shaper Machine'),
(146, 5, 'Centerless Grinder Machine'),
(147, 5, 'Milling Tool Dynamometer'),
(148, 5, 'Tool Makers Microscope'),
(149, 6, 'Forced Vibration Setup'),
(150, 6, 'Stroboscope'),
(151, 6, 'Torsional Vibration Setup – Single'),
(152, 6, 'Spring Mass and Strip Mass System'),
(153, 6, 'Whirling Speed of Shaft'),
(154, 6, 'Dynamic Balancing of Rotors'),
(155, 6, 'Kinematic of Gear Trains (Simple & Compound)'),
(156, 6, 'Turn Table Apparatus'),
(157, 6, 'Cam Study Kit'),
(158, 6, 'Moment of Inertia by Oscillation'),
(159, 6, 'Universal Governors'),
(160, 6, 'Gyroscopic Couple'),
(161, 6, 'Spring Mass Vibration Setup'),
(162, 6, 'Vibrating Table'),
(163, 6, 'Governor Apparatus'),
(164, 6, 'Transverse Vibration Setup'),
(165, 6, 'Dynamic balancing – Reciprocating mass'),
(166, 6, 'Two Rotor Vibration Setup'),
(167, 6, 'Tachometer, Stop watches and other tools'),
(168, 7, 'Basic Pneumatic Trainer Kit'),
(169, 7, 'Air Compressor'),
(170, 7, 'Hydraulic simulation software – 2000 version 1'),
(171, 7, 'Pneumatic simulation software – 2000 version 1'),
(172, 7, '8051 – Microcontroller kit with stepper motor'),
(173, 7, 'PID Temperature Controller'),
(174, 7, 'AC servo controller'),
(175, 7, 'Servo controller interfacing for DC Motor'),
(176, 7, 'Basic Hydraulic Trainer Kit'),
(177, 7, 'Pick Place robot'),
(178, 8, 'Computer system (Dell)'),
(179, 8, 'HP Laser printer'),
(180, 8, 'HPDesign jet 100 plotter'),
(181, 8, 'Computer system(Dell)'),
(182, 8, 'XL TURN CNC'),
(183, 8, 'XL MILL CNC'),
(184, 8, 'Solid works-2004'),
(185, 8, 'Ansys-ver 11.0'),
(186, 8, 'Edge CAM'),
(187, 8, 'Master CAM'),
(188, 9, 'PIN ON DISC'),
(189, 9, 'WIRE CUT EDM'),
(190, 9, 'VIDEO MICROSCOPE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equipment_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `laboratory_categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
