-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: login
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `blogposts`
--

DROP TABLE IF EXISTS `blogposts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogposts` (
  `postid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `postDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogposts`
--

LOCK TABLES `blogposts` WRITE;
/*!40000 ALTER TABLE `blogposts` DISABLE KEYS */;
INSERT INTO `blogposts` VALUES (1,'test','test','test','test','2017-04-15 19:56:57',NULL),(2,'cat','cat','cat','cat','2017-04-15 19:56:57',NULL),(3,'fdh','fgdh','fghd','','2017-04-15 21:46:58',NULL),(4,'fdh','fgdh','fghd','','2017-04-15 21:46:58',NULL);
/*!40000 ALTER TABLE `blogposts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loginattempts`
--

DROP TABLE IF EXISTS `loginattempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loginattempts`
--

LOCK TABLES `loginattempts` WRITE;
/*!40000 ALTER TABLE `loginattempts` DISABLE KEYS */;
INSERT INTO `loginattempts` VALUES ('::1',1,'2017-04-15 17:44:29','nessaek',1),('::1',1,'2017-04-15 17:44:19','nessa',2),('::1',2,'2017-04-13 14:39:10','nessak',3),('::1',1,'2017-04-15 17:44:46','nessak1',4);
/*!40000 ALTER TABLE `loginattempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('','','','',0,'2017-04-04 12:07:15'),('2835058f1f0295f248','nessak1','$2y$10$9SRquJTWGMtClq5SR/NCSe6LL5YphrQtSuZqxDHhhzCPsvrbZ/bTa','nessaek@gmail.com',1,'2017-04-15 10:04:55'),('2858558e2555ec3633','nessaek','test','nessa.kennedy@surreycc.gov.uk',0,'2017-04-13 12:58:15'),('2906358e2cb6d96b01','nessakkk','$2y$10$7UsJb6KHwlzqXZ12Cjdv6OqR6hXUwMQKfcO3rgdarsi7bSBlThzje','nk721@york.ac.uk',0,'2017-04-03 22:23:41'),('362158e26f203e539','nessaistestingsomething','$2y$10$29eMWFcO22RKMwhB2XCvaOEtMdh.eQ9rq6cKDxYP6peU50eL/XxW.','ciarancprice@gmail.com',0,'2017-04-03 15:49:53'),('799058ef76608a26b','nessaeek','$2y$10$Hawf5hEsljdp5YMzuPaIuu5kq3ZQxZ/8d/StNqeRPxzpxLerc0PHy','nessadkennedy@gmail.com',0,'2017-04-13 13:00:16'),('851258df9251932ee','nessaek1','$2y$10$p8KDSwpb3rJOupaZE8YlRedju8a30OZxkF5cv7g4YnbHZaKa.5yrq','nessa.kennedy5@mail.dcu.ie',0,'2017-04-01 11:43:13');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-16 12:11:27
