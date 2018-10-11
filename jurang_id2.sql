-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 03:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurang.id2`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2018_10_07_162247_create_users_table', 1),
(10, '2018_10_07_163651_create_stock_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idPemesanan` int(11) NOT NULL,
  `idStock` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `namaPemesan` varchar(20) NOT NULL,
  `jumlahPesanan` int(50) NOT NULL,
  `noTelponPemesanan` varchar(12) NOT NULL,
  `alamatPemesan` varchar(50) NOT NULL,
  `alamatPengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idPemesanan`, `idStock`, `iduser`, `namaPemesan`, `jumlahPesanan`, `noTelponPemesanan`, `alamatPemesan`, `alamatPengiriman`) VALUES
(1, 2, 1, 'Hafiz', 2, '089897656789', 'Mana yaa', 'kepo deeh'),
(2, 2, 1, 'Fardo', 5, '089892381298', 'jl mamak kau', 'jl mamak kau v1');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `idStock` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `namaStock` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `beratStock` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `posthome` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`idStock`, `foto`, `namaStock`, `beratStock`, `harga`, `posthome`, `created_at`, `updated_at`) VALUES
(1, 'hafiz.png', 'Terasi Udang', 20, 20000, 0, '2018-10-08 08:57:49', '2018-10-11 01:47:47'),
(2, '010818000_1482306686-20161216-Reaksi-Kocak-Hewan-Saat-Bercermin-AFP-1.jpg', 'Terasi Monyet', 15, 20000, 1, '2018-10-10 05:33:57', '2018-10-10 21:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'fardo', 'fardo@mail.com', NULL, '$2y$10$sa1OetgEqPqhwe9aynEFAegnZAZ5t3JJAQRk0qIOdGPjSqCN3HOmG', 'B4RKsjYaIxAvkCnCVt79ryCGVOiUVc2lUYCDRBfDVmbFAZNvMALgEQjA6sjE', '2018-10-08 08:51:33', '2018-10-08 08:51:33'),
(2, 1, 'dinda', 'dinda@mail.com', NULL, '$2y$10$sa1OetgEqPqhwe9aynEFAegnZAZ5t3JJAQRk0qIOdGPjSqCN3HOmG', 'yeoJRQqzEidZAF8OFMM8YsWxUV9pz8wxgdWMs4aQ78PcfTCiYL0UXcNs5K9t', '2018-10-08 08:51:33', '2018-10-08 08:51:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD KEY `idStock` (`idStock`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idStock`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idPemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `idStock` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`idStock`) REFERENCES `stock` (`idStock`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
