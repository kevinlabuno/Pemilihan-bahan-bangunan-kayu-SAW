-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2024 pada 19.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_melvin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id`, `kriteria`, `tipe`, `bobot`, `w`, `created_at`, `updated_at`) VALUES
(1, 'harga', 'cost', '10', '0.35', '2024-05-26 04:53:37', '2024-05-26 04:53:37'),
(2, 'kualitas', 'benefit', '30', '0.25', '2024-05-26 04:53:37', '2024-05-26 04:53:37'),
(3, 'estetika', 'benefit', '10', '0.20', '2024-05-26 04:53:37', '2024-05-26 04:53:37'),
(4, 'waktu', 'benefit', '30', '0.15', '2024-05-26 04:53:37', '2024-05-26 04:53:37'),
(5, 'serat', 'benefit', '20', '0.5', '2024-05-26 04:53:37', '2024-05-26 04:53:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `v`, `created_at`, `updated_at`) VALUES
(1, 'Cempaka', '3 Juta/Kubik', 'Cukup Bagus', 'Berurat', '15 Tahun', 'Cukup Berserat', '', '2024-05-26 02:09:37', '2024-05-26 02:09:37'),
(2, 'Jati', '15 Juta/Kubik', 'Bagus', 'Berurat', '30 Tahun', 'Berserat', '', '2024-05-26 02:09:37', '2024-05-26 02:09:37'),
(3, 'Linggua', '8 Juta/Kubik', 'Bagus', 'Cukup Berurat', '20 Tahun', 'Berserat', '', '2024-05-26 02:09:37', '2024-05-26 02:09:37'),
(6, 'Besi', '10 Juta/Kubik', 'Bagus', 'Sangat Berurat', '50 Tahun', 'Sedikit Berserat', '', '2024-05-26 02:09:37', '2024-05-26 02:09:37'),
(7, 'Nantu', '3,3 Juta/Kubik', 'Sangat Bagus', 'Berurat', '17 Tahun', 'Cukup Berserat', '', '2024-05-26 02:09:37', '2024-05-26 02:09:37'),
(10, 'Mahoni', '5 Juta/Kubik', 'Bagus', 'Cukup Berurat', '10 Tahun', 'Cukup Berserat', '', '2024-05-26 02:09:37', '2024-05-26 02:09:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakonver`
--

CREATE TABLE `datakonver` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datakonver`
--

INSERT INTO `datakonver` (`id`, `alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `v`, `created_at`, `updated_at`) VALUES
(1, 'Cempaka', '1', '4', '3', '2', '3', '1.105', '2024-05-26 10:22:54', '2024-05-26 08:50:33'),
(2, 'Jati', '3', '3', '3', '3', '4', '0.976655', '2024-05-26 10:22:54', '2024-05-26 08:50:33'),
(3, 'Linggua', '2', '3', '4', '2', '4', '1.045', '2024-05-26 10:22:54', '2024-05-26 08:50:33'),
(4, 'Besi', '2', '3', '5', '5', '2', '0.925', '2024-05-26 10:22:54', '2024-05-26 08:50:33'),
(5, 'Nantu', '1', '5', '3', '2', '3', '1.155', '2024-05-26 10:22:54', '2024-05-26 08:50:33'),
(6, 'Mahoni', '1', '3', '4', '1', '3', '1.065', '2024-05-26 10:22:54', '2024-05-26 08:50:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kayu`
--

CREATE TABLE `kayu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kayu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_05_26_092709_create_datakonver_table', 1),
(4, '2024_05_26_095036_create_kayu_table', 1),
(5, '2024_05_26_095334_create_data_table', 1),
(6, '2024_05_26_095405_create_bobot_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datakonver`
--
ALTER TABLE `datakonver`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kayu`
--
ALTER TABLE `kayu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `datakonver`
--
ALTER TABLE `datakonver`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kayu`
--
ALTER TABLE `kayu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
