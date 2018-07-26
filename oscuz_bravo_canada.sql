-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2018 at 08:41 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oscuz_bravo_canada`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `acc_id` int(11) NOT NULL,
  `country_en` int(11) DEFAULT NULL,
  `country_sp` int(11) DEFAULT NULL,
  `country_tk` int(11) DEFAULT NULL,
  `country_pr` int(11) DEFAULT NULL,
  `location_en` int(11) DEFAULT NULL,
  `location_sp` int(11) DEFAULT NULL,
  `location_tk` int(11) DEFAULT NULL,
  `location_pr` int(11) DEFAULT NULL,
  `institute_en` int(11) DEFAULT NULL,
  `institute_sp` int(11) DEFAULT NULL,
  `institute_tk` int(11) DEFAULT NULL,
  `institute_pr` int(11) DEFAULT NULL,
  `acc_title_en` varchar(255) DEFAULT NULL,
  `acc_title_sp` varchar(255) DEFAULT NULL,
  `acc_title_tk` varchar(255) DEFAULT NULL,
  `acc_title_pr` varchar(255) DEFAULT NULL,
  `single_en` varchar(255) DEFAULT NULL,
  `single_sp` varchar(255) DEFAULT NULL,
  `single_tk` varchar(255) DEFAULT NULL,
  `single_pr` varchar(255) DEFAULT NULL,
  `double_en` varchar(255) DEFAULT NULL,
  `double_sp` varchar(255) DEFAULT NULL,
  `double_tk` varchar(255) DEFAULT NULL,
  `double_pr` varchar(255) DEFAULT NULL,
  `supp_fee_en` varchar(255) DEFAULT NULL,
  `supp_fee_sp` varchar(255) DEFAULT NULL,
  `supp_fee_tk` varchar(255) DEFAULT NULL,
  `supp_fee_pr` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: not active, 1: active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`acc_id`, `country_en`, `country_sp`, `country_tk`, `country_pr`, `location_en`, `location_sp`, `location_tk`, `location_pr`, `institute_en`, `institute_sp`, `institute_tk`, `institute_pr`, `acc_title_en`, `acc_title_sp`, `acc_title_tk`, `acc_title_pr`, `single_en`, `single_sp`, `single_tk`, `single_pr`, `double_en`, `double_sp`, `double_tk`, `double_pr`, `supp_fee_en`, `supp_fee_sp`, `supp_fee_tk`, `supp_fee_pr`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Accommodation Placement Fee', 'Accommodation Placement Fee', 'Accommodation Placement Fee', 'Accommodation Placement Fee', '$250', '$250', '$250', '$250', '', '', '', '', '', '', '', '', 1, '2018-06-20 13:10:21', '2018-06-21 06:45:04'),
(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Homestay – Single Room, Half Board', 'Homestay – Single Room, Half Board', 'Homestay – Single Room, Half Board', 'Homestay – Single Room, Half Board', '$310 per week', '$310 per week', '$310 per week', '$310 per week', '', '', '', '', '', '', '', '', 1, '2018-06-20 13:10:21', '2018-06-20 13:10:21'),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Under 18 Homestay single room full board', 'Under 18 Homestay single room full board', 'Under 18 Homestay single room full board', 'Under 18 Homestay single room full board', '$320 per week', '$320 per week', '$320 per week', '$320 per week', '', '', '', '', '', '', '', '', 1, '2018-06-20 13:10:21', '2018-06-20 13:10:21'),
(4, 2, 2, 2, 2, 3, 3, 3, 3, 1, 1, 1, 1, 'Shared bathroom, Half Board', 'Shared bathroom, Half Board', 'Shared bathroom, Half Board', 'Shared bathroom, Half Board', '240', '240', '240', '240', '205', '205', '205', '205', '60', '60', '60', '60', 1, '2018-06-20 13:32:07', '2018-06-21 06:44:48'),
(5, 2, 2, 2, 2, 3, 3, 3, 3, 1, 1, 1, 1, 'Shared bathroom, Full Board', 'Shared bathroom, Full Board', 'Shared bathroom, Full Board', 'Shared bathroom, Full Board', '255', '255', '255', '255', '220', '220', '220', '220', '60', '60', '60', '60', 1, '2018-06-20 13:32:07', '2018-06-20 13:32:07'),
(6, 2, 2, 2, 2, 3, 3, 3, 3, 1, 1, 1, 1, 'Shared Bathroom, Half Board', 'Shared Bathroom, Half Board', 'Shared Bathroom, Half Board', 'Shared Bathroom, Half Board', '45/night', '45/night', '45/night', '45/night', '40/night', '40/night', '40/night', '40/night', '60', '60', '60', '60', 1, '2018-06-20 13:32:07', '2018-06-20 13:32:07'),
(7, 2, 2, 2, 2, 3, 3, 3, 3, 1, 1, 1, 1, 'Shared Bathroom, Full Board', 'Shared Bathroom, Full Board', 'Shared Bathroom, Full Board', 'Shared Bathroom, Full Board', '50/night', '50/night', '50/night', '50/night', '45/night', '45/night', '45/night', '45/night', '60', '60', '60', '60', 1, '2018-06-20 13:32:07', '2018-06-20 13:32:07'),
(8, 3, 3, 3, 3, 5, 5, 5, 5, 2, 2, 2, 2, 'gfdgfdgfdgfd', 'gfdgfdgfdgfd', 'gfdgfdgfdgfd', 'gfdgfdgfdgfd', 'dfgfdgf', 'dfgfdgf', 'dfgfdgf', 'dfgfdgf', 'gfdgfdgf', 'gfdgfdgf', 'gfdgfdgf', 'gfdgfdgf', '60', '60', '60', '60', 0, '2018-06-21 06:56:33', '2018-06-21 06:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `additional_fees`
--

CREATE TABLE `additional_fees` (
  `id` int(11) NOT NULL,
  `country_en` int(11) DEFAULT NULL,
  `country_sp` int(11) DEFAULT NULL,
  `country_tk` int(11) DEFAULT NULL,
  `country_pr` int(11) DEFAULT NULL,
  `institute_en` int(11) DEFAULT NULL,
  `institute_sp` int(11) DEFAULT NULL,
  `institute_tk` int(11) DEFAULT NULL,
  `institute_pr` int(11) DEFAULT NULL,
  `fee_name_en` varchar(255) DEFAULT NULL,
  `fee_name_sp` varchar(255) DEFAULT NULL,
  `fee_name_tk` varchar(255) DEFAULT NULL,
  `fee_name_pr` varchar(255) DEFAULT NULL,
  `price_en` text,
  `price_sp` text,
  `price_tk` text,
  `price_pr` text,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: not active, 1: active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_fees`
--

INSERT INTO `additional_fees` (`id`, `country_en`, `country_sp`, `country_tk`, `country_pr`, `institute_en`, `institute_sp`, `institute_tk`, `institute_pr`, `fee_name_en`, `fee_name_sp`, `fee_name_tk`, `fee_name_pr`, `price_en`, `price_sp`, `price_tk`, `price_pr`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 'Enrolment Fee – Student Visa', 'Enrolment Fee – Student Visa', 'Enrolment Fee – Student Visa', 'Enrolment Fee – Student Visa', '$250', '$250', '$250', '$250', 1, '2018-06-20 07:14:32', '2018-06-20 07:14:32'),
(2, 1, 1, 1, 1, 1, 1, 1, 1, 'Enrolment Fee – Tourist/ Working Holiday Visa', 'Enrolment Fee – Tourist/ Working Holiday Visa', 'Enrolment Fee – Tourist/ Working Holiday Visa', 'Enrolment Fee – Tourist/ Working Holiday Visa', '$100', '$100', '$100', '$100', 1, '2018-06-20 07:14:32', '2018-06-20 08:31:19'),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 'Materials 1-10 Weeks', 'Materials 1-10 Weeks', 'Materials 1-10 Weeks', 'Materials 1-10 Weeks', '$100', '$100', '$100', '$100', 1, '2018-06-20 07:14:32', '2018-06-20 08:24:46'),
(4, 1, 1, 1, 1, 1, 1, 1, 1, 'Materials 10+ Weeks', 'Materials 10+ Weeks', 'Materials 10+ Weeks', 'Materials 10+ Weeks', '$10 per week', '$10 per week', '$10 per week', '$10 per week', 1, '2018-06-20 07:14:32', '2018-06-20 07:14:32'),
(5, 2, 2, 2, 2, 1, 1, 1, 1, 'Registration', 'Registration', 'Registration', 'Registration', '140', '140', '140', '140', 1, '2018-06-20 07:16:32', '2018-06-20 08:31:24'),
(6, 2, 2, 2, 2, 1, 1, 1, 1, 'Accommodation Placement', 'Accommodation Placement', 'Accommodation Placement', 'Accommodation Placement', '245', '245', '245', '245', 1, '2018-06-20 07:16:32', '2018-06-20 07:16:32'),
(7, 2, 2, 2, 2, 1, 1, 1, 1, 'Cambridge, IELTS and Business English Course Books', 'Cambridge, IELTS and Business English Course Books', 'Cambridge, IELTS and Business English Course Books', 'Cambridge, IELTS and Business English Course Books', '60', '60', '60', '60', 1, '2018-06-20 07:16:32', '2018-06-20 07:16:32'),
(9, 3, 3, 3, 3, 2, 2, 2, 2, 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 0, '2018-06-21 08:07:03', '2018-06-21 08:07:21'),
(10, 3, 3, 3, 3, 2, 2, 2, 2, 'dfgfdgfdg', 'dfgfdgfdg', 'dfgfdgfdg', 'dfgfdgfdg', 'fdgfdgfdg', 'fdgfdgfdg', 'fdgfdgfdg', 'fdgfdgfdg', 0, '2018-06-21 08:07:03', '2018-06-21 08:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: not active 1: active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 1, '2018-06-14 10:27:21', '2018-06-14 10:27:21'),
(2, 'canada', 1, '2018-06-14 10:27:21', '2018-06-14 10:27:21'),
(3, 'Ireland', 1, '2018-06-14 10:27:21', '2018-06-14 10:27:21'),
(4, 'USA', 1, '2018-06-14 10:27:21', '2018-06-14 10:27:21'),
(5, 'UK', 1, '2018-06-14 10:27:21', '2018-06-14 10:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `country_en` int(11) DEFAULT NULL COMMENT 'id from country(fk)',
  `country_sp` int(11) DEFAULT NULL,
  `country_tk` int(11) DEFAULT NULL,
  `country_pr` int(11) DEFAULT NULL,
  `location_en` int(11) DEFAULT NULL,
  `location_sp` int(11) DEFAULT NULL,
  `location_tk` int(11) DEFAULT NULL,
  `location_pr` int(11) DEFAULT NULL,
  `institute_en` int(11) DEFAULT NULL,
  `institute_sp` int(11) DEFAULT NULL,
  `institute_tk` int(11) DEFAULT NULL,
  `institute_pr` int(11) DEFAULT NULL,
  `course_title_en` varchar(255) DEFAULT NULL,
  `course_title_sp` varchar(255) DEFAULT NULL,
  `course_title_tk` varchar(255) DEFAULT NULL,
  `course_title_pr` varchar(255) DEFAULT NULL,
  `course_description_en` text,
  `course_description_sp` text,
  `course_description_tk` text,
  `course_description_pr` text,
  `course_image_en` varchar(255) DEFAULT NULL,
  `course_image_sp` varchar(255) DEFAULT NULL,
  `course_image_tk` varchar(255) DEFAULT NULL,
  `course_image_pr` varchar(255) DEFAULT NULL,
  `course_time_en` varchar(255) DEFAULT NULL,
  `course_time_sp` varchar(255) DEFAULT NULL,
  `course_time_tk` varchar(255) DEFAULT NULL,
  `course_time_pr` varchar(255) DEFAULT NULL,
  `starting_date_en` varchar(255) DEFAULT NULL,
  `starting_date_sp` varchar(255) DEFAULT NULL,
  `starting_date_tk` varchar(255) DEFAULT NULL,
  `starting_date_pr` varchar(255) DEFAULT NULL,
  `total_lesson_en` varchar(255) DEFAULT NULL,
  `total_lesson_sp` varchar(255) DEFAULT NULL,
  `total_lesson_tk` varchar(255) DEFAULT NULL,
  `total_lesson_pr` varchar(255) DEFAULT NULL,
  `currency_en` varchar(255) DEFAULT NULL,
  `currency_sp` varchar(255) DEFAULT NULL,
  `currency_tk` varchar(255) DEFAULT NULL,
  `currency_pr` varchar(255) DEFAULT NULL,
  `price_en` text,
  `price_sp` text,
  `price_tk` text,
  `price_pr` text,
  `weeks_en` text,
  `weeks_sp` text,
  `weeks_tk` text,
  `weeks_pr` text,
  `course_intensity_en` varchar(255) DEFAULT NULL,
  `course_intensity_sp` varchar(255) DEFAULT NULL,
  `course_intensity_tk` varchar(255) DEFAULT NULL,
  `course_intensity_pr` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `country_en`, `country_sp`, `country_tk`, `country_pr`, `location_en`, `location_sp`, `location_tk`, `location_pr`, `institute_en`, `institute_sp`, `institute_tk`, `institute_pr`, `course_title_en`, `course_title_sp`, `course_title_tk`, `course_title_pr`, `course_description_en`, `course_description_sp`, `course_description_tk`, `course_description_pr`, `course_image_en`, `course_image_sp`, `course_image_tk`, `course_image_pr`, `course_time_en`, `course_time_sp`, `course_time_tk`, `course_time_pr`, `starting_date_en`, `starting_date_sp`, `starting_date_tk`, `starting_date_pr`, `total_lesson_en`, `total_lesson_sp`, `total_lesson_tk`, `total_lesson_pr`, `currency_en`, `currency_sp`, `currency_tk`, `currency_pr`, `price_en`, `price_sp`, `price_tk`, `price_pr`, `weeks_en`, `weeks_sp`, `weeks_tk`, `weeks_pr`, `course_intensity_en`, `course_intensity_sp`, `course_intensity_tk`, `course_intensity_pr`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'General English', 'General English', 'General English', 'General English', 'sdfsdfdsf', 'sdfsdfdsf', 'sfsdfsdfsdf', 'sdfsdfsdfsdf', '1529051260436car_image.jpg', '1529051260728car3.jpg', '1529051260307car1.jpg', '1529051260401car_image.jpg', '09:00-13:30', '09:00-13:30', '09:00-13:30', '09:00-13:30', '20/06/2018', '20/06/2018', '20/06/2018', '20/06/2018', '20', '20', '20', '20', '$', '$', '$', '$', 'a:4:{i:0;s:3:\"355\";i:1;s:3:\"330\";i:2;s:3:\"315\";i:3;s:3:\"305\";}', 'a:4:{i:0;s:3:\"355\";i:1;s:3:\"330\";i:2;s:3:\"315\";i:3;s:3:\"305\";}', 'a:4:{i:0;s:3:\"355\";i:1;s:3:\"330\";i:2;s:3:\"315\";i:3;s:3:\"305\";}', 'a:4:{i:0;s:3:\"355\";i:1;s:3:\"330\";i:2;s:3:\"315\";i:3;s:3:\"305\";}', 'a:4:{i:0;s:3:\"1-7\";i:1;s:4:\"8-15\";i:2;s:5:\"16-23\";i:3;s:3:\"24+\";}', 'a:4:{i:0;s:3:\"1-7\";i:1;s:4:\"8-15\";i:2;s:5:\"16-23\";i:3;s:3:\"24+\";}', 'a:4:{i:0;s:3:\"1-7\";i:1;s:4:\"8-15\";i:2;s:5:\"16-23\";i:3;s:3:\"24+\";}', 'a:4:{i:0;s:3:\"1-7\";i:1;s:4:\"8-15\";i:2;s:5:\"16-23\";i:3;s:3:\"24+\";}', '20hrs/week', '20hrs/week', '20hrs/week', '20hrs/week', 1, '2018-06-15 08:27:40', '2018-06-19 08:38:36'),
(2, 1, 1, 1, 1, 2, 2, 2, 2, 1, 1, 1, 1, 'General English', 'General English', 'General English', 'General English', 'fsdfsdfdsfd', 'sdfsdfsdf', 'dfgfdgfdgfdg', 'sfdsdfdsf', '1529385246779car3.jpg', '1529385246165car1.jpg', '1529385246436car4.jpg', '1529385246582car_image.jpg', '09:00-13:30', '09:00-13:30', '09:00-13:30', '09:00-13:30', '22/06/2018', '22/06/2018', '22/06/2018', '22/06/2018', '20', '20', '20', '20', '$', '$', '$', '$', 'a:3:{i:0;s:3:\"315\";i:1;s:3:\"300\";i:2;s:3:\"285\";}', 'a:3:{i:0;s:3:\"315\";i:1;s:3:\"300\";i:2;s:3:\"285\";}', 'a:3:{i:0;s:3:\"315\";i:1;s:3:\"300\";i:2;s:3:\"285\";}', 'a:3:{i:0;s:3:\"315\";i:1;s:3:\"300\";i:2;s:3:\"285\";}', 'a:3:{i:0;s:4:\"8-15\";i:1;s:5:\"16-23\";i:2;s:3:\"24+\";}', 'a:3:{i:0;s:4:\"8-15\";i:1;s:5:\"16-23\";i:2;s:3:\"24+\";}', 'a:3:{i:0;s:4:\"8-15\";i:1;s:5:\"16-23\";i:2;s:3:\"24+\";}', 'a:3:{i:0;s:4:\"8-15\";i:1;s:5:\"16-23\";i:2;s:3:\"24+\";}', '20hrs/week', '20hrs/week', '20hrs/week', '20hrs/week', 1, '2018-06-19 05:14:06', '2018-06-21 07:56:13'),
(6, 2, 2, 2, 2, 3, 3, 3, 3, 1, 1, 1, 1, 'General English', 'General English(sp)', 'General English(tk)', 'General English(pr)', 'gfdgfdgfddfgfd', 'sdfdsfdsf', 'dgfdgfdg', 'fdfsdfsdf', '', '', '', '', '09:00-13:20', '09:00-13:20', '09:00-13:20', '09:00-13:20', '28/06/2018', '28/06/2018', '28/06/2018', '28/06/2018', '20', '20', '20', '20', 'CA$', 'CA$', 'CA$', 'CA$', 'a:5:{i:0;s:3:\"330\";i:1;s:3:\"310\";i:2;s:3:\"290\";i:3;s:3:\"280\";i:4;s:3:\"270\";}', 'a:5:{i:0;s:3:\"330\";i:1;s:3:\"310\";i:2;s:3:\"290\";i:3;s:3:\"280\";i:4;s:3:\"270\";}', 'a:5:{i:0;s:3:\"330\";i:1;s:3:\"310\";i:2;s:3:\"290\";i:3;s:3:\"280\";i:4;s:3:\"270\";}', 'a:5:{i:0;s:3:\"330\";i:1;s:3:\"310\";i:2;s:3:\"290\";i:3;s:3:\"280\";i:4;s:3:\"270\";}', 'a:5:{i:0;s:3:\"1-4\";i:1;s:4:\"5-12\";i:2;s:5:\"13-23\";i:3;s:5:\"24-35\";i:4;s:4:\"36+ \";}', 'a:5:{i:0;s:3:\"1-4\";i:1;s:4:\"5-12\";i:2;s:5:\"13-23\";i:3;s:5:\"24-35\";i:4;s:4:\"36+ \";}', 'a:5:{i:0;s:3:\"1-4\";i:1;s:4:\"5-12\";i:2;s:5:\"13-23\";i:3;s:5:\"24-35\";i:4;s:4:\"36+ \";}', 'a:5:{i:0;s:3:\"1-4\";i:1;s:4:\"5-12\";i:2;s:5:\"13-23\";i:3;s:5:\"24-35\";i:4;s:4:\"36+ \";}', '20hrs/week', '20hrs/week', '20hrs/week', '20hr/week', 1, '2018-06-22 13:07:51', '2018-06-22 13:59:58'),
(5, 2, 0, 0, 0, 3, 0, 0, 0, 2, 0, 0, 0, 'gfdgfdg', '', '', '', 'dfgfdgfdg', '', '', '', '1529401609440car_image.jpg', '', '', '', 'dfgfdgfdg', '', '', '', 'dfgfdg', '', '', '', 'fdgfdg', '', '', '', '€', '', '', '', 'a:1:{i:0;s:3:\"285\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:5:\"16-23\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', '20hrs/week', '', '', '', 0, '2018-06-19 09:46:49', '2018-06-19 09:48:49'),
(7, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 'General English PM (*Sydney only)', '', '', '', 'dsfsdfdsfs', '', '', '', '', '', '', '', '17:00-21:30', '', '', '', '28/06/2018', '', '', '', '20', '', '', '', 'CA$', '', '', '', 'a:4:{i:0;s:3:\"305\";i:1;s:3:\"295\";i:2;s:3:\"275\";i:3;s:3:\"260\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:4:{i:0;s:9:\"1-7 weeks\";i:1;s:10:\"8-15 weeks\";i:2;s:11:\"16-23 weeks\";i:3;s:9:\"24+ weeks\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', '20hrs/week', '', '', '', 1, '2018-06-22 13:18:34', '2018-06-22 13:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `inst_id` int(11) NOT NULL,
  `inst_name_en` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inst_name_sp` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inst_name_tk` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inst_name_pr` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inst_description_en` text CHARACTER SET latin1,
  `inst_description_sp` text CHARACTER SET latin1,
  `inst_description_tk` text CHARACTER SET latin1,
  `inst_description_pr` text CHARACTER SET latin1,
  `inst_logo_en` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inst_logo_sp` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inst_logo_tk` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `inst_logo_pr` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: not active, 1: active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`inst_id`, `inst_name_en`, `inst_name_sp`, `inst_name_tk`, `inst_name_pr`, `inst_description_en`, `inst_description_sp`, `inst_description_tk`, `inst_description_pr`, `inst_logo_en`, `inst_logo_sp`, `inst_logo_tk`, `inst_logo_pr`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OHC', 'OHC_SP', 'OHC_TK', 'OHC_PR', 'sdfdsfdsfsdf', 'sdfsdfsdfsd', 'sdfsdfsdfds', 'sdfsdfsdfds', '1528964407433car_image.jpg', '1528964407957car1.jpg', '1528964407660car2.jpg', '152896440771car4.jpg', 1, '2018-06-14 08:20:07', '2018-06-14 08:20:07'),
(2, 'ILAC', 'ILAC_SP', 'ILAC_TK', 'ILAC_PR', 'ggfdgfdgfdgfd', 'gfgdfgfdg', 'sfsdfdsfsdf', 'sdfdfdsfsdf', '1528964728751car1.jpg', '1528964728984car2.jpg', '1528964728208car3.jpg', '1528964728277car4.jpg', 1, '2018-06-14 08:25:28', '2018-06-14 08:25:28'),
(3, 'Hansas', 'Hansas_SP', 'Hansas_TR', 'Hansas_PR', 'sdfsdfsdfsdf', 'sdfsdfsdfsdf', 'sfsdfsdfsd', 'sdfsdfsdfsdf', '1528964816995car1.jpg', '1528964816450car3.jpg', '1528964816216car4.jpg', '1528964816190car_image.jpg', 1, '2018-06-14 08:26:56', '2018-06-14 10:11:50'),
(4, 'SC GEOS', 'SC GEOS_sp', 'SC GEOS_tk', 'SC_GEOS_pr', 'sdfsdfsdfsd', 'sdfsdfsdfsd', 'sfsdfsdfsdf', 'dsfsdfsdfsd', '1528964899645car1.jpg', '1528964899475car2.jpg', '15289648991car4.jpg', '1528964899306car_image.jpg', 1, '2018-06-14 08:28:19', '2018-06-14 08:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `country_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sydney & Melbourne', 1, 1, '2018-06-14 10:54:07', '2018-06-14 10:54:07'),
(2, 'Brisbane, Gold Coast & Cairns', 1, 1, '2018-06-14 10:54:07', '2018-06-14 10:54:07'),
(3, 'Toronto & Vancouver', 2, 1, '2018-06-14 10:55:24', '2018-06-14 10:55:24'),
(4, 'Calgary', 2, 1, '2018-06-14 10:55:24', '2018-06-14 10:55:24'),
(5, 'Dublin', 3, 1, '2018-06-14 10:56:46', '2018-06-14 10:56:46'),
(6, 'New York', 4, 1, '2018-06-14 10:58:09', '2018-06-14 10:58:09'),
(7, 'Boston', 4, 1, '2018-06-14 10:58:09', '2018-06-14 10:58:09'),
(8, 'Miami', 4, 1, '2018-06-14 10:58:09', '2018-06-14 10:58:09'),
(9, 'London - Oxford Street', 5, 1, '2018-06-14 11:00:07', '2018-06-14 11:00:07'),
(10, 'London - Richmond', 5, 1, '2018-06-14 11:00:07', '2018-06-14 11:00:07'),
(11, 'Oxford', 5, 1, '2018-06-14 11:00:07', '2018-06-14 11:00:07'),
(12, 'Stratford-upon-Avon', 5, 1, '2018-06-14 11:00:07', '2018-06-14 11:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `lp_users`
--

CREATE TABLE `lp_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone_no` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `address` text CHARACTER SET latin1,
  `company_website` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email_varification` varchar(255) CHARACTER SET latin1 NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: user, 1: admin',
  `user_role` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `employer_registration` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lp_users`
--

INSERT INTO `lp_users` (`id`, `fname`, `lname`, `whatsapp`, `email`, `phone_no`, `address`, `company_website`, `password`, `email_varification`, `active_status`, `user_type`, `user_role`, `employer_registration`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, 'admin@gmail.com', '4509878900', 'gfdgfdgfdgfdsdfsdf', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'cec0c0edde50423530a6faa7d034b055', 1, 1, 'Admin', '', '2018-05-22 12:18:24', '2018-06-04 06:37:45'),
(2, 'sunil', 'kumar', NULL, 'sunil1@gmail.com', '4509876890', 'sdfsdfdsf', NULL, 'e10adc3949ba59abbe56e057f20f883e', '4b050815f724fdf85da2afd9e256a0c6', 0, 0, 'Student', '', '2018-05-22 12:18:24', '2018-06-21 13:33:29'),
(8, 'akash', 'kumar', NULL, 'akash@gmail.com', '4590987890', 'jal', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 'Student', '', '2018-06-04 06:33:21', '2018-06-04 07:00:26'),
(9, 'sunil', 'kumar', NULL, 'sunil2@gmail.com', '4098789098', 'sdfdsf', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, 0, 'Student', '', '2018-06-04 07:01:09', '2018-06-21 13:33:37'),
(11, 'yuvraj', 'singh', 'yuviwhatsapp', 'yuvi.unique@gmail.com', '3409890987', 'fsdfdfdsf', 'https://sdfdsf.com', 'e10adc3949ba59abbe56e057f20f883e', 'd8773c01d2703f37e77738e391f13a5a', 1, 0, NULL, '', '2018-06-21 12:44:22', '2018-06-22 06:41:08'),
(12, 'sunil', 'kumar', 'sunilwhatsapp', 'sunil@gmail.com', '3409890987', 'sdfdsfd', 'http://fsdf.com', 'e10adc3949ba59abbe56e057f20f883e', 'd85686fc6afec4bc72ff15b4cff28a79', 1, 0, NULL, '', '2018-06-21 13:32:55', '2018-06-21 13:34:00'),
(13, 'suraj', 'singh', 'surajwhatsapp', 'suraj@gmail.com', '4509878909', 'sdfsdfsdf', 'http://dsfsdf.com', 'e10adc3949ba59abbe56e057f20f883e', 'd09a4a1f7326ce7ea1981538fb07d524', 1, 0, NULL, '', '2018-06-22 06:47:41', '2018-06-22 06:48:01'),
(14, 'admintest', 'test', 'Manu', 'mukeshgautam.avis@gmail.com', '778945612', 'chd', 'http://manu.com', '25f9e794323b453885f5181f1b624d0b', '2975c991bc30e93c713da4aacc2c8ee4', 1, 1, NULL, '', '2018-06-23 14:47:16', '2018-06-23 15:10:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `additional_fees`
--
ALTER TABLE `additional_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`inst_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `lp_users`
--
ALTER TABLE `lp_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `additional_fees`
--
ALTER TABLE `additional_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lp_users`
--
ALTER TABLE `lp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
