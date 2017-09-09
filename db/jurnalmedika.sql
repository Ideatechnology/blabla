-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09 Sep 2017 pada 07.05
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnalmedika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_activities`
--

CREATE TABLE `bf_activities` (
  `activity_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_activities`
--

INSERT INTO `bf_activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
(1, 0, 'pengunjung : 127.0.0.1', 'visitor', '2016-12-16 08:54:38', 0),
(2, 2, 'Created record with ID: 5 : 127.0.0.1', 'post', '2016-12-16 08:56:37', 0),
(3, 2, 'Created record with ID: 6 : 127.0.0.1', 'post', '2016-12-16 08:58:06', 0),
(4, 0, 'pengunjung : 127.0.0.1', 'visitor', '2016-12-20 14:04:20', 0),
(5, 1, 'logged in from: 127.0.0.1', 'users', '2016-12-20 14:04:54', 0),
(6, 1, 'Updated record with ID: 360 : 127.0.0.1', 'kategori', '2016-12-20 15:15:39', 0),
(7, 1, 'Created record with ID: 362 : 127.0.0.1', 'kategori', '2016-12-20 15:15:58', 0),
(8, 1, 'Created record with ID: 363 : 127.0.0.1', 'kategori', '2016-12-20 15:16:11', 0),
(9, 1, 'modified user: Admin', 'users', '2016-12-20 17:58:55', 0),
(10, 1, 'modified user: Admin', 'users', '2016-12-20 17:58:56', 0),
(11, 0, 'pengunjung : 127.0.0.1', 'visitor', '2016-12-21 03:48:15', 0),
(12, 0, 'pengunjung : ::1', 'visitor', '2017-07-03 05:09:11', 0),
(13, 1, 'logged in from: ::1', 'users', '2017-07-03 05:31:12', 0),
(14, 1, 'App settings saved from: ::1', 'core', '2017-07-03 05:31:21', 0),
(15, 1, 'App settings saved from: ::1', 'core', '2017-07-03 05:31:40', 0),
(16, 1, 'App settings saved from: ::1', 'core', '2017-07-03 05:34:44', 0),
(17, 1, 'modified user: Admin', 'users', '2017-07-03 05:35:06', 0),
(18, 1, 'modified user: Developer', 'users', '2017-07-03 05:35:16', 0),
(19, 1, 'Created record with ID: 62 : ::1', 'pages', '2017-07-03 05:51:12', 0),
(20, 1, 'Created record with ID: 63 : ::1', 'pages', '2017-07-03 05:52:09', 0),
(21, 1, 'Created record with ID: 64 : ::1', 'pages', '2017-07-03 05:52:44', 0),
(22, 1, 'Created record with ID: 65 : ::1', 'pages', '2017-07-03 05:53:21', 0),
(23, 1, 'Created record with ID: 66 : ::1', 'pages', '2017-07-03 05:55:29', 0),
(24, 1, 'Created record with ID: 67 : ::1', 'pages', '2017-07-03 05:56:00', 0),
(25, 1, 'Created record with ID: 68 : ::1', 'pages', '2017-07-03 05:58:09', 0),
(26, 1, 'Created record with ID: 69 : ::1', 'pages', '2017-07-03 05:58:57', 0),
(27, 1, 'Updated record with ID: 43 : ::1', 'kategori', '2017-07-03 06:00:18', 0),
(28, 1, 'Updated record with ID: 77 : ::1', 'kategori', '2017-07-03 06:00:25', 0),
(29, 1, 'Created record with ID: 81 : ::1', 'kategori', '2017-07-03 06:00:40', 0),
(30, 1, 'Created record with ID: 82 : ::1', 'kategori', '2017-07-03 06:00:52', 0),
(31, 1, 'Created record with ID: 83 : ::1', 'kategori', '2017-07-03 06:01:13', 0),
(32, 1, 'Updated record with ID: 78 : ::1', 'kategori', '2017-07-03 06:02:01', 0),
(33, 1, 'Created record with ID: 84 : ::1', 'kategori', '2017-07-03 06:02:16', 0),
(34, 1, 'Created record with ID: 85 : ::1', 'kategori', '2017-07-03 06:02:27', 0),
(35, 1, 'Created record with ID: 86 : ::1', 'kategori', '2017-07-03 06:06:38', 0),
(36, 1, 'Created record with ID: 87 : ::1', 'kategori', '2017-07-03 06:06:48', 0),
(37, 1, 'Created record with ID: 88 : ::1', 'kategori', '2017-07-03 06:08:15', 0),
(38, 1, 'Created record with ID: 89 : ::1', 'kategori', '2017-07-03 06:08:24', 0),
(39, 1, 'Created record with ID: 90 : ::1', 'kategori', '2017-07-03 06:08:39', 0),
(40, 1, 'Updated record with ID: 362 : ::1', 'kategori', '2017-07-03 06:11:48', 0),
(41, 1, 'App settings saved from: ::1', 'core', '2017-07-03 06:12:24', 0),
(42, 1, 'App settings saved from: ::1', 'core', '2017-07-03 06:13:13', 0),
(43, 1, 'App settings saved from: ::1', 'core', '2017-07-03 06:13:34', 0),
(44, 1, 'App settings saved from: ::1', 'core', '2017-07-03 06:14:03', 0),
(45, 0, 'pengunjung : ::1', 'visitor', '2017-07-04 03:18:35', 0),
(46, 1, 'logged in from: ::1', 'users', '2017-07-04 03:29:46', 0),
(47, 0, 'pengunjung : ::1', 'visitor', '2017-07-05 03:19:59', 0),
(48, 1, 'Created record with ID: 91 : ::1', 'kategori', '2017-07-05 03:47:42', 0),
(49, 1, 'Created record with ID: 7 : ::1', 'post', '2017-07-05 09:05:51', 0),
(50, 1, 'Updated record with ID: 7 : ::1', 'post', '2017-07-05 09:12:42', 0),
(51, 1, 'Created record with ID: 8 : ::1', 'post', '2017-07-05 09:15:06', 0),
(52, 1, 'Created record with ID: 9 : ::1', 'post', '2017-07-05 09:34:02', 0),
(53, 1, 'Created record with ID: 10 : ::1', 'post', '2017-07-05 09:35:17', 0),
(54, 1, 'Created record with ID: 11 : ::1', 'post', '2017-07-05 09:38:41', 0),
(55, 1, 'Created record with ID: 12 : ::1', 'post', '2017-07-05 09:40:01', 0),
(56, 1, 'Created record with ID: 13 : ::1', 'post', '2017-07-05 09:40:02', 0),
(57, 1, 'Created record with ID: 14 : ::1', 'post', '2017-07-05 09:41:22', 0),
(58, 1, 'Created record with ID: 15 : ::1', 'post', '2017-07-05 09:43:33', 0),
(59, 1, 'Created record with ID: 16 : ::1', 'post', '2017-07-05 09:45:25', 0),
(60, 1, 'Created record with ID: 17 : ::1', 'post', '2017-07-05 09:47:49', 0),
(61, 1, 'Created record with ID: 18 : ::1', 'post', '2017-07-05 09:49:13', 0),
(62, 0, 'pengunjung : ::1', 'visitor', '2017-07-06 03:15:13', 0),
(63, 1, 'Created record with ID: 70 : ::1', 'pages', '2017-07-06 03:37:44', 0),
(64, 1, 'Updated record with ID: 70 : ::1', 'post', '2017-07-06 03:37:57', 0),
(65, 0, 'pengunjung : ::1', 'visitor', '2017-07-07 03:37:15', 0),
(66, 1, 'logged in from: ::1', 'users', '2017-07-07 05:59:14', 0),
(67, 1, 'Created record with ID: 92 : ::1', 'kategori', '2017-07-07 10:09:58', 0),
(68, 1, 'Updated record with ID: 92 : ::1', 'kategori', '2017-07-07 10:10:14', 0),
(69, 0, 'pengunjung : ::1', 'visitor', '2017-07-10 04:19:10', 0),
(70, 1, 'logged in from: ::1', 'users', '2017-07-10 04:23:13', 0),
(71, 1, 'Created record with ID: 1 : ::1', 'publikasi', '2017-07-10 05:04:30', 0),
(72, 0, 'pengunjung : ::1', 'visitor', '2017-07-11 06:40:35', 0),
(73, 0, 'pengunjung : ::1', 'visitor', '2017-07-12 10:19:27', 0),
(74, 0, 'pengunjung : ::1', 'visitor', '2017-07-13 03:59:00', 0),
(75, 0, 'pengunjung : ::1', 'visitor', '2017-07-14 03:29:02', 0),
(76, 0, 'pengunjung : ::1', 'visitor', '2017-07-17 03:44:24', 0),
(77, 1, 'logged in from: ::1', 'users', '2017-07-17 04:01:37', 0),
(78, 1, 'Created record with ID: 2 : ::1', 'publikasi', '2017-07-17 04:11:30', 0),
(79, 1, 'Updated record with ID: 2 : ::1', 'publikasi', '2017-07-17 04:12:27', 0),
(80, 1, 'Created record with ID: 3 : ::1', 'publikasi', '2017-07-17 04:16:41', 0),
(81, 1, 'Created record with ID: 4 : ::1', 'publikasi', '2017-07-17 04:18:40', 0),
(82, 1, 'Created record with ID: 5 : ::1', 'publikasi', '2017-07-17 04:20:02', 0),
(83, 1, 'Created record with ID: 71 : ::1', 'pages', '2017-07-17 05:55:30', 0),
(84, 0, 'pengunjung : ::1', 'visitor', '2017-07-18 03:07:50', 0),
(85, 0, 'pengunjung : ::1', 'visitor', '2017-07-20 04:32:31', 0),
(86, 1, 'logged in from: ::1', 'users', '2017-07-20 05:12:12', 0),
(87, 1, 'Created record with ID: 93 : ::1', 'kategori', '2017-07-20 05:12:46', 0),
(88, 1, 'Created record with ID: 19 : ::1', 'post', '2017-07-20 05:15:20', 0),
(89, 1, 'Created record with ID: 20 : ::1', 'post', '2017-07-20 05:16:54', 0),
(90, 1, 'Updated record with ID: 20 : ::1', 'post', '2017-07-20 05:17:34', 0),
(91, 1, 'Created record with ID: 21 : ::1', 'post', '2017-07-20 05:18:57', 0),
(92, 1, 'Created record with ID: 22 : ::1', 'post', '2017-07-20 05:20:14', 0),
(93, 1, 'Created record with ID: 23 : ::1', 'post', '2017-07-20 05:21:21', 0),
(94, 0, 'pengunjung : ::1', 'visitor', '2017-07-24 06:01:32', 0),
(95, 0, 'pengunjung : ::1', 'visitor', '2017-07-26 05:16:03', 0),
(96, 1, 'logged in from: ::1', 'users', '2017-07-26 05:17:05', 0),
(97, 1, 'created a new Editor: MyIndoCS', 'users', '2017-07-26 05:26:50', 0),
(98, 1, 'created a new Editor: MyIndo', 'users', '2017-07-26 05:27:29', 0),
(99, 1, 'created a new Editor: admin1', 'users', '2017-07-26 05:28:15', 0),
(100, 1, 'created a new Editor: admin2', 'users', '2017-07-26 05:28:40', 0),
(101, 1, 'created a new Editor: Widya Rachmi', 'users', '2017-07-26 05:29:15', 0),
(102, 1, 'created a new Editor: Yeni Indah S', 'users', '2017-07-26 05:29:46', 0),
(103, 1, 'created a new Editor: Riyadi Priyatin', 'users', '2017-07-26 05:30:46', 0),
(104, 1, 'created a new Editor: Harry Irawan', 'users', '2017-07-26 05:31:17', 0),
(105, 1, 'created a new Editor: Dyah Indriawati', 'users', '2017-07-26 05:49:34', 0),
(106, 1, 'created a new Editor: Yudhi Pandji Wulung', 'users', '2017-07-26 05:50:05', 0),
(107, 1, 'created a new Editor: Tri Susilowati', 'users', '2017-07-26 05:50:37', 0),
(108, 1, 'created a new Editor: Brilianto', 'users', '2017-07-26 05:51:13', 0),
(109, 1, 'created a new Editor: Afni Rosa', 'users', '2017-07-26 05:51:49', 0),
(110, 1, 'created a new Editor: Dewi Retno S', 'users', '2017-07-26 05:52:21', 0),
(111, 1, 'created a new Editor: Puspen Fasilitasi Pengaduan', 'users', '2017-07-26 05:52:54', 0),
(112, 1, 'created a new Editor: Puspen Humas', 'users', '2017-07-26 05:53:51', 0),
(113, 1, 'created a new Editor: Puspen Humas', 'users', '2017-07-26 05:54:24', 0),
(114, 1, 'created a new Editor: Deni', 'users', '2017-07-26 05:54:53', 0),
(115, 1, 'created a new Editor: Azhari', 'users', '2017-07-26 05:55:29', 0),
(116, 1, 'created a new Editor: Dasista Happy Karnia', 'users', '2017-07-26 05:55:57', 0),
(117, 1, 'created a new Editor: Purwoto', 'users', '2017-07-26 05:56:27', 0),
(118, 1, 'created a new Editor: Sediono Brilianto', 'users', '2017-07-26 05:56:55', 0),
(119, 1, 'created a new Editor: Andi Mohammad Ikhbal', 'users', '2017-07-26 05:57:22', 0),
(120, 1, 'created a new Editor: Humas', 'users', '2017-07-26 06:46:53', 0),
(121, 1, 'created a new User: Berita', 'users', '2017-07-26 06:47:54', 0),
(122, 1, 'created a new Editor: Dino', 'users', '2017-07-26 06:49:55', 0),
(123, 1, 'created a new Editor: Hanafi Supporting', 'users', '2017-07-26 06:50:24', 0),
(124, 1, 'created a new Editor: Andi Muhammad Faisal', 'users', '2017-07-26 06:50:51', 0),
(125, 1, 'created a new Editor: Astri', 'users', '2017-07-26 06:51:15', 0),
(126, 1, 'created a new Editor: Doni Rusdiyatno', 'users', '2017-07-26 06:51:46', 0),
(127, 0, 'pengunjung : ::1', 'visitor', '2017-08-11 04:36:36', 0),
(128, 0, 'pengunjung : ::1', 'visitor', '2017-08-14 03:34:57', 0),
(129, 1, 'logged in from: ::1', 'users', '2017-08-14 04:56:21', 0),
(130, 1, 'Created record with ID: 94 : ::1', 'kategori', '2017-08-14 04:56:38', 0),
(131, 1, 'logged in from: ::1', 'users', '2017-08-14 05:36:54', 0),
(132, 1, 'logged in from: ::1', 'users', '2017-08-14 06:53:01', 0),
(133, 0, 'pengunjung : ::1', 'visitor', '2017-08-21 09:06:35', 0),
(134, 0, 'pengunjung : ::1', 'visitor', '2017-08-22 04:39:52', 0),
(135, 0, 'pengunjung : ::1', 'visitor', '2017-08-23 05:52:27', 0),
(136, 0, 'pengunjung : ::1', 'visitor', '2017-08-24 05:32:01', 0),
(137, 0, 'pengunjung : ::1', 'visitor', '2017-08-25 09:18:42', 0),
(138, 0, 'pengunjung : ::1', 'visitor', '2017-08-28 15:40:46', 0),
(139, 1, 'logged in from: ::1', 'users', '2017-08-28 16:15:56', 0),
(140, 1, 'App settings saved from: ::1', 'core', '2017-08-28 16:16:06', 0),
(141, 1, 'App settings saved from: ::1', 'core', '2017-08-28 16:16:14', 0),
(142, 1, 'App settings saved from: ::1', 'core', '2017-08-28 16:16:27', 0),
(143, 1, 'Created record with ID: 95 : ::1', 'kategori', '2017-08-28 16:35:05', 0),
(144, 1, 'Created record with ID: 96 : ::1', 'kategori', '2017-08-28 16:35:09', 0),
(145, 1, 'Created record with ID: 1 : ::1', 'post', '2017-08-28 16:38:04', 0),
(146, 1, 'Created record with ID: 2 : ::1', 'post', '2017-08-28 16:39:07', 0),
(147, 1, 'Created record with ID: 3 : ::1', 'post', '2017-08-28 16:39:50', 0),
(148, 1, 'Created record with ID: 97 : ::1', 'kategori', '2017-08-28 16:42:24', 0),
(149, 1, 'Created record with ID: 98 : ::1', 'kategori', '2017-08-28 16:43:12', 0),
(150, 1, 'Created record with ID: 99 : ::1', 'kategori', '2017-08-28 16:43:23', 0),
(151, 1, 'Created record with ID: 100 : ::1', 'kategori', '2017-08-28 16:43:31', 0),
(152, 1, 'Created record with ID: 101 : ::1', 'kategori', '2017-08-28 16:43:52', 0),
(153, 1, 'Created record with ID: 102 : ::1', 'kategori', '2017-08-28 16:43:58', 0),
(154, 1, 'Created record with ID: 103 : ::1', 'kategori', '2017-08-28 16:44:05', 0),
(155, 1, 'Created record with ID: 104 : ::1', 'kategori', '2017-08-28 16:44:08', 0),
(156, 1, 'Created record with ID: 105 : ::1', 'kategori', '2017-08-28 16:44:17', 0),
(157, 1, 'Created record with ID: 106 : ::1', 'kategori', '2017-08-28 16:44:31', 0),
(158, 0, 'pengunjung : ::1', 'visitor', '2017-09-05 15:57:39', 0),
(159, 0, 'pengunjung : ::1', 'visitor', '2017-09-09 05:52:52', 0),
(160, 2, 'logged in from: ::1', 'users', '2017-09-09 06:41:22', 0),
(161, 2, 'Created record with ID: 4 : ::1', 'post', '2017-09-09 06:42:40', 0),
(162, 2, 'Created record with ID: 5 : ::1', 'post', '2017-09-09 06:43:33', 0),
(163, 2, 'Created record with ID: 107 : ::1', 'kategori', '2017-09-09 06:44:24', 0),
(164, 2, 'Created record with ID: 6 : ::1', 'post', '2017-09-09 06:44:53', 0),
(165, 2, 'Created record with ID: 7 : ::1', 'post', '2017-09-09 06:45:44', 0),
(166, 2, 'Created record with ID: 8 : ::1', 'post', '2017-09-09 06:46:37', 0),
(167, 2, 'Created record with ID: 9 : ::1', 'post', '2017-09-09 06:47:44', 0),
(168, 2, 'Created record with ID: 10 : ::1', 'post', '2017-09-09 06:48:43', 0),
(169, 2, 'Created record with ID: 11 : ::1', 'post', '2017-09-09 06:49:47', 0),
(170, 2, 'Created record with ID: 12 : ::1', 'post', '2017-09-09 06:50:25', 0),
(171, 2, 'Created record with ID: 13 : ::1', 'post', '2017-09-09 06:51:07', 0),
(172, 2, 'Created record with ID: 14 : ::1', 'post', '2017-09-09 06:51:55', 0),
(173, 2, 'Created record with ID: 72 : ::1', 'pages', '2017-09-09 07:00:20', 0),
(174, 2, 'Created record with ID: 73 : ::1', 'pages', '2017-09-09 07:00:45', 0),
(175, 2, 'Created record with ID: 74 : ::1', 'pages', '2017-09-09 07:01:31', 0),
(176, 2, 'Created record with ID: 75 : ::1', 'pages', '2017-09-09 07:01:56', 0),
(177, 2, 'Updated record with ID: 75 : ::1', 'post', '2017-09-09 07:04:11', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_agenda`
--

CREATE TABLE `bf_agenda` (
  `id` int(11) NOT NULL,
  `post_category` int(11) DEFAULT NULL,
  `time_start` varchar(20) DEFAULT NULL,
  `time_ends` varchar(20) DEFAULT NULL,
  `tgl_agenda` date DEFAULT NULL,
  `judul_agenda` varchar(200) DEFAULT NULL,
  `judul_agenda_english` varchar(200) DEFAULT NULL,
  `isi_agenda` text,
  `isi_agenda_english` text,
  `author` varchar(100) DEFAULT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bf_agenda`
--

INSERT INTO `bf_agenda` (`id`, `post_category`, `time_start`, `time_ends`, `tgl_agenda`, `judul_agenda`, `judul_agenda_english`, `isi_agenda`, `isi_agenda_english`, `author`, `penanggung_jawab`) VALUES
(1, 74, '12:00', '12:00', '2016-12-20', 'Komisi Informasi Pusat', 'Komisi Informasi Pusat', 'Umum - Penganugerahan Keterbukaan Informasi Publik 2016 di Istana Wapres\n\n', 'Umum - Penganugerahan Keterbukaan Informasi Publik 2016 di Istana Wapres\n\n', 'admin', 'Komisi Informasi Pusat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_album_foto`
--

CREATE TABLE `bf_album_foto` (
  `id` int(10) NOT NULL,
  `kategori` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kategori_english` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` text COLLATE latin1_general_ci,
  `type_kategori` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `ket_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_description` text COLLATE latin1_general_ci,
  `meta_keyword` text COLLATE latin1_general_ci,
  `meta_robots` text COLLATE latin1_general_ci,
  `file_affaliate` text COLLATE latin1_general_ci,
  `template` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_album_foto`
--

INSERT INTO `bf_album_foto` (`id`, `kategori`, `kategori_english`, `ket`, `type_kategori`, `deleted`, `ket_english`, `meta_description`, `meta_keyword`, `meta_robots`, `file_affaliate`, `template`, `gambar`) VALUES
(361, 'kjjkj', NULL, 'jkjksdd', 'galleri', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(360, 'Simulasi Pemungutan Penghitungan Suara di Kab Pati', 'Webku', '', 'galleri', 1, '', NULL, NULL, NULL, NULL, NULL, NULL),
(362, 'Album Kemendagri', NULL, '', 'galleri', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(363, 'Rakor Mutarlih Berkelanjutan 2016', NULL, '', 'galleri', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_arsip`
--

CREATE TABLE `bf_arsip` (
  `id` int(10) NOT NULL,
  `post_category` int(10) DEFAULT NULL,
  `publisher` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `penulis` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tahun` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_arsip` mediumtext COLLATE latin1_general_ci,
  `tgl_arsip` datetime DEFAULT NULL,
  `file_data` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `judul_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_arsip_english` mediumtext COLLATE latin1_general_ci,
  `ukuran` int(30) DEFAULT NULL,
  `extensions` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `download` int(11) DEFAULT '0',
  `filepath` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_comments`
--

CREATE TABLE `bf_comments` (
  `id` int(10) NOT NULL,
  `identitas` varchar(255) COLLATE latin1_general_ci DEFAULT '0',
  `email` varchar(255) COLLATE latin1_general_ci DEFAULT '0',
  `komentar` mediumtext COLLATE latin1_general_ci,
  `tgl_komentar` timestamp NULL DEFAULT NULL,
  `kolom_posts` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `approve` enum('N','Y') COLLATE latin1_general_ci DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_comments`
--

INSERT INTO `bf_comments` (`id`, `identitas`, `email`, `komentar`, `tgl_komentar`, `kolom_posts`, `id_users`, `approve`) VALUES
(1, 'Harry Ridwan Ramadan', 'harryridwanramadan@gmail.com', 'tes komentar uy', '2016-08-28 22:18:24', 4, 0, 'Y'),
(2, 'Dono Kasino', 'donokasiono@gmail.com', 'tes 124', '2016-08-28 22:21:10', NULL, 0, 'N'),
(3, 'Doni Kasino Indro Warkop', 'donowarkop@gmail.com', 'Warung Kopi', '2016-08-28 22:23:29', 4, 0, 'Y'),
(4, 'Doni Kasino Indro Warkop', 'donowarkop@gmail.com', 'Warung Kopi', '2016-08-28 22:23:44', 4, 0, 'Y'),
(5, 'Doni Kasino Indro Warkop', 'donowarkop@gmail.com', 'Warung Kopi', '2016-08-28 22:23:53', 4, 0, 'Y'),
(6, 'Septian', 'septian@gmail.com', 'tes ', '2016-08-28 22:24:32', 4, 0, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_contact`
--

CREATE TABLE `bf_contact` (
  `id` int(10) NOT NULL,
  `tgl_kirim` datetime DEFAULT NULL,
  `pengirim` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` text COLLATE latin1_general_ci,
  `ipaddr` varchar(50) COLLATE latin1_general_ci DEFAULT '0',
  `jawaban` text COLLATE latin1_general_ci,
  `email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `penjawab` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_countries`
--

CREATE TABLE `bf_countries` (
  `iso` char(2) NOT NULL DEFAULT 'US',
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_countries`
--

INSERT INTO `bf_countries` (`iso`, `name`, `printable_name`, `iso3`, `numcode`) VALUES
('AD', 'ANDORRA', 'Andorra', 'AND', 20),
('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784),
('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4),
('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28),
('AI', 'ANGUILLA', 'Anguilla', 'AIA', 660),
('AL', 'ALBANIA', 'Albania', 'ALB', 8),
('AM', 'ARMENIA', 'Armenia', 'ARM', 51),
('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530),
('AO', 'ANGOLA', 'Angola', 'AGO', 24),
('AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL),
('AR', 'ARGENTINA', 'Argentina', 'ARG', 32),
('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16),
('AT', 'AUSTRIA', 'Austria', 'AUT', 40),
('AU', 'AUSTRALIA', 'Australia', 'AUS', 36),
('AW', 'ARUBA', 'Aruba', 'ABW', 533),
('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31),
('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70),
('BB', 'BARBADOS', 'Barbados', 'BRB', 52),
('BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50),
('BE', 'BELGIUM', 'Belgium', 'BEL', 56),
('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854),
('BG', 'BULGARIA', 'Bulgaria', 'BGR', 100),
('BH', 'BAHRAIN', 'Bahrain', 'BHR', 48),
('BI', 'BURUNDI', 'Burundi', 'BDI', 108),
('BJ', 'BENIN', 'Benin', 'BEN', 204),
('BM', 'BERMUDA', 'Bermuda', 'BMU', 60),
('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96),
('BO', 'BOLIVIA', 'Bolivia', 'BOL', 68),
('BR', 'BRAZIL', 'Brazil', 'BRA', 76),
('BS', 'BAHAMAS', 'Bahamas', 'BHS', 44),
('BT', 'BHUTAN', 'Bhutan', 'BTN', 64),
('BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL),
('BW', 'BOTSWANA', 'Botswana', 'BWA', 72),
('BY', 'BELARUS', 'Belarus', 'BLR', 112),
('BZ', 'BELIZE', 'Belize', 'BLZ', 84),
('CA', 'CANADA', 'Canada', 'CAN', 124),
('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180),
('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140),
('CG', 'CONGO', 'Congo', 'COG', 178),
('CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756),
('CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384),
('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184),
('CL', 'CHILE', 'Chile', 'CHL', 152),
('CM', 'CAMEROON', 'Cameroon', 'CMR', 120),
('CN', 'CHINA', 'China', 'CHN', 156),
('CO', 'COLOMBIA', 'Colombia', 'COL', 170),
('CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188),
('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL),
('CU', 'CUBA', 'Cuba', 'CUB', 192),
('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132),
('CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL),
('CY', 'CYPRUS', 'Cyprus', 'CYP', 196),
('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203),
('DE', 'GERMANY', 'Germany', 'DEU', 276),
('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262),
('DK', 'DENMARK', 'Denmark', 'DNK', 208),
('DM', 'DOMINICA', 'Dominica', 'DMA', 212),
('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214),
('DZ', 'ALGERIA', 'Algeria', 'DZA', 12),
('EC', 'ECUADOR', 'Ecuador', 'ECU', 218),
('EE', 'ESTONIA', 'Estonia', 'EST', 233),
('EG', 'EGYPT', 'Egypt', 'EGY', 818),
('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732),
('ER', 'ERITREA', 'Eritrea', 'ERI', 232),
('ES', 'SPAIN', 'Spain', 'ESP', 724),
('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231),
('FI', 'FINLAND', 'Finland', 'FIN', 246),
('FJ', 'FIJI', 'Fiji', 'FJI', 242),
('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238),
('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583),
('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234),
('FR', 'FRANCE', 'France', 'FRA', 250),
('GA', 'GABON', 'Gabon', 'GAB', 266),
('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826),
('GD', 'GRENADA', 'Grenada', 'GRD', 308),
('GE', 'GEORGIA', 'Georgia', 'GEO', 268),
('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254),
('GH', 'GHANA', 'Ghana', 'GHA', 288),
('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292),
('GL', 'GREENLAND', 'Greenland', 'GRL', 304),
('GM', 'GAMBIA', 'Gambia', 'GMB', 270),
('GN', 'GUINEA', 'Guinea', 'GIN', 324),
('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312),
('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226),
('GR', 'GREECE', 'Greece', 'GRC', 300),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
('GT', 'GUATEMALA', 'Guatemala', 'GTM', 320),
('GU', 'GUAM', 'Guam', 'GUM', 316),
('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624),
('GY', 'GUYANA', 'Guyana', 'GUY', 328),
('HK', 'HONG KONG', 'Hong Kong', 'HKG', 344),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL),
('HN', 'HONDURAS', 'Honduras', 'HND', 340),
('HR', 'CROATIA', 'Croatia', 'HRV', 191),
('HT', 'HAITI', 'Haiti', 'HTI', 332),
('HU', 'HUNGARY', 'Hungary', 'HUN', 348),
('ID', 'INDONESIA', 'Indonesia', 'IDN', 360),
('IE', 'IRELAND', 'Ireland', 'IRL', 372),
('IL', 'ISRAEL', 'Israel', 'ISR', 376),
('IN', 'INDIA', 'India', 'IND', 356),
('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL),
('IQ', 'IRAQ', 'Iraq', 'IRQ', 368),
('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364),
('IS', 'ICELAND', 'Iceland', 'ISL', 352),
('IT', 'ITALY', 'Italy', 'ITA', 380),
('JM', 'JAMAICA', 'Jamaica', 'JAM', 388),
('JO', 'JORDAN', 'Jordan', 'JOR', 400),
('JP', 'JAPAN', 'Japan', 'JPN', 392),
('KE', 'KENYA', 'Kenya', 'KEN', 404),
('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417),
('KH', 'CAMBODIA', 'Cambodia', 'KHM', 116),
('KI', 'KIRIBATI', 'Kiribati', 'KIR', 296),
('KM', 'COMOROS', 'Comoros', 'COM', 174),
('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659),
('KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408),
('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410),
('KW', 'KUWAIT', 'Kuwait', 'KWT', 414),
('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136),
('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398),
('LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418),
('LB', 'LEBANON', 'Lebanon', 'LBN', 422),
('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662),
('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438),
('LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144),
('LR', 'LIBERIA', 'Liberia', 'LBR', 430),
('LS', 'LESOTHO', 'Lesotho', 'LSO', 426),
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440),
('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442),
('LV', 'LATVIA', 'Latvia', 'LVA', 428),
('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434),
('MA', 'MOROCCO', 'Morocco', 'MAR', 504),
('MC', 'MONACO', 'Monaco', 'MCO', 492),
('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498),
('MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450),
('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807),
('ML', 'MALI', 'Mali', 'MLI', 466),
('MM', 'MYANMAR', 'Myanmar', 'MMR', 104),
('MN', 'MONGOLIA', 'Mongolia', 'MNG', 496),
('MO', 'MACAO', 'Macao', 'MAC', 446),
('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580),
('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474),
('MR', 'MAURITANIA', 'Mauritania', 'MRT', 478),
('MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500),
('MT', 'MALTA', 'Malta', 'MLT', 470),
('MU', 'MAURITIUS', 'Mauritius', 'MUS', 480),
('MV', 'MALDIVES', 'Maldives', 'MDV', 462),
('MW', 'MALAWI', 'Malawi', 'MWI', 454),
('MX', 'MEXICO', 'Mexico', 'MEX', 484),
('MY', 'MALAYSIA', 'Malaysia', 'MYS', 458),
('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508),
('NA', 'NAMIBIA', 'Namibia', 'NAM', 516),
('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540),
('NE', 'NIGER', 'Niger', 'NER', 562),
('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574),
('NG', 'NIGERIA', 'Nigeria', 'NGA', 566),
('NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558),
('NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528),
('NO', 'NORWAY', 'Norway', 'NOR', 578),
('NP', 'NEPAL', 'Nepal', 'NPL', 524),
('NR', 'NAURU', 'Nauru', 'NRU', 520),
('NU', 'NIUE', 'Niue', 'NIU', 570),
('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554),
('OM', 'OMAN', 'Oman', 'OMN', 512),
('PA', 'PANAMA', 'Panama', 'PAN', 591),
('PE', 'PERU', 'Peru', 'PER', 604),
('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258),
('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598),
('PH', 'PHILIPPINES', 'Philippines', 'PHL', 608),
('PK', 'PAKISTAN', 'Pakistan', 'PAK', 586),
('PL', 'POLAND', 'Poland', 'POL', 616),
('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666),
('PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612),
('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630),
('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL),
('PT', 'PORTUGAL', 'Portugal', 'PRT', 620),
('PW', 'PALAU', 'Palau', 'PLW', 585),
('PY', 'PARAGUAY', 'Paraguay', 'PRY', 600),
('QA', 'QATAR', 'Qatar', 'QAT', 634),
('RE', 'REUNION', 'Reunion', 'REU', 638),
('RO', 'ROMANIA', 'Romania', 'ROM', 642),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643),
('RW', 'RWANDA', 'Rwanda', 'RWA', 646),
('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682),
('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90),
('SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690),
('SD', 'SUDAN', 'Sudan', 'SDN', 736),
('SE', 'SWEDEN', 'Sweden', 'SWE', 752),
('SG', 'SINGAPORE', 'Singapore', 'SGP', 702),
('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654),
('SI', 'SLOVENIA', 'Slovenia', 'SVN', 705),
('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744),
('SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703),
('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694),
('SM', 'SAN MARINO', 'San Marino', 'SMR', 674),
('SN', 'SENEGAL', 'Senegal', 'SEN', 686),
('SO', 'SOMALIA', 'Somalia', 'SOM', 706),
('SR', 'SURINAME', 'Suriname', 'SUR', 740),
('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678),
('SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222),
('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760),
('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748),
('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796),
('TD', 'CHAD', 'Chad', 'TCD', 148),
('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL),
('TG', 'TOGO', 'Togo', 'TGO', 768),
('TH', 'THAILAND', 'Thailand', 'THA', 764),
('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762),
('TK', 'TOKELAU', 'Tokelau', 'TKL', 772),
('TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL),
('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795),
('TN', 'TUNISIA', 'Tunisia', 'TUN', 788),
('TO', 'TONGA', 'Tonga', 'TON', 776),
('TR', 'TURKEY', 'Turkey', 'TUR', 792),
('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780),
('TV', 'TUVALU', 'Tuvalu', 'TUV', 798),
('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158),
('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834),
('UA', 'UKRAINE', 'Ukraine', 'UKR', 804),
('UG', 'UGANDA', 'Uganda', 'UGA', 800),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL),
('US', 'UNITED STATES', 'United States', 'USA', 840),
('UY', 'URUGUAY', 'Uruguay', 'URY', 858),
('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860),
('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336),
('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670),
('VE', 'VENEZUELA', 'Venezuela', 'VEN', 862),
('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92),
('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850),
('VN', 'VIET NAM', 'Viet Nam', 'VNM', 704),
('VU', 'VANUATU', 'Vanuatu', 'VUT', 548),
('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876),
('WS', 'SAMOA', 'Samoa', 'WSM', 882),
('YE', 'YEMEN', 'Yemen', 'YEM', 887),
('YT', 'MAYOTTE', 'Mayotte', NULL, NULL),
('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710),
('ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894),
('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_easybook`
--

CREATE TABLE `bf_easybook` (
  `id` int(10) NOT NULL,
  `gbip` varchar(15) NOT NULL DEFAULT '',
  `gbname` varchar(40) NOT NULL DEFAULT '',
  `gbmail` varchar(60) DEFAULT NULL,
  `gbmailshow` tinyint(1) NOT NULL DEFAULT '0',
  `gbloca` varchar(50) DEFAULT NULL,
  `gbpage` varchar(150) DEFAULT NULL,
  `gbvote` int(10) DEFAULT NULL,
  `gbtext` text NOT NULL,
  `gbdate` datetime DEFAULT NULL,
  `gbtitle` varchar(50) DEFAULT NULL,
  `gbcomment` text,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `gbicq` varchar(20) DEFAULT NULL,
  `gbaim` varchar(50) DEFAULT NULL,
  `gbmsn` varchar(50) DEFAULT NULL,
  `gbyah` varchar(50) DEFAULT NULL,
  `gbskype` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_email_queue`
--

CREATE TABLE `bf_email_queue` (
  `id` int(11) NOT NULL,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_galeri_foto`
--

CREATE TABLE `bf_galeri_foto` (
  `id` int(10) NOT NULL,
  `title_foto` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_desc` text COLLATE latin1_general_ci,
  `file_foto` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_album` int(11) DEFAULT NULL,
  `title_foto_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_desc_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT '3',
  `flag` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_galeri_foto`
--

INSERT INTO `bf_galeri_foto` (`id`, `title_foto`, `isi_desc`, `file_foto`, `id_album`, `title_foto_english`, `isi_desc_english`, `created_on`, `id_user`, `flag`) VALUES
(22, '31', '31', '31.jpg', 362, NULL, NULL, '2017-07-03 06:54:16', 1, 1),
(21, '11', '11', '11.jpg', 362, NULL, NULL, '2017-07-03 06:54:16', 1, 1),
(20, '21', '21', '21.jpg', 362, NULL, NULL, '2017-07-03 06:54:16', 1, 1),
(16, 'galeri_31', 'galeri_31', 'galeri_31.jpg', 360, NULL, NULL, '2016-12-20 17:34:49', 1, 1),
(17, 'galeri_41', 'galeri_41', 'galeri_41.JPG', 360, NULL, NULL, '2016-12-20 17:34:54', 1, 1),
(18, 'galr41', 'galr41', 'galr41.JPG', 363, NULL, NULL, '2016-12-20 17:35:52', 1, 1),
(19, 'galeri41', 'galeri41', 'galeri41.JPG', 363, NULL, NULL, '2016-12-20 17:35:52', 1, 1),
(23, '41', '41', '41.jpg', 362, NULL, NULL, '2017-07-03 06:54:16', 1, 1),
(24, '51', '51', '51.jpg', 362, NULL, NULL, '2017-07-03 06:54:17', 1, 1),
(25, '61', '61', '61.jpg', 362, NULL, NULL, '2017-07-03 06:54:17', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_link`
--

CREATE TABLE `bf_link` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` text COLLATE latin1_general_ci,
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `file` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `deleted` int(10) DEFAULT '0' COMMENT '0:tampil;1:soft elete',
  `urut` int(11) DEFAULT NULL,
  `tipe` varchar(100) COLLATE latin1_general_ci DEFAULT 'link'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_link`
--

INSERT INTO `bf_link` (`id`, `title`, `keterangan`, `link`, `file`, `deleted`, `urut`, `tipe`) VALUES
(117, 'banner4', '', '#', 'LiverUpdate.gif', 0, NULL, 'Banner Link'),
(115, 'banner2', '', '#', 'IHKS.gif', 0, NULL, 'Banner Link'),
(116, 'banner3', '', '#', 'karpet2.gif', 0, NULL, 'Banner Link'),
(114, 'banner1', '', '#', 'BAner-web-JakIncaam1.gif', 0, NULL, 'Banner Link');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_login_attempts`
--

CREATE TABLE `bf_login_attempts` (
  `id` bigint(20) NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_menu_lokasi`
--

CREATE TABLE `bf_menu_lokasi` (
  `id` int(10) NOT NULL,
  `menu_lok` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tipe_lokasi` int(11) DEFAULT '1' COMMENT '1. Depan, 2. Belakang',
  `list_urutan` int(11) DEFAULT NULL,
  `menu_lok_english` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `flag_hide` int(11) DEFAULT '0' COMMENT '0=show ; 1=hide'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_menu_lokasi`
--

INSERT INTO `bf_menu_lokasi` (`id`, `menu_lok`, `tipe_lokasi`, `list_urutan`, `menu_lok_english`, `flag_hide`) VALUES
(7, 'Top Menu', 1, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_meta_menu`
--

CREATE TABLE `bf_meta_menu` (
  `id` int(11) NOT NULL,
  `rang` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `name_english` varchar(256) DEFAULT NULL,
  `location_index` int(11) NOT NULL,
  `url_module` varchar(255) DEFAULT NULL,
  `url_posts` int(11) DEFAULT NULL,
  `url_kategori` int(11) DEFAULT NULL,
  `url_blank` varchar(1) DEFAULT NULL,
  `url_pages` int(11) DEFAULT NULL,
  `url_link` varchar(200) DEFAULT NULL,
  `url_kategori_arsip` int(11) DEFAULT NULL,
  `description` varchar(256) NOT NULL,
  `description_english` text,
  `flag_hide` int(11) DEFAULT '0' COMMENT '0=show ; 1=hide',
  `url_kategori_produk` int(11) DEFAULT NULL,
  `icon` text,
  `id_role` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bf_meta_menu`
--

INSERT INTO `bf_meta_menu` (`id`, `rang`, `parent_id`, `name`, `name_english`, `location_index`, `url_module`, `url_posts`, `url_kategori`, `url_blank`, `url_pages`, `url_link`, `url_kategori_arsip`, `description`, `description_english`, `flag_hide`, `url_kategori_produk`, `icon`, `id_role`) VALUES
(90, 4, 0, 'SUPLEMEN', NULL, 7, '', 0, 0, '#', 0, '', 0, '', NULL, 0, 0, NULL, 0),
(41, 0, 0, 'BERANDA', NULL, 7, 'home/index', 0, 0, '', 0, '', 0, '', NULL, 0, 0, NULL, 0),
(91, 7, 0, 'KOLOM', NULL, 7, '', 0, 97, '', 0, '', 0, '', NULL, 0, 0, NULL, 0),
(92, 8, 0, 'ARTIKEL', NULL, 7, '', 0, 0, '#', 0, '', 0, '', NULL, 0, 0, NULL, 0),
(93, 14, 0, 'DARI REDAKSI', NULL, 7, '', 0, 0, '#', 0, '', 0, '', NULL, 0, 0, NULL, 0),
(105, 17, 93, 'Hukum dan Etik Kedokteran', NULL, 7, '', 0, 106, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(95, 19, 0, 'FORUM', NULL, 7, '', 0, 0, '#', 0, '', 0, '', NULL, 0, 0, NULL, 0),
(96, 5, 90, 'BAHASAN UTAMA', NULL, 7, '', 0, 95, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(97, 6, 90, 'KEGIATAN', NULL, 7, '', 0, 96, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(98, 9, 92, 'Artikel Penelitian', NULL, 7, '', 0, 98, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(99, 10, 92, 'Artikel Konsep', NULL, 7, '', 0, 99, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(100, 11, 92, 'Artikel Penyegar', NULL, 7, '', 0, 100, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(101, 12, 92, 'Studi Kasus', NULL, 7, '', 0, 101, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(102, 13, 92, 'Fokus', NULL, 7, '', 0, 102, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(103, 15, 93, 'Saripati', NULL, 7, '', 0, 103, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(104, 16, 93, 'Editorial', NULL, 7, '', 0, 104, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(106, 18, 93, 'Penyegar Kompetensi', NULL, 7, '', 0, 105, NULL, 0, '', 0, '', NULL, 0, 0, NULL, 0),
(107, 1, 0, 'TENTANG KAMI', NULL, 7, '', 0, 0, '#', 0, '', 0, 'TENTANG KAMI', NULL, 0, 0, NULL, 0),
(108, 2, 107, 'PROFIL', NULL, 7, '', 0, 0, '', 72, '', 0, '', NULL, 0, 0, NULL, 0),
(109, 3, 107, 'DISTRIBUSI', NULL, 7, '', 0, 0, '', 75, '', 0, '', NULL, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_multimedia`
--

CREATE TABLE `bf_multimedia` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` mediumtext COLLATE latin1_general_ci,
  `file_multimedia` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_multimedia` date DEFAULT NULL,
  `author` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `gambar_multimedia` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `multimedia_category` int(11) DEFAULT NULL,
  `judul_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_english` mediumtext COLLATE latin1_general_ci,
  `flag` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_multimedia`
--

INSERT INTO `bf_multimedia` (`id`, `judul`, `isi`, `file_multimedia`, `tgl_multimedia`, `author`, `gambar_multimedia`, `multimedia_category`, `judul_english`, `isi_english`, `flag`) VALUES
(32, 'LAWmotion #24 Disabilitas Sebagai Isu Multisektor', 'Disabilitas harus dilihat dari human rights based, bukan charity based. Oleh karena itu, disabilitas hari ini merupakan isu multisektor, bukan hanya sekadar milik sektor sosial yang hanya akan menebalkan stigma yang melekat kepada orang dengan disabilitas. Disabilitas—yang sebelumnya disebut dengan cacat—sudah diatur dalam berbagai peraturan perundang-undangan yang mengatur terkait dengan berbagai sektor, seperti pendidikan, kesehatan, ketenagakerjaan, infrastruktur, transportasi, dan sektor lain. Namun, implementasinya masih jauh dari kejadian. Catatan khusus terhadap persyaratan sehat jasmani dan rohani untuk pengisian jabatan tertentu yang melekatkan disabilitas dalam kondisi tidak sehat jasmani. Padahal, disabilitas bukan penyakit, bahkan belum tentu menghambat seseorang dalam menjalankan tugasnya.', 'https://www.youtube.com/watch?v=cB_Ff4yOXfE', '2017-07-05', 'admin', 'https://i.ytimg.com/vi/cB_Ff4yOXfE/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAxYmuLyoO9RzqT7IG7GRH5w0mf-g', 91, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_m_kategori`
--

CREATE TABLE `bf_m_kategori` (
  `id` int(10) NOT NULL,
  `kategori` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kategori_english` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` text COLLATE latin1_general_ci,
  `type_kategori` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `ket_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_description` text COLLATE latin1_general_ci,
  `meta_keyword` text COLLATE latin1_general_ci,
  `meta_robots` text COLLATE latin1_general_ci,
  `file_affaliate` text COLLATE latin1_general_ci,
  `template` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_m_kategori`
--

INSERT INTO `bf_m_kategori` (`id`, `kategori`, `kategori_english`, `ket`, `type_kategori`, `deleted`, `ket_english`, `meta_description`, `meta_keyword`, `meta_robots`, `file_affaliate`, `template`, `gambar`) VALUES
(43, 'BERITA KEMENDAGRI', 'POLITIK', '', 'post', 1, '', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Agenda ', 'Agenda ', '', 'agenda', 0, '', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Kerajinan Desa', NULL, 'Tanga-tangan kreatif dari masyarakat desa', 'produk', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'WIsata Desa', NULL, 'Tempat Wisata untuk desa', 'produk', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'BERITA NASIONAL', NULL, '', 'post', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'UNDANG-UNDANG', NULL, 'Berisi Produk Hukum', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'Perikanan', NULL, '', 'produk', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Lainnya', NULL, '', 'produk', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'BERITA DAERAH', NULL, '', 'post', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'DARI MENTERI', NULL, '', 'post', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'SIARAN PERS', NULL, '', 'post', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'PP PENGGANTI UU', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'PERATURAN PEMERINTAH', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'PERATURAN PRESIDEN', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'INSTRUKSI PRESIDEN', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'KEPUTUSAN PRESIDEN', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'PERATURAN MENDAGRI', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'KEPUTUSAN MENDAGRI', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'Video Kemendagri', NULL, '', 'multimedia', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'Media Kemendagri', 'Media Kemendagri', '', 'publikasi', 0, '', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'ARTIKEL', NULL, '', 'post', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'INTRUKSI MENTERI', NULL, '', 'arsip', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'Bahasan Utama ', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'Kegiatan', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'Kolom', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'Artikel Penelitian', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'Artikel Konsep', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'Artikel Penyegar', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'Studi Kasus', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'Fokus', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'Saripati', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'Editorial', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'Penyegar Kompetensi', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'Hukum dan Etik Kedokteran', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'Dari Redaksi', NULL, '', 'post', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_pages_meta`
--

CREATE TABLE `bf_pages_meta` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `author` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `deleted` int(11) DEFAULT '0' COMMENT '0 : tampil , 1:tidak tampil',
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `baca` int(11) DEFAULT NULL,
  `status_tampil` int(11) DEFAULT '0' COMMENT '0:tampil , 1:draft',
  `judul_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_english` text COLLATE latin1_general_ci,
  `parent_id` int(11) DEFAULT '0',
  `meta_description` text COLLATE latin1_general_ci,
  `meta_keyword` text COLLATE latin1_general_ci,
  `meta_robots` text COLLATE latin1_general_ci,
  `files` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_pages_meta`
--

INSERT INTO `bf_pages_meta` (`id`, `judul`, `isi`, `author`, `deleted`, `created_on`, `modified_on`, `baca`, `status_tampil`, `judul_english`, `isi_english`, `parent_id`, `meta_description`, `meta_keyword`, `meta_robots`, `files`) VALUES
(60, 'PEJABAT STRUKTURAL', '', 'Admin', 1, '2015-11-28 08:30:20', '2016-05-12 08:50:57', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(61, 'STAF DAN KARYAWAN', '<p>A</p>\n', 'Admin', 1, '2016-05-12 08:51:12', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(62, 'SEJARAH', '<p>Diawali pada Zaman Hindia Belanda sampai tahun 1942, Depdagri disebut Departement van Binnenlands Bestuur yang bidang tugasnya meliputi Jabatan Kepolisian, Transmigrasi, dan Agraria. Selanjutnya pada Zaman pendudukan Jepang (tahun 1942-1945). Departement van Binnenland Bestuur oleh pemerintah Jepang diubah menjadi Naimubu yang bidang tugasnya meliputi juga urusan agama, sosial, kesehatan, pendidikan, pengajaran dan kebudayaan. Naimubu atau Kementrian Dalam Negeri berkantor di Jalan Sagara nomor 7 Jakarta sampai Proklamasi tanggal 17 Agustus 1945.<br />\n<br />\nPada tanggal 19 Agustus 1945 Naimubu dipecah menjadi:<br />\n<br />\na.&nbsp;&nbsp; Kementrian Dalam Negeri termasuk urusan agama, yang dalam perkembangan lebih lanjut urusan agama dilepaskan dari Kementrian Dalam Negeri.<br />\nb.&nbsp;&nbsp;&nbsp; Kementrian Sosial<br />\nc.&nbsp;&nbsp;&nbsp; Kementrian Kesehatan.<br />\nd.&nbsp;&nbsp;&nbsp; Kementrian Pendidikan, pengajaran dan kebudayaan.<br />\n<br />\nKementrian Dalam Negeri yang dibentuk pada saat Kabinet Presidensial yang pertama Negara Republik Indonesia pada tahun 1945.&nbsp;<br />\nDan sejak berdirinya yang bermula dari Kabinet Presidensial sampai dengan Kabinet Gotong Royong sudah sering berganti beberapa menteri yang memegang Jabatan di Kementerian Dalam Negeri.<br />\n<br />\nSumber: BULETIN WARTA PRAJA (Edisi 2 Tahun 2005)</p>\n', 'Admin', 1, '2017-07-03 05:51:12', NULL, 57, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(63, 'ARTI LOGO/LAMBANG', '<p><strong>Berdasar Permendagri Nomor 1 Tahun 1991</strong><br />\nPegawai Negeri Sipil di lingkungan Kemendagri diharapkan dapat menjadi Aparatur yang bersih dan berwibawa selalu memegang teguh Sapta Prasetya Korpri setia dan taat kepada Pancasila. UUD 1945 Negara dan Pemerintah Republik Indonesia yang diproklamasikan pada tanggal 17-8-1945 dengan dasar Negara Pancasila dan bertekad untuk mempertahankan kejayaan serta mengisi Kemerdekaan dengan meningkatkan kemakmuran Bangsa guna mencapai Masyarakat Adil dan Makmur&nbsp;<br />\nKeterangan :<br />\n<br />\na. Kapas dan daun = 17 buah<br />\nb. Akar gantung beringin 8 buah (4 kiri dan 4 kanan)<br />\nc. Butir padi 45 buah<br />\nd. Akar beringin 5 cabang<br />\ne. Gerumbulan 27 buah<br />\nf. Daun Padi 27 buah<br />\n<br />\nWarna Arti Warna<br />\n<br />\nDasar logo : Biru Tua Biru tua artinya kesetiaan<br />\nKapas : Putih Putih aartinya suci<br />\nBulir padi &amp; daun : Kuning emas Kuning emas artinya kejayaan<br />\nPita : Kuning emas Hijau artinya kemakmuran/kesuburan<br />\nTulisan : Putih</p>\n', 'Admin', 1, '2017-07-03 05:52:09', NULL, 46, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(64, 'VISI DAN MISI', '<p><strong>V I S I</strong><br />\n<br />\n<br />\n<strong><em>Terwujudnya sistem politik yang demokratis, pemerintahan yang desentralistik, pembangunan daerah yang berkelanjutan, serta keberdayaan masyarakat yang&nbsp;</em></strong><strong><em>partisipatif,</em></strong><em>&nbsp;<strong>dengan didukung</strong></em><strong><em>&nbsp;sumber daya aparatur yang profesional dalam wadah Negara Kesatuan Republik Indonesia</em></strong></p>\n\n<p>Visi tersebut mencerminkan suatu keinginan atau cita-cita untuk menjadi terdepan dalam melanjutkan perjalanan organisasi sebagai motor penggerak perubahan dalam penyelenggaraan pemerintahan dan politik dalam negeri ke arah yang lebih baik, serta cerminan komitmen organisasi sebagai elemen penggerak dan motivator untuk menjadi semakin baik, yang harus disinergikan dengan elemen penggerak lainnya dalam suatu kesisteman yang utuh. Kata kunci dari Visi Kementerian Dalam Negeri tersebut dapat dijelaskan sebagai berikut:<br />\n&nbsp;</p>\n\n<ol>\n	<li><strong>Sistem Politik Demokratis,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya suatu tatanan kehidupan politik dengan meletakkan kedaulatan berada ditangan rakyat yang diwujudkan melalui pengembangan format politik dalam negeri dan pengembangan sistem pemerintahan termasuk sistem penyelenggaraan pemerintahan daerah kearah yang lebih demokratis.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Pemerintahan Desentralistik,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya sistem penyelenggaraan pemerintahan daerah yang efektif dan responsif dengan memperhatikan prinsip-prinsip demokrasi, pemerataan, keadilan, keistimewaan, dan kekhususan suatu daerah dalam Negara Kesatuan Republik Indonesia.<br />\n	&nbsp;</li>\n	<li><strong>Pembangunan Daerah,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya pembangunan daerah yang berkesinambungan melalui peningkatan kemandirian daerah dalam pengelolaan pembangunan yang berbasis wilayah, ekonomi, dan berdaya saing, secara profesional dan berkelanjutan.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Keberdayaan Masyarakat,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya keberdayaan masyarakat yang partisipatif yang maju dan mandiri dalam berbagai aspek kehidupan.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Sumber Daya Aparatur yang Profesional&nbsp;</strong>merupakan salah satu prasyarat utama yang harus terpenuhi dalam mencapai tujuan sistem politik yang demokratis, pemerintahan yang desentralistik, pembangunan daerah yang berkelanjutan, serta keberdayaan masyarakat yang partisipatif.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Wadah Negara Kesatuan Republik Indonesia&nbsp;</strong>(NKRI) merupakan komitmen, sikap, dan arah yang tegas terhadap penegakkan kesatuan dan persatuan nasional dalam seluruh aspek penyelenggaraan pemerintahan, politik dalam negeri, pembangunan daerah, dan pemberdayaan masyarakat. Hal tersebut sekaligus mewadahi upaya mewujudkan cita-cita bangsa yaitu Masyarakat Ingonesia yang aman, adil, damai, dan sejahtera, yang juga merupakan refleksi visi, misi, dan prioritas kebijakan pembangunan nasional.<br />\n	&nbsp;</li>\n</ol>\n\n<p>&nbsp;<strong>M I S I</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Misi Kementerian Dalam Negeri yang ditetapkan merupakan peran strategik yang diinginkan dalam mencapai visi diatas, yaitu menetapkan kebijaksanaan nasional dan memfasilitasi penyelenggaraan Pemerintahan dalam, upaya:<br />\n&nbsp;</p>\n\n<ol>\n	<li>Memperkuat Keutuhan NKRI, serta memantapkan sistem politik dalam negeri yang demokratis;&nbsp;<br />\n	&nbsp;</li>\n	<li>Memantapkan penyelenggaraan tugas-tugas pemerintahan umum;&nbsp;<br />\n	&nbsp;</li>\n	<li>Memantapkan efektivitas dan efisiensi penyelenggaraan pemerintahan yang desentralistik;&nbsp;<br />\n	&nbsp;</li>\n	<li>Mengembangkan keserasian hubungan pusat-daerah, antar daerah dan antar kawasan, serta kemandirian daerah dalam pengelolaan pembangunan secara berkelanjutan;&nbsp;<br />\n	&nbsp;</li>\n	<li>Memperkuat otonomi desa dan meningkatkan keberdayaan masyarakat dalam aspek ekonomi, sosial, dan budaya; serta<br />\n	&nbsp;</li>\n	<li>Mewujudkan tata pemerintahan yang baik, bersih, dan berwibawa.</li>\n</ol>\n', 'Admin', 1, '2017-07-03 05:52:44', NULL, 35, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(65, 'TUGAS DAN FUNGSI', '<p>Kementerian Dalam Negeri mempunyai tugas menyelenggarakan urusan pemerintahan dalam negeri untuk membantu Presiden dalam menyelenggarakan pemerintahan negara.<br />\n<br />\nKementerian Dalam Negeri menyelenggarakan fungsi:</p>\n\n<ol>\n	<li>perumusan, penetapan dan pelaksanaan kebijakan dibidang pemerintahan dalam negeri;</li>\n	<li>pengelolaan barang milik/kekayaan negara;</li>\n	<li>pengawasan atas pelaksanaan tugas dibidang pemerintahan dalam negeri; dan</li>\n	<li>pelaksanaan kegiatan teknis dari pusat sampai ke daerah</li>\n</ol>\n', 'Admin', 1, '2017-07-03 05:53:21', NULL, 31, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(66, 'STRATEGI', '<p>PRINSIP DAN STRATEGI&nbsp;</p>\n\n<p>Dalam rangka mendukung pencapaian Sasaran Prioritas Pembangunan Nasional serta Visi, Misi, Tujuan, dan Sasaran Strategis Kementerian Dalam Negeri Tahun 2010-2014, upaya dan langkah strategik utama adalah &quot;Menjaga dan memperkuat stabilitas penyelenggaraan sistem politik dalam negeri dan sistem pemerintahan dalam negeri&quot;. Stabilitas politik dalam negeri dan pemerintahan dalam negeri adalah parameter pokok kebijakan Kementerian Dalam Negeri yang dilaksanakan secara berkesinambungan sejak periode RPJMN pertama tahun 2004-2009 dalam kerangka RPJPN Tahun 2005-2025.</p>\n\n<p>Sejalan dengan itu, dalam kerangka pencapaian target pembangunan 2010-2014, terdapat prioritas-prioritas khusus yang secara langsung mendukung Program 5 (lima) Tahun (P5T), baik yang secara eksplisit telah termuat dalam RPJMN 2010-2014 maupun yang secara langsung menjadi bagian penugasan kepada Menteri Dalam Negeri. Untuk mewujudkan hal tersebut, digunakan pendekatan berupa prinsip-prinsip:</p>\n\n<ol>\n	<li>Desentralisasi dan Otonomi Daerah, yaitu dengan memperkuat penyelenggaraan pemerintahan daerah guna meningkatkan pelayanan dan hasil-hasil pembangunan untuk kesejahteraan masyarakat;&nbsp;</li>\n	<li>Pembangunan berkelanjutan, yaitu keseluruhan proses pembangunan yang dilakukan saling berkaitan antara kegiatan sebelumya dengan rencana selanjutnya atau antara kegiatan yang satu dengan kegiatan lainnya dalam suatu rangkaian tahapan yang saling terintegrasi;&nbsp;</li>\n	<li>Tata kepemerintahan yang baik, yaitu menerapkan tata pengelolaan yang baik&nbsp;(good governance)&nbsp;guna membentuk birokrasi yang lebih profesional dan berkinerja tinggi yang didukung dengan langkah-Iangkah reformasi birokrasi di lingkungan Kementerian Dalam Negeri.</li>\n</ol>\n\n<p>Strategi pencapaian program tersebut dilaksanakan dalam koridor kebijakan strategik yang merupakan kebijakan prioritas Kementerian Dalam Negeri tahun 2010-2014, yang meliputi:<br />\n&nbsp;</p>\n\n<ol>\n	<li>Menjaga persatuan dan kesatuan serta rnelanjutkan pengembangan sistem politik yang demokratis dan berkedaulatan rakyat, yang didukung oleh situasi dan kondisi yang kondusif.&nbsp;</li>\n	<li>Mendorong pelaksanaan otonomi daerah dan penyelenggaraan pemerintahan yang desentralistik.&nbsp;</li>\n	<li>Mendorong pembangunan daerah yang berkesinambungan, serta meningkatkan keberdayaan dan kemandirian masyarakat dalam pengelolaan pembangunan secara partisipatif.</li>\n	<li>Mendorong penyelenggaraan prinsip-prinsip tata pemerintahan yang baik dan penerapan reformasi birokrasi.</li>\n</ol>\n', 'Admin', 1, '2017-07-03 05:55:29', NULL, 31, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(67, 'PROGRAM STRATEGIS', '<p><strong>PROGRAM DAN KEGIATAN</strong></p>\n\n<p><strong>Program 1: Pembinaan Kesatuan Bangsa dan Politik (P1)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan memperkokoh kesatuan dan persatuan nasional serta stabilitas politik dalam negeri yang dilandasi oleh semangat dan nilai-nilai Pancasila dan UUD 1945 melalui pengembangan sistem politik yang demokratis dan berkedaulatan rakyat. Pelaksana program adalah Direktorat Jenderal Kesatuan Bangsa dan Politik, melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Kesatuan Bangsa dan Politik;</li>\n	<li>Bina Ideologi dan Wawasan Kebangsaan;</li>\n	<li>Fasilitasi Kewaspadaan Nasional;</li>\n	<li>Fasilitasi Ketahanan Seni, Budaya, Agama, dan Kemasyarakatan;</li>\n	<li>Fasilitasi Politik Dalam Negeri; serta</li>\n	<li>Pembinaan dan Pengembangan Ketahanan Ekonomi.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 2: Penguatan Penyelenggaraan Pemerintahan Umum (P2)</strong></p>\n\n<p>Program inimerupakan program teknis dengan tujuan meningkatkan sinergitas hubungan pusat-daerah dalam penyelenggaraan pemerintahan umum. Pelaksana program adalah Direktorat Jenderal Pemerintahan Umum .melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Pemerintahan Umum;</li>\n	<li>Penyelenggaraan Hubungan Pusat dan Daerah, serta Kerjasama Daerah;</li>\n	<li>Pengembangan dan Penataan Wilayah Administrasi dan Perbatasan;</li>\n	<li>Pembinaan Ketenteraman, Ketertiban dan Perlindungan Masyarakat;</li>\n	<li>Pembinaan dan Pengembangan Kawasan dan Pertanahan; serta</li>\n	<li>Fasilitasi Pencegahan dan Penanggulangan Bencana,<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 3: Penataan Administrasi Kependudukan (P3)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan terciptanya tertib administrasi kependudukan. Pelaksana program adalah Direktorat Jenderal Kependudukan dan Pencatatan Sipil melalui 7 (tujuh) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Kependudukan dan Pencatatan Sipil;</li>\n	<li>Pembinaan Administrasi Pendaftaran Penduduk;</li>\n	<li>Pembinaan Administrasi Pencatatan Sipil;</li>\n	<li>Pengelolaan Informasi Kependudukan;</li>\n	<li>Pengembangan Sistem Administrasi Kependudukan (SAK) Terpadu;</li>\n	<li>Penataan pengembangan Kebijakan Kependudukan; serta</li>\n	<li>Penyerasian Kebijakan dan Perencanaan Kependudukan.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 4: Pengelolaan Desentralisasi Dan Otonomi Daerah (P4)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan meningkatnya pengelolaan penyelenggaran pemerintahan daerah yang desentralistik. Pelaksana program adalah Direktorat Jenderal Otonomi Daerah melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis lainnya Direktorat Jenderal Otonomi Daerah;</li>\n	<li>Penataan Urusan Pemerintahan Daerah lingkup I;</li>\n	<li>Penataan Urusan Pemerintahan Daerah Lingkup II;</li>\n	<li>Penataan Daerah Otonom, Otonomi Khusus, dan DPOD;</li>\n	<li>Fasilitasi KDH, DPRD dan Hubungan Antar Lembaga; serta</li>\n	<li>Pengembangan Kapasitas dan Evaluasi Kinerja Daerah,&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 5: Peningkatan Kapasitas Keuangan Pemerintah Daerah (P5)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan meningkatkan akuntabilitas, transparansi dan tertib administrasi pengelolaan keuangan daerah serta meningkatnya investasi dan kemampuan fiskal daerah. Pelaksana program adalah Direktorat Keuangan Daerah melalui 5 (lima) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Keuangan Daerah;</li>\n	<li>Pembinaan Anggaran Daerah;</li>\n	<li>Pembinaan Pengelolaan Pendapatan Daerah dan Investasi Daerah;</li>\n	<li>Pembinaan dan Fasilitasi Dana Perimbangan; serta</li>\n	<li>Pembinaan Pelaksanaan dan Pertanggungjawaban Keuangan Daerah.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 6: Bina Pembangunan Daerah (P6)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan terciptanya pertumbuhan pembangunan di daerah, serta keseimbangan pembangunan antar daerah yang didukung oleh efektivitas kinerja pemerintah daerah. Pelaksana program adalah Direktorat Bina Pembangunan Daerah melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Bina Pembangunan Daerah;</li>\n	<li>Fasilitasi Perencanaan Pembangunan Daerah;</li>\n	<li>Fasilitasi Pengembangan Wilayah Terpadu;</li>\n	<li>Fasilitasi Penataan Ruang Daerah dan Lingkungan Hidup di Daerah;</li>\n	<li>Fasilitasi Peningkatan Pertumbuhan Ekonomi Daerah; serta</li>\n	<li>Fasilitasi Penataan Perkotaan.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 7: Pemberdayaan Masyarakat dan Pemerintahan Desa (P7)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan mewujudkan otonomi desa dan meningkatkan keberdayaan masyarakat dalam aspek ekonomi, sosial dan budaya. Pelaksana program adalah Direktorat Jenderal Pemberdayaan Masyarakat dan Desa melalui 8 (delapan) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajamen dan Dukungan Teknis Lainnya Direktorat Jenderal Pemberdayaan Masyarakat dan Desa;</li>\n	<li>Peningkatan Kapasitas Penyelenggaraan Pemerintahan Desa dan Kelurahan;</li>\n	<li>Peningkatan Kapasitas Kelembagaan dan Pelatihan Masyarakat;</li>\n	<li>Fasilitasi Pemberdayaan Adat dan Sosial Budaya Masyarakat;</li>\n	<li>Pengembangan Usaha Ekonomi Masyarakat;</li>\n	<li>Fasilitasi Pengelolaan Sumber Daya Alam dan Teknologi Tepat Guna;</li>\n	<li>Peningkatan Kemandirian Masyarakat Perdesaan (PNPM-MP); serta</li>\n	<li>Peningkatan Keberdayaan Masyarakat dan Desa lingkup Regional.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 8: Pendidikan Kepamongprajaan (P8)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan meningkatkan kapasitas SDM aparatur lingkup Kementerian Dalam Negeri dan pemerintah daerah melalui pendidikan kepamongprajaan. Pelaksana program adalah Institut Pemerintahan Dalam Negeri melalui 4 (empat) kegiatan yaitu:</p>\n\n<ol>\n	<li>Penyelenggaraan Akademik, Administrasi, Perencanaan dan Kerjasama Pendidikan Kepamongprajaan;</li>\n	<li>Pengelolaan Administrasi Umum dan Keuangan Pendidikan Kepamongprajaan;</li>\n	<li>Penyelenggaraan Administrasi Keprajaan dan Kemahasiswaan; serta</li>\n	<li>Pelaksanaan Pendidikan Kepamongprajaan dan Administrasi Kampus IPDN Daerah.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 9: Pengawasan dan Peningkatan Akuntabilitas Aparatur Kementerian Dalam Negeri (P9)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan akuntabilitas dan transparansi dalam penyelenggaraan pemerintahan Iingkup Kementerian Dalam Negeri dan pemerintah daerah. Pelaksana program adalah Inspektorat Jenderal melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Inspektorat Jenderal;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah I;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah II;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah III;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah IV; serta</li>\n	<li>Penyelenggaraan Pemeriksaan, Pengusutan, Pengujian Kasus dan Pengaduan Khusus.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 10: Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya Kementerian Dalam Negeri (P10)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan kualitas dukungan manajemen dan dukungan pelayanan teknis lainnya Kementerian Dalam Negeri. Pelaksana program adalah Sekretariat Jenderal melalui 10 (sepuluh) kegiatan yaitu:</p>\n\n<ol>\n	<li>Perencanaan Program dan Anggaran;</li>\n	<li>Pembinaan dan Pengelolaan Administrasi Kepegawaian;</li>\n	<li>Penataan Kelembagaan, Ketatalaksanaan, Analisis Jabatan, dan Pelaporan Kinerja;</li>\n	<li>Penataan Produk Hukum dan Pelayanan Bantuan Hukum;</li>\n	<li>Pengelolaan Ketatausahaan, Rumah Tangga, dan Keprotokolan;</li>\n	<li>Pengelolaan Data, Informasi, Komunikasi dan Telekomunikasi;</li>\n	<li>Pengelolaan Penerangan;</li>\n	<li>Pengkajian Kebijakan Strategik;</li>\n	<li>Penataan Administrasi Kerjasama Luar Negeri; serta</li>\n	<li>Pengelolaan Administrasi Keuangan dan Aset.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 11: Peningkatan Sarana dan Prasarana Aparatur Kementerian Dalam Negeri (P11 )</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan kinerja aparatur melalui dukungan sarana dan prasarana kerja. Pelaksana program adalah Sekretariat Jenderal melalui kegiatan yaitu Peningkatan dan Pengelolaan Sarana dan Prasarana Aparatur.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Program 12: Penelitian dan Pengembangan Kementerian Dalam Negeri (P12)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan kualitas penyusunan dan implementasi kebijakan Kementerian Dalam Negeri. Pelaksana program adalah Badan Penelitian dan Pengembangan melalui 5 (lima) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Badan Penelitian dan Pengembangan;</li>\n	<li>Penelitian dan Pengembangan Bidang Kesatuan Bangsa, Politik, dan Otonomi Daerah;</li>\n	<li>Penelitian dan Pengembangan Bidang PUM dan Kependudukan;</li>\n	<li>Penelitian dan Pengembangan Bidang Pemerintahan Desa dan Pemberdayaan Masyarakat; serta</li>\n	<li>Penelitian dan Pengembangan Bidang Pembangunan dan Keuangan Daerah.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 13: Pendidikan dan Pelatihan Aparatur Kementerian Dalam Negeri (P13)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan meningkatkan kapasitas SDM aparatur lingkup Kementerian Dalam Negeri dan pemerintah daerah melalui dukungan pendidikan dan pelatihan. Pelaksana program adalah Badan Pendidikan dan Pelatihan melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Badan Pendidikan dan Pelatihan;</li>\n	<li>Pendidikan dan Pelatihan Manajemen dan Kepemimpinan Pemerintahan Daerah;</li>\n	<li>Pendidikan dan Pelatihan Manajemen Pembangunan Kependudukandan Keuangan Daerah;</li>\n	<li>Pendidikan dan Pelatihan Struktural dan Teknis;</li>\n	<li>Pembinaan Jabatan Fungsional dan Standarisasi Diklat; serta</li>\n	<li>Pendidikan dan Pelatihan Regional.</li>\n</ol>\n', 'Admin', 1, '2017-07-03 05:56:00', NULL, 15, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(68, 'STRUKTUR ORGANISASI', '<p><a href="http://www.kemendagri.go.id/media/filemanager/2015/11/05/s/o/sotk_flash8_rev3.swf"><img alt="" height="400" src="http://www.kemendagri.go.id/media/images/2015/08/18/n/e/new-image-sotk.jpg" width="600" /></a></p>\n', 'Admin', 1, '2017-07-03 05:58:09', NULL, 8, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(69, 'PROFIL PIMPINAN', '<p>Gamawan Fauzi (lahir di Solok, Sumatera Barat, 9 November 1957; umur 51 tahun) adalah Menteri Dalam Negeri Indonesia sejak 22 Oktober 2009. Sebelumnya ia menjabat sebagai Gubernur Sumatra Barat sejak 15 Agustus 2005 hingga 22 Oktober 2009. Lulusan Fakultas Hukum dan Magister Manajemen Universitas Andalas, Padang, Sumatera Barat ini adalah penerima Bung Hatta Award atas keberhasilannya memerangi korupsi pada saat menjadi bupati Solok. Bpk. Gamawan Fauzi yang terkenal dengan good, clean, eficien goovernance ini telah memiliki 2 orang putri dan satu orang putra buah perkawinanya dengan Ny. Vita Gamawan Fauzi .<br />\n<br />\nRiwayat Pendidikan<br />\nMM (Magister Manajemen) Universitas Andalas, Padang<br />\nSH (Sarjana Hukum) Universitas Andalas, Padang<br />\n<br />\nRiwayat Pekerjaan<br />\n- Mentri Dalam Negeri Kabinet Indonesia Bersatu II (2009-sekarang)<br />\n- Gubernur Sumatera Barat (2005-2009)<br />\n- Bupati Solok (1995-2000), (2000-2005)<br />\n- KaBiro Humas Pemprov Sumatera Barat<br />\n- Sekretaris Pribadi Gubernur Sumatera Barat</p>\n', 'Admin', 1, '2017-07-03 05:58:57', NULL, 2, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(70, 'KONTAK', '<p><span style="font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;">PUSAT DATA, INFORMASI, KOMUNIKASI DAN TELEKOMUNIKASI KEMENTERAIAN DALAM NEGERI REPUBLIK INDONESIA</span><br style="font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;" />\n<br style="font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;" />\n<br style="font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;" />\n<span style="font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;">Jl. Medan Merdeka Utara No. 7, Jakarta Pusat</span><br style="font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;" />\n<span style="font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;">Telp. (021) 345 0038</span></p>\n', 'Admin', 1, '2017-07-06 03:37:44', '2017-07-06 03:37:57', 6, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(71, 'Tes 1', '<p>lorem ipsum dolor sitamet</p>\n', 'Admin', 1, '2017-07-17 05:55:30', NULL, 1, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(72, 'Profil', '<p>MEDIKA adalah Jurnal Kedokteran yang terbit tiap awal bulan dan didistribusikan langsung ke alamat dokter umum, dokter spesialis, apoteker, rumah sakit serta para praktisi kesehatan lainnya di seluruh Indonesia.<br />\n<br />\nDiterbitkan pertama kali tahun 1974 oleh PT GRAFITI MEDIKA PERS bekerjasama dengan GP Farmasi Indonesia dan didukung oleh para dokter ahli baik sebagai konsulen ahli maupun dewan redaksi, telah menjadikan MEDIKA sebagai Jurnal Ilmiah terkemuka tempat para pakar kesehatan menggelar hasil penelitian dan pengalamannya.<br />\n<br />\nSebagai Jurnal Kedokteran Indonesia yang telah terbit secara konsisten sebagai jurnal ilmiah lebih dari 42 tahun, MEDIKA telah mampu menumbuhkan dukungan dan kepercayaan dari banyak mitra sebagai sarana penghubung yang efektif antara profesi kedokteran, kesehatan dan kefarmasian dengan industri farmasi.<br />\n<br />\nDisajikan dengan rubrikasi dan bahasa yang mudah dipahami, menempatkan MEDIKA sebagai Jurnal Kedokteran yang paling sering dibaca oleh pada dokter dan tenaga ahli bidang kesehatan sebagai bahan bacaan serta referensi.</p>\n\n<h3>Hasil Survey</h3>\n\n<ul>\n	<li><em>Top of mind media</em>&nbsp;informasi kedokteran</li>\n	<li>Jurnal kedokteran yang mempunyai market share terbesar di Indonesia</li>\n	<li>Jurnal kedokteran yang paling sering dibaca</li>\n	<li>Jurnal kedokteran yang paling banyak menjadi sumber referensi merk obat</li>\n	<li>Jurnal kedokteran yang paling banyak memuat penelitian baru dan aktual</li>\n	<li>Jurnal kedokteran yang paling mudah dipahami</li>\n</ul>\n\n<p><em>*survey dilakukan oleh: &quot;Business Digest&quot; tahun 2004.</em></p>\n\n<p>&nbsp;</p>\n\n<div><strong>Alamat Redaksi &amp; Sirkulasi:</strong><br />\nJl. Kramat VI No. 37 Jakarta Pusat 10430<br />\nTelp. 3190 6654 (Hunting) Fax. 3190 6649.<br />\nPO. Box 4279/KBY - Jakarta 12042.<br />\n<br />\n<strong>Rekening Bank a/n PT. Medika Media Mandiri:</strong><br />\nBANK CENTRAL ASIA KCU Wahid Hasyim,<br />\nJl KH. Wahid Hasyim No.183 A-B, Jakarta Pusat 10240,<br />\nNo. AC : 028 - 311 - 254 - 1<br />\n<br />\n<strong>Diterbitkan Oleh:</strong><br />\n<em><strong>PT. Medika Media Mandiri</strong></em><br />\nSurat Izin Usaha Penerbitan Pers (SIUPP) :<br />\nSK Menpen RI No. 425/SK/Menpen/SIUPP/1998,<br />\ntanggal 10 Agustus 1998<br />\nISSN 0126-0901 Rekomendasi Departemen Kesehatan<br />\nR.I. No. 803/VIII-Birhukmas/1975 .<br />\nTanggal 14 Agustus 1975</div>\n', 'Developer', 0, '2017-09-09 07:00:20', NULL, 4, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(73, 'Kepengurusan', '<p><strong>Direktur Utama:</strong>&nbsp;dr. Seno Purnomo</p>\n\n<p><strong>Direktur Administrasi, Umum &amp; Keuangan :</strong>&nbsp;Dewi Poernomo Sari, SE., MM</p>\n\n<p><strong>Sekretaris Direksi:&nbsp;</strong>Agus Suhendra</p>\n\n<p>-------------------------------------------------------------</p>\n\n<p><strong>Penasihat:</strong>&nbsp;Prof. Dr. Does Sampoerno, MPH<br />\n<br />\n<strong>Pemimpin Redaksi:</strong><br />\nDr. dr. Muchtaruddin Mansyur, MS, SpOk, Ph.D<br />\n<br />\n<strong>Wakil Pemimpin Redaksi:</strong><br />\ndr. Mahesa Paranadipa</p>\n\n<p><strong>Redaktur Pelaksana:</strong>&nbsp;drh. Endah Wulandari</p>\n\n<p><strong>Redaktur:</strong>&nbsp;Dra. Wachyuni<br />\n<br />\n<strong>Redaksi:</strong></p>\n\n<p>Khisnul Khasanah, SKM, Alija Berlian Fani, S.Ikom, dr. Muhamad Angki Firmansyah, dr. Maria Florencia Deslivia, dr. Laurentius A. Pramono, dr.Hayatun Nufus, dr. Hari Nugroho, Sp.OG, dr. Gita Nurul Hidayah, dr. Ricsa Marcelena, dr. Diah Martina, dr. Frans Liwang</p>\n\n<p><strong>Kepala Divisi Penelitian:</strong>&nbsp;dr. Ekasakti Octohariyanto</p>\n\n<p><strong>Desain Grafis:</strong>&nbsp;Nanung Haryanto, Rycko Indrawan, S.<br />\n<br />\n<strong>Pemasaran:</strong></p>\n\n<p>Tuty Elfia, SH, Yuli Tri Wibawati, Dian G. Awaludin, S.S.(Pemasaran)<br />\nEndang Kusnaran, Sarbini (Sirkulasi)</p>\n\n<p><strong>Keuangan, SDM, Umum:</strong></p>\n\n<p>Kartini, Marlina Deniaty. S</p>\n\n<p><br />\n<strong>Koresponden:</strong><br />\nDrs. Zainul Kamal (Yogyakarta),<br />\nDr. Darmono S.S (Semarang),<br />\nDr. Dwicha Rahmawansa S. (Surabaya)</p>\n', 'Developer', 0, '2017-09-09 07:00:45', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(74, 'Pedoman Penulisan', '<p>Untuk membaca atau mengunduh Pedoman Penulisan, silahkan&nbsp;<strong><a href="http://www.jurnalmedika.com/images/stories/Shared/SYARATPENULISANNASKAHJurnalKedokteranIndonesiaMEDIKA_newupdate2017.pdf" rel="alternate" target="_blank">klik di sini</a>.</strong>&nbsp;Isi akan ditampilkan pada window / tab baru.</p>\n', 'Developer', 0, '2017-09-09 07:01:31', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(75, 'Distribusi', '<p>Medika didistribusikan langsung ke pada dokter spesialis, umum, apoteker, rumah sakit serta pada praktisi kesehatan lainnya di seluruh Indonesia.</p>\n\n<p>Sebaran distribusi Medika adalah sebagai berikut:</p>\n\n<p><img alt="distribusi" src="http://www.jurnalmedika.com/images/joomlart/stories/distribusi.png" style="border: 0px; vertical-align: middle; width: 100%;" /></p>\n', 'Developer', 0, '2017-09-09 07:01:56', '2017-09-09 07:04:11', 4, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_permissions`
--

CREATE TABLE `bf_permissions` (
  `permission_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_permissions`
--

INSERT INTO `bf_permissions` (`permission_id`, `name`, `description`, `status`) VALUES
(2, 'Site.Content.View', 'Allow users to view the Content Context', 'active'),
(3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'),
(4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'),
(5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'),
(6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'),
(7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'),
(8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'),
(9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'),
(10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'),
(11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'),
(12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'),
(13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'),
(14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'),
(15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'),
(16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'),
(17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'),
(18, 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active'),
(19, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'),
(20, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'),
(21, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'),
(22, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'),
(24, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'),
(25, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'),
(27, 'Activities.Own.View', 'To view the users own activity logs', 'active'),
(28, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'),
(29, 'Activities.User.View', 'To view the user activity logs', 'active'),
(30, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'),
(31, 'Activities.Module.View', 'To view the module activity logs', 'active'),
(32, 'Activities.Module.Delete', 'To delete the module activity logs', 'active'),
(33, 'Activities.Date.View', 'To view the users own activity logs', 'active'),
(34, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'),
(35, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'),
(36, 'Bonfire.Settings.View', 'To view the site settings page.', 'active'),
(37, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'),
(38, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'),
(39, 'Bonfire.Database.View', 'To view the Database menu.', 'active'),
(40, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'),
(41, 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active'),
(42, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'),
(43, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'),
(44, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'),
(45, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'),
(46, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active'),
(49, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'),
(50, 'Bonfire.Roles.Add', 'To add New Roles', 'active'),
(51, 'Pages.Content.View', '', 'active'),
(52, 'Pages.Content.Create', '', 'active'),
(53, 'Pages.Content.Edit', '', 'active'),
(58, 'Site.Theme.View', 'Allow user to view the Theme Context.', 'active'),
(59, 'Menuthemes.Theme.View', '', 'active'),
(60, 'CreateLocation.Theme.View', '', 'active'),
(61, 'Post.Content.View', '', 'active'),
(62, 'Post.Content.Create', '', 'active'),
(63, 'Post.Content.Edit', '', 'active'),
(64, 'Post.Content.Delete', '', 'active'),
(65, 'Kategori.Content.View', '', 'active'),
(66, 'Kategori.Content.Create', '', 'active'),
(67, 'Kategori.Content.Edit', '', 'active'),
(68, 'Kategori.Content.Delete', '', 'active'),
(69, 'Templates.Theme.View', '', 'active'),
(70, 'Templates.Theme.Create', '', 'active'),
(71, 'Templates.Theme.Delete', '', 'active'),
(72, 'Templates.Theme.Edit', '', 'active'),
(81, 'Slide.Plugin.View', '', 'active'),
(82, 'Slide.Plugin.Create', '', 'active'),
(83, 'Slide.Plugin.Edit', '', 'active'),
(84, 'Slide.Plugin.Delete', '', 'active'),
(192, 'Link.Plugin.View', '', 'active'),
(193, 'Link.Plugin.Create', '', 'active'),
(194, 'Link.Plugin.Edit', '', 'active'),
(195, 'Link.Plugin.Delete', '', 'active'),
(201, 'Polling.Plugin.View', '', 'active'),
(202, 'Polling.Plugin.Create', '', 'active'),
(203, 'Polling.Plugin.Edit', '', 'active'),
(204, 'Polling.Plugin.Delete', '', 'active'),
(205, 'Testimoni.Plugin.View', '', 'active'),
(206, 'Testimoni.Plugin.Approve', '', 'active'),
(208, 'Agenda.Plugin.View', '', 'active'),
(209, 'Agenda.Plugin.Create', '', 'active'),
(210, 'Agenda.Plugin.Edit', '', 'active'),
(211, 'Agenda.Plugin.Delete', '', 'active'),
(220, 'Arsip.Plugin.View', '', 'active'),
(221, 'Arsip.Plugin.Create', '', 'active'),
(222, 'Arsip.Plugin.Delete', '', 'active'),
(223, 'Arsip.Plugin.Edit', '', 'active'),
(228, 'Galerifoto.Plugin.View', '', 'active'),
(229, 'Galerifoto.Plugin.Create', '', 'active'),
(230, 'Galerifoto.Plugin.Edit', '', 'active'),
(231, 'Galerifoto.Plugin.Delete', '', 'active'),
(234, 'Multimedia.Plugin.View', '', 'active'),
(235, 'Multimedia.Plugin.Create', '', 'active'),
(236, 'Multimedia.Plugin.Edit', '', 'active'),
(237, 'Multimedia.Plugin.Delete', '', 'active'),
(238, 'Scrolltext.Plugin.View', '', 'active'),
(239, 'Scrolltext.Plugin.Create', '', 'active'),
(240, 'Scrolltext.Plugin.Edit', '', 'active'),
(241, 'Scrolltext.Plugin.Delete', '', 'active'),
(242, 'Publikasi.Plugin.View', '', 'active'),
(243, 'Publikasi.Plugin.Create', '', 'active'),
(244, 'Publikasi.Plugin.Edit', '', 'active'),
(245, 'Publikasi.Plugin.Delete', '', 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_polling`
--

CREATE TABLE `bf_polling` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab4` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab5` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `flag_polling` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_polling`
--

INSERT INTO `bf_polling` (`id`, `judul`, `jawab1`, `jawab2`, `jawab3`, `jawab4`, `jawab5`, `flag_polling`) VALUES
(1, 'Setujukah anda dengan demonstrasi yang hampir mengambil bahu jalan?', 'Setuju', 'Agak Setuju', 'Tidak Setuju', 'Kurang Setuju', 'Tidak Tahu', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_polling_count`
--

CREATE TABLE `bf_polling_count` (
  `id` int(10) NOT NULL,
  `id_polling` int(10) DEFAULT '0',
  `jawab1` int(10) DEFAULT '0',
  `jawab2` int(10) DEFAULT '0',
  `jawab3` int(10) DEFAULT '0',
  `jawab4` int(10) DEFAULT '0',
  `jawab5` int(10) DEFAULT '0',
  `ip_address` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_polling_count`
--

INSERT INTO `bf_polling_count` (`id`, `id_polling`, `jawab1`, `jawab2`, `jawab3`, `jawab4`, `jawab5`, `ip_address`, `tanggal`) VALUES
(16, 2, 1, 0, 1, 0, 0, '127.0.0.1', '2016-08-29'),
(17, 1, 1, 0, 0, 0, 1, '::1', '2017-07-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_post_meta`
--

CREATE TABLE `bf_post_meta` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug_judul` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `isi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `post_category` int(10) DEFAULT '0',
  `image_data` varchar(255) COLLATE latin1_general_ci DEFAULT '',
  `file_data` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `author` varchar(50) COLLATE latin1_general_ci DEFAULT 'Admin',
  `status_tampil` int(11) DEFAULT '0' COMMENT '0:tampil , 1:draft',
  `flag_comments` int(11) DEFAULT '0' COMMENT '1=tampil;0=tidak tampil',
  `image_data_desc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT '0' COMMENT '0:tampil;1:soft elete',
  `baca` int(11) DEFAULT NULL,
  `set_img` enum('thumb','none','full') COLLATE latin1_general_ci DEFAULT 'thumb',
  `slug_judul_english` text COLLATE latin1_general_ci,
  `isi_english` text COLLATE latin1_general_ci,
  `judul_english` text COLLATE latin1_general_ci,
  `headline` enum('N','Y') COLLATE latin1_general_ci DEFAULT 'N',
  `meta_description` text COLLATE latin1_general_ci,
  `meta_keyword` text COLLATE latin1_general_ci,
  `meta_robots` text COLLATE latin1_general_ci,
  `guid_image` text COLLATE latin1_general_ci,
  `identifier` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_post_meta`
--

INSERT INTO `bf_post_meta` (`id`, `judul`, `slug_judul`, `isi`, `post_category`, `image_data`, `file_data`, `author`, `status_tampil`, `flag_comments`, `image_data_desc`, `modified_on`, `created_on`, `deleted`, `baca`, `set_img`, `slug_judul_english`, `isi_english`, `judul_english`, `headline`, `meta_description`, `meta_keyword`, `meta_robots`, `guid_image`, `identifier`) VALUES
(1, 'Indonesia Menghadapi Beban Ganda Malnutrisi', 'Permasalahan gizi di Indonesia seakan tidak ada habisnya. Indonesia masih memiliki beban untuk mengentaskan stunting dan wasting yang masih tinggi. Di saat yang sama, Indonesia memiliki masalah baru, yakni angka prevalensi obesitas yang juga terus meningkat. Hal ini membuat Indonesia memiliki masalah undernutrition dan overnutritiondalam waktu bersamaan atau yang disebut dengan double burden of malnutrition atau beban ganda malnutrisi. Beban ganda malnutrisi ini dapat terjadi di tingkat individu, rumah tangga, dan populasi di sepanjang daur kehidupan manusia.', '<p>Permasalahan gizi di Indonesia seakan tidak ada habisnya. Indonesia masih memiliki beban untuk mengentaskan&nbsp;<em>stunting dan wasting</em>&nbsp;yang masih tinggi. Di saat yang sama, Indonesia memiliki masalah baru, yakni angka prevalensi obesitas yang juga terus meningkat. Hal ini membuat Indonesia memiliki masalah&nbsp;<em>undernutrition</em>&nbsp;dan&nbsp;<em>overnutrition</em>dalam waktu bersamaan atau yang disebut dengan&nbsp;<em>double burden of malnutrition</em>&nbsp;atau beban ganda malnutrisi. Beban ganda malnutrisi ini dapat terjadi di tingkat individu, rumah tangga, dan populasi di sepanjang daur kehidupan manusia.</p>\n\n<p><br />\nBerdasarkan data Riset Kesehatan Dasar (Riskesdas) tahun 2013, prevalensi balita stunting di Indonesia mencapai 37,2%, meningkat dari tahun 2010(35,6%) dan tahun 2007 (36,8%). Artinya, ada sekitar 8 juta anak di Indonesia yang mengalami stunting atau 1 dari 3 orang anak memiliki tinggi badan di bawah yang seharusnya. Prevalensi stunting di Indonesia lebih tinggi dibandingkan dengan beberapa negara tetangga, seperti Myanmar (35%), Vietnam (23%), dan Thailand (16%). Bahkan, Indonesia menempati peringkat kelima sebagai negara dengan prevalensi stunting tertinggi di dunia. Selain stunting, prevalensi balita wasting di Indonesia juga masih tinggi, yakni 12,1%. Di saat bersamaan, prevalensi balita overweight di Indonesia juga terus meningkat. Berdasarkan data Riskesdas 2013, prevalensi overweight di Indonesia mencapai 11,9%. Indonesia term suk di dalam 17 negara di dunia yang memiliki ketiga masalah gizi tersebut dalam waktu bersamaan. Tingginya prevalensi malnutrisi, baik undernutrition maupun overnutrition, menunjukkan bahwa beban ganda malnutrisi di Indonesia sudah cukup memprihatinkan. Wasting atau kurus merupakan salah satu masalah kurang gizi jangka pendek dimana berat badan tidak sesuai dengan tinggi badannya (BB/TB). Sedangkan stunting merupakan masalah kekurangan gizi kronis atau jangka panjang yang disebabkan oleh asupan gizi yang tidak adekuat sesuai dengan kebutuhannya dalam waktu yang lama. Stunting yang terjadi saat masih berada di dalam kandungan baru akan nampak saat anak berusia dua tahun.</p>\n\n<p>Dampak dari beban ganda malnutrisi ini sangat serius dan manifestasinya dapat dilihat di sepanjang kehidupan seseorang. Kekurangan gizi pada anakanak<br />\ndapat mulai terjadi pada tahap sangat awal kehidupan. Saat seorang anak menerima asupan gizi yang kurang baik saat masih dalam kandungan, tubuhnya akan beradaptasi agar dapat bertahan hidup dalam kondisi gizi yang kurang. Akibatnya, apabila nantinya ia hidup dalam lingkungan dengan asupan gizi yang mudah diperoleh, tubuhnya akan sangat rentan terhadap obesitas sehingga mudah terkena penyakit tidak menular, seperti penyakit diabetes melitus dan jantung. Disinilah letak permas alahan beban ganda malnutrisi. Lebih lanjut, stunting sebagai pe nanda kekurangan gizi kronis juga berdampak terhadap perkembangan kognitif. Hal ini dikarenakan pada seseorang yang mengalami stunting, proses-proses lain di dalam tubuh juga terhambat, salah satunya adalah pertumbuhan otak yang berdampak pada kecerdasan. Dalam jangka panjang, berbagai studi menunjukkan bahwa stunting berpotensi mengurangi skor IQ sebesar 5-11 poin dan nilai-nilai sekolahnya juga lebih rendah dibandingkan dengan yang tidak mengalami stunting. Selain itu, anak yang lahir dengan berat badan kurang, memiliki peluang 2,6 kali lebih kecil untuk melanjutkan ke pendidikan tinggi. Oleh karena itu, permasalahan stunting tidak hanya berhenti pada tubuh yang pendek saja. Berdasarkan data yang dirilis oleh World Bank, produktivitas seseorang yang mengalami stunting saat masih kecil ternyata lebih rendah dibandingkan dengan yang tidak. Hal ini sejalan dengan capaian pendidikan yang lebih rendah. Masalah akan semakin parah apabila pola makan tidak diatur dengan baik saat dewasa yang dapat menimbulkan berbagai macam penyakit tidak menular.</p>\n\n<p>Dampak beban ganda malnutrisi tidak hanya dirasakan oleh individu. Dari segi ekonomi, kerugian akibat stunting dan malnutrisi diperkirakan setara dengan 2-3% PDB Indonesia. Banyaknya kasus penyakit tidak menular di Indonesia berakibat pada meningkatnya pengeluaran pemerintah, khususnya untuk Jaminan Kesehatan Nasional (JKN). Penyakit tidak menular, seperti stroke, diabetes melitus, dan gagal ginjal, kini menjadi penyebab 60% kematian di Indonesia dan pembiayaan JKN untuk kasus penyakit tidak menular ini merupakan salah satu yang terbesar.</p>\n\n<p>&nbsp;</p>\n\n<h3>Faktor yang Mempengaruhi Beban Ganda Malnutrisi</h3>\n\n<p>Banyak orang tua yang seolah memaklumi anaknya mengalami stunting karena masalah keturunan. Para orang&nbsp; tua ini seolah menganggap wajar jika orang tuanya pendek maka anaknya juga pendek. Padahal, sebenarnya stunting merupakan masalah gizi yang dapat dicegah sejak dalam kandungan. Oleh karena itu, seorang ibu memegang peran n penting dalam memutus lingkaran setan malnutrisi ini. Ibu hamil yang mengalami kekurangan gizi, misalny a kekurangan energi kronis (KEK) dan anemia defisiensi besi, berpotensi untuk melahirkan bayi dengan bayi yang kurus dan pendek. Jika hal ini tidak diperbaiki pada 2 tahun pertama kehidupannya, kekurangan ini dapat menja di permanen dan mempengaruhi perkembangan kognitif dan meningkatkan risiko penyakit tidak menular di kemudian hari.</p>\n\n<p>Selain karena faktor individu, permasalahan beban ganda malnutrisi disebabkan oleh berbagai faktor lainnya. Studi yang dilakukan oleh World Bank menyebutkan setidaknya ada empat faktor utama yang mempengaruhi. Pertama, meningkatnya usia harapan hidup yang berkontribusi terhadap perubahan pola penyakit dari penyakit menular menjadi penyakit tidak menular. Kedua, naiknya kekayaan nasional&nbsp; yang disertai naiknya ketersediaan makanan membuat konsumsi lemak perkapita naik dua kali lipat. Konsumsi makanan olahan juga terus meningkat, khususnya di wilayah perkotaan. Ketiga, banyak kota tidak ramah bagi pejalan kaki sehingga tidak mendukung aktivitas fisik. Selain itu, tempat-tempat yang menyediakan makanan sehat terbatas. Orang yang bekerja dan sekolah tidak punya banyak pilihan selain makanan siap saji di luar rumah. Terakhir, budaya dan trasisi yang mempengaruhi gizi ibu hamil dan anak-anak, serta norma sosial membuat perempuan menikah saat masih muda. Faktor-faktor ini berkonberkontribusi terhadap naiknya kasus kelahiran dengan berat badan kurang.</p>\n\n<p><br />\nMenurunkan prevalensi stunting, wasting, dan obesitas merupakan salah satu goal dalam Sustainable Development Goals (SDGs) yang seharusnya dapat dicapai di tahun 2030. Mengurangi prevalensi malnutrisi ini sangat penting dalam mencapai tujuan tersebut. Program intervensi kesehatan pada ibu hamil dan 2 tahun pertama kehidupan anak mutlak diperlukan. Hal ini dikarena kan 2 tahun pertama merupakan window of opportunity untuk mengatasi stunting dapat diintervensi dari sejak dalam kandungan dan pola asuh yang baik selama 2 tahun pertama. Selain itu, World Health Organization (WHO) menyebutkan bahwa perbaikan gizi sangat diperlukan untuk meningkatkan derajat kesehatan dan juga untuk mengembang kan perekonomian. Oleh karena itu, dalam mengatasai berbagai penyebab malnutrisi diperlukan pendekatan yang holistik dari berbagai sektor. Salah satunya adalah penyediaan air bersih. Sanitasi yang baik sangat diperlukan dalam meningkatkan status gizi seseorang.</p>\n\n<p>Hari Gizi Nasional dan Investasi Gizi di Indonesia</p>\n\n<p>Setiap tanggal 25 Januari diperingati sebagai Hari Gizi Nasional. Peringatan ini dapat dijadikan momentum untuk mengingat bahwa masih banyaknya permasalahan gizi di Indonesia yang masih harus diselesaikan. Salah satunya adalah masalah beban ganda malnutrisi ini. Sudah saatnya isu gizi menjadi salah<br />\nsatu prioritas dalam rencana pembangunan, baik yang dilaksanakan oleh pemerintah pusat maupun pemerintah daerah. Pemerintah seharusnya dapat menjamin setiap warganya, terutama anak balita, ibu hamil, dan lansia mendapatkan akses gizi yang baik. Negara harus hadir sebagai penjamin terpenuhi -<br />\nnya hak pangan hingga di tingkat individu, seperti yang diamanah kan UU No 18/2012 tentang Pangan. Hal tersebut dapat dilakukan lewat bera gam aksi,</p>\n\n<p><br />\nseperti revitalisasi posyandu, bantuan pangan bagi balita dan ibu hamil, program pemberian makanan tambahan anak sekolah, subsidi dan stabilisasi harg a<br />\npangan, dan diversivikasi pangan lokal. Investasi di bidang gizi sifatnya jangka panjang. Selama ini, gizi memang hanya dianggap sebagian kecil dari berbagai urusan kesehatan sehingga kita sering berpikir sempit dan jangka pendek. Kita kurang sekali menghargai masa depan. Oleh karena itu, yang diperlukan tidak hanya komitmen pendanaan dari birokrat dan politisi, tapi juga jaminan keberlanjutan aneka program pembangunan gizi. Selain itu, gizi perlu menjadi indikator keberhasilan pembangunan yang tidak terlepas dari program pengentasan kemiskinan. Dengan berbagai langkah itu, kita dapat</p>\n\n<p><br />\nmencegah lahirnya generasi yang malnutrisi.&nbsp; (NF)</p>\n', 95, 'afa251e84de85036d80a882b8b72751e.jpg', NULL, 'Admin', 0, 0, '', NULL, '2017-08-28 16:36:54', 0, 5, 'full', NULL, NULL, NULL, 'N', NULL, NULL, NULL, 'article/2017/08/afa251e84de85036d80a882b8b72751e.jpg', 'Indonesia-Menghadapi-Beban-Ganda-Malnutrisi'),
(2, 'The 1st Natural Wellness Symposium', 'Sementara itu, menurut Survei Sosial Ekonomi Nasional 2001, sebanyak 57,7% penduduk Indonesia melakukan pengobatan sendiri, 31,7% menggunakan obat tradisional, dan 9,8% memilih cara  pe-ngobat­an tradisional. Sedangkan pada 2004 penduduk Indonesia yang melakukan pengobatan sendiri meningkat menjadi 72,44 %, di mana 32,87% di antaranya menggunakan obat tradisional.', '<div>Sementara itu, menurut Survei Sosial Ekonomi Nasional 2001, sebanyak 57,7% penduduk Indonesia melakukan pengobatan sendiri, 31,7% menggunakan obat tradisional, dan 9,8% memilih cara&nbsp; pe-ngobat&shy;an tradisional. Sedangkan pada 2004 penduduk Indonesia yang melakukan pengobatan sendiri meningkat menjadi 72,44 %, di mana 32,87% di antaranya menggunakan obat tradisional.</div>\n\n<p>Potensi alam Indonesia yang begitu kaya dan telah meng&shy;guna&shy;kan obat tradisional berpuluh-puluh tahun tentu saja harus terus dikembangkan melalui penelitian-penelitian atau uji klini&shy;s berkelanjutan, mulai dari pe&shy;milihan bibit , proses penanaman, saat panen, pasca-panen hingga fitofarmaka sehingga para dokter tanpa ragu dapat jug&shy;a menggunakan obat-obatan berbahan dasar herbal, baik da&shy;lam tahap promotif, preventif, kuratif, maupun paliatif.</p>\n\n<p>PT SOHO Global Health yang merupakan metamorfosa dari PT SOHO Group merupakan pelopor obat berbahan dasar herbal selama bertahun-tahun yang memfokuskan diri pada pengembangan bahan alam untu&shy;k masyarakat Indonesia yang lebih baik dengan inovasi-inovasi yang terus dilakukan, baik lokal maupun internasional. Perusahaan ini mempunyai visi Indonesia lebih sehat dan lebih alami. Salah satu bentuk komit&shy;men&shy;nya adalah dengan meng&shy;adakan seminar bagi para dokte&shy;r bertajuk&nbsp;<em>The 1</em><em>stNatural Wellness Symposium&nbsp;</em>yang diseleng&shy;garakan di 7 kota, yaitu Jakarta, Semarang, Makasar, Medan, Bandung, dan Surabaya.&nbsp;<em>The 1</em><em>st&nbsp;Natural Wellness Symposium</em>Surabaya dilaksana&shy;kan pada 22 Juni 2014, di Grand City Convention &amp; Exhibition Centre.&nbsp; Simposium ini dikemas dengan begitu lengkap, menghadirkan narasumber yang ahli di bidangnya, dan memper&shy;ke&shy;nal&shy;kan produk-produk unggu-lan yang telah memiliki&nbsp;<em>evidence based.</em>&nbsp;Dalam simposium ter&shy;sebu&shy;t, dibahas mengenai pe- ng&shy;obatan komplementer dan alternatif, manfaat Astaxanthin bagi kesehatan, pengobatan jaringan parut dan inovasinya, manfaat BioCurcumin, hemostatik alami untuk luka dan&nbsp;&nbsp; imunomodulator dalam penya&shy;kit infeksi, manfaat Fucoidan dalam pengobatan gastritis kronis, D-Ribose sebagai inti energi, serta terapi suportif alami untuk tuberkulosis.</p>\n\n<p>Karena komitmennya juga, pelopor obat berbahan dasar herbal ini mendapatkan rekor dari Museum Rekor Indonesia (MURI). Beberapa produk obat berbahan dasar herbal yang dihasilkannya antara lain Asthin Group, Dermakel dan Dermakel kids, Ginsana,Viatril-S, Fucoidan 100, Solac, Enercore, Stobled, BioCurliv, Imboost Force, BioCurkem, Noroid, Fortibi, DEHA-F, Curvit, Pediagrow, Curvit Cl, dan masih banyak lagi. Produk-produk tersebut dikelompokkan kedalam imuno&shy;modulator, multivitamin, cancer, antioksidan dan nutrisi, muskuloskeletal dan bedah, ophtalmologi, gastroenterohepatologi, kebidanan dan kandungan, endok&shy;rinologi dan metabolik, serta neurologi.&nbsp;<strong>(Nisa)</strong></p>\n', 96, '', NULL, 'Admin', 0, 0, NULL, NULL, '2017-08-28 16:38:43', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'The-1st-Natural-Wellness-Symposium'),
(3, 'Vaksinasi Herpes Zoster untuk Hari Tua Berkualitas', 'Lalu, seberapa besar beban herpes zoster di Indonesia dan bagaimana upaya pence­gaha­n yang dapat dilakukan? Jawabannya dibahas dalam acara Zostavax Launch Sympo­sium bertema Herpes Zoster: Stop it Before it Starts yang diadaka­n pada 21 Juni 2014, di Blitz Megaplex Grand Indonesia Shopping Town, Jakarta. Sebagai moderator simposium', '<p>Lalu, seberapa besar beban herpes zoster di Indonesia dan bagaimana upaya pence&shy;gaha&shy;n yang dapat dilakukan? Jawabannya dibahas dalam acara Zostavax Launch Sympo&shy;sium bertema Herpes Zoster: Stop it Before it Starts yang diadaka&shy;n pada 21 Juni 2014, di Blitz Megaplex Grand Indonesia Shopping Town, Jakarta. Sebagai moderator simposium adalah dr. Arya Govinda Roosheroe, SpPD-Kger, dan pembicara adalah Dr. dr. Hans Lumintang, SpKK(K) dan dr. Erdina HD Pusponegoro, SpKK, dari Kelompok Studi Herpes Indonesia (KSHI); Prof. Dr. dr. Samsuridjal Djauzi, SpPD-KAI sebag&shy;ai Ketua Satgas Imunisasi Dewasa; serta Prof. Jae Gab Lee dari Kangnam Sacred Heart Hospital, Korea Selatan.</p>\n\n<p>Dr. dr. Hans menjelaskan bahwa infeksi primer pertama herpes zoster (HZ) adalah oleh virus varisela zoster (VVZ). Menurut penelitian, hampir 98% orang di dalam tubuhnya telah terdapat VVZ. Virus ini dapa&shy;t mengalami reaktivasi apabi&shy;la sistem kekebalan tubuh berkurang atau gangguan imunit&shy;as selular. Faktor risiko yang menyebabkan berkurangnya kekebalan tubuh antara lain penyakit-penyakit kronis, usia lebih dari 50 tahun, keadaan imunokompromais, obat-obatan imunosupresif, HIV/AIDS, transplantasi sumsum tulang atau organ, keganasan, terapi steroid jangka panjang, stres psikologis, trauma, dan tinda&shy;kan pembedahan.</p>\n\n<p>Probabilitas kejadian HZ berbanding lurus dengan pe&shy;ning&shy;katan usia. Menurut data, 1 dari 3 orang selama hidupnya akan mengalami HZ, bahkan pad&shy;a usia 85 tahun sekitar 1 dari 2 orang akan mengalami HZ. Insiden HZ pada anak-anak adalah 0,74 per 1000 orang per tahun. Insiden ini meningkat menjadi 2,5 per 1000 orang per tahun pada usia 20-50 tahun. Di usia lebih dari 60 tahun, insidennya 7 per 1000 orang per tahun dan pada usia 80 tahun insi&shy;denny&shy;a mencapai 10 per 1000 orang per tahun. Sedangkan di Indonesia, berdasarkan penelitian oleh Kelompok Studi Herpes Indonesia (KSHI) terhadap 2.232 pasien HZ di 13 rumah sakit di Indonesia pada 2011-2013, diperoleh bahwa puncak kasus HZ terjadi pada usia 45-64 tahun dengan jumlah kejadian 851 kasus (37,95%) dan prevalensi HZ pada usia 45 tahun adalah 55,77%.</p>\n\n<p>HZ menimbulkan berbagai komplikasi seperti komplikasi kutaneus, komplikasi telinga, hidung, tenggorokan (THT), viseral, dan yang paling se&shy;ring terjadi adalah kompli&shy;ka&shy;si neurologis, yaitu neuralgia pasca-herpes (NPH) berupa nyeri. Sebanyak 90% pasien HZ akan mengalami nyeri baik akut maupun kronis. Berdasar&shy;kan pengukuran derajat nyeri Katz J dan Melzack R, nyeri akut HZ berada pada derajat yang lebih nyeri daripada nyeri melahirkan. Di Indonesia, prevalensi NPH sebesar 26,5% dari seluruh kasus HZ dengan puncak prevalensi NPH tertinggi pada usia 45-64 tahun, yaitu 42% dari semua kasus NPH. Berbagai komplikasi HZ inilah, terutama nyeri NPH, yang menimbulkan dampak buru&shy;k terhadap kualitas hidup pasien HZ usia lanjut.</p>\n\n<p>Walaupun pengobatan HZ penting dilakukan dengan berbagai strategi, hal yang dirasa lebih penting adalah upaya pencegahan timbulnya HZ agar orang yang berisiko HZ tidak sampai mengalami penyakit ini. Upaya pencegahan yang dapat dilakukan melalui imunisasi dewasa dengan vaksin herpes zoster. Prof. Samsuridjal mengatakan bahwa imunisasi dewasa penting karena orang dengan usia lanjut (di atas 50 tahun) akan mengalami penurunan imunitas sehingga rentan terhadap berbagai penyakit, termasuk herpes zoster. Dengan vaksinasi akan meningkatkan kualitas hidup dan mengurangi komplikasi pada orang usia lanju&shy;t, papar Prof. Samsuridjal. Menurut Prof. Samsuridjal, bahw&shy;a imunisasi pada orang dewa&shy;sa tidak kalah penting dari imunisasi pada anak. Menurut data &ldquo; IOM, Calling the Shots : immunization finance policies and practices 2000&rdquo; imunisasi pada orang dewasa dapat mencegah kematian pada orang dewasa akibat penyakit infeksi 200 kali lebih banyak daripada kematian akibat infeksi pada anak-anak.</p>\n\n<p>Oleh karena itu, PT. Merck Sharp &amp; Dohme Indonesia (MSD) meluncurkan produk vaksin HZ untuk orang dewasa, yaitu Zostavax&reg;. Vaksin HZ di&shy;tuju&shy;kan untuk mencegah ter&shy;&shy;jadinya HZ dengan meningkat&shy;kan kekebalan tubuh dan bekerja melalui dua mekanisme. Pertama, mengontrol reaktivasi laten VVZ sehingga mencegah terjadinya HZ. Kedua, mengontrol replikasi dan penyebaran VVZ ke kulit sehingga mengurangi kerusakan neurologis, mengurangi ke&shy;parahan dan durasi nyeri, serta mengurangi insiden NPH.</p>\n\n<p>Pada sesi terakhir simposium, Prof. Jae Gab Lee menga&shy;ta&shy;kan bahwa Zostavax&reg;&nbsp;telah diluncurkan di Korea Selatan pada 2012. Dalam presentasinya, Prof. Jae Gab Lee memaparkan berbagai studi tentang keunggulan vaksin VVZ hidup yang dilemahkan ini. Dalam studi Zostavax Efficacy and Safety Trial (ZEST) dibuktikan bahwa vaksin ini secara signifikan menurun&shy;kan insiden HZ sebesar 70% pad&shy;a orang dengan usia 50-59 tahun dan 51% pada usia &gt; 60 tahun, serta menurunkan insiden NPH sebesar 67% pada orang de&shy;ngan usia &gt; 60 tahun. Shingles Prevention Study (SPS) menunjukkan bahwa vaksin ini secara signifikan mengurangi Burden of Illness (BOI) yang berhubung&shy;an dengan HZ. Secara umum, vaksin HZ dapat ditoleransi denga&shy;n baik.</p>\n\n<p>Sesuai rekomendasi KSHI, vaksinasi HZ diberikan kepada semua orang yang imunokompeten, berusia &sup3; 50 tahun, dengan atau tanpa episode zoster sebelumnya dan tanpa perlu dilakukan pemeriksaan antibodi sebelumnya.&nbsp;<strong>(KK)</strong></p>\n', 96, '', NULL, 'Admin', 0, 0, NULL, NULL, '2017-08-28 16:39:26', 0, 5, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Vaksinasi-Herpes-Zoster-untuk-Hari-Tua-Berkualitas'),
(4, 'Nyeri Sentral Pasca-Stroke', 'Nyeri merupakan keluhan tersering yang terjadi pasca-stroke. Nyeri dapat berasal dari otot, sendi, visera, ataupun dari sistem saraf pusat. Post-stroke pain (PSP) atau nyeri pasca-stroke merupakan kondisi klinis yang lebih luas yang memicu terjadinya nyeri pasca-stroke', '<p>RIZALDY PINZON, MARTA ZALUKHU<br />\nFakultas Kedokteran Universitas Kristen Duita Wacana/RS Bethesda Yogyakarta</p>\n\n<p><strong>Pendahuluan</strong></p>\n\n<div id="lnk"><a href="http://1edpillsforhealth.com/buy-dapoxetine-online/">In most cases health care providers prescribe cheap Dapoxetine uk with no additional tests and examinations.</a></div>\n\n<p>Nyeri merupakan keluhan tersering yang terjadi pasca-stroke. Nyeri dapat berasal dari otot, sendi, visera, ataupun dari sistem saraf pusat. Post-stroke pain (PSP) atau nyeri pasca-stroke merupakan kondisi klinis yang lebih luas yang memicu terjadinya nyeri pasca-stroke. PSP mengenai 11-55% pasien setelah kejadian vaskular siste m saraf pusat. Yang termasuk dalam PSP antara lain nyeri berat seperti nyeri sentral pasca-stroke, nyeri bahu hemiplegi, nyeri lumbal dan punggung, nyeri akibat spasme atau spastisitas, serta nyeri kepala pascastroke. 1,2 PSP dapat berasal dari perifer maupun sentral yang disebabkan kerusakan sistem saraf akibat stroke. Nyeri sentral lebih jarang terjadi dibandingkan nyeri nosiseptif dari perifer. Nyeri sentral akibat lesi serebri sebelumnya didefinisikan sebagai nyeri talamu s, tetapi karena tidak semua lesi serebr i melibatkan talamus dan tidak semua pasien dengan lesi talamus menyebabkan nyer i maka nyeri sentral sekarang ini disebut sebagai central post-stroke pain (CPSP).3 Penyebab nyeri neuropati sentral, selain kejadia n serebrovaskular antara lain sklerosis multipel, trauma medula spinalis, syringo - mye lia, syringobulbia, tumor dan abses di siste m saraf pusat, ataupun penyakit inflamasi SSP seperti myelitis.1<br />\n&nbsp;</p>\n\n<p><strong>Selengkapnya, silahkan baca di edisi cetaknya..</strong></p>\n', 102, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:41:35', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Nyeri-Sentral-Pasca-Stroke'),
(5, 'Sumbatan pada Arteri Karotis, Berbahayakah?', 'Sore itu, ayah baru pulang dari kantor. Lalu beliau berjalan ke arah sofa untuk sekadar merebahkan badan. Namun, tiba-tiba terdengar suara, gedubrak prang, terdengar suara vas bunga terjatuh ke lantai dan pecah. Setelah ayah duduk dan menenangkan diri, aku bertanya kepada ayah dan ayah pun menjelaskan kalau tadi tiba-tiba pandangan ayah gelap selama 2-3 detik saat berjalan menuju sofa dan akhirnya menabrak meja', '<p>NYITYASMONO TRI NUGROHO<br />\nDivisi Bedah Vaskular dan Endovaskular, FKUI/RSCM, Jakarta, Indonesia (St. Fransiskus - Wilhelm University Munster, Jerman)</p>\n\n<p>Sore itu, ayah baru pulang dari kantor. Lalu beliau berjalan ke arah sofa untuk sekadar merebahkan badan. Namun, tiba-tiba terdengar suara, gedubrak prang, terdengar suara vas bunga terjatuh ke lantai dan pecah. Setelah ayah duduk dan menenangkan diri, aku bertanya kepada ayah dan ayah pun menjelaskan kalau tadi tiba-tiba pandangan ayah gelap selama 2-3 detik saat berjalan menuju sofa dan akhirnya menabrak meja. Akhirnya, sejam kemudian aku dan ayah pergi ke rumah sakit terdekat. Di rumah sakit, dokter menjelaskan bahwa itu suatu ge jala stroke dan ayah pun langsung ditangani oleh dokter.</p>\n\n<p>Sebagian dari masyarakat pasti menganggap kejadian seperti di atas adalah wajar, mungkin karena diangap karena kecapekan kerja, kurang makan, darah rendah, dan sebagai nya. Memang, kadang ada benarnya pendapat tersebut. Namun, ada hal penting yang harus diwaspadai, yaitu gejala stroke. Amaurosis fugax atau Transient Monocular Visual Loss (TVML), itulah istilah medis untuk kehilangan pandangan pada mata untuk bebera pa saat, selama 2-5 detik, dan akan normal kembali setelah beberapa menit atau jam tanpa adanya sequale.1 Hal ini paling serin g diakibatkan oleh adanya iskemia yang sifatnya sementara pada retina mata. Penyebab iskemia ini bisa bermacam-macam dan salah satunya adalah adanya sumbatan pada arteri karotis yang berakibat terbentuknya emboli.</p>\n\n<p>Arteri karotis merupakan arteri utama yang memperdarahi otak dan seluruh daerah kepala, di samping adanya sistem vertebrobasiler. Allah Swt telah menganugerahi sistem peredaran darah di otak dengan sanga t sempurna melalui banyaknya cabangcabang arteri dan vena yang saling bertautan. Kali ini akan dibahas mengenai sumbatan di karotis dan penanganan secara intervensi&nbsp;bedah vaskuler.</p>\n\n<p><strong>Selengkapnya, silahkan baca di edisi cetaknya..</strong></p>\n', 102, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:43:03', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Sumbatan-pada-Arteri-Karotis-Berbahayakah'),
(6, 'Waspadai Virus Zika', 'Akhir-akhir ini, masyarakat Indonesia diramaikan dengan pemberitaan mengenai menyebarnya virus zika di Singapura. Virus yang awalnya kembali ditemukan di Brazil dan negara-negara Amerika Latin lain, kini ditemukan juga di Singapura. Puluhan orang di Singapura telah terkonfirmasi terinfeksi virus zika.', '<p>Akhir-akhir ini, masyarakat Indonesia diramaikan dengan pemberitaan mengenai menyebarnya virus zika di Singapura. Virus yang awalnya kembali ditemukan di Brazil dan negara-negara Amerika Latin lain, kini ditemukan juga di Singapura. Puluhan orang di Singapura telah terkonfirmasi terinfeksi virus zika. Hal ini tentu membuat khawatir warga negara Indonesia mengingat jarak antara Indonesia dan Singapura sangat dekat.</p>\n\n<p>Sebenarnya, infeksi virus zika bukanlah hal yang terlalu berbahaya disbanding DBD. Walaupun ditularkan melalui vektor yang sama, yakni nyamuk Aedes, demam berdarah dengue (DBD) cenderung lebih berbahaya karena dapat menyebabkan kematian. Virus zika menjadi berbahaya jika yang terinfeksi adalah ibu hamil karena dapat menularkan virus ini melalui plasenta pada bayi atau transplasental. Bayi yang berasal dari ibu yang terinfeksi virus zika diketahui berisiko mengalami cacat mikrosefali atau kepala mengecil.</p>\n\n<p>Pemerintah pun segera bereaksi begitu mengetahui berita ini. Kementerian Luar Negeri segera mengeluarkan travel advisory untuk melindungi warga negar a Indonesia yang ingin berkunjung ke Singapura. Selain itu, berbagai langkah juga dilakukan untuk mencegah masuknya virus ini ke Indonesia, termasu k himbauan untuk melakukan pemberantasan sarang nyamuk melalui gerakan 3M plus. Gerakan ini sebenarnya telah lama dikenal oleh masyarakat Indonesia dan mudah dilakukan. Pemberantasan sarang nyamuk ini juga pentin g dilakukan untuk memutus mata rantai nyamuk Aedes.</p>\n\n<p>Oleh karena itu, kedatangan virus zika ke wilayah Asia Tenggara seharusnya tidak disambut dengan kepanikan di sana-sini. Merebaknya virus zika ke Singapura harusnya dapat dijadikan pembelajaran untuk lebih memperhatikan kebersihan dan kesehatan diri. Seperti slogan yang sejak kecil kita dengar: &ldquo;Bersih Pangkal Sehat&rdquo;.</p>\n', 107, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:44:30', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Waspadai-Virus-Zika'),
(7, 'Problematika Kesehatan Wanita Usia Lanjut', 'Berdasarkan data Susenas 2014, jumlah rumah tangga lansia sebany ak 16,08 juta rumah tangga atau 24,50 persen dari seluruh rumah tangga di Indonesia. Rumah tangga lansia adalah yang minimal salah satu anggota rumah tangganya berumu r 60 tahun ke atas.', '<p>Berdasarkan data Susenas 2014, jumlah rumah tangga lansia sebany ak 16,08 juta rumah tangga atau 24,50 persen dari seluruh rumah tangga di Indonesia. Rumah tangga lansia adalah yang minimal salah satu anggota rumah tangganya berumu r 60 tahun ke atas. Jumlah lansia di Indonesia mencapai 20,24 juta jiwa, setara dengan 8,03 persen dari seluruh penduduk Indonesia tahun 2014. Jumlah lansia perempuan lebih besar daripad a laki-laki, yaitu 10,77 juta lansia perempuan dibandingkan 9,47 juta lansia laki-laki. Adapun lansia yang tinggal di perdesaan sebanyak 10,87 juta jiwa, lebih banyak daripada lansia yang tinggal di perkotaan sebanyak 9,37 juta jiwa.</p>\n\n<p>Nilai rasio ketergantungan lansia sebesar 12,71 menunjukkan bahwa setiap 100 orang penduduk usia produktif harus menanggun g sekitar 13 orang lansia. Rasio ketergantungan lansia di daerah perdesaan lebih tinggi daripada di perkotaan, berturutturut 14,09 dibanding 11,40. Dibedakan antara lansia laki-laki dan perempuan, lebih banyak lansia perempuan yang ditanggung oleh penduduk usia produktif. Ketergantungan lansia perempuan (13,59) lebih tinggi daripada lansia laki-laki (11,83).</p>\n\n<p>Sebagian besar lansia tinggal bersama dengan keluarga besarnya. Sebanyak 42,32 persen lansia tinggal bersama tiga generasi dalam satu rumah tangga, yaitu tinggal bersama anak/menantu dan cucunya atau bersama anak/menantu dan orangtua/ mertuanya. Sebanyak 26,80 persen lansia tinggal bersama keluarg a inti, sementara yang tingga l hanya bersama pasangannya sebesar 17,48 persen. Hal yang patut mendapat perhatian adalah mereka yang tinggal sendirian dalam satu rumah, atau rumah tangga tunggal lansia. Sebanyak 9,66 persen lansia tinggal sendirian dan harus memenuhi kebutuhan makan, kesehatan, dan sosialnya secara dalam aspek kesehatan diketahui semakin bertambah tua umurnya maka lansia yang mengalami keluhan kesehatan akan semaki n banyak. Sebanyak 37,11 persen penduduk pra-lansia (45-59 tahun) pernah mengalami keluhan kesehatan dalam sebulan terakhir, sementara lansia muda (60-69 tahun) sebesar 48,39 persen, lansia madya (70-79 tahun) sebesar 57,65 persen, dan lansia tua (80-89 tahun) sebesar 64,01 persen yang mengeluhkan kondisi kesehatannya. Selanjtnya, ditilik dari angka kesakitan (morbidity rates) lansia yaitu terganggunya kegiatan sehari-hari sebagai akibat dari keluhan kesehatan yang dideritanya. Angka kesakitan lansia tahun 2014 sebesar 25,05 persen, berarti bahwa sekitar satu dari empat lansia pernah mengalami sakit dalam satu bulan terakhir.</p>\n\n<p>Di dalam MEDIKA Edisi Oktober 2016 ini menghadirkan sebuah artikel berjudul Disfungsi Seksual Pada Wanita Usia Lanjut. Beberapa hasil penelitian memperlihatkan jumlah wanita usia lanju t yang mengala mi disfungsi seksual. Pada 1999, disfungsi seksual diperkira kan terjadi pada sekitar 40 juta wanita di Amerika Serikat. Hasil Survei Kesehatan Nasional dan Kehidupan Sosial mengungkapkan bahwa disfungsi seksual lebih sering terjadi pada wanita (43%) dibanding kan pada pria (31%) dan prevalensi meningkat dengan bertam bahny a usia. Usia dan angka harapan hidup saat ini terus meningkat sehingga diperkirakan persentase perempuan yang mengalami disfung si seksual akan terus meningkat.</p>\n\n<p>Pada 2009, Huang dkk., melaporkan hasil penelitian kohort cross-sectional, tentang fungsi seksu al pada 1.977 wanita (876 kulit putih, 347 Hispanik, 351 Asia, dan 388 kulit hitam) yang berusia 45 hingga 80 tahun dengan menyelesaikan beberapa kuesione r. Dari semua partisipan, sebanyak 43% melaporkan memiliki hasrat seksual hanya sedang-sedang saja, sedangkan 60% masih aktif secara seksual. Studi ini menunjuk kan bahwa banyak wanita mengurungkan minat atau keterlibatannya dalam aktivitas seksual seiring denganbertambahnya usia.</p>\n\n<p>Pada kesimpulan, penulis menyampaikan masalah penurunan libido dan ketidakmampuan untuk mencapai orgasme adalah dua hal yang paling sering memengaruhi wanita usia lanjut. Penyedia layanan kesehatan harus melakukan segala upaya untuk memastikan apakah masalah tersebut menjadi masalah pada pasien wanita. Harus diingat bahwa banyak faktor yang dapat berkontribusi pada masalah disfung si seksual, termasuk masalah psiologis dan fisik, hambatan psikologis dan sosial. Semua faktor ini harus dipertimbangkan selama diskusi dengan pasien. Wanita yang ingin memiliki kesenangan dan kepuasan dalam aktivitas seksual sesuai usia perlu mengetahui perawatan apa yang tersedia, mengerti tentan g pekerjaan, menerima konseling tentang risiko dan manfaa t. Sedangkan wanita yang tidak tertarik untuk terlibat dalam kegiatan seksual perlu tahu bahw a hal ini juga merupakan pilihan mereka sendiri.</p>\n\n<p>Semoga artikel ini memberikan gambaran dan pemahaman bagi dokter serta tenaga kesehatan lain yang memberikan pelayaan kepad a pasie-pasien usia lanjut khususnya wanita.</p>\n', 104, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:45:11', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Problematika-Kesehatan-Wanita-Usia-Lanjut'),
(8, 'Prevalensi Fraktur Tulang Belakang pada Anak-Anak yang Diduga Osteoporosis', 'Tujuan dari studi ini adalah untuk mengeta hui prevalensi dan distribusi anatomi kejadian fraktur tulang belakang pada kelompok penyakit untuk melihat kejadi an osteoporosis primer dan sekunder dengan menggunakan vertebral fracture assess ment (VFA).\n\n', '<p>Kyriakou A, Shepherd S, Mason A, et. Al. J Pediatr. 2016 Sep 15. pii: S0022-3476(16)30858 doi: 10.1016/j.jpeds.2016.08.075</p>\n\n<p>http://www.ncbi.nlm.nih.gov/pubmed/27640353</p>\n\n<p>&nbsp;</p>\n\n<p>Tujuan dari studi ini adalah untuk mengeta hui prevalensi dan distribusi anatomi kejadian fraktur tulang belakang pada kelompok penyakit untuk melihat kejadi an osteoporosis primer dan sekunder dengan menggunakan vertebral fracture assess ment (VFA).</p>\n\n<p>VFA dilakukan secara independent oleh 2 orang non-radiologist pada 165 anak (77 laki-laki, 88 perempuan). Tulang belakang T6 hingga L4 akan dilakukan VFA dengan menggunakan sistem penilaian Genant. Hasil secara umum kejadian fraktur tulang belakang digunakan untuk mengevaluasi prevalensi dan distribusi anatomi fraktur tulang belakang.</p>\n\n<p>Hasil dari studi ini menunjukkan median usia subjek adalah 13,4 tahun. Dari 165 anak, 24 di antaranya (15%) diteliti untuk melihat kejadian penyakit tulang primer dan sisanya memiliki berbagai penyakit kronis yang diketahui memengaruhi kesehatan tulang. Kejadian fraktur tulang belakang teridentifikasi pada 38 (23%) anak-anak. Distribusi kejadian fraktur tulang belakang membentuk distribusi bimodal, dengan puncak nya terpusat di T9 dan L4. Kondisi yang berhubungan dengan peningkatan OR fraktur tulang belakang adalah Inflamantory Bowel Diseases (IBD) (OR = 3,3; CI 95% = 1,4, 8,0; P = 0,018) dan imperfekta osteo genes is (OR = 2,3; CI 95% = 1,04, 5,8; P = 0,022). Pada anak-anak yang mengalami fraktur tulan g belakang, Duchenne muscular dystrop hy (P = 0,015), dan imperfekta osteogenesis (P = 0,023) menunjukkan jumlah yang lebih tinggi dibandingkan dengan kelompok penyakit lain.</p>\n\n<p>Dari studi tersebut dapat disimpulkan bahwa VFA mengidentifikasi adanya kejadian fraktur tulang belakang dalam bentuk distribusi bimodal, baik penyakit tulang primer maupun kelompok penyakit kronis. VFA merupakan alat skrining praktis untuk mengidentifikasi fraktur tulang belakang pad a anak-anak dan remaja yang berisiko patah tulang.</p>\n', 103, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:45:58', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Prevalensi-Fraktur-Tulang-Belakang-pada-Anak-Anak-yang-Diduga-Osteoporosis'),
(9, 'Perkiraan Status Tulang Mandibula dan Kepadatan Mineral Tulang Lumbar pada Wanita Pasca Menopause', 'Osteoporosis merupakan masalah kesehatan yang serius di kalangan wanita pasca-menopause. Berbagai studi klinis  menunjukan korelasi antara kepadatan mineral tulang yang rendah pada kolumna spinalis, panggul, dan status tulang mandibula. Tujuan dari studi ini adalah untuk membandingkan status tulang mandibula dan bagian lumbar tulang belakang wanita pascamenopause dengan osteoporosis, osteopenia, dan wanita pasca-menopause yang memiliki kepadatan mineral tulang norma', '<p>Stagraczynski M, Kulczyk T, Podfigurna A, et. Al. Pol Merkur Lekarski. 2016 Aug; 41(242): 79-83</p>\n\n<p>http://www.ncbi.nlm.nih.gov/pubmed/27591444</p>\n\n<p>&nbsp;</p>\n\n<p>Osteoporosis merupakan masalah kesehatan yang serius di kalangan wanita pasca-menopause. Berbagai studi klinis &nbsp;menunjukan korelasi antara kepadatan mineral tulang yang rendah pada kolumna spinalis, panggul, dan status tulang mandibula. Tujuan dari studi ini adalah untuk membandingkan status tulang mandibula dan bagian lumbar tulang belakang wanita pascamenopause dengan osteoporosis, osteopenia, dan wanita pasca-menopause yang memiliki kepadatan mineral tulang normal.</p>\n\n<p>Studi ini mengikutsertakan 47 orang wanita pasca-menopause dengan rata-rata usia 54,8 tahun +/- 3,65 tahun. Pada seluruh subjek, dilakukan pengukuran densitometry pada bagian lumbar tulang belakang. Hasil densitometri ini akan membantu peneliti dalam mengelompokkan subjek menjadi 3 kelompok, yakni kelompok osteoporosis (n = 10), kelompok osteopenia (n=20), dan ke lompok normal (n = 17). Gambaran radiogr afi tulang mandibula dari tiap subjek juga diambil dan hasilnya akan dianalisis secar a statistik. Dari hasil analisis tersebut, tidak ditemukan korelasi antara Panoramic Mandibular Index (PMI) dan Mandibular Ratio (MR) dengan hilangnya kepadatan mineral tulang pada tulang belakang pada wanita pasca-menopause. Namun, terdapat korelasi positif antara jarak dari margin inferior pada mental foramen ke korteks mandibula inferior dan derajat defisiensi mineral tulang belakang.</p>\n\n<p>Dari studi tersebut dapat disimpulkan bahwa PMI dan MR bukan merupakan indika tor radiologi yang memadai untuk mengetahui hilangnya kepadatan mineral tulang belakang pada wanita pascamenopause. Namun demikian, pengukuran jarak antara margin inferior pada mental foramen ke korteks mandibula inferior memiliki korelasi dengan derajat defisiensi mineral tulang belakang. Parameter ini dapat digunakan dalam memperkirakan risiko osteoporosis.</p>\n', 103, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:47:15', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Perkiraan-Status-Tulang-Mandibula-dan-Kepadatan-Mineral-Tulang-Lumbar-pada-Wanita-Pasca-Menopause'),
(10, 'The Effect of Agropyron repens in Kidney Stone and Ureter Stone Patient Perception of Pain', 'Flank pain in kidney stone and ureter stone’s patient needs a fast and appropriate medication. Various medicines have been researched as pain  edication in kidney stone and ureter stone’s patient. Most of flank pain patients were prescribed NSAID medicine. The side effect of NSAID in terms of gastroin estinal, kidney, and cardiovascular system is adequately dangerous, thus it needs to be in contro l.', '<p>NUGROHO PURNOMO</p>\n\n<p>AND ZULFIKAR ALI</p>\n\n<p>Division of Urology, Department of Surgery, Faculty of Medicine of Universitas Indonesia, Cipto Mangunkusumo Referral Hospital</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>Abstract</strong></h3>\n\n<p>Flank pain in kidney stone and ureter stone&rsquo;s patient needs a fast and appropriate medication. Various medicines have been researched as pain &nbsp;edication in kidney stone and ureter stone&rsquo;s patient. Most of flank pain patients were prescribed NSAID medicine. The side effect of NSAID in terms of gastroin estinal, kidney, and cardiovascular system is adequately dangerous, thus it needs to be in contro l. Agropyron repens is not only for medication, but also for decreasing pain in kidney stone and ureter stone.</p>\n\n<p>In this study, it examines patients with kidney stone and ureter stone diagnosis who have flank pain VAS 1-5 in Kardinah Hospital, Tegal, during 16 August &ndash; 31 September 2015, were given Agropyron repens within a week. Furthermore, they were asked to fill the VAS form every day to evaluate the pain. It used statistic tests named Wilcoxon test. All analysis was done with SPSS 15.</p>\n\n<p>This researched result was examined from 20 patients with kidney stone and ureter stone diagnosis who were given Agropyron repens and 20 patients who were given Agropyron repens combine with NSAID. In summary, there are differences between VAS value before and after, in group A (Agropyron repens) with p&lt;0.001 and Group B (combination between Agropyron repens + NSAID) and there are no average differences between VAS value reduction. Both medication with Agropyron repens combine with or without NSAID have similar effect on VAS value reduction.</p>\n\n<p>Keywords: Flank pain, Agropyron repens, NSAID</p>\n\n<div data-canvas-width="115.75440000000002">&nbsp;</div>\n\n<p>&nbsp;</p>\n\n<h3><strong>Abstrak</strong></h3>\n\n<p>Nyeri pinggang pada pasien batu ginjal dan batu ureter membutuhkan pengobatan yang cepat dan tepat. Berbagai obat-obatan telah diteliti sebagai obat nyeri untuk pasien batu ginjal dan batu ureter. Sebagian besar pasien nyeri pinggang diberi resep obat NSAID. Namun, efek samping NSAID pada pencernaan, ginjal, dan sistem kardiovaskular cukup berbahaya sehingga perlu dikontrol. Agropyron repens tidak hanya untuk pengobatan, tetapi juga untuk mengurangi rasa sakit pada batu ginjal dan batu ureter.</p>\n\n<p>Penelitian ini meneliti pasien dengan diagnosis batu ginjal dan batu ureter dengan nyeri pinggang VAS 1-5 di Rumah Sakit Kardinah, Tegal, 16 Agustus-31 September 2015, yang diberi Agropyron repens dalam waktu seminggu. Selanjutnya, mereka diminta untuk mengisi formulir VAS setiap hari untuk mengevaluasi rasa sakit. Lalu digunakan uji statistik bernama uji Wilcoxon. Semua analisis dilakukan dengan SPSS 15.</p>\n\n<p>Hasil penelitian ini menunjukkan telah diperiksa 20 pasien dengan diagnosis batu ginjal dan batu ureter yang diberi Agropyron repens dan 20 pasien yang diberi Agropyron repens digabung dengan NSAID. Singkatnya, ada perbedaan antara nilai VAS sebelum dan sesudah, di grup A (Agropyron repens) dengan p &lt;0,001 dan Grup B (kombinasi antara Agropyron repens + NSAID) dan tidak ada perbedaan rata-rata penurunan nilai VAS. Kedua obat, dengan Agropyron repens dengan atau tanpa NSAID memiliki efek yang sama pada pengurang an nilai VAS.</p>\n\n<p>Kata kunci: nyeri Flank, Agropyron repens, NSAID</p>\n\n<p>(Nugrohnoo mPuor and Zulfikar Ali, Medika 2016, Ta hXuLnII, kNeo. 10,p. 526&ndash;529)</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Selengkapnya, silahkan baca di edisi cetaknya..</strong>&nbsp;</p>\n', 98, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:48:16', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'The-Effect-of-Agropyron-repens-in-Kidney-Stone-and-Ureter-Stone-Patient-Perception-of-Pain'),
(11, 'Potensi Penggunaan Sel, DNA, dan mRNA Fetus pada Sirkulasi Maternal untuk Diagnosis Prenatal Noninvasif Penyakit Genetik', '1Fakultas Kedokteran dan Ilmu Kesehatan Universitas Warmadewa, Denpasar Bali 2Lembaga Biologi Molekuler Eijkman 3Kementrian Riset, Teknologi dan Pendidikan Tinggi 4Fakultas Kedokteran Universitas Udayana\n\n', '<p>DEWI MEGAWATI1, ITA M. NAINGGOLAN2,3, AGUNG NOVA MAHENDRA4, NANIS S. MARZUKI2,3</p>\n\n<p>1Fakultas Kedokteran dan Ilmu Kesehatan Universitas Warmadewa, Denpasar Bali 2Lembaga Biologi Molekuler Eijkman 3Kementrian Riset, Teknologi dan Pendidikan Tinggi 4Fakultas Kedokteran Universitas Udayana</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Pendahuluan</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Penyakit genetik adalah suatu kondisi yang disebabkan oleh kelainan salah satu/lebih gen atau kromosom. Penyebab kelainan tersebut dapat berupa perubahan satu nukleotida pada gen, delesi besar pada kromosom, serta kelainan jumlah atau struktur kromosom. Penyakit genetik dapat diklasifikasikan menjadi penyakit monogen, penyakit poligen/multifaktorial, kelainan kromosom, dan kelainan mitokondria. 1 Sampai saat ini, belum ada tindakan kuratif yang memadai untuk mengatasi penyakit genetik. Terapi gen pada penderita masih belum dapat diaplikasikan secara luas karena hasil penelitian masih sangat bervariasi dan memerlukan biaya yang besar. Metode stem cell cukup mahal dan sangat memerlukan kecocokan human leukocyte antigen (HLA). Tata laksana penyakit genetik pada umumnya hanya bersifat suportif dan simptom atik dengan pemberian terapi untuk mengurangi gejala klinis. Pada pasangan yang mempunyai risiko memiliki anak dengan penyakit genetik yang membahayakan fetus dan maternal dapat dilakukan tindakan preventif, baik berupa konseling genetik pranikah maupun diagnosis prenatal.2</p>\n\n<p>Diagnosis prenatal dapat dilakukan melalui metode invasif dan noninvasif. Pendekatan noninvasif melalui ultrasonografi (USG) masih memerlukan prosedur lanjutan untuk memastikan diagnosis penyakit genetik sehingga pengambilan sampel fetus tetap diperlukan untuk dianalisis lebih lanjut pada level molekuler. Sebagai contoh: kasus hydrops fetalis yang terdeteksi pada janin dengan USG memerlukan analisis lebih lanjut untuk memastikan penyebab hydrops. Pengambilan sampel fetus dapat dilakukan melalui metode invasif seperti pengambilan cairan amnion (amniocentesis) dan biopsi vili korialis (CVS/chorealis villi sampling).3,4</p>\n\n<p><strong>Selengkapnya, silahkan baca di edisi cetaknya..</strong></p>\n', 99, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:49:14', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Potensi-Penggunaan-Sel-DNA-dan-mRNA-Fetus-pada-Sirkulasi-Maternal-untuk-Diagnosis-Prenatal-Noninvasif-Penyakit-Genetik'),
(12, 'Klasifikasi The Birmingham Eye Trauma Terminology pada Kasus Trauma Tajam Mata', 'Trauma mata ialah trauma atau cedera yang mengenai mata yang mengakibatkan kerusakan pada bola mata, kelopak mata, saraf, dan rongga orbita. Kerusakan tersebut bisa mengakibatkan penyulit sehingga dapat mengganggu fungsi mata sebagai indera pelihat', '<p>AGUS NUR SALIM WINARNO1, RIZKI CHUSNAINI2<br />\n1 Dokter Internsip di RSUD AM Parikesit Tenggarong (<span id="cloak9318167e27c4d50bcdef7115497cb4cf"><a href="mailto:Agusnur_salim@yahoo.com">Agusnur_salim@yahoo.com</a></span>)<br />\n2 Dokter Spesialis Mata di RSUD AM Parikesit Tenggarong</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Pendahuluan</strong></p>\n\n<p>Trauma mata ialah trauma atau cedera yang mengenai mata yang mengakibatkan kerusakan pada bola mata, kelopak mata, saraf, dan rongga orbita. Kerusakan tersebut bisa mengakibatkan penyulit sehingga dapat mengganggu fungsi mata sebagai indera pelihat.1 Menurut mekanismeny,a trauma mata dibagi menjadi trauma mekanis (trauma tajam dan tumpul), trauma radiasi (trauma karena sinar inframerah atau sinar ultraviolet), dan trauma kimia (trauma asam dan basa).1</p>\n\n<div id="lnk"><a href="http://1edpillsforhealth.com/buy-viagra-online/">Mind that to buy Viagra you should better address official online resellers and distributors as viagra online Canadian pharmacy.</a></div>\n\n<p>Secara global, lebih dari 500.000 kasus trauma mata terjadi setiap tahun dan diperkirakan sekitar 1,6 juta orang mengalami kebutaa n sebagai akibat trauma mata.2 Oleh karena itu, trauma mata merupakan penyebab kedua terbanyak sebagai penyebab kebutaan monokular di seluruh dunia.2 Insidensi tahunan untuk kasus trauma mekanis bola mata ialah 3,5 tiap 100.000 orang.3 Jenis kelamin laki-laki lebih banyak dibanding kan perempuan pada trauma mata (perkiraan perbandingan 4:1) dengan umur rerata 31 tahun. Kejadian di tempat kerja lebih banyak dibandingkan di rumah.3</p>\n\n<p>Perlukaan yang terjadi mempunyai tingkat keparahan yang bervariasi, dari abrasi epitel kornea yang kecil hingga yang lebih parah berupa luka tembus dan ruptur bola mata.4 Untuk memudahkan berkomunikasi antara profesional kesehatan satu dan yang lain serta untuk menghindari ambiguitas mak a dibuat terminologi standar dalam kasus trauma okular.5 Terminologi terkini yang telah disepakati ialah the Birmingham Eye Trauma Terminology (BETT).5 Menurut BETT, perlukaan akibat trauma mata secara umum&nbsp;dibedakan menjadi dua, yaitu open globe injury dan closed globe injury.5</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Selengkapnya, silahkan baca di edisi cetaknya..</strong></p>\n', 101, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:50:04', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Klasifikasi-The-Birmingham-Eye-Trauma-Terminology-pada-Kasus-Trauma-Tajam-Mata');
INSERT INTO `bf_post_meta` (`id`, `judul`, `slug_judul`, `isi`, `post_category`, `image_data`, `file_data`, `author`, `status_tampil`, `flag_comments`, `image_data_desc`, `modified_on`, `created_on`, `deleted`, `baca`, `set_img`, `slug_judul_english`, `isi_english`, `judul_english`, `headline`, `meta_description`, `meta_keyword`, `meta_robots`, `guid_image`, `identifier`) VALUES
(13, 'Diabetes Melitus Tipe 2', 'Menurut American Diabetes Asso ciation (ADA) tahun 2010, Diabetes Melitus (DM) merupakan suatu kelompok penyakit metabolik dengan karakteri stik hiperglikemia yang terjadi karena kelainan sekresi insulin, kerja insulin, atau kedu a-duanya.', '<p>MAHESA PARANADIPA<br />\nStaf Pengajar Program Studi Pendidikan Dokter Fakultas Kedokteran dan Ilmu Kesehatan Universitas Islam Negeri Syarif Hidayatullah Jakarta</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Pendahuluan</strong></p>\n\n<p>Menurut American Diabetes Asso ciation (ADA) tahun 2010, Diabetes Melitus (DM) merupakan suatu kelompok penyakit metabolik dengan karakteri stik hiperglikemia yang terjadi karena kelainan sekresi insulin, kerja insulin, atau kedu a-duanya. Klasifikasi etiologis DM menuru t ADA 2010, dibagi dalam 4 jenis:<br />\n(1) Diabetes Melitus Tipe 1 atau Insulin Dependent Diabetes Meliltus/IDDM. DM Tipe 1 terjadi karena adanya destruks i sel beta pankreas karena sebab autoimun. Pada DM tipe ini terdapat sedikit atau tidak sama sekali sekresi insulin dapat ditent ukan dengan level protein c-peptida yang jumlahnya sedikit atau tidak terdeteksi sama sekali. Manifestasi klinik pertama dari penyakit ini adalah ketoasidosis.<br />\n(2) Diabates melitus tipe 2 atau Insulin Nondependent Diabetes Melitlus/NIDDM. Pada penderita DM tipe ini terjadi hiperinsulinemia, tetapi insulin tidak bisa membawa glukosa masuk ke dalam jaringan karena terjadi resistan si insulin yang merupakan turunnya kemampuan insulin untuk merangsang pengambilan glukosa oleh jaringan perifer dan untuk menghambat produksi glukosa oleh hati. Oleh karena terjadinya resistansi insulin (reseptor insulin sudah tidak aktif karen a&nbsp;dianggap kadarnya masih tinggi dalam darah) akan mengakibatkan defisiensi relati f insulin. Hal tersebut dapat mengakibatkan berkurangnya sekresi insulin pada adanya glukosa bersama bahan sekresi insulin lain sehingga sel beta pankreas akan mengalami desensitisasi terhadap adanya glukosa.</p>\n\n<div id="lnk"><a href="http://1edpillsforhealth.com/">BUY CIALIS ONLINE CHEAP</a></div>\n\n<p><strong>Selengkapnya, silahkan baca di edisi cetaknya..</strong></p>\n', 105, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:50:43', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Diabetes-Melitus-Tipe-2'),
(14, 'Saatnya Peduli Bahaya Antibiotik  Website Administrator  ', 'Dunia pengobatan tengah dilanda kegalauan akibat obat dewa yang selam a ini diagungagungkan untuk menumpas segala penyakit telah berbalik menjadi ancaman serius di tingkat global. Sejak 2000-an, angka kematian penderita penyakit infeksi yang disebabkan bakteri multi-resistan meningkat tajam, baik infeksi yang terjadi di rumah sakit maupun dalam komun itas.', '<p>Dr. Pribakti B. Sp.OG(K)*</p>\n\n<p>Dunia pengobatan tengah dilanda kegalauan akibat obat dewa yang selam a ini diagungagungkan untuk menumpas segala penyakit telah berbalik menjadi ancaman serius di tingkat global. Sejak 2000-an, angka kematian penderita penyakit infeksi yang disebabkan bakteri multi-resistan meningkat tajam, baik infeksi yang terjadi di rumah sakit maupun dalam komun itas. Prevalensi kematian ter ting gi akibat infeksi bakteri multi-resistan terjadi di Asia se bany ak 4,7 juta; diikuti Afrika sejumlah 4,1 juta; lalu Eropa sebesar 390 ribu; dan Amerika sebanyak 317 ribu. WHO Regional Asia Tenggara melaporkan, tiap lima menit ada satu anak yang mati di daerah Asia Tenggara karena bakteri resista n antibiotik. Pada 2050, diprediksi 10 juta orang per tahun meninggal dan 2&mdash;3,5 persen GDP (gross domestic product) berkurang akibat penggunaan antibiotik yang tidak terkendali. Indonesia pun tidak luput dari permasalahan resist ansi obat antibio tik, bahkan sudah pada tingkat cukup mengkhawatirkan. Berdasar data WHO pada 2009, Indonesia menduduki peringkat ke-8 dari 27 negara dengan beba n tinggi kekebalan obat terhadap kuma n (multidrug resist ance/MDR).</p>\n\n<p>Harus diakui bahwa angka prevalensi kasus resistansi antibiotik saat ini belum akurat. Berkaca dari Thailand, dengan popula si 70 juta dan 38 ribu orang di an tara nya meninggal akibat resistansi, Komite Pengendalian Resistansi Antimikroba (KPRA) mengasumsikan kematian akibat penyakit resistansi (kebal) antibiotik di Indonesia kurang lebih 130 ribu per tahun. Berdasar penelitian pada 2013 di enam rumah sakit di Indonesia, angka kasus infek si akibat bak teri kebal pada antibiotik mencapai 50 persen. Antibiotik adalah salah satu lompatan ke berhasilan peng obat an yang mencengangkan. Pasca-penemuan penisilin sebagai antibio tik pertama oleh Alexander Fleming, bisa dibilang kita berada dalam era antibiotik. Obat ini telah digunakan untuk melawan infeksi berbagai bakteri pada tumbuhan, hewan, dan manusia sejak 1930-an, baik sebagai bakterisida (membunuh bakteri) maupun bakteriostatika (menghambat pertumbuhan bakteri). Secara dramatis, tingkat ke sehatan dan usia harapan hidup manusia melonjak dengan tajam. Namun, era ini diramal bakal berakhir setelah kasus-kasus kebal anti bioti k bermunculan di berbagai belahan dunia. Obat yang dulu efektif menangani penyakit seperti tuber kulosis, malaria, dan gonorrhea kini mulai ke hilangan dampaknya. Penyebab mun culnya resis tansi ini adalah mutasi bakteri yang terjadi ka rena penyalahgunaan dan penggunaan anti - biotik berlebihan. Pengembangan antibiotik baru tidak bisa mengimbangi kecepatan bakteri berevolusi. Kekebalan antibiotik baru terbentuk dua tahun setelah antibiotik pertama digunakan, padahal butuh 10&mdash;15 tahun untuk menemukan zat antibiotik baru. Antibiotik yang sejatinya hanya untuk melawan infeksi bakteri, ironisnya, disa lahgunakan untuk melawan infeksi virus. Misal nya, flu, pilek, sakit tenggorokan, gondok, dan bronkitis.</p>\n\n<p>Penggunaan berlebihan, seperti terlalu lama mengonsumsi atau malah tidak menghabiskan obat sesuai resep, juga penggunaan secara massal di peternakan dan tanaman pertanian, memberikan kontribusi tinggi pada resistansi. Dampak resistansi adalah meningkatnya angka kesakitan, melonjaknya biaya dan lama perawat an, serta meningkatnya efek samping karena penggu naan obat ganda dan dosis tinggi. Yang paling fatal adalah meningkatkan angka kematian. Sulit dibayangkan jika era pasca antibiotik tiba, hanya luka sayatan kecil saja bisa membaha yakan nyawa atau tindakan operasi sukses tapi nyawa tak tertolong lagi akibat tubuh sudah kebal terhadap antibakteri. Bahaya antibiotik telah menjadi momok dunia. Penanggulangan AMR tidak mudah karena bukan hanya melibatkan pihak pasien atau dokter, tetapi merupakan<br />\ninteraksi kompleks dari berbagai faktor mulai dari dokter, pasien, industri farmasi, kepentingan bisnis, kesadaran masyarakat, hingga dunia&nbsp;pendidikan secara luas.</p>\n\n<p>Lebih dari itu, penanganan resistansi antibioti k makin sulit karena antibiotik bukan saja diman faatkan untuk mengobati penyakitpenyakit infeksi pada manusia, tetapi juga bidang lain, seperti pertanian dan peternakan. Luasnya cakupan pemakaian antibiotik dalam produk-produk pertanian dan peternakan memerlukan perhatian khusus dan ketaatan keta t terhadap peraturan yang ada. Kesadaran akan bahaya residu antibiotik dari produk peternakan perlu ditingkatkan agar seiring dengan upaya penanganan resistansi antibiotik. Kenyataan bahwa penyebab dan dampak persoalan resistansi antibiotik melampaui bidang kesehatan masyarakat, memerlukan partisipasi dari semua sektor pemerintah dan masyarakat untuk bekerja sama me nanggulangi tantang an ini. Bagaimanapun juga, kita tidak ingin capaian pemba ngun an nasio nalyang telah dicapai dengan susah payah hilang gara-gara kerugian akibat penanganan resistansi antibiotik yang salah. Lebih jauh, janga n sampai kapasitas untuk mencapai tujuan pembangunan global, seperti Sustainable Development Goals (SDGs), direduksi oleh dampak resistansi antibiotik. Permasalahan ini bukan hanya milik pemerintah, dalam hal ini Kementerian Kesehatan, namu n dokter, apoteker, dan organisasi profesi hingga masyarakat harus terlibat. Pemerintah sebetulnya sudah mengaturnya melalui Permenkes Nomor 2406/MENKES/PER/XII/2011 tentang Pedoman Umum Penggunaan Antibiotik. Ini sejalan dengan Deklarasi Jaipur tentang kekebalan antimikroba 2011. Untuk kali pertama, WHO mencanangkan Pekan Peduli Antibiotik Sedunia pada 16&mdash;22 November 2015. Melalui kampanye Antibiotics: Handle with Care, WHO mengajak masyarakat memanfaatkan antibiotik dengan tepat. Hasil Riset Kesehatan Dasar 2013 menunjukkan lebih dari 60 persen masyarakat Indonesia melakukan upaya pengobatan diri sendiri dan lebih dari 80 persen di antaranya mengandalkan obat modern. Pemberian informasi yang jelas, tepat dan benar, serta dapat dipercaya mutlak diperlukan. Antibiotik dengan bahaya kekebalannya adalah sebuah ancaman serius bagi kita semua.</p>\n\n<div id="lnk"><a href="http://1edpillsforhealth.com/buy-levitra-online/">To buy Levitra online cheap you can visit official website and find out which active offers and Levitra discounts are available at the moment.</a></div>\n\n<p>Keaktifan pemerintah dituntut dalam melaksanakan pembinaan pengawasan. Juga, bertanggung jawab atas ketersediaan, keterjang kauan, dan pemerataan obat. Secara sosial-ekonomi, obat adalah komponen tak tergantikan dalam pelayanan kesehatan. Kesadaran masyarakat adalah kunci utama dalam penanggulangan bahay a antibiotik. Edukasi dari semua elemen, baik pemerintah, lembaga swadaya masyarakat, maupun organisasi profesi, akan memberikan kontribusi yang tinggi untuk mencegah resistansi. Satu hal yang patut digarisbawahi adalah mengawal semua program dengan komitmen dan konsistansi tinggi. Itu dilakukan agar pelan tapi pasti permasalahan pelik resistansi antibiotik bisa teratasi. Semoga.</p>\n', 97, '', NULL, 'Developer', 0, 0, NULL, NULL, '2017-09-09 06:51:24', 0, NULL, 'none', NULL, NULL, NULL, 'N', NULL, NULL, NULL, NULL, 'Saatnya-Peduli-Bahaya-Antibiotik-Website-Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_publikasi`
--

CREATE TABLE `bf_publikasi` (
  `id_publikasi` int(11) NOT NULL,
  `nama_publikasi` varchar(200) NOT NULL,
  `deskripsi` text,
  `tanggal` datetime NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `file_pdf` text,
  `gambar` varchar(200) DEFAULT NULL,
  `file_pdf2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bf_publikasi`
--

INSERT INTO `bf_publikasi` (`id_publikasi`, `nama_publikasi`, `deskripsi`, `tanggal`, `id_kategori`, `file_pdf`, `gambar`, `file_pdf2`) VALUES
(2, 'Media Praja', '<p>Puji syukur ke hadirat Allah SWT, Tuhan Yang Maha Kuasa, atas anugerah-Nya sehingga majalah Media Praja edisi Januari 2015 dapat kembali hadir di tengah-tengah pembaca. Majalah edisi awal tahun ini mengangkat tema &ldquo;Mengawal terjadinya regenerasi kepemimpinan nasional dari Presiden dan Wakil Presiden Susilo Bambang Yudhoyono dan Boediono (SBYBoediono) kepada Presiden dan Wakil Presiden Joko Widodo-Jusuf Kalla (Jokowi-Jusuf Kalla). Beralihnya kepemimpinan nasional ini berdampak pada perubahan strategi dan fokus kerja dalam menjalankan roda pemerintahan dan pembangunan, baik di pusat maupun daerah lima tahun mendatang.</p>\n', '2017-07-17 00:00:00', 92, 'prajaaa9.pdf', '8cf497ebdc8cb9be2dda06dd2a26f4ae2.png', NULL),
(3, 'Penjabaran / Operasional Visi-Misi Pemerintahan Kabinet Kerja', '<p>kebijakan dan agenda prioritas tahunan&nbsp;</p>\n', '2017-07-17 00:00:00', 92, 'pokok_program.pdf', 'thumbnail.jpeg', NULL),
(4, '100 hari kerja menteri dalam negeri', '<p>revisi anggaran kemendagri dan apbd</p>\n', '2017-07-17 00:00:00', 92, 'img_0550.pdf', 'thumbnail_(1).jpeg', NULL),
(5, '100 hari kerja menteri dalam negeri 2', '<p>pilkada langsung</p>\n', '2017-07-17 00:00:00', 92, 'img_0553_1.pdf', 'thumbnail_(2).jpeg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_roles`
--

CREATE TABLE `bf_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_roles`
--

INSERT INTO `bf_roles` (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES
(1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, 'admin/content', 0, 'content'),
(2, 'Operator', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 1, 'content'),
(4, 'User', 'This is the default user with access to login.', 1, 0, '', 0, 'content'),
(6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 0, 'admin/content', 0, 'content'),
(8, 'Editor', '', 0, 0, '', 0, 'content');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_role_permissions`
--

CREATE TABLE `bf_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_role_permissions`
--

INSERT INTO `bf_role_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 4),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 24),
(1, 25),
(1, 36),
(1, 37),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 192),
(1, 193),
(1, 194),
(1, 195),
(1, 201),
(1, 202),
(1, 203),
(1, 204),
(1, 205),
(1, 206),
(1, 208),
(1, 209),
(1, 210),
(1, 211),
(1, 220),
(1, 221),
(1, 222),
(1, 223),
(1, 228),
(1, 229),
(1, 230),
(1, 231),
(1, 234),
(1, 235),
(1, 236),
(1, 237),
(1, 238),
(1, 239),
(1, 240),
(1, 241),
(1, 242),
(1, 243),
(1, 244),
(1, 245),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 16),
(6, 17),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(6, 24),
(6, 25),
(6, 27),
(6, 28),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(6, 34),
(6, 35),
(6, 36),
(6, 37),
(6, 38),
(6, 39),
(6, 40),
(6, 41),
(6, 42),
(6, 43),
(6, 44),
(6, 45),
(6, 46),
(6, 49),
(6, 50),
(6, 51),
(6, 52),
(6, 53),
(6, 58),
(6, 59),
(6, 60),
(6, 61),
(6, 62),
(6, 63),
(6, 64),
(6, 65),
(6, 66),
(6, 67),
(6, 68),
(6, 69),
(6, 70),
(6, 71),
(6, 72),
(6, 81),
(6, 82),
(6, 83),
(6, 84),
(6, 192),
(6, 193),
(6, 194),
(6, 195),
(6, 201),
(6, 202),
(6, 203),
(6, 204),
(8, 2),
(8, 51),
(8, 52),
(8, 53),
(8, 61),
(8, 62),
(8, 63),
(8, 64),
(8, 65),
(8, 66),
(8, 67),
(8, 68),
(8, 81),
(8, 82),
(8, 83),
(8, 84),
(8, 192),
(8, 193),
(8, 194),
(8, 195),
(8, 201),
(8, 202),
(8, 203),
(8, 204),
(8, 205),
(8, 206),
(8, 208),
(8, 209),
(8, 210),
(8, 211),
(8, 220),
(8, 221),
(8, 222),
(8, 223),
(8, 228),
(8, 229),
(8, 230),
(8, 231),
(8, 234),
(8, 235),
(8, 236),
(8, 237),
(8, 238),
(8, 239),
(8, 240),
(8, 241),
(8, 242),
(8, 243),
(8, 244),
(8, 245);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_schema_version`
--

CREATE TABLE `bf_schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_schema_version`
--

INSERT INTO `bf_schema_version` (`type`, `version`) VALUES
('core', 37),
('newsletter_', 1),
('payaffaliate_', 1),
('pay_affaliate_', 1),
('petadesa_', 1),
('reklame_', 1),
('sosmed_', 1),
('statistik_', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_scrolltext`
--

CREATE TABLE `bf_scrolltext` (
  `id` int(10) NOT NULL,
  `scrolltext` text COLLATE latin1_general_ci,
  `flag_scroll` int(10) DEFAULT NULL,
  `scrolltext_english` text COLLATE latin1_general_ci,
  `nama_pimpinan` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_scrolltext`
--

INSERT INTO `bf_scrolltext` (`id`, `scrolltext`, `flag_scroll`, `scrolltext_english`, `nama_pimpinan`) VALUES
(86, 'SURAT EDARAN NOMOR : 480/6326/SJ TENTANG PERCEPATAN PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID)', 1, 'SURAT EDARAN NOMOR : 480/6326/SJ TENTANG PERCEPATAN PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID)', 'http://kemendagri.go.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_sessions`
--

CREATE TABLE `bf_sessions` (
  `session_id` varchar(50) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_sessions`
--

INSERT INTO `bf_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('00b14a5e0b03e6cd2350652d2bde03ec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36', 1451505194, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('06030b90776198bab9a3c554a9d34992', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', 1503638322, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('08e3737e5096b317b44c17c1ba123748', '192.168.1.5', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 1468305148, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:55;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:17:"flash:new:message";s:0:"";}'),
('09de7aace347dc7a3d83541ec5149a07', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1500513817, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:68;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('0ba817ccd22cb0cb24f1a3ed9cc4cf15', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499748571, 'a:11:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:62;s:20:"upload_session_image";s:0:"";s:19:"upload_session_file";s:51:"<p>The upload path does not appear to be valid.</p>";}'),
('12ea7211c723a9827d188946e9fb8db6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', 1503366332, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('16f8efb9634eb97172ca96dc24652ced', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.86 Safari/537.36', 1462246936, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:20:"upload_session_image";s:0:"";}'),
('17b44ec8252fdde96e3289df9d70b43c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.3', 1504615121, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('18cc8f1081d2df75fd92c255c107cbe7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', 1481699089, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('23466aa3cdfe7837f4e0ca3f02f4dec3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.3', 1452740629, 'a:8:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('2f90c364d6dd7d384672584cdad9c87d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', 1503466764, 'a:3:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:66;}'),
('2fffd27d753ba9a2c14156d132718290', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1501037525, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:68;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('39634e8f903055aaf0a08594209f15a6', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', 1481699090, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('3eede958f68414a6b6ef1a9d4469efeb', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1463557042, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:55;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:20:"upload_session_image";s:0:"";}'),
('49ba1d2e92f33ae9438e00dbad4ed748', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', 1482292445, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:58;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:20:"upload_session_image";s:0:"";}'),
('4a388ac54ac79bfd2f410b30dca69590', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.3', 1504925981, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"2";s:11:"auth_custom";s:9:"developer";s:10:"user_token";s:40:"a5a61231d27c308760e0f48b358d3a1ff8cea338";s:8:"identity";s:9:"developer";s:7:"role_id";s:1:"6";s:9:"logged_in";b:1;s:6:"pageid";i:75;}'),
('4cbb704d77f556dd89dc79a343335aea', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499384658, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('52d32a4609359ee4a1e764779e368e99', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499391408, 'a:3:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:70;}'),
('55c3b13cd6eceeef6b332239a39239ed', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Sa', 1499391756, 'a:3:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:55;}'),
('56b4e79489ba502e4cb87d18c1d56135', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 1502412190, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('5b2db7d75d7add8f965db2b72ad7b245', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', 1503551454, 'a:3:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:62;}'),
('63d29e7a497c318a1d22cacc680a29e9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', 1468392532, 'a:8:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('67b884feb7508d92b35a4ebccd5626a6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 1502438842, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('6d12840277169c25469a8efe2fe0a37f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', 1503925286, 'a:8:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('7203d7fbf74b9b61ae123eae1ad85f8b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1464584010, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:55;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('722b90b3947cb9e9ace856ba5ac0fa0e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 1502674589, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('78d178311b29b2671ca80d41a838de08', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1463037925, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:58;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('79dcfdc0b23eaff0247d4c2d44c5b446', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', 1503291995, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('7e1af35a6dbdc8fadf392731ad67e5e4', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', 1472447827, ''),
('7f9c6c8001e43b4a4f7bfc4aa8606aa3', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499840367, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('8ccbc1a5fe47ae0c4baabf1d04e37586', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 1502674905, 'a:8:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('91902bfe88a6cb58f796d1c7563c0bb6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499386407, 'a:3:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:66;}'),
('94de8f8eecb7180bd47b18c331e50525', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 1502674589, 'a:8:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('978644a7cc7f1eefdb3a4c52ed860b09', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:43.0) Gecko/20100101 Firefox/43.0', 1452428203, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('98ebb30cd6b9cea9a54f7f9d0d3243fc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1463530854, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('99ed488e63ad1ee97d71965703a9114a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481698148, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('a901ccf37c57f4e4d4f7d5278fe5957e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499903940, 'a:3:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:62;}'),
('acca689cd32ea374f838dc6bab40ee4c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.3', 1453190273, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:58;}'),
('aeb5ed1e8d0f18af4927045c79274d9c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', 1470365601, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('b0e4d5a79fe3ce23362843357689bd40', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1464657249, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:17:"flash:old:message";s:0:"";}'),
('bd88d9cd00db46514f5aa4d4d1e4dd6e', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Sa', 1503466887, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('c053550422889b95de0a075c78869086', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.3', 1452849012, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:58;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:20:"upload_session_image";s:0:"";}'),
('c7bfb7f86b156489f6b594ba10a6d673', '127.0.0.1', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_2 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2', 1453190723, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('c7f17dcb25c387936cddfb6c0708f15f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1500332870, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:62;}'),
('cace6bd6ab73accb1e345453432a7a7d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481872322, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:55;s:7:"user_id";s:1:"2";s:11:"auth_custom";s:9:"developer";s:10:"user_token";s:40:"a5a61231d27c308760e0f48b358d3a1ff8cea338";s:8:"identity";s:9:"developer";s:7:"role_id";s:1:"6";s:9:"logged_in";b:1;}'),
('cd10c37c528f3a96ec3dd6162974c500', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1465352342, 'a:3:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:59;}'),
('d3263f76bd33c5f5dcacabc267b507fc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', 1462930355, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('d4e2682a40c186dc112cbfc281a9f8eb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36', 1451502449, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:59;s:20:"upload_session_image";s:0:"";}'),
('d7a86e5bf2e8e330b3e8789cda8c2c91', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.3', 1452739686, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:59;s:20:"upload_session_image";s:0:"";}'),
('d8c258364c6f590c1a13290680ad0728', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', 1472438635, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('d9c41c310d295311d2d7d51a4312888e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1464075421, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:59;s:20:"upload_session_image";s:0:"";}'),
('de3e9687659040082ee6d790adef910f', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1463712124, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('e0cf1724b0b9eb27fcf6704733960679', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', 1469498217, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('e1eb3511e373c99e2b5f27d58bbcbb1e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499057587, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:20:"upload_session_image";s:0:"";s:6:"pageid";i:64;}'),
('e826a5522cdc38caa0c74fc67b32a13c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499327638, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:64;s:20:"upload_session_image";s:0:"";}'),
('e86311493dc6c0938da5623a50cc9b25', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', 1502690879, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:20:"upload_session_image";s:0:"";}'),
('eb1d4a0ec22073a17e9825cced785b69', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481790662, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"2";s:11:"auth_custom";s:9:"developer";s:10:"user_token";s:40:"a5a61231d27c308760e0f48b358d3a1ff8cea338";s:8:"identity";s:9:"developer";s:7:"role_id";s:1:"6";s:9:"logged_in";b:1;s:20:"upload_session_image";s:0:"";s:6:"pageid";i:55;}'),
('ebd44c697bf13cb785ca23c01e9be6b1', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499915232, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('ec1921e20bb688a7d68e416434adbbda', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', 1464599437, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:6:"pageid";i:58;s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;}'),
('ec94c316a6e134e6e9e9e4d4d702e580', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481698003, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:58;}'),
('ecfb9b7e1feff594f652aabc0cac1922', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.3', 1473902877, 'a:10:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:55;s:20:"upload_session_image";s:0:"";}'),
('f0cefba02ba7a668db0179ffb3cf4905', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', 1472447826, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('f253023ba7051500bcbbe3eb63eaea86', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499413678, 'a:9:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";s:7:"user_id";s:1:"1";s:11:"auth_custom";s:5:"admin";s:10:"user_token";s:40:"afce4294b114b45eb6bd4c7d70659ef44232d1c1";s:8:"identity";s:5:"admin";s:7:"role_id";s:1:"1";s:9:"logged_in";b:1;s:6:"pageid";i:63;}'),
('f45989209006f2a7efcd873ee51153a9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', 1467194836, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('fb66f5eb115c41ef9770b653bd7c8b4d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', 1467249915, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('fdd7a347558118de8afd69ae06ea0e94', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', 1499988539, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}'),
('fef29fdd0875c1238909a8090aad2419', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', 1481698019, 'a:2:{s:9:"user_data";s:0:"";s:9:"site_lang";s:9:"indonesia";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_settings`
--

CREATE TABLE `bf_settings` (
  `name` varchar(30) NOT NULL,
  `module` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_settings`
--

INSERT INTO `bf_settings` (`name`, `module`, `value`) VALUES
('auth.allow_name_change', 'core', '1'),
('auth.allow_register', 'core', '1'),
('auth.allow_remember', 'core', '1'),
('auth.do_login_redirect', 'core', '1'),
('auth.login_type', 'core', 'both'),
('auth.name_change_frequency', 'core', '1'),
('auth.name_change_limit', 'core', '1'),
('auth.password_force_mixed_case', 'core', '0'),
('auth.password_force_numbers', 'core', '0'),
('auth.password_force_symbols', 'core', '0'),
('auth.password_min_length', 'core', '4'),
('auth.password_show_labels', 'core', '0'),
('auth.remember_length', 'core', '1209600'),
('auth.user_activation_method', 'core', '0'),
('auth.use_extended_profile', 'core', '0'),
('auth.use_usernames', 'core', '1'),
('ext.country', 'core', 'US'),
('ext.state', 'core', 'CA'),
('ext.street_name', 'core', ''),
('ext.type', 'core', 'small'),
('form_save', 'core.ui', 'ctrl+s/Ã¢Å’Ëœ+s'),
('goto_content', 'core.ui', 'alt+c'),
('mailpath', 'email', '/usr/sbin/sendmail'),
('mailtype', 'email', 'html'),
('password_iterations', 'users', '4'),
('protocol', 'email', 'smtp'),
('sender_email', 'email', 'admin@lapan.go.id'),
('site.alamat', 'site', ' JL. MATRAMAN RAYA JAKARTA TIMUR 13150'),
('site.cse', 'core', '003799789951844657258:zorr_eczq_u'),
('site.description', 'core', 'Kementerian Dalam Negeri - Republik Indonesia'),
('site.facebook', 'core', 'https://www.facebook.com/#'),
('site.googleplus', 'core', 'https://plus.google.com/s/#'),
('site.keyword', 'core', 'Kementerian dalam negeri'),
('site.kode_desa', 'core', '6105180006'),
('site.languages', 'core', 'a:2:{i:0;s:7:"english";i:1;s:9:"indonesia";}'),
('site.list_limit', 'core', '10'),
('site.logo', 'core', 'c8689a58e4db6622122dbf865c864c97.jpg'),
('site.setPengumuman', 'core', 'aktif'),
('site.show_front_profiler', 'core', '0'),
('site.show_profiler', 'core', '0'),
('site.status', 'core', '1'),
('site.system_email', 'core', 'jurnalmedika@gmail.com'),
('site.telpfax', 'site', '<i class="fa fa-phone"></i>(021) 3450038 <i class="fa fa-fax"></i>  (021) 3851193, 34830261,3846430'),
('site.title', 'core', 'Jurnal Medika'),
('site.twitter', 'core', 'https://twitter.com/#'),
('smtp_host', 'email', 'ssl://smtp.gmail.com'),
('smtp_pass', 'email', '172701941@#'),
('smtp_port', 'email', '465'),
('smtp_timeout', 'email', '7'),
('smtp_user', 'email', 'wieldean@gmail.com'),
('updates.bleeding_edge', 'core', '0'),
('updates.do_check', 'core', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_slide`
--

CREATE TABLE `bf_slide` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` text COLLATE latin1_general_ci,
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `file` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `deleted` int(10) DEFAULT '0' COMMENT '0:tampil;1:soft elete',
  `urut` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_slide`
--

INSERT INTO `bf_slide` (`id`, `title`, `keterangan`, `link`, `file`, `deleted`, `urut`) VALUES
(91, 'slide1', '', '#', 'Baner-book-dr-Mahesa-websit.jpg', 0, NULL),
(92, 'slide2', '', '#', 'Baner-terbit-baru-1708.jpg', 0, NULL),
(93, 'slide3', '', '#', 'Baner-web-milagros-1704.jpg', 0, NULL),
(94, 'slide4', '', '#', 'Baner-web-MPC-1609.jpg', 0, NULL),
(95, 'slide5', '', '#', 'Baner-web-SKP-IDI-1608.jpg', 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_states`
--

CREATE TABLE `bf_states` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `abbrev` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_states`
--

INSERT INTO `bf_states` (`id`, `name`, `abbrev`) VALUES
(1, 'Alaska', 'AK'),
(2, 'Alabama', 'AL'),
(3, 'American Samoa', 'AS'),
(4, 'Arizona', 'AZ'),
(5, 'Arkansas', 'AR'),
(6, 'California', 'CA'),
(7, 'Colorado', 'CO'),
(8, 'Connecticut', 'CT'),
(9, 'Delaware', 'DE'),
(10, 'District of Columbia', 'DC'),
(11, 'Florida', 'FL'),
(12, 'Georgia', 'GA'),
(13, 'Guam', 'GU'),
(14, 'Hawaii', 'HI'),
(15, 'Idaho', 'ID'),
(16, 'Illinois', 'IL'),
(17, 'Indiana', 'IN'),
(18, 'Iowa', 'IA'),
(19, 'Kansas', 'KS'),
(20, 'Kentucky', 'KY'),
(21, 'Louisiana', 'LA'),
(22, 'Maine', 'ME'),
(23, 'Marshall Islands', 'MH'),
(24, 'Maryland', 'MD'),
(25, 'Massachusetts', 'MA'),
(26, 'Michigan', 'MI'),
(27, 'Minnesota', 'MN'),
(28, 'Mississippi', 'MS'),
(29, 'Missouri', 'MO'),
(30, 'Montana', 'MT'),
(31, 'Nebraska', 'NE'),
(32, 'Nevada', 'NV'),
(33, 'New Hampshire', 'NH'),
(34, 'New Jersey', 'NJ'),
(35, 'New Mexico', 'NM'),
(36, 'New York', 'NY'),
(37, 'North Carolina', 'NC'),
(38, 'North Dakota', 'ND'),
(39, 'Northern Mariana Islands', 'MP'),
(40, 'Ohio', 'OH'),
(41, 'Oklahoma', 'OK'),
(42, 'Oregon', 'OR'),
(43, 'Palau', 'PW'),
(44, 'Pennsylvania', 'PA'),
(45, 'Puerto Rico', 'PR'),
(46, 'Rhode Island', 'RI'),
(47, 'South Carolina', 'SC'),
(48, 'South Dakota', 'SD'),
(49, 'Tennessee', 'TN'),
(50, 'Texas', 'TX'),
(51, 'Utah', 'UT'),
(52, 'Vermont', 'VT'),
(53, 'Virgin Islands', 'VI'),
(54, 'Virginia', 'VA'),
(55, 'Washington', 'WA'),
(56, 'West Virginia', 'WV'),
(57, 'Wisconsin', 'WI'),
(58, 'Wyoming', 'WY'),
(59, 'Armed Forces Africa', 'AE'),
(60, 'Armed Forces Canada', 'AE'),
(61, 'Armed Forces Europe', 'AE'),
(62, 'Armed Forces Middle East', 'AE'),
(63, 'Armed Forces Pacific', 'AP'),
(64, 'Jawa Barat', 'JB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_statistik`
--

CREATE TABLE `bf_statistik` (
  `id_statistik` int(11) NOT NULL,
  `nama_statistik` varchar(200) NOT NULL,
  `tipe` enum('pie','bar','column','') NOT NULL DEFAULT 'pie',
  `sub_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bf_statistik`
--

INSERT INTO `bf_statistik` (`id_statistik`, `nama_statistik`, `tipe`, `sub_title`) VALUES
(1, 'Fasilitas Pendidikan', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id'),
(2, 'Fasilitas Kesehatan', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id'),
(3, 'Fasilitas Telekomunikasi', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id'),
(4, 'Fasilitas Listrik', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_statistik_detail`
--

CREATE TABLE `bf_statistik_detail` (
  `id_statistik_detail` int(11) NOT NULL,
  `id_statistik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_templates`
--

CREATE TABLE `bf_templates` (
  `id_templates` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci DEFAULT 'N',
  `gambar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_templates`
--

INSERT INTO `bf_templates` (`id_templates`, `judul`, `pembuat`, `folder`, `aktif`, `gambar`) VALUES
(1, 'Theme 1', 'BIT', 'template3', 'N', 'template1.png'),
(12, 'Theme 3', 'BIT', 'frontend', 'Y', 'template3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_testimonial`
--

CREATE TABLE `bf_testimonial` (
  `id` int(10) NOT NULL,
  `pengirim` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` text COLLATE latin1_general_ci,
  `tgl_kirim` date DEFAULT NULL,
  `status_approve` int(11) DEFAULT NULL,
  `jawaban` text COLLATE latin1_general_ci,
  `ipaddr` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `bf_testimonial`
--

INSERT INTO `bf_testimonial` (`id`, `pengirim`, `komentar`, `tgl_kirim`, `status_approve`, `jawaban`, `ipaddr`, `email`) VALUES
(1, 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', NULL, NULL, '', NULL),
(2, 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', NULL, NULL, '', NULL),
(3, 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', NULL, NULL, '', NULL),
(4, 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_users`
--

CREATE TABLE `bf_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` char(60) NOT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `reset_by` int(10) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` char(4) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  `password_iterations` int(4) NOT NULL,
  `force_password_reset` tinyint(1) NOT NULL DEFAULT '0',
  `kota` int(11) DEFAULT NULL,
  `no_rekening` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `bank` varchar(200) DEFAULT NULL,
  `nama_pemilik_bank` varchar(200) DEFAULT NULL,
  `provinsi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_users`
--

INSERT INTO `bf_users` (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `last_login`, `last_ip`, `created_on`, `deleted`, `reset_by`, `banned`, `ban_message`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`, `password_iterations`, `force_password_reset`, `kota`, `no_rekening`, `kode_pos`, `bank`, `nama_pemilik_bank`, `provinsi`) VALUES
(1, 1, 'admin@kemendagri.go.id', 'admin', '$2a$04$h0Wv5mgylZwwzxqAYOroR.Y/WVWJJqiBuuDELUy0eA8o4uuA1IVhG', '', '2017-08-28 16:15:56', '::1', '2014-03-10 05:58:47', 0, 0, 0, NULL, 'Admin', NULL, 'UM8', 'english', 1, '', 4, 0, 176, NULL, '44544', NULL, NULL, 32),
(2, 6, 'developer@kemendagri.go.id', 'developer', '$2a$04$h0Wv5mgylZwwzxqAYOroR.Y/WVWJJqiBuuDELUy0eA8o4uuA1IVhG', NULL, '2017-09-09 06:41:22', '::1', '0000-00-00 00:00:00', 0, NULL, 0, NULL, 'Developer', NULL, 'UM8', 'english', 1, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 8, 'halo@myindo.co.id', 'myindocs', '$2a$04$Q2GjJWC/McDQXbwc76eN5OtOzkYt9/eYnHiuVExdnY/1YRA7Fi9Rm', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:26:50', 0, NULL, 0, NULL, 'MyIndoCS', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 8, 'admin@myindo.co.id', 'myindo', '$2a$04$8BAaAPoQ4XAChwSnM0LzRucQ2ZKi3ETNVcHFUZaxOBRMi1dBA6x6G', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:27:29', 0, NULL, 0, NULL, 'MyIndo', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 8, 'admin1@mail.com', 'admin1', '$2a$04$uvaCBLiN0JV2RVg9G5vR.OW8g5FW27rU/2FAQKLc2WdL2ygg85EzS', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:28:15', 0, NULL, 0, NULL, 'admin1', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 8, 'admin2@mail.com', 'admin2', '$2a$04$LS7DZTzokmE7WBTv1r8y/.1.Ml9PIgA59Kd49ix.8rc7E9akkKiDS', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:28:40', 0, NULL, 0, NULL, 'admin2', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 8, 'widya@kemendagri.go.id', 'widya', '$2a$04$Ar3ZUltLSVZ5R2c79jsCme3OTY1C4SPBPhhNi8aJ.Df7.zwK3Z/yu', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:29:15', 0, NULL, 0, NULL, 'Widya Rachmi', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, 'yeni@depdagri.go.id', 'yeni', '$2a$04$ZSemQhPHb.j4dEzA05hEBOvgR7WM8T3jYIlg5yiNjt7UhiNkfghV.', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:29:46', 0, NULL, 0, NULL, 'Yeni Indah S', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 8, 'riyadi@depdagri.go.id', 'yadi', '$2a$04$R6zIn409z9i3u.2V.cIsVOCl/w67sjC0y/S3yAiRbnF7rgrSk56Fe', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:30:46', 0, NULL, 0, NULL, 'Riyadi Priyatin', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 8, 'harry_irawan@kemendagri.go.id', 'harry', '$2a$04$wuUiWskgZhoqYDg6imvXDe6kIsSWnoR8RFXgHV1UX8uPGM5NBsqba', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:31:17', 0, NULL, 0, NULL, 'Harry Irawan', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 8, 'indri@mail.com', 'indri', '$2a$04$44mkO4IqjrZKiImiyj33JuLNKg2gWvrq/FX0feWWYyR3pmmctqtVG', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:49:34', 0, NULL, 0, NULL, 'Dyah Indriawati', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 8, 'panji@mail.com', 'panji', '$2a$04$VpTCv4asjxQPoWa5PvMY/ujA8chUN6AiabL2zRl4SIAmSieoDPYfm', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:50:05', 0, NULL, 0, NULL, 'Yudhi Pandji Wulung', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 8, 'susi@mail.com', 'susi', '$2a$04$TuG1saMXDU7g8tdzFsWZUuXPVlBu/wj1J8nF6Z3UJoWIiSslxTl7a', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:50:37', 0, NULL, 0, NULL, 'Tri Susilowati', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 8, 'anto@mail.com', 'anto', '$2a$04$LoqB7GwtDtD.HlRh1JIZWeC8YbzTJrpTMM.6eEPsRuaSs2z/DTBqW', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:51:13', 0, NULL, 0, NULL, 'Brilianto', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 8, 'afni@yahoo.com', 'rosa', '$2a$04$N4C730CiuJCOYSomtu.H1OTrGRUZhIGhEaFzo68/5kdxUMVMnTREW', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:51:49', 0, NULL, 0, NULL, 'Afni Rosa', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 8, 'sdewiretno@yahoo.com', 'dewi', '$2a$04$ZKA0nX99L20nz9VJvH9KiedjtugsraT6RTtAyypnHum/q/IaObVwy', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:52:21', 0, NULL, 0, NULL, 'Dewi Retno S', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 8, 'puspen@kemendagri.go.id', 'puspenfp', '$2a$04$C1G7U4BhFpqESu0PWsAMquwlw2tbsya29XKFNh/VtY8ufAqrs0cQ.', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:52:54', 0, NULL, 0, NULL, 'Puspen Fasilitasi Pengaduan', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 8, 'puspenhumas@mail.com', 'puspenhumas', '$2a$04$q3aVpO4PJ6./yPgtNuWFZ.4JIZfQ1W/NaNz1qgFx301ukFXMtsdPK', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:53:51', 0, NULL, 0, NULL, 'Puspen Humas', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 8, 'puspenberita@mail.com', 'puspenberita', '$2a$04$gE/ht/QF4ACAauRsI8T9Oe/jz.BO0QycvhseMLm5Vs4WoRQUWKtSC', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:54:24', 0, NULL, 0, NULL, 'Puspen Humas', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 8, 'deni@myindo.co.id', 'denipermana', '$2a$04$YZkQcojrHtU3C6nc7qanx.aYd731aNIkIVN84iZKZh5uAy.ssECCW', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:54:53', 0, NULL, 0, NULL, 'Deni', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 8, 'dr.azhari86@yahoo.com', 'ari', '$2a$04$S.6aLde0h/l/W6q8E6Ikpe7LngjVWEY2VxTnkVrds7Edgrfhs18Ie', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:55:29', 0, NULL, 0, NULL, 'Azhari', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 8, 'dasista@mail.com', 'dasista', '$2a$04$ui9r2JYr0TSFrUcZ27eAguc8sI963Pdtkp.SlHyDBCXjV2EiBirxO', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:55:57', 0, NULL, 0, NULL, 'Dasista Happy Karnia', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 8, 'purwoto@kemendagri.go.id', 'purwoto', '$2a$04$ERSHCs6OFvPkF.v96ukXdOPpncpwTkDSpckU1jZKmoAKlC.l3tSC6', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:56:27', 0, NULL, 0, NULL, 'Purwoto', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 8, 'anto@gmail.com', 'sediono', '$2a$04$ziqfnBEA1./fJDfGDceQJu90nhXVsiC.pPn41eiZ2e7eIfvqMB0aK', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:56:55', 0, NULL, 0, NULL, 'Sediono Brilianto', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 8, 'humas@kemendagri.go.id', 'ikhbal', '$2a$04$QwKr2jnIUpGYhLKTo0AVsu2P/jQGQF1nJrIj7fVMI9tC1sQw0NhCm', NULL, '2016-12-16 08:03:36', '', '2017-07-26 05:57:22', 0, NULL, 0, NULL, 'Andi Mohammad Ikhbal', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 8, 'puspen1@kemendagri.go.id', 'humas', '$2a$04$4QR/C5AafIhqU8m01MO9cuT1wt6Cbn5p8bAxAOnVAojx7rm7lM8WC', NULL, '2016-12-16 08:03:36', '', '2017-07-26 06:46:53', 0, NULL, 0, NULL, 'Humas', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 8, 'puspen3@kemendagri.go.id', 'berita', '$2a$04$JfjeIVCwYQPH9ir.UcPlr.VynCkWuuPCsUzSjt98eoqmF9XFjXETS', NULL, '2016-12-16 08:03:36', '', '2017-07-26 06:47:54', 0, NULL, 0, NULL, 'Berita', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 8, 'humas2@kemendagri.go.id', 'dino', '$2a$04$PpDg0tqDsj6q73bVsHc8N.mMXaIlNskSCN1WfKP2szM9/AqKNcsq6', NULL, '2016-12-16 08:03:36', '', '2017-07-26 06:49:55', 0, NULL, 0, NULL, 'Dino', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 8, 'knopix47@gmail.com', 'Hanafi', '$2a$04$aYWR5e3M6pJ05KkyX/8z0u6kS1YXvTQAUVLWl44ONPsqmHoQEisHe', NULL, '2016-12-16 08:03:36', '', '2017-07-26 06:50:24', 0, NULL, 0, NULL, 'Hanafi Supporting', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 8, 'andii_klapaucius@yahoo.co.id', 'faisal', '$2a$04$7OFUJgnY1iSm0HDZIMfR5.FujXD3dq1iufAVSMWBJ6M0WJMv7c4bC', NULL, '2016-12-16 08:03:36', '', '2017-07-26 06:50:51', 0, NULL, 0, NULL, 'Andi Muhammad Faisal', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 8, 'astri.megatari@gmail.com', 'astri', '$2a$04$galTA/Lp4T7etbQu0lrUbeHdimhufIaJP6ZsPc/cjyR8jnnisxNkK', NULL, '2016-12-16 08:03:36', '', '2017-07-26 06:51:15', 0, NULL, 0, NULL, 'Astri', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 8, 'doni_rusdiyatno@kemendagri.go.id', 'donirus', '$2a$04$joPKx/GWiL1onH9sXa7eNeI7tB7yF0Lnxk4D.oyLaF1cIe4MFmn.i', NULL, '2016-12-16 08:03:36', '', '2017-07-26 06:51:46', 0, NULL, 0, NULL, 'Doni Rusdiyatno', NULL, 'UM8', 'english', 1, '', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_user_cookies`
--

CREATE TABLE `bf_user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_user_meta`
--

CREATE TABLE `bf_user_meta` (
  `meta_id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bf_user_meta`
--

INSERT INTO `bf_user_meta` (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'street_name', 'cipacing'),
(2, 1, 'state', '0'),
(3, 1, 'country', 'ID'),
(5, 2, 'street_name', 'Jl. Jalaprang No 5'),
(6, 2, 'state', '0'),
(7, 2, 'country', 'ID'),
(9, 3, 'street_name', ''),
(10, 3, 'state', 'SC'),
(11, 3, 'country', 'US'),
(60, 1, 'tanggal_lahir', '2014-09-15'),
(61, 1, 'jenis_kelamin', 'L'),
(62, 1, 'phone', '08987962916'),
(63, 1, 'kode_pos', '44544'),
(64, 1, 'kota', '0'),
(65, 2, 'tanggal_lahir', '2014-09-16'),
(66, 2, 'jenis_kelamin', 'L'),
(67, 2, 'phone', ''),
(68, 2, 'kode_pos', '44544'),
(69, 2, 'kota', '27'),
(84, 17, 'tanggal_lahir', '2014-09-10'),
(85, 17, 'jenis_kelamin', 'P'),
(86, 17, 'street_name', 'a'),
(87, 17, 'phone', 'a'),
(88, 17, 'kode_pos', 'aaa'),
(89, 17, 'state', '0'),
(90, 17, 'country', 'ID'),
(161, 1, 'provinsi', '0'),
(162, 29, 'tanggal_lahir', '2014-10-24'),
(163, 29, 'jenis_kelamin', 'L'),
(164, 29, 'street_name', 'cipacing'),
(165, 29, 'phone', '08987962916'),
(166, 29, 'kode_pos', '44544'),
(167, 29, 'kota', '176'),
(168, 29, 'provinsi', '32'),
(169, 29, 'state', '0'),
(170, 29, 'country', 'ID'),
(171, 30, 'tanggal_lahir', '2014-10-24'),
(172, 30, 'jenis_kelamin', 'L'),
(173, 30, 'street_name', 'cipacing'),
(174, 30, 'phone', '089879898989'),
(175, 30, 'kode_pos', '44544'),
(176, 30, 'kota', '176'),
(177, 30, 'provinsi', '32'),
(178, 30, 'state', '0'),
(179, 30, 'country', 'ID'),
(180, 31, 'tanggal_lahir', '2014-10-24'),
(181, 31, 'jenis_kelamin', 'L'),
(182, 31, 'street_name', 'cipacing'),
(183, 31, 'phone', '089898989'),
(184, 31, 'kode_pos', '44544'),
(185, 31, 'kota', '176'),
(186, 31, 'provinsi', '32'),
(187, 31, 'state', '0'),
(188, 31, 'country', 'ID'),
(189, 32, 'tanggal_lahir', '2014-10-24'),
(190, 32, 'jenis_kelamin', 'L'),
(191, 32, 'street_name', 'cipacing'),
(192, 32, 'phone', '080909090'),
(193, 32, 'kode_pos', '44544'),
(194, 32, 'kota', '176'),
(195, 32, 'provinsi', '32'),
(196, 32, 'state', '0'),
(197, 32, 'country', 'ID'),
(198, 33, 'tanggal_lahir', '2014-10-24'),
(199, 33, 'jenis_kelamin', 'L'),
(200, 33, 'street_name', 'cipacing'),
(201, 33, 'phone', '0800909090'),
(202, 33, 'kode_pos', '44544'),
(203, 33, 'kota', '176'),
(204, 33, 'provinsi', '32'),
(205, 33, 'state', '0'),
(206, 33, 'country', 'ID'),
(207, 2, 'provinsi', '12'),
(215, 35, 'tanggal_lahir', '2014-11-20'),
(216, 35, 'jenis_kelamin', 'L'),
(217, 35, 'street_name', 'cipacing'),
(218, 35, 'phone', '08987962916'),
(219, 35, 'kode_pos', '44544'),
(220, 35, 'state', '0'),
(221, 35, 'country', 'ID'),
(222, 36, 'tanggal_lahir', '2014-12-03'),
(223, 36, 'jenis_kelamin', 'L'),
(224, 36, 'street_name', 'sdasd'),
(225, 36, 'phone', '454545'),
(226, 36, 'kode_pos', '343434'),
(227, 36, 'state', '0'),
(228, 36, 'country', 'ID'),
(229, 4, 'tanggal_lahir', '1974-04-10'),
(230, 4, 'jenis_kelamin', 'L'),
(231, 4, 'street_name', 'Jl. Pinus Timur No.2'),
(232, 4, 'phone', '082117001112'),
(233, 4, 'kode_pos', '42333'),
(234, 4, 'kota', '189'),
(235, 4, 'provinsi', '32'),
(236, 4, 'state', '0'),
(237, 4, 'country', 'ID'),
(238, 5, 'tanggal_lahir', '2015-01-01'),
(239, 5, 'jenis_kelamin', 'P'),
(240, 5, 'street_name', 'ss'),
(241, 5, 'phone', '22'),
(242, 5, 'kode_pos', '22'),
(243, 5, 'kota', '189'),
(244, 5, 'provinsi', '32'),
(245, 5, 'state', '0'),
(246, 5, 'country', 'ID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bf_widget`
--

CREATE TABLE `bf_widget` (
  `id` int(10) NOT NULL,
  `id_widget` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_referen_widget` int(10) DEFAULT NULL,
  `tipe_widget` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `column_sidebar` int(10) DEFAULT NULL,
  `collapse` tinyint(4) DEFAULT NULL,
  `sort_no` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bf_activities`
--
ALTER TABLE `bf_activities`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `bf_agenda`
--
ALTER TABLE `bf_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_album_foto`
--
ALTER TABLE `bf_album_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_arsip`
--
ALTER TABLE `bf_arsip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_post_category` (`post_category`);

--
-- Indexes for table `bf_comments`
--
ALTER TABLE `bf_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_contact`
--
ALTER TABLE `bf_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_countries`
--
ALTER TABLE `bf_countries`
  ADD PRIMARY KEY (`iso`);

--
-- Indexes for table `bf_easybook`
--
ALTER TABLE `bf_easybook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_email_queue`
--
ALTER TABLE `bf_email_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_galeri_foto`
--
ALTER TABLE `bf_galeri_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_link`
--
ALTER TABLE `bf_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_login_attempts`
--
ALTER TABLE `bf_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_menu_lokasi`
--
ALTER TABLE `bf_menu_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_meta_menu`
--
ALTER TABLE `bf_meta_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_multimedia`
--
ALTER TABLE `bf_multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_m_kategori`
--
ALTER TABLE `bf_m_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_pages_meta`
--
ALTER TABLE `bf_pages_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_permissions`
--
ALTER TABLE `bf_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `bf_polling`
--
ALTER TABLE `bf_polling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_polling_count`
--
ALTER TABLE `bf_polling_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_post_meta`
--
ALTER TABLE `bf_post_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_publikasi`
--
ALTER TABLE `bf_publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `bf_roles`
--
ALTER TABLE `bf_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `bf_role_permissions`
--
ALTER TABLE `bf_role_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`);

--
-- Indexes for table `bf_schema_version`
--
ALTER TABLE `bf_schema_version`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `bf_scrolltext`
--
ALTER TABLE `bf_scrolltext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_sessions`
--
ALTER TABLE `bf_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `bf_settings`
--
ALTER TABLE `bf_settings`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `bf_slide`
--
ALTER TABLE `bf_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_states`
--
ALTER TABLE `bf_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_statistik`
--
ALTER TABLE `bf_statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `bf_statistik_detail`
--
ALTER TABLE `bf_statistik_detail`
  ADD PRIMARY KEY (`id_statistik_detail`);

--
-- Indexes for table `bf_templates`
--
ALTER TABLE `bf_templates`
  ADD PRIMARY KEY (`id_templates`);

--
-- Indexes for table `bf_testimonial`
--
ALTER TABLE `bf_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bf_users`
--
ALTER TABLE `bf_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `bf_user_cookies`
--
ALTER TABLE `bf_user_cookies`
  ADD KEY `token` (`token`);

--
-- Indexes for table `bf_user_meta`
--
ALTER TABLE `bf_user_meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `bf_widget`
--
ALTER TABLE `bf_widget`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bf_activities`
--
ALTER TABLE `bf_activities`
  MODIFY `activity_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `bf_agenda`
--
ALTER TABLE `bf_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bf_album_foto`
--
ALTER TABLE `bf_album_foto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;
--
-- AUTO_INCREMENT for table `bf_arsip`
--
ALTER TABLE `bf_arsip`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_comments`
--
ALTER TABLE `bf_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bf_contact`
--
ALTER TABLE `bf_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_easybook`
--
ALTER TABLE `bf_easybook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_email_queue`
--
ALTER TABLE `bf_email_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_galeri_foto`
--
ALTER TABLE `bf_galeri_foto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `bf_link`
--
ALTER TABLE `bf_link`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `bf_login_attempts`
--
ALTER TABLE `bf_login_attempts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_menu_lokasi`
--
ALTER TABLE `bf_menu_lokasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bf_meta_menu`
--
ALTER TABLE `bf_meta_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `bf_multimedia`
--
ALTER TABLE `bf_multimedia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `bf_m_kategori`
--
ALTER TABLE `bf_m_kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `bf_pages_meta`
--
ALTER TABLE `bf_pages_meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `bf_permissions`
--
ALTER TABLE `bf_permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `bf_polling`
--
ALTER TABLE `bf_polling`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bf_polling_count`
--
ALTER TABLE `bf_polling_count`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `bf_post_meta`
--
ALTER TABLE `bf_post_meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bf_publikasi`
--
ALTER TABLE `bf_publikasi`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bf_roles`
--
ALTER TABLE `bf_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bf_scrolltext`
--
ALTER TABLE `bf_scrolltext`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `bf_slide`
--
ALTER TABLE `bf_slide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `bf_states`
--
ALTER TABLE `bf_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `bf_statistik`
--
ALTER TABLE `bf_statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bf_statistik_detail`
--
ALTER TABLE `bf_statistik_detail`
  MODIFY `id_statistik_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_templates`
--
ALTER TABLE `bf_templates`
  MODIFY `id_templates` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bf_testimonial`
--
ALTER TABLE `bf_testimonial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bf_users`
--
ALTER TABLE `bf_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `bf_user_meta`
--
ALTER TABLE `bf_user_meta`
  MODIFY `meta_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `bf_widget`
--
ALTER TABLE `bf_widget`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
