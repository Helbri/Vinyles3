-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           10.11.3-MariaDB-1:10.11.3+maria~ubu2204 - mariadb.org binary distribution
-- SE du serveur:                debian-linux-gnu
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


-- Listage de la structure de la base pour ExeSymfVinyles3
CREATE DATABASE IF NOT EXISTS `ExeSymfVinyles3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `ExeSymfVinyles3`;

-- Listage de la structure de table ExeSymfVinyles3. cla_ent_artiste
CREATE TABLE IF NOT EXISTS `cla_ent_artiste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_artiste` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.cla_ent_artiste : ~2 rows (environ)
INSERT INTO `cla_ent_artiste` (`id`, `prop_artiste`) VALUES
	(1, 'Queen'),
	(2, 'Beatles'),
	(3, 'Elton John');

-- Listage de la structure de table ExeSymfVinyles3. cla_ent_artiste_cla_ent_style
CREATE TABLE IF NOT EXISTS `cla_ent_artiste_cla_ent_style` (
  `cla_ent_artiste_id` int(11) NOT NULL,
  `cla_ent_style_id` int(11) NOT NULL,
  PRIMARY KEY (`cla_ent_artiste_id`,`cla_ent_style_id`),
  KEY `IDX_5423FEFE33AA4A68` (`cla_ent_artiste_id`),
  KEY `IDX_5423FEFEFB24A042` (`cla_ent_style_id`),
  CONSTRAINT `FK_5423FEFE33AA4A68` FOREIGN KEY (`cla_ent_artiste_id`) REFERENCES `cla_ent_artiste` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5423FEFEFB24A042` FOREIGN KEY (`cla_ent_style_id`) REFERENCES `cla_ent_style` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.cla_ent_artiste_cla_ent_style : ~0 rows (environ)

-- Listage de la structure de table ExeSymfVinyles3. cla_ent_produit
CREATE TABLE IF NOT EXISTS `cla_ent_produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_produit` varchar(255) NOT NULL,
  `prop_produit_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.cla_ent_produit : ~2 rows (environ)
INSERT INTO `cla_ent_produit` (`id`, `prop_produit`, `prop_produit_price`) VALUES
	(1, 'Elton John', 15),
	(2, 'Goodbye Yellow Brick Road Album studio d\'Elton John', 0);

-- Listage de la structure de table ExeSymfVinyles3. cla_ent_produit_cla_ent_style
CREATE TABLE IF NOT EXISTS `cla_ent_produit_cla_ent_style` (
  `cla_ent_produit_id` int(11) NOT NULL,
  `cla_ent_style_id` int(11) NOT NULL,
  PRIMARY KEY (`cla_ent_produit_id`,`cla_ent_style_id`),
  KEY `IDX_7FC38F291D4C6CD7` (`cla_ent_produit_id`),
  KEY `IDX_7FC38F29FB24A042` (`cla_ent_style_id`),
  CONSTRAINT `FK_7FC38F291D4C6CD7` FOREIGN KEY (`cla_ent_produit_id`) REFERENCES `cla_ent_produit` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7FC38F29FB24A042` FOREIGN KEY (`cla_ent_style_id`) REFERENCES `cla_ent_style` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.cla_ent_produit_cla_ent_style : ~0 rows (environ)

-- Listage de la structure de table ExeSymfVinyles3. cla_ent_style
CREATE TABLE IF NOT EXISTS `cla_ent_style` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_style` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.cla_ent_style : ~2 rows (environ)
INSERT INTO `cla_ent_style` (`id`, `prop_style`) VALUES
	(1, 'Rock'),
	(2, 'Pop'),
	(3, 'Blues');

-- Listage de la structure de table ExeSymfVinyles3. cla_ent_style_cla_ent_artiste
CREATE TABLE IF NOT EXISTS `cla_ent_style_cla_ent_artiste` (
  `cla_ent_style_id` int(11) NOT NULL,
  `cla_ent_artiste_id` int(11) NOT NULL,
  PRIMARY KEY (`cla_ent_style_id`,`cla_ent_artiste_id`),
  KEY `IDX_73E96FFCFB24A042` (`cla_ent_style_id`),
  KEY `IDX_73E96FFC33AA4A68` (`cla_ent_artiste_id`),
  CONSTRAINT `FK_73E96FFC33AA4A68` FOREIGN KEY (`cla_ent_artiste_id`) REFERENCES `cla_ent_artiste` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_73E96FFCFB24A042` FOREIGN KEY (`cla_ent_style_id`) REFERENCES `cla_ent_style` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.cla_ent_style_cla_ent_artiste : ~0 rows (environ)

-- Listage de la structure de table ExeSymfVinyles3. doctrine_migration_versions
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.doctrine_migration_versions : ~8 rows (environ)
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20230813190416', '2023-08-13 19:04:46', 32),
	('DoctrineMigrations\\Version20230813190916', '2023-08-13 19:09:27', 28),
	('DoctrineMigrations\\Version20230813191127', '2023-08-13 19:11:34', 25),
	('DoctrineMigrations\\Version20230813194121', '2023-08-13 19:41:30', 29),
	('DoctrineMigrations\\Version20230815222703', '2023-08-15 22:27:18', 344),
	('DoctrineMigrations\\Version20230815223022', '2023-08-15 22:32:07', 116),
	('DoctrineMigrations\\Version20230817154720', '2023-08-17 15:47:50', 32),
	('DoctrineMigrations\\Version20230817162400', '2023-08-17 16:24:11', 111);

-- Listage de la structure de table ExeSymfVinyles3. product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ExeSymfVinyles3.product : ~0 rows (environ)
INSERT INTO `product` (`id`, `name`, `price`) VALUES
	(1, 'Framboise (x1)', 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
