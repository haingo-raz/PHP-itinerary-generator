-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table myholiday.addeddestination
CREATE TABLE IF NOT EXISTS `addeddestination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addedLocation` varchar(255) DEFAULT NULL,
  `addedActivity` varchar(255) DEFAULT NULL,
  `addedDuration` int(11) DEFAULT NULL,
  `addedPrice` int(11) DEFAULT NULL,
  UNIQUE KEY `addedActivity` (`addedActivity`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myholiday.addeddestination: ~4 rows (approximately)
/*!40000 ALTER TABLE `addeddestination` DISABLE KEYS */;
INSERT INTO `addeddestination` (`id`, `addedLocation`, `addedActivity`, `addedDuration`, `addedPrice`) VALUES
	(45, 'Port Louis, Mauritius', 'Odysseo visite', 1, 10),
	(49, 'Barcelona, Spain', 'Kayak and Snorkel day Tour', 1, 87),
	(51, 'Paris, France', 'Skip-the-Line Arc de Triomphe Rooftop Visit', 1, 14),
	(53, 'Granada, Spain', 'Alhambra &amp; Nasrid Palaces Tour', 1, 21);
/*!40000 ALTER TABLE `addeddestination` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
