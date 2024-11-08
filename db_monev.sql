-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2024 pada 10.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_monev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'gpm', 'site gpm'),
(2, 'dosen', 'site dosen'),
(4, 'admin', 'manage-user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 4),
(1, 4),
(2, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 8),
(2, 7),
(4, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(5, '::1', 'admin123@gmail.com', 2, '2024-10-28 07:34:02', 1),
(6, '::1', 'raja@gmail.com', 3, '2024-10-28 11:01:21', 1),
(7, '::1', 'raja@gmail.com', 3, '2024-10-28 11:11:39', 1),
(8, '::1', 'raja@gmail.com', 3, '2024-10-28 11:12:07', 1),
(9, '::1', 'raja@gmail.com', 3, '2024-10-28 11:15:12', 1),
(10, '::1', 'raja@gmail.com', 3, '2024-10-28 11:15:49', 1),
(11, '::1', 'raja@gmail.com', 3, '2024-10-28 11:16:42', 1),
(12, '::1', 'raja@gmail.com', 3, '2024-10-28 11:18:46', 1),
(13, '::1', 'raja@gmail.com', 3, '2024-10-28 11:20:02', 1),
(14, '::1', 'raja@gmail.com', 3, '2024-10-28 11:23:24', 1),
(15, '::1', 'raja@gmail.com', 3, '2024-10-28 11:24:30', 1),
(16, '::1', 'admin111@gmail.com', 4, '2024-10-28 11:25:13', 1),
(17, '::1', 'raja@gmail.com', 3, '2024-10-28 11:31:49', 1),
(18, '::1', 'raja@gmail.com', 3, '2024-10-28 11:33:59', 1),
(19, '::1', 'raja@gmail.com', 3, '2024-10-28 12:41:42', 1),
(20, '::1', 'raja@gmail.com', 3, '2024-10-28 13:27:14', 1),
(21, '::1', 'raja@gmail.com', 3, '2024-10-28 13:27:17', 1),
(22, '::1', 'raja@gmail.com', 3, '2024-10-28 13:27:27', 1),
(23, '::1', 'raja@gmail.com', 3, '2024-10-28 16:06:37', 1),
(24, '::1', 'raja@gmail.com', 3, '2024-10-28 16:12:40', 1),
(25, '::1', 'raja@gmail.com', 3, '2024-10-28 17:27:47', 1),
(26, '::1', 'raja@gmail.com', 3, '2024-10-28 17:43:20', 1),
(27, '::1', 'dosen', NULL, '2024-10-28 18:47:56', 0),
(28, '::1', 'dosen', NULL, '2024-10-28 18:48:19', 0),
(29, '::1', 'dosen123@gmail.com', 5, '2024-10-28 18:48:26', 1),
(30, '::1', 'admin123', NULL, '2024-10-28 19:10:30', 0),
(31, '::1', 'admin', NULL, '2024-10-28 19:10:40', 0),
(32, '::1', 'gpm@gmail.com', 6, '2024-10-28 19:11:55', 1),
(33, '::1', 'gpm', NULL, '2024-10-28 19:22:08', 0),
(34, '::1', 'gpm@gmail.com', 6, '2024-10-28 19:22:17', 1),
(35, '::1', 'dosen@gmail.com', 7, '2024-10-28 19:56:12', 1),
(36, '::1', 'gpm', NULL, '2024-10-28 19:56:23', 0),
(37, '::1', 'gpm', NULL, '2024-10-28 19:56:31', 0),
(38, '::1', 'gpm@gmail.com', 8, '2024-10-28 19:56:44', 1),
(39, '::1', 'gpm@gmail.com', 8, '2024-10-28 20:00:26', 1),
(40, '::1', 'dosen@gmail.com', 7, '2024-10-28 20:00:38', 1),
(41, '::1', 'gpm@gmail.com', 8, '2024-10-28 20:19:01', 1),
(42, '::1', 'dosen@gmail.com', 7, '2024-10-28 20:20:51', 1),
(43, '::1', 'gpm@gmail.com', 8, '2024-10-28 20:21:54', 1),
(44, '::1', 'gpm@gmail.com', 8, '2024-10-28 20:51:05', 1),
(45, '::1', 'dosen@gmail.com', 7, '2024-10-28 20:51:23', 1),
(46, '::1', 'gpm@gmail.com', 8, '2024-10-28 20:54:56', 1),
(47, '::1', 'gpm@gmail.com', 8, '2024-10-28 20:56:08', 1),
(48, '::1', 'dosen@gmail.com', 7, '2024-10-28 20:56:44', 1),
(49, '::1', 'gpm@gmail.com', 8, '2024-10-29 07:34:26', 1),
(50, '::1', 'dosen@gmail.com', 7, '2024-10-29 07:59:34', 1),
(51, '::1', 'dosen@gmail.com', 7, '2024-10-29 08:02:18', 1),
(52, '::1', 'gpm', NULL, '2024-10-29 08:02:34', 0),
(53, '::1', 'gpm@gmail.com', 8, '2024-10-29 08:02:41', 1),
(54, '::1', 'dosen@gmail.com', 7, '2024-10-29 08:03:37', 1),
(55, '::1', 'gpm@gmail.com', 8, '2024-10-29 08:22:24', 1),
(56, '::1', 'dosen@gmail.com', 7, '2024-10-29 12:15:12', 1),
(57, '::1', 'dosen@gmail.com', 7, '2024-10-29 12:16:28', 1),
(58, '::1', 'dosen', NULL, '2024-10-29 12:31:20', 0),
(59, '::1', 'dosen@gmail.com', 7, '2024-10-29 12:31:27', 1),
(60, '::1', 'gpm@gmail.com', 8, '2024-10-29 12:55:56', 1),
(61, '::1', 'dosen@gmail.com', 7, '2024-10-29 12:56:11', 1),
(62, '::1', 'gpm@gmail.com', 8, '2024-10-29 12:59:03', 1),
(63, '::1', 'gpm@gmail.com', 8, '2024-10-29 12:59:22', 1),
(64, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:12:30', 1),
(65, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:14:23', 1),
(66, '::1', 'dosen@gmail.com', 7, '2024-10-29 13:15:24', 1),
(67, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:21:02', 1),
(68, '::1', 'dosen', NULL, '2024-10-29 13:23:20', 0),
(69, '::1', 'dosen@gmail.com', 7, '2024-10-29 13:23:31', 1),
(70, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:24:48', 1),
(71, '::1', 'gpm', NULL, '2024-10-29 13:25:39', 0),
(72, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:25:44', 1),
(73, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:26:46', 1),
(74, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:28:33', 1),
(75, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:33:10', 1),
(76, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:34:17', 1),
(77, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:35:05', 1),
(78, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:36:06', 1),
(79, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:37:06', 1),
(80, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:38:35', 1),
(81, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:40:59', 1),
(82, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:50:34', 1),
(83, '::1', 'gpm@gmail.com', 8, '2024-10-29 13:58:08', 1),
(84, '::1', 'dosen', NULL, '2024-10-29 13:58:23', 0),
(85, '::1', 'dosen@gmail.com', 7, '2024-10-29 13:58:32', 1),
(86, '::1', 'gpm@gmail.com', 8, '2024-10-29 14:00:09', 1),
(87, '::1', 'dosen@gmail.com', 7, '2024-10-29 14:00:23', 1),
(88, '::1', 'gpm@gmail.com', 8, '2024-10-29 16:39:57', 1),
(89, '::1', 'gpm@gmail.com', 8, '2024-10-29 16:50:41', 1),
(90, '::1', 'gpm@gmail.com', 8, '2024-10-29 19:10:00', 1),
(91, '::1', 'admin@gmail.com', 9, '2024-10-29 19:50:18', 1),
(92, '::1', 'admin@gmail.com', 9, '2024-10-29 20:02:34', 1),
(93, '::1', 'gpm', NULL, '2024-10-29 20:02:54', 0),
(94, '::1', 'gpm@gmail.com', 8, '2024-10-29 20:03:01', 1),
(95, '::1', 'admin@gmail.com', 9, '2024-10-29 20:04:01', 1),
(96, '::1', 'admin@gmail.com', 10, '2024-10-29 20:39:25', 1),
(97, '::1', 'admin@gmail.com', 10, '2024-10-29 20:42:45', 1),
(98, '::1', 'gpm@gmail.com', 8, '2024-10-29 20:43:07', 1),
(99, '::1', 'dosen@gmail.com', 7, '2024-11-02 05:32:43', 1),
(100, '::1', 'gpm@gmail.com', 8, '2024-11-02 05:32:56', 1),
(101, '::1', 'admin@gmail.com', 10, '2024-11-02 05:33:05', 1),
(102, '::1', 'admin@gmail.com', 10, '2024-11-02 05:34:03', 1),
(103, '::1', 'dosen', NULL, '2024-11-02 05:34:34', 0),
(104, '::1', 'dosen@gmail.com', 7, '2024-11-02 05:34:46', 1),
(105, '::1', 'gpm', NULL, '2024-11-02 05:35:43', 0),
(106, '::1', 'gpm', NULL, '2024-11-02 05:35:54', 0),
(107, '::1', 'gpm@gmail.com', 8, '2024-11-02 05:36:03', 1),
(108, '::1', 'gpm@gmail.com', 8, '2024-11-02 05:38:48', 1),
(109, '::1', 'dosen@gmail.com', 7, '2024-11-02 05:39:15', 1),
(110, '::1', 'dosen@gmail.com', 7, '2024-11-04 05:05:56', 1),
(111, '::1', 'admin@gmail.com', 10, '2024-11-04 05:06:35', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(3, 'dosen-access', 'khusus dosen'),
(4, 'gpm-access', 'khusus gpm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1730080845, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'dosen@gmail.com', 'dosen', '$2y$10$/NOqVvEh/yRqOfYR5Af2Pe/WSdv4ypPc1hhEEe8KaifwkcM/P170e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-10-28 19:31:17', '2024-10-28 19:31:17', NULL),
(8, 'gpm@gmail.com', 'gpm', '$2y$10$.h/6F2LxnYz8Ibpgf25RkOmLN9fng4OSNJfxI0jWQluDuXJ3Sa.BG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-10-28 19:31:50', '2024-10-28 19:31:50', NULL),
(10, 'admin@gmail.com', 'admin', '$2y$10$mbGs3wf/ZUQmFKyg1fF38ufU1CF9Katn1RblaOKtmCTcnYZxoNRRK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-10-29 20:37:48', '2024-10-29 20:37:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
