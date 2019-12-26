-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 03:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hometutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `guardianreviews`
--

CREATE TABLE `guardianreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guardian_id` int(255) NOT NULL,
  `ratting` int(11) NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardianreviews`
--

INSERT INTO `guardianreviews` (`id`, `guardian_id`, `ratting`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 12, 8, 'Good behaviour and timely payment', '2019-12-24 11:48:26', '2019-12-24 11:48:26'),
(2, 12, 5, 'Late Payment but Good behaviour.', '2019-12-24 11:55:20', '2019-12-24 11:55:20'),
(3, 12, 6, 'Overall Good', '2019-12-24 12:37:41', '2019-12-24 12:37:41'),
(4, 11, 8, 'Good', '2019-12-25 03:04:47', '2019-12-25 03:04:47'),
(5, 11, 7, 'Lately Payment', '2019-12-25 03:07:44', '2019-12-25 03:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `user_id`, `username`, `photo`, `profession`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(11, 11, 'masum420', '1576520136.jpg', '', 'Maijdee,Noakhali', 1789477764, '2019-12-16 12:15:36', '2019-12-16 12:15:36'),
(12, 17, 'taifur20', '1576566142.jpg', 'Government Employee', 'Madhabpur.Habiganj', 1234567894, '2019-12-17 01:02:22', '2019-12-25 03:20:52'),
(14, 36, 'aakil14', '1577127900.jpg', 'Businessman', 'Habiganj,Sylhet', 1789477764, '2019-12-23 13:05:01', '2019-12-23 13:05:01');

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
(3, '2019_08_30_101153_create_tutors_table', 1),
(4, '2019_08_30_101300_create_guardians_table', 1),
(5, '2019_08_30_101332_create_students_table', 1),
(8, '2019_09_17_104444_create_tutorreviews_table', 2),
(9, '2019_09_17_104806_create_guardianreviews_table', 2),
(10, '2019_09_17_075314_create_tuitions_table', 3),
(11, '2019_10_13_071756_create_subjects_table', 4);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` int(11) NOT NULL,
  `medium` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_id` int(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `username`, `email`, `photo`, `gender`, `class`, `medium`, `educational_institution`, `academic_result`, `guardian_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sakib', 'sakib430', 'saku9628@gmail.com', '1568994820.jpg', 'male', 10, 'Bangla', 'NSTU', 'J.S.C: A+', 11, '$2y$10$nuzgcBfHnWbxRL0GFKT/P.5cZCkHKWjVZPMaQm/SULmGIN0MrG7Om', '2019-09-20 09:53:40', '2019-09-20 09:53:40'),
(2, 'Masum', 'masum420', 'aakilaslamas@gmail.com', '1568995355.jpg', 'male', 10, 'English', 'NSTU', 'J.S.C: A+', 12, '$2y$10$ZR8motphMA33skNgwq7jcuobaYhEDoHKcvM1cHM2yhgrK76XoOd7y', '2019-09-20 10:02:37', '2019-09-20 10:02:37'),
(3, 'Sazzad Shakil', 'sazzad19', 'shakilahmedzx@gmail.com', '1568996158.jpg', 'male', 10, 'English', 'NSTU', 'J.S.C: A+', 14, '$2y$10$x0KVniHfKEEg1ZZGi0fX5um2cPM1MNgxuFIKXGphm7wiUqotWc5pS', '2019-09-20 10:15:58', '2019-09-20 10:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `tuition_id` int(11) NOT NULL,
  `t_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `tuition_id`, `t_subject`, `created_at`, `updated_at`) VALUES
(1, 3, 'Accounting', '2019-10-13 01:25:30', '2019-10-13 01:25:30'),
(2, 3, 'Agriculture', '2019-10-13 01:25:30', '2019-10-13 01:25:30'),
(3, 4, 'Bangla', '2019-12-17 14:10:51', '2019-12-17 14:10:51'),
(4, 4, 'Chemistry', '2019-12-17 14:10:51', '2019-12-17 14:10:51'),
(5, 4, 'English', '2019-12-17 14:10:51', '2019-12-17 14:10:51'),
(6, 5, 'English', '2019-12-17 14:47:41', '2019-12-17 14:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `tuitions`
--

CREATE TABLE `tuitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_fullName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_medium` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_phoneNumber` int(11) NOT NULL,
  `g_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_districts` int(11) NOT NULL,
  `s_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_salary` int(11) NOT NULL,
  `additional_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tuitions`
--

INSERT INTO `tuitions` (`id`, `title`, `s_fullName`, `s_gender`, `s_college`, `s_class`, `s_medium`, `g_phoneNumber`, `g_email`, `s_districts`, `s_area`, `s_address`, `t_gender`, `t_days`, `time`, `t_salary`, `additional_info`, `guardian_id`, `created_at`, `updated_at`) VALUES
(1, 'RealMe', 'shadman sakib', 'Male', 'Noakhali Zilla School', 'Class V', 'English Medium', 1753345678, 'fafdfg@gmail.com', 2, NULL, 'dfsasdfads', 'Male', '4 Days/Week', '07:00:00', 2000, 'fddfdsfsdf', 11, '2019-10-13 00:24:43', '2019-10-13 00:24:43'),
(2, 'Javascript', 'shadman sakib', 'Male', 'Noakhali Zilla School', 'Class III', 'English Medium', 1753345678, 'fafdfg@gmail.com', 2, NULL, 'sdihasi', 'Male', '5 Days/Week', '06:00:00', 1000, '2 students', 11, '2019-10-13 00:26:18', '2019-10-13 00:26:18'),
(3, 'Need a Math Tutor', 'shadman sakib', 'Female', 'Noakhali Zilla School', 'Class V', 'English Medium', 1753345678, 'fafdfg@gmail.com', 2, NULL, 'Beside main road', 'Male', '4 Days/Week', '06:00:00', 2000, '2 students', 12, '2019-10-13 01:25:30', '2019-10-13 01:25:30'),
(4, 'Qualified Tutor Needed', 'Akib', 'Male', 'Noakhali Zilla School', 'Class IX', 'Bangla Medium', 1753345678, 'fafdfg@gmail.com', 12, NULL, 'Highway Road', 'Male', '3 Days/Week', '19:00:00', 4000, '2 Students', 12, '2019-12-17 14:10:51', '2019-12-17 14:10:51'),
(5, 'English Tutor Needed', 'Sagor', 'Male', 'Noakhali Zilla School', 'Class VII', 'English Medium', 1753345678, 'fafdfg@gmail.com', 2, NULL, 'House Number:20', 'Male', '3 Days/Week', '20:00:00', 3000, '2 STUDENTS', 12, '2019-12-17 14:47:41', '2019-12-17 14:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `tutorreviews`
--

CREATE TABLE `tutorreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `ratting` int(11) NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutorreviews`
--

INSERT INTO `tutorreviews` (`id`, `tutor_id`, `ratting`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 36, 8, 'Talented Tutor', '2019-12-25 03:15:06', '2019-12-25 03:15:06'),
(2, 29, 7, 'Good Tutor', '2019-12-25 03:17:47', '2019-12-25 03:17:47'),
(3, 28, 7, 'Not Regular', '2019-12-25 05:02:31', '2019-12-25 05:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `areas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card_front_part` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card_back_part` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_of_tuition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_tuition` int(11) DEFAULT NULL,
  `available_start_time` time DEFAULT NULL,
  `available_end_time` time DEFAULT NULL,
  `expert_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `user_id`, `username`, `photo`, `gender`, `areas`, `educational_qualification`, `profession`, `id_card_front_part`, `id_card_back_part`, `experience_of_tuition`, `current_tuition`, `available_start_time`, `available_end_time`, `expert_in`, `phone_number`, `created_at`, `updated_at`) VALUES
(28, 14, 'Sazzad19', '1576564737.jpg', 'male', 'Sylhet', 'B.SC.(Running)', 'Student', '', '', '2 years', 2, '19:00:00', '21:00:00', 'ICT', 1789477764, '2019-12-17 00:38:57', '2019-12-17 00:38:57'),
(29, 16, 'sharmin20', '1576565311.jpg', 'male', 'Jassore', 'B.SC.(Running)', 'Student', '', '', '2 years', 2, '19:00:00', '21:00:00', 'Mathemetics', 1789477764, '2019-12-17 00:48:31', '2019-12-17 00:48:31'),
(30, 18, 'Sohelimam', '1576569425.jpg', 'male', 'Sylhet', 'B.S.C', 'Teacher', '', '', '2 years', 2, '19:00:00', '21:00:00', 'ICT', 1789477764, '2019-12-17 01:57:06', '2019-12-17 01:57:06'),
(36, 33, 'saif10', '1577005755.jpg', 'male', 'Sylhet', 'B.SC.', 'Employee', '254590146.JPG', '1901642656.JPG', '1 year', 1, '19:00:00', '21:00:00', 'English', 1789477764, '2019-12-22 03:09:17', '2019-12-25 03:50:35');

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
(11, 'Masum Billah', 'saifuzzal90@gmail.com', NULL, '$2y$10$JLa8dX3yxY47/Qw9gCG3l...Eo5QF/hsMD84vKFS34w4hZynOizvO', NULL, '2019-12-16 12:15:35', '2019-12-16 12:15:35'),
(14, 'Sazzad Shakil', 'saifuzzal@gmail.com', NULL, '$2y$10$ysCkwjWayeAh00.rclSpc.9KufdE2ZpWKUCzRV2DOTZkCm/ab7LHq', NULL, '2019-12-17 00:38:57', '2019-12-17 00:38:57'),
(16, 'Sharmin', 'shakilahmedzx@gmail.com', NULL, '$2y$10$66gyKUzNS3CrVdQP.eKZteA1NKUl6HWzR8MqTOPf3WdbSpBl/Rdhi', NULL, '2019-12-17 00:48:31', '2019-12-17 00:48:31'),
(17, 'Taifur Ahmed', 'taifur@gmail.com', NULL, '$2y$10$uhLQI33zcLIFJl9hc2R0ku77KbimeHw91XFOf7LHBf1j8fMsMJuIW', NULL, '2019-12-17 01:02:21', '2019-12-25 03:20:52'),
(18, 'Soheli Mam', 'sohelisoha@gmail.com', NULL, '$2y$10$V7k.Bd7DUNeJf.dV1lGLo.vN1AC687ZyLAJsid2UHRcjnLKXB1kh6', NULL, '2019-12-17 01:57:05', '2019-12-17 01:57:05'),
(33, 'Saif Uzzal', 'naylamerrry40720@gmail.com', NULL, '$2y$10$ha7pkm/P2ojLqcXBYdjgyufzpC9RKTqVGV2sexQxrNlcH137MIyWC', NULL, '2019-12-22 03:09:15', '2019-12-22 03:09:15'),
(36, 'Aakil', 'aakilaslamas@gmail.com', NULL, '$2y$10$gl/aQUN3igXQINWyz47Wa.CzH7gGUCrUnsNoXwIcRFR8f1Zi6bIQy', NULL, '2019-12-23 13:05:00', '2019-12-23 13:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guardianreviews`
--
ALTER TABLE `guardianreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuitions`
--
ALTER TABLE `tuitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorreviews`
--
ALTER TABLE `tutorreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
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
-- AUTO_INCREMENT for table `guardianreviews`
--
ALTER TABLE `guardianreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tuitions`
--
ALTER TABLE `tuitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tutorreviews`
--
ALTER TABLE `tutorreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
