-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 10:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freetime`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `type_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'спортува ми се', NULL, NULL),
(2, 1, 'i', '2021-12-10 13:02:39', '2021-12-10 13:02:39'),
(4, 2, 'novo a dano', '2021-12-10 13:04:09', '2021-12-10 13:16:25'),
(5, 5, 'taka si go bqh npravila vtf', '2021-12-10 13:04:40', '2021-12-10 13:04:40'),
(7, 7, 'създаваме красота!', '2022-01-12 12:05:25', '2022-01-12 12:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `big_tables`
--

CREATE TABLE `big_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `second_place_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_valid` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `big_tables`
--

INSERT INTO `big_tables` (`id`, `place_id`, `second_place_id`, `type_id`, `activity_id`, `description`, `filename`, `is_valid`, `created_at`, `updated_at`) VALUES
(2, 2, 14, 7, 7, 'Пепи я е хванала стилистката вълна!:§', 'Picture 009.jpg', 1, NULL, '2022-02-01 18:49:56'),
(3, 1, 9, 1, 4, 'Gotovo eeee', 'Screenshot 2021-11-22 17.20.07.png', 1, '2022-01-12 14:02:20', '2022-02-01 19:07:43'),
(4, 2, 14, 7, 7, 'Много искам да стане красиво!', '1.png', NULL, '2022-01-12 14:03:04', '2022-01-12 14:03:04'),
(5, 1, 9, 5, 1, 'Danoo', 'Picture 004.jpg', 1, '2022-01-12 14:12:02', '2022-02-01 18:44:53'),
(7, 1, 1, 1, 1, 'ikjhugygt', '1.JPG', NULL, '2022-01-12 14:16:44', '2022-02-01 18:49:34'),
(9, 2, 3, 5, 5, 'loiktujrythrter', 'Picture 011.jpg', 1, '2022-01-31 18:22:59', '2022-02-02 17:38:54'),
(10, 2, 14, 7, 7, 'poejfjpofjj[dqr[', NULL, 1, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_08_10_094320_create_places_table', 2),
(5, '2021_08_10_102802_create_second_places_table', 3),
(6, '2021_08_10_121032_create_types_table', 4),
(7, '2021_08_10_121737_create_activities_table', 5),
(8, '2021_08_10_123828_create_big_tables_table', 6);

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
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Вкъщи', NULL, NULL),
(2, 'Навън', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `second_places`
--

CREATE TABLE `second_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `second_places`
--

INSERT INTO `second_places` (`id`, `place_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 'мол', NULL, NULL),
(2, 2, 'фитнес\r\n', NULL, NULL),
(3, 2, 'кино', '2021-11-08 14:03:44', '2021-11-08 14:03:44'),
(4, 2, 'кино', '2021-11-08 14:04:13', '2021-11-08 14:04:13'),
(5, 1, 'кухнята', '2021-11-08 14:04:34', '2021-11-08 14:04:34'),
(9, 1, 'спалнята', '2021-11-08 15:32:47', '2021-11-08 15:32:47'),
(10, 1, 'спалнята123', '2021-11-08 15:33:09', '2021-12-10 11:03:09'),
(11, 1, 'хол', '2021-11-08 15:52:46', '2021-11-08 15:52:46'),
(14, 2, 'салон за красота!', '2022-01-12 12:04:55', '2022-01-12 12:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'ужас, грозонтия', NULL, '2021-10-14 23:19:02'),
(2, 'ама много е', NULL, '2021-10-14 23:18:50'),
(5, 'благотворителност', '2021-10-14 23:19:51', '2021-10-14 23:19:51'),
(7, 'красота!', '2022-01-12 12:04:28', '2022-01-12 12:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Preslava', 'presi0204@abv.bg', NULL, '$2y$10$SWZYjEW/cJFO58Dp8Yh7N.b2sf93RdQrx6Gh5zG4beJplpuZKXYR2', NULL, '2021-08-10 16:39:46', '2021-08-10 16:39:46', 1),
(2, 'Pepi', 'preslavapepi0204@gmail.com', NULL, '$2y$10$vss3gY0K/tVBwxjD/SDKJOd6nBEkHq/WqfKDRi4z9nqYFvtBPQmWe', NULL, '2021-08-10 21:12:29', '2021-08-10 21:12:29', 0),
(3, 'Stavri', 'stavri@abv.bg', NULL, '$2y$10$dWI7NWwN5B28tO3.g6X8YOIGJVBRKQ0kGDtPhw1O0klvMzvR1dJe.', NULL, '2021-08-10 21:13:20', '2021-08-10 21:13:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_type_id_foreign` (`type_id`);

--
-- Indexes for table `big_tables`
--
ALTER TABLE `big_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `big_tables_place_id_foreign` (`place_id`),
  ADD KEY `big_tables_second_place_id_foreign` (`second_place_id`),
  ADD KEY `big_tables_type_id_foreign` (`type_id`),
  ADD KEY `big_tables_activity_id_foreign` (`activity_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `second_places`
--
ALTER TABLE `second_places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `second_places_place_id_foreign` (`place_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `big_tables`
--
ALTER TABLE `big_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `second_places`
--
ALTER TABLE `second_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `big_tables`
--
ALTER TABLE `big_tables`
  ADD CONSTRAINT `big_tables_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `big_tables_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`),
  ADD CONSTRAINT `big_tables_second_place_id_foreign` FOREIGN KEY (`second_place_id`) REFERENCES `second_places` (`id`),
  ADD CONSTRAINT `big_tables_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `second_places`
--
ALTER TABLE `second_places`
  ADD CONSTRAINT `second_places_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
