CREATE DATABASE  IF NOT EXISTS `toymarket` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `toymarket`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: toymarket
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `approvels`
--

DROP TABLE IF EXISTS `approvels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `approvels` (
  `approveid` int NOT NULL,
  `app_typ` int NOT NULL,
  `status` int DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `users_user_name` varchar(45) NOT NULL,
  PRIMARY KEY (`approveid`,`users_user_name`),
  UNIQUE KEY `app_typ_UNIQUE` (`app_typ`),
  UNIQUE KEY `approveid_UNIQUE` (`approveid`),
  UNIQUE KEY `users_user_name_UNIQUE` (`users_user_name`),
  KEY `fk_approvels_users1_idx` (`users_user_name`),
  CONSTRAINT `fk_approvels_users1` FOREIGN KEY (`users_user_name`) REFERENCES `users` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `approvels`
--

LOCK TABLES `approvels` WRITE;
/*!40000 ALTER TABLE `approvels` DISABLE KEYS */;
/*!40000 ALTER TABLE `approvels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdat`
--

DROP TABLE IF EXISTS `userdat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userdat` (
  `fnme` varchar(45) DEFAULT NULL,
  `mnme` varchar(45) DEFAULT NULL,
  `lnme` varchar(45) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `users_user_name` varchar(45) NOT NULL,
  `approvels_approveid` int NOT NULL,
  PRIMARY KEY (`users_user_name`,`approvels_approveid`),
  KEY `fk_userdat_users_idx` (`users_user_name`),
  KEY `fk_userdat_approvels1_idx` (`approvels_approveid`),
  CONSTRAINT `fk_userdat_approvels1` FOREIGN KEY (`approvels_approveid`) REFERENCES `approvels` (`approveid`),
  CONSTRAINT `fk_userdat_users` FOREIGN KEY (`users_user_name`) REFERENCES `users` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdat`
--

LOCK TABLES `userdat` WRITE;
/*!40000 ALTER TABLE `userdat` DISABLE KEYS */;
/*!40000 ALTER TABLE `userdat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_name` varchar(45) NOT NULL,
  `user_pwd` varchar(45) DEFAULT NULL,
  `user_typ` int DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('admin','admin',1),('hradmin','hradmin',2),('user','user',0);
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

-- Dump completed on 2024-06-24 12:05:31
