-- --------------------------------------------------------
-- Hostitel:                     localhost
-- Verze serveru:                11.8.2-MariaDB-ubu2404 - mariadb.org binary distribution
-- OS serveru:                   debian-linux-gnu
-- HeidiSQL Verze:               12.10.0.7000
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Exportování dat pro tabulku Yetinder_Lesak_DB.doctrine_migration_versions: ~3 rows (přibližně)
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20250705150325', '2025-07-05 15:52:21', 177),
	('DoctrineMigrations\\Version20250705210457', '2025-07-05 21:05:42', 31),
	('DoctrineMigrations\\Version20250706080801', '2025-07-06 08:08:11', 149),
	('DoctrineMigrations\\Version20250707092409', '2025-07-07 09:24:30', 217);

-- Exportování dat pro tabulku Yetinder_Lesak_DB.messenger_messages: ~0 rows (přibližně)

-- Exportování dat pro tabulku Yetinder_Lesak_DB.yeti: ~16 rows (přibližně)
INSERT INTO `yeti` (`id`, `name`, `weight`, `age`, `height`, `place_of_stay`, `gender`, `current_rating`) VALUES
	(33, 'Fixture Yeti - 1', 250.1, 19, 240.2, 'Horní Kalná', 'female', 1),
	(34, 'Fixture Yeti - 2', 250.1, 20, 240.2, 'Horní Kalná', 'male', 0),
	(35, 'Fixture Yeti - 3', 250.1, 21, 240.2, 'Horní Kalná', 'female', 2),
	(36, 'Fixture Yeti - 4', 250.1, 22, 240.2, 'Horní Kalná', 'male', 0),
	(37, 'Fixture Yeti - 5', 250.1, 23, 240.2, 'Horní Kalná', 'female', 0),
	(38, 'Fixture Yeti - 6', 250.1, 24, 240.2, 'Horní Kalná', 'male', 0),
	(39, 'Fixture Yeti - 7', 250.1, 25, 240.2, 'Horní Kalná', 'female', 1),
	(40, 'Fixture Yeti - 8', 250.1, 26, 240.2, 'Horní Kalná', 'male', 0),
	(41, 'Fixture Yeti - 9', 250.1, 27, 240.2, 'Horní Kalná', 'female', 0),
	(42, 'Fixture Yeti - 10', 250.1, 28, 240.2, 'Horní Kalná', 'male', 0),
	(43, 'Muj jety', 2345, 65, 654, 'Hohenelbe', 'male', 0),
	(44, 'jmeno', 654, 365, 321, 'Praha', 'female', -1),
	(45, 'jmeno2', 654, 365, 321, 'Praha', 'male', 0),
	(46, 'jmeno2', 654, 365, 321, 'Praha', 'male', 0),
	(47, 'jmeno3', 654, 365, 321, 'Praha', 'other', 0),
	(48, 'fsd', 24, 456, 415, '24', 'female', 1);

-- Exportování dat pro tabulku Yetinder_Lesak_DB.yeti_rating: ~12 rows (přibližně)
INSERT INTO `yeti_rating` (`id`, `yeti_id`, `rating`, `timestamp`) VALUES
	(1, 48, 1, '2025-07-07 09:30:10'),
	(2, 48, 0, '2025-07-07 09:30:55'),
	(3, 48, 0, '2025-06-07 09:37:16'),
	(4, 48, 1, '2025-07-06 09:37:20'),
	(8, 35, 1, '2025-05-05 10:09:56'),
	(9, 35, 0, '2025-07-07 10:09:59'),
	(10, 35, 1, '2025-07-07 10:11:58'),
	(11, 44, 0, '2025-07-07 10:12:01'),
	(12, 35, 1, '2025-07-07 10:45:57'),
	(13, 33, 1, '2025-07-07 10:46:07'),
	(14, 48, 1, '2025-07-07 10:46:09'),
	(15, 39, 1, '2022-07-07 10:46:11');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
