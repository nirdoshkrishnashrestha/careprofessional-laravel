-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2022 at 05:05 PM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kritycom_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `slug`, `order`, `content`, `image_name`, `hide`, `created_at`, `updated_at`) VALUES
(2, 'About Us', 'about-us', 1, '<p>Care Professional Service Pvt. Ltd is on top of the leading recruitment agencies list in Nepal. We are registered under the legal restriction of company act 2074 with license no.1308/074/075. From the past years to now, Care Professional Service is well known for executive as well as best recruitment services of Nepal. Being one of the leading and professionally managed manpower companies in Nepal, our specialization is to offer quality services in and outside the country.</p>\r\n\r\n<blockquote>\r\n<p><strong>Your Success is Our Top Priority!</strong></p>\r\n</blockquote>\r\n\r\n<p>With a track record of 100%, Care Professional Service is the leading recruitment agency in Nepal. We provide better opportunities and a brighter future to the people with the objective of arranging employment opportunities for unemployed workers with the aim of working overseas. We have been contributing well-qualified manpower to different countries. As we know recruitment becomes one of the most analytical decisions a company has to make. We at Care Professional Service lay great emphasis on the quality, attitude, and skills of manpower.</p>\r\n\r\n<p>The maximum purpose for a company is to appreciate and express; demand areas, and meet all needs and opportunities in every category of labor, to different countries. We continuously improve the specific characters to implement the vision and mission of the workplace along with their performance. Care Professional Service Pvt. Ltd is one of the leading recruitment agencies of Nepal which provide customer satisfaction according to their desires.</p>\r\n\r\n<p>We have fortunately coursed and developed the growth of the manpower and their satisfaction where the Nepalese people can go straight forward to the foreign companies. As a leading recruitment agency in Nepal, we give full attention during the selection process and make sure that the professionals recruited by our organization have an energetic and positive attitude. We provide highly personalized human resource consultancy to our clients to increase the positive attitude between them and us. We would be glad to demonstrate to our clients how our recruitment service&nbsp;can help them to find satisfactory human resources from Nepal to different countries.</p>\r\n\r\n<p>Our ambition&nbsp;is to provide&nbsp;quality services along with providing skills and knowledge to help employees. And we are also committed to providing quality manpower for our clients. Our main theme is to provide the best service continuously and provide the best human resource for our clients and foreign employment opportunities for employees.</p>', '1642153025_logo-care-professional.png', NULL, '2021-10-02 03:24:51', '2022-01-14 03:52:05'),
(6, 'Organization Chart', 'organization-chart', 2, '<p><img alt=\"\" src=\"https://krity.com.np/storage/ckfinder_images/Board Members_1641796323.png\" style=\"height:468px; width:1147px\" /></p>', NULL, NULL, '2022-01-06 02:17:13', '2022-01-10 00:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logins`
--

CREATE TABLE `admin_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_logins`
--

INSERT INTO `admin_logins` (`id`, `name`, `user`, `pass`, `created_at`, `updated_at`) VALUES
(2, 'Care Professional', 'care', '$2y$10$sGJq21EHwWbBi7qjq1Cj7uJKKqmJthuoOElu9P2W1zlkXz2QoTMo6', '2021-09-26 12:46:51', '2022-01-07 03:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `order`, `image_name`, `created_at`, `updated_at`) VALUES
(8, 'One', 1, '1641124834_1.webp', '2022-01-02 06:15:34', '2022-01-02 06:15:34'),
(9, 'Two', 2, '1641124890_2.webp', '2022-01-02 06:16:30', '2022-01-02 06:16:30'),
(10, 'Three', 3, '1641126326_3.webp', '2022-01-02 06:40:26', '2022-01-02 06:40:26'),
(11, 'Four', 4, '1641126339_4.webp', '2022-01-02 06:40:39', '2022-01-02 06:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `url`, `image_name`, `hide`, `created_at`, `updated_at`) VALUES
(6, 'Dubai Duty Free', 'https://google.com', '1641129933_1.png', NULL, '2022-01-02 07:37:05', '2022-01-02 07:40:33'),
(7, '2', '#', '1641129965_2.png', NULL, '2022-01-02 07:41:05', '2022-01-02 07:41:05'),
(8, '3', 'https://abc.com', '1641129977_3.jpg', NULL, '2022-01-02 07:41:17', '2022-01-03 07:18:31'),
(9, '4', '#', '1641129986_4.png', NULL, '2022-01-02 07:41:26', '2022-01-02 07:41:26'),
(10, '5', '#', '1641130000_5.png', NULL, '2022-01-02 07:41:40', '2022-01-02 07:41:40'),
(11, '6', '#', '1641130010_6.png', NULL, '2022-01-02 07:41:50', '2022-01-02 07:41:50'),
(12, '7', '#', '1641130022_7.jpg', NULL, '2022-01-02 07:42:02', '2022-01-02 07:42:02'),
(13, '8', '#', '1641130042_8.png', NULL, '2022-01-02 07:42:22', '2022-01-02 07:42:22'),
(14, '9', '#', '1641130052_9.png', NULL, '2022-01-02 07:42:32', '2022-01-02 07:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `address1`, `address2`, `address3`, `phone1`, `phone2`, `email1`, `email2`, `extra1`, `extra2`, `created_at`, `updated_at`) VALUES
(1, 'Dhumbarahi Kathmandu, Nepal', '9851323507', NULL, '4417142', '4417143', 'careprofessional@gmail.com', 'info@careprofessional.com', NULL, NULL, '2021-09-28 18:59:48', '2022-01-14 03:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `image_name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nirdosh', '1632727540_company proposal.doc', 'yes', '2021-09-27 01:40:40', '2021-09-27 01:40:40');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `order`, `image_name`, `created_at`, `updated_at`) VALUES
(9, '1', 1, '1641211142_1.webp', '2022-01-03 06:14:02', '2022-01-03 06:14:02'),
(10, '2', 2, '1641211150_2.webp', '2022-01-03 06:14:10', '2022-01-03 06:14:10'),
(11, '3', 3, '1641211158_3.png', '2022-01-03 06:14:18', '2022-01-03 06:14:18'),
(12, '4', 4, '1641211164_4.jpg', '2022-01-03 06:14:24', '2022-01-03 06:14:24'),
(13, '5', 5, '1641211170_5.jpg', '2022-01-03 06:14:30', '2022-01-03 06:14:30'),
(14, '6', 6, '1641211177_6.jpg', '2022-01-03 06:14:37', '2022-01-03 06:14:37'),
(15, '7', 7, '1641211184_7.jpg', '2022-01-03 06:14:44', '2022-01-03 06:14:44'),
(16, '8', 8, '1641211189_8.jpg', '2022-01-03 06:14:49', '2022-01-03 06:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `title`, `slug`, `order`, `content`, `image_name`, `hide`, `created_at`, `updated_at`) VALUES
(2, 'Care Professional', 'care-professional', 1, '<p><strong>We appreciate your curiosity!</strong></p>\r\n\r\n<p>Care Professional is a group member of Care Professional Service Pvt. Ltd, the best recruitment agency in Nepal. We are registered under the legal restriction of company act 2074 with license no.1308/074/075. Care Professional Service is well known for being the best recruitment service in Nepal. Being one of the professionally managed manpower companies in Nepal, our specialization is to offer quality services in and outside the country.</p>\r\n\r\n<p>Care Professional Service provides better opportunities for unemployed people of Asian countries to work overseas. We have been contributing a well-qualified workforce to different countries. We continuously improve the specific characters to implement the objectives&nbsp;of the workplace along with their performance. Care Professional Service Pvt. Ltd is one of the leading recruitment services of Nepal which provide customer satisfaction according to their desires. We offer a variety of quality services to enhance the skills of manpower.</p>\r\n\r\n<p>Our company prepares candidates to meet every requirement of the employees and delivers the right kind of workers&nbsp;to the right job. To find the best job opportunities for people, whether they are skilled or unskilled, we train those people to make them professionally fit.</p>', NULL, NULL, '2022-01-06 04:34:15', '2022-01-13 04:59:53'),
(3, 'Care Agriculture Interprises', 'care-agriculture-interprises', 2, '<p>Care Agriculture Enterprises is performed by our proficient professionals indirectly sourcing agricultural produce from local farmers. We are covering various kinds of spices growing from the western part of India.</p>\r\n\r\n<p>Currently, our company (Care Professional Service Pvt. Ltd) is building the necessary infrastructures that are required for manpower services. We have created a network of farmers to handle their production. We will always be there to help you, so Care Agriculture Enterprises premises are always welcome every researcher, educational tourist, student, and other interest group for observation and study purposes.</p>\r\n\r\n<ul>\r\n	<li>Objectives:</li>\r\n	<li>One of the leading visions of Care Professional Agriculture at the national level is to be a strong, reliable, and long-term private-sector-led agricultural enterprises sector.</li>\r\n	<li>We have the potentiality of contributing to high and broad-based economic growth.</li>\r\n	<li>We have the ambition to expand and strengthen market-oriented private sector-driven agricultural enterprises to increase the value and volume of the products domestically and internationally.<br />\r\n	&nbsp;</li>\r\n</ul>', NULL, NULL, '2022-01-06 04:34:28', '2022-01-13 02:58:35'),
(4, 'Care Fashion Design', 'care-fashion-design', 3, '<p>Care Fashion Design and Tailoring providing services like:-</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Bespoke Tailoring that is fully made to measure.</li>\r\n	<li>&nbsp;Repairs and alteration (Same day Service)</li>\r\n	<li>&nbsp;Redesigning and reshaping clothes for the perfect fit.</li>\r\n</ul>', NULL, NULL, '2022-01-06 04:35:10', '2022-01-13 02:56:59'),
(5, 'Care Nepal Travel & Tour', 'care-nepal-travel-tour', 4, '<p>Care Nepal Travel&nbsp;and Tour&nbsp;is a government-licensed company in Nepal. We have well-qualified and professional staff with high standards. We are a destination management company based in the tour, travel, and trek agency in Nepal. Care Nepal Travel&nbsp;and Tour&nbsp;can organize the best travel arrangements in Nepal.</p>\r\n\r\n<p>Our specialization is tours, trekking, and Himalayan activities in Nepal. The stunning surroundings are not sufficient for the wonderful tours; it requires careful arrangements and a well-planned tour with comfort and safety in mind, which is only possible by Care Nepal Travel&nbsp;and Tour.&nbsp;We customize well-planned and wonderful holiday packages.&nbsp;Care Nepal Travel and tour&nbsp;offers you to make your time special and unique in Nepal along with the natural beauty, a wide range of cultural and traditional as well as special tours.</p>\r\n\r\n<p>Why Care Nepal Travel and Tour?</p>\r\n\r\n<ul>\r\n	<li>We have knowledge and experience with many tour operators, trekking, and tourism in Nepal, Tibet, Bhutan, and India.</li>\r\n	<li>Organized Flexibility in trip, itinerary &amp; dates.</li>\r\n	<li>Affordable prices for tours, climbing, trekking, and tourism in Nepal.</li>\r\n	<li>24*7 Support from Care Nepal Travel&nbsp;and Tour.</li>\r\n	<li>Modify everything according to your desires and interests.</li>\r\n	<li>Experts in group and individual operations.</li>\r\n	<li>Is registered under government authorities.</li>\r\n	<li>We use local manpower and resources, well-paid and insured staff.</li>\r\n	<li>Safety is our priority.</li>\r\n</ul>', NULL, NULL, '2022-01-06 04:35:23', '2022-01-13 04:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `probation_period` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resident_fee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_ticket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accommodation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_transportation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uniform` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_insurance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_case` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_fees` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `content`, `country`, `company_name`, `salary`, `last_date`, `position`, `image_name`, `category`, `hide`, `duration`, `probation_period`, `working_hours`, `resident_fee`, `air_ticket`, `accommodation`, `local_transportation`, `uniform`, `medical_insurance`, `food`, `death_case`, `visa_fees`, `created_at`, `updated_at`) VALUES
(17, 'Asst. Manager', '<p>This is the content</p>', 'Dubai', 'ABC Company', '500 AUD', '01/20/2022', 'Manager', '1641217617_3.jpg', 'Professional', NULL, '2 Years', '1 Month', '8', '-', 'Free', 'Free', 'Free', 'Free', 'Free', 'Free', '-', 'Company Will Pay', '2022-01-03 07:40:07', '2022-01-05 06:48:13'),
(18, 'Security Guard', '<p>This is the job of Security Guard</p>', 'Qatar', 'ABCD Company', '1500 AD', '01/27/2022', 'Security', '1641216650_1.webp', 'Semi-Skilled', NULL, '1.5 Years', '1.5 Month', '8', 'Free', 'Free', 'Free', '50 AD per Month', '-', '-', '-', '-', '-', '2022-01-03 07:45:50', '2022-01-06 01:24:52'),
(19, 'Heavy Driver', '<p>ssssssssssssssssss</p>', 'Qatar', 'ABC Company', '-', '02-Feb-2015', '-', NULL, 'Non-Skilled', NULL, '2 Years', '8 Months', '8 Hours', '-', '-', '-', '-', '150 AUD', '50 AUD per Year', '-', '-', '-', '2022-01-06 00:54:49', '2022-01-06 01:34:38'),
(20, 'Forment', '<p>aaaaaaaaaaaaa</p>', 'UAE', 'Ambikeshwori Traders', '1500', '22-Feb-2003', '-', '1641453836_9.png', 'Semi-Skilled', NULL, '5 years', '1.5 Month', '8 Hours', '-', 'Free', '-', '50 AD per Month', '-', '-', '150 ABC', '-', '150 ABC', '2022-01-06 00:55:04', '2022-01-06 01:38:56'),
(21, 'Labor', '<p>bbbbbbbbbbb</p>', 'Europe', 'Ambikeshwori Traders', '1500 AD', '23-Aug-2020', '-', NULL, 'Skilled', NULL, '2 Years', '1.5 Month', '8 Hours', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2022-01-06 00:55:16', '2022-01-06 03:38:40'),
(22, 'Security Guard', '<p>bbbbbbbbb</p>', 'America', 'CIA', 'USD 500', '22-Sep-1979', '-', '1641454071_index.png', 'Semi-Skilled', NULL, '5 years', '2 Months', '10 hrs', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2022-01-06 00:55:27', '2022-01-06 03:38:26'),
(23, 'President', '<p>Pre-Approval from the Department of Foreign Employment is received once the above-listed documents are obtained.</p>', 'USA', 'American Government', 'USD 1500', '17-May-1998', '-', '1641454214_america.png', 'Professional', NULL, '2 Years', '1.5 Month', '24 hrs', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2022-01-06 00:55:44', '2022-01-06 03:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `legals`
--

CREATE TABLE `legals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legals`
--

INSERT INTO `legals` (`id`, `title`, `order`, `image_name`, `created_at`, `updated_at`) VALUES
(11, '1', 1, '1641197107_1.jpg', '2022-01-03 02:20:07', '2022-01-03 02:20:07'),
(12, '2', 2, '1641197118_2.jpg', '2022-01-03 02:20:18', '2022-01-03 02:20:18'),
(13, '3', 3, '1641197127_3.jpg', '2022-01-03 02:20:27', '2022-01-03 02:20:27');

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
(13, '2021_07_20_062038_create_galleries_table', 2),
(14, '2021_07_20_103828_create_gallery_images_table', 3),
(22, '2014_10_12_000000_create_users_table', 4),
(23, '2014_10_12_100000_create_password_resets_table', 4),
(24, '2019_08_19_000000_create_failed_jobs_table', 4),
(25, '2021_07_16_045617_create_admin_logins_table', 4),
(26, '2021_07_17_090747_create_posts_table', 4),
(27, '2021_07_18_164430_create_vacancies_table', 4),
(28, '2021_07_23_091707_create_downloads_table', 4),
(29, '2021_09_22_082359_create_abouts_table', 4),
(30, '2021_09_22_120124_create_services_table', 4),
(31, '2021_09_23_071100_create_news_table', 4),
(32, '2021_09_23_102526_create_banners_table', 4),
(33, '2021_09_26_154338_create_galleries_table', 4),
(34, '2021_09_26_181616_create_details_table', 5),
(35, '2021_09_27_153256_create_specializes_table', 6),
(36, '2021_09_28_051103_create_jobs_table', 7),
(37, '2021_10_01_160833_create_clients_table', 8),
(39, '2021_10_01_163948_create_testimonials_table', 9),
(41, '2021_10_09_175705_create_socials_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `excerpt`, `content`, `hide`, `published_at`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'COVID pandemic effect on Manpower companies', 'covid-pandemic-effect-on-manpower-companies', 'The manpower companies that could not send even 100 workers abroad in the current fiscal year will be renewed keeping in view of the COVID-19 pandemic. Many manpower are struggling to send workers abroad due to the COVID pandemic.', '<p style=\"text-align:justify\">The manpower companies that could not send even 100 workers abroad in the current fiscal year will be renewed keeping in view of the COVID-19 pandemic.</p>\r\n\r\n<p style=\"text-align:justify\">As manpower companies are struggling to send workers abroad due to the COVID pandemic, most of the companies failed to send 100 workers this year. Taking this factor into consideration, the cabinet meeting held a few days ago decided to allow the renewal of those companies until the fiscal year 2021/22.</p>\r\n\r\n<p style=\"text-align:justify\">Entrepreneurs have been demanding renewal of all manpower companies, stating that foreign employment has come to a standstill due to the COVID-19 pandemic. If the decision had been made to dismiss the manpower due to the non-dispatch of 100 workers, most of the manpower would have been dismissed this year.</p>\r\n\r\n<p style=\"text-align:justify\">Three years ago, the government had introduced the provision to revoke the registration of manpower companies that fail to send at least 100 workers for foreign employment every year. At the same time, a legal provision was made to increase the manpower deposit (including cash and bank guarantee) from Rs 3 million to Rs 50 million.</p>\r\n\r\n<p style=\"text-align:justify\">However, after the outbreak of the COVID pandemic, the number of people going for foreign employment has dropped significantly as the destination countries and Nepal itself have been badly affected.</p>\r\n\r\n<p style=\"text-align:justify\">According to the Department of Foreign Employment, the number has dropped dramatically since the pandemic, when about half a million young people (both new and old) went for foreign employment before the pandemic hit the world. In the current fiscal year, about 100,000 people have gone for foreign employment and many staying abroad for employment have returned home.</p>', NULL, '12/01/2021', '1640508199_Baideshi.jpg', '2021-10-01 14:33:05', '2021-12-26 03:00:15'),
(2, 'Foreign jobs reduced to one-third than last year', 'foreign-jobs-reduced-to-one-third-than-last-year', 'The number of Nepalis getting foreign jobs has reduced to just a bit higher than one-third of the previous year in the recently concluded fiscal year, 2020/21, the government reports.', '<p>The number of Nepalis getting foreign jobs has reduced to just a bit higher than one-third of the previous year in the recently concluded fiscal year, 2020/21, the government reports.</p>\r\n\r\n<p>According to the records of the Department of Foreign Employment, it issued labour permits to only 72,081 Nepalis from mid-July 2020 to the same date this year.</p>\r\n\r\n<p>In the previous year, the number of permits issued was 190,453. Hence, the number of permits in the recent fiscal year is around 37 per cent of the previous year&rsquo;s mark.</p>\r\n\r\n<p>The table below shows the details of the permits issued in the fiscal year 2020/21.</p>', NULL, '10/25/2021', '1640508500_baideshik-rojgai.jpg', '2021-10-01 14:45:06', '2021-12-26 03:03:20'),
(3, 'Notice about required documents', 'notice-about-required-documents', 'Nepal government has published a notice regarding to required documents. 5 documents that are mandatory, they are: Demand Letter, Power of Attorney, Employment Contract, Service Agreement and Guarantee Letter', '<p><strong>1. Demand Letter:</strong><br />\r\nDemand letter should be addressed to Nominated Recruitment Agencies., License no &hellip;&hellip;/&hellip;../&hellip;&hellip;.. The letter should include details of the workers, nature of job with required category, salary, duty hours, food and accommodation facilities, overtime, transport, insurance of workers, residence permit and other benefits.<br />\r\n<strong>2. Power of Attorney:</strong><br />\r\nPower of Attorney is a legal confirmation, on behalf of employer, for selection of manpower. This authorizes the&nbsp;<strong>Nominated Recruitment Agencies</strong>&nbsp;License no &hellip;&hellip;./&hellip;&hellip;./&hellip;&hellip;.. for sending workers legally.<br />\r\n<strong>3. Employment Contract:</strong><br />\r\nThe employing company provides employment agreement to the employee as per demand letter.<br />\r\n<strong>4. Service Agreement:</strong><br />\r\nEmploying Company should provide service agreement between company and recruitment agency in Nepal.<br />\r\n<strong>5. Guarantee Letter:&nbsp;</strong>The employing company should not transfer any workers to another country without approval of competent Nepal Government authorities.<br />\r\n<strong>The documents mentioned above 1 to 5</strong>&nbsp;should be signed by company authorized person and bear company seal.&nbsp;<strong>The documents 1 and 2&nbsp;</strong>must be duly sealed and attested by Chamber of Commerce and Ministry of Foreign Affairs. For some countries, attestation from Nepal Embassy is required.</p>', NULL, '2021-07-13', '1637309162_approved.jpg', '2021-10-02 09:06:58', '2021-12-26 03:17:57'),
(6, 'Notices regarding process to be followed.', 'notices-regarding-process-to-be-followed', 'The Pre-Approval from the Department of Foreign Employment is received once the above listed 5 POA documents are acquired. The advertisement will be placed in National Daily Newspaper as per the requirement of the company.', '<p><strong>Pre-Approval</strong><br />\r\nPre-Approval from the Department of Foreign Employment is received once the above-listed documents are obtained.<br />\r\n<strong>Advertisement</strong><br />\r\nTrikon Management Services Pvt. Ltd uses various tools such as the internet, SMS, telephone, etc. to characterize and accumulate documents. These documents are additionally met through direct candidates in preference to public relations officers.<br />\r\n<strong>Pre-screening of candidates</strong><br />\r\nTrikon Management Services Pvt. Ltd. Shall have to go through various steps to get to the final stage of the employee selection process. The final interview or the short-listed candidates will be conducted by the employer by taking oral, written, and practical test decisions evaluating and comparing the patentability of candidates.<br />\r\n<strong>Interview by the Employer Representative</strong><br />\r\nThe short-listed candidates will be sent to the final interview by the represented company. The final interview or the short-listed candidates will be conducted by the employer by taking an oral, written, and practical test.<br />\r\n<strong>Medical test</strong><br />\r\nOnly selected candidates are referred for medical tests by the recruitment agencies.<br />\r\n<strong>Orientation</strong><br />\r\nThe orientation classes are mandatory organized by the government-registered orientation institute of Nepal, which provides full information about law and order, immigration policy, cultural religion of respective countries upon receiving the job offer or employment visa.<br />\r\n<strong>Visa Endorsed</strong><br />\r\nWe send all the necessary documents as per requirements for the additional visa processing like passport copies, photographs, medical reports, experience certificates, etc. to the employer.<br />\r\n<strong>Final approval</strong><br />\r\nAll the important documents like original passport, visa copy, medical report, orientation certificate, insurance policy are submitted to the Department of Forei8gn Employment (DOFE), Nepal for final approval and immigration clearance. The Department of Foreign Employment (DOFE) analyzes the documents and also provides final approval.<br />\r\n<strong>Preparation for deployment</strong><br />\r\nAs soon as the visa got approved, we give ticket booking to our travel agency or directly to the concerned airline to confirm seats to the nearest airport of the authorized country</p>', NULL, '11/09/2021', '1640509653_DepartmentofForeignEMployment_20210713105602.jpg', '2021-12-26 03:22:12', '2022-01-05 06:27:50');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image_name`, `hide`, `created_at`, `updated_at`) VALUES
(1, 'Welcome', '<p><strong>Care Professional Service Pvt. Ltd. is one of the most advanced workforce recruitment agencies in Nepal.</strong></p>\r\n\r\n<p>We have the expertise to contribute workforces from Nepal to different countries around the world. We have experience of providing training, skills, and experience to the workers as per the job qualification for many years. Care Professional Service Pvt. Ltd is legally authorized by the government of Nepal under license no.1308/074/075 including quality services globally to our respected clients and companies. Our dedication to supplying well-qualified staff has obtained the desired results for our hired hand. Our efforts and hard work lead people to meet with complete assistance and feedback.</p>', '', 'yes', '2021-09-27 02:01:38', '2022-01-12 06:52:14'),
(2, 'Vision', '<p>Care Professional Service provides better opportunities along with&nbsp;a brighter future to people with&nbsp;the objective of arranging employment.</p>', 'Noimage', NULL, '2022-01-02 07:10:45', '2022-01-12 03:11:11'),
(3, 'Mission', '<p>Our mission is to discover talented manpower for our network. We&nbsp;deliver the right candidate to the right company at the right time.</p>', 'Noimage', NULL, '2022-01-02 07:10:57', '2022-01-12 06:53:30'),
(4, 'Objectives', '<p>Customer Satisfaction is our priority. Our objective is to provide continuous quality manpower and the best foreign employment opportunities.</p>', 'Noimage', NULL, '2022-01-02 07:11:12', '2022-01-12 03:09:39'),
(12, 'Message from Chairman', '<p><strong>Dear all, best wishes!</strong></p>\r\n\r\n<p>Our goal is to be one of the guiding partners for our clients and candidates as they will always remember us to choose. We at Care Professional Service lay great emphasis on the quality, and skills of manpower.</p>\r\n\r\n<p>We deliver innovative manpower with great solutions and services that enable our clients to secure a world of work. We are moving forward with the theme of being one of the top recruitment services providers of Nepal with the objective of offering quality services in and outside the country.</p>\r\n\r\n<p>On behalf of the Care Professional Service, I would like to promise that our every effort and hard work helps to encourage our candidates.</p>\r\n\r\n<p><em>Executive Chairman</em><br />\r\n<strong>Govinda Sir</strong></p>', '1641128908_chairman.png', 'yes', '2021-09-27 02:02:29', '2022-01-14 04:17:38'),
(42, 'How to Apply?', '<p>We are bringing up the standard and quality services to our clients so, interested employers may contact directly to the Care Professional Service Pvt. Ltd. We will provide the full details on the terms and conditions of services for Nepali workers.</p>', 'Noimage', NULL, '2022-01-02 07:22:07', '2022-01-13 01:49:51'),
(43, 'Find Desired Job', '<p>We provide a wide range of job options for all category skills. Select an appropriate job listed on our website.</p>', 'Noimage', NULL, '2022-01-02 07:22:31', '2022-01-12 07:02:20'),
(44, 'Apply', '<p>We aim to provide you with the full information online. To apply for a job vacancy, your visit to Care Professional Service is highly recommended.</p>', 'Noimage', NULL, '2022-01-02 07:22:49', '2022-01-12 07:10:25'),
(45, 'Interview', '<p>Shortlisted candidates will be selected for interviews. The interview will be conducted by the respective company&#39;s delegate in the English language.</p>', 'Noimage', NULL, '2022-01-02 07:23:03', '2022-01-09 04:05:28'),
(46, 'Manpower Catagories', '<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>', 'Noimage', NULL, '2022-01-05 05:11:38', '2022-01-05 05:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`id`, `title`, `slug`, `order`, `content`, `image_name`, `hide`, `created_at`, `updated_at`) VALUES
(1, 'Documentation', 'documentation', 1, '<p>All necessary documents should be verified from country to country, so the documentation is the process of deciding who is applicable for the specific job roles to meet the approved formalities from the Labor Department of Nepal. The required documents include the employer&rsquo;s specification, job description, resumes, and the application form authenticated by Care Professional Service to the respective country.</p>\r\n\r\n<p><strong>Demand Letter</strong><br />\r\nA copy of the demand letter from the candidates containing all the details of the vacancy; provides information about the type of work, including required skills of the employers, the number of workers, salary, qualification, and their experience. Moreover, the terms and conditions of Care Professional Service shall be mentioned. The demand letter is completed by prospective employees when they apply for a job.</p>\r\n\r\n<p><strong>Power of Attorney</strong><br />\r\nFirstly, the Power of Attorney is a legal authenticated application authorized by our company (Care Professional Service to be the lawful agent of the country. A copy of the Power of Attorney, correctly verified by the Ministry of Foreign Affairs or Ministry of Labor from the respective country of the workers in the respective recruitment agency to act in his favor.</p>\r\n\r\n<p><strong>Agency Agreement</strong><br />\r\nThe agreement between the Care Professional Service and the employer provides all the terms and conditions required for the recruitment process for the employees. There should be a Guarantee for the workers in the form of a letter. The guarantee from the employers to all workers will work within that country only. Nobody will be sent out of the country. Care Professional Service supplies workers from Nepal that must be signed by both the employer and the respective agency.</p>\r\n\r\n<p><strong>Employment Contract</strong><br />\r\nAn illustration copy of the employment contract of service harmony mentioning offered salary and schedule of advantages to the workers together with accommodation, food, and health facilities. Employment contract between employer and employee only copy signed and stamped by the sponsor.</p>\r\n\r\n<p><strong>Consular Letter</strong><br />\r\nThe employer will issue an authority letter from the Care Professional Service Pvt. Ltd, which is addressed to the representative country. It is a letter that is addressed to the connected deputation, the mission for the essential command. This letter is issued by the employer addressing the consulate general of the respective embassy, intimating them for the appointment of Care Professional Service, Pvt. Ltd.</p>\r\n\r\n<p><strong>Guarantee Letter&nbsp;</strong><br />\r\nIn the meantime, we are seeking international partners who are highly qualified, efficient, and skilled professionals able to provide good opportunities to the candidates by recruiting them in the right place at the right time. The organization must ensure affordable casting for the candidate. This letter must be verified by the employer and attested from the respective country&rsquo;s agency.</p>', '1641813562_visa-processing for foreign employment in Nepal.jpg', NULL, '2022-01-03 03:42:48', '2022-01-13 01:43:19'),
(2, 'Recruitment Process', 'recruitment-process', 2, '<p><br />\r\nAfter receiving the inquiry letters from our well-qualified and expert candidates, we provide the legal documents that are necessary at various stages that make the process reliable in the recruitment agency for foreign employment in Nepal.</p>\r\n\r\n<p><strong>Receipt of Demand and Verification</strong><br />\r\nOn receipt of all mandatory documents from the candidates are collected by the Care Professional Service to submit to the Department of Foreign Employment to take permission from the government. They may also contact the employees for the verification of the documents.</p>\r\n\r\n<p><strong>Pre-Approva</strong>l<br />\r\nThe Department of Foreign Employment granted pre-approval by receiving the demand letter from the employer. Once the documents are authorized by the government of Nepal, all the documents are accepted for additional recruitment processes.</p>\r\n\r\n<p><strong>Screening</strong><br />\r\nThe pre-screening process moves forward by getting the pre-approval from the Department of Foreign Employment of Nepal. Screening the applicable candidates through the necessary documents to initial processing helps to recognize the candidate&rsquo;s nature and ability to work. An interview and trade test will be conducted by the agency representative under the given selection criteria by the employer.</p>\r\n\r\n<p><strong>Interview</strong><br />\r\nThe candidates are prescreened by respected companies. In such cases, we carry out interviews for employer&#39;s journey&nbsp;to foreign countries and arrange them to the employment destination.</p>\r\n\r\n<p>Step:5 <strong>Advertisement in Social Network</strong><br />\r\nThe request letter is published in the national daily/weekly newspaper for assembling the documents. Care Professional Service Pvt. Ltd uses various tools such as the internet, SMS, telephone, etc. to characterize and accumulate documents based on the necessity of the employer. These documents are additionally met through direct candidates in preference to public relations officers.</p>\r\n\r\n<p>Step:6 <strong>Medical Check-up</strong><br />\r\nAll the selected candidates will be sent to the medical center for the full medical examination and vaccination. Those candidates who are medically and physically fit for employment will be sent for the recruitment process to sign the employment contract, then after the further visa procedures.</p>\r\n\r\n<p><strong>Orientation</strong><br />\r\nThe orientation classes are compulsory, that is organized by the government-registered orientation institute, and play a vital role in providing a brief introduction to the workers about the jobs, safety, and rules and regulations of the respective country. Orientation helps to create awareness and establish friendly relations between employer and employee.<br />\r\n<strong>Travel Arrangement</strong><br />\r\nAs soon as the visa got approved, we give ticket booking to our travel agency or directly to the concerned airline to confirm seats to the nearest airport. Without better travel management employees sometimes feel uncomfortable.</p>', '1641814277_Recruitment Process for foreign employment Nepal.png', NULL, '2022-01-06 04:30:56', '2022-01-12 03:46:57'),
(3, 'Deployment Procedure', 'deployment-procedure', 3, '<p>Deployment procedures examine the process for the energetic participants who are seeking to fill vacancies for the various positions by using a variety of methods.</p>\r\n\r\n<p><strong>Inquiry&nbsp;</strong><br />\r\nCare Professional Service Pvt. Ltd received the inquiry from the candidates concerning their requirements. The employer must include their biodata and all the required documents which are accepted for additional recruitment processes for foreign employment from Nepal.</p>\r\n\r\n<p><strong>Manpower Grouping</strong><br />\r\nCare Professional Service Pvt. Ltd&nbsp;provides manpower services through administrative and supports services. Then after that, we will move forward by grouping the contract workers.</p>\r\n\r\n<p><strong>Interview and Advertisement&nbsp;</strong><br />\r\nThe candidates will be called for an interview by their respective companies. In such cases, we carry out interviews for employers traveling to foreign countries and arrange to the employment destination. The request letter is published in the national daily/weekly newspaper for assembling the documents. Care Professional Service Pvt. Ltd uses various tools such as the internet, SMS, telephone, and print media like newspaper, SMS, email, etc. to characterize that is based on the necessary documents of the employer.&nbsp;</p>\r\n\r\n<p><strong>Selection of Contract Workers</strong><br />\r\nThe selection of contract workers may be performed under the selection of workers or through the authorized company. From this method, the representative may conduct the interview and be ready for the selection of the contract workers. All the documents of the employers are required for the employment contract of service harmony which mentions offered salary and schedule of advantages to the workers together with accommodation, food, and health facilities.<br />\r\n<strong>Documentation</strong><br />\r\nThe documentation process consists of necessary documents of the employers such as &ndash;<br />\r\nDemand letter<br />\r\nPower of attorney&nbsp;<br />\r\nAgency agreement&nbsp;<br />\r\nContract of the workers&nbsp;<br />\r\n<strong>Guarantee letter</strong><br />\r\nAfter the clearance of all the above measures and the service fees. Then only the candidates are finally ready to be deployed from Nepal to foreign.<br />\r\n&nbsp;</p>', '1641904358_Deployment-Process.webp', NULL, '2022-01-06 04:31:23', '2022-01-12 03:59:59'),
(4, 'Visa Processing', 'visa-processing', 4, '<p>Visa processing is simply the part of the immigration process where the candidate&rsquo;s visa is endorsed. All the sets of documents of candidates will be sent to the employer for the process of employment visa. The candidate&rsquo;s visa should be recognized and sent by the employer to the recruitment agency for the last steps of approval.</p>\r\n\r\n<p><strong>Written authority</strong><br />\r\nThe employer will supply Care Professional Service Pvt. Ltd with an authorized written application. A copy of written authority should be authenticated by the Ministry of Labor from the representative company of the workers in a labor recruitment service to perform in his favor.</p>\r\n\r\n<p><strong>Orientation</strong><br />\r\nThe orientation classes are mandatory, organized by the government-registered orientation institute to inform all the responsibilities during duties and required terms and conditions while at work. It helps to create information regarding the working environment, awareness, and establish friendly relations between employer and employee.</p>\r\n\r\n<p><strong>Department Formalities</strong><br />\r\nThe recruiting service collaborates with the selected candidates in achieving their passports by providing them with short notice. Moreover, the recruitment agency has the authority to arrange the visa as the chasing of visa on the passport of the selected candidates with the better association of employer. We send all those documents of selected applicants for visa processing who are physically and mentally fit.</p>', '1641992937_Visa-Processing.jpg', NULL, '2022-01-06 04:31:39', '2022-01-12 07:23:57'),
(5, 'Saudi Visa Process', 'saudi-visa-process', 5, '<p>Candidates must provide their actual signed passports, including a copy of personal information. The passport must be valid for the next six months.</p>\r\n\r\n<p>The following stepwise process should be followed by the candidates for the recruitment process in Saudi Arabia:</p>\r\n\r\n<ul>\r\n	<li>All the legal documents in specified format should be provided by employers to us after getting attestations from the Chamber of Commerce and Foreign Affairs Ministry (MOFA) of Saudi Arabia.</li>\r\n	<li>The candidates must get a job offer letter from the Care Professional Service Pvt. Ltd before applying for the work permit.</li>\r\n	<li>Our company Care Professional Service selects the candidates as per the demand.</li>\r\n	<li>The required documents of candidates must be filled out along with their medical report and original passports which should be submitted to the Saudi embassy.&nbsp;</li>\r\n	<li>The clearance of the payments must be done.</li>\r\n	<li>In the final, candidates must wait until the visa comes.&nbsp;</li>\r\n</ul>', NULL, NULL, '2022-01-06 04:31:54', '2022-01-12 05:55:36'),
(6, 'Malaysia Visa Process', 'malaysia-visa-process', 6, '<p>Malaysia visa processing allows manpower to permit to be employed in Malaysia for a particular period. Care Professional Service Pvt. Ltd allows work permits to the candidates to take up employment legally in Malaysia.</p>\r\n\r\n<p>The candidate must fulfill the following criteria to be eligible for the work visa in Malaysia:</p>\r\n\r\n<ul>\r\n	<li>Those candidates must have a valid passport.</li>\r\n	<li>The passport must have a minimum validity of 18 months.</li>\r\n	<li>The candidates who are applying to work in Malaysia must be 27 years.</li>\r\n</ul>\r\n\r\n<p>The candidate must get a job offer letter from the Care Professional Service Pvt. Ltd before applying for the work permit. All the required documents of candidates must be filled out along with the required documents and the clearance of the payments must be done. Now, candidates must wait until the visa comes.</p>', NULL, NULL, '2022-01-06 04:32:09', '2022-01-12 06:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `order`, `content`, `image_name`, `hide`, `created_at`, `updated_at`) VALUES
(1, 'Training', 'training', 2, '<p>We continuously improve the specific characters to implement the mission of the workplace along with their performance. Our company prepares candidates to meet every requirement of the employees and delivers the right kind of people to the right job.</p>\r\n\r\n<blockquote>\r\n<p>We warrant your success!</p>\r\n</blockquote>\r\n\r\n<p>To find quality job opportunities for people, whether they are skilled or unskilled, we trained those people to make them professionally fit. We trained the people to supply efficient and honorable youth as per the company demand. We aim for people to fit professionally by enhancing their skills and specialization in the various fields as per our training session.</p>\r\n\r\n<p>Our organization has that potentiality that helps in the improvement in the productivity of the manpower for the required position in the respective company.</p>\r\n\r\n<ol>\r\n	<li>Training and development are special features of human resources management that help to fulfill the expected performance in the required company.</li>\r\n	<li>&nbsp;It occurs at various levels of the organization and helps manpower in attaining diverse goals.</li>\r\n	<li>Care professional service is responsible for identifying the needs of the manpower with the cooperation of the respective industry.</li>\r\n	<li>&nbsp;We focus on analyzing and resolving performance issues and learning the solutions to our clients that may be completed during work or off-work for a specific time.</li>\r\n	<li>We give the full information about the responsibility that a manpower needs, which also helps in the improvement of organizational performance.</li>\r\n</ol>\r\n\r\n<p>Employee training and their development are one of the most important parts for both skilled and unskilled manpower in achieving either short-term or long-term goals and objectives. Care Professional Service&nbsp;provides training to increase the employee&rsquo;s confidence and motivation. Our organization provides the full information on skills, knowledge, and feelings&nbsp;required for foreign employment. We are always responsible to provide quality services to you that meet with the respective company.</p>', '1641817238_Training for foreign employment.jpg', NULL, '2021-10-02 04:10:23', '2022-01-10 08:33:45'),
(2, 'Recruitment', 'recruitment', 1, '<p>As a leading recruitment agency in Nepal, we believe in recruiting the best candidates for our clients and providing opportunities for deserving candidates. On receipt of all mandatory documents from the candidates, we offer to the Department of Foreign Employment to take permission from the government and they may contact the employees for the verification of the documents. Pre-approval is authenticated from the Department of Foreign Employment by receiving the demand letter from the employer.</p>\r\n\r\n<p>Pre-screening of candidates goes forward by getting the pre-approval for recruitment from the Department of Foreign Employment of Nepal. Screening the suitable candidates through biodata to initial processing for applying, will be collected from applicants; an interview and trade test will be conducted by the agency representative under the given selection criteria by the employer. The candidates are prescreened by respected companies. In such cases, we carry out interviews for employers&nbsp;who are traveling to foreign countries to arrange their employment destination. The request letter that is performed by the Department of Foreign Employment (DOFE) is published in the national daily/weekly newspaper for assembling the documents.</p>\r\n\r\n<p>Care Professional Service Pvt. Ltd uses various tools such as the internet, SMS, telephone, etc. to characterize and accumulate documents. All the selected candidates will be sent to the medical center for the full medical examination and vaccination. Those candidates who are medically and physically fit for employment are forwarded for the recruitment process to sign the employment contract then after the further visa procedures. We send all those documents of selected applicants for visa processing who are physically and mentally fit.</p>\r\n\r\n<p>The orientation classes are mandatory, organized by the government-registered orientation institute, which plays a significant role in briefing all the workers about the jobs, safety, and rules and regulations of the respective country. It helps to create awareness and establish friendly relations between employer and employee. As soon as the visa got approved, we request our travel agency for ticket booking or directly request the concerned airline to confirm seats to the nearest airport of the authorized country. We have our dedicated travel agency that will assist our candidates during the travel.<br />\r\n&nbsp;</p>', '1633362191_Best website design company in Nepal.jpeg', 'yes', '2021-10-02 06:31:24', '2022-01-12 03:20:18'),
(6, 'Travel Management', 'travel-management', 4, '<p>Travel management is the process of connecting the employee&rsquo;s corporate travel and tracking the employee&rsquo;s needs, requirements, and other necessities. &nbsp;Care Professional service provides the services and planning including the process of examining employees for the maintenance and acceptance of travel management. We look after the travel expenses for our workers at a reasonable price.</p>\r\n\r\n<p>After receiving the required documents for the employment contract from the employer, the documents such as passport and visa will be handed over to the travel agent so as to make the flight acceptance at the right time. A copy of the employment contract of service harmony mentioning offered salary and schedule of advantages to the workers together with accommodation, food, and health facilities should be legally authorized. &nbsp;Employment contract, respective company, and the employer only copy signed and stamped by the sponsor. We have our exclusive travel agency that will provide proper collaboration to candidates during the travel. As soon as the visa got approved, we give ticket booking to our travel agency or directly to the concerned airline to confirm seats to the nearest airport of the authorized country. After the flight authentication, we send flight details to our employer requesting them for airport pick-up and also the adjustment of hotels.</p>\r\n\r\n<p>Professional service specializes in the policies for specific employees and the system related to travel management. It allows workers to be comfortable while traveling. So, there is the necessity to conduct a travel management assessment to ensure that the right management process is given to the candidates. This will help in enhancing the worker&#39;s courage. Moreover, it provides services that meet within the respective industries. Without better travel management employees sometimes feel uncomfortable in their new position. That&rsquo;s why encouraging employee confidence and adapting faster while traveling plays a significant role.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '1641815053_Travel Management Services in Nepal.jpg', NULL, '2022-01-03 02:35:42', '2022-01-10 05:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `extra1`, `extra2`, `created_at`, `updated_at`) VALUES
(1, 'https://facebook.com/ittradersnepal202', 'https://twitter.com/ittraders2018', 'https://instagram.com/ittradersnepal20', 'https://linkedin.com/in/ittraders2018', NULL, NULL, NULL, '2021-10-19 19:17:40', '2021-10-10 08:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `specializes`
--

CREATE TABLE `specializes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `construction1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction8` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction9` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction10` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction11` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction12` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction13` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction14` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction15` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializes`
--

INSERT INTO `specializes` (`id`, `title`, `construction1`, `construction2`, `construction3`, `construction4`, `construction5`, `construction6`, `construction7`, `construction8`, `construction9`, `construction10`, `construction11`, `construction12`, `construction13`, `construction14`, `construction15`, `created_at`, `updated_at`) VALUES
(1, 'Construction', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-12-01 09:26:42'),
(2, 'Hotel', 'Hotel1', 'Hotel1', 'Hotel1', 'Hotel1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-12-01 09:26:51'),
(3, 'Security', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(4, 'School', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(5, 'Supermarket', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(6, 'Diary', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(7, 'Industrial', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(8, 'Transport', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(9, 'Laundry', 'lau', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(10, 'Garment', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(11, 'Agriculture', 'Civil Engineering', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12'),
(12, 'Bank', 'Bank', 'Computer Engineering', 'Mechanical Engineer', 'Architecture Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 10:43:54', '2021-09-27 11:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `country`, `content`, `image_name`, `hide`, `created_at`, `updated_at`) VALUES
(2, 'Dulsco HR', 'Dubai', '<p>Whenever you are in need of quick and reasonable manpower services, I highly recommend Care Professional Service as they are supportive, motivating, and highly professional.</p>', '1641728453_Dulsco HR.png', NULL, '2021-10-01 11:27:54', '2022-01-09 05:55:53'),
(3, 'IT Traders Nepal', 'Nepal', '<p>Care Professional Service is providing us manpower for the last four years. We are fully satisfied with their efforts. They are specialized to supply manpower from Nepal to anywhere in the world.</p>', '1640506084_it-traders-nepal-logo.png', NULL, '2021-10-01 14:15:49', '2022-01-09 05:36:46'),
(4, 'Asad Al Ameed', 'Qatar', '<p>Care Professional Service is a professional recruitment agency that gives supportable feedback to clients. They are very efficient, approachable, and provide exceptional service.</p>', '1641728771_Abd-El-Kader.jpg', NULL, '2021-10-01 14:26:25', '2022-01-12 07:12:58'),
(7, 'Dubai Duty Free', 'Dubai', '<p>I have been lucky enough to be a part of one of the leading manpower recruitment agencies in Nepal. I feel proud that I have been working for a responsive manpower service for many years.</p>', '1641728345_Dubai Duty Free.png', NULL, '2021-12-26 02:31:27', '2022-01-12 07:11:34'),
(8, 'Ram Bahabur', 'Nepal', '<p>I have been entirely impressed throughout the whole recruitment process. I successfully started my new career in United Arab Emirates (UAE) with the help of Care Professional Service.</p>', '1641728359_Nepali Topi.jpg', NULL, '2022-01-09 05:50:02', '2022-01-09 06:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_number` int(11) NOT NULL,
  `published_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_logins`
--
ALTER TABLE `admin_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legals`
--
ALTER TABLE `legals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializes`
--
ALTER TABLE `specializes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_logins`
--
ALTER TABLE `admin_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `legals`
--
ALTER TABLE `legals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specializes`
--
ALTER TABLE `specializes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
