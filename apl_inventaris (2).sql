-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2019 pada 01.39
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apl_inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `id_level`, `created_at`, `updated_at`) VALUES
(1, 'Aji', 'admin', 'admin', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `kondisi` varchar(8) NOT NULL,
  `stok_barang` int(3) NOT NULL,
  `status` char(1) NOT NULL,
  `waktu_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama_barang`, `id_jenis`, `kondisi`, `stok_barang`, `status`, `waktu_register`) VALUES
(1, 'Logitech', 1, 'Baik', 10, '', '2019-09-03 17:00:00'),
(3, 'Colokan Jaya', 2, 'Baik', 10, '', '2019-09-23 03:12:58'),
(4, 'Helios Mouse', 1, 'Baik', 5, '', '2019-09-24 02:08:07'),
(8, 'Colokan Jankrik', 2, 'Baik', 3, '', '2019-09-24 02:14:28'),
(9, 'Colokan Mantul', 2, 'Baik', 5, '', '2019-09-24 02:16:25'),
(10, 'Colokan Jos', 2, 'Baik', 3, '', '2019-09-24 02:17:58'),
(11, 'Fantech Mouse', 1, 'Baik', 10, '', '2019-09-25 00:53:18'),
(12, 'Juju Mouse', 1, 'Baik', 3, '', '2019-09-25 01:00:00'),
(13, 'Colokan Mantap', 2, 'Baik', 2, '', '2019-09-25 01:09:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(15) NOT NULL,
  `kondisi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `kondisi`) VALUES
(1, 'Mouse', 'Baik'),
(2, 'Colokan', 'Baik'),
(3, 'Keyboard', 'Baik'),
(4, 'Keyboard', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Teknik Komputer Jaringan'),
(3, 'Multimedia'),
(4, 'Animasi'),
(5, 'Multimedia 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tingkat_kelas`) VALUES
(1, 10),
(2, 11),
(3, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `waktupinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `kuantitas` int(2) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `waktupinjam`, `id_user`, `id_kelas`, `id_jurusan`, `id_inventaris`, `id_jenis`, `kuantitas`, `id_ruang`, `id_admin`, `status`) VALUES
(1, '2019-10-10 02:06:27', 1, 3, 1, 1, 1, 1, 2, 1, '1'),
(2, '2019-10-15 02:42:05', 2, 3, 1, 3, 2, 1, 2, 1, '1'),
(3, '2019-10-16 01:59:53', 3, 3, 1, 4, 1, 1, 1, 1, '1'),
(9, '2019-10-16 02:04:42', 5, 1, 2, 1, 1, 1, 1, 1, '1'),
(10, '2019-10-16 02:13:51', 6, 2, 3, 1, 1, 2, 1, 1, '1'),
(11, '2019-10-17 01:51:05', 5, 1, 1, 1, 1, 1, 1, 1, '1'),
(12, '2019-10-17 01:53:41', 5, 1, 1, 1, 1, 1, 1, 1, '1'),
(13, '2019-10-17 02:34:12', 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(14, '2019-10-17 02:34:44', 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(15, '2019-10-17 02:35:24', 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(16, '2019-10-17 02:35:33', 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(17, '2019-10-17 02:37:15', 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(18, '2019-10-22 00:51:57', 2, 2, 4, 3, 2, 2, 2, 1, '1'),
(19, '2019-10-23 02:29:07', 1, 1, 1, 1, 1, 2, 1, 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `waktupengembalian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kondisi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`) VALUES
(1, 'A01'),
(2, 'A02'),
(3, 'A03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(191) NOT NULL,
  `id_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `id_kelas`, `id_jurusan`, `username`, `password`, `id_level`, `created_at`, `updated_at`) VALUES
(1, 'Salwa Ahmad Z', 3, 1, 'salwa', '1234', 2, NULL, NULL),
(2, 'Arya Wijaya', 2, 1, 'arya', '1234', 2, NULL, NULL),
(3, 'Baritsa Arya', 3, 3, 'barit', '1234', 2, NULL, NULL),
(4, 'Salwa Ahmad Zanjabila', 1, 1, 'salwaahmadz', '$2y$10$FMqyge879H8q862yrM/.4OfzSApAbSLIXxt5RbyoIGn9dGcrAKlLm', 2, '2019-09-25 22:18:05', '2019-09-25 22:18:05'),
(5, 'Fachrurozi', 1, 1, 'oji', '$2y$10$CKDRP3SSXJa8/D7OIN324eLBlM8qmSyuNieZ7Jt/1zd7yTcwmxf.K', 2, '2019-09-25 22:20:17', '2019-09-25 22:20:17'),
(6, 'Raihan Saleh Sungkar', 3, 5, 'raihan', '$2y$10$0z/iwYgKXb4t94e.j8iCfeDXh6MhnhMaWnJ3BR79tIMLWVBpWQYi2', 2, '2019-09-25 22:24:06', '2019-09-25 22:24:06'),
(7, 'Rifqi Fadhli', 2, 4, 'rifqi', '$2y$10$49kqims1E6wnv4c1zt4G2ucAm.2Ahz9n3I1gHtT7fGrBnjfH3y5zO', 2, '2019-09-25 22:25:08', '2019-09-25 22:25:08'),
(8, 'Ila Hija', 3, 1, 'ila', '$2y$10$7mlCepcteMTBfJg5tGPqzOvu9IYLRQrCAvGEHsKOOR/xnj0fRiy1S', 2, '2019-09-25 23:15:50', '2019-09-25 23:15:50'),
(9, 'Maulana Irsyad', 3, 1, 'irsyad', '$2y$10$wau0lzW2/TsFXVhwogGAj.PYTxH2vVTPl0V7s5a1suo24zitp9Rxu', 2, '2019-10-23 19:34:25', '2019-10-23 19:34:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

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
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_petugas` (`id_admin`),
  ADD KEY `id_inventaris` (`id_inventaris`),
  ADD KEY `id_inventaris_2` (`id_inventaris`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_inventaris` (`id_inventaris`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_kelas` (`id_kelas`);

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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Ketidakleluasaan untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `peminjaman_ibfk_4` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`),
  ADD CONSTRAINT `peminjaman_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `peminjaman_ibfk_6` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `peminjaman_ibfk_7` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
