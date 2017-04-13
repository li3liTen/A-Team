-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: grandmalifev2
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
-- Table structure for table `blogmembers`
--

DROP TABLE IF EXISTS `blogmembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogmembers` (
  `memberID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogmembers`
--

LOCK TABLES `blogmembers` WRITE;
/*!40000 ALTER TABLE `blogmembers` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogmembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogposts`
--

DROP TABLE IF EXISTS `blogposts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogposts` (
  `postID` int(10) NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) NOT NULL,
  `postDesc` text NOT NULL,
  `postCont` text NOT NULL,
  `postDate` datetime NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogposts`
--

LOCK TABLES `blogposts` WRITE;
/*!40000 ALTER TABLE `blogposts` DISABLE KEYS */;
INSERT INTO `blogposts` VALUES (1,'Annie','<p>This is a blog about posting blogs</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>I love posting blogs yay!!!</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 09:33:24',NULL),(2,'dada','<p>dgdsgs</p>','<p>fdsfsdf</p>','2017-04-13 09:35:05',NULL),(3,'Hello','<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>Hello again!</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 10:58:53',NULL),(4,'Hello','<p>Hello</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>Hello</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:03:08',NULL),(5,'jjjj','<p>jjjjj</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:04:10',NULL),(6,'lalal','<p>lalalala</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>lalalala</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:08:00',NULL),(7,'lalala','<p>lalalala</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>lalalala</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:12:05',NULL),(8,'Hello','<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:15:41',NULL),(9,'Hello','<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:23:01',NULL),(10,'Hello','<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:23:22',NULL),(11,'Hello','<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><canvas id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"1033\" height=\"136\"></canvas></p>','2017-04-13 11:24:39',NULL);
/*!40000 ALTER TABLE `blogposts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-13 14:16:48
