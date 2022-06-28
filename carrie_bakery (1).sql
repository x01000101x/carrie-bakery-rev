-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2022 at 05:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrie_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_sellers`
--

CREATE TABLE `best_sellers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_sellers`
--

INSERT INTO `best_sellers` (`id`, `nama`, `deskripsi`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Roti Wortel', 'Roti Wortel Terenak Se Bogor Raya', 'best-sellers/June2022/HlITOTpBKASdheEbqBZy.jpeg', 'http://localhost:8000', '2022-06-18 10:12:53', '2022-06-18 10:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2022-05-24 22:30:31', '2022-05-24 22:30:31'),
(2, NULL, 1, 'Category 2', 'category-2', '2022-05-24 22:30:31', '2022-05-24 22:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(83, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(85, 13, 'selai', 'text', 'Selai', 0, 1, 1, 1, 1, 1, '{}', 3),
(86, 13, 'toping', 'text', 'Toping', 0, 1, 1, 1, 1, 1, '{}', 4),
(88, 13, 'jumlah', 'number', 'Jumlah', 0, 1, 1, 1, 1, 1, '{}', 6),
(89, 13, 'harga', 'text', 'Harga', 0, 1, 1, 1, 1, 1, '{}', 7),
(90, 13, 'gambar', 'image', 'Gambar', 0, 1, 1, 1, 1, 1, '{}', 8),
(91, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(92, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(100, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(101, 15, 'roti_nama', 'text', 'Roti Nama', 0, 1, 1, 1, 1, 1, '{}', 2),
(102, 15, 'roti_harga', 'number', 'Roti Harga', 0, 1, 1, 1, 1, 1, '{}', 3),
(103, 15, 'roti_gambar', 'image', 'Roti Gambar', 0, 1, 1, 1, 1, 1, '{}', 4),
(104, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(105, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(106, 15, 'roti_deskripsi', 'text', 'Roti Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 7),
(107, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(108, 16, 'selai_nama', 'text', 'Selai Nama', 0, 1, 1, 1, 1, 1, '{}', 2),
(109, 16, 'selai_harga', 'number', 'Selai Harga', 0, 1, 1, 1, 1, 1, '{}', 3),
(110, 16, 'selai_gambar', 'image', 'Selai Gambar', 0, 1, 1, 1, 1, 1, '{}', 4),
(111, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(112, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(113, 16, 'selai_deskripsi', 'text', 'Selai Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 7),
(121, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(122, 18, 'toping_nama', 'text', 'Toping Nama', 0, 1, 1, 1, 1, 1, '{}', 2),
(123, 18, 'toping_harga', 'number', 'Toping Harga', 0, 1, 1, 1, 1, 1, '{}', 3),
(124, 18, 'toping_gambar', 'image', 'Toping Gambar', 0, 1, 1, 1, 1, 1, '{}', 4),
(125, 18, 'toping_deskripsi', 'text', 'Toping Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 5),
(126, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(127, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(128, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(129, 19, 'produk_nama', 'text', 'Nama', 0, 1, 1, 1, 1, 1, '{}', 2),
(130, 19, 'produk_harga', 'number', 'Harga', 0, 1, 1, 1, 1, 1, '{}', 3),
(131, 19, 'produk_gambar', 'image', 'Gambar', 0, 1, 1, 1, 1, 1, '{}', 4),
(132, 19, 'produk_deskripsi', 'text', 'Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 5),
(133, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(134, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(135, 13, 'produk', 'text', 'Produk', 0, 1, 1, 1, 1, 1, '{}', 2),
(136, 13, 'roti', 'text', 'Roti', 1, 1, 1, 1, 1, 1, '{}', 3),
(137, 13, 'nama_pembeli', 'text', 'Nama Pembeli', 0, 1, 1, 1, 1, 1, '{}', 11),
(138, 13, 'notelp', 'number', 'Notelp', 0, 1, 1, 1, 1, 1, '{}', 12),
(139, 13, 'alamat', 'text', 'Alamat', 0, 1, 1, 1, 1, 1, '{}', 13),
(140, 13, 'dropship', 'text', 'Dropship', 0, 1, 1, 1, 1, 1, '{}', 14),
(141, 13, 'nama_pengirim', 'text', 'Nama Pengirim', 0, 1, 1, 1, 1, 1, '{}', 15),
(142, 19, 'link_blass', 'text', 'Link Blass', 0, 1, 1, 1, 1, 1, '{}', 8),
(143, 19, 'kategori', 'text', 'Kategori', 1, 1, 1, 1, 1, 1, '{}', 9),
(144, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(145, 20, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 2),
(146, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(147, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(148, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(149, 22, 'head', 'text', 'Head', 0, 1, 1, 1, 1, 1, '{}', 2),
(150, 22, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(151, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(152, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(153, 22, 'icon', 'text', 'Icon', 0, 1, 1, 1, 1, 1, '{}', 6),
(154, 23, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(155, 23, 'head', 'text', 'Head', 0, 1, 1, 1, 1, 1, '{}', 2),
(156, 23, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(157, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(158, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(159, 24, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(160, 24, 'nama', 'text', 'Nama', 0, 1, 1, 1, 1, 1, '{}', 2),
(161, 24, 'deskripsi', 'text', 'Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 3),
(162, 24, 'gambar', 'image', 'Gambar', 0, 1, 1, 1, 1, 1, '{}', 4),
(163, 24, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 5),
(164, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(165, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(166, 25, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(167, 25, 'nama', 'text', 'Nama', 0, 1, 1, 1, 1, 1, '{}', 2),
(168, 25, 'komen', 'text_area', 'Komen', 0, 1, 1, 1, 1, 1, '{}', 3),
(169, 25, 'lokasi', 'text', 'Lokasi', 0, 1, 1, 1, 1, 1, '{}', 4),
(170, 25, 'tanggal', 'date', 'Tanggal', 0, 1, 1, 1, 1, 1, '{}', 5),
(171, 25, 'gambar', 'image', 'Gambar', 0, 1, 1, 1, 1, 1, '{}', 6),
(172, 25, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(173, 25, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(174, 26, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(175, 26, 'gambar', 'image', 'Gambar', 0, 1, 1, 1, 1, 1, '{}', 2),
(176, 26, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(177, 26, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(178, 13, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{}', 16);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2022-05-24 22:30:16', '2022-05-24 22:30:16'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-05-24 22:30:16', '2022-05-24 22:30:16'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-05-24 22:30:17', '2022-05-24 22:30:17'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2022-05-24 22:30:29', '2022-05-24 22:30:29'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2022-05-24 22:30:31', '2022-05-24 22:30:31'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(13, 'orderans', 'orderans', 'Orderan', 'Orderans', 'voyager-bag', 'App\\Orderan', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-05-31 22:43:08', '2022-06-18 19:02:17'),
(15, 'rotis', 'rotis', 'Roti', 'Rotis', 'voyager-bread', 'App\\Roti', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-06 03:20:55', '2022-06-06 03:20:55'),
(16, 'selais', 'selais', 'Selai', 'Selais', 'voyager-droplet', 'App\\Selai', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-06 03:21:34', '2022-06-06 03:21:34'),
(18, 'topings', 'topings', 'Toping', 'Topings', 'voyager-pizza', 'App\\Toping', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-06 04:21:39', '2022-06-06 04:21:39'),
(19, 'produks', 'produks', 'Produk', 'Produks', 'voyager-file-text', 'App\\Produk', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-06 04:35:58', '2022-06-13 21:26:14'),
(20, 'sliders', 'sliders', 'Slider', 'Sliders', NULL, 'App\\Slider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-17 00:51:20', '2022-06-17 00:51:20'),
(21, 'mediaheading', 'mediaheading', 'Mediaheading', 'Mediaheadings', 'voyager-tag', 'App\\Mediaheading', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-17 02:42:41', '2022-06-17 02:42:41'),
(22, 'mediaheadings', 'mediaheadings', 'Mediaheading', 'Mediaheadings', 'voyager-tag', 'App\\Mediaheading', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-17 02:43:57', '2022-06-17 02:51:28'),
(23, 'titles', 'titles', 'Title', 'Titles', 'voyager-dot-3', 'App\\Title', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-17 03:41:17', '2022-06-17 03:41:17'),
(24, 'best_sellers', 'best-sellers', 'Best Seller', 'Best Sellers', 'voyager-chat', 'App\\BestSeller', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-18 09:31:12', '2022-06-18 09:41:32'),
(25, 'testimonis', 'testimonis', 'Testimoni', 'Testimonis', 'voyager-smile', 'App\\Testimoni', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-18 18:14:43', '2022-06-18 18:14:43'),
(26, 'partners', 'partners', 'Partner', 'Partners', 'voyager-study', 'App\\Partner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-18 18:28:45', '2022-06-18 18:28:45');

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
-- Table structure for table `mediaheadings`
--

CREATE TABLE `mediaheadings` (
  `id` int(10) UNSIGNED NOT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mediaheadings`
--

INSERT INTO `mediaheadings` (`id`, `head`, `description`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'Address', 'Pakuan Hill Livistona B 22, Bogor, Jawa Barat, Indonesia', '2022-06-17 02:44:00', '2022-06-17 02:52:31', 'fa fa-map'),
(2, 'Social Media', 'Instagram : carrie_bakery_official \r\nFacebook: carrie_bakery_official \r\nTikTok : maylindebora', '2022-06-17 02:48:00', '2022-06-17 03:25:39', 'fa fa-foursquare'),
(3, 'Call Us', 'WA : +62 813-8509-9236 \r\nTelp : (02511) 7561766', '2022-06-17 02:48:00', '2022-06-17 03:25:29', 'fa fa-phone');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-05-24 22:30:20', '2022-05-24 22:30:20'),
(2, 'Administrator', '2022-06-17 02:46:01', '2022-06-17 02:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2022-05-24 22:30:20', '2022-05-24 22:30:20', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2022-05-24 22:30:20', '2022-06-06 03:24:16', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 4, '2022-05-24 22:30:20', '2022-06-06 03:24:16', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 3, '2022-05-24 22:30:20', '2022-06-06 03:24:16', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2022-05-24 22:30:20', '2022-06-06 03:24:16', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2022-05-24 22:30:20', '2022-05-31 03:01:11', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2022-05-24 22:30:20', '2022-05-31 03:01:11', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2022-05-24 22:30:20', '2022-05-31 03:01:11', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2022-05-24 22:30:20', '2022-05-31 03:01:11', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 10, '2022-05-24 22:30:20', '2022-06-06 03:24:16', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2022-05-24 22:30:30', '2022-06-06 03:24:16', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2022-05-24 22:30:33', '2022-06-06 03:24:16', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2022-05-24 22:30:36', '2022-06-06 03:24:16', 'voyager.pages.index', NULL),
(18, 1, 'Carrie Bakery', '', '_self', 'voyager-code', '#000000', NULL, 2, '2022-05-31 22:23:32', '2022-05-31 22:26:36', NULL, ''),
(19, 1, 'Orderans', '', '_self', 'voyager-bag', NULL, 18, 2, '2022-05-31 22:43:08', '2022-06-06 04:36:16', 'voyager.orderans.index', NULL),
(21, 1, 'Rotis', '', '_self', 'voyager-bread', NULL, 18, 3, '2022-06-06 03:20:55', '2022-06-06 04:36:16', 'voyager.rotis.index', NULL),
(22, 1, 'Selais', '', '_self', 'voyager-droplet', NULL, 18, 4, '2022-06-06 03:21:36', '2022-06-06 04:36:16', 'voyager.selais.index', NULL),
(24, 1, 'Topings', '', '_self', 'voyager-pizza', NULL, 18, 5, '2022-06-06 04:21:40', '2022-06-06 04:36:16', 'voyager.topings.index', NULL),
(25, 1, 'Produks', '', '_self', 'voyager-file-text', NULL, 18, 1, '2022-06-06 04:35:59', '2022-06-06 04:36:12', 'voyager.produks.index', NULL),
(26, 1, 'Sliders', '', '_self', NULL, NULL, NULL, 11, '2022-06-17 00:51:21', '2022-06-17 00:51:21', 'voyager.sliders.index', NULL),
(28, 1, 'Mediaheadings', '', '_self', 'voyager-tag', NULL, NULL, 13, '2022-06-17 02:43:58', '2022-06-17 02:43:58', 'voyager.mediaheadings.index', NULL),
(29, 1, 'Titles', '', '_self', 'voyager-dot-3', NULL, NULL, 14, '2022-06-17 03:41:18', '2022-06-17 03:41:18', 'voyager.titles.index', NULL),
(30, 1, 'Best Sellers', '', '_self', 'voyager-chat', NULL, NULL, 15, '2022-06-18 09:31:13', '2022-06-18 09:31:13', 'voyager.best-sellers.index', NULL),
(31, 1, 'Testimonis', '', '_self', 'voyager-smile', NULL, NULL, 16, '2022-06-18 18:14:44', '2022-06-18 18:14:44', 'voyager.testimonis.index', NULL),
(32, 1, 'Partners', '', '_self', 'voyager-study', NULL, NULL, 17, '2022-06-18 18:28:45', '2022-06-18 18:28:45', 'voyager.partners.index', NULL);

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
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(35, '2016_01_01_000000_add_voyager_user_fields', 1),
(36, '2016_01_01_000000_create_data_types_table', 1),
(37, '2016_01_01_000000_create_pages_table', 1),
(38, '2016_01_01_000000_create_posts_table', 1),
(39, '2016_02_15_204651_create_categories_table', 1),
(40, '2016_05_19_173453_create_menu_table', 1),
(41, '2016_10_21_190000_create_roles_table', 1),
(42, '2016_10_21_190000_create_settings_table', 1),
(43, '2016_11_30_135954_create_permission_table', 1),
(44, '2016_11_30_141208_create_permission_role_table', 1),
(45, '2016_12_26_201236_data_types__add__server_side', 1),
(46, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(47, '2017_01_14_005015_create_translations_table', 1),
(48, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(49, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(50, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(51, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(52, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(53, '2017_08_05_000000_add_group_to_settings_table', 1),
(54, '2017_11_26_013050_add_user_role_relationship', 1),
(55, '2017_11_26_015000_create_user_roles_table', 1),
(56, '2018_03_11_000000_add_user_settings', 1),
(57, '2018_03_14_000000_add_details_to_data_types_table', 1),
(58, '2018_03_16_000000_make_settings_value_nullable', 1),
(59, '2019_08_19_000000_create_failed_jobs_table', 1),
(60, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(61, '2022_04_23_092002_create_sessions_table', 1),
(62, '2022_04_28_071937_create_rotis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderans`
--

CREATE TABLE `orderans` (
  `id` int(10) UNSIGNED NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dropship` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderans`
--

INSERT INTO `orderans` (`id`, `produk`, `roti`, `selai`, `toping`, `jumlah`, `harga`, `gambar`, `created_at`, `updated_at`, `nama_pembeli`, `notelp`, `alamat`, `dropship`, `nama_pengirim`, `status`) VALUES
(1, NULL, 'Wortel', 'Coklat', 'Almond', 5, 117500, 'produks/June2022/6rjKZw1V3tVO73BQYG5s.jpg', '2022-06-07 01:57:28', '2022-06-07 01:57:28', 'John Doe', '812345', 'Jl. Jalan Yuk', NULL, NULL, NULL),
(3, NULL, 'Wortel', 'Stroberi', 'Kismis', 5, 90000, 'produks/June2022/KesMOLi9akLQRNuJ3Igs.jpeg', '2022-06-07 07:03:22', '2022-06-07 07:03:22', 'Leo', '812345678', 'Jln. Jalan Yuk', 'on', 'Leo', NULL),
(4, 'Roti Kepang', 'Gandum', 'Stroberi', 'Almond', 2, 47000, 'produks/June2022/6rjKZw1V3tVO73BQYG5s.jpg', '2022-06-12 09:37:01', '2022-06-12 09:37:01', 'sada', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, NULL),
(5, 'Roti Kepang', 'Wortel', 'Coklat', 'Kismis', 2, 46000, 'produks/June2022/6rjKZw1V3tVO73BQYG5s.jpg', '2022-06-12 09:45:57', '2022-06-12 09:45:57', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Lemang', 'Gandum', 'Bluberi', 'Almond', 2, 40000, NULL, '2022-06-16 10:52:28', '2022-06-16 10:52:28', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, NULL),
(7, 'Roti Kepang', 'Gandum', 'Stroberi', 'Almond', 3, 66000, NULL, '2022-06-16 10:52:29', '2022-06-16 10:52:29', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, NULL),
(8, 'Lemang', 'Gandum', 'Bluberi', 'Almond', 2, 40000, NULL, '2022-06-16 10:53:21', '2022-06-16 10:53:21', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, NULL),
(9, 'Roti Kepang', 'Gandum', 'Stroberi', 'Almond', 3, 66000, NULL, '2022-06-16 10:53:21', '2022-06-16 10:53:21', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, NULL),
(10, 'Roti Kepang', 'Gandum', 'Stroberi', 'Kismis', 3, 66000, NULL, '2022-06-18 18:36:40', '2022-06-18 18:36:40', 'MedanMan', '081234578', 'Medan', 'on', 'Medan Man', NULL),
(11, 'Roti tawar', 'Wortel', 'Stroberi', 'Almond', 2, 34000, NULL, '2022-06-18 18:36:40', '2022-06-18 18:36:40', 'MedanMan', '081234578', 'Medan', 'on', 'Medan Man', NULL),
(12, 'Roti Kepang', 'Wortel', 'Stroberi', 'Kismis', 2, 44000, NULL, '2022-06-23 19:17:46', '2022-06-23 19:17:46', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(13, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:20:22', '2022-06-23 19:20:22', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(14, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:20:32', '2022-06-23 19:20:32', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(15, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:20:58', '2022-06-23 19:20:58', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(16, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:21:11', '2022-06-23 19:21:11', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(17, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:22:00', '2022-06-23 19:22:00', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(18, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:22:19', '2022-06-23 19:22:19', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(19, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:22:31', '2022-06-23 19:22:31', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(20, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:22:57', '2022-06-23 19:22:57', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(21, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:28:34', '2022-06-23 19:28:34', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(22, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:28:53', '2022-06-23 19:28:53', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(23, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:29:08', '2022-06-23 19:29:08', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(24, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:33:58', '2022-06-23 19:33:58', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(25, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:34:15', '2022-06-23 19:34:15', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(26, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:34:38', '2022-06-23 19:34:38', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(27, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:36:51', '2022-06-23 19:36:51', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(28, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:37:12', '2022-06-23 19:37:12', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked'),
(29, 'Roti tawar', 'Sobek', 'Stroberi', 'Kismis', 9, 423000, NULL, '2022-06-23 19:37:19', '2022-06-23 19:37:19', 'Daki', '0812345678', 'Jln. Jalan Yuk', NULL, NULL, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2022-05-24 22:30:37', '2022-05-24 22:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'partners/June2022/JpzaRjkz5yeIQMjcD7pz.png', '2022-06-18 18:29:57', '2022-06-18 18:29:57'),
(2, 'partners/June2022/xtiEZ6UIcfYjkjjS88TD.png', '2022-06-18 18:30:09', '2022-06-18 18:30:09'),
(3, 'partners/June2022/RrMIwvJUal8dt4LsA67j.png', '2022-06-18 18:30:19', '2022-06-18 18:30:19');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(2, 'browse_bread', NULL, '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(3, 'browse_database', NULL, '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(4, 'browse_media', NULL, '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(5, 'browse_compass', NULL, '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(6, 'browse_menus', 'menus', '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(7, 'read_menus', 'menus', '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(8, 'edit_menus', 'menus', '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(9, 'add_menus', 'menus', '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(10, 'delete_menus', 'menus', '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(11, 'browse_roles', 'roles', '2022-05-24 22:30:22', '2022-05-24 22:30:22'),
(12, 'read_roles', 'roles', '2022-05-24 22:30:22', '2022-05-24 22:30:22'),
(13, 'edit_roles', 'roles', '2022-05-24 22:30:23', '2022-05-24 22:30:23'),
(14, 'add_roles', 'roles', '2022-05-24 22:30:23', '2022-05-24 22:30:23'),
(15, 'delete_roles', 'roles', '2022-05-24 22:30:23', '2022-05-24 22:30:23'),
(16, 'browse_users', 'users', '2022-05-24 22:30:23', '2022-05-24 22:30:23'),
(17, 'read_users', 'users', '2022-05-24 22:30:23', '2022-05-24 22:30:23'),
(18, 'edit_users', 'users', '2022-05-24 22:30:23', '2022-05-24 22:30:23'),
(19, 'add_users', 'users', '2022-05-24 22:30:23', '2022-05-24 22:30:23'),
(20, 'delete_users', 'users', '2022-05-24 22:30:24', '2022-05-24 22:30:24'),
(21, 'browse_settings', 'settings', '2022-05-24 22:30:24', '2022-05-24 22:30:24'),
(22, 'read_settings', 'settings', '2022-05-24 22:30:24', '2022-05-24 22:30:24'),
(23, 'edit_settings', 'settings', '2022-05-24 22:30:24', '2022-05-24 22:30:24'),
(24, 'add_settings', 'settings', '2022-05-24 22:30:24', '2022-05-24 22:30:24'),
(25, 'delete_settings', 'settings', '2022-05-24 22:30:24', '2022-05-24 22:30:24'),
(26, 'browse_categories', 'categories', '2022-05-24 22:30:30', '2022-05-24 22:30:30'),
(27, 'read_categories', 'categories', '2022-05-24 22:30:30', '2022-05-24 22:30:30'),
(28, 'edit_categories', 'categories', '2022-05-24 22:30:30', '2022-05-24 22:30:30'),
(29, 'add_categories', 'categories', '2022-05-24 22:30:30', '2022-05-24 22:30:30'),
(30, 'delete_categories', 'categories', '2022-05-24 22:30:30', '2022-05-24 22:30:30'),
(31, 'browse_posts', 'posts', '2022-05-24 22:30:33', '2022-05-24 22:30:33'),
(32, 'read_posts', 'posts', '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(33, 'edit_posts', 'posts', '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(34, 'add_posts', 'posts', '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(35, 'delete_posts', 'posts', '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(36, 'browse_pages', 'pages', '2022-05-24 22:30:36', '2022-05-24 22:30:36'),
(37, 'read_pages', 'pages', '2022-05-24 22:30:36', '2022-05-24 22:30:36'),
(38, 'edit_pages', 'pages', '2022-05-24 22:30:36', '2022-05-24 22:30:36'),
(39, 'add_pages', 'pages', '2022-05-24 22:30:36', '2022-05-24 22:30:36'),
(40, 'delete_pages', 'pages', '2022-05-24 22:30:37', '2022-05-24 22:30:37'),
(61, 'browse_orderans', 'orderans', '2022-05-31 22:43:08', '2022-05-31 22:43:08'),
(62, 'read_orderans', 'orderans', '2022-05-31 22:43:08', '2022-05-31 22:43:08'),
(63, 'edit_orderans', 'orderans', '2022-05-31 22:43:08', '2022-05-31 22:43:08'),
(64, 'add_orderans', 'orderans', '2022-05-31 22:43:08', '2022-05-31 22:43:08'),
(65, 'delete_orderans', 'orderans', '2022-05-31 22:43:08', '2022-05-31 22:43:08'),
(71, 'browse_rotis', 'rotis', '2022-06-06 03:20:55', '2022-06-06 03:20:55'),
(72, 'read_rotis', 'rotis', '2022-06-06 03:20:55', '2022-06-06 03:20:55'),
(73, 'edit_rotis', 'rotis', '2022-06-06 03:20:55', '2022-06-06 03:20:55'),
(74, 'add_rotis', 'rotis', '2022-06-06 03:20:55', '2022-06-06 03:20:55'),
(75, 'delete_rotis', 'rotis', '2022-06-06 03:20:55', '2022-06-06 03:20:55'),
(76, 'browse_selais', 'selais', '2022-06-06 03:21:35', '2022-06-06 03:21:35'),
(77, 'read_selais', 'selais', '2022-06-06 03:21:35', '2022-06-06 03:21:35'),
(78, 'edit_selais', 'selais', '2022-06-06 03:21:35', '2022-06-06 03:21:35'),
(79, 'add_selais', 'selais', '2022-06-06 03:21:35', '2022-06-06 03:21:35'),
(80, 'delete_selais', 'selais', '2022-06-06 03:21:35', '2022-06-06 03:21:35'),
(86, 'browse_topings', 'topings', '2022-06-06 04:21:39', '2022-06-06 04:21:39'),
(87, 'read_topings', 'topings', '2022-06-06 04:21:39', '2022-06-06 04:21:39'),
(88, 'edit_topings', 'topings', '2022-06-06 04:21:39', '2022-06-06 04:21:39'),
(89, 'add_topings', 'topings', '2022-06-06 04:21:39', '2022-06-06 04:21:39'),
(90, 'delete_topings', 'topings', '2022-06-06 04:21:39', '2022-06-06 04:21:39'),
(91, 'browse_produks', 'produks', '2022-06-06 04:35:59', '2022-06-06 04:35:59'),
(92, 'read_produks', 'produks', '2022-06-06 04:35:59', '2022-06-06 04:35:59'),
(93, 'edit_produks', 'produks', '2022-06-06 04:35:59', '2022-06-06 04:35:59'),
(94, 'add_produks', 'produks', '2022-06-06 04:35:59', '2022-06-06 04:35:59'),
(95, 'delete_produks', 'produks', '2022-06-06 04:35:59', '2022-06-06 04:35:59'),
(96, 'browse_sliders', 'sliders', '2022-06-17 00:51:20', '2022-06-17 00:51:20'),
(97, 'read_sliders', 'sliders', '2022-06-17 00:51:20', '2022-06-17 00:51:20'),
(98, 'edit_sliders', 'sliders', '2022-06-17 00:51:20', '2022-06-17 00:51:20'),
(99, 'add_sliders', 'sliders', '2022-06-17 00:51:20', '2022-06-17 00:51:20'),
(100, 'delete_sliders', 'sliders', '2022-06-17 00:51:20', '2022-06-17 00:51:20'),
(101, 'browse_mediaheading', 'mediaheading', '2022-06-17 02:42:41', '2022-06-17 02:42:41'),
(102, 'read_mediaheading', 'mediaheading', '2022-06-17 02:42:41', '2022-06-17 02:42:41'),
(103, 'edit_mediaheading', 'mediaheading', '2022-06-17 02:42:41', '2022-06-17 02:42:41'),
(104, 'add_mediaheading', 'mediaheading', '2022-06-17 02:42:41', '2022-06-17 02:42:41'),
(105, 'delete_mediaheading', 'mediaheading', '2022-06-17 02:42:41', '2022-06-17 02:42:41'),
(106, 'browse_mediaheadings', 'mediaheadings', '2022-06-17 02:43:58', '2022-06-17 02:43:58'),
(107, 'read_mediaheadings', 'mediaheadings', '2022-06-17 02:43:58', '2022-06-17 02:43:58'),
(108, 'edit_mediaheadings', 'mediaheadings', '2022-06-17 02:43:58', '2022-06-17 02:43:58'),
(109, 'add_mediaheadings', 'mediaheadings', '2022-06-17 02:43:58', '2022-06-17 02:43:58'),
(110, 'delete_mediaheadings', 'mediaheadings', '2022-06-17 02:43:58', '2022-06-17 02:43:58'),
(111, 'browse_titles', 'titles', '2022-06-17 03:41:17', '2022-06-17 03:41:17'),
(112, 'read_titles', 'titles', '2022-06-17 03:41:17', '2022-06-17 03:41:17'),
(113, 'edit_titles', 'titles', '2022-06-17 03:41:17', '2022-06-17 03:41:17'),
(114, 'add_titles', 'titles', '2022-06-17 03:41:17', '2022-06-17 03:41:17'),
(115, 'delete_titles', 'titles', '2022-06-17 03:41:18', '2022-06-17 03:41:18'),
(116, 'browse_best_sellers', 'best_sellers', '2022-06-18 09:31:12', '2022-06-18 09:31:12'),
(117, 'read_best_sellers', 'best_sellers', '2022-06-18 09:31:12', '2022-06-18 09:31:12'),
(118, 'edit_best_sellers', 'best_sellers', '2022-06-18 09:31:12', '2022-06-18 09:31:12'),
(119, 'add_best_sellers', 'best_sellers', '2022-06-18 09:31:12', '2022-06-18 09:31:12'),
(120, 'delete_best_sellers', 'best_sellers', '2022-06-18 09:31:12', '2022-06-18 09:31:12'),
(121, 'browse_testimonis', 'testimonis', '2022-06-18 18:14:44', '2022-06-18 18:14:44'),
(122, 'read_testimonis', 'testimonis', '2022-06-18 18:14:44', '2022-06-18 18:14:44'),
(123, 'edit_testimonis', 'testimonis', '2022-06-18 18:14:44', '2022-06-18 18:14:44'),
(124, 'add_testimonis', 'testimonis', '2022-06-18 18:14:44', '2022-06-18 18:14:44'),
(125, 'delete_testimonis', 'testimonis', '2022-06-18 18:14:44', '2022-06-18 18:14:44'),
(126, 'browse_partners', 'partners', '2022-06-18 18:28:45', '2022-06-18 18:28:45'),
(127, 'read_partners', 'partners', '2022-06-18 18:28:45', '2022-06-18 18:28:45'),
(128, 'edit_partners', 'partners', '2022-06-18 18:28:45', '2022-06-18 18:28:45'),
(129, 'add_partners', 'partners', '2022-06-18 18:28:45', '2022-06-18 18:28:45'),
(130, 'delete_partners', 'partners', '2022-06-18 18:28:45', '2022-06-18 18:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `nama`, `selai`, `toping`, `deskripsi`, `jumlah`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Roti oncom', 'Jelai', 'Kismis', 'ABCD', 2, 200000, 'rotis/May2022/KhlfsUVuKYjNzpctTuUU.png', '2022-05-31 04:24:33', '2022-05-31 04:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-24 22:30:34', '2022-05-24 22:30:34'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-24 22:30:34', '2022-05-24 22:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `produk_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_harga` int(11) DEFAULT NULL,
  `produk_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link_blass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` enum('breads','indonesian','beverages','jams') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `produk_nama`, `produk_harga`, `produk_gambar`, `produk_deskripsi`, `created_at`, `updated_at`, `link_blass`, `kategori`) VALUES
(1, 'Roti Kepang', 20000, 'produks/June2022/6rjKZw1V3tVO73BQYG5s.jpg', 'Roti kepang terenak sejawa barat', '2022-06-06 04:38:59', '2022-06-06 04:38:59', NULL, 'breads'),
(2, 'Roti tawar', 15000, 'produks/June2022/KesMOLi9akLQRNuJ3Igs.jpeg', 'Roti tawar terkece', '2022-06-06 04:39:28', '2022-06-06 04:39:28', NULL, 'breads'),
(3, 'Roti Sobek', 0, 'produks/June2022/4rv6k0Ta9hGfUV8KqpxJ.jpg', 'Ini Roti Sobek', '2022-06-09 23:37:38', '2022-06-09 23:37:38', '/rotisobek', 'breads'),
(4, 'Roti Satuan', 0, 'produks/June2022/heKYapa4wDCQGy0mubLs.jpg', 'Roti', '2022-06-10 00:49:02', '2022-06-10 00:49:02', '/oneselai', 'breads'),
(5, 'Lemang', 20000, 'produks/June2022/EEzQKMetJSKUzHhapA11.png', 'Lemang terlezat', '2022-06-13 21:26:38', '2022-06-13 21:26:38', NULL, 'indonesian');

-- --------------------------------------------------------

--
-- Table structure for table `produks_bak`
--

CREATE TABLE `produks_bak` (
  `id` int(10) UNSIGNED NOT NULL,
  `produk_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_harga` int(11) DEFAULT NULL,
  `produk_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks_bak`
--

INSERT INTO `produks_bak` (`id`, `produk_nama`, `produk_harga`, `produk_gambar`, `produk_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Roti Kepang', 20000, 'produks/June2022/6rjKZw1V3tVO73BQYG5s.jpg', 'Roti kepang terenak sejawa barat', '2022-06-06 04:38:59', '2022-06-06 04:38:59'),
(2, 'Roti tawar', 15000, 'produks/June2022/VCYQwsbyGPr7zRDhAGga.jpeg', 'Roti tawar terkece', '2022-06-06 04:39:00', '2022-06-07 21:09:31'),
(3, 'Roti Imoet', 40000, 'produks/June2022/HUC4GXlMXPFBXqyJsPQ2.jpeg', 'Roti terimut di Bogor', '2022-06-07 06:56:00', '2022-06-07 06:56:33'),
(4, 'Balapis (Setengah loyang)', 50000, 'produks/June2022/eE2oaHhhdRZw6medntlY.jpeg', 'Lapisan tepung beras warna cokelat dan hijau bertabur kacang kenari', '2022-06-07 07:01:00', '2022-06-07 07:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2022-05-24 22:30:21', '2022-05-24 22:30:21'),
(2, 'user', 'Normal User', '2022-05-24 22:30:21', '2022-05-24 22:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `rotis`
--

CREATE TABLE `rotis` (
  `id` int(10) UNSIGNED NOT NULL,
  `roti_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roti_harga` int(11) DEFAULT NULL,
  `roti_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roti_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rotis`
--

INSERT INTO `rotis` (`id`, `roti_nama`, `roti_harga`, `roti_gambar`, `created_at`, `updated_at`, `roti_deskripsi`) VALUES
(1, 'Wortel', 0, 'rotis/June2022/BWEmrMFj1dZGtB7i93A6.png', '2022-06-06 03:25:00', '2022-06-08 01:32:18', 'The finest product of Carrie BakeryTM'),
(2, 'Gandum', 0, 'rotis/June2022/tQLro4z3LTppdjVR9e7w.jpg', '2022-06-06 03:32:00', '2022-06-06 04:37:04', 'Gandum original 100%'),
(3, 'Sobek', 30000, NULL, NULL, NULL, 'ad,dhshdas');

-- --------------------------------------------------------

--
-- Table structure for table `selais`
--

CREATE TABLE `selais` (
  `id` int(10) UNSIGNED NOT NULL,
  `selai_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selai_harga` int(11) DEFAULT NULL,
  `selai_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `selai_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `selais`
--

INSERT INTO `selais` (`id`, `selai_nama`, `selai_harga`, `selai_gambar`, `created_at`, `updated_at`, `selai_deskripsi`) VALUES
(1, 'Coklat', 2000, 'selais/June2022/oQFAWbdRfw31U1JDpvFl.jpg', '2022-05-31 04:42:00', '2022-06-08 01:30:36', NULL),
(2, 'Stroberi', 2000, 'selais/May2022/qiVtJ323bgxUNKKUCgP4.jpeg', '2022-05-31 04:53:59', '2022-05-31 04:53:59', NULL),
(3, 'Bluberi', 0, 'selais/June2022/Geib2ALqltYF5GgLhVcw.jpg', '2022-06-07 06:25:13', '2022-06-07 06:25:13', 'Selai nanas balalal');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('0KdAPIoEpxoP7vdtPpKM3GH2Al1CZA6cNTcb6HiK', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY2NTWUxFV3Y0Znl5T3h1YlF6aGhlQXlPTjFlWTJ6UEFicXNZeUpoSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1656329295),
('DDZ88xHR4ejKeT4SSyLr3v4VigcTSlxpex5xg3dY', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUHp2a0QxNGVLMkY1MVI5aHdFeVlUV0FoeWdsT1lPNVdONmFVczJDTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zaG9wIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1656328830),
('Ozo9qWApB80HAn7zIPkCqrKcQ3y9WpbxKk6EKyyG', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXVLb3ZrT2lneTh3d1B1UWlrN2UwWjhPeEIwQXBXdjQ4MUVvZTNlTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zaG9wIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1656324339);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Carrie Bakery', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sliders/June2022/ys5Gh1wFvRRaJMlh2YMo.jpeg', '2022-06-17 01:16:00', '2022-06-17 03:31:19'),
(2, 'sliders/June2022/NKKUwQWkzVcpSy7RiI6Z.jpeg', '2022-06-17 01:30:00', '2022-06-17 03:31:00'),
(3, 'sliders/June2022/cApcKLRIWtIKsfmb4woU.jpeg', '2022-06-17 01:30:00', '2022-06-17 03:31:10'),
(4, 'sliders/June2022/2QjFuPdHwc7cr9IjzzaY.jpeg', '2022-06-17 02:11:00', '2022-06-17 03:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `komen`, `lokasi`, `tanggal`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Firewall', 'Rotinya enak, murah, sehat dan tempatnya nyaman dan aman serta asri, cocok untuk keluarga yang suka udara sejuk dan alam yang murni', 'Bogor', '2022-06-19', 'testimonis/June2022/QwK6PA2OMC6LJF9ZNMFj.jpeg', '2022-06-18 18:16:34', '2022-06-18 18:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `head`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Hello World', 'Kami adalah produsen roti sehat dan kaya serat yang berfokus pada aneka roti wortel dan gandum yang berlokasi di daerah Bogor, Jawa Barat, Indonesia. Kami juga menyediakan camilan aman bagi keluarga yang berfokus pada Indonesian traditional culinary', '2022-06-17 03:42:21', '2022-06-17 03:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `topings`
--

CREATE TABLE `topings` (
  `id` int(10) UNSIGNED NOT NULL,
  `toping_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toping_harga` int(11) DEFAULT NULL,
  `toping_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toping_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topings`
--

INSERT INTO `topings` (`id`, `toping_nama`, `toping_harga`, `toping_gambar`, `toping_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Kismis', 1000, 'topings/June2022/X4FeJDaKBGIYa9bppk36.jpeg', 'Kismis asam manis', '2022-06-06 04:23:38', '2022-06-06 04:23:38'),
(2, 'Almond', 1500, 'topings/June2022/5000AoX0ICh9HwPxDgyO.jpg', 'Almond manis semanis senyumanmu', '2022-06-06 04:26:29', '2022-06-06 04:26:29'),
(3, 'seeds', 0, 'topings/June2022/VXZf6kWinsVgAsjemIzl.png', 'Seds', '2022-06-08 01:35:24', '2022-06-08 01:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2022-05-24 22:30:37', '2022-05-24 22:30:37'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2022-05-24 22:30:37', '2022-05-24 22:30:37'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2022-05-24 22:30:38', '2022-05-24 22:30:38'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2022-05-24 22:30:39', '2022-05-24 22:30:39'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2022-05-24 22:30:39', '2022-05-24 22:30:39'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2022-05-24 22:30:40', '2022-05-24 22:30:40'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2022-05-24 22:30:41', '2022-05-24 22:30:41'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2022-05-24 22:30:41', '2022-05-24 22:30:41'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2022-05-24 22:30:41', '2022-05-24 22:30:41'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2022-05-24 22:30:41', '2022-05-24 22:30:41'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2022-05-24 22:30:41', '2022-05-24 22:30:41'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2022-05-24 22:30:41', '2022-05-24 22:30:41'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2022-05-24 22:30:41', '2022-05-24 22:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `settings`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$p49ZU/50agPIpHBhbg4rAuXMlOCMbQjpDF7kHfwIAH6c2oxxRVjdy', NULL, NULL, NULL, 'wfOmAYwxPXISnRlklyFlhIJbMpMfCYJVTh9pXoWkbBeQAk7vhAhKbTUz4QxU', NULL, NULL, NULL, '2022-05-24 22:30:31', '2022-05-24 22:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_sellers`
--
ALTER TABLE `best_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mediaheadings`
--
ALTER TABLE `mediaheadings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderans`
--
ALTER TABLE `orderans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks_bak`
--
ALTER TABLE `produks_bak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `rotis`
--
ALTER TABLE `rotis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selais`
--
ALTER TABLE `selais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topings`
--
ALTER TABLE `topings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_sellers`
--
ALTER TABLE `best_sellers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediaheadings`
--
ALTER TABLE `mediaheadings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `orderans`
--
ALTER TABLE `orderans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produks_bak`
--
ALTER TABLE `produks_bak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rotis`
--
ALTER TABLE `rotis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `selais`
--
ALTER TABLE `selais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topings`
--
ALTER TABLE `topings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
