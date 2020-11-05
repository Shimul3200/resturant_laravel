-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 05:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeerah`
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(8, 'App', 'images/gallery/4Pi1CxSw6l7hoJrRigMteYTTLrk4nxV4rX4CVrNG.jpeg', '2020-10-20 03:43:03', '2020-10-20 03:56:02'),
(13, 'ssKK', 'images/gallery/sUzxkzIk6LLFTKWhqFuPitBxGW51FShFKVmGbOXK.png', '2020-10-20 13:48:54', '2020-10-20 13:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `desc`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Indian Food', 'Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.', 'images/item/UPuSPo9AS47N0IAaLt2Fj1Y9x0qxITpAx3u5ixjj.jpeg', '1', '2020-10-20 21:50:17', '2020-10-20 21:50:17'),
(4, 'Indian Food', 'Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.', 'images/item/24uwTLKOHXdwvmetq4OpLeJBnItPVcjWQRn9Fw5u.jpeg', '1', '2020-10-20 21:50:18', '2020-10-20 21:50:18'),
(5, 'Indian Food', 'Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.', 'images/item/mNyISf6kudBZ7cGPAkIJVN0VnTCsBdsuUBicN55a.jpeg', '1', '2020-10-20 21:50:19', '2020-10-20 21:50:19'),
(6, 'Indian Food', 'Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.', 'images/item/6x6NEXmwUM6gPgTwSP8tgSPkuQFleiakY8pHNXDG.jpeg', '1', '2020-10-20 21:50:19', '2020-10-20 21:50:19'),
(7, 'Indian Food', 'Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.', 'images/item/22myTLaLYG0xSY86pj5iLC1LCdMwpXPl3vK1Crpm.jpeg', '1', '2020-10-20 21:50:20', '2020-10-20 21:50:20'),
(9, 'Author Food', '<p><strong>Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.</strong></p>\r\n\r\n<ul>\r\n	<li><strong>dgfhjgfgh</strong></li>\r\n	<li><strong>&#39;dtgyhuijlokl</strong></li>\r\n	<li><strong>rdytyuilo</strong></li>\r\n	<li><strong>rtyiuop</strong></li>\r\n	<li><strong>fgyuhiop</strong></li>\r\n</ul>', 'images/item/25X7qp6NWlAA86lOyugQj38BzqY1PUIsfHIs38w7.jpeg', '1', '2020-11-05 01:26:47', '2020-11-05 01:26:47'),
(10, 'Test', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Welcome to Zeerah Bangladeshi and Indian cuisine, where you will enjoy a meal that is refreshingly different. Our award winning chef Salik Ahmed offer a wide range of mouth-watering dishes from our extensive and acclaimed menu.</p>\r\n\r\n			<ul>\r\n				<li>rtyuilu rtyuij rtyujhbftyuhb</li>\r\n				<li>rtyuilkj tyuiop</li>\r\n				<li>rgtykilk.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'images/item/oMgePIafPbFHK034uFwdGz4paiaPYvmA6C2IBTdu.jpeg', '1', '2020-11-05 01:52:33', '2020-11-05 01:52:33'),
(11, 'New Collection', 'gdfssfdgdsc fggfedfv', 'images/item/L27ogO3WJJOzGERvODj6OPdOBoF6aNi6W4unWX0a.jpeg', '1', '2020-11-05 02:20:52', '2020-11-05 04:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_17_213639_create_sliders_table', 1),
(6, '2020_10_19_094002_create_galleries_table', 2),
(7, '2020_10_20_100734_create_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shimul Nath', 'shimul@gmail.com', NULL, '$2y$10$5R/7D.dLc7VBEsEB7z4pr.mM4TDPecvhmH4rvazxYrfWDpCJcuuHi', NULL, '2020-10-19 14:08:32', '2020-10-19 14:08:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
