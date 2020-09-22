-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Versie:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van stagelogboek wordt geschreven
CREATE DATABASE IF NOT EXISTS `stagelogboek` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `stagelogboek`;

-- Structuur van  tabel stagelogboek.comment wordt geschreven
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel stagelogboek.comment: ~0 rows (ongeveer)
DELETE FROM `comment`;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;

-- Structuur van  tabel stagelogboek.post wordt geschreven
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_content` varchar(500) NOT NULL,
  `required_level_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel stagelogboek.post: ~0 rows (ongeveer)
DELETE FROM `post`;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `author_id`, `post_title`, `post_content`, `required_level_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 'My first blog', 'testing 1 2 3', 0, '2020-09-21 18:58:33', '2020-09-21 18:58:33');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Structuur van  tabel stagelogboek.required_level wordt geschreven
CREATE TABLE IF NOT EXISTS `required_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel stagelogboek.required_level: ~0 rows (ongeveer)
DELETE FROM `required_level`;
/*!40000 ALTER TABLE `required_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `required_level` ENABLE KEYS */;

-- Structuur van  tabel stagelogboek.user wordt geschreven
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) DEFAULT NULL,
  `last_login_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel stagelogboek.user: ~1 rows (ongeveer)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `naam`, `password`, `level`, `last_login_ts`, `created_at`, `updated_at`) VALUES
	(1, 'mzuidema', '$2y$10$41aG/l0Vm/6EXo6P0qhBiOAkNYEyjLXQcHUejhT7Pk1JGCC15dvxK', 2, '2020-05-10 19:14:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
