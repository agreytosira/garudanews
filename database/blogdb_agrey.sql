/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.25-MariaDB : Database - blogdb_agrey
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blogdb_agrey` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `blogdb_agrey`;

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `idberita` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  PRIMARY KEY (`idberita`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `berita` */

insert  into `berita`(`idberita`,`judul`,`isi`) values 
(1,'7 Daftar Web Developer Jakarta Penyedia Jasa Pembuatan Web','Jasa web developer Jakarta saat ini  semakin banyak dicari karena banyaknya perusahaan yang beralih menggunakan teknologi untuk mengelola bisnisnya. Perusahaan memang harus terus mengikuti perkembangan zaman agar tidak tertinggal dengan para kompetitornya. Dengan menggunakan jasa web developer ini, Anda dapat mengembangkan bisnis melalui platform digital seperti website, mobile app, dan lain-lain. Jika saat ini Anda tertarik untuk mengembangkan suatu sistem untuk bisnis Anda, berikut kami sediakan daftar web developer Jakarta.'),
(2,'Mengenal Apa Itu Web Front End Developer','Bagian front end adalah bagian yang langsung dilihat dan berinteraksi oleh pengguna. Pada sebuah website front end dibangun menggunakna HTML, CSS, Dan Javascript.\r\n\r\nJadi web front end developer merupakan pekerjaan seorang pengembang dengan menggunakan bahasa pemrograman tertentu untuk menghasilkan sebuah tampilan (interface) agar dapat dilihat oleh pengguna.\r\n\r\nSingkatnya web front end developer bertugas untuk menerapkan sebuah desain yang telah disiapkan oleh UI designer menjadi sebuah situs website.\r\n\r\nPada dasarnya web front end developer bertugas untuk memastikan agar pengguna dapat melihat, berinteraksi, dan mendapat informasi dengan nyaman pada situs website atau aplikasi.'),
(3,'Apa Itu Full Stack Developer? Ini Skill Yang Wajib Dikuasai!','Full stack developer adalah seseorang yang bekerja dengan back End atau sisi server dari aplikasi serta front End atau sisi klien.\r\n\r\nDeveloper ini harus memiliki beberapa keterampilan dalam berbagai niche pengkodean, mulai dari database, desain grafis, hingga manajemen UI/UX untuk melakukan pengembangan program dengan baik.\r\n\r\nJadi bisa dibilang mereka siap untuk membantu di mana pun dibutuhkan dalam proses pengembangan website atau software.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
