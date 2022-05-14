-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for kim1b
CREATE DATABASE IF NOT EXISTS `kim1b` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kim1b`;


-- Dumping structure for table kim1b.alarm_rac
CREATE TABLE IF NOT EXISTS `alarm_rac` (
  `tanggal_awal` datetime DEFAULT NULL,
  `tanggal_akhir` datetime DEFAULT NULL,
  `station` int(11) DEFAULT NULL,
  `alarm` int(11) DEFAULT NULL,
  `total_alarm` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kim1b.alarm_rac: ~26 rows (approximately)
/*!40000 ALTER TABLE `alarm_rac` DISABLE KEYS */;
INSERT INTO `alarm_rac` (`tanggal_awal`, `tanggal_akhir`, `station`, `alarm`, `total_alarm`, `status`) VALUES
	('2020-02-06 14:38:14', '2020-02-06 14:38:22', 1, 0, 8, 1),
	('2020-02-06 14:39:13', '2020-02-06 14:39:25', 2, 0, 12, 1),
	('2020-02-06 14:47:02', '2020-02-06 14:47:07', 1, 0, 5, 1),
	('2020-02-06 14:50:50', '2020-02-06 14:51:03', 1, 0, 14, 1),
	('2020-02-06 14:52:27', '2020-02-06 14:52:29', 1, 0, 3, 1),
	('2020-02-06 14:59:11', '2020-02-06 14:59:23', 1, 0, 12, 1),
	('2020-02-06 14:59:50', '2020-02-06 14:59:58', 1, 0, 8, 1),
	('2020-02-06 15:02:04', '2020-02-06 15:02:32', 1, 0, 12, 1),
	('2020-02-06 15:02:38', '2020-02-06 15:02:49', 1, 0, 11, 1),
	('2020-02-06 15:02:54', '2020-02-06 15:03:01', 1, 0, 8, 1),
	('2020-02-06 15:03:09', '2020-02-06 15:03:16', 1, 0, 7, 1),
	('2020-02-06 15:03:34', '2020-02-06 15:03:39', 1, 0, 5, 1),
	('2020-02-06 15:03:46', '2020-02-06 15:03:53', 1, 0, 7, 1),
	('2020-02-06 15:09:43', '2020-02-06 15:09:46', 2, 0, 3, 1),
	('2020-02-06 15:10:01', '2020-02-06 15:10:38', 2, 0, 37, 1),
	('2020-02-06 15:10:50', '2020-02-06 15:12:20', 2, 0, 90, 1),
	('2020-02-06 15:10:53', '2020-02-06 15:12:05', 1, 0, 72, 1),
	('2020-02-06 16:04:12', '2020-02-06 16:04:26', 2, 0, 15, 1),
	('2020-02-06 16:04:32', '2020-02-06 16:04:36', 2, 0, 4, 1),
	('2020-02-06 16:04:41', '2020-02-06 16:05:51', 2, 0, 10, 1),
	('2020-02-06 16:04:59', '2020-02-06 16:05:03', 1, 0, 4, 1),
	('2020-02-06 16:05:38', '2020-02-06 16:06:56', 1, 0, 78, 1),
	('2020-02-06 16:06:24', '2020-02-06 16:06:30', 2, 0, 6, 1),
	('2020-02-06 16:06:37', '2020-02-06 16:06:43', 2, 0, 6, 1),
	('2020-02-06 16:06:47', '2020-02-06 16:06:51', 2, 0, 4, 1);
/*!40000 ALTER TABLE `alarm_rac` ENABLE KEYS */;


-- Dumping structure for table kim1b.insert_alarm_rac_st_1
CREATE TABLE IF NOT EXISTS `insert_alarm_rac_st_1` (
  `station` int(11) DEFAULT NULL,
  `alarm` int(11) DEFAULT NULL,
  `waktu_awal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kim1b.insert_alarm_rac_st_1: ~14 rows (approximately)
/*!40000 ALTER TABLE `insert_alarm_rac_st_1` DISABLE KEYS */;
INSERT INTO `insert_alarm_rac_st_1` (`station`, `alarm`, `waktu_awal`) VALUES
	(1, 0, '2020-02-06 14:38:14'),
	(1, 0, '2020-02-06 14:47:02'),
	(1, 0, '2020-02-06 14:50:50'),
	(1, 0, '2020-02-06 14:52:27'),
	(1, 0, '2020-02-06 14:59:11'),
	(1, 0, '2020-02-06 14:59:50'),
	(1, 0, '2020-02-06 15:02:04'),
	(1, 0, '2020-02-06 15:02:38'),
	(1, 0, '2020-02-06 15:02:54'),
	(1, 0, '2020-02-06 15:03:09'),
	(1, 0, '2020-02-06 15:03:34'),
	(1, 0, '2020-02-06 15:03:46'),
	(1, 0, '2020-02-06 15:10:53'),
	(1, 0, '2020-02-06 16:04:02'),
	(1, 0, '2020-02-06 16:04:59'),
	(1, 0, '2020-02-06 16:05:38');
/*!40000 ALTER TABLE `insert_alarm_rac_st_1` ENABLE KEYS */;


-- Dumping structure for table kim1b.insert_alarm_rac_st_2
CREATE TABLE IF NOT EXISTS `insert_alarm_rac_st_2` (
  `station` int(11) DEFAULT NULL,
  `alarm` int(11) DEFAULT NULL,
  `waktu_awal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kim1b.insert_alarm_rac_st_2: ~11 rows (approximately)
/*!40000 ALTER TABLE `insert_alarm_rac_st_2` DISABLE KEYS */;
INSERT INTO `insert_alarm_rac_st_2` (`station`, `alarm`, `waktu_awal`) VALUES
	(2, 0, '2020-02-06 14:39:13'),
	(2, 0, '2020-02-06 15:04:00'),
	(2, 0, '2020-02-06 15:09:43'),
	(2, 0, '2020-02-06 15:10:01'),
	(2, 0, '2020-02-06 15:10:50'),
	(2, 0, '2020-02-06 16:04:12'),
	(2, 0, '2020-02-06 16:04:32'),
	(2, 0, '2020-02-06 16:04:41'),
	(2, 0, '2020-02-06 16:06:14'),
	(2, 0, '2020-02-06 16:06:24'),
	(2, 0, '2020-02-06 16:06:37'),
	(2, 0, '2020-02-06 16:06:47');
/*!40000 ALTER TABLE `insert_alarm_rac_st_2` ENABLE KEYS */;


-- Dumping structure for table kim1b.update_alarm_rac_st_1
CREATE TABLE IF NOT EXISTS `update_alarm_rac_st_1` (
  `waktu_akhir` datetime DEFAULT NULL,
  `total_waktu` int(11) DEFAULT NULL,
  `station` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kim1b.update_alarm_rac_st_1: ~14 rows (approximately)
/*!40000 ALTER TABLE `update_alarm_rac_st_1` DISABLE KEYS */;
INSERT INTO `update_alarm_rac_st_1` (`waktu_akhir`, `total_waktu`, `station`) VALUES
	('2020-02-06 14:38:22', 8, 1),
	('2020-02-06 14:47:07', 5, 1),
	('2020-02-06 14:51:03', 14, 1),
	('2020-02-06 14:52:29', 3, 1),
	('2020-02-06 14:59:23', 12, 1),
	('2020-02-06 14:59:58', 8, 1),
	('2020-02-06 15:02:14', 11, 1),
	('2020-02-06 15:02:32', 12, 1),
	('2020-02-06 15:02:49', 11, 1),
	('2020-02-06 15:03:01', 8, 1),
	('2020-02-06 15:03:16', 7, 1),
	('2020-02-06 15:03:39', 5, 1),
	('2020-02-06 15:03:53', 7, 1),
	('2020-02-06 15:12:05', 72, 1),
	('2020-02-06 16:05:03', 4, 1),
	('2020-02-06 16:06:56', 78, 1);
/*!40000 ALTER TABLE `update_alarm_rac_st_1` ENABLE KEYS */;


-- Dumping structure for table kim1b.update_alarm_rac_st_2
CREATE TABLE IF NOT EXISTS `update_alarm_rac_st_2` (
  `waktu_akhir` datetime DEFAULT NULL,
  `total_waktu` int(11) DEFAULT NULL,
  `station` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kim1b.update_alarm_rac_st_2: ~11 rows (approximately)
/*!40000 ALTER TABLE `update_alarm_rac_st_2` DISABLE KEYS */;
INSERT INTO `update_alarm_rac_st_2` (`waktu_akhir`, `total_waktu`, `station`) VALUES
	('2020-02-06 14:39:25', 12, 2),
	('2020-02-06 15:09:46', 3, 2),
	('2020-02-06 15:10:38', 37, 2),
	('2020-02-06 15:12:20', 90, 2),
	('2020-02-06 16:04:26', 15, 2),
	('2020-02-06 16:04:36', 4, 2),
	('2020-02-06 16:04:44', 4, 2),
	('2020-02-06 16:05:51', 10, 2),
	('2020-02-06 16:06:30', 6, 2),
	('2020-02-06 16:06:43', 6, 2),
	('2020-02-06 16:06:51', 4, 2);
/*!40000 ALTER TABLE `update_alarm_rac_st_2` ENABLE KEYS */;


-- Dumping structure for trigger kim1b.alarm_rac_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `alarm_rac_before_insert` BEFORE INSERT ON `alarm_rac` FOR EACH ROW BEGIN
		set new.status = 1;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Dumping structure for trigger kim1b.insert_alarm_rac_st_1_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_alarm_rac_st_1_before_insert` AFTER INSERT ON `insert_alarm_rac_st_1` FOR EACH ROW BEGIN
	
insert into alarm_rac set alarm_rac.station = new.station, alarm_rac.alarm = new.alarm, alarm_rac.tanggal_awal = new.waktu_awal;

END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Dumping structure for trigger kim1b.insert_alarm_rac_st_2_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_alarm_rac_st_2_after_insert` AFTER INSERT ON `insert_alarm_rac_st_2` FOR EACH ROW BEGIN

insert into alarm_rac set alarm_rac.station = new.station, alarm_rac.alarm = new.alarm, alarm_rac.tanggal_awal = new.waktu_awal;

END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Dumping structure for trigger kim1b.update_alarm_rac_st_1_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `update_alarm_rac_st_1_after_insert` AFTER INSERT ON `update_alarm_rac_st_1` FOR EACH ROW BEGIN

	update alarm_rac set alarm_rac.tanggal_akhir = new.waktu_akhir, alarm_rac.total_alarm = new.total_waktu where alarm_rac.station = 1 order by alarm_rac.tanggal_awal desc limit 1;
	
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Dumping structure for trigger kim1b.update_alarm_rac_st_2_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `update_alarm_rac_st_2_after_insert` AFTER INSERT ON `update_alarm_rac_st_2` FOR EACH ROW BEGIN

	update alarm_rac set alarm_rac.tanggal_akhir = new.waktu_akhir, alarm_rac.total_alarm = new.total_waktu where alarm_rac.station = 2 order by alarm_rac.tanggal_awal desc limit 1;
	
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
