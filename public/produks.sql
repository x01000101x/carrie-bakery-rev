-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2022 at 10:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_carrie_bakery`
--

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
  `link_blass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `produk_nama`, `produk_harga`, `produk_gambar`, `produk_deskripsi`, `created_at`, `updated_at`, `link_blass`) VALUES
(1, 'Roti Kepang', 20000, 'produks/June2022/6rjKZw1V3tVO73BQYG5s.jpg', 'Roti kepang terenak sejawa barat', '2022-06-06 04:38:59', '2022-06-06 04:38:59', NULL),
(2, 'Roti tawar', 15000, 'produks/June2022/KesMOLi9akLQRNuJ3Igs.jpeg', 'Roti tawar terkece', '2022-06-06 04:39:28', '2022-06-06 04:39:28', NULL),
(3, 'Roti Sobek', 0, 'produks/June2022/4rv6k0Ta9hGfUV8KqpxJ.jpg', 'Ini Roti Sobek', '2022-06-09 23:37:38', '2022-06-09 23:37:38', '/rotisobek'),
(4, 'Roti Satuan', 0, 'produks/June2022/heKYapa4wDCQGy0mubLs.jpg', 'Roti', '2022-06-10 00:49:02', '2022-06-10 00:49:02', '/oneselai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
