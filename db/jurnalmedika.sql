/*
 Navicat Premium Data Transfer

 Source Server         : myserver
 Source Server Type    : MySQL
 Source Server Version : 50505
 Source Host           : localhost
 Source Database       : jurnalmedika

 Target Server Type    : MySQL
 Target Server Version : 50505
 File Encoding         : utf-8

 Date: 08/28/2017 22:01:13 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `bf_activities`
-- ----------------------------
DROP TABLE IF EXISTS `bf_activities`;
CREATE TABLE `bf_activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_activities`
-- ----------------------------
BEGIN;
INSERT INTO `bf_activities` VALUES ('1', '0', 'pengunjung : 127.0.0.1', 'visitor', '2016-12-16 08:54:38', '0'), ('2', '2', 'Created record with ID: 5 : 127.0.0.1', 'post', '2016-12-16 08:56:37', '0'), ('3', '2', 'Created record with ID: 6 : 127.0.0.1', 'post', '2016-12-16 08:58:06', '0'), ('4', '0', 'pengunjung : 127.0.0.1', 'visitor', '2016-12-20 14:04:20', '0'), ('5', '1', 'logged in from: 127.0.0.1', 'users', '2016-12-20 14:04:54', '0'), ('6', '1', 'Updated record with ID: 360 : 127.0.0.1', 'kategori', '2016-12-20 15:15:39', '0'), ('7', '1', 'Created record with ID: 362 : 127.0.0.1', 'kategori', '2016-12-20 15:15:58', '0'), ('8', '1', 'Created record with ID: 363 : 127.0.0.1', 'kategori', '2016-12-20 15:16:11', '0'), ('9', '1', 'modified user: Admin', 'users', '2016-12-20 17:58:55', '0'), ('10', '1', 'modified user: Admin', 'users', '2016-12-20 17:58:56', '0'), ('11', '0', 'pengunjung : 127.0.0.1', 'visitor', '2016-12-21 03:48:15', '0'), ('12', '0', 'pengunjung : ::1', 'visitor', '2017-07-03 05:09:11', '0'), ('13', '1', 'logged in from: ::1', 'users', '2017-07-03 05:31:12', '0'), ('14', '1', 'App settings saved from: ::1', 'core', '2017-07-03 05:31:21', '0'), ('15', '1', 'App settings saved from: ::1', 'core', '2017-07-03 05:31:40', '0'), ('16', '1', 'App settings saved from: ::1', 'core', '2017-07-03 05:34:44', '0'), ('17', '1', 'modified user: Admin', 'users', '2017-07-03 05:35:06', '0'), ('18', '1', 'modified user: Developer', 'users', '2017-07-03 05:35:16', '0'), ('19', '1', 'Created record with ID: 62 : ::1', 'pages', '2017-07-03 05:51:12', '0'), ('20', '1', 'Created record with ID: 63 : ::1', 'pages', '2017-07-03 05:52:09', '0'), ('21', '1', 'Created record with ID: 64 : ::1', 'pages', '2017-07-03 05:52:44', '0'), ('22', '1', 'Created record with ID: 65 : ::1', 'pages', '2017-07-03 05:53:21', '0'), ('23', '1', 'Created record with ID: 66 : ::1', 'pages', '2017-07-03 05:55:29', '0'), ('24', '1', 'Created record with ID: 67 : ::1', 'pages', '2017-07-03 05:56:00', '0'), ('25', '1', 'Created record with ID: 68 : ::1', 'pages', '2017-07-03 05:58:09', '0'), ('26', '1', 'Created record with ID: 69 : ::1', 'pages', '2017-07-03 05:58:57', '0'), ('27', '1', 'Updated record with ID: 43 : ::1', 'kategori', '2017-07-03 06:00:18', '0'), ('28', '1', 'Updated record with ID: 77 : ::1', 'kategori', '2017-07-03 06:00:25', '0'), ('29', '1', 'Created record with ID: 81 : ::1', 'kategori', '2017-07-03 06:00:40', '0'), ('30', '1', 'Created record with ID: 82 : ::1', 'kategori', '2017-07-03 06:00:52', '0'), ('31', '1', 'Created record with ID: 83 : ::1', 'kategori', '2017-07-03 06:01:13', '0'), ('32', '1', 'Updated record with ID: 78 : ::1', 'kategori', '2017-07-03 06:02:01', '0'), ('33', '1', 'Created record with ID: 84 : ::1', 'kategori', '2017-07-03 06:02:16', '0'), ('34', '1', 'Created record with ID: 85 : ::1', 'kategori', '2017-07-03 06:02:27', '0'), ('35', '1', 'Created record with ID: 86 : ::1', 'kategori', '2017-07-03 06:06:38', '0'), ('36', '1', 'Created record with ID: 87 : ::1', 'kategori', '2017-07-03 06:06:48', '0'), ('37', '1', 'Created record with ID: 88 : ::1', 'kategori', '2017-07-03 06:08:15', '0'), ('38', '1', 'Created record with ID: 89 : ::1', 'kategori', '2017-07-03 06:08:24', '0'), ('39', '1', 'Created record with ID: 90 : ::1', 'kategori', '2017-07-03 06:08:39', '0'), ('40', '1', 'Updated record with ID: 362 : ::1', 'kategori', '2017-07-03 06:11:48', '0'), ('41', '1', 'App settings saved from: ::1', 'core', '2017-07-03 06:12:24', '0'), ('42', '1', 'App settings saved from: ::1', 'core', '2017-07-03 06:13:13', '0'), ('43', '1', 'App settings saved from: ::1', 'core', '2017-07-03 06:13:34', '0'), ('44', '1', 'App settings saved from: ::1', 'core', '2017-07-03 06:14:03', '0'), ('45', '0', 'pengunjung : ::1', 'visitor', '2017-07-04 03:18:35', '0'), ('46', '1', 'logged in from: ::1', 'users', '2017-07-04 03:29:46', '0'), ('47', '0', 'pengunjung : ::1', 'visitor', '2017-07-05 03:19:59', '0'), ('48', '1', 'Created record with ID: 91 : ::1', 'kategori', '2017-07-05 03:47:42', '0'), ('49', '1', 'Created record with ID: 7 : ::1', 'post', '2017-07-05 09:05:51', '0'), ('50', '1', 'Updated record with ID: 7 : ::1', 'post', '2017-07-05 09:12:42', '0'), ('51', '1', 'Created record with ID: 8 : ::1', 'post', '2017-07-05 09:15:06', '0'), ('52', '1', 'Created record with ID: 9 : ::1', 'post', '2017-07-05 09:34:02', '0'), ('53', '1', 'Created record with ID: 10 : ::1', 'post', '2017-07-05 09:35:17', '0'), ('54', '1', 'Created record with ID: 11 : ::1', 'post', '2017-07-05 09:38:41', '0'), ('55', '1', 'Created record with ID: 12 : ::1', 'post', '2017-07-05 09:40:01', '0'), ('56', '1', 'Created record with ID: 13 : ::1', 'post', '2017-07-05 09:40:02', '0'), ('57', '1', 'Created record with ID: 14 : ::1', 'post', '2017-07-05 09:41:22', '0'), ('58', '1', 'Created record with ID: 15 : ::1', 'post', '2017-07-05 09:43:33', '0'), ('59', '1', 'Created record with ID: 16 : ::1', 'post', '2017-07-05 09:45:25', '0'), ('60', '1', 'Created record with ID: 17 : ::1', 'post', '2017-07-05 09:47:49', '0'), ('61', '1', 'Created record with ID: 18 : ::1', 'post', '2017-07-05 09:49:13', '0'), ('62', '0', 'pengunjung : ::1', 'visitor', '2017-07-06 03:15:13', '0'), ('63', '1', 'Created record with ID: 70 : ::1', 'pages', '2017-07-06 03:37:44', '0'), ('64', '1', 'Updated record with ID: 70 : ::1', 'post', '2017-07-06 03:37:57', '0'), ('65', '0', 'pengunjung : ::1', 'visitor', '2017-07-07 03:37:15', '0'), ('66', '1', 'logged in from: ::1', 'users', '2017-07-07 05:59:14', '0'), ('67', '1', 'Created record with ID: 92 : ::1', 'kategori', '2017-07-07 10:09:58', '0'), ('68', '1', 'Updated record with ID: 92 : ::1', 'kategori', '2017-07-07 10:10:14', '0'), ('69', '0', 'pengunjung : ::1', 'visitor', '2017-07-10 04:19:10', '0'), ('70', '1', 'logged in from: ::1', 'users', '2017-07-10 04:23:13', '0'), ('71', '1', 'Created record with ID: 1 : ::1', 'publikasi', '2017-07-10 05:04:30', '0'), ('72', '0', 'pengunjung : ::1', 'visitor', '2017-07-11 06:40:35', '0'), ('73', '0', 'pengunjung : ::1', 'visitor', '2017-07-12 10:19:27', '0'), ('74', '0', 'pengunjung : ::1', 'visitor', '2017-07-13 03:59:00', '0'), ('75', '0', 'pengunjung : ::1', 'visitor', '2017-07-14 03:29:02', '0'), ('76', '0', 'pengunjung : ::1', 'visitor', '2017-07-17 03:44:24', '0'), ('77', '1', 'logged in from: ::1', 'users', '2017-07-17 04:01:37', '0'), ('78', '1', 'Created record with ID: 2 : ::1', 'publikasi', '2017-07-17 04:11:30', '0'), ('79', '1', 'Updated record with ID: 2 : ::1', 'publikasi', '2017-07-17 04:12:27', '0'), ('80', '1', 'Created record with ID: 3 : ::1', 'publikasi', '2017-07-17 04:16:41', '0'), ('81', '1', 'Created record with ID: 4 : ::1', 'publikasi', '2017-07-17 04:18:40', '0'), ('82', '1', 'Created record with ID: 5 : ::1', 'publikasi', '2017-07-17 04:20:02', '0'), ('83', '1', 'Created record with ID: 71 : ::1', 'pages', '2017-07-17 05:55:30', '0'), ('84', '0', 'pengunjung : ::1', 'visitor', '2017-07-18 03:07:50', '0'), ('85', '0', 'pengunjung : ::1', 'visitor', '2017-07-20 04:32:31', '0'), ('86', '1', 'logged in from: ::1', 'users', '2017-07-20 05:12:12', '0'), ('87', '1', 'Created record with ID: 93 : ::1', 'kategori', '2017-07-20 05:12:46', '0'), ('88', '1', 'Created record with ID: 19 : ::1', 'post', '2017-07-20 05:15:20', '0'), ('89', '1', 'Created record with ID: 20 : ::1', 'post', '2017-07-20 05:16:54', '0'), ('90', '1', 'Updated record with ID: 20 : ::1', 'post', '2017-07-20 05:17:34', '0'), ('91', '1', 'Created record with ID: 21 : ::1', 'post', '2017-07-20 05:18:57', '0'), ('92', '1', 'Created record with ID: 22 : ::1', 'post', '2017-07-20 05:20:14', '0'), ('93', '1', 'Created record with ID: 23 : ::1', 'post', '2017-07-20 05:21:21', '0'), ('94', '0', 'pengunjung : ::1', 'visitor', '2017-07-24 06:01:32', '0'), ('95', '0', 'pengunjung : ::1', 'visitor', '2017-07-26 05:16:03', '0'), ('96', '1', 'logged in from: ::1', 'users', '2017-07-26 05:17:05', '0'), ('97', '1', 'created a new Editor: MyIndoCS', 'users', '2017-07-26 05:26:50', '0'), ('98', '1', 'created a new Editor: MyIndo', 'users', '2017-07-26 05:27:29', '0'), ('99', '1', 'created a new Editor: admin1', 'users', '2017-07-26 05:28:15', '0'), ('100', '1', 'created a new Editor: admin2', 'users', '2017-07-26 05:28:40', '0'), ('101', '1', 'created a new Editor: Widya Rachmi', 'users', '2017-07-26 05:29:15', '0'), ('102', '1', 'created a new Editor: Yeni Indah S', 'users', '2017-07-26 05:29:46', '0'), ('103', '1', 'created a new Editor: Riyadi Priyatin', 'users', '2017-07-26 05:30:46', '0'), ('104', '1', 'created a new Editor: Harry Irawan', 'users', '2017-07-26 05:31:17', '0'), ('105', '1', 'created a new Editor: Dyah Indriawati', 'users', '2017-07-26 05:49:34', '0'), ('106', '1', 'created a new Editor: Yudhi Pandji Wulung', 'users', '2017-07-26 05:50:05', '0'), ('107', '1', 'created a new Editor: Tri Susilowati', 'users', '2017-07-26 05:50:37', '0'), ('108', '1', 'created a new Editor: Brilianto', 'users', '2017-07-26 05:51:13', '0'), ('109', '1', 'created a new Editor: Afni Rosa', 'users', '2017-07-26 05:51:49', '0'), ('110', '1', 'created a new Editor: Dewi Retno S', 'users', '2017-07-26 05:52:21', '0'), ('111', '1', 'created a new Editor: Puspen Fasilitasi Pengaduan', 'users', '2017-07-26 05:52:54', '0'), ('112', '1', 'created a new Editor: Puspen Humas', 'users', '2017-07-26 05:53:51', '0'), ('113', '1', 'created a new Editor: Puspen Humas', 'users', '2017-07-26 05:54:24', '0'), ('114', '1', 'created a new Editor: Deni', 'users', '2017-07-26 05:54:53', '0'), ('115', '1', 'created a new Editor: Azhari', 'users', '2017-07-26 05:55:29', '0'), ('116', '1', 'created a new Editor: Dasista Happy Karnia', 'users', '2017-07-26 05:55:57', '0'), ('117', '1', 'created a new Editor: Purwoto', 'users', '2017-07-26 05:56:27', '0'), ('118', '1', 'created a new Editor: Sediono Brilianto', 'users', '2017-07-26 05:56:55', '0'), ('119', '1', 'created a new Editor: Andi Mohammad Ikhbal', 'users', '2017-07-26 05:57:22', '0'), ('120', '1', 'created a new Editor: Humas', 'users', '2017-07-26 06:46:53', '0'), ('121', '1', 'created a new User: Berita', 'users', '2017-07-26 06:47:54', '0'), ('122', '1', 'created a new Editor: Dino', 'users', '2017-07-26 06:49:55', '0'), ('123', '1', 'created a new Editor: Hanafi Supporting', 'users', '2017-07-26 06:50:24', '0'), ('124', '1', 'created a new Editor: Andi Muhammad Faisal', 'users', '2017-07-26 06:50:51', '0'), ('125', '1', 'created a new Editor: Astri', 'users', '2017-07-26 06:51:15', '0'), ('126', '1', 'created a new Editor: Doni Rusdiyatno', 'users', '2017-07-26 06:51:46', '0'), ('127', '0', 'pengunjung : ::1', 'visitor', '2017-08-11 04:36:36', '0'), ('128', '0', 'pengunjung : ::1', 'visitor', '2017-08-14 03:34:57', '0'), ('129', '1', 'logged in from: ::1', 'users', '2017-08-14 04:56:21', '0'), ('130', '1', 'Created record with ID: 94 : ::1', 'kategori', '2017-08-14 04:56:38', '0'), ('131', '1', 'logged in from: ::1', 'users', '2017-08-14 05:36:54', '0'), ('132', '1', 'logged in from: ::1', 'users', '2017-08-14 06:53:01', '0'), ('133', '0', 'pengunjung : ::1', 'visitor', '2017-08-21 09:06:35', '0'), ('134', '0', 'pengunjung : ::1', 'visitor', '2017-08-22 04:39:52', '0'), ('135', '0', 'pengunjung : ::1', 'visitor', '2017-08-23 05:52:27', '0'), ('136', '0', 'pengunjung : ::1', 'visitor', '2017-08-24 05:32:01', '0'), ('137', '0', 'pengunjung : ::1', 'visitor', '2017-08-25 09:18:42', '0'), ('138', '0', 'pengunjung : ::1', 'visitor', '2017-08-28 15:40:46', '0'), ('139', '1', 'logged in from: ::1', 'users', '2017-08-28 16:15:56', '0'), ('140', '1', 'App settings saved from: ::1', 'core', '2017-08-28 16:16:06', '0'), ('141', '1', 'App settings saved from: ::1', 'core', '2017-08-28 16:16:14', '0'), ('142', '1', 'App settings saved from: ::1', 'core', '2017-08-28 16:16:27', '0'), ('143', '1', 'Created record with ID: 95 : ::1', 'kategori', '2017-08-28 16:35:05', '0'), ('144', '1', 'Created record with ID: 96 : ::1', 'kategori', '2017-08-28 16:35:09', '0'), ('145', '1', 'Created record with ID: 1 : ::1', 'post', '2017-08-28 16:38:04', '0'), ('146', '1', 'Created record with ID: 2 : ::1', 'post', '2017-08-28 16:39:07', '0'), ('147', '1', 'Created record with ID: 3 : ::1', 'post', '2017-08-28 16:39:50', '0'), ('148', '1', 'Created record with ID: 97 : ::1', 'kategori', '2017-08-28 16:42:24', '0'), ('149', '1', 'Created record with ID: 98 : ::1', 'kategori', '2017-08-28 16:43:12', '0'), ('150', '1', 'Created record with ID: 99 : ::1', 'kategori', '2017-08-28 16:43:23', '0'), ('151', '1', 'Created record with ID: 100 : ::1', 'kategori', '2017-08-28 16:43:31', '0'), ('152', '1', 'Created record with ID: 101 : ::1', 'kategori', '2017-08-28 16:43:52', '0'), ('153', '1', 'Created record with ID: 102 : ::1', 'kategori', '2017-08-28 16:43:58', '0'), ('154', '1', 'Created record with ID: 103 : ::1', 'kategori', '2017-08-28 16:44:05', '0'), ('155', '1', 'Created record with ID: 104 : ::1', 'kategori', '2017-08-28 16:44:08', '0'), ('156', '1', 'Created record with ID: 105 : ::1', 'kategori', '2017-08-28 16:44:17', '0'), ('157', '1', 'Created record with ID: 106 : ::1', 'kategori', '2017-08-28 16:44:31', '0');
COMMIT;

-- ----------------------------
--  Table structure for `bf_agenda`
-- ----------------------------
DROP TABLE IF EXISTS `bf_agenda`;
CREATE TABLE `bf_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_category` int(11) DEFAULT NULL,
  `time_start` varchar(20) DEFAULT NULL,
  `time_ends` varchar(20) DEFAULT NULL,
  `tgl_agenda` date DEFAULT NULL,
  `judul_agenda` varchar(200) DEFAULT NULL,
  `judul_agenda_english` varchar(200) DEFAULT NULL,
  `isi_agenda` text,
  `isi_agenda_english` text,
  `author` varchar(100) DEFAULT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `bf_agenda`
-- ----------------------------
BEGIN;
INSERT INTO `bf_agenda` VALUES ('1', '74', '12:00', '12:00', '2016-12-20', 'Komisi Informasi Pusat', 'Komisi Informasi Pusat', 'Umum - Penganugerahan Keterbukaan Informasi Publik 2016 di Istana Wapres\n\n', 'Umum - Penganugerahan Keterbukaan Informasi Publik 2016 di Istana Wapres\n\n', 'admin', 'Komisi Informasi Pusat');
COMMIT;

-- ----------------------------
--  Table structure for `bf_album_foto`
-- ----------------------------
DROP TABLE IF EXISTS `bf_album_foto`;
CREATE TABLE `bf_album_foto` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `gambar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=364 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_album_foto`
-- ----------------------------
BEGIN;
INSERT INTO `bf_album_foto` VALUES ('361', 'kjjkj', null, 'jkjksdd', 'galleri', '1', null, null, null, null, null, null, null), ('360', 'Simulasi Pemungutan Penghitungan Suara di Kab Pati', 'Webku', '', 'galleri', '1', '', null, null, null, null, null, null), ('362', 'Album Kemendagri', null, '', 'galleri', '0', null, null, null, null, null, null, null), ('363', 'Rakor Mutarlih Berkelanjutan 2016', null, '', 'galleri', '1', null, null, null, null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `bf_arsip`
-- ----------------------------
DROP TABLE IF EXISTS `bf_arsip`;
CREATE TABLE `bf_arsip` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `filepath` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`),
  KEY `idx_post_category` (`post_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Table structure for `bf_comments`
-- ----------------------------
DROP TABLE IF EXISTS `bf_comments`;
CREATE TABLE `bf_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `identitas` varchar(255) COLLATE latin1_general_ci DEFAULT '0',
  `email` varchar(255) COLLATE latin1_general_ci DEFAULT '0',
  `komentar` mediumtext COLLATE latin1_general_ci,
  `tgl_komentar` timestamp NULL DEFAULT NULL,
  `kolom_posts` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `approve` enum('N','Y') COLLATE latin1_general_ci DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_comments`
-- ----------------------------
BEGIN;
INSERT INTO `bf_comments` VALUES ('1', 'Harry Ridwan Ramadan', 'harryridwanramadan@gmail.com', 'tes komentar uy', '2016-08-29 05:18:24', '4', '0', 'Y'), ('2', 'Dono Kasino', 'donokasiono@gmail.com', 'tes 124', '2016-08-29 05:21:10', null, '0', 'N'), ('3', 'Doni Kasino Indro Warkop', 'donowarkop@gmail.com', 'Warung Kopi', '2016-08-29 05:23:29', '4', '0', 'Y'), ('4', 'Doni Kasino Indro Warkop', 'donowarkop@gmail.com', 'Warung Kopi', '2016-08-29 05:23:44', '4', '0', 'Y'), ('5', 'Doni Kasino Indro Warkop', 'donowarkop@gmail.com', 'Warung Kopi', '2016-08-29 05:23:53', '4', '0', 'Y'), ('6', 'Septian', 'septian@gmail.com', 'tes ', '2016-08-29 05:24:32', '4', '0', 'Y');
COMMIT;

-- ----------------------------
--  Table structure for `bf_contact`
-- ----------------------------
DROP TABLE IF EXISTS `bf_contact`;
CREATE TABLE `bf_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tgl_kirim` datetime DEFAULT NULL,
  `pengirim` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` text COLLATE latin1_general_ci,
  `ipaddr` varchar(50) COLLATE latin1_general_ci DEFAULT '0',
  `jawaban` text COLLATE latin1_general_ci,
  `email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `penjawab` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Table structure for `bf_countries`
-- ----------------------------
DROP TABLE IF EXISTS `bf_countries`;
CREATE TABLE `bf_countries` (
  `iso` char(2) NOT NULL DEFAULT 'US',
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`iso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_countries`
-- ----------------------------
BEGIN;
INSERT INTO `bf_countries` VALUES ('AD', 'ANDORRA', 'Andorra', 'AND', '20'), ('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', '784'), ('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', '4'), ('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', '28'), ('AI', 'ANGUILLA', 'Anguilla', 'AIA', '660'), ('AL', 'ALBANIA', 'Albania', 'ALB', '8'), ('AM', 'ARMENIA', 'Armenia', 'ARM', '51'), ('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', '530'), ('AO', 'ANGOLA', 'Angola', 'AGO', '24'), ('AQ', 'ANTARCTICA', 'Antarctica', null, null), ('AR', 'ARGENTINA', 'Argentina', 'ARG', '32'), ('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', '16'), ('AT', 'AUSTRIA', 'Austria', 'AUT', '40'), ('AU', 'AUSTRALIA', 'Australia', 'AUS', '36'), ('AW', 'ARUBA', 'Aruba', 'ABW', '533'), ('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', '31'), ('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', '70'), ('BB', 'BARBADOS', 'Barbados', 'BRB', '52'), ('BD', 'BANGLADESH', 'Bangladesh', 'BGD', '50'), ('BE', 'BELGIUM', 'Belgium', 'BEL', '56'), ('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', '854'), ('BG', 'BULGARIA', 'Bulgaria', 'BGR', '100'), ('BH', 'BAHRAIN', 'Bahrain', 'BHR', '48'), ('BI', 'BURUNDI', 'Burundi', 'BDI', '108'), ('BJ', 'BENIN', 'Benin', 'BEN', '204'), ('BM', 'BERMUDA', 'Bermuda', 'BMU', '60'), ('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', '96'), ('BO', 'BOLIVIA', 'Bolivia', 'BOL', '68'), ('BR', 'BRAZIL', 'Brazil', 'BRA', '76'), ('BS', 'BAHAMAS', 'Bahamas', 'BHS', '44'), ('BT', 'BHUTAN', 'Bhutan', 'BTN', '64'), ('BV', 'BOUVET ISLAND', 'Bouvet Island', null, null), ('BW', 'BOTSWANA', 'Botswana', 'BWA', '72'), ('BY', 'BELARUS', 'Belarus', 'BLR', '112'), ('BZ', 'BELIZE', 'Belize', 'BLZ', '84'), ('CA', 'CANADA', 'Canada', 'CAN', '124'), ('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', null, null), ('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', '180'), ('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', '140'), ('CG', 'CONGO', 'Congo', 'COG', '178'), ('CH', 'SWITZERLAND', 'Switzerland', 'CHE', '756'), ('CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', '384'), ('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', '184'), ('CL', 'CHILE', 'Chile', 'CHL', '152'), ('CM', 'CAMEROON', 'Cameroon', 'CMR', '120'), ('CN', 'CHINA', 'China', 'CHN', '156'), ('CO', 'COLOMBIA', 'Colombia', 'COL', '170'), ('CR', 'COSTA RICA', 'Costa Rica', 'CRI', '188'), ('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', null, null), ('CU', 'CUBA', 'Cuba', 'CUB', '192'), ('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', '132'), ('CX', 'CHRISTMAS ISLAND', 'Christmas Island', null, null), ('CY', 'CYPRUS', 'Cyprus', 'CYP', '196'), ('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', '203'), ('DE', 'GERMANY', 'Germany', 'DEU', '276'), ('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', '262'), ('DK', 'DENMARK', 'Denmark', 'DNK', '208'), ('DM', 'DOMINICA', 'Dominica', 'DMA', '212'), ('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', '214'), ('DZ', 'ALGERIA', 'Algeria', 'DZA', '12'), ('EC', 'ECUADOR', 'Ecuador', 'ECU', '218'), ('EE', 'ESTONIA', 'Estonia', 'EST', '233'), ('EG', 'EGYPT', 'Egypt', 'EGY', '818'), ('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', '732'), ('ER', 'ERITREA', 'Eritrea', 'ERI', '232'), ('ES', 'SPAIN', 'Spain', 'ESP', '724'), ('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', '231'), ('FI', 'FINLAND', 'Finland', 'FIN', '246'), ('FJ', 'FIJI', 'Fiji', 'FJI', '242'), ('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', '238'), ('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', '583'), ('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', '234'), ('FR', 'FRANCE', 'France', 'FRA', '250'), ('GA', 'GABON', 'Gabon', 'GAB', '266'), ('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', '826'), ('GD', 'GRENADA', 'Grenada', 'GRD', '308'), ('GE', 'GEORGIA', 'Georgia', 'GEO', '268'), ('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', '254'), ('GH', 'GHANA', 'Ghana', 'GHA', '288'), ('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', '292'), ('GL', 'GREENLAND', 'Greenland', 'GRL', '304'), ('GM', 'GAMBIA', 'Gambia', 'GMB', '270'), ('GN', 'GUINEA', 'Guinea', 'GIN', '324'), ('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', '312'), ('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', '226'), ('GR', 'GREECE', 'Greece', 'GRC', '300'), ('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', null, null), ('GT', 'GUATEMALA', 'Guatemala', 'GTM', '320'), ('GU', 'GUAM', 'Guam', 'GUM', '316'), ('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', '624'), ('GY', 'GUYANA', 'Guyana', 'GUY', '328'), ('HK', 'HONG KONG', 'Hong Kong', 'HKG', '344'), ('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', null, null), ('HN', 'HONDURAS', 'Honduras', 'HND', '340'), ('HR', 'CROATIA', 'Croatia', 'HRV', '191'), ('HT', 'HAITI', 'Haiti', 'HTI', '332'), ('HU', 'HUNGARY', 'Hungary', 'HUN', '348'), ('ID', 'INDONESIA', 'Indonesia', 'IDN', '360'), ('IE', 'IRELAND', 'Ireland', 'IRL', '372'), ('IL', 'ISRAEL', 'Israel', 'ISR', '376'), ('IN', 'INDIA', 'India', 'IND', '356'), ('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', null, null), ('IQ', 'IRAQ', 'Iraq', 'IRQ', '368'), ('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', '364'), ('IS', 'ICELAND', 'Iceland', 'ISL', '352'), ('IT', 'ITALY', 'Italy', 'ITA', '380'), ('JM', 'JAMAICA', 'Jamaica', 'JAM', '388'), ('JO', 'JORDAN', 'Jordan', 'JOR', '400'), ('JP', 'JAPAN', 'Japan', 'JPN', '392'), ('KE', 'KENYA', 'Kenya', 'KEN', '404'), ('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', '417'), ('KH', 'CAMBODIA', 'Cambodia', 'KHM', '116'), ('KI', 'KIRIBATI', 'Kiribati', 'KIR', '296'), ('KM', 'COMOROS', 'Comoros', 'COM', '174'), ('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', '659'), ('KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', '408'), ('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', '410'), ('KW', 'KUWAIT', 'Kuwait', 'KWT', '414'), ('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', '136'), ('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', '398'), ('LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', '418'), ('LB', 'LEBANON', 'Lebanon', 'LBN', '422'), ('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', '662'), ('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', '438'), ('LK', 'SRI LANKA', 'Sri Lanka', 'LKA', '144'), ('LR', 'LIBERIA', 'Liberia', 'LBR', '430'), ('LS', 'LESOTHO', 'Lesotho', 'LSO', '426'), ('LT', 'LITHUANIA', 'Lithuania', 'LTU', '440'), ('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', '442'), ('LV', 'LATVIA', 'Latvia', 'LVA', '428'), ('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', '434'), ('MA', 'MOROCCO', 'Morocco', 'MAR', '504'), ('MC', 'MONACO', 'Monaco', 'MCO', '492'), ('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', '498'), ('MG', 'MADAGASCAR', 'Madagascar', 'MDG', '450'), ('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', '584'), ('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', '807'), ('ML', 'MALI', 'Mali', 'MLI', '466'), ('MM', 'MYANMAR', 'Myanmar', 'MMR', '104'), ('MN', 'MONGOLIA', 'Mongolia', 'MNG', '496'), ('MO', 'MACAO', 'Macao', 'MAC', '446'), ('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', '580'), ('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', '474'), ('MR', 'MAURITANIA', 'Mauritania', 'MRT', '478'), ('MS', 'MONTSERRAT', 'Montserrat', 'MSR', '500'), ('MT', 'MALTA', 'Malta', 'MLT', '470'), ('MU', 'MAURITIUS', 'Mauritius', 'MUS', '480'), ('MV', 'MALDIVES', 'Maldives', 'MDV', '462'), ('MW', 'MALAWI', 'Malawi', 'MWI', '454'), ('MX', 'MEXICO', 'Mexico', 'MEX', '484'), ('MY', 'MALAYSIA', 'Malaysia', 'MYS', '458'), ('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', '508'), ('NA', 'NAMIBIA', 'Namibia', 'NAM', '516'), ('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', '540'), ('NE', 'NIGER', 'Niger', 'NER', '562'), ('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', '574'), ('NG', 'NIGERIA', 'Nigeria', 'NGA', '566'), ('NI', 'NICARAGUA', 'Nicaragua', 'NIC', '558'), ('NL', 'NETHERLANDS', 'Netherlands', 'NLD', '528'), ('NO', 'NORWAY', 'Norway', 'NOR', '578'), ('NP', 'NEPAL', 'Nepal', 'NPL', '524'), ('NR', 'NAURU', 'Nauru', 'NRU', '520'), ('NU', 'NIUE', 'Niue', 'NIU', '570'), ('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', '554'), ('OM', 'OMAN', 'Oman', 'OMN', '512'), ('PA', 'PANAMA', 'Panama', 'PAN', '591'), ('PE', 'PERU', 'Peru', 'PER', '604'), ('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', '258'), ('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', '598'), ('PH', 'PHILIPPINES', 'Philippines', 'PHL', '608'), ('PK', 'PAKISTAN', 'Pakistan', 'PAK', '586'), ('PL', 'POLAND', 'Poland', 'POL', '616'), ('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', '666'), ('PN', 'PITCAIRN', 'Pitcairn', 'PCN', '612'), ('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', '630'), ('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', null, null), ('PT', 'PORTUGAL', 'Portugal', 'PRT', '620'), ('PW', 'PALAU', 'Palau', 'PLW', '585'), ('PY', 'PARAGUAY', 'Paraguay', 'PRY', '600'), ('QA', 'QATAR', 'Qatar', 'QAT', '634'), ('RE', 'REUNION', 'Reunion', 'REU', '638'), ('RO', 'ROMANIA', 'Romania', 'ROM', '642'), ('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', '643'), ('RW', 'RWANDA', 'Rwanda', 'RWA', '646'), ('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', '682'), ('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', '90'), ('SC', 'SEYCHELLES', 'Seychelles', 'SYC', '690'), ('SD', 'SUDAN', 'Sudan', 'SDN', '736'), ('SE', 'SWEDEN', 'Sweden', 'SWE', '752'), ('SG', 'SINGAPORE', 'Singapore', 'SGP', '702'), ('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', '654'), ('SI', 'SLOVENIA', 'Slovenia', 'SVN', '705'), ('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', '744'), ('SK', 'SLOVAKIA', 'Slovakia', 'SVK', '703'), ('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', '694'), ('SM', 'SAN MARINO', 'San Marino', 'SMR', '674'), ('SN', 'SENEGAL', 'Senegal', 'SEN', '686'), ('SO', 'SOMALIA', 'Somalia', 'SOM', '706'), ('SR', 'SURINAME', 'Suriname', 'SUR', '740'), ('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', '678'), ('SV', 'EL SALVADOR', 'El Salvador', 'SLV', '222'), ('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', '760'), ('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', '748'), ('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', '796'), ('TD', 'CHAD', 'Chad', 'TCD', '148'), ('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', null, null), ('TG', 'TOGO', 'Togo', 'TGO', '768'), ('TH', 'THAILAND', 'Thailand', 'THA', '764'), ('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', '762'), ('TK', 'TOKELAU', 'Tokelau', 'TKL', '772'), ('TL', 'TIMOR-LESTE', 'Timor-Leste', null, null), ('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', '795'), ('TN', 'TUNISIA', 'Tunisia', 'TUN', '788'), ('TO', 'TONGA', 'Tonga', 'TON', '776'), ('TR', 'TURKEY', 'Turkey', 'TUR', '792'), ('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', '780'), ('TV', 'TUVALU', 'Tuvalu', 'TUV', '798'), ('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', '158'), ('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', '834'), ('UA', 'UKRAINE', 'Ukraine', 'UKR', '804'), ('UG', 'UGANDA', 'Uganda', 'UGA', '800'), ('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', null, null), ('US', 'UNITED STATES', 'United States', 'USA', '840'), ('UY', 'URUGUAY', 'Uruguay', 'URY', '858'), ('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', '860'), ('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', '336'), ('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', '670'), ('VE', 'VENEZUELA', 'Venezuela', 'VEN', '862'), ('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', '92'), ('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', '850'), ('VN', 'VIET NAM', 'Viet Nam', 'VNM', '704'), ('VU', 'VANUATU', 'Vanuatu', 'VUT', '548'), ('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', '876'), ('WS', 'SAMOA', 'Samoa', 'WSM', '882'), ('YE', 'YEMEN', 'Yemen', 'YEM', '887'), ('YT', 'MAYOTTE', 'Mayotte', null, null), ('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', '710'), ('ZM', 'ZAMBIA', 'Zambia', 'ZMB', '894'), ('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', '716');
COMMIT;

-- ----------------------------
--  Table structure for `bf_easybook`
-- ----------------------------
DROP TABLE IF EXISTS `bf_easybook`;
CREATE TABLE `bf_easybook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `gbskype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `bf_email_queue`
-- ----------------------------
DROP TABLE IF EXISTS `bf_email_queue`;
CREATE TABLE `bf_email_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `bf_galeri_foto`
-- ----------------------------
DROP TABLE IF EXISTS `bf_galeri_foto`;
CREATE TABLE `bf_galeri_foto` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title_foto` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_desc` text COLLATE latin1_general_ci,
  `file_foto` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_album` int(11) DEFAULT NULL,
  `title_foto_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_desc_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT '3',
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_galeri_foto`
-- ----------------------------
BEGIN;
INSERT INTO `bf_galeri_foto` VALUES ('22', '31', '31', '31.jpg', '362', null, null, '2017-07-03 06:54:16', '1', '1'), ('21', '11', '11', '11.jpg', '362', null, null, '2017-07-03 06:54:16', '1', '1'), ('20', '21', '21', '21.jpg', '362', null, null, '2017-07-03 06:54:16', '1', '1'), ('16', 'galeri_31', 'galeri_31', 'galeri_31.jpg', '360', null, null, '2016-12-20 17:34:49', '1', '1'), ('17', 'galeri_41', 'galeri_41', 'galeri_41.JPG', '360', null, null, '2016-12-20 17:34:54', '1', '1'), ('18', 'galr41', 'galr41', 'galr41.JPG', '363', null, null, '2016-12-20 17:35:52', '1', '1'), ('19', 'galeri41', 'galeri41', 'galeri41.JPG', '363', null, null, '2016-12-20 17:35:52', '1', '1'), ('23', '41', '41', '41.jpg', '362', null, null, '2017-07-03 06:54:16', '1', '1'), ('24', '51', '51', '51.jpg', '362', null, null, '2017-07-03 06:54:17', '1', '1'), ('25', '61', '61', '61.jpg', '362', null, null, '2017-07-03 06:54:17', '1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `bf_link`
-- ----------------------------
DROP TABLE IF EXISTS `bf_link`;
CREATE TABLE `bf_link` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` text COLLATE latin1_general_ci,
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `file` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `deleted` int(10) DEFAULT '0' COMMENT '0:tampil;1:soft elete',
  `urut` int(11) DEFAULT NULL,
  `tipe` varchar(100) COLLATE latin1_general_ci DEFAULT 'link',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_link`
-- ----------------------------
BEGIN;
INSERT INTO `bf_link` VALUES ('117', 'banner4', '', '#', 'LiverUpdate.gif', '0', null, 'Banner Link'), ('115', 'banner2', '', '#', 'IHKS.gif', '0', null, 'Banner Link'), ('116', 'banner3', '', '#', 'karpet2.gif', '0', null, 'Banner Link'), ('114', 'banner1', '', '#', 'BAner-web-JakIncaam1.gif', '0', null, 'Banner Link');
COMMIT;

-- ----------------------------
--  Table structure for `bf_login_attempts`
-- ----------------------------
DROP TABLE IF EXISTS `bf_login_attempts`;
CREATE TABLE `bf_login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `bf_m_kategori`
-- ----------------------------
DROP TABLE IF EXISTS `bf_m_kategori`;
CREATE TABLE `bf_m_kategori` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `gambar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_m_kategori`
-- ----------------------------
BEGIN;
INSERT INTO `bf_m_kategori` VALUES ('43', 'BERITA KEMENDAGRI', 'POLITIK', '', 'post', '1', '', null, null, null, null, null, null), ('74', 'Agenda ', 'Agenda ', '', 'agenda', '0', '', null, null, null, null, null, null), ('75', 'Kerajinan Desa', null, 'Tanga-tangan kreatif dari masyarakat desa', 'produk', '0', null, null, null, null, null, null, null), ('76', 'WIsata Desa', null, 'Tempat Wisata untuk desa', 'produk', '0', null, null, null, null, null, null, null), ('77', 'BERITA NASIONAL', null, '', 'post', '1', null, null, null, null, null, null, null), ('78', 'UNDANG-UNDANG', null, 'Berisi Produk Hukum', 'arsip', '0', null, null, null, null, null, null, null), ('79', 'Perikanan', null, '', 'produk', '0', null, null, null, null, null, null, null), ('80', 'Lainnya', null, '', 'produk', '0', null, null, null, null, null, null, null), ('81', 'BERITA DAERAH', null, '', 'post', '1', null, null, null, null, null, null, null), ('82', 'DARI MENTERI', null, '', 'post', '1', null, null, null, null, null, null, null), ('83', 'SIARAN PERS', null, '', 'post', '1', null, null, null, null, null, null, null), ('84', 'PP PENGGANTI UU', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('85', 'PERATURAN PEMERINTAH', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('86', 'PERATURAN PRESIDEN', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('87', 'INSTRUKSI PRESIDEN', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('88', 'KEPUTUSAN PRESIDEN', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('89', 'PERATURAN MENDAGRI', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('90', 'KEPUTUSAN MENDAGRI', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('91', 'Video Kemendagri', null, '', 'multimedia', '0', null, null, null, null, null, null, null), ('92', 'Media Kemendagri', 'Media Kemendagri', '', 'publikasi', '0', '', null, null, null, null, null, null), ('93', 'ARTIKEL', null, '', 'post', '1', null, null, null, null, null, null, null), ('94', 'INTRUKSI MENTERI', null, '', 'arsip', '0', null, null, null, null, null, null, null), ('95', 'Bahasan Utama ', null, '', 'post', '0', null, null, null, null, null, null, null), ('96', 'Kegiatan', null, '', 'post', '0', null, null, null, null, null, null, null), ('97', 'Kolom', null, '', 'post', '0', null, null, null, null, null, null, null), ('98', 'Artikel Penelitian', null, '', 'post', '0', null, null, null, null, null, null, null), ('99', 'Artikel Konsep', null, '', 'post', '0', null, null, null, null, null, null, null), ('100', 'Artikel Penyegar', null, '', 'post', '0', null, null, null, null, null, null, null), ('101', 'Studi Kasus', null, '', 'post', '0', null, null, null, null, null, null, null), ('102', 'Fokus', null, '', 'post', '0', null, null, null, null, null, null, null), ('103', 'Saripati', null, '', 'post', '0', null, null, null, null, null, null, null), ('104', 'Editorial', null, '', 'post', '0', null, null, null, null, null, null, null), ('105', 'Penyegar Kompetensi', null, '', 'post', '0', null, null, null, null, null, null, null), ('106', 'Hukum dan Etik Kedokteran', null, '', 'post', '0', null, null, null, null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `bf_menu_lokasi`
-- ----------------------------
DROP TABLE IF EXISTS `bf_menu_lokasi`;
CREATE TABLE `bf_menu_lokasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_lok` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tipe_lokasi` int(11) DEFAULT '1' COMMENT '1. Depan, 2. Belakang',
  `list_urutan` int(11) DEFAULT NULL,
  `menu_lok_english` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `flag_hide` int(11) DEFAULT '0' COMMENT '0=show ; 1=hide',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_menu_lokasi`
-- ----------------------------
BEGIN;
INSERT INTO `bf_menu_lokasi` VALUES ('7', 'Top Menu', '1', '1', null, '0');
COMMIT;

-- ----------------------------
--  Table structure for `bf_meta_menu`
-- ----------------------------
DROP TABLE IF EXISTS `bf_meta_menu`;
CREATE TABLE `bf_meta_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_role` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `bf_meta_menu`
-- ----------------------------
BEGIN;
INSERT INTO `bf_meta_menu` VALUES ('90', '1', '0', 'SUPLEMEN', null, '7', '', '0', '0', '#', '0', '', '0', '', null, '0', '0', null, '0'), ('41', '0', '0', 'BERANDA', null, '7', 'home/index', '0', '0', '', '0', '', '0', '', null, '0', '0', null, '0'), ('91', '4', '0', 'KOLOM', null, '7', '', '0', '97', '', '0', '', '0', '', null, '0', '0', null, '0'), ('92', '5', '0', 'ARTIKEL', null, '7', '', '0', '0', '#', '0', '', '0', '', null, '0', '0', null, '0'), ('93', '11', '0', 'DARI REDAKSI', null, '7', '', '0', '0', '#', '0', '', '0', '', null, '0', '0', null, '0'), ('105', '14', '93', 'Hukum dan Etik Kedokteran', null, '7', '', '0', '106', null, '0', '', '0', '', null, '0', '0', null, '0'), ('95', '16', '0', 'FORUM', null, '7', '', '0', '0', '#', '0', '', '0', '', null, '0', '0', null, '0'), ('96', '2', '90', 'BAHASAN UTAMA', null, '7', '', '0', '95', null, '0', '', '0', '', null, '0', '0', null, '0'), ('97', '3', '90', 'KEGIATAN', null, '7', '', '0', '96', null, '0', '', '0', '', null, '0', '0', null, '0'), ('98', '6', '92', 'Artikel Penelitian', null, '7', '', '0', '98', null, '0', '', '0', '', null, '0', '0', null, '0'), ('99', '7', '92', 'Artikel Konsep', null, '7', '', '0', '99', null, '0', '', '0', '', null, '0', '0', null, '0'), ('100', '8', '92', 'Artikel Penyegar', null, '7', '', '0', '100', null, '0', '', '0', '', null, '0', '0', null, '0'), ('101', '9', '92', 'Studi Kasus', null, '7', '', '0', '101', null, '0', '', '0', '', null, '0', '0', null, '0'), ('102', '10', '92', 'Fokus', null, '7', '', '0', '102', null, '0', '', '0', '', null, '0', '0', null, '0'), ('103', '12', '93', 'Saripati', null, '7', '', '0', '103', null, '0', '', '0', '', null, '0', '0', null, '0'), ('104', '13', '93', 'Editorial', null, '7', '', '0', '104', null, '0', '', '0', '', null, '0', '0', null, '0'), ('106', '15', '93', 'Penyegar Kompetensi', null, '7', '', '0', '105', null, '0', '', '0', '', null, '0', '0', null, '0');
COMMIT;

-- ----------------------------
--  Table structure for `bf_multimedia`
-- ----------------------------
DROP TABLE IF EXISTS `bf_multimedia`;
CREATE TABLE `bf_multimedia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` mediumtext COLLATE latin1_general_ci,
  `file_multimedia` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_multimedia` date DEFAULT NULL,
  `author` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `gambar_multimedia` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `multimedia_category` int(11) DEFAULT NULL,
  `judul_english` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_english` mediumtext COLLATE latin1_general_ci,
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_multimedia`
-- ----------------------------
BEGIN;
INSERT INTO `bf_multimedia` VALUES ('32', 'LAWmotion #24 Disabilitas Sebagai Isu Multisektor', 'Disabilitas harus dilihat dari human rights based, bukan charity based. Oleh karena itu, disabilitas hari ini merupakan isu multisektor, bukan hanya sekadar milik sektor sosial yang hanya akan menebalkan stigma yang melekat kepada orang dengan disabilitas. Disabilitas—yang sebelumnya disebut dengan cacat—sudah diatur dalam berbagai peraturan perundang-undangan yang mengatur terkait dengan berbagai sektor, seperti pendidikan, kesehatan, ketenagakerjaan, infrastruktur, transportasi, dan sektor lain. Namun, implementasinya masih jauh dari kejadian. Catatan khusus terhadap persyaratan sehat jasmani dan rohani untuk pengisian jabatan tertentu yang melekatkan disabilitas dalam kondisi tidak sehat jasmani. Padahal, disabilitas bukan penyakit, bahkan belum tentu menghambat seseorang dalam menjalankan tugasnya.', 'https://www.youtube.com/watch?v=cB_Ff4yOXfE', '2017-07-05', 'admin', 'https://i.ytimg.com/vi/cB_Ff4yOXfE/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAxYmuLyoO9RzqT7IG7GRH5w0mf-g', '91', null, null, '1');
COMMIT;

-- ----------------------------
--  Table structure for `bf_pages_meta`
-- ----------------------------
DROP TABLE IF EXISTS `bf_pages_meta`;
CREATE TABLE `bf_pages_meta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `files` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_pages_meta`
-- ----------------------------
BEGIN;
INSERT INTO `bf_pages_meta` VALUES ('60', 'PEJABAT STRUKTURAL', '', 'Admin', '0', '2015-11-28 08:30:20', '2016-05-12 08:50:57', null, '0', null, null, '0', null, null, null, null), ('61', 'STAF DAN KARYAWAN', '<p>A</p>\n', 'Admin', '0', '2016-05-12 08:51:12', null, null, '0', null, null, '0', null, null, null, null), ('62', 'SEJARAH', '<p>Diawali pada Zaman Hindia Belanda sampai tahun 1942, Depdagri disebut Departement van Binnenlands Bestuur yang bidang tugasnya meliputi Jabatan Kepolisian, Transmigrasi, dan Agraria. Selanjutnya pada Zaman pendudukan Jepang (tahun 1942-1945). Departement van Binnenland Bestuur oleh pemerintah Jepang diubah menjadi Naimubu yang bidang tugasnya meliputi juga urusan agama, sosial, kesehatan, pendidikan, pengajaran dan kebudayaan. Naimubu atau Kementrian Dalam Negeri berkantor di Jalan Sagara nomor 7 Jakarta sampai Proklamasi tanggal 17 Agustus 1945.<br />\n<br />\nPada tanggal 19 Agustus 1945 Naimubu dipecah menjadi:<br />\n<br />\na.&nbsp;&nbsp; Kementrian Dalam Negeri termasuk urusan agama, yang dalam perkembangan lebih lanjut urusan agama dilepaskan dari Kementrian Dalam Negeri.<br />\nb.&nbsp;&nbsp;&nbsp; Kementrian Sosial<br />\nc.&nbsp;&nbsp;&nbsp; Kementrian Kesehatan.<br />\nd.&nbsp;&nbsp;&nbsp; Kementrian Pendidikan, pengajaran dan kebudayaan.<br />\n<br />\nKementrian Dalam Negeri yang dibentuk pada saat Kabinet Presidensial yang pertama Negara Republik Indonesia pada tahun 1945.&nbsp;<br />\nDan sejak berdirinya yang bermula dari Kabinet Presidensial sampai dengan Kabinet Gotong Royong sudah sering berganti beberapa menteri yang memegang Jabatan di Kementerian Dalam Negeri.<br />\n<br />\nSumber: BULETIN WARTA PRAJA (Edisi 2 Tahun 2005)</p>\n', 'Admin', '0', '2017-07-03 05:51:12', null, '57', '0', null, null, '0', null, null, null, null), ('63', 'ARTI LOGO/LAMBANG', '<p><strong>Berdasar Permendagri Nomor 1 Tahun 1991</strong><br />\nPegawai Negeri Sipil di lingkungan Kemendagri diharapkan dapat menjadi Aparatur yang bersih dan berwibawa selalu memegang teguh Sapta Prasetya Korpri setia dan taat kepada Pancasila. UUD 1945 Negara dan Pemerintah Republik Indonesia yang diproklamasikan pada tanggal 17-8-1945 dengan dasar Negara Pancasila dan bertekad untuk mempertahankan kejayaan serta mengisi Kemerdekaan dengan meningkatkan kemakmuran Bangsa guna mencapai Masyarakat Adil dan Makmur&nbsp;<br />\nKeterangan :<br />\n<br />\na. Kapas dan daun = 17 buah<br />\nb. Akar gantung beringin 8 buah (4 kiri dan 4 kanan)<br />\nc. Butir padi 45 buah<br />\nd. Akar beringin 5 cabang<br />\ne. Gerumbulan 27 buah<br />\nf. Daun Padi 27 buah<br />\n<br />\nWarna Arti Warna<br />\n<br />\nDasar logo : Biru Tua Biru tua artinya kesetiaan<br />\nKapas : Putih Putih aartinya suci<br />\nBulir padi &amp; daun : Kuning emas Kuning emas artinya kejayaan<br />\nPita : Kuning emas Hijau artinya kemakmuran/kesuburan<br />\nTulisan : Putih</p>\n', 'Admin', '0', '2017-07-03 05:52:09', null, '46', '0', null, null, '0', null, null, null, null), ('64', 'VISI DAN MISI', '<p><strong>V I S I</strong><br />\n<br />\n<br />\n<strong><em>Terwujudnya sistem politik yang demokratis, pemerintahan yang desentralistik, pembangunan daerah yang berkelanjutan, serta keberdayaan masyarakat yang&nbsp;</em></strong><strong><em>partisipatif,</em></strong><em>&nbsp;<strong>dengan didukung</strong></em><strong><em>&nbsp;sumber daya aparatur yang profesional dalam wadah Negara Kesatuan Republik Indonesia</em></strong></p>\n\n<p>Visi tersebut mencerminkan suatu keinginan atau cita-cita untuk menjadi terdepan dalam melanjutkan perjalanan organisasi sebagai motor penggerak perubahan dalam penyelenggaraan pemerintahan dan politik dalam negeri ke arah yang lebih baik, serta cerminan komitmen organisasi sebagai elemen penggerak dan motivator untuk menjadi semakin baik, yang harus disinergikan dengan elemen penggerak lainnya dalam suatu kesisteman yang utuh. Kata kunci dari Visi Kementerian Dalam Negeri tersebut dapat dijelaskan sebagai berikut:<br />\n&nbsp;</p>\n\n<ol>\n	<li><strong>Sistem Politik Demokratis,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya suatu tatanan kehidupan politik dengan meletakkan kedaulatan berada ditangan rakyat yang diwujudkan melalui pengembangan format politik dalam negeri dan pengembangan sistem pemerintahan termasuk sistem penyelenggaraan pemerintahan daerah kearah yang lebih demokratis.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Pemerintahan Desentralistik,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya sistem penyelenggaraan pemerintahan daerah yang efektif dan responsif dengan memperhatikan prinsip-prinsip demokrasi, pemerataan, keadilan, keistimewaan, dan kekhususan suatu daerah dalam Negara Kesatuan Republik Indonesia.<br />\n	&nbsp;</li>\n	<li><strong>Pembangunan Daerah,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya pembangunan daerah yang berkesinambungan melalui peningkatan kemandirian daerah dalam pengelolaan pembangunan yang berbasis wilayah, ekonomi, dan berdaya saing, secara profesional dan berkelanjutan.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Keberdayaan Masyarakat,&nbsp;</strong>merupakan salah satu tujuan yang akan dicapai yaitu terwujudnya keberdayaan masyarakat yang partisipatif yang maju dan mandiri dalam berbagai aspek kehidupan.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Sumber Daya Aparatur yang Profesional&nbsp;</strong>merupakan salah satu prasyarat utama yang harus terpenuhi dalam mencapai tujuan sistem politik yang demokratis, pemerintahan yang desentralistik, pembangunan daerah yang berkelanjutan, serta keberdayaan masyarakat yang partisipatif.&nbsp;<br />\n	&nbsp;</li>\n	<li><strong>Wadah Negara Kesatuan Republik Indonesia&nbsp;</strong>(NKRI) merupakan komitmen, sikap, dan arah yang tegas terhadap penegakkan kesatuan dan persatuan nasional dalam seluruh aspek penyelenggaraan pemerintahan, politik dalam negeri, pembangunan daerah, dan pemberdayaan masyarakat. Hal tersebut sekaligus mewadahi upaya mewujudkan cita-cita bangsa yaitu Masyarakat Ingonesia yang aman, adil, damai, dan sejahtera, yang juga merupakan refleksi visi, misi, dan prioritas kebijakan pembangunan nasional.<br />\n	&nbsp;</li>\n</ol>\n\n<p>&nbsp;<strong>M I S I</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Misi Kementerian Dalam Negeri yang ditetapkan merupakan peran strategik yang diinginkan dalam mencapai visi diatas, yaitu menetapkan kebijaksanaan nasional dan memfasilitasi penyelenggaraan Pemerintahan dalam, upaya:<br />\n&nbsp;</p>\n\n<ol>\n	<li>Memperkuat Keutuhan NKRI, serta memantapkan sistem politik dalam negeri yang demokratis;&nbsp;<br />\n	&nbsp;</li>\n	<li>Memantapkan penyelenggaraan tugas-tugas pemerintahan umum;&nbsp;<br />\n	&nbsp;</li>\n	<li>Memantapkan efektivitas dan efisiensi penyelenggaraan pemerintahan yang desentralistik;&nbsp;<br />\n	&nbsp;</li>\n	<li>Mengembangkan keserasian hubungan pusat-daerah, antar daerah dan antar kawasan, serta kemandirian daerah dalam pengelolaan pembangunan secara berkelanjutan;&nbsp;<br />\n	&nbsp;</li>\n	<li>Memperkuat otonomi desa dan meningkatkan keberdayaan masyarakat dalam aspek ekonomi, sosial, dan budaya; serta<br />\n	&nbsp;</li>\n	<li>Mewujudkan tata pemerintahan yang baik, bersih, dan berwibawa.</li>\n</ol>\n', 'Admin', '0', '2017-07-03 05:52:44', null, '35', '0', null, null, '0', null, null, null, null), ('65', 'TUGAS DAN FUNGSI', '<p>Kementerian Dalam Negeri mempunyai tugas menyelenggarakan urusan pemerintahan dalam negeri untuk membantu Presiden dalam menyelenggarakan pemerintahan negara.<br />\n<br />\nKementerian Dalam Negeri menyelenggarakan fungsi:</p>\n\n<ol>\n	<li>perumusan, penetapan dan pelaksanaan kebijakan dibidang pemerintahan dalam negeri;</li>\n	<li>pengelolaan barang milik/kekayaan negara;</li>\n	<li>pengawasan atas pelaksanaan tugas dibidang pemerintahan dalam negeri; dan</li>\n	<li>pelaksanaan kegiatan teknis dari pusat sampai ke daerah</li>\n</ol>\n', 'Admin', '0', '2017-07-03 05:53:21', null, '31', '0', null, null, '0', null, null, null, null), ('66', 'STRATEGI', '<p>PRINSIP DAN STRATEGI&nbsp;</p>\n\n<p>Dalam rangka mendukung pencapaian Sasaran Prioritas Pembangunan Nasional serta Visi, Misi, Tujuan, dan Sasaran Strategis Kementerian Dalam Negeri Tahun 2010-2014, upaya dan langkah strategik utama adalah &quot;Menjaga dan memperkuat stabilitas penyelenggaraan sistem politik dalam negeri dan sistem pemerintahan dalam negeri&quot;. Stabilitas politik dalam negeri dan pemerintahan dalam negeri adalah parameter pokok kebijakan Kementerian Dalam Negeri yang dilaksanakan secara berkesinambungan sejak periode RPJMN pertama tahun 2004-2009 dalam kerangka RPJPN Tahun 2005-2025.</p>\n\n<p>Sejalan dengan itu, dalam kerangka pencapaian target pembangunan 2010-2014, terdapat prioritas-prioritas khusus yang secara langsung mendukung Program 5 (lima) Tahun (P5T), baik yang secara eksplisit telah termuat dalam RPJMN 2010-2014 maupun yang secara langsung menjadi bagian penugasan kepada Menteri Dalam Negeri. Untuk mewujudkan hal tersebut, digunakan pendekatan berupa prinsip-prinsip:</p>\n\n<ol>\n	<li>Desentralisasi dan Otonomi Daerah, yaitu dengan memperkuat penyelenggaraan pemerintahan daerah guna meningkatkan pelayanan dan hasil-hasil pembangunan untuk kesejahteraan masyarakat;&nbsp;</li>\n	<li>Pembangunan berkelanjutan, yaitu keseluruhan proses pembangunan yang dilakukan saling berkaitan antara kegiatan sebelumya dengan rencana selanjutnya atau antara kegiatan yang satu dengan kegiatan lainnya dalam suatu rangkaian tahapan yang saling terintegrasi;&nbsp;</li>\n	<li>Tata kepemerintahan yang baik, yaitu menerapkan tata pengelolaan yang baik&nbsp;(good governance)&nbsp;guna membentuk birokrasi yang lebih profesional dan berkinerja tinggi yang didukung dengan langkah-Iangkah reformasi birokrasi di lingkungan Kementerian Dalam Negeri.</li>\n</ol>\n\n<p>Strategi pencapaian program tersebut dilaksanakan dalam koridor kebijakan strategik yang merupakan kebijakan prioritas Kementerian Dalam Negeri tahun 2010-2014, yang meliputi:<br />\n&nbsp;</p>\n\n<ol>\n	<li>Menjaga persatuan dan kesatuan serta rnelanjutkan pengembangan sistem politik yang demokratis dan berkedaulatan rakyat, yang didukung oleh situasi dan kondisi yang kondusif.&nbsp;</li>\n	<li>Mendorong pelaksanaan otonomi daerah dan penyelenggaraan pemerintahan yang desentralistik.&nbsp;</li>\n	<li>Mendorong pembangunan daerah yang berkesinambungan, serta meningkatkan keberdayaan dan kemandirian masyarakat dalam pengelolaan pembangunan secara partisipatif.</li>\n	<li>Mendorong penyelenggaraan prinsip-prinsip tata pemerintahan yang baik dan penerapan reformasi birokrasi.</li>\n</ol>\n', 'Admin', '0', '2017-07-03 05:55:29', null, '31', '0', null, null, '0', null, null, null, null), ('67', 'PROGRAM STRATEGIS', '<p><strong>PROGRAM DAN KEGIATAN</strong></p>\n\n<p><strong>Program 1: Pembinaan Kesatuan Bangsa dan Politik (P1)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan memperkokoh kesatuan dan persatuan nasional serta stabilitas politik dalam negeri yang dilandasi oleh semangat dan nilai-nilai Pancasila dan UUD 1945 melalui pengembangan sistem politik yang demokratis dan berkedaulatan rakyat. Pelaksana program adalah Direktorat Jenderal Kesatuan Bangsa dan Politik, melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Kesatuan Bangsa dan Politik;</li>\n	<li>Bina Ideologi dan Wawasan Kebangsaan;</li>\n	<li>Fasilitasi Kewaspadaan Nasional;</li>\n	<li>Fasilitasi Ketahanan Seni, Budaya, Agama, dan Kemasyarakatan;</li>\n	<li>Fasilitasi Politik Dalam Negeri; serta</li>\n	<li>Pembinaan dan Pengembangan Ketahanan Ekonomi.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 2: Penguatan Penyelenggaraan Pemerintahan Umum (P2)</strong></p>\n\n<p>Program inimerupakan program teknis dengan tujuan meningkatkan sinergitas hubungan pusat-daerah dalam penyelenggaraan pemerintahan umum. Pelaksana program adalah Direktorat Jenderal Pemerintahan Umum .melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Pemerintahan Umum;</li>\n	<li>Penyelenggaraan Hubungan Pusat dan Daerah, serta Kerjasama Daerah;</li>\n	<li>Pengembangan dan Penataan Wilayah Administrasi dan Perbatasan;</li>\n	<li>Pembinaan Ketenteraman, Ketertiban dan Perlindungan Masyarakat;</li>\n	<li>Pembinaan dan Pengembangan Kawasan dan Pertanahan; serta</li>\n	<li>Fasilitasi Pencegahan dan Penanggulangan Bencana,<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 3: Penataan Administrasi Kependudukan (P3)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan terciptanya tertib administrasi kependudukan. Pelaksana program adalah Direktorat Jenderal Kependudukan dan Pencatatan Sipil melalui 7 (tujuh) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Kependudukan dan Pencatatan Sipil;</li>\n	<li>Pembinaan Administrasi Pendaftaran Penduduk;</li>\n	<li>Pembinaan Administrasi Pencatatan Sipil;</li>\n	<li>Pengelolaan Informasi Kependudukan;</li>\n	<li>Pengembangan Sistem Administrasi Kependudukan (SAK) Terpadu;</li>\n	<li>Penataan pengembangan Kebijakan Kependudukan; serta</li>\n	<li>Penyerasian Kebijakan dan Perencanaan Kependudukan.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 4: Pengelolaan Desentralisasi Dan Otonomi Daerah (P4)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan meningkatnya pengelolaan penyelenggaran pemerintahan daerah yang desentralistik. Pelaksana program adalah Direktorat Jenderal Otonomi Daerah melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis lainnya Direktorat Jenderal Otonomi Daerah;</li>\n	<li>Penataan Urusan Pemerintahan Daerah lingkup I;</li>\n	<li>Penataan Urusan Pemerintahan Daerah Lingkup II;</li>\n	<li>Penataan Daerah Otonom, Otonomi Khusus, dan DPOD;</li>\n	<li>Fasilitasi KDH, DPRD dan Hubungan Antar Lembaga; serta</li>\n	<li>Pengembangan Kapasitas dan Evaluasi Kinerja Daerah,&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 5: Peningkatan Kapasitas Keuangan Pemerintah Daerah (P5)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan meningkatkan akuntabilitas, transparansi dan tertib administrasi pengelolaan keuangan daerah serta meningkatnya investasi dan kemampuan fiskal daerah. Pelaksana program adalah Direktorat Keuangan Daerah melalui 5 (lima) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Keuangan Daerah;</li>\n	<li>Pembinaan Anggaran Daerah;</li>\n	<li>Pembinaan Pengelolaan Pendapatan Daerah dan Investasi Daerah;</li>\n	<li>Pembinaan dan Fasilitasi Dana Perimbangan; serta</li>\n	<li>Pembinaan Pelaksanaan dan Pertanggungjawaban Keuangan Daerah.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 6: Bina Pembangunan Daerah (P6)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan terciptanya pertumbuhan pembangunan di daerah, serta keseimbangan pembangunan antar daerah yang didukung oleh efektivitas kinerja pemerintah daerah. Pelaksana program adalah Direktorat Bina Pembangunan Daerah melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Direktorat Jenderal Bina Pembangunan Daerah;</li>\n	<li>Fasilitasi Perencanaan Pembangunan Daerah;</li>\n	<li>Fasilitasi Pengembangan Wilayah Terpadu;</li>\n	<li>Fasilitasi Penataan Ruang Daerah dan Lingkungan Hidup di Daerah;</li>\n	<li>Fasilitasi Peningkatan Pertumbuhan Ekonomi Daerah; serta</li>\n	<li>Fasilitasi Penataan Perkotaan.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 7: Pemberdayaan Masyarakat dan Pemerintahan Desa (P7)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan mewujudkan otonomi desa dan meningkatkan keberdayaan masyarakat dalam aspek ekonomi, sosial dan budaya. Pelaksana program adalah Direktorat Jenderal Pemberdayaan Masyarakat dan Desa melalui 8 (delapan) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajamen dan Dukungan Teknis Lainnya Direktorat Jenderal Pemberdayaan Masyarakat dan Desa;</li>\n	<li>Peningkatan Kapasitas Penyelenggaraan Pemerintahan Desa dan Kelurahan;</li>\n	<li>Peningkatan Kapasitas Kelembagaan dan Pelatihan Masyarakat;</li>\n	<li>Fasilitasi Pemberdayaan Adat dan Sosial Budaya Masyarakat;</li>\n	<li>Pengembangan Usaha Ekonomi Masyarakat;</li>\n	<li>Fasilitasi Pengelolaan Sumber Daya Alam dan Teknologi Tepat Guna;</li>\n	<li>Peningkatan Kemandirian Masyarakat Perdesaan (PNPM-MP); serta</li>\n	<li>Peningkatan Keberdayaan Masyarakat dan Desa lingkup Regional.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 8: Pendidikan Kepamongprajaan (P8)</strong></p>\n\n<p>Program ini merupakan program teknis dengan tujuan meningkatkan kapasitas SDM aparatur lingkup Kementerian Dalam Negeri dan pemerintah daerah melalui pendidikan kepamongprajaan. Pelaksana program adalah Institut Pemerintahan Dalam Negeri melalui 4 (empat) kegiatan yaitu:</p>\n\n<ol>\n	<li>Penyelenggaraan Akademik, Administrasi, Perencanaan dan Kerjasama Pendidikan Kepamongprajaan;</li>\n	<li>Pengelolaan Administrasi Umum dan Keuangan Pendidikan Kepamongprajaan;</li>\n	<li>Penyelenggaraan Administrasi Keprajaan dan Kemahasiswaan; serta</li>\n	<li>Pelaksanaan Pendidikan Kepamongprajaan dan Administrasi Kampus IPDN Daerah.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 9: Pengawasan dan Peningkatan Akuntabilitas Aparatur Kementerian Dalam Negeri (P9)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan akuntabilitas dan transparansi dalam penyelenggaraan pemerintahan Iingkup Kementerian Dalam Negeri dan pemerintah daerah. Pelaksana program adalah Inspektorat Jenderal melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Inspektorat Jenderal;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah I;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah II;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah III;</li>\n	<li>Penyelenggaraan Pemeriksaan Akuntabilitas dan Pengawasan Fungsional Wilayah IV; serta</li>\n	<li>Penyelenggaraan Pemeriksaan, Pengusutan, Pengujian Kasus dan Pengaduan Khusus.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 10: Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya Kementerian Dalam Negeri (P10)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan kualitas dukungan manajemen dan dukungan pelayanan teknis lainnya Kementerian Dalam Negeri. Pelaksana program adalah Sekretariat Jenderal melalui 10 (sepuluh) kegiatan yaitu:</p>\n\n<ol>\n	<li>Perencanaan Program dan Anggaran;</li>\n	<li>Pembinaan dan Pengelolaan Administrasi Kepegawaian;</li>\n	<li>Penataan Kelembagaan, Ketatalaksanaan, Analisis Jabatan, dan Pelaporan Kinerja;</li>\n	<li>Penataan Produk Hukum dan Pelayanan Bantuan Hukum;</li>\n	<li>Pengelolaan Ketatausahaan, Rumah Tangga, dan Keprotokolan;</li>\n	<li>Pengelolaan Data, Informasi, Komunikasi dan Telekomunikasi;</li>\n	<li>Pengelolaan Penerangan;</li>\n	<li>Pengkajian Kebijakan Strategik;</li>\n	<li>Penataan Administrasi Kerjasama Luar Negeri; serta</li>\n	<li>Pengelolaan Administrasi Keuangan dan Aset.<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 11: Peningkatan Sarana dan Prasarana Aparatur Kementerian Dalam Negeri (P11 )</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan kinerja aparatur melalui dukungan sarana dan prasarana kerja. Pelaksana program adalah Sekretariat Jenderal melalui kegiatan yaitu Peningkatan dan Pengelolaan Sarana dan Prasarana Aparatur.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Program 12: Penelitian dan Pengembangan Kementerian Dalam Negeri (P12)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan kualitas penyusunan dan implementasi kebijakan Kementerian Dalam Negeri. Pelaksana program adalah Badan Penelitian dan Pengembangan melalui 5 (lima) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Badan Penelitian dan Pengembangan;</li>\n	<li>Penelitian dan Pengembangan Bidang Kesatuan Bangsa, Politik, dan Otonomi Daerah;</li>\n	<li>Penelitian dan Pengembangan Bidang PUM dan Kependudukan;</li>\n	<li>Penelitian dan Pengembangan Bidang Pemerintahan Desa dan Pemberdayaan Masyarakat; serta</li>\n	<li>Penelitian dan Pengembangan Bidang Pembangunan dan Keuangan Daerah.&nbsp;<br />\n	&nbsp;</li>\n</ol>\n\n<p><strong>Program 13: Pendidikan dan Pelatihan Aparatur Kementerian Dalam Negeri (P13)</strong></p>\n\n<p>Program ini merupakan program generik dengan tujuan meningkatkan meningkatkan kapasitas SDM aparatur lingkup Kementerian Dalam Negeri dan pemerintah daerah melalui dukungan pendidikan dan pelatihan. Pelaksana program adalah Badan Pendidikan dan Pelatihan melalui 6 (enam) kegiatan yaitu:</p>\n\n<ol>\n	<li>Dukungan Manajemen dan Dukungan Teknis Lainnya Badan Pendidikan dan Pelatihan;</li>\n	<li>Pendidikan dan Pelatihan Manajemen dan Kepemimpinan Pemerintahan Daerah;</li>\n	<li>Pendidikan dan Pelatihan Manajemen Pembangunan Kependudukandan Keuangan Daerah;</li>\n	<li>Pendidikan dan Pelatihan Struktural dan Teknis;</li>\n	<li>Pembinaan Jabatan Fungsional dan Standarisasi Diklat; serta</li>\n	<li>Pendidikan dan Pelatihan Regional.</li>\n</ol>\n', 'Admin', '0', '2017-07-03 05:56:00', null, '15', '0', null, null, '0', null, null, null, null), ('68', 'STRUKTUR ORGANISASI', '<p><a href=\"http://www.kemendagri.go.id/media/filemanager/2015/11/05/s/o/sotk_flash8_rev3.swf\"><img alt=\"\" height=\"400\" src=\"http://www.kemendagri.go.id/media/images/2015/08/18/n/e/new-image-sotk.jpg\" width=\"600\" /></a></p>\n', 'Admin', '0', '2017-07-03 05:58:09', null, '8', '0', null, null, '0', null, null, null, null), ('69', 'PROFIL PIMPINAN', '<p>Gamawan Fauzi (lahir di Solok, Sumatera Barat, 9 November 1957; umur 51 tahun) adalah Menteri Dalam Negeri Indonesia sejak 22 Oktober 2009. Sebelumnya ia menjabat sebagai Gubernur Sumatra Barat sejak 15 Agustus 2005 hingga 22 Oktober 2009. Lulusan Fakultas Hukum dan Magister Manajemen Universitas Andalas, Padang, Sumatera Barat ini adalah penerima Bung Hatta Award atas keberhasilannya memerangi korupsi pada saat menjadi bupati Solok. Bpk. Gamawan Fauzi yang terkenal dengan good, clean, eficien goovernance ini telah memiliki 2 orang putri dan satu orang putra buah perkawinanya dengan Ny. Vita Gamawan Fauzi .<br />\n<br />\nRiwayat Pendidikan<br />\nMM (Magister Manajemen) Universitas Andalas, Padang<br />\nSH (Sarjana Hukum) Universitas Andalas, Padang<br />\n<br />\nRiwayat Pekerjaan<br />\n- Mentri Dalam Negeri Kabinet Indonesia Bersatu II (2009-sekarang)<br />\n- Gubernur Sumatera Barat (2005-2009)<br />\n- Bupati Solok (1995-2000), (2000-2005)<br />\n- KaBiro Humas Pemprov Sumatera Barat<br />\n- Sekretaris Pribadi Gubernur Sumatera Barat</p>\n', 'Admin', '0', '2017-07-03 05:58:57', null, '2', '0', null, null, '0', null, null, null, null), ('70', 'KONTAK', '<p><span style=\"font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;\">PUSAT DATA, INFORMASI, KOMUNIKASI DAN TELEKOMUNIKASI KEMENTERAIAN DALAM NEGERI REPUBLIK INDONESIA</span><br style=\"font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;\" />\n<br style=\"font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;\" />\n<br style=\"font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;\" />\n<span style=\"font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;\">Jl. Medan Merdeka Utara No. 7, Jakarta Pusat</span><br style=\"font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;\" />\n<span style=\"font-family: &quot;Droid Sans&quot;, sans-serif; font-size: 12px;\">Telp. (021) 345 0038</span></p>\n', 'Admin', '0', '2017-07-06 03:37:44', '2017-07-06 03:37:57', '6', '0', null, null, '0', null, null, null, null), ('71', 'Tes 1', '<p>lorem ipsum dolor sitamet</p>\n', 'Admin', '0', '2017-07-17 05:55:30', null, '1', '0', null, null, '0', null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `bf_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `bf_permissions`;
CREATE TABLE `bf_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_permissions`
-- ----------------------------
BEGIN;
INSERT INTO `bf_permissions` VALUES ('2', 'Site.Content.View', 'Allow users to view the Content Context', 'active'), ('3', 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'), ('4', 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'), ('5', 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'), ('6', 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'), ('7', 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'), ('8', 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'), ('9', 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'), ('10', 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'), ('11', 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'), ('12', 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'), ('13', 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'), ('14', 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'), ('15', 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'), ('16', 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'), ('17', 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'), ('18', 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active'), ('19', 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'), ('20', 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'), ('21', 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'), ('22', 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'), ('24', 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'), ('25', 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'), ('27', 'Activities.Own.View', 'To view the users own activity logs', 'active'), ('28', 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'), ('29', 'Activities.User.View', 'To view the user activity logs', 'active'), ('30', 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'), ('31', 'Activities.Module.View', 'To view the module activity logs', 'active'), ('32', 'Activities.Module.Delete', 'To delete the module activity logs', 'active'), ('33', 'Activities.Date.View', 'To view the users own activity logs', 'active'), ('34', 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'), ('35', 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'), ('36', 'Bonfire.Settings.View', 'To view the site settings page.', 'active'), ('37', 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'), ('38', 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'), ('39', 'Bonfire.Database.View', 'To view the Database menu.', 'active'), ('40', 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'), ('41', 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active'), ('42', 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'), ('43', 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'), ('44', 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'), ('45', 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'), ('46', 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active'), ('49', 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'), ('50', 'Bonfire.Roles.Add', 'To add New Roles', 'active'), ('51', 'Pages.Content.View', '', 'active'), ('52', 'Pages.Content.Create', '', 'active'), ('53', 'Pages.Content.Edit', '', 'active'), ('58', 'Site.Theme.View', 'Allow user to view the Theme Context.', 'active'), ('59', 'Menuthemes.Theme.View', '', 'active'), ('60', 'CreateLocation.Theme.View', '', 'active'), ('61', 'Post.Content.View', '', 'active'), ('62', 'Post.Content.Create', '', 'active'), ('63', 'Post.Content.Edit', '', 'active'), ('64', 'Post.Content.Delete', '', 'active'), ('65', 'Kategori.Content.View', '', 'active'), ('66', 'Kategori.Content.Create', '', 'active'), ('67', 'Kategori.Content.Edit', '', 'active'), ('68', 'Kategori.Content.Delete', '', 'active'), ('69', 'Templates.Theme.View', '', 'active'), ('70', 'Templates.Theme.Create', '', 'active'), ('71', 'Templates.Theme.Delete', '', 'active'), ('72', 'Templates.Theme.Edit', '', 'active'), ('81', 'Slide.Plugin.View', '', 'active'), ('82', 'Slide.Plugin.Create', '', 'active'), ('83', 'Slide.Plugin.Edit', '', 'active'), ('84', 'Slide.Plugin.Delete', '', 'active'), ('192', 'Link.Plugin.View', '', 'active'), ('193', 'Link.Plugin.Create', '', 'active'), ('194', 'Link.Plugin.Edit', '', 'active'), ('195', 'Link.Plugin.Delete', '', 'active'), ('201', 'Polling.Plugin.View', '', 'active'), ('202', 'Polling.Plugin.Create', '', 'active'), ('203', 'Polling.Plugin.Edit', '', 'active'), ('204', 'Polling.Plugin.Delete', '', 'active'), ('205', 'Testimoni.Plugin.View', '', 'active'), ('206', 'Testimoni.Plugin.Approve', '', 'active'), ('208', 'Agenda.Plugin.View', '', 'active'), ('209', 'Agenda.Plugin.Create', '', 'active'), ('210', 'Agenda.Plugin.Edit', '', 'active'), ('211', 'Agenda.Plugin.Delete', '', 'active'), ('220', 'Arsip.Plugin.View', '', 'active'), ('221', 'Arsip.Plugin.Create', '', 'active'), ('222', 'Arsip.Plugin.Delete', '', 'active'), ('223', 'Arsip.Plugin.Edit', '', 'active'), ('228', 'Galerifoto.Plugin.View', '', 'active'), ('229', 'Galerifoto.Plugin.Create', '', 'active'), ('230', 'Galerifoto.Plugin.Edit', '', 'active'), ('231', 'Galerifoto.Plugin.Delete', '', 'active'), ('234', 'Multimedia.Plugin.View', '', 'active'), ('235', 'Multimedia.Plugin.Create', '', 'active'), ('236', 'Multimedia.Plugin.Edit', '', 'active'), ('237', 'Multimedia.Plugin.Delete', '', 'active'), ('238', 'Scrolltext.Plugin.View', '', 'active'), ('239', 'Scrolltext.Plugin.Create', '', 'active'), ('240', 'Scrolltext.Plugin.Edit', '', 'active'), ('241', 'Scrolltext.Plugin.Delete', '', 'active'), ('242', 'Publikasi.Plugin.View', '', 'active'), ('243', 'Publikasi.Plugin.Create', '', 'active'), ('244', 'Publikasi.Plugin.Edit', '', 'active'), ('245', 'Publikasi.Plugin.Delete', '', 'active');
COMMIT;

-- ----------------------------
--  Table structure for `bf_polling`
-- ----------------------------
DROP TABLE IF EXISTS `bf_polling`;
CREATE TABLE `bf_polling` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab4` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jawab5` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `flag_polling` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_polling`
-- ----------------------------
BEGIN;
INSERT INTO `bf_polling` VALUES ('1', 'Setujukah anda dengan demonstrasi yang hampir mengambil bahu jalan?', 'Setuju', 'Agak Setuju', 'Tidak Setuju', 'Kurang Setuju', 'Tidak Tahu', '1');
COMMIT;

-- ----------------------------
--  Table structure for `bf_polling_count`
-- ----------------------------
DROP TABLE IF EXISTS `bf_polling_count`;
CREATE TABLE `bf_polling_count` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_polling` int(10) DEFAULT '0',
  `jawab1` int(10) DEFAULT '0',
  `jawab2` int(10) DEFAULT '0',
  `jawab3` int(10) DEFAULT '0',
  `jawab4` int(10) DEFAULT '0',
  `jawab5` int(10) DEFAULT '0',
  `ip_address` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_polling_count`
-- ----------------------------
BEGIN;
INSERT INTO `bf_polling_count` VALUES ('16', '2', '1', '0', '1', '0', '0', '127.0.0.1', '2016-08-29'), ('17', '1', '1', '0', '0', '0', '1', '::1', '2017-07-04');
COMMIT;

-- ----------------------------
--  Table structure for `bf_post_meta`
-- ----------------------------
DROP TABLE IF EXISTS `bf_post_meta`;
CREATE TABLE `bf_post_meta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `identifier` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_post_meta`
-- ----------------------------
BEGIN;
INSERT INTO `bf_post_meta` VALUES ('1', 'Indonesia Menghadapi Beban Ganda Malnutrisi', 'Permasalahan gizi di Indonesia seakan tidak ada habisnya. Indonesia masih memiliki beban untuk mengentaskan stunting dan wasting yang masih tinggi. Di saat yang sama, Indonesia memiliki masalah baru, yakni angka prevalensi obesitas yang juga terus meningkat. Hal ini membuat Indonesia memiliki masalah undernutrition dan overnutritiondalam waktu bersamaan atau yang disebut dengan double burden of malnutrition atau beban ganda malnutrisi. Beban ganda malnutrisi ini dapat terjadi di tingkat individu, rumah tangga, dan populasi di sepanjang daur kehidupan manusia.', '<p>Permasalahan gizi di Indonesia seakan tidak ada habisnya. Indonesia masih memiliki beban untuk mengentaskan&nbsp;<em>stunting dan wasting</em>&nbsp;yang masih tinggi. Di saat yang sama, Indonesia memiliki masalah baru, yakni angka prevalensi obesitas yang juga terus meningkat. Hal ini membuat Indonesia memiliki masalah&nbsp;<em>undernutrition</em>&nbsp;dan&nbsp;<em>overnutrition</em>dalam waktu bersamaan atau yang disebut dengan&nbsp;<em>double burden of malnutrition</em>&nbsp;atau beban ganda malnutrisi. Beban ganda malnutrisi ini dapat terjadi di tingkat individu, rumah tangga, dan populasi di sepanjang daur kehidupan manusia.</p>\n\n<p><br />\nBerdasarkan data Riset Kesehatan Dasar (Riskesdas) tahun 2013, prevalensi balita stunting di Indonesia mencapai 37,2%, meningkat dari tahun 2010(35,6%) dan tahun 2007 (36,8%). Artinya, ada sekitar 8 juta anak di Indonesia yang mengalami stunting atau 1 dari 3 orang anak memiliki tinggi badan di bawah yang seharusnya. Prevalensi stunting di Indonesia lebih tinggi dibandingkan dengan beberapa negara tetangga, seperti Myanmar (35%), Vietnam (23%), dan Thailand (16%). Bahkan, Indonesia menempati peringkat kelima sebagai negara dengan prevalensi stunting tertinggi di dunia. Selain stunting, prevalensi balita wasting di Indonesia juga masih tinggi, yakni 12,1%. Di saat bersamaan, prevalensi balita overweight di Indonesia juga terus meningkat. Berdasarkan data Riskesdas 2013, prevalensi overweight di Indonesia mencapai 11,9%. Indonesia term suk di dalam 17 negara di dunia yang memiliki ketiga masalah gizi tersebut dalam waktu bersamaan. Tingginya prevalensi malnutrisi, baik undernutrition maupun overnutrition, menunjukkan bahwa beban ganda malnutrisi di Indonesia sudah cukup memprihatinkan. Wasting atau kurus merupakan salah satu masalah kurang gizi jangka pendek dimana berat badan tidak sesuai dengan tinggi badannya (BB/TB). Sedangkan stunting merupakan masalah kekurangan gizi kronis atau jangka panjang yang disebabkan oleh asupan gizi yang tidak adekuat sesuai dengan kebutuhannya dalam waktu yang lama. Stunting yang terjadi saat masih berada di dalam kandungan baru akan nampak saat anak berusia dua tahun.</p>\n\n<p>Dampak dari beban ganda malnutrisi ini sangat serius dan manifestasinya dapat dilihat di sepanjang kehidupan seseorang. Kekurangan gizi pada anakanak<br />\ndapat mulai terjadi pada tahap sangat awal kehidupan. Saat seorang anak menerima asupan gizi yang kurang baik saat masih dalam kandungan, tubuhnya akan beradaptasi agar dapat bertahan hidup dalam kondisi gizi yang kurang. Akibatnya, apabila nantinya ia hidup dalam lingkungan dengan asupan gizi yang mudah diperoleh, tubuhnya akan sangat rentan terhadap obesitas sehingga mudah terkena penyakit tidak menular, seperti penyakit diabetes melitus dan jantung. Disinilah letak permas alahan beban ganda malnutrisi. Lebih lanjut, stunting sebagai pe nanda kekurangan gizi kronis juga berdampak terhadap perkembangan kognitif. Hal ini dikarenakan pada seseorang yang mengalami stunting, proses-proses lain di dalam tubuh juga terhambat, salah satunya adalah pertumbuhan otak yang berdampak pada kecerdasan. Dalam jangka panjang, berbagai studi menunjukkan bahwa stunting berpotensi mengurangi skor IQ sebesar 5-11 poin dan nilai-nilai sekolahnya juga lebih rendah dibandingkan dengan yang tidak mengalami stunting. Selain itu, anak yang lahir dengan berat badan kurang, memiliki peluang 2,6 kali lebih kecil untuk melanjutkan ke pendidikan tinggi. Oleh karena itu, permasalahan stunting tidak hanya berhenti pada tubuh yang pendek saja. Berdasarkan data yang dirilis oleh World Bank, produktivitas seseorang yang mengalami stunting saat masih kecil ternyata lebih rendah dibandingkan dengan yang tidak. Hal ini sejalan dengan capaian pendidikan yang lebih rendah. Masalah akan semakin parah apabila pola makan tidak diatur dengan baik saat dewasa yang dapat menimbulkan berbagai macam penyakit tidak menular.</p>\n\n<p>Dampak beban ganda malnutrisi tidak hanya dirasakan oleh individu. Dari segi ekonomi, kerugian akibat stunting dan malnutrisi diperkirakan setara dengan 2-3% PDB Indonesia. Banyaknya kasus penyakit tidak menular di Indonesia berakibat pada meningkatnya pengeluaran pemerintah, khususnya untuk Jaminan Kesehatan Nasional (JKN). Penyakit tidak menular, seperti stroke, diabetes melitus, dan gagal ginjal, kini menjadi penyebab 60% kematian di Indonesia dan pembiayaan JKN untuk kasus penyakit tidak menular ini merupakan salah satu yang terbesar.</p>\n\n<p>&nbsp;</p>\n\n<h3>Faktor yang Mempengaruhi Beban Ganda Malnutrisi</h3>\n\n<p>Banyak orang tua yang seolah memaklumi anaknya mengalami stunting karena masalah keturunan. Para orang&nbsp; tua ini seolah menganggap wajar jika orang tuanya pendek maka anaknya juga pendek. Padahal, sebenarnya stunting merupakan masalah gizi yang dapat dicegah sejak dalam kandungan. Oleh karena itu, seorang ibu memegang peran n penting dalam memutus lingkaran setan malnutrisi ini. Ibu hamil yang mengalami kekurangan gizi, misalny a kekurangan energi kronis (KEK) dan anemia defisiensi besi, berpotensi untuk melahirkan bayi dengan bayi yang kurus dan pendek. Jika hal ini tidak diperbaiki pada 2 tahun pertama kehidupannya, kekurangan ini dapat menja di permanen dan mempengaruhi perkembangan kognitif dan meningkatkan risiko penyakit tidak menular di kemudian hari.</p>\n\n<p>Selain karena faktor individu, permasalahan beban ganda malnutrisi disebabkan oleh berbagai faktor lainnya. Studi yang dilakukan oleh World Bank menyebutkan setidaknya ada empat faktor utama yang mempengaruhi. Pertama, meningkatnya usia harapan hidup yang berkontribusi terhadap perubahan pola penyakit dari penyakit menular menjadi penyakit tidak menular. Kedua, naiknya kekayaan nasional&nbsp; yang disertai naiknya ketersediaan makanan membuat konsumsi lemak perkapita naik dua kali lipat. Konsumsi makanan olahan juga terus meningkat, khususnya di wilayah perkotaan. Ketiga, banyak kota tidak ramah bagi pejalan kaki sehingga tidak mendukung aktivitas fisik. Selain itu, tempat-tempat yang menyediakan makanan sehat terbatas. Orang yang bekerja dan sekolah tidak punya banyak pilihan selain makanan siap saji di luar rumah. Terakhir, budaya dan trasisi yang mempengaruhi gizi ibu hamil dan anak-anak, serta norma sosial membuat perempuan menikah saat masih muda. Faktor-faktor ini berkonberkontribusi terhadap naiknya kasus kelahiran dengan berat badan kurang.</p>\n\n<p><br />\nMenurunkan prevalensi stunting, wasting, dan obesitas merupakan salah satu goal dalam Sustainable Development Goals (SDGs) yang seharusnya dapat dicapai di tahun 2030. Mengurangi prevalensi malnutrisi ini sangat penting dalam mencapai tujuan tersebut. Program intervensi kesehatan pada ibu hamil dan 2 tahun pertama kehidupan anak mutlak diperlukan. Hal ini dikarena kan 2 tahun pertama merupakan window of opportunity untuk mengatasi stunting dapat diintervensi dari sejak dalam kandungan dan pola asuh yang baik selama 2 tahun pertama. Selain itu, World Health Organization (WHO) menyebutkan bahwa perbaikan gizi sangat diperlukan untuk meningkatkan derajat kesehatan dan juga untuk mengembang kan perekonomian. Oleh karena itu, dalam mengatasai berbagai penyebab malnutrisi diperlukan pendekatan yang holistik dari berbagai sektor. Salah satunya adalah penyediaan air bersih. Sanitasi yang baik sangat diperlukan dalam meningkatkan status gizi seseorang.</p>\n\n<p>Hari Gizi Nasional dan Investasi Gizi di Indonesia</p>\n\n<p>Setiap tanggal 25 Januari diperingati sebagai Hari Gizi Nasional. Peringatan ini dapat dijadikan momentum untuk mengingat bahwa masih banyaknya permasalahan gizi di Indonesia yang masih harus diselesaikan. Salah satunya adalah masalah beban ganda malnutrisi ini. Sudah saatnya isu gizi menjadi salah<br />\nsatu prioritas dalam rencana pembangunan, baik yang dilaksanakan oleh pemerintah pusat maupun pemerintah daerah. Pemerintah seharusnya dapat menjamin setiap warganya, terutama anak balita, ibu hamil, dan lansia mendapatkan akses gizi yang baik. Negara harus hadir sebagai penjamin terpenuhi -<br />\nnya hak pangan hingga di tingkat individu, seperti yang diamanah kan UU No 18/2012 tentang Pangan. Hal tersebut dapat dilakukan lewat bera gam aksi,</p>\n\n<p><br />\nseperti revitalisasi posyandu, bantuan pangan bagi balita dan ibu hamil, program pemberian makanan tambahan anak sekolah, subsidi dan stabilisasi harg a<br />\npangan, dan diversivikasi pangan lokal. Investasi di bidang gizi sifatnya jangka panjang. Selama ini, gizi memang hanya dianggap sebagian kecil dari berbagai urusan kesehatan sehingga kita sering berpikir sempit dan jangka pendek. Kita kurang sekali menghargai masa depan. Oleh karena itu, yang diperlukan tidak hanya komitmen pendanaan dari birokrat dan politisi, tapi juga jaminan keberlanjutan aneka program pembangunan gizi. Selain itu, gizi perlu menjadi indikator keberhasilan pembangunan yang tidak terlepas dari program pengentasan kemiskinan. Dengan berbagai langkah itu, kita dapat</p>\n\n<p><br />\nmencegah lahirnya generasi yang malnutrisi.&nbsp; (NF)</p>\n', '95', 'afa251e84de85036d80a882b8b72751e.jpg', null, 'Admin', '0', '0', '', null, '2017-08-28 16:36:54', '0', '5', 'full', null, null, null, 'N', null, null, null, 'article/2017/08/afa251e84de85036d80a882b8b72751e.jpg', 'Indonesia-Menghadapi-Beban-Ganda-Malnutrisi'), ('2', 'The 1st Natural Wellness Symposium', 'Sementara itu, menurut Survei Sosial Ekonomi Nasional 2001, sebanyak 57,7% penduduk Indonesia melakukan pengobatan sendiri, 31,7% menggunakan obat tradisional, dan 9,8% memilih cara  pe-ngobat­an tradisional. Sedangkan pada 2004 penduduk Indonesia yang melakukan pengobatan sendiri meningkat menjadi 72,44 %, di mana 32,87% di antaranya menggunakan obat tradisional.', '<div>Sementara itu, menurut Survei Sosial Ekonomi Nasional 2001, sebanyak 57,7% penduduk Indonesia melakukan pengobatan sendiri, 31,7% menggunakan obat tradisional, dan 9,8% memilih cara&nbsp; pe-ngobat&shy;an tradisional. Sedangkan pada 2004 penduduk Indonesia yang melakukan pengobatan sendiri meningkat menjadi 72,44 %, di mana 32,87% di antaranya menggunakan obat tradisional.</div>\n\n<p>Potensi alam Indonesia yang begitu kaya dan telah meng&shy;guna&shy;kan obat tradisional berpuluh-puluh tahun tentu saja harus terus dikembangkan melalui penelitian-penelitian atau uji klini&shy;s berkelanjutan, mulai dari pe&shy;milihan bibit , proses penanaman, saat panen, pasca-panen hingga fitofarmaka sehingga para dokter tanpa ragu dapat jug&shy;a menggunakan obat-obatan berbahan dasar herbal, baik da&shy;lam tahap promotif, preventif, kuratif, maupun paliatif.</p>\n\n<p>PT SOHO Global Health yang merupakan metamorfosa dari PT SOHO Group merupakan pelopor obat berbahan dasar herbal selama bertahun-tahun yang memfokuskan diri pada pengembangan bahan alam untu&shy;k masyarakat Indonesia yang lebih baik dengan inovasi-inovasi yang terus dilakukan, baik lokal maupun internasional. Perusahaan ini mempunyai visi Indonesia lebih sehat dan lebih alami. Salah satu bentuk komit&shy;men&shy;nya adalah dengan meng&shy;adakan seminar bagi para dokte&shy;r bertajuk&nbsp;<em>The 1</em><em>stNatural Wellness Symposium&nbsp;</em>yang diseleng&shy;garakan di 7 kota, yaitu Jakarta, Semarang, Makasar, Medan, Bandung, dan Surabaya.&nbsp;<em>The 1</em><em>st&nbsp;Natural Wellness Symposium</em>Surabaya dilaksana&shy;kan pada 22 Juni 2014, di Grand City Convention &amp; Exhibition Centre.&nbsp; Simposium ini dikemas dengan begitu lengkap, menghadirkan narasumber yang ahli di bidangnya, dan memper&shy;ke&shy;nal&shy;kan produk-produk unggu-lan yang telah memiliki&nbsp;<em>evidence based.</em>&nbsp;Dalam simposium ter&shy;sebu&shy;t, dibahas mengenai pe- ng&shy;obatan komplementer dan alternatif, manfaat Astaxanthin bagi kesehatan, pengobatan jaringan parut dan inovasinya, manfaat BioCurcumin, hemostatik alami untuk luka dan&nbsp;&nbsp; imunomodulator dalam penya&shy;kit infeksi, manfaat Fucoidan dalam pengobatan gastritis kronis, D-Ribose sebagai inti energi, serta terapi suportif alami untuk tuberkulosis.</p>\n\n<p>Karena komitmennya juga, pelopor obat berbahan dasar herbal ini mendapatkan rekor dari Museum Rekor Indonesia (MURI). Beberapa produk obat berbahan dasar herbal yang dihasilkannya antara lain Asthin Group, Dermakel dan Dermakel kids, Ginsana,Viatril-S, Fucoidan 100, Solac, Enercore, Stobled, BioCurliv, Imboost Force, BioCurkem, Noroid, Fortibi, DEHA-F, Curvit, Pediagrow, Curvit Cl, dan masih banyak lagi. Produk-produk tersebut dikelompokkan kedalam imuno&shy;modulator, multivitamin, cancer, antioksidan dan nutrisi, muskuloskeletal dan bedah, ophtalmologi, gastroenterohepatologi, kebidanan dan kandungan, endok&shy;rinologi dan metabolik, serta neurologi.&nbsp;<strong>(Nisa)</strong></p>\n', '96', '', null, 'Admin', '0', '0', null, null, '2017-08-28 16:38:43', '0', null, 'none', null, null, null, 'N', null, null, null, null, 'The-1st-Natural-Wellness-Symposium'), ('3', 'Vaksinasi Herpes Zoster untuk Hari Tua Berkualitas', 'Lalu, seberapa besar beban herpes zoster di Indonesia dan bagaimana upaya pence­gaha­n yang dapat dilakukan? Jawabannya dibahas dalam acara Zostavax Launch Sympo­sium bertema Herpes Zoster: Stop it Before it Starts yang diadaka­n pada 21 Juni 2014, di Blitz Megaplex Grand Indonesia Shopping Town, Jakarta. Sebagai moderator simposium', '<p>Lalu, seberapa besar beban herpes zoster di Indonesia dan bagaimana upaya pence&shy;gaha&shy;n yang dapat dilakukan? Jawabannya dibahas dalam acara Zostavax Launch Sympo&shy;sium bertema Herpes Zoster: Stop it Before it Starts yang diadaka&shy;n pada 21 Juni 2014, di Blitz Megaplex Grand Indonesia Shopping Town, Jakarta. Sebagai moderator simposium adalah dr. Arya Govinda Roosheroe, SpPD-Kger, dan pembicara adalah Dr. dr. Hans Lumintang, SpKK(K) dan dr. Erdina HD Pusponegoro, SpKK, dari Kelompok Studi Herpes Indonesia (KSHI); Prof. Dr. dr. Samsuridjal Djauzi, SpPD-KAI sebag&shy;ai Ketua Satgas Imunisasi Dewasa; serta Prof. Jae Gab Lee dari Kangnam Sacred Heart Hospital, Korea Selatan.</p>\n\n<p>Dr. dr. Hans menjelaskan bahwa infeksi primer pertama herpes zoster (HZ) adalah oleh virus varisela zoster (VVZ). Menurut penelitian, hampir 98% orang di dalam tubuhnya telah terdapat VVZ. Virus ini dapa&shy;t mengalami reaktivasi apabi&shy;la sistem kekebalan tubuh berkurang atau gangguan imunit&shy;as selular. Faktor risiko yang menyebabkan berkurangnya kekebalan tubuh antara lain penyakit-penyakit kronis, usia lebih dari 50 tahun, keadaan imunokompromais, obat-obatan imunosupresif, HIV/AIDS, transplantasi sumsum tulang atau organ, keganasan, terapi steroid jangka panjang, stres psikologis, trauma, dan tinda&shy;kan pembedahan.</p>\n\n<p>Probabilitas kejadian HZ berbanding lurus dengan pe&shy;ning&shy;katan usia. Menurut data, 1 dari 3 orang selama hidupnya akan mengalami HZ, bahkan pad&shy;a usia 85 tahun sekitar 1 dari 2 orang akan mengalami HZ. Insiden HZ pada anak-anak adalah 0,74 per 1000 orang per tahun. Insiden ini meningkat menjadi 2,5 per 1000 orang per tahun pada usia 20-50 tahun. Di usia lebih dari 60 tahun, insidennya 7 per 1000 orang per tahun dan pada usia 80 tahun insi&shy;denny&shy;a mencapai 10 per 1000 orang per tahun. Sedangkan di Indonesia, berdasarkan penelitian oleh Kelompok Studi Herpes Indonesia (KSHI) terhadap 2.232 pasien HZ di 13 rumah sakit di Indonesia pada 2011-2013, diperoleh bahwa puncak kasus HZ terjadi pada usia 45-64 tahun dengan jumlah kejadian 851 kasus (37,95%) dan prevalensi HZ pada usia 45 tahun adalah 55,77%.</p>\n\n<p>HZ menimbulkan berbagai komplikasi seperti komplikasi kutaneus, komplikasi telinga, hidung, tenggorokan (THT), viseral, dan yang paling se&shy;ring terjadi adalah kompli&shy;ka&shy;si neurologis, yaitu neuralgia pasca-herpes (NPH) berupa nyeri. Sebanyak 90% pasien HZ akan mengalami nyeri baik akut maupun kronis. Berdasar&shy;kan pengukuran derajat nyeri Katz J dan Melzack R, nyeri akut HZ berada pada derajat yang lebih nyeri daripada nyeri melahirkan. Di Indonesia, prevalensi NPH sebesar 26,5% dari seluruh kasus HZ dengan puncak prevalensi NPH tertinggi pada usia 45-64 tahun, yaitu 42% dari semua kasus NPH. Berbagai komplikasi HZ inilah, terutama nyeri NPH, yang menimbulkan dampak buru&shy;k terhadap kualitas hidup pasien HZ usia lanjut.</p>\n\n<p>Walaupun pengobatan HZ penting dilakukan dengan berbagai strategi, hal yang dirasa lebih penting adalah upaya pencegahan timbulnya HZ agar orang yang berisiko HZ tidak sampai mengalami penyakit ini. Upaya pencegahan yang dapat dilakukan melalui imunisasi dewasa dengan vaksin herpes zoster. Prof. Samsuridjal mengatakan bahwa imunisasi dewasa penting karena orang dengan usia lanjut (di atas 50 tahun) akan mengalami penurunan imunitas sehingga rentan terhadap berbagai penyakit, termasuk herpes zoster. Dengan vaksinasi akan meningkatkan kualitas hidup dan mengurangi komplikasi pada orang usia lanju&shy;t, papar Prof. Samsuridjal. Menurut Prof. Samsuridjal, bahw&shy;a imunisasi pada orang dewa&shy;sa tidak kalah penting dari imunisasi pada anak. Menurut data &ldquo; IOM, Calling the Shots : immunization finance policies and practices 2000&rdquo; imunisasi pada orang dewasa dapat mencegah kematian pada orang dewasa akibat penyakit infeksi 200 kali lebih banyak daripada kematian akibat infeksi pada anak-anak.</p>\n\n<p>Oleh karena itu, PT. Merck Sharp &amp; Dohme Indonesia (MSD) meluncurkan produk vaksin HZ untuk orang dewasa, yaitu Zostavax&reg;. Vaksin HZ di&shy;tuju&shy;kan untuk mencegah ter&shy;&shy;jadinya HZ dengan meningkat&shy;kan kekebalan tubuh dan bekerja melalui dua mekanisme. Pertama, mengontrol reaktivasi laten VVZ sehingga mencegah terjadinya HZ. Kedua, mengontrol replikasi dan penyebaran VVZ ke kulit sehingga mengurangi kerusakan neurologis, mengurangi ke&shy;parahan dan durasi nyeri, serta mengurangi insiden NPH.</p>\n\n<p>Pada sesi terakhir simposium, Prof. Jae Gab Lee menga&shy;ta&shy;kan bahwa Zostavax&reg;&nbsp;telah diluncurkan di Korea Selatan pada 2012. Dalam presentasinya, Prof. Jae Gab Lee memaparkan berbagai studi tentang keunggulan vaksin VVZ hidup yang dilemahkan ini. Dalam studi Zostavax Efficacy and Safety Trial (ZEST) dibuktikan bahwa vaksin ini secara signifikan menurun&shy;kan insiden HZ sebesar 70% pad&shy;a orang dengan usia 50-59 tahun dan 51% pada usia &gt; 60 tahun, serta menurunkan insiden NPH sebesar 67% pada orang de&shy;ngan usia &gt; 60 tahun. Shingles Prevention Study (SPS) menunjukkan bahwa vaksin ini secara signifikan mengurangi Burden of Illness (BOI) yang berhubung&shy;an dengan HZ. Secara umum, vaksin HZ dapat ditoleransi denga&shy;n baik.</p>\n\n<p>Sesuai rekomendasi KSHI, vaksinasi HZ diberikan kepada semua orang yang imunokompeten, berusia &sup3; 50 tahun, dengan atau tanpa episode zoster sebelumnya dan tanpa perlu dilakukan pemeriksaan antibodi sebelumnya.&nbsp;<strong>(KK)</strong></p>\n', '96', '', null, 'Admin', '0', '0', null, null, '2017-08-28 16:39:26', '0', '5', 'none', null, null, null, 'N', null, null, null, null, 'Vaksinasi-Herpes-Zoster-untuk-Hari-Tua-Berkualitas');
COMMIT;

-- ----------------------------
--  Table structure for `bf_publikasi`
-- ----------------------------
DROP TABLE IF EXISTS `bf_publikasi`;
CREATE TABLE `bf_publikasi` (
  `id_publikasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_publikasi` varchar(200) NOT NULL,
  `deskripsi` text,
  `tanggal` datetime NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `file_pdf` text,
  `gambar` varchar(200) DEFAULT NULL,
  `file_pdf2` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_publikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `bf_publikasi`
-- ----------------------------
BEGIN;
INSERT INTO `bf_publikasi` VALUES ('2', 'Media Praja', '<p>Puji syukur ke hadirat Allah SWT, Tuhan Yang Maha Kuasa, atas anugerah-Nya sehingga majalah Media Praja edisi Januari 2015 dapat kembali hadir di tengah-tengah pembaca. Majalah edisi awal tahun ini mengangkat tema &ldquo;Mengawal terjadinya regenerasi kepemimpinan nasional dari Presiden dan Wakil Presiden Susilo Bambang Yudhoyono dan Boediono (SBYBoediono) kepada Presiden dan Wakil Presiden Joko Widodo-Jusuf Kalla (Jokowi-Jusuf Kalla). Beralihnya kepemimpinan nasional ini berdampak pada perubahan strategi dan fokus kerja dalam menjalankan roda pemerintahan dan pembangunan, baik di pusat maupun daerah lima tahun mendatang.</p>\n', '2017-07-17 00:00:00', '92', 'prajaaa9.pdf', '8cf497ebdc8cb9be2dda06dd2a26f4ae2.png', null), ('3', 'Penjabaran / Operasional Visi-Misi Pemerintahan Kabinet Kerja', '<p>kebijakan dan agenda prioritas tahunan&nbsp;</p>\n', '2017-07-17 00:00:00', '92', 'pokok_program.pdf', 'thumbnail.jpeg', null), ('4', '100 hari kerja menteri dalam negeri', '<p>revisi anggaran kemendagri dan apbd</p>\n', '2017-07-17 00:00:00', '92', 'img_0550.pdf', 'thumbnail_(1).jpeg', null), ('5', '100 hari kerja menteri dalam negeri 2', '<p>pilkada langsung</p>\n', '2017-07-17 00:00:00', '92', 'img_0553_1.pdf', 'thumbnail_(2).jpeg', null);
COMMIT;

-- ----------------------------
--  Table structure for `bf_role_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `bf_role_permissions`;
CREATE TABLE `bf_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_role_permissions`
-- ----------------------------
BEGIN;
INSERT INTO `bf_role_permissions` VALUES ('1', '2'), ('1', '4'), ('1', '6'), ('1', '7'), ('1', '8'), ('1', '9'), ('1', '10'), ('1', '11'), ('1', '12'), ('1', '13'), ('1', '14'), ('1', '15'), ('1', '16'), ('1', '17'), ('1', '18'), ('1', '19'), ('1', '20'), ('1', '21'), ('1', '22'), ('1', '24'), ('1', '25'), ('1', '36'), ('1', '37'), ('1', '39'), ('1', '40'), ('1', '41'), ('1', '42'), ('1', '43'), ('1', '44'), ('1', '45'), ('1', '49'), ('1', '50'), ('1', '51'), ('1', '52'), ('1', '53'), ('1', '58'), ('1', '59'), ('1', '60'), ('1', '61'), ('1', '62'), ('1', '63'), ('1', '64'), ('1', '65'), ('1', '66'), ('1', '67'), ('1', '68'), ('1', '81'), ('1', '82'), ('1', '83'), ('1', '84'), ('1', '192'), ('1', '193'), ('1', '194'), ('1', '195'), ('1', '201'), ('1', '202'), ('1', '203'), ('1', '204'), ('1', '205'), ('1', '206'), ('1', '208'), ('1', '209'), ('1', '210'), ('1', '211'), ('1', '220'), ('1', '221'), ('1', '222'), ('1', '223'), ('1', '228'), ('1', '229'), ('1', '230'), ('1', '231'), ('1', '234'), ('1', '235'), ('1', '236'), ('1', '237'), ('1', '238'), ('1', '239'), ('1', '240'), ('1', '241'), ('1', '242'), ('1', '243'), ('1', '244'), ('1', '245'), ('6', '2'), ('6', '3'), ('6', '4'), ('6', '5'), ('6', '6'), ('6', '7'), ('6', '8'), ('6', '9'), ('6', '10'), ('6', '11'), ('6', '12'), ('6', '13'), ('6', '14'), ('6', '15'), ('6', '16'), ('6', '17'), ('6', '18'), ('6', '19'), ('6', '20'), ('6', '21'), ('6', '24'), ('6', '25'), ('6', '27'), ('6', '28'), ('6', '29'), ('6', '30'), ('6', '31'), ('6', '32'), ('6', '33'), ('6', '34'), ('6', '35'), ('6', '36'), ('6', '37'), ('6', '38'), ('6', '39'), ('6', '40'), ('6', '41'), ('6', '42'), ('6', '43'), ('6', '44'), ('6', '45'), ('6', '46'), ('6', '49'), ('6', '50'), ('6', '51'), ('6', '52'), ('6', '53'), ('6', '58'), ('6', '59'), ('6', '60'), ('6', '61'), ('6', '62'), ('6', '63'), ('6', '64'), ('6', '65'), ('6', '66'), ('6', '67'), ('6', '68'), ('6', '69'), ('6', '70'), ('6', '71'), ('6', '72'), ('6', '81'), ('6', '82'), ('6', '83'), ('6', '84'), ('6', '192'), ('6', '193'), ('6', '194'), ('6', '195'), ('6', '201'), ('6', '202'), ('6', '203'), ('6', '204'), ('8', '2'), ('8', '51'), ('8', '52'), ('8', '53'), ('8', '61'), ('8', '62'), ('8', '63'), ('8', '64'), ('8', '65'), ('8', '66'), ('8', '67'), ('8', '68'), ('8', '81'), ('8', '82'), ('8', '83'), ('8', '84'), ('8', '192'), ('8', '193'), ('8', '194'), ('8', '195'), ('8', '201'), ('8', '202'), ('8', '203'), ('8', '204'), ('8', '205'), ('8', '206'), ('8', '208'), ('8', '209'), ('8', '210'), ('8', '211'), ('8', '220'), ('8', '221'), ('8', '222'), ('8', '223'), ('8', '228'), ('8', '229'), ('8', '230'), ('8', '231'), ('8', '234'), ('8', '235'), ('8', '236'), ('8', '237'), ('8', '238'), ('8', '239'), ('8', '240'), ('8', '241'), ('8', '242'), ('8', '243'), ('8', '244'), ('8', '245');
COMMIT;

-- ----------------------------
--  Table structure for `bf_roles`
-- ----------------------------
DROP TABLE IF EXISTS `bf_roles`;
CREATE TABLE `bf_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_roles`
-- ----------------------------
BEGIN;
INSERT INTO `bf_roles` VALUES ('1', 'Administrator', 'Has full control over every aspect of the site.', '0', '0', 'admin/content', '0', 'content'), ('2', 'Operator', 'Can handle day-to-day management, but does not have full power.', '0', '1', '', '1', 'content'), ('4', 'User', 'This is the default user with access to login.', '1', '0', '', '0', 'content'), ('6', 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', '0', '0', 'admin/content', '0', 'content'), ('8', 'Editor', '', '0', '0', '', '0', 'content');
COMMIT;

-- ----------------------------
--  Table structure for `bf_schema_version`
-- ----------------------------
DROP TABLE IF EXISTS `bf_schema_version`;
CREATE TABLE `bf_schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_schema_version`
-- ----------------------------
BEGIN;
INSERT INTO `bf_schema_version` VALUES ('core', '37'), ('newsletter_', '1'), ('payaffaliate_', '1'), ('pay_affaliate_', '1'), ('petadesa_', '1'), ('reklame_', '1'), ('sosmed_', '1'), ('statistik_', '1');
COMMIT;

-- ----------------------------
--  Table structure for `bf_scrolltext`
-- ----------------------------
DROP TABLE IF EXISTS `bf_scrolltext`;
CREATE TABLE `bf_scrolltext` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `scrolltext` text COLLATE latin1_general_ci,
  `flag_scroll` int(10) DEFAULT NULL,
  `scrolltext_english` text COLLATE latin1_general_ci,
  `nama_pimpinan` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_scrolltext`
-- ----------------------------
BEGIN;
INSERT INTO `bf_scrolltext` VALUES ('86', 'SURAT EDARAN NOMOR : 480/6326/SJ TENTANG PERCEPATAN PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID)', '1', 'SURAT EDARAN NOMOR : 480/6326/SJ TENTANG PERCEPATAN PENUNJUKAN PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID)', 'http://kemendagri.go.id');
COMMIT;

-- ----------------------------
--  Table structure for `bf_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `bf_sessions`;
CREATE TABLE `bf_sessions` (
  `session_id` varchar(50) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_sessions`
-- ----------------------------
BEGIN;
INSERT INTO `bf_sessions` VALUES ('00b14a5e0b03e6cd2350652d2bde03ec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36', '1451505194', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('06030b90776198bab9a3c554a9d34992', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', '1503638322', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('08e3737e5096b317b44c17c1ba123748', '192.168.1.5', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', '1468305148', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:55;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:17:\"flash:new:message\";s:0:\"\";}'), ('09de7aace347dc7a3d83541ec5149a07', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1500513817', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:68;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('0ba817ccd22cb0cb24f1a3ed9cc4cf15', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499748571', 'a:11:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:62;s:20:\"upload_session_image\";s:0:\"\";s:19:\"upload_session_file\";s:51:\"<p>The upload path does not appear to be valid.</p>\";}'), ('12ea7211c723a9827d188946e9fb8db6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', '1503366332', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('16f8efb9634eb97172ca96dc24652ced', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.86 Safari/537.36', '1462246936', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:20:\"upload_session_image\";s:0:\"\";}'), ('18cc8f1081d2df75fd92c255c107cbe7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '1481699089', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('23466aa3cdfe7837f4e0ca3f02f4dec3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.3', '1452740629', 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('2f90c364d6dd7d384672584cdad9c87d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', '1503466764', 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:66;}'), ('2fffd27d753ba9a2c14156d132718290', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1501037525', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:68;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('39634e8f903055aaf0a08594209f15a6', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '1481699090', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('3eede958f68414a6b6ef1a9d4469efeb', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1463557042', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:55;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:20:\"upload_session_image\";s:0:\"\";}'), ('49ba1d2e92f33ae9438e00dbad4ed748', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '1482292445', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:58;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:20:\"upload_session_image\";s:0:\"\";}'), ('4cbb704d77f556dd89dc79a343335aea', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499384658', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('52d32a4609359ee4a1e764779e368e99', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499391408', 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:70;}'), ('55c3b13cd6eceeef6b332239a39239ed', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Sa', '1499391756', 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:55;}'), ('56b4e79489ba502e4cb87d18c1d56135', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '1502412190', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('5b2db7d75d7add8f965db2b72ad7b245', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', '1503551454', 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:62;}'), ('63d29e7a497c318a1d22cacc680a29e9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', '1468392532', 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('67b884feb7508d92b35a4ebccd5626a6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '1502438842', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('7203d7fbf74b9b61ae123eae1ad85f8b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1464584010', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:55;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('722b90b3947cb9e9ace856ba5ac0fa0e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '1502674589', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('78d178311b29b2671ca80d41a838de08', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', '1463037925', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:58;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('79dcfdc0b23eaff0247d4c2d44c5b446', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', '1503291995', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('7e1af35a6dbdc8fadf392731ad67e5e4', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', '1472447827', ''), ('7f9c6c8001e43b4a4f7bfc4aa8606aa3', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499840367', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('8ccbc1a5fe47ae0c4baabf1d04e37586', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '1502674905', 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('91902bfe88a6cb58f796d1c7563c0bb6', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499386407', 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:66;}'), ('94de8f8eecb7180bd47b18c331e50525', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '1502674589', 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('978644a7cc7f1eefdb3a4c52ed860b09', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:43.0) Gecko/20100101 Firefox/43.0', '1452428203', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('98ebb30cd6b9cea9a54f7f9d0d3243fc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1463530854', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('99ed488e63ad1ee97d71965703a9114a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', '1481698148', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('a901ccf37c57f4e4d4f7d5278fe5957e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499903940', 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:62;}'), ('acca689cd32ea374f838dc6bab40ee4c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.3', '1453190273', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:58;}'), ('aeb5ed1e8d0f18af4927045c79274d9c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', '1470365601', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('b0e4d5a79fe3ce23362843357689bd40', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1464657249', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:17:\"flash:old:message\";s:0:\"\";}'), ('bd88d9cd00db46514f5aa4d4d1e4dd6e', '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Sa', '1503466887', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('c04e2cabf5d6edb30f7e80fb3ab4b9eb', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.3', '1503924983', 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('c053550422889b95de0a075c78869086', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.3', '1452849012', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:58;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:20:\"upload_session_image\";s:0:\"\";}'), ('c7bfb7f86b156489f6b594ba10a6d673', '127.0.0.1', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_2 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2', '1453190723', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('c7f17dcb25c387936cddfb6c0708f15f', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1500332870', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:62;}'), ('cace6bd6ab73accb1e345453432a7a7d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', '1481872322', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:55;s:7:\"user_id\";s:1:\"2\";s:11:\"auth_custom\";s:9:\"developer\";s:10:\"user_token\";s:40:\"a5a61231d27c308760e0f48b358d3a1ff8cea338\";s:8:\"identity\";s:9:\"developer\";s:7:\"role_id\";s:1:\"6\";s:9:\"logged_in\";b:1;}'), ('cd10c37c528f3a96ec3dd6162974c500', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1465352342', 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:59;}'), ('d3263f76bd33c5f5dcacabc267b507fc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36', '1462930355', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('d4e2682a40c186dc112cbfc281a9f8eb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36', '1451502449', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:59;s:20:\"upload_session_image\";s:0:\"\";}'), ('d7a86e5bf2e8e330b3e8789cda8c2c91', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.3', '1452739686', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:59;s:20:\"upload_session_image\";s:0:\"\";}'), ('d8c258364c6f590c1a13290680ad0728', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', '1472438635', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('d9c41c310d295311d2d7d51a4312888e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1464075421', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:59;s:20:\"upload_session_image\";s:0:\"\";}'), ('de3e9687659040082ee6d790adef910f', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1463712124', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('e0cf1724b0b9eb27fcf6704733960679', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', '1469498217', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('e1eb3511e373c99e2b5f27d58bbcbb1e', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499057587', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:20:\"upload_session_image\";s:0:\"\";s:6:\"pageid\";i:64;}'), ('e826a5522cdc38caa0c74fc67b32a13c', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499327638', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:64;s:20:\"upload_session_image\";s:0:\"\";}'), ('e86311493dc6c0938da5623a50cc9b25', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36', '1502690879', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:20:\"upload_session_image\";s:0:\"\";}'), ('eb1d4a0ec22073a17e9825cced785b69', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', '1481790662', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"2\";s:11:\"auth_custom\";s:9:\"developer\";s:10:\"user_token\";s:40:\"a5a61231d27c308760e0f48b358d3a1ff8cea338\";s:8:\"identity\";s:9:\"developer\";s:7:\"role_id\";s:1:\"6\";s:9:\"logged_in\";b:1;s:20:\"upload_session_image\";s:0:\"\";s:6:\"pageid\";i:55;}'), ('ebd44c697bf13cb785ca23c01e9be6b1', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499915232', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('ec1921e20bb688a7d68e416434adbbda', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.3', '1464599437', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:6:\"pageid\";i:58;s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;}'), ('ec94c316a6e134e6e9e9e4d4d702e580', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', '1481698003', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:58;}'), ('ecfb9b7e1feff594f652aabc0cac1922', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.3', '1473902877', 'a:10:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:55;s:20:\"upload_session_image\";s:0:\"\";}'), ('f0cefba02ba7a668db0179ffb3cf4905', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', '1472447826', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('f253023ba7051500bcbbe3eb63eaea86', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499413678', 'a:9:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";s:7:\"user_id\";s:1:\"1\";s:11:\"auth_custom\";s:5:\"admin\";s:10:\"user_token\";s:40:\"afce4294b114b45eb6bd4c7d70659ef44232d1c1\";s:8:\"identity\";s:5:\"admin\";s:7:\"role_id\";s:1:\"1\";s:9:\"logged_in\";b:1;s:6:\"pageid\";i:63;}'), ('f45989209006f2a7efcd873ee51153a9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', '1467194836', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('fb66f5eb115c41ef9770b653bd7c8b4d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.3', '1467249915', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('fdd7a347558118de8afd69ae06ea0e94', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.3', '1499988539', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}'), ('fef29fdd0875c1238909a8090aad2419', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36', '1481698019', 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:9:\"indonesia\";}');
COMMIT;

-- ----------------------------
--  Table structure for `bf_settings`
-- ----------------------------
DROP TABLE IF EXISTS `bf_settings`;
CREATE TABLE `bf_settings` (
  `name` varchar(30) NOT NULL,
  `module` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_settings`
-- ----------------------------
BEGIN;
INSERT INTO `bf_settings` VALUES ('auth.allow_name_change', 'core', '1'), ('auth.allow_register', 'core', '1'), ('auth.allow_remember', 'core', '1'), ('auth.do_login_redirect', 'core', '1'), ('auth.login_type', 'core', 'both'), ('auth.name_change_frequency', 'core', '1'), ('auth.name_change_limit', 'core', '1'), ('auth.password_force_mixed_case', 'core', '0'), ('auth.password_force_numbers', 'core', '0'), ('auth.password_force_symbols', 'core', '0'), ('auth.password_min_length', 'core', '4'), ('auth.password_show_labels', 'core', '0'), ('auth.remember_length', 'core', '1209600'), ('auth.user_activation_method', 'core', '0'), ('auth.use_extended_profile', 'core', '0'), ('auth.use_usernames', 'core', '1'), ('ext.country', 'core', 'US'), ('ext.state', 'core', 'CA'), ('ext.street_name', 'core', ''), ('ext.type', 'core', 'small'), ('form_save', 'core.ui', 'ctrl+s/Ã¢Å’Ëœ+s'), ('goto_content', 'core.ui', 'alt+c'), ('mailpath', 'email', '/usr/sbin/sendmail'), ('mailtype', 'email', 'html'), ('password_iterations', 'users', '4'), ('protocol', 'email', 'smtp'), ('sender_email', 'email', 'admin@lapan.go.id'), ('site.alamat', 'site', ' JL. MATRAMAN RAYA JAKARTA TIMUR 13150'), ('site.cse', 'core', '003799789951844657258:zorr_eczq_u'), ('site.description', 'core', 'Kementerian Dalam Negeri - Republik Indonesia'), ('site.facebook', 'core', 'https://www.facebook.com/#'), ('site.googleplus', 'core', 'https://plus.google.com/s/#'), ('site.keyword', 'core', 'Kementerian dalam negeri'), ('site.kode_desa', 'core', '6105180006'), ('site.languages', 'core', 'a:2:{i:0;s:7:\"english\";i:1;s:9:\"indonesia\";}'), ('site.list_limit', 'core', '10'), ('site.logo', 'core', 'c8689a58e4db6622122dbf865c864c97.jpg'), ('site.setPengumuman', 'core', 'aktif'), ('site.show_front_profiler', 'core', '0'), ('site.show_profiler', 'core', '0'), ('site.status', 'core', '1'), ('site.system_email', 'core', 'jurnalmedika@gmail.com'), ('site.telpfax', 'site', '<i class=\"fa fa-phone\"></i>(021) 3450038 <i class=\"fa fa-fax\"></i>  (021) 3851193, 34830261,3846430'), ('site.title', 'core', 'Jurnal Medika'), ('site.twitter', 'core', 'https://twitter.com/#'), ('smtp_host', 'email', 'ssl://smtp.gmail.com'), ('smtp_pass', 'email', '172701941@#'), ('smtp_port', 'email', '465'), ('smtp_timeout', 'email', '7'), ('smtp_user', 'email', 'wieldean@gmail.com'), ('updates.bleeding_edge', 'core', '0'), ('updates.do_check', 'core', '0');
COMMIT;

-- ----------------------------
--  Table structure for `bf_slide`
-- ----------------------------
DROP TABLE IF EXISTS `bf_slide`;
CREATE TABLE `bf_slide` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` text COLLATE latin1_general_ci,
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `file` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `deleted` int(10) DEFAULT '0' COMMENT '0:tampil;1:soft elete',
  `urut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_slide`
-- ----------------------------
BEGIN;
INSERT INTO `bf_slide` VALUES ('91', 'slide1', '', '#', 'Baner-book-dr-Mahesa-websit.jpg', '0', null), ('92', 'slide2', '', '#', 'Baner-terbit-baru-1708.jpg', '0', null), ('93', 'slide3', '', '#', 'Baner-web-milagros-1704.jpg', '0', null), ('94', 'slide4', '', '#', 'Baner-web-MPC-1609.jpg', '0', null), ('95', 'slide5', '', '#', 'Baner-web-SKP-IDI-1608.jpg', '0', null);
COMMIT;

-- ----------------------------
--  Table structure for `bf_states`
-- ----------------------------
DROP TABLE IF EXISTS `bf_states`;
CREATE TABLE `bf_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `abbrev` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_states`
-- ----------------------------
BEGIN;
INSERT INTO `bf_states` VALUES ('1', 'Alaska', 'AK'), ('2', 'Alabama', 'AL'), ('3', 'American Samoa', 'AS'), ('4', 'Arizona', 'AZ'), ('5', 'Arkansas', 'AR'), ('6', 'California', 'CA'), ('7', 'Colorado', 'CO'), ('8', 'Connecticut', 'CT'), ('9', 'Delaware', 'DE'), ('10', 'District of Columbia', 'DC'), ('11', 'Florida', 'FL'), ('12', 'Georgia', 'GA'), ('13', 'Guam', 'GU'), ('14', 'Hawaii', 'HI'), ('15', 'Idaho', 'ID'), ('16', 'Illinois', 'IL'), ('17', 'Indiana', 'IN'), ('18', 'Iowa', 'IA'), ('19', 'Kansas', 'KS'), ('20', 'Kentucky', 'KY'), ('21', 'Louisiana', 'LA'), ('22', 'Maine', 'ME'), ('23', 'Marshall Islands', 'MH'), ('24', 'Maryland', 'MD'), ('25', 'Massachusetts', 'MA'), ('26', 'Michigan', 'MI'), ('27', 'Minnesota', 'MN'), ('28', 'Mississippi', 'MS'), ('29', 'Missouri', 'MO'), ('30', 'Montana', 'MT'), ('31', 'Nebraska', 'NE'), ('32', 'Nevada', 'NV'), ('33', 'New Hampshire', 'NH'), ('34', 'New Jersey', 'NJ'), ('35', 'New Mexico', 'NM'), ('36', 'New York', 'NY'), ('37', 'North Carolina', 'NC'), ('38', 'North Dakota', 'ND'), ('39', 'Northern Mariana Islands', 'MP'), ('40', 'Ohio', 'OH'), ('41', 'Oklahoma', 'OK'), ('42', 'Oregon', 'OR'), ('43', 'Palau', 'PW'), ('44', 'Pennsylvania', 'PA'), ('45', 'Puerto Rico', 'PR'), ('46', 'Rhode Island', 'RI'), ('47', 'South Carolina', 'SC'), ('48', 'South Dakota', 'SD'), ('49', 'Tennessee', 'TN'), ('50', 'Texas', 'TX'), ('51', 'Utah', 'UT'), ('52', 'Vermont', 'VT'), ('53', 'Virgin Islands', 'VI'), ('54', 'Virginia', 'VA'), ('55', 'Washington', 'WA'), ('56', 'West Virginia', 'WV'), ('57', 'Wisconsin', 'WI'), ('58', 'Wyoming', 'WY'), ('59', 'Armed Forces Africa', 'AE'), ('60', 'Armed Forces Canada', 'AE'), ('61', 'Armed Forces Europe', 'AE'), ('62', 'Armed Forces Middle East', 'AE'), ('63', 'Armed Forces Pacific', 'AP'), ('64', 'Jawa Barat', 'JB');
COMMIT;

-- ----------------------------
--  Table structure for `bf_statistik`
-- ----------------------------
DROP TABLE IF EXISTS `bf_statistik`;
CREATE TABLE `bf_statistik` (
  `id_statistik` int(11) NOT NULL AUTO_INCREMENT,
  `nama_statistik` varchar(200) NOT NULL,
  `tipe` enum('pie','bar','column','') NOT NULL DEFAULT 'pie',
  `sub_title` varchar(200) NOT NULL,
  PRIMARY KEY (`id_statistik`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `bf_statistik`
-- ----------------------------
BEGIN;
INSERT INTO `bf_statistik` VALUES ('1', 'Fasilitas Pendidikan', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id'), ('2', 'Fasilitas Kesehatan', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id'), ('3', 'Fasilitas Telekomunikasi', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id'), ('4', 'Fasilitas Listrik', 'pie', 'Sumber : http://www.potensi-desa.kemendesa.go.id');
COMMIT;

-- ----------------------------
--  Table structure for `bf_statistik_detail`
-- ----------------------------
DROP TABLE IF EXISTS `bf_statistik_detail`;
CREATE TABLE `bf_statistik_detail` (
  `id_statistik_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_statistik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `value` double NOT NULL,
  PRIMARY KEY (`id_statistik_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `bf_templates`
-- ----------------------------
DROP TABLE IF EXISTS `bf_templates`;
CREATE TABLE `bf_templates` (
  `id_templates` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci DEFAULT 'N',
  `gambar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_templates`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_templates`
-- ----------------------------
BEGIN;
INSERT INTO `bf_templates` VALUES ('1', 'Theme 1', 'BIT', 'template3', 'N', 'template1.png'), ('12', 'Theme 3', 'BIT', 'frontend', 'Y', 'template3.png');
COMMIT;

-- ----------------------------
--  Table structure for `bf_testimonial`
-- ----------------------------
DROP TABLE IF EXISTS `bf_testimonial`;
CREATE TABLE `bf_testimonial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` text COLLATE latin1_general_ci,
  `tgl_kirim` date DEFAULT NULL,
  `status_approve` int(11) DEFAULT NULL,
  `jawaban` text COLLATE latin1_general_ci,
  `ipaddr` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
--  Records of `bf_testimonial`
-- ----------------------------
BEGIN;
INSERT INTO `bf_testimonial` VALUES ('1', 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', null, null, '', null), ('2', 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', null, null, '', null), ('3', 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', null, null, '', null), ('4', 'Daniela, 24 Tahun', 'ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', '0000-00-00', null, null, '', null);
COMMIT;

-- ----------------------------
--  Table structure for `bf_user_cookies`
-- ----------------------------
DROP TABLE IF EXISTS `bf_user_cookies`;
CREATE TABLE `bf_user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `bf_user_meta`
-- ----------------------------
DROP TABLE IF EXISTS `bf_user_meta`;
CREATE TABLE `bf_user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_user_meta`
-- ----------------------------
BEGIN;
INSERT INTO `bf_user_meta` VALUES ('1', '1', 'street_name', 'cipacing'), ('2', '1', 'state', '0'), ('3', '1', 'country', 'ID'), ('5', '2', 'street_name', 'Jl. Jalaprang No 5'), ('6', '2', 'state', '0'), ('7', '2', 'country', 'ID'), ('9', '3', 'street_name', ''), ('10', '3', 'state', 'SC'), ('11', '3', 'country', 'US'), ('60', '1', 'tanggal_lahir', '2014-09-15'), ('61', '1', 'jenis_kelamin', 'L'), ('62', '1', 'phone', '08987962916'), ('63', '1', 'kode_pos', '44544'), ('64', '1', 'kota', '0'), ('65', '2', 'tanggal_lahir', '2014-09-16'), ('66', '2', 'jenis_kelamin', 'L'), ('67', '2', 'phone', ''), ('68', '2', 'kode_pos', '44544'), ('69', '2', 'kota', '27'), ('84', '17', 'tanggal_lahir', '2014-09-10'), ('85', '17', 'jenis_kelamin', 'P'), ('86', '17', 'street_name', 'a'), ('87', '17', 'phone', 'a'), ('88', '17', 'kode_pos', 'aaa'), ('89', '17', 'state', '0'), ('90', '17', 'country', 'ID'), ('161', '1', 'provinsi', '0'), ('162', '29', 'tanggal_lahir', '2014-10-24'), ('163', '29', 'jenis_kelamin', 'L'), ('164', '29', 'street_name', 'cipacing'), ('165', '29', 'phone', '08987962916'), ('166', '29', 'kode_pos', '44544'), ('167', '29', 'kota', '176'), ('168', '29', 'provinsi', '32'), ('169', '29', 'state', '0'), ('170', '29', 'country', 'ID'), ('171', '30', 'tanggal_lahir', '2014-10-24'), ('172', '30', 'jenis_kelamin', 'L'), ('173', '30', 'street_name', 'cipacing'), ('174', '30', 'phone', '089879898989'), ('175', '30', 'kode_pos', '44544'), ('176', '30', 'kota', '176'), ('177', '30', 'provinsi', '32'), ('178', '30', 'state', '0'), ('179', '30', 'country', 'ID'), ('180', '31', 'tanggal_lahir', '2014-10-24'), ('181', '31', 'jenis_kelamin', 'L'), ('182', '31', 'street_name', 'cipacing'), ('183', '31', 'phone', '089898989'), ('184', '31', 'kode_pos', '44544'), ('185', '31', 'kota', '176'), ('186', '31', 'provinsi', '32'), ('187', '31', 'state', '0'), ('188', '31', 'country', 'ID'), ('189', '32', 'tanggal_lahir', '2014-10-24'), ('190', '32', 'jenis_kelamin', 'L'), ('191', '32', 'street_name', 'cipacing'), ('192', '32', 'phone', '080909090'), ('193', '32', 'kode_pos', '44544'), ('194', '32', 'kota', '176'), ('195', '32', 'provinsi', '32'), ('196', '32', 'state', '0'), ('197', '32', 'country', 'ID'), ('198', '33', 'tanggal_lahir', '2014-10-24'), ('199', '33', 'jenis_kelamin', 'L'), ('200', '33', 'street_name', 'cipacing'), ('201', '33', 'phone', '0800909090'), ('202', '33', 'kode_pos', '44544'), ('203', '33', 'kota', '176'), ('204', '33', 'provinsi', '32'), ('205', '33', 'state', '0'), ('206', '33', 'country', 'ID'), ('207', '2', 'provinsi', '12'), ('215', '35', 'tanggal_lahir', '2014-11-20'), ('216', '35', 'jenis_kelamin', 'L'), ('217', '35', 'street_name', 'cipacing'), ('218', '35', 'phone', '08987962916'), ('219', '35', 'kode_pos', '44544'), ('220', '35', 'state', '0'), ('221', '35', 'country', 'ID'), ('222', '36', 'tanggal_lahir', '2014-12-03'), ('223', '36', 'jenis_kelamin', 'L'), ('224', '36', 'street_name', 'sdasd'), ('225', '36', 'phone', '454545'), ('226', '36', 'kode_pos', '343434'), ('227', '36', 'state', '0'), ('228', '36', 'country', 'ID'), ('229', '4', 'tanggal_lahir', '1974-04-10'), ('230', '4', 'jenis_kelamin', 'L'), ('231', '4', 'street_name', 'Jl. Pinus Timur No.2'), ('232', '4', 'phone', '082117001112'), ('233', '4', 'kode_pos', '42333'), ('234', '4', 'kota', '189'), ('235', '4', 'provinsi', '32'), ('236', '4', 'state', '0'), ('237', '4', 'country', 'ID'), ('238', '5', 'tanggal_lahir', '2015-01-01'), ('239', '5', 'jenis_kelamin', 'P'), ('240', '5', 'street_name', 'ss'), ('241', '5', 'phone', '22'), ('242', '5', 'kode_pos', '22'), ('243', '5', 'kota', '189'), ('244', '5', 'provinsi', '32'), ('245', '5', 'state', '0'), ('246', '5', 'country', 'ID');
COMMIT;

-- ----------------------------
--  Table structure for `bf_users`
-- ----------------------------
DROP TABLE IF EXISTS `bf_users`;
CREATE TABLE `bf_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `provinsi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bf_users`
-- ----------------------------
BEGIN;
INSERT INTO `bf_users` VALUES ('1', '1', 'admin@kemendagri.go.id', 'admin', '$2a$04$h0Wv5mgylZwwzxqAYOroR.Y/WVWJJqiBuuDELUy0eA8o4uuA1IVhG', '', '2017-08-28 16:15:56', '::1', '2014-03-10 05:58:47', '0', '0', '0', null, 'Admin', null, 'UM8', 'english', '1', '', '4', '0', '176', null, '44544', null, null, '32'), ('2', '6', 'developer@kemendagri.go.id', 'developer', '$2a$04$h0Wv5mgylZwwzxqAYOroR.Y/WVWJJqiBuuDELUy0eA8o4uuA1IVhG', null, '2016-12-16 08:03:36', '127.0.0.1', '0000-00-00 00:00:00', '0', null, '0', null, 'Developer', null, 'UM8', 'english', '1', '', '0', '0', null, null, null, null, null, null), ('3', '8', 'halo@myindo.co.id', 'myindocs', '$2a$04$Q2GjJWC/McDQXbwc76eN5OtOzkYt9/eYnHiuVExdnY/1YRA7Fi9Rm', null, '2016-12-16 08:03:36', '', '2017-07-26 05:26:50', '0', null, '0', null, 'MyIndoCS', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('4', '8', 'admin@myindo.co.id', 'myindo', '$2a$04$8BAaAPoQ4XAChwSnM0LzRucQ2ZKi3ETNVcHFUZaxOBRMi1dBA6x6G', null, '2016-12-16 08:03:36', '', '2017-07-26 05:27:29', '0', null, '0', null, 'MyIndo', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('5', '8', 'admin1@mail.com', 'admin1', '$2a$04$uvaCBLiN0JV2RVg9G5vR.OW8g5FW27rU/2FAQKLc2WdL2ygg85EzS', null, '2016-12-16 08:03:36', '', '2017-07-26 05:28:15', '0', null, '0', null, 'admin1', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('6', '8', 'admin2@mail.com', 'admin2', '$2a$04$LS7DZTzokmE7WBTv1r8y/.1.Ml9PIgA59Kd49ix.8rc7E9akkKiDS', null, '2016-12-16 08:03:36', '', '2017-07-26 05:28:40', '0', null, '0', null, 'admin2', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('7', '8', 'widya@kemendagri.go.id', 'widya', '$2a$04$Ar3ZUltLSVZ5R2c79jsCme3OTY1C4SPBPhhNi8aJ.Df7.zwK3Z/yu', null, '2016-12-16 08:03:36', '', '2017-07-26 05:29:15', '0', null, '0', null, 'Widya Rachmi', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('8', '8', 'yeni@depdagri.go.id', 'yeni', '$2a$04$ZSemQhPHb.j4dEzA05hEBOvgR7WM8T3jYIlg5yiNjt7UhiNkfghV.', null, '2016-12-16 08:03:36', '', '2017-07-26 05:29:46', '0', null, '0', null, 'Yeni Indah S', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('9', '8', 'riyadi@depdagri.go.id', 'yadi', '$2a$04$R6zIn409z9i3u.2V.cIsVOCl/w67sjC0y/S3yAiRbnF7rgrSk56Fe', null, '2016-12-16 08:03:36', '', '2017-07-26 05:30:46', '0', null, '0', null, 'Riyadi Priyatin', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('10', '8', 'harry_irawan@kemendagri.go.id', 'harry', '$2a$04$wuUiWskgZhoqYDg6imvXDe6kIsSWnoR8RFXgHV1UX8uPGM5NBsqba', null, '2016-12-16 08:03:36', '', '2017-07-26 05:31:17', '0', null, '0', null, 'Harry Irawan', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('11', '8', 'indri@mail.com', 'indri', '$2a$04$44mkO4IqjrZKiImiyj33JuLNKg2gWvrq/FX0feWWYyR3pmmctqtVG', null, '2016-12-16 08:03:36', '', '2017-07-26 05:49:34', '0', null, '0', null, 'Dyah Indriawati', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('12', '8', 'panji@mail.com', 'panji', '$2a$04$VpTCv4asjxQPoWa5PvMY/ujA8chUN6AiabL2zRl4SIAmSieoDPYfm', null, '2016-12-16 08:03:36', '', '2017-07-26 05:50:05', '0', null, '0', null, 'Yudhi Pandji Wulung', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('13', '8', 'susi@mail.com', 'susi', '$2a$04$TuG1saMXDU7g8tdzFsWZUuXPVlBu/wj1J8nF6Z3UJoWIiSslxTl7a', null, '2016-12-16 08:03:36', '', '2017-07-26 05:50:37', '0', null, '0', null, 'Tri Susilowati', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('14', '8', 'anto@mail.com', 'anto', '$2a$04$LoqB7GwtDtD.HlRh1JIZWeC8YbzTJrpTMM.6eEPsRuaSs2z/DTBqW', null, '2016-12-16 08:03:36', '', '2017-07-26 05:51:13', '0', null, '0', null, 'Brilianto', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('15', '8', 'afni@yahoo.com', 'rosa', '$2a$04$N4C730CiuJCOYSomtu.H1OTrGRUZhIGhEaFzo68/5kdxUMVMnTREW', null, '2016-12-16 08:03:36', '', '2017-07-26 05:51:49', '0', null, '0', null, 'Afni Rosa', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('16', '8', 'sdewiretno@yahoo.com', 'dewi', '$2a$04$ZKA0nX99L20nz9VJvH9KiedjtugsraT6RTtAyypnHum/q/IaObVwy', null, '2016-12-16 08:03:36', '', '2017-07-26 05:52:21', '0', null, '0', null, 'Dewi Retno S', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('17', '8', 'puspen@kemendagri.go.id', 'puspenfp', '$2a$04$C1G7U4BhFpqESu0PWsAMquwlw2tbsya29XKFNh/VtY8ufAqrs0cQ.', null, '2016-12-16 08:03:36', '', '2017-07-26 05:52:54', '0', null, '0', null, 'Puspen Fasilitasi Pengaduan', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('18', '8', 'puspenhumas@mail.com', 'puspenhumas', '$2a$04$q3aVpO4PJ6./yPgtNuWFZ.4JIZfQ1W/NaNz1qgFx301ukFXMtsdPK', null, '2016-12-16 08:03:36', '', '2017-07-26 05:53:51', '0', null, '0', null, 'Puspen Humas', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('19', '8', 'puspenberita@mail.com', 'puspenberita', '$2a$04$gE/ht/QF4ACAauRsI8T9Oe/jz.BO0QycvhseMLm5Vs4WoRQUWKtSC', null, '2016-12-16 08:03:36', '', '2017-07-26 05:54:24', '0', null, '0', null, 'Puspen Humas', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('20', '8', 'deni@myindo.co.id', 'denipermana', '$2a$04$YZkQcojrHtU3C6nc7qanx.aYd731aNIkIVN84iZKZh5uAy.ssECCW', null, '2016-12-16 08:03:36', '', '2017-07-26 05:54:53', '0', null, '0', null, 'Deni', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('21', '8', 'dr.azhari86@yahoo.com', 'ari', '$2a$04$S.6aLde0h/l/W6q8E6Ikpe7LngjVWEY2VxTnkVrds7Edgrfhs18Ie', null, '2016-12-16 08:03:36', '', '2017-07-26 05:55:29', '0', null, '0', null, 'Azhari', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('22', '8', 'dasista@mail.com', 'dasista', '$2a$04$ui9r2JYr0TSFrUcZ27eAguc8sI963Pdtkp.SlHyDBCXjV2EiBirxO', null, '2016-12-16 08:03:36', '', '2017-07-26 05:55:57', '0', null, '0', null, 'Dasista Happy Karnia', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('23', '8', 'purwoto@kemendagri.go.id', 'purwoto', '$2a$04$ERSHCs6OFvPkF.v96ukXdOPpncpwTkDSpckU1jZKmoAKlC.l3tSC6', null, '2016-12-16 08:03:36', '', '2017-07-26 05:56:27', '0', null, '0', null, 'Purwoto', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('24', '8', 'anto@gmail.com', 'sediono', '$2a$04$ziqfnBEA1./fJDfGDceQJu90nhXVsiC.pPn41eiZ2e7eIfvqMB0aK', null, '2016-12-16 08:03:36', '', '2017-07-26 05:56:55', '0', null, '0', null, 'Sediono Brilianto', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('25', '8', 'humas@kemendagri.go.id', 'ikhbal', '$2a$04$QwKr2jnIUpGYhLKTo0AVsu2P/jQGQF1nJrIj7fVMI9tC1sQw0NhCm', null, '2016-12-16 08:03:36', '', '2017-07-26 05:57:22', '0', null, '0', null, 'Andi Mohammad Ikhbal', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('26', '8', 'puspen1@kemendagri.go.id', 'humas', '$2a$04$4QR/C5AafIhqU8m01MO9cuT1wt6Cbn5p8bAxAOnVAojx7rm7lM8WC', null, '2016-12-16 08:03:36', '', '2017-07-26 06:46:53', '0', null, '0', null, 'Humas', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('27', '8', 'puspen3@kemendagri.go.id', 'berita', '$2a$04$JfjeIVCwYQPH9ir.UcPlr.VynCkWuuPCsUzSjt98eoqmF9XFjXETS', null, '2016-12-16 08:03:36', '', '2017-07-26 06:47:54', '0', null, '0', null, 'Berita', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('28', '8', 'humas2@kemendagri.go.id', 'dino', '$2a$04$PpDg0tqDsj6q73bVsHc8N.mMXaIlNskSCN1WfKP2szM9/AqKNcsq6', null, '2016-12-16 08:03:36', '', '2017-07-26 06:49:55', '0', null, '0', null, 'Dino', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('29', '8', 'knopix47@gmail.com', 'Hanafi', '$2a$04$aYWR5e3M6pJ05KkyX/8z0u6kS1YXvTQAUVLWl44ONPsqmHoQEisHe', null, '2016-12-16 08:03:36', '', '2017-07-26 06:50:24', '0', null, '0', null, 'Hanafi Supporting', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('30', '8', 'andii_klapaucius@yahoo.co.id', 'faisal', '$2a$04$7OFUJgnY1iSm0HDZIMfR5.FujXD3dq1iufAVSMWBJ6M0WJMv7c4bC', null, '2016-12-16 08:03:36', '', '2017-07-26 06:50:51', '0', null, '0', null, 'Andi Muhammad Faisal', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('31', '8', 'astri.megatari@gmail.com', 'astri', '$2a$04$galTA/Lp4T7etbQu0lrUbeHdimhufIaJP6ZsPc/cjyR8jnnisxNkK', null, '2016-12-16 08:03:36', '', '2017-07-26 06:51:15', '0', null, '0', null, 'Astri', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null), ('32', '8', 'doni_rusdiyatno@kemendagri.go.id', 'donirus', '$2a$04$joPKx/GWiL1onH9sXa7eNeI7tB7yF0Lnxk4D.oyLaF1cIe4MFmn.i', null, '2016-12-16 08:03:36', '', '2017-07-26 06:51:46', '0', null, '0', null, 'Doni Rusdiyatno', null, 'UM8', 'english', '1', '', '4', '0', null, null, null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `bf_widget`
-- ----------------------------
DROP TABLE IF EXISTS `bf_widget`;
CREATE TABLE `bf_widget` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_widget` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_referen_widget` int(10) DEFAULT NULL,
  `tipe_widget` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `column_sidebar` int(10) DEFAULT NULL,
  `collapse` tinyint(4) DEFAULT NULL,
  `sort_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
