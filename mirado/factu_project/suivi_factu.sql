-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: suivi_factu
-- ------------------------------------------------------
-- Server version	5.5.61

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `contact` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'za',211),(2,'iz',21212),(3,'mi',5),(4,'Doe',33);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facture`
--

DROP TABLE IF EXISTS `facture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facture` (
  `client_id` int(11) NOT NULL,
  `societe_id` int(11) DEFAULT NULL,
  `prepa_id` int(11) DEFAULT NULL,
  `date_fact` date DEFAULT NULL,
  `num_fact` double DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `produit` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  KEY `fk_societe_id_idx` (`societe_id`),
  KEY `fk_prepa_id_idx` (`prepa_id`),
  CONSTRAINT `fk_client_id` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prepa_id` FOREIGN KEY (`prepa_id`) REFERENCES `prepa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_societe_id` FOREIGN KEY (`societe_id`) REFERENCES `societe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facture`
--

LOCK TABLES `facture` WRITE;
/*!40000 ALTER TABLE `facture` DISABLE KEYS */;
INSERT INTO `facture` VALUES (1,2,1,'2020-03-01',125458,54886,'nestle');
/*!40000 ALTER TABLE `facture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prepa`
--

DROP TABLE IF EXISTS `prepa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prepa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `login` varchar(10) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prepa`
--

LOCK TABLES `prepa` WRITE;
/*!40000 ALTER TABLE `prepa` DISABLE KEYS */;
INSERT INTO `prepa` VALUES (1,'zoky','zok','212'),(2,'lery','lery','552');
/*!40000 ALTER TABLE `prepa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `societe`
--

DROP TABLE IF EXISTS `societe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `societe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `societe`
--

LOCK TABLES `societe` WRITE;
/*!40000 ALTER TABLE `societe` DISABLE KEYS */;
INSERT INTO `societe` VALUES (1,'magro'),(2,'aaa');
/*!40000 ALTER TABLE `societe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-06 13:46:18
