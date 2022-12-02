-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2021 at 10:39 PM
-- Server version: 5.7.33-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cplussoft_gutter_cleaning`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone_number`, `service_type`, `message`, `created_at`, `updated_at`) VALUES
(2, 'test', 'tayyibyasin786@gmail.com', '564654', 'Our Service', 'test message', NULL, NULL),
(3, 'test', 'tayyibyasin786@gmail.com', '564654', 'Our Service', 'test message', '2021-05-05 04:29:36', '2021-05-05 04:29:36'),
(4, 'tihahusama', 'migy@mailinator.com', 'nuwomegico@mailinator.com', 'Gutter Cleaning', 'Fugiat molestiae de', '2021-05-07 13:49:29', '2021-05-07 13:49:29'),
(5, 'dexa@mailinator.com', 'dywacydi@mailinator.com', 'sapabyz@mailinator.com', 'Gutter Cleaning', 'Iste quod qui ipsam Duis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nemDuis ut aute qui nem', '2021-05-07 16:37:03', '2021-05-07 16:37:03'),
(6, 'Abdur Rehma', 'AbdurRehman@gmail.com', '0305 1387510', 'Gutter Cleaning', 'Hi,\r\nI am happy to see your progress day by day.\r\nKeep it up.\r\nThanks', '2021-05-10 12:03:02', '2021-05-10 12:03:02'),
(7, 'Abdur Rehma', 'AbdurRehman@gmail.com', '0305 1387510', 'Other', 'Hi,\r\nI am happy to see your progress day by day.\r\nKeep it up.\r\nThanks', '2021-05-10 12:03:47', '2021-05-10 12:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serviceable_id` bigint(20) NOT NULL,
  `serviceable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slot_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `serviceable_id`, `serviceable_type`, `time_slot_id`, `service_id`, `date`, `active`, `created_at`, `updated_at`) VALUES
(23, 28, 'App/Guest', 16, 3, '2021-05-24', 1, '2021-05-10 12:53:12', '2021-05-11 12:54:25'),
(24, 29, 'App/Guest', 19, 3, '2021-05-18', 1, '2021-05-10 15:16:06', '2021-05-18 22:35:37'),
(25, 31, 'App/Guest', 19, 2, '2021-05-15', 1, '2021-05-18 22:23:06', '2021-05-18 22:23:06'),
(26, 8, 'App/User', 19, 5, '2021-05-08', 0, '2021-05-18 23:24:39', '2021-05-18 23:27:17'),
(27, 8, 'App/User', 19, 5, '2021-05-01', 0, '2021-05-18 23:25:16', '2021-05-18 23:26:05'),
(29, 8, 'App/User', 18, 5, '2021-05-24', 1, '2021-05-18 23:30:12', '2021-05-18 23:30:12'),
(30, 8, 'App/User', 22, 2, '2021-05-25', 1, '2021-05-20 23:18:00', '2021-05-20 23:18:00'),
(31, 34, 'App/Guest', 16, 2, '2021-05-03', 1, '2021-05-21 21:37:29', '2021-05-21 21:37:29'),
(32, 35, 'App/Guest', 19, 5, '2021-05-29', 1, '2021-05-24 19:06:00', '2021-05-24 19:06:00'),
(33, 37, 'App/Guest', 21, 5, '2021-05-25', 1, '2021-05-26 23:21:37', '2021-05-26 23:21:37'),
(34, 39, 'App/Guest', 21, 5, '2021-06-08', 1, '2021-06-03 12:09:40', '2021-06-03 12:09:40'),
(35, 41, 'App/Guest', 19, 2, '2021-06-12', 1, '2021-06-09 23:42:53', '2021-06-09 23:42:53'),
(36, 42, 'App/Guest', 21, 2, '2021-06-22', 1, '2021-06-09 23:43:40', '2021-06-09 23:43:40'),
(37, 8, 'App/User', 22, 2, '2021-06-22', 1, '2021-06-10 16:32:49', '2021-06-10 16:32:49'),
(38, 43, 'App/Guest', 21, 5, '2021-06-01', 1, '2021-06-10 19:54:13', '2021-06-10 19:54:13'),
(39, 44, 'App/Guest', 22, 2, '2021-06-29', 1, '2021-06-18 22:22:47', '2021-06-18 22:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Melanie Haynes', 'zeta@mailinator.com', '+1 (843) 763-5041', 'Earum ullamco sit al', '2021-05-07 13:37:36', '2021-05-07 13:37:36'),
(4, 'abc', 'abc@gmail.com', '7987', '798', '2021-05-07 16:28:10', '2021-05-07 16:28:10'),
(5, 'Abaidullah', 'abaid@gmail.com', '54645656456', 'shaldjskajsdlsjaklsd', '2021-05-10 15:18:17', '2021-05-10 15:18:17'),
(6, 'eret', 'tes54651@gmail.com', '03331874242', 'guggg', '2021-05-18 22:26:30', '2021-05-18 22:26:30'),
(7, 'Gary Parkinson', 'chitteringkitchens@outlook.com', '0447784206', 'test', '2021-05-24 19:35:41', '2021-05-24 19:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `estimates`
--

CREATE TABLE `estimates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estimates`
--

INSERT INTO `estimates` (`id`, `name`, `email`, `description`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Kellie Mendoza', 'tijefapaki@mailinator.com', 'Nisi molestiae laborNisi molestiae laborNisi molestiae labor', 'haxy@mailinator.com', '', '2021-05-07 13:41:59', '2021-05-07 13:41:59'),
(4, 'Ali', 'ali@test.com', 'Hi,\r\nI want your service. Firstly I want your quotation for this job.\r\nThanks,', '0305 1387510', '', '2021-05-10 11:56:56', '2021-05-10 11:56:56'),
(6, 'bnb', 'vnnnb@gmail', 'vbnvbnvb', 'vbnvbn', '', '2021-05-18 23:43:48', '2021-05-18 23:43:48'),
(7, 'fsdfsd', 'dgfdg@gmail.com', 'sdsgf', '32432423', '', '2021-05-19 00:38:02', '2021-05-19 00:38:02'),
(8, 'Irfan', 'irfan.elahi187@gmail.com', 'This is good', '0333877667', 'E-11/4', '2021-05-25 00:47:48', '2021-05-25 00:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(41, 'irfan', 'test@test.com', '2021-06-09 23:42:53', '2021-06-09 23:42:53'),
(42, 'hi', 'test@test.com', '2021-06-09 23:43:40', '2021-06-09 23:43:40'),
(43, 'Gary Parkinson', 'gary@veejays.com.au', '2021-06-10 19:54:13', '2021-06-10 19:54:13'),
(44, 'r', 'a@a', '2021-06-18 22:22:47', '2021-06-18 22:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_22_064711_make_slot_days_table', 1),
(6, '2021_04_24_072707_create_services_table', 1),
(7, '2021_04_24_074312_create_packages_table', 1),
(9, '2021_04_26_064120_create_permission_tables', 1),
(10, '2021_04_27_064803_add_phone_number_and_address_to_users_table', 1),
(11, '2021_04_28_062409_create_subscriptions_table', 1),
(12, '2021_05_02_065902_create_blocks_table', 1),
(13, '2021_05_05_070135_create_guests_table', 1),
(14, '2021_05_05_092048_create_appointments_table', 2),
(16, '2021_05_06_052231_create_newsletters_table', 3),
(17, '2021_05_06_061423_create_estimates_table', 4),
(18, '2021_05_06_083237_create_contact_us_table', 5),
(19, '2021_04_23_073103_create_time_slots_table', 6),
(20, '2021_04_24_075617_create_bookings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 9),
(1, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`email`, `created_at`, `updated_at`) VALUES
('bob@gmail.com', '2021-05-06 00:56:17', '2021-05-06 00:56:17'),
('tayyibyasin786@gmail.com', '2021-05-06 00:50:41', '2021-05-06 00:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `features`, `created_at`, `updated_at`) VALUES
(2, 'Package 1', 3200, '[\"test\",\"test 2\",\"test 3\"]', '2021-05-07 00:34:27', '2021-05-07 14:13:28'),
(3, 'Package 2', 4000, '[\"feature 1\",\"feature 2\",\"feature 3\"]', '2021-05-07 14:14:52', '2021-05-07 14:14:52'),
(4, 'Package 3', 4400, '[\"feature 1\",\"feature 6\",null]', '2021-05-10 13:02:14', '2021-05-18 22:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'web', '2021-05-05 02:39:37', '2021-05-05 02:39:37'),
(2, 'admin', 'web', '2021-05-05 02:42:48', '2021-05-05 02:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `delivery_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `delivery_time`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'service 1', 5000, '2 hours', '1620364891gutter-cleaning.jpg', '2021-05-07 00:21:31', '2021-05-07 00:21:31'),
(3, 'Service 2', 3000, '2 hours', '1620371285—Pngtree—purple neon creative geometric _4860889.png', '2021-05-07 14:08:05', '2021-05-07 14:09:06'),
(4, 'Gary', 200, '60', '16206347571620541633.jpg', '2021-05-10 15:19:17', '2021-05-10 15:19:17'),
(5, '3 x 1 Gutter inspection and clean', 149, 'Approx 2 hours', '1620642609gutter.JPG', '2021-05-10 17:30:09', '2021-05-18 22:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `slot_days`
--

CREATE TABLE `slot_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slot_days`
--

INSERT INTO `slot_days` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Monday', 1, NULL, '2021-05-07 13:21:29'),
(2, 'Tuesday', 1, NULL, NULL),
(3, 'Wednesday', 0, NULL, '2021-05-18 22:56:23'),
(4, 'Thursday', 1, NULL, NULL),
(5, 'Friday', 1, NULL, '2021-05-18 22:56:10'),
(6, 'Saturday', 1, NULL, '2021-05-07 13:54:11'),
(7, 'Sunday', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `package_id`, `active`, `created_at`, `updated_at`) VALUES
(9, 8, 2, 2, '2021-05-19 21:30:23', '2021-05-19 21:30:23'),
(10, 8, 3, 2, '2021-05-20 16:21:57', '2021-05-20 16:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `time_slots`
--

CREATE TABLE `time_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slot_day_id` bigint(20) UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_slots`
--

INSERT INTO `time_slots` (`id`, `slot_day_id`, `start_time`, `end_time`, `active`, `created_at`, `updated_at`) VALUES
(16, 1, '09:30:00', '10:30:00', 1, '2021-05-07 14:07:05', '2021-05-09 05:08:56'),
(17, 1, '21:04:00', '11:00:00', 1, '2021-05-07 15:54:59', '2021-05-09 05:08:32'),
(18, 1, '17:00:00', '19:00:00', 1, '2021-05-10 13:37:21', '2021-05-10 13:37:21'),
(19, 6, '17:00:00', '18:00:00', 1, '2021-05-10 13:39:25', '2021-05-10 13:39:42'),
(21, 2, '00:01:00', '23:59:00', 1, '2021-05-18 23:02:40', '2021-05-18 23:02:40'),
(22, 2, '19:02:00', '21:02:00', 1, '2021-05-18 23:02:40', '2021-05-18 23:02:40'),
(24, 1, '18:36:00', '20:36:00', 1, '2021-05-19 00:36:35', '2021-05-19 00:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Bilawal Basheer Shah', 'bilawalbasheershah@gmail.com', '03051387510', 'murree road Rawalpindi', NULL, '$2y$10$TWU9SovcHWBot.E1FrOii.uHqzn8v51cKaGgTbFVTf47llwxU3lqa', 'xsWrRoVaBrw8mgH1MdqFuFp6GrGoZDVOeNdfcGMZQyL73kz9aj2a33RyewPn', '2021-05-05 02:44:14', '2021-05-07 13:28:28'),
(5, 'ghulam rasool', 'rasooljilaniaug@gmail.com', '03476903476', 'Giga Mall', NULL, '$2y$10$O437IHKLmuuW6MxqeAFZr.NAJ9RyMD7rl7KyzQRgz6RB2TfJsZdJS', NULL, '2021-05-09 17:24:14', '2021-05-09 17:24:14'),
(6, 'Bilawal Basheer', 'bilawalb92@gmail.com', '0305 1387510', 'murree road Rawalpindi', NULL, '$2y$10$Fc8NGzfoPf0FrWUkOYw5/uhkoTNYJgKY1T5ZhZcah46xPxM2r/5Ge', NULL, '2021-05-10 12:43:33', '2021-05-10 13:00:09'),
(7, 'Gary Prestion', 'gary123456@gmail.com', '+19653215994', '58 North Milton Avenue, Et eveniet proident', NULL, '$2y$10$AIwWsnZWrSUyfnHdFxAE3.d/aEggfCM/SbUUvAutAd4zkwUxTzXQK', NULL, '2021-05-10 15:22:03', '2021-05-10 15:22:35'),
(8, 'Irfan', 'irfan.elahi187@gmail.com', '03331874242', 'E-11', NULL, '$2y$12$QfbcBCVbmCG5F0xBIEejyeVrCmNQo5odgu36uPuK16SAa6JsRCar.', NULL, '2021-05-18 23:11:48', '2021-05-18 23:13:02'),
(9, 'test', 'test@gmail.com', '0346555767', 'fghghgh', NULL, '$2y$10$sjVVar7.ajRagI11HGjqNOF3oG8/J/AlZXTyR/egEnzlUDVcEMBPm', NULL, '2021-05-18 23:35:39', '2021-05-18 23:35:39'),
(10, 'Hussam', 'hussam@gmail.com', '+19653215994', '58 North Milton Avenue, Et eveniet proident', NULL, '$2y$10$i75EO1FmfWOlXR7IIOqWeeJDssJPYdlC39lWy06t5ecztYGIgYX16', NULL, '2021-05-20 03:43:55', '2021-05-20 03:43:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_time_slot_id_foreign` (`time_slot_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimates`
--
ALTER TABLE `estimates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_days`
--
ALTER TABLE `slot_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `subscriptions_package_id_foreign` (`package_id`);

--
-- Indexes for table `time_slots`
--
ALTER TABLE `time_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_slots_slot_day_id_foreign` (`slot_day_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estimates`
--
ALTER TABLE `estimates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slot_days`
--
ALTER TABLE `slot_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `time_slots`
--
ALTER TABLE `time_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`time_slot_id`) REFERENCES `time_slots` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `time_slots`
--
ALTER TABLE `time_slots`
  ADD CONSTRAINT `time_slots_slot_day_id_foreign` FOREIGN KEY (`slot_day_id`) REFERENCES `slot_days` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
