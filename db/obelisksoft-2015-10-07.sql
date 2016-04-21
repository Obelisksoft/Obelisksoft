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
  `INDEX_12` text,
  `INDEX_19` text,
  `INDEX_20` text,
  `INDEX_21` text,
  `INDEX_22` text,
  `INDEX_23` text,
  `INDEX_24` text,
  `INDEX_25` text,
  `INDEX_26` text,
  `INDEX_27` text,
  `INDEX_28` text,
  `INDEX_29` text,
  `INDEX_30` text,
  `INDEX_31` text,
  `INDEX_32` text,
  `INDEX_33` text,
  `INDEX_34` text,
  `INDEX_35` text,
  `INDEX_36` text,
  `INDEX_37` text,
  `INDEX_38` text,
  `INDEX_39` text,
  `INDEX_40` text,
  `INDEX_41` text,
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
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MY_LISTINDEXES`
--

DROP TABLE IF EXISTS `MY_LISTINDEXES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MY_LISTINDEXES` (
  `ID_LISTINDEX` int(11) NOT NULL AUTO_INCREMENT,
  `ID_INDEX` int(11) NOT NULL,
  `ID_CLAVE` int(11) NOT NULL,
  `LISTINDEX` varchar(250) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`ID_LISTINDEX`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
-- Table structure for table `my_departaments`
--

DROP TABLE IF EXISTS `my_departaments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_departaments` (
  `id_departament` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `departament` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_departament`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `my_departamentuser`
--

DROP TABLE IF EXISTS `my_departamentuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_departamentuser` (
  `id_departament` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-07 23:01:43
