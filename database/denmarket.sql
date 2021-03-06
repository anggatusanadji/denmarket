-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2021 pada 08.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denmarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(3) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sepatu Futsal', '2021-03-01 06:04:22', '2021-03-03 00:34:46', NULL),
(2, 'Sepatu Bola', '2021-03-01 05:55:22', '2021-03-01 05:55:22', NULL),
(3, 'Sepatu Lari', '2021-03-01 05:58:53', '2021-03-02 16:26:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Angga Tusan Adji', 'anggatusanadji@gmail.com', 'produk yang dijual sangat berkualitas', '2021-03-06 07:42:21', '2021-03-06 07:42:21', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(3) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi_produk` varchar(500) NOT NULL,
  `kategori_id` int(3) NOT NULL,
  `size_produk` varchar(30) NOT NULL,
  `harga_produk` varchar(30) NOT NULL,
  `tipe_id` int(3) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama_produk`, `deskripsi_produk`, `kategori_id`, `size_produk`, `harga_produk`, `tipe_id`, `gambar_produk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Adidas c7', 'Shoes that use white dominance with blue patterns and also the Adidas logo on the right and left of the shoes are black', 2, '43, 44, 45, 46', '300000', 3, '1614829642.png', '2021-03-03 19:47:22', '2021-03-04 17:40:20', NULL),
(3, 'New Balance Furon 4.0', 'Shoes that use black dominance with a green gradient towards the front, these shoes use the number 1 quality of material, very light and comfortable to wear.', 2, '43 ,44, 45', '279000', 1, '1614904795.png', '2021-03-03 19:55:49', '2021-03-05 19:09:56', NULL),
(4, 'Nike Mercurial Superfly 7 Elite FG', '360-degree Flyknit construction wraps your foot for a second-skin fit. New high-tenacity yarn and a 1-piece lining create a close, secure feel on the field. A new ultra-thin NIKESKIN overlay gets you closer to the ball for high-speed maneuvers', 2, '43 , 44, 45, 46', '599000', 1, '1614904970.png', '2021-03-04 16:42:50', '2021-03-04 16:42:50', NULL),
(5, 'Adidas Dribble Fly J4', 'Shoes that use black dominance by containing a purple part under the back of the shoe and the top of the shoe, a shoe that looks very elegant for you to play on the field', 2, '43, 44, 45, 46, 47', '450000', 1, '1614905210.png', '2021-03-04 16:46:50', '2021-03-04 17:42:23', NULL),
(6, 'Adidas White Simple F5', 'Shoes that create an elegant impression with a fairly simple design, dominated by white and a pattern on the side of the shoe, and contain a logo on the front', 2, '42, 43, 44, 45, 46, 47', '330000', 1, '1614932519.png', '2021-03-04 16:56:21', '2021-03-05 00:21:59', NULL),
(7, 'Nike Vapor XII Elite White', 'Shoes that use white dominance with a black pattern on the front, prioritizing the quality of contemporary designs, make you look more powerful in the field', 2, '41, 42, 43, 44, 45', '450000', 1, '1614944010.png', '2021-03-05 03:33:30', '2021-03-05 19:10:05', NULL),
(8, 'Adidas Predator', 'You can\'t change the game till you let the game change you. Every match is a chance to be bigger, better. More in control. Unleash your full force of nature in Predator Freak.', 2, '43, 44, 45, 46', '899000', 3, '1614944282.png', '2021-03-05 03:38:02', '2021-03-05 03:38:02', NULL),
(9, 'New Balance Visaro 2.0', 'The playmakers’ choice; for the artists of the game, who strive to perform with daring creativity. The Visaro 2.0 features a performance ergonomic last with a lower toe spring and a PU synthetic upper for superior fit and comfort.', 2, '43, 44, 45, 46', '500000', 1, '1614944662.png', '2021-03-05 03:44:22', '2021-03-05 16:18:07', NULL),
(10, 'Nike Elastico Collection', 'Take our most innovative boot to the next level in the bike elastico. After analyzing thousands of footballs specific moves, a material was added to the flyknit to give you better touch and control of the ball', 1, '43, 44, 45, 46', '799000', 3, '1614945536.png', '2021-03-05 03:58:56', '2021-03-05 03:58:56', NULL),
(11, 'Nike football X Heritage', 'Take our most innovative boot to the next level in the bike elastico. After analyzing thousands of footballs specific moves, a material was added to the flyknit to give you better touch and control of the ball', 1, '43, 44, 45, 46', '300000', 3, '1614945709.png', '2021-03-05 04:01:49', '2021-03-05 04:01:49', NULL),
(12, 'Nike Mercurial Superfly 7 Elite IC', 'Take our most innovative boot to the next level in the bike elastico. After analyzing thousands of footballs specific moves, a material was added to the flyknit to give you better touch and control of the ball', 1, '43, 44, 45, 46', '700000', 3, '1614945829.png', '2021-03-05 04:03:49', '2021-03-05 04:03:49', NULL),
(13, 'Nike mercurial 360 elite TF', 'Take our most innovative boot to the next level in the bike elastico. After analyzing thousands of footballs specific moves, a material was added to the flyknit to give you better touch and control of the ball', 1, '43, 44, 45, 46', '799000', 3, '1614945946.png', '2021-03-05 04:05:46', '2021-03-05 05:34:09', NULL),
(14, 'Chuteira Futsal Adidas Nemeziz', 'Take our most innovative boot to the next level in the bike elastico. After analyzing thousands of footballs specific moves, a material was added to the flyknit to give you better touch and control of the ball', 1, '43, 44, 45, 46', '400000', 3, '1614946027.png', '2021-03-05 04:07:07', '2021-03-05 04:07:07', NULL),
(15, 'Mizuno Morelia Sala Clasic', 'It has a genuine leather base material and it can make it easier to control the ball. Your thumbs won\'t hurt with the flexibility of these Mizuno Morelia shoes. Also, the rubber-based sole will offer a lightweight and also strong grip on the surface of the court.', 1, '43, 44, 45, 46', '1200000', 3, '1614946787.png', '2021-03-05 04:19:47', '2021-03-05 04:19:47', NULL),
(16, 'Nike Lunar Gato II', 'Nike\'s main goal in releasing the Lunar Gato since 5 years ago is to bring comfort to the wearer. When you play on any kind of court even on the streets. Made from goatskin, you don\'t need adaptation when you first use it. The exterior is made with smooth panels and will move naturally with the wearer\'s movements. The sole bearing wears the Lunarlon feature used by Nike running shoes.', 1, '43, 44, 45, 46', '800000', 3, '1614946937.png', '2021-03-05 04:22:17', '2021-03-05 04:22:17', NULL),
(17, 'Nike Mercurial x 360 elite IC', 'Take our most innovative boot to the next level in the bike elastico. After analyzing thousands of footballs specific moves, a material was added to the flyknit to give you better touch and control of the ball', 1, '43, 44, 45, 46', '499000', 3, '1614947027.png', '2021-03-05 04:23:47', '2021-03-05 05:34:34', NULL),
(18, 'Adidas ZX Flux', 'The shoe is reminiscent of a Jackson Pollack painting, with the upper used as a canvas for a rainbow assortment of splattered paint. This is mostly on the toe box, with the paint trailing off as you continue back towards the heel area. The midsole is a classic Running White, while the outsole splits between black on the forefoot and grey in the heel.', 3, '43, 44, 45, 46', '1299000', 3, '1614950671.png', '2021-03-05 05:24:31', '2021-03-05 05:24:31', NULL),
(19, 'Nike Revolution EXT', 'The Nike Revolution 5 EXT delivers a premium spin on a favourite. It cushions your stride with soft foam to keep you running in comfort. Lightweight mesh material wraps your foot in breathable support, while a minimalist design fits in just about anywhere your day takes you.', 3, '43, 44, 45, 46', '600000', 3, '1614950739.png', '2021-03-05 05:25:39', '2021-03-05 05:25:39', NULL),
(20, 'Nike Tanjun Grey 2 Original BNWB', 'The Nike Tanjun Grey 2 is all about support and cushioning. Its lightweight and padded design helps keep you moving as you push through your miles. Chrome-like details add a premium touch to a running favorite.', 3, '43, 44, 45, 46', '200000', 3, '1614951011.png', '2021-03-05 05:30:11', '2021-03-05 05:30:11', NULL),
(21, 'Adidas Swift Run X Shoes', 'When you wear these running-inspired adidas Swift Run X Shoes, you\'re ready to take on the city first thing. Out of bed. Into the kicks. Out the door. You feel it in each step up the hill. The airy upper and lightweight cushioning are like a breath of fresh air for your day', 3, '43, 44, 45, 46', '999000', 3, '1614951113.png', '2021-03-05 05:31:53', '2021-03-05 05:31:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_produk`
--

CREATE TABLE `tb_tipe_produk` (
  `id` int(3) NOT NULL,
  `tipe_produk` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tipe_produk`
--

INSERT INTO `tb_tipe_produk` (`id`, `tipe_produk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Popular', NULL, NULL, NULL),
(2, 'Diskon', NULL, NULL, NULL),
(3, 'None', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angga Tusan Adji', 'anggatus', 'anggatusanadji@gmail.com', NULL, '$2y$10$7sGkviWyBcWYHr5tOoZb9.6egWBYidR1zJs8jI6R1mg2ZeGlr3K0q', 'NX6XArxzvA1xLFx32my220HVIX7jbk8r10jv8hw6VFNPxlcKhFaxyCyRcYSK', '2021-02-28 06:11:30', '2021-02-28 06:11:30'),
(2, 'Admin', 'admin', 'admin123@gmail.com', NULL, '$2y$10$XmQfqcI5jLWehStR6Nz2/.LutyHWkuFGAxZ/rr/CFTFf32gn1WjU.', NULL, '2021-03-05 23:04:38', '2021-03-05 23:04:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipe_id` (`tipe_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `tb_tipe_produk`
--
ALTER TABLE `tb_tipe_produk`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_tipe_produk`
--
ALTER TABLE `tb_tipe_produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`tipe_id`) REFERENCES `tb_tipe_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_3` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
