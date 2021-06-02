-- MySQL dump 10.13  Distrib 5.7.34, for Linux (x86_64)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	5.7.34-0ubuntu0.18.04.1

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
-- Table structure for table `resume_data`
--

DROP TABLE IF EXISTS `resume_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resume_data` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_network` varchar(150) NOT NULL,
  `user_mail` varchar(100) NOT NULL,
  `user_education` varchar(400) NOT NULL,
  `user_skills` varchar(1000) NOT NULL,
  `user_profile` varchar(5000) NOT NULL,
  `user_experience` varchar(5000) NOT NULL,
  `type` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resume_data`
--

LOCK TABLES `resume_data` WRITE;
/*!40000 ALTER TABLE `resume_data` DISABLE KEYS */;
INSERT INTO `resume_data` VALUES (1,'Dmitriy Kyriyenko','+380955430584','facebook.com','kirisssspi@gmail.com','IT STEP 2019','C++,C#,JS,PHP,HTML','Apartments simplicity or understood do it we. Song such eyes had and off. Removed winding ask explain delight out few behaved lasting. Letters old hastily ham sending not sex chamber because present. Oh is indeed twenty entire figure. Occasional diminution announcing new now literature terminated. Really regard excuse off ten pulled. Lady am room head so lady four or eyes an. He do of consulted sometimes concluded mr. An household behaviour if pretended.','Apartments simplicity or understood do it we. Song such eyes had and off. Removed winding ask explain delight out few behaved lasting. Letters old hastily ham sending not sex chamber because present. Oh is indeed twenty entire figure. Occasional diminution announcing new now literature terminated. Really regard excuse off ten pulled. Lady am room head so lady four or eyes an. He do of consulted sometimes concluded mr. An household behaviour if pretended.','default');
/*!40000 ALTER TABLE `resume_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'dmitriy','dmitriy2','12344'),(2,'aaa','111','222'),(3,'anton','anton@mail.com','2222'),(4,'Dmitriy','kirienkodima@','2222'),(5,'anton','anton@massss','1233'),(6,'Dmitriy','dima123@gmail.com','8f9c52fdc1b5f372881d7861f7368328'),(7,'admin','kirienkodima@','8f9c52fdc1b5f372881d7861f7368328');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-25 12:24:48
