-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 03:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user_fname` varchar(100) DEFAULT NULL,
  `user_lname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `birthdate` timestamp NULL DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `weight` double(16,4) DEFAULT NULL,
  `height` double(16,4) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `membership` tinyint(1) DEFAULT NULL,
  `registered_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  `is_verified` tinyint(1) DEFAULT '0',
  `verification_code` varchar(100) DEFAULT NULL,
  `is_forgot` tinyint(1) DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `access` tinyint(4) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `remove_status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_fname`, `user_lname`, `address`, `birthdate`, `gender`, `email`, `username`, `password`, `weight`, `height`, `contact`, `membership`, `registered_at`, `status`, `is_verified`, `verification_code`, `is_forgot`, `updated_at`, `access`, `img`, `remove_status`) VALUES
(1, 'Sherry Gil ', 'Egana', '429 Anonas Street, South Poblacion, Masinloc, Zambales, 2211 PH', '1998-12-22 16:00:00', 'Female', 'smegana@fit.edu.ph', 'lowkey', '601f1889667efaebb33b8c12572835da3f027f78', 52.0000, 160.0200, '09187154344', 0, '0000-00-00 00:00:00', 1, 1, '', 0, '2018-02-26 17:58:19', 1, '1510948230.jpg', 0),
(2, '', '', '', NULL, '', 'sad@gmail.com', '', '601f1889667efaebb33b8c12572835da3f027f78', 0.0000, 0.0000, '', 0, '2018-01-27 18:20:20', 0, 0, '', 0, '2018-02-24 03:24:53', 0, '', 0),
(3, '', '', '', NULL, '', 'wew@gmail.com', '', '601f1889667efaebb33b8c12572835da3f027f78', 0.0000, 0.0000, '', 0, '2018-01-28 01:46:29', 1, 1, '', 0, '2018-02-25 07:03:44', 0, '', 0),
(4, '', '', '', NULL, '', 'oww@gmail.com', '', '601f1889667efaebb33b8c12572835da3f027f78', 0.0000, 0.0000, '', 0, '2018-01-28 01:48:38', 0, 0, '', 0, '2018-02-25 01:14:00', 0, '', 0),
(5, '', '', '', NULL, '', 'luh@gmail.com', '', '601f1889667efaebb33b8c12572835da3f027f78', 0.0000, 0.0000, '', 0, '2018-01-28 01:52:44', 1, 0, '', 0, '2018-02-23 16:06:58', 0, '', 0),
(6, '', '', '', NULL, '', 'ha@gmail.com', '', '601f1889667efaebb33b8c12572835da3f027f78', 0.0000, 0.0000, '', 0, '2018-01-28 01:54:18', 0, 0, '', 0, '0000-00-00 00:00:00', 0, '', 0),
(7, '', '', '', NULL, '', 'pogi@gmail.com', '', '601f1889667efaebb33b8c12572835da3f027f78', 0.0000, 0.0000, '', 0, '2018-01-28 01:55:18', 0, 0, '', 0, '2018-02-25 07:50:21', 0, '', 1),
(12, 'Kendrick', 'Cosca', 'Quezon City Gold Street 1116', '0000-00-00 00:00:00', 'm', 'kendrickjaviercosca@gmail.com', NULL, '55285e5a32519431b408de651aa7a47c41369b15', NULL, NULL, '09167983610', NULL, '2018-03-01 13:08:08', NULL, 0, 'hgtG1MvP9xYXBmiZ0VzI', 0, '2018-03-01 13:08:53', NULL, NULL, NULL),
(13, 'Gela', 'Egana', NULL, NULL, NULL, 'sherrrygil.egana@gmail.com', NULL, '601f1889667efaebb33b8c12572835da3f027f78', 52.0000, 160.0200, NULL, NULL, '2018-03-01 13:59:23', 1, 1, 'YZyoVsiAuSRwvaEbd7K3', 0, '2018-03-01 14:10:22', 1, NULL, NULL),
(16, 'John Paul ', 'Dala', 'Manila 1627, C. Aguila St 1600', '1999-01-30 16:00:00', 'm', 'jaypeedala31@gmail.com', NULL, '601f1889667efaebb33b8c12572835da3f027f78', 50.0000, 170.0000, '09164234614', NULL, '2018-03-01 15:19:51', 1, 1, '', 0, '2018-03-01 20:48:43', NULL, NULL, NULL),
(17, 'Ninia Erika', 'Prado', 'Mandaluyong Kalentong 1008', '1999-01-02 16:00:00', 'f', 'zyrikasalazar@gmail.com', NULL, 'ac58d5b2f85d5eaf2382cb2200e8675a9c558184', NULL, NULL, '09187154344', NULL, '2018-03-01 22:00:19', 1, 1, '', 0, '2018-03-01 22:02:19', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registered_at` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `is_forgot` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `access` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `username`, `password`, `registered_at`, `status`, `verification_code`, `is_verified`, `is_forgot`, `updated_at`, `access`) VALUES
(1, 'Sherry Egana', 'smegana@fit.edu.ph', 'lowkey', '601f1889667efaebb33b8c12572835da3f027f78', 1509905332, 1, '', 1, 0, '2017-11-05 18:08:59', 1),
(2, 'Ninia Erika Prado', 'zyrikasalazar@gmail.com', 'niniaerika', '601f1889667efaebb33b8c12572835da3f027f78', 1509957008, 1, '', 1, 0, '2017-11-06 08:30:12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `allergy`
--

CREATE TABLE `allergy` (
  `id` int(11) NOT NULL,
  `mealplan_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergy`
--

INSERT INTO `allergy` (`id`, `mealplan_id`, `name`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(1, 1, 'dairy', '2018-02-28 20:04:27', '0000-00-00 00:00:00', 1, 0),
(2, 1, 'egg', '2018-02-28 20:04:27', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `audit_trails`
--

CREATE TABLE `audit_trails` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `activity_type` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_trails`
--

INSERT INTO `audit_trails` (`id`, `user_id`, `account_type`, `activity`, `activity_type`, `time`) VALUES
(1, 1, 0, 'Login', 1, '2018-01-26 21:22:18'),
(2, 1, 0, 'Login', 1, '2018-01-26 21:25:43'),
(3, 1, 0, 'Login', 1, '2018-01-26 21:26:55'),
(4, 1, 0, 'Login', 1, '2018-01-26 21:28:29'),
(5, 1, 0, 'Login', 1, '2018-01-26 21:29:51'),
(6, 1, 1, 'Login', 0, '2018-01-30 10:02:14'),
(7, 1, 1, 'Login', 0, '2018-01-30 15:48:43'),
(8, 1, 1, 'Login', 0, '2018-01-31 00:29:01'),
(9, 1, 0, 'Login', 1, '2018-01-31 01:39:24'),
(10, 1, 0, 'Login', 1, '2018-01-31 01:42:06'),
(11, 1, 0, 'Login', 1, '2018-01-31 01:45:05'),
(12, 1, 1, 'Login', 0, '2018-01-31 01:49:55'),
(13, 1, 1, 'Update Trainer', 7, '2018-01-31 01:59:44'),
(14, 1, 1, 'Update Trainer', 7, '2018-01-31 01:59:48'),
(15, 1, 1, 'Update User', 5, '2018-01-31 02:00:02'),
(16, 1, 1, 'Update User', 5, '2018-01-31 02:00:24'),
(17, 1, 1, 'Add Class', 10, '2018-01-31 02:00:59'),
(18, 1, 1, 'Add Class', 10, '2018-01-31 02:29:32'),
(19, 1, 1, 'Add Class', 10, '2018-01-31 02:36:50'),
(20, 1, 1, 'Login', 0, '2018-02-01 02:18:30'),
(21, 1, 1, 'Add Class', 10, '2018-02-01 02:19:13'),
(22, 1, 1, 'Login', 0, '2018-02-01 15:24:29'),
(23, 1, 1, 'Login', 0, '2018-02-01 21:19:40'),
(24, 1, 1, 'Update User', 5, '2018-02-01 21:21:39'),
(25, 1, 1, 'Update User', 5, '2018-02-01 21:21:43'),
(26, 1, 1, 'Delete User', 6, '2018-02-01 21:22:59'),
(27, 1, 1, 'Login', 0, '2018-02-02 01:43:23'),
(28, 1, 1, 'Login', 0, '2018-02-02 05:38:41'),
(29, 1, 1, 'Logout', 2, '2018-02-02 05:48:26'),
(30, 1, 0, 'Login', 1, '2018-02-02 05:49:39'),
(31, 1, 0, 'Login', 1, '2018-02-02 05:50:03'),
(32, 1, 0, 'Logout', 2, '2018-02-02 05:59:53'),
(33, 1, 0, 'Login', 1, '2018-02-02 06:00:08'),
(34, 1, 1, 'Login', 0, '2018-02-02 06:00:22'),
(35, 1, 0, 'Login', 1, '2018-02-02 06:00:34'),
(36, 1, 1, 'Add Class', 10, '2018-02-02 06:52:12'),
(37, 1, 1, 'Login', 0, '2018-02-03 05:09:37'),
(38, 1, 1, 'Logout', 2, '2018-02-03 06:41:08'),
(39, 1, 1, 'Login', 0, '2018-02-03 07:05:00'),
(40, 1, 1, 'Login', 0, '2018-02-03 15:33:28'),
(41, 1, 1, 'Login', 0, '2018-02-04 07:50:33'),
(42, 1, 0, 'Login', 1, '2018-02-04 09:33:38'),
(43, 1, 1, 'Logout', 2, '2018-02-04 09:33:59'),
(44, 1, 0, 'Login', 1, '2018-02-04 09:36:37'),
(45, 1, 1, 'Login', 0, '2018-02-04 09:40:01'),
(46, 1, 0, 'Login', 1, '2018-02-04 19:06:11'),
(47, 1, 1, 'Login', 0, '2018-02-04 19:23:15'),
(48, 1, 0, 'Login', 1, '2018-02-05 06:59:06'),
(49, 1, 0, 'Logout', 2, '2018-02-05 07:03:17'),
(50, 1, 0, 'Login', 1, '2018-02-05 07:03:32'),
(51, 1, 0, 'Logout', 2, '2018-02-05 07:04:09'),
(52, 1, 0, 'Login', 1, '2018-02-05 07:04:32'),
(53, 1, 1, 'Login', 0, '2018-02-05 11:32:16'),
(54, 1, 0, 'Login', 1, '2018-02-05 11:41:37'),
(55, 1, 0, 'Login', 1, '2018-02-05 15:13:29'),
(56, 1, 0, 'User Add Class', 12, '2018-02-05 17:57:27'),
(57, 1, 1, 'Login', 0, '2018-02-05 18:20:39'),
(58, 1, 1, 'Add Class', 10, '2018-02-05 18:46:39'),
(59, 1, 1, 'Add Class', 10, '2018-02-05 19:29:16'),
(60, 1, 1, 'Add Class', 10, '2018-02-05 19:30:28'),
(61, 1, 1, 'Add Class', 10, '2018-02-05 19:36:41'),
(62, 1, 1, 'Admin - Delete Class', 11, '2018-02-05 19:45:30'),
(63, 1, 1, 'Login', 0, '2018-02-06 05:32:15'),
(64, 1, 0, 'Login', 1, '2018-02-06 05:32:26'),
(65, 1, 0, 'User Add Class', 22, '2018-02-06 08:51:14'),
(66, 1, 0, 'User Add Class', 22, '2018-02-06 08:51:22'),
(67, 1, 0, 'User Add Class', 22, '2018-02-06 08:51:29'),
(68, 1, 0, 'Login', 1, '2018-02-06 16:50:41'),
(69, 1, 0, 'Login', 1, '2018-02-07 02:17:12'),
(70, 1, 0, 'Login', 1, '2018-02-07 08:07:24'),
(71, 1, 1, 'Login', 0, '2018-02-07 08:28:07'),
(72, 1, 0, 'User Update Profile', 25, '2018-02-07 08:29:49'),
(73, 1, 1, 'Login', 0, '2018-02-07 14:32:26'),
(74, 1, 0, 'Login', 1, '2018-02-07 14:33:37'),
(75, 1, 1, 'Login', 0, '2018-02-08 01:19:32'),
(76, 1, 0, 'Login', 1, '2018-02-08 02:12:35'),
(77, 1, 0, 'Add Workout', 21, '2018-02-08 02:23:47'),
(78, 1, 0, 'Add Workout', 21, '2018-02-08 02:24:45'),
(79, 1, 0, 'Login', 1, '2018-02-08 11:28:40'),
(80, 1, 1, 'Login', 0, '2018-02-08 11:28:56'),
(81, 1, 1, 'Login', 0, '2018-02-09 06:08:41'),
(82, 1, 1, 'Login', 0, '2018-02-09 09:02:20'),
(83, 1, 1, 'Login', 0, '2018-02-09 15:11:40'),
(84, 1, 1, 'Login', 0, '2018-02-10 01:55:36'),
(85, 1, 0, 'Login', 1, '2018-02-10 01:55:56'),
(86, 1, 0, 'Login', 1, '2018-02-10 04:56:52'),
(87, 1, 1, 'Login', 0, '2018-02-10 04:57:50'),
(88, 1, 1, 'Update User', 5, '2018-02-10 05:24:42'),
(89, 1, 1, 'Update User', 5, '2018-02-10 05:24:47'),
(90, 1, 1, 'Delete User', 6, '2018-02-10 05:25:18'),
(91, 1, 0, 'User End Class', 24, '2018-02-10 05:37:21'),
(92, 1, 0, 'User Send Feedback', 23, '2018-02-10 05:38:15'),
(93, 1, 0, 'User Update Profile', 25, '2018-02-10 05:43:33'),
(94, 1, 0, 'Logout', 2, '2018-02-10 05:47:23'),
(95, 3, 0, 'Login', 1, '2018-02-10 05:49:38'),
(96, 3, 0, 'Logout', 2, '2018-02-10 05:49:48'),
(97, 1, 1, 'Login', 0, '2018-02-11 05:40:42'),
(98, 1, 0, 'Login', 1, '2018-02-11 05:40:57'),
(99, 1, 0, 'User Add Class', 22, '2018-02-11 05:42:05'),
(100, 1, 1, 'Login', 0, '2018-02-11 09:50:19'),
(101, 1, 1, 'Admin - Add Class', 10, '2018-02-11 09:52:32'),
(102, 1, 0, 'Login', 1, '2018-02-11 11:42:31'),
(103, 1, 0, 'User Add Class', 22, '2018-02-11 11:42:41'),
(104, 1, 1, 'Login', 0, '2018-02-13 01:13:27'),
(105, 1, 1, 'Delete Trainer', 8, '2018-02-13 02:46:44'),
(106, 1, 1, 'Delete Trainer', 8, '2018-02-13 02:46:47'),
(107, 1, 1, 'Delete Trainer', 8, '2018-02-13 02:46:51'),
(108, 1, 1, 'Delete Trainer', 8, '2018-02-13 02:46:54'),
(109, 1, 1, 'Login', 0, '2018-02-13 05:15:05'),
(110, 1, 1, 'Login', 0, '2018-02-13 15:15:54'),
(111, 1, 1, 'Logout', 2, '2018-02-13 15:16:35'),
(112, 1, 1, 'Login', 0, '2018-02-13 15:20:31'),
(113, 1, 1, 'Login', 0, '2018-02-13 18:46:55'),
(114, 1, 1, 'Update User', 5, '2018-02-13 19:43:10'),
(115, 1, 0, 'Login', 1, '2018-02-13 22:27:56'),
(116, 1, 0, 'Login', 1, '2018-02-14 04:08:15'),
(117, 1, 1, 'Login', 0, '2018-02-14 04:09:37'),
(118, 1, 0, 'Add Workout', 21, '2018-02-14 04:24:21'),
(119, 1, 0, 'Login', 1, '2018-02-14 13:12:09'),
(120, 1, 1, 'Login', 0, '2018-02-14 13:13:31'),
(121, 1, 0, 'User Add Class', 22, '2018-02-14 13:15:38'),
(122, 1, 0, 'Login', 1, '2018-02-19 08:57:00'),
(123, 1, 1, 'Login', 0, '2018-02-19 09:07:12'),
(124, 1, 1, 'Logout', 2, '2018-02-19 09:28:53'),
(125, 1, 0, 'Login', 1, '2018-02-20 04:38:24'),
(126, 1, 0, 'User Update Profile', 25, '2018-02-20 04:39:05'),
(127, 1, 0, 'User Update Profile', 25, '2018-02-20 04:39:18'),
(128, 1, 0, 'Logout', 2, '2018-02-20 04:44:10'),
(129, 1, 1, 'Login', 0, '2018-02-20 04:44:29'),
(130, 1, 1, 'Logout', 2, '2018-02-20 05:01:05'),
(131, 1, 0, 'Login', 1, '2018-02-20 05:01:25'),
(132, 1, 0, 'Logout', 2, '2018-02-20 05:07:01'),
(133, 1, 1, 'Login', 0, '2018-02-20 06:13:46'),
(134, 1, 1, 'Logout', 2, '2018-02-20 06:15:44'),
(135, 1, 1, 'Login', 0, '2018-02-20 06:29:06'),
(136, 1, 1, 'Login', 0, '2018-02-21 00:26:18'),
(137, 1, 1, 'Login', 0, '2018-02-21 08:58:47'),
(138, 1, 1, 'Logout', 2, '2018-02-21 09:02:39'),
(139, 1, 0, 'Login', 1, '2018-02-21 09:02:55'),
(140, 1, 0, 'User Update Profile', 25, '2018-02-21 09:03:14'),
(141, 1, 0, 'Logout', 2, '2018-02-21 09:24:13'),
(142, 1, 1, 'Login', 0, '2018-02-21 11:25:49'),
(143, 1, 1, 'Login', 0, '2018-02-21 18:08:44'),
(144, 1, 1, 'Logout', 2, '2018-02-21 18:59:16'),
(145, 1, 0, 'Login', 1, '2018-02-21 18:59:28'),
(146, 1, 0, 'Logout', 2, '2018-02-21 19:03:19'),
(147, 1, 1, 'Login', 0, '2018-02-21 19:03:30'),
(148, 1, 1, 'Login', 0, '2018-02-22 02:39:11'),
(149, 1, 1, 'Admin - Add Class', 10, '2018-02-22 03:10:37'),
(150, 1, 1, 'Admin - Add Class', 10, '2018-02-22 03:11:09'),
(151, 1, 1, 'Admin - Delete Class', 11, '2018-02-22 04:49:44'),
(152, 1, 1, 'Admin - Delete Class', 11, '2018-02-22 04:52:02'),
(153, 1, 1, 'Update User', 5, '2018-02-22 05:39:31'),
(154, 1, 1, 'Update User', 5, '2018-02-22 05:39:36'),
(155, 1, 0, 'Login', 1, '2018-02-22 06:08:47'),
(156, 1, 0, 'User Update Profile', 25, '2018-02-22 06:09:47'),
(157, 1, 1, 'Login', 0, '2018-02-22 06:45:57'),
(158, 1, 1, 'Login', 0, '2018-02-23 03:31:06'),
(159, 1, 1, 'Login', 0, '2018-02-23 13:44:23'),
(160, 1, 1, 'Update User', 5, '2018-02-23 15:20:59'),
(161, 1, 1, 'Update User', 5, '2018-02-23 15:21:03'),
(162, 1, 1, 'Update Trainer', 7, '2018-02-23 15:23:10'),
(163, 1, 1, 'Update Trainer', 7, '2018-02-23 15:23:14'),
(164, 1, 1, 'Update User', 5, '2018-02-23 16:05:48'),
(165, 1, 1, 'Delete User', 6, '2018-02-23 16:05:53'),
(166, 1, 1, 'Login', 0, '2018-02-23 19:32:15'),
(167, 1, 1, 'Login', 0, '2018-02-23 20:24:49'),
(168, 1, 1, 'Logout', 2, '2018-02-23 20:25:12'),
(169, 1, 1, 'Login', 0, '2018-02-24 03:15:17'),
(170, 1, 1, 'Update User', 5, '2018-02-24 03:24:53'),
(171, 1, 1, 'Update Class', 10, '2018-02-24 03:51:25'),
(172, 1, 1, 'Update Class', 10, '2018-02-24 03:51:37'),
(173, 1, 1, 'Update Class', 10, '2018-02-24 03:56:10'),
(174, 1, 1, 'Update Trainer', 7, '2018-02-24 04:01:52'),
(175, 1, 1, 'Update Class', 10, '2018-02-24 04:02:43'),
(176, 1, 1, 'Update Trainer', 7, '2018-02-24 04:03:20'),
(177, 1, 1, 'Update Trainer', 7, '2018-02-24 04:03:24'),
(178, 1, 1, 'Update User', 5, '2018-02-24 04:03:45'),
(179, 1, 1, 'Update User', 5, '2018-02-24 04:03:49'),
(180, 1, 1, 'Login', 0, '2018-02-24 06:24:39'),
(181, 1, 1, 'Update Class', 10, '2018-02-24 06:24:50'),
(182, 1, 1, 'Update Class', 10, '2018-02-24 06:26:04'),
(183, 1, 1, 'Update Class', 10, '2018-02-24 06:44:01'),
(184, 1, 1, 'Update Class', 10, '2018-02-24 06:46:11'),
(185, 1, 1, 'Update Class', 10, '2018-02-24 06:56:12'),
(186, 1, 1, 'Update Class', 10, '2018-02-24 06:56:26'),
(187, 1, 1, 'Update Class', 10, '2018-02-24 06:56:47'),
(188, 1, 1, 'Update Class', 10, '2018-02-24 06:57:12'),
(189, 1, 1, 'Update Class', 10, '2018-02-24 06:57:56'),
(190, 1, 1, 'Update Class', 10, '2018-02-24 07:33:38'),
(191, 1, 1, 'Update Class', 10, '2018-02-24 07:35:20'),
(192, 1, 1, 'Update Class', 10, '2018-02-24 07:37:33'),
(193, 1, 1, 'Login', 0, '2018-02-24 21:18:21'),
(194, 1, 1, 'Login', 0, '2018-02-25 00:18:18'),
(195, 1, 1, 'Update User', 5, '2018-02-25 01:13:46'),
(196, 1, 1, 'Update User', 5, '2018-02-25 01:13:49'),
(197, 1, 1, 'Update User', 5, '2018-02-25 01:14:00'),
(198, 1, 1, 'Delete User', 6, '2018-02-25 01:14:07'),
(199, 1, 1, 'Update Trainer', 7, '2018-02-25 01:14:13'),
(200, 1, 1, 'Update Trainer', 7, '2018-02-25 01:14:16'),
(201, 1, 1, 'Update Class', 10, '2018-02-25 03:22:35'),
(202, 1, 1, 'Update Class', 10, '2018-02-25 03:22:53'),
(203, 1, 1, 'Login', 0, '2018-02-25 06:20:55'),
(204, 1, 1, 'Update Class', 10, '2018-02-25 06:36:33'),
(205, 1, 1, 'Delete Class', 10, '2018-02-25 06:55:52'),
(206, 1, 1, 'Update Class', 10, '2018-02-25 06:57:51'),
(207, 1, 1, 'Update User', 5, '2018-02-25 07:02:08'),
(208, 1, 1, 'Update User', 5, '2018-02-25 07:02:12'),
(209, 1, 1, 'Delete User', 6, '2018-02-25 07:02:16'),
(210, 1, 1, 'Update User', 5, '2018-02-25 07:02:27'),
(211, 1, 1, 'Delete User', 6, '2018-02-25 07:03:30'),
(212, 1, 1, 'Update User', 5, '2018-02-25 07:03:44'),
(213, 1, 1, 'Update Trainer', 7, '2018-02-25 07:04:13'),
(214, 1, 1, 'Update Trainer', 7, '2018-02-25 07:04:19'),
(215, 1, 1, 'Delete Trainer', 8, '2018-02-25 07:04:24'),
(216, 1, 1, 'Update User', 5, '2018-02-25 07:50:09'),
(217, 1, 1, 'Delete User', 6, '2018-02-25 07:50:21'),
(218, 1, 1, 'Logout', 2, '2018-02-25 08:11:39'),
(219, 1, 1, 'Login', 0, '2018-02-25 08:11:50'),
(220, 1, 1, 'Update Class', 10, '2018-02-25 10:13:32'),
(221, 1, 1, 'Update Class', 10, '2018-02-25 10:24:32'),
(222, 1, 1, 'Update Class', 10, '2018-02-25 10:26:17'),
(223, 1, 1, 'Login', 0, '2018-02-25 15:32:11'),
(224, 1, 1, 'Update User', 5, '2018-02-25 17:02:14'),
(225, 1, 1, 'Update User', 5, '2018-02-25 17:02:17'),
(226, 1, 1, 'Update Class', 10, '2018-02-25 17:07:11'),
(227, 1, 1, 'Logout', 2, '2018-02-25 17:46:24'),
(228, 1, 1, 'Login', 0, '2018-02-26 04:20:47'),
(229, 1, 0, 'Login', 1, '2018-02-26 17:12:06'),
(230, 1, 0, 'User Update Profile', 25, '2018-02-26 17:12:17'),
(231, 1, 0, 'User Update Profile', 25, '2018-02-26 17:12:28'),
(232, 1, 1, 'Login', 0, '2018-02-26 17:27:56'),
(233, 1, 0, 'Logout', 2, '2018-02-26 17:34:22'),
(234, 1, 0, 'Login', 1, '2018-02-26 17:53:53'),
(235, 1, 0, 'Logout', 2, '2018-02-26 17:55:53'),
(236, 1, 0, 'Login', 1, '2018-02-26 17:56:07'),
(237, 1, 0, 'User Update Profile', 25, '2018-02-26 17:58:19'),
(238, 1, 0, 'Logout', 2, '2018-02-26 18:07:05'),
(239, 1, 1, 'Login', 0, '2018-02-26 18:07:19'),
(240, 1, 1, 'Update Class', 10, '2018-02-27 15:55:57'),
(241, 1, 0, 'Login', 1, '2018-02-27 16:36:41'),
(242, 1, 1, 'Update Class', 10, '2018-02-27 17:03:49'),
(243, 1, 1, 'Update Class', 10, '2018-02-27 17:49:57'),
(244, 1, 1, 'Update Class', 10, '2018-02-27 17:51:17'),
(245, 1, 1, 'Update Class', 10, '2018-02-27 17:51:43'),
(246, 1, 1, 'Delete Class', 10, '2018-02-27 18:01:51'),
(247, 1, 1, 'Delete Class', 10, '2018-02-27 18:36:15'),
(248, 1, 1, 'Delete Class', 10, '2018-02-27 18:36:38'),
(249, 1, 1, 'Delete Class', 10, '2018-02-27 18:37:10'),
(250, 1, 1, 'Delete Class', 10, '2018-02-27 18:37:14'),
(251, 1, 1, 'Update Class', 10, '2018-02-27 18:45:59'),
(252, 1, 1, 'Update Class', 10, '2018-02-27 18:47:47'),
(253, 1, 1, 'Update Class', 10, '2018-02-27 18:48:04'),
(254, 1, 1, 'Update Class', 10, '2018-02-27 19:00:14'),
(255, 1, 1, 'Update Class', 10, '2018-02-27 19:04:46'),
(256, 1, 0, 'Login', 1, '2018-02-27 22:11:09'),
(257, 1, 0, 'Add Workout', 21, '2018-02-27 23:03:00'),
(258, 1, 1, 'Login', 0, '2018-02-28 01:37:58'),
(259, 1, 1, 'Login', 0, '2018-02-28 05:15:01'),
(260, 1, 1, 'Update Class', 10, '2018-02-28 06:01:07'),
(261, 1, 1, 'Update Class', 10, '2018-02-28 06:14:55'),
(262, 1, 1, 'Login', 0, '2018-02-28 13:43:17'),
(263, 1, 0, 'Login', 1, '2018-02-28 13:50:49'),
(264, 1, 0, 'Login', 1, '2018-02-28 19:46:33'),
(265, 1, 1, 'Login', 0, '2018-02-28 20:04:22'),
(266, 1, 1, 'Update Trainer', 7, '2018-02-28 22:01:30'),
(267, 13, 0, 'Login', 1, '2018-03-01 14:07:06'),
(268, 13, 0, 'User Update Profile', 25, '2018-03-01 14:10:05'),
(269, 13, 0, 'User Update Profile', 25, '2018-03-01 14:10:22'),
(270, 13, 0, 'Logout', 2, '2018-03-01 14:40:07'),
(271, 1, 1, 'Login', 0, '2018-03-01 15:32:40'),
(272, 1, 1, 'Update Trainer', 7, '2018-03-01 16:02:54'),
(273, 1, 1, 'Update Trainer', 7, '2018-03-01 16:03:00'),
(274, 1, 1, 'Login', 0, '2018-03-01 20:11:10'),
(275, 16, 0, 'Login', 1, '2018-03-01 20:42:25'),
(276, 16, 0, 'User Update Profile', 25, '2018-03-01 20:48:21'),
(277, 16, 0, 'User Update Profile', 25, '2018-03-01 20:48:43'),
(278, 16, 0, 'Logout', 2, '2018-03-01 20:49:22'),
(279, 1, 0, 'Login', 1, '2018-03-01 20:49:32'),
(280, 1, 1, 'Login', 0, '2018-03-01 20:55:00'),
(281, 1, 0, 'User End Class', 24, '2018-03-01 21:14:18'),
(282, 1, 0, 'User Send Feedback', 23, '2018-03-01 21:18:16'),
(283, 1, 1, 'Logout', 2, '2018-03-01 21:58:56'),
(284, 1, 1, 'Login', 0, '2018-03-01 22:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `class_desc` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `classes_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`, `class_desc`, `img`, `start_time`, `end_time`, `day`, `trainer_id`, `classes_id`, `status`, `remove_status`) VALUES
(1, 'ZUMBA', 'qwewqe', '1516775055.jpg', 1516802400, 1516806000, 'Wednesday', 2, 7, 1, 0),
(2, 'YOGILATES', 'retro', '1516777490.jpg', 1516802400, 1516806000, 'Friday', 3, 6, 1, 0),
(3, 'CYCLING', 'Indoor cycling simulating an outdoor ride in a group exercise setting. The intensity and speed chang', '', 1517361836, 1517361836, 'Monday', 1, 1, 1, 0),
(4, 'CYCLING', 'Indoor cycling simulating an outdoor ride in a group exercise setting. The intensity and speed chang', '', 1517364058, 1517364058, 'Tuesday', 1, 1, 1, 0),
(5, 'STREETDANCE', 'Funk and hip-hop dance class. Suitable for all fitness levels', '', 1517365772, 1517365772, 'Thursday', 1, 5, 1, 0),
(6, 'ZUMBA', 'Dance fitness class featuring exotic rhythms set to high-energy Latin and international beats with f', '', 1517366210, 1517366210, 'Saturday', 3, 7, 0, 0),
(7, 'CYCLING', 'Indoor cycling simulating an outdoor ride in a group exercise setting. The intensity and speed chang', '', 1517451497, 1517451497, 'Monday', 2, 1, 0, 0),
(8, 'RETRO', 'Dance your way into you dream body. In to the tune of 70\'s and 80\'s \"Disco Music\" and or the classic', '', 10, 10, 'Monday', 16, 4, 1, 0),
(9, 'RETRO', 'Dance your way into you dream body. In to the tune of 70\'s and 80\'s \"Disco Music\" and or the classic', '', 1517554332, 1517554332, 'Saturday', 2, 4, 1, 0),
(10, 'CYCLING', 'Indoor cycling simulating an outdoor ride in a group exercise setting. The intensity and speed chang', '', 1517889600, 1517889600, 'Monday', 3, 1, 1, 0),
(11, 'RETRO', 'Dance your way into you dream body. In to the tune of 70\'s and 80\'s \"Disco Music\" and or the classic', '', 1517893200, 1517893200, 'Saturday', 2, 4, 1, 0),
(12, 'ZUMBA', 'Dance fitness class featuring exotic rhythms set to high-energy Latin and international beats with f', '', 1517893200, 1517893200, 'Thursday', 1, 7, 1, 0),
(13, 'CYCLING', 'Indoor cycling simulating an outdoor ride in a group exercise setting. The intensity and speed chang', '', 1517900400, 1517907600, 'Wednesday', 3, 1, 1, 0),
(14, 'GOLD\'S MIX', 'Separate segments of cardio, strength, and flexibility integrated in a single class', '', 1518357600, 1518361200, 'Tuesday', 2, 3, 1, 0),
(15, 'STREETDANCE', 'Funk and hip-hop dance class. Suitable for all fitness levels', '', 1518310800, 1518318000, 'Thursday', 3, 5, 1, 0),
(16, 'CYCLING', 'Indoor cycling simulating an outdoor ride in a group exercise setting. The intensity and speed chang', '', 1519267800, 1519269000, 'Monday', 1, 1, 0, 0),
(17, 'DEFINITIONS', 'Total body sculpting class using a variety of fitness equipment.', '', 1519258200, 1519261800, 'Monday', 8, 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `levels` text NOT NULL,
  `benefits` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `picpath` varchar(255) NOT NULL,
  `logopath` text NOT NULL,
  `status` int(11) NOT NULL,
  `remove_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `description`, `levels`, `benefits`, `created_at`, `updated_at`, `picpath`, `logopath`, `status`, `remove_status`) VALUES
(1, 'CYCLING', 'Indoor cycling simulating an outdoor ride in a group exercise setting. The intensity and speed change following the beat of the music. Heart rate monitors are recommended to make sure that participants are riding in their cardio zone. Classes are best for burning fats and toning lower body.', 'Beginner-friendly and Multi-level', 'Aerobic Endurance', '2018-01-30 20:15:28', '2018-02-27 19:04:46', 'cycling.jpg', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAE7SURBVEhL5ZS7SsRAFEDXztbCQtRGFCsrGx9gKyhY+T3+gl/gB4guqOAPWFpYCFZWPkrfYqHi45xsBmZGVpI1FuKBw2YmN3Mn90629W9ZxsvSJSea5gI/Ss+daJpfT2BZTOLii040wRQe4QuuYx82xjReYyiLrmEjzOIdxovrO67ij3DnD5gv/lb+PuEc9swh5osf4CSelmOT3UTW4gzjxXewH2UETzC+r7VYwVsMDx/jIMYMZNZmCDcw1H0fe2YUt9HGahsnUGbQBK/FqMN38V+wpp51P6Rd3Cuvr3AYJZRKqsQnbOEzxsduHn1osxilCarEJzyiO8lxZ/edyyRBlfgEa+jNnG4JqsQn2CBfz9cMLKBzNjKnbnzR/dA0d6GeGL/OMcypG19g922Qr+gfnDsZx27Ujf9ztFqftg2Is7+CiL0AAAAASUVORK5CYII=', 1, 0),
(2, 'DEFINITIONS', 'Total body sculpting class using a variety of fitness equipment.', 'Beginner-friendly and Multi-level', 'Muscular tone and endurance', '2018-01-30 20:15:28', '2018-03-01 14:12:30', 'definitions.jpg', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFFSURBVEhL5dS/K4VRHMfxJ8SCCIuBusmgTGYxWEw2tvtXoDvcOzJL2ZitTPIjLJLFYpLJj5SMUgrx/pzn+eb05F71+G73U6+evqen7znPOefepOkyjEO8ZM8huOYIXxFN4hqtPJ5AtWvyX7AP12jPD6CV6/nbGYxnT/e0oIZPVDRQL/04wQdsK54xiAto9RsowdKHPejddyyjblZgjc0qqrkxLWAbC7jNxh4wiYa5hl6eClWadjwibv4a1aIDH0DDjEEvP6FVA1nKiJutoRdLOIO+TmfwZ2wbNkP1k0tY8zt0olCOoSazoUozDWsuW9DqC0XbooYdoUqzg3gCecMu4nMqlBHoXucnMKf4V9aRb6oJr6BzGkXh9MD+3G6gCzCDbrhkEWquOz+hAc+0wX6duvPumYea36NLA945hyaYC1UTJ0m+ASNTbmrQZuFuAAAAAElFTkSuQmCC', 1, 0),
(3, 'GOLD\'S MIX', 'Separate segments of cardio, strength, and flexibility integrated in a single class', 'Beginner-friendly and Multi-level', 'Aerobic endurance, muscular strength, flexibility', '2018-01-30 20:46:28', '2018-03-01 14:11:37', 'goldsmix.jpg', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAD9SURBVEhL7dI9agJBAIbhDZGEWFqmEySFRSxNZ+sPuYDgBSxSpwrkEjZaaGeXSjyAZ9AmpohGOxEhEJCAvp86MGy2WMctAu4LD+i4zuzsrBd3nlUwwxQlDfi6xO3+o1uaeHPwqQGrC7Qxx70GXPpC0AJJdKHxFfJwqgxNPEERmriKd2jybxTgL4E6XnbfQlbDAmZHenwP8KcbGULXjDUQJh3kL8zkTaRgl0Uf5poPPCJUdzB/lAZ0yEpv0jPW0G8/eMUNjqoD/yJpDKwx7SADp67wBnsR+66fYHblnBbpwV5khBwi6xotLKHD1qv7/7IfQRT+FHTRKeLOI8/bAmsFaeHyilWhAAAAAElFTkSuQmCC', 1, 0),
(4, 'RETRO', 'Dance your way into you dream body. In to the tune of 70\'s and 80\'s \"Disco Music\" and or the classics 50\'s to 60\'s.', 'Beginner- friendly, senior-friendly and multi-level', 'Aerobic endurance', '2018-01-30 20:46:28', '2018-03-01 14:11:31', 'retro.jpg', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJZSURBVEhLzdVJqE5hHMfx1zxb3FJiIaEMxUJdw86QsYTsRZkW4lJKFMmQDJEiopQkWZCNhZSxkBRWLEhIklJKZr7f4/nr3Mc5791Y+NWne57/+Z/3nul5TuN/yEysR6di1HF6YSMmFqOUATiAKcWofZ7gJ+YXo46zCfbfK0YpG2DxBnpiM45iFI7AfZdQTiuOow1dLJDOeAr7D1mInIZFD9iWtvUc49P2dwyF6Yv3iL6VMNMQtbEWIo9gcTnOpG3Fj35O48Uw1qJHe9EdD9L4Lv7Eh/cV7liLCXiHH9iBE3DfBwxC5CSsv8QI2OtYM9AuD+EOz3gFPJuBmJ5q7luHPGOwEPvwDfZdxF8ZjrewwTN/hrgqeeldERkNb0PsD5/g1VRmKuJel/kPJyPilb1A3qfDaJolyA+6g0hv3EbeE1ajaXxL8oOcgJF4kF6V9z3v9XnUphtikpQtgnESvYG1LXBm573DUJuqAzQOZhIc+yD7w39S7vOlaEFtdqJ8QDgGE2vMefSAszzv3YrabEc0+jY4sdz2zEbCdekUvCIfZvSehVflthPUZaQyqxAHzUP5gbt8RHyTXsO6f/shFkstQ2VmI5qWWiBXET8UWYP8x1xN45YdtFAVb0Ec6BkZ13TH14rR77ht7TFimTZXYP1cMaqIXyLfb5t8xz34YxrvhvH+foG1/RZKiSX/ejGqySvY5ErpmuK2FsDMRdS8peXsgXW/gLW5BZsuYFba1mCY+Bi5ZvWxUIpLvft8k2rjVL+POXDSXMYuRPxM+lz8sTxDcBNN58I/TqPxC5Ky7ZfFyPZBAAAAAElFTkSuQmCC', 1, 0),
(5, 'STREETDANCE', 'Funk and hip-hop dance class. Suitable for all fitness levels', 'Beginner-friendly and Multi-level\r\n', 'Aerobic endurance and coordination', '2018-01-30 21:31:42', '2018-02-27 16:29:31', 'streetdance.jpg', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFISURBVEhL3dWxKwZxHMfxk0H+ARGbjd1GNqGUgUUmGUTZmJTN7h8gKVImhUHZzAazARlElEkK7/fvuSfXdQ93z3PP8nzq1fX9Xvf7Ps/vubsnavlM4iE2YaPs3OM7dmej7DR9gNviEBcfs9GMDGMDR7jCJtpRStZQ3aKkA3RhBieoa2A/PpBe/DWjN4fCcUvSC2kAZ3D4LZaQK53YwTzW8YV3pAfUnXGkF1vO6NWK32oRbaHKSA9WcBybhsk7oHreOy53/DTJxVUrnvPHvg5VziygyAAzEh//TR/e4IXeKbUGDOIQfw3PzD686AJu1XNc9yIZb1X7j6EqEN8/XjgVqijag/U5kk/uLi4xFKoC8U5ywe1QVbbsCfa2bDSaUbjYCzpsEHuf8CH0PdRwbuCQ2VBVsgrfR6X8w/lkOuA0VL/pjo8tnyj6AcQCcfvYLfxQAAAAAElFTkSuQmCC', 1, 0),
(6, 'YOGILATES', 'A combination of Yoga poses and Pilates exercises.', 'Beginner-friendly and Multi-level', 'Balance and flexibility', '2018-01-30 21:31:42', '2018-02-27 16:29:43', 'yogilates.jpg', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACoSURBVEhL5ZDBCcJAEEXXlCDYhgebELQBmxKrsALrCPagHvRiC/ofZmEO40FnFgJ58EjyCf8nWybFVt4GNwTZXOVr8EKQTfMBjoURytcEo6QeQdSveC//4894JZiGV45peOWYhleOaXjlOJcpeOV4lgsZphZW+PJekp0IotiBTq7kXpI9ZBg78JT1GQ8yjB3gepdHuZP8URg7sJSzz20edqAJzQfGSilvNHFvo5HaubsAAAAASUVORK5CYII=', 1, 0),
(7, 'ZUMBA', 'Dance fitness class featuring exotic rhythms set to high-energy Latin and international beats with fun and easy to follow choreography.', 'Beginner-friendly, Senior-friendly Multi-level', 'Aerobic endurance', '2018-01-30 21:32:18', '2018-02-27 16:29:55', 'zumba.jpg', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF4SURBVEhL3ZQ9LwVBFIY3ohE6DVGI0i9QkCgUFETiF+iIjt5PkKglShFRUGkJCSoaokDjK1Eo/AAfz7t733vHZO0dcqv7JE/2zMzZc+7szt2srfiqKXbxAE9wQxOtIGxwhB5faSJiBp/wFlexB5sSNjhEj180EfGIXpfPOIeVOHkQR/AOVXwWY/7V4AKV/IDDmqhgGtXkT4+oF88x/GXyGruwJXSjTk/cZA3NJGqXXtNj1I6S6cSwuPzAMRTx85dvOI+6N4m4QJmmbE1WEieflcwZj++DOFz/gU7DIm7iK5Ylx3M6SRrrEVXSgce4hy5i+9B4zqiwxmpU+Q6m8LII60XsDbqJ54yKJu1CH7j9IqwXUVEVV6w/ovBamZW7WK4pfIMYRcU6nsJrv9n0XQgniyVUvJ2PGjjnE99xAJMJG+yg4oV81MA5W8E1Gd8sTlFx/AF0Tj9qB9rJOCYRNhBDtWtImLOCitfzUQJxgzLCHJ2ciSJsL7LsG8FAuTnttEB6AAAAAElFTkSuQmCC', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `instructions` varchar(8000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `workout_type` varchar(100) NOT NULL,
  `equipment_type` varchar(100) NOT NULL,
  `muscle_targeted` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `instructions`, `type`, `workout_type`, `equipment_type`, `muscle_targeted`, `image`, `status`, `created_at`, `updated_at`, `remove_status`) VALUES
(1, 'Concentration Curls', '1. Sit down on a flat bench with one dumbbell in front of you between your legs. Your legs should be spread with your knees bent and feet on the floor.\r\n2. Use your right arm to pick the dumbbell up. Place the back of your right upper arm on the top of your inner right thigh. Rotate the palm of your hand until it is facing forward away from your thigh. Tip: Your arm should be extended and the dumbbell should be above the floor. This will be your starting position.\r\n3. While holding the upper arm stationary, curl the weights forward while contracting the biceps as you breathe out. Only the forearms should move. Continue the movement until your biceps are fully contracted and the dumbbells are at shoulder level. Tip: At the top of the movement make sure that the little finger of your arm is higher than your thumb. This guarantees a good contraction. Hold the contracted position for a second as you squeeze the biceps.\r\n4. Slowly begin to bring the dumbbells back to starting position as your breathe in. Caution: Avoid swinging motions at any time.\r\n5. Repeat for the recommended amount of repetitions. Then repeat the movement with the left arm.\r\n', '1', '1', '4', '3', '1519949680_Concentration_Curls.gif', 1, '2018-03-02 00:14:40', '2018-03-02 00:14:40', 0),
(2, 'Standing Biceps Cable Curls', '1. Stand up with your torso upright while holding a cable curl bar that is attached to a low pulley. Grab the cable bar at shoulder width and keep the elbows close to the torso. The palm of your hands should be facing up (supinated grip). This will be your starting position.\r\n2. While holding the upper arms stationary, curl the weights while contracting the biceps as you breathe out. Only the forearms should move. Continue the movement until your biceps are fully contracted and the bar is at shoulder level. Hold the contracted position for a second as you squeeze the muscle.\r\n3. Slowly begin to bring the curl bar back to starting position as your breathe in.\r\n4. Repeat for the recommended amount of repetitions.\r\n', '1', '1', '3', '3', '1519949855_Standing_Biceps_Cable_Curls.gif', 1, '2018-03-02 00:17:35', '2018-03-02 00:17:35', 0),
(3, 'Wide-Grip Standing Barbell Curl', '1. Stand up with your torso upright while holding a barbell at the wide outer handle. The palm of your hands should be facing forward. The elbows should be close to the torso. This will be your starting position.\r\n2. While holding the upper arms stationary, curl the weights forward while contracting the biceps as you breathe out. Tip:Only the forearms should move.\r\n3. Continue the movement until your biceps are fully contracted and the bar is at shoulder level. Hold the contracted position for a second and squeeze the biceps hard.\r\n4. Slowly begin to bring the bar back to starting position as your breathe in.\r\n5. Repeat for the recommended amount of repetitions.\r\n', '1', '1', '1', '3', '1519950287_Wide-Grip_Standing_Barbell_Curl.gif', 1, '2018-03-02 00:24:48', '2018-03-02 00:24:48', 0),
(4, 'Alternate dumbbell curls', '1. Stand (torso upright) with a dumbbell in each hand held at arms length. The elbows should be close to the torso and the palms of your hand should be facing your thighs.\r\n2. While holding the upper arm stationary, curl the right weight as you rotate the palm of the hands until they are facing forward. At this point continue contracting the biceps as you breathe out until your biceps is fully contracted and the dumbbells are at shoulder level. Hold the contracted position for a second as you squeeze the biceps. Tip: Only the forearms should move.\r\n3. Slowly begin to bring the dumbbell back to the starting position as your breathe in. Tip: Remember to twist the palms back to the starting position (facing your thighs) as you come down.\r\n4. Repeat the movement with the left hand. This equals one repetition.\r\n5. Continue alternating in this manner for the recommended amount of repetitions.\r\n', '1', '1', '4', '3', '1519950805_Alternate_dumbbell_curls.gif', 1, '2018-03-02 00:33:25', '2018-03-02 00:33:25', 0),
(5, 'Machine Squat', '1. Adjust the weight to an appropriate load for your training.\r\n2. With a shoulder-width stance, squat under the shoulder pads and adjust the machine to the appropriate height. Move to a standing position with your back slightly arched, chest up, and head looking forward. This will be your starting position.\r\n3. Lower your torso by flexing the hips and the knees.\r\n4. Continue until you are below parallel, and then reverse direction by extending the hips and the knees.\r\n', '1', '1', '7', '12', '1519950969_Machine_Squat.gif', 1, '2018-03-02 00:36:09', '2018-03-02 00:36:09', 0),
(6, 'Smith Machine Calf Raise', '1. Place a block or weight plate below the bar on the Smith machine. Set the bar to a position that best matches your height. Once the correct height is chosen and the bar is loaded, step onto the plates with the balls of your feet and place the bar on the back of your shoulders.\r\n2. Take the bar with both hands facing forward. Rotate the bar to unrack it. This will be your starting position.\r\n3. Raise your heels as high as possible by pushing off of the balls of your feet, flexing your calf at the top of the contraction. Your knees should remain extended. Hold the contracted position for a second before you start to go back down.\r\n4. Return slowly to the starting position as you breathe in while lowering your heels.\r\n5. Repeat for the recommended amount of repetitions.\r\n', '3', '1', '7', '4', '1519951114_Smith_Machine_Calf_Raise.gif', 1, '2018-03-02 00:38:34', '2018-03-02 00:38:34', 0),
(7, 'Bulgarian Split Squats', '1. Holding a dumbbell in each hand, step forward with one foot and rest your rear foot on an elevated platform or bench, top of the foot facing down. \r\n2. Bend your front knee to lower yourself, making sure that knee doesn’t track out ahead of your toes. (If it does, take a longer step out from the platform.) \r\n3. When your knee joint forms at least a 90-degree angle, reverse the motion, driving through the heel of your forward foot to return to standing. \r\n4. Do not forcefully lock out the knee.\r\n', '3', '1', '4', '9', '1519951264_Bulgarian_Split_Squats.gif', 1, '2018-03-02 00:41:04', '2018-03-02 00:41:04', 0),
(8, 'Sumo Deadlift with Chains', '1. You can attach the chains to the sleeves of the bar, or just drape the middle over the bar so there is a greater weight increase as you lift. Attempt to keep the ends of the chains away from the plates so you don\'t hit them when you lower the weight.\r\n2. Begin with a bar loaded on the ground. Approach the bar so that the bar intersects the middle of the feet. The feet should be set very wide, near the collars. Bend at the hips to grip the bar. The arms should be directly below the shoulders, inside the legs, and you can use a pronated grip, a mixed grip, or hook grip. Relax the shoulders, which in effect lengthens your arms.\r\n3. Take a breath, and then lower your hips, looking forward with your head with your chest up. Drive through the floor, spreading your feet apart, with your weight on the back half of your feet. Extend through the hips and knees.\r\n4. As the bar passes through the knees, lean back and drive the hips into the bar, pulling your shoulder blades together.\r\n5. Return the weight to the ground by bending at the hips and controlling the weight on the way down.\r\n\r\n', '3', '4', '1', '9', '1519951488_Sumo_Deadlift_with_Chains.gif', 1, '2018-03-02 00:44:48', '2018-03-02 00:44:48', 0),
(9, 'Romanian Deadlift from deficit', '1. Begin in a standing position with a dumbbell in each hand. Ensure that your back is straight and stays that way for the duration of the exercise. Allow your arms to hang perpendicular to the floor, with the wrists pronated and the elbows pointed to your sides. This will be your starting position.\r\n2. Initiate the movement by flexing your hips, slowly pushing your butt as far back as you can. This should entail a horizontal movement of the hips, rather than a downward movement. The knees should only partially bend, and your weight should remain on your heels.\r\n3. Drive your butt back as far as you can, which should generate tension in your hamstrings as your hands approach knee level. Maintain an arch in your back throughout the exercise.\r\n4. When your hips cannot perform any further backward movement, pause, and then slowly return to the starting position by extending the hips.\r\n', '3', '5', '1', '9', '1519951606_Romanian_Deadlift_from_deficit.gif', 1, '2018-03-02 00:46:46', '2018-03-02 00:46:46', 0),
(10, 'Hanging Oblique Raise', '1. Take a grip on pull-ups bars; hang with your knees together and your body straight. This will be your starting position.\r\n2. Initiate the movement by flexing the hips and knees, drawing the legs up. Pull the knees up into one side, going above 90 degrees at the hip. Avoid any swinging, performing the exercise with control.\r\n3. Return to the starting position and then perform the movement to the other side. Continue alternating until the set in complete.\r\n', '2', '1', '2', '1', '1519951716_Hanging_Oblique_Raise.gif', 1, '2018-03-02 00:48:36', '2018-03-02 00:48:36', 0),
(11, 'Lying Reverse Crunch', '1. Lie on the ground in a traditional crunch position, your feet flat on the floor and hands underneath your head.\r\n2. Press your lower back into the floor and pull in your belly button to lift your feet off of the floor. Keep your knees together, bent at 90-degree angles.\r\n3. Using your core, pull your knees into your chest so that your tailbone raises off of the ground, and simultaneously perform a traditional crunch, lifting your shoulder blades off of the floor. Use your abs, not your hands, to lift your head and shoulders. Your hands are just there to protect your neck.\r\n4. Slowly lower your shoulders, hips, and legs to return to the starting position. Stop when your feet are just above the floor.\r\n5. Repeat the movement, making sure not to use momentum to power your next rep. Focus on squeezing those abs!\r\n', '2', '1', '2', '1', '1519951781_Lying_Reverse_Crunch.gif', 1, '2018-03-02 00:49:41', '2018-03-02 00:49:41', 0),
(12, 'Trunk twist', '1. Place TRX straps at waist height. \r\n2. Stand facing TRX with feet a little wider than hip-width apart. \r\n3. Hold both handles, making a fist around the handles. \r\n4. Take a few steps back, and lean away from the straps so that arms are fully extended, core engaged. \r\n5. Keeping arms straight, pull yourself toward the straps, driving hands to the right. \r\n6. Return to starting position, then repeat, this time driving hands to the left. That\'s 1 rep. Repeat for recommended reps. \r\n', '2', '1', '3', '1', '1519951876_Trunk_twist.gif', 1, '2018-03-02 00:51:16', '2018-03-02 00:51:16', 0),
(13, 'Glute Kickback', '1. Kneel on the floor or an exercise mat and bend at the waist with your arms extended in front of you (perpendicular to the torso) in order to get into a kneeling push-up position but with the arms spaced at shoulder width. Your head should be looking forward and the bend of the knees should create a 90-degree angle between the hamstrings and the calves. This will be your starting position.\r\n2. As you exhale, lift up your right leg until the hamstrings are in line with the back while maintaining the 90-degree angle bend. Contract the glutes throughout this movement and hold the contraction at the top for a second. Tip: At the end of the movement the upper leg should be parallel to the floor while the calf should be perpendicular to it.\r\n3. Go back to the initial position as you inhale and now repeat with the left leg.\r\n4. Continue to alternate legs until all of the recommended repetitions have been performed.\r\n', '4', '1', '2', '8', '1519951968_Glute_Kickback.gif', 1, '2018-03-02 00:52:48', '2018-03-02 00:52:48', 0),
(14, 'Barbell Glute Bridge', '1. Begin seated on the ground with a loaded barbell over your legs. Using a fat bar or having a pad on the bar can greatly reduce the discomfort caused by this exercise. Roll the bar so that it is directly above your hips, and lay down flat on the floor.\r\n2. Begin the movement by driving through with your heels, extending your hips vertically through the bar. Your weight should be supported by your upper back and the heels of your feet.\r\n3. Extend as far as possible, then reverse the motion to return to the starting position.\r\n', '4', '4', '1', '8', '1519952313_Barbell_Glute_Bridge.jpg', 1, '2018-03-02 00:58:33', '2018-03-02 00:58:33', 0),
(15, 'Physioball Hip Bridge', '1. Lay on a ball so that your upper back is on the ball with your hips unsupported. Both feet should be flat on the floor, hip width apart or wider. This will be your starting position.\r\n2. Begin by extending the hips using your glutes and hamstrings, raising your hips upward as you bridge.\r\n3. Pause at the top of the motion and return to the starting position.\r\n', '4', '1', '6', '8', '1519952419_Physioball_Hip_Bridge.gif', 1, '2018-03-02 01:00:19', '2018-03-02 01:00:19', 0),
(16, 'Burpee', '1. Begin standing with your legs shoulder-width apart.\r\n2. Place your hands on the floor and kick your legs back so you end up with your stomach and thighs on the floor. Your elbows should be bent.\r\n3. From this position, press up like you\'re doing a push-up and push your hips up.\r\n4. Jump your feet under your hips and stand.\r\n5. Finish the movement by jumping in the air and bringing your hands over your head.\r\n6. Repeat.\r\n', '5', '1', '7', '1', '1519952876_Burpee.gif', 1, '2018-03-02 01:07:56', '2018-03-02 01:07:56', 0),
(17, 'Elliptical Trainer', '1. To begin, step onto the elliptical and select the desired option from the menu. Most ellipticals have a manual setting, or you can select a program to run. Typically, you can enter your age and weight to estimate the amount of calories burned during exercise. Elevation can be adjusted to change the intensity of the workout.\r\n2. The handles can be used to monitor your heart rate to help you stay at an appropriate intensity.\r\n', '5', '1', '7', '4', '1519952975_Elliptical_Trainer.gif', 1, '2018-03-02 01:09:35', '2018-03-02 01:09:35', 0),
(18, 'Rope Jumping', '1. Hold an end of the rope in each hand. Position the rope behind you on the ground. Raise your arms up and turn the rope over your head bringing it down in front of you. When it reaches the ground, jump over it. Find a good turning pace that can be maintained. Different speeds and techniques can be used to introduce variation.\r\n2. Rope jumping is exciting, challenges your coordination, and requires a lot of energy. A 150 lb person will burn about 350 calories jumping rope for 30 minutes, compared to over 450 calories running.\r\n', '5', '1', '2', '9', '1519953132_Rope_Jumping.gif', 1, '2018-03-02 01:12:12', '2018-03-02 01:12:12', 0),
(19, 'Decline crunch', '1. Secure your legs at the end of the decline bench and lie down.\r\n2. Now place your hands lightly on either side of your head keeping your elbows in. Tip: Don\'t lock your fingers behind your head.\r\n3. While pushing the small of your back down in the bench to better isolate your abdominal muscles, begin to roll your shoulders off it.\r\n4. Continue to push down as hard as you can with your lower back as you contract your abdominals and exhale. Your shoulders should come up off the bench only about four inches, and your lower back should remain on the bench. At the top of the movement, contract your abdominals hard and keep the contraction for a second. Tip: Focus on slow, controlled movement - don\'t cheat yourself by using momentum.\r\n5. After the one second contraction, begin to come down slowly again to the starting position as you inhale.\r\n6. Repeat for the recommended amount of repetitions.\r\n', '6', '1', '2', '1', '1519953460_Decline_crunch.gif', 1, '2018-03-02 01:17:40', '2018-03-02 01:17:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `message_trainer` text NOT NULL,
  `message_class` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `trainer_status` int(11) NOT NULL DEFAULT '1',
  `class_status` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `message_trainer`, `message_class`, `user_id`, `trainer_id`, `class_id`, `trainer_status`, `class_status`, `status`, `created_at`) VALUES
(1, '5', '4', 1, 2, 8, 1, 1, 0, '2018-02-10 05:38:15'),
(2, '5', '3', 1, 3, 13, 1, 1, 0, '2018-03-01 21:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `foodlist`
--

CREATE TABLE `foodlist` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `serving` varchar(100) NOT NULL,
  `food_group` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodlist`
--

INSERT INTO `foodlist` (`id`, `name`, `serving`, `food_group`, `type`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(1, 'Strawberries', '1 1/4 cups', 'Fruit', 0, '2018-02-28 00:56:28', '2018-02-28 00:56:28', 1, 0),
(2, 'Apple', '1 small', 'Fruit', 0, '2018-02-28 00:56:28', '2018-02-28 00:56:28', 1, 0),
(3, 'Banana', '1 small', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(4, 'Dalanghita', '2 medium', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(5, 'Grapes', '10 pcs', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(6, 'Lansones', '7 pcs', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(7, 'Lychees', '5 pcs', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(8, 'Mango', '1 slice', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(9, 'Melon', '1 slice', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(10, 'Papaya', '1 slice', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(11, 'Pear', '1 piece', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(12, 'Pineapple', '1 slice', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(13, 'Prunes', '3 pcs', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(14, 'Watermelon', '1 slice', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(15, 'Raisins', '2 tbsp', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(16, 'Fruit Juice', '1/3 cup', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(17, 'Fruit cocktail', '3 tbsp', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(18, 'Peaches', '1 1/4 halves', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(19, 'Buko water', '1 cup', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(20, 'Blueberry', '3/4 cup', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(21, 'Orange', '1 small', 'Fruit', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(22, 'Sugar', '1 teaspoon', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(23, 'Honey', '1 teaspoon', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(24, 'Jam, Jelly', '2 teaspoon', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(25, 'Taho w/syrup', '1/4 cup', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(26, 'Pulvoron', '1 piece', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(27, 'Yema', '1 piece', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(28, 'Hard candy', '1 piece', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(29, 'Powdered juice', '1 teaspoon', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(30, 'Coffee', '1 cup', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(31, 'Tea', '1 cup', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(32, 'Pudding', '2 tbsp', 'Sugar', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(33, 'Cooking oil', '1 teaspoon', 'Fat', 0, '2018-02-28 01:15:46', '2018-02-28 01:15:46', 1, 0),
(34, 'Butter', '1 teaspoon', 'Fat', 0, '2018-02-28 01:20:52', '2018-02-28 01:59:12', 1, 0),
(35, 'Peanut butter', '2 teaspoon', 'Fat', 0, '2018-02-28 01:20:52', '2018-02-28 01:59:36', 1, 0),
(36, 'Salad dressing', '2 tbsp', 'Fat', 0, '2018-02-28 01:56:32', '2018-02-28 02:00:02', 1, 0),
(37, 'Mayonnaise', '1 teaspoon', 'Fat', 0, '2018-02-28 02:01:46', '0000-00-00 00:00:00', 1, 0),
(38, 'Cream cheese', '1 tbsp', 'Fat', 0, '2018-02-28 02:01:46', '0000-00-00 00:00:00', 1, 0),
(39, 'Bacon', '1 strip', 'Fat', 0, '2018-02-28 02:03:52', '0000-00-00 00:00:00', 1, 0),
(40, 'Sitsaron', '2 pieces', 'Fat', 0, '2018-02-28 02:03:52', '0000-00-00 00:00:00', 1, 0),
(41, 'Avocado', '1/2 pieces', 'Fat', 0, '2018-02-28 02:04:18', '0000-00-00 00:00:00', 1, 0),
(42, 'Pili nut', '5 pieces', 'Fat', 0, '2018-02-28 02:04:18', '0000-00-00 00:00:00', 1, 0),
(43, 'Almond', '5 pieces', 'Fat', 0, '2018-02-28 02:04:42', '0000-00-00 00:00:00', 1, 0),
(44, 'Rice', '1/2 cup', 'Rice', 0, '2018-02-28 02:04:42', '0000-00-00 00:00:00', 1, 0),
(45, 'Lugao', '1 cup', 'Rice', 0, '2018-02-28 02:05:11', '0000-00-00 00:00:00', 1, 0),
(46, 'Sliced bread', '2 pcs small', 'Rice', 0, '2018-02-28 02:05:11', '0000-00-00 00:00:00', 1, 0),
(47, 'Whole Wheat Bread', '1 1/2 pcs', 'Rice', 0, '2018-02-28 02:05:59', '0000-00-00 00:00:00', 1, 0),
(48, 'Rolls/Buns', '1 piece', 'Rice', 0, '2018-02-28 02:05:59', '0000-00-00 00:00:00', 1, 0),
(49, 'Pandesal', '2 pieces medium', 'Rice', 0, '2018-02-28 02:06:31', '0000-00-00 00:00:00', 1, 0),
(50, 'Noodles', '1 cup', 'Rice', 0, '2018-02-28 02:06:31', '0000-00-00 00:00:00', 1, 0),
(51, 'Pasta', '1 cup', 'Rice', 0, '2018-02-28 02:06:58', '0000-00-00 00:00:00', 1, 0),
(52, 'Corn', '1 cob', 'Rice', 0, '2018-02-28 02:06:58', '0000-00-00 00:00:00', 1, 0),
(53, 'Potato', '1 1/2 piece', 'Rice', 0, '2018-02-28 02:07:40', '0000-00-00 00:00:00', 1, 0),
(54, 'Sweet potato', '1 piece', 'Rice', 0, '2018-02-28 02:07:40', '0000-00-00 00:00:00', 1, 0),
(55, 'Cereals', '1 cup', 'Rice', 0, '2018-02-28 02:08:04', '0000-00-00 00:00:00', 1, 0),
(56, 'Oatmeal', '1 cup', 'Rice', 0, '2018-02-28 02:08:04', '0000-00-00 00:00:00', 1, 0),
(57, 'Raw Rolled oats', '5 tbsp', 'Rice', 0, '2018-02-28 02:08:41', '0000-00-00 00:00:00', 1, 0),
(58, 'Spinach', '1/2 cup cooked / 1 cup raw', 'Vegetable', 0, '2018-02-28 02:08:41', '0000-00-00 00:00:00', 1, 0),
(59, 'Carrots', '2 pieces smalll', 'Vegetable', 0, '2018-02-28 02:09:09', '0000-00-00 00:00:00', 1, 0),
(60, 'Fresh cow\'s milk', '1 cup', 'Milk', 0, '2018-02-28 02:09:09', '0000-00-00 00:00:00', 1, 0),
(61, 'Powdered milk', '4 tbsp', 'Milk', 0, '2018-02-28 02:09:31', '0000-00-00 00:00:00', 1, 0),
(62, 'Low fat milk', '1 cup', 'Milk', 0, '2018-02-28 02:09:31', '0000-00-00 00:00:00', 1, 0),
(63, 'Soy milk', '1 cup', 'Milk', 0, '2018-02-28 02:09:54', '0000-00-00 00:00:00', 1, 0),
(64, 'Yogurt', '1/2 cup', 'Milk', 0, '2018-02-28 02:09:54', '0000-00-00 00:00:00', 1, 0),
(65, 'Skim milk', '1 cup', 'Milk', 0, '2018-02-28 02:10:22', '0000-00-00 00:00:00', 1, 0),
(66, 'Pork', '1 matchbox size', 'Meat', 0, '2018-02-28 02:10:22', '0000-00-00 00:00:00', 1, 0),
(67, 'Beef', '1 matchbox sze', 'Meat', 0, '2018-02-28 02:10:54', '0000-00-00 00:00:00', 1, 0),
(68, 'Chicken', '1 leg, 1/4 breast', 'Meat', 0, '2018-02-28 02:10:54', '0000-00-00 00:00:00', 1, 0),
(69, 'Fish', '1 matchbox size fillet / 2 pcs small fish / 1 slice', 'Meat', 0, '2018-02-28 02:11:32', '0000-00-00 00:00:00', 1, 0),
(70, 'Shrimps', '5 pcs small / 2 pcs big', 'Meat', 0, '2018-02-28 02:16:46', '0000-00-00 00:00:00', 1, 0),
(71, 'Crab', '1/2 piece medium', 'Meat', 0, '2018-02-28 02:16:46', '0000-00-00 00:00:00', 1, 0),
(72, 'Munggo', '3/4 cup', 'Meat', 0, '2018-02-28 02:17:13', '0000-00-00 00:00:00', 1, 0),
(73, 'Tocino', '1 slice', 'Meat', 0, '2018-02-28 02:17:13', '0000-00-00 00:00:00', 1, 0),
(74, 'Cheese', '1/3 cup cottage cheese', 'Meat', 0, '2018-02-28 02:18:55', '0000-00-00 00:00:00', 1, 0),
(75, 'Canned', '1/3 cup tuna flakes in salmon', 'Meat', 0, '2018-02-28 02:18:55', '0000-00-00 00:00:00', 1, 0),
(76, 'Egg', '1 piece', 'Meat', 0, '2018-02-28 02:20:08', '0000-00-00 00:00:00', 1, 0),
(77, 'Chicken wings', '1 piece', 'Meat', 0, '2018-02-28 02:20:08', '0000-00-00 00:00:00', 1, 0),
(78, 'Cheddar cheese', '1 slice', 'Meat', 0, '2018-02-28 02:20:34', '0000-00-00 00:00:00', 1, 0),
(79, 'Sardines', '1 piece', 'Meat', 0, '2018-02-28 02:20:34', '0000-00-00 00:00:00', 1, 0),
(80, 'Tofu', '1/2 cup', 'Meat', 0, '2018-02-28 02:21:12', '0000-00-00 00:00:00', 1, 0),
(81, 'Corned beef', '3 tbsp', 'Meat', 0, '2018-02-28 02:21:12', '0000-00-00 00:00:00', 1, 0),
(82, 'Ham', '1 slice', 'Meat', 0, '2018-02-28 02:21:35', '0000-00-00 00:00:00', 1, 0),
(83, 'Longganisa', '1 piece', 'Meat', 0, '2018-02-28 02:21:35', '0000-00-00 00:00:00', 1, 0),
(84, 'Vienna sausage', '4 pieces', 'Meat', 0, '2018-02-28 02:21:53', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `food_preference`
--

CREATE TABLE `food_preference` (
  `id` int(11) NOT NULL,
  `mealplan_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_preference`
--

INSERT INTO `food_preference` (`id`, `mealplan_id`, `name`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(1, 1, 'organic', '2018-02-28 20:04:27', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `health_condition`
--

CREATE TABLE `health_condition` (
  `id` int(11) NOT NULL,
  `mealplan_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_condition`
--

INSERT INTO `health_condition` (`id`, `mealplan_id`, `name`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(1, 1, 'diabetic', '2018-02-28 20:04:27', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mealplan`
--

CREATE TABLE `mealplan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `weight` float(11,2) NOT NULL,
  `height` float(11,2) NOT NULL,
  `target_weight` float(11,2) NOT NULL,
  `physical_activity` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `complications` text NOT NULL,
  `foods_avoid` text NOT NULL,
  `medical_info` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealplan`
--

INSERT INTO `mealplan` (`id`, `user_id`, `gender`, `weight`, `height`, `target_weight`, `physical_activity`, `religion`, `complications`, `foods_avoid`, `medical_info`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(1, 1, 'f', 52.00, 160.02, 50.00, 'body', 'catholic', 'Sample 1', 'Sample 2', 'Sample', '2018-02-28 20:04:27', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mealplan_activity`
--

CREATE TABLE `mealplan_activity` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealplan_activity`
--

INSERT INTO `mealplan_activity` (`id`, `name`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(1, 'Body Buulding', '2018-02-28 16:50:05', '0000-00-00 00:00:00', 1, 0),
(2, 'Cardio', '2018-02-28 16:50:05', '0000-00-00 00:00:00', 1, 0),
(3, 'Weight Loss and Dieting', '2018-02-28 16:50:05', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mealplan_day`
--

CREATE TABLE `mealplan_day` (
  `id` int(11) NOT NULL,
  `mealplan_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealplan_day`
--

INSERT INTO `mealplan_day` (`id`, `mealplan_id`, `day`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(1, 1, 1, '2018-02-28 16:45:48', NULL, 1, 0),
(2, 1, 2, '2018-02-28 16:45:48', NULL, 1, 0),
(3, 1, 3, '2018-02-28 16:45:48', NULL, 1, 0),
(4, 1, 4, '2018-02-28 16:45:48', NULL, 1, 0),
(5, 1, 5, '2018-02-28 16:45:48', NULL, 1, 0),
(6, 1, 6, '2018-02-28 16:45:48', NULL, 1, 0),
(7, 1, 7, '2018-02-28 16:45:48', '2018-02-28 17:56:25', 1, 0),
(8, 1, 8, '2018-02-28 17:57:08', NULL, 1, 0),
(9, 1, 9, '2018-02-28 17:57:08', NULL, 1, 0),
(10, 1, 10, '2018-02-28 17:57:46', NULL, 1, 0),
(11, 1, 11, '2018-02-28 17:57:46', NULL, 1, 0),
(12, 1, 12, '2018-02-28 17:57:46', NULL, 1, 0),
(13, 1, 13, '2018-02-28 17:57:46', NULL, 1, 0),
(14, 1, 14, '2018-02-28 17:57:46', NULL, 1, 0),
(15, 2, 1, '2018-02-28 17:58:48', NULL, 1, 0),
(16, 2, 2, '2018-02-28 17:58:48', NULL, 1, 0),
(17, 2, 3, '2018-02-28 17:58:48', NULL, 1, 0),
(18, 2, 4, '2018-02-28 17:58:48', NULL, 1, 0),
(19, 2, 5, '2018-02-28 17:58:48', NULL, 1, 0),
(20, 2, 6, '2018-02-28 17:58:48', NULL, 1, 0),
(21, 2, 7, '2018-02-28 17:58:48', NULL, 1, 0),
(22, 2, 8, '2018-02-28 17:58:48', NULL, 1, 0),
(23, 2, 9, '2018-02-28 17:58:48', NULL, 1, 0),
(24, 2, 10, '2018-02-28 17:58:48', NULL, 1, 0),
(25, 2, 11, '2018-02-28 17:58:48', NULL, 1, 0),
(26, 2, 12, '2018-02-28 17:58:48', NULL, 1, 0),
(27, 2, 13, '2018-02-28 17:58:48', NULL, 1, 0),
(28, 2, 14, '2018-02-28 17:58:48', NULL, 1, 0),
(29, 3, 1, '2018-02-28 17:59:45', NULL, 1, 0),
(30, 3, 2, '2018-02-28 17:59:45', NULL, 1, 0),
(31, 3, 3, '2018-02-28 17:59:45', NULL, 1, 0),
(32, 3, 4, '2018-02-28 17:59:45', NULL, 1, 0),
(33, 3, 5, '2018-02-28 17:59:45', NULL, 1, 0),
(34, 3, 6, '2018-02-28 17:59:45', NULL, 1, 0),
(35, 3, 7, '2018-02-28 17:59:45', NULL, 1, 0),
(36, 3, 8, '2018-02-28 17:59:45', NULL, 1, 0),
(37, 3, 9, '2018-02-28 17:59:45', NULL, 1, 0),
(38, 3, 10, '2018-02-28 17:59:45', NULL, 1, 0),
(39, 3, 11, '2018-02-28 18:00:02', NULL, 1, 0),
(40, 3, 12, '2018-02-28 18:00:02', NULL, 1, 0),
(41, 3, 13, '2018-02-28 18:00:13', NULL, 1, 0),
(42, 3, 14, '2018-02-28 18:00:13', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meal_type`
--

CREATE TABLE `meal_type` (
  `id` int(11) NOT NULL,
  `mealplan_id` int(11) NOT NULL,
  `mealplan_day_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_type`
--

INSERT INTO `meal_type` (`id`, `mealplan_id`, `mealplan_day_id`, `type`, `name`, `created_at`, `updated_at`, `status`, `remove_status`) VALUES
(0, 1, 1, 1, 'Cereal with milk and strawberries', '2018-02-28 18:05:40', '0000-00-00 00:00:00', 1, 0),
(0, 1, 1, 2, 'Salmon and vegetables', '2018-02-28 18:05:40', '0000-00-00 00:00:00', 1, 0),
(0, 1, 1, 2, '1 cup of Brown rice', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 1, 3, 'Pork and applesauce', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 1, 3, '1 cup of Brown rice', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 1, 4, 'Bread and almond butter', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 1, 4, 'Fruit slices', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 1, 'Scramble egg wrap', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 1, 'Spinach', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 2, 'Tuna wrap', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 2, 'Grilled Chicken Salad', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 3, 'Salmon and string beans', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 3, 'Red potatoes', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 3, '1 cup of Brown rice', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 2, 4, 'Cereal with fruit slices', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 3, 1, 'Cereal with milk and strawberries', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 3, 2, 'Salmon and vegetables', '2018-02-28 18:10:52', '0000-00-00 00:00:00', 1, 0),
(0, 1, 3, 2, '1 cup of Brown rice', '2018-02-28 18:12:02', '0000-00-00 00:00:00', 1, 0),
(0, 1, 3, 3, 'Pork and applesauce', '2018-02-28 18:12:02', '0000-00-00 00:00:00', 1, 0),
(0, 1, 3, 3, '1 cup of Brown rice', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 3, 4, 'Bread and almond butter', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 3, 4, 'Fruit slices', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 4, 1, 'Vegetable omelet', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 4, 1, 'Coffee', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 4, 2, 'Ground turkey salad', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 4, 3, 'Steak and spinach', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 4, 3, 'Sweet potato', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 4, 4, 'Chocolate protein pudding', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 4, 4, 'Fruit slices', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 5, 1, 'Ham, egg and cheese muffin', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 5, 2, 'Ground turkey salad', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 5, 2, 'Bison burger', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 5, 3, 'Fish and vegetables', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 5, 3, '1 cup of Brown rice', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 5, 4, 'Yogurt parfait', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 5, 4, 'Fruit slices', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 6, 1, 'Blueberry oatmeal', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 6, 2, 'Grilled Salmon', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 6, 2, '1 cup of Brown rice', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 6, 3, 'Steak and potatoes', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 6, 3, '1 cup of Brown rice', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 6, 4, 'Chocolate protein drink', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 6, 4, 'Fruit slices', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 7, 1, 'Scrambled Egg wrap', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 7, 2, 'Grilled Salmon', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 7, 2, '1 cup of Brown rice', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 7, 3, 'Pork and spinach', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 7, 4, 'Cottage cheese and muffin', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 7, 4, 'Fruit slices', '2018-02-28 18:18:54', '0000-00-00 00:00:00', 1, 0),
(0, 1, 8, 1, 'Waffles and eggs', '2018-02-28 18:19:21', '0000-00-00 00:00:00', 1, 0),
(0, 1, 8, 2, 'Salmon and vegetables', '2018-02-28 18:19:21', '0000-00-00 00:00:00', 1, 0),
(0, 1, 8, 2, '1 cup of Brown rice', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 8, 3, 'Pork and applesauce', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 8, 3, '1 cup of Brown rice', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 8, 4, 'Peanut butter and jelly sandwich', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 8, 4, 'Fruit slices', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 9, 1, 'Waffles and eggs', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 9, 2, 'Turkey wrap with Dijon mustard dip', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 9, 3, 'Turkey and Brussels sprout', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 9, 3, '1 cup of Brown rice', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 9, 4, 'Cereal and strawberries', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 9, 4, 'Fruit slices', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 10, 1, 'Waffles and eggs', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 10, 2, 'Turkey wrap with Dijon mustard dip', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 10, 3, 'Turkey and Brussels sprout', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 10, 3, '1 cup of Brown rice', '2018-02-28 18:23:33', '0000-00-00 00:00:00', 1, 0),
(0, 1, 10, 4, 'Cereal and strawberries', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 11, 1, 'Oatmeal with egg', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 11, 2, 'Grilled Chicken Breat', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 11, 2, '1 cup Brown rice', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 11, 3, 'Steak', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 11, 3, 'Sweet potato', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 11, 4, 'Rice cakes and guac', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 11, 4, 'Fruit slices', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 12, 1, 'Avocado toast', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 12, 1, 'Coffee', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 12, 2, 'Grilled salmon salad', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 12, 3, 'Grilled Chicken', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 12, 3, 'Zucchini noodles', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 12, 4, 'Cereal and strawberries', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 12, 4, 'Fruit slices', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 1, 'High-protein waffle breakfast', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 2, 'Chicken over greens with toast', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 2, 'Sweet potato', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 3, 'Poached Salmon', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 3, 'Carbonara', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 3, 'Steamed Brocolli', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 4, 'Greek yogurt parfait', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 13, 4, 'Fruit slices', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 14, 1, 'Oatmeal and protein powder', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 14, 2, 'Deli turkey and chees', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 14, 3, 'Turkey and vegetable', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 14, 3, '1 cup of Brown rice', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 14, 4, 'Cereal and strawberries', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 1, 14, 1, 'Fruit slices', '2018-02-28 18:30:25', '0000-00-00 00:00:00', 1, 0),
(0, 2, 1, 1, 'Egg Toast', '2018-02-28 18:41:15', '0000-00-00 00:00:00', 1, 0),
(0, 2, 1, 2, 'Chickpea', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 1, 2, 'Vegetable salad', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 1, 3, 'Seared salmon with Green Peppercorn Sauce', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 1, 4, '3/4 cup of Blueberry', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 1, 4, 'Orange', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 2, 1, 'Bran cereal', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 2, 1, 'Skim milk', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 2, 2, 'Vegetable Hummus Sandwich', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 2, 3, 'Roasted Tofu', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 2, 3, 'Peanut noodle salad', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 2, 4, 'Apple', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 2, 4, '2 pieces Carrots', '2018-02-28 18:44:21', '0000-00-00 00:00:00', 1, 0),
(0, 2, 3, 1, 'Plain greek yogurt with blueberries, almond and honey', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 3, 2, '1 cup of Brown rice', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 3, 2, 'Steamed Chicken breast', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 3, 3, 'Grilled Romaine with Avocado-Dressing', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 3, 3, 'Herbal Tea', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 3, 4, 'Strawberries', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 3, 4, '1 string cheese', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 1, 'Bran cereal', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 1, 'Skim milk', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 1, 'Blueberries', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 2, 'Green Salad with chicken', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 3, 'Cod with tomato cream sauce', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 3, '1/2 cup of Brown rice', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 4, 'Orange', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 4, 4, 'Apple', '2018-02-28 18:48:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 5, 1, 'Rolled oats with strawberries', '2018-02-28 18:49:12', '0000-00-00 00:00:00', 1, 0),
(0, 2, 5, 2, 'Toaster oven tostadas', '2018-02-28 18:49:12', '0000-00-00 00:00:00', 1, 0),
(0, 2, 5, 3, 'Mango and kiwi with fresh lime zest', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 5, 4, 'Bell pepper, sliced', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 5, 4, 'Hummus', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 1, 'Bran cereal', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 1, 'Skim milk', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 1, 'Blueberries', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 2, 'Whole-wheat toast', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 2, '6 slices of Lean Turkey', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 3, 'Salmon filler', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 3, 'Vegetable salad', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 4, 'Strawberries', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 6, 4, 'Low fat Greek yogurt', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 7, 1, 'Egg and Tomato Toast', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 7, 1, 'Banana', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 7, 2, 'Tuna and white bean spinach salad', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 7, 3, 'Lemon grass pork', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 7, 3, 'Spaghetti squash noodle bowl', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 7, 4, 'Unsalted dry-roasted almonds', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 7, 4, 'Orange', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 8, 1, 'Tofu scramble with tomato and spinach', '2018-02-28 18:53:36', '0000-00-00 00:00:00', 1, 0),
(0, 2, 8, 2, 'Chicken Avocado Sandwich', '2018-02-28 18:54:03', '0000-00-00 00:00:00', 1, 0),
(0, 2, 8, 2, 'Chickpeas', '2018-02-28 18:54:03', '0000-00-00 00:00:00', 1, 0),
(0, 2, 8, 3, 'Baked Chicken', '2018-02-28 18:54:50', '0000-00-00 00:00:00', 1, 0),
(0, 2, 8, 3, '1/2 cup of Brown rice', '2018-02-28 18:54:50', '0000-00-00 00:00:00', 1, 0),
(0, 2, 8, 4, 'Fruit slices', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 8, 4, 'Boiled egg', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 9, 1, 'Vegetable omelet', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 9, 1, 'Baked potato', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 9, 2, 'Homemade rice(with spinach, broccoli, cauliflower)', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 9, 3, 'Breaded baked salmon', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 9, 3, '1/2 cup of Brown rice', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 9, 4, 'Fruit slices', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 9, 4, 'Hummus', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 10, 1, 'Loaded oatmeal with chopped walnuts', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 10, 2, 'Turkey Burger', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 10, 2, 'Low sodium of brown rice tortilla', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 10, 3, 'Turkey Meatballs', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 10, 3, '3/4  cup of Brown rice', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 10, 4, 'Fruit slices', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 10, 4, 'Whole wheat bread (with almond or peanut butter and sliced banana)', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 11, 1, 'Protein packed rice cake', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 11, 2, 'Avocado Tuna Salad', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 11, 2, 'Herbal Tea', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 11, 3, 'Feta Chicken with feta cheese', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 11, 3, '1/2 cup of Brown rice', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 11, 4, 'Fruit slices', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 11, 4, 'Whole grain bread with mashed avocado and ground flaxseed', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 12, 1, 'Double espresso(sugar free)', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 12, 2, 'Tuna mayo baguette', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 12, 3, 'Salmon', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 12, 3, 'Mixed vegetables', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 12, 3, '3/4 cup of rice', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 12, 4, 'Fruit slices', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 12, 4, 'Plain Greek Yogurt with peanut or almond mixed', '2018-02-28 19:02:22', '0000-00-00 00:00:00', 1, 0),
(0, 2, 13, 1, 'Egg omelette with fresh tomato and chees', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 13, 2, 'Turkey meatballs in tomato and onion sauce', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 13, 3, '1/2 cup of Brown rice', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 13, 3, 'Chicken risotto', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 13, 4, 'Protein shake', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 13, 4, 'Banana', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 14, 1, 'Blueberry Oatmeal', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 14, 2, 'Tuna mayo baguette', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 14, 3, 'Salmon', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 14, 3, 'Mixed vegetables', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 14, 3, '3/4 cup of rice', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 14, 4, 'Fruit slices', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 2, 14, 4, 'Protein shake with mixed berries', '2018-02-28 19:05:30', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 1, 'Vegetable Omelet', '2018-02-28 19:18:36', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 1, 'Coffee', '2018-02-28 19:18:36', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 2, 'Sinigang na Isda', '2018-02-28 19:19:13', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 2, '3/4 cup or rice', '2018-02-28 19:19:13', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 2, 'Papaya slice', '2018-02-28 19:19:42', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 3, 'Grilled Chicken Wings', '2018-02-28 19:19:42', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 3, 'Herbal Tea', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 4, 'Caesar Sala', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 1, 4, 'Fruit slices', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 1, '3/4 cup of garlic rice', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 1, 'Scrambled eggs', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 2, 'Ginisang Monggo', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 2, '3/4 cup or rice', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 2, 'Mango slice', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 3, 'Fish Fillet with dill sauce', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 3, '3/4 cup or rice', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 4, 'Fruit slices', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 2, 4, 'Nilagang Saba', '2018-02-28 19:22:02', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 1, 'Dried fruit', '2018-02-28 19:23:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 1, 'Cereal with almonds', '2018-02-28 19:23:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 2, 'Carbonara', '2018-02-28 19:23:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 3, 'Stuffed pork', '2018-02-28 19:23:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 3, '3/4 cup of rice', '2018-02-28 19:23:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 4, 'Turon', '2018-02-28 19:23:52', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 3, 'Kani Salad', '2018-02-28 19:23:52', '0000-00-00 00:00:00', 1, 0),
(0, 3, 3, 3, 'Fruit slices', '2018-02-28 19:23:52', '0000-00-00 00:00:00', 1, 0),
(0, 3, 4, 1, 'Panini sandwich', '2018-02-28 19:25:01', '0000-00-00 00:00:00', 1, 0),
(0, 3, 4, 1, 'Low fat milk', '2018-02-28 19:25:01', '0000-00-00 00:00:00', 1, 0),
(0, 3, 4, 2, 'Chpseuy', '2018-02-28 19:25:01', '0000-00-00 00:00:00', 1, 0),
(0, 3, 4, 2, '3/4 cup of rice', '2018-02-28 19:25:01', '0000-00-00 00:00:00', 1, 0),
(0, 3, 4, 3, 'Carbonara', '2018-02-28 19:25:01', '0000-00-00 00:00:00', 1, 0),
(0, 3, 4, 4, 'Fruit slices', '2018-02-28 19:25:26', '0000-00-00 00:00:00', 1, 0),
(0, 3, 4, 4, 'Oatmeal Cookie', '2018-02-28 19:25:26', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 1, 'Butterbrot breat', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 1, 'Low fat milk', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 2, 'Breaded pork chop', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 2, 'Vegetables', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 2, '3/4 cup of rice', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 3, 'Pork tonkatsu', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 3, '3/4 cup of rice', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 4, 'Fruit slices', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 5, 4, 'Caesar salad', '2018-02-28 19:27:43', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 1, 'Taho', '2018-02-28 19:28:08', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 1, 'Strawberry waffle', '2018-02-28 19:28:08', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 2, 'Buffalo wings', '2018-02-28 19:28:37', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 2, '3/4 cup of rice', '2018-02-28 19:28:37', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 3, 'Tofu steaks', '2018-02-28 19:29:04', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 3, 'Bean sprouts', '2018-02-28 19:29:04', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 3, '3/4 cup of rice', '2018-02-28 19:29:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 4, 'Fruit slices', '2018-02-28 19:29:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 6, 4, 'Ginataang Halo-Halo', '2018-02-28 19:29:53', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 1, 'French Toast', '2018-02-28 19:29:53', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 1, 'Coffee', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 2, 'Ensaladang Talong', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 2, '3/4 cup of rice', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 3, 'Grilled Chicken wings', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 3, '3/4 cup of rice', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 4, 'Fruit slices', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 7, 4, 'Tart', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 1, 'Spam with scrambled eggs', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 1, 'Garlic rice', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 2, 'Stuffed porkloi', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 2, '3/4 cup of rice', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 3, 'Fettuccine Alfredo', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 3, 'Chicken fingers', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 4, 'Fruit slices', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 8, 4, 'Cheesecake', '2018-02-28 19:33:19', '0000-00-00 00:00:00', 1, 0),
(0, 3, 9, 1, 'Yogurt', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 9, 1, 'Granola', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 9, 2, 'Nilagang manok with malunggay', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 9, 2, '3/4 cup of rice', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 9, 3, 'Grilled Fish with Tomatoes', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 9, 3, '3/4 cup of rice', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 9, 4, 'Fruit slices', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 1, 'Bacon and egg', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 1, 'Fried rice', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 2, 'Meatballs marinara', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 2, '3/4 cup of rice', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 3, 'Chicken fajitas', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 3, '3/4 cup of rice', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 4, 'Fruit slices', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 10, 4, 'Spinach salad', '2018-02-28 19:36:28', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 1, 'Blueberry Pancake', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 1, 'Low fat milk', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 2, 'Pork adobo', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 2, '3/4 cup of rice', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 2, 'Banana slice', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 3, 'Menudo', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 3, '3/4 cup of rice', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 4, 'Fruit slices', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 11, 4, 'Chicken salad', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 1, 'Cereal', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 1, 'Almond milk', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 2, 'Pininyahang Manok', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 2, '3/4 cup of rice', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 3, 'Picadillo', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 3, '3/4 cup of rice', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 4, 'Fruit slices', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 12, 4, 'Ginataang Mais', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 13, 1, 'Butterbrot bread', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 13, 1, 'Coffee', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 13, 2, 'Pinakbet', '2018-02-28 19:41:00', '0000-00-00 00:00:00', 1, 0),
(0, 3, 13, 2, '3/4 cup of rice', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 13, 3, 'Nilagang manok', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 13, 3, '3/4 cup of rice', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 1, 'Ham and Egg Sandwich', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 1, 'Watermelon slice', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 2, 'Chicken tinola', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 2, '3/4 cup of rice', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 3, 'Breaded pork', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 3, '3/4 cup of rice', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 4, 'Fruit slices', '2018-02-28 19:43:11', '0000-00-00 00:00:00', 1, 0),
(0, 3, 14, 4, 'Mashed potato', '2018-02-28 19:43:25', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `trainer_fname` varchar(100) NOT NULL,
  `trainer_lname` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `account_type` tinyint(4) NOT NULL DEFAULT '2',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `trainer_fname`, `trainer_lname`, `gender`, `registered_at`, `status`, `account_type`, `remove_status`) VALUES
(1, 'Shinichi', 'Kudo', 'Male', '2018-01-30 16:05:30', 0, 2, 0),
(2, 'Ran', 'Mouri', '', '2018-01-30 16:05:30', 0, 2, 0),
(3, 'Conan', 'Edogawa', '', '2018-01-30 16:05:30', 1, 2, 0),
(4, 'asd', 'wqe', 'Male', '2018-02-13 02:41:41', 1, 2, 1),
(5, 'asdsa', 'qweq', 'Male', '2018-02-13 02:44:31', 1, 2, 1),
(6, 'Hehe', 'qweqweq', 'Female', '2018-02-13 02:45:03', 1, 2, 1),
(7, 'heqeq', 'eqeq', 'Female', '2018-02-13 02:46:18', 1, 2, 1),
(8, 'Whaaat', 'Wheeee', 'Male', '2018-02-13 02:47:10', 1, 2, 0),
(9, 'Luh', 'Whee', 'Male', '2018-02-13 02:47:57', 1, 2, 0),
(10, 'Nyeaaaw', '1231231', 'Female', '2018-02-13 02:49:48', 1, 2, 0),
(11, 'ad', 'wqe', 'Female', '2018-02-13 02:51:16', 1, 2, 0),
(12, 'qwe', 'qweqe', 'Male', '2018-02-13 02:52:55', 1, 2, 0),
(13, 'luh', 'qwe', 'Male', '2018-02-13 02:53:32', 1, 2, 0),
(14, 'Kala mo Talag', 'Eh noh', 'Male', '2018-02-13 02:55:04', 1, 2, 0),
(15, 'Kala mo Talag', 'Eh noh', 'Male', '2018-02-13 02:55:32', 1, 2, 0),
(16, 'Kala mo Talag', 'Eh noh', 'Male', '2018-02-13 02:56:15', 1, 2, 0),
(17, 'hehe', 'wqewq', 'Female', '2018-02-13 02:57:04', 1, 2, 0),
(18, 'hehe', 'wqewq', 'Female', '2018-02-13 02:57:15', 1, 2, 0),
(19, 'asd', 'sdqw', 'Male', '2018-02-13 05:13:32', 1, 2, 0),
(20, 'asd', 'qw', 'Male', '2018-02-13 05:16:44', 1, 2, 0),
(21, 'Sherry Gil', 'Egana', 'Male', '2018-02-14 13:22:46', 1, 2, 0),
(22, 'Arianne', 'Fabular', 'Male', '2018-02-14 13:24:27', 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tran_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tran_contact_number` varchar(20) DEFAULT NULL,
  `tran_total_bill` double NOT NULL,
  `tran_created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tran_id`, `customer_id`, `tran_contact_number`, `tran_total_bill`, `tran_created_at`) VALUES
(1, 5, '09265258758', 4418, '1472885350'),
(2, 7, '09226142761', 6423, '1502994907'),
(3, 4, '09289205108', 5091, '1425703669'),
(4, 4, '09223429687', 2245, '1419115352'),
(5, 10, '09230732025', 1397, '1418061578'),
(6, 6, '09250638977', 4260, '1503021828'),
(7, 3, '09215462677', 7041, '1511847311'),
(8, 6, '09223840576', 3258, '1447890375'),
(9, 2, '09229886077', 2105, '1421948706'),
(10, 10, '09258204162', 3362, '1448334142'),
(11, 2, '09269784576', 3009, '1444070898'),
(12, 3, '09240119018', 9325, '1472846380'),
(13, 8, '09283724578', 5263, '1473157872'),
(14, 9, '09292948425', 772, '1505192268'),
(15, 10, '09291428741', 516, '1439157425'),
(16, 8, '09277086914', 2161, '1414069523'),
(17, 9, '09260025970', 2687, '1463025830'),
(18, 3, '09260210266', 4399, '1457255204'),
(19, 9, '09277301422', 7581, '1412375559'),
(20, 10, '09294525512', 9972, '1388678858'),
(21, 6, '09229946502', 9519, '1398479631'),
(22, 10, '09293020935', 2069, '1452385146'),
(23, 6, '09273808868', 8466, '1405877435'),
(24, 2, '0922716064', 8709, '1500864188'),
(25, 2, '09215142425', 7648, '1432057476'),
(26, 9, '09276911682', 5362, '1420912644'),
(27, 2, '09227124664', 3396, '1395106700'),
(28, 2, '09211477661', 703, '1428606731'),
(29, 1, '09214574432', 658, '1409754223'),
(30, 9, '09266434020', 8016, '1394160672'),
(31, 10, '09299428985', 7399, '1446588448'),
(32, 2, '09214027587', 1964, '1458369019'),
(33, 5, '09238442230', 3093, '1447238568'),
(34, 8, '09258059143', 769, '1459163925'),
(35, 1, '0926024322', 6112, '1510544538'),
(36, 4, '09289860717', 5730, '1427827330'),
(37, 2, '09274491668', 4841, '1411114241'),
(38, 8, '09259545593', 8348, '1422789387'),
(39, 2, '09290316925', 2803, '1435065747'),
(40, 1, '09250258300', 6953, '1478586268'),
(41, 4, '09245378997', 6793, '1490398304'),
(42, 10, '09255424621', 4329, '1451063146'),
(43, 5, '09252213043', 5488, '1482665759'),
(44, 1, '09253001586', 5338, '1440139224'),
(45, 4, '09222260467', 5089, '1405414727'),
(46, 10, '09279727478', 5043, '1487770539'),
(47, 8, '09237118927', 7932, '1411759111'),
(48, 7, '0928371826', 5337, '1415376463'),
(49, 4, '09226792327', 620, '1439691192'),
(50, 8, '09217985412', 3065, '1407334115'),
(51, 2, '09241940826', 8650, '1487451668'),
(52, 9, '09274150268', 6653, '1391651438'),
(53, 5, '09231130828', 8529, '1413099048'),
(54, 3, '09277857330', 1687, '1401117598'),
(55, 2, '0923229675', 5226, '1510025611'),
(56, 5, '09214084991', 1407, '1465562426'),
(57, 3, '09258439819', 7576, '1512982686'),
(58, 8, '09286769989', 2716, '1415252994'),
(59, 6, '09245913757', 2104, '1439495435'),
(60, 8, '09236853057', 9512, '1498391905'),
(61, 6, '09272978027', 1526, '1442302035'),
(62, 8, '09268485443', 5113, '1444617068'),
(63, 4, '09283558410', 3875, '1449271148'),
(64, 2, '09246702301', 1953, '1397051700'),
(65, 10, '0926111938', 9263, '1461071808'),
(66, 2, '09231445037', 1480, '1398171846'),
(67, 7, '09225876892', 8002, '1463390100'),
(68, 3, '09254811309', 1279, '1423854440'),
(69, 9, '09265122802', 6738, '1392591688'),
(70, 5, '09296305023', 2207, '1428545471'),
(71, 6, '09255400451', 7064, '1415390260'),
(72, 3, '09258086334', 6006, '1462280670'),
(73, 9, '09211791870', 3155, '1445305649'),
(74, 6, '09237221649', 3435, '1489262652'),
(75, 9, '09261618164', 4240, '1507706751'),
(76, 1, '09256932220', 1202, '1480858316'),
(77, 2, '09219991516', 4102, '1450210377');

-- --------------------------------------------------------

--
-- Table structure for table `user_class`
--

CREATE TABLE `user_class` (
  `id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `feedback_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_class`
--

INSERT INTO `user_class` (`id`, `accounts_id`, `class_id`, `trainer_id`, `status`, `feedback_status`, `created_at`) VALUES
(1, 1, 3, 1, 0, 1, '2018-02-05 17:23:52'),
(2, 1, 7, 2, 1, 0, '2018-02-05 17:57:27'),
(3, 1, 8, 2, 0, 1, '2018-02-06 08:51:14'),
(4, 1, 1, 2, 1, 0, '2018-02-06 08:51:22'),
(5, 1, 13, 3, 0, 1, '2018-02-06 08:51:29'),
(6, 1, 12, 1, 1, 0, '2018-02-11 05:42:05'),
(7, 1, 5, 1, 1, 0, '2018-02-11 11:42:41'),
(8, 1, 9, 2, 1, 0, '2018-02-14 13:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_mealplan`
--

CREATE TABLE `user_mealplan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mealplan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `feedback_status` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `remove_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_mealplan`
--

INSERT INTO `user_mealplan` (`id`, `user_id`, `mealplan_id`, `created_at`, `updated_at`, `feedback_status`, `status`, `remove_status`) VALUES
(2, 1, 1, '2018-02-27 20:04:27', '2018-02-28 20:35:15', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_workout`
--

CREATE TABLE `user_workout` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `workout_id` int(11) NOT NULL,
  `workout_level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_workout`
--

INSERT INTO `user_workout` (`id`, `user_id`, `workout_id`, `workout_level`, `created_at`, `status`) VALUES
(1, 1, 1, 1, '2017-11-01 11:45:09', 0),
(2, 1, 1, 1, '2017-11-23 04:24:20', 0),
(3, 1, 1, 1, '2018-02-27 23:03:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Full Body', '0000-00-00 00:00:00', '2018-02-03 07:21:48'),
(2, 'Arm', '0000-00-00 00:00:00', '2018-02-03 07:21:48'),
(3, 'Leg', '0000-00-00 00:00:00', '2018-02-03 07:21:48'),
(4, 'Core', '0000-00-00 00:00:00', '2018-02-03 07:21:48'),
(5, 'Butt', '0000-00-00 00:00:00', '2018-02-03 07:21:48'),
(6, 'Cardio', '0000-00-00 00:00:00', '2018-02-03 07:21:48'),
(7, 'Weight Loss and Dieting', '0000-00-00 00:00:00', '2018-02-03 07:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `workout_levels`
--

CREATE TABLE `workout_levels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `week` text NOT NULL,
  `level` int(11) NOT NULL,
  `workout_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_levels`
--

INSERT INTO `workout_levels` (`id`, `name`, `week`, `level`, `workout_id`, `updated_at`, `created_at`) VALUES
(1, 'Core workout - 5 reps', '1', 1, 1, '2018-02-14 04:45:36', '2018-02-03 07:49:21'),
(2, 'Arm workout - 5 reps', '2', 1, 1, '2018-02-04 08:31:35', '2018-02-03 07:49:21'),
(3, 'Glute/Butt workout - 5 reps', '3', 1, 1, '2018-02-04 08:31:38', '2018-02-03 07:49:21'),
(4, 'Leg workout - 5 reps', '4', 1, 1, '2018-02-04 08:31:41', '2018-02-03 07:49:21'),
(5, 'Core workout – 8 reps', '5', 1, 1, '2018-02-04 08:31:45', '2018-02-03 07:49:21'),
(6, 'Arm workout – 8 reps', '6', 1, 1, '2018-02-04 08:31:49', '2018-02-03 07:49:21'),
(7, 'Glute/butt workout – 8 reps', '7', 1, 1, '2018-02-04 08:31:51', '2018-02-03 07:49:21'),
(8, 'Leg workout – 10 reps ', '8', 1, 1, '2018-02-04 08:31:56', '2018-02-03 07:49:21'),
(9, 'Arm workout – 10 reps', '9', 1, 1, '2018-02-04 08:31:58', '2018-02-03 07:49:21'),
(10, 'Full body workout – 12 reps', '10', 1, 1, '2018-02-04 08:32:02', '2018-02-03 07:49:21'),
(11, 'Full body workout – 12 reps', '11', 1, 1, '2018-02-04 08:32:04', '2018-02-03 07:49:21'),
(12, 'Full body workout – 12 reps', '12', 1, 1, '2018-02-04 08:32:07', '2018-02-03 07:49:21'),
(13, 'Arm workout - 10 reps', '1', 2, 1, '2018-02-04 08:32:09', '2018-02-04 08:06:37'),
(14, 'Arm workout - 8 reps', '2', 2, 1, '0000-00-00 00:00:00', '2018-02-04 08:06:37'),
(15, 'Cardio Workout - 5 reps', '1', 1, 6, '0000-00-00 00:00:00', '2018-02-04 08:16:38'),
(16, 'Cardio Workout - 10 reps', '2', 1, 6, '0000-00-00 00:00:00', '2018-02-04 08:16:38'),
(17, 'Sample Week - 3reps', '3', 2, 1, '0000-00-00 00:00:00', '2018-02-09 09:07:19'),
(18, 'Triple Workout', '4', 2, 1, '0000-00-00 00:00:00', '2018-02-09 15:24:54'),
(19, 'Arm workout - 5 reps', '1', 1, 7, '0000-00-00 00:00:00', '2018-02-10 01:59:34'),
(20, 'Arianne Week', '13', 1, 1, '0000-00-00 00:00:00', '2018-02-10 05:28:36'),
(21, 'Sample Week', '1', 3, 1, '0000-00-00 00:00:00', '2018-02-10 05:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `workout_list`
--

CREATE TABLE `workout_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `week_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `workout_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_list`
--

INSERT INTO `workout_list` (`id`, `name`, `week_id`, `level_id`, `workout_id`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Floor Crunches', 1, 1, 1, 1, '2018-02-08 11:53:09', '2018-02-03 07:54:58'),
(2, 'Reverse Crunches', 1, 1, 1, 1, '2018-02-08 11:53:06', '2018-02-03 07:54:58'),
(3, 'Oblique Crunches', 1, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 07:54:58'),
(4, 'Side Crunch', 1, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 07:54:58'),
(5, 'C-Sit', 1, 1, 1, 1, '2018-02-08 02:12:07', '2018-02-03 07:54:58'),
(6, 'Finger Curls', 2, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(7, 'Dumbbell alternate bicep curl', 2, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(8, 'Bench dips', 2, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(9, 'Side laterals to front raise', 2, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(10, 'Concentration Curls', 2, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(11, 'Butt lift', 3, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(12, 'Single leg glute bridge', 3, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(13, 'Leg lift', 3, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(14, 'Step-up with Knee Raise', 3, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(15, 'Glute kickback', 3, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(16, 'Vertical Swing', 4, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(17, 'Running - treadmill', 4, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(18, 'Box Squats', 4, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(19, 'Standing barbell of calf raise', 4, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(20, 'Dumbbell Squats', 4, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:01:09'),
(21, 'Floor Crunches', 5, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(22, 'Reverse Crunches', 5, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(23, 'Oblique Crunches', 5, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(24, 'Side Crunch', 5, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(25, 'C-Sit', 5, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(26, 'Seated Two-Arm Palms-Up-Low Pullet Wrist Curl', 6, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(27, 'Standing biceps cable curl', 6, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(28, 'Diamond pushups', 6, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(29, 'One-arm side laterals ', 6, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(30, 'Standing dumbbell press', 6, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(31, 'Butt lift', 7, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(32, 'Single leg glute bridge', 7, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(33, 'Leg lift', 7, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(34, 'Step-up with Knee Raise ', 7, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(35, 'Glute Kickback ', 7, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:04:34'),
(36, 'Romanian Deadlift with Dumbbells ', 8, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(37, 'Cycling', 8, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(38, 'Standing dumbbell calf raise', 8, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(39, 'Dumbbell Goblet Squat', 8, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(40, 'Stiff-Legged Dumbbell Deadlift', 8, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(41, 'Wrist Rotations with straight bar', 9, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(42, 'Seated Two-Arm Palms-Up-Low-Pulley Wrist Curl', 9, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(43, 'Seated Triceps Press', 9, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(44, 'Standing dumbbell press', 9, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(45, 'Barbell biceps cable curl', 9, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(46, 'Floor Crunches', 10, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(47, 'Bench Press ', 10, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(48, 'Lat Pulldowns', 10, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(49, 'Military Press', 10, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(50, 'Lateral Raises', 10, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:08:39'),
(51, 'Reverse Crunches', 11, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(52, 'Dumbbell flyes', 11, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(53, 'Seated Cable Rows', 11, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(54, 'Lying tricep extensions', 11, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(55, 'Oblique Crunches', 12, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(56, 'Cable pushdown', 12, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(57, 'Leg Press', 12, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(58, 'Squat ', 12, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(59, 'Lying tricep extensions', 12, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(60, 'Lying leg curls ', 12, 1, 1, 1, '2018-02-04 08:41:46', '2018-02-03 08:16:51'),
(61, 'Sample', 1, 1, 1, 1, '2018-02-10 05:26:46', '2018-02-08 01:49:01'),
(62, 'Hehehe', 2, 1, 1, 1, '0000-00-00 00:00:00', '2018-02-08 01:49:15'),
(63, 'Ganda', 1, 1, 1, 0, '2018-02-19 09:08:21', '2018-02-08 01:50:05'),
(64, 'Lah', 1, 1, 1, 0, '2018-02-08 11:52:56', '2018-02-08 01:51:15'),
(65, 'Sample 1', 1, 2, 1, 1, '0000-00-00 00:00:00', '2018-02-08 02:23:19'),
(66, 'Jumping', 1, 1, 7, 1, '0000-00-00 00:00:00', '2018-02-10 01:59:55'),
(67, 'Sherrybells', 1, 1, 1, 1, '0000-00-00 00:00:00', '2018-02-10 05:27:02'),
(68, 'Sit ups', 13, 1, 1, 1, '0000-00-00 00:00:00', '2018-02-10 05:28:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allergy`
--
ALTER TABLE `allergy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_trails`
--
ALTER TABLE `audit_trails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodlist`
--
ALTER TABLE `foodlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_preference`
--
ALTER TABLE `food_preference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_condition`
--
ALTER TABLE `health_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealplan`
--
ALTER TABLE `mealplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealplan_activity`
--
ALTER TABLE `mealplan_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealplan_day`
--
ALTER TABLE `mealplan_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `user_class`
--
ALTER TABLE `user_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mealplan`
--
ALTER TABLE `user_mealplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_workout`
--
ALTER TABLE `user_workout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_levels`
--
ALTER TABLE `workout_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_list`
--
ALTER TABLE `workout_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allergy`
--
ALTER TABLE `allergy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `audit_trails`
--
ALTER TABLE `audit_trails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodlist`
--
ALTER TABLE `foodlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `food_preference`
--
ALTER TABLE `food_preference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `health_condition`
--
ALTER TABLE `health_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mealplan`
--
ALTER TABLE `mealplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mealplan_activity`
--
ALTER TABLE `mealplan_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mealplan_day`
--
ALTER TABLE `mealplan_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user_class`
--
ALTER TABLE `user_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_mealplan`
--
ALTER TABLE `user_mealplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_workout`
--
ALTER TABLE `user_workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workout_levels`
--
ALTER TABLE `workout_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `workout_list`
--
ALTER TABLE `workout_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
