-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 02:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- username: "root"
-- pasword : ""

--
-- Database: `laravelhashim`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_email_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `user_email_1`, `user_email_2`, `created_at`, `updated_at`) VALUES
(1, 'b@b.com', 'a@a.com', '2019-10-08 10:42:04', '2019-10-08 10:42:04'),
(2, 'c@c.com', 'a@a.com', '2019-10-08 10:45:43', '2019-10-08 10:45:43'),
(3, 'c@c.com', 'b@b.com', '2019-10-08 10:45:49', '2019-10-08 10:45:49'),
(4, 'c@c.com', 'd@d.com', '2019-10-08 10:45:58', '2019-10-08 10:45:58');

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
(4, '2019_10_04_232142_tweet', 1),
(5, '2019_10_06_004922_create_follows_table', 1),
(6, '2019_10_07_001627_create_timelines_table', 1);

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
-- Table structure for table `timelines`
--

CREATE TABLE `timelines` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tweet_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tweet_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timelines`
--

INSERT INTO `timelines` (`id`, `user_email_1`, `user_email_2`, `tweet_text`, `tweet_id`, `created_at`, `updated_at`) VALUES
('b@b.coma@a.coma11', 'b@b.com', 'a@a.com', 'a1', 1, NULL, NULL),
('b@b.coma@a.coma22', 'b@b.com', 'a@a.com', 'a2', 2, NULL, NULL),
('b@b.coma@a.coma33', 'b@b.com', 'a@a.com', 'a3', 3, NULL, NULL),
('c@c.coma@a.coma11', 'c@c.com', 'a@a.com', 'a1', 1, NULL, NULL),
('c@c.coma@a.coma22', 'c@c.com', 'a@a.com', 'a2', 2, NULL, NULL),
('c@c.coma@a.coma33', 'c@c.com', 'a@a.com', 'a3', 3, NULL, NULL),
('c@c.comb@b.comb14', 'c@c.com', 'b@b.com', 'b1', 4, NULL, NULL),
('c@c.comb@b.comb25', 'c@c.com', 'b@b.com', 'b2', 5, NULL, NULL),
('c@c.comd@d.comd17', 'c@c.com', 'd@d.com', 'd1', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tweet_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `tweet_text`, `user_email`, `created_at`, `updated_at`) VALUES
(1, 'a1', 'a@a.com', '2019-10-08 10:40:29', '2019-10-08 10:40:29'),
(2, 'a2', 'a@a.com', '2019-10-08 10:40:41', '2019-10-08 10:40:41'),
(3, 'a3', 'a@a.com', '2019-10-08 10:40:54', '2019-10-08 10:40:54'),
(4, 'b1', 'b@b.com', '2019-10-08 10:41:47', '2019-10-08 10:41:47'),
(5, 'b2', 'b@b.com', '2019-10-08 10:41:57', '2019-10-08 10:41:57'),
(6, 'c1', 'c@c.com', '2019-10-08 10:43:15', '2019-10-08 10:43:15'),
(7, 'd1', 'd@d.com', '2019-10-08 10:45:04', '2019-10-08 10:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataimg` mediumblob DEFAULT NULL,
  `imgname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
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

INSERT INTO `users` (`id`, `name`, `dataimg`, `imgname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', NULL, 'default.png', 'a@a.com', NULL, '$2y$10$s.vLPA.IK37R3ktYZOD7ve26.pw9Gv4UWbZsYdOfB0qZ2jQBITy/W', NULL, '2019-10-08 10:40:16', '2019-10-08 10:40:16'),
(2, 'b', NULL, 'default.png', 'b@b.com', NULL, '$2y$10$56W//6eNHDrMlHTkD03diupxKdH4j4uASv.lZnOwP0aSr1DDSzBja', NULL, '2019-10-08 10:41:33', '2019-10-08 10:41:33'),
(3, 'c', NULL, 'default.png', 'c@c.com', NULL, '$2y$10$vwXzKZDfvgQFngQc0eFveOTpqwNZV9Usxu2mjUpYMgGYvSSVc7/FC', NULL, '2019-10-08 10:42:58', '2019-10-08 10:42:58'),
(4, 'd', 0x443a5c78616d70705c746d705c706870423841452e746d70, '1946047384.png', 'd@d.com', NULL, '$2y$10$qOF5FBxdYi2qmEkB0RNc3OiJHDPu7vL09Ix/jcRK.4c9nPQviKL7y', NULL, '2019-10-08 10:44:39', '2019-10-08 10:44:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follows_user_email_1_foreign` (`user_email_1`),
  ADD KEY `follows_user_email_2_foreign` (`user_email_2`);

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
-- Indexes for table `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tweets_id_unique` (`id`),
  ADD KEY `tweets_user_email_foreign` (`user_email`);

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
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_user_email_1_foreign` FOREIGN KEY (`user_email_1`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `follows_user_email_2_foreign` FOREIGN KEY (`user_email_2`) REFERENCES `users` (`email`);

--
-- Constraints for table `tweets`
--
ALTER TABLE `tweets`
  ADD CONSTRAINT `tweets_user_email_foreign` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
