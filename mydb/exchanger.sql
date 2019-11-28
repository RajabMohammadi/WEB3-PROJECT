-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 06:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exchanger`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_option`
--

CREATE TABLE `project_option` (
  `option_id` int(10) UNSIGNED NOT NULL,
  `option_key` varchar(100) NOT NULL,
  `option_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_option`
--

INSERT INTO `project_option` (`option_id`, `option_key`, `option_value`) VALUES
(1, 'lang', 'fa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` int(11) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `Role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rahman', 'admin@gmail.com', 1, '2019-09-10 07:00:00', '$2y$10$WMstVjBOhJKR0HuowCtXRulBTMVuscQRX4SkMMsVj2kT53uj2eEpa', NULL, '2019-09-06 10:16:46', '2019-11-27 11:57:23'),
(3, 'Rahman Rezaee', 'rahmanrezaie60@gmail.com', 1, NULL, '$2y$10$xq4297sIzbkq.QSMo2nNQuajQoeBMO1dFw803bz9geoD4zm5d845u', NULL, '2019-11-27 11:59:48', '2019-11-27 11:59:48'),
(5, 'akbar', 'akbar@gmail.com', 1, NULL, '$2y$10$MroMJAYMGZqcPWF9uQZZo.OhuM7tt1Pmdis1pK/VkiR7iyFfsU03e', NULL, '2019-11-27 12:00:29', '2019-11-27 12:00:29'),
(6, 'mahoomd', 'mahmood@gmail.com', 1, NULL, '$2y$10$TlXx9ZnlDzTZIfHcj1oHEeaObQXw2edwav8TkrIVZCJTUgPZdyOhG', NULL, '2019-11-27 12:00:49', '2019-11-27 12:00:49'),
(7, 'admin123', 'rahmanrez3e234aie60@gmail.com', 1, NULL, '$2y$10$9StTnHZG26kXJqY3aPcBGOMP0Wta0SskMIaR6K2sXSX7aGgunN.KO', NULL, '2019-11-27 12:01:06', '2019-11-27 12:01:06'),
(8, 'uio', 'uiol@gmail.com', 1, NULL, '$2y$10$4Yaxpd1NNyw2iFNX78yrhOajsYZFJe4LmkvX5v4/T3rF.pDcN6bja', NULL, '2019-11-27 12:01:25', '2019-11-27 12:01:25'),
(9, 'saber', 'saber@gmail.com', 1, NULL, '$2y$10$XXqVsBG3M5woC2b0FGtkOeYZ//PL.9538ddYPSECCXBuH9X398v1a', NULL, '2019-11-27 12:01:45', '2019-11-27 12:01:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_option`
--
ALTER TABLE `project_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_option`
--
ALTER TABLE `project_option`
  MODIFY `option_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
