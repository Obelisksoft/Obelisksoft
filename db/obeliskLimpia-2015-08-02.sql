-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: obelisk
-- ------------------------------------------------------
-- Server version	5.1.73

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
  `INDEX_12` text,
  `INDEX_19` text,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_CACHE_VIEW`
--

LOCK TABLES `MY_CACHE_VIEW` WRITE;
/*!40000 ALTER TABLE `MY_CACHE_VIEW` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_DOCUMENTRETENTIONS`
--

LOCK TABLES `MY_DOCUMENTRETENTIONS` WRITE;
/*!40000 ALTER TABLE `MY_DOCUMENTRETENTIONS` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_FOLDERS`
--

LOCK TABLES `MY_FOLDERS` WRITE;
/*!40000 ALTER TABLE `MY_FOLDERS` DISABLE KEYS */;
/*!40000 ALTER TABLE `MY_FOLDERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MY_LOGOS`
--

DROP TABLE IF EXISTS `MY_LOGOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MY_LOGOS` (
  `ID_LOGO` int(11) NOT NULL AUTO_INCREMENT,
  `NAMELOGO` varchar(250) NOT NULL,
  `RUTA` text NOT NULL,
  `EXT` text NOT NULL,
  `ACTIVE` int(11) NOT NULL,
  `DATE_UPLOAD` date NOT NULL,
  PRIMARY KEY (`ID_LOGO`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MY_LOGOS`
--

LOCK TABLES `MY_LOGOS` WRITE;
/*!40000 ALTER TABLE `MY_LOGOS` DISABLE KEYS */;
INSERT INTO `MY_LOGOS` VALUES (1,'logoObeliskfile.png','/var/www/html/obelisksoft/public/img/logos//','png',1,'2015-07-20'),(2,'showLogoFile.php.png','/var/www/html/obelisksoft/public/img/logos/','png',0,'2015-07-20'),(3,'logopm3.png','/var/www/html/obelisksoft/public/img/logos/','png',0,'2015-07-20'),(4,'logopowerfile1.png','/var/www/html/obelisksoft/public/img/logos/','png',0,'2015-07-20'),(5,'logo.png','/var/www/html/obelisksoft/public/img/logos/','png',0,'2015-07-21'),(6,'logo_left.png','/var/www/html/obelisksoft/public/img/logos/','png',0,'2015-07-21'),(7,'SisCorp.png','/var/www/html/obelisksoft/public/img/logos/','png',0,'2015-07-21');
/*!40000 ALTER TABLE `MY_LOGOS` ENABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_documents`
--

LOCK TABLES `my_documents` WRITE;
/*!40000 ALTER TABLE `my_documents` DISABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_documenttypes`
--

LOCK TABLES `my_documenttypes` WRITE;
/*!40000 ALTER TABLE `my_documenttypes` DISABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_fileindex`
--

LOCK TABLES `my_fileindex` WRITE;
/*!40000 ALTER TABLE `my_fileindex` DISABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_files`
--

LOCK TABLES `my_files` WRITE;
/*!40000 ALTER TABLE `my_files` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_groups`
--

LOCK TABLES `my_groups` WRITE;
/*!40000 ALTER TABLE `my_groups` DISABLE KEYS */;
INSERT INTO `my_groups` VALUES (1,'Sistemas',1,'2015-07-05 16:44:14');
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_indexes`
--

LOCK TABLES `my_indexes` WRITE;
/*!40000 ALTER TABLE `my_indexes` DISABLE KEYS */;
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
INSERT INTO `my_permissionrole` VALUES (1,2,1),(1,3,1),(1,1,1),(1,4,1),(1,5,1),(1,6,1),(1,7,1),(1,8,1),(1,16,1),(15,3,1),(15,4,1),(15,2,1),(15,1,1),(16,8,1),(16,4,1),(16,1,1),(16,2,1),(16,3,1),(16,5,1),(16,6,1),(16,7,1),(16,9,0),(16,0,1),(15,0,1),(15,9,1),(1,9,1),(1,17,1),(1,18,1),(1,19,1),(1,20,1),(1,21,1),(1,22,1),(1,23,1),(1,24,1),(1,25,1),(2,1,1),(1,26,1),(1,28,1),(1,27,0),(1,29,1),(1,30,1),(2,30,0),(2,29,0),(1,31,1),(1,32,1),(1,33,1),(2,2,0),(2,3,0),(2,4,0),(2,5,0),(2,6,0),(2,7,0),(2,15,0),(2,9,0),(2,16,0),(2,17,0),(2,18,0),(2,19,0),(2,20,0),(2,21,0),(2,22,0),(2,23,0),(2,24,0),(2,25,0),(2,26,0),(2,27,0),(2,28,0),(2,31,0),(2,32,0),(2,33,0),(2,35,0),(1,35,1),(1,36,1);
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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_permissions`
--

LOCK TABLES `my_permissions` WRITE;
/*!40000 ALTER TABLE `my_permissions` DISABLE KEYS */;
INSERT INTO `my_permissions` VALUES (1,'Adminitracion Tasks','admin_access'),(2,'Add User','new_user'),(3,'Edit User','edit_user'),(4,'Delete User','delete_user'),(5,'Add Rol','new_rol'),(6,'Edit Rol','edit_rol'),(7,'Delete Rol','delete_rol'),(8,'Add Permission','new_permission'),(9,'Edit Permission','edit_permission'),(17,'Add Group','new_group'),(16,'Delete Permission','delete_permission'),(15,'Add Permission','new_permission'),(18,'Edit_group','edit_group'),(19,'Delete Group','delete_group'),(20,'Add Index','new_index'),(21,'Edit Index','edit_index'),(22,'Delete Index','delete_index'),(23,'Add Document','new_document'),(24,'Edit Document','edit_document'),(25,'Delete Document','delete_document'),(26,'View Table Retention','view_retention'),(27,'View Table Valoration','view_valoration'),(28,'View Repository','view_repository'),(29,'View Menu Sistem','view_menu_system'),(30,'View Menu Admin','view_menu_admin'),(31,'New Repository','new_repository'),(32,'Edit Repository','edit_repository'),(33,'Delete Repository','delete_repository'),(34,'New Document','new_document'),(35,'Advaced Search','advanced_search'),(36,'View Menu User','view_menu_user');
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_retentions`
--

LOCK TABLES `my_retentions` WRITE;
/*!40000 ALTER TABLE `my_retentions` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_tmps`
--

LOCK TABLES `my_tmps` WRITE;
/*!40000 ALTER TABLE `my_tmps` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_type`
--

LOCK TABLES `my_type` WRITE;
/*!40000 ALTER TABLE `my_type` DISABLE KEYS */;
INSERT INTO `my_type` VALUES (1,'TEXT','Field of Text'),(2,'INTEGER','Field of Integer'),(3,'EMAIL','Field of Email'),(4,'DATE','Field of Date'),(5,'LIST','Field of List');
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
INSERT INTO `my_users` VALUES (1,'Admin','Administrator','admin','09c133a7d8e9544350d4f1ba5d7686faee445d4a','admin@01strings.com',1,1,'2014-05-06 23:38:38','11111');
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

-- Dump completed on 2015-08-02 12:36:53
