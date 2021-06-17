-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `harga`, `gambar`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 'Tempe Goreng', 2500, 'tZudnwXmw3Ua12PjXgg0.jpeg', NULL, '2020-11-01 17:00:00', '2020-11-09 21:29:33'),
(2, 'Pop Es', 2000, '2Gqg7RtrtN0M18qVCBCU.jpeg', NULL, '2020-11-02 02:26:17', '2020-11-03 20:25:04'),
(3, 'Bakmie  Bu\'de', 10000, 'Ir0qVHEc2guV4qu9Hkez.jpeg', NULL, '2020-11-02 06:40:33', '2020-11-03 20:25:12'),
(4, 'Seblak Bu\'de', 8500, 'Xpyse8sKg2tHsQ2l9fYa.jpeg', NULL, '2020-11-02 06:42:02', '2020-11-09 21:27:26'),
(6, 'Bakso Cilok RiceCooker', 5000, 'MNK5boyxrli385V3hcfM.jpeg', NULL, '2020-11-02 07:26:54', '2020-11-05 20:52:23'),
(7, 'Sosis Bakar/Goreng', 3000, 'F7iPNugLoaI50YIFeGeJ.jpeg', NULL, '2020-11-03 03:22:58', '2020-11-03 22:53:19'),
(8, 'Pop Mie', 10000, '5fa24360c0e8c.jpeg', NULL, '2020-11-03 20:20:31', '2020-11-03 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu_pesanan`
--

CREATE TABLE `menu_pesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `pesanan_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_pesanan`
--

INSERT INTO `menu_pesanan` (`id`, `menu_id`, `pesanan_id`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 2, 2),
(4, 4, 2),
(5, 2, 3),
(6, 7, 3),
(7, 2, 4),
(8, 3, 4),
(9, 4, 4),
(10, 2, 5),
(11, 3, 5),
(12, 2, 6),
(13, 7, 6),
(14, 2, 7),
(15, 6, 7),
(16, 1, 8),
(17, 2, 8);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_02_040557_create_menus_table', 1),
(5, '2020_11_02_040823_create_transaksis_table', 1),
(6, '2020_11_02_040920_create_pelanggans_table', 1),
(7, '2020_11_02_041012_create_pesanans_table', 2),
(8, '2020_11_02_074656_create_transaksis_table', 3),
(10, '2020_11_04_124058_create_pesan_table', 5),
(11, '2020_11_04_134758_create_menu_pesanan_table', 6);

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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `jenis_kelamin`, `nohp`, `alamat`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 'MUHAMMAD RAFLI', 'L', '088223985959', 'Jl. Palapa 3', NULL, '2020-11-01 17:00:00', '2020-11-01 17:00:00'),
(2, 'BlueWare65', 'L', '1818184518121', 'Jl.Oke Mantap', NULL, '2020-11-04 17:00:00', '2020-11-04 17:00:00'),
(3, 'Angga', 'L', '815168915162', 'Jl. Deket Puskesmas', NULL, '2020-11-08 17:00:00', '2020-11-08 17:00:00'),
(4, 'Kautsar', 'L', '1325486', 'Kebon Jeruk', NULL, '2020-11-09 07:47:06', '2020-11-09 07:47:06'),
(5, 'Aferil Yudhatama', 'L', '78822869897923', 'Jl. Palapa 1', NULL, '2020-11-09 19:03:13', '2020-11-09 19:03:13'),
(6, 'Gilang', 'L', '788522862', 'Jl, Deket 229', NULL, '2020-11-09 19:40:34', '2020-11-09 19:40:34'),
(7, 'Ravi', 'L', '1245789697', 'Jl. Jaktim', NULL, '2020-11-09 21:41:33', '2020-11-09 21:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `delete_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_pelanggan`, `jumlah`, `id_user`, `status`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 1, NULL, '2020-11-08 21:55:16', '2020-11-09 02:30:41'),
(2, 1, 2, 2, 1, NULL, '2020-11-08 21:55:24', '2020-11-08 23:02:29'),
(3, 3, 2, 2, 1, NULL, '2020-11-08 22:55:13', '2020-11-09 02:30:16'),
(4, 2, 3, 2, 1, NULL, '2020-11-08 23:13:50', '2020-11-09 07:49:55'),
(5, 4, 2, 2, 0, NULL, '2020-11-09 07:47:06', '2020-11-09 07:47:06'),
(6, 5, 2, 2, 0, NULL, '2020-11-09 19:03:13', '2020-11-09 19:04:14'),
(7, 6, 2, 2, 0, NULL, '2020-11-09 19:40:34', '2020-11-09 19:40:34'),
(8, 7, 2, 2, 1, NULL, '2020-11-09 21:41:33', '2020-11-09 21:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pesanan` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `delete_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_pesanan`, `total`, `bayar`, `status`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 1, 12000, 15000, 1, NULL, '2020-11-08 21:55:16', '2020-11-09 02:30:41'),
(2, 2, 10500, 15000, 1, NULL, '2020-11-08 21:55:24', '2020-11-08 23:02:29'),
(3, 3, 5000, 6000, 1, NULL, '2020-11-08 22:55:13', '2020-11-09 02:30:16'),
(4, 4, 20500, 25000, 1, NULL, '2020-11-08 23:13:50', '2020-11-09 07:49:55'),
(5, 5, 12000, NULL, 0, NULL, '2020-11-09 07:47:06', '2020-11-09 07:47:06'),
(6, 6, 5000, NULL, 0, NULL, '2020-11-09 19:03:14', '2020-11-09 19:04:14'),
(7, 7, 7000, NULL, 0, NULL, '2020-11-09 19:40:34', '2020-11-09 19:40:34'),
(8, 8, 4500, 10000, 1, NULL, '2020-11-09 21:41:33', '2020-11-09 21:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'RAFLI', 'rafli@copasdev.com', NULL, '$2y$10$27cl66UgG6gv31jdabiUIuB5DF1wQwTjW9MBMOZ6qo5TO4r/2pzdy', 'baxE1FJAHUJtTXetmlWibemH0rfEqo8VSwmf60BDZaTA8uurUcaYDmYDldIj', '2020-11-01 21:27:47', '2020-11-07 01:44:08'),
(2, 'waiter', 'FLIBOXS', 'fliboxs@copasdev.com', NULL, '$2y$10$qbCnW6Et4.gP8SeT.vlTk.9y3ccPCKXrr0It2AG./7BtXG/yiHzeq', 'dnAKQP1GKY1kZ68WHxpc5QwACoEd6NZMR3lQ3fQKxGaLYSM4uT9nouarRchc', '2020-11-03 00:52:55', '2020-11-03 00:52:55'),
(3, 'cashier', 'Raploy', 'raploy@copasdev.com', NULL, '$2y$10$C.NXuw01RPFOeSckEusVW.jE2E1i3Ih7y72WNT.DQqNriyRVy2bTa', 'ZRrITBDOtCflJdQjUQydg7w7ECjyYhh6HyVNjUeYMG0swZea4djtVkaelSeO', '2020-11-05 02:32:14', '2020-11-05 02:32:14'),
(4, 'owner', 'MUHAMMAD RAFLI', 'rafliceo@copasdev.com', NULL, '$2y$10$Bh6lWmJm/F/QXCI6pZbYsulcwnyeLFrWk2Qu1LdPMi2s3PNq2tExC', 'esTvtjkk1J6b56Ar66z148tLDMrab71wFHSKlaSEQJjXbf9Va4TyFVyyUY27', '2020-11-05 08:16:39', '2020-11-05 08:16:39'),
(6, 'admin', 'Sayutih', 'sayutih1234@gmail.com', NULL, '$2y$10$8qIiG1KIsJI7CZ8Uu1pGjurinP7Y1.CAuI4rYEwWa0a/W8vdzm.ne', NULL, '2020-11-09 19:26:17', '2020-11-09 19:27:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
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
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_id_pelanggan_foreign` (`id_pelanggan`),
  ADD KEY `pesanan_id_user_foreign` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id_pesanan_foreign` (`id_pesanan`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `pesanan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_pesanan_foreign` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
