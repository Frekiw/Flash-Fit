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
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `articles` (`id_article`, `title`, `thumbnail`, `url`, `content`, `created_at`, `updated_at`) VALUES
(5,	'Main Dota',	'assets/article/OQWfOPnJna34GyfUsCU5H9DkfHiOWS1HO6FA9XZu.jpg',	'URLuideutdtewtdiufewturtuetriuewtruetruetuteuwt',	'A gym provides access to a variety of equipment that can help you build strength, improve cardiovascular health, and increase flexibility. Whether you’re lifting weights, running on a treadmill, or attending a yoga class, the gym offers a structured environment where you can focus on your fitness goals. The diversity of equipment available—from free weights and machines to resistance bands and kettlebells—ensures that you can work out different muscle groups and achieve a balanced level of fitness.',	'2024-08-07 01:36:34',	'2024-08-18 21:39:19'),
(6,	'Main Dota 2',	'assets/article/yyOiSNK10bnKWHwPARdVKYtXY5w0yv2rVh7VuCkl.jpg',	'URL 2',	'A gym provides access to a variety of equipment that can help you build strength, improve cardiovascular health, and increase flexibility. Whether you’re lifting weights, running on a treadmill, or attending a yoga class, the gym offers a structured environment where you can focus on your fitness goals. The diversity of equipment available—from free weights and machines to resistance bands and kettlebells—ensures that you can work out different muscle groups and achieve a balanced level of fitness.',	'2024-08-07 02:06:17',	'2024-08-07 02:26:59'),
(9,	'test 3',	'assets/article/g4zfOVFamWDEtny8IzdrHWdL89Mm3ZL2hhbsnuWx.png',	'https://flashfit.com/article/9',	'<p>In addition to physical health benefits, regular visits to the gym can significantly boost your mental health. Exercise has been proven to release endorphins, which are chemicals in the brain that act as natural painkillers and mood elevators. This means that after a good workout, you’ll likely feel happier and more relaxed. The gym can also serve as a social outlet where you meet like-minded individuals who are also on a journey to better health. Group fitness classes, in particular, can foster a sense of community and provide motivation as you work towards your goals alongside others.</p>',	'2024-08-21 22:08:32',	'2024-08-21 22:08:32'),
(10,	'Test article 4',	'assets/article/Fa8XOSF8awKFBNxZsHvlXVtgwlevQHPha4RpRbNm.png',	'https://flashfit.com/article/10',	'<p>In addition to physical health benefits, regular visits to the gym can significantly boost your mental health. Exercise has been proven to release endorphins, which are chemicals in the brain that act as natural painkillers and mood elevators. This means that after a good workout, you’ll likely feel happier and more relaxed. The gym can also serve as a social outlet where you meet like-minded individuals who are also on a journey to better health. Group fitness classes, in particular, can foster a sense of community and provide motivation as you work towards your goals alongside others.</p><p>In addition to physical health benefits, regular visits to the gym can significantly boost your mental health. Exercise has been proven to release endorphins, which are chemicals in the brain that act as natural painkillers and mood elevators. This means that after a good workout, you’ll likely feel happier and more relaxed. The gym can also serve as a social outlet where you meet like-minded individuals who are also on a journey to better health. Group fitness classes, in particular, can foster a sense of community and provide motivation as you work towards your goals alongside others.</p>',	'2024-08-21 23:43:16',	'2024-08-21 23:43:16'),
(11,	'Test article 5',	'assets/article/3ZH3GpLVk7Y58VJiCv6mpPfMhlbB76QxcRw2Th4Q.jpg',	'https://flashfit.com/article/11',	'<p>In addition to physical health benefits, regular visits to the gym can significantly boost your mental health. Exercise has been proven to release endorphins, which are chemicals in the brain that act as natural painkillers and mood elevators. This means that after a good workout, you’ll likely feel happier and more relaxed. The gym can also serve as a social outlet where you meet like-minded individuals who are also on a journey to better health. Group fitness classes, in particular, can foster a sense of community and provide motivation as you work towards your goals alongside others.</p><p>Moreover, the gym environment can instill a sense of discipline and routine in your life. Making the gym a part of your daily or weekly routine helps to build consistency, which is crucial for long-term success. Over time, you may find that your gym routine becomes a habit, making it easier to maintain a healthy lifestyle. The discipline you develop in sticking to your workout schedule can also translate into other areas of your life, such as work, diet, and personal goals.</p>',	'2024-08-21 23:50:36',	'2024-08-21 23:50:36'),
(12,	'Test 123',	'assets/article/TR9iiZ3qnflDpERgwy7ydwJrGGJDabDnQ98TkQZQ.jpg',	'https://flashfit.com/article/12',	'<p>lorem ipsunm dolor sit amet</p>',	'2024-08-21 23:54:45',	'2024-08-21 23:54:45');

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
(5,	'assets/banner/5ss26boktYgEsBBwtcBAdeNbu4FIQFTVqAfSxXoX.jpg',	'Kelas masakkk 4',	'2024-08-07 02:30:01',	'2024-08-15 20:44:02');

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
(16,	11,	NULL,	'1 Bulan',	NULL,	'October 2024 - November 2024',	'active',	'2024-09-05 19:41:53',	'2024-09-05 19:42:43');

DROP TABLE IF EXISTS `detail_transactions`;
CREATE TABLE `detail_transactions` (
  `id_detailtransaction` bigint unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint unsigned DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detailtransaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `detail_transactions` (`id_detailtransaction`, `transaction_id`, `detail`, `date`, `total`, `created_at`, `updated_at`) VALUES
(1,	1,	'Membership 3 bulan kategori Silver ',	'2024-08-06',	'246000',	'2024-08-06 07:21:07',	'2024-08-06 07:21:07'),
(2,	2,	'Membership 3 bulan kategori Gold',	'2024-08-06',	'336000',	'2024-08-06 08:12:07',	'2024-08-06 08:12:07'),
(3,	3,	'Membership 3 bulan kategori Bronze',	'2024-08-06',	'436000',	'2024-08-06 09:00:27',	'2024-08-06 09:00:27'),
(4,	4,	'Membership 3 bulan kategori Gold',	'2024-08-13',	'190000',	'2024-08-13 08:58:13',	'2024-08-13 08:58:13'),
(5,	5,	'Membership 3 bulan kategori Gold',	'2024-08-13',	'450000',	'2024-08-13 08:58:57',	'2024-08-13 08:58:57'),
(7,	9,	'Membership 3 bulan kategori Silver ',	'2024-08-06',	'400000',	'2024-09-17 23:07:11',	'2024-09-17 23:07:11'),
(8,	10,	'Membership 3 bulan kategori Silver ',	'2024-08-06',	'390000',	'2024-09-17 23:08:17',	'2024-09-17 23:08:17'),
(9,	11,	'Sesi Personal Training ',	'2024-08-06',	'390000',	'2024-09-17 23:09:48',	'2024-09-17 23:09:48');

DROP TABLE IF EXISTS `faildebits`;
CREATE TABLE `faildebits` (
  `id_faildebit` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_faildebit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


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

DROP TABLE IF EXISTS `jadwal_trainings`;
CREATE TABLE `jadwal_trainings` (
  `id_jadwaltraining` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `schedule` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `detail_sesi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `trainer_id` int DEFAULT NULL,
  `sisa_sesi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_jadwaltraining`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `jadwal_trainings` (`id_jadwaltraining`, `user_id`, `schedule`, `detail_sesi`, `trainer_id`, `sisa_sesi`, `created_at`, `updated_at`) VALUES
(6,	12,	'Minggu - 09:45\\nMinggu - 10:46',	'Basic 1 (2 Sesi)',	22,	'2',	'2024-09-05 19:46:10',	'2024-09-05 19:46:10');

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
(4,	'20:30:00',	'2024-08-08',	'3',	'15',	'5',	'2024-08-05 02:29:14',	'2024-08-05 02:29:14'),
(5,	'08:00:00',	'2024-08-11',	'7',	'15',	'6',	'2024-08-05 02:30:13',	'2024-08-05 02:30:13'),
(7,	'21:00:00',	'2024-08-05',	'8',	'12',	'2',	'2024-08-05 02:48:16',	'2024-08-05 02:48:16'),
(8,	'23:00:00',	'2024-08-19',	'1',	'12',	'2',	'2024-08-19 23:20:04',	'2024-08-19 23:21:12');

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
(1,	'assets/kelas/40SJg5W4h53VgWIsQBcA8d28Jmn42NuTd6aH844w.jpg',	'Test Kelas 123',	'55555',	'Kelas masak 123',	'2024-08-20 06:42:39',	'2024-08-19 23:42:39'),
(2,	'assets/kelas/1pVs0LMBczG98E08aRidE0P4Bodj0JV9HICEWm6j.png',	'Zumba',	'500',	'Deskripsi: Kelas kebugaran yang menggabungkan tarian Latin dan internasional.',	'2024-08-20 06:43:02',	'2024-08-19 23:43:02'),
(3,	'assets/kelas/LlC6lb2IOsI3GyvdtjyoroHmYFl0UAigATvRoBys.jpg',	'indoor cycling',	'400',	'Bersepeda di dalam ruangan dengan variasi kecepatan dan intensita',	'2024-08-20 06:43:18',	'2024-08-19 23:43:18'),
(4,	'assets/kelas/CE5rTZlHKXxHnhFXl4Ef0HXNYbx7LkcRFMk3Tz6R.png',	'Body Pump',	'500',	'Kelas latihan kekuatan yang menggunakan barbel ringan untuk repetisi tinggi.',	'2024-08-20 06:43:25',	'2024-08-19 23:43:25'),
(5,	'assets/kelas/esW6NvlDuzFz3rEpBnOnH9XXNPcSKfYr6hdjUmgp.jpg',	'HIIT',	'800',	'Latihan dengan intensitas tinggi dan interval pendek',	'2024-08-20 06:43:32',	'2024-08-19 23:43:32'),
(6,	'assets/kelas/ClY7zAI1Hrx8ue80j6qcVzysfsw3GiTfGqsC5WXT.jpg',	'Pilates',	'200',	'Latihan yang fokus pada penguatan inti, fleksibilitas, dan keseimbangan.',	'2024-08-20 06:43:41',	'2024-08-19 23:43:41'),
(7,	'assets/kelas/Ol0nTjCsOCCgqovyvWENy5gJpmbLBI0Soq2zAONe.jpg',	'Kick Boxing',	'700',	'Kombinasi tinju dan tendangan',	'2024-08-20 06:43:48',	'2024-08-19 23:43:48'),
(8,	'assets/kelas/x8ZQEO1ZtnebTYadKJbjcwLiY4F6y7xuOwfAwn5h.png',	'Aerobic Air',	'700',	'Latihan aerobik yang dilakukan di air,',	'2024-08-20 06:43:57',	'2024-08-19 23:43:57');

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
(3,	'Royal Plaza Gym',	'Surabaya',	'assets/location/4JoiG68Mq2cDVkpcPl4DUasORhycWJIEY3dF15gW.jpg',	'123',	'2024-08-05 00:28:18',	'2024-09-05 19:52:43'),
(5,	'Cito Gym',	'Sidoarjo',	'assets/location/62zewTvJctOGKunJuSCROAW8VvTAAWd1CW3I8ySI.jpg',	'1234',	'2024-08-05 00:30:07',	'2024-08-05 00:30:07'),
(6,	'Lippo Plaza Gym',	'Sidoarjo',	'assets/location/0RyrHIPXCW1Etr57bw8xMq7tBRKub0qLnAgQxiQ2.jpg',	'123',	'2024-09-05 19:53:21',	'2024-09-05 19:53:21');

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

INSERT INTO `notifications` (`id_notification`, `category`, `title`, `description`, `author`, `date`, `created_at`, `updated_at`) VALUES
(2,	'Kelas',	'Test Judul',	'Kelas masak',	'AAuthor Test',	'2024-02-20',	'2024-08-14 21:36:18',	'2024-08-14 21:36:18');

DROP TABLE IF EXISTS `packageds`;
CREATE TABLE `packageds` (
  `id_packaged` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `benefit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_packaged`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `packageds` (`id_packaged`, `category`, `name`, `price`, `benefit`, `created_at`, `updated_at`) VALUES
(2,	'Gold',	'24 Month',	'Rp5.976.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 01:54:58',	'2024-07-30 21:29:08'),
(5,	'Gold',	'6 Months',	'Rp1.950.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 1 sesi PT</li></ul>',	'2024-07-30 21:25:11',	'2024-07-30 21:26:47'),
(6,	'Gold',	'18 Months',	'Rp4.662.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:28:49',	'2024-07-30 21:28:49'),
(7,	'Gold',	'12 Months',	'Rp.3.300.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:30:18',	'2024-07-30 21:30:18'),
(8,	'Silver',	'24 Month',	'Rp5.976.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:34:21',	'2024-07-30 21:34:21'),
(9,	'Silver',	'18 Months',	'Rp4.662.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:37:00',	'2024-07-30 21:37:00'),
(10,	'Bronze',	'12 Months',	'Rp.3.300.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 2 sesi PT</li></ul>',	'2024-07-30 21:38:50',	'2024-07-30 21:38:50'),
(11,	'Bronze',	'6 Months',	'Rp1.950.000',	'<ul><li>Akses ke seluruh FIT HUB se-indonesia</li><li>Gratis Kelas fitness setiap Hari</li><li>Gratis 1 sesi PT</li></ul>',	'2024-07-30 21:39:47',	'2024-07-30 21:39:47');

DROP TABLE IF EXISTS `participants`;
CREATE TABLE `participants` (
  `id_participant` bigint NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code_sales` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code_referal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `packaged_id` int DEFAULT NULL,
  `category_m` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name_m` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga_m` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_trainer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `total_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `point` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '0',
  `failed_debit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_participant`),
  KEY `location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `participants` (`id_participant`, `tanggal`, `code`, `code_sales`, `code_referal`, `name`, `email`, `tgl_lahir`, `no_telp`, `location_id`, `packaged_id`, `category_m`, `name_m`, `harga_m`, `roles`, `foto_trainer`, `total_client`, `rating`, `instagram`, `point`, `failed_debit`, `created_at`, `updated_at`) VALUES
(20,	'2024-09-06',	'MM7747',	'SL0013',	NULL,	'Mas Zultan',	'zultan@gmail.com',	'2001-01-20',	'9023 2312 3212',	'2',	11,	'Bronze',	'6 Months',	'Rp1.950.000',	'member',	'',	NULL,	NULL,	NULL,	'0',	'false',	'2024-09-11 06:54:24',	'2024-09-10 23:54:24'),
(21,	'2024-09-06',	'MM1860',	'SL0013',	'MM7747',	'Mas Rangga',	'rungga@gmail.com',	'2001-10-10',	'1233 4212 1232',	'3',	7,	'Gold',	'12 Months',	'Rp.3.300.000',	'member',	'',	'',	'',	'',	'0',	'false',	'2024-09-05 19:33:13',	'2024-09-05 19:33:13'),
(22,	'2024-09-06',	'TR6494',	'SL0013',	'',	'Ronaldo0911',	'ronaldo0911@gmail.com',	'1995-10-10',	'2000 1000 1000',	'5',	NULL,	'',	'',	'',	'trainer',	'assets/trainer/LKrDVaHhGeo7ouyv5uw1tCCGODMJ3xT0xlnx1wpg.jpg',	'10',	'5.0',	'instagram.com/haha',	'0',	'false',	'2024-09-06 02:38:18',	'2024-09-05 19:38:18'),
(23,	'2024-09-11',	'MM5890',	'SL0013',	NULL,	'Mas Faza',	'Fazana@gmail.com',	'2000-06-19',	'3232 1234 5321',	'6',	2,	'Gold',	'24 Month',	'Rp5.976.000',	'member',	NULL,	NULL,	NULL,	NULL,	'0',	'false',	'2024-09-11 07:08:51',	'2024-09-11 00:08:51'),
(24,	'2024-09-06',	'MM4411',	'SL0013',	NULL,	'Mas Salim',	'alimsalim@gmail.com',	'2001-01-20',	'9821 1234 2123',	'2',	11,	'Bronze',	'6 Months',	'Rp1.950.000',	'member',	NULL,	NULL,	NULL,	NULL,	'0',	'false',	'2024-09-11 00:33:25',	'2024-09-11 00:33:25'),
(27,	'2024-09-06',	'MM7481',	'SL0013',	'MM4411',	'Mas Salim Part 3',	'alimsalim3@gmail.com',	'2001-10-20',	'9821 1234 2123',	'2',	11,	'Bronze',	'6 Months',	'Rp1.950.000',	'member',	NULL,	NULL,	NULL,	NULL,	'0',	'false',	'2024-09-11 00:37:01',	'2024-09-11 00:37:01');

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

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1,	'App\\Models\\User',	1,	'authToken',	'5a3a10098a7a1eb2a46e2840bd86adc9ccf904993e8cdc93835c77e638d133ab',	'[\"*\"]',	'2024-08-18 20:58:19',	NULL,	'2024-08-13 00:16:48',	'2024-08-18 20:58:19'),
(2,	'App\\Models\\User',	1,	'authToken',	'5e27ca7ec2cc97159ae75fceb8bd7679ad503c4f2f3fbbc7d31ce1f340897ff0',	'[\"*\"]',	'2024-08-20 21:11:51',	NULL,	'2024-08-13 00:41:58',	'2024-08-20 21:11:51'),
(3,	'App\\Models\\User',	1,	'authToken',	'256230989a8f4e6b966fb88b0b725b8b5a3f19deb427bc833d9a4ecd9066bd52',	'[\"*\"]',	'2024-09-11 20:15:10',	NULL,	'2024-08-13 01:34:40',	'2024-09-11 20:15:10'),
(4,	'App\\Models\\User',	1,	'authToken',	'9979da26b10e9f4b0becd9e750c64947dabe8aa75be4bc2c36bee458a37edabc',	'[\"*\"]',	NULL,	NULL,	'2024-08-18 21:00:25',	'2024-08-18 21:00:25'),
(5,	'App\\Models\\User',	1,	'authToken',	'b6cf1d6e70843e16cb6d04b70c70c22a36b34e986adbed217724130f4edaa080',	'[\"*\"]',	NULL,	NULL,	'2024-08-18 21:07:05',	'2024-08-18 21:07:05'),
(6,	'App\\Models\\User',	1,	'authToken',	'65d4ae45354082fd6e9749c3496ccf00210e239263891f16172c3c46c8a08f92',	'[\"*\"]',	NULL,	NULL,	'2024-08-18 21:09:02',	'2024-08-18 21:09:02'),
(7,	'App\\Models\\User',	1,	'authToken',	'0e1dce5a0fd82611e81ce19fdaad64deed6981040cd0a36ba2d770ca0e29e518',	'[\"*\"]',	NULL,	NULL,	'2024-08-18 21:11:22',	'2024-08-18 21:11:22'),
(8,	'App\\Models\\User',	1,	'authToken',	'955f9c5c2ed9898c5a68378c7d6119ffdc02438bb146d615dcabe8b605c44111',	'[\"*\"]',	'2024-08-18 21:19:17',	NULL,	'2024-08-18 21:12:39',	'2024-08-18 21:19:17'),
(9,	'App\\Models\\User',	1,	'authToken',	'c34fce89af434ec670420035baacc1145f71f2cd8071ae4df21f36fd9935b2db',	'[\"*\"]',	'2024-09-10 21:46:55',	NULL,	'2024-08-20 21:09:22',	'2024-09-10 21:46:55'),
(10,	'App\\Models\\User',	1,	'authToken',	'168f85fbd6150da28cda37c5a21af244181915ba5e2aa131f9a72475fc4fde51',	'[\"*\"]',	'2024-09-17 23:09:47',	NULL,	'2024-09-10 21:25:16',	'2024-09-17 23:09:47');

DROP TABLE IF EXISTS `presences`;
CREATE TABLE `presences` (
  `id_presence` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_presence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `presences` (`id_presence`, `user_id`, `date`, `time`, `location_id`, `created_at`, `updated_at`) VALUES
(1,	1,	'2024-09-06',	'15:00',	'2',	'2024-09-06 03:19:13',	'2024-09-06 03:19:13');

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
(13,	'Mas Septian',	'0888 2323 2333',	'SL0013',	'2024-09-06 02:21:01',	'2024-09-05 19:21:01');

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
(1,	'1',	'1',	'pending',	'4',	'2024-09-06 02:59:51',	'2024-09-05 19:59:51');

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
('btHIcMnOcGyDg84oS6gjrS59LOeAyKEAlsLxnEjJ',	1,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNXBwTVlVTU1pOXVxUGtrV1F3RndHSDBRZGkyU0Rmd2tUMmJVUGFndyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9mbGFzaGZpdC50ZXN0L2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',	1726640668),
('R7UnXwUJ5MQWyEzugVQV4TFBJYnKLeN9SubWURop',	1,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQVg0OXZBOXp5bGR2NWdrUjVuRGxsN3IwNjF1UnBqRjVIeDR0MUNLUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9mbGFzaGZpdC50ZXN0L2Rhc2hib2FyZC9hY2NvdW50cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',	1726113897),
('X0CZ4r1CvX0LEn5uT1GNlJd13wjQ9uykxhabp1vP',	NULL,	'127.0.0.1',	'PostmanRuntime/7.41.1',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmVxMk1CVENpa29oYzdoc3RSd3A2R29VSVdKMXdrMVEycDdoSmlqeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9mbGFzaGZpdC50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',	1726111999);

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id_setting` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tnc_daftar1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tnc_daftar2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tnc_daftar3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tnc_pt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tnc_cuti` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`id_setting`, `tnc_daftar1`, `tnc_daftar2`, `tnc_daftar3`, `tnc_pt`, `tnc_cuti`, `created_at`, `updated_at`) VALUES
(1,	'<p>daftar 1</p>',	'<p>daftar 2</p>',	'<p>daftar 3</p>',	'<p>personal trainer</p>',	'<p>Loremipsum dolor sit amet 123 test 123</p>',	'2024-09-06 02:43:09',	'2024-09-05 19:43:09');

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
  `location_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `participant_id` int DEFAULT NULL,
  `remains` varchar(455) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_trainerpresence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `trainerpresences` (`id_trainerpresence`, `user_id`, `date`, `time`, `location_id`, `participant_id`, `remains`, `created_at`, `updated_at`) VALUES
(1,	1,	'2024-08-07',	'15.00',	'2',	22,	'7 Sesi',	'2024-08-07 04:31:57',	'2024-08-07 04:31:57');

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
  `user_id` bigint DEFAULT NULL,
  `metode_id` bigint DEFAULT NULL,
  `date` date DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_asli` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potongan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id_transaction`, `user_id`, `metode_id`, `date`, `category`, `harga_asli`, `potongan`, `voucher`, `total`, `status`, `picture`, `created_at`, `updated_at`) VALUES
(1,	1,	2,	'2024-08-06',	'New Member',	'266000',	'10000',	'',	'256000',	'pending',	'assets/transaction/foto1.jpg',	'2024-08-06 07:19:08',	'2024-09-17 20:53:52'),
(2,	1,	2,	'2024-08-06',	'New Member',	'366000',	'10000',	'VOUCHER 10000',	'346000',	'approved',	'assets/transaction/foto2.jpg',	'2024-08-06 08:11:27',	'2024-08-06 01:53:04'),
(3,	1,	2,	'2024-08-06',	'New Member',	'406000',	'50000',	'VOUCHER 10000',	'346000',	'declined',	'assets/transaction/foto3.jpg',	'2024-08-06 08:59:17',	'2024-08-06 08:59:17'),
(4,	1,	2,	'2024-08-13',	'Re-New',	'500000',	'100000',	'VOUCHER 10000',	'390000',	'approved',	'assets/transaction/foto4.jpg',	'2024-08-13 06:00:47',	'2024-09-11 01:48:00'),
(5,	1,	2,	'2024-08-13',	'Re-New',	'700000',	'200000',	'VOUCHER 10000',	'490000',	'approved',	'assets/transaction/foto5.jpg',	'2024-08-13 06:01:24',	'2024-09-11 01:33:57'),
(9,	1,	2,	'2024-08-06',	'Re-New',	'500000',	'100000',	NULL,	'400000',	'Pending',	'assets/transaction/Q8IHdd68pI1iboY15AqrhYSP3qOcE8axAbKQeIYi.png',	'2024-09-17 23:07:11',	'2024-09-17 23:07:11'),
(10,	1,	2,	'2024-08-06',	'Re-New',	'500000',	'100000',	'VOUCHER 10000',	'390000',	'Pending',	'assets/transaction/0TH1yuppa7qCkfgHUPyryAsFu1sHAnKHAxXfAWR9.png',	'2024-09-17 23:08:17',	'2024-09-17 23:08:17'),
(11,	1,	2,	'2024-08-06',	'Sesi-PT',	'500000',	'100000',	'VOUCHER 10000',	'390000',	'Pending',	'assets/transaction/ySKp5wvzLVnjLJkQ2NBNz3jh0YQETH2y3fxqrU7f.png',	'2024-09-17 23:09:48',	'2024-09-17 23:09:48');

DROP TABLE IF EXISTS `trials`;
CREATE TABLE `trials` (
  `id_trial` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `location_id` int DEFAULT NULL,
  `code_trial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_trial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `trials` (`id_trial`, `user_id`, `nik`, `status`, `location_id`, `code_trial`, `created_at`, `updated_at`) VALUES
(4,	11,	'31276321',	'Hangus',	3,	'TRL4176',	'2024-09-12 03:57:57',	'2024-09-11 20:57:57'),
(5,	12,	'31276321564567',	'pending',	3,	'TRL7510',	'2024-09-11 21:04:29',	'2024-09-11 21:04:29');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'USER',
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoke_akun` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `roles`, `current_team_id`, `profile_photo_path`, `phone`, `revoke_akun`, `created_at`, `updated_at`) VALUES
(1,	'lisa kempink 12',	'kempink@gmail.com',	'Wanita',	NULL,	'$2y$12$Cycv19LevHmdbcaszTcuAuZUwS11vyViciVJTFT8br7l6zyiRBxAK',	'',	'',	NULL,	'',	'SUPER ADMIN',	1,	'assets/user/1U79Mz1qv7XzQ9n9ZxSjybTkYXQ0yGfp0x8z8YSu.png',	'911',	'lisa kempink 12 [kempink@gmail.com]',	'2024-07-24 02:49:10',	'2024-09-10 21:47:22'),
(10,	'Henry Wahono',	'Henry@gmail.com',	'Pria',	NULL,	'$2y$12$IDWkY7ECYw6rXN3QIWJur.Dx884QJRB5IwGDwNvLJhPeNi3yNETlC',	'',	'',	NULL,	'',	'ADMIN',	NULL,	'assets/user/lcYunPmH0n0D92uRSshjibIt1iXn3I686k5QfEJS.png',	'1010',	'',	'2024-09-04 21:50:42',	'2024-09-04 21:50:42'),
(11,	'Thiery henry',	'Henry123@gmail.com',	'Pria',	NULL,	'$2y$12$HuaTnh6LXObPjAzSduDAG.k83dj6WjtxHg1zcDuX5alG4WUKVClIe',	'',	'',	NULL,	'',	'TRAINER',	NULL,	'assets/user/D6ZqWOhRUhTIZm7mxLojwnUQFRjM8fBsADiW8Nhh.jpg',	'3289 2388 3212',	'',	'2024-09-05 19:13:33',	'2024-09-05 19:13:33'),
(12,	'virgus hayo',	'hayoapa@gmail.com',	'Pria',	NULL,	'$2y$12$nVkmpP/GVSPI2uP1eAkqW.rV7gipsufBP5pN5KX0LdwE0vNMEMZ/C',	'',	'',	NULL,	'',	'USER',	NULL,	'assets/user/gCHXFLGJ8xJ0YYBJ4eA8woyP4oGvw6LUFgHLKLQO.jpg',	'2012 0912 1234',	'',	'2024-09-05 19:37:45',	'2024-09-05 19:37:45'),
(13,	'Pak Jun',	'juniapak@gmail.com',	'Pria',	NULL,	'$2y$12$3Yky4.Q6FRIp6LKHG2QGEeqywvxQQzpozTzIZ5I1TRWSKgwT/wdwe',	'',	'',	NULL,	'',	'USER',	NULL,	'assets/user/tgIiDjAdkBhDLolJxdH9GGS3ko62D2SXAUBE4g99.png',	'1234 5678 0123',	'',	'2024-09-10 21:40:44',	'2024-09-10 21:40:44');

DROP TABLE IF EXISTS `vouchers`;
CREATE TABLE `vouchers` (
  `id_voucher` bigint unsigned NOT NULL AUTO_INCREMENT,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timer_start` datetime DEFAULT NULL,
  `timer_end` datetime DEFAULT NULL,
  `kuota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `vouchers` (`id_voucher`, `discount`, `title`, `category`, `code`, `exp_date`, `detail`, `timer_start`, `timer_end`, `kuota`, `created_at`, `updated_at`) VALUES
(1,	'10000',	NULL,	'Re-New',	'AGS07',	'2024-08-20',	'-',	NULL,	NULL,	NULL,	'2024-08-07 07:50:27',	'2024-08-14 21:00:56'),
(2,	'20000',	NULL,	'New Member',	'AGS07',	'2024-08-20',	'-',	NULL,	NULL,	NULL,	'2024-08-07 08:29:23',	'2024-08-14 21:03:54'),
(3,	'15000',	NULL,	'Sesi PT',	'AGS15',	'2024-09-15',	'-',	NULL,	NULL,	NULL,	'2024-08-14 21:09:19',	'2024-08-14 21:09:19'),
(4,	'25000',	NULL,	'New Member',	'AGS15',	'2024-08-25',	'-',	NULL,	NULL,	NULL,	'2024-08-14 21:09:48',	'2024-08-14 21:09:48'),
(5,	'20000',	'Test Judul',	'Flash Sale',	NULL,	NULL,	'-',	'2024-08-25 13:00:00',	'2024-08-25 23:00:00',	'10',	'2024-08-20 02:30:52',	'2024-08-20 02:55:10'),
(6,	'30000',	'Testttt',	'Flash Sale',	NULL,	NULL,	'-',	'2024-08-21 09:36:00',	'2024-08-21 21:36:00',	'10',	'2024-08-20 19:37:08',	'2024-08-20 19:37:08'),
(7,	'20000',	'Flash sales',	'Flash Sale',	NULL,	NULL,	'-',	'2024-08-21 10:09:00',	'2024-08-21 11:09:00',	'10',	'2024-08-20 20:09:42',	'2024-08-20 20:09:42');

-- 2024-09-18 06:39:27
