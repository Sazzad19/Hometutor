-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 03:39 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'sazzad@gmail.com', '10580997');

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(255) NOT NULL,
  `name` varchar(300) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`id`, `name`, `title`, `category`, `image`, `body`, `user_id`, `updated_at`, `created_at`) VALUES
(3, '', 'H.S.C. Physics Suggestion', 2, '1578408833.png', 'Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too. Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting. \r\n\r\nDelightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. \r\n\r\nYet bed any for travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything joy alteration boisterous the attachment. Party we years to order allow asked of. We so opinion friends me message as delight. Whole front do of plate heard oh ought. His defective nor convinced residence own. Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he. Friendly bachelor entrance to on by. \r\n\r\nAffronting everything discretion men now own did. Still round match we to. Frankness pronounce daughters remainder extensive has but. Happiness cordially one determine concluded fat. Plenty season beyond by hardly giving of. Consulted or acuteness dejection an smallness if. Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported too not remainder perpetual who furnished. Nay affronting bed projection compliment instrument. \r\n\r\nAt distant inhabit amongst by. Appetite welcomed interest the goodness boy not. Estimable education for disposing pronounce her. John size good gay plan sent old roof own. Inquietude saw understood his friendship frequently yet. Nature his marked ham wished. \r\n\r\nOffices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles. Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true neat she. Much feet each so went no from. Truth began maids linen an mr to after. \r\n\r\nCertainty determine at of arranging perceived situation or. Or wholly pretty county in oppose. Favour met itself wanted settle put garret twenty. In astonished apartments resolution so an it. Unsatiable on by contrasted to reasonable companions an. On otherwise no admitting to suspicion furniture it. \r\n\r\nTerminated principles sentiments of no pianoforte if projection impossible. Horses pulled nature favour number yet highly his has old. Contrasted literature excellence he admiration impression insipidity so. Scale ought who terms after own quick since. Servants margaret husbands to screened in throwing. Imprudence oh an collecting partiality. Admiration gay difficulty unaffected how. \r\n\r\nNow eldest new tastes plenty mother called misery get. Longer excuse for county nor except met its things. Narrow enough sex moment desire are. Hold who what come that seen read age its. Contained or estimable earnestly so perceived. Imprudence he in sufficient cultivated. Delighted promotion improving acuteness an newspaper offending he. Misery in am secure theirs giving an. Design on longer thrown oppose am. \r\n\r\nStyle never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.', NULL, '2020-01-07 08:53:54', '2020-01-07 08:53:54'),
(4, '', 'Career Plan', 3, '1578413848.jpg', 'Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too. Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting. \r\n\r\nDelightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. \r\n\r\nYet bed any for travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything joy alteration boisterous the attachment. Party we years to order allow asked of. We so opinion friends me message as delight. Whole front do of plate heard oh ought. His defective nor convinced residence own. Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he. Friendly bachelor entrance to on by. \r\n\r\nAffronting everything discretion men now own did. Still round match we to. Frankness pronounce daughters remainder extensive has but. Happiness cordially one determine concluded fat. Plenty season beyond by hardly giving of. Consulted or acuteness dejection an smallness if. Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported too not remainder perpetual who furnished. Nay affronting bed projection compliment instrument. \r\n\r\nAt distant inhabit amongst by. Appetite welcomed interest the goodness boy not. Estimable education for disposing pronounce her. John size good gay plan sent old roof own. Inquietude saw understood his friendship frequently yet. Nature his marked ham wished. \r\n\r\nOffices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles. Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true neat she. Much feet each so went no from. Truth began maids linen an mr to after. \r\n\r\nCertainty determine at of arranging perceived situation or. Or wholly pretty county in oppose. Favour met itself wanted settle put garret twenty. In astonished apartments resolution so an it. Unsatiable on by contrasted to reasonable companions an. On otherwise no admitting to suspicion furniture it. \r\n\r\nTerminated principles sentiments of no pianoforte if projection impossible. Horses pulled nature favour number yet highly his has old. Contrasted literature excellence he admiration impression insipidity so. Scale ought who terms after own quick since. Servants margaret husbands to screened in throwing. Imprudence oh an collecting partiality. Admiration gay difficulty unaffected how. \r\n\r\nNow eldest new tastes plenty mother called misery get. Longer excuse for county nor except met its things. Narrow enough sex moment desire are. Hold who what come that seen read age its. Contained or estimable earnestly so perceived. Imprudence he in sufficient cultivated. Delighted promotion improving acuteness an newspaper offending he. Misery in am secure theirs giving an. Design on longer thrown oppose am. \r\n\r\nStyle never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.', NULL, '2020-01-07 10:17:29', '2020-01-07 10:17:29'),
(5, 'Sazzad Shakil', 'Exam Routine', 1, '1578414409.jpg', 'Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too. Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting. \r\n\r\nDelightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. \r\n\r\nYet bed any for travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything joy alteration boisterous the attachment. Party we years to order allow asked of. We so opinion friends me message as delight. Whole front do of plate heard oh ought. His defective nor convinced residence own. Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he. Friendly bachelor entrance to on by. \r\n\r\nAffronting everything discretion men now own did. Still round match we to. Frankness pronounce daughters remainder extensive has but. Happiness cordially one determine concluded fat. Plenty season beyond by hardly giving of. Consulted or acuteness dejection an smallness if. Outward general passage another as it. Very his are come man walk one next. Delighted prevailed supported too not remainder perpetual who furnished. Nay affronting bed projection compliment instrument. \r\n\r\nAt distant inhabit amongst by. Appetite welcomed interest the goodness boy not. Estimable education for disposing pronounce her. John size good gay plan sent old roof own. Inquietude saw understood his friendship frequently yet. Nature his marked ham wished. \r\n\r\nOffices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles. Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true neat she. Much feet each so went no from. Truth began maids linen an mr to after. \r\n\r\nCertainty determine at of arranging perceived situation or. Or wholly pretty county in oppose. Favour met itself wanted settle put garret twenty. In astonished apartments resolution so an it. Unsatiable on by contrasted to reasonable companions an. On otherwise no admitting to suspicion furniture it. \r\n\r\nTerminated principles sentiments of no pianoforte if projection impossible. Horses pulled nature favour number yet highly his has old. Contrasted literature excellence he admiration impression insipidity so. Scale ought who terms after own quick since. Servants margaret husbands to screened in throwing. Imprudence oh an collecting partiality. Admiration gay difficulty unaffected how. \r\n\r\nNow eldest new tastes plenty mother called misery get. Longer excuse for county nor except met its things. Narrow enough sex moment desire are. Hold who what come that seen read age its. Contained or estimable earnestly so perceived. Imprudence he in sufficient cultivated. Delighted promotion improving acuteness an newspaper offending he. Misery in am secure theirs giving an. Design on longer thrown oppose am. \r\n\r\nStyle never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed.', NULL, '2020-01-07 10:26:49', '2020-01-07 10:26:49');

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
(5, 11, 7, 'Lately Payment', '2019-12-25 03:07:44', '2019-12-25 03:07:44'),
(6, 11, 8, 'Good Behave', '2020-01-02 00:43:00', '2020-01-02 00:43:00');

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
(14, 36, 'aakil14', '1577127900.jpg', 'Businessman', 'Habiganj,Sylhet', 1789477764, '2019-12-23 13:05:01', '2019-12-23 13:05:01'),
(16, 52, 'aakil12', '1579970305.png', 'Government Employee', 'Maijdee,Noakhali', 1567845367, '2020-01-25 10:38:27', '2020-01-25 10:54:56');

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
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`) VALUES
(1, 'Exam Motivation'),
(2, 'Exam Suggestion'),
(3, 'Career Guideline');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` int(11) NOT NULL,
  `medium` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `username`, `photo`, `gender`, `class`, `medium`, `educational_institution`, `academic_result`, `guardian_id`, `created_at`, `updated_at`) VALUES
(1, 46, 'sakib430', '1568994820.jpg', 'male', 10, 'Bangla', 'NSTU', 'J.S.C: A+', 11, '2019-09-20 09:53:40', '2019-09-20 09:53:40'),
(2, 14, 'masum420', '1568995355.jpg', 'male', 10, 'English', 'NSTU', 'J.S.C: A+', 12, '2019-09-20 10:02:37', '2019-09-20 10:02:37'),
(3, 43, 'sazzad19', '1568996158.jpg', 'male', 10, 'English', 'NSTU', 'J.S.C: A+', 14, '2019-09-20 10:15:58', '2019-09-20 10:15:58'),
(4, 37, 'fahim2', '1577391992.JPG', 'male', 12, 'English', 'Mohsin College', 'J.S.C: A+,S.S.C: A', 11, '2019-12-26 14:26:34', '2020-01-20 13:19:08'),
(5, 54, 'sakib45', '1579972513.png', 'male', 11, 'Bangla', 'Mohsin College', 'J.S.C: A+,S.S.C: A', 11, '2020-01-25 11:15:13', '2020-01-25 11:15:13');

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
(6, 5, 'English', '2019-12-17 14:47:41', '2019-12-17 14:47:41'),
(7, 6, 'English', '2019-12-29 12:15:26', '2019-12-29 12:15:26'),
(8, 7, 'ICT', '2020-01-25 10:52:44', '2020-01-25 10:52:44');

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
  `s_districts` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_salary` int(11) NOT NULL,
  `additional_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tuitions`
--

INSERT INTO `tuitions` (`id`, `title`, `s_fullName`, `s_gender`, `s_college`, `s_class`, `s_medium`, `g_phoneNumber`, `g_email`, `s_districts`, `s_area`, `s_address`, `t_gender`, `t_days`, `time`, `t_salary`, `additional_info`, `guardian_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Javascript', 'shadman sakib', 'Male', 'Noakhali Zilla School', 'Class III', 'English Medium', 1753345678, 'fafdfg@gmail.com', '2', NULL, 'sdihasi', 'Male', '5 Days/Week', '06:00:00', 1000, '2 students', 11, 1, '2019-10-13 00:26:18', '2020-01-17 05:25:23'),
(6, 'English Tutor Needed', 'Taifur Ahmed', 'Male', 'Noakhali Zilla School', 'Class VI', 'English Medium', 1753345678, 'fafdfg@gmail.com', 'DHAKA', 'Uttara', 'Road No;12, Bulding No;2', 'Male', '4 Days/Week', '07:00:00', 3000, '2 students', 12, 1, '2019-12-29 12:15:26', '2020-01-17 05:25:45'),
(7, 'Tutor Needed', 'shadman sakib', 'Male', 'Noakhali Zilla School', 'Class V', 'Bangla Medium', 1753345678, 'fafdfg@gmail.com', 'DHAKA', 'Uttara', '2 no road', 'Male', '3 Days/Week', '07:00:00', 3000, '1 student', 16, 1, '2020-01-25 10:52:43', '2020-01-25 22:09:51');

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
(3, 28, 7, 'Not Regular', '2019-12-25 05:02:31', '2019-12-25 05:02:31'),
(4, 29, 8, 'Good skill of teaching.', '2019-12-27 07:48:56', '2019-12-27 07:48:56'),
(5, 2, 8, 'Regular tutor', '2020-01-25 10:39:42', '2020-01-25 10:39:42');

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
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `user_id`, `username`, `photo`, `gender`, `areas`, `educational_qualification`, `profession`, `id_card_front_part`, `id_card_back_part`, `experience_of_tuition`, `current_tuition`, `available_start_time`, `available_end_time`, `expert_in`, `phone_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 47, 'Titu30', '1579155718.png', 'male', 'Comilla', 'B.SC.(Running)', 'Student', '806021433.JPG', '974723568.JPG', '1 year', 1, '19:00:00', '22:00:00', 'English', 1567845367, 1, '2020-01-16 00:21:59', '2020-01-16 00:23:25'),
(2, 48, 'rakib19', '1579259882.png', 'male', 'Dhaka', 'M.SC', 'Teacher', '888613909.JPG', '46074288.JPG', '1 year', 2, '17:00:00', '21:00:00', 'Mathemetics,Physics', 1234567894, 1, '2020-01-17 05:18:03', '2020-01-17 05:28:51'),
(3, 49, 'zarin20', '1579280238.png', 'female', 'Feni', 'M.B.B.S(Running)', 'Student', '143963877.JPG', '74864664.JPG', '1 year', 1, '19:00:00', '22:00:00', 'Mathemetics', 1234567894, 1, '2020-01-17 10:57:18', '2020-01-17 11:01:50'),
(4, 50, 'piata32', '1579280435.png', 'female', 'Dhaka', 'B.SC', 'Employee', '1835850551.JPG', '1083570651.JPG', '2 years', 2, NULL, NULL, 'Science', 1789477764, 1, '2020-01-17 11:00:35', '2020-01-17 11:02:00'),
(5, 53, 'sazzad23', '1579971468.png', 'male', 'Sylhet', 'B.SC.(Running)', 'Student', '2037014726.JPG', '1598547591.JPG', '2 years', 2, '19:00:00', '22:00:00', 'English', 1234567894, 1, '2020-01-25 10:57:48', '2020-01-25 22:09:18');

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
(11, 'Masum Billah', 'tonuakibhasan@gmail.com', NULL, '$2y$10$JLa8dX3yxY47/Qw9gCG3l...Eo5QF/hsMD84vKFS34w4hZynOizvO', NULL, '2019-12-16 12:15:35', '2019-12-16 12:15:35'),
(14, 'Sazzad Shakil', 'saifuzzal@gmail.com', NULL, '$2y$10$ysCkwjWayeAh00.rclSpc.9KufdE2ZpWKUCzRV2DOTZkCm/ab7LHq', NULL, '2019-12-17 00:38:57', '2019-12-17 00:38:57'),
(16, 'Sharmin', 'shakilahmedzx@gmail.com', NULL, '$2y$10$66gyKUzNS3CrVdQP.eKZteA1NKUl6HWzR8MqTOPf3WdbSpBl/Rdhi', NULL, '2019-12-17 00:48:31', '2019-12-17 00:48:31'),
(17, 'Taifur Ahmed', 'taifur@gmail.com', NULL, '$2y$10$uhLQI33zcLIFJl9hc2R0ku77KbimeHw91XFOf7LHBf1j8fMsMJuIW', NULL, '2019-12-17 01:02:21', '2019-12-25 03:20:52'),
(18, 'Soheli Mam', 'sohelisoha@gmail.com', NULL, '$2y$10$V7k.Bd7DUNeJf.dV1lGLo.vN1AC687ZyLAJsid2UHRcjnLKXB1kh6', NULL, '2019-12-17 01:57:05', '2019-12-17 01:57:05'),
(36, 'Aakil', 'aakilaslamas@gmail.com', NULL, '$2y$10$gl/aQUN3igXQINWyz47Wa.CzH7gGUCrUnsNoXwIcRFR8f1Zi6bIQy', NULL, '2019-12-23 13:05:00', '2019-12-23 13:05:00'),
(37, 'Fahim', 'fahim@gmail.com', NULL, '$2y$10$AXapIlsMqXtm3pxZxCBFCefcL2IeMtW6YCLsDN7byvILBTF31wlNe', NULL, '2019-12-26 14:26:32', '2019-12-26 14:26:32'),
(38, 'Shawon', 'shawon@gmail.com', NULL, '$2y$10$Kivjroma8ANQD9DqUeOJPO76RVbgYfRV7JVtDMhLi2Myy6HndbzH6', NULL, '2019-12-31 05:59:36', '2019-12-31 05:59:36'),
(39, 'Shuvo', 'shuvo@gmail.com', NULL, '$2y$10$QDZK2WfAI6aId6MpC6/hkeN6Sj6a84iKbF2CvcJEqp9QyVPkRMqcK', NULL, '2020-01-02 00:35:08', '2020-01-02 00:35:08'),
(41, 'Aakil Aslam', 'aakil@gmail.com', NULL, '$2y$10$DUD0j3J1YYhfWYC/asKyXe6Kh/YPOlWx555nABij2icabsDZQ.cEi', NULL, '2020-01-05 12:19:36', '2020-01-05 12:19:36'),
(42, 'Moutosi Sowrin Raka', 'raka@gmail.com', NULL, '$2y$10$IzzypsYbCLF/5VRbQGxL8OR6Ci7smYfBEGcoCBRefr7OnwAlV5Vuy', NULL, '2020-01-05 12:23:13', '2020-01-05 12:23:13'),
(43, 'Sadman Sakib', 'saku9628@gmail.com', NULL, '$2y$10$9VkdSMeSslirCplZkDdMfOzwJM/LWLiHVu6GLdW6HnInxJ/.jtQWC', NULL, '2020-01-05 12:30:24', '2020-01-05 12:30:24'),
(46, 'Sharmin Fatema', 'sharmin@gmail.com', NULL, '$2y$10$c0QI8XIcIu7w4Ns5tcMTquGPlmxcIA8M6P2CieI7aDDvpNCz.R5QK', NULL, '2020-01-09 12:19:48', '2020-01-09 12:19:48'),
(47, 'Titu', 'titu@gmail.com', NULL, '$2y$10$S3lKgYACRgdGQ75KNOwpwu7LjFo7J8aa32bzBYQ4.viIcAzHbSzIq', NULL, '2020-01-16 00:21:58', '2020-01-16 00:21:58'),
(48, 'Rakib', 'aakilaslam@gmail.com', NULL, '$2y$10$ZbAQ.L43lnDGKbYzgOIJKeYpj6f9eo14psFRZT4RNhwTcTL7PWMMy', NULL, '2020-01-17 05:18:02', '2020-01-17 05:18:02'),
(49, 'Zarin', 'zarin@gmail.com', NULL, '$2y$10$NpK7uoWmg/W1xjDseIeAjOHspIhb4Cj4TZFnhcRnFizdiZEnR3P6m', NULL, '2020-01-17 10:57:17', '2020-01-17 10:57:17'),
(50, 'Piata', 'piata@gmail.com', NULL, '$2y$10$oReu78fy.ut4YAXbfvA1fu17P/xdRQu27BvDJasjlJu92UDEKhbRS', NULL, '2020-01-17 11:00:35', '2020-01-17 11:00:35'),
(52, 'Aakil Aslam', 'aakil20@gmai.com', NULL, '$2y$10$ESHwyiMUOd8iiPIDGg0dR.fAJwhfOxhKE/SO.vPGq4k4AFW7NwFYC', NULL, '2020-01-25 10:38:25', '2020-01-25 10:54:56'),
(53, 'Sazzad Shakil', 'sazzad19@gmail.com', NULL, '$2y$10$qHlJL6FiE4.tAWjmArfVE.LVPjGa7HPMP2NL8vYafAuPLKPCRWopm', NULL, '2020-01-25 10:57:47', '2020-01-25 10:57:47'),
(54, 'Sakib', 'sakib12@gmail.com', NULL, '$2y$10$125owBrN8JMyeyX0euxdQeKUxRkW1wCSIGQhopxfyyqlhR7vT273e', NULL, '2020-01-25 11:15:13', '2020-01-25 11:15:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guardianreviews`
--
ALTER TABLE `guardianreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tuitions`
--
ALTER TABLE `tuitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tutorreviews`
--
ALTER TABLE `tutorreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
