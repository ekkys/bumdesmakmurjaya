/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : bumdes

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 29/07/2024 11:53:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for biayas
-- ----------------------------
DROP TABLE IF EXISTS `biayas`;
CREATE TABLE `biayas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_layanan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of biayas
-- ----------------------------
INSERT INTO `biayas` VALUES (1, 'Retribusi Rumah Tangga', 'tps', '30.000', '<ul><li><font color=\"#6a9955\" face=\"Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace\"><span style=\"font-size: 14px; white-space: pre;\">&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;</span></font>Pengambilan sampah rumah tangga</li><li><font color=\"#6a9955\" face=\"Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace\"><span style=\"font-size: 14px; white-space: pre;\">&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;</span></font>3&nbsp; Kali Per Minggu</li><li><font color=\"#6a9955\" face=\"Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace\"><span style=\"font-size: 14px; white-space: pre;\">&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;</span></font>Pembayaran Setiap bulan</li><li><font color=\"#6a9955\" face=\"Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace\"><span style=\"font-size: 14px; white-space: pre;\">&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;</span></font>Alat Angkut : Tossa</li></ul>', 'Per Rumah', 'Direkomendasikan', '2024-07-29 04:01:35', '2024-07-29 04:01:35');
INSERT INTO `biayas` VALUES (2, 'Retribusi Perusahaan', 'tps', '150.000', '<p></p><p></p><ul></ul><p></p><ul><li>&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;Motor roda 3 : Start 150K per pengangkutan</li><li>&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;Pick Up : Start 500K perpengangkutan</li><li>&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;Truck : Start 800K per pengangkutan</li></ul>', 'Per Angkutan', '-', '2024-07-29 04:01:35', '2024-07-29 04:01:35');
INSERT INTO `biayas` VALUES (3, 'Retribusi Sampah B3', 'tps', '100.000', '<p><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\"></span></font></p><p><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\"></span></font></p><ul></ul><p></p><ul><li><span style=\"text-align: var(--bs-body-text-align);\">&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;<span style=\"font-weight: var(--bs-body-font-weight);\">TRANSPORTER</span></span></li><li>&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;PENYIMPANAN B3</li><li>&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;P<span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">ENGOLAHAN B3</span></li><li>&lt;i class=\"bi bi-check\"&gt;&lt;/i&gt;PEMANFAATAN</li></ul>', 'Harga menyesuaikan jenis B3 dan Jarak', '-', '2024-07-29 04:01:35', '2024-07-29 04:01:35');

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache
-- ----------------------------

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galeris
-- ----------------------------
DROP TABLE IF EXISTS `galeris`;
CREATE TABLE `galeris`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeris
-- ----------------------------
INSERT INTO `galeris` VALUES (1, 'Penyerahan Dana Pembangunan Kafetaria PLN', 'galeri/1.png', '2024-02-21', 'Penyerahan Dana Pembangunan Kafetaria PLN', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for home
-- ----------------------------
DROP TABLE IF EXISTS `home`;
CREATE TABLE `home`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashtag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home
-- ----------------------------
INSERT INTO `home` VALUES (1, 'home/YA6g0dhNS5xjo1NwSTNBpgm2Nw46Bhap6qzqduTH.png', 'Makmur Jaya', 'Menjadikan sampah sebagai sumber daya bermanfaat dan solusi ekonomis', '#bersihdesaku', 'https://www.yzoutube.com/watch?v=1X8c8ISRbRA', NULL, NULL);

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int(11) NULL DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED NULL DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for kliens
-- ----------------------------
DROP TABLE IF EXISTS `kliens`;
CREATE TABLE `kliens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kliens
-- ----------------------------
INSERT INTO `kliens` VALUES (1, 'Perum Tas 7', 'klien/grf0samvj4sYadgQ0FkLCMWP2JSlYwi4Z0A67spJ.png', NULL, NULL);
INSERT INTO `kliens` VALUES (2, 'KSA', 'klien/vAemaHyEMzCUAHOvJbYdSw2I8tbbdcxZ4B1Zro3C.jpg', NULL, NULL);
INSERT INTO `kliens` VALUES (3, 'BPS', 'klien/sewiONedMfiI8xyoE3Y72XmxwmiGJHwsY5FeDobS.png', NULL, NULL);
INSERT INTO `kliens` VALUES (4, 'BIG', 'klien/Ru3lfAX8X1ZQpOaqmEDNZR0sCTz6tS5WgpBN403y.jpg', NULL, NULL);
INSERT INTO `kliens` VALUES (5, 'QGR', 'klien/PL1HeHoIwusgCNm1OKW8iWKX5ewdcdmp7Pv5IyO0.png', NULL, NULL);

-- ----------------------------
-- Table structure for kontaks
-- ----------------------------
DROP TABLE IF EXISTS `kontaks`;
CREATE TABLE `kontaks`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `telpon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `maps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `youtube` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `instagram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `tiktok` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `whatsapp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kontaks
-- ----------------------------
INSERT INTO `kontaks` VALUES (1, 'Jl. Dusun Tundungan, Tundungan, Sidomojo, Kec. Krian 35151 Kab. Sidoarjo, Jawa Timur', '+62 815-1111-9337', 'bumdessidomojo1@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8013057203636!2d112.583538!3d-7.3945369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780985bd56483b:0x5ea5850216f1457a!2sBUMDes%20MAKMUR%20JAYA%20Desa%20Sidomojo!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\"', 'https://www.youtube.com/', 'https://id-id.facebook.com/', 'https://www.instagram.com/', 'https://www.tiktok.com/id-ID/', 'https://wa.me/62895632210577', NULL, NULL);

-- ----------------------------
-- Table structure for layanans
-- ----------------------------
DROP TABLE IF EXISTS `layanans`;
CREATE TABLE `layanans`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ringkasan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanans
-- ----------------------------
INSERT INTO `layanans` VALUES (1, 'Pengangkutan dan Pengolahan Sampah Domestik dan B3', 'Pengangkutan dan pengolahan sampah non-B3 (non-bahan berbahaya dan beracun) adalah proses penting dalam manajemen limbah yang bertujuan untuk menjaga kebersihan dan kesehatan lingkungan.', 'Pengangkutan dan pengolahan sampah non-B3 (non-bahan berbahaya dan beracun) adalah proses penting dalam manajemen limbah yang bertujuan untuk menjaga kebersihan dan kesehatan lingkungan.', 'http://127.0.0.1:8000/pengangkutan-detail', 'layanan/CPd5cUCnPyXvKvpdx3iTtdcqvbtQRkVyrbh50Ycm.jpg', 'tps', NULL, NULL);
INSERT INTO `layanans` VALUES (2, 'Pembelian Anfalan & Barang Bekas', 'Pembelian anfalan (sisa material yang masih bernilai) dan barang bekas merupakan salah satu cara untuk mendukung pengelolaan sampah dan daur ulang. Berikut adalah langkah-langkah dalam pembelian anfalan dan barang bekas', 'Pembelian anfalan (sisa material yang masih bernilai) dan barang bekas merupakan salah satu cara untuk mendukung pengelolaan sampah dan daur ulang. Berikut adalah langkah-langkah dalam pembelian anfalan dan barang bekas', 'http://127.0.0.1:8000/pembelian-detail', 'layanan/6XTHuh7WPiSVTOFXdRgzyz8ohC2JjHwymgjrqwb2.jpg', 'tps', NULL, NULL);
INSERT INTO `layanans` VALUES (3, 'Pemusnahan Dokumen dan Produk Kedaluwarsa', 'Pemusnahan dokumen dan produk yang telah kedaluwarsa merupakan bagian penting dari manajemen limbah yang aman dan sesuai dengan peraturan', 'Pemusnahan dokumen dan produk yang telah kedaluwarsa merupakan bagian penting dari manajemen limbah yang aman dan sesuai dengan peraturan', 'http://127.0.0.1:8000/pemusnahan-detail', 'layanan/RbEgmVL71kDKmz54mObaWtENHVEBpQhDA3NeOLXy.png', 'tps', NULL, NULL);

-- ----------------------------
-- Table structure for legalitas
-- ----------------------------
DROP TABLE IF EXISTS `legalitas`;
CREATE TABLE `legalitas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of legalitas
-- ----------------------------
INSERT INTO `legalitas` VALUES (1, 'NIB - Nomor Ijin Berusaha', '-', '-', '-', NULL, NULL);
INSERT INTO `legalitas` VALUES (2, 'NIB - Nomor Ijin Berusaha', '-', '', '-', NULL, NULL);
INSERT INTO `legalitas` VALUES (3, 'NIB - Nomor Ijin Berusaha', '-', '-', '-', NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2024_05_30_170719_create_tentangs_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_05_30_170858_create_legalitas_table', 1);
INSERT INTO `migrations` VALUES (6, '2024_05_30_171040_create_layanans_table', 1);
INSERT INTO `migrations` VALUES (7, '2024_05_30_171113_create_kliens_table', 1);
INSERT INTO `migrations` VALUES (8, '2024_05_30_171157_create_kontaks_table', 1);
INSERT INTO `migrations` VALUES (9, '2024_06_16_082020_create_websites_table', 1);
INSERT INTO `migrations` VALUES (10, '2024_06_17_042940_create_home_table', 1);
INSERT INTO `migrations` VALUES (11, '2024_06_25_132438_create_units_table', 1);
INSERT INTO `migrations` VALUES (12, '2024_06_28_042836_create_visitors_table', 1);
INSERT INTO `migrations` VALUES (13, '2024_07_04_045952_create_biayas_table', 1);
INSERT INTO `migrations` VALUES (14, '2024_07_20_062505_create_galeris_table', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id`) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('fUCFu0J7viDsyAVG9wpJVO4dmdxtA4hFymGVdl1H', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNGJkOG9wQk9TRVdIRmFQUmI0UmZaalJwUU9SNnJCSjRIdHhJdTJWWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZW50YW5nIjt9fQ==', 1722226464);

-- ----------------------------
-- Table structure for tentang
-- ----------------------------
DROP TABLE IF EXISTS `tentang`;
CREATE TABLE `tentang`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `gambar1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gambar2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gambar3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tentang',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tentang
-- ----------------------------
INSERT INTO `tentang` VALUES (1, 'BUMDesa Makmur Jaya SIDOMOJO', '\"<p class=\"fst-italic\" style=\"margin-bottom: 1rem; color: rgb(61, 67, 72); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><b>Bumdes Makmur Jaya Sidomojo adalah sebuah badan usaha milik desa yang bergerak dalam berbagai sektor ekonomi untuk meningkatkan kesejahteraan masyarakat desa. Dibentuk dengan tujuan utama untuk menciptakan lapangan kerja dan mengoptimalkan potensi lokal, Bumdes Makmur Jaya Sidomojo berhasil menjalankan berbagai program unggulan.Program tersebut meliputi :</b></p><ul style=\"padding: 0px; margin-bottom: 1rem; list-style: none;\"><li style=\"color: rgb(61, 67, 72); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; padding-bottom: 10px;\"><b><i class=\"bi bi-check-circle\" style=\"font-size: 1.25rem; margin-right: 4px; color: var(--accent-color);\"></i><span style=\"font-family: &quot;Comic Sans MS&quot;;\">&nbsp;Pengelolaan sampah.</span></b></li><li style=\"color: rgb(61, 67, 72); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; padding-bottom: 10px;\"><b><i class=\"bi bi-check-circle\" style=\"font-size: 1.25rem; margin-right: 4px; color: var(--accent-color);\"></i>&nbsp;Persewaan toko.</b></li><li style=\"padding-bottom: 10px;\"><b><font color=\"rgba(0, 0, 0, 0)\" face=\"Roboto, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 1.25rem;\"><i class=\"bi bi-check-circle\" style=\"font-size: 1.25rem; margin-right: 4px; color: var(--accent-color);\"></i></span></font><font color=\"#3d4348\" face=\"Roboto, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 16px;\">&nbsp;Penyediaan layanan keuangan mikro.</span></font><br></b><br><br></li></ul>\",', 'tentang/about-company-1.jpg', 'tentang/about-company-2.jpg', 'tentang/about-company-3.jpg', 'tentang', '2024-07-29 04:01:35', '2024-07-29 04:01:35');

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ringkasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES (1, 'TPS 3R - Tempat Pengolahan Sampah - Reduce, Reuse, Recycle', 'TPS 3R (Tempat Pengolahan Sampah - Reduce, Reuse, Recycle) adalah fasilitas pengolahan sampah yang bertujuan untuk mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir (TPA) melalui pendekatan pengurangan, penggunaan kembali, dan daur ulang. Berikut adalah penjelasan dari setiap elemen TPS 3R', 'TPS 3R (Tempat Pengolahan Sampah - Reduce, Reuse, Recycle) adalah fasilitas pengolahan sampah yang bertujuan untuk mengurangi jumlah sampah.', 'unit/CPd5cUCnPyXvKvpdx3iTtdcqvbtQRkVyrbh50Ycm.jpg', 'http://127.0.0.1:8000/tps3r-detail', 'tps', NULL, NULL);
INSERT INTO `units` VALUES (2, 'Unit Peminjaman Dana', 'Unit Peminjaman Dana adalah bagian dari lembaga keuangan mikro yang menyediakan layanan keuangan seperti simpanan dan pinjaman kepada anggotanya.', 'Unit Peminjaman Dana adalah bagian dari lembaga keuangan mikro yang menyediakan layanan keuangan seperti simpanan dan pinjaman kepada anggotanya.', 'unit/6XTHuh7WPiSVTOFXdRgzyz8ohC2JjHwymgjrqwb2.jpg', 'http://127.0.0.1:8000/pinjaman-detail', 'peminjaman', NULL, NULL);
INSERT INTO `units` VALUES (3, 'Persewaan Toko Pasar Desa', 'Fungsi dan Peran: Pusat Ekonomi: Pasar desa adalah tempat utama bagi warga desa untuk melakukan kegiatan jual beli. Ini termasuk hasil pertanian, produk peternakan, kerajinan tangan, dan barang kebutuhan sehari-hari. Sosial dan Budaya: Selain fungsi ekonominya, pasar desa juga berfungsi sebagai tempat bertemunya warga desa, memperkuat ikatan sosial, dan melestarikan budaya lokal melalui transaksi yang sering kali dilakukan dengan cara tradisional.', 'Pasar desa merupakan pasar tradisional yang terletak di wilayah pedesaan. Pasar ini berfungsi sebagai pusat ekonomi lokal di mana warga desa dapat menjual dan membeli berbagai barang dan jasa', 'unit/RbEgmVL71kDKmz54mObaWtENHVEBpQhDA3NeOLXy.png', 'http://127.0.0.1:8000/toko-detail', 'toko', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin Bumdes Makmur Jaya', 'bumdessidomojo1@gmail.com', NULL, '$2y$12$9ApcbSL4Hxj05DcmzlJ/D.6MiB7NpRokndrZFtIsfbOn3b29GwYjy', 'admin', 'yxAlOmYkcZV6yhWu02roH3MCijkTsv3h559klCEIZHe9wggUXmXQPXdjGKoC', '2024-07-29 04:01:35', '2024-07-29 04:01:35');
INSERT INTO `users` VALUES (2, 'Test User', 'test@example.com', '2024-07-29 04:01:35', '$2y$12$ubhSK/pnG55ooo8akWWXJ.ExZls/NcE5pSGfNwtIDOmrOMsEAkhFa', NULL, 'Z6YnjapHiu', '2024-07-29 04:01:36', '2024-07-29 04:01:36');

-- ----------------------------
-- Table structure for visitors
-- ----------------------------
DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visits` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `visitors_ip_address_unique`(`ip_address`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of visitors
-- ----------------------------
INSERT INTO `visitors` VALUES (1, '127.0.0.1', NULL, '2024-07-29 04:12:56', '2024-07-29 04:12:56');

-- ----------------------------
-- Table structure for websites
-- ----------------------------
DROP TABLE IF EXISTS `websites`;
CREATE TABLE `websites`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of websites
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
