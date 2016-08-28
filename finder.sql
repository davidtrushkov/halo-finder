-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 05:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `arena_ranks`
--

CREATE TABLE IF NOT EXISTS `arena_ranks` (
`id` int(10) unsigned NOT NULL,
  `rank_id` int(11) NOT NULL,
  `rank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tear_id` int(11) NOT NULL,
  `iconImageUrl` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `arena_ranks`
--

INSERT INTO `arena_ranks` (`id`, `rank_id`, `rank_name`, `tear_id`, `iconImageUrl`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bronze', 1, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_bronze_array01-c68c7e495d124eba8343c0874d74cd36.png', NULL, NULL),
(2, 1, 'Bronze', 2, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_bronze_array02-431098c768ef4832b5d925ba06efbe70.png', NULL, NULL),
(3, 1, 'Bronze', 3, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_bronze_array03-be10288e2f534c4ebd990769ebb98205.png', NULL, NULL),
(4, 1, 'Bronze', 4, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_bronze_array04-961414ccdf8a4e5c8a5f9222f3f28ef3.png', NULL, NULL),
(5, 1, 'Bronze', 5, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_bronze_array05-ee28f7cd7ef1456cba392ca10b947961.png', NULL, NULL),
(6, 1, 'Bronze', 6, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_bronze_array06-b9c70a4d151846d590e38b67ae0000e7.png', NULL, NULL),
(7, 2, 'Silver', 1, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_silver_array01-b4739333586340bda2eed6099e630f92.png', NULL, NULL),
(8, 2, 'Silver', 2, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_silver_array02-bbdda8849cd247219a78446423790d4c.png', NULL, NULL),
(9, 2, 'Silver', 3, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_silver_array03-6849dd95d8f2408188412ce2e33c137b.png', NULL, NULL),
(10, 2, 'Silver', 4, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_silver_array04-42293fba165048e8ac847898376f5653.png', NULL, NULL),
(11, 2, 'Silver', 5, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_silver_array05-03f6dcc3b26542daadba4b0d7c988d53.png', NULL, NULL),
(12, 2, 'Silver', 6, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_silver_array06-8e3ab3d5ce5d4f27af827e52e1837439.png', NULL, NULL),
(13, 3, 'Gold', 1, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_gold_array01-5053cd291bb74d6a852f0cb90a62195e.png', NULL, NULL),
(14, 3, 'Gold', 2, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_gold_array02-b68d8b0ec47f4ed689d6149959b74853.png', NULL, NULL),
(15, 3, 'Gold', 3, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_gold_array03-bcbc2b460a934f10b499ee7f9bec6315.png', NULL, NULL),
(16, 3, 'Gold', 4, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_gold_array04-3e368546454941e7be9662bb893d80ed.png', NULL, NULL),
(17, 3, 'Gold', 5, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_gold_array05-257a761c7c91418aaa03e2f68e57b117.png', NULL, NULL),
(18, 3, 'Gold', 6, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_gold_array06-89344b204245450d815f0e22ec3d4b1e.png', NULL, NULL),
(19, 4, 'Platinum', 1, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_platinum_array01-c8df3dc366ea49209762f9b08189ffa6.png', NULL, NULL),
(20, 4, 'Platinum', 2, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_platinum_array02-b405ecb131fd424daf54a9c65637e0ad.png', NULL, NULL),
(21, 4, 'Platinum', 3, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_platinum_array03-6bbe1ab4c33245deb98306c02af52b26.png', NULL, NULL),
(22, 4, 'Platinum', 4, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_platinum_array04-a6b2cf1f15164557a35df91f0f5f2e85.png', NULL, NULL),
(23, 4, 'Platinum', 5, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_platinum_array05-fe21b9454a2944e593f9012da06810f3.png', NULL, NULL),
(24, 4, 'Platinum', 6, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_platinum_array06-05c733f15d1b4101ba2b04d1eb56df63.png', NULL, NULL),
(25, 5, 'Diamond', 1, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_diamond_array01-9721d95b267942dcb1edcce6dfc25631.png', NULL, NULL),
(26, 5, 'Diamond', 2, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_diamond_array02-02e21757b59540f7a9b7d39656ab855d.png', NULL, NULL),
(27, 5, 'Diamond', 3, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_diamond_array03-b740122fc19c4e829bb8c8fda023a1f9.png', NULL, NULL),
(28, 5, 'Diamond', 4, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_diamond_array04-7848018cc29c43bf932b9c03b19ed766.png', NULL, NULL),
(29, 5, 'Diamond', 5, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_diamond_array05-539c69e9f27e4e8bbf9a52d9755dce7c.png', NULL, NULL),
(30, 5, 'Diamond', 6, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_diamond_array06-b64e6ab9c4864c0f8848554853892fab.png', NULL, NULL),
(31, 6, 'Onyx', 1, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_top_array00-783f32318c8c49eda0365c5daa50f5b6.png', NULL, NULL),
(32, 7, 'Champion', 1, 'https://content.halocdn.com/media/Default/games/halo-5-guardians/csr/csr_top_array01-3755e5127c9c46368e648d58da44390e.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_20_020358_create_player_ranks_table', 1),
('2016_08_21_165651_create_arena_ranks_table', 1),
('2016_08_21_165723_create_playlist_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlist_table`
--

CREATE TABLE IF NOT EXISTS `playlist_table` (
`id` int(10) unsigned NOT NULL,
  `playlistId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `playlist_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `playlist_table`
--

INSERT INTO `playlist_table` (`id`, `playlistId`, `playlist_name`, `created_at`, `updated_at`) VALUES
(1, 'f72e0ef0-7c4a-4307-af78-8e38dac3fdba', 'Breakout', NULL, NULL),
(2, '892189e9-d712-4bdb-afa7-1ccab43fbed4', 'Slayer ', NULL, NULL),
(3, 'c98949ae-60a8-43dc-85d7-0feb0b92e719', 'Team Arena', NULL, NULL),
(4, 'b617e24f-71aa-432b-a8a0-a9b417a3d47e', 'Warzone Turbo', NULL, NULL),
(5, 'd0766624-dbd7-4536-ba39-2d890a6143a9', 'Free-for-All', NULL, NULL),
(6, '2323b76a-db98-4e03-aa37-e171cfbdd1a4', 'SWAT', NULL, NULL),
(7, 'd3bfda9f-14c2-44bc-9068-d3403bd5a059', 'Doubles', NULL, NULL),
(8, 'bc0f8ad6-31e6-4a18-87d9-ad5a2dbc8212', 'Super Fiesta', NULL, NULL),
(9, '2e812e09-912f-458b-a659-4ccb84232c65', 'Social Slayer', NULL, NULL),
(10, 'b5d5a242-ffa5-4d88-a229-5031916be036', 'Social Multi-team', NULL, NULL),
(11, 'b50c4dc2-6c86-4d79-aa8a-23a65da292c6', 'Warzone', NULL, NULL),
(12, '0e39ead4-383b-4452-bbd4-babb7becd82e', 'Warzone Assault', NULL, NULL),
(13, '0bcf2be1-3168-4e42-9fb5-3551d7dbce77', 'Big Team Battle', NULL, NULL),
(14, '819eb188-1a1c-48b4-9af3-283d2447ff6f', 'Social Shotty Snipers', NULL, NULL),
(15, '5728f612-3f20-4459-98bd-3478c79c4861', 'Social Doubles', NULL, NULL),
(16, '88b7de19-113c-4beb-af7f-8553aeda3f4c', 'Social Rumble Rockets', NULL, NULL),
(17, '7385b4a1-86bf-4aec-b9c2-411a6aa48633', 'Social Snipers', NULL, NULL),
(18, '780cc101-005c-4fca-8ce7-6f36d7156ffe', 'Big Team Battle', NULL, NULL),
(19, 'd21c8381-26f1-4d65-832a-ef9fa0854eb5', 'Social CTF', NULL, NULL),
(20, '355dc154-9809-4edb-8ed4-fff910c6ae9c', 'Grifball', NULL, NULL),
(21, '0504ca3c-de41-48f3-b9c8-3aab534d69e5', 'Social Assault', NULL, NULL),
(22, '86587043-e5b3-44ec-a478-261d61b30b2d', 'FFA SWAT', NULL, NULL),
(23, '84d7dafa-0419-4e6f-a990-4987ae57611c', 'Infection', NULL, NULL),
(24, '14bdff11-2742-486b-b26a-4255b137752f', 'Warzone Firefight Beta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
`id` int(10) unsigned NOT NULL,
  `startXp` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `startXp`, `rank_id`, `rank`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 1, NULL, NULL),
(2, 300, 2, 2, NULL, NULL),
(3, 3600, 3, 3, NULL, NULL),
(4, 6600, 4, 4, NULL, NULL),
(5, 10700, 5, 5, NULL, NULL),
(6, 13700, 6, 6, NULL, NULL),
(7, 17500, 7, 7, NULL, NULL),
(8, 22500, 8, 8, NULL, NULL),
(9, 28500, 9, 9, NULL, NULL),
(10, 37000, 10, 10, NULL, NULL),
(11, 41000, 11, 11, NULL, NULL),
(12, 47000, 12, 12, NULL, NULL),
(13, 54500, 13, 13, NULL, NULL),
(14, 63500, 14, 14, NULL, NULL),
(15, 74500, 15, 15, NULL, NULL),
(16, 87000, 16, 16, NULL, NULL),
(17, 101500, 17, 17, NULL, NULL),
(18, 118000, 18, 18, NULL, NULL),
(19, 137000, 19, 19, NULL, NULL),
(20, 160000, 20, 20, NULL, NULL),
(21, 167000, 21, 21, NULL, NULL),
(22, 176000, 22, 22, NULL, NULL),
(23, 187500, 23, 23, NULL, NULL),
(24, 201000, 24, 24, NULL, NULL),
(25, 217000, 25, 25, NULL, NULL),
(26, 236000, 26, 26, NULL, NULL),
(27, 258000, 27, 27, NULL, NULL),
(28, 282500, 28, 28, NULL, NULL),
(29, 310000, 29, 29, NULL, NULL),
(30, 340000, 30, 30, NULL, NULL),
(31, 349500, 31, 31, NULL, NULL),
(32, 361500, 32, 32, NULL, NULL),
(33, 376500, 33, 33, NULL, NULL),
(34, 394000, 34, 34, NULL, NULL),
(35, 414500, 35, 35, NULL, NULL),
(36, 438000, 36, 36, NULL, NULL),
(37, 464000, 37, 37, NULL, NULL),
(38, 493000, 38, 38, NULL, NULL),
(39, 525500, 39, 39, NULL, NULL),
(40, 562000, 40, 40, NULL, NULL),
(41, 574000, 41, 41, NULL, NULL),
(42, 589000, 42, 42, NULL, NULL),
(43, 607500, 43, 43, NULL, NULL),
(44, 629000, 44, 44, NULL, NULL),
(45, 654000, 45, 45, NULL, NULL),
(46, 682000, 46, 46, NULL, NULL),
(47, 713500, 47, 47, NULL, NULL),
(48, 748500, 48, 48, NULL, NULL),
(49, 786500, 49, 49, NULL, NULL),
(50, 828000, 50, 50, NULL, NULL),
(51, 873000, 51, 51, NULL, NULL),
(52, 922000, 52, 52, NULL, NULL),
(53, 975500, 53, 53, NULL, NULL),
(54, 1035000, 54, 54, NULL, NULL),
(55, 1100000, 55, 55, NULL, NULL),
(56, 1115000, 56, 56, NULL, NULL),
(57, 1135000, 57, 57, NULL, NULL),
(58, 1155000, 58, 58, NULL, NULL),
(59, 1180000, 59, 59, NULL, NULL),
(60, 1210000, 60, 60, NULL, NULL),
(61, 1245000, 61, 61, NULL, NULL),
(62, 1280000, 62, 62, NULL, NULL),
(63, 1320000, 63, 63, NULL, NULL),
(64, 1365000, 64, 64, NULL, NULL),
(65, 1415000, 65, 65, NULL, NULL),
(66, 1465000, 66, 66, NULL, NULL),
(67, 1520000, 67, 67, NULL, NULL),
(68, 1580000, 68, 68, NULL, NULL),
(69, 1645000, 69, 69, NULL, NULL),
(70, 1720000, 70, 70, NULL, NULL),
(71, 1735000, 71, 71, NULL, NULL),
(72, 1755000, 72, 72, NULL, NULL),
(73, 1780000, 73, 73, NULL, NULL),
(74, 1810000, 74, 74, NULL, NULL),
(75, 1845000, 75, 75, NULL, NULL),
(76, 1885000, 76, 76, NULL, NULL),
(77, 1930000, 77, 77, NULL, NULL),
(78, 1975000, 78, 78, NULL, NULL),
(79, 2025000, 79, 79, NULL, NULL),
(80, 2080000, 80, 80, NULL, NULL),
(81, 2140000, 81, 81, NULL, NULL),
(82, 2205000, 82, 82, NULL, NULL),
(83, 2275000, 83, 83, NULL, NULL),
(84, 2355000, 84, 84, NULL, NULL),
(85, 2440000, 85, 85, NULL, NULL),
(86, 2465000, 86, 86, NULL, NULL),
(87, 2490000, 87, 87, NULL, NULL),
(88, 2520000, 88, 88, NULL, NULL),
(89, 2555000, 89, 89, NULL, NULL),
(90, 2595000, 90, 90, NULL, NULL),
(91, 2640000, 91, 91, NULL, NULL),
(92, 2690000, 92, 92, NULL, NULL),
(93, 2745000, 93, 93, NULL, NULL),
(94, 2805000, 94, 94, NULL, NULL),
(95, 2870000, 95, 95, NULL, NULL),
(96, 2940000, 96, 96, NULL, NULL),
(97, 3015000, 97, 97, NULL, NULL),
(98, 3095000, 98, 98, NULL, NULL),
(99, 3180000, 99, 99, NULL, NULL),
(100, 3270000, 100, 100, NULL, NULL),
(101, 3300000, 101, 101, NULL, NULL),
(102, 3335000, 102, 102, NULL, NULL),
(103, 3375000, 103, 103, NULL, NULL),
(104, 3420000, 104, 104, NULL, NULL),
(105, 3470000, 105, 105, NULL, NULL),
(106, 3530000, 106, 106, NULL, NULL),
(107, 3595000, 107, 107, NULL, NULL),
(108, 3665000, 108, 108, NULL, NULL),
(109, 3740000, 109, 109, NULL, NULL),
(110, 3820000, 110, 110, NULL, NULL),
(111, 3905000, 111, 111, NULL, NULL),
(112, 3995000, 112, 112, NULL, NULL),
(113, 4090000, 113, 113, NULL, NULL),
(114, 4200000, 114, 114, NULL, NULL),
(115, 4320000, 115, 115, NULL, NULL),
(116, 4355000, 116, 116, NULL, NULL),
(117, 4395000, 117, 117, NULL, NULL),
(118, 4440000, 118, 118, NULL, NULL),
(119, 4495000, 119, 119, NULL, NULL),
(120, 4555000, 120, 120, NULL, NULL),
(121, 4620000, 121, 121, NULL, NULL),
(122, 4690000, 122, 122, NULL, NULL),
(123, 4765000, 123, 123, NULL, NULL),
(124, 4845000, 124, 124, NULL, NULL),
(125, 4935000, 125, 125, NULL, NULL),
(126, 5025000, 126, 126, NULL, NULL),
(127, 5120000, 127, 127, NULL, NULL),
(128, 5220000, 128, 128, NULL, NULL),
(129, 5330000, 129, 129, NULL, NULL),
(130, 5475000, 130, 130, NULL, NULL),
(131, 5520000, 131, 131, NULL, NULL),
(132, 5575000, 132, 132, NULL, NULL),
(133, 5640000, 133, 133, NULL, NULL),
(134, 5710000, 134, 134, NULL, NULL),
(135, 5790000, 135, 135, NULL, NULL),
(136, 5880000, 136, 136, NULL, NULL),
(137, 5980000, 137, 137, NULL, NULL),
(138, 6085000, 138, 138, NULL, NULL),
(139, 6200000, 139, 139, NULL, NULL),
(140, 6325000, 140, 140, NULL, NULL),
(141, 6460000, 141, 141, NULL, NULL),
(142, 6615000, 142, 142, NULL, NULL),
(143, 6800000, 143, 143, NULL, NULL),
(144, 7050000, 144, 144, NULL, NULL),
(145, 7750000, 145, 145, NULL, NULL),
(146, 9000000, 146, 146, NULL, NULL),
(147, 11050000, 147, 147, NULL, NULL),
(148, 14000000, 148, 148, NULL, NULL),
(149, 18000000, 149, 149, NULL, NULL),
(150, 24000000, 150, 150, NULL, NULL),
(151, 35000000, 151, 151, NULL, NULL),
(152, 50000000, 152, 152, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `gamertag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `gamertag`, `slug`, `email`, `password`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'OpTic MOSE', 'optic-mose', 'david@aol.com', '$2y$10$71R1uaHny9u/Ulj8NZ/j6eGLV.Rm49zHib.Mxji5v/qiEluemYLDK', '2016-08-27 22:40:16', 'rmcSWTSdJbTv5diHNQE7je1JlP2JY8mykSXRAk7ALizTk7dIQVESyeRfKeou', '2016-08-21 22:17:51', '2016-08-28 02:40:16'),
(2, 'sP Diversity', 'sp-diversity', 'davidisback4good@hotmail.com', '$2y$10$wCTD04.fGDQ9fpCKSblP4OIji.kYlO04ah1sIQyP2xo4KtB6SZ4OO', '2016-08-27 22:44:43', 'bGIlY19UioWCrACLD4S8QcE8aLhJlkjpMQBzFm6tocUYR6FtYeG4cTLzzqAC', '2016-08-21 22:22:40', '2016-08-28 02:44:43'),
(3, 'WagsMyTag', 'wagsmytag', 'wags@aol.com', '$2y$10$YWv5rNGPjF0vXV5E7qwJ6.OMEPwRRb/WohKuikpoYj.pY7JlM/7w6', '2016-08-27 22:42:55', NULL, '2016-08-28 02:42:55', '2016-08-28 02:42:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arena_ranks`
--
ALTER TABLE `arena_ranks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `playlist_table`
--
ALTER TABLE `playlist_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_gamertag_unique` (`gamertag`), ADD UNIQUE KEY `users_slug_unique` (`slug`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arena_ranks`
--
ALTER TABLE `arena_ranks`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `playlist_table`
--
ALTER TABLE `playlist_table`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
