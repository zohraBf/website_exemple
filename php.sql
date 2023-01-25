-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour stagiairephp
DROP DATABASE IF EXISTS `stagiairephp`;
CREATE DATABASE IF NOT EXISTS `stagiairephp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `stagiairephp`;

-- Listage de la structure de la table stagiairephp. chats
DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table stagiairephp.chats : ~4 rows (environ)
/*!40000 ALTER TABLE `chats` DISABLE KEYS */;
INSERT INTO `chats` (`id`, `pseudo`, `message`) VALUES
	(1, 'Hicham', 'Salam'),
	(2, 'test', 'salam Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, ea.'),
	(3, 'ssss', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, ea.'),
	(4, 'zakaria', 'salam\r\n');
/*!40000 ALTER TABLE `chats` ENABLE KEYS */;

-- Listage de la structure de la table stagiairephp. pays
DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table stagiairephp.pays : ~5 rows (environ)
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
INSERT INTO `pays` (`id`, `nom`) VALUES
	(1, 'MAROC'),
	(2, 'FRANCE'),
	(3, 'Algerie'),
	(4, 'tunisie'),
	(5, 'BELGIQUE');
/*!40000 ALTER TABLE `pays` ENABLE KEYS */;

-- Listage de la structure de la table stagiairephp. stagiaires
DROP TABLE IF EXISTS `stagiaires`;
CREATE TABLE IF NOT EXISTS `stagiaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ville_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_stagiaires_villes` (`ville_id`),
  CONSTRAINT `FK_stagiaires_villes` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table stagiairephp.stagiaires : ~0 rows (environ)
/*!40000 ALTER TABLE `stagiaires` DISABLE KEYS */;
INSERT INTO `stagiaires` (`id`, `nom`, `prenom`, `photo`, `ville_id`) VALUES
	(14, 'szada', 'sasa', '1.png', 1),
	(15, 'rguina', 'hicham', '1.png', 1),
	(16, 'SERVIUS', 'prenom1', '2.jpg', 2),
	(18, 'sasasas', 'sasasas', '2.jpg', 2);
/*!40000 ALTER TABLE `stagiaires` ENABLE KEYS */;

-- Listage de la structure de la table stagiairephp. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table stagiairephp.users : ~5 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(4, 'devosoft', 'ff2c0e3467982b524b8ba34a58bdbc3a'),
	(5, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
	(6, 'ezouhra', '6b0878ecb63411268bc4fef01fa86bea'),
	(7, 'amal', '16b5480e7b6e68607fe48815d16b5d6d'),
	(8, 'Devosoft123@@', '9489daed78ded60d65c114feea2d6221');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table stagiairephp. villes
DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table stagiairephp.villes : ~3 rows (environ)
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` (`id`, `nom`) VALUES
	(1, 'safi'),
	(2, 'Marrakech');
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
