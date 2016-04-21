-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: obelisk
-- ------------------------------------------------------
-- Server version	5.1.73-log

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
-- Table structure for table `MY_CACHE_VIEW`
--

DROP TABLE IF EXISTS `MY_CACHE_VIEW`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MY_CACHE_VIEW` (
  `ID_INDEX` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_HASTDOCUMENT` varchar(250) DEFAULT NULL,
  `NAME_DOCUMENT` varchar(250) DEFAULT NULL,
  `TRDTVD` int(11) DEFAULT NULL,
  `ID_SERIE` int(11) DEFAULT NULL,
  `SERIE` varchar(250) DEFAULT NULL,
  `ID_SUBSERIE` int(11) DEFAULT NULL,
  `SUB_SERIE` varchar(250) DEFAULT NULL,
  `ID_TYPEDOCUMENT` int(11) DEFAULT NULL,
  `TYPEDOCUMENT` varchar(250) DEFAULT NULL,
  `SEARCH` text NOT NULL,
  `INDEX_1` text,
  `INDEX_2` text,
  `INDEX_4` text,
  `INDEX_5` text,
  `INDEX_6` text,
  `INDEX_7` text,
  `INDEX_8` text,
  `INDEX_9` text,
  `INDEX_10` text,
  `INDEX_11` text,
  `INDEX_13` text,
  `INDEX_14` text,
  `INDEX_15` text,
  `INDEX_16` text,
  `INDEX_17` text,
  `INDEX_18` text,
  `INDEX_3` text,
  PRIMARY KEY (`ID_INDEX`),
  FULLTEXT KEY `SEARCH` (`NAME_DOCUMENT`,`SERIE`,`SUB_SERIE`,`TYPEDOCUMENT`,`INDEX_1`,`INDEX_2`,`INDEX_4`,`INDEX_5`,`INDEX_6`,`INDEX_7`,`INDEX_8`,`INDEX_9`,`INDEX_10`,`INDEX_11`,`INDEX_13`,`INDEX_14`),
  FULLTEXT KEY `NAME_DOCUMENT` (`NAME_DOCUMENT`,`SERIE`,`SUB_SERIE`,`TYPEDOCUMENT`,`INDEX_1`,`INDEX_2`,`INDEX_4`,`INDEX_5`,`INDEX_6`,`INDEX_7`,`INDEX_8`,`INDEX_9`,`INDEX_10`,`INDEX_11`,`INDEX_13`,`INDEX_14`),
  FULLTEXT KEY `NAME_DOCUMENT_2` (`NAME_DOCUMENT`,`SERIE`,`SUB_SERIE`,`TYPEDOCUMENT`,`INDEX_1`,`INDEX_2`,`INDEX_4`,`INDEX_5`,`INDEX_6`,`INDEX_7`,`INDEX_8`,`INDEX_9`,`INDEX_10`,`INDEX_11`,`INDEX_13`,`INDEX_14`),
  FULLTEXT KEY `NAME_DOCUMENT_3` (`NAME_DOCUMENT`,`SERIE`,`SUB_SERIE`,`TYPEDOCUMENT`,`INDEX_1`,`INDEX_2`,`INDEX_4`,`INDEX_5`,`INDEX_6`,`INDEX_7`,`INDEX_8`,`INDEX_9`,`INDEX_10`,`INDEX_11`,`INDEX_13`,`INDEX_14`),
  FULLTEXT KEY `ID` (`NAME_DOCUMENT`,`SERIE`,`SUB_SERIE`,`TYPEDOCUMENT`,`INDEX_1`,`INDEX_2`,`INDEX_4`,`INDEX_5`,`INDEX_6`,`INDEX_7`,`INDEX_8`,`INDEX_9`,`INDEX_10`,`INDEX_11`,`INDEX_13`,`INDEX_14`),
  FULLTEXT KEY `SEARCH_2` (`SEARCH`),
  FULLTEXT KEY `SEARCH_3` (`SEARCH`),
  FULLTEXT KEY `INDEX_1` (`INDEX_1`,`INDEX_2`),
  FULLTEXT KEY `INDEX_14` (`INDEX_14`),
  FULLTEXT KEY `INDEX_11` (`INDEX_11`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_CACHE_VIEW`
--

LOCK TABLES `MY_CACHE_VIEW` WRITE;
/*!40000 ALTER TABLE `MY_CACHE_VIEW` DISABLE KEYS */;
INSERT INTO `MY_CACHE_VIEW` VALUES (49,'b97f2c5250b885d1566ddb4066f97e','documentoPrueba',1,3,'TALENTO HUMANO',4,'Hoja De Vida',3,'Declaracion','TALENTO HUMANO - Hoja De Vida - Declaracion= Fecha : 2015-06-09, Aodepago : sgsdgdf, ','2015-06-09','sgsdgdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(50,'75ed447bb1f5c7fd3d3ab6485bc5b4','documentoPrueba',1,3,'TALENTO HUMANO',4,'Hoja De Vida',3,'Declaracion','TALENTO HUMANO - Hoja De Vida - Declaracion= Fecha : 2015-06-09, Aodepago : sgsdgdf, ','2015-06-09','sgsdgdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,'073f8b323f739f9c109b0e676ba722','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',3,'Declaracion','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Declaracion= Fecha : 2015-06-25, Aodepago : yeison, ','2015-06-25','yeison',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(52,'6c86b34652f5de92af86bd9da79692','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',3,'Declaracion','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Declaracion= Fecha : 2015-06-10, Aodepago : 2015, Nombre : yeison , Apellidos : hernandez, ','2015-06-10','2015','hernandez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yeison '),(53,'4f7ef712554a8840423ca7ddfa191f','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',3,'Declaracion','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Declaracion= Fecha : 2015-06-10, Aodepago : 2015, Nombre : yeison , Apellidos : hernandez, ','2015-06-10','2015','hernandez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yeison '),(54,'7484bbaf3e7922cb0f6d1f895cec32','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',3,'Declaracion','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Declaracion= Fecha : 2015-06-10, Aodepago : 2015, Nombre : yeison , Apellidos : hernandez, ','2015-06-10','2015','hernandez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yeison '),(55,'ac296bf29cdc7f4d51ce40f2b4e893','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',3,'Declaracion','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Declaracion= Fecha : 2015-06-10, Aodepago : 2015, Nombre : yeison , Apellidos : hernandez, ','2015-06-10','2015','hernandez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yeison '),(56,'eb6b9973a066bfa0d18e5b12b95d3f','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',3,'Declaracion','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Declaracion= Fecha : 2015-06-10, Aodepago : 2015, Nombre : yeison , Apellidos : hernandez, ','2015-06-10','2015','hernandez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yeison '),(57,'ab008fcc8cef6223d2d09624974837','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',5,'Prueba','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Prueba= Apellidos : CORNELIO JESUS, Documento : MI HOJA DE VIDA, ',NULL,NULL,'CORNELIO JESUS','MI HOJA DE VIDA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(58,'c082c6a5f6fad1d3d153fcbd54822a','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',5,'Prueba','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Prueba= Apellidos : DIAS, Documento : HECTOR, ',NULL,NULL,'DIAS','HECTOR',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(59,'5bbd684857d70ebde1a5c20253b368','documentoPrueba',1,3,'TALENTO HUMANO',4,'Hoja De Vida',3,'Declaracion','TALENTO HUMANO - Hoja De Vida - Declaracion= Fecha : 2015-06-13, Aodepago : 2015, Nombre : TATUAJES, Apellidos : TATOO, ','2015-06-13','2015','TATOO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TATUAJES'),(60,'075edba86da24c21854368e39a7f89','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',2,'Novedad','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Novedad= Apellidos : obelisk, Documento : soft, NumeroCelular : 123, ',NULL,NULL,'obelisk','soft','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(61,'0b20d18e46b18189492d497bb8dcaf','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',3,'Declaracion','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Declaracion= Fecha : 2015-06-03, Aodepago : 2015, Nombre : PDF, Apellidos : , ','2015-06-03','2015','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'PDF'),(62,'477d6cc95b2769bbb9658531a0d440','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',4,'Auto','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Auto= Nombre : ONCLICK, Apellidos : ONCLICK, Documento : OFERTA, ',NULL,NULL,'ONCLICK','OFERTA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ONCLICK'),(63,'7c3d9fdc6a5e6281cccb10e2042ad8','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',2,'Novedad','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Novedad= Apellidos : Arias, Documento : tales, NumeroCelular : 311, ',NULL,NULL,'Arias','tales','311',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(64,'c28b2f13240362d32e3e6a3858d1f2','documentoPrueba',1,1,'SECRETARIA DE HACIENDA',2,'Sub Secretaria de Hacienda',5,'Prueba','SECRETARIA DE HACIENDA - Sub Secretaria de Hacienda - Prueba= Apellidos : ORGANIGRAMA, Documento : ORGANIGRAMA, ',NULL,NULL,'ORGANIGRAMA','ORGANIGRAMA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `MY_CACHE_VIEW` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MY_DOCUMENTRETENTIONS`
--

DROP TABLE IF EXISTS `MY_DOCUMENTRETENTIONS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MY_DOCUMENTRETENTIONS` (
  `ID_DOCRETENTION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_HASTDOCUMENT` varchar(50) NOT NULL,
  `ID_RETENTIONPARENT` int(11) DEFAULT NULL,
  `ID_RETENTIONCHILL` int(11) DEFAULT NULL,
  `ID_DOCTYPE` int(11) NOT NULL,
  PRIMARY KEY (`ID_DOCRETENTION`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_DOCUMENTRETENTIONS`
--

LOCK TABLES `MY_DOCUMENTRETENTIONS` WRITE;
/*!40000 ALTER TABLE `MY_DOCUMENTRETENTIONS` DISABLE KEYS */;
INSERT INTO `MY_DOCUMENTRETENTIONS` VALUES (1,'133a21d3f7a82f08c4c6114f7b6f13',1,2,2),(2,'77448df8b0aebb471ddeafccef287e',1,2,2),(3,'a5f86d978cc45d1f64ad2d50c176a3',1,2,2),(4,'b2902b530f064a47a943918387e8c7',1,2,2),(5,'15b5548fa0f340b5dbf100c04fce7c',1,2,2),(6,'39c0ca479603c90121ffa34571234e',1,2,2),(7,'fd0d590e08260bee97ae5ffc49ac8c',1,2,2),(8,'3c4b8d312794bff0a25da94037e46a',1,2,2),(9,'9d3b70fc9d32dcdb3991ae006cdc4a',1,2,2),(10,'499d64a1640c1a5380a2a15f61d345',1,2,2),(11,'7e3b57631a539793c050ff90ed799a',1,2,2),(12,'956aaaf8a19435604e6c5d243ba27c',1,2,2),(13,'9217064d2f0461f91f54bd155eec72',1,2,2),(14,'e66063d2f275c6a3d8f233fb3d66d2',1,2,2),(15,'2605721421d7357d7f734e8d048b91',1,2,2),(16,'31e59cb62ad1e7d72bd10e9e216672',1,2,2),(17,'5d85427a0c8fb80ea3b609b8f187dd',1,2,2),(18,'c32133bec138f438c47989ea0090f7',1,2,2),(19,'3477db7929c7e64074c1181551ee92',1,2,2),(20,'ed2a744beba6cbe80ed6fec6d1fb24',1,2,2),(21,'f12d572759455c1159b94b9348062f',1,2,2),(22,'93d6bd702cb826204931607ea8e4ad',1,2,2),(23,'4249e39a0f736b4a1fb0b934bf709d',1,2,2),(24,'f0152b03f762c7a12bd60f5defb394',1,2,2),(25,'579ab71823015700fd8b9d1dea8b33',1,2,2),(26,'87625cd18e6da2065000c5689e39ac',1,2,2),(27,'838169521aa46ec8b0e9ec364a622d',1,2,2),(28,'675fa0d21a350bea5c40309d4b22f1',1,2,2),(29,'fa40a4f9da7da4b17a75982ce1fcae',1,2,2),(30,'e9299c370d70972609c4c60fc82fbe',1,2,2),(31,'38ebe8ea82f78993a322b80e6eb49f',1,2,2),(32,'8b075b22c8f5773be5882ba49d6a8b',1,2,2),(33,'148518781eea9914a020596f47694c',1,2,2),(34,'9bc2e38b79b86b85323126a06e2a1e',1,2,2),(35,'b3bee5d8994ae79fba4c731d9ae722',1,2,2),(36,'7f1503071b246bf4b3171c627c7fd4',1,2,2),(37,'a03ead5a46360a99c65a82d0ae20ba',1,2,2),(38,'5c6f68fae980cfcd6360611ca20e1d',1,2,2),(39,'4a754f73266dda2c921215def981c4',1,2,2),(40,'a41cdcc4ec389e3ea95dd89be8769c',1,2,2),(41,'cabdf1954e7a220298800e0e83b0d6',1,2,2),(42,'b036ceefa12982dd9cf36f2bc13d54',1,2,2),(43,'02b1cefd17ffc198cb50eed7045850',1,2,2),(44,'670ab502ee1d28a3f2776803c8b302',1,2,2),(45,'5cbe4091dd6fa15dcee48138951b9b',1,2,2),(46,'f71c294239dec04d422b523d0ca09d',1,2,2),(47,'bdfa9ca73e38bfefe43399c2b2ff4f',1,2,2),(48,'8e9789f424ed7e13698fa4fe601000',1,2,2),(49,'b97f2c5250b885d1566ddb4066f97e',3,4,3),(50,'75ed447bb1f5c7fd3d3ab6485bc5b4',3,4,3),(51,'073f8b323f739f9c109b0e676ba722',1,2,3),(52,'6c86b34652f5de92af86bd9da79692',1,2,3),(53,'4f7ef712554a8840423ca7ddfa191f',1,2,3),(54,'7484bbaf3e7922cb0f6d1f895cec32',1,2,3),(55,'ac296bf29cdc7f4d51ce40f2b4e893',1,2,3),(56,'eb6b9973a066bfa0d18e5b12b95d3f',1,2,3),(57,'ab008fcc8cef6223d2d09624974837',1,2,5),(58,'c082c6a5f6fad1d3d153fcbd54822a',1,2,5),(59,'5bbd684857d70ebde1a5c20253b368',3,4,3),(60,'075edba86da24c21854368e39a7f89',1,2,2),(61,'0b20d18e46b18189492d497bb8dcaf',1,2,3),(62,'477d6cc95b2769bbb9658531a0d440',1,2,4),(63,'7c3d9fdc6a5e6281cccb10e2042ad8',1,2,2),(64,'c28b2f13240362d32e3e6a3858d1f2',1,2,5);
/*!40000 ALTER TABLE `MY_DOCUMENTRETENTIONS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MY_FOLDERS`
--

DROP TABLE IF EXISTS `MY_FOLDERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MY_FOLDERS` (
  `ID_FOLDER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_REPOSITORY` int(11) NOT NULL,
  `NO_FILE` int(11) NOT NULL,
  `NO_FOLDER` int(11) NOT NULL,
  PRIMARY KEY (`ID_FOLDER`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_FOLDERS`
--

LOCK TABLES `MY_FOLDERS` WRITE;
/*!40000 ALTER TABLE `MY_FOLDERS` DISABLE KEYS */;
INSERT INTO `MY_FOLDERS` VALUES (31,1,1,1),(32,1,2,1),(33,1,3,1),(34,1,4,1),(35,1,5,1),(36,1,6,1),(37,1,7,1),(38,1,8,1),(39,1,9,1),(40,1,10,1),(41,1,1,2),(42,1,2,2),(43,1,3,2),(44,1,4,2),(45,1,5,2),(46,1,6,2),(47,1,7,2),(48,1,8,2),(49,1,9,2),(50,1,10,2),(51,1,1,3),(52,1,2,3),(53,1,3,3),(54,1,4,3),(55,1,5,3),(56,1,6,3),(57,1,7,3),(58,1,8,3),(59,1,9,3),(60,1,10,3),(61,1,1,4),(62,1,2,4),(63,1,3,4),(64,1,4,4),(65,1,5,4),(66,1,6,4),(67,1,7,4),(68,1,8,4),(69,1,9,4),(70,1,10,4),(71,1,1,5),(72,1,2,5),(73,1,3,5),(74,1,4,5),(75,1,5,5),(76,1,6,5),(77,1,7,5),(78,1,8,5),(79,1,9,5),(80,1,10,5),(81,1,1,6),(82,1,2,6),(83,1,3,6),(84,1,4,6),(85,1,5,6),(86,1,6,6),(87,1,7,6),(88,1,8,6),(89,1,9,6),(90,1,10,6),(91,1,1,7),(92,1,2,7),(93,1,3,7),(94,1,4,7),(95,1,5,7),(96,1,6,7),(97,1,7,7),(98,1,8,7),(99,1,9,7),(100,1,10,7),(101,1,1,8),(102,1,2,8),(103,1,3,8),(104,1,4,8),(105,1,5,8),(106,1,6,8),(107,1,7,8),(108,1,8,8),(109,1,9,8),(110,1,10,8),(111,1,1,9),(112,1,2,9),(113,1,3,9),(114,1,4,9),(115,1,5,9),(116,1,6,9),(117,1,7,9),(118,1,8,9),(119,1,9,9),(120,1,10,9),(121,1,1,10),(122,1,2,10),(123,1,3,10),(124,1,4,10),(125,1,5,10),(126,1,6,10),(127,1,7,10),(128,1,8,10),(129,1,9,10),(130,1,10,10),(131,1,1,11),(132,1,2,11),(133,1,3,11),(134,1,4,11),(135,1,5,11),(136,1,6,11),(137,1,7,11),(138,1,8,11),(139,1,9,11),(140,1,10,11),(141,1,1,12),(142,1,2,12),(143,1,3,12),(144,1,4,12),(145,1,5,12),(146,1,6,12),(147,1,7,12),(148,1,8,12),(149,1,9,12),(150,1,10,12),(151,1,1,13),(152,1,2,13),(153,1,3,13),(154,1,4,13),(155,1,5,13),(156,1,6,13),(157,1,7,13),(158,1,8,13),(159,1,9,13),(160,1,10,13),(161,1,1,14),(162,1,2,14),(163,1,3,14),(164,1,4,14),(165,1,5,14),(166,1,6,14),(167,1,7,14),(168,1,8,14),(169,1,9,14),(170,1,10,14),(171,1,1,15),(172,1,2,15),(173,1,3,15),(174,1,4,15),(175,1,5,15),(176,1,6,15),(177,1,7,15),(178,1,8,15),(179,1,9,15),(180,1,10,15),(181,1,1,16),(182,1,2,16),(183,1,3,16),(184,1,4,16),(185,1,5,16),(186,1,6,16);
/*!40000 ALTER TABLE `MY_FOLDERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MY_REPOSITORY`
--

DROP TABLE IF EXISTS `MY_REPOSITORY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MY_REPOSITORY` (
  `ID_REPOSITORY` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_REPOSITORY` varchar(250) NOT NULL,
  `PATH_REPOSITORY` varchar(250) NOT NULL,
  `USER_REPOSITORY` varchar(250) NOT NULL,
  `PASS_REPOSITORY` varchar(250) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `ID_STATUS` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `ORDEN` int(11) NOT NULL,
  PRIMARY KEY (`ID_REPOSITORY`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_REPOSITORY`
--

LOCK TABLES `MY_REPOSITORY` WRITE;
/*!40000 ALTER TABLE `MY_REPOSITORY` DISABLE KEYS */;
INSERT INTO `MY_REPOSITORY` VALUES (1,'ObeliskData','/obeliskdata','root','loquesea','Repository of images',1,'2015-05-31',1);
/*!40000 ALTER TABLE `MY_REPOSITORY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_documents`
--

DROP TABLE IF EXISTS `my_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_documents` (
  `id_document` int(11) NOT NULL AUTO_INCREMENT,
  `namedocument` varchar(50) NOT NULL,
  `id_hastdocument` varchar(50) NOT NULL,
  `id_trdtvd` int(11) NOT NULL,
  `id_typedoc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `index` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_document`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_documents`
--

LOCK TABLES `my_documents` WRITE;
/*!40000 ALTER TABLE `my_documents` DISABLE KEYS */;
INSERT INTO `my_documents` VALUES (1,'documentoPrueba','133a21d3f7a82f08c4c6114f7b6f13',1,2,1,'2015-05-31 13:37:32',1),(2,'documentoPrueba','77448df8b0aebb471ddeafccef287e',1,2,1,'2015-05-31 13:37:32',1),(3,'documentoPrueba','a5f86d978cc45d1f64ad2d50c176a3',1,2,1,'2015-05-31 13:41:04',1),(4,'documentoPrueba','b2902b530f064a47a943918387e8c7',1,2,1,'2015-05-31 13:43:37',1),(5,'documentoPrueba','15b5548fa0f340b5dbf100c04fce7c',1,2,1,'2015-05-31 13:45:28',1),(6,'documentoPrueba','39c0ca479603c90121ffa34571234e',1,2,1,'2015-05-31 14:35:06',1),(7,'documentoPrueba','fd0d590e08260bee97ae5ffc49ac8c',1,2,1,'2015-05-31 14:37:43',1),(8,'documentoPrueba','3c4b8d312794bff0a25da94037e46a',1,2,1,'2015-05-31 14:51:21',1),(9,'documentoPrueba','9d3b70fc9d32dcdb3991ae006cdc4a',1,2,1,'2015-05-31 14:56:02',1),(10,'documentoPrueba','499d64a1640c1a5380a2a15f61d345',1,2,1,'2015-05-31 14:57:54',1),(11,'documentoPrueba','7e3b57631a539793c050ff90ed799a',1,2,1,'2015-05-31 14:59:29',1),(12,'documentoPrueba','956aaaf8a19435604e6c5d243ba27c',1,2,1,'2015-05-31 15:07:39',1),(13,'documentoPrueba','9217064d2f0461f91f54bd155eec72',1,2,1,'2015-05-31 15:07:50',1),(14,'documentoPrueba','e66063d2f275c6a3d8f233fb3d66d2',1,2,1,'2015-05-31 15:07:50',1),(15,'documentoPrueba','2605721421d7357d7f734e8d048b91',1,2,1,'2015-05-31 15:17:45',1),(16,'documentoPrueba','31e59cb62ad1e7d72bd10e9e216672',1,2,1,'2015-05-31 15:18:09',1),(17,'documentoPrueba','5d85427a0c8fb80ea3b609b8f187dd',1,2,1,'2015-05-31 15:18:45',1),(18,'documentoPrueba','c32133bec138f438c47989ea0090f7',1,2,1,'2015-05-31 15:18:45',1),(19,'documentoPrueba','3477db7929c7e64074c1181551ee92',1,2,1,'2015-05-31 15:19:00',1),(20,'documentoPrueba','ed2a744beba6cbe80ed6fec6d1fb24',1,2,1,'2015-05-31 15:54:48',1),(21,'documentoPrueba','f12d572759455c1159b94b9348062f',1,2,1,'2015-05-31 15:55:51',1),(22,'documentoPrueba','93d6bd702cb826204931607ea8e4ad',1,2,1,'2015-05-31 15:56:32',1),(23,'documentoPrueba','4249e39a0f736b4a1fb0b934bf709d',1,2,1,'2015-05-31 15:58:41',1),(24,'documentoPrueba','f0152b03f762c7a12bd60f5defb394',1,2,1,'2015-05-31 15:59:10',1),(25,'documentoPrueba','579ab71823015700fd8b9d1dea8b33',1,2,1,'2015-05-31 16:00:33',1),(26,'documentoPrueba','87625cd18e6da2065000c5689e39ac',1,2,1,'2015-05-31 16:00:34',1),(27,'documentoPrueba','838169521aa46ec8b0e9ec364a622d',1,2,1,'2015-05-31 16:11:21',1),(28,'documentoPrueba','675fa0d21a350bea5c40309d4b22f1',1,2,1,'2015-05-31 16:13:19',1),(29,'documentoPrueba','fa40a4f9da7da4b17a75982ce1fcae',1,2,1,'2015-05-31 16:20:27',1),(30,'documentoPrueba','e9299c370d70972609c4c60fc82fbe',1,2,1,'2015-05-31 17:31:36',1),(31,'documentoPrueba','38ebe8ea82f78993a322b80e6eb49f',1,2,1,'2015-05-31 17:31:36',1),(32,'documentoPrueba','8b075b22c8f5773be5882ba49d6a8b',1,2,1,'2015-05-31 17:33:01',1),(33,'documentoPrueba','148518781eea9914a020596f47694c',1,2,1,'2015-05-31 17:35:09',1),(34,'documentoPrueba','9bc2e38b79b86b85323126a06e2a1e',1,2,1,'2015-05-31 17:35:09',1),(35,'documentoPrueba','b3bee5d8994ae79fba4c731d9ae722',1,2,1,'2015-05-31 17:36:10',1),(36,'documentoPrueba','7f1503071b246bf4b3171c627c7fd4',1,2,1,'2015-05-31 17:40:43',1),(37,'documentoPrueba','a03ead5a46360a99c65a82d0ae20ba',1,2,1,'2015-05-31 17:41:25',1),(38,'documentoPrueba','5c6f68fae980cfcd6360611ca20e1d',1,2,1,'2015-05-31 17:42:30',1),(39,'documentoPrueba','4a754f73266dda2c921215def981c4',1,2,1,'2015-05-31 17:42:40',1),(40,'documentoPrueba','a41cdcc4ec389e3ea95dd89be8769c',1,2,1,'2015-05-31 17:42:40',1),(41,'documentoPrueba','cabdf1954e7a220298800e0e83b0d6',1,2,1,'2015-05-31 17:52:51',1),(42,'documentoPrueba','b036ceefa12982dd9cf36f2bc13d54',1,2,1,'2015-05-31 17:52:59',1),(43,'documentoPrueba','02b1cefd17ffc198cb50eed7045850',1,2,1,'2015-05-31 17:53:07',1),(44,'documentoPrueba','670ab502ee1d28a3f2776803c8b302',1,2,1,'2015-05-31 17:53:18',1),(45,'documentoPrueba','5cbe4091dd6fa15dcee48138951b9b',1,2,1,'2015-05-31 17:53:18',1),(46,'documentoPrueba','f71c294239dec04d422b523d0ca09d',1,2,1,'2015-05-31 18:12:28',1),(47,'documentoPrueba','bdfa9ca73e38bfefe43399c2b2ff4f',1,2,1,'2015-05-31 18:12:28',1),(48,'documentoPrueba','8e9789f424ed7e13698fa4fe601000',1,2,1,'2015-05-31 18:12:48',1),(49,'documentoPrueba','b97f2c5250b885d1566ddb4066f97e',1,3,1,'2015-06-06 15:46:29',1),(50,'documentoPrueba','75ed447bb1f5c7fd3d3ab6485bc5b4',1,3,1,'2015-06-06 15:46:30',1),(51,'documentoPrueba','073f8b323f739f9c109b0e676ba722',1,3,1,'2015-06-10 20:55:24',1),(52,'documentoPrueba','6c86b34652f5de92af86bd9da79692',1,3,1,'2015-06-15 09:47:38',1),(53,'documentoPrueba','4f7ef712554a8840423ca7ddfa191f',1,3,1,'2015-06-15 09:47:39',1),(54,'documentoPrueba','7484bbaf3e7922cb0f6d1f895cec32',1,3,1,'2015-06-19 12:34:30',1),(55,'documentoPrueba','ac296bf29cdc7f4d51ce40f2b4e893',1,3,1,'2015-06-19 12:35:52',1),(56,'documentoPrueba','eb6b9973a066bfa0d18e5b12b95d3f',1,3,1,'2015-06-19 12:37:14',1),(57,'documentoPrueba','ab008fcc8cef6223d2d09624974837',1,5,1,'2015-06-19 15:40:49',1),(58,'documentoPrueba','c082c6a5f6fad1d3d153fcbd54822a',1,5,1,'2015-06-19 17:15:47',1),(59,'documentoPrueba','5bbd684857d70ebde1a5c20253b368',1,3,1,'2015-06-20 13:33:48',1),(60,'documentoPrueba','075edba86da24c21854368e39a7f89',1,2,1,'2015-06-20 13:40:22',1),(61,'documentoPrueba','0b20d18e46b18189492d497bb8dcaf',1,3,1,'2015-06-20 13:49:28',1),(62,'documentoPrueba','477d6cc95b2769bbb9658531a0d440',1,4,1,'2015-06-20 14:51:51',1),(63,'documentoPrueba','7c3d9fdc6a5e6281cccb10e2042ad8',1,2,1,'2015-06-20 19:53:37',1),(64,'documentoPrueba','c28b2f13240362d32e3e6a3858d1f2',1,5,1,'2015-06-20 22:35:18',1);
/*!40000 ALTER TABLE `my_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_documenttypes`
--

DROP TABLE IF EXISTS `my_documenttypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_documenttypes` (
  `id_typedoc` int(11) NOT NULL AUTO_INCREMENT,
  `documenttype` varchar(100) NOT NULL,
  `description` text,
  `id_status` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_typedoc`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_documenttypes`
--

LOCK TABLES `my_documenttypes` WRITE;
/*!40000 ALTER TABLE `my_documenttypes` DISABLE KEYS */;
INSERT INTO `my_documenttypes` VALUES (1,'Matriculas','Matriculas',1,'2015-05-31 10:59:44'),(2,'Novedad','Novedad',1,'2015-05-31 11:00:04'),(3,'Declaracion','Declaracion',1,'2015-05-31 11:00:30'),(4,'Auto','Auto',1,'2015-05-31 11:00:46'),(5,'Prueba','Prueba',1,'2015-05-31 11:01:10'),(6,'Informe','Informe',1,'2015-05-31 11:02:19');
/*!40000 ALTER TABLE `my_documenttypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_fileindex`
--

DROP TABLE IF EXISTS `my_fileindex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_fileindex` (
  `id_fileindex` int(11) NOT NULL AUTO_INCREMENT,
  `id_hastdocumento` varchar(50) NOT NULL,
  `id_typedoc` int(11) NOT NULL,
  `id_index` int(11) NOT NULL,
  `id_trdtvd` int(11) NOT NULL,
  `value` text,
  PRIMARY KEY (`id_fileindex`)
) ENGINE=MyISAM AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_fileindex`
--

LOCK TABLES `my_fileindex` WRITE;
/*!40000 ALTER TABLE `my_fileindex` DISABLE KEYS */;
INSERT INTO `my_fileindex` VALUES (1,'133a21d3f7a82f08c4c6114f7b6f13',2,1,1,'2015-05-20'),(2,'133a21d3f7a82f08c4c6114f7b6f13',2,2,1,'2015'),(3,'77448df8b0aebb471ddeafccef287e',2,1,1,'2015-05-20'),(4,'77448df8b0aebb471ddeafccef287e',2,2,1,'2015'),(5,'a5f86d978cc45d1f64ad2d50c176a3',2,1,1,'2015-05-20'),(6,'a5f86d978cc45d1f64ad2d50c176a3',2,2,1,'2015'),(7,'b2902b530f064a47a943918387e8c7',2,1,1,'2015-05-20'),(8,'b2902b530f064a47a943918387e8c7',2,2,1,'2015'),(9,'15b5548fa0f340b5dbf100c04fce7c',2,1,1,'2015-05-20'),(10,'15b5548fa0f340b5dbf100c04fce7c',2,2,1,'2015'),(11,'39c0ca479603c90121ffa34571234e',2,1,1,'2015-05-20'),(12,'39c0ca479603c90121ffa34571234e',2,2,1,'2015'),(13,'fd0d590e08260bee97ae5ffc49ac8c',2,1,1,'2015-05-20'),(14,'fd0d590e08260bee97ae5ffc49ac8c',2,2,1,'2015'),(15,'3c4b8d312794bff0a25da94037e46a',2,1,1,'2015-05-20'),(16,'3c4b8d312794bff0a25da94037e46a',2,2,1,'2015'),(17,'9d3b70fc9d32dcdb3991ae006cdc4a',2,1,1,'2015-05-20'),(18,'9d3b70fc9d32dcdb3991ae006cdc4a',2,2,1,'2015'),(19,'499d64a1640c1a5380a2a15f61d345',2,1,1,'2015-05-20'),(20,'499d64a1640c1a5380a2a15f61d345',2,2,1,'2015'),(21,'7e3b57631a539793c050ff90ed799a',2,1,1,'2015-05-20'),(22,'7e3b57631a539793c050ff90ed799a',2,2,1,'2015'),(23,'956aaaf8a19435604e6c5d243ba27c',2,1,1,'2015-05-20'),(24,'956aaaf8a19435604e6c5d243ba27c',2,2,1,'2015'),(25,'9217064d2f0461f91f54bd155eec72',2,1,1,'2015-05-20'),(26,'9217064d2f0461f91f54bd155eec72',2,2,1,'2015'),(27,'e66063d2f275c6a3d8f233fb3d66d2',2,1,1,'2015-05-20'),(28,'e66063d2f275c6a3d8f233fb3d66d2',2,2,1,'2015'),(29,'2605721421d7357d7f734e8d048b91',2,1,1,'2015-05-20'),(30,'2605721421d7357d7f734e8d048b91',2,2,1,'2015'),(31,'31e59cb62ad1e7d72bd10e9e216672',2,1,1,'2015-05-20'),(32,'31e59cb62ad1e7d72bd10e9e216672',2,2,1,'2015'),(33,'5d85427a0c8fb80ea3b609b8f187dd',2,1,1,'2015-05-20'),(34,'5d85427a0c8fb80ea3b609b8f187dd',2,2,1,'2015'),(35,'c32133bec138f438c47989ea0090f7',2,1,1,'2015-05-20'),(36,'c32133bec138f438c47989ea0090f7',2,2,1,'2015'),(37,'3477db7929c7e64074c1181551ee92',2,1,1,'2015-05-20'),(38,'3477db7929c7e64074c1181551ee92',2,2,1,'2015'),(39,'ed2a744beba6cbe80ed6fec6d1fb24',2,1,1,'2015-05-20'),(40,'ed2a744beba6cbe80ed6fec6d1fb24',2,2,1,'2015'),(41,'f12d572759455c1159b94b9348062f',2,1,1,'2015-05-20'),(42,'f12d572759455c1159b94b9348062f',2,2,1,'2015'),(43,'93d6bd702cb826204931607ea8e4ad',2,1,1,'2015-05-20'),(44,'93d6bd702cb826204931607ea8e4ad',2,2,1,'2015'),(45,'4249e39a0f736b4a1fb0b934bf709d',2,1,1,'2015-05-20'),(46,'4249e39a0f736b4a1fb0b934bf709d',2,2,1,'2015'),(47,'f0152b03f762c7a12bd60f5defb394',2,1,1,'2015-05-20'),(48,'f0152b03f762c7a12bd60f5defb394',2,2,1,'2015'),(49,'579ab71823015700fd8b9d1dea8b33',2,1,1,'2015-05-20'),(50,'579ab71823015700fd8b9d1dea8b33',2,2,1,'2015'),(51,'87625cd18e6da2065000c5689e39ac',2,1,1,'2015-05-20'),(52,'87625cd18e6da2065000c5689e39ac',2,2,1,'2015'),(53,'838169521aa46ec8b0e9ec364a622d',2,1,1,'2015-05-20'),(54,'838169521aa46ec8b0e9ec364a622d',2,2,1,'2015'),(55,'675fa0d21a350bea5c40309d4b22f1',2,1,1,'2015-05-20'),(56,'675fa0d21a350bea5c40309d4b22f1',2,2,1,'2015'),(57,'fa40a4f9da7da4b17a75982ce1fcae',2,1,1,'2015-05-20'),(58,'fa40a4f9da7da4b17a75982ce1fcae',2,2,1,'2015'),(59,'e9299c370d70972609c4c60fc82fbe',2,1,1,'2015-05-20'),(60,'e9299c370d70972609c4c60fc82fbe',2,2,1,'2015'),(61,'38ebe8ea82f78993a322b80e6eb49f',2,1,1,'2015-05-20'),(62,'38ebe8ea82f78993a322b80e6eb49f',2,2,1,'2015'),(63,'8b075b22c8f5773be5882ba49d6a8b',2,1,1,'2015-05-20'),(64,'8b075b22c8f5773be5882ba49d6a8b',2,2,1,'2015'),(65,'148518781eea9914a020596f47694c',2,1,1,'2015-05-20'),(66,'148518781eea9914a020596f47694c',2,2,1,'2015'),(67,'9bc2e38b79b86b85323126a06e2a1e',2,1,1,'2015-05-20'),(68,'9bc2e38b79b86b85323126a06e2a1e',2,2,1,'2015'),(69,'b3bee5d8994ae79fba4c731d9ae722',2,1,1,'2015-05-20'),(70,'b3bee5d8994ae79fba4c731d9ae722',2,2,1,'2015'),(71,'7f1503071b246bf4b3171c627c7fd4',2,1,1,'2015-05-20'),(72,'7f1503071b246bf4b3171c627c7fd4',2,2,1,'2015'),(73,'a03ead5a46360a99c65a82d0ae20ba',2,1,1,'2015-05-20'),(74,'a03ead5a46360a99c65a82d0ae20ba',2,2,1,'2015'),(75,'5c6f68fae980cfcd6360611ca20e1d',2,1,1,'2015-05-20'),(76,'5c6f68fae980cfcd6360611ca20e1d',2,2,1,'2015'),(77,'4a754f73266dda2c921215def981c4',2,1,1,'2015-05-20'),(78,'4a754f73266dda2c921215def981c4',2,2,1,'2015'),(79,'a41cdcc4ec389e3ea95dd89be8769c',2,1,1,'2015-05-20'),(80,'a41cdcc4ec389e3ea95dd89be8769c',2,2,1,'2015'),(81,'cabdf1954e7a220298800e0e83b0d6',2,1,1,'2015-05-20'),(82,'cabdf1954e7a220298800e0e83b0d6',2,2,1,'2015'),(83,'b036ceefa12982dd9cf36f2bc13d54',2,1,1,'2015-05-20'),(84,'b036ceefa12982dd9cf36f2bc13d54',2,2,1,'2015'),(85,'02b1cefd17ffc198cb50eed7045850',2,1,1,'2015-05-20'),(86,'02b1cefd17ffc198cb50eed7045850',2,2,1,'2015'),(87,'670ab502ee1d28a3f2776803c8b302',2,1,1,'2015-05-20'),(88,'670ab502ee1d28a3f2776803c8b302',2,2,1,'2015'),(89,'5cbe4091dd6fa15dcee48138951b9b',2,1,1,'2015-05-20'),(90,'5cbe4091dd6fa15dcee48138951b9b',2,2,1,'2015'),(91,'f71c294239dec04d422b523d0ca09d',2,1,1,'2015-05-20'),(92,'f71c294239dec04d422b523d0ca09d',2,2,1,'2015'),(93,'bdfa9ca73e38bfefe43399c2b2ff4f',2,1,1,'2015-05-20'),(94,'bdfa9ca73e38bfefe43399c2b2ff4f',2,2,1,'2015'),(95,'8e9789f424ed7e13698fa4fe601000',2,1,1,'2015-05-20'),(96,'8e9789f424ed7e13698fa4fe601000',2,2,1,'2015'),(97,'b97f2c5250b885d1566ddb4066f97e',3,1,1,'2015-06-09'),(98,'b97f2c5250b885d1566ddb4066f97e',3,2,1,'sgsdgdf'),(99,'75ed447bb1f5c7fd3d3ab6485bc5b4',3,1,1,'2015-06-09'),(100,'75ed447bb1f5c7fd3d3ab6485bc5b4',3,2,1,'sgsdgdf'),(101,'073f8b323f739f9c109b0e676ba722',3,1,1,'2015-06-25'),(102,'073f8b323f739f9c109b0e676ba722',3,2,1,'yeison'),(103,'6c86b34652f5de92af86bd9da79692',3,1,1,'2015-06-10'),(104,'6c86b34652f5de92af86bd9da79692',3,2,1,'2015'),(105,'6c86b34652f5de92af86bd9da79692',3,3,1,'yeison '),(106,'6c86b34652f5de92af86bd9da79692',3,4,1,'hernandez'),(107,'4f7ef712554a8840423ca7ddfa191f',3,1,1,'2015-06-10'),(108,'4f7ef712554a8840423ca7ddfa191f',3,2,1,'2015'),(109,'4f7ef712554a8840423ca7ddfa191f',3,3,1,'yeison '),(110,'4f7ef712554a8840423ca7ddfa191f',3,4,1,'hernandez'),(111,'7484bbaf3e7922cb0f6d1f895cec32',3,1,1,'2015-06-10'),(112,'7484bbaf3e7922cb0f6d1f895cec32',3,2,1,'2015'),(113,'7484bbaf3e7922cb0f6d1f895cec32',3,3,1,'yeison '),(114,'7484bbaf3e7922cb0f6d1f895cec32',3,4,1,'hernandez'),(115,'ac296bf29cdc7f4d51ce40f2b4e893',3,1,1,'2015-06-10'),(116,'ac296bf29cdc7f4d51ce40f2b4e893',3,2,1,'2015'),(117,'ac296bf29cdc7f4d51ce40f2b4e893',3,3,1,'yeison '),(118,'ac296bf29cdc7f4d51ce40f2b4e893',3,4,1,'hernandez'),(119,'eb6b9973a066bfa0d18e5b12b95d3f',3,1,1,'2015-06-10'),(120,'eb6b9973a066bfa0d18e5b12b95d3f',3,2,1,'2015'),(121,'eb6b9973a066bfa0d18e5b12b95d3f',3,3,1,'yeison '),(122,'eb6b9973a066bfa0d18e5b12b95d3f',3,4,1,'hernandez'),(123,'ab008fcc8cef6223d2d09624974837',5,4,1,'CORNELIO JESUS'),(124,'ab008fcc8cef6223d2d09624974837',5,5,1,'MI HOJA DE VIDA'),(125,'c082c6a5f6fad1d3d153fcbd54822a',5,4,1,'DIAS'),(126,'c082c6a5f6fad1d3d153fcbd54822a',5,5,1,'HECTOR'),(127,'5bbd684857d70ebde1a5c20253b368',3,1,1,'2015-06-13'),(128,'5bbd684857d70ebde1a5c20253b368',3,2,1,'2015'),(129,'5bbd684857d70ebde1a5c20253b368',3,3,1,'TATUAJES'),(130,'5bbd684857d70ebde1a5c20253b368',3,4,1,'TATOO'),(131,'075edba86da24c21854368e39a7f89',2,4,1,'obelisk'),(132,'075edba86da24c21854368e39a7f89',2,5,1,'soft'),(133,'075edba86da24c21854368e39a7f89',2,6,1,'123'),(134,'0b20d18e46b18189492d497bb8dcaf',3,1,1,'2015-06-03'),(135,'0b20d18e46b18189492d497bb8dcaf',3,2,1,'2015'),(136,'0b20d18e46b18189492d497bb8dcaf',3,3,1,'PDF'),(137,'0b20d18e46b18189492d497bb8dcaf',3,4,1,''),(138,'477d6cc95b2769bbb9658531a0d440',4,3,1,'ONCLICK'),(139,'477d6cc95b2769bbb9658531a0d440',4,4,1,'ONCLICK'),(140,'477d6cc95b2769bbb9658531a0d440',4,5,1,'OFERTA'),(141,'7c3d9fdc6a5e6281cccb10e2042ad8',2,4,1,'Arias'),(142,'7c3d9fdc6a5e6281cccb10e2042ad8',2,5,1,'tales'),(143,'7c3d9fdc6a5e6281cccb10e2042ad8',2,6,1,'311'),(144,'c28b2f13240362d32e3e6a3858d1f2',5,4,1,'ORGANIGRAMA'),(145,'c28b2f13240362d32e3e6a3858d1f2',5,5,1,'ORGANIGRAMA');
/*!40000 ALTER TABLE `my_fileindex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_files`
--

DROP TABLE IF EXISTS `my_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_files` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `no_folder` int(11) NOT NULL,
  `id_document` varchar(50) NOT NULL,
  `no_file` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `ext` varchar(6) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_files`
--

LOCK TABLES `my_files` WRITE;
/*!40000 ALTER TABLE `my_files` DISABLE KEYS */;
INSERT INTO `my_files` VALUES (6,102,'38ebe8ea82f78993a322b80e6eb49f',2,'2015-05-31 17:31:36',1,''),(5,100,'e9299c370d70972609c4c60fc82fbe',10,'2015-05-31 17:31:36',2,''),(4,99,'e9299c370d70972609c4c60fc82fbe',9,'2015-05-31 17:31:36',1,''),(7,103,'38ebe8ea82f78993a322b80e6eb49f',3,'2015-05-31 17:31:36',2,''),(8,104,'38ebe8ea82f78993a322b80e6eb49f',4,'2015-05-31 17:31:36',3,''),(9,105,'8b075b22c8f5773be5882ba49d6a8b',5,'2015-05-31 17:33:01',1,''),(10,106,'8b075b22c8f5773be5882ba49d6a8b',6,'2015-05-31 17:33:01',2,''),(11,107,'8b075b22c8f5773be5882ba49d6a8b',7,'2015-05-31 17:33:01',3,''),(12,108,'148518781eea9914a020596f47694c',8,'2015-05-31 17:35:09',1,''),(13,109,'148518781eea9914a020596f47694c',9,'2015-05-31 17:35:09',2,''),(14,110,'148518781eea9914a020596f47694c',10,'2015-05-31 17:35:09',3,''),(15,112,'9bc2e38b79b86b85323126a06e2a1e',2,'2015-05-31 17:35:10',2,''),(16,113,'9bc2e38b79b86b85323126a06e2a1e',3,'2015-05-31 17:35:10',3,''),(17,114,'b3bee5d8994ae79fba4c731d9ae722',4,'2015-05-31 17:36:10',1,''),(18,115,'b3bee5d8994ae79fba4c731d9ae722',5,'2015-05-31 17:36:10',2,''),(19,116,'b3bee5d8994ae79fba4c731d9ae722',6,'2015-05-31 17:36:10',3,''),(20,117,'7f1503071b246bf4b3171c627c7fd4',7,'2015-05-31 17:40:43',1,''),(21,118,'7f1503071b246bf4b3171c627c7fd4',8,'2015-05-31 17:40:43',2,''),(22,119,'7f1503071b246bf4b3171c627c7fd4',9,'2015-05-31 17:40:43',3,''),(23,120,'a03ead5a46360a99c65a82d0ae20ba',10,'2015-05-31 17:41:25',1,''),(24,121,'a03ead5a46360a99c65a82d0ae20ba',1,'2015-05-31 17:41:25',2,''),(25,122,'a03ead5a46360a99c65a82d0ae20ba',2,'2015-05-31 17:41:25',3,''),(26,123,'5c6f68fae980cfcd6360611ca20e1d',3,'2015-05-31 17:42:31',1,''),(27,124,'5c6f68fae980cfcd6360611ca20e1d',4,'2015-05-31 17:42:31',2,''),(28,125,'5c6f68fae980cfcd6360611ca20e1d',5,'2015-05-31 17:42:31',3,''),(29,126,'4a754f73266dda2c921215def981c4',6,'2015-05-31 17:42:40',1,''),(30,127,'4a754f73266dda2c921215def981c4',7,'2015-05-31 17:42:40',2,''),(31,128,'4a754f73266dda2c921215def981c4',8,'2015-05-31 17:42:40',3,''),(32,129,'a41cdcc4ec389e3ea95dd89be8769c',9,'2015-05-31 17:42:40',1,''),(33,130,'a41cdcc4ec389e3ea95dd89be8769c',10,'2015-05-31 17:42:41',2,''),(34,131,'a41cdcc4ec389e3ea95dd89be8769c',1,'2015-05-31 17:42:41',3,''),(35,132,'cabdf1954e7a220298800e0e83b0d6',2,'2015-05-31 17:52:51',1,''),(36,133,'cabdf1954e7a220298800e0e83b0d6',3,'2015-05-31 17:52:52',2,''),(37,134,'cabdf1954e7a220298800e0e83b0d6',4,'2015-05-31 17:52:52',3,''),(38,135,'b036ceefa12982dd9cf36f2bc13d54',5,'2015-05-31 17:53:00',1,''),(39,136,'b036ceefa12982dd9cf36f2bc13d54',6,'2015-05-31 17:53:00',2,''),(40,137,'b036ceefa12982dd9cf36f2bc13d54',7,'2015-05-31 17:53:00',3,''),(41,138,'02b1cefd17ffc198cb50eed7045850',8,'2015-05-31 17:53:08',1,''),(42,139,'02b1cefd17ffc198cb50eed7045850',9,'2015-05-31 17:53:08',2,''),(43,140,'02b1cefd17ffc198cb50eed7045850',10,'2015-05-31 17:53:08',3,''),(44,141,'670ab502ee1d28a3f2776803c8b302',1,'2015-05-31 17:53:18',1,''),(45,142,'670ab502ee1d28a3f2776803c8b302',2,'2015-05-31 17:53:18',2,''),(46,143,'670ab502ee1d28a3f2776803c8b302',3,'2015-05-31 17:53:18',3,''),(47,144,'5cbe4091dd6fa15dcee48138951b9b',4,'2015-05-31 17:53:19',1,''),(48,145,'5cbe4091dd6fa15dcee48138951b9b',5,'2015-05-31 17:53:19',2,''),(49,146,'5cbe4091dd6fa15dcee48138951b9b',6,'2015-05-31 17:53:19',3,''),(50,147,'f71c294239dec04d422b523d0ca09d',7,'2015-05-31 18:12:28',1,''),(51,148,'f71c294239dec04d422b523d0ca09d',8,'2015-05-31 18:12:28',2,''),(52,149,'f71c294239dec04d422b523d0ca09d',9,'2015-05-31 18:12:28',3,''),(53,150,'bdfa9ca73e38bfefe43399c2b2ff4f',10,'2015-05-31 18:12:28',1,''),(54,151,'bdfa9ca73e38bfefe43399c2b2ff4f',1,'2015-05-31 18:12:29',2,''),(55,152,'bdfa9ca73e38bfefe43399c2b2ff4f',2,'2015-05-31 18:12:29',3,''),(56,153,'8e9789f424ed7e13698fa4fe601000',3,'2015-05-31 18:12:48',1,''),(57,154,'8e9789f424ed7e13698fa4fe601000',4,'2015-05-31 18:12:48',2,''),(58,155,'8e9789f424ed7e13698fa4fe601000',5,'2015-05-31 18:12:49',3,''),(59,156,'b97f2c5250b885d1566ddb4066f97e',6,'2015-06-06 15:46:29',1,''),(60,157,'b97f2c5250b885d1566ddb4066f97e',7,'2015-06-06 15:46:30',2,''),(61,158,'b97f2c5250b885d1566ddb4066f97e',8,'2015-06-06 15:46:30',3,''),(62,159,'b97f2c5250b885d1566ddb4066f97e',9,'2015-06-06 15:46:30',4,''),(63,160,'75ed447bb1f5c7fd3d3ab6485bc5b4',10,'2015-06-06 15:46:30',1,''),(64,161,'75ed447bb1f5c7fd3d3ab6485bc5b4',1,'2015-06-06 15:46:30',2,''),(65,162,'75ed447bb1f5c7fd3d3ab6485bc5b4',2,'2015-06-06 15:46:30',3,''),(66,163,'75ed447bb1f5c7fd3d3ab6485bc5b4',3,'2015-06-06 15:46:30',4,''),(67,164,'073f8b323f739f9c109b0e676ba722',4,'2015-06-10 20:55:24',1,''),(68,165,'6c86b34652f5de92af86bd9da79692',5,'2015-06-15 09:47:39',1,''),(69,166,'4f7ef712554a8840423ca7ddfa191f',6,'2015-06-15 09:47:39',1,''),(70,168,'ac296bf29cdc7f4d51ce40f2b4e893',8,'2015-06-19 12:35:52',1,'tif'),(71,169,'eb6b9973a066bfa0d18e5b12b95d3f',9,'2015-06-19 12:37:14',1,'tif'),(72,170,'ab008fcc8cef6223d2d09624974837',10,'2015-06-19 15:40:49',1,'tif'),(73,171,'ab008fcc8cef6223d2d09624974837',1,'2015-06-19 15:40:49',2,'tif'),(74,172,'ab008fcc8cef6223d2d09624974837',2,'2015-06-19 15:40:49',3,'tif'),(75,173,'ab008fcc8cef6223d2d09624974837',3,'2015-06-19 15:40:49',4,'tif'),(76,174,'ab008fcc8cef6223d2d09624974837',4,'2015-06-19 15:40:50',5,'tif'),(77,175,'ab008fcc8cef6223d2d09624974837',5,'2015-06-19 15:40:50',6,'tif'),(78,176,'c082c6a5f6fad1d3d153fcbd54822a',6,'2015-06-19 17:15:47',1,'tif'),(79,177,'c082c6a5f6fad1d3d153fcbd54822a',7,'2015-06-19 17:15:47',2,'tif'),(80,178,'c082c6a5f6fad1d3d153fcbd54822a',8,'2015-06-19 17:15:47',3,'tif'),(81,179,'5bbd684857d70ebde1a5c20253b368',9,'2015-06-20 13:33:48',1,'jpeg'),(82,180,'5bbd684857d70ebde1a5c20253b368',10,'2015-06-20 13:33:48',2,'jpeg'),(83,181,'075edba86da24c21854368e39a7f89',1,'2015-06-20 13:40:23',1,'png'),(84,182,'075edba86da24c21854368e39a7f89',2,'2015-06-20 13:40:23',2,'png'),(85,183,'0b20d18e46b18189492d497bb8dcaf',3,'2015-06-20 13:49:28',1,'pdf'),(86,184,'477d6cc95b2769bbb9658531a0d440',4,'2015-06-20 14:51:51',1,'pdf'),(87,185,'7c3d9fdc6a5e6281cccb10e2042ad8',5,'2015-06-20 19:53:38',1,'pdf'),(88,186,'c28b2f13240362d32e3e6a3858d1f2',6,'2015-06-20 22:35:18',1,'pdf');
/*!40000 ALTER TABLE `my_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_groups`
--

DROP TABLE IF EXISTS `my_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_groups` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(100) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_groups`
--

LOCK TABLES `my_groups` WRITE;
/*!40000 ALTER TABLE `my_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_groupuser`
--

DROP TABLE IF EXISTS `my_groupuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_groupuser` (
  `id_group` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_groupuser`
--

LOCK TABLES `my_groupuser` WRITE;
/*!40000 ALTER TABLE `my_groupuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_groupuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_groupusers`
--

DROP TABLE IF EXISTS `my_groupusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_groupusers` (
  `id_group` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_groupusers`
--

LOCK TABLES `my_groupusers` WRITE;
/*!40000 ALTER TABLE `my_groupusers` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_groupusers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_indexes`
--

DROP TABLE IF EXISTS `my_indexes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_indexes` (
  `id_index` int(11) NOT NULL AUTO_INCREMENT,
  `indexes` varchar(100) DEFAULT NULL,
  `description` text,
  `id_status` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_index`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_indexes`
--

LOCK TABLES `my_indexes` WRITE;
/*!40000 ALTER TABLE `my_indexes` DISABLE KEYS */;
INSERT INTO `my_indexes` VALUES (1,'Fecha','Fecha',1,'2015-05-31 11:05:31',4),(2,'Aodepago','Año de pago',1,'2015-05-31 11:31:44',2),(3,'Nombre','TEXT',1,'2015-06-15 09:37:21',1),(4,'Apellidos','Apellidos',1,'2015-06-15 09:37:52',1),(5,'Documento','Documento',1,'2015-06-15 09:38:14',1),(6,'NumeroCelular','Celular',1,'2015-06-15 09:38:40',2);
/*!40000 ALTER TABLE `my_indexes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_permissionrole`
--

DROP TABLE IF EXISTS `my_permissionrole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_permissionrole` (
  `id_rol` int(11) NOT NULL,
  `id_permission` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL,
  UNIQUE KEY `id_rol` (`id_rol`,`id_permission`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_permissionrole`
--

LOCK TABLES `my_permissionrole` WRITE;
/*!40000 ALTER TABLE `my_permissionrole` DISABLE KEYS */;
INSERT INTO `my_permissionrole` VALUES (1,2,1),(1,3,1),(1,1,1),(1,4,1),(1,5,1),(1,6,1),(1,7,1),(1,8,1),(1,16,1),(15,3,1),(15,4,1),(15,2,1),(15,1,1),(16,8,1),(16,4,1),(16,1,1),(16,2,1),(16,3,1),(16,5,1),(16,6,1),(16,7,1),(16,9,0),(16,0,1),(15,0,1),(15,9,1),(1,9,1),(1,17,1),(1,18,1),(1,19,1),(1,20,1),(1,21,1),(1,22,1),(1,23,1),(1,24,1),(1,25,1),(2,1,1),(1,26,1),(1,28,1),(1,27,1),(1,29,1),(1,30,1),(2,30,1),(2,29,1),(1,31,1),(1,32,1),(1,33,1);
/*!40000 ALTER TABLE `my_permissionrole` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_permissions`
--

DROP TABLE IF EXISTS `my_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_permissions` (
  `id_permission` int(11) NOT NULL AUTO_INCREMENT,
  `permission` varchar(100) NOT NULL,
  `key` varchar(50) NOT NULL,
  PRIMARY KEY (`id_permission`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_permissions`
--

LOCK TABLES `my_permissions` WRITE;
/*!40000 ALTER TABLE `my_permissions` DISABLE KEYS */;
INSERT INTO `my_permissions` VALUES (1,'Adminitracion Tasks','admin_access'),(2,'Add User','new_user'),(3,'Edit User','edit_user'),(4,'Delete User','delete_user'),(5,'Add Rol','new_rol'),(6,'Edit Rol','edit_rol'),(7,'Delete Rol','delete_rol'),(8,'Add Permission','new_permission'),(9,'Edit Permission','edit_permission'),(17,'Add Group','new_group'),(16,'Delete Permission','delete_permission'),(15,'Add Permission','new_permission'),(18,'Edit_group','edit_group'),(19,'Delete Group','delete_group'),(20,'Add Index','new_index'),(21,'Edit Index','edit_index'),(22,'Delete Index','delete_index'),(23,'Add Document','new_document'),(24,'Edit Document','edit_document'),(25,'Delete Document','delete_document'),(26,'View Table Retention','view_retention'),(27,'View Table Valoration','view_valoration'),(28,'View Repository','view_repository'),(29,'View Menu Sistem','view_menu_system'),(30,'View Menu Admin','view_menu_admin'),(31,'New Repository','new_repository'),(32,'Edit Repository','edit_repository'),(33,'Delete Repository','delete_repository');
/*!40000 ALTER TABLE `my_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_permissionuser`
--

DROP TABLE IF EXISTS `my_permissionuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_permissionuser` (
  `id_user` int(11) NOT NULL,
  `id_permission` int(11) NOT NULL,
  `value` tinyint(4) DEFAULT NULL,
  UNIQUE KEY `id_user` (`id_user`,`id_permission`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_permissionuser`
--

LOCK TABLES `my_permissionuser` WRITE;
/*!40000 ALTER TABLE `my_permissionuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_permissionuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_records`
--

DROP TABLE IF EXISTS `my_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_records` (
  `id_record` int(11) NOT NULL AUTO_INCREMENT,
  `id_hastrecord` varchar(30) NOT NULL,
  `namerecord` varchar(100) NOT NULL,
  `table` int(11) NOT NULL,
  `serie` int(11) DEFAULT NULL,
  `subserie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_record`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_records`
--

LOCK TABLES `my_records` WRITE;
/*!40000 ALTER TABLE `my_records` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_retentions`
--

DROP TABLE IF EXISTS `my_retentions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_retentions` (
  `id_retention` int(11) NOT NULL AUTO_INCREMENT,
  `retention` varchar(100) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_retention`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_retentions`
--

LOCK TABLES `my_retentions` WRITE;
/*!40000 ALTER TABLE `my_retentions` DISABLE KEYS */;
INSERT INTO `my_retentions` VALUES (1,'SECRETARIA DE HACIENDA',0),(2,'Sub Secretaria de Hacienda',1),(3,'TALENTO HUMANO',0),(4,'Hoja De Vida',3);
/*!40000 ALTER TABLE `my_retentions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_retentiontypdoc`
--

DROP TABLE IF EXISTS `my_retentiontypdoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_retentiontypdoc` (
  `id_retention` int(11) DEFAULT NULL,
  `id_typedoc` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_retentiontypdoc`
--

LOCK TABLES `my_retentiontypdoc` WRITE;
/*!40000 ALTER TABLE `my_retentiontypdoc` DISABLE KEYS */;
INSERT INTO `my_retentiontypdoc` VALUES (2,2),(2,3),(2,4),(2,5),(2,6),(4,3);
/*!40000 ALTER TABLE `my_retentiontypdoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_retentiontypedocindex`
--

DROP TABLE IF EXISTS `my_retentiontypedocindex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_retentiontypedocindex` (
  `id_typedoc` int(11) DEFAULT NULL,
  `id_index` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_retentiontypedocindex`
--

LOCK TABLES `my_retentiontypedocindex` WRITE;
/*!40000 ALTER TABLE `my_retentiontypedocindex` DISABLE KEYS */;
INSERT INTO `my_retentiontypedocindex` VALUES (2,5,1),(2,4,1),(3,2,1),(3,1,1),(2,6,1),(3,3,1),(3,4,1),(4,3,1),(4,4,1),(4,5,1),(5,4,1),(5,5,1),(6,1,1),(6,3,1),(6,4,1);
/*!40000 ALTER TABLE `my_retentiontypedocindex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_roles`
--

DROP TABLE IF EXISTS `my_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) NOT NULL,
  `description` text,
  `id_status` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_roles`
--

LOCK TABLES `my_roles` WRITE;
/*!40000 ALTER TABLE `my_roles` DISABLE KEYS */;
INSERT INTO `my_roles` VALUES (1,'Administrator','ADMINISTRATOR OF DE APLICATION',NULL,NULL),(2,'Consult','CONSULT OF DE APLICATION',NULL,NULL);
/*!40000 ALTER TABLE `my_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_status`
--

DROP TABLE IF EXISTS `my_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_status`
--

LOCK TABLES `my_status` WRITE;
/*!40000 ALTER TABLE `my_status` DISABLE KEYS */;
INSERT INTO `my_status` VALUES (1,'Enable'),(2,'Disabled');
/*!40000 ALTER TABLE `my_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_tempfiles`
--

DROP TABLE IF EXISTS `my_tempfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_tempfiles` (
  `id_tempfile` int(11) NOT NULL AUTO_INCREMENT,
  `nametempfile` varchar(150) NOT NULL,
  `path` varchar(250) NOT NULL,
  PRIMARY KEY (`id_tempfile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_tempfiles`
--

LOCK TABLES `my_tempfiles` WRITE;
/*!40000 ALTER TABLE `my_tempfiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_tempfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_tmps`
--

DROP TABLE IF EXISTS `my_tmps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_tmps` (
  `id_tmp` int(11) NOT NULL AUTO_INCREMENT,
  `uid_path` varchar(60) NOT NULL,
  `nametmp` varchar(150) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `ext` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_tmp`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_tmps`
--

LOCK TABLES `my_tmps` WRITE;
/*!40000 ALTER TABLE `my_tmps` DISABLE KEYS */;
INSERT INTO `my_tmps` VALUES (1,'2ae93068','000267080000010.tif','/var/www/html/obelisksoft/uploads/2ae93068/','tif'),(2,'2ae93068','000267080000020.tif','/var/www/html/obelisksoft/uploads/2ae93068/','tif'),(3,'2ae93068','000267080000030.tif','/var/www/html/obelisksoft/uploads/2ae93068/','tif'),(4,'9a20c598','000267080000010.tif','/var/www/html/obelisksoft/uploads/9a20c598/','tif'),(5,'9a20c598','000267080000020.tif','/var/www/html/obelisksoft/uploads/9a20c598/','tif'),(6,'9a20c598','000267080000060.tif','/var/www/html/obelisksoft/uploads/9a20c598/','tif'),(7,'9a20c598','000267080000070.tif','/var/www/html/obelisksoft/uploads/9a20c598/','tif'),(8,'be491cfe','image.jpg','/var/www/html/obelisksoft/uploads/be491cfe/','jpg'),(9,'be491cfe','image.jpg','/var/www/html/obelisksoft/uploads/be491cfe/','jpg'),(10,'84190a31','000267080000040.tif','/var/www/html/obelisksoft/uploads/84190a31/','tif'),(11,'4c8a89c5','000267080000010.tif','/var/www/html/obelisksoft/uploads/4c8a89c5/','tif'),(12,'74ec4513','000267080000010.tif','/var/www/html/obelisksoft/uploads/74ec4513/','tif'),(13,'74ec4513','000267080000060.tif','/var/www/html/obelisksoft/uploads/74ec4513/','tif'),(14,'74ec4513','000267080000040.tif','/var/www/html/obelisksoft/uploads/74ec4513/','tif'),(15,'74ec4513','000267080000020.tif','/var/www/html/obelisksoft/uploads/74ec4513/','tif'),(16,'74ec4513','000267080000050.tif','/var/www/html/obelisksoft/uploads/74ec4513/','tif'),(17,'74ec4513','000267080000030.tif','/var/www/html/obelisksoft/uploads/74ec4513/','tif'),(18,'37d54f71','000267080000010.tif','/var/www/html/obelisksoft/uploads/37d54f71/','tif'),(19,'37d54f71','000267080000060.tif','/var/www/html/obelisksoft/uploads/37d54f71/','tif'),(20,'37d54f71','000267080000040.tif','/var/www/html/obelisksoft/uploads/37d54f71/','tif'),(21,'21230097','images.jpeg','/var/www/html/obelisksoft/uploads/21230097/','jpeg'),(22,'21230097','imagen2.jpeg','/var/www/html/obelisksoft/uploads/21230097/','jpeg'),(23,'e2c612e8','icon-pmlogo-15x15.png','/var/www/html/obelisksoft/uploads/e2c612e8/','png'),(24,'e2c612e8','LoginBanner_white.png','/var/www/html/obelisksoft/uploads/e2c612e8/','png'),(25,'910e475d','instalaciondelSGED.pdf','/var/www/html/obelisksoft/uploads/910e475d/','pdf'),(26,'fe78d357','oneclick.pdf','/var/www/html/obelisksoft/uploads/fe78d357/','pdf'),(27,'8ff5bf7d','instalaciondelSGED.pdf','/var/www/html/obelisksoft/uploads/8ff5bf7d/','pdf'),(28,'855509a9','instalacion del SGED.pdf','/var/www/html/obelisksoft/uploads/855509a9/','pdf'),(29,'855509a9','Organigrama - MATRIX Giros y Servicios S.A.S..pdf','/var/www/html/obelisksoft/uploads/855509a9/','pdf'),(30,'855509a9','Organigrama_-_MATRIX_Giros_y_Servicios_S.A.S..pdf','/var/www/html/obelisksoft/uploads/855509a9/','pdf'),(31,'855509a9','Organigrama_-_MATRIX_Giros_y_Servicios_S.A.S..pdf','/var/www/html/obelisksoft/uploads/855509a9/','pdf'),(32,'f8627ee7','Organigrama_-_MATRIX_Giros_y_Servicios_S.A.S..pdf','/var/www/html/obelisksoft/uploads/f8627ee7/','pdf'),(33,'c925b721','logoObeliskfile.png','/var/www/html/obelisksoft/uploads/c925b721/','png');
/*!40000 ALTER TABLE `my_tmps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_type`
--

DROP TABLE IF EXISTS `my_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_type`
--

LOCK TABLES `my_type` WRITE;
/*!40000 ALTER TABLE `my_type` DISABLE KEYS */;
INSERT INTO `my_type` VALUES (1,'TEXT','Field of Text'),(2,'INTEGER','Field of Integer'),(3,'EMAIL','Field of Email'),(4,'DATE','Field of Date');
/*!40000 ALTER TABLE `my_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_users`
--

DROP TABLE IF EXISTS `my_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_users`
--

LOCK TABLES `my_users` WRITE;
/*!40000 ALTER TABLE `my_users` DISABLE KEYS */;
INSERT INTO `my_users` VALUES (1,'Admin','Administrator','admin','93ca1adeedf05eeec859f1ae37ed70027fe7a916','admin@01strings.com',1,1,'2014-05-06 23:38:38','11111');
/*!40000 ALTER TABLE `my_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_valorations`
--

DROP TABLE IF EXISTS `my_valorations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_valorations` (
  `id_valoration` int(11) NOT NULL AUTO_INCREMENT,
  `valoration` varchar(100) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_valoration`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_valorations`
--

LOCK TABLES `my_valorations` WRITE;
/*!40000 ALTER TABLE `my_valorations` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_valorations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_valorationtypdoc`
--

DROP TABLE IF EXISTS `my_valorationtypdoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_valorationtypdoc` (
  `id_valoration` int(11) DEFAULT NULL,
  `id_typedoc` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_valorationtypdoc`
--

LOCK TABLES `my_valorationtypdoc` WRITE;
/*!40000 ALTER TABLE `my_valorationtypdoc` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_valorationtypdoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_valorationtypedocindex`
--

DROP TABLE IF EXISTS `my_valorationtypedocindex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_valorationtypedocindex` (
  `id_typedoc` int(11) DEFAULT NULL,
  `id_index` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_valorationtypedocindex`
--

LOCK TABLES `my_valorationtypedocindex` WRITE;
/*!40000 ALTER TABLE `my_valorationtypedocindex` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_valorationtypedocindex` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-22 12:41:54
