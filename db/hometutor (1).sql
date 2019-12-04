-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 06:16 AM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `name`, `username`, `email`, `photo`, `address`, `phone_number`, `children`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Halim', 'Halim19', 'saku9628@gmail.com', '1568903180.jpg', 'Maijdee,Noakhali', 1789477764, 1, '10580997', '2019-09-19 08:26:20', '2019-09-19 08:26:20'),
(2, 'Sazzad Shakil', 'Sazzad19', 'shakilahmedzx@gmail.com', '1568905976.jpg', 'Habiganj,Sylhet', 1789477764, 2, '$2y$10$WqROkpTDYDZkkGccMWM3Eeh/HzC08im9c7vftVECIfsnMPSnzY6M2', '2019-09-19 09:12:58', '2019-09-19 09:12:58'),
(3, 'Abdul Momin', 'momin12', 'aakilaslamas@gmail.com', '1568969553.jpg', 'Habiganj,Sylhet', 1789477764, 3, '$2y$10$q9/bAO6DlPbf.XEMNQ0D0OI34kLMTjXYjZrUmVeowN80aKPCqtt9q', '2019-09-20 02:52:34', '2019-09-20 02:52:34'),
(4, 'Masum', 'masum50', 'aakilaslamas@gmail.com', '1568996467.jpg', 'Maijdee,Noakhali', 1789477764, 2, '$2y$10$tHYYfLua8ZApsPCpwoztK.6DJYuaq7BwMzbNCeQ.twxOzcttkLZJy', '2019-09-20 10:21:07', '2019-09-20 10:21:07'),
(5, 'Taifur Ahmed', 'shakilahmedzx@gmail.com', 'aakilaslam@gmail.com', '1574713334.jpg', 'Maijdee,Noakhali', 1789477764, 1, '$2y$10$Vt8BonWJXEPsgCjEa3tDpOdMYLE3ZKaGz31ytCXxinLMc4LMER/vu', '2019-11-25 14:22:16', '2019-11-25 14:22:16'),
(6, 'Taifur Ahmed', 'taifur', 'shakilahmedzx@gmail.com', '1575009136.jpg', 'Maijdee,Noakhali', 1789477764, 2, '$2y$10$Sfg6n4DOFslaHBimVvD63Ozg6V3gY9AkI724uMzIV86FCODFLw94e', '2019-11-29 00:32:17', '2019-11-29 00:32:17');

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
  `medium` int(191) NOT NULL,
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
(1, 'Sakib', 'sakib430', 'saku9628@gmail.com', '1568994820.jpg', 'male', 10, 1, 'NSTU', 'J.S.C: A+', 1, '$2y$10$nuzgcBfHnWbxRL0GFKT/P.5cZCkHKWjVZPMaQm/SULmGIN0MrG7Om', '2019-09-20 09:53:40', '2019-09-20 09:53:40'),
(2, 'Masum', 'masum420', 'aakilaslamas@gmail.com', '1568995355.jpg', 'male', 10, 2, 'NSTU', 'J.S.C: A+', 2, '$2y$10$ZR8motphMA33skNgwq7jcuobaYhEDoHKcvM1cHM2yhgrK76XoOd7y', '2019-09-20 10:02:37', '2019-09-20 10:02:37'),
(3, 'Sazzad Shakil', 'sazzad19', 'shakilahmedzx@gmail.com', '1568996158.jpg', 'male', 10, 2, 'NSTU', 'J.S.C: A+', 1, '$2y$10$x0KVniHfKEEg1ZZGi0fX5um2cPM1MNgxuFIKXGphm7wiUqotWc5pS', '2019-09-20 10:15:58', '2019-09-20 10:15:58');

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
(2, 3, 'Agriculture', '2019-10-13 01:25:30', '2019-10-13 01:25:30');

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
  `additional_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tuitions`
--

INSERT INTO `tuitions` (`id`, `title`, `s_fullName`, `s_gender`, `s_college`, `s_class`, `s_medium`, `g_phoneNumber`, `g_email`, `s_districts`, `s_area`, `s_address`, `t_gender`, `t_days`, `time`, `t_salary`, `additional_info`, `guardian_id`, `created_at`, `updated_at`) VALUES
(1, 'RealMe', 'shadman sakib', 'Male', 'Noakhali Zilla School', 'Class V', 'English Medium', 1753345678, 'fafdfg@gmail.com', 2, NULL, 'dfsasdfads', 'Male', '4 Days/Week', '07:00:00', 2000, 'fddfdsfsdf', NULL, '2019-10-13 00:24:43', '2019-10-13 00:24:43'),
(2, 'Javascript', 'shadman sakib', 'Male', 'Noakhali Zilla School', 'Class III', 'English Medium', 1753345678, 'fafdfg@gmail.com', 2, NULL, 'sdihasi', 'Male', '5 Days/Week', '06:00:00', 1000, '2 students', NULL, '2019-10-13 00:26:18', '2019-10-13 00:26:18'),
(3, 'Need a Math Tutor', 'shadman sakib', 'Female', 'Noakhali Zilla School', 'Class V', 'English Medium', 1753345678, 'fafdfg@gmail.com', 2, NULL, 'Beside main road', 'Male', '4 Days/Week', '06:00:00', 2000, '2 students', NULL, '2019-10-13 01:25:30', '2019-10-13 01:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `tutorreviews`
--

CREATE TABLE `tutorreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `areas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_of_tuition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_tuition` int(11) DEFAULT NULL,
  `expert_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `username`, `email`, `photo`, `gender`, `areas`, `educational_qualification`, `experience_of_tuition`, `current_tuition`, `expert_in`, `phone_number`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Raka', 'raka14', 'shakilahmedzx@gmail.com', '1569002822.jpg', 'female', 'Jassore', 'M.S.C', '2 YEARS', 1, 'Science', 1789477764, '$2y$10$LoDb0eWSVrqqWgTRq8Asx.9ZbaMYZlROChEOpXKZPj5nWXdE1aNNy', '2019-09-20 12:07:02', '2019-09-20 12:07:02'),
(2, 'Masum', 'masum420', 'saku9628@gmail.com', '1569177589.jpg', 'male', 'Comilla', 'B.S.C(Running)', '2 years', 2, 'Mathemetics', 1789477764, '$2y$10$69Zyetw/tqckuoUAMPNEO.D7zHRN6rkDJcLhk0Z2fEIFdxFV34Oh2', '2019-09-22 12:39:49', '2019-09-22 12:39:49'),
(3, 'Akib', 'akibmagi', 'shakilahmedzx@gmail.com', '1569179142.jpg', 'female', 'Rajshahi', 'M.B.BS', '1 year', 1, 'ICT', 1567845367, '$2y$10$h4AvGprJM.Nh3J7EY89fxuieddcQ0R4LPgx/JKMgrQrY8pmlrKVsq', '2019-09-22 13:05:43', '2019-09-22 13:05:43'),
(4, 'Sakib', 'sakib430', 'saku9628@gmail.com', '1569180166.jpg', 'male', 'Barisal', 'B.S.C(Running)', '2 years', 1, 'Mathemetics', 1789477764, '$2y$10$sOqEg3gkmTb8qrR8cu0tWeGoGj.1ND/b9TobsYkk0V9DF7qIo7Kza', '2019-09-22 13:22:46', '2019-09-22 13:22:46'),
(5, 'Sudipto', 'sudipto12', 'shakilahmedzx@gmail.com', '1569180255.jpeg', 'male', 'Khulna', 'M.B.B.S(Running)', '2 years', 2, 'Biology', 1567845367, '$2y$10$D2kAIDTIcrSeQX3aTXUZKOW5aFHk.FykaFlCz1WWyOgC2q.CbHnxG', '2019-09-22 13:24:15', '2019-09-22 13:24:15');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tuitions`
--
ALTER TABLE `tuitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutorreviews`
--
ALTER TABLE `tutorreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
