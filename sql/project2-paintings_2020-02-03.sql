# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: project2-paintings
# Generation Time: 2020-02-03 14:18:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Paintings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Paintings`;

CREATE TABLE `Paintings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paintingName` varchar(150) DEFAULT NULL,
  `authorFirstName` varchar(25) DEFAULT NULL,
  `authorSecondName` varchar(25) DEFAULT NULL,
  `paintingCreationYear` int(4) unsigned DEFAULT NULL,
  `paintingValue` float unsigned DEFAULT NULL,
  `paintingMovement` varchar(40) DEFAULT NULL,
  `paintingMedium` varchar(60) DEFAULT NULL,
  `paintingImageLink` varchar(500) DEFAULT NULL,
  `paintingDescription` varchar(1000) DEFAULT NULL,
  `paintingCreationYearIsEstimate` tinyint(1) unsigned DEFAULT NULL,
  `paintingHeight` float unsigned DEFAULT NULL,
  `paintingWidth` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Paintings` WRITE;
/*!40000 ALTER TABLE `Paintings` DISABLE KEYS */;

INSERT INTO `Paintings` (`id`, `paintingName`, `authorFirstName`, `authorSecondName`, `paintingCreationYear`, `paintingValue`, `paintingMovement`, `paintingMedium`, `paintingImageLink`, `paintingDescription`, `paintingCreationYearIsEstimate`, `paintingHeight`, `paintingWidth`)
VALUES
	(1,'Myfirstpainting','Johhny','Miles',1901,2,'Expressionism','Board','httpL//sfsdfdsfdds','This is a decription',NULL,NULL,NULL);

/*!40000 ALTER TABLE `Paintings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
