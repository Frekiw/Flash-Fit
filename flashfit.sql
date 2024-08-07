-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id_article` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `articles` (`id_article`, `title`, `thumbnail`, `url`, `created_at`, `updated_at`) VALUES
(5,	'Main Dota',	'assets/article/OQWfOPnJna34GyfUsCU5H9DkfHiOWS1HO6FA9XZu.jpg',	'URL',	'2024-08-07 01:36:34',	'2024-08-07 01:36:34'),
(6,	'Main Dota 2',	'assets/article/yyOiSNK10bnKWHwPARdVKYtXY5w0yv2rVh7VuCkl.jpg',	'URL 2',	'2024-08-07 02:06:17',	'2024-08-07 02:26:59');

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id_banner` bigint unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `banners` (`id_banner`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(2,	'assets/banner/29S6Ct7UIpCH9YpPLwHjLU1XX6nFVnAfavbvDxMi.jpg',	'Kelas masak',	'2024-08-07 02:28:20',	'2024-08-07 02:28:20'),
(3,	'assets/banner/y8VKZOOF8c1UgX68Gz7WEum1bgcTqY7ITQmw8Jmp.jpg',	'Kelas masak 2',	'2024-08-07 02:29:25',	'2024-08-07 02:29:25'),
(4,	'assets/banner/x2WpuTs6kq0weh98xK0pQ4mCHY3sa1HvUpsXVsqg.jpg',	'Kelas masak 3',	'2024-08-07 02:29:39',	'2024-08-07 02:29:39'),
(5,	'assets/banner/5ss26boktYgEsBBwtcBAdeNbu4FIQFTVqAfSxXoX.jpg',	'Kelas masak 4',	'2024-08-07 02:30:01',	'2024-08-07 02:30:01');

DROP TABLE IF EXISTS `categoryclasses`;
CREATE TABLE `categoryclasses` (
  `id_categoryclass` bigint unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoryclass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `cutis`;
CREATE TABLE `cutis` (
  `id_cuti` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `durasi_cuti` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `durasi_cuti2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tanggal_pengajuan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `tanggal_pengajuan2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cutis` (`id_cuti`, `user_id`, `durasi_cuti`, `durasi_cuti2`, `tanggal_pengajuan`, `tanggal_pengajuan2`, `status`, `created_at`, `updated_at`) VALUES
(7,	1,	NULL,	'2 Bulan',	NULL,	'September 2024 - November 2024',	'active',	'2024-07-29 20:52:45',	'2024-07-29 22:04:02'),
(8,	1,	'1 Bulan',	NULL,	'2024-08',	NULL,	'Pending',	'2024-07-29 21:11:27',	'2024-07-29 21:11:27'),
(9,	1,	NULL,	'1 Bulan',	NULL,	'September 2024 - October 2024',	'Pending',	'2024-07-29 21:11:47',	'2024-07-29 21:11:47'),
(11,	1,	'1 Bulan',	NULL,	'2024-08',	NULL,	'declined',	'2024-07-30 21:42:18',	'2024-07-30 21:42:18');

DROP TABLE IF EXISTS `detail_transactions`;
CREATE TABLE `detail_transactions` (
  `id_detailtransaction` bigint unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `metode_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detailtransaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `detail_transactions` (`id_detailtransaction`, `transaction_id`, `user_id`, `detail`, `date`, `total`, `voucher`, `metode_id`, `picture`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	'Membership 3 bulan kategori Silver ',	'2024-08-06',	'256000',	'',	'2',	'assets/transaction/foto1.jpg',	'2024-08-06 07:21:07',	'2024-08-06 07:21:07'),
(2,	2,	1,	'Membership 3 bulan kategori Gold',	'2024-08-06',	'356000',	'VOUCHER 10.000',	'2',	'assets/transaction/foto2.jpg',	'2024-08-06 08:12:07',	'2024-08-06 08:12:07'),
(3,	3,	1,	'Membership 3 bulan kategori Bronze',	'2024-08-06',	'456000',	'',	'2',	'assets/transaction/foto3.jpg',	'2024-08-06 09:00:27',	'2024-08-06 09:00:27');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `hargasesis`;
CREATE TABLE `hargasesis` (
  `id_hargasesi` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `normal` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hargasesi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `hargasesis` (`id_hargasesi`, `name`, `total`, `normal`, `created_at`, `updated_at`) VALUES
(1,	'4 Sesi',	'800000',	'200000',	'2024-08-07 06:07:07',	'2024-08-06 23:07:07'),
(3,	'6 Sesi',	'1200000',	'200000',	'2024-08-06 23:12:06',	'2024-08-06 23:12:06'),
(4,	'8 Sesi',	'1600000',	'200000',	'2024-08-07 06:12:38',	'2024-08-06 23:12:38');

DROP TABLE IF EXISTS `jadwalkelas`;
CREATE TABLE `jadwalkelas` (
  `id_jadwalkelas` bigint unsigned NOT NULL AUTO_INCREMENT,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `class_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participant_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_jadwalkelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `jadwalkelas` (`id_jadwalkelas`, `time`, `date`, `class_id`, `participant_id`, `location_id`, `created_at`, `updated_at`) VALUES
(3,	'20:30:00',	'2024-08-06',	'4',	'12',	'2',	'2024-08-05 02:25:12',	'2024-08-05 23:32:05'),
(4,	'20:30:00',	'2024-08-08',	'3',	'15',	'4',	'2024-08-05 02:29:14',	'2024-08-05 02:29:14'),
(5,	'08:00:00',	'2024-08-11',	'7',	'15',	'4',	'2024-08-05 02:30:13',	'2024-08-05 02:30:13'),
(7,	'21:00:00',	'2024-08-05',	'8',	'12',	'2',	'2024-08-05 02:48:16',	'2024-08-05 02:48:16');

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` bigint unsigned NOT NULL AUTO_INCREMENT,
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `name` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `calories` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `kelas` (`id_kelas`, `picture`, `name`, `calories`, `description`, `created_at`, `updated_at`) VALUES
(1,	'assets/kelas/40SJg5W4h53VgWIsQBcA8d28Jmn42NuTd6aH844w.jpg',	'Test Kelas 123',	'1000 Kalori 123',	'Kelas masak 123',	'2024-08-05 07:54:03',	'2024-08-05 00:54:03'),
(2,	'assets/kelas/1pVs0LMBczG98E08aRidE0P4Bodj0JV9HICEWm6j.png',	'Zumba',	'500 kalori / jam',	'Deskripsi: Kelas kebugaran yang menggabungkan tarian Latin dan internasional.',	'2024-08-05 00:55:17',	'2024-08-05 00:55:17'),
(3,	'assets/kelas/LlC6lb2IOsI3GyvdtjyoroHmYFl0UAigATvRoBys.jpg',	'indoor cycling',	'400 Kalori Per jam',	'Bersepeda di dalam ruangan dengan variasi kecepatan dan intensita',	'2024-08-05 00:55:59',	'2024-08-05 00:55:59'),
(4,	'assets/kelas/CE5rTZlHKXxHnhFXl4Ef0HXNYbx7LkcRFMk3Tz6R.png',	'Body Pump',	'500 kalori / jam',	'Kelas latihan kekuatan yang menggunakan barbel ringan untuk repetisi tinggi.',	'2024-08-05 00:56:29',	'2024-08-05 00:56:29'),
(5,	'assets/kelas/esW6NvlDuzFz3rEpBnOnH9XXNPcSKfYr6hdjUmgp.jpg',	'HIIT',	'800 Kalori / jam',	'Latihan dengan intensitas tinggi dan interval pendek',	'2024-08-05 00:57:06',	'2024-08-05 00:57:06'),
(6,	'assets/kelas/ClY7zAI1Hrx8ue80j6qcVzysfsw3GiTfGqsC5WXT.jpg',	'Pilates',	'200 Kalori Per jam',	'Latihan yang fokus pada penguatan inti, fleksibilitas, dan keseimbangan.',	'2024-08-05 00:57:45',	'2024-08-05 00:57:45'),
(7,	'assets/kelas/Ol0nTjCsOCCgqovyvWENy5gJpmbLBI0Soq2zAONe.jpg',	'Kick Boxing',	'700 Kalori Per Jam',	'Kombinasi tinju dan tendangan',	'2024-08-05 00:58:26',	'2024-08-05 00:58:26'),
(8,	'assets/kelas/x8ZQEO1ZtnebTYadKJbjcwLiY4F6y7xuOwfAwn5h.png',	'Aerobic Air',	'700 Kalori Per Jam',	'Latihan aerobik yang dilakukan di air,',	'2024-08-05 00:59:09',	'2024-08-05 00:59:09');

DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id_location` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `map` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_location`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `locations` (`id_location`, `name`, `city`, `photo`, `map`, `created_at`, `updated_at`) VALUES
(2,	'Rungkut Permai Gym',	'Surabaya',	'assets/location/O2ELZhcGNl0bZgLi6Pn3bjNqh0V10wMiWQFbBXxe.jpg',	'MAP',	'2024-08-04 23:46:19',	'2024-08-04 23:46:19'),
(3,	'Siwalan Gym',	'Surabaya',	'assets/location/4JoiG68Mq2cDVkpcPl4DUasORhycWJIEY3dF15gW.jpg',	'123',	'2024-08-05 00:28:18',	'2024-08-05 00:28:18'),
(4,	'Petra gym',	'Surabaya',	'assets/location/iJUsmIXMwTS8StdMsy9xaT5i9QbYP00g6YjEyZJV.jpg',	'1234',	'2024-08-05 00:28:45',	'2024-08-05 00:28:45'),
(5,	'Cito Gym',	'Sidoarjo',	'assets/location/62zewTvJctOGKunJuSCROAW8VvTAAWd1CW3I8ySI.jpg',	'1234',	'2024-08-05 00:30:07',	'2024-08-05 00:30:07');

DROP TABLE IF EXISTS `metodes`;
CREATE TABLE `metodes` (
  `id_metode` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_rek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_metode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `metodes` (`id_metode`, `name`, `no_rek`, `created_at`, `updated_at`) VALUES
(2,	'Test Metode',	'Test Metode No Rek',	'2024-08-06 01:24:56',	'2024-08-06 01:24:56');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2020_05_21_100000_create_teams_table',	1),
(7,	'2020_05_21_200000_create_team_user_table',	1),
(8,	'2020_05_21_300000_create_team_invitations_table',	1),
(9,	'2024_07_24_071835_create_sessions_table',	1),
(10,	'2024_07_24_074503_create_kelas_table',	1),
(11,	'2024_07_24_074730_create_banners_table',	1),
(12,	'2024_07_24_074952_create_categoryclasses_table',	2),
(13,	'2024_07_24_075117_create_presences_table',	2),
(14,	'2024_07_24_075147_create_trainers_table',	2),
(15,	'2024_07_24_075212_create_trainerpresences_table',	2),
(16,	'2024_07_24_075238_create_vouchers_table',	2),
(17,	'2024_07_24_075301_create_tncs_table',	2),
(18,	'2024_07_24_075320_create_articles_table',	2),
(19,	'2024_07_24_075440_create_cutis_table',	2),
(20,	'2024_07_24_075612_create_settings_table',	2),
(21,	'2024_07_24_075632_create_locations_table',	2),
(22,	'2024_07_24_082328_create_transactions_table',	2),
(23,	'2024_07_24_082841_create_notifications_table',	2),
(24,	'2024_07_24_093341_create_memberships_table',	3),
(25,	'2024_07_24_093757_create_detail_transactions_table',	3);

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id_notification` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_notification`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `packageds`;
CREATE TABLE `packageds` (
  `id_packaged` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `monthly` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `yearly` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `benefit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_packaged`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `packageds` (`id_packaged`, `category`, `name`, `monthly`, `yearly`, `benefit`, `created_at`, `updated_at`) VALUES
(2,	'Gold',	'24 Month',	'Rp249.000/bulan',	'Rp5.976.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 01:54:58',	'2024-07-30 21:29:08'),
(5,	'Gold',	'6 Months',	'Rp325.000/bulan',	'Rp1.950.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 1 sesi PT</li></ul>',	'2024-07-30 21:25:11',	'2024-07-30 21:26:47'),
(6,	'Gold',	'18 Months',	'Rp259.000/bulan',	'Rp4.662.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:28:49',	'2024-07-30 21:28:49'),
(7,	'Gold',	'12 Months',	'Rp275.000/bulan',	'Rp.3.300.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:30:18',	'2024-07-30 21:30:18'),
(8,	'Silver',	'24 Month',	'Rp249.000/bulan',	'Rp5.976.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:34:21',	'2024-07-30 21:34:21'),
(9,	'Silver',	'18 Months',	'Rp259.000/bulan',	'Rp4.662.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:37:00',	'2024-07-30 21:37:00'),
(10,	'Bronze',	'12 Months',	'Rp275.000/bulan',	'Rp.3.300.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:38:50',	'2024-07-30 21:38:50'),
(11,	'Bronze',	'6 Months',	'Rp325.000/bulan',	'Rp1.950.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 1 sesi PT</li></ul>',	'2024-07-30 21:39:47',	'2024-07-30 21:39:47');

DROP TABLE IF EXISTS `participants`;
CREATE TABLE `participants` (
  `id_participant` bigint NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `packaged_id` int DEFAULT NULL,
  `category_m` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name_m` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga_m` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sales_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_trainer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `total_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_participant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `participants` (`id_participant`, `tanggal`, `code`, `name`, `email`, `tgl_lahir`, `no_telp`, `packaged_id`, `category_m`, `name_m`, `harga_m`, `sales_id`, `roles`, `foto_trainer`, `total_client`, `rating`, `instagram`, `created_at`, `updated_at`) VALUES
(1,	'2024-01-01',	'3187223',	'Virgusto Raharjooo',	NULL,	'2015-01-01',	'0852 1111 3333',	2,	'Bronze',	NULL,	'Rp275.000/bulan',	NULL,	'member',	NULL,	NULL,	NULL,	NULL,	'2024-08-01 08:11:14',	'2024-08-01 01:11:14'),
(12,	'2024-08-02',	'TR1558',	'Rangga HTML',	NULL,	'2006-02-19',	'0887 5872 1531',	NULL,	NULL,	NULL,	NULL,	NULL,	'trainer',	'assets/trainer/7ELXjgJvNUsAeDSTJ7b2f5EC4QGIZYZoDdDuHkVP.jpg',	'15',	'4,5',	'Rangga GNA',	'2024-08-07 03:59:09',	'2024-08-06 20:59:09'),
(13,	'2024-08-02',	'TR3237',	'Virgusto Verta',	NULL,	'2006-08-24',	'0877 5555 4444',	NULL,	NULL,	NULL,	NULL,	NULL,	'trainer',	'assets/trainer/lFKDOAb93J2W15DjAcJxeER4lv6jO2jbEwUl9Dde.jpg',	'15',	'5,0',	'KaymalLL',	'2024-08-01 20:25:30',	'2024-08-01 20:25:30'),
(14,	'2024-08-02',	'TR7369',	'jodi php',	NULL,	'2007-06-20',	'0855 4818 2000',	NULL,	NULL,	NULL,	NULL,	NULL,	'trainer',	'assets/trainer/vAUG3D2xdui9hOWm6nc3EiGGohzgkgP7jbXgszwI.jpg',	'20',	'4,5',	'sapahayoo',	'2024-08-07 04:01:08',	'2024-08-06 21:01:08'),
(15,	'2024-08-02',	'TR9102',	'Thiery Henry',	NULL,	'2010-10-10',	'0887 1010 2020',	NULL,	NULL,	NULL,	NULL,	NULL,	'trainer',	'assets/trainer/1o7Apz7VlDYeA4TBzPswlJYNcZS6XhLUnI6Hcp4P.jpg',	'20',	'4,5',	'AyamGoyeng',	'2024-08-01 20:27:44',	'2024-08-01 20:27:44'),
(16,	'2024-08-02',	'MM2726',	'Ranggaaa',	NULL,	'2003-03-10',	'0898 8888 3333',	2,	'Gold',	'24 Month',	'Rp5.976.000',	NULL,	'member',	NULL,	NULL,	NULL,	NULL,	'2024-08-02 08:58:44',	'2024-08-02 01:58:44'),
(17,	'2024-08-07',	'MM6815',	'jodi12',	NULL,	'2005-05-20',	'0852 1111 2222',	2,	'Gold',	'24 Month',	'Rp249.000/bulan',	NULL,	'member',	NULL,	NULL,	NULL,	NULL,	'2024-08-06 20:31:47',	'2024-08-06 20:31:47'),
(18,	'2024-08-07',	'MM3605',	'anaktampan',	NULL,	'2001-06-25',	'0852 4444 3333',	5,	'Gold',	'6 Months',	'Rp325.000/bulan',	NULL,	'member',	NULL,	NULL,	NULL,	NULL,	'2024-08-06 20:33:16',	'2024-08-06 20:33:16'),
(19,	'2024-08-07',	'MM9179',	'Wildan Piw',	NULL,	'2004-02-17',	'0819 9192 2982',	7,	'Gold',	'12 Months',	'Rp.3.300.000',	NULL,	'member',	NULL,	NULL,	NULL,	NULL,	'2024-08-06 20:53:19',	'2024-08-06 20:53:19');

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `presences`;
CREATE TABLE `presences` (
  `id_presence` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_presence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id_sales` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(455) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telp` varchar(455) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code_sales` varchar(455) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `sales` (`id_sales`, `name`, `no_telp`, `code_sales`, `created_at`, `updated_at`) VALUES
(2,	'lolologabahayata',	'78798',	'3453535',	'2024-08-01 04:31:57',	'2024-07-31 21:31:57'),
(3,	'test123',	'0852',	'SL003',	'2024-08-01 04:36:23',	'2024-07-31 21:36:23');

DROP TABLE IF EXISTS `session_transactions`;
CREATE TABLE `session_transactions` (
  `id_session` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hargasesi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `total_sesi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_session`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `session_transactions` (`id_session`, `user_id`, `hargasesi_id`, `status`, `total_sesi`, `created_at`, `updated_at`) VALUES
(1,	'1',	'1',	'active',	'4',	'2024-08-07 07:10:46',	'2024-08-07 00:10:46'),
(2,	'5',	'2',	'pending',	'6',	'2024-08-07 07:13:55',	'2024-08-07 07:12:55');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0fKgK41kjGsryIfbrNbBWTZVEuDpO1QM5knhlkQ2',	1,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMDB5S05MQ1l0dDdTRDRkWXd2TWVMZVhTN1NKdE9XakhwSTdwQk5ZNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozODoiaHR0cDovL2ZsYXNoZml0LnRlc3QvZGFzaGJvYXJkL2Jhbm5lcnMiO319',	1723023037);

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id_setting` bigint unsigned NOT NULL AUTO_INCREMENT,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_membership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tnc_cuti` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`id_setting`, `banner`, `banner2`, `promo_pt`, `promo_membership`, `tnc_cuti`, `created_at`, `updated_at`) VALUES
(1,	'Banner 123',	'Banner 2 123',	'Promo PT 123',	'Promo Membership 123',	'<p>Loremipsum dolor sit amet 123 test</p>',	'2024-08-06 04:35:38',	'2024-08-05 21:35:38');

DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE `team_invitations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`),
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `team_user`;
CREATE TABLE `team_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1,	2,	'anaktampan\'s Team',	1,	'2024-07-24 02:49:10',	'2024-07-24 02:49:10');

DROP TABLE IF EXISTS `tncs`;
CREATE TABLE `tncs` (
  `id_tnc` bigint unsigned NOT NULL AUTO_INCREMENT,
  `required` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tnc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tncs` (`id_tnc`, `required`, `policy`, `created_at`, `updated_at`) VALUES
(1,	'<p>Lorem Ipsum Emot batu <strong>312</strong></p>',	'<p>Lorem Ipsum Emot Policy 123 watwet</p>',	'2024-07-30 07:03:38',	'2024-07-30 00:12:05');

DROP TABLE IF EXISTS `trainerpresences`;
CREATE TABLE `trainerpresences` (
  `id_trainerpresence` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(455) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `participant_id` int DEFAULT NULL,
  `remains` varchar(455) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_trainerpresence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `trainerpresences` (`id_trainerpresence`, `user_id`, `date`, `time`, `location`, `participant_id`, `remains`, `created_at`, `updated_at`) VALUES
(1,	1,	'2024-08-07',	'15.00',	'Rungkut Permai Gym',	12,	'7 Sesi',	'2024-08-07 04:31:57',	'2024-08-07 04:31:57');

DROP TABLE IF EXISTS `trainers`;
CREATE TABLE `trainers` (
  `id_trainer` bigint unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_client` bigint DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_trainer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id_transaction` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id_transaction`, `date`, `category`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1,	'2024-08-06',	'New Member',	'256000',	'approved',	'2024-08-06 07:19:08',	'2024-08-07 00:06:54'),
(2,	'2024-08-06',	'New Member',	'356000',	'approved',	'2024-08-06 08:11:27',	'2024-08-06 01:53:04'),
(3,	'2024-08-06',	'New Member',	'356000',	'declined',	'2024-08-06 08:59:17',	'2024-08-06 08:59:17');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_member` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_sales` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_refal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `code_member`, `code_sales`, `code_refal`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `roles`, `current_team_id`, `profile_photo_path`, `phone`, `created_at`, `updated_at`) VALUES
(1,	'anaktampan',	'anaktampan@gmail.com',	'MM3605',	'3453535',	'',	NULL,	'$2y$12$Cycv19LevHmdbcaszTcuAuZUwS11vyViciVJTFT8br7l6zyiRBxAK',	'',	'',	NULL,	'',	'ADMIN',	1,	'assets/user/LYniJ4MFn4zye3zjXAayBSCFmLS5SYwHQ5UX59a9.jpg',	'',	'2024-07-24 02:49:10',	'2024-08-06 20:44:12'),
(5,	'jodi12',	'jodi12@gmail.com',	'MM6815',	'SL003',	'',	NULL,	'$2y$12$433132FNjP4LIrxz8e9eb./y9v8K8n/eBjdXNQj1eFRn.sxwXWpKe',	'',	'',	NULL,	'',	'',	NULL,	'assets/user/m61ufQ2rYR6Qrzei9AazrryWFEyQFIh8oyHuC2rj.jpg',	'',	'2024-08-02 01:48:15',	'2024-08-02 01:52:49'),
(7,	'Wildan Piw',	'wildanpiw@gmail.com',	'MM9179',	'SL003',	NULL,	NULL,	'$2y$12$mv4muT7yXCy5WuKtkMxaLuK9ydUMhYtSSKyu6tcfaXULZWNOcVnga',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'assets/user/hEi4NTINPLe2AQVssCru3cvhwH5C566K6zVRwWGL.jpg',	NULL,	'2024-08-06 20:56:22',	'2024-08-06 20:56:22');

DROP TABLE IF EXISTS `vouchers`;
CREATE TABLE `vouchers` (
  `id_voucher` bigint unsigned NOT NULL AUTO_INCREMENT,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `vouchers` (`id_voucher`, `discount`, `code`, `exp_date`, `detail`, `created_at`, `updated_at`) VALUES
(1,	'10000',	'AGS07',	'2024-08-20',	'-',	'2024-08-07 07:50:27',	'2024-08-07 07:50:27'),
(2,	'20000',	'AGS07',	'2024-08-20',	'-',	'2024-08-07 08:29:23',	'2024-08-07 08:29:23');

-- 2024-08-07 09:43:48
