-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for elite_exam_db
CREATE DATABASE IF NOT EXISTS `elite_exam_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `elite_exam_db`;

-- Dumping structure for table elite_exam_db.sales_report
CREATE TABLE IF NOT EXISTS `sales_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_cover` varchar(50) DEFAULT NULL,
  `artist` varchar(50) DEFAULT NULL,
  `album` varchar(50) DEFAULT NULL,
  `2022_sales` int(11) DEFAULT NULL,
  `date_released` date DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table elite_exam_db.sales_report: ~118 rows (approximately)
INSERT INTO `sales_report` (`id`, `album_cover`, `artist`, `album`, `2022_sales`, `date_released`, `last_update`) VALUES
	(1, NULL, 'AB6IX', 'Complete with You: Special Album', 43058, '2022-01-17', '2022-01-31'),
	(2, NULL, 'aespa', 'Savage', 19629, '2021-10-05', '2022-04-30'),
	(3, NULL, 'Apink', 'Horn', 58641, '2022-02-14', '2022-02-28'),
	(4, NULL, 'ATEEZ', 'Zero: Fever Epilogue', 3578, '2021-12-10', '2022-01-31'),
	(5, NULL, 'BAE173', 'Intersection: Blaze', 16801, '2022-03-30', '2022-04-30'),
	(6, NULL, 'BamBam', 'B', 87540, '2022-01-18', '2022-01-31'),
	(7, NULL, 'Bang Yongguk', '2', 6933, '2022-03-02', '2022-03-31'),
	(8, NULL, 'Billlie', 'The Collective Soul and Unconscious: Chapter One', 66885, '2022-02-23', '2022-04-30'),
	(9, NULL, 'Blitzers', 'Bobbin', 17719, '2022-01-03', '2022-01-31'),
	(10, NULL, 'Bolbbalgan4', 'Seoul', 2596, '2022-04-20', '2022-04-30'),
	(11, NULL, 'Brave Girls', 'Thank You', 33605, '2022-03-15', '2022-03-31'),
	(12, NULL, 'BTOB', 'Be Together', 121528, '2022-02-21', '2022-03-31'),
	(13, NULL, 'Choi Yena', 'Smiley', 84346, '2022-01-17', '2022-03-31'),
	(14, NULL, 'Cravity', 'Liberty: In Our Cosmos Part.2', 123922, '2022-03-22', '2022-04-30'),
	(15, NULL, 'Cherry Bullet', 'Cherry Wish', 20250, '2022-03-02', '2022-03-31'),
	(16, NULL, 'Def.', 'Love', 41148, '2022-01-26', '2022-01-31'),
	(17, NULL, 'DKZ', 'Chase, Ep.2-Maum', 118583, '2022-04-12', '2022-04-30'),
	(18, NULL, 'Dreamcatcher', 'Apocalypse: Save Us', 94706, '2022-04-12', '2022-04-30'),
	(19, NULL, 'Drippin', 'Villian', 37535, '2022-01-17', '2022-04-30'),
	(20, NULL, 'E\'LAST', 'Roar', 48695, '2022-04-27', '2022-04-30'),
	(21, NULL, 'Enhypen', 'Dimension: Dilemma', 27591, '2021-10-12', '2022-04-30'),
	(22, NULL, 'Enhypen', 'Dimension: Answer', 621425, '2022-01-10', '2022-04-30'),
	(23, NULL, 'Epex', 'Book of Anxiety Chapter1. 21st Century Boys', 71584, '2022-04-11', '2022-04-30'),
	(24, NULL, 'Epik High', 'Epik High is Here', 5382, '2022-02-14', '2022-02-28'),
	(25, NULL, 'Eric Nam', 'There and Back Again', 2183, '2022-01-07', '2022-04-30'),
	(26, NULL, 'Everglow', 'Return of the Girl', 2450, '2021-12-01', '2022-01-31'),
	(27, NULL, 'fromis_9', 'Midnight Guest', 120245, '2022-01-17', '2022-03-31'),
	(28, NULL, '(G)I-dle', 'I Never Die', 198589, '2022-03-14', '2022-04-30'),
	(29, NULL, 'Ghost9', 'Arcade: V', 9311, '2022-04-07', '2022-04-30'),
	(30, NULL, 'Ha Sungwoon', 'You', 18717, '2022-02-09', '2022-02-28'),
	(31, NULL, 'Highlight', 'Daydream', 86293, '2022-03-21', '2022-04-30'),
	(32, NULL, 'ILY:1', 'Love in Bloom', 3181, '2022-04-04', '2022-04-30'),
	(33, NULL, 'IVE', 'Eleven', 37284, '2021-12-01', '2022-04-30'),
	(34, NULL, 'IVE', 'Love Dive', 440067, '2022-04-05', '2022-04-30'),
	(35, NULL, 'Jinjin & Rocky', 'Restore', 57401, '2022-01-17', '2022-02-28'),
	(36, NULL, 'Just B', 'Just Begun', 51504, '2022-04-14', '2022-04-30'),
	(37, NULL, 'Kai', 'Peaches', 5373, '2021-11-30', '2022-01-31'),
	(38, NULL, 'Kang Hyewon', 'Winter Special Album: W', 18305, '2022-01-04', '2022-01-31'),
	(39, NULL, 'Kep1er', 'First Impact', 271048, '2022-01-03', '2022-04-30'),
	(40, NULL, 'Kihyun', 'Voyager', 141407, '2022-03-15', '2022-04-30'),
	(41, NULL, 'Kim Jaehwan', 'The Letter', 9639, '2021-12-28', '2022-01-31'),
	(42, NULL, 'Kim Junsu', 'Dimension', 55470, '2022-03-17', '2022-04-30'),
	(43, NULL, 'Kim Sungkyu', 'Savior', 28082, '2022-04-22', '2022-04-30'),
	(44, NULL, 'Kim Wooseok', 'Reve: 3rd Desire', 67957, '2022-03-07', '2022-03-31'),
	(45, NULL, 'Kim Yohan', 'Illusoin', 51754, '2022-01-10', '2022-01-31'),
	(46, NULL, 'Kingdom', 'History of Kingdom: Pt. 4: Dann', 19450, '2022-03-31', '2022-04-30'),
	(47, NULL, 'Kwon Eunbi', 'Color', 55923, '2022-04-04', '2022-04-30'),
	(48, NULL, 'Kyuhyun', 'Love Story (4 Season Project 季)', 37215, '2022-01-25', '2022-02-28'),
	(49, NULL, 'Lee Seokhoon', 'Same Spot', 7673, '2022-03-24', '2022-03-31'),
	(50, NULL, 'Lee Seungyoon', 'Even if it becomes ruins', 7640, '2021-11-24', '2022-02-28'),
	(51, NULL, 'Lisa', 'Lalisa', 73336, '2021-09-10', '2022-04-30'),
	(52, NULL, 'LUNA', 'Moonlight', 3705, '2022-01-17', '2022-01-31'),
	(53, NULL, 'Max Changmin', 'Devil', 21831, '2022-01-13', '2022-02-28'),
	(54, NULL, 'Mirae', 'Marvelous', 48067, '2022-01-12', '2022-01-31'),
	(55, NULL, 'Miyeon', 'My', 90064, '2022-04-27', '2022-04-30'),
	(56, NULL, 'Monsta X', 'No Limit', 23015, '2021-11-19', '2022-02-28'),
	(57, NULL, 'Monsta X', 'Shape of Love', 284668, '2022-04-26', '2022-04-30'),
	(58, NULL, 'Moonbin & Sanha', 'Refuge', 144205, '2022-03-15', '2022-04-30'),
	(59, NULL, 'Moonbyul', '6equence', 78120, '2022-01-19', '2022-02-28'),
	(60, NULL, 'Moonbyul', 'CITT: Cheese in the Trap', 86508, '2022-04-28', '2022-04-30'),
	(61, NULL, 'NCT 127', 'Sticker', 31194, '2021-09-17', '2022-04-30'),
	(62, NULL, 'NCT 127', 'Favorite', 30331, '2021-10-25', '2022-03-31'),
	(63, NULL, 'NCT 2021', 'Universe', 118633, '2021-12-14', '2022-04-30'),
	(64, NULL, 'NCT Dream', 'Glitch Mode', 1649993, '2022-03-28', '2022-04-30'),
	(65, NULL, 'NINE.i', 'New World', 3618, '2022-03-30', '2022-04-30'),
	(66, NULL, 'NMIXX', 'Ad Mare', 406936, '2022-02-22', '2022-04-30'),
	(67, NULL, 'NU\'EST', 'Need & Bubble: Nu\'est the Best Album', 63446, '2022-03-15', '2022-03-31'),
	(68, NULL, 'Oh My Girl', 'Real Love', 66912, '2022-03-28', '2022-04-30'),
	(69, NULL, 'Omega X', 'Love Me Like', 86941, '2022-01-05', '2022-01-31'),
	(70, NULL, 'Onew', 'Dice', 119006, '2022-04-11', '2022-04-30'),
	(71, NULL, 'ONEWE', 'Planet Nine: Voyager', 18075, '2022-01-04', '2022-02-28'),
	(72, NULL, 'ONF', 'Goosebumps', 4396, '2021-12-03', '2022-01-31'),
	(73, NULL, 'OnlyOneOf', 'Instint, Pt.2', 49362, '2022-01-14', '2022-01-31'),
	(74, NULL, 'P1Harmony', 'Disharmony: Find Out', 91969, '2022-01-03', '2022-01-31'),
	(75, NULL, 'Pentagon', 'In:Vite U', 90114, '2022-01-24', '2022-02-28'),
	(76, NULL, 'Purple Kiss', 'Memem', 32266, '2022-03-29', '2022-03-31'),
	(77, NULL, 'Ravi', 'Love & Fight', 10359, '2022-02-08', '2022-02-28'),
	(78, NULL, 'Red Velvet', 'The Reve Festival 2022: Feel My Rhythm', 560838, '2022-03-21', '2022-04-30'),
	(79, NULL, 'Rocket Punch', 'Yellow Punch', 20055, '2022-02-28', '2022-04-30'),
	(80, NULL, 'Seventeen', 'Attacca', 30049, '2021-10-22', '2022-04-30'),
	(81, NULL, 'Solar', 'Face', 43599, '2022-03-16', '2022-04-30'),
	(82, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 56940, '2021-12-27', '2022-01-31'),
	(83, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 12971, '2021-12-27', '2022-03-31'),
	(84, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 5974, '2021-12-27', '2022-03-31'),
	(85, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 74162, '2021-12-27', '2022-03-31'),
	(86, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 74087, '2021-12-27', '2022-03-31'),
	(87, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 41833, '2021-12-27', '2022-03-31'),
	(88, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 5265, '2021-12-27', '2022-01-31'),
	(89, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 62545, '2021-12-27', '2022-03-31'),
	(90, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 14336, '2021-12-27', '2022-01-31'),
	(91, 'uploaded_albums/SMTOWN.jpg', 'SMTOWN', '2021 Winter SMTOWN: SMCU Express', 2218, '2021-12-27', '2022-01-31'),
	(92, NULL, 'Suho', 'Gray Suit', 186465, '2022-04-04', '2022-04-30'),
	(93, NULL, 'StayC', 'Young-Luv.com', 182131, '2022-02-21', '2022-04-30'),
	(94, NULL, 'Stray Kids', 'Christmas EveL', 14418, '2021-11-29', '2022-04-30'),
	(95, NULL, 'Stray Kids', 'Oddinary', 1000088, '2022-03-18', '2022-04-30'),
	(96, NULL, 'Super Junior', 'The Road: Winter for Spring', 142663, '2022-02-28', '2022-04-30'),
	(97, NULL, 'Super Junior - D&E', 'Countdown Zero (Epilogue)', 8458, '2021-12-09', '2022-01-31'),
	(98, NULL, 'Taeyeon', 'INVU', 179611, '2022-02-14', '2022-04-30'),
	(99, NULL, 'Tempest', 'It\'s Me, It\'s We', 82307, '2022-03-02', '2022-04-30'),
	(100, NULL, 'Tan', 'Limited Edition \'1TAN\'', 8870, '2022-03-10', '2022-04-30'),
	(101, NULL, 'The Boyz', 'Maverick', 5566, '2021-11-01', '2022-02-28'),
	(102, NULL, 'The Boyz', 'Webtoon Level Up Alone (OST)', 10573, '2022-03-18', '2022-03-31'),
	(103, NULL, 'Treasure', 'The Second Step: Chapter One', 668539, '2022-02-15', '2022-04-30'),
	(104, NULL, 'Trendz', 'Blue Set Chapter 1. Tracks', 6170, '2022-01-05', '2022-01-31'),
	(105, NULL, 'Twice', 'Formula of Love: OT=<3', 8293, '2021-12-17', '2022-03-31'),
	(106, NULL, 'UP10TION', 'Novella', 31415, '2022-01-03', '2022-04-30'),
	(107, NULL, 'Verivery', 'Serioues O-Round 3: Whole', 97187, '2022-04-25', '2022-04-30'),
	(108, NULL, 'Victon', 'Chronograph', 60959, '2022-01-18', '2022-02-28'),
	(109, NULL, 'Viviz', 'Beam of Prism', 43638, '2022-02-10', '2022-02-28'),
	(110, NULL, 'Weeekly', 'Play Game: Awake', 81537, '2022-03-07', '2022-03-31'),
	(111, NULL, 'WEi', 'Love Pt. 1: First Love', 119853, '2022-03-16', '2022-03-31'),
	(113, NULL, 'Wonho', 'Obsession', 56627, '2022-02-16', '2022-03-31'),
	(114, NULL, 'Wonpil', 'Pilmography', 33668, '2022-02-10', '2022-02-28'),
	(115, NULL, 'WJSN Chocome', 'Super Yuppers!', 15135, '2022-01-05', '2022-01-31'),
	(116, NULL, 'Younha', 'End Theory Final Ed.', 7001, '2022-03-30', '2022-03-31'),
	(117, NULL, 'Yoon Jisung', 'Miro', 6595, '2022-04-27', '2022-04-30'),
	(118, 'uploaded_albums/album_1747650131.gif', 'Younite', 'Youni-Birth', 21927, '2022-04-22', '2022-04-30'),
	(119, '', 'Yuju1', 'Rec.aa', 22970, '2022-01-21', '2022-01-31');

-- Dumping structure for table elite_exam_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table elite_exam_db.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `date_created`, `status`) VALUES
	(1, 'Richmond1226', '123', '2025-05-19 13:22:31', '1');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
