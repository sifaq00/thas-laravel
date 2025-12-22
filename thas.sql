-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2024 at 04:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thas`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `category_id`, `created_at`, `updated_at`, `author`) VALUES
(5, 'Kunjungan Industri Ke Gallery Prawirotaman Hotel ', '<p><strong>Selasa, 03 Oktober 2023</strong> mahasiswa Tumbuh Hospitality &amp; Arts School melaksanakan kunjungan industri ke Gallery Prawirotaman Hotel yang beralamat di Jl. Prawirotaman 2 No.839 B, Brontokusuman, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta. Kunjungan industri ini merupakan salah satu kegiatan pembelajaran di luar kampus untuk menambah wawasan dan mengamati secara langsung area lingkungan kerja perhotelan.</p><p>Sebagaimana tamu hotel, para mahasiswa disambut oleh resepsionis hotel dengan senyum ramah dan diterima langsung oleh Bapak Iwan Ridwan. M selaku General Manager Gallery Prawirotaman Hotel. Pada kesempatan tersebut, para mahasiswa diperkenalkan dengan seluruh jajaran pimpinan Gallery Prawirotaman Hotel dan diberikan penjelasan lengkap tentang Gallery Prawirotaman Hotel mulai dari sejarah berdirinya, para pendirinya, jenis dan kapasitas kamar hotel, fasilitas hotel, event-event yang diselenggarakan hotel, sampai tentang kemitraan Gallery Prawirotaman Hotel dengan berbagai pihak.</p><p>Para mahasiswa juga diajak tour hotel yang ditemani oleh Bapak Wawan Kurniwan selaku Executive Housekeeper Hotel. Beliau menunjukkan ruangan kamar hotel, dapur hotel, ruang makan tamu, ruang laundry, ruang spa, café, ruang gallery, ruang gym, dan berbagai fasilitas hotel lainnya. Bapak Wawan juga mengajarkan kepada mahasiswa prosedur yang benar dalam melakukan Making Bed, mulai dari mengganti sprei, duvet, sarung batal, selimut, sampai membuat art towel sebagai hiasan tempat tidur.</p><p>Melalui kunjungan industri ini diharapkan mahasiswa memiliki wawasan yang lebih luas dan kongkrit tentang lingkungan kerja di dunia industri perhotelan.&nbsp;</p>', 'uploads/articles/01JDCN5G3JS7ERRXARG4ER9PYV.jpg', 1, '2024-11-23 07:00:15', '2024-11-23 07:00:15', 'Sri Aryaningsih'),
(6, 'Gelar Karya Mahasiswa 2023', '<p>Gelar karya mahasiswa untuk pertama kalinya dilaksanakan di Tumbuh Hospitality &amp; Arts School pada hari Senin, 11 Desember 2023 dengan mengangkat tema Launching Produk Bersama Mitra Kopi Mlaku dan Colours Street Food. Gelar karya mahasiswa merupakan perayaan pembelajaran mahasiswa selama 1 semester. &nbsp;</p><p>Tema ini diangkat karena untuk pertama kalinya Tumbuh Hopsitality &amp; Arts School meluncurkan produk baru yang berupa Coffee Bun, Muffin Bun, Choco Chips Cookies, dan Abon Cheese Cookies dengan mengusung merk Tumbuh BakeHouse. Tumbuh BakeHouse ini merupakan merk produk sekaligus rumah produksi yang menghasilkan berbagai produk kue dan roti.</p><p>Pada acara seremoni lauching produk, Ibu Wresti Wrediningish, M.Psi selaku perwakilan Yayasan Edukasi Anak Nusantara dalam sambutannya mengucapkan selama kepada mahasiswa Tumbuh Hospitality &amp; Arts School yang telah berhasil membuat produk perdananya dan memberikan semangat kepada seluruh Kepala Sekolah di semua kampus agar terus memupuk jiwa kewirausahaan anak-anak yang sudah dimulai sejak dari KB/TK Tumbuh sampai dengan Tumbuh Hopsitality &amp; Arts School. Beliau berharap Tumbuh Hospitality &amp; Arts School melalui produk-produk Tumbuh dapat menjadi program keunggulan kampus, membangun kemandian lembaga, dan mengembangkan ekonomi sirkular di Sekolah Tumbuh.</p><p>Seremoni Gelar karya mahasiswa diikuti dengan pemotongan tumpeng yang diberikan kepada Plt. Kepala Tumbuh Hopsitality &amp; Arts School, Ibu Sri Aryaningsih, M.Pd dan kepada ibu Dina selaku perwakilan mitra. Acara juga diikuti dengan penyerahan tester produk kepada Ibu Issriastuti selaku perwakilan Yayasan Edukasi Anak Nusantara dan ibu Dina selaku perwakilan mitra sebagai simbol kemitraan antar lembaga.</p><p>Gelar karya mahasiswa juga dimeriahkan dengan stand tester produk dan stand jualan dimana para tamu undangan dapat mengicipi langsung atau membeli untuk oleh-oleh produk Coffee Bun, Muffin Bun, Choco Chips Cookies, dan Abon Cheese Cookies. Salah satu testimoni tamu undangan mengatakan bahwanya rasa enak dan layak dijual.&nbsp;</p>', 'uploads/articles/01JDCN86YVX1V49E1PX0R99SAJ.jpg', 1, '2024-11-23 07:01:44', '2024-11-23 07:01:44', 'Sri Aryaningsih'),
(7, 'Kunjungan Industri Ke Masama By Kamil Restaurant ', '<p><strong>Rabu, 07 Februari 2024</strong> mahasiswa Tumbuh Hospitality &amp; Arts School kembali melaksanakan kegiatan kunjungan industry, kali ini mereka berkunjung ke Masama by Kamil Restaurant yang berlokasi di Jl. Tirtodipuran, No. 26, Matrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta. Kunjungan industri ini merupakan salah satu kegiatan pembelajaran di luar kampus untuk menambah wawasan dan mengamati secara langsung dunia kerja terkait peminatan Food &amp; Beverage Production.&nbsp;</p><p>Masama by Kamil Restaurant memang dikenal mencuri perhatian masyarakat karena menawarkan hidangan Western dengan sentuhan Asia. Kreativitas ini merupakan karya dari pemilik sekaligus chef utama restoran ini, yaitu Chef Kamil.</p><p>Pada kunjungan ini, para mahasiswa mendapat berkesempatan bertemu langsung dengan Chef Kamil. Beliau dengan senang hati menjelasakan kecintaannya pada dunia memasak, bagaimana beliau memulai bisnis kulinernya, kreativitasnya dalam memadukan menu dari Eropa dan Asia, kegemarannya berkebun tanaman buah-buahan dan tanaman rempah&nbsp; yang unik, seperti kemangi, dan bagaimana beliau mengusung konsep Jawa tradisional sebagai sentuhan estetik untuk restaurant tersebut.</p><p>Chef Kamil juga menunjukkan kepada mahasiswa pengolahan makanan dan&nbsp; minuman di restaurant Masama By Kamil mulai dari pengadaan bahan makanan, penyimpanan, proses pengolahan, pembayaran, sampai dengan penyajian menu. Chef Kamil juga dengan senang hati menjelaskan cara menyantap ….</p><p>Melalui kunjungan industri ini diharapkan mahasiswa akan memiliki gambaran yang lebih kongkrit tentang dunia kerja untuk peminatan Food &amp; Beverage Production.&nbsp;</p>', 'uploads/articles/01JDCNCBFPZKWPBNT2JT8DG2C9.jpg', 4, '2024-11-23 07:04:00', '2024-11-23 07:04:00', 'Sri Aryaningsih'),
(8, 'Cooking Class Kelas Upper Tumbuh Primary 3 Di Tumbuh Hospitality & Arts School ', '<p>Siapa yang suka pizza? Camilan berbentuk lingkaran, dengan toppingnya yg bermacam-macam, dan keju mozarelanya yang meleleh memang membuat kita ketagihan! &nbsp;</p><p>Pada hari Kamis, 15 Maret 2024 kelas Upper A dan Upper B Tumbuh Primary 3 melakukan minitrip ke Tumbuh Hospitality &amp; Arts School. Pada kegiatan tersebut teman-teman kelas upper melakukan Cooking Class untuk belajar tentang teknik sesuai learning goals IPC pada tema Bake It!&nbsp;</p><p>Menu Cooking Class yang dipilih adalah pizza. Pada kesempatan ini teman-teman kelas Upper A dan Upper B dibimbing oleh Chef Fiega, Bu Nahnu, serta para edukator kelas Upper. Pada awal kegiatan teman-teman kelas Upper dijelaskan berbagai bahan yang digunakan untuk membuat pizza, peralatan yang digunakan beserta fungsinya, sanitasi dan higienitas saat mengolah makanan.</p><p>Chef Fiega dan Bu Nahnu juga mengajarkan membuat saus pizza buatan sendiri karena lebih sehat dan tanpa bahan pengawet. Teman-teman kelas upper juga diajarkan cara menghalus adonan pizzar menggunakan rollin pin lalu mencetaknya pada pan pizza.</p><p>Setelah selesai, teman-teman kelas Upper memberi saus pizza dan topping sesuai kesukaan mereka.&nbsp; Tidak lupa mereka juga menambahkan keju mozarelanya. Setelah lengkap adonan pizza yang sudah siap lalu dioven sampai matang. Pizzapun siap untuk dihidangkan!</p><p>Teman-teman kelas upper sangat senang menikmati pizza buatan mereka sendiri. Heemmm yummy!</p>', 'uploads/articles/01JDCNF74RF5QPGHSBS8FRMRJ6.jpg', 2, '2024-11-23 07:05:34', '2024-11-23 07:05:34', 'Sri Aryaningsih');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan', '2024-11-21 08:03:13', '2024-11-21 08:03:13'),
(2, 'Mahasiswa', '2024-11-23 06:54:07', '2024-11-23 06:54:07'),
(3, 'Prestasi', '2024-11-23 06:57:35', '2024-11-23 06:57:35'),
(4, 'Kampus', '2024-11-23 06:58:25', '2024-11-23 06:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_10_24_132112_create_categories_table', 1),
(7, '2024_10_24_140728_create_articles_table', 1),
(8, '2024_11_15_133248_add_author_to_articles_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thas', 'asysyifaq25@gmail.com', NULL, '$2y$12$VYjgtz9DlW4TgAauyJ9Y.OCBrgyKdLhk/MCJpcvmItB0JLpmhivHq', '62V0fcUa3O7WxaM6bKQdQrRddVZf0ptUUAwsEzx2BTNuJ6kWCz2GiWwWzZka', '2024-11-21 07:57:17', '2024-11-21 07:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
