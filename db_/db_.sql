-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.29-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for database_detail
CREATE DATABASE IF NOT EXISTS `database_detail` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `database_detail`;

-- Dumping structure for table database_detail.mypoint_mp_lor_loan_status
CREATE TABLE IF NOT EXISTS `mypoint_mp_lor_loan_status` (
  `loan_status_id` int(11) DEFAULT NULL COMMENT 'primary key table ( ref mypoint_ms_lor_loan_status )',
  `loan_type_id` int(11) DEFAULT NULL COMMENT 'primary key table ( ref mypoint_ms_lor_loan_type )',
  `permission_branch_flag` varchar(1) DEFAULT NULL COMMENT 'Y=Yes / N=No',
  `permission_center_flag` varchar(1) DEFAULT NULL COMMENT 'Y=Yes / N=No',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้างข้อมูล',
  `created_by` varchar(50) DEFAULT NULL COMMENT 'user ที่สร้างข้อมูล',
  `updated_date` datetime DEFAULT NULL COMMENT 'วันที่แก้ไขข้อมูล',
  `updated_by` varchar(50) DEFAULT NULL COMMENT 'user ที่แก้ไขข้อมูล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ข้อมูล mapping สถานะผู้ขอสินเชื่อ';

-- Dumping data for table database_detail.mypoint_mp_lor_loan_status: ~0 rows (approximately)
/*!40000 ALTER TABLE `mypoint_mp_lor_loan_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `mypoint_mp_lor_loan_status` ENABLE KEYS */;

-- Dumping structure for table database_detail.mypoint_ms_lor_loan_status
CREATE TABLE IF NOT EXISTS `mypoint_ms_lor_loan_status` (
  `loan_status_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key table',
  `loan_stauts_name` varchar(255) DEFAULT NULL COMMENT 'ชื่อ สถานะสินเชื่อ',
  `loan_status_code` varchar(10) DEFAULT NULL COMMENT 'code ของ สถานะสินเชื่อ ( Unique )',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้างข้อมูล',
  `created_by` varchar(50) DEFAULT NULL COMMENT 'user ที่สร้างข้อมูล',
  `updated_date` datetime DEFAULT NULL COMMENT 'วันที่แก้ไขข้อมูล',
  `updated_by` varchar(50) DEFAULT NULL COMMENT 'user ที่แก้ไขข้อมูล',
  PRIMARY KEY (`loan_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='ข้อมูล การจัดการ สถานะผู้ขอสินเชื่อ';

-- Dumping data for table database_detail.mypoint_ms_lor_loan_status: ~4 rows (approximately)
/*!40000 ALTER TABLE `mypoint_ms_lor_loan_status` DISABLE KEYS */;
INSERT INTO `mypoint_ms_lor_loan_status` (`loan_status_id`, `loan_stauts_name`, `loan_status_code`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
	(1, 'บุคคล', '1', '2019-06-27 12:54:03', '1', '2019-06-27 12:54:06', '1'),
	(2, 'การจัดการ', '111', '2019-06-27 13:26:44', NULL, '2019-06-27 13:26:46', NULL),
	(3, '123456', 'sss', '2019-06-30 13:56:33', NULL, '2019-06-30 13:56:38', NULL),
	(4, 'jjjj', '1234', '2019-06-30 13:56:39', NULL, '2019-06-30 13:56:46', NULL);
/*!40000 ALTER TABLE `mypoint_ms_lor_loan_status` ENABLE KEYS */;

-- Dumping structure for table database_detail.mypoint_ms_lor_loan_type
CREATE TABLE IF NOT EXISTS `mypoint_ms_lor_loan_type` (
  `loan_type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key table',
  `loan_type_name` varchar(255) DEFAULT NULL COMMENT 'ชื่อ ประเภทผู้ขอสินเชื่อ',
  `loan_type_code` varchar(10) DEFAULT NULL COMMENT 'code ของ loan type ( Unique )',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้างข้อมูล',
  `created_by` varchar(50) DEFAULT NULL COMMENT 'user ที่สร้างข้อมูล',
  `updated_date` datetime DEFAULT NULL COMMENT 'วันที่แก้ไขข้อมูล',
  `updated_by` varchar(50) DEFAULT NULL COMMENT 'user ที่แก้ไขข้อมูล',
  PRIMARY KEY (`loan_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='ข้อมูล การจัดการ ประเภทผู้ขอสินเชื่อ';

-- Dumping data for table database_detail.mypoint_ms_lor_loan_type: ~4 rows (approximately)
/*!40000 ALTER TABLE `mypoint_ms_lor_loan_type` DISABLE KEYS */;
INSERT INTO `mypoint_ms_lor_loan_type` (`loan_type_id`, `loan_type_name`, `loan_type_code`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
	(1, 'บุคคล', NULL, NULL, '1', NULL, NULL),
	(2, 'ธุรกิจและภาครัฐ', NULL, NULL, '1', NULL, NULL),
	(3, 'บุคคล', NULL, NULL, '1', NULL, NULL),
	(4, 'บุคคล', NULL, NULL, '2', NULL, NULL);
/*!40000 ALTER TABLE `mypoint_ms_lor_loan_type` ENABLE KEYS */;

-- Dumping structure for table database_detail.mypoint_ms_lor_loan_user
CREATE TABLE IF NOT EXISTS `mypoint_ms_lor_loan_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table database_detail.mypoint_ms_lor_loan_user: ~1 rows (approximately)
/*!40000 ALTER TABLE `mypoint_ms_lor_loan_user` DISABLE KEYS */;
INSERT INTO `mypoint_ms_lor_loan_user` (`user_id`, `user_name`, `user_password`) VALUES
	(1, '132', '123');
/*!40000 ALTER TABLE `mypoint_ms_lor_loan_user` ENABLE KEYS */;

-- Dumping structure for table database_detail.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table database_detail.product: ~0 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
