-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2021 pada 12.55
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terapi_keperawatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa_pasien`
--

CREATE TABLE `diagnosa_pasien` (
  `id` int(11) NOT NULL,
  `unique_id` text NOT NULL,
  `id_user` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `keluhan` text NOT NULL,
  `terapi` text DEFAULT NULL,
  `jenis_keluhan` text NOT NULL,
  `keluhan_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa_pasien`
--

INSERT INTO `diagnosa_pasien` (`id`, `unique_id`, `id_user`, `tgl_mulai`, `keluhan`, `terapi`, `jenis_keluhan`, `keluhan_id`) VALUES
(1, '60ab852ea748c', '1', '2021-05-24', 'Nyeri Kronis', 'GUIDED IMAGERY', 'Merasakan nyeri, Merasakan Gelisah, Gangguan Pola Tidur, Kurang Konsentrasi, Aktivitas Anda Terhambat', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `nama_gejala` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `tgl_tambah_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `nama_gejala`, `id_penyakit`, `tgl_tambah_data`) VALUES
(1, 'Merasakan nyeri', 1, '2021-05-24 02:22:49'),
(2, 'Merasakan Gelisah', 1, '2021-05-19 09:10:23'),
(3, 'Gangguan Pola Tidur', 1, '2021-05-19 09:10:28'),
(4, 'Kurang Konsentrasi', 1, '2021-05-19 09:10:32'),
(5, 'Aktivitas Anda Terhambat', 1, '2021-05-19 09:10:38'),
(6, 'Merasa Tertekan', 1, '2021-05-19 09:10:50'),
(7, 'Tampak Meringis', 1, '2021-05-19 09:10:55'),
(8, 'Merasa Tegang', 2, '2021-05-19 09:58:53'),
(9, 'Merasa Gelisah', 2, '2021-05-19 09:58:53'),
(10, 'Kesulitan Tidur', 2, '2021-05-19 09:59:12'),
(11, 'Berdebar-debar', 2, '2021-05-19 09:59:12'),
(12, 'Nafas terasa sesak/tersengal-sengal', 2, '2021-05-19 09:59:57'),
(13, 'Sulit berkosentrasi', 2, '2021-05-19 09:59:57'),
(14, 'Suara bergetar', 2, '2021-05-19 10:00:18'),
(15, 'Merasa pusing', 2, '2021-05-19 10:00:18'),
(16, 'Merasa Khawatir', 2, '2021-05-19 10:00:31'),
(17, 'IMT > 25Kg/m2 (pada orang dewasa)', 3, '2021-05-19 10:04:28'),
(18, 'IMT < 18kg/m2', 4, '2021-05-19 10:04:28'),
(19, 'Cepat kenyang setelah makan', 4, '2021-05-19 10:06:30'),
(20, 'Kram/nyeri perut', 4, '2021-05-19 10:06:30'),
(21, 'Nafsu makan menurun', 4, '2021-05-19 10:07:00'),
(22, 'Otot mengunyah dan menelan lemah', 4, '2021-05-19 10:07:00'),
(23, 'Membran mukosa mulut pucat', 4, '2021-05-19 10:07:27'),
(24, 'Rambut rontok berlebihan', 4, '2021-05-19 10:07:27'),
(25, 'BAB >3x dalam 24 jam', 5, '2021-05-19 10:08:06'),
(26, 'BAB lembek dan cair', 4, '2021-05-19 10:08:06'),
(27, 'Kram/nyeri perut', 5, '2021-05-19 10:08:29'),
(28, 'Nafsu makan menurun', 5, '2021-05-19 10:08:29'),
(29, 'Bising usus hiperaktif', 5, '2021-05-19 10:08:48'),
(30, 'IMT >27kg/m2', 6, '2021-05-19 10:09:28'),
(31, 'Merasakan nyeri', 7, '2021-05-19 10:09:58'),
(32, 'Merasa gelisah', 7, '2021-05-19 10:09:58'),
(33, 'Sulit tidur', 7, '2021-05-19 10:10:24'),
(34, 'Denyut nadi meningkat', 7, '2021-05-19 10:10:24'),
(35, 'Berkeringat banyak', 7, '2021-05-19 10:10:41'),
(36, 'Nafas cepat', 7, '2021-05-19 10:10:41'),
(37, 'Tampak Meringis', 7, '2021-05-19 10:11:19'),
(38, 'Suhu tubuh diatas 37.5 celcius', 8, '2021-05-19 10:11:19'),
(39, 'Kulit Merah', 8, '2021-05-19 10:11:34'),
(40, 'Kejang', 8, '2021-05-19 10:11:34'),
(41, 'Kulit teraba hangat', 8, '2021-05-19 10:11:57'),
(42, 'Denyut nadi meningkat ', 8, '2021-05-19 10:11:57'),
(43, 'Nafas Cepat', 8, '2021-05-19 10:12:33'),
(44, 'Suhu tubuh <36 derajat celcius', 9, '2021-05-19 10:12:52'),
(45, 'Kulit teraba dingin', 9, '2021-05-19 10:13:14'),
(46, 'Menggigil', 9, '2021-05-19 10:13:14'),
(47, 'test', 1, '2021-05-21 20:28:07'),
(48, 'test 1', 1, '2021-05-21 20:29:11'),
(49, 'asdfasdf', 1, '2021-05-24 02:18:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `intervensi_komplementer`
--

CREATE TABLE `intervensi_komplementer` (
  `id` int(11) NOT NULL,
  `nama_terapi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tambah` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `intervensi_komplementer`
--

INSERT INTO `intervensi_komplementer` (`id`, `nama_terapi`, `penyakit`, `tgl_tambah`) VALUES
(1, 'GUIDED IMAGERY', '1', '2021-05-20 03:27:07'),
(2, 'FOOT MESSAGE', '1', '2021-05-20 03:27:12'),
(3, 'KOMPRES HANGAT', '1', '2021-05-20 03:27:18'),
(4, 'KOMPRES JAHE', '1', '2021-05-20 03:27:21'),
(5, 'PEMBUATAN EKSTRAK KUNYIT', '1', '2021-05-20 03:27:24'),
(6, 'Rebusan Daun Salam', '1', '2021-05-20 03:27:28'),
(7, 'Relaksasi Nafas Dalam', '1', '2021-05-20 03:27:31'),
(8, 'Rendam Kaki', '1', '2021-05-20 03:27:34'),
(9, 'GUIDED IMAGERY', '2', '2021-05-20 03:38:12'),
(10, 'MEDITASI', '2', '2021-05-20 03:38:15'),
(11, 'RELAKSASI BENSON', '2', '2021-05-20 03:38:17'),
(12, 'TERAPI MURROTAL AR RAHMAN', '2', '2021-05-20 03:38:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `langkah_terapi`
--

CREATE TABLE `langkah_terapi` (
  `id` int(11) NOT NULL,
  `langkah_terapi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_terapi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tambah` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `langkah_terapi`
--

INSERT INTO `langkah_terapi` (`id`, `langkah_terapi`, `nama_terapi`, `tgl_tambah`) VALUES
(1, '<ol>\r\n<li>Persiapan Lingkungan : nyaman , tenang, bebas gangguan</li>\r\n<li>Pelaksanaan:\r\n<p>1.Posisi bersandar / terlentang</p>\r\n<p>2.Kosongkan pikiran</p>\r\n<p>3.Tarik nafas dalam melalui hidung dan keluarkan perlahan lewat mulut</p>\r\n<p>4.Bayangkan hal seperti: Masa-masa yang indah dan menyenangkan bagi anda</p>\r\n<p>5.Bayangkan hal tersebut, semakin jelas, semakin nyata</p>\r\n<p>6.Rasakan bahwa anda mulai dapat merasakan kembali berada di masa itu</p>\r\n<p>7.Rasakan betapa rileks dan tenangnya tubuh anda</p>\r\n<p>8.Rasakah perasaan rileks ini dari kepala hingga ujung kaki</p>\r\n<p>9.Perlahan hitung mundur dari 10</p>\r\n<p>10.Buka mata perlahan</p>\r\n<p>11.Setelah terbangun, rasa rileks tersebut benar-benar telah anda rasakan kembali</p>\r\n</li>\r\n</ol>', '1', '2021-05-20 04:00:48'),
(2, '<ul>\r\n<li>Cuci jahe 5 buah (100 gram) dan iris tipis-tipis</li>\r\n<li>Masukan irisan jahe ke dalam 1 liter air (sekitar 4 gelas)</li>\r\n<li>Rebus irisan jahe sampai mendidih (100 derajat celcius)</li>\r\n<li>Tuang rebusan jahe ke dalam baskom, tunggu hingga rebusan jahe menjadi hangat tanpa campuran air dingin</li>\r\n<li>Ambil wsalap, basahi dengan air rebusan jahe, diperas sedikit</li>\r\n<li>Tutup baskom agar panas tidak cepat hilang</li>\r\n<li>Tempelkan pada area yang sakit sampai kehangatan waslap berkurang</li>\r\n<li>Lakukan kurang lebih 15 menit</li>\r\n</ul>', '4', '2021-05-20 05:04:04'),
(3, '<ul>\r\n<li>Ambil 5 rimpang kunyit</li>\r\n<li>Cuci sampai bersih, dikeringkan sebentar</li>\r\n<li>Bersihkan kunyit dari kulitnya</li>\r\n<li>Parut dan simpan di dalam mangkok</li>\r\n<li>Tambahkan air sebanyak 50 ml</li>\r\n<li>Saring kunyit yang sudah ditambahkan air</li>\r\n<li>Masukan esktrak kunyit kedalam gelas</li>\r\n<li>Siap di minum</li>\r\n</ul>', '5', '2021-05-20 05:04:13'),
(4, '<ol>\r\n<li>Siapkan 10-15 lembar daun salam</li>\r\n<li>Nyalakan kompor</li>\r\n<li>Tuangkan air 500 cc (2 gelas) kedalam wadah rebusan</li>\r\n<li>Masukan daun salam 10-15 lembar</li>\r\n<li>Masak hingga air mendidih, sampai kurang leboh air menjadi 150cc (1 gelas)</li>\r\n<li>Biarkan air rebusan daun salam dingin sebelum diminum</li>\r\n</ol>', '6', '2021-05-20 05:04:22'),
(5, '<ol>\r\n<li>Duduk senyaman mungkin</li>\r\n<li>Pejamkan mata</li>\r\n<li>Tenang dan kendorkan otot-otot tubuh dari ujung kaki sampai dengan otot wajah dan rasakan dengan rileks</li>\r\n<li>Tarik nafas dalam lewat hidung, tahan 3 detik lalu hembuskan lewat mulut dan ucapkan doa atau kata yang telah dipilih (pilih kata-kata yang baik dan memotivasti atau memberi semangat)</li>\r\n<li>Buang pikiran negatif, dan tetap fokus pada nafas dalam dan doa atau kata kata yang telah dipilihkan</li>\r\n<li>Lakukan selama kurang lebih 10 menit</li>\r\n<li>Akhiri relaksasi dengan tetap menutup mata selama 2 menit lalu buka mata secara perlahan</li>\r\n</ol>', '12', '2021-05-20 05:05:54'),
(6, '<ol>\r\n<li>Usahakan sebelum memulai terapi Anda memahami terlebih dahulu arti daru surah Ar Rahman.</li>\r\n<li>Duduk senyaman mungkin</li>\r\n<li>Pejamkan mata</li>\r\n<li>Tenang dan kendorkan otot-otot tubuh dari ujung kaki sampai dengan otot wajah dan rasakan dengan rileks</li>\r\n<li>Tarik nafas dalam lewat hidung, tahan 3 detik lalu hembuskan lewat mulut</li>\r\n<li>Fokus pada nafas dalam dan bacaan surah Ar Rahman (putar murottal dalam volume yang tidak tinggi)</li>\r\n<li>Lakukan sampai bacaan Ar Rahman selesai</li>\r\n<li>Akhiri relaksasi dengan tetap menutup mata selama 2 menit lalu buka mata secara perlahan</li>\r\n<li>Lakukan 3 &ndash; 7 hari</li>\r\n</ol>', '11', '2021-05-20 05:05:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `nama_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tambah` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama_penyakit`, `kode_penyakit`, `tgl_tambah`) VALUES
(1, 'Nyeri Kronis', '(D.0078)', '2021-05-19 09:48:32'),
(2, 'Ansietas/Kecemasan', '(D.0080)', '2021-05-19 09:48:49'),
(3, 'Berat Badan Berlebih', '(D.0018)', '2021-05-19 09:50:11'),
(4, 'Defisit Nutrisi', '(D.0019)', '2021-05-19 09:50:05'),
(5, 'Diare', '(D.0020)', '2021-05-19 09:50:00'),
(6, 'Obesitas', '(D.0030)', '2021-05-19 09:49:56'),
(7, 'Nyeri Akut', '(D.0077)', '2021-05-19 09:49:51'),
(8, 'Hipertemia', '(D.0130)', '2021-05-19 09:49:45'),
(9, 'Hipotermia', '(D.0131)', '2021-05-19 09:49:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `nama_user` text NOT NULL,
  `rating_star` int(11) NOT NULL,
  `review` text NOT NULL,
  `tgl_rating` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `nama_user`, `rating_star`, `review`, `tgl_rating`) VALUES
(1, 'Bickri Khidam Assyamsi', 5, 'baguis', '2021-05-24 10:43:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_lengkap` text COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `jekel` text COLLATE utf8_unicode_ci NOT NULL,
  `kota` text COLLATE utf8_unicode_ci NOT NULL,
  `diagnosa_medis` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nama_lengkap`, `umur`, `jekel`, `kota`, `diagnosa_medis`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'Bickri Khidam Assyamsi', 22, 'laki-laki', 'Depok', 'mager', '$2y$10$q1jxcK6mNtb2lXEKaOkCKujk41.zMN1Obk5OrGds4NCgXunreVTWm', 2, NULL, '2021-05-21 00:30:29', '2021-05-21 00:30:29'),
(2, 'admin', 'admin', 25, 'laki-laki', 'jakarta', '-', '$2y$10$gb7/fVspdJwyXUpMBxmJrujCiDTNgtgNWdhWnb1LYypc8Dhmg/F0.', 1, NULL, '2021-05-21 02:32:59', '2021-05-21 02:32:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa_pasien`
--
ALTER TABLE `diagnosa_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `intervensi_komplementer`
--
ALTER TABLE `intervensi_komplementer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `langkah_terapi`
--
ALTER TABLE `langkah_terapi`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diagnosa_pasien`
--
ALTER TABLE `diagnosa_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `intervensi_komplementer`
--
ALTER TABLE `intervensi_komplementer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `langkah_terapi`
--
ALTER TABLE `langkah_terapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
