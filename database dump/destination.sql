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

-- Dumping structure for table myholiday.destination
CREATE TABLE IF NOT EXISTS `destination` (
  `destinationId` int(11) NOT NULL AUTO_INCREMENT,
  `imgUrl` varchar(999) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `siteUrl` varchar(999) DEFAULT NULL,
  KEY `destinationId` (`destinationId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myholiday.destination: ~11 rows (approximately)
/*!40000 ALTER TABLE `destination` DISABLE KEYS */;
INSERT INTO `destination` (`destinationId`, `imgUrl`, `country`, `location`, `activity`, `duration`, `price`, `siteUrl`) VALUES
	(1, 'https://www.globalcompliancenews.com/wp-content/uploads/sites/43/2018/05/Madrid.jpg', 'Spain', 'Granada', 'Alhambra & Nasrid Palaces Tour', 1, 21, 'https://www.tiqets.com/en/granada-attractions-c66003/tickets-for-alhambra-and-nasrid-palaces-skip-the-line-p1002131/?partner=go2alhambra'),
	(2, 'https://media.tacdn.com/media/attractions-splice-spp-674x446/07/96/2b/52.jpg', 'Spain', 'Barcelona', 'Sagrada Familia Guided Tour', 1, 56, 'https://www.viator.com/tours/Barcelona/Skip-the-Line-Barcelona-Sagrada-Familia-Tour/d562-2140SAGRADA'),
	(3, 'https://media.tacdn.com/media/attractions-splice-spp-674x446/07/37/cf/7f.jpg', 'Spain', 'Barcelona', 'Kayak and Snorkel day Tour', 1, 87, 'https://www.viator.com/tours/Barcelona/Kayaking-and-Snorkeling/d562-43217P5'),
	(4, 'https://media.tacdn.com/media/attractions-splice-spp-674x446/07/05/7f/a0.jpg', 'Spain', 'Madrid', 'Full Day Tour Ávila and Segovia ', 1, 84, 'https://www.viator.com/tours/Madrid/Avila-y-Segovia-Full-Day-Tour-from-Madrid-With-Tickets-Includes/d566-110971P24'),
	(5, 'https://cdn.getyourguide.com/img/tour/878fbf962b3a3596.jpeg/98/Paris--Louvre-Museum-Timed-Entrance-Ticket.jpg', 'France', 'Paris', 'Louvre Museum Visit', 1, 21, 'https://www.getyourguide.com/paris-l16/louvre-museum-skip-the-line-entrance-ticket-t145779/'),
	(6, 'https://cdn.getyourguide.com/img/tour/58e6002464ffc.jpeg/98.jpg', 'France', 'Paris', 'Skip-the-Line Arc de Triomphe Rooftop Visit', 1, 14, 'https://www.getyourguide.com/paris-l16/paris-skip-the-line-arc-de-triomphe-tickets-t66157/'),
	(7, 'https://cdn.pixabay.com/photo/2017/04/30/13/36/disneyland-paris-2272907_1280.jpg', 'France', 'Paris', 'Disneyland Paris Visit', 1, 60, 'https://www.getyourguide.com/paris-l16/disneyland-paris-2-parks-ticket-1-2-3-4-5-day-t395320/'),
	(8, 'https://i0.wp.com/english.lematinal.media/wp-content/uploads/2021/08/Oceanarium-Odysseo-5.jpg?fit=1049%2C700&ssl=1', 'Mauritius', 'Port Louis', 'Odysseo Visit', 1, 10, 'https://www.odysseomauritius.com/product/entrance-standard/'),
	(9, 'https://www.splashnfun.mu/data/uploads/slide-aquatube.jpg', 'Mauritius', 'Quatre Cocos', 'Splash N Fun Leisure Park Visit', 1, 3, 'https://www.splashnfun.mu/tickets-pricing/'),
	(10, 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/06/75/b7/fa.jpg', 'Madagascar', 'Ampefy', 'Ampefy Private Tour', 2, 235, 'https://www.tripadvisor.com/AttractionProductReview-g293809-d12469963-2_Days_Private_Tour_to_Ampefy_from_Antananarivo-Antananarivo_Antananarivo_Province.html#/media-atf/12469963/-1:p/?albumid=-150&type=0&category=-150'),
	(11, 'https://live.staticflickr.com/4045/4315993100_d2117433cb_b.jpg', 'Madagascar', 'Menabe', 'Kirindy Parc and Baobab Avenue Tour', 1, 255, 'https://www.tripadvisor.com/AttractionProductReview-g298273-d12666956-Morondava_Day_Tour_to_Kirindy_Park_and_Baobab_Avenue-Morondava_Toliara_Province.html');
/*!40000 ALTER TABLE `destination` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
