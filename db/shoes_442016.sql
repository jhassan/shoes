/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.14 : Database - millonshoes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`millonshoes` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `millonshoes`;

/*Table structure for table `tbl_purchase` */

DROP TABLE IF EXISTS `tbl_purchase`;

CREATE TABLE `tbl_purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_no` varchar(20) DEFAULT NULL,
  `group_id` varchar(10) DEFAULT NULL,
  `sale_price` int(10) NOT NULL DEFAULT '0',
  `purchase_price` int(10) NOT NULL DEFAULT '0',
  `discount_amount` int(11) DEFAULT '0',
  `party_id` int(11) DEFAULT '0',
  `date_purchase` datetime DEFAULT NULL,
  `date_sale` datetime DEFAULT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchase` */

/*Table structure for table `tbl_purchase_detail` */

DROP TABLE IF EXISTS `tbl_purchase_detail`;

CREATE TABLE `tbl_purchase_detail` (
  `purchase_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_code` varchar(10) DEFAULT NULL,
  `sh_credit` int(11) DEFAULT '0',
  `sh_debit` int(11) DEFAULT '0',
  PRIMARY KEY (`purchase_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchase_detail` */

/*Table structure for table `tbl_sizes` */

DROP TABLE IF EXISTS `tbl_sizes`;

CREATE TABLE `tbl_sizes` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sizes` */

insert  into `tbl_sizes`(`size_id`,`size_code`) values (1,'L_36'),(2,'L_37'),(3,'L_38'),(4,'L_39'),(5,'L_40'),(6,'L_41'),(7,'L_03'),(8,'L_04'),(9,'L_05'),(10,'L_06'),(11,'L_07'),(12,'G_06'),(13,'G_07'),(14,'G_08'),(15,'G_09'),(16,'G_10'),(17,'G_11'),(18,'G_02'),(19,'G_03'),(20,'G_04'),(21,'G_05'),(22,'G_39'),(23,'G_40'),(24,'G_41'),(25,'G_42'),(26,'G_43'),(27,'G_44'),(28,'G_45'),(29,'C_07'),(30,'C_08'),(31,'C_09'),(32,'C_10'),(33,'C_11'),(34,'C_12'),(35,'C_13'),(36,'C_01'),(37,'C_03'),(38,'C_04'),(39,'C_05'),(40,'C_06');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_name`,`email`,`address`,`password`) values (1,'admin','jawadjee0519@gmail.com','','Admin786');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
