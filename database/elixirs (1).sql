-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 03:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elixirs`
--

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
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(7, 'Men', '2023-12-09 11:23:38', '2023-12-09 11:23:38'),
(8, 'Women', '2023-12-09 11:24:15', '2023-12-09 11:24:15'),
(9, 'Unisex', '2023-12-09 11:24:22', '2023-12-09 11:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `movie_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 24, '17021804031.jpg', '2023-12-10 02:53:24', '2023-12-10 02:53:24'),
(3, 24, '17021804043.jpg', '2023-12-10 02:53:24', '2023-12-10 02:53:24'),
(5, 24, '17022131792.png', '2023-12-10 11:59:39', '2023-12-10 11:59:39'),
(7, 26, '17022239531.jpg', '2023-12-10 14:59:13', '2023-12-10 14:59:13'),
(8, 26, '17022240131.jpg', '2023-12-10 15:00:13', '2023-12-10 15:00:13'),
(9, 26, '17022240711.jpg', '2023-12-10 15:01:11', '2023-12-10 15:01:11'),
(10, 26, '17022240722.jpg', '2023-12-10 15:01:12', '2023-12-10 15:01:12'),
(11, 27, '17022241741.jpg', '2023-12-10 15:02:54', '2023-12-10 15:02:54'),
(12, 27, '17022241742.jpg', '2023-12-10 15:02:55', '2023-12-10 15:02:55'),
(13, 27, '17022241753.jpg', '2023-12-10 15:02:55', '2023-12-10 15:02:55'),
(14, 28, '17022247641.jpg', '2023-12-10 15:12:44', '2023-12-10 15:12:44'),
(15, 28, '17022247642.jpg', '2023-12-10 15:12:44', '2023-12-10 15:12:44'),
(16, 28, '17022247643.jpg', '2023-12-10 15:12:44', '2023-12-10 15:12:44'),
(17, 29, '17022248271.jpg', '2023-12-10 15:13:47', '2023-12-10 15:13:47'),
(18, 29, '17022248272.jpg', '2023-12-10 15:13:47', '2023-12-10 15:13:47'),
(19, 29, '17022248273.jpg', '2023-12-10 15:13:47', '2023-12-10 15:13:47'),
(20, 30, '6613891.jpg', '2023-12-10 22:20:03', '2023-12-10 22:20:03');

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
(5, '2023_07_14_080239_create_movies_table', 2),
(6, '2023_07_14_090024_create_genres_table', 3),
(7, '2023_07_14_203145_create_revenues_table', 4),
(8, '2023_07_14_205050_add_user_to_revenues_table', 5),
(9, '2023_07_14_205451_create_purchases_table', 6),
(10, '2023_07_15_015450_add_revenueid_to_purchases_table', 7),
(12, '2023_07_15_044622_add_age_to_users_table', 8),
(13, '2023_12_09_093806_add_phone_to_users_table', 9),
(14, '2023_12_09_102412_add_size_to_movies_table', 10),
(15, '2023_12_10_030121_create_images_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `genre`, `image`, `video`, `price`, `popular`, `status`, `created_at`, `updated_at`, `size`) VALUES
(26, 'Reyna Pour Femme', 'A Feminine fragrance with musk and spicy scents', 'Women', 'newImageName', 'Video', '20000', 'null', 'null', '2023-12-10 14:59:13', '2023-12-10 15:14:15', '50 ML'),
(27, 'Dublin Leather', 'Strong Oud for classic men', 'Men', 'newImageName', 'Video', '12000', 'null', 'null', '2023-12-10 15:02:54', '2023-12-10 15:02:54', '50 ML'),
(28, 'Chorus', 'Beautiful floral and minty scent', 'Unisex', 'newImageName', 'Video', '15000', 'null', 'null', '2023-12-10 15:12:44', '2023-12-10 15:12:44', '25 ML'),
(29, 'Khaeela', 'Spicy Oud. Great for C.E.O\'s', 'Men', 'newImageName', 'Video', '15000', 'null', 'null', '2023-12-10 15:13:47', '2023-12-10 15:13:47', '50 ML'),
(30, 'Rave', 'For Men', 'Men', 'newImageName', 'Video', '12000', 'null', 'null', '2023-12-10 22:20:03', '2023-12-10 22:20:03', '3.5 ML');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `revenue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user`, `movie`, `price`, `image`, `created_at`, `updated_at`, `revenue_id`) VALUES
(7, '2', 'Shang Chi: The Legend of Ten Rings', '2000', '1689390218.jpg', '2023-07-15 07:32:12', '2023-07-15 07:32:12', 2),
(8, '2', 'Squid Game', '3000', '1689390676.jpg', '2023-07-15 07:32:47', '2023-07-15 07:32:47', 2),
(9, '4', 'Jungle Cruise', '2700', '1689390588.jpg', '2023-07-15 07:50:19', '2023-07-15 07:50:19', 4),
(10, '2', 'Welcome to the Jungle', '3000', '1689389945.jpg', '2023-07-15 08:13:52', '2023-07-15 08:13:52', 2),
(11, '13', 'The Hitman\'s Wife Bodyguard', '2500', '1689390048.jpg', '2023-07-15 10:34:33', '2023-07-15 10:34:33', 13),
(12, '13', 'Lacasa de Papel: Money Heist', '2500', '1689390385.jpg', '2023-07-15 10:35:04', '2023-07-15 10:35:04', 13),
(13, '13', 'Hawkeye', '2000', '1689390795.jpg', '2023-07-15 10:36:26', '2023-07-15 10:36:26', 13),
(14, '14', 'The Falcon and the Winter Soldier', '2500', '1689390740.jpg', '2023-07-15 10:47:27', '2023-07-15 10:47:27', 14),
(15, '14', 'Lacasa de Papel: Money Heist', '2500', '1689390385.jpg', '2023-07-15 10:47:46', '2023-07-15 10:47:46', 14),
(16, '15', 'The Hitman\'s Wife Bodyguard', '2500', '1689390048.jpg', '2023-07-15 11:02:45', '2023-07-15 11:02:45', 15),
(17, '15', 'Spider Man: No way Homes', '2500', '1689390537.jpg', '2023-07-15 11:03:12', '2023-07-15 11:03:12', 15),
(18, '2', 'Gangs of Lagos', '2500', '1689426414.jpg', '2023-07-15 11:08:51', '2023-07-15 11:08:51', 2),
(19, '2', 'Welcome to the Jungle', '3000', '1689389945.jpg', '2023-07-15 11:10:18', '2023-07-15 11:10:18', 2),
(20, '2', 'Squid Game', '3000', '1689390676.jpg', '2023-07-19 13:04:51', '2023-07-19 13:04:51', 2);

-- --------------------------------------------------------

--
-- Table structure for table `revenues`
--

CREATE TABLE `revenues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `revenues`
--

INSERT INTO `revenues` (`id`, `title`, `start`, `end`, `amount`, `status`, `created_at`, `updated_at`, `user`) VALUES
(2, 'Revenue for February', 'null', 'null', '30202', 'completed', '2023-07-15 07:03:48', '2023-07-15 11:09:44', 'null'),
(3, 'Revenue for March', 'null', 'null', '6000', 'current', '2023-07-15 11:09:44', '2023-07-19 13:04:51', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `address`, `date`, `remember_token`, `created_at`, `updated_at`, `age`, `phone`) VALUES
(5, 'AdminUser', 'temidayovictor3@gmail.com', '$2y$10$DrS20mUn2iz0.ml3CNGiiuEKZ16bd9yDScm1.FfS/9t6fSTCiqOW2', 'admin', 'admin', 'admin', NULL, '2023-07-13 15:51:07', '2023-07-13 15:51:07', NULL, NULL),
(6, 'AdminUser2', 'temidayovictor4@gmail.com', '$2y$10$0FXFcYsavbclAjbbE/XYuuFlzf6FvQc2DLrK94JN.OPXunCXe8Jhe', 'admin', 'admin', 'admin', NULL, '2023-07-13 15:52:18', '2023-07-13 15:52:18', NULL, NULL),
(9, 'AdminUser3', 'temidayovictor5@gmail.com', '$2y$10$hrmuNB/3Cel9CQy5paOMOOkeoLAoyWgWoriMzXY8ds/0kPrnNjSAO', 'admin', 'admin', 'admin', NULL, '2023-07-13 15:59:40', '2023-07-13 15:59:40', NULL, NULL),
(10, 'AdminUser4', 'temidayovictor7@gmail.com', '$2y$10$YkeRMxcujlX8uQOAfLb4r.95LMfi1fCerdALOyBdN2anqTta4UbYW', 'admin', 'admin', 'admin', NULL, '2023-07-14 15:34:58', '2023-07-14 15:34:58', NULL, NULL),
(12, 'AdminUser5', 'temidayovictor9@gmail.com', '$2y$10$6NHPPfEoh..RUCRffNUV7ufcwG8.zswAd63W9b16jfHOYe/a4DOs6', 'admin', 'admin', 'admin', NULL, '2023-07-15 02:58:28', '2023-07-15 02:58:28', NULL, NULL),
(16, 'Arya Stark', 'aryastark@gmail.com', '$2y$10$679lK/Cs5PXhhkbkDo7r6OD73kiDBb8nlYFc3lNmm/E8xQ/is53.S', 'client', 'Ikeja, Lagos', NULL, NULL, '2023-12-09 08:46:32', '2023-12-09 08:46:32', 0, '08131891291'),
(17, 'Lord Baelish', 'baelish@gmail.com', '$2y$10$/vfh0OR2oJbHNbS7yI8Bi./4VKFkmbZ1GVLV0hubolnYC0H5qHdK.', 'client', 'Lekki, Lagos', NULL, NULL, '2023-12-09 08:48:52', '2023-12-09 08:48:52', 0, '08131891291'),
(18, 'Vargo Hoat', 'vargo@gmail.com', '$2y$10$dzp9d.6ihk0z2KQkz22LtOyAgrCQ215tcGBI/bNh22uIitjjQjFfe', 'client', 'Ibadan, Oyo State', NULL, NULL, '2023-12-09 08:49:49', '2023-12-09 08:49:49', 0, '08131891291'),
(19, 'Peter Pan', 'peter@gmail.com', '$2y$10$S5l2UUO9d2132ffVqOazjetJq72xhF7OnZi2ZyubqnV1puT472rU.', 'client', 'Gombe, Gombe', NULL, NULL, '2023-12-09 08:50:58', '2023-12-09 08:50:58', 0, '08131891291'),
(20, 'Titilayomi', 'elixirsng@gmail.com', '$2y$10$aRBKVspRt.Xi1SCOznvufuiIlP3FIBewpawlzDPXYFEbL3FPgAsEm', 'admin', 'admin', 'admin', NULL, '2023-12-09 11:21:39', '2023-12-09 11:21:39', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenues`
--
ALTER TABLE `revenues`
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
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `revenues`
--
ALTER TABLE `revenues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
