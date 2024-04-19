-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 06:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abovemax`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_01_06_073455_create_roles_table', 1),
(11, '2023_01_06_074247_create_role_users_table', 1),
(12, '2023_01_17_070228_add_is_creator_to_users_table', 2),
(13, '2023_01_17_071907_create_shippings_table', 3),
(15, '2023_01_18_063542_create_creator_profiles_table', 4),
(16, '2023_01_24_061803_create_posts_table', 5),
(17, '2023_01_24_062932_create_post_attachments_table', 5),
(18, '2023_01_24_063117_create_post_tags_table', 5),
(19, '2023_01_26_070608_create_post_files_table', 6),
(20, '2023_02_20_094754_create_creator_types_table', 6),
(21, '2023_02_20_101306_add_creator_type_to_creator_profiles_table', 7),
(22, '2023_02_27_120602_create_blogs_table', 8),
(23, '2023_03_09_072307_create_faqs_table', 9),
(24, '2023_03_09_080754_create_contact_us_table', 9),
(25, '2023_08_07_172229_create_childrens_table', 9),
(27, '2023_11_22_101455_create_houses_table', 10),
(28, '2023_11_22_115857_create_interests_table', 10),
(29, '2023_11_22_115950_create_pro_cats_table', 10),
(30, '2023_11_22_120036_create_nearbies_table', 10),
(31, '2023_11_23_104756_create_cities_table', 11),
(33, '2023_11_25_080825_create_likes_table', 12),
(35, '2023_12_04_113221_create_notifications_table', 13),
(36, '2024_03_08_123152_add_expires_at_to_personal_access_tokens_table', 14),
(37, '2024_03_21_124819_create_abouts_table', 15),
(39, '2024_04_16_135459_create_amenities_table', 16),
(40, '2024_04_18_192943_create_companies_table', 17),
(41, '2024_04_18_192959_create_employees_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `tokenable_id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`, `expires_at`) VALUES
(2, 'App\\Models\\User', '9b8388dc-727b-4bdf-94a6-637278d67ad5', 'authToken', 'ca83e7347fea1a3e2c44e4c9e5d8b0ccd69f21f915e7f0bfcbf237fe2835f160', '[\"*\"]', '2024-03-29 04:46:58', '2024-03-08 09:37:29', '2024-03-29 04:46:58', NULL),
(3, 'App\\Models\\User', '9b8388dc-727b-4bdf-94a6-637278d67ad5', 'authToken', '5d1e43d7953221fced5badd3ace4560017c3e4cb63be8f39f9235b401514b929', '[\"*\"]', '2024-03-27 07:00:51', '2024-03-13 07:13:37', '2024-03-27 07:00:51', NULL),
(4, 'App\\Models\\User', '70ef2faa-9011-11ed-a869-c8d9d2d4870e', 'authToken', '218f012ee84663ac0169cdcb5cc1ac6c8c01f855d14d1bd46a4fc792262dcdcd', '[\"*\"]', '2024-03-29 05:15:50', '2024-03-18 06:45:41', '2024-03-29 05:15:50', NULL),
(5, 'App\\Models\\User', '9b8388dc-727b-4bdf-94a6-637278d67ad5', 'authToken', '42b5f62da3619ef1e9bedd0d0030231f7fc44aa7c8cc24443c17684750ed1ad7', '[\"*\"]', '2024-03-29 05:17:33', '2024-03-29 05:16:33', '2024-03-29 05:17:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
('982ece74-710d-4e74-bc90-f7ccc698fca5', 'Admin', 'This is an admin role', '2023-01-09 07:39:56', '2023-01-09 07:39:56'),
('982ece75-1b7f-4699-9b8e-ef433d0e2648', 'User', 'User with this role', '2023-01-09 07:39:56', '2023-01-09 07:39:56'),
('982ece75-556f-4dad-99ca-ad75a59e038d', 'Searcher', 'This role represents users who have lost a child. They are seeking help and assistance in finding their missing child.', '2023-01-09 07:39:57', '2023-01-09 07:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '982ece74-710d-4e74-bc90-f7ccc698fca5', '70ef2faa-9011-11ed-a869-c8d9d2d4870e', '2023-01-14 08:02:21', '2023-01-14 08:02:21'),
(3, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9838aac0-0911-4eba-b0bd-fa4c1dc4e52d', NULL, NULL),
(4, '982ece75-556f-4dad-99ca-ad75a59e038d', '9860e720-3093-4533-85e0-61a4b2248feb', NULL, NULL),
(5, '982ece75-556f-4dad-99ca-ad75a59e038d', '98830da6-74c2-4ce1-aa6f-6fb5c3dd182b', NULL, NULL),
(6, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '99dbe13d-c85a-4346-b68e-a6437c2bf22f', NULL, NULL),
(7, '982ece75-556f-4dad-99ca-ad75a59e038d', '99dbe23c-268f-4c84-9960-d3afca968e89', NULL, NULL),
(8, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9a45d467-bcc3-4ed7-896a-4851d7e7ac2c', NULL, NULL),
(9, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9aaff503-4460-4cb5-bf5c-c8ccff65f1c1', NULL, NULL),
(10, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9aaff5cf-cd86-4a01-9bf4-efd91271a5e9', NULL, NULL),
(11, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '0', NULL, NULL),
(12, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '0', NULL, NULL),
(14, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9aaffd76-303e-43a1-950d-d2085da16cdb', NULL, NULL),
(15, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9ab00d45-99ac-4bc3-af0f-b7cb44ef5208', NULL, NULL),
(16, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9abc1e3a-f651-45bf-a24a-40a1cd5844bd', NULL, NULL),
(17, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9abc1eee-e4ac-4ce0-8231-44a9f6df875f', NULL, NULL),
(18, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9abc1f40-1235-4697-8bcb-344e5be8a69a', NULL, NULL),
(19, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9ab00d45-99ac-4bc3-af0f-b7cb44ef5221', NULL, NULL),
(23, '982ece75-1b7f-4699-9b8e-ef433d0e2648', '9b8388dc-727b-4bdf-94a6-637278d67ad5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('70ef2faa-9011-11ed-a869-c8d9d2d4870e', 'admin@admin.com', NULL, '$2y$10$.cgx5rTz8lK1zMOxVQWvaOGrxysUc3/TkrFnkh1Z54Rpi1ViLY8f2', NULL, '2024-04-18 14:19:02', '2024-04-18 14:19:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_company_id_foreign` (`company_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`),
  ADD KEY `role_users_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
