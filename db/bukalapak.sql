/*
SQLyog Community v13.0.0 (64 bit)
MySQL - 10.1.28-MariaDB : Database - bukalapak
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bukalapak` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bukalapak`;

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `total` double NOT NULL,
  `waktu` datetime NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status_pemesanan` enum('pending','checkout') DEFAULT 'pending',
  PRIMARY KEY (`id_pemesanan`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`id_pemesanan`,`total`,`waktu`,`id_user`,`status_pemesanan`) values 
(1,0,'0000-00-00 00:00:00',NULL,'pending'),
(6,879900,'2019-11-30 09:11:48',4,'checkout'),
(8,1069800,'2019-11-30 10:11:51',4,'checkout'),
(9,189900,'2019-11-30 10:11:58',4,'checkout');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_product` varchar(200) NOT NULL,
  `harga` double NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`id_product`,`img`,`deskripsi`,`nama_product`,`harga`,`id_user`) values 
(4,'1.jpg','Selamat datang di lapak just store\r\n\r\n\r\n-Deskripsi\r\nSkechers GO FLEX Walk - Muse adalah sepatu yang bergerak bersamamu. Upper rajutan dengan desain sol berartikulasi dan terukur. Didesain dengan teknologi Skechers Performance dan bahan-bahan yang khusus dipilih untuk athletic walking. Insole Goga Mat Technology dengan bantalan berdaya pantul tinggi.\r\n\r\nUpper berbahan heathered jersey yang halus\r\nLogo S di bagian samping\r\nPanel tumit sintetis dengan Quick-Fit Portal\r\n\r\n\r\nHappy shopping','Skechers GO FLEX WALK - MUSE WOMENS LIFESTYLE SHOES SKU SKE14010BKHP',879900,3),
(5,'5.jpg','	\r\nBucket bag<br><BR>\r\n\r\nColor: Blue, white, black, and pink.<br>\r\nIngredients : PVC, Nylon Zipper, Ironware<br>\r\nSpecification 13. X 9 x 19 cm<br>\r\nItem code<br>\r\nBarcode 6970091279354','Miniso Official Bucket Bag',189900,3);

/*Table structure for table `shopping_cart` */

DROP TABLE IF EXISTS `shopping_cart`;

CREATE TABLE `shopping_cart` (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `status` enum('cart','checkout','shipping','selesai') DEFAULT 'cart',
  `no_resi` varchar(200) DEFAULT NULL,
  `jasa_pengiriman` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `id_user` (`id_user`),
  KEY `id_product` (`id_product`),
  KEY `id_pemesanan` (`id_pemesanan`),
  CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `shopping_cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `shopping_cart_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `shopping_cart` */

insert  into `shopping_cart`(`id_cart`,`id_user`,`id_product`,`qty`,`id_pemesanan`,`status`,`no_resi`,`jasa_pengiriman`) values 
(16,4,4,1,6,'selesai','09823123','JNE'),
(18,4,4,1,8,'selesai','9999032','J&T'),
(19,4,5,1,9,'checkout',NULL,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(200) NOT NULL,
  `alamat_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `password_user` varchar(200) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama_user`,`alamat_user`,`email_user`,`password_user`) values 
(3,'Rezky Revindo','Jln. Intan VII no. 234 Pegambiran, Padang','rezkyrevindo3@gmail.com','123456'),
(4,'Azel Tasya','Jln. Sukabirus','azel@gmail.com','123456');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
