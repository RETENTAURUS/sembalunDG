-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: vistas
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `destinasi`
--

DROP TABLE IF EXISTS `destinasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_destinasi` varchar(50) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  PRIMARY KEY (`id_destinasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinasi`
--

LOCK TABLES `destinasi` WRITE;
/*!40000 ALTER TABLE `destinasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `destinasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinasi_bukit`
--

DROP TABLE IF EXISTS `destinasi_bukit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinasi_bukit` (
  `id_destinasi` int(11) NOT NULL AUTO_INCREMENT,
  `image_destinasi` varchar(50) DEFAULT NULL,
  `nama_bukit` varchar(50) DEFAULT NULL,
  `alamat_bukit` varchar(50) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `deskripsi_bukit` longtext DEFAULT NULL,
  PRIMARY KEY (`id_destinasi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinasi_bukit`
--

LOCK TABLES `destinasi_bukit` WRITE;
/*!40000 ALTER TABLE `destinasi_bukit` DISABLE KEYS */;
INSERT INTO `destinasi_bukit` VALUES (5,'4.png','Gunung Rinjani','sembalun lawang, lombok timur Nusa Tenggara Barat',10000,'Gunung Rinjani adalah gunung tertinggi kedua di Indonesia, dengan ketinggian mencapai 3.726 meter di atas permukaan laut. Terletak di Pulau Lombok, Nusa Tenggara Barat, Rinjani merupakan bagian dari Taman Nasional Gunung Rinjani yang terkenal dengan keindahan alamnya yang spektakuler.\r\n\r\nGunung ini menawarkan trek pendakian yang menantang, di mana para pendaki dapat menikmati pemandangan yang memukau, seperti hutan tropis, padang savana, danau Segara Anak yang indah, serta panorama matahari terbit yang menakjubkan dari puncaknya. Selain itu, Rinjani juga memiliki nilai spiritual yang tinggi bagi masyarakat setempat, dengan banyak mitos dan cerita yang mengelilingi gunung ini.\r\n\r\nKeberagaman flora dan fauna serta budaya lokal yang kaya menjadikan Gunung Rinjani sebagai tujuan wisata yang populer bagi para pecinta alam dan petualangan. Dengan keindahan alam yang masih alami, Rinjani tidak hanya menjadi tempat untuk mendaki, tetapi juga untuk merenung dan menikmati ketenangan alam yang luar biasa.'),(6,'5.png','Anak Dara','sembalun lawang, lombok timur Nusa Tenggara Barat',30000,'Gunung Anak Dara di Lombok merupakan salah satu destinasi wisata yang menakjubkan, menawarkan pesona alam yang memukau dan tantangan bagi para pendaki. Terletak di kawasan yang dikelilingi oleh hutan lebat dan pemandangan laut yang indah, gunung ini memiliki ketinggian sekitar 2.013 meter di atas permukaan laut, menjadikannya lokasi yang ideal untuk petualangan outdoor. Pendakian menuju puncak Gunung Anak Dara memberikan pengalaman yang tak terlupakan, dengan jalur yang bervariasi dan panorama spektakuler di sepanjang perjalanan. Di puncak, pengunjung akan disuguhi pemandangan yang menakjubkan, memungkinkan mereka untuk menyaksikan keindahan alam Lombok dari ketinggian, termasuk hamparan pulau-pulau kecil dan lautan biru yang membentang luas. Selain itu, keanekaragaman hayati yang ada di sekitar gunung ini, seperti flora dan fauna endemik, menambah daya tarik tersendiri bagi para pecinta alam dan fotografer. Tak hanya itu, budaya lokal yang kaya dan keramahan penduduk setempat membuat pengalaman wisata di Gunung Anak Dara semakin berkesan, menjadikannya salah satu tempat yang wajib dikunjungi bagi siapa pun yang ingin merasakan keindahan dan keajaiban alam Lombok.'),(7,'bukitSelong.jpg','Bukit Selong','sembalun lawang, lombok timur Nusa Tenggara Barat',25000,'\r\nGunung Anak Dara di Lombok adalah salah satu destinasi wisata alam yang memukau dengan keindahan alam yang asri dan panorama yang menawan. Berada di kawasan Sembalun, gunung ini menawarkan pemandangan luar biasa dari ketinggian, dimana pengunjung bisa menikmati hamparan hijau persawahan, bukit-bukit megah, hingga garis pantai yang terlihat dari kejauhan. Perjalanan menuju puncak Gunung Anak Dara mungkin menantang, namun keindahan sepanjang trek, yang dipenuhi vegetasi hijau dan udara yang sejuk, menjadikan setiap langkah terasa berharga. Bagi para pendaki pemula, gunung ini cocok karena memiliki jalur yang lebih ringan dibandingkan dengan Gunung Rinjani, namun tetap menawarkan sensasi petualangan dan keindahan alam yang luar biasa. Saat matahari terbit, dari puncak gunung ini pengunjung disuguhi panorama sunrise yang mengagumkan, menciptakan momen magis dengan langit berwarna keemasan yang menyinari lembah Sembalun di bawahnya. Gunung Anak Dara tidak hanya menawarkan pemandangan, namun juga pengalaman spiritual bagi pengunjung yang ingin menyatu dengan alam, menjadikannya pilihan sempurna bagi pencinta alam dan pendaki yang mencari ketenangan dan keindahan.'),(8,'6.png','Bukit Pergasingan','sembalun lawang',23000,'\r\nBukit Pergasingan di Lombok adalah destinasi wisata alam yang terkenal dengan panorama menakjubkan dan suasana tenang yang cocok untuk menikmati keindahan alam dari ketinggian. Terletak di Desa Sembalun, bukit ini menawarkan pemandangan spektakuler dari hamparan sawah berbentuk kotak-kotak yang tersusun rapi, dikelilingi oleh perbukitan hijau yang indah dan kokoh. Bagi para pecinta fotografi, Bukit Pergasingan adalah surga yang menyediakan latar belakang sunrise dan sunset yang dramatis, di mana cahaya matahari menyinari lembah Sembalun dengan lembut. Rute pendakian ke puncak bukit ini relatif mudah, membuatnya cocok bagi pendaki pemula yang ingin merasakan sensasi petualangan tanpa tantangan yang terlalu berat. Dengan suasana sejuk khas pegunungan dan pemandangan Gunung Rinjani yang megah di kejauhan, Bukit Pergasingan adalah pilihan sempurna bagi mereka yang mencari pengalaman alam yang mendalam dan momen relaksasi sambil menikmati pesona alam Lombok.');
/*!40000 ALTER TABLE `destinasi_bukit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(50) DEFAULT NULL,
  `nama_destinasi` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (2,'2.png','Mangku kodek','sembalun lawang, desa sembalun, Lombok Timur, NTB.',50000,'Mangku Kodek adalah sebuah destinasi wisata yang t'),(3,'jelagaBatu.jpg','Mangku Sakti','sembalun lawang, desa sembalun, Lombok Timur, NTB.',10000,'Wisata Mangku Sakti di Lombok merupakan destinasi '),(4,'8.png','Umar Maya','sembalun',35000,'Umar Maya adalah salah satu legenda terkenal dari '),(5,'1.png','Dewi Selendang','sembalun lawang, desa sembalun, Lombok Timur, NTB.',10000,'Dewi Selendang adalah sebuah legenda yang berasal ');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(50) DEFAULT NULL,
  `kata_sandi` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` VALUES (1,'z','z','z','z','z',1),(2,'c','c','c','c','c',NULL);
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-30 11:24:36
