-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sales_management
CREATE DATABASE IF NOT EXISTS `sales_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sales_management`;

-- Dumping structure for table sales_management.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table sales_management.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table sales_management.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sales_management.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2024_08_12_053414_create_sales_table', 1);

-- Dumping structure for table sales_management.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sales_management.password_resets: ~0 rows (approximately)

-- Dumping structure for table sales_management.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sales_management.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table sales_management.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
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

-- Dumping data for table sales_management.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table sales_management.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_date` date NOT NULL,
  `sales_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sales_management.sales: ~53 rows (approximately)
INSERT INTO `sales` (`id`, `product_name`, `sales_amount`, `sales_date`, `sales_person`, `created_at`, `updated_at`) VALUES
	(1, 'Toys', '10000', '2024-05-16', 'Sam', '2024-08-12 00:42:21', '2024-08-12 00:42:21'),
	(3, 'Chocolates', '50000', '2024-07-25', 'Tamil', '2024-08-12 00:44:09', '2024-08-12 23:20:53'),
	(5, 'Sports Shoe', '30840', '2024-03-22', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(6, 'Basketball', '56180', '2024-03-06', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(7, 'Cricket Bat', '78058', '2023-10-19', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(8, 'Football', '78391', '2023-12-30', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(9, 'Tennis Racket', '28325', '2024-06-01', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(10, 'Badminton Shuttle', '12508', '2023-11-15', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(11, 'Chess Set', '41175', '2023-08-18', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(12, 'Rubik\'s Cube', '48512', '2024-03-02', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(13, 'Action Figure', '73398', '2023-12-03', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(14, 'Doll', '31821', '2024-04-17', 'Joes Daniel', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(15, 'Smartphone', '29731', '2024-04-28', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(16, 'Laptop', '63016', '2024-04-01', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(17, 'Headphones', '80546', '2024-04-25', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(18, 'Smartwatch', '11651', '2023-11-05', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(19, 'Tablet', '87559', '2023-11-08', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(20, 'LED TV', '65169', '2024-07-27', 'Balaji', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(21, 'Bluetooth Speaker', '49868', '2024-08-10', 'Balaji', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(22, 'Gaming Console', '57851', '2024-05-11', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(23, 'VR Headset', '87162', '2023-08-22', 'Balaji', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(24, 'Digital Camera', '28969', '2024-02-19', 'Balaji', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(25, 'T-Shirt', '61779', '2024-06-08', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(26, 'Jeans', '10620', '2024-04-06', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(27, 'Jacket', '79754', '2023-09-06', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(28, 'Dress', '24203', '2024-08-05', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(29, 'Suit', '39363', '2023-11-19', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(30, 'Sneakers', '67708', '2023-11-21', 'Joes Daniel', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(31, 'Cap', '62056', '2024-07-22', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(32, 'Socks', '23762', '2024-08-01', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(33, 'Scarf', '29393', '2023-12-11', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(34, 'Gloves', '57010', '2024-06-13', 'Joes Daniel', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(35, 'Washing Machine', '12914', '2024-03-21', 'Joes Daniel', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(36, 'Refrigerator', '14874', '2024-03-23', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(37, 'Microwave Oven', '88822', '2024-06-24', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(38, 'Air Conditioner', '33628', '2024-02-11', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(39, 'Vacuum Cleaner', '30337', '2024-05-15', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(40, 'Dishwasher', '21881', '2024-07-17', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(41, 'Coffee Maker', '86107', '2024-05-24', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(42, 'Blender', '87157', '2024-02-12', 'Balaji', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(43, 'Juicer', '78504', '2023-11-26', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(44, 'Iron', '71532', '2023-12-14', 'Joes Daniel', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(45, 'Analog Watch', '85700', '2024-06-24', 'Manoj', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(46, 'Digital Watch', '63234', '2023-08-27', 'Balaji', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(47, 'Luxury Watch', '22116', '2024-07-07', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(48, 'Fitness Band', '20254', '2024-04-02', 'Balaji', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(49, 'Smart Glasses', '65373', '2023-12-08', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(50, 'Wallet', '83580', '2024-02-18', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(51, 'Handbag', '11470', '2024-05-02', 'Leelavathi', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(52, 'Belt', '18436', '2023-12-08', 'Sam', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(53, 'Sunglasses', '72387', '2024-06-06', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(54, 'Cufflinks', '15426', '2023-09-10', 'Siva', '2024-08-12 05:15:33', '2024-08-12 05:15:33'),
	(55, 'Slippers', '4000', '2024-08-09', 'Tamil', '2024-08-12 23:27:38', '2024-08-12 23:27:38');

-- Dumping structure for table sales_management.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sales_management.users: ~12 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'moni', 'moni@gmail.com', NULL, '$2y$12$IGtk4KCZoQTWXuKipi74jeYRxPQ1DB3EA9O3Hkc5urKECX7MXxIBu', 'user', NULL, '2024-08-12 00:29:25', '2024-08-12 00:29:25'),
	(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$tfJHKPbL36pgZPDEKTUlv.baRXznIz2AzbPnjJOfasLptpgGmYQL6', 'admin', NULL, '2024-08-12 04:17:31', '2024-08-12 04:17:31'),
	(3, 'Linnea Zemlak MD', 'isidro20@example.com', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', 'BdMyjjPAzW', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(4, 'Ona Wisozk', 'cthompson@example.net', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', '7J7mIAD3IR', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(5, 'Lavonne Erdman', 'reilly.lowell@example.net', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', '0nPLoRisQf', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(6, 'Mr. Sven Wisozk', 'homenick.samanta@example.com', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', '9z5T7STuZp', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(7, 'Louie Heaney', 'reva.langworth@example.net', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', 'a0xgtnrSeE', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(8, 'Sydnee Huel DDS', 'beulah.trantow@example.net', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', 'kxbPcbngwE', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(9, 'Iva Harris', 'eleonore.schaden@example.com', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', 'XkwblBTMhK', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(10, 'Dr. Brayan Gulgowski', 'triston58@example.net', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', 'H02lCq4kYX', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(11, 'Mr. Jarrod Prohaska', 'cbeier@example.com', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', 'KniuTuRxrX', '2024-08-12 04:51:23', '2024-08-12 04:51:23'),
	(12, 'Dorcas Reilly', 'bkautzer@example.net', '2024-08-12 04:51:23', '$2y$12$5JA6qrOzscoXcJQK1czAHeKbI23L.TJIVVdYQEnAQXggKYnpOY63C', 'user', 'lgXkaVYgCX', '2024-08-12 04:51:23', '2024-08-12 04:51:23');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
