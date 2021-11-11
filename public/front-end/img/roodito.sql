-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 01:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roodito`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` timestamp NULL DEFAULT NULL,
  `end` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upcoming',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`id`, `title`, `start`, `end`, `description`, `event_for`, `event_place`, `event_status`, `created_at`, `updated_at`) VALUES
(4, 'Graduation', '2021-11-23 11:14:00', '2021-11-25 11:14:00', 'Upcoming graduation Preparations', 'Pupils', 'MPH', 'upcoming', '2021-11-09 08:15:24', '2021-11-09 08:15:24');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2021_10_27_094329_laratrust_setup_tables', 1),
(13, '2021_10_29_084439_create_teachers_table', 1),
(14, '2021_11_04_124118_create_tutors_table', 1),
(15, '2021_11_04_160755_create_pupils_table', 2),
(17, '2021_11_04_215709_create_parents_table', 3),
(19, '2021_11_05_074414_create_parent_guardians_table', 4),
(20, '2021_11_08_101152_create_calendar_events_table', 5),
(21, '2021_11_10_153423_create_blogs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_guardians`
--

CREATE TABLE `parent_guardians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_guardians`
--

INSERT INTO `parent_guardians` (`id`, `user_id`, `phone_number`, `username`, `referral_code`, `created_at`, `updated_at`) VALUES
(1, 25, '0729387565', 'areneudhede', 'eodedede', '2021-11-05 04:49:29', '2021-11-05 04:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kingsobnnnnesmus9@gmail.com', '$2y$10$RG3CuCod0R9ewL3Mli5V2.LZWgfeA6DLzhPiOHP7mAhR2F1ZV4qP.', '2021-11-05 01:35:13'),
('hellotehjacher@gmail.com', '$2y$10$k5xpRwm2nDNf1E2yvYJSN.DpxWS0ocTWPY/g/3.d4YgjCH19vmZqm', '2021-11-05 04:06:57');

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
(1, 'users-create', 'Create Users', 'Create Users', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-11-04 11:04:19', '2021-11-04 11:04:19'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-11-04 11:04:23', '2021-11-04 11:04:23'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-11-04 11:04:23', '2021-11-04 11:04:23'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-11-04 11:04:24', '2021-11-04 11:04:24'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-11-04 11:04:24', '2021-11-04 11:04:24');

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
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(11, 6),
(12, 6),
(13, 6),
(14, 6);

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
-- Table structure for table `pupils`
--

CREATE TABLE `pupils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_of_birth` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pupils`
--

INSERT INTO `pupils` (`id`, `user_id`, `date_of_birth`, `phone_number`, `username`, `parent_names`, `parent_phone_number`, `parent_email`, `school_system`, `school_level`, `created_at`, `updated_at`) VALUES
(1, 13, '2016-03-04 21:00:00', '0799009900', 'erfrfrfrf', 'ONESMUS ededede', '0907979695', 'onestohccddcoder81@gmail.com', 'System 1', 'Level 1', '2021-11-04 16:31:41', '2021-11-04 16:31:41'),
(2, 18, '2014-05-08 21:00:00', '0721929900', 'samueled', 'parent samuel', '0721993304', 'samueoarent@gmail.com', 'System 1', 'Grade 2', '2021-11-05 02:27:21', '2021-11-05 02:27:21'),
(3, 20, '2015-06-11 21:00:00', '0733445566', 'dwwswsw', 'dedeee3e3e3e3e3', '0734561245', 'frrrfrrff@gmail.com', 'System 1', 'Grade 1', '2021-11-05 02:30:30', '2021-11-05 02:30:30');

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
(1, 'admin', 'Admin', 'Admin', '2021-11-04 11:04:18', '2021-11-04 11:04:18'),
(2, 'tutor', 'Tutor', 'Tutor', '2021-11-04 11:04:20', '2021-11-04 11:04:20'),
(3, 'teacher', 'Teacher', 'Teacher', '2021-11-04 11:04:21', '2021-11-04 11:04:21'),
(4, 'parent', 'Parent', 'Parent', '2021-11-04 11:04:22', '2021-11-04 11:04:22'),
(5, 'student', 'Student', 'Student', '2021-11-04 11:04:23', '2021-11-04 11:04:23'),
(6, 'role_name', 'Role Name', 'Role Name', '2021-11-04 11:04:23', '2021-11-04 11:04:23');

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
(5, 5, 'App\\Models\\User', NULL),
(6, 6, 'App\\Models\\User', NULL),
(2, 7, 'App\\Models\\User', NULL),
(5, 8, 'App\\Models\\User', NULL),
(4, 9, 'App\\Models\\User', NULL),
(5, 11, 'App\\Models\\User', NULL),
(4, 12, 'App\\Models\\User', NULL),
(5, 13, 'App\\Models\\User', NULL),
(4, 14, 'App\\Models\\User', NULL),
(3, 15, 'App\\Models\\User', NULL),
(3, 17, 'App\\Models\\User', NULL),
(5, 18, 'App\\Models\\User', NULL),
(4, 19, 'App\\Models\\User', NULL),
(5, 20, 'App\\Models\\User', NULL),
(4, 21, 'App\\Models\\User', NULL),
(3, 22, 'App\\Models\\User', NULL),
(3, 24, 'App\\Models\\User', NULL),
(2, 25, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_number` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_combination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teaching_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classes_teaching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_summary` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_associations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kra_pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `phone_number`, `country`, `county`, `gender`, `address`, `profession`, `uploaded_cv`, `primary_school`, `secondary_school`, `university`, `subject_combination`, `teaching_level`, `primary_subject`, `other_subject`, `classes_teaching`, `professional_summary`, `designation_code`, `tsc_number`, `other_associations`, `kra_pin`, `referral_code`, `created_at`, `updated_at`) VALUES
(1, 17, 721093845, 'Kenya', 'Mombasa', 'Male', '  Letraset sheets containing Lorem Ipsum passages, and mo', 'Teacher', 'Blockchain challeges-1636056802.docx', 'Kenyata Primary', 'Kenyata Boys', 'Kenyatta University', 'Maths/Science', 'Lower school', NULL, NULL, NULL, ' simply dummy text of the printing ustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a s with the release of Letraset sheets containing Lorem Ipsum passages, and mo', 'Code one', 'oikeujaw', 'w2w2w2w', 'A010176532H', 'POSUWEd', '2021-11-04 17:13:22', '2021-11-04 17:13:22'),
(2, 24, 723994400, 'kenya', 'Nairobi', 'Male', 'P.O BOX 90141', 'Profession 1', 'Business Process Modelling-1636095838.docx', 'dede', 'eded', 'eded', 'English/Kiswahili', 'Grade 2', NULL, NULL, NULL, 'mply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with', 'Code 1', 'edede', 'eded', 'edededeeded', 'eded', '2021-11-05 04:03:58', '2021-11-05 04:03:58');

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
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_number` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `user_id`, `phone_number`, `username`, `referral_code`, `created_at`, `updated_at`) VALUES
(1, 7, 721384394, 'melodykiju', 'melodyjdj', '2021-11-04 11:21:14', '2021-11-04 11:21:14');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', NULL, '$2y$10$AgvR1/cjxhFTzfVGTwPgH.hqGPY6czjfj9War6.3oVYbnjPW/eSL.', NULL, '2021-11-04 11:04:20', '2021-11-04 11:04:20'),
(2, 'Tutor', 'tutor@app.com', NULL, '$2y$10$W9FuEO7owu1Fzt/nFXp5euPRn8x4mwMtUxTf17wglDkG46H1lF2L6', NULL, '2021-11-04 11:04:21', '2021-11-04 11:04:21'),
(3, 'Teacher', 'teacher@app.com', NULL, '$2y$10$xDU0zOtgizzh8NJLvuQDMugI5ty1mcT9r4OS1KbjL2FZcbdklGuIy', NULL, '2021-11-04 11:04:22', '2021-11-04 11:04:22'),
(4, 'Parent', 'parent@app.com', NULL, '$2y$10$RXiT17x6gw7816R4H288MeLQUuaIzwyQEgNrv3CIB/k0HKu8BEwga', NULL, '2021-11-04 11:04:23', '2021-11-04 11:04:23'),
(5, 'Student', 'student@app.com', NULL, '$2y$10$56w29.heYHJqAgkY1ONnWeDZfsqEu8yZwON3WcrLWWqGXf8.ilY6G', NULL, '2021-11-04 11:04:23', '2021-11-04 11:04:23'),
(6, 'Role Name', 'role_name@app.com', NULL, '$2y$10$d4oUrei/1wfGbP0lHx8RleCTmq3tCR3NGZccPQ/uJldgzIa.seste', NULL, '2021-11-04 11:04:24', '2021-11-04 11:04:24'),
(7, 'melody  melody oketch', 'melody@gmail.com', NULL, '$2y$10$I6NDPYRteRNhKJ3S1DOdxO3TddPMjtKhLLpoE2mho9LX0nuLqwXae', NULL, '2021-11-04 11:21:13', '2021-11-04 11:21:13'),
(8, 'ONESMUS ONESMUS MUANGE', 'kingsonfresmus9@gmail.com', NULL, '$2y$10$XKG4XJrdk1Pc3SCiStuGeux7vRLc6A.pBVzouJ5xq6Ep.Gw0Dm99K', NULL, '2021-11-04 16:20:12', '2021-11-04 16:20:12'),
(9, 'ONESMUS MUANGE', 'kingstrronesmus9@gmail.com', NULL, '$2y$10$UcF6.f7lVRm.qnxz5o3zte8otQUNadYptrnNrB/JTu6/Q9kJnFdrm', NULL, '2021-11-04 16:20:12', '2021-11-04 16:20:12'),
(11, 'ONESMUS ONESMUS MUANGE', 'kingsoenesmus9@gmail.com', NULL, '$2y$10$1E3kPJm1GPjgXu0zsrWNBO2ZoakgAc52.7DhDk5OOx35XdUxK4fHq', NULL, '2021-11-04 16:26:15', '2021-11-04 16:26:15'),
(12, 'ONESMUS njmuju', 'kingsonebnsmus9@gmail.com', NULL, '$2y$10$.g8heognOVbVy309EXLHpOygIxn6eGxpQa3gU5Wcbo7U7cg6sOsUy', NULL, '2021-11-04 16:26:15', '2021-11-04 16:26:15'),
(13, 'ONESMUS ONESMUS MUANGE', 'intruderdeveloper@gmail.com', NULL, '$2y$10$IUAKueyavxv3n/zhi.1oJuUvsJUhant6nSdeJxRCv41uSmNDxSI4.', 'NWIayUmtoqacFzRB4ODOWtSNGYsEHLDPBiydyELR9JpzVJ3D8PwJBacyf7Fw', '2021-11-04 16:31:40', '2021-11-05 05:00:57'),
(14, 'ONESMUS ededede', 'onestohccddcoder81@gmail.com', NULL, '$2y$10$RA35ik0JdHmBy3qNp7nSi.Gm9WmpTceaT37uCmePkjaP38/itc5iK', NULL, '2021-11-04 16:31:41', '2021-11-04 16:31:41'),
(17, 'elijah elijah elijah', 'elijah@gmail.com', NULL, '$2y$10$HvWpQl4eRq7DcOJEsOfE2OOrvh4ytpwD8SbEBzUjT8OH.DZLOpVl6', NULL, '2021-11-04 17:13:22', '2021-11-04 17:13:22'),
(18, 'samuel  munywoki ngumi', 'samuesl@gmail.com', NULL, '$2y$10$TyFUHkI/fL9iID98Agsezei3KSupZR.d..moPHCc3DgvE6fAF30YO', NULL, '2021-11-05 02:27:20', '2021-11-05 02:27:20'),
(19, 'parent samuel', 'samueoarent@gmail.com', NULL, '$2y$10$x2WFcumzlNDKv8g7SLT4wu5rqPFHsWAxUO2lEaFt5w1aYVRvWAV4u', NULL, '2021-11-05 02:27:21', '2021-11-05 02:27:21'),
(20, 'dedede eeded edede', 'dede@gmail.com', NULL, '$2y$10$KghSwvV1XzQUsvH6ckl6xua6m6GOVechoSOVDPAolndxlfFd6CyvC', NULL, '2021-11-05 02:30:29', '2021-11-05 02:30:29'),
(21, 'dedeee3e3e3e3e3', 'frrrfrrff@gmail.com', NULL, '$2y$10$QZ6E9ICoCGd2x72kAFDu3.MrHjFaA7J3I1DtupN7RdUAL1EdQAdgC', NULL, '2021-11-05 02:30:29', '2021-11-05 02:30:29'),
(22, 'hello te text', 'helloteacher@gmail.com', NULL, '$2y$10$mfXDy1N9ahamRKt9X/y7kOIssOIH.t3Cd7Nmv6CKcm5FpvcilMcae', NULL, '2021-11-05 04:02:35', '2021-11-05 04:02:35'),
(24, 'hello te text', 'hellotehjacher@gmail.com', NULL, '$2y$10$5Y1CUa1K7HmzZh.c4rxwXOk84N9IGql1kYxZm0kI9R8xrbyzgknqm', NULL, '2021-11-05 04:03:58', '2021-11-05 04:03:58'),
(25, 'prent checking parents', 'parenetd@gmail.com', NULL, '$2y$10$hM.FQAwaIVlAEv.lYHeRhOl56N7CZhzqkcjWneN7/yxycUp5c1IvK', NULL, '2021-11-05 04:49:28', '2021-11-05 04:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parents_user_id_foreign` (`user_id`);

--
-- Indexes for table `parent_guardians`
--
ALTER TABLE `parent_guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_guardians_user_id_foreign` (`user_id`);

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
-- Indexes for table `pupils`
--
ALTER TABLE `pupils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pupils_user_id_foreign` (`user_id`);

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
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_phone_number_unique` (`phone_number`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tutors_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `tutors_username_unique` (`username`),
  ADD KEY `tutors_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_guardians`
--
ALTER TABLE `parent_guardians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `pupils`
--
ALTER TABLE `pupils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parent_guardians`
--
ALTER TABLE `parent_guardians`
  ADD CONSTRAINT `parent_guardians_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `pupils`
--
ALTER TABLE `pupils`
  ADD CONSTRAINT `pupils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tutors`
--
ALTER TABLE `tutors`
  ADD CONSTRAINT `tutors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
