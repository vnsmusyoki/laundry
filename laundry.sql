-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 09:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection_points`
--

CREATE TABLE `collection_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collection_points`
--

INSERT INTO `collection_points` (`id`, `collection_name`, `user_id`, `town`, `phone_number`, `picture`, `location_description`, `created_at`, `updated_at`) VALUES
(1, 'Nick Electronics', 7, 'Kianjai', '0720882594', 'background-image-4-1639669756.jpg', 'located next to Musa fashions', '2021-12-16 12:49:16', '2021-12-16 12:49:16'),
(2, 'Nice Rice Stores', 9, 'Meru', '0712892398', 'background-image-4-1639691069.jpg', 'the second location', '2021-12-16 18:44:29', '2021-12-16 18:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `customer_laundries`
--

CREATE TABLE `customer_laundries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `checkpoint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `laundry_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luggage_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_pieces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickup_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_laundries`
--

INSERT INTO `customer_laundries` (`id`, `customer_id`, `checkpoint_id`, `laundry_id`, `luggage_category`, `number_of_pieces`, `additional_description`, `picture`, `amount`, `transaction_code`, `payment_status`, `laundry_status`, `collection_status`, `delivery_status`, `pickup_date`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 'ORDER-921805', 'Dresses', 'Above 50', 'Dresses', 'background-image-4-1639686224.jpg', '550', NULL, NULL, NULL, 'Waiting', NULL, NULL, '2021-12-16 17:23:44', '2021-12-16 18:01:02'),
(2, 9, 2, 'ORDER-590431', 'Clothes', 'Between 30  and 50', 'Clothes', 'background-image-4-1639693213.jpg', '300', 'swefrscvbd', 'Accepted', 'Cleaned', 'Collected', 'Taken by Customer', '2021-12-18 02:41:42', '2021-12-16 19:20:13', '2021-12-17 04:51:22'),
(3, 8, 2, 'ORDER-253841', 'Clothes', 'Between 30  and 50', 'Clothes', 'background-image-4-1639729251.jpg', '300', 'olpojuhygt', 'Accepted', 'Cleaned', 'Collected', 'Taken by Customer', '2021-12-18 05:32:20', '2021-12-17 05:20:51', '2021-12-17 05:49:46');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_17_101719_laratrust_setup_tables', 1),
(6, '2021_12_16_150105_create_collection_points_table', 2),
(9, '2021_12_16_174140_create_customer_laundries_table', 3);

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
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-12-16 09:41:08', '2021-12-16 09:41:08'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-12-16 09:41:09', '2021-12-16 09:41:09'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-12-16 09:41:12', '2021-12-16 09:41:12'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-12-16 09:41:12', '2021-12-16 09:41:12'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-12-16 09:41:12', '2021-12-16 09:41:12'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-12-16 09:41:12', '2021-12-16 09:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 'Administrator', '2021-12-16 09:41:08', '2021-12-16 09:41:08'),
(2, 'collector', 'Collector', 'Collector', '2021-12-16 09:41:10', '2021-12-16 09:41:10'),
(3, 'user', 'User', 'User', '2021-12-16 09:41:12', '2021-12-16 09:41:12'),
(4, 'role_name', 'Role Name', 'Role Name', '2021-12-16 09:41:12', '2021-12-16 09:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`, `team_id`) VALUES
(1, 1, 'App\\Models\\User', NULL),
(2, 2, 'App\\Models\\User', NULL),
(3, 3, 'App\\Models\\User', NULL),
(4, 4, 'App\\Models\\User', NULL),
(2, 5, 'App\\Models\\User', NULL),
(2, 6, 'App\\Models\\User', NULL),
(2, 7, 'App\\Models\\User', NULL),
(3, 8, 'App\\Models\\User', NULL),
(2, 9, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `account_category`, `email_verified_at`, `password`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator@app.com', '', NULL, '$2y$10$42k4DDkRq1L5o7WnzXy16eJ1mRWlzlNyjXLEkEhmy9hI7gLKIdsk.', 'background-image-4-1639722648.jpg', NULL, '2021-12-16 09:41:10', '2021-12-17 03:30:49'),
(2, 'Collector', 'collector@app.com', '', NULL, '$2y$10$vYK9mE76iiorqWUsWjef3OpSGa4eEl4dlScmYV1gMpZev49nREYBi', NULL, NULL, '2021-12-16 09:41:11', '2021-12-16 09:41:11'),
(3, 'User', 'user@app.com', '', NULL, '$2y$10$22EMkdvtd0YDrQckhEJJ/Oo7i8UeBlzK6Dlj88/gHSS1A8uqHuHP.', NULL, NULL, '2021-12-16 09:41:12', '2021-12-16 09:41:12'),
(4, 'Role Name', 'role_name@app.com', '', NULL, '$2y$10$KWziRO4kUfc9acc36kb0QOY5Qzhxavcvmvj.p8USWA0zw7xHlMX4.', NULL, NULL, '2021-12-16 09:41:13', '2021-12-16 09:41:13'),
(7, 'Mwenda James', 'vnsmddusyoki@gmail.com', '', NULL, '$2y$10$Gus0a1CsfS8dIVOwNxZ6ve9Q5UtVOtRQ4Tz9gaDZyYUpaV.BuW3ZW', NULL, NULL, '2021-12-16 12:49:16', '2021-12-16 12:49:16'),
(8, 'mercy chepkorir', 'intruderdeveloper@gmail.com', '', NULL, '$2y$10$UeeAN8RYcv3KrVcLCQF8L.ekGiz3UXLFXGv4E2EcU6pkQFpPJgxcy', 'background-image-4-1639690564.jpg', NULL, '2021-12-16 14:05:37', '2021-12-16 18:36:04'),
(9, 'joshua James', 'vnsmusyoki@gmail.com', '', NULL, '$2y$10$IZKeTsoi8RCwI23JHGFu2OKnrJPQKidCozUYPHetGteUJPJnUzos.', NULL, NULL, '2021-12-16 18:44:28', '2021-12-16 18:44:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection_points`
--
ALTER TABLE `collection_points`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `collection_points_phone_number_unique` (`phone_number`),
  ADD KEY `collection_points_user_id_foreign` (`user_id`);

--
-- Indexes for table `customer_laundries`
--
ALTER TABLE `customer_laundries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_laundries_customer_id_foreign` (`customer_id`),
  ADD KEY `customer_laundries_checkpoint_id_foreign` (`checkpoint_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD UNIQUE KEY `permission_user_user_id_permission_id_user_type_team_id_unique` (`user_id`,`permission_id`,`user_type`,`team_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD UNIQUE KEY `role_user_user_id_role_id_user_type_team_id_unique` (`user_id`,`role_id`,`user_type`,`team_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `collection_points`
--
ALTER TABLE `collection_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_laundries`
--
ALTER TABLE `customer_laundries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_points`
--
ALTER TABLE `collection_points`
  ADD CONSTRAINT `collection_points_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_laundries`
--
ALTER TABLE `customer_laundries`
  ADD CONSTRAINT `customer_laundries_checkpoint_id_foreign` FOREIGN KEY (`checkpoint_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_laundries_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
