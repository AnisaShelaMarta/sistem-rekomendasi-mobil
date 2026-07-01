-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2026 at 05:42 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$jpYXkeM5dvETThW65zSFwe.l2raf6b5PDyn7y/zaDK.XrO2zqHGay', '2026-06-14 07:45:44', '2026-06-14 07:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `q1` enum('Ya','Tidak') NOT NULL,
  `q2` enum('Ya','Tidak') NOT NULL,
  `q3` enum('Ya','Tidak') NOT NULL,
  `q4` enum('Ya','Tidak') NOT NULL,
  `q5` enum('Ya','Tidak') NOT NULL,
  `q6` enum('Ya','Tidak') NOT NULL,
  `q7` enum('Ya','Tidak') NOT NULL,
  `q8` enum('Ya','Tidak') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `created_at`, `updated_at`) VALUES
(1, 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', '2026-06-17 08:23:43', '2026-06-17 08:23:43'),
(2, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2026-06-17 08:30:52', '2026-06-17 08:30:52'),
(3, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2026-06-18 06:22:34', '2026-06-18 06:22:34'),
(4, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2026-07-01 06:04:07', '2026-07-01 06:04:07');

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
(4, '2026_06_01_124525_create_admins_table', 2),
(5, '2026_06_01_132514_create_mobils_table', 2),
(6, '2026_06_04_145842_create_feedback_table', 2),
(7, '2026_06_16_134214_drop_gambar_from_mobils_table', 3),
(8, '2026_06_16_135739_create_warna_table', 4),
(10, '2026_06_16_140937_create_mobil_warna_table', 5),
(11, '2026_06_17_152304_create_feedback_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mobils`
--

CREATE TABLE `mobils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `transmisi` varchar(255) NOT NULL,
  `kapasitas_penumpang` int(11) NOT NULL,
  `kapasitas_mesin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobils`
--

INSERT INTO `mobils` (`id`, `nama_mobil`, `tipe_mobil`, `harga`, `jenis`, `warna`, `bahan_bakar`, `transmisi`, `kapasitas_penumpang`, `kapasitas_mesin`, `created_at`, `updated_at`) VALUES
(1, 'Xpander', 'Ultimate AT', 341500000, 'MPV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Red Metallic', 'Bensin', 'Automatic', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(2, 'Xpander', 'Ultimate MT', 328000000, 'MPV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Red Metallic', 'Bensin', 'Manual', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(3, 'Xpander', 'Exceed AT', 301000000, 'MPV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Red Metallic', 'Bensin', 'Automatic', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(4, 'Xpander', 'Exceed MT', 292000000, 'MPV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Red Metallic', 'Bensin', 'Manual', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(5, 'Xpander', 'GLS AT', 287000000, 'MPV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Red Metallic', 'Bensin', 'Automatic', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(6, 'Xpander', 'GLS MT', 277500000, 'MPV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Red Metallic', 'Bensin', 'Manual', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(7, 'Xpander Cross', 'AT', 370000000, 'CROSSOVER', 'Green Bronze Metallic, Quartz White Pearl, Blade Silver Metallic, Graphite Gray Metallic, Jet Black Mica', 'Bensin', 'Automatic', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(8, 'Xpander Cross', 'MT', 342000000, 'CROSSOVER', 'Green Bronze Metallic, Quartz White Pearl, Blade Silver Metallic, Graphite Gray Metallic, Jet Black Mica', 'Bensin', 'Manual', 7, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(9, 'Pajero Sport', 'Dakar Ultimate 4x4 AT', 788000000, 'SUV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Deep Bronze Metallic', 'Diesel', 'Automatic', 7, 2442, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(10, 'Pajero Sport', 'Dakar 4x2 AT', 726500000, 'SUV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Deep Bronze Metallic', 'Diesel', 'Automatic', 7, 2442, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(11, 'Pajero Sport', 'Exceed 4x2 AT', 673500000, 'SUV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Deep Bronze Metallic', 'Diesel', 'Automatic', 7, 2442, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(12, 'Pajero Sport', 'GLX 4x4 MT', 610000000, 'SUV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Deep Bronze Metallic', 'Diesel', 'Manual', 7, 2442, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(13, 'Xforce', 'Ultimate AT DS', 614500000, 'SUV', 'Jet Black Mica, Quartz White Pearl, Sterling Silver Metallic, Graphite Gray Metallic, Deep Bronze Metallic', 'Bensin', 'CVT', 5, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(14, 'Xforce', 'Ultimate AT', 432000000, 'SUV', 'Energetic Yellow, Quartz White Pearl, Graphite Gray Metallic, Blade Silver Metallic, Jet Black Mica', 'Bensin', 'CVT', 5, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(15, 'Xforce', 'Exceed AT', 424000000, 'SUV', 'Energetic Yellow, Quartz White Pearl, Graphite Gray Metallic, Blade Silver Metallic, Jet Black Mica', 'Bensin', 'CVT', 5, 1499, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(16, 'Colt L300', 'PU FB 4x2 MT', 390500000, 'Pick Up', 'Hitam, Putih', 'Diesel', 'Manual', 3, 2268, '2026-06-14 07:55:47', '2026-06-14 07:55:47'),
(17, 'Colt L300', 'PU CC 4x2 MT', 253000000, 'Pick Up', 'Hitam, Putih', 'Diesel', 'Manual', 3, 2268, '2026-06-14 07:55:47', '2026-06-14 07:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `mobil_warna`
--

CREATE TABLE `mobil_warna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobil_id` bigint(20) UNSIGNED NOT NULL,
  `warna_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobil_warna`
--

INSERT INTO `mobil_warna` (`id`, `mobil_id`, `warna_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 2, 1, NULL, NULL),
(7, 2, 2, NULL, NULL),
(8, 2, 3, NULL, NULL),
(9, 2, 4, NULL, NULL),
(10, 2, 5, NULL, NULL),
(11, 3, 1, NULL, NULL),
(12, 3, 2, NULL, NULL),
(13, 3, 3, NULL, NULL),
(14, 3, 4, NULL, NULL),
(15, 3, 5, NULL, NULL),
(16, 4, 1, NULL, NULL),
(17, 4, 2, NULL, NULL),
(18, 4, 3, NULL, NULL),
(19, 4, 4, NULL, NULL),
(20, 4, 5, NULL, NULL),
(21, 5, 1, NULL, NULL),
(22, 5, 2, NULL, NULL),
(23, 5, 3, NULL, NULL),
(24, 5, 4, NULL, NULL),
(25, 5, 5, NULL, NULL),
(26, 6, 1, NULL, NULL),
(27, 6, 2, NULL, NULL),
(28, 6, 3, NULL, NULL),
(29, 6, 4, NULL, NULL),
(30, 6, 5, NULL, NULL),
(31, 7, 1, NULL, NULL),
(32, 7, 2, NULL, NULL),
(33, 7, 4, NULL, NULL),
(34, 7, 6, NULL, NULL),
(35, 8, 1, NULL, NULL),
(36, 8, 2, NULL, NULL),
(37, 8, 4, NULL, NULL),
(38, 8, 6, NULL, NULL),
(39, 9, 1, NULL, NULL),
(40, 9, 2, NULL, NULL),
(41, 9, 4, NULL, NULL),
(42, 9, 7, NULL, NULL),
(43, 10, 1, NULL, NULL),
(44, 10, 2, NULL, NULL),
(45, 10, 4, NULL, NULL),
(46, 10, 7, NULL, NULL),
(47, 11, 1, NULL, NULL),
(48, 11, 2, NULL, NULL),
(49, 11, 4, NULL, NULL),
(50, 11, 7, NULL, NULL),
(51, 12, 1, NULL, NULL),
(52, 12, 2, NULL, NULL),
(53, 12, 4, NULL, NULL),
(54, 12, 7, NULL, NULL),
(55, 13, 1, NULL, NULL),
(56, 13, 2, NULL, NULL),
(57, 13, 4, NULL, NULL),
(58, 13, 5, NULL, NULL),
(59, 13, 8, NULL, NULL),
(60, 14, 1, NULL, NULL),
(61, 14, 2, NULL, NULL),
(62, 14, 4, NULL, NULL),
(63, 14, 5, NULL, NULL),
(64, 14, 8, NULL, NULL),
(65, 15, 1, NULL, NULL),
(66, 15, 2, NULL, NULL),
(67, 15, 4, NULL, NULL),
(68, 15, 5, NULL, NULL),
(69, 15, 8, NULL, NULL),
(70, 16, 9, NULL, NULL),
(71, 16, 10, NULL, NULL),
(72, 16, 11, NULL, NULL),
(73, 17, 9, NULL, NULL),
(74, 17, 10, NULL, NULL),
(75, 17, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('uMGYnPSsyw1wr5ZiUlS79qLB3MrWgigPY0FHtU9Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWVhZdmhhZ3k3QTdUc2RvdEJZMFVpcTNXa3VRcWtSd2luVnY0RkozdyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9mZWVkYmFjay8xIjtzOjU6InJvdXRlIjtzOjIxOiJhZG1pbi5mZWVkYmFjay5kZXRhaWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjg6ImFkbWluX2lkIjtpOjE7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7fQ==', 1782912244);

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

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_warna` varchar(255) NOT NULL,
  `kode_hex` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id`, `nama_warna`, `kode_hex`, `created_at`, `updated_at`) VALUES
(1, 'Jet Black Mica', '#000000', NULL, NULL),
(2, 'Quartz White Pearl', '#FFFFFF', NULL, NULL),
(3, 'Sterling Silver Metallic', '#C0C0C0', NULL, NULL),
(4, 'Graphite Gray Metallic', '#5F6368', NULL, NULL),
(5, 'Red Metallic', '#C62828', NULL, NULL),
(6, 'Green Bronze Metallic', '#6D7B52', NULL, NULL),
(7, 'Deep Bronze Metallic', '#8D6E63', NULL, NULL),
(8, 'Energetic Yellow', '#FDD835', NULL, NULL),
(9, 'Blade Silver Metallic', '#B0BEC5', NULL, NULL),
(10, 'Hitam', '#000000', NULL, NULL),
(11, 'Putih', '#FFFFFF', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- Indexes for table `mobils`
--
ALTER TABLE `mobils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil_warna`
--
ALTER TABLE `mobil_warna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobil_warna_mobil_id_foreign` (`mobil_id`),
  ADD KEY `mobil_warna_warna_id_foreign` (`warna_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mobils`
--
ALTER TABLE `mobils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mobil_warna`
--
ALTER TABLE `mobil_warna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil_warna`
--
ALTER TABLE `mobil_warna`
  ADD CONSTRAINT `mobil_warna_mobil_id_foreign` FOREIGN KEY (`mobil_id`) REFERENCES `mobils` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mobil_warna_warna_id_foreign` FOREIGN KEY (`warna_id`) REFERENCES `warna` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
