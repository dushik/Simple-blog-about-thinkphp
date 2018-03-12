/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.5.53 : Database - bolgtest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bolgtest` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bolgtest`;

/*Table structure for table `dushikang` */

DROP TABLE IF EXISTS `dushikang`;

CREATE TABLE `dushikang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `gender` char(10) DEFAULT NULL,
  `grade` char(10) DEFAULT NULL,
  `hobby` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `message` varchar(100) NOT NULL,
  `create_time` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `dushikang` */

insert  into `dushikang`(`id`,`name`,`gender`,`grade`,`hobby`,`email`,`message`,`create_time`,`time`) values (1,'杜世康','男性','大三','篮球,足球,羽毛球,网球','foreverdsk@qq.com','hello dushikang!','2017-03-11','10:55:34'),(2,'小明','男性','大一','足球','foreverdsk@qq.com','阿斯顿发送到发大水发的说法是打发斯蒂芬','2017-03-11','11:14:19'),(3,'小花','女性','大四','羽毛球,网球','486456@qq.com','法规和对方过后的共和国的活动过后感到很丰厚的广告费很大的规范化','2017-03-11','11:14:46'),(4,'小明','男性','大三','足球','foreverdsk@qq.com','hello word!','2017-03-22','20:19:42'),(5,'富康','男性','大二','篮球,足球','foreverdsk@qq.com','hello','2017-09-19','15:56:37');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
