-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: facture
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
-- Table structure for table `agent_saisie`
--

DROP TABLE IF EXISTS `agent_saisie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent_saisie` (
  `matricule` varchar(5) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `login` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `mdp` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent_saisie`
--

LOCK TABLES `agent_saisie` WRITE;
/*!40000 ALTER TABLE `agent_saisie` DISABLE KEYS */;
INSERT INTO `agent_saisie` VALUES ('K0949','Hanitrarivelo Rivo','rivoinfo.karlit@gmail.com','$argon2i$v=19$m=1024,t=2,p=2$dnpoc3BxcENCLkg3VG1VNg$vKWpkZw4cVYdWFBn6Mk7lh4gS5+Yg4Z++dDnZOEtTIE');
/*!40000 ALTER TABLE `agent_saisie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fournisseur`
--

LOCK TABLES `fournisseur` WRITE;
/*!40000 ALTER TABLE `fournisseur` DISABLE KEYS */;
/*!40000 ALTER TABLE `fournisseur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiels`
--

DROP TABLE IF EXISTS `materiels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libellemat` varchar(45) DEFAULT NULL,
  `ModelMat` varchar(45) DEFAULT NULL,
  `PrixUnitaire` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiels`
--

LOCK TABLES `materiels` WRITE;
/*!40000 ALTER TABLE `materiels` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suivifacture`
--

DROP TABLE IF EXISTS `suivifacture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suivifacture` (
  `MatriculeAgent` varchar(5) NOT NULL,
  `idFournisseur` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `NumeroFacture` varchar(45) DEFAULT NULL,
  `DateAchat` date DEFAULT NULL,
  `DateLivraison` date DEFAULT NULL,
  `idMateriel` int(11) NOT NULL,
  `Quantite` int(11) DEFAULT NULL,
  `Montant` double DEFAULT NULL,
  PRIMARY KEY (`MatriculeAgent`,`idFournisseur`,`idClient`,`idMateriel`),
  KEY `fk_idFournisseur_idx` (`idFournisseur`),
  KEY `fk_idClient_idx` (`idClient`),
  KEY `fk_idMateriels_idx` (`idMateriel`),
  KEY `fk_matricule_idx` (`MatriculeAgent`),
  CONSTRAINT `fk_idClient` FOREIGN KEY (`idClient`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idFournisseur` FOREIGN KEY (`idFournisseur`) REFERENCES `fournisseur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idMateriels` FOREIGN KEY (`idMateriel`) REFERENCES `materiels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matricule` FOREIGN KEY (`MatriculeAgent`) REFERENCES `agent_saisie` (`matricule`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suivifacture`
--

LOCK TABLES `suivifacture` WRITE;
/*!40000 ALTER TABLE `suivifacture` DISABLE KEYS */;
/*!40000 ALTER TABLE `suivifacture` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-06 13:45:59
