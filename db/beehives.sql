-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 01:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beehives`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `subtitle`, `description`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Investir dans l\'immobilier,', 'devrait être pour tout le monde', 'Plus d\'excuses pour ne pas investir dans l\'immobilier.\r\nCa prend 5 min pour créer ton compte et c\'est gratuit.', '11.png', '2021-07-01 10:20:03', '2021-07-01 10:20:03'),
(12, 'Cost for your home renovation project', 'sDV', 'Plus d\'excuses pour ne pas investir dans l\'immobilier. Ca prend 5 min pour créer ton compte et c\'est gratuit.', '12.png', '2021-07-03 00:01:20', '2021-07-06 12:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dijon', '2021-07-08 06:43:18', '2021-07-08 06:43:18'),
(3, 'Tours', '2021-07-08 06:47:59', '2021-07-08 06:47:59'),
(4, 'Grenoble', '2021-07-08 06:48:42', '2021-07-08 06:48:42'),
(5, 'Reims', '2021-07-08 06:48:54', '2021-07-08 06:48:54'),
(6, 'Toulon', '2021-07-08 06:49:01', '2021-07-08 06:49:01'),
(7, 'Nimes', '2021-07-08 06:49:06', '2021-07-08 06:49:06'),
(8, 'Brest', '2021-07-08 06:49:10', '2021-07-08 06:49:10'),
(9, 'Metz', '2021-07-08 06:49:16', '2021-07-08 06:49:16'),
(10, 'Caen', '2021-07-08 06:49:22', '2021-07-08 06:49:22'),
(11, 'Le Mans', '2021-07-08 06:49:35', '2021-07-08 06:49:35'),
(12, 'Rouens', '2021-07-08 06:52:23', '2021-07-08 06:52:23'),
(13, 'Avignon', '2021-07-08 06:52:38', '2021-07-08 06:52:38'),
(14, 'Aix-en-Provence', '2021-07-08 06:52:49', '2021-07-08 06:52:49'),
(15, 'Clermont-Ferrand', '2021-07-08 06:55:24', '2021-07-08 06:55:24'),
(16, 'Orleans', '2021-07-08 06:55:37', '2021-07-08 06:55:37'),
(17, 'Besancon', '2021-07-08 06:55:44', '2021-07-08 06:55:44'),
(18, 'Limoges', '2021-07-08 06:55:50', '2021-07-08 06:55:50'),
(19, 'Amiens', '2021-07-08 06:55:55', '2021-07-08 06:55:55'),
(20, 'Annecy', '2021-07-08 06:56:01', '2021-07-08 06:56:01'),
(21, 'Perpignan', '2021-07-08 06:56:08', '2021-07-08 06:56:08'),
(22, 'Villeurbanne', '2021-07-08 06:56:13', '2021-07-08 06:56:13'),
(23, 'Mulhouse', '2021-07-08 06:56:18', '2021-07-08 06:56:18'),
(24, 'Cretail', '2021-07-08 06:56:23', '2021-07-08 06:56:23'),
(25, 'Saint-Denis', '2021-07-08 06:56:32', '2021-07-08 06:56:32'),
(26, 'La Rochelle', '2021-07-08 06:56:38', '2021-07-08 06:56:38'),
(27, 'Nanterre', '2021-07-08 06:56:43', '2021-07-08 06:56:43'),
(28, 'Poitiers', '2021-07-08 06:56:50', '2021-07-08 06:56:50'),
(29, 'Argenteuil', '2021-07-08 06:56:56', '2021-07-08 06:56:56'),
(30, 'Montreuil', '2021-07-08 06:57:02', '2021-07-08 06:57:02'),
(31, 'Vitry-sur-Seine', '2021-07-08 06:57:08', '2021-07-08 06:57:08'),
(32, 'Tourcoing', '2021-07-08 06:57:13', '2021-07-08 06:57:13'),
(33, 'Pau', '2021-07-08 06:57:18', '2021-07-08 06:57:18'),
(34, 'Aubervilliers', '2021-07-08 06:57:23', '2021-07-08 06:57:23'),
(35, 'Roubaix', '2021-07-08 06:57:27', '2021-07-08 06:57:27'),
(36, 'Dunkirk', '2021-07-08 06:57:31', '2021-07-08 06:57:31'),
(37, 'Chambery', '2021-07-08 06:57:35', '2021-07-08 06:57:35'),
(38, 'Strasbourg', '2021-07-08 06:57:40', '2021-07-08 06:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `customer_documents`
--

CREATE TABLE `customer_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_documents`
--

INSERT INTO `customer_documents` (`id`, `user_id`, `pid`, `doc`, `created_at`, `updated_at`) VALUES
(1, 5, '134231412341241234', '1.png', '2021-07-08 11:41:39', '2021-07-08 11:41:39'),
(2, 6, '134231412341241234', '2.jpg', '2021-07-08 12:44:02', '2021-07-08 12:44:03'),
(3, 9, '134231412341241234', '3.html', '2021-07-09 07:59:20', '2021-07-09 07:59:21'),
(4, 4, '134231412341241234', '4.png', '2021-07-26 08:28:10', '2021-07-26 08:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 'how are you?', 'C', '2021-07-02 12:51:20', '2021-07-02 12:51:20'),
(3, 'Lorem Ipsum Dolor sit Amet Consecticur ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.', '2021-07-08 02:54:14', '2021-07-08 02:54:14'),
(4, 'Lorem Ipsum Dolor sit Amet Csdfonsecticur ?s', 'Lorem Ipsum Dolor sit Amet Consecticur ?', '2021-07-08 05:33:07', '2021-07-08 05:33:07'),
(5, 'Lorem Ipsum Dolor dfsit Amet Consecticur ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.', '2021-07-08 05:33:20', '2021-07-08 05:33:20'),
(6, 'Lorem Ipsum Dolor sitdf Amet Consecticur ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.', '2021-07-08 05:33:29', '2021-07-08 05:33:29'),
(7, 'assad', 'sadfsadf', '2021-07-08 05:37:49', '2021-07-08 05:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `invests`
--

CREATE TABLE `invests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invests`
--

INSERT INTO `invests` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(4, 'paris', '4.jpg', '2021-07-08 06:07:26', '2021-07-08 06:07:26'),
(5, 'marseille', '5.jpg', '2021-07-08 06:07:42', '2021-07-08 06:07:42'),
(6, 'lyon', '6.jpg', '2021-07-08 06:07:58', '2021-07-08 06:07:58'),
(7, 'bordeaux', '7.jpg', '2021-07-08 06:08:09', '2021-07-08 06:08:09'),
(8, 'lille', '8.jpg', '2021-07-08 06:08:17', '2021-07-08 06:08:17'),
(9, 'nantes', '9.jpg', '2021-07-08 06:08:26', '2021-07-08 06:08:26'),
(10, 'montpellier', '10.jpg', '2021-07-08 06:08:34', '2021-07-08 06:08:34'),
(11, 'nice', '11.jpg', '2021-07-08 06:08:41', '2021-07-08 06:13:03'),
(12, 'rennes', '12.jpg', '2021-07-08 06:08:50', '2021-07-08 06:08:50'),
(13, 'saint-etienne', '13.jpg', '2021-07-08 06:08:59', '2021-07-08 06:08:59'),
(14, 'angers', '14.jpg', '2021-07-08 06:09:07', '2021-07-08 06:09:07'),
(15, 'le-havre', '15.jpg', '2021-07-08 06:09:14', '2021-07-08 06:09:14');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_06_28_161431_create_sessions_table', 1),
(7, '2021_07_01_114247_create_banners_table', 2),
(8, '2021_07_02_081134_create_works_table', 3),
(9, '2021_07_02_153931_create_work_steps_table', 4),
(13, '2021_07_02_175250_create_faqs_table', 6),
(14, '2021_07_03_061532_create_pricefrees_table', 7),
(15, '2021_07_03_075653_create_pricepremia_table', 8),
(17, '2021_07_05_053125_create_testimonials_table', 9),
(18, '2021_07_05_164206_create_invests_table', 10),
(19, '2021_07_06_095430_add_city_name_to_portfolios_table', 11),
(20, '2021_07_08_121424_create_cities_table', 12),
(21, '2021_07_08_151850_add_google_id_column', 13),
(22, '2021_07_08_164538_create_user_information_table', 14),
(23, '2021_07_08_170848_create_customer_documents_table', 15),
(24, '2021_07_23_173813_create_portfolio_images_table', 16),
(25, '2021_07_02_161222_create_portfolios_table', 17),
(26, '2021_08_03_222133_create_wallets_table', 18),
(27, '2021_08_03_222337_add_balance_to_users_table', 18);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minititle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniprice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_of_bricks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_desc_1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_desc_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_desc_3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `country`, `city_name`, `image`, `title`, `curr`, `price`, `minititle`, `curre`, `miniprice`, `ry`, `quantity_of_bricks`, `map`, `short_desc`, `long_desc`, `about_desc`, `next_desc_1`, `next_desc_2`, `next_desc_3`, `about_image_1`, `about_image_2`, `about_image_3`, `created_at`, `updated_at`) VALUES
(4, 'France', 'Paris', '4.jpg', 'Paris test house', '€', '260,000', 'Investissement moyen', '€', '130', '4.1%', '100', 'https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed', 'The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.', 'A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium, elit quis vehicula interdum, sem metus iaculis sapien, sed bibendum lectus augue eu metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium, elect quis.', 'Each month, a share of the rent, proportional to your investment, will come to your b.hives account.', NULL, NULL, '4.about-1.jpg', '4.about-2.jpg', '4.about-3.jpg', '2021-07-23 16:24:48', '2021-07-30 15:16:26'),
(5, 'Bangladesh', '4', '5.png', 'sadf', '€', '12', 'sadf', '€', 'sadf', 'sadf', 'df', 'sad', 'sad', 'sadf', 'sadf', 'sadfasdf', NULL, NULL, '5.about-1.png', '5.about-2.png', 'foo2', '2021-07-30 15:42:07', '2021-07-30 15:42:09'),
(6, 'asd', '3', '6.png', 'zxc', '€', '12', 'zxc', '€', '123', '4.1%', '123', 'as', 'sxfvsadfasd', 'xzcvxcvxz', 'szcvxcv', 'zsdfsadf', NULL, NULL, '6.about-1.png', '6.about-2.png', '6.about-3.png', '2021-07-31 07:25:34', '2021-07-31 07:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `multi_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `portfolio_id`, `multi_image`, `created_at`, `updated_at`) VALUES
(4, 4, '4-1.jpg', '2021-07-23 16:24:48', '2021-07-23 16:24:48'),
(5, 4, '4-2.jpg', '2021-07-23 16:24:48', '2021-07-23 16:24:48'),
(6, 4, '4-3.jpg', '2021-07-23 16:24:48', '2021-07-23 16:24:48'),
(7, 5, '5-1.png', '2021-07-30 15:42:10', '2021-07-30 15:42:10'),
(8, 6, '6-1.png', '2021-07-31 07:26:06', '2021-07-31 07:26:06'),
(9, 6, '6-2.jpg', '2021-07-31 07:26:06', '2021-07-31 07:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `pricefrees`
--

CREATE TABLE `pricefrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricefrees`
--

INSERT INTO `pricefrees` (`id`, `title`, `features`, `created_at`, `updated_at`) VALUES
(3, 'Try it as long as you like', 'Investissements locaux, Dashboard, Jusqu\'a 20 projets', '2021-07-08 05:02:38', '2021-07-08 05:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `pricepremia`
--

CREATE TABLE `pricepremia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricepremia`
--

INSERT INTO `pricepremia` (`id`, `title`, `price`, `features`, `created_at`, `updated_at`) VALUES
(3, 'Possibilités infinies', '4.80', 'Avantages du plan Free, Pas de frontières, Projets illimités, Premiers arrivés premiers servis, Projets premiums, Notifications en temps réel, Swap', '2021-07-08 05:10:22', '2021-07-08 05:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DC0XV0PZI9G92p9NwLmdbv8FGKEpWdYBIhdplBV6', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUm1CcXdNNWhTUk5tdE1pNDdsSzRLbHdET0V0bEVUREpkTTcxYVlHWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYWtlLWEtZGVwb3NpdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRwSURETkFES2pnRlZiUDRlTHNHcjEuQkg5dFNEZDFqNWZqTXh1RFY4VDYyUE9ZWVRXaU9KaSI7fQ==', 1628033625);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `profession`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(10, '10.png', 'Kate Jose', '(Business Advisor)', '10_logo.svg', '\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\"', '2021-07-08 04:54:36', '2021-07-08 04:54:36');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `currency` enum('€','£') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `role`, `google_id`, `created_at`, `updated_at`, `balance`, `currency`) VALUES
(1, 'Ahmed', 'admin@admin.com', '2021-07-14 16:41:52', '$2y$10$x7xUxGkAfkO.L8mV92Q.G.7DfetHT0vVXKJSWfkvt6g/fV6aFYNDO', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2021-07-05 19:26:47', '2021-06-30 03:24:51', 0, NULL),
(2, 'imtiaz ahmed', 'imtiazahmedbhuiyancit@gmail.com', '2021-07-23 16:41:55', '$2y$10$R7q58ezrVUmHl0dKjGrYuOAOs04B8cOXBMnIjAYemk4hJ/8SiRqMG', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2021-07-07 10:16:03', '2021-06-30 10:16:03', 0, NULL),
(3, 'New Admin', 'new@admin.com', '2021-07-11 16:41:59', '$2y$10$DW.7/lFbTebLF2cmSjL1futOpcdbbcPz33I1O0aOyAiXkR9H8WDFC', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2021-07-05 04:37:55', '2021-07-08 04:37:55', 0, NULL),
(4, 'Test', 'test@test.com', '2021-07-21 16:42:02', '$2y$10$pIDDNADKjgFVbP4eLsGr1.BH9tSDd1j5fjMxuDV8T62POYYTWiOJi', NULL, NULL, NULL, NULL, NULL, 'customer', NULL, '2021-07-04 08:33:06', '2021-07-08 08:33:06', 0, NULL),
(5, 'phpMailer TEster', 'phpmailert3@gmail.com', '2021-07-08 10:43:44', '$2y$10$jOmeAUdEQBu1h3OpcrJFku9omvhRbUeRgk.Xq10OUD8XsdpCUuNlG', NULL, NULL, '2uf1QLu3iZJMWtAXZAlo4VxkENBCkX8qDtwruH5OWQ4fgvCy8m3hW8wD2cRZ', NULL, NULL, 'customer', '104419255612893831672', '2021-07-08 09:55:16', '2021-07-08 10:43:44', 0, NULL),
(6, 'Shiplu', 'spu.rahman@gmail.com', '2021-07-08 12:41:39', '$2y$10$1ImKkl6/xRh8uXYFdftX5eTkuHcG7EQhBw9lZB0yZPK1OIm4oDs12', NULL, NULL, NULL, NULL, NULL, 'customer', NULL, '2021-07-08 12:41:08', '2021-07-08 12:41:39', 0, NULL),
(7, 'imtiaz ahmed', 'imtiazahmedbhuicsfsdfsdfsdfyancit@gmail.com', '2021-07-23 16:41:55', '$2y$10$R7q58ezrVUmHl0dKjGrYuOAOs04B8cOXBMnIjAYemk4hJ/8SiRqMG', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2021-07-07 10:16:03', '2021-06-30 10:16:03', 0, NULL),
(8, 'imtiaz ahmed', 'sadfsfasdfsadf@gmail.com', '2021-07-08 16:41:55', '$2y$10$R7q58ezrVUmHl0dKjGrYuOAOs04B8cOXBMnIjAYemk4hJ/8SiRqMG', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '2021-07-07 10:16:03', '2021-06-30 10:16:03', 0, NULL),
(9, 'sadfasdf', 'baadcoder@gmail.com', '2021-07-19 13:36:17', '$2y$10$yzwHN27gws1VJp9ldFSO9O9iTx.qg.XE8XhVvJKouWIBPDgmv2JLy', NULL, NULL, NULL, NULL, NULL, 'customer', NULL, '2021-07-09 07:29:53', '2021-07-09 07:29:53', 0, NULL),
(10, 'Jordi Wisoky Deja.Jenkins8', 'checker@checker.com', '2021-07-14 16:40:38', '$2y$10$9pHKKnUHnVWd0.eNl4f29u5MCPsoFmdT.S583M0LQ0GfPQ6iT9V.S', NULL, NULL, NULL, NULL, NULL, 'customer', NULL, '2021-07-09 10:40:27', '2021-07-09 10:40:27', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `user_id`, `full_name`, `dob`, `country`, `city`, `created_at`, `updated_at`) VALUES
(1, 5, 'Farahnaz Ahmed', '12/05/1990', 'Bangladesh', 'Dhaka-North', '2021-07-08 11:07:56', '2021-07-08 11:07:56'),
(2, 6, 'Maksudur Rahman', '12/05/1990', 'Albania', 'Bartonshire', '2021-07-08 12:41:59', '2021-07-08 12:41:59'),
(3, 9, 'sadfasdf', '2003-07-09', 'Andorra', 'Brookfurt', '2021-07-09 07:58:58', '2021-07-09 07:58:58'),
(4, 10, 'asdf', '2003-07-02', 'Akrotiri', 'sdfasdf', '2021-07-09 10:40:57', '2021-07-09 10:40:57'),
(5, 4, 'asdf', '2003-07-12', 'Armenia', 'asdfasdfsadf', '2021-07-26 08:28:00', '2021-07-26 08:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` enum('EUR','GBP') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','paid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `subtitle`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Une équipe', 'à ton écoute', 'Donec sed auctor orci. In a nisl vel nisi egestas efficitur nec ac neque. Sed vitae sollicitudin elit, ac tristique nisi.', '2.png', '2021-07-02 09:35:23', '2021-07-06 12:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `work_steps`
--

CREATE TABLE `work_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_steps`
--

INSERT INTO `work_steps` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Create your account on B.hives', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin eget velit ut sollicitudin. Nunc ullamcorper nibh nulla. In viverra id felis id tincidunt.', '3.png', '2021-07-07 12:29:16', '2021-07-07 12:29:16'),
(4, 'Start looking for projects that appeal to you.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin eget velit ut sollicitudin. Nunc ullamcorper nibh nulla. In viverra id felis id tincidunt.', '4.png', '2021-07-07 12:30:21', '2021-07-07 12:30:21'),
(5, 'Follow the evolution of your investments', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin eget velit ut sollicitudin. Nunc ullamcorper nibh nulla. In viverra id felis id tincidunt.', '5.png', '2021-07-07 12:31:07', '2021-07-07 12:31:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_documents`
--
ALTER TABLE `customer_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invests`
--
ALTER TABLE `invests`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricefrees`
--
ALTER TABLE `pricefrees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricepremia`
--
ALTER TABLE `pricepremia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_steps`
--
ALTER TABLE `work_steps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customer_documents`
--
ALTER TABLE `customer_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invests`
--
ALTER TABLE `invests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pricefrees`
--
ALTER TABLE `pricefrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricepremia`
--
ALTER TABLE `pricepremia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_steps`
--
ALTER TABLE `work_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
