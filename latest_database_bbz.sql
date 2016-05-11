-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2016 at 02:14 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbz`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE IF NOT EXISTS `adminusers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `boosts`
--

CREATE TABLE IF NOT EXISTS `boosts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skill_id` int(10) unsigned NOT NULL,
  `user_id_1` int(10) unsigned NOT NULL,
  `user_id_2` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `boosts_skill_id_foreign` (`skill_id`),
  KEY `boosts_user_id_1_foreign` (`user_id_1`),
  KEY `boosts_user_id_2_foreign` (`user_id_2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `boosts`
--

INSERT INTO `boosts` (`id`, `skill_id`, `user_id_1`, `user_id_2`, `created_at`, `updated_at`) VALUES
(1, 6, 16, 5, '2016-01-23 11:07:18', '2016-01-23 11:07:18'),
(2, 7, 20, 1, '2016-01-24 15:19:59', '2016-01-24 15:19:59'),
(3, 4, 5, 23, '2016-01-25 09:11:06', '2016-01-25 09:11:06'),
(10, 8, 5, 1, '2016-02-13 14:43:52', '2016-02-13 14:43:52'),
(12, 5, 5, 1, '2016-02-15 19:02:09', '2016-02-15 19:02:09'),
(13, 4, 5, 3, '2016-02-16 06:55:57', '2016-02-16 06:55:57'),
(15, 8, 5, 3, '2016-02-16 06:56:00', '2016-02-16 06:56:00'),
(16, 17, 5, 3, '2016-02-16 06:56:02', '2016-02-16 06:56:02'),
(17, 13, 3, 42, '2016-02-17 10:43:36', '2016-02-17 10:43:36'),
(18, 14, 3, 42, '2016-02-17 10:43:39', '2016-02-17 10:43:39'),
(19, 15, 3, 42, '2016-02-17 10:43:41', '2016-02-17 10:43:41'),
(20, 5, 5, 3, '2016-02-20 13:32:18', '2016-02-20 13:32:18'),
(21, 4, 5, 4, '2016-02-20 13:32:38', '2016-02-20 13:32:38'),
(22, 5, 5, 4, '2016-02-20 13:32:40', '2016-02-20 13:32:40'),
(23, 8, 5, 4, '2016-02-20 13:32:41', '2016-02-20 13:32:41'),
(24, 17, 5, 4, '2016-02-20 13:32:43', '2016-02-20 13:32:43'),
(25, 1, 4, 5, '2016-02-23 15:17:20', '2016-02-23 15:17:20'),
(26, 2, 4, 5, '2016-02-23 15:17:21', '2016-02-23 15:17:21'),
(27, 3, 4, 5, '2016-02-23 15:17:22', '2016-02-23 15:17:22'),
(30, 20, 48, 5, '2016-02-27 09:42:17', '2016-02-27 09:42:17'),
(31, 18, 48, 5, '2016-02-27 09:42:17', '2016-02-27 09:42:17'),
(32, 4, 5, 1, '2016-03-02 16:56:59', '2016-03-02 16:56:59'),
(33, 9, 1, 5, '2016-03-10 08:48:28', '2016-03-10 08:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `bylaws`
--

CREATE TABLE IF NOT EXISTS `bylaws` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issuing_authority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `bylaws`
--

INSERT INTO `bylaws` (`id`, `city`, `link`, `issuing_authority`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Guwahati', 'http://www.gmda.co.in/building_bye_laws.php', 'GMDA(Guwahati metropolitan Development Authority)', 'Construction Bye-laws', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Kolkata', 'https://www.kmcgov.in/KMCPortal/jsp/KMCPortalBuildingHome.jsp', 'KMC (Kolkata Municipal Corporation)', 'Building Sanction', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kolkata', 'https://www.kmcgov.in/KMCPortal/jsp/KMCCarParking.jsp', 'KMC (Kolkata Municipal Corporation)', 'Car Parking', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kolkata', 'https://www.kmcgov.in/KMCPortal/jsp/KMCDrainageHome.jsp', 'KMC (Kolkata Municipal Corporation)', 'Drainage Connections', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Kolkata', 'https://www.kmcgov.in/KMCPortal/jsp/HeritageBuildingHome.jsp', 'KMC (Kolkata Municipal Corporation)', 'Heritage Buildings', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Kolkata', 'https://www.kmcgov.in/KMCPortal/jsp/WaterSupply.jsp', 'KMC (Kolkata Municipal Corporation)', 'Water Supply', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Kolkata', 'https://www.kmcgov.in/KMCPortal/jsp/KMCParksGardens1.jsp', 'KMC (Kolkata Municipal Corporation)', 'Parks and Gardens', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Jorhat', 'http://www.jorhatmunicipalboard.org/parking_zone.php', 'JMB (Jorhat Municipal Board)', 'Parking Zones', '2016-02-02 07:47:00', '2016-02-02 07:47:00'),
(9, 'Meghalaya', 'http://smb.gov.in/acts.html', 'Shillong Municipal Board', 'Meghalaya Municipal Act', '2016-02-02 07:48:01', '2016-02-02 07:48:01'),
(10, 'Meghalaya', 'http://megpns.gov.in/gazette/2011/07/21-07-11-IIA.pdf', 'Shillong Municipal Board', 'Construction Bye-laws', '2016-02-02 07:48:40', '2016-02-02 07:48:40'),
(11, 'Meghalaya', 'http://smb.gov.in/acts.html', 'Shillong Municipal Board', 'Municipal Bye-laws', '2016-02-02 07:49:11', '2016-02-02 07:49:11'),
(12, 'Bangalore', 'http://bbmp.gov.in/en/web/guest/act/bye-laws', 'BBMP(Bruhat Bengaluru Mahanagara Palike)', 'Karnataka Municipal Acts and Rules', '2016-02-02 07:49:37', '2016-02-02 07:49:37'),
(13, 'Bangalore', 'http://bbmp.gov.in/en/web/guest/act/bye-laws', 'BBMP(Bruhat Bengaluru Mahanagara Palike)', 'Building Bye-laws', '2016-02-02 07:50:28', '2016-02-02 07:50:28'),
(14, 'Bangalore', 'http://bbmp.gov.in/en/web/guest/act/bye-laws', 'BBMP(Bruhat Bengaluru Mahanagara Palike)', 'The Karnataka Town and Country Planning Act', '2016-02-02 07:50:44', '2016-02-02 07:50:44'),
(15, 'Bangalore', 'http://bbmp.gov.in/documents/10180/504904/Zoning_Regulations_RMP2015f.pdf/0a916060-b198-4903-b7cd-d18db7096ebd', 'BBMP(Bruhat Bengaluru Mahanagara Palike)', 'Revised Master Plan 2015', '2016-02-02 07:51:03', '2016-02-02 07:51:03'),
(16, 'Bihar', 'http://urban.bih.nic.in/Acts/AR-02-08-12-2014.pdf', 'Urban Development and Housing Department', 'Bihar Building Bye-laws 2014', '2016-02-02 07:51:30', '2016-02-02 07:51:30'),
(17, 'Gangtok', 'http://sikkimudhd.org/building-construction-regulation.pdf', 'Urban Development and Housing Department', 'Building Construction Regulations-1991', '2016-02-02 07:52:00', '2016-02-02 07:52:00'),
(18, 'Jaipur', 'https://www.jaipurjda.org/pdf/MDP/Vol4.pdf', 'JDA(Jaipur Development Authority)', 'Development Promotion and Control Regulations (MDP-2025)', '2016-02-02 08:04:24', '2016-02-02 08:04:24'),
(19, 'Jaipur', 'https://www.jaipurjda.org/pdf/MDP/Vol3.pdf', 'JDA(Jaipur Development Authority)', 'Development Plans for Satellite Towns & growth Centers', '2016-02-02 08:04:48', '2016-02-02 08:04:48'),
(20, 'Dhanbad', 'http://www.jharkhand.gov.in/documents/10179/53951/Dhanbad%20Building%20Bye%20Laws', 'Urban Development Department, Govt. of Jharkhand', 'Building Bye-laws', '2016-02-06 08:23:16', '2016-02-06 08:23:16'),
(21, 'Dhanbad', 'http://www.jharkhand.gov.in/documents/10179/53951/Notifications%20regarding%20building%20bylaws%20and%20others%20related', 'Urban Development Department, Govt. of Jharkhand', 'Notification Regarding Building Bye-laws', '2016-02-06 08:37:24', '2016-02-06 08:37:24'),
(22, 'Latehar', 'http://www.jharkhand.gov.in/documents/10179/53951/Latehar%20Building%20Bye-Laws', 'Urban Development Department, Govt. of Jharkhand', 'Building Bye-laws', '2016-02-06 08:38:50', '2016-02-06 08:38:50'),
(23, 'Jamshedpur', 'http://www.jharkhand.gov.in/documents/10179/53951/Jamshedpur%20Planning%20Standards%20and%20Building%20Bye%20Laws%202006', 'Urban Development Department, Govt. of Jharkhand', 'Planning Standards and Building Bye-laws', '2016-02-06 08:40:02', '2016-02-06 08:40:02'),
(24, 'Ranchi', 'http://www.jharkhand.gov.in/documents/10179/53951/Building%20Bye-laws%202002%20and%20Amendment%202006', 'Urban Development Department, Govt. of Jharkhand', 'The Amendments in Ranchi Planning Standards and Building Bye-laws', '2016-02-06 08:45:03', '2016-02-06 08:45:03'),
(25, 'Dhanbad', 'http://www.jharkhand.gov.in/documents/10179/53951/Draft%20Building%20Bye-laws%20of%20Jharkhand%202015', 'Urban Development & Housing Department Government Of Jharkhand', 'Draft- Building Bye-laws of Jharkhand 2015', '2016-02-06 08:48:11', '2016-02-06 08:48:11'),
(26, 'Chennai', 'http://www.cmdachennai.gov.in/Volume2_English_PDF/DR-English.pdf', 'Chennai Metropolitan  Development Authority ', 'Second Master Plan for Chennai Metropolitan Aarea, 2026 ', '2016-02-09 12:27:18', '2016-02-09 12:27:18'),
(27, 'Chennai', 'http://www.cmdachennai.gov.in/pdfs/DCR.pdf', 'Chennai Metropolitan  Development Authority', 'Development Control Rules for Chennai Maetropolitan Area', '2016-02-09 12:28:17', '2016-02-09 12:28:17'),
(28, 'Haryana', 'https://www.huda.gov.in/Urban%20Branch%20I%20Residential%20and%20Commercial/Huda%20Policies%20and%20Instructions.pdf', 'HUDA (Haryana Urban Development Authority)', 'HUDA Policies and Instructions (A guide book by HUDA)', '2016-02-10 22:03:50', '2016-02-10 22:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `status_id` int(11) NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `status_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Thanx', '2016-01-20 16:29:09', '2016-01-20 16:29:09'),
(3, 1, 4, 'Hey', '2016-01-21 15:47:39', '2016-01-21 15:47:39'),
(4, 13, 2, 'Good Platform for builders', '2016-01-22 16:51:14', '2016-01-22 16:51:14'),
(5, 4, 8, 'Baat to sahi hai :D', '2016-01-23 11:23:56', '2016-01-23 11:23:56'),
(7, 5, 15, 'All we needed to know about Burj Khalifa, Dubai!', '2016-02-03 09:39:34', '2016-02-03 09:39:34'),
(8, 1, 19, 'Thanx Sir.. ', '2016-02-10 16:53:50', '2016-02-10 16:53:50'),
(10, 5, 20, 'A great watch indeed! :)', '2016-02-11 11:13:46', '2016-02-11 11:13:46'),
(11, 5, 19, 'We have mailed you on concretecare@gmail.com. ', '2016-02-16 09:12:03', '2016-02-16 09:12:03'),
(12, 3, 33, 'Thank you sir :)', '2016-03-13 03:07:16', '2016-03-13 03:07:16'),
(13, 5, 36, 'Great to see you here too . Hope we will together create an awesome community.', '2016-03-18 09:26:14', '2016-03-18 09:26:14'),
(14, 5, 37, 'Ups and downs for everyone. But it is a clear intention to promote housing in India.', '2016-03-18 14:10:36', '2016-03-18 14:10:36'),
(15, 1, 39, 'Thank you!  ', '2016-04-29 14:18:09', '2016-04-29 14:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE IF NOT EXISTS `connections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id_1` int(10) unsigned NOT NULL,
  `user_id_2` int(10) unsigned NOT NULL,
  `connection_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `connections_user_id_1_foreign` (`user_id_1`),
  KEY `connections_user_id_2_foreign` (`user_id_2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`id`, `user_id_1`, `user_id_2`, `connection_status`, `created_at`, `updated_at`) VALUES
(2, 4, 1, 1, '2016-01-20 18:44:48', '2016-01-21 15:45:33'),
(3, 5, 3, 1, '2016-01-21 07:48:04', '2016-01-21 22:42:27'),
(5, 6, 1, 1, '2016-01-21 09:15:38', '2016-01-21 15:45:19'),
(6, 6, 3, 1, '2016-01-21 09:16:16', '2016-01-21 22:42:35'),
(7, 6, 4, 1, '2016-01-21 09:17:27', '2016-01-21 09:48:36'),
(10, 5, 1, 1, '2016-01-21 15:32:22', '2016-01-21 15:45:39'),
(11, 9, 5, 1, '2016-01-21 18:51:20', '2016-03-14 10:17:24'),
(14, 15, 1, 1, '2016-01-23 06:32:23', '2016-01-23 16:13:39'),
(15, 5, 16, 0, '2016-01-23 11:08:11', '2016-01-23 11:08:11'),
(16, 4, 21, 0, '2016-01-24 17:39:22', '2016-01-24 17:39:22'),
(17, 5, 21, 0, '2016-01-24 19:29:47', '2016-01-24 19:29:47'),
(18, 5, 11, 0, '2016-01-24 19:31:03', '2016-01-24 19:31:03'),
(19, 5, 12, 0, '2016-01-24 19:31:39', '2016-01-24 19:31:39'),
(20, 5, 17, 0, '2016-01-24 19:32:36', '2016-01-24 19:32:36'),
(21, 5, 24, 0, '2016-01-26 08:22:01', '2016-01-26 08:22:01'),
(23, 5, 2, 0, '2016-01-26 09:54:44', '2016-01-26 09:54:44'),
(24, 5, 28, 0, '2016-02-02 07:18:15', '2016-02-02 07:18:15'),
(27, 5, 30, 0, '2016-02-10 18:25:14', '2016-02-10 18:25:14'),
(28, 4, 31, 1, '2016-02-10 19:09:01', '2016-02-10 19:09:35'),
(29, 3, 15, 0, '2016-02-11 06:43:39', '2016-02-11 06:43:39'),
(30, 5, 33, 0, '2016-02-12 06:48:09', '2016-02-12 06:48:09'),
(32, 42, 3, 1, '2016-02-17 10:44:55', '2016-02-17 18:12:19'),
(33, 5, 42, 0, '2016-02-18 08:36:41', '2016-02-18 08:36:41'),
(34, 5, 48, 0, '2016-02-27 09:42:21', '2016-02-27 09:42:21'),
(35, 3, 59, 0, '2016-03-07 06:14:26', '2016-03-07 06:14:26'),
(36, 5, 62, 0, '2016-03-14 08:24:02', '2016-03-14 08:24:02'),
(38, 3, 1, 1, '2016-03-14 08:40:07', '2016-03-15 17:07:15'),
(40, 72, 4, 1, '2016-03-17 12:51:15', '2016-03-18 09:26:11'),
(41, 5, 69, 0, '2016-03-18 09:23:10', '2016-03-18 09:23:10'),
(42, 5, 68, 0, '2016-03-18 09:25:25', '2016-03-18 09:25:25'),
(43, 68, 4, 1, '2016-03-18 10:15:23', '2016-03-18 10:52:48'),
(44, 5, 4, 1, '2016-03-18 11:57:57', '2016-03-18 11:59:56'),
(45, 1, 75, 0, '2016-03-28 06:03:48', '2016-03-28 06:03:48'),
(46, 4, 42, 0, '2016-03-28 16:00:02', '2016-03-28 16:00:02'),
(47, 4, 33, 0, '2016-03-28 16:00:07', '2016-03-28 16:00:07'),
(48, 4, 48, 0, '2016-03-28 16:00:16', '2016-03-28 16:00:16'),
(49, 4, 66, 0, '2016-03-28 16:00:37', '2016-03-28 16:00:37'),
(51, 4, 79, 1, '2016-04-19 22:22:51', '2016-04-19 22:32:40'),
(52, 80, 4, 0, '2016-04-24 04:05:21', '2016-04-24 04:05:21'),
(53, 80, 31, 0, '2016-04-24 04:10:05', '2016-04-24 04:10:05'),
(54, 80, 6, 0, '2016-04-24 04:10:22', '2016-04-24 04:10:22'),
(56, 80, 68, 0, '2016-04-24 04:10:38', '2016-04-24 04:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Aditi Arya ', 'aditiaryaid@gmail.com', '', '2016-02-10 17:38:32', '2016-02-10 17:38:32'),
(2, 'dfg', 'fbsd', 'dfg', '2016-02-10 19:56:10', '2016-02-10 19:56:10'),
(3, 'SHAJID MUSTAKIM', 'squbem2015@gmail.com', 'sir,i am seting up a construction company in a very low budget i am from guwahati but presently in bangalore and i want my company should work for private as well as government contract so i want to know that how u people can help me out ???\r\n', '2016-02-12 18:02:37', '2016-02-12 18:02:37'),
(4, 'Arjun Kumar', 'aku2003@outlook.com', 'Hello Site Owner, If you''re looking to re-design your website please call me- 9560316581- Arjun Kumar (DesignerArjun.com)', '2016-02-17 14:25:31', '2016-02-17 14:25:31'),
(5, 'Murugaraj', 'murugaraj15@gmail.com', 'Hi there,\r\n\r\n I''m freelancer,   My name is "Murugaraj" Business Development Manager,\r\n\r\n"RB Technologies (India) Pvt. Ltd.," is a Leading Best Web development and Original SEO Services Company (100% Customer Satisfaction GUARANTEED & Quick Responded!). My development team is Excellent Communication & Creativity Knowledge person handle the you''re Business development Project. We''re a World like 40+ Country''s handle between SUCCESSFULLY Run. You''re all Request solved my development team. We will completed you''re task is very Quickly! and then BEST OFFER Provided in my Company!!!.\r\n                                                                                                            \r\nWe Primary Focus On:-We''re Services is,\r\n     \r\n\r\n     ·   Website Re-design Development\r\n     ·   E-commerce website Solution\r\n     ·   Web Development\r\n     ·   Joomla Development\r\n     ·   WordPress Development\r\n     ·   Magento Development\r\n     ·   iPhone App Development\r\n     ·   Android App Development \r\n     ·   Phone Gap Development\r\n     ·   Window App Development\r\n     .   Graphic Design and development / Business Website.  \r\n     ·   Certified PPC Executive\r\n     .   Product Sales and Internet Marketing Services\r\n     ·   SEO,SMO,SEM,SMM,PPC,Classified Ads Post, Google Adwords, Back Links, Link Building, Internet Marketing etc\r\n     .   Facebook likes 100k+, Twitter Followers 100k+, YouTube Views & Likes 100k+ etc. Provided now!! \r\n     .   Web 2.0 Blog Creation (Bog Posting Good PR)\r\n     .   Blog Comment''s (PR2 - PR9)\r\n     .   etc.\r\n\r\n\r\n (SMM) Social Media Marketing Mega Offer!\r\n\r\n\r\nFacebook Like:\r\nFacebook 1000 Like               $35   [1-3 days ]    HQ\r\nFacebook 5,000 Like              $130  [3-5 days ]    HQ\r\nFacebook 10,000 Like            $220   [4-6 days ]    HQ\r\nFacebook 100K Like              $999   [15-20 days]   HQ\r\n\r\nFacebook Post Image & Videos Like:\r\n\r\nFacebook Post Image and Videos 2,000 Like    $10   [1-3 days ]\r\nFacebook Post Image and Videos 5,000 Like    $25   [2-4 days ]\r\nFacebook Post Image and Videos 15,000 Like   $70   [3-5 days ]\r\nFacebook Post Image and Videos 50,000 Like   $230  [5-7 days ]\r\n\r\n\r\nTwitter Followers :\r\nTwitter 1000 Followers            $30   [1-3 days ]    HQ\r\nTwitter 5,000 Followers           $140  [4-6 days ]    HQ\r\nTwitter 10,000 Followers          $230  [5-7 days ]   HQ\r\nTwitter 100K Followers            $680  [8-15 days]    HQ\r\n\r\nYouTube Views :\r\nYouTube 1000 Views               $45     [1-3 days ]  \r\nYouTube 5,000 Views              $130    [2-5 days ] \r\nYouTube 10,000 Views             $330    [6-10 days] \r\nYouTube 100K Views               $699    [15-20 days]\r\n\r\nGoogle +:\r\n1000 Google + Followers           $25     [1-3 days ]\r\n5,000 Google + Followers          $110   [3-5 days  ]\r\n10,000 Google + Followers         $200   [7-10 days ]\r\n100K Google + Followers           $780   [15-25 days]\r\n\r\nInstagram:\r\nInstagram 1,000 Followers        $25     [1-2 days]\r\nInstagram 5,000 Followers        $110   [2-4 days ]\r\nInstagram 10,000 Followers       $200   [2-5 days ]\r\nInstagram 100K Followers         $799   [10-15 days]\r\n\r\netc.\r\n\r\n\r\nCompany Information & Detail''s:-\r\n\r\nCompany  -  RB Technologies India (P) Ltd., (IT Company)\r\nWebsite  -  www.rbtechseo.com\r\nLocation - India\r\nMobile   - +91 9488015440 /Office: 04368-230340\r\nE-mail   - murugaraj15@gmail.com\r\nSkype    - live:rbtechnologies_india\r\n\r\nKindly reply please,    More Price Info. See>>>http://rbtechseo.blogspot.in/', '2016-02-17 14:27:31', '2016-02-17 14:27:31'),
(6, 'stephtuosf', 'stephane_granath60@rambler.ru', 'Hi http://www.buildblockz.com your discount code: jw2ddXeWLu8iBN \r\n \r\nForms are sent by contacts on the website of the organization in any country of the world in any language.  \r\n \r\nCan order the test for $10 (send 10 thousand messages), then the Supplement, and continue on... \r\nBesides distribution, you can buy these base prices below. \r\nFrom sent out by the base removed and the official sites of the countries hosting sites. \r\nAlso you can buy the base hosting sites and official sites anywhere in the world. \r\nP.S. \r\nPlease Do not respond to it offer from its e-mail box, as it is created automatically and will not come to us! \r\nMailbox for communication: contact-forma@seznam.cz \r\n \r\nPprice-list 351  domains: \r\n \r\n.us 3139563 sites United States of America - $200 \r\n.us 578927  sites International zone United States of America:.com .net .biz .info .name .tel .mobi .asia .xxx, and so on - $50 \r\n.mx 609278  sites United Mexican States- $80 \r\n.mx 86593 sites International zone Mexico:.com .net .biz .info .name .tel .mobi .asia .xxx, and so on -$50 \r\n.at 1356722 sites Republic of Austria - $100 \r\n.at 181907 sites International zone Republic of Austria:.com .net .biz .info .name .tel .mobi .asia .xxx, and so on -$50 \r\n.ca 2587463  sites Canada- $150 \r\n.ca 288395 sites International zone Canada:.com .net .biz .info .name .tel .mobi .asia .xxx, and so on -$50 \r\n.ar 551804  sites Argentina - $80 \r\n.ar 551804  sites Argentina - $80 \r\n.at 1356722  sites Austria - $100 \r\n.br 2367290  sites Brazil - $150 \r\n.au 243748  sites AUS - $80 \r\n.be 1349658  sites Belgium - $100 \r\n.ch 1471685  sites Swiss Confederation - $100 \r\n.cl 302082  sites Republic Of Chile - $80 \r\n.cn 5970231  sites People''s Republic of China - $250 \r\n.cn 1372416  sites International zone China:.com .net .biz .info .name .tel .mobi .asia .xxx, and so on -$100 \r\n.co 1577728  sites Republic of Colombia  - $100 \r\n.cz 900208  sites Czech Republic - $80 \r\n.de 12224071  sites Federal Republic of Germany - $400 \r\n.dk 1320155  sites Denmark - $100 \r\n.es 1685048  sites Spain - $100 \r\n.eu 3321576  sites European Union - $150 \r\n.fr 2298045  sites France - $150 \r\n.gr 356168  sites Hellenic republic - $80 \r\n.il 224167  sites Israel - $80 \r\n.io 149698  sites Brittish Indian Ocean - $50 \r\n.it 2255831  sites Italian Republic - $150 \r\n.jp 1126243  sites JPN - $100 \r\n.kz 101069  sites Kazakhstan - $50 \r\n.ua 286782  sites UKR - $80 \r\n.ma 48825  sites Kingdom of Morocco - $50 \r\n.nl 2980711  sites Netherlands - $150 \r\n.my 283349  sites MYS- $80 \r\n.no 579185  sites Norway - $80 \r\n.nz 537127  sites New Zealand - $80 \r\n.pt 225136  sites Portuguese Republic - $80 \r\n.pl 1675325  sites Republic of Poland - $100 \r\n.se 112544  sites Sweden - $50 \r\n.ro 430554  sites ROU - $80 \r\n.rs 75503  sites Republic of Serbia - $50 \r\n.sg 164351  sites Republic Of Singapore - $50 \r\n.tk 15634253  sites Tokelau Union - $450 \r\n.za 803189  sites Republic of South Africa - $80 \r\n.tr 317690  sites Turkey - $80 \r\n.tw 89857  sites Taiwan - $50 \r\n.tv 512500  sites Tuvalu - $80 \r\n.uk 2679335  sites Great Britain- $150 \r\n.ee 78161  sites Republic Of Estonia- $50 \r\n.asia 228418  sites - $80 \r\n.рф (.xn--p1ai) 869759  sites Russian Federation - $80 \r\n.com.ru, .net.ru, .org.ru, .spb.ru, .msk.ru  78068  sites Russia - $50 \r\n.su 125358  sites Russia - $50 \r\n.ru 5075935  sites Russian Federation - $250 \r\n.attorney 8224  sites attorneys and legal organizations- $50 \r\n.audio 23052  sites stereo/sound systems, music- $50 \r\n.az 11103  sites Azerbaijan Republic - $50 \r\n.band 7390  sites - $50 \r\n.bayern 29871  sites - $50 \r\n.beer 11834  sites beer aficionados and breweries - $50 \r\n.berlin 58088  sites Berlin, Germany- $50 \r\n.bg 13251  sites Bulgaria - $50 \r\n.bi 1567  sites Republic Of Burundi- $50 \r\n.bid 107425  sites - $50 \r\n.bike 13714  sites - $50 \r\n.bio 12702  sites biographies, biodiversity- $50 \r\n.black 6582  sites - $50 \r\n.blackfriday 12106  sites - $50 \r\n.blue 16852  sites - $50 \r\n.bm 8093  sites Bermuda - $50 \r\n.boutique 7523  sites - $50 \r\n.brussels 6114  sites - $50 \r\n.business 10803  sites - $50 \r\n.buzz 9367  sites - $50 \r\n.by 24342  sites Belarus - $50 \r\n.bzh 5303  sites - $50 \r\n.cafe 5150  sites - $50 \r\n.camera 5236  sites - $50 \r\n.camp 5530  sites - $50 \r\n.cards 5067  sites - $50 \r\n.care 10766  sites - $50 \r\n.careers 6799  sites - $50 \r\n.casa 18918  sites - $50 \r\n.cat 66000  sites - $50 \r\n.cc 46723  sites  Cocos Islands- $50 \r\n.center 29966  sites - $50 \r\n.chat 7324  sites - $50 \r\n.christmas 15255  sites - $50 \r\n.church 12541  sites - $50 \r\n.ci 5664  sites Cote d''Ivoire- $50 \r\n.city 16679  sites - $50 \r\n.click 181015  sites - $50 \r\n.clothing 13639  sites - $50 \r\n.club 564417  sites - $80 \r\n.cm 12002  sites Republic Of Cameroon- $50 \r\n.coach 5836  sites travel flights and motor coaches- $50 \r\n.coffee 10097  sites - $50 \r\n.cologne 5037  sites - $50 \r\n.com.cy 11092  sites - $50 \r\n.com.ni 23747  sites - $50 \r\n.com.np 32828  sites - $50 \r\n.community 8656  sites - $50 \r\n.company 42783  sites - $50 \r\n.construction 6404  sites - $50 \r\n.consulting 15520  sites - $50 \r\n.cool 10766  sites - $50 \r\n.coop 7500  sites - $50 \r\n.coop 7879  sites - $50 \r\n.country 7144  sites - $50 \r\n.cricket 33413  sites - $50 \r\n.cymru 5482  sites - $50 \r\n.date 116437  sites - $50 \r\n.deals 7532  sites - $50 \r\n.dental 5661  sites - $50 \r\n.design 23876  sites - $50 \r\n.diet 18291  sites - $50 \r\n.digital 12478  sites - $50 \r\n.direct 7942  sites - $50 \r\n.directory 18963  sites - $50 \r\n.do 5265  sites Dominican Republic- $50 \r\n.domains 7127  sites - $50 \r\n.download 25656  sites - $50 \r\n.edu.np 4183  sites higher education - $50 \r\n.education 17243  sites - $50 \r\n.email 53422  sites - $50 \r\n.enterprises 5053  sites - $50 \r\n.equipment 6898  sites - $50 \r\n.estate 10245  sites - $50 \r\n.events 15887  sites - $50 \r\n.expert 26846  sites - $50 \r\n.faith 39757  sites - $50 \r\n.farm 7902  sites - $50 \r\n.fashion 9313  sites - $50 \r\n.fi 116327  sites Finland - $50 \r\n.fit 7047  sites - $50 \r\n.fitness 6973  sites - $50 \r\n.flowers 25590  sites - $50 \r\n.fo 3104  sites Faroe Islands - $50 \r\n.forsale 7446  sites - $50 \r\n.foundation 6241  sites - $50 \r\n.frl 12840  sites - $50 \r\n.gallery 16903  sites - $50 \r\n.gd 4248  sites - $50 \r\n.ge 17360  sites - $50 \r\n.gift 12281  sites - $50 \r\n.global 20196  sites - $50 \r\n.gov.np 1677 sites national and state government agencies- $50 \r\n.graphics 7855  sites - $50 \r\n.gt 15251  sites - $50 \r\n.guide 12044  sites - $50 \r\n.guru 65588  sites - $50 \r\n.gy 2667  sites - $50 \r\n.hamburg 22985  sites - $50 \r\n.healthcare 6183  sites - $50 \r\n.help 34800  sites - $50 \r\n.hiphop 7264  sites - $50 \r\n.hk 116193  sites - $50 \r\n.hk 44398  sites - $50 \r\n.hn 4742  sites - $50 \r\n.holdings 5212  sites - $50 \r\n.holiday 5217  sites - $50 \r\n.host 5730  sites - $50 \r\n.hosting 15132  sites - $50 \r\n.house 13832  sites - $50 \r\n.hr 33575  sites - $50 \r\n.hu 618632  sites - $80 \r\n.id 24222  sites - $50 \r\n.ie 196000  sites - $50 \r\n.immo 10768  sites - $50 \r\n.immobilien 7794  sites - $50 \r\n.in 1143582  sites India - $100 \r\n.ink 8825  sites - $50 \r\n.institute 7311  sites - $50 \r\n.international 1828  sites international entities - $50 \r\n.ir 427835  sites Islamic Republic Of Iran- $80 \r\n.is 14876  sites Republic Of Iceland - $50 \r\n.jobs 89950  sites Employment- $50 \r\n.kaufen 9134  sites - $50 \r\n.kg 8929  sites Kyrgyz Republic - $50 \r\n.kim 36637  sites people named Kim- $50 \r\n.kitchen 5822  sites - $50 \r\n.kiwi 9972  sites - $50 \r\n.koeln 23485  sites - $50 \r\n.kr 205547  sites Korea- $50 \r\n.la 32000  sites Lao People''s Democratic Republic - $50 \r\n.land 14274  sites real estate- $50 \r\n.lawyer 12830  sites legal organizations and lawyers - $50 \r\n.legal 7022  sites lawyers and legal organizations- $50 \r\n.life 29931  sites - $50 \r\n.lighting 5876  sites - $50 \r\n.link 209593  sites - $50 \r\n.live 13848  sites - $50 \r\n.loan 148407  sites banks and lenders- $50 \r\n.lol 59470  sites laughing out loud- $50 \r\n.london 60443  sites London, Great Britain- $50 \r\n.love 15287  sites dating sites- $50 \r\n.lt 51083  sites Lithuania- $50 \r\n.lu 14194  sites Grand Duchy Of Luxembourg - $50 \r\n.lv 32886  sites Latvia- $50 \r\n.management 9288 sites business management - $50 \r\n.market 8350  sites marketing services and retailers- $50 \r\n.marketing 14262  sites marketing services- $50 \r\n.mc 2700  sites Principality Of Monaco - $50 \r\n.md 10425  sites Moldova - $50 \r\n.me 761696  sites Montenegro - $80 \r\n.media 22231  sites general media interests - $50 \r\n.melbourne 8252  sites - $50 \r\n.menu 6512  sites restaurants- $50 \r\n.mg 3330  sites Madagascar- $50 \r\n.miami 13231  sitesMiami, United States of America - $50 \r\n.mobi 688419  sites mobile devices - $80 \r\n.money 5228  sites financial- $50 \r\n.moscow 22067  sites Moscow Russia- $50 \r\n.mw 1744  sites Malawi - $50 \r\n.name 130818  sites individuals, by name - $50 \r\n.network 13837  sites - $50 \r\n.news 59662  sites news sites- $50 \r\n.ninja 49007  sites - $50 \r\n.nrw 9596  sites - $50 \r\n.nu 39710  sites Niue- $50 \r\n.nyc 73153  sites - $50 \r\n.one 47863  sites - $50 \r\n.online 135973  sites - $50 \r\n.ooo 13427  sites - $50 \r\n.org.np 6317  sites - $50 \r\n.org.ua 41372  sites - $50 \r\n.ovh 39855  sites - $50 \r\n.paris 19783  sites - $50 \r\n.party 222578  sites nightclubs and social gatherings- $50 \r\n.pe 16586  sites Republic Of Peru - $50 \r\n.pg 1829  sites Papua New Guinea - $50 \r\n.ph 17960  sites Republic Of The Philippines - $50 \r\n.photo 22865  sites photo-sharing and photography - $50 \r\n.photography 50934  sites photo-sharing and photography- $50 \r\n.photos 18750  sites photography and photo-sharing- $50 \r\n.pics 29821  sites photography and photo-sharing- $50 \r\n.pictures 6207  sites photo-sharing and photography- $50 \r\n.pink 14373  sites those who like the color pink- $50 \r\n.pk 44474  sites Pakistan - $50 \r\n.porn 13023  sites pornography - $50 \r\n.press 8736  sites - $50 \r\n.pro 118600  sites professions- $50 \r\n.properties 10475  sites - $50 \r\n.property 41366  sites - $50 \r\n.pub 42703  sites - $50 \r\n.quebec 10402  sites - $50 \r\n.racing 27001  sites - $50 \r\n.realtor 73465  sites - $50 \r\n.red 71773  sites - $50 \r\n.ren 237303  sites - $50 \r\n.rentals 10823  sites short-term ownership - $50 \r\n.repair 6228  sites general repair/maintenance businesses- $50 \r\n.restaurant 5299  sites - $50 \r\n.review 65390  sites public reviews- $50 \r\n.reviews 16732  sites public reviews- $50 \r\n.rocks 57908  sites - $50 \r\n.ru.com  6500  sites Russian Federation - $50 \r\n.ruhr 11118  sites - $50 \r\n.sa 8605  sites Saudi Arabia- $50 \r\n.sale 7850  sites - $50 \r\n.sc 5318  sites Seychelles- $50 \r\n.school 5812  sites - $50 \r\n.science 337115  sites - $80 \r\n.scot 10675  sites - $50 \r\n.services 20796  sites - $50 \r\n.sex 8655  sites - $50 \r\n.sexy 22260  sites - $50 \r\n.shoes 5597  sites - $50 \r\n.si 39753  sites Republic Of Slovenia- $50 \r\n.singles 5559  sites - $50 \r\n.site 86601  sites - $50 \r\n.sk 347101  sites Slovakia- $80 \r\n.ski 6771  sites - $50 \r\n.social 15208  sites - $50 \r\n.software 9450  sites - $50 \r\n.solar 6067  sites - $50 \r\n.solutions 43143  sites - $50 \r\n.space 112426  sites - $50 \r\n.studio 5101  sites - $50 \r\n.sucks 7083  sites - $50 \r\n.support 15577  sites - $50 \r\n.sv 7878  sites El Salvador- $50 \r\n.swiss 6300  sites - $50 \r\n.sydney 7837  sites - $50 \r\n.systems 17893  sites - $50 \r\n.tattoo 7554  sites tattoo aficionados- $50 \r\n.tc 16394  sites Turks and Caicos Islands- $50 \r\n.team 5128  sites team sports- $50 \r\n.tech 27200  sites - $50 \r\n.technology 23981 sites technology- $50 \r\n.tel 116752  sites Internet communication services- $50 \r\n.th 23968  sites Kingdom Of Thailand- $50 \r\n.tips 34287  sites general help topics- $50 \r\n.tj 6504  sites Republic Of Tajikistan- $50 \r\n.to 16327  sites Kingdom Of Tonga- $50 \r\n.today 47996  sites - $50 \r\n.tokyo 45233  sites - $50 \r\n.tools 6469  sites manufacturing industries - $50 \r\n.top 1031307  sites - $100 \r\n.trade 23418  sites businesses- $50 \r\n.training 15992  sites training and how-tos - $50 \r\n.travel 18000  sites travel and tourism industry related- $50 \r\n.uno 19394  sites - $50 \r\n.uy 12673  sites Eastern Republic Of Uruguay- $50 \r\n.ve 14018  sites Bolivarian Republic Of Venezuela - $50 \r\n.vegas 12948  sites Las Vegas Nevada USA - $50 \r\n.ventures 7366  sites - $50 \r\n.vg 8393  sites VGB- $50 \r\n.video 11804  sites video sharing- $50 \r\n.vlaanderen 6262  sites - $50 \r\n.vn 76661  sites Socialist Republic Of Vietnam- $50 \r\n.wales 11463  sites - $50 \r\n.wang 629622  sites - $80 \r\n.watch 5080  sites Watches - $50 \r\n.webcam 71942  sites web cam shows and video sharing- $50 \r\n.website 122048  sites - $50 \r\n.wedding 6864  sites wedding-oriented businesses - $50 \r\n.wien 13064  sites - $50 \r\n.wiki 14629  sites wikis - $50 \r\n.win 591324  sites - $50 \r\n.work 95686  sites - $50 \r\n.works 8712  sites - $50 \r\n.world 26145  sites - $50 \r\n.ws 36610  sites Independent State Of Samoa- $50 \r\n.wtf 6848  sites - $50 \r\n.xin 58102  sites - $50 \r\n.xn--3ds443g 35898  sites - $50 \r\n.xn--55qx5d 48356  sites - $50 \r\n.xn--6qq986b3xl 22488  sites - $50 \r\n.xn--czru2d 11620  sites - $50 \r\n.xn--fiq228c5hs 17945  sites - $50 \r\n.xn--io0a7i 31399  sites - $50 \r\n.xn--j6w193g 31776  sites - $50 \r\n.xn--kput3i 19501  sites - $50 \r\n.xn--mgberp4a5d4ar 2536  sites - $50 \r\n.xn--rhqv96g 7723  sites - $50 \r\n.xn--ses554g 344539  sites - $80 \r\n.xxx 119879  sites adult entertainment- $50 \r\n.xyz 1790370  sites - $50 \r\n.yoga 7093  sites - $50 \r\n.zone 14029  sites - $50 \r\n.москва (.xn--80adxhks) 19582  sites Moscow Russian Federation - $50 \r\n.укр (.xn--j1amh) 10563  sites UKR - $50 \r\n.academy 21046  sites academic institutes- $50 \r\n.accountant 15675 sites accountants and accounting firms - $50 \r\n.adult 10540  sites adult entertainment - $50 \r\n.ae 13405  sites UAE - $50 \r\n.aero  18325  sites air-transport industry - $50 \r\n.agency 25318  sites business associations - $50 \r\n.am 9025  sites Armenia- $50 \r\n.amsterdam 26141  sites Amsterdam, Netherlands - $50 \r\n.com 124228147  sites commercial - $1950 \r\n.net 15689222  sites network - $450 \r\n.org 10922428  sites organization - $350 \r\n.info 5454638  sites information - $250 \r\n.biz 2361884  sites business - $150', '2016-03-26 23:24:12', '2016-03-26 23:24:12'),
(7, 'Keyboardqc', 's.a.mst.on.e.ha.i.r@gmail.com ', 'Do you suffer from hair loss? \r\n \r\nFinally Hair fibers fill in your thin areas instantly.  Looks completely natural.  Even your hair stylist won''t know.   Tens of thousands of people are using it.  One hair surgeon called it an instant 2 minute hair transplant in a bottle. \r\n \r\nWatch this youtube video: http://youtu.be/-zp2LQ95HYM \r\n \r\nComes in 20 colors to suit all hair colors and all hair types. \r\n \r\nDon''t wait, its on sale now for under $20! \r\n \r\nAvailable on Amazon: http://www.amazon.com/Hair-28g-Bottle-Finally-Concealer/dp/B00VDEREDS/ref=sr_1_9_s_it?s=beauty&ie=UTF8&qid=1460821063&sr=1-9&keywords=finally+hair \r\n \r\nAvailable on eBay: http://stores.ebay.com/Finally-Hair', '2016-04-21 16:06:56', '2016-04-21 16:06:56'),
(8, 'Keyboardqc', 's.am.s.toneha.i.r@gmail.com ', 'Do you suffer from hair loss? \r\n \r\nFinally Hair fibers fill in your thin areas instantly.  Looks completely natural.  Even your hair stylist won''t know.   Tens of thousands of people are using it.  One hair surgeon called it an instant 2 minute hair transplant in a bottle. \r\n \r\nWatch this youtube video: http://youtu.be/-zp2LQ95HYM \r\n \r\nComes in 20 colors to suit all hair colors and all hair types. \r\n \r\nDon''t wait, its on sale now for under $20! \r\n \r\nAvailable on Amazon: http://www.amazon.com/Hair-28g-Bottle-Finally-Concealer/dp/B00VDEREDS/ref=sr_1_9_s_it?s=beauty&ie=UTF8&qid=1460821063&sr=1-9&keywords=finally+hair \r\n \r\nAvailable on eBay: http://stores.ebay.com/Finally-Hair', '2016-04-21 16:06:57', '2016-04-21 16:06:57'),
(9, 'Keyboardqc', 's.am.st.o.neh.a.ir@gmail.com ', 'Do you suffer from hair loss? \r\n \r\nFinally Hair fibers fill in your thin areas instantly.  Looks completely natural.  Even your hair stylist won''t know.   Tens of thousands of people are using it.  One hair surgeon called it an instant 2 minute hair transplant in a bottle. \r\n \r\nWatch this youtube video: http://youtu.be/-zp2LQ95HYM \r\n \r\nComes in 20 colors to suit all hair colors and all hair types. \r\n \r\nDon''t wait, its on sale now for under $20! \r\n \r\nAvailable on Amazon: http://www.amazon.com/Hair-28g-Bottle-Finally-Concealer/dp/B00VDEREDS/ref=sr_1_9_s_it?s=beauty&ie=UTF8&qid=1460821063&sr=1-9&keywords=finally+hair \r\n \r\nAvailable on eBay: http://stores.ebay.com/Finally-Hair', '2016-04-21 16:07:03', '2016-04-21 16:07:03'),
(10, 'Keyboardqc', 's.amsto.n.eh.air@gmail.com ', 'Do you suffer from hair loss? \r\n \r\nFinally Hair fibers fill in your thin areas instantly.  Looks completely natural.  Even your hair stylist won''t know.   Tens of thousands of people are using it.  One hair surgeon called it an instant 2 minute hair transplant in a bottle. \r\n \r\nWatch this youtube video: http://youtu.be/-zp2LQ95HYM \r\n \r\nComes in 20 colors to suit all hair colors and all hair types. \r\n \r\nDon''t wait, its on sale now for under $20! \r\n \r\nAvailable on Amazon: http://www.amazon.com/Hair-28g-Bottle-Finally-Concealer/dp/B00VDEREDS/ref=sr_1_9_s_it?s=beauty&ie=UTF8&qid=1460821063&sr=1-9&keywords=finally+hair \r\n \r\nAvailable on eBay: http://stores.ebay.com/Finally-Hair', '2016-04-21 16:07:05', '2016-04-21 16:07:05'),
(11, 'Keyboardqc', 's.a.msto.n.eh.air@gmail.com ', 'Do you suffer from hair loss? \r\n \r\nFinally Hair fibers fill in your thin areas instantly.  Looks completely natural.  Even your hair stylist won''t know.   Tens of thousands of people are using it.  One hair surgeon called it an instant 2 minute hair transplant in a bottle. \r\n \r\nWatch this youtube video: http://youtu.be/-zp2LQ95HYM \r\n \r\nComes in 20 colors to suit all hair colors and all hair types. \r\n \r\nDon''t wait, its on sale now for under $20! \r\n \r\nAvailable on Amazon: http://www.amazon.com/Hair-28g-Bottle-Finally-Concealer/dp/B00VDEREDS/ref=sr_1_9_s_it?s=beauty&ie=UTF8&qid=1460821063&sr=1-9&keywords=finally+hair \r\n \r\nAvailable on eBay: http://stores.ebay.com/Finally-Hair', '2016-04-21 16:07:06', '2016-04-21 16:07:06'),
(12, 'Dhrubajyoti Patowary', 'patowarydhrubajyoti391@gmail.com', 'I have recently started a civil engineering design firm along with two of my friends. I want to get projects(small/big) to start with.', '2016-04-21 16:29:25', '2016-04-21 16:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE IF NOT EXISTS `designations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `designations_designation_unique` (`designation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`) VALUES
(1, 'Architect'),
(2, 'Builder'),
(4, 'Civil Engineer'),
(5, 'Construction Manager'),
(3, 'Contractor'),
(6, 'Field Engineer'),
(7, 'Interior Designer'),
(8, 'Project Assistant'),
(9, 'Project Manager'),
(10, 'Site Manager'),
(11, 'Structural Engineer'),
(12, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `school` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finish_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finish_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experience` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `educations_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `school`, `start_month`, `start_year`, `finish_month`, `finish_year`, `degree`, `branch`, `grade`, `experience`, `description`, `created_at`, `updated_at`) VALUES
(1, 3, 'IIT GUWAHATI', '6', '2013', '', '', 'BTECH', 'CSE', '', '', '', '2016-01-20 17:42:17', '2016-01-20 17:44:30'),
(2, 3, 'Sathaye College Mumbai', '7', '2010', '4', '2012', 'Higher Secondary', 'Maths and Biology', '', '', '', '2016-01-20 17:43:58', '2016-01-20 17:43:58'),
(3, 4, 'Architectural College', '5', '2012', '5', '2015', 'B. Arch', 'Studio designing', '8.56/10', 'esign & Development, led by me is an independent firm of designers, planners, engineers, consultants and technical specialists offering a broad range of professional services. The International Trade Centre, Tourism Projects, Hotel Projects, Auditorium, Hostel Buildings, Religious Building, Industrial Projects, IT Parks, Interior Designing, Master Planning etc.', 'Excellent service & designs, helpful support staff', '2016-01-20 18:51:14', '2016-01-23 11:21:53'),
(4, 4, 'St Michael''s High School, Patna', '10', '2008', '6', '2012', 'Senior Secondary ', 'Science ', '12th', '', '', '2016-01-20 18:52:40', '2016-01-20 18:52:40'),
(5, 21, 'guwahati college of architecture', '7', '2008', '6', '2013', 'b.arch', 'architecture', '', '', '', '2016-01-24 10:17:40', '2016-01-24 10:17:40'),
(6, 24, 'IIT Guwahati', '7', '2011', '4', '2015', 'B.Tech', 'ECE', '8.02', '8 months as a B.A', '--', '2016-01-26 07:22:30', '2016-01-26 07:26:19'),
(7, 1, 'IIT Guwahati', '7', '2013', '5', '2017', 'B.tech', 'C.S.E.', '', '', '', '2016-01-26 08:23:01', '2016-01-26 08:23:01'),
(8, 5, 'IIT Guwahati', '7', '2011', '4', '2015', '  B.Tech.,', 'Mechanical Engineering', ' 7.48', '', '', '2016-02-02 07:57:46', '2016-02-10 10:51:18'),
(9, 30, 'IIT Guwahati', '7', '2006', '5', '2010', 'B.Tech', 'Civil Engineering', '', '', '', '2016-02-10 16:15:19', '2016-02-10 16:16:05'),
(10, 42, 'Assam Engineering College', '8', '1995', '12', '1999', 'B. Tech', 'Mechanical', 'First Class', '', '', '2016-02-17 10:43:04', '2016-02-17 10:43:04'),
(11, 48, 'J D Institute of fashion technology', '1', '2007', '12', '2010', 'B.sc', 'Guwahati', 'B', '', '', '2016-02-25 12:46:28', '2016-02-25 12:46:28'),
(12, 52, 'Jadavpur University', '8', '2010', '6', '2012', 'M.Arch', 'Urban Design', '', '', '', '2016-03-02 07:25:40', '2016-03-02 07:25:40'),
(13, 53, 'Nagpur University, Maharashtra', '5', '2006', '5', '2011', 'B.Arch', 'Architecture', 'First Division', 'Four (04) years', '', '2016-03-02 10:35:55', '2016-03-02 10:38:10'),
(14, 53, 'Sardar Patel University, Gujarat', '5', '2013', '4', '2015', 'Master of Urban Planning', 'Urban Planning', 'First ', 'One (01) year', '', '2016-03-02 10:37:13', '2016-03-02 10:37:13'),
(15, 62, 'Guwahati College of Architecture,Gauhati University,Guwahati,Assam.', '7', '2007', '7', '2012', 'B.Arch', 'Architecture', '1st Class', '', '', '2016-03-12 09:13:56', '2016-03-12 09:14:45'),
(16, 63, 'Guwahati College of Architecture,Gauhati University,Guwahati,Assam.', '7', '2010', '7', '2015', 'B.Arch.', 'Architecture', '1st Class.', '', '', '2016-03-12 09:23:08', '2016-03-12 09:23:08'),
(17, 80, 'Assam Engineering College', '8', '2010', '7', '2014', 'B.E', 'Civil Engineering', '1st Class', '', '', '2016-04-24 04:20:03', '2016-04-24 04:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_month` int(11) NOT NULL,
  `start_year` int(11) NOT NULL,
  `finish_month` int(11) NOT NULL,
  `finish_year` int(11) NOT NULL,
  `working` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `experiences_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `company_name`, `title`, `location`, `start_month`, `start_year`, `finish_month`, `finish_year`, `working`, `description`, `created_at`, `updated_at`) VALUES
(1, 4, 'SLA Designs', 'Chief Architect', 'Patna Region', 11, 2015, 1, 0, 1, 'But for a number of reasons, it was decided not to bring the carbon-fibre structure to Mumbai.  The brief given by the Guggenheim to the architects was "to create a non-iconic building".', '2016-01-20 18:54:36', '2016-01-20 18:54:36'),
(2, 5, 'Buildblocks Consultancy Private Limited', 'CEO', 'Jaipur', 6, 2015, 1, 0, 1, 'We at Buildblockz.com are changing the way in which Real-estate operates', '2016-02-02 07:59:22', '2016-02-02 07:59:22'),
(3, 3, 'EasyPick', 'Co Founder & COO', 'Guwahati', 8, 2014, 6, 2015, 0, 'A logistics startup which delivers the daily need products.', '2016-02-13 11:03:36', '2016-02-13 11:03:36'),
(4, 48, 'Attik ', 'Owner', 'Guwahati ', 11, 2011, 1, 0, 1, '', '2016-02-25 12:47:57', '2016-02-25 12:47:57'),
(5, 62, 'ECPL', 'Project Architect', 'Guwahati,Assam', 8, 2012, 12, 2013, 0, '', '2016-03-12 09:12:47', '2016-03-12 09:16:30'),
(6, 62, 'Topubratta Dutta Architects', 'Principal Architect', 'Guwahati,Assam', 7, 2012, 1, 0, 1, '', '2016-03-12 09:15:50', '2016-03-12 09:15:50'),
(7, 63, 'Topubratta Dutta Architects', 'Project Architect.', 'Guwahati,Assam', 7, 2015, 1, 0, 1, '', '2016-03-12 09:24:10', '2016-03-12 09:24:10'),
(8, 80, 'INFINITE CONSULTING', 'DESIGN/DRAWING', 'GUWAHATI', 4, 2015, 1, 0, 1, 'I have recently registered my design firm along with few of my friends. I am hoping to get few projects here', '2016-04-24 04:18:44', '2016-04-24 04:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `likes_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=145 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 3, 2, '2016-01-20 17:28:08', '2016-01-20 17:28:08'),
(3, 4, 2, '2016-01-20 18:44:18', '2016-01-20 18:44:18'),
(5, 5, 2, '2016-01-21 08:18:46', '2016-01-21 08:18:46'),
(7, 1, 4, '2016-01-21 15:46:06', '2016-01-21 15:46:06'),
(9, 1, 2, '2016-01-21 17:40:10', '2016-01-21 17:40:10'),
(10, 4, 4, '2016-01-21 20:19:41', '2016-01-21 20:19:41'),
(11, 10, 4, '2016-01-22 03:41:35', '2016-01-22 03:41:35'),
(12, 2, 4, '2016-01-22 10:09:18', '2016-01-22 10:09:18'),
(13, 2, 2, '2016-01-22 10:09:30', '2016-01-22 10:09:30'),
(15, 3, 7, '2016-01-23 06:37:37', '2016-01-23 06:37:37'),
(22, 12, 4, '2016-01-23 10:22:43', '2016-01-23 10:22:43'),
(23, 12, 2, '2016-01-23 10:22:57', '2016-01-23 10:22:57'),
(24, 12, 7, '2016-01-23 10:23:12', '2016-01-23 10:23:12'),
(25, 12, 6, '2016-01-23 10:23:18', '2016-01-23 10:23:18'),
(26, 12, 5, '2016-01-23 10:23:26', '2016-01-23 10:23:26'),
(27, 4, 7, '2016-01-23 11:11:26', '2016-01-23 11:11:26'),
(30, 18, 2, '2016-01-23 19:22:06', '2016-01-23 19:22:06'),
(32, 5, 8, '2016-01-23 19:54:42', '2016-01-23 19:54:42'),
(33, 5, 7, '2016-01-23 19:54:47', '2016-01-23 19:54:47'),
(34, 1, 7, '2016-01-24 15:19:23', '2016-01-24 15:19:23'),
(35, 12, 8, '2016-01-24 18:13:02', '2016-01-24 18:13:02'),
(37, 24, 8, '2016-01-26 07:17:40', '2016-01-26 07:17:40'),
(42, 1, 8, '2016-01-26 17:18:26', '2016-01-26 17:18:26'),
(44, 26, 8, '2016-01-27 18:12:53', '2016-01-27 18:12:53'),
(45, 26, 7, '2016-01-27 18:12:57', '2016-01-27 18:12:57'),
(48, 26, 4, '2016-01-27 18:13:16', '2016-01-27 18:13:16'),
(49, 26, 2, '2016-01-27 18:13:25', '2016-01-27 18:13:25'),
(51, 5, 12, '2016-01-28 19:29:02', '2016-01-28 19:29:02'),
(52, 3, 12, '2016-01-28 19:54:12', '2016-01-28 19:54:12'),
(53, 15, 12, '2016-01-29 04:43:13', '2016-01-29 04:43:13'),
(55, 1, 12, '2016-02-01 14:18:45', '2016-02-01 14:18:45'),
(57, 5, 15, '2016-02-03 09:39:19', '2016-02-03 09:39:19'),
(58, 1, 14, '2016-02-03 15:34:17', '2016-02-03 15:34:17'),
(59, 1, 16, '2016-02-03 15:34:22', '2016-02-03 15:34:22'),
(61, 29, 6, '2016-02-05 14:12:59', '2016-02-05 14:12:59'),
(62, 1, 15, '2016-02-07 14:11:13', '2016-02-07 14:11:13'),
(63, 5, 17, '2016-02-10 13:07:13', '2016-02-10 13:07:13'),
(64, 5, 16, '2016-02-10 13:07:17', '2016-02-10 13:07:17'),
(66, 1, 18, '2016-02-10 13:45:27', '2016-02-10 13:45:27'),
(67, 1, 19, '2016-02-10 16:53:31', '2016-02-10 16:53:31'),
(68, 4, 19, '2016-02-10 18:58:22', '2016-02-10 18:58:22'),
(69, 4, 18, '2016-02-10 18:58:54', '2016-02-10 18:58:54'),
(70, 4, 17, '2016-02-10 18:59:00', '2016-02-10 18:59:00'),
(71, 4, 16, '2016-02-10 18:59:06', '2016-02-10 18:59:06'),
(72, 4, 15, '2016-02-10 18:59:14', '2016-02-10 18:59:14'),
(73, 4, 14, '2016-02-10 18:59:22', '2016-02-10 18:59:22'),
(74, 4, 12, '2016-02-10 18:59:24', '2016-02-10 18:59:24'),
(75, 4, 8, '2016-02-10 18:59:38', '2016-02-10 18:59:38'),
(78, 3, 19, '2016-02-11 09:41:43', '2016-02-11 09:41:43'),
(79, 5, 20, '2016-02-11 11:13:07', '2016-02-11 11:13:07'),
(80, 5, 19, '2016-02-11 11:13:11', '2016-02-11 11:13:11'),
(81, 5, 23, '2016-02-12 06:47:09', '2016-02-12 06:47:09'),
(83, 1, 23, '2016-02-13 18:22:03', '2016-02-13 18:22:03'),
(84, 1, 20, '2016-02-13 18:22:09', '2016-02-13 18:22:09'),
(86, 4, 25, '2016-02-15 18:45:56', '2016-02-15 18:45:56'),
(88, 1, 25, '2016-02-16 14:25:37', '2016-02-16 14:25:37'),
(89, 5, 25, '2016-02-20 14:25:34', '2016-02-20 14:25:34'),
(90, 5, 28, '2016-03-02 19:17:48', '2016-03-02 19:17:48'),
(91, 1, 28, '2016-03-03 07:17:09', '2016-03-03 07:17:09'),
(92, 12, 25, '2016-03-04 13:52:05', '2016-03-04 13:52:05'),
(93, 12, 28, '2016-03-04 13:52:13', '2016-03-04 13:52:13'),
(94, 12, 23, '2016-03-04 13:52:27', '2016-03-04 13:52:27'),
(95, 12, 20, '2016-03-04 13:52:34', '2016-03-04 13:52:34'),
(96, 12, 12, '2016-03-04 13:53:33', '2016-03-04 13:53:33'),
(97, 56, 19, '2016-03-05 04:11:15', '2016-03-05 04:11:15'),
(99, 59, 28, '2016-03-06 19:59:02', '2016-03-06 19:59:02'),
(103, 1, 17, '2016-03-11 00:20:05', '2016-03-11 00:20:05'),
(113, 1, 32, '2016-03-11 18:04:59', '2016-03-11 18:04:59'),
(115, 3, 33, '2016-03-13 03:07:05', '2016-03-13 03:07:05'),
(116, 1, 33, '2016-03-14 01:45:02', '2016-03-14 01:45:02'),
(117, 5, 33, '2016-03-14 08:23:26', '2016-03-14 08:23:26'),
(118, 68, 35, '2016-03-16 08:14:05', '2016-03-16 08:14:05'),
(119, 3, 36, '2016-03-16 09:04:02', '2016-03-16 09:04:02'),
(120, 12, 36, '2016-03-18 09:03:58', '2016-03-18 09:03:58'),
(121, 12, 33, '2016-03-18 09:04:44', '2016-03-18 09:04:44'),
(122, 5, 36, '2016-03-18 09:23:02', '2016-03-18 09:23:02'),
(123, 5, 35, '2016-03-18 09:25:15', '2016-03-18 09:25:15'),
(124, 4, 36, '2016-03-18 09:28:54', '2016-03-18 09:28:54'),
(126, 73, 37, '2016-03-18 10:21:30', '2016-03-18 10:21:30'),
(128, 5, 37, '2016-03-18 10:25:11', '2016-03-18 10:25:11'),
(129, 4, 35, '2016-03-18 10:56:04', '2016-03-18 10:56:04'),
(130, 4, 33, '2016-03-18 10:56:19', '2016-03-18 10:56:19'),
(131, 4, 32, '2016-03-18 10:56:32', '2016-03-18 10:56:32'),
(132, 3, 37, '2016-03-18 11:12:37', '2016-03-18 11:12:37'),
(135, 1, 37, '2016-03-28 06:06:58', '2016-03-28 06:06:58'),
(136, 1, 36, '2016-03-28 06:07:00', '2016-03-28 06:07:00'),
(137, 1, 35, '2016-03-28 06:07:07', '2016-03-28 06:07:07'),
(138, 1, 6, '2016-03-28 06:08:09', '2016-03-28 06:08:09'),
(139, 1, 5, '2016-03-28 06:08:20', '2016-03-28 06:08:20'),
(141, 4, 39, '2016-03-28 07:22:39', '2016-03-28 07:22:39'),
(144, 1, 39, '2016-04-29 14:17:51', '2016-04-29 14:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `link_preview`
--

CREATE TABLE IF NOT EXISTS `link_preview` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_graph_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_graph_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_graph_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `link_preview`
--

INSERT INTO `link_preview` (`id`, `link`, `meta_description`, `first_image`, `open_graph_title`, `open_graph_type`, `open_graph_image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'http://www.buildblockz.com', 'Boosting professional network among Real Estate''s wild cards i.e. Architect, Builder, Contractor', 'http://www.buildblockz.com/res/img/text.svg', 'Real Estate-Professional Network', 'website', 'http://buildblockz.com/images/logo/BBZlogo/bbzlogo_blue.svg', 'BBz-Workstation A professional network for Real Estate', '2016-03-11 00:23:57', '2016-03-19 03:33:40'),
(2, 'http://www.youtube.com', 'Enjoy the videos and music you love, upload original content, and share it all with friends, family, and the world on YouTube.', 'https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif', NULL, NULL, '//s.ytimg.com/yts/img/yt_1200-vfl4C3T0K.png', 'YouTube', '2016-03-11 02:56:00', '2016-03-11 02:56:00'),
(3, 'https://www.youtube.com/watch?v=hFDRvELvSyw', 'The EcoFabulous Home was designed by Kanau Uyeyama Architect Inc. As a firm, we have been researching eco-friendly solutions for many years. In 2008 we put a...', 'https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif', 'EcoFabulous Construction - Green Sustainable Eco-Friendly Modular Home in Canada', 'video', 'https://i.ytimg.com/vi/hFDRvELvSyw/hqdefault.jpg', 'EcoFabulous Construction - Green Sustainable Eco-Friendly Modular Home in Canada - YouTube', '2016-03-11 03:00:58', '2016-03-11 03:00:58'),
(4, 'http://www.assamtribune.com/scripts/detailsnew.asp?id=mar1616/at055', '0', 'http://www.assamtribune.com/masthead.gif', NULL, NULL, NULL, 'The Assam Tribune Online', '2016-03-16 04:40:57', '2016-03-16 04:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `link_preview_relation`
--

CREATE TABLE IF NOT EXISTS `link_preview_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(11) NOT NULL DEFAULT '0',
  `comment_id` int(11) NOT NULL DEFAULT '0',
  `mail_id` int(11) NOT NULL DEFAULT '0',
  `link_preview_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `link_preview_relation_link_preview_id_foreign` (`link_preview_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `link_preview_relation`
--

INSERT INTO `link_preview_relation` (`id`, `status_id`, `comment_id`, `mail_id`, `link_preview_id`, `created_at`, `updated_at`) VALUES
(1, 30, 0, 0, 1, '2016-03-11 00:23:57', '2016-03-11 00:23:57'),
(2, 31, 0, 0, 2, '2016-03-11 02:56:00', '2016-03-11 02:56:00'),
(3, 32, 0, 0, 3, '2016-03-11 03:00:58', '2016-03-11 03:00:58'),
(4, 34, 0, 0, 4, '2016-03-16 04:40:57', '2016-03-16 04:40:57'),
(5, 35, 0, 0, 4, '2016-03-16 04:41:41', '2016-03-16 04:41:41'),
(6, 38, 0, 0, 1, '2016-03-19 03:33:40', '2016-03-19 03:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_06_231506_create_statuses_table', 1),
('2015_11_09_135028_create_designation_table', 1),
('2015_12_19_141634_create_connections_table', 1),
('2015_12_20_053604_create_educations_table', 1),
('2015_12_22_104932_create_projects_table', 1),
('2015_12_22_195540_create_experiences_table', 1),
('2015_12_29_171643_create_Comments_table', 1),
('2015_12_29_173444_create_Boosts_table', 1),
('2015_12_29_183508_create_Likes_table', 2),
('2016_01_10_222759_create_notications_table', 2),
('2016_01_18_023332_create_profiles_table', 2),
('2016_01_19_041342_create_skills_table', 2),
('2016_01_20_035751_create_boosts_table', 2),
('2016_01_21_025826_create_contactus_table', 3),
('2016_01_21_033203_create_bylaws_table', 3),
('2016_01_22_020102_create_tenders_table', 4),
('2016_01_27_044755_create_adminuser_table', 5),
('2016_02_13_201545_create_page_category_table', 5),
('2016_02_13_201657_create_page_subcategory_table', 5),
('2016_02_13_225737_create_page_admins_table', 6),
('2016_02_15_102222_create_page_types_table', 6),
('2016_02_18_192443_create_polls_table', 6),
('2016_02_18_192908_create_polls_options_table', 6),
('2016_02_18_193017_create_polls_options_vote_table', 6),
('2016_02_19_144200_create_blog_table', 6),
('2016_03_06_005904_create_link_preview_table', 6),
('2016_03_06_011843_create_link_preview_relation_table', 6),
('2016_03_11_200218_create_profile_verification_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_id_2` int(10) unsigned NOT NULL,
  `pages_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `skill_id` int(10) unsigned NOT NULL,
  `viewed_profile_id` int(10) unsigned NOT NULL,
  `status_id` int(11) NOT NULL,
  `notification` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `notifications_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=190 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `user_id_2`, `pages_id`, `group_id`, `skill_id`, `viewed_profile_id`, `status_id`, `notification`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 0, 0, 0, 0, 2, 'Jitendra Choudhary liked your post.', '2016-01-20 17:28:08', '2016-01-20 17:28:08'),
(2, 1, 4, 0, 0, 0, 0, 2, 'Sarah Jane liked your post.', '2016-01-20 18:44:18', '2016-01-20 18:44:18'),
(5, 1, 5, 0, 0, 0, 0, 2, 'Karan Rajwanshi liked your post.', '2016-01-21 08:18:46', '2016-01-21 08:18:46'),
(6, 5, 1, 0, 0, 0, 0, 4, 'Ravi Kumar liked your post.', '2016-01-21 15:46:06', '2016-01-21 15:46:06'),
(7, 5, 1, 0, 0, 0, 0, 4, 'Ravi Kumar commented on your post.', '2016-01-21 15:47:39', '2016-01-21 15:47:39'),
(8, 5, 4, 0, 0, 0, 0, 4, 'Sarah Jane liked your post.', '2016-01-21 20:19:41', '2016-01-21 20:19:41'),
(9, 5, 10, 0, 0, 0, 0, 4, 'Prasanta Mandal liked your post.', '2016-01-22 03:41:35', '2016-01-22 03:41:35'),
(10, 5, 2, 0, 0, 0, 0, 4, 'Vijay Dinanath Chauhan liked your post.', '2016-01-22 10:09:18', '2016-01-22 10:09:18'),
(11, 1, 2, 0, 0, 0, 0, 2, 'Vijay Dinanath Chauhan liked your post.', '2016-01-22 10:09:30', '2016-01-22 10:09:30'),
(12, 1, 13, 0, 0, 0, 0, 2, 'RAKESH commented on your post.', '2016-01-22 16:51:14', '2016-01-22 16:51:14'),
(15, 5, 3, 0, 0, 0, 0, 7, 'Jitendra Choudhary liked your post.', '2016-01-23 06:37:37', '2016-01-23 06:37:37'),
(16, 5, 12, 0, 0, 0, 0, 7, 'Surendra Choudhary liked your post.', '2016-01-23 10:21:52', '2016-01-23 10:21:52'),
(17, 5, 12, 0, 0, 0, 0, 7, 'Surendra Choudhary liked your post.', '2016-01-23 10:21:54', '2016-01-23 10:21:54'),
(18, 11, 12, 0, 0, 0, 0, 6, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:07', '2016-01-23 10:22:07'),
(19, 11, 12, 0, 0, 0, 0, 6, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:07', '2016-01-23 10:22:07'),
(20, 11, 12, 0, 0, 0, 0, 6, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:11', '2016-01-23 10:22:11'),
(21, 11, 12, 0, 0, 0, 0, 6, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:29', '2016-01-23 10:22:29'),
(22, 2, 12, 0, 0, 0, 0, 5, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:32', '2016-01-23 10:22:32'),
(23, 2, 12, 0, 0, 0, 0, 5, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:32', '2016-01-23 10:22:32'),
(24, 5, 12, 0, 0, 0, 0, 4, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:35', '2016-01-23 10:22:35'),
(25, 5, 12, 0, 0, 0, 0, 4, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:37', '2016-01-23 10:22:37'),
(27, 5, 12, 0, 0, 0, 0, 4, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:43', '2016-01-23 10:22:43'),
(28, 1, 12, 0, 0, 0, 0, 2, 'Surendra Choudhary liked your post.', '2016-01-23 10:22:57', '2016-01-23 10:22:57'),
(29, 5, 12, 0, 0, 0, 0, 7, 'Surendra Choudhary liked your post.', '2016-01-23 10:23:12', '2016-01-23 10:23:12'),
(30, 11, 12, 0, 0, 0, 0, 6, 'Surendra Choudhary liked your post.', '2016-01-23 10:23:18', '2016-01-23 10:23:18'),
(31, 2, 12, 0, 0, 0, 0, 5, 'Surendra Choudhary liked your post.', '2016-01-23 10:23:26', '2016-01-23 10:23:26'),
(32, 5, 4, 0, 0, 0, 0, 7, 'Sarah Jane liked your post.', '2016-01-23 11:11:26', '2016-01-23 11:11:26'),
(33, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane liked your post.', '2016-01-23 11:11:33', '2016-01-23 11:11:33'),
(34, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane liked your post.', '2016-01-23 11:11:44', '2016-01-23 11:11:44'),
(35, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane liked your post.', '2016-01-23 11:23:26', '2016-01-23 11:23:26'),
(36, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane commented on your post.', '2016-01-23 11:23:56', '2016-01-23 11:23:56'),
(37, 1, 18, 0, 0, 0, 0, 2, 'Sweta Agrawal liked your post.', '2016-01-23 19:22:06', '2016-01-23 19:22:06'),
(38, 1, 19, 0, 0, 0, 0, 2, 'fgf commented on your post.', '2016-01-23 19:25:21', '2016-01-23 19:25:21'),
(39, 1, 19, 0, 0, 0, 0, 2, 'fgf liked your post.', '2016-01-23 19:25:33', '2016-01-23 19:25:33'),
(40, 15, 5, 0, 0, 0, 0, 8, 'Karan Rajwanshi liked your post.', '2016-01-23 19:54:42', '2016-01-23 19:54:42'),
(41, 5, 1, 0, 0, 0, 0, 7, 'Ravi Kumar liked your post.', '2016-01-24 15:19:23', '2016-01-24 15:19:23'),
(42, 15, 12, 0, 0, 0, 0, 8, 'Surendra Choudhary liked your post.', '2016-01-24 18:13:02', '2016-01-24 18:13:02'),
(43, 15, 24, 0, 0, 0, 0, 8, 'Kandukuri Manasa liked your post.', '2016-01-26 07:17:22', '2016-01-26 07:17:22'),
(44, 15, 24, 0, 0, 0, 0, 8, 'Kandukuri Manasa liked your post.', '2016-01-26 07:17:33', '2016-01-26 07:17:33'),
(45, 15, 24, 0, 0, 0, 0, 8, 'Kandukuri Manasa liked your post.', '2016-01-26 07:17:40', '2016-01-26 07:17:40'),
(46, 15, 25, 0, 0, 0, 0, 8, 'iitg1 liked your post.', '2016-01-26 16:59:59', '2016-01-26 16:59:59'),
(47, 15, 25, 0, 0, 0, 0, 8, 'iitg1 liked your post.', '2016-01-26 17:00:02', '2016-01-26 17:00:02'),
(48, 15, 25, 0, 0, 0, 0, 8, 'iitg1 liked your post.', '2016-01-26 17:00:03', '2016-01-26 17:00:03'),
(49, 5, 25, 0, 0, 0, 0, 7, 'iitg1 liked your post.', '2016-01-26 17:00:11', '2016-01-26 17:00:11'),
(50, 15, 1, 0, 0, 0, 0, 8, 'Ravi Kumar liked your post.', '2016-01-26 17:18:17', '2016-01-26 17:18:17'),
(51, 15, 1, 0, 0, 0, 0, 8, 'Ravi Kumar liked your post.', '2016-01-26 17:18:18', '2016-01-26 17:18:18'),
(52, 15, 1, 0, 0, 0, 0, 8, 'Ravi Kumar liked your post.', '2016-01-26 17:18:26', '2016-01-26 17:18:26'),
(53, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane liked your post.', '2016-01-26 18:48:42', '2016-01-26 18:48:42'),
(54, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane liked your post.', '2016-01-26 18:48:43', '2016-01-26 18:48:43'),
(55, 15, 26, 0, 0, 0, 0, 8, 'nikita liked your post.', '2016-01-27 18:12:53', '2016-01-27 18:12:53'),
(56, 5, 26, 0, 0, 0, 0, 7, 'nikita liked your post.', '2016-01-27 18:12:57', '2016-01-27 18:12:57'),
(57, 11, 26, 0, 0, 0, 0, 6, 'nikita liked your post.', '2016-01-27 18:13:01', '2016-01-27 18:13:01'),
(58, 11, 26, 0, 0, 0, 0, 6, 'nikita liked your post.', '2016-01-27 18:13:05', '2016-01-27 18:13:05'),
(59, 2, 26, 0, 0, 0, 0, 5, 'nikita liked your post.', '2016-01-27 18:13:12', '2016-01-27 18:13:12'),
(60, 2, 26, 0, 0, 0, 0, 5, 'nikita liked your post.', '2016-01-27 18:13:15', '2016-01-27 18:13:15'),
(61, 5, 26, 0, 0, 0, 0, 4, 'nikita liked your post.', '2016-01-27 18:13:16', '2016-01-27 18:13:16'),
(62, 1, 26, 0, 0, 0, 0, 2, 'nikita liked your post.', '2016-01-27 18:13:25', '2016-01-27 18:13:25'),
(63, 26, 1, 0, 0, 0, 0, 12, 'Ravi Kumar liked your post.', '2016-01-28 17:46:23', '2016-01-28 17:46:23'),
(64, 26, 1, 0, 0, 0, 0, 12, 'Ravi Kumar liked your post.', '2016-01-28 17:46:26', '2016-01-28 17:46:26'),
(65, 26, 5, 0, 0, 0, 0, 12, 'Karan Rajwanshi liked your post.', '2016-01-28 19:29:02', '2016-01-28 19:29:02'),
(66, 26, 3, 0, 0, 0, 0, 12, 'Jitendra Choudhary liked your post.', '2016-01-28 19:54:12', '2016-01-28 19:54:12'),
(67, 26, 15, 0, 0, 0, 0, 12, 'Amrit Kamal Lenka liked your post.', '2016-01-29 04:43:13', '2016-01-29 04:43:13'),
(68, 26, 1, 0, 0, 0, 0, 12, 'Ravi Kumar liked your post.', '2016-02-01 14:18:45', '2016-02-01 14:18:45'),
(69, 3, 5, 0, 0, 0, 0, 15, 'Karan Rajwanshi liked your post.', '2016-02-03 09:39:19', '2016-02-03 09:39:19'),
(70, 3, 5, 0, 0, 0, 0, 15, 'Karan Rajwanshi commented on your post.', '2016-02-03 09:39:34', '2016-02-03 09:39:34'),
(71, 5, 1, 0, 0, 0, 0, 14, 'Ravi Kumar liked your post.', '2016-02-03 15:34:17', '2016-02-03 15:34:17'),
(72, 5, 1, 0, 0, 0, 0, 16, 'Ravi Kumar liked your post.', '2016-02-03 15:34:22', '2016-02-03 15:34:22'),
(73, 11, 29, 0, 0, 0, 0, 6, 'amit kumar liked your post.', '2016-02-05 14:12:54', '2016-02-05 14:12:54'),
(74, 11, 29, 0, 0, 0, 0, 6, 'amit kumar liked your post.', '2016-02-05 14:12:57', '2016-02-05 14:12:57'),
(75, 11, 29, 0, 0, 0, 0, 6, 'amit kumar liked your post.', '2016-02-05 14:12:59', '2016-02-05 14:12:59'),
(76, 3, 1, 0, 0, 0, 0, 15, 'Ravi Kumar liked your post.', '2016-02-07 14:11:13', '2016-02-07 14:11:13'),
(77, 5, 1, 0, 0, 0, 0, 18, 'Ravi Kumar liked your post.', '2016-02-10 13:45:17', '2016-02-10 13:45:17'),
(78, 5, 1, 0, 0, 0, 0, 18, 'Ravi Kumar liked your post.', '2016-02-10 13:45:25', '2016-02-10 13:45:25'),
(79, 5, 1, 0, 0, 0, 0, 18, 'Ravi Kumar liked your post.', '2016-02-10 13:45:27', '2016-02-10 13:45:27'),
(80, 30, 1, 0, 0, 0, 0, 19, 'Ravi Kumar liked your post.', '2016-02-10 16:53:31', '2016-02-10 16:53:31'),
(81, 30, 1, 0, 0, 0, 0, 19, 'Ravi Kumar commented on your post.', '2016-02-10 16:53:50', '2016-02-10 16:53:50'),
(82, 30, 4, 0, 0, 0, 0, 19, 'Sarah Jane liked your post.', '2016-02-10 18:58:22', '2016-02-10 18:58:22'),
(83, 5, 4, 0, 0, 0, 0, 18, 'Sarah Jane liked your post.', '2016-02-10 18:58:54', '2016-02-10 18:58:54'),
(84, 5, 4, 0, 0, 0, 0, 17, 'Sarah Jane liked your post.', '2016-02-10 18:59:00', '2016-02-10 18:59:00'),
(85, 5, 4, 0, 0, 0, 0, 16, 'Sarah Jane liked your post.', '2016-02-10 18:59:06', '2016-02-10 18:59:06'),
(86, 3, 4, 0, 0, 0, 0, 15, 'Sarah Jane liked your post.', '2016-02-10 18:59:14', '2016-02-10 18:59:14'),
(87, 5, 4, 0, 0, 0, 0, 14, 'Sarah Jane liked your post.', '2016-02-10 18:59:22', '2016-02-10 18:59:22'),
(88, 26, 4, 0, 0, 0, 0, 12, 'Sarah Jane liked your post.', '2016-02-10 18:59:24', '2016-02-10 18:59:24'),
(89, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane liked your post.', '2016-02-10 18:59:35', '2016-02-10 18:59:35'),
(90, 15, 4, 0, 0, 0, 0, 8, 'Sarah Jane liked your post.', '2016-02-10 18:59:38', '2016-02-10 18:59:38'),
(91, 30, 32, 0, 0, 0, 0, 19, 'weaq liked your post.', '2016-02-10 19:08:50', '2016-02-10 19:08:50'),
(92, 30, 32, 0, 0, 0, 0, 19, 'weaq liked your post.', '2016-02-10 19:08:53', '2016-02-10 19:08:53'),
(93, 30, 32, 0, 0, 0, 0, 19, 'weaq commented on your post.', '2016-02-10 19:09:00', '2016-02-10 19:09:00'),
(94, 30, 3, 0, 0, 0, 0, 19, 'Jitendra Choudhary liked your post.', '2016-02-11 09:41:43', '2016-02-11 09:41:43'),
(95, 3, 5, 0, 0, 0, 0, 20, 'Karan Rajwanshi liked your post.', '2016-02-11 11:13:07', '2016-02-11 11:13:07'),
(96, 30, 5, 0, 0, 0, 0, 19, 'Karan Rajwanshi liked your post.', '2016-02-11 11:13:11', '2016-02-11 11:13:11'),
(97, 3, 5, 0, 0, 0, 0, 20, 'Karan Rajwanshi commented on your post.', '2016-02-11 11:13:46', '2016-02-11 11:13:46'),
(98, 3, 5, 0, 0, 0, 0, 23, 'Karan Rajwanshi liked your post.', '2016-02-12 06:47:09', '2016-02-12 06:47:09'),
(99, 5, 1, 0, 0, 5, 0, 0, 'Ravi Kumar boost you in landscaping', '2016-02-13 14:43:50', '2016-02-13 14:43:50'),
(100, 5, 1, 0, 0, 8, 0, 0, 'Ravi Kumar boost you in startups', '2016-02-13 14:43:52', '2016-02-13 14:43:52'),
(101, 3, 1, 0, 0, 0, 0, 25, 'Ravi Kumar liked your post.', '2016-02-13 18:21:59', '2016-02-13 18:21:59'),
(102, 3, 1, 0, 0, 0, 0, 23, 'Ravi Kumar liked your post.', '2016-02-13 18:22:03', '2016-02-13 18:22:03'),
(103, 3, 1, 0, 0, 0, 0, 20, 'Ravi Kumar liked your post.', '2016-02-13 18:22:09', '2016-02-13 18:22:09'),
(104, 3, 4, 0, 0, 0, 0, 25, 'Sarah Jane liked your post.', '2016-02-15 18:45:56', '2016-02-15 18:45:56'),
(105, 3, 5, 0, 0, 0, 0, 25, 'Karan Rajwanshi liked your post.', '2016-02-15 18:59:30', '2016-02-15 18:59:30'),
(106, 1, 5, 0, 0, 9, 0, 0, 'Karan Rajwanshi boost you in Laravel', '2016-02-15 19:01:12', '2016-02-15 19:01:12'),
(107, 5, 1, 0, 0, 5, 0, 0, 'Ravi Kumar boost you in landscaping', '2016-02-15 19:02:09', '2016-02-15 19:02:09'),
(108, 5, 3, 0, 0, 4, 0, 0, 'Jitendra Choudhary boost you in studio', '2016-02-16 06:55:57', '2016-02-16 06:55:57'),
(109, 5, 3, 0, 0, 5, 0, 0, 'Jitendra Choudhary boost you in landscaping', '2016-02-16 06:55:58', '2016-02-16 06:55:58'),
(110, 5, 3, 0, 0, 8, 0, 0, 'Jitendra Choudhary boost you in startups', '2016-02-16 06:56:00', '2016-02-16 06:56:00'),
(111, 5, 3, 0, 0, 17, 0, 0, 'Jitendra Choudhary boost you in entrepreneurship', '2016-02-16 06:56:02', '2016-02-16 06:56:02'),
(112, 30, 5, 0, 0, 0, 0, 19, 'Karan Rajwanshi commented on your post.', '2016-02-16 09:12:03', '2016-02-16 09:12:03'),
(113, 3, 1, 0, 0, 0, 0, 25, 'Ravi Kumar liked your post.', '2016-02-16 14:25:34', '2016-02-16 14:25:34'),
(114, 3, 1, 0, 0, 0, 0, 25, 'Ravi Kumar liked your post.', '2016-02-16 14:25:37', '2016-02-16 14:25:37'),
(115, 3, 42, 0, 0, 13, 0, 0, 'Arya Erectors India Private Limited boosted you in Marketing', '2016-02-17 10:43:36', '2016-02-17 10:43:36'),
(116, 3, 42, 0, 0, 14, 0, 0, 'Arya Erectors India Private Limited boosted you in Business Development', '2016-02-17 10:43:39', '2016-02-17 10:43:39'),
(117, 3, 42, 0, 0, 15, 0, 0, 'Arya Erectors India Private Limited boosted you in Operations', '2016-02-17 10:43:41', '2016-02-17 10:43:41'),
(118, 5, 3, 0, 0, 5, 0, 0, 'Jitendra Choudhary boosted you in landscaping', '2016-02-20 13:32:18', '2016-02-20 13:32:18'),
(119, 5, 4, 0, 0, 4, 0, 0, 'Sarah Jane boosted you in studio', '2016-02-20 13:32:38', '2016-02-20 13:32:38'),
(120, 5, 4, 0, 0, 5, 0, 0, 'Sarah Jane boosted you in landscaping', '2016-02-20 13:32:40', '2016-02-20 13:32:40'),
(121, 5, 4, 0, 0, 8, 0, 0, 'Sarah Jane boosted you in startups', '2016-02-20 13:32:41', '2016-02-20 13:32:41'),
(122, 5, 4, 0, 0, 17, 0, 0, 'Sarah Jane boosted you in entrepreneurship', '2016-02-20 13:32:43', '2016-02-20 13:32:43'),
(123, 3, 5, 0, 0, 0, 0, 25, 'Karan Rajwanshi liked your post.', '2016-02-20 14:25:31', '2016-02-20 14:25:31'),
(124, 3, 5, 0, 0, 0, 0, 25, 'Karan Rajwanshi liked your post.', '2016-02-20 14:25:34', '2016-02-20 14:25:34'),
(125, 4, 5, 0, 0, 1, 0, 0, 'Karan Rajwanshi boosted you in Studio Appartments', '2016-02-23 15:17:20', '2016-02-23 15:17:20'),
(126, 4, 5, 0, 0, 2, 0, 0, 'Karan Rajwanshi boosted you in Designs', '2016-02-23 15:17:21', '2016-02-23 15:17:21'),
(127, 4, 5, 0, 0, 3, 0, 0, 'Karan Rajwanshi boosted you in Sketching', '2016-02-23 15:17:22', '2016-02-23 15:17:22'),
(128, 5, 48, 0, 0, 4, 0, 0, 'ANKUSH JAIN  boosted you in studio', '2016-02-25 12:43:49', '2016-02-25 12:43:49'),
(129, 5, 48, 0, 0, 4, 0, 0, 'ANKUSH JAIN  boosted you in studio', '2016-02-25 12:43:53', '2016-02-25 12:43:53'),
(130, 48, 5, 0, 0, 20, 0, 0, 'Karan Rajwanshi boosted you in Creative ', '2016-02-27 09:42:17', '2016-02-27 09:42:17'),
(131, 48, 5, 0, 0, 18, 0, 0, 'Karan Rajwanshi boosted you in Designing.', '2016-02-27 09:42:17', '2016-02-27 09:42:17'),
(132, 5, 1, 0, 0, 4, 0, 0, 'Ravi Kumar boosted you in studio', '2016-03-02 16:56:59', '2016-03-02 16:56:59'),
(133, 4, 5, 0, 0, 0, 0, 28, 'Karan Rajwanshi liked your post.', '2016-03-02 19:17:48', '2016-03-02 19:17:48'),
(134, 4, 1, 0, 0, 0, 0, 28, 'Ravi Kumar liked your post.', '2016-03-03 07:17:09', '2016-03-03 07:17:09'),
(135, 3, 12, 0, 0, 0, 0, 25, 'Surendra Choudhary liked your post.', '2016-03-04 13:52:05', '2016-03-04 13:52:05'),
(136, 4, 12, 0, 0, 0, 0, 28, 'Surendra Choudhary liked your post.', '2016-03-04 13:52:13', '2016-03-04 13:52:13'),
(137, 3, 12, 0, 0, 0, 0, 23, 'Surendra Choudhary liked your post.', '2016-03-04 13:52:27', '2016-03-04 13:52:27'),
(138, 3, 12, 0, 0, 0, 0, 20, 'Surendra Choudhary liked your post.', '2016-03-04 13:52:34', '2016-03-04 13:52:34'),
(139, 26, 12, 0, 0, 0, 0, 12, 'Surendra Choudhary liked your post.', '2016-03-04 13:53:33', '2016-03-04 13:53:33'),
(140, 30, 56, 0, 0, 0, 0, 19, 'Vishwas Vyas liked your post.', '2016-03-05 04:11:15', '2016-03-05 04:11:15'),
(141, 4, 59, 0, 0, 0, 0, 28, 'asd liked your post.', '2016-03-06 19:58:17', '2016-03-06 19:58:17'),
(142, 4, 59, 0, 0, 0, 0, 28, 'asd liked your post.', '2016-03-06 19:59:00', '2016-03-06 19:59:00'),
(143, 4, 59, 0, 0, 0, 0, 28, 'asd liked your post.', '2016-03-06 19:59:02', '2016-03-06 19:59:02'),
(144, 1, 5, 0, 0, 9, 0, 0, 'Karan Rajwanshi boosted you in Laravel', '2016-03-10 08:48:28', '2016-03-10 08:48:28'),
(145, 5, 1, 0, 0, 0, 0, 17, 'Ravi Kumar liked your post.', '2016-03-10 23:03:34', '2016-03-10 23:03:34'),
(146, 5, 1, 0, 0, 0, 0, 17, 'Ravi Kumar liked your post.', '2016-03-10 23:03:50', '2016-03-10 23:03:50'),
(147, 5, 1, 0, 0, 0, 0, 17, 'Ravi Kumar liked your post.', '2016-03-10 23:09:12', '2016-03-10 23:09:12'),
(148, 5, 1, 0, 0, 0, 0, 17, 'Ravi Kumar liked your post.', '2016-03-10 23:09:48', '2016-03-10 23:09:48'),
(149, 5, 1, 0, 0, 0, 0, 17, 'Ravi Kumar liked your post.', '2016-03-11 00:20:05', '2016-03-11 00:20:05'),
(150, 3, 1, 0, 0, 0, 0, 32, 'Ravi Kumar liked your post.', '2016-03-11 18:04:59', '2016-03-11 18:04:59'),
(151, 3, 64, 0, 0, 0, 0, 32, 'Ravi Kumar liked your post.', '2016-03-12 19:35:51', '2016-03-12 19:35:51'),
(152, 62, 3, 0, 0, 0, 0, 33, 'Jitendra Choudhary liked your post.', '2016-03-13 03:07:05', '2016-03-13 03:07:05'),
(153, 62, 3, 0, 0, 0, 0, 33, 'Jitendra Choudhary commented on your post.', '2016-03-13 03:07:16', '2016-03-13 03:07:16'),
(154, 62, 1, 0, 0, 0, 0, 33, 'Ravi Kumar liked your post.', '2016-03-14 01:45:02', '2016-03-14 01:45:02'),
(155, 62, 5, 0, 0, 0, 0, 33, 'Karan Rajwanshi liked your post.', '2016-03-14 08:23:26', '2016-03-14 08:23:26'),
(156, 5, 68, 0, 0, 0, 0, 35, 'SYED GUFIK HUSSAIN liked your post.', '2016-03-16 08:14:05', '2016-03-16 08:14:05'),
(157, 69, 3, 0, 0, 0, 0, 36, 'Jitendra Choudhary liked your post.', '2016-03-16 09:04:02', '2016-03-16 09:04:02'),
(158, 69, 12, 0, 0, 0, 0, 36, 'Surendra Choudhary liked your post.', '2016-03-18 09:03:58', '2016-03-18 09:03:58'),
(159, 62, 12, 0, 0, 0, 0, 33, 'Surendra Choudhary liked your post.', '2016-03-18 09:04:44', '2016-03-18 09:04:44'),
(160, 69, 5, 0, 0, 0, 0, 36, 'Karan Rajwanshi liked your post.', '2016-03-18 09:23:02', '2016-03-18 09:23:02'),
(161, 69, 5, 0, 0, 0, 0, 36, 'Karan Rajwanshi commented on your post.', '2016-03-18 09:26:14', '2016-03-18 09:26:14'),
(162, 69, 4, 0, 0, 0, 0, 36, 'Sarah Jane liked your post.', '2016-03-18 09:28:54', '2016-03-18 09:28:54'),
(163, 4, 73, 0, 0, 0, 0, 28, 'Shivendra Singh liked your post.', '2016-03-18 10:21:24', '2016-03-18 10:21:24'),
(164, 4, 73, 0, 0, 0, 0, 28, 'Shivendra Singh liked your post.', '2016-03-18 10:21:26', '2016-03-18 10:21:26'),
(165, 4, 73, 0, 0, 0, 0, 37, 'Shivendra Singh liked your post.', '2016-03-18 10:21:30', '2016-03-18 10:21:30'),
(166, 5, 73, 0, 0, 0, 0, 16, 'Shivendra Singh liked your post.', '2016-03-18 10:21:37', '2016-03-18 10:21:37'),
(167, 5, 73, 0, 0, 0, 0, 16, 'Shivendra Singh liked your post.', '2016-03-18 10:21:39', '2016-03-18 10:21:39'),
(168, 4, 5, 0, 0, 0, 0, 37, 'Karan Rajwanshi liked your post.', '2016-03-18 10:25:11', '2016-03-18 10:25:11'),
(169, 5, 4, 0, 0, 0, 0, 35, 'Sarah Jane liked your post.', '2016-03-18 10:56:04', '2016-03-18 10:56:04'),
(170, 62, 4, 0, 0, 0, 0, 33, 'Sarah Jane liked your post.', '2016-03-18 10:56:19', '2016-03-18 10:56:19'),
(171, 3, 4, 0, 0, 0, 0, 32, 'Sarah Jane liked your post.', '2016-03-18 10:56:32', '2016-03-18 10:56:32'),
(172, 4, 3, 0, 0, 0, 0, 37, 'Jitendra Choudhary liked your post.', '2016-03-18 11:12:37', '2016-03-18 11:12:37'),
(173, 4, 5, 0, 0, 0, 0, 37, 'Karan Rajwanshi commented on your post.', '2016-03-18 14:10:36', '2016-03-18 14:10:36'),
(174, 3, 75, 0, 0, 0, 0, 32, 'SUBHASH LAMBA liked your post.', '2016-03-28 05:38:15', '2016-03-28 05:38:15'),
(175, 3, 75, 0, 0, 0, 0, 32, 'SUBHASH LAMBA liked your post.', '2016-03-28 05:38:16', '2016-03-28 05:38:16'),
(176, 4, 1, 0, 0, 0, 0, 37, 'Ravi Kumar liked your post.', '2016-03-28 06:06:58', '2016-03-28 06:06:58'),
(177, 69, 1, 0, 0, 0, 0, 36, 'Ravi Kumar liked your post.', '2016-03-28 06:07:00', '2016-03-28 06:07:00'),
(178, 5, 1, 0, 0, 0, 0, 35, 'Ravi Kumar liked your post.', '2016-03-28 06:07:07', '2016-03-28 06:07:07'),
(179, 11, 1, 0, 0, 0, 0, 6, 'Ravi Kumar liked your post.', '2016-03-28 06:08:09', '2016-03-28 06:08:09'),
(180, 2, 1, 0, 0, 0, 0, 5, 'Ravi Kumar liked your post.', '2016-03-28 06:08:20', '2016-03-28 06:08:20'),
(181, 75, 1, 0, 0, 0, 0, 39, 'Ravi Kumar liked your post.', '2016-03-28 06:08:47', '2016-03-28 06:08:47'),
(182, 75, 4, 0, 0, 0, 0, 39, 'Sarah Jane liked your post.', '2016-03-28 07:22:39', '2016-03-28 07:22:39'),
(183, 5, 45, 0, 0, 0, 0, 7, 'ram liked your post.', '2016-03-28 09:03:59', '2016-03-28 09:03:59'),
(184, 5, 45, 0, 0, 0, 0, 7, 'ram liked your post.', '2016-03-28 09:04:01', '2016-03-28 09:04:01'),
(185, 5, 45, 0, 0, 0, 0, 7, 'ram liked your post.', '2016-03-28 09:04:03', '2016-03-28 09:04:03'),
(186, 5, 45, 0, 0, 0, 0, 7, 'ram liked your post.', '2016-03-28 09:04:06', '2016-03-28 09:04:06'),
(187, 75, 1, 0, 0, 0, 0, 39, 'Ravi Kumar liked your post.', '2016-04-17 16:40:22', '2016-04-17 16:40:22'),
(188, 75, 1, 0, 0, 0, 0, 39, 'Ravi Kumar liked your post.', '2016-04-29 14:17:51', '2016-04-29 14:17:51'),
(189, 75, 1, 0, 0, 0, 0, 39, 'Ravi Kumar commented on your post.', '2016-04-29 14:18:09', '2016-04-29 14:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pages_category_id` int(10) unsigned NOT NULL,
  `pages_subcategory_id` int(10) unsigned NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `headquarter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `page_profile_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_cover_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `pages_pages_category_id_foreign` (`pages_category_id`),
  KEY `pages_pages_subcategory_id_foreign` (`pages_subcategory_id`),
  KEY `fk_type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page_admins`
--

CREATE TABLE IF NOT EXISTS `page_admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `page_admins_page_id_foreign` (`page_id`),
  KEY `page_admins_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page_category`
--

CREATE TABLE IF NOT EXISTS `page_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page_subcategory`
--

CREATE TABLE IF NOT EXISTS `page_subcategory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_category_id` int(10) unsigned NOT NULL,
  `page_subcategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `page_subcategory_page_category_id_foreign` (`page_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page_types`
--

CREATE TABLE IF NOT EXISTS `page_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_category_id` int(10) unsigned NOT NULL,
  `page_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `page_types_page_category_id_foreign` (`page_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ravirock0912@gmail.com', '776e5792342d769606cdaf6e7e346a6ca797bcdd5112b281721c67e60e8ba5e7', '2016-02-03 16:27:44'),
('lal.krishnaut.babu@gmail.com', '42d639ce8431630b7e150bb716455f8390b6fd06eabe13c1101ffd629b25389c', '2016-02-05 14:10:40'),
('root281@gmail.com', '98c7aedbb085cc335839e4bd568d80ef14c0533a0736a1c2ec5d27de75c1cfe7', '2016-03-03 07:35:36'),
('karan.buildblockz@gmail.com', '8a00d04cf4dfb844ee42ac2e7b8b3872ab57be89a356848e980d46115d734ec2', '2016-03-28 06:01:44'),
('vivek.kedia0542@gmail.com', 'd2aedfb0406cdaddbe9611fff7c7846a63a43cb68d9fc7fb2ae58d36942ee4a8', '2016-03-30 13:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(10) unsigned NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `polls_status_id_foreign` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `polls_options`
--

CREATE TABLE IF NOT EXISTS `polls_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poll_id` int(10) unsigned NOT NULL,
  `option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `polls_options_poll_id_foreign` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `polls_options_vote`
--

CREATE TABLE IF NOT EXISTS `polls_options_vote` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `option_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `polls_options_vote_option_id_foreign` (`option_id`),
  KEY `polls_options_vote_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `current_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `current_company`, `current_city`, `current_state`, `current_designation`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 1, 'BuildBlockz ', 'Guwahati', 'Assam', 'CTO', 9, 12, 1994, '2016-01-20 16:27:13', '2016-02-11 09:02:48'),
(2, 3, 'BuildBlockz', 'Assam', 'Guwahati', 'Co Founder and COO', 25, 3, 1995, '2016-01-20 17:41:19', '2016-01-20 17:41:19'),
(3, 4, 'Indian Institute of Technology Guwahati', 'Guwahati', 'Assam', 'Chief Architect', 11, 8, 1993, '2016-01-21 20:21:07', '2016-01-21 20:21:07'),
(4, 21, '', 'guwahati', 'assam', '', 0, 0, 0, '2016-01-24 10:22:50', '2016-01-24 10:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `profile_verification`
--

CREATE TABLE IF NOT EXISTS `profile_verification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `emailToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified` tinyint(1) NOT NULL,
  `attempt_email_verified` int(11) NOT NULL,
  `contact_number_otp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number_verified` tinyint(1) NOT NULL,
  `attempt_contact_number_verified` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `profile_verification_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=81 ;

--
-- Dumping data for table `profile_verification`
--

INSERT INTO `profile_verification` (`id`, `user_id`, `emailToken`, `email_verified`, `attempt_email_verified`, `contact_number_otp`, `contact_number_verified`, `attempt_contact_number_verified`, `created_at`, `updated_at`) VALUES
(1, 1, 'dffdsfs', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'fgjfufjh', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'khgh', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 'jh', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 8, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 9, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 10, 'asd0', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 65, 'VvaWi8ifrqMTObFdlCI9RIaGjgNnGJxhPFRONhC6', 1, 0, '0', 0, 0, '2016-03-14 15:24:32', '2016-03-14 15:24:32'),
(12, 11, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 12, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 13, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 14, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 15, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 16, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 17, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 18, 'asd0', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 20, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 21, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 22, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 23, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 24, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 26, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 27, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 28, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 29, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 30, 'asd', 1, 0, '00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 31, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 33, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 34, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 35, 'asd1', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 66, 'BDOrwGc1qbQXd44x1QAmtsFQndkaNNflLvbS1GXO', 1, 0, '0', 0, 0, '2016-03-15 17:12:02', '2016-03-15 17:13:19'),
(35, 67, 'tUkLiuTyjIcliRfI7nUQczRjmYiLQBJ6fl7aZ7rX', 1, 0, '0', 0, 0, '2016-03-15 17:15:25', '2016-03-15 17:16:35'),
(36, 36, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 37, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 38, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 39, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 40, 'asd1', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 41, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 42, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 43, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 44, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 45, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 46, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 47, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 48, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 49, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 50, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 51, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 52, 'asd1', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 53, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 54, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 55, 'ads', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 56, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 57, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 58, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 59, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 60, 'asd1', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 61, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 62, 'asd11', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 63, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 65, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 66, 'asd', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 67, 'asd1', 1, 0, '0', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 68, 'fLjuKTzIprTNQRqi30xYNbXaME93vXXdDRTOsm0a', 1, 0, '0', 0, 0, '2016-03-16 08:09:15', '2016-03-16 08:10:11'),
(68, 69, 'PVLPJ4jFrrGKirFx13QlwdY9KIsciiHVQ4K1B44V', 1, 0, '0', 0, 0, '2016-03-16 08:41:36', '2016-03-16 08:45:25'),
(69, 70, 'P4PwIl0Bmhq8GJ74ODPl6OUXMIaPt1e7mODWsmaf', 1, 0, '0', 0, 0, '2016-03-16 13:54:55', '2016-03-16 13:55:44'),
(70, 71, 'B8zkFHwAuCaTK2cZY3cWO1CJSdCIaxFwFaKYIHdG', 1, 0, '0', 0, 0, '2016-03-16 16:08:57', '2016-03-16 16:09:54'),
(71, 72, '9Aq346ivgy8PyQ6juqx4IFbHt0pp1JFiMe3LHEQf', 1, 0, '0', 0, 0, '2016-03-17 06:31:18', '2016-03-17 06:33:03'),
(72, 73, '4MhZnJcMYWnnqs3qlr2D5FWl7gzP3Dz8gYBkqPwy', 1, 0, '0', 0, 0, '2016-03-18 10:20:22', '2016-03-18 10:20:45'),
(73, 74, 'jCGHk80Hc8FG4P1A29boLVv1UXVpekvTlTzW5N2q', 0, 0, '0', 0, 0, '2016-03-27 10:32:32', '2016-03-27 10:32:32'),
(74, 75, '01vbAXfpfntYjHACtQB66CDWWHDzDbi4tenas4CS', 1, 0, '0', 0, 0, '2016-03-28 05:36:12', '2016-03-28 05:37:04'),
(75, 76, 'K6NBsfFCwqnyZeWSAw0SEng4tevne3LHGNL0T6v6', 1, 0, '0', 0, 0, '2016-04-03 17:06:37', '2016-04-03 17:21:44'),
(76, 77, 'sGoRGikycfgWH18Ro0zUhY7T6uel3aZSHCuanwOp', 1, 0, '0', 0, 0, '2016-04-13 17:09:06', '2016-04-13 17:09:58'),
(77, 78, 'LExghx4VlaLQ6Jjc9ANVXvdRa6pAQUtayWeitULj', 1, 0, '0', 0, 0, '2016-04-14 08:11:33', '2016-04-14 08:12:07'),
(78, 79, 'yep2wbMFZo5k0YLAFTcSalwuZgJ1jG9qUPvxUz2p', 1, 0, '0', 0, 0, '2016-04-19 22:20:38', '2016-04-19 22:20:59'),
(79, 80, 'GCQIYWxSrm29xXCSeYWKsrMpEsxnH16dh77iMnoJ', 1, 0, '0', 0, 0, '2016-04-24 03:45:56', '2016-04-24 03:47:15'),
(80, 81, 'NA708rvH2qEdl1XMKKZcKmHg9ep43COGYkd0h3lz', 0, 0, '0', 0, 0, '2016-04-24 17:10:01', '2016-04-24 17:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finish_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finish_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_members` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `projects_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `name`, `occupation`, `start_month`, `start_year`, `finish_month`, `finish_year`, `url`, `team_members`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 4, 'Hari Om Appartment', 'Architect', '3', '2009', '7', '2010', 'http://chennaisharetips.com/areas/hariom-apt-next-to-vijay-sales-s-v-road-borivali-west-mumbai', 'Karan, Ravi, Jitu, Shiv, Amrit', 'Hariom Apt ., Next To Vijay Sales, S V Road, Borivali West, Mumbai is in the Borivali West locality, Hariom Apt . street and its pincode number is 400092.', 'Hariom Apt ., Next To Vijay Sales, S V Road, Borivali West, Mumbai is located in the Borivali West city/town, Mumbai district, Maharashtra state, India.\r\n\r\nMore ares in Pin code: 400092', '2016-01-21 20:18:12', '2016-01-21 20:18:12'),
(2, 3, 'buildblockz.com', 'Builder', '6', '2015', '', '', 'http://www.buildblockz.com/', 'Karan Rajwanshi, Ravi Kumar, Amrit Lenka', 'IIT Guwahati', 'Real Estate Professional Networking Platform And A Market Place', '2016-02-06 07:16:01', '2016-02-06 07:16:01'),
(3, 5, 'Sample Project', 'Civil Engineer', '6', '2004', '9', '2007', '', 'Ravi Kumar', 'Indira Nagar, Jaipur', '', '2016-02-10 10:53:03', '2016-02-10 10:53:03'),
(4, 1, 'Buildblockz', 'Co-Founder and CTO', '6', '2015', '', '', 'http://www.buildblockz.com', 'Karan, Jitendra Choudhary', 'Gauwahati', 'A targeted Real Estate Professional network.', '2016-02-10 17:07:52', '2016-02-10 17:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `total_users_boost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `skills_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `user_id`, `total_users_boost`, `created_at`, `updated_at`) VALUES
(1, 'Studio Appartments', 4, 1, '2016-01-21 20:18:58', '2016-02-23 15:17:20'),
(2, 'Designs', 4, 1, '2016-01-21 20:19:10', '2016-02-23 15:17:21'),
(3, 'Sketching', 4, 1, '2016-01-21 20:19:18', '2016-02-23 15:17:22'),
(4, 'studio', 5, 3, '2016-01-23 06:57:44', '2016-03-02 16:56:59'),
(5, 'landscaping', 5, 1, '2016-01-23 07:59:56', '2016-02-20 13:32:40'),
(6, 'duplex residences', 16, 1, '2016-01-23 11:06:22', '2016-01-23 11:07:18'),
(7, 'c', 20, 1, '2016-01-24 09:07:14', '2016-01-24 15:19:59'),
(8, 'startups', 5, 2, '2016-02-02 07:58:04', '2016-02-20 13:32:41'),
(9, 'Laravel', 1, 1, '2016-02-10 13:45:05', '2016-03-10 08:48:28'),
(10, 'Waterproofing Works', 30, 0, '2016-02-10 16:02:21', '2016-02-11 06:47:39'),
(11, 'Structural Repair Works', 30, 0, '2016-02-10 16:02:36', '2016-02-10 16:02:36'),
(12, 'Repair and Rehabilitation', 30, 0, '2016-02-10 16:15:03', '2016-02-10 16:15:03'),
(13, 'Marketing', 3, 1, '2016-02-13 11:00:21', '2016-02-17 10:43:36'),
(14, 'Business Development', 3, 1, '2016-02-13 11:00:36', '2016-02-17 10:43:39'),
(15, 'Operations', 3, 1, '2016-02-13 11:00:44', '2016-02-17 10:43:41'),
(17, 'entrepreneurship', 5, 2, '2016-02-15 19:04:58', '2016-02-20 13:32:43'),
(18, 'Designing.', 48, 1, '2016-02-25 12:48:41', '2016-02-27 09:42:17'),
(20, 'Creative ', 48, 1, '2016-02-25 12:48:56', '2016-02-27 09:42:17'),
(21, 'leadership', 5, 0, '2016-03-18 09:28:56', '2016-03-18 09:28:56'),
(23, 'Architectural Model Making', 76, 0, '2016-04-03 17:29:44', '2016-04-03 17:29:44'),
(24, '3-D view', 76, 0, '2016-04-03 17:30:16', '2016-04-03 17:30:16'),
(25, 'Web Development', 1, 0, '2016-04-06 16:59:40', '2016-04-06 16:59:40'),
(26, 'AutoCAD, STAADPRO', 80, 0, '2016-04-24 04:16:45', '2016-04-24 04:16:45'),
(27, 'MS OFFICE', 80, 0, '2016-04-24 04:17:06', '2016-04-24 04:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(10) unsigned DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `post_as_admin_page` int(10) unsigned DEFAULT NULL,
  `photo` tinyint(1) NOT NULL,
  `video` tinyint(1) NOT NULL,
  `link_preview` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `statuses_user_id_foreign` (`user_id`),
  KEY `fk_page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `user_id`, `body`, `page_id`, `group_id`, `post_as_admin_page`, `photo`, `video`, `link_preview`, `created_at`, `updated_at`) VALUES
(2, 1, 'hey everyone, buildblockz team is launching this website to make more advanced and reliable professional network within Real Estate', NULL, NULL, NULL, 0, 0, 0, '2016-01-20 16:28:53', '2016-01-20 16:28:53'),
(4, 5, 'Hello world! :P', NULL, NULL, NULL, 0, 0, 0, '2016-01-21 08:19:54', '2016-01-21 08:19:54'),
(5, 2, 'Best of Luck Team Buildblockz !', NULL, NULL, NULL, 0, 0, 0, '2016-01-22 10:10:44', '2016-01-22 10:10:44'),
(6, 11, 'thanks for giving everyone this nice platform', NULL, NULL, NULL, 0, 0, 0, '2016-01-22 14:07:06', '2016-01-22 14:07:06'),
(7, 5, 'The AAA-Expo, Guwahati has been amazing. Great response from the industry professionals has been wonderful.', NULL, NULL, NULL, 0, 0, 0, '2016-01-23 06:37:07', '2016-01-23 06:37:07'),
(8, 15, 'Amazing platform!', NULL, NULL, NULL, 0, 0, 0, '2016-01-23 06:58:45', '2016-01-23 06:58:45'),
(12, 26, 'amazing site.... a completely new concept.... all the best team bildblockz.......', NULL, NULL, NULL, 0, 0, 0, '2016-01-27 18:11:34', '2016-01-27 18:11:34'),
(14, 5, 'Find more updated ByeLaws. Bangalore, Jorhat, Shillong, Kolkata and many more. \r\nLink: http://buildblockz.com/byelaws', NULL, NULL, NULL, 0, 0, 0, '2016-02-02 08:01:30', '2016-02-02 08:01:30'),
(15, 3, 'https://www.youtube.com/watch?v=P7lWOkXuO8Q', NULL, NULL, NULL, 0, 0, 0, '2016-02-02 18:52:43', '2016-02-02 18:52:43'),
(16, 5, 'The Palm Island Dubai! World''s largest artificially build island! Wanna know how it was made? Here it is:  https://www.youtube.com/watch?v=0BXGh0EYJtE', NULL, NULL, NULL, 0, 0, 0, '2016-02-03 07:41:53', '2016-02-03 07:41:53'),
(17, 5, 'Impact of Foreign Direct Investment (FDI) in Real-estate sector. A very useful insight. Lots coming up it seems. http://www.businessinsider.in/Budget-2016-Impact-of-FDI-in-real-estate-sector-and-future-expectations/articleshow/50866872.cms', NULL, NULL, NULL, 0, 0, 0, '2016-02-07 14:18:06', '2016-02-07 14:18:06'),
(18, 5, 'Indian Government to ease norms for Real-estate\r\nSource: http://www.thehindu.com/business/Industry/government-to-ease-norms-for-real-estate-business/article8215046.ece', NULL, NULL, NULL, 0, 0, 0, '2016-02-10 10:49:34', '2016-02-10 10:49:34'),
(19, 30, 'Hi Guys, this is Deep Gandhi, Alumnus of IITG, Civil Engg, Batch 2010. I liked the concept that you all are working on and am interested in getting involved with you guys to build up this platform. As I am working as a contractor with my own firm as start up since last 3 years and am well versed with the real estate market dynamics in and around mumbai. Do drop me an email at: concretecare@gmail.com if you are interested to discuss further.', NULL, NULL, NULL, 0, 0, 0, '2016-02-10 16:16:18', '2016-02-10 16:16:18'),
(20, 3, 'Beauty of wood... Do watch :)\r\n\r\nhttp://www.houzz.com/ideabooks/5488347/video/houzz-tv-meet-the-gamble-house-a-symphony-in-wood', NULL, NULL, NULL, 0, 0, 0, '2016-02-11 09:43:58', '2016-02-11 09:43:58'),
(23, 3, 'Here are some master pieces!!!! do have a look\r\nhttp://theculturetrip.com/south-america/brazil/articles/a-city-of-contrasts-the-top-ten-architectural-masterpieces-of-s-o-paulo/', NULL, NULL, NULL, 0, 0, 0, '2016-02-11 22:27:20', '2016-02-11 22:27:20'),
(25, 3, 'Inspiration: A gorgeous needs a gorgeous house too. :)\r\n\r\nhttp://www.houzz.com/ideabooks/59071785/video/houzz-tv-144-gorgeous-homes-around-the-globe', NULL, NULL, NULL, 0, 0, 0, '2016-02-13 10:56:25', '2016-02-13 10:56:25'),
(28, 4, 'Architects from 2015''s most innovative companies look into their crystal balls and divine the ways the built environment will evolve.\r\n\r\nhttp://www.fastcodesign.com/3042937/sector-forecasting/5-trends-shaping-the-future-of-architecture', NULL, NULL, 0, 0, 0, 0, '2016-02-29 21:17:44', '2016-02-29 21:17:44'),
(29, 59, ':)', NULL, NULL, 0, 0, 0, 0, '2016-03-06 19:58:08', '2016-03-06 19:58:08'),
(32, 3, 'Green is the new cool and requirement of the hour. :)\r\n\r\nhttps://www.youtube.com/watch?v=hFDRvELvSyw', NULL, NULL, 0, 0, 0, 1, '2016-03-11 03:00:57', '2016-03-11 03:00:57'),
(33, 62, 'very good initiative..:-)\r\n', NULL, NULL, 0, 0, 0, 0, '2016-03-12 09:08:34', '2016-03-12 09:08:34'),
(35, 5, 'It will now be difficult for promoters and builders to delay projects, with Parliament today giving nod to a Bill which gives relief to home-buyers. Link:  http://www.assamtribune.com/scripts/detailsnew.asp?id=mar1616/at055', NULL, NULL, 0, 0, 0, 1, '2016-03-16 04:41:41', '2016-03-16 04:41:41'),
(36, 69, 'all the best guys on the initiative you all have taken up. (y)', NULL, NULL, 0, 0, 0, 0, '2016-03-16 08:55:47', '2016-03-16 08:55:47'),
(37, 4, 'Some insights on the Impact of Budget''16 on real estate?\r\n\r\nBudget 2016 – Good news or Bad News for Realty Sector?\r\n\r\n Awaiting the budget 2016 to launch the instant revival and boost of the realty sector? If \r\n\r\nyour answer is yes, I would be glad to warn you of your impending disillusionment. \r\n\r\nRather, the government has adopted a balanced approach for a long-term and sustained \r\n\r\ngrowth of the sector to achieve its goals of ‘AFFORDABLE HOUSING’ and ‘HOUSING FOR \r\n\r\nALL BY 2022’. The budget seems to evidently reflect government’s belief that \r\n\r\ncommercial office real estate is on recovery path. Hence, the residential real estate has \r\n\r\nbeen the thrust of the Finance Minister in the Budget 2016.\r\n\r\nSeveral tax exemptions as part of the budget are good news for both developers and \r\n\r\nhome-buyers. \r\n\r\nTo begin with, the government has provided a hundred per cent tax exemption on \r\n\r\nprofits from housing projects for flats measuring 30 sq. metres in four metro cities and \r\n\r\n60 sq. metres in other cities. The tax benefit can be availed, if and only if, the project is \r\n\r\ncompleted within three years of approval.  \r\n\r\nAlong with the above-mentioned provision, an additional exemption of service tax on \r\n\r\nconstruction of houses up to 60 sq. metres will make the sector even more lucrative for \r\n\r\ninvestors which will boost the supply of houses. \r\n\r\nThese cost-benefits to developers will enable them to charge properties at lower prices \r\n\r\nthereby reducing housing costs. But, the limit of 60 sq. metres makes the benefit \r\n\r\ninadequate considering its non-availability to buyers of flats of 2BHK or more.\r\n\r\n Yet another opportunity available to first-time home buyers in affordable segment is a \r\n\r\ntax-rebate of `50,000 on interest paid by them on a loan amount up to `35 lacs, provided \r\n\r\nthe property value doesn’t exceed `50 lacs. Given the benchmark of `50 lacs, this is but \r\n\r\nonly a nominal relief for the property price has exceeded way beyond           `50 lacs.\r\n\r\nAbove all, the budgetary provisions will help promote real estate investment trusts \r\n\r\n(REITS). A real estate investment trust works like a mutual fund but instead deals with \r\n\r\nreal estate assets. It aids the developers or private equity to sell or mortgage their \r\n\r\ncompleted projects. Hence, developers have an additional avenue to exit with the \r\n\r\ndesired liquidity. Several tax implications including Dividend Distribution Tax \r\n\r\nprevented the launch of the product in India till date. Presently, the abolition of DDT for \r\n\r\nREITs in the budget will encourage REITs. By making REITs attractive for investors, the \r\n\r\nBudget provides opportunity to fund-starved developers to raise capital and keep the \r\n\r\nsupply running.\r\n\r\nConclusively, there is enough on platter to catapult the demand and supply in the low-\r\n\r\ncost housing segment of the sector. But, the terms and conditions of the benefits will \r\n\r\nkeep the metro cities unaffected considering their soaring property prices. These \r\n\r\nprovisions are in line with the government’s mission of ‘Housing for all’.\r\n\r\nDigitization of land records is yet another incentive of the government. Delays in land \r\n\r\nacquisition process cause cost-overruns making construction and housing an even more \r\n\r\nexpensive affair for you. The Government’s proposal to digitize land records while \r\n\r\nallocating `150 crore for the same will boost the confidence of property buyers and \r\n\r\ninvestors. This will also expedite the process of land acquisition, thereby checking \r\n\r\ndelivery delays and cost escalation. \r\n\r\nAll these steps of the government will take the realty sector forward on road to revival \r\n\r\nand, sustained and revival growth.', NULL, NULL, 0, 0, 0, 0, '2016-03-18 09:34:40', '2016-03-18 09:34:40'),
(39, 75, 'All the best guys...........', NULL, NULL, 0, 0, 0, 0, '2016-03-28 05:38:49', '2016-03-28 05:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE IF NOT EXISTS `tenders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ownership` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issuing_authority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estimated_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=128 ;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `city`, `state`, `link`, `ownership`, `description`, `industry`, `issuing_authority`, `estimated_value`, `product_category`, `title`, `open_date`, `close_date`, `created_at`, `updated_at`) VALUES
(1, 'Guwahati0', 'Assam', 'http://www.gmda.co.in/building_bye_laws.php', '', 'Construction', '', 'GMDA(Guwahati', '', '', '�Partition works in Civil Engineering Department- Geotechnical lab, Survey lab, Construction of material \r\nstorage shed, providing and fixing of sunflim, curtain, notice board and chalk board in the new Annex\r\n building of C.E. Department at Academic Comp', '2016-01-20', '2016-01-29', '0000-00-00 00:00:00', '2016-02-11 06:11:34'),
(2, 'Kanpur', 'Uttar Pradesh', 'http://www.iitk.ac.in/iwd/tenderhall.htm', '', '', '', '', '', '', 'Setting right of vacant house no 3074.', '2016-01-25', '2016-01-28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kanpur', 'Uttar Pradesh', 'http://www.iitk.ac.in/iwd/tenderhall.htm', '', '', '', '', '', '', 'Setting right of vacant house no 396.', '2016-01-25', '2016-01-28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kanpur', 'Uttar Pradesh', 'http://www.iitk.ac.in/iwd/tenderhall.htm', '', '', '', '', '', '', 'Construction of structural lab at back site of Helicopter lab', '2016-01-27', '2016-01-29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Kanpur', 'Uttar Pradesh', 'http://www.iitk.ac.in/iwd/tenderhall.htm', '', '', '', '', '', '', 'Setting right of vacant house no 602 with SQ and Garage', '2016-01-27', '2016-01-29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Kanpur', 'Uttar Pradesh', 'http://www.iitk.ac.in/iwd/tenderhall.htm', '', '', '', '', '', '', 'Floor tiles and false ceiling in Recruitment section F.B', '2016-01-18', '2016-01-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Rupnagar', 'Punjab', 'http://www.iitrpr.ac.in/tenders', '', '', '', '', '', '', 'NIQ-133 for the work of Supply,Installation, Erection of poles and floodlights in football field at Transit Camus of IIT Ropar.', '2016-01-18', '2016-01-27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'silchar', 'Meghalaya', 'http://www.nits.ac.in/tenders/NITS_PS_374_Admn_Statue_16.pdf', 'nit silchar', 'Tender for supply and installation of sculpture', 'contractor', 'Nit silchar', '', 'sculpture ', 'Tender for supply and installation of sculpture', '0000-00-00', '0000-00-00', '2016-02-05 12:25:38', '2016-02-05 12:25:38'),
(24, 'Ranchi', 'Assam', 'http://www.jharkhand.gov.in/documents/10179/53951/Building%20Bye-laws%202002%20and%20Amendment%202006', 'Defence', 'Urban Development & Housing Department Government Of Jharkhand', 'Drain Construction', 'Urban', 'Rs. 14 Lakhs/-', 'Drain Construction', 'Repair And Maintenance Of Area Drainage WSA At Tezpur, Assam', '2016-01-30', '2016-02-19', '2016-02-07 11:20:13', '2016-02-10 22:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=82 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `designation`, `mobile_number`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ravi Kumar', 'BuildBlockz Team', '', 'ravirock0912@gmail.com', '$2y$10$fe34/Nyk9B6W1FGkz01cAesYEDnVeHNBDw/u4f/ZKduO9Xj/zuZ4y', 'vsyzWUwjsCsSdgKRIh6d7N8YVL2Y8tTMpXNrWYh5OqmCicFk7AYHxr8zQrbK', '2016-01-20 15:22:09', '2016-04-29 14:18:40'),
(2, 'Vijay Dinanath Chauhan', 'builder', '', 'abc123@yahoo.com', '$2y$10$DATt0EayiwtVI6snbcMI7OK/d82SxRci2tO00bZO8BSoZEfRrQ5ka', NULL, '2016-01-20 16:30:09', '2016-01-20 16:30:09'),
(3, 'Jitendra Choudhary', 'BuildBlockz Team', '', 'jitu.buildblockz@gmail.com', '$2y$10$BRx2qkGg4wBw8.ZvL1yO.eBrP5K.N1iPLkr.GoO1ep6kNzlPF9mZS', 'lhJiJE6rEydhGuzzij5Rf9irotxAZPtrHeqL3OmBqKQJ9pSSWS8BsIuAuXYx', '2016-01-20 17:21:31', '2016-02-15 13:29:59'),
(4, 'Sarah Jane', 'architect', '', 'tulika1993@gmail.com', '$2y$10$C5dSUOV7vZJrIviEf91FoOx.4KzDaGeVtXivF5twmO2f5QpoRjHvG', 'JJlCFv0A16UOoujBb1VE37tRFVsjODSdAYjklyIiVKf5PBBogMaWiwPSg3rl', '2016-01-20 18:39:15', '2016-04-19 22:25:27'),
(5, 'Karan Rajwanshi', 'BuildBlockz Team', '', 'karan.buildblockz@gmail.com', '$2y$10$MKbSKkGN9frkOuNV0uoKC.XynDEMDt4zeG.8xAmNXWW8yB6SxqJ9W', 'utkUR7MfRnvxDV3H9RmZwcjNN3CfGi76Bz0fHU0awAP8XD0YewV4ovCNdcrj', '2016-01-21 07:46:17', '2016-03-14 15:23:59'),
(6, 'amrit raj', 'Architect', '', 'amritrulez@gmail.com', '$2y$10$FNTCzUyeTjB6Vqed4M8A/.QoYJeD0etWHxzuRh1G/e8TbDi4UljIG', NULL, '2016-01-21 09:12:52', '2016-01-21 09:12:52'),
(7, 'Tathagat', 'Architect', '', 'adasd@adsad.xsa', '$2y$10$6ntu5uduSiDZHEDrzXACiemGVC5WDpwagGXUpS9LIwmC.GlUQprau', NULL, '2016-01-21 12:36:29', '2016-01-21 12:36:29'),
(8, 'Ankit Bansal', 'Contractor', '', 'ankankitbbansal@gmail.com', '$2y$10$5tVMyiLTm9Di.P.h.2JwBuXgF9Hjtj95VJWMqXBR2A1s1fNoYeBsK', NULL, '2016-01-21 15:37:58', '2016-01-21 15:37:58'),
(9, 'NARENDRA KUMAR', 'Construction Manager', '', 'kumar786naren@gmail.com', '$2y$10$tZ1BM7tzaHvLsTe46HXN0e8DVFpKRBMr0r45Zjn4Gv75WB1xaqNam', NULL, '2016-01-21 18:48:34', '2016-01-21 18:48:34'),
(10, 'Prasanta Mandal', 'Civil Engineer', '', 'prasantamandal44@yahoo.com', '$2y$10$GOYEUBZ7aAThU0TlQQ84JOeygCNXd81Bpf9H//FxVL9AMqlWmc6dq', 'g1HfG8qde14fJiUv7ntvJ80DWCYVYhPyFVfnbtm9LjfcJNC04L0t99U0WIKR', '2016-01-22 03:41:16', '2016-02-10 16:27:35'),
(11, 'lal babu', 'Structural Engineer', '', 'lal.krishnaut.babu@gmail.com', '$2y$10$QbcYU4eHJD5HTqSZ0S8Q0ugjVF0Ejmuo1vHV7YCDi2X4zDgADlkCG', NULL, '2016-01-22 14:05:11', '2016-01-22 14:05:11'),
(12, 'Surendra Choudhary', 'Field Engineer', '', 'choudharysurendra213@gmail.com', '$2y$10$eD6m1r7TW4E44v/I/g9e..QVH5XBdc0ZELzTghyXLfbKPZM8HIgCy', '2t6gK5nYwxgA2kOBPFnvQWlOPL4FYzrcVLscm8Wb5p26HUBAWr5MZGtEX8Gb', '2016-01-22 15:55:03', '2016-01-23 12:17:39'),
(13, 'RAKESH', 'Builder', '', 'ata.patna@rediffmail.com', '$2y$10$d/pPJIaPjTOldpQ6Xwl7WuG34OckHXTUSIWc6hSIhVYCzITP6CHma', NULL, '2016-01-22 16:49:35', '2016-01-22 16:49:35'),
(14, 'Amit Awekar', 'Civil Engineer', '', 'zickpah@gmail.com', '$2y$10$ZAjyX5N5fxDvhN5rMbpGsO8yLuBK.ErOT2gaSNgZhQrp6eCOq77Ne', 'vMuPWJZVLm7sLhyjuJRGO1MPS9jCy3MB8hP4MV4niOCbrqEYlXfjWzjJdSFa', '2016-01-22 19:21:03', '2016-01-22 19:22:56'),
(15, 'Amrit Kamal Lenka', 'BuildBlockz Team', '', 'amritlenka96@gmail.com', '$2y$10$LtazjYHxLKr.Z/Ev3mehcexIWoI9mEXCVR.20EAh8Fy/psXKforCi', NULL, '2016-01-23 06:29:05', '2016-01-23 06:29:05'),
(16, 'Chinmoyananda Phukan', 'Architect', '', 'cphukan@yahoo.com', '$2y$10$lxF3sYdKEHCwVVmcA3mjbOT7Wn2kr.oMHHTh8Wi432L6/XaFS1VUu', 'oWDs4zaRQGmecX8V1cCAaixrpiYLBigG9YIgk1HmtPf8KyrV9kwkxosNlP4V', '2016-01-23 11:04:41', '2016-01-23 11:06:38'),
(17, 'vikash choudhary', 'Structural Engineer', '', 'vikuc90@gmail.com', '$2y$10$2usIB1Wkj85eH58D83YosOrkQANT2I//ZcbcjRLrFCC8TYoZZAasy', NULL, '2016-01-23 17:40:34', '2016-01-23 17:40:34'),
(18, 'Sweta Agrawal', 'Architect', '', 'swetaagrawal20@gmail.com', '$2y$10$Wud9iSmuRyf66rGtv2nvweuvBGskdHQLxkdrgXBIFWfqqeZILohVW', 'nBv5YedtwZaVYSbI27bF7vJZBiR6Lw7bmloTYO1hdAXGWVZS06OSn4oD1n5x', '2016-01-23 19:21:20', '2016-01-23 19:25:56'),
(20, 'mayank', 'Architect', '', 'mayankgarg311@gmail.com', '$2y$10$acKmjXvZyh/BZu5n9QPCKePwZV5YhWrH0/KBUFPPDgq/PF/qg.Zeu', NULL, '2016-01-24 09:05:38', '2016-01-24 09:05:38'),
(21, 'Sanghamitra Choudhury', 'Architect', '', 'itssangha@yahoo.in', '$2y$10$xi4noReO8wzFpFW3Lk2UAumBcrKeLZWBbuDZ1eg46Gn6pvugCOEha', NULL, '2016-01-24 10:12:20', '2016-01-24 10:12:20'),
(22, 'BUILDWORTH REAL ESTATE', 'Builder', '', 'corporate@buildworth.in', '$2y$10$IsYzKNrNx5vLfBjhQB7MluLK1m9lgrym86DYmdNxqsdAfiGlzujOy', NULL, '2016-01-25 08:23:33', '2016-01-25 08:23:33'),
(23, 'RIPUNJOY BORTHAKUR', 'Project Manager', '', 'root281@gmail.com', '$2y$10$LNiQmSruToBDIKNNvG8wouY8lrHwJsnBK0Y62900ABuLlbT0mGP/2', 'CgOAN1VK8LBW8U35VTjmyjh0eKLATQFUbM5FaJHWB36h4tlnv806K90WKx0V', '2016-01-25 08:47:50', '2016-01-27 11:37:06'),
(24, 'Kandukuri Manasa', 'Builder', '', 'manasa.k0704@gmail.com', '$2y$10$Agdm5ziNRoYABNJc2TSbduxdR0JRzaEQFggyZ8.kdeQK8fJ2GqTUa', NULL, '2016-01-26 07:17:07', '2016-01-26 07:17:07'),
(26, 'nikita', 'Interior Designer', '', 'nikitamittal222@gmail.com', '$2y$10$mvBqaK9Dw.gdmfzfXhLqAudxMP3Rx0HBjeQ38h2Xf3D4RrrOBPy3i', NULL, '2016-01-27 18:08:37', '2016-01-27 18:08:37'),
(27, 'Yoshitha Kuntumalla', 'Architect', '', 'yoshitha.kin@gmail.com', '$2y$10$fGf4N3iC.Jilo1RCE.HVPuYJ56Kd5sEuyRUch09lVnvBnzvxY1lmG', 'OexMwNu9cmK4gftKPMjnziahiZez3ffTUn0FtXj12XHWAUepxEJFJA8spTKO', '2016-01-31 13:33:44', '2016-01-31 14:12:52'),
(28, 'Aashish Bothra', 'Builder', '', 'aashishbothra1@gmail.com', '$2y$10$gheDE.DDyKyXqrDV9Evvhe/gDjogJ4CUZfdubhUI2RH4.2RNDIMPC', NULL, '2016-01-31 14:30:16', '2016-01-31 14:30:16'),
(29, 'amit kumar', 'Structural Engineer', '', 'amit.1266@yahoo.in', '$2y$10$yeQFPFEAqtYI9gcqf0rxFOtkvgbw0ODyd7PW6zXnJ3x/yIoSSFoUK', 'NP5CbPdrqf03UvB39mrfctTj3G8N65ynu539CaEJySwVlN16GArJ8owznjkR', '2016-02-05 14:11:58', '2016-02-05 14:39:50'),
(30, 'Deep Gandhi', 'Contractor', '', 'concretecare@gmail.com', '$2y$10$FE4WmvVeCtK3EQDG6Dfemev7epFD8.i4APGrydzkLGWjkMXq5gCGO', NULL, '2016-02-10 15:45:44', '2016-02-10 15:45:44'),
(31, 'Ashutosh Agrawal', 'Architect', '', 'aaashutoshagrawal0@gmail.com', '$2y$10$6ESdgWZ9m.mWnvCkWUiA9Oy.iIiCTGS3Ul53.ICQo0JGwyi7aPyyG', NULL, '2016-02-10 19:08:30', '2016-02-10 19:08:30'),
(33, 'Balmukund reality pvt ltd', 'Builder', '', 'bconcast@yahoo.com', '$2y$10$1HUr4Ur4wO3zmpHgcnAprOXWFcjJiCg7lFt8GuJBHUOKHUPl7Vywi', NULL, '2016-02-11 06:11:45', '2016-02-11 06:11:45'),
(34, 'sfs', 'Architect', '', 'wefderwc@gmail.com', '$2y$10$hWouvj7n8OjQmQjNXE4rlucUSIfT87wnMOgwi4ZrqhXG3ehKTFcKa', NULL, '2016-02-11 10:26:05', '2016-02-11 10:26:05'),
(35, 'test', 'Architect', '', 'test@test.com', '$2y$10$ed.yyWl5gOwGxA6TyPC9j.snwwMcUym/DEVPIpEP/2ds5QNGBvel6', NULL, '2016-02-11 11:36:31', '2016-02-11 11:36:31'),
(36, 'Moumita', 'Architect', '', 'ar.moumita@gmail.com', '$2y$10$11L9T/Xa3UJGF0Mr2E/uCu5HGx610f2xf3uvmdsPLt6Sdy.wz1elO', NULL, '2016-02-12 07:31:29', '2016-02-12 07:31:29'),
(37, 'Virat', 'Student', '', 'viratsardana10@gmail.com', '$2y$10$rk2m..Ii7bJyBwV3J2Anmu6uWWFy44iXx0r8jg.JBBc3.aO5jaF.q', NULL, '2016-02-12 17:49:48', '2016-02-12 17:49:48'),
(38, 'Ankit Dadriwal', 'Interior Designer', '', 'ankitdadriwal@gmail.com', '$2y$10$e8AWsSw1wPOBODh5btDdIOh/aOhbjpf4hr3WdLWqxUg4rMcu68L8y', NULL, '2016-02-14 13:29:26', '2016-02-14 13:29:26'),
(39, 'xyz', 'Architect', '', 'abc@gmail.com', '$2y$10$tISkTALJBPfmwtG8IymlheqZY/YARb02BPGbhGZkdhfRvFU3KIXR2', NULL, '2016-02-16 12:19:15', '2016-02-16 12:19:15'),
(40, 'Arvind Choudhary', 'Student', '', 'iarvind@live.com', '$2y$10$Y26DexqVD1wMiGF3EnDLTeVU9.yrBYJ3.qaNc.kBnuYa854rpbeCO', NULL, '2016-02-16 12:56:30', '2016-02-16 12:56:30'),
(41, 'Vikas Goel', 'Student', '', 'vikasgoel91@gmail.com', '$2y$10$uQfjKZShshff8.sXFxNAPOf2meBmCW0e.4KK4cM.zWCm7nH8htIGa', NULL, '2016-02-16 14:12:37', '2016-02-16 14:12:37'),
(42, 'Arya Erectors India Private Limited', 'Builder', '', 'aryaerectorsindia@gmail.com', '$2y$10$TyFbvNG0N/rW2urh5zqaqew9Bi2OgUmAkf01EizUHXAyGlGDTSBhK', NULL, '2016-02-17 10:39:30', '2016-02-17 10:39:30'),
(43, 'Test', 'Architect', '', 'abc@abc.com', '$2y$10$Oqz9PgBEfoPu.a9X0xN26eEB1HN.z8tGPELnP6JAV65T4Dr/18ipu', NULL, '2016-02-17 14:33:20', '2016-02-17 14:33:20'),
(44, 'Sameer Arora', 'Contractor', '', 'sameer.arora.prime@gmail.com', '$2y$10$eDu7SFbfmGEBUeqqlh7EBefH6pPLGiY.gzyYEsL9cBcrUnapDAAsm', NULL, '2016-02-21 18:05:58', '2016-02-21 18:05:58'),
(45, 'ram', 'Architect', '', 'ramnam@gmail.com', '$2y$10$SYo4k4aVX2wkStoHEVFzqO7Ld2Zv98/WBadXA2en3IkdYpfJI9bfS', NULL, '2016-02-22 09:23:17', '2016-02-22 09:23:17'),
(46, 'Ramdeep Singh', 'Architect', '', 'ramdeep.vismaad@gmail.com', '$2y$10$D3rBydbCPpWOQcWnP0vHIez4VgUWFrnxWWDKORw3eskoDGvrgOXlS', NULL, '2016-02-23 09:41:34', '2016-02-23 09:41:34'),
(47, 'Rishav Jain', 'Contractor', '', 'rishav.nluo@gmail.com', '$2y$10$NjyFhl5FcYzVpU7uzJLmN..tGCzaZ.kOL28m3h1zJKv/LJfiuu/mi', NULL, '2016-02-23 11:02:49', '2016-02-23 11:02:49'),
(48, 'ANKUSH JAIN ', 'Interior Designer', '', 'attikinterior12@gmail.com', '$2y$10$WrQmkFeN61dtmrNiAWpKLOHt4I5R4QynQlQCzYyiUkKmvZBJX8gvS', NULL, '2016-02-25 12:42:52', '2016-02-25 12:42:52'),
(49, 'monu', 'Builder', '', 'trg@gmail.com', '$2y$10$aZbckOm1VxolYB66LKy7duNdP1LXJRzUph4bo5v6/ac/XQfGg9g3m', NULL, '2016-03-01 06:40:21', '2016-03-01 06:40:21'),
(50, 'sandeep gurung', 'Architect', '', 'sandgurung@gmail.com', '$2y$10$kOptOcX17vi2blrjjG958uiOarpcah1K84cuAsjNVQfYafMTyIeE.', NULL, '2016-03-02 06:26:58', '2016-03-02 06:26:58'),
(51, 'JYOTIRMOY DEKA', 'Architect', '', 'ankur28jn@gmail.com', '$2y$10$LR/aMI.b078DuFVsX8l3leVupETjvP5TtvclKzIXK/iMywSaUyLkO', NULL, '2016-03-02 06:27:52', '2016-03-02 06:27:52'),
(52, 'SILPIREKHA PANDIT', 'Architect', '', 'silpi.rekha@gmail.com', '$2y$10$5G8c0AWQN891P5sThbknPOcItOTx8prjW85Ib3s4SAqrIBudX5Liq', 'rmccDdc632CVrzrXTKjxEBI655envTycna0GAKGOeeRsACMV23cGxfqDizkZ', '2016-03-02 07:19:15', '2016-03-02 07:32:07'),
(53, 'Hrishiraj Sarma', 'Architect', '', 'hrishiraj86@gmail.com', '$2y$10$uEwCE41VA47hry2JYZcb9epr2LWIonmnLugsuemLuq6LFE8Lc9ohy', NULL, '2016-03-02 10:33:15', '2016-03-02 10:33:15'),
(54, 'Lalremruatfeli', 'Student', '', 'remruatfeli80@gmail.com', '$2y$10$f5sWoPT4sSEQ/K52tsWMXuMAuk93cjwWHx8j1IZGvZOBPfSZzACXa', NULL, '2016-03-02 11:39:08', '2016-03-02 11:39:08'),
(55, 'Tanmay Sarkar', 'Student', '', 'tanmaysrkar@gmail.com', '$2y$10$FCSy6uCCZcyAqXCVBtgJMuGKKy0mE6s8IcSAw/yL7Nl5GitW0Bw3K', NULL, '2016-03-02 21:00:07', '2016-03-02 21:00:07'),
(56, 'Vishwas Vyas', 'Architect', '', 'vyasvishwas8@gmail.com', '$2y$10$mS08FSSfSfVgyUF3cjjbSedu3NiN2isJW2Cn2Ahp7YbH05kgs30sO', NULL, '2016-03-03 19:19:15', '2016-03-03 19:19:15'),
(57, 'asd', 'Contractor', '', 'qwerty@gmail.com', '$2y$10$fngYx8thj4Z7WyIiOE3pCeMh9kpITuTHLqBxSwaagtlFMmu.xJn26', NULL, '2016-03-05 11:08:27', '2016-03-05 11:08:27'),
(58, 'John Doe', 'Architect', '', 'johndoe@mailinator.com', '$2y$10$92JPMFhMoFCg3sSi.66hf.vnCXqLHUyed8mV5fDRAdv5uzd0DFF1G', NULL, '2016-03-06 08:47:53', '2016-03-06 08:47:53'),
(59, 'asd', 'Civil Engineer', '', 'asd@gmail.com', '$2y$10$iAv7YRgbBPi2FEA1/u0MgOqgacIH2PRnKkujNmFrh/OC7GF51NhR2', '88E7dptM20O83vHqOmWJVOVYZzm9CXIZ39VU326iIygHTc1hZDR4BlN8W22l', '2016-03-06 19:55:12', '2016-03-06 19:59:43'),
(60, 'Mohit Dave', 'Architect', '', 'mohitdave1993@gmail.com', '$2y$10$.IQbWuKIgxKMd.ntQvp.JeVwWM4G1oi3CDvmzpOA/B/e0loosFiWm', NULL, '2016-03-10 11:54:12', '2016-03-10 11:54:12'),
(61, 'SUNIL RAJWANSHI', 'Civil Engineer', '', 'gullu.rajwanshi@gmail.com', '$2y$10$Af2gajGrCksRa8YQsslcyOU68mzXi4nEJ7ihmzwDVEpLiY5WV7Ztq', 'mbVwHuN8UoeRbZrQNZOGpgTKo7iMVNzSQR3GvVrRGO7nMJhgdRxT2rwq2TcS', '2016-03-11 08:21:14', '2016-03-11 09:30:50'),
(62, 'Ar. Topubratta Dutta', 'Architect', '', 'topubratta@gmail.com', '$2y$10$r1YWerGqdDLHvOztTREcROE7Y7v26.jDEiWR4guyzHKysLm60Qth.', 'HYs5Q20M05gsCgoBz9OwKR4nVnekQZ75TZx7Y0GYLGZq9ZonVyc6P7UgsOln', '2016-03-12 09:07:28', '2016-03-26 06:11:47'),
(63, 'Ar. Jinti Borgohain', 'Architect', '', 'jinti_b@yahoo.com', '$2y$10$xGAcq3wD4tOIeDKY5EXE2ubDSqO9bOb6qPSVDLq4RqftM3Hmyyl/S', NULL, '2016-03-12 09:21:30', '2016-03-12 09:21:30'),
(65, 'Random Test', 'Architect', '8080808080', 'asd@asd.com', '$2y$10$o/cEuo/PC0BnlHfKD9RbGe5RFBJvq1sPyJj71dlAXMB4vgKxotSFq', 'ugjWxcuhRV15MfLK5V9dngtP4HGYEP2TG2A2SHZpnY2vwaZYVf93DA1QFo8y', '2016-03-14 15:24:32', '2016-03-14 15:24:44'),
(66, 'vivek kumar kedia', 'Student', '8981770542', 'vivek.kedia0542@gmail.com', '$2y$10$lfeEUdXFssgLOZZu7TrTUOEFpu3LZDV9KLH46jdSF7Khf2EfFvWCa', 'EZKrVyLbNlQ19ib9JQBoCm8qoobfvgExaxJpRMQEUMNkTNcIxMmE7L3dOtGH', '2016-03-15 17:12:02', '2016-03-15 17:14:00'),
(67, 'Aritro Biswas', 'Student', '9007770348', 'aritrobiswas1994@gmail.com', '$2y$10$Afdw5flZmeNLuAMNFvhDw.NTrcIIlwTqY.jvWnLHFr6skR1eX52Bq', NULL, '2016-03-15 17:15:25', '2016-03-15 17:15:25'),
(68, 'SYED GUFIK HUSSAIN', 'Architect', '9954393674', 'gufik.h@gmail.com', '$2y$10$g5j8vMFrHO09BLhYBV3jbOKRDt.iaruYL8tj4pKFcph/vIhq/NUn2', NULL, '2016-03-16 08:09:15', '2016-03-16 08:09:15'),
(69, 'tendrel zangpo', 'Student', '8474875619', 'tendrelzangpo@gmail.com', '$2y$10$rgd9v1Gm0Kl/I6B6ryNOPeOm3kODz3m/0urt84j2pkFg1YMB5tcEK', NULL, '2016-03-16 08:41:36', '2016-03-16 08:41:36'),
(70, 'Damaechwa Allerich Hynniewta', 'Architect', '9615630882', 'damien.hynniewta@gmail.com', '$2y$10$cKzP87NiBlao7dziVn809uHpRnysdFf1gmhF9YLimtoR1pddxvrqa', 'QJEWZva7AqVJTuiYfngs58NO6qSbvPa3ow9Oy6LJ5jzgxKmOuLLpUKJBS10Q', '2016-03-16 13:54:55', '2016-03-16 14:00:55'),
(71, 'Karuna agarwal', 'Student', '8399031131', 'Karunaagarwal2511@gmail.com', '$2y$10$1H5btsyKhRFfGco8yTFdie7utpiX70gDzrqnguxtoER.F4vMy.Jo2', NULL, '2016-03-16 16:08:57', '2016-03-16 16:08:57'),
(72, 'Nabaneeta Sharma', 'Student', '9435608529', 'nabaneetasharma9@gmail.com', '$2y$10$IxK0ovjFkBiXDZI1KGL7HO/fYvvOt2B0e3wJ3wHzyEMWo4BeLIzUq', NULL, '2016-03-17 06:31:18', '2016-03-17 06:31:18'),
(73, 'Shivendra Singh', 'Structural Engineer', '8474864794', 'shivendra123singh@gmail.com', '$2y$10$LLwMcmlsTmrBM6gGhZiwJeDQONA3r4O5ZpghXHiVb83PMlYz2nHpu', 'viEkTjg31eQyrhkrPjX3Agy8wpZfQlm9sUMCyUtCFShlKi11aCWIpNwfN1aS', '2016-03-18 10:20:22', '2016-03-18 10:20:56'),
(74, 'arpit', 'Architect', '9678439022', 'arpit.padwekara@gmail.com', '$2y$10$VfMuA9Kus3jcDfR5mNJqMui4JI37OtvOfNrUWZ6WQShMFUBu6HD3i', 'QunOrCUu1sTiSEAZrAvZq77d9vSXMjimry5ytmvwEZFjZEwnw2G4tEzsXIFc', '2016-03-27 10:32:32', '2016-04-03 14:28:49'),
(75, 'SUBHASH LAMBA', 'Student', '9782317447', 'subhash0410mech@gmail.com', '$2y$10$wBo.butkSZHjrTVaRIlSFuvkg6CW/5xA50kDrkYUDr3xzjSk4XOHm', NULL, '2016-03-28 05:36:12', '2016-03-28 05:36:12'),
(76, 'Biplob Das', 'Student', '9401215963', 'biplob.das4@gmail.com', '$2y$10$7ie1hyYezDeOpvzqLZ3Y8utQYq/.r.n.AzeYiTq09yRS80.pTerZq', 'FzJXndhk7prqFRI1QHRG5OUjGEZoV5gJ8gfaMIguErEg8RawESqn26hMDMH7', '2016-04-03 17:06:37', '2016-04-03 17:22:15'),
(77, 'ajay patel', 'Student', '8460543396', 'pateldgking@gmail.com', '$2y$10$uEVJeJufe80sE7/WiAiQMOxGD2oeIK/b67c21BUNCTFdZiMooWR7G', 'T3smJhKz0QrDRUjoeq2HCxWNN7UX7oamZlphsn4iJRaxzgdJVE2rMqDtpeNr', '2016-04-13 17:09:06', '2016-04-13 17:10:13'),
(78, 'Sangram Mohite', 'Student', '8721928588', 'sangram960@gmail.com', '$2y$10$RNid.gMjliO0ZpiPZWInluZBuNmPcSLAnKhbiCkzLELLJ/RAVwadO', NULL, '2016-04-14 08:11:33', '2016-04-14 08:11:33'),
(79, 'Yogesh Chauhan', 'Student', '8285250728', 'yogesh.buildblockz@gmail.com', '$2y$10$1tdwAAaiFAuT8mKrEt78WucF4jmNFvJ9kKJbYvG84IzsRvoOMH2gW', 'r5xtTAMerv4U87VFCuHl3e0aaHXKRkeZMlYCAXdSeKjvVoUi5UqkHaHn5zfW', '2016-04-19 22:20:38', '2016-04-19 22:25:18'),
(80, 'DHRUBAJYOTI PATOWARY', 'Civil Engineer', '8876773769', 'patowarydhrubajyoti391@gmail.com', '$2y$10$bbFnqUGSRDu3lgvxA57kBe/SMBuvmMv5606S.oEbXe3n4ZzEApDO.', '6Obf5Ogt6R7wnTm72jCWU72kLN4t0nEo7z6Pf5piBwUA9Q7AXGYBUpnZQzLr', '2016-04-24 03:45:56', '2016-05-01 17:50:43'),
(81, 'XYZZ', 'Project Manager', '9999999999', 'xyzz@gmail.com', '$2y$10$zQxNo3sAf2IsfogVu9dD9.6B3.s5N7auDOjBJSUubcJG1Myh74J2q', NULL, '2016-04-24 17:10:01', '2016-04-24 17:10:01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boosts`
--
ALTER TABLE `boosts`
  ADD CONSTRAINT `boosts_user_id_2_foreign` FOREIGN KEY (`user_id_2`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `boosts_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `boosts_user_id_1_foreign` FOREIGN KEY (`user_id_1`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `connections`
--
ALTER TABLE `connections`
  ADD CONSTRAINT `connections_user_id_2_foreign` FOREIGN KEY (`user_id_2`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `connections_user_id_1_foreign` FOREIGN KEY (`user_id_1`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `link_preview_relation`
--
ALTER TABLE `link_preview_relation`
  ADD CONSTRAINT `link_preview_relation_link_preview_id_foreign` FOREIGN KEY (`link_preview_id`) REFERENCES `link_preview` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `fk_type_id` FOREIGN KEY (`type_id`) REFERENCES `page_types` (`id`),
  ADD CONSTRAINT `pages_pages_category_id_foreign` FOREIGN KEY (`pages_category_id`) REFERENCES `page_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pages_pages_subcategory_id_foreign` FOREIGN KEY (`pages_subcategory_id`) REFERENCES `page_subcategory` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_admins`
--
ALTER TABLE `page_admins`
  ADD CONSTRAINT `page_admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_admins_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_subcategory`
--
ALTER TABLE `page_subcategory`
  ADD CONSTRAINT `page_subcategory_page_category_id_foreign` FOREIGN KEY (`page_category_id`) REFERENCES `page_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_types`
--
ALTER TABLE `page_types`
  ADD CONSTRAINT `page_types_page_category_id_foreign` FOREIGN KEY (`page_category_id`) REFERENCES `page_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `polls_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `polls_options`
--
ALTER TABLE `polls_options`
  ADD CONSTRAINT `polls_options_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `polls_options_vote`
--
ALTER TABLE `polls_options_vote`
  ADD CONSTRAINT `polls_options_vote_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `polls_options_vote_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `polls_options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_verification`
--
ALTER TABLE `profile_verification`
  ADD CONSTRAINT `profile_verification_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `fk_page_id` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`),
  ADD CONSTRAINT `statuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
