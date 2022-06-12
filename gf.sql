-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 19.04
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `barang_id` int(11) NOT NULL,
  `pesan_id` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `jumlah_harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` bigint(20) UNSIGNED NOT NULL,
  `namalaptop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokolaptop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `namalaptop`, `tokolaptop`, `stok`, `image`, `harga`, `created_at`, `updated_at`) VALUES
(16, 'LENOVO', 'Sederhana', 5, '1655047062.jpg', 3000000, '2022-06-12 06:42:31', '2022-06-12 07:17:42'),
(17, 'NOKIA PureBookX14', 'Aris', 2, '1655045916.png', 15000000, '2022-06-12 06:58:36', '2022-06-12 06:58:36'),
(18, 'Samsung Galaxy Note', 'Aneka Komputer', 1, '1655046113.jpg', 20000000, '2022-06-12 07:01:53', '2022-06-12 07:01:53'),
(19, 'Samsung Notebook Flash', 'Zahrah Komputer', 3, '1655046499.jpg', 25000000, '2022-06-12 07:08:19', '2022-06-12 07:08:19'),
(20, 'APPLE MacBook', 'Info Komputer', 1, '1655046607.jpg', 34000000, '2022-06-12 07:10:07', '2022-06-12 07:10:07');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_09_180425_create_bunga_table', 1),
(6, '2021_10_09_180440_create_kopi_table', 1),
(7, '2021_10_09_180457_create_kue_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jumlah_harga` int(100) NOT NULL,
  `nama_laptop` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `nomor`, `alamat`, `jumlah_harga`, `nama_laptop`, `updated_at`, `created_at`) VALUES
(1, 'tes', '09123001', 'jl.tes', 130000, 'dadada', '2022-06-12 04:04:17', '2022-06-12 04:04:17'),
(2, 'wewe', '0921221', 'eweqweq', 3500, 'Carnation', '2022-06-12 04:08:57', '2022-06-12 04:08:57'),
(3, 'erik', '6666', 'ggggggghgj', 15000000, 'NOKIA PureBookX14', '2022-06-12 08:17:19', '2022-06-12 08:17:19'),
(4, 'wewre', '56586', 'fgfhd', 20000000, 'Samsung Galaxy Note', '2022-06-12 08:25:24', '2022-06-12 08:25:24'),
(5, 'ewrff', '567685', 'xfvdg', 25000000, 'Samsung Notebook Flash', '2022-06-12 08:26:14', '2022-06-12 08:26:14'),
(6, 'ewretwt', '1234', 'sdasf', 34000000, 'APPLE MacBook', '2022-06-12 08:28:05', '2022-06-12 08:28:05'),
(7, 'sdsfsf', '34564', 'dfggdgc', 34000000, 'APPLE MacBook', '2022-06-12 08:42:27', '2022-06-12 08:42:27'),
(8, 'sdsfsf', '34564', 'dfggdgc', 34000000, 'APPLE MacBook', '2022-06-12 08:43:38', '2022-06-12 08:43:38'),
(9, 'sdsfsf', '34564', 'dfggdgc', 34000000, 'APPLE MacBook', '2022-06-12 08:44:33', '2022-06-12 08:44:33'),
(10, 'sdfsf', '343546', 'dffsfs', 34000000, 'APPLE MacBook', '2022-06-12 08:46:54', '2022-06-12 08:46:54'),
(11, 'erika', '09888', 'erikaknakdnd', 34000000, 'APPLE MacBook', '2022-06-12 09:03:45', '2022-06-12 09:03:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Erika Maulidiya', 'erikamaulidiya18@gmail.com', NULL, 'erika18', '$2y$10$5wBhNAfkxA07LkKlpkVMAOk9Monfuk68sSCG6Ae4e6sWeayTlk4jS', NULL, '2021-12-20 23:42:19', '2021-12-20 23:42:19'),
(4, 'faridah', 'faridah@gmail.com', NULL, 'anotherme', '$2y$10$Ry5UsUtiK4qZ3nJCE7So3edMEGA.V0GT6VYWPR5AtHVYFuYkr3PoG', NULL, '2022-06-12 06:09:29', '2022-06-12 06:09:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
