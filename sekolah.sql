-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 07:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukasesi`
--

CREATE TABLE `bukasesi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sekula` bigint(20) UNSIGNED NOT NULL,
  `TanggalSelesai` date NOT NULL,
  `kuotarombel` int(11) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukasesi`
--

INSERT INTO `bukasesi` (`id`, `id_sekula`, `TanggalSelesai`, `kuotarombel`, `created_at`) VALUES
(5, 10, '2023-06-01', 500, '2023-05-26'),
(14, 34, '2023-06-16', 340, '2023-06-13'),
(16, 35, '2023-06-23', 178, '2023-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `formulirsimpan`
--

CREATE TABLE `formulirsimpan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_school1` bigint(20) UNSIGNED NOT NULL,
  `idForm` bigint(20) UNSIGNED NOT NULL,
  `emailortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaanak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjanganak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulirsimpan`
--

INSERT INTO `formulirsimpan` (`id`, `id_school1`, `idForm`, `emailortu`, `namaanak`, `jenjanganak`, `created_at`, `updated_at`) VALUES
(11, 3, 4, 'rani@gmail.com', 'Vasya Ayu Karmina', 'TKB', '2023-06-02 16:03:06', NULL),
(14, 1, 2, 'caca@gmail.com', 'Maharani', 'TKB', '2023-06-08 11:20:37', NULL),
(16, 1, 3, 'alya@gmail.com', 'Alya resti Saraswati', 'TKA', '2023-06-10 04:18:57', NULL),
(17, 1, 5, 'ivana@gmail.com', 'Audy', 'TKB', '2023-06-10 04:19:03', NULL),
(18, 34, 10, 'zahrina@gmail.com', 'Olivia Hermawan', 'TKA', '2023-06-13 07:47:47', NULL),
(19, 34, 9, 'zahrina@gmail.com', 'Sulthoni', 'TKB', '2023-06-13 07:47:51', NULL),
(20, 34, 8, 'zahrina@gmail.com', 'Ria Sitompul', 'TKA', '2023-06-13 07:47:55', NULL),
(21, 34, 11, 'zahrina@gmail.com', 'Rudi Herlambang', 'TKA', '2023-06-13 07:48:00', NULL),
(22, 34, 6, 'zahrina@gmail.com', 'Azka Boy Priasmoro', 'TKB', '2023-06-14 04:35:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `informasi_sekolah`
--

CREATE TABLE `informasi_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sekolah` bigint(20) UNSIGNED NOT NULL,
  `noTelp` bigint(20) NOT NULL,
  `alamatSekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sabtu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsifasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `playground` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolamrenang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funlearning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persyaratan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persyaratan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persyaratan3` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persyaratan4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persyaratan5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi_sekolah`
--

INSERT INTO `informasi_sekolah` (`id`, `id_sekolah`, `noTelp`, `alamatSekolah`, `senin`, `sabtu`, `deskripsifasilitas`, `playground`, `kolamrenang`, `funlearning`, `kelas`, `persyaratan1`, `persyaratan2`, `persyaratan3`, `persyaratan4`, `persyaratan5`, `img1`, `img2`, `img3`, `banner`, `npsn`, `created_at`, `updated_at`) VALUES
(1, 1, 81231659764, 'JL. NGINDEN SEMOLO 100 B', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Aba 39 memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', NULL, 'funlearning', 'kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', 'Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\r\n        Akte Kelahiran\r\n        Kartu Keluarga\r\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Aba 39 untuk informasi lebih lanjut.', '1686585114_galeriaba1.jpeg', '1686585114_galeriaba2.jpeg', '1686585114_galeriaba3.jpeg', '1686585114_TK ABA.png', 20559778, '2023-05-24 10:48:58', '2023-06-12 16:19:16'),
(2, 2, 81332042358, 'JL. KEPUTIH II / 25', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559296, '2023-05-24 10:54:17', NULL),
(3, 3, 81332042358, 'JL. SEMOLOWARU UTARA VIII / 1-A', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', NULL, 'funlearning', 'kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', '1685099986_049842400_1676944641-lee-je-hoon.jpeg', '1685099986_[SOME BY MI]_5_image [2]_[295x295].jpg', '1685099986_DzuL09vWkAA53ZK.jpg', '1685099986_215500cf-385a-43f9-b5c3-1dca1143b0e7.jpg', 20559796, '2023-05-24 10:56:03', '2023-05-26 11:19:46'),
(4, 4, 81332042358, 'JL. SEMAMPIR MASJID 42', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 69854881, '2023-05-24 10:57:18', NULL),
(5, 5, 81332042358, 'PUMPUNGAN MASJID NO.15 SUKOLILO', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559775, '2023-05-24 10:58:08', NULL),
(6, 6, 81332042358, 'JL. SEMAMPIR SELATAN II A / 96', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559787, '2023-05-24 10:59:24', NULL),
(7, 7, 81332042358, 'Jl. SEMOLOWARU 114-118', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 69893857, '2023-05-24 11:02:29', NULL),
(8, 8, 81332042358, 'JL. MEDOKAN  SEMAMPIR INDAH No.  99-101', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559792, '2023-05-24 11:03:19', NULL),
(9, 9, 81332042358, 'JL. SEMOLOWARU NO. 96 - 98', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559784, '2023-05-24 11:04:31', NULL),
(10, 10, 81332042358, 'Keputih III No.52', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 70005173, '2023-05-24 11:06:35', NULL),
(11, 11, 81332042358, 'JL. Nginden Intan Timur I No.29', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559781, '2023-05-24 11:08:54', NULL),
(12, 12, 81332042358, 'JL. KEJAWAN GEBANG 50', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559757, '2023-05-24 11:10:16', NULL),
(13, 13, 81332042358, 'Jl. Medokan Semampir Blok K', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559794, '2023-05-24 11:11:06', NULL),
(14, 14, 81332042358, 'Medokan 2/28 Sukolilo', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559793, '2023-05-24 11:12:02', NULL),
(15, 15, 81332042358, 'JL. ARIF RAHMAN HAKIM 33', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559759, '2023-05-24 11:13:05', NULL),
(16, 16, 81332042358, 'JL.KEPUTIH PERINTIS I/11A', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 70000047, '2023-05-24 11:13:54', NULL),
(17, 17, 81332042358, 'ARIEF RAHMAN HAKIM NO. 41', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 69763354, '2023-05-24 11:15:30', NULL),
(18, 18, 8813567033, 'MANYAR REJO III /16', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 69812630, '2023-05-24 11:16:17', NULL),
(19, 19, 81332042358, 'Jl.Gebang Putih No.10', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559761, '2023-05-24 11:18:10', NULL),
(20, 20, 81332042358, 'Jl.Keputih Permai IV No.2', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 69985887, '2023-05-24 11:19:09', NULL),
(21, 21, 81332042358, 'JL. KLAMPIS SEMALANG Gg.VI No.45', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559760, '2023-05-24 11:20:04', NULL),
(22, 22, 81332042358, 'JL. NGINDEN II / 18 A', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559776, '2023-05-24 11:21:02', NULL),
(24, 24, 81332042358, 'JL. SEMOLOWARU BAHARI BLOK 4', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559790, '2023-05-24 11:22:54', NULL),
(25, 25, 81332042358, 'Semampir Selatan III A no 9', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 69948191, '2023-05-24 11:24:14', NULL),
(26, 26, 81332042358, 'JL.KRI PULAU RANI E/31', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 69812618, '2023-05-24 11:25:09', NULL),
(27, 27, 81332042358, 'Jl.Mleto No.7', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', NULL, 'funlearning', 'kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', '1684927725_89taxi-driver-2-rating.jpg', '1684927725_21944B7A24-5888-489A-B335-8BAEDBAD408B.jpeg', '1684927725_lee-je-hoon_43.jpeg', '1684927725_215500cf-385a-43f9-b5c3-1dca1143b0e7.jpg', 69963620, '2023-05-24 11:26:05', '2023-05-24 11:28:45'),
(28, 28, 81332042358, 'Jl. Semolowaru Utara I No. 66', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559780, '2023-05-24 11:33:20', NULL),
(29, 29, 8123456789, 'Manyar Kartika', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', NULL, NULL, NULL, 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', '1685517494_Lee-Jo-Hoon-1.jpg', '1685517494_whatsapp-image-2021-04-17-at-11-11-06-607a607ed541df67f950b812.jpeg', '1685517494_89taxi-driver-2-rating.jpg', '1685517494_76449-lee-je-hoon-sbs-entertainment-news.jpg', 69763357, '2023-05-31 07:12:06', '2023-05-31 07:18:14'),
(30, 30, 9123456789, 'Keputih', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'Playground', 'Kolam Renang', 'Fun Learning', 'Kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 'http://localhost:8000/data/file/unsplash_xH04gkmk1sg(1).png', 20559767, '2023-05-31 07:33:03', NULL),
(32, 32, 85231799005, 'Jl.Keputih Tegal IV / 28', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Mutiara Hati memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', NULL, 'funlearning', 'kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', 'Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\r\n        Akte Kelahiran\r\n        Kartu Keluarga\r\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Mutiara Hati untuk informasi lebih lanjut.', '1686588785_galerimh1.jpg', '1686588785_galerimh2.jpg', '1686588785_galerimh3.jpg', '1686588785_TK MUTIARA HATI (1).png', 69946714, '2023-06-12 16:50:15', '2023-06-12 17:00:40'),
(33, 33, 81217230897, 'JL. MANYAR KARTIKA 3 / 5', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', NULL, 'funlearning', 'kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', 'Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\r\n        Akte Kelahiran\r\n        Kartu Keluarga\r\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Permai untuk informasi lebih lanjut.', '1686589855_galeripermai1.jpg', '1686589855_galeripermai2.jpg', '1686589855_galeripermai3.jpg', '1686589855_TK PERMAI.png', 20559766, '2023-06-12 17:08:43', '2023-06-12 17:11:47'),
(34, 34, 85730373993, 'Jl. TEKNIK SIPIL NO. 3 Kampus ITS', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', NULL, 'funlearning', 'kelas', 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', ' Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\n        Akte Kelahiran\n        Kartu Keluarga\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.', '1686590403_galerinop1.jpg', '1686590403_galerinop2.jpg', '1686590403_galerinop3.jpg', '1686590403_SEPULUH (1).png', 69763353, '2023-06-12 17:19:12', '2023-06-12 17:20:03'),
(35, 35, 81332042358, 'JL. SEMAMPIR BARAT VII/4', '07.00 - 10.00 WIB', '07.00 - 09.00 WIB', 'TK Diponggo memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.', 'playground', 'kolamrenang', 'funlearning', NULL, 'Informasi dan pendaftaran terdapat dalam menu profil', 'Membeli formulir PPDB Rp 125.000', 'Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).', 'Mengupload dokumen pendaftaran :\r\n        Akte Kelahiran\r\n        Kartu Keluarga\r\n        Foto berwarna terbaru 3X4', 'Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Diponggo untuk informasi lebih lanjut.', '1686717098_galeridiponggo1.jpg', '1686717098_galeridiponggo2.jpg', '1686717098_galeridiponggo3.jpg', '1686717098_TK DIPONGGO.png', 20559782, '2023-06-14 04:18:45', '2023-06-14 04:32:31');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_14_100635_create_posts_table', 1),
(6, '2023_04_16_073917_create_user_sekolah_table', 2),
(7, '2023_04_18_095541_create_informasi_sekolah_table', 3),
(8, '2023_04_16_073438_create_user_orang_tua_table', 4),
(9, '2023_05_10_180912_create_user_orangtua_table', 5),
(10, '2023_05_10_184449_create_user_orangtua_table', 6),
(11, '2023_05_13_014013_create_responsformulir_table', 7),
(12, '2023_05_13_194852_create_respons_formulir_table', 8),
(13, '2023_05_16_100942_create_informasisekolah_table', 9),
(14, '2023_05_16_214338_create_informasi_sekolah_table', 10),
(15, '2023_05_16_224851_create_informasi_sekolah_table', 11),
(16, '2023_05_23_211354_create_bukasesi_table', 12),
(17, '2023_05_24_000707_create_bukasesi_table', 13),
(18, '2023_05_29_104412_create_formulirsimpan_table', 14),
(19, '2023_05_29_105230_create_formulirsimpan_table', 15),
(20, '2023_05_29_104540_create_umumkan_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `npsn`
--

CREATE TABLE `npsn` (
  `No` int(11) DEFAULT NULL,
  `NPSN` int(11) DEFAULT NULL,
  `name` varchar(512) DEFAULT NULL,
  `Alamat` varchar(512) DEFAULT NULL,
  `Kelurahan` varchar(512) DEFAULT NULL,
  `Status` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `npsn`
--

INSERT INTO `npsn` (`No`, `NPSN`, `name`, `Alamat`, `Kelurahan`, `Status`) VALUES
(1, 20559778, 'TK ABA 39', 'JL. NGINDEN SEMOLO 100 B', 'Nginden Jangkungan', 'SWASTA'),
(2, 20559296, 'TK ABA 52', 'JL. KEPUTIH II / 25', 'Keputih', 'SWASTA'),
(3, 20559796, 'TK AISYIYAH 57', 'JL. SEMOLOWARU UTARA VIII / 1-A', 'Semolowaru', 'SWASTA'),
(4, 69854881, 'TK AL FALAH', 'JL. SEMAMPIR MASJID 42', 'Medokan Semampir', 'SWASTA'),
(5, 20559775, 'TK AL-AMIN', 'PUMPUNGAN MASJID NO.15 SUKOLILO', 'Menur Pumpungan', 'SWASTA'),
(6, 20559787, 'TK AL-KAMIL', 'JL. SEMAMPIR SELATAN II A / 96', 'Medokan Semampir', 'SWASTA'),
(7, 69893857, 'TK AL-MURSYIDIEN', 'Jl. SEMOLOWARU 114-118', 'Semolowaru', 'SWASTA'),
(8, 20559792, 'TK ALAM INSAN MULIA', 'JL. MEDOKAN  SEMAMPIR INDAH No.  99-101', 'Medokan Semampir', 'SWASTA'),
(9, 20559784, 'TK AN NUR', 'JL. SEMOLOWARU NO. 96 - 98', 'Semolowaru', 'SWASTA'),
(10, 70005173, 'TK ASH SHOLIHIN', 'Keputih III No.52', 'Keputih', 'SWASTA'),
(11, 20559781, 'TK BETHANY CHRISTIAN SCHOOL', 'JL. Nginden Intan Timur I No.29', 'Nginden Jangkungan', 'SWASTA'),
(12, 20559757, 'TK BINA ANA PRASA AL AMIN', 'JL. KEJAWAN GEBANG 50', 'Gebang Putih', 'SWASTA'),
(13, 20559794, 'TK BINA ANAPRASA ', 'Jl. Medokan Semampir Blok K', 'Medokan Semampir', 'SWASTA'),
(14, 20559793, 'TK BINA KARYA', 'Medokan 2/28 Sukolilo', 'Medokan Semampir', 'SWASTA'),
(15, 20559759, 'TK BINA TUNAS BANGSA', 'JL. ARIF RAHMAN HAKIM 33', 'Klampis Ngasem', 'SWASTA'),
(16, 70000047, 'TK BINTANG KECIL', 'JL.KEPUTIH PERINTIS I/11A', 'Keputih', 'SWASTA'),
(17, 69763354, 'TK BUAH HATI BUNDA', 'ARIEF RAHMAN HAKIM NO. 41', 'Klampis Ngasem', 'SWASTA'),
(18, 69812630, 'TK CAHAYA BUNDA', 'MANYAR REJO III /16', 'Menur Pumpungan', 'SWASTA'),
(19, 20559761, 'TK CAHAYA TAZKIA', 'Jl.Gebang Putih No.10', 'Keputih', 'SWASTA'),
(20, 69985887, 'TK CHODIDJAH', 'Jl.Keputih Permai IV No.2', 'Keputih', 'SWASTA'),
(21, 20559760, 'TK CITRA TARUNA', 'JL. KLAMPIS SEMALANG Gg.VI No.45', 'Klampis Ngasem', 'SWASTA'),
(22, 20559776, 'TK DARUSSALAM', 'JL. NGINDEN II / 18 A', 'Nginden Jangkungan', 'SWASTA'),
(23, 20559782, 'TK DIPONGGO', 'JL. SEMAMPIR BARAT VII/4', 'Medokan Semampir', 'SWASTA'),
(24, 20559790, 'TK HANG TUAH 18', 'JL. SEMOLOWARU BAHARI BLOK 4', 'Semolowaru', 'SWASTA'),
(25, 69948191, 'TK ISLAM AL FATH', 'Semampir Selatan III A no 9', 'Medokan Semampir', 'SWASTA'),
(26, 69812618, 'TK ISLAM INSAN CENDEKIA', 'JL.KRI PULAU RANI E/31', 'Medokan Semampir', 'SWASTA'),
(27, 69963620, 'TK ISLAM NURUL QUR`AN', 'Jl.Mleto No.7', 'Klampis Ngasem', 'SWASTA'),
(28, 20559780, 'TK Islam RADEN PATAH', 'Jl. Semolowaru Utara I No. 66', 'Semolowaru', 'SWASTA'),
(29, 69958337, 'TK IT HARUM', 'Jl.Keputih Tegal Bhakti III Blok A Kav. No. 110-111', 'Keputih', 'SWASTA'),
(30, 70010171, 'TK KINDERLAND PRESCHOOL', 'Jl.Raya Kertajaya Indah No.101', 'Gebang Putih', 'SWASTA'),
(31, 69763357, 'TK KRISTEN ANAK BANGSA', 'MANYAR KARTIKA TIMUR NO. 6', 'Menur Pumpungan', 'SWASTA'),
(32, 20559767, 'TK KRISTEN PETRA 5', 'Jl.Galaxi Klampis Utara No.1-3', 'Keputih', 'SWASTA'),
(33, 20559764, 'TK KUSUMA BANGSA', 'JL. MENUR I / 15B', 'Menur Pumpungan', 'SWASTA'),
(34, 20584006, 'TK LITTLE SUN SCHOOL ', 'JL. MANYAR KARTIKA NO. 48 RT. 02 RW. 01 ', 'Menur Pumpungan', 'SWASTA'),
(35, 20559297, 'TK MABADIUL ULUM', 'Jl.Roda Sekolahan No.1', 'Gebang Putih', 'SWASTA'),
(36, 69946714, 'TK MUTIARA HATI', 'Jl.Keputih Tegal IV / 28', 'Keputih', 'SWASTA'),
(37, 20559765, 'TK MUTIARA IBU', 'JL.Menur 3/87-A', 'Menur Pumpungan', 'SWASTA'),
(38, 20559766, 'TK PERMAI', 'JL. MANYAR KARTIKA 3 / 5', 'Menur Pumpungan', 'SWASTA'),
(39, 20559788, 'TK PERMATA BANGSA', 'Perumahan Semolowaru Indah I Jl. Sukosemolo 12 Blok.C-27', 'Semolowaru', 'SWASTA'),
(40, 20559785, 'TK PKK KARTINI', 'JL. SEMOLOWARU 160', 'Semolowaru', 'SWASTA'),
(41, 20559783, 'TK PKK RW 06 SEMOLOWARU ELOK', 'JL. Fasilitas Umum Semolowaru Elok', 'Semolowaru', 'SWASTA'),
(42, 20559768, 'TK RADEN PAKU', 'Klampis Ngasem 88A Sukolilo ', 'Klampis Ngasem', 'SWASTA'),
(43, 69812616, 'TK SABIILUS SALAM', 'Jl.NGINDEN INTAN RAYA NO. 30', 'Nginden Jangkungan', 'SWASTA'),
(44, 69763356, 'TK SANTA ANNA', 'PUMPUNGAN III / IIA', 'Menur Pumpungan', 'SWASTA'),
(45, 69763353, 'TK SEPULUH NOPEMBER', 'Jl. TEKNIK SIPIL NO. 3 Kampus ITS', 'Keputih', 'SWASTA'),
(46, 69854883, 'TK SURABAYA MONTESSORI SCHOOL', 'MANYAR KARTIKA TIMUR NO. 1', 'Menur Pumpungan', 'SWASTA'),
(47, 20559769, 'TK TUNAS DHITA', 'JL. KLAMPIS SEMALANG I / 4', 'Klampis Ngasem', 'SWASTA'),
(48, 20559773, 'TK WACHID HASYIM 2', 'JL. MENUR II / 95', 'Menur Pumpungan', 'SWASTA'),
(49, 69931907, 'TK WHIZ KIDS', 'Jl.Nginden Intan Selatan C7 / 3', 'Nginden Jangkungan', 'SWASTA'),
(50, 20559770, 'TK YAPITA', 'JL. KEPUTIH III / 6', 'Keputih', 'SWASTA'),
(51, 20559771, 'TK YUNIOR', 'JL. MANYAR REJO VIII No. 47 - 49', 'Menur Pumpungan', 'SWASTA'),
(52, 20558817, 'TKS MUHAJIRIN', 'JL. TAMAN MANYAR TIRTOASRI NO.2', 'Klampis Ngasem', 'SWASTA');

-- --------------------------------------------------------

--
-- Table structure for table `respons_formulir`
--

CREATE TABLE `respons_formulir` (
  `idFormulir` bigint(20) UNSIGNED NOT NULL,
  `idOrtu` bigint(20) UNSIGNED NOT NULL,
  `id_sekolah2` bigint(20) UNSIGNED NOT NULL,
  `namalengkap_pd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapanggilan_pd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pesertadidik` bigint(20) NOT NULL,
  `kewarganegaraan_pd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_pd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir_pd` date NOT NULL,
  `alamat_pd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_pd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anakke_pd` int(11) NOT NULL,
  `jumlahsaudara_pd` int(11) NOT NULL,
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_ay` bigint(20) NOT NULL,
  `pekerjaan_ay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_ay` date NOT NULL,
  `telpon_ay` bigint(20) NOT NULL,
  `alamat_ay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_ib` bigint(20) NOT NULL,
  `pekerjaan_ib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_ib` date NOT NULL,
  `telpon_ib` bigint(20) NOT NULL,
  `alamat_ib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_ank` int(11) NOT NULL,
  `berat_ank` int(11) NOT NULL,
  `rk_cacar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rk_tbc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rk_asma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rk_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ri_polio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ri_rubella` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ri_vaksin8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ri_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `respons_formulir`
--

INSERT INTO `respons_formulir` (`idFormulir`, `idOrtu`, `id_sekolah2`, `namalengkap_pd`, `namapanggilan_pd`, `nik_pesertadidik`, `kewarganegaraan_pd`, `tempat_pd`, `tanggallahir_pd`, `alamat_pd`, `agama_pd`, `anakke_pd`, `jumlahsaudara_pd`, `jenjang`, `jeniskelamin`, `nama_ay`, `nik_ay`, `pekerjaan_ay`, `pendidikan_ay`, `ttl_ay`, `telpon_ay`, `alamat_ay`, `nama_ib`, `nik_ib`, `pekerjaan_ib`, `pendidikan_ib`, `ttl_ib`, `telpon_ib`, `alamat_ib`, `tinggi_ank`, `berat_ank`, `rk_cacar`, `rk_tbc`, `rk_asma`, `rk_lainnya`, `ri_polio`, `ri_rubella`, `ri_vaksin8`, `ri_lainnya`, `akta`, `kk`, `ft`, `bayar`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Zahrina', 'Arin', 3515134612040001, 'Indonesia', 'Sidoarjo', '2023-05-27', 'GWA II AB-05', 'islam', 2, 2, 'TKB', 'Perempuan', 'Suprijadi', 3515134612040001, 'Swasta', 'S1', '2023-05-27', 8813567033, 'GWA II AB-05', 'Yoni Tri Asmoro', 3515134612040001, 'Ibu rumah tangga', 'S1', '2023-05-27', 8813567033, 'GWAII Ab-05', 180, 40, 'cacar', 'tbc', 'asma', NULL, NULL, NULL, NULL, NULL, '1685205617_Left_Workshop.png', '1685205617_Right_Workshop.png', '1685205617_Middle_Workshop.png', '1685205617_PosterExtend25May_Digital.png', '2023-05-27 16:40:17', NULL),
(2, 2, 1, 'Maharani', 'Runi', 3515134612040001, 'Belanda', 'Amsterdam', '2023-05-26', 'Surabaya', 'Islam', 5, 10, 'TKB', 'Perempuan', 'Budi', 3515134612040001, 'Swasta', 'S1', '2023-05-27', 81332042358, 'Surabaya', 'Siti', 3515134612040001, 'Ibu rumah tangga', 'S2', '2023-05-27', 8813567033, 'Surabaya', 125, 30, NULL, 'tbc', 'asma', NULL, NULL, NULL, 'Vaksin8', 'Lainnya2', '1685206491_049842400_1676944641-lee-je-hoon.jpeg', '1685206491_[SOME BY MI]_5_image [2]_[295x295].jpg', '1685206491_DzuL09vWkAA53ZK.jpg', '1685206491_21944B7A24-5888-489A-B335-8BAEDBAD408B.jpeg', '2023-05-27 16:54:51', NULL),
(3, 3, 1, 'Alya resti Saraswati', 'Yaya', 3515134612040001, 'Indonesia', 'Batam', '2023-05-27', 'Batam', 'Islam', 1, 2, 'TKA', 'Perempuan', 'Tono', 3515134612040001, 'Swasta', 'S1', '2023-05-27', 8813567033, 'Batam', 'Wati', 3515134612040001, 'Ibu rumah tangga', 'S1', '2023-05-24', 8813567033, 'Batam', 120, 25, NULL, NULL, NULL, 'Lainnya', NULL, NULL, 'Vaksin8', 'Lainnya2', '1685207047_DzuL09vWkAA53ZK.jpg', '1685207047_[SOME BY MI]_5_image [2]_[295x295].jpg', '1685207047_DSC07360(2).jpg', '1685207047_76449-lee-je-hoon-sbs-entertainment-news.jpg', '2023-05-27 17:04:07', NULL),
(4, 4, 3, 'Vasya Ayu Karmina', 'Cacul', 3515134612040001, 'Indonesia', 'Surabaya', '2023-05-28', 'Surabaya', 'islam', 1, 5, 'TKB', 'Perempuan', 'Hendra', 3515134612040001, 'Karyawan SWF', 'S3', '2023-05-28', 81332042358, 'Surabaya', 'Wiwik', 3515134612040001, 'Ibu rumah tangga', 's1', '2023-05-29', 8813567033, 'Surabaya', 135, 24, 'cacar', 'tbc', NULL, NULL, NULL, 'Rubella', 'Vaksin8', NULL, '1685207519_sungjae.jpg', '1685207519_sungjae  2.jpg', '1685207519_[SOME BY MI]_5_image [2]_[295x295].jpg', '1685207519_Middle_Workshop.png', '2023-05-27 17:11:59', NULL),
(5, 5, 1, 'Audy', 'audy', 3515134612040001, 'Indonesia', 'batam', '2023-05-26', 'batam', 'Islam', 15, 16, 'TKB', 'LakiLaki', 'Hendro', 3515134612040001, 'Karyawan', 'S1', '2023-05-25', 8813567033, 'Surabaya', 'reni', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-05-19', 8813567033, 'Surabaya', 145, 40, 'cacar', 'tbc', 'asma', NULL, 'Polio', 'Rubella', 'Vaksin8', NULL, '1685291932_seo kan joon.jpg', '1685291932_l.jpg', '1685291932_whatsapp-image-2021-04-17-at-11-11-06-607a607ed541df67f950b812.jpeg', '1685291932_89taxi-driver-2-rating.jpg', '2023-05-28 16:38:52', NULL),
(6, 1, 34, 'Azka Boy Priasmoro', 'Azka', 3515134612040001, 'Indonesia', 'Amsterdam', '2021-01-20', 'Jakarta', 'Katolik', 1, 3, 'TKB', 'LakiLaki', 'Bagas', 3515134612040001, 'Karyawan', 'S1', '2023-06-16', 8813567033, 'Jakarta', 'Salsa', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-06-15', 8813567033, 'Jakarta', 185, 25, NULL, NULL, 'asma', 'Lainnya', NULL, NULL, NULL, 'Lainnya2', '1686592009_berkas pendaftaran anak - untuk formulir.jpg', '1686592009_berkas pendaftaran anak - untuk formulir.jpg', '1686592009_berkas pendaftaran anak - untuk formulir.jpg', '1686592009_kwitansi_pembayaran_seminar_nasional_kearsipan_ipb_2012_finish.jpg', '2023-06-12 17:46:49', NULL),
(7, 1, 34, 'Devi Indriyani', 'Devi', 3515134612040001, 'Indonesia', 'Loksumawe', '2023-06-07', 'Loksumawe', 'Budha', 4, 4, 'TKB', 'Perempuan', 'Marem', 3515134612040001, 'Karyawan', 'S1', '2023-06-14', 8813567033, 'Loksumawe', 'Endah', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-06-06', 8813567033, 'loksumawe', 100, 16, NULL, 'tbc', NULL, NULL, 'Polio', 'Rubella', 'Vaksin8', 'Lainnya2', '1686592363_berkas pendaftaran anak - untuk formulir.jpg', '1686592363_berkas pendaftaran anak - untuk formulir.jpg', '1686592363_berkas pendaftaran anak - untuk formulir.jpg', '1686592363_kwitansi_pembayaran_seminar_nasional_kearsipan_ipb_2012_finish.jpg', '2023-06-12 17:52:43', NULL),
(8, 1, 34, 'Ria Sitompul', 'Ria', 3515134612040001, 'Indonesia', 'Bogor', '2023-06-02', 'Bogor', 'Protestan', 2, 2, 'TKA', 'Perempuan', 'wawan', 3515134612040001, 'Karyawan', 'S1', '2023-06-15', 8813567033, 'Bogor', 'Ratu', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-06-06', 8813567033, 'Bogor', 115, 20, NULL, NULL, NULL, 'Lainnya', NULL, NULL, NULL, 'Lainnya2', '1686592841_berkas pendaftaran anak - untuk formulir.jpg', '1686592841_berkas pendaftaran anak - untuk formulir.jpg', '1686592841_berkas pendaftaran anak - untuk formulir.jpg', '1686592841_kwitansi_pembayaran_seminar_nasional_kearsipan_ipb_2012_finish.jpg', '2023-06-12 18:00:41', NULL),
(9, 1, 34, 'Sulthoni', 'toni', 3515134612040001, 'Indonesia', 'Semarang', '2023-06-12', 'Semarang', 'Islam', 1, 1, 'TKB', 'LakiLaki', 'Fikri', 3515134612040001, 'Karyawan', 'S1', '2023-06-05', 8813567033, 'Semarang', 'Bunga', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-06-12', 8813567033, 'Semarang', 105, 22, 'cacar', 'tbc', NULL, NULL, NULL, NULL, 'Vaksin8', NULL, '1686593364_berkas pendaftaran anak - untuk formulir.jpg', '1686593364_berkas pendaftaran anak - untuk formulir.jpg', '1686593364_berkas pendaftaran anak - untuk formulir.jpg', '1686593364_kwitansi_pembayaran_seminar_nasional_kearsipan_ipb_2012_finish.jpg', '2023-06-12 18:09:24', NULL),
(10, 1, 34, 'Olivia Hermawan', 'Via', 3515134612040001, 'Indonesia', 'Bandung', '2023-06-08', 'Bandung', 'Kristen', 3, 3, 'TKA', 'Perempuan', 'Steven', 3515134612040001, 'Karyawan', 'S1', '2023-06-08', 8813567033, 'Bandung', 'Chealsea', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-06-16', 8813567033, 'Bandung', 95, 21, NULL, 'tbc', 'asma', 'Lainnya', NULL, 'Rubella', NULL, NULL, '1686594093_berkas pendaftaran anak - untuk formulir.jpg', '1686594093_berkas pendaftaran anak - untuk formulir.jpg', '1686594093_berkas pendaftaran anak - untuk formulir.jpg', '1686594093_kwitansi_pembayaran_seminar_nasional_kearsipan_ipb_2012_finish.jpg', '2023-06-12 18:21:33', NULL),
(11, 1, 34, 'Rudi Herlambang', 'Rudi', 3515134612040001, 'Indonesia', 'Berau', '2023-06-07', 'Berau', 'Islam', 1, 7, 'TKA', 'LakiLaki', 'Herlambang', 3515134612040001, 'Karyawan', 'S1', '2023-06-05', 8813567033, 'Berau', 'Ika', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-06-06', 8813567033, 'Berau', 130, 55, NULL, NULL, NULL, 'Lainnya', 'Polio', 'Rubella', 'Vaksin8', 'Lainnya2', '1686594600_berkas pendaftaran anak - untuk formulir.jpg', '1686594600_berkas pendaftaran anak - untuk formulir.jpg', '1686594600_berkas pendaftaran anak - untuk formulir.jpg', '1686594600_kwitansi_pembayaran_seminar_nasional_kearsipan_ipb_2012_finish.jpg', '2023-06-12 18:30:00', NULL),
(12, 11, 35, 'nana', 'nana', 3515134612040001, 'Indonesia', 'Korea', '2023-06-15', 'Surabaya', 'Kristen', 2, 4, 'TKA', 'LakiLaki', 'gorge', 3515134612040001, 'Karyawan', 'S1', '2023-06-13', 8813567033, 'Jln mangga kedungsari, korea', 'Ningsih', 3515134612040001, 'Ibu Rumah Tangga', 's1', '2023-06-13', 8813567033, 'Jln wage', 130, 16, 'cacar', NULL, NULL, NULL, 'Polio', 'Rubella', 'Vaksin8', NULL, '1686718079_berkas pendaftaran anak - untuk formulir.jpg', '1686718079_berkas pendaftaran anak - untuk formulir.jpg', '1686718079_berkas pendaftaran anak - untuk formulir.jpg', '1686718079_kwitansi_pembayaran_seminar_nasional_kearsipan_ipb_2012_finish.jpg', '2023-06-14 04:47:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `umumkan`
--

CREATE TABLE `umumkan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_school2` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umumkan`
--

INSERT INTO `umumkan` (`id`, `id_school2`, `created_at`, `updated_at`) VALUES
(18, 34, '2023-06-14 04:35:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_orangtua`
--

CREATE TABLE `user_orangtua` (
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
-- Dumping data for table `user_orangtua`
--

INSERT INTO `user_orangtua` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zahrina', 'zahrina@gmail.com', NULL, '$2y$10$XrR7FpJnHLds0Uft4FUdzea.oeyCyMI5FXWhoa0AiDqiqzrIs63da', NULL, '2023-05-16 16:36:40', '2023-05-17 12:58:05'),
(2, 'caca', 'caca@gmail.com', NULL, '$2y$10$DHtqnM7pa9fF71ImkCiZ7.//OYZlUYoSIMyhzseGEUX.NbbsvWj0O', NULL, '2023-05-16 16:37:06', NULL),
(3, 'alya', 'alya@gmail.com', NULL, '$2y$10$.scHQMYiOiETlnZLENFGu.jOeDcgX3Mt5JIuZSywSc5oFpUtH3T/m', NULL, '2023-05-16 16:37:32', NULL),
(4, 'rani', 'rani@gmail.com', NULL, '$2y$10$Dm6O/gvpMRlkb7kP0HI.oua/GFmsSk.8Uf.9ck1Mq6mG3CMzcbPmq', NULL, '2023-05-16 16:37:59', NULL),
(5, 'ivana', 'ivana@gmail.com', NULL, '$2y$10$7ajKevS9VBnm.XvpyDyy0eSwxLT7fypUpXQAOTIuQjTU3.MdWW74K', NULL, '2023-05-16 16:38:31', NULL),
(6, 'audy', 'audy@gmail.com', NULL, '$2y$10$WpjU9lB4cgYq5tXFHREw/.0fzzmoV9ZDuuDc.62M2MpxHzFnLLA8u', NULL, '2023-05-16 16:38:56', NULL),
(7, 'arin2', 'zahrina2@gmail.com', NULL, '$2y$10$ACr2X62HnHUFMoJngoWtzuUCuI1Z07LxDJj8LnpFMD8pLebKC9J7q', NULL, '2023-05-16 16:39:19', NULL),
(8, 'caca2', 'caca2@gmail.com', NULL, '$2y$10$zG.Yizr5yu2wGkvA7coaM.V6S3XvjXt8/p1iTJXbcA1yTPfs7JqR.', NULL, '2023-05-16 16:39:46', NULL),
(9, 'alya2', 'alya2@gmail.com', NULL, '$2y$10$FokAmJC/z.tuixg461FfOOFtY5TMoMV/Yb4t.LpcnGNSXK0Dfnc0i', NULL, '2023-05-16 16:40:11', NULL),
(10, 'rani2', 'rani2@gmail.com', NULL, '$2y$10$oqfSqWpO9TXvbvy19FcCBun/QhJOSqB5o4ZyKljh8xtIgXM1NgF4.', NULL, '2023-05-16 16:40:36', NULL),
(11, 'Arin cantik', 'azka@gmail.com', NULL, '$2y$10$OZ0Kg5BOXnQuOcHZiiv.SecGXjk.7GCvzHPLvTqt.VJZvRuog3W.G', NULL, '2023-06-14 04:38:24', '2023-06-14 04:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_sekolah`
--

CREATE TABLE `user_sekolah` (
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
-- Dumping data for table `user_sekolah`
--

INSERT INTO `user_sekolah` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TK ABA 39', 'a@gmail.com', NULL, '$2y$10$QJYiOmPre8orC./vkL4PpOL14vfs7WUQhHQsvM8aNKgiCbHvxO75K', NULL, '2023-05-24 10:48:58', NULL),
(2, 'TK ABA 52', 'b@gmail.com', NULL, '$2y$10$YjqgkiMSFHcyhrv.7dzEze9UHCjTNB.RQzR5H2AB2IEFo8yrCOca.', NULL, '2023-05-24 10:54:17', NULL),
(3, 'TK AISYIYAH 57', 'c@gmail.com', NULL, '$2y$10$6eWQ4s6v4cS575qsmvqkq..yno6UFC5/G0qoEaUw0c1wuGL5x/Hb2', NULL, '2023-05-24 10:56:03', NULL),
(4, 'TK AL FALAH', 'd@gmail.com', NULL, '$2y$10$xm5BokNyGWMCZC6ORhuFfeO3TwU.q29TOfWBCgDv49x5WiLtB0cSe', NULL, '2023-05-24 10:57:18', NULL),
(5, 'TK AL-AMIN', 'e@gmail.com', NULL, '$2y$10$jvEP9Svy/FeQ5Io91GPkfOlFTFvfOQQgiZ8wKNNlrIsyQLzdVVQXC', NULL, '2023-05-24 10:58:08', NULL),
(6, 'TK AL-KAMIL', 'f@gmail.com', NULL, '$2y$10$Emx6TNDF6s6eudh5Rjoyq.RaywlAoMjiomH72LOA8upjC9KJRKrA6', NULL, '2023-05-24 10:59:24', NULL),
(7, 'TK AL-MURSYIDIEN', 'g@gmail.com', NULL, '$2y$10$drIQrzXZ/wq0.b9VKHk0Iufljewlj9xg2Simd0T5MULkPKHN/.3Ee', NULL, '2023-05-24 11:02:29', NULL),
(8, 'TK ALAM INSAN MULIA', 'h@gmail.com', NULL, '$2y$10$k41LHAs.T03fay3ewkVqbe8sE0vrP4.Si7x.SbLfUi2Jy4HwcKqcu', NULL, '2023-05-24 11:03:19', NULL),
(9, 'TK AN NUR', 'i@gmail.com', NULL, '$2y$10$AGp93aWB5QZeWleMojBayOdnW9i7pP1vt0r5JqMORJfWpKU6gEtIq', NULL, '2023-05-24 11:04:31', NULL),
(10, 'TK ASH SHOLIHIN', 'j@gmail.com', NULL, '$2y$10$x6JePSBqYj6dE5GitFtabekPuTvobSEpwnXNBhGLBm3v0io7CcBnW', NULL, '2023-05-24 11:06:35', NULL),
(11, 'TK BETHANY CHRISTIAN SCHOOL', 'k@gmail.com', NULL, '$2y$10$LVco0jil1P1Te4VA9zVVgu5MDUhainFsV42RIJ7Fy3NIM6mOMcYuS', NULL, '2023-05-24 11:08:54', NULL),
(12, 'TK BINA ANA PRASA AL AMIN', 'l@gmail.com', NULL, '$2y$10$PVnsW209i1M2X8FD/8kgIuE6OLGx6jZWqW.prc0cwSovF9Oufomo6', NULL, '2023-05-24 11:10:16', NULL),
(13, 'TK BINA ANAPRASA', 'm@gmail.com', NULL, '$2y$10$cobhhnQAM7EAKeAjfkBLtuJFfl3Rqz9YSlS6xql3AhNLh3o2QQ1u6', NULL, '2023-05-24 11:11:06', NULL),
(14, 'TK BINA KARYA', 'n@gmail.com', NULL, '$2y$10$rjkOHjTK3N2U9wzQtxDjN.E/gycMYoogOPAxfSp5aJ3YvCCYsyA6K', NULL, '2023-05-24 11:12:02', NULL),
(15, 'TK BINA TUNAS BANGSA', 'o@gmail.com', NULL, '$2y$10$cgt89S8UaJERPdt2t7wLXeBa5Jb8vQQxsAQgnkBbIf9W22zZhWsLK', NULL, '2023-05-24 11:13:05', NULL),
(16, 'TK BINTANG KECIL', 'p@gmail.com', NULL, '$2y$10$7ZIr55tmXurkHlG7L0OlN.3v036.eJW2fm6.V5sPy/aGhAnbYSl2y', NULL, '2023-05-24 11:13:54', NULL),
(17, 'TK BUAH HATI BUNDA', 'q@gmail.com', NULL, '$2y$10$33hlhEeE29Ph/sqoFuL8/u4YO/9yJk9VJmK1WFrRrp7fNXb3er5SC', NULL, '2023-05-24 11:15:30', NULL),
(18, 'TK CAHAYA BUNDA', 'r@gmail.com', NULL, '$2y$10$GB5Lnwyn0Btq0h3N.fr7juW7CIvWNYVM/1vmpxOsHUsL7oGU0Z/4S', NULL, '2023-05-24 11:16:17', NULL),
(19, 'TK CAHAYA TAZKIA', 's@gmail.com', NULL, '$2y$10$J5BRuLx6OMoQBqfi4VctwOYQhXoF4ky7fPi7.7OoUG08Vr.W3R/Ay', NULL, '2023-05-24 11:18:10', NULL),
(20, 'TK CHODIDJAH', 't@gmail.com', NULL, '$2y$10$rqcDtBVsfOXMI2UZhANLoeg8AOkehhDf4onD2lhCoJ9C5PkGCFCCC', NULL, '2023-05-24 11:19:09', NULL),
(21, 'TK CITRA TARUNA', 'u@gmail.com', NULL, '$2y$10$qRu0e6aZD6jXf/rwfKJxVuzaVWaUTUA1AyoLQuvSoymzlMxovUL4q', NULL, '2023-05-24 11:20:04', NULL),
(22, 'TK DARUSSALAM', 'v@gmail.com', NULL, '$2y$10$uJlgtqRjBrcbVqW/CCbvUudKNVmSr0pa9tsozat6u2PFdfq2EKBay', NULL, '2023-05-24 11:21:02', NULL),
(24, 'TK HANG TUAH 18', 'x@gmail.com', NULL, '$2y$10$higxp86q6ggfNkg4cLafgO96NOnLeAlVDYNwUEFviY6b.UQGmw6PW', NULL, '2023-05-24 11:22:54', NULL),
(25, 'TK ISLAM AL FATH', 'y@gmail.com', NULL, '$2y$10$lTvuJGAjbm5mmXfY5gDhVOi/.zPJDgsV719cjVxxo1uGhZ8dVHDwW', NULL, '2023-05-24 11:24:14', NULL),
(26, 'TK ISLAM INSAN CENDEKIA', 'z@gmail.com', NULL, '$2y$10$Jt9lp13m/QR8.muZd02xueUpA4bmVqMw0x/AuQt9Yq0o83RB2dOZS', NULL, '2023-05-24 11:25:09', NULL),
(27, 'TK ISLAM NURUL QUR`AN', 'a2@gmail.com', NULL, '$2y$10$62BG/gIXuaEkGW2MxOaMe.MCDVwEw.6LX6eoo.mCiW6iG6R9okLIy', NULL, '2023-05-24 11:26:05', NULL),
(28, 'TK ISLAM RADEN PATAH', 'a3@gmail.com', NULL, '$2y$10$zkHen76MNWXs1u3/HlfDG.KquW8QAB8o7hnw2sQo8FKAh5VMqQ5y6', NULL, '2023-05-24 11:33:20', NULL),
(29, 'TK KRISTEN ANAK BANGSA', 'anak.bangsa@mail.com', NULL, '$2y$10$/fWg86F9O9qiaiBCb4nEfO7bYnpmRk90NmHiZSzNtXjRoGv6EH1bS', NULL, '2023-05-31 07:12:06', NULL),
(30, 'TK KRISTEN PETRA 5', 'petra5@gmail.com', NULL, '$2y$10$W2myySmHEXhqQnSyWQ9Ge.5cOkYrAEcJ9KVLf0LSMO7Z5dfzvEnGK', NULL, '2023-05-31 07:33:03', NULL),
(32, 'TK MUTIARA HATI', 'mutiarahati@gmail.com', NULL, '$2y$10$VHc4AaIkp4eqZ/cdbpvW1.4qf8zqE5rA3SczObwE/KUy5/uRGGv/.', NULL, '2023-06-12 16:50:15', NULL),
(33, 'TK PERMAI', 'permai@gmail.com', NULL, '$2y$10$pHgLW/YPkzGWbCQcXKhj4O3xSddKRyfIdy3FJqbHhDJA2jIrIgnzK', NULL, '2023-06-12 17:08:43', NULL),
(34, 'TK SEPULUH NOPEMBER', '10nopember@gmail.com', NULL, '$2y$10$b/QzGYO4NOycPHR0teZFHOptYWwe2T.dYGNIN6RSgZr8VCIYuKShq', NULL, '2023-06-12 17:19:12', NULL),
(35, 'TK DIPONGGO', 'diponggo@gmail.com', NULL, '$2y$10$T4hvY3TmXixewyM1Kzitse5Jc73z0k6SltYBiCSzDfLGjWhT6lXqC', NULL, '2023-06-14 04:18:45', '2023-06-14 04:19:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukasesi`
--
ALTER TABLE `bukasesi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukasesi_id_sekula_foreign` (`id_sekula`);

--
-- Indexes for table `formulirsimpan`
--
ALTER TABLE `formulirsimpan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulirsimpan_id_school1_foreign` (`id_school1`),
  ADD KEY `formulirsimpan_idForm_foreign` (`idForm`);

--
-- Indexes for table `informasi_sekolah`
--
ALTER TABLE `informasi_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informasi_sekolah_id_sekolah_foreign` (`id_sekolah`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respons_formulir`
--
ALTER TABLE `respons_formulir`
  ADD PRIMARY KEY (`idFormulir`),
  ADD KEY `respons_formulir_id_sekolah2_foreign` (`id_sekolah2`),
  ADD KEY `respons_formulir_idOrtu_foreign` (`idOrtu`);

--
-- Indexes for table `umumkan`
--
ALTER TABLE `umumkan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `umumkan_id_school2_foreign` (`id_school2`);

--
-- Indexes for table `user_orangtua`
--
ALTER TABLE `user_orangtua`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_orangtua_email_unique` (`email`);

--
-- Indexes for table `user_sekolah`
--
ALTER TABLE `user_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_sekolah_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukasesi`
--
ALTER TABLE `bukasesi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `formulirsimpan`
--
ALTER TABLE `formulirsimpan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `informasi_sekolah`
--
ALTER TABLE `informasi_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `respons_formulir`
--
ALTER TABLE `respons_formulir`
  MODIFY `idFormulir` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `umumkan`
--
ALTER TABLE `umumkan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_orangtua`
--
ALTER TABLE `user_orangtua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_sekolah`
--
ALTER TABLE `user_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukasesi`
--
ALTER TABLE `bukasesi`
  ADD CONSTRAINT `bukasesi_id_sekula_foreign` FOREIGN KEY (`id_sekula`) REFERENCES `user_sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formulirsimpan`
--
ALTER TABLE `formulirsimpan`
  ADD CONSTRAINT `formulirsimpan_idForm_foreign` FOREIGN KEY (`idForm`) REFERENCES `respons_formulir` (`idFormulir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formulirsimpan_id_school1_foreign` FOREIGN KEY (`id_school1`) REFERENCES `user_sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi_sekolah`
--
ALTER TABLE `informasi_sekolah`
  ADD CONSTRAINT `informasi_sekolah_id_sekolah_foreign` FOREIGN KEY (`id_sekolah`) REFERENCES `user_sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `respons_formulir`
--
ALTER TABLE `respons_formulir`
  ADD CONSTRAINT `respons_formulir_idOrtu_foreign` FOREIGN KEY (`idOrtu`) REFERENCES `user_orangtua` (`id`),
  ADD CONSTRAINT `respons_formulir_id_sekolah2_foreign` FOREIGN KEY (`id_sekolah2`) REFERENCES `user_sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `umumkan`
--
ALTER TABLE `umumkan`
  ADD CONSTRAINT `umumkan_id_school2_foreign` FOREIGN KEY (`id_school2`) REFERENCES `user_sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
