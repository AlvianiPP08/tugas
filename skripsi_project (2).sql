-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2022 pada 06.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_mhs`
--

CREATE TABLE `db_mhs` (
  `nim` char(20) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `mk_rpl` int(11) NOT NULL,
  `mk_kwc` int(11) NOT NULL,
  `mk_jarkom` int(11) NOT NULL,
  `profesi_kerja` text NOT NULL,
  `minat_bakat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_mhs`
--

INSERT INTO `db_mhs` (`nim`, `nama`, `mk_rpl`, `mk_kwc`, `mk_jarkom`, `profesi_kerja`, `minat_bakat`) VALUES
('1844190003', 'Leonhard Sintong Marsal\r\n', 820, 428, 449, 'Computer Network/Data Engineer', 'Merakit, Merancang dan Memperbaiki Komputer\r\n'),
('1844190007', 'Randy Aldy Ismail\r\n', 828, 440, 450, 'System Analyst dan System Integrator\r\n', 'Problem Solving\r\n'),
('1844190010', 'Josef Triady\r\n', 840, 453, 470, 'Database Engineer / Database Administrator\r\n', 'Problem Solving\r\n'),
('1844190021', 'Pandji Danang Pralabdo\r\n', 835, 438, 495, 'Computer Network/Data Engineer\r\n', 'Administrasi Sistem Jaringan\r\n'),
('1844190025', 'Moga Purnama Ashari', 843, 456, 498, 'Computer Network/Data Engineer\r\n', 'Problem Solving\r\n'),
('1844190026', 'Wahyu Andriansyah\r\n', 851, 466, 480, 'Software Engineer\r\n', 'Merakit, Merancang dan Memperbaiki Komputer\r\n'),
('1844190029', 'Rayhan Aqhsal\r\n', 840, 448, 469, 'Computer Network/Data Engineer\r\n', 'Administrasi Sistem Jaringan\r\n'),
('1844190036', 'Fahmi Malik Rabbani\r\n', 905, 527, 479, 'Software Engineer\r\n', 'Software Engineer\r\n'),
('1844190042', 'Akhmad Aeluddin\r\n', 876, 451, 459, 'Developer IT\r\n', 'Mobile Developer\r\n'),
('1844190049', 'Putri Salma Wifia\r\n', 935, 499, 495, 'Developer IT', 'Mobile Developer'),
('1844190053', 'Dendi Pratama\r\n', 835, 408, 474, 'System Analyst dan System Integrator\r\n', 'Software Engineer\r\n'),
('1844190054', 'Delfiani Lutfi Rahmadani\r\n', 903, 480, 474, 'Designer Grafis\r\n', 'Mobile Developer\r\n'),
('1844190055', 'Yola Berliana Safira\r\n', 890, 495, 503, 'Developer IT\r\n', 'Problem Solving\r\n'),
('1844190056', 'Miftakul Rozak \r\n', 775, 412, 475, 'Designer Grafis\r\n', 'Administrasi Sistem Jaringan\r\n');

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
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `nim` char(25) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `hasil_peminatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`nim`, `nama_mhs`, `hasil_peminatan`) VALUES
('1844190003', 'Leonhard Sintong Marsal', 'Jarkom'),
('1844190007', 'Randy Aldy Ismail', 'Jarkom'),
('1844190010', 'Josef Triady', 'Jarkom'),
('1844190021', 'Pandji Danang Pralabdo', 'RPL'),
('1844190025', 'Moga Purnama Ashari', 'RPL'),
('1844190026', 'Wahyu Andriansyah', 'Jarkom'),
('1844190029', 'Rayhan Aqhsal', 'Jarkom'),
('1844190036', 'Fahmi Malik Rabbani', 'Jarkom'),
('1844190042', 'Akhmad Aeluddin', 'Jarkom'),
('1844190049', 'Putri Salma Wifia', 'Jarkom'),
('1844190053', 'Dendi Pratama', 'KWC'),
('1844190054', 'Delfiani Lutfi Rahmadani', 'Jarkom'),
('1844190055', 'Yola Berliana Safira', 'Jarkom'),
('1844190056', 'Miftakul Rozak ', 'KWC');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minat_bakat`
--

CREATE TABLE `minat_bakat` (
  `id_minat` char(10) NOT NULL,
  `minat_bakat` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `minat_bakat`
--

INSERT INTO `minat_bakat` (`id_minat`, `minat_bakat`, `nilai`) VALUES
('M001', 'Administrasi Sistem Jaringan\r\n', 8),
('M002', 'Analisis Database Server\r\n', 9),
('M003', 'Merakit, Merancang dan Memperbaiki Komputer\r\n', 8),
('M004', 'Mobile Developer\r\n', 9),
('M005', 'Problem Soloving\r\n', 9),
('M006', 'Software Engineer\r\n', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_jarkom`
--

CREATE TABLE `mk_jarkom` (
  `nim` char(15) NOT NULL,
  `sistem_tekinf` int(11) NOT NULL,
  `jarkom` int(11) NOT NULL,
  `prak_jarkom` int(11) NOT NULL,
  `sistem_digital` int(11) NOT NULL,
  `arsitektur_organisasikom` int(11) NOT NULL,
  `keamanan_informasi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mk_jarkom`
--

INSERT INTO `mk_jarkom` (`nim`, `sistem_tekinf`, `jarkom`, `prak_jarkom`, `sistem_digital`, `arsitektur_organisasikom`, `keamanan_informasi`, `jumlah`) VALUES
('1844190003', 80, 68, 72, 78, 83, 68, 449),
('1844190007', 80, 83, 71, 80, 81, 55, 450),
('1844190010', 81, 78, 74, 76, 78, 83, 470),
('1844190021', 90, 84, 83, 77, 80, 81, 495),
('1844190025', 81, 89, 86, 78, 79, 85, 498),
('1844190026', 81, 80, 81, 80, 77, 81, 480),
('1844190029', 82, 78, 78, 78, 77, 76, 469),
('1844190036', 81, 74, 80, 85, 76, 83, 479),
('1844190042', 80, 80, 74, 74, 81, 70, 459),
('1844190049', 83, 90, 76, 85, 77, 84, 495),
('1844190053', 81, 79, 76, 81, 79, 78, 474),
('1844190054', 82, 82, 77, 72, 79, 82, 474),
('1844190055', 80, 86, 82, 84, 83, 88, 503),
('1844190056', 80, 81, 74, 79, 83, 78, 475);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_kwc`
--

CREATE TABLE `mk_kwc` (
  `nim` char(20) NOT NULL,
  `data_mining` int(11) NOT NULL,
  `tekweb` int(11) NOT NULL,
  `prak_tekweb` int(11) NOT NULL,
  `sda` int(11) NOT NULL,
  `prak_sda` int(11) NOT NULL,
  `dasar_algoritma` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mk_kwc`
--

INSERT INTO `mk_kwc` (`nim`, `data_mining`, `tekweb`, `prak_tekweb`, `sda`, `prak_sda`, `dasar_algoritma`, `jumlah`) VALUES
('1844190003', 73, 87, 56, 67, 68, 77, 428),
('1844190007', 64, 91, 72, 67, 71, 75, 440),
('1844190010', 76, 83, 71, 65, 79, 79, 453),
('1844190021', 70, 92, 65, 65, 74, 72, 438),
('1844190025', 76, 87, 65, 79, 80, 69, 456),
('1844190026', 77, 86, 72, 76, 83, 72, 466),
('1844190029', 74, 92, 69, 74, 70, 69, 448),
('1844190036', 87, 93, 82, 92, 95, 78, 527),
('1844190042', 71, 86, 74, 71, 78, 71, 451),
('1844190049', 75, 93, 82, 90, 80, 79, 499),
('1844190053', 71, 64, 62, 66, 68, 77, 408),
('1844190054', 83, 81, 90, 79, 75, 72, 480),
('1844190055', 84, 95, 78, 86, 73, 79, 495),
('1844190056', 59, 75, 53, 77, 73, 75, 412);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_rpl`
--

CREATE TABLE `mk_rpl` (
  `nim` char(20) NOT NULL,
  `ddp` int(11) NOT NULL,
  `prak_ddp` int(11) NOT NULL,
  `prak_basdat` int(11) NOT NULL,
  `basdat` int(11) NOT NULL,
  `pbo` int(11) NOT NULL,
  `prak_pbo` int(11) NOT NULL,
  `rpl` int(11) NOT NULL,
  `basdat_lanjut` int(11) NOT NULL,
  `pem_visual` int(11) NOT NULL,
  `analisa_perancangan_sis` int(11) NOT NULL,
  `tbo` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mk_rpl`
--

INSERT INTO `mk_rpl` (`nim`, `ddp`, `prak_ddp`, `prak_basdat`, `basdat`, `pbo`, `prak_pbo`, `rpl`, `basdat_lanjut`, `pem_visual`, `analisa_perancangan_sis`, `tbo`, `jumlah`) VALUES
('1844190003', 78, 79, 80, 66, 67, 68, 80, 78, 65, 82, 77, 820),
('1844190007', 69, 75, 78, 66, 78, 74, 77, 77, 68, 80, 86, 828),
('1844190010', 73, 74, 76, 64, 81, 79, 81, 84, 66, 81, 81, 840),
('1844190021', 77, 79, 81, 75, 69, 67, 81, 74, 70, 79, 83, 835),
('1844190025', 84, 79, 84, 68, 76, 68, 77, 84, 68, 74, 81, 843),
('1844190026', 82, 78, 80, 70, 75, 78, 83, 79, 73, 77, 76, 851),
('1844190029', 72, 84, 82, 64, 74, 76, 78, 77, 75, 79, 79, 840),
('1844190036', 88, 84, 87, 79, 79, 70, 85, 85, 89, 80, 79, 905),
('1844190042', 74, 94, 83, 61, 80, 87, 79, 74, 84, 75, 85, 876),
('1844190049', 84, 82, 87, 72, 91, 87, 85, 89, 85, 85, 88, 935),
('1844190053', 85, 80, 78, 65, 71, 70, 77, 81, 71, 77, 80, 835),
('1844190054', 91, 82, 83, 69, 84, 82, 82, 84, 75, 83, 88, 903),
('1844190055', 87, 82, 85, 65, 81, 78, 83, 82, 82, 78, 87, 890),
('1844190056', 82, 71, 78, 60, 66, 63, 65, 81, 64, 75, 70, 775);

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
-- Struktur dari tabel `profesi_kerja`
--

CREATE TABLE `profesi_kerja` (
  `id_profesi` char(10) NOT NULL,
  `profesi_kerja` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profesi_kerja`
--

INSERT INTO `profesi_kerja` (`id_profesi`, `profesi_kerja`, `nilai`) VALUES
('P001', 'Computer Network/Data Engineer', 9),
('P002', 'Database Engineer / Database Administrator', 5),
('P003', 'Designer Grafis', 6),
('P004', 'Developer IT', 17),
('P005', 'Software Engineer', 8),
('P006', 'System Analyst dan System Inte', 7);

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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alvi', 'marlvi@gmail.com', NULL, '$2y$10$I0Q.OrCSlsAA7KwDjE985OslVSqN7kP1/SnD45kQUG216FlfvfE5y', NULL, '2022-07-14 09:08:30', '2022-07-14 09:08:30'),
(2, 'alvi', 'vi@gmail.com', NULL, '$2y$10$UO9RLQXIC03SE9DRaUElSOXXjnq3EEIwDLo48M.cL64BfxkrtKtO6', NULL, '2022-07-18 21:31:28', '2022-07-18 21:31:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_mhs`
--
ALTER TABLE `db_mhs`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nama` (`nama_mhs`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD PRIMARY KEY (`id_minat`);

--
-- Indeks untuk tabel `mk_jarkom`
--
ALTER TABLE `mk_jarkom`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mk_kwc`
--
ALTER TABLE `mk_kwc`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mk_rpl`
--
ALTER TABLE `mk_rpl`
  ADD PRIMARY KEY (`nim`);

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
-- Indeks untuk tabel `profesi_kerja`
--
ALTER TABLE `profesi_kerja`
  ADD PRIMARY KEY (`id_profesi`);

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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
