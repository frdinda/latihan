-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: idol
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

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
-- Table structure for table `detail_ent`
--

DROP TABLE IF EXISTS `detail_ent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_ent` (
  `id_ent` int(3) NOT NULL AUTO_INCREMENT,
  `nama_ent` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ent`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_ent`
--

LOCK TABLES `detail_ent` WRITE;
/*!40000 ALTER TABLE `detail_ent` DISABLE KEYS */;
INSERT INTO `detail_ent` VALUES (1,'jyp'),(2,'yg'),(3,'sm'),(4,'bighit'),(5,'pledis'),(6,'starship'),(7,'rbw'),(8,'creker');
/*!40000 ALTER TABLE `detail_ent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_group`
--

DROP TABLE IF EXISTS `detail_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_group` (
  `id_group` int(3) NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(20) NOT NULL,
  `id_ent` int(3) NOT NULL,
  PRIMARY KEY (`id_group`),
  KEY `id_ent` (`id_ent`),
  CONSTRAINT `detail_group_ibfk_1` FOREIGN KEY (`id_ent`) REFERENCES `detail_ent` (`id_ent`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_group`
--

LOCK TABLES `detail_group` WRITE;
/*!40000 ALTER TABLE `detail_group` DISABLE KEYS */;
INSERT INTO `detail_group` VALUES (1,'stray kids',1),(2,'itzy',1),(3,'twice',1),(4,'got7',1),(5,'blackpink',2),(6,'ikon',2),(7,'red velvet',3),(8,'nct',3),(9,'exo',3),(10,'super junior',3),(11,'snsd',3),(12,'bts',4),(13,'txt',4),(14,'nuest',5),(15,'seventeen',5),(16,'sistar',6),(17,'wjsn',6),(18,'monsta x',6),(19,'mamamoo',7),(20,'oneus',7),(21,'onewe',7),(22,'the boyz',8);
/*!40000 ALTER TABLE `detail_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_idol`
--

DROP TABLE IF EXISTS `detail_idol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_idol` (
  `id_idol` int(3) NOT NULL AUTO_INCREMENT,
  `nama_idol` varchar(20) NOT NULL,
  `id_group` int(3) NOT NULL,
  `posisi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_idol`),
  KEY `id_group` (`id_group`),
  CONSTRAINT `detail_idol_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `detail_group` (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_idol`
--

LOCK TABLES `detail_idol` WRITE;
/*!40000 ALTER TABLE `detail_idol` DISABLE KEYS */;
INSERT INTO `detail_idol` VALUES (1,'bang chan',1,'leader'),(2,'lee minho',1,'lead dancer'),(3,'seo changbin',1,'main rapper'),(4,'hwang hyunjin',1,'main dancer'),(5,'han jisung',1,'main rapper'),(6,'lee felix',1,'main dancer'),(7,'kim seungmin',1,'main vocal'),(8,'yang jeongin',1,'youngest'),(9,'lee sangyeon',22,'leader'),(10,'bae jacob',22,'main vocal'),(11,'kim younghoon',22,'vocal'),(12,'lee hyunjae',22,'main vocal'),(13,'lee juyeon',22,'main dancer'),(14,'moon kevin',22,'main vocal'),(15,'choi chanhee',22,'main vocal'),(16,'ji changmin',22,'lead dancer'),(17,'ju haknyeon',22,'vocal'),(18,'kim sunwoo',22,'main rapper'),(19,'sohn youngjae',22,'youngest');
/*!40000 ALTER TABLE `detail_idol` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-01  0:20:52
