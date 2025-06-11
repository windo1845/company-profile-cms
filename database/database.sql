-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 12:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailymeal`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1749609437),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1749609437;', 1749609437);

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `description`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ini deskripsi', 'Jl. Peta Barat No.9A, RT.1/RW.11, Pegadungan, Kec Kalideras Kota Jakarta Barat, Banten 11840', '081808800550', 'info@hdn.co.id', '2025-05-30 01:51:01', '2025-06-10 20:10:49');

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
(4, '2025_05_22_075429_create_pages_table', 2),
(5, '2025_05_22_093444_create_products_table', 3),
(6, '2025_05_26_081940_create_page_images_table', 4),
(7, '2025_05_30_074510_create_footers_table', 5),
(8, '2025_05_30_090644_create_social_media_table', 6),
(9, '2025_06_11_043919_add_title_en_and_content_en_to_pages_table', 7),
(10, '2025_06_11_084713_add_name_en_and_description_en_to_products_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `content_en` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `content`, `title_en`, `content_en`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Beranda', NULL, 'Home', NULL, '2025-05-22 02:43:23', '2025-05-22 02:43:23'),
(2, 'about', 'Apa Itu DailyMeal', 'Kami berkomitmen untuk mengenalkan inovasi sumber makanan pokok yang berkualitas, lezat dan sehat bagi keluarga. Hadirnya DailyMeal pada sajian harian keluarga juga tak lepas dari kolaborasi dan kreativitas anak bangsa dengan pemanfaatan sumber daya alam yang baik, sehingga momen bersantap bersama keluarga semakin berharga. \n\nDailyMeal akan terus memberikan inovasi dan kreativitas dalam mengedukasi keluarga Indonesia agar mengenal lebih dekat dengan sumber daya alam Indonesia yang melimpah yang tersaji dalam cita rasa setiap produk DailyMeal.', 'What Is DailyMeal', 'We are committed to introducing innovative sources of quality, delicious and healthy staple food for families. The presence of DailyMeal in daily family meals cannot be separated from the collaboration and creativity of the nation\'s children with good use of natural resources, so that family dining moments are more valuable. \n\nDailyMeal will continue to provide innovation and creativity in educating Indonesian families to know more about Indonesia\'s abundant natural resources.', '2025-05-26 01:44:27', '2025-05-26 01:44:27'),
(3, 'product', 'Produk', NULL, 'Product', NULL, '2025-05-27 01:47:48', '2025-05-27 01:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `page_images`
--

CREATE TABLE `page_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_images`
--

INSERT INTO `page_images` (`id`, `page_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 2, 'page-images/1920_HEADER_WEB_DAILYMEAL_1.jpg', '2025-06-10 19:33:57', '2025-06-10 19:33:57'),
(5, 2, 'page-images/1920_HEADER_WEB_DAILYMEAL_2.jpg', '2025-06-10 19:34:26', '2025-06-10 19:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$2TsWLgOHuEUM/7aJbmjIL.VWyC5XwGvIYEOBrTxUSqqu3o1MqZo9O', '2025-05-27 00:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `name_en`, `description_en`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dailymeal Nasi Jagung 1 Kg', 'Nikmati gurih dan lembutnya beras Jagung, inovasi baru dari Topi Koki. \nberas sagu DailyMeal dapat menjadi alternatif nasi sehat bagi setiap keluarga.', 'DailyMeal Corn Rice 1 Kg', 'Enjoy the tasteful and soft corn rice, a new innovation from Topi Koki. \nDailyMeal corn rice can be a healthy alternative rice for every family.', 55000.00, 'products/01JVVPMD9YM23YY481AT5G1V40.jpg', '2025-05-22 02:54:14', '2025-06-10 19:39:16'),
(2, 'Dailymeal Nasi Singkong 1 Kg', 'Inovasi Beras Cap Topi Koki menghadirkan cita rasa nusantara. Nikmati gurih dan lezatnya beras cap Topi Koki dalam olahan nasi singkong yang dipadukan dengan bumbu dari rempah asli dan alami, hadirkan rasa lezat di setiap kunyahan.', 'DailyMeal Cassava Rice 1 Kg\n', 'The Hat Chef\'s Rice Innovation brings the taste of the archipelago. Enjoy the savory and delicious Nasi Koki Cap in processed cassava rice combined with spices from real and natural spices, bringing a delicious taste to every chew.', 55000.00, 'products/01JXEDHGR7WD3KYTF5G5S7ZW34.jpg', '2025-06-10 19:36:39', '2025-06-10 19:39:44');

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
('DgIS0T6axQdIP5D9O8S5TJ3c27dIUqO8maCsWRBX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiaHpVR21BYW1OWm81aHVSWGg3RW5uTk1NVE81OGlJTzR3bWozUTZ5ZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkeFR4RzguSHFKY2g3cWtyeWp1ZGtWLmRnZlNhazRFcWg3UndLRk1sNzdKWGJFOGxFdFI0R2EiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1748916912),
('Kv3CQIpz0IfOqMGEs6X1vFlskbF7QPbSi15Y32Fn', 1, '192.168.50.245', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidXoxbkNKMmhXbGZGb1pIa1Z4V1dJem84bzMxUnNqZkw4cTgxMDZpNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xOTIuMTY4LjUwLjI0NTo4MDAwL2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiR4VHhHOC5IcUpjaDdxa3J5anVka1YuZGdmU2FrNEVxaDdSd0tGTWw3N0pYYkU4bEV0UjRHYSI7fQ==', 1748859036),
('Oekl4JbPIbr07cBeYnIEk1e0GijEUNqacRAF61Vk', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUndId3ZJM2ZtbDE1Qk1meHdaU0I2alRQc2VwUHNHWVhpZ1JqVTZZYiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM5OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vcGFnZS1pbWFnZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkTUlXeGpNZWE1L09LR3BiU0diaGQwT1JKVXB3c1lMYnE3NDJvNzNIZXEzOGJFQVh0SDdVSHkiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1748250028),
('uOhWriFMYVm8IDQSjFI9nBNBL4zcseiUPaDk4JFE', NULL, '192.168.50.155', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTFI0cUo1ZE1McTlUT1B0aWtZUHNtUVRETGlRTUtiMkJFWEM3UDBScCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xOTIuMTY4LjUwLjI0NTo4MDAwL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748855044),
('vdJMGKSjDiJB99Dbd40XPUr5rKzJ7buHHNb6dlhT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiQzhjUEVleTRGNzBraXRmcUhmT1I3R3FralRLQnFTMlFBVzFiNFhydyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiR4VHhHOC5IcUpjaDdxa3J5anVka1YuZGdmU2FrNEVxaDdSd0tGTWw3N0pYYkU4bEV0UjRHYSI7czo4OiJmaWxhbWVudCI7YTowOnt9czo0OiJsYW5nIjtzOjI6ImlkIjt9', 1749638137);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon_class` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `url`, `icon_class`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/', 'fa fa-facebook', '2025-05-30 02:14:42', '2025-05-30 02:14:42'),
(2, 'Instagram', 'https://www.instagram.com/', 'fa fa-instagram', '2025-05-30 02:42:31', '2025-05-30 02:42:31');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, '$2y$12$xTxG8.HqJch7qkryjudkV.dgfSak4Eqh7RwKFMl77JXbE8lEtR4Ga', NULL, '2025-05-21 23:52:35', '2025-05-27 01:29:32'),
(2, 'super', 'super', NULL, '$2y$10$0Jp/X.QKiELqwUDrg.YghOPFsxRZqDXRu31/sYLupClkXXBmiWGB6', NULL, '2025-05-27 01:04:58', '2025-05-27 01:04:58');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `page_images`
--
ALTER TABLE `page_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_images_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_images`
--
ALTER TABLE `page_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page_images`
--
ALTER TABLE `page_images`
  ADD CONSTRAINT `page_images_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
