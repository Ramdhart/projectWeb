-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 07:02 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontribusi`
--

CREATE TABLE `kontribusi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `artikel` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontribusi`
--

INSERT INTO `kontribusi` (`id`, `user_id`, `judul`, `artikel`, `foto`, `created_at`, `updated_at`) VALUES
(5, 2, 'Pusat Primata Schmutzer', 'Di dalam ragunan ada pusat primata, di dalam nya berisi berbagai macam primata, mulai dari monyet, gorila, orang utan dll. tiket masuknya pun terjangkau tidak sampai RP.20.000. Suasana di dalam cukup sejuk, fasilitas yang di sediakan pun cukup lengkap mulai dari wc, watertap, taman kecil, aula outdoor dll.\r\n#recomendedHoliday', '2Panji IP647866428.jpg', '2018-07-03 16:05:59', '2018-07-03 16:05:59'),
(6, 4, 'Danau Toba', 'lksjdfhglstrje;.rtkygln', '4dedy309667072.png', '2018-07-04 04:59:22', '2018-07-04 04:59:22');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ersa', 'ersa1997@gmail.com', '$2y$10$uC9Wc2WSv/9GsJmw71bFWOS3pXTz6DzhzJxfKyXhpmNWJT0kTEFXu', 'eZ8c3CHBnVaP0FTEOpCXnWKKd1VRO4O2gy8xryhnG7YdviEwzsCx09bMzzqR', '2018-07-03 00:11:35', '2018-07-03 00:11:35'),
(2, 'Panji IP', 'Panjiip1983@gmail.com', '$2y$10$0FFuXiWlvDsGlmG5yKgMre7yDpvDXtAbu8s807Tu4kmuhtJz2yCIq', 'o6nXdFyUWexsgwgGVmfTE9Ht3klIMGUG7ZVjNG7lghXJ2OHBOdxWx4acdmOZ', '2018-07-03 07:19:09', '2018-07-03 07:19:09'),
(3, 'ramdhan', 'ramdhan@gmail.com', '$2y$10$A/D/0qMly3QMQsC1JHGHTeNBxs8OjIzuRsxk57DdGGoaM.juqrU52', 'fl8WK9PW1qRZdrUJxhUDhcrwa23wqurxpa4Be14PVvy4c6MWXQtaUbtscSi8', '2018-07-03 21:46:44', '2018-07-03 21:46:44'),
(4, 'dedy', 'dedi@gmail.com', '$2y$10$AGYvUnzJiqUi02ffv2Pj1uITN2o.MipJUcOTH1E0LRRbh/0yL1sl6', NULL, '2018-07-03 21:57:11', '2018-07-03 21:57:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontribusi`
--
ALTER TABLE `kontribusi`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontribusi`
--
ALTER TABLE `kontribusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
