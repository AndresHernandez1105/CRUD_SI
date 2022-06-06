-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_pfsi
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `empresa` varchar(20) DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `dir` varchar(100) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (53,'Andrés','Hernández','Microsoft Corporatio','Full Stack Developer','andreshernandez85@aragon.unam.mx','5561231792','Tecámac, Edomex','f82df5c217271d2afb14db819de4f4ac.jpg'),(54,'Angel','Hernández','RELE 2022','Profesor','angel00@rele.com.mx','5561231792','Tecámac, Edomex','e20550b7ea11a6d9f16cf3172dfaa2cf.jpg'),(55,'Carlos','Gutiérrez','Aeroméxico','Piloto Comercial','carlosgusano@aeromexico.com','123456789','Las Américas, Ecatepec','014c2a0261ae63511f490e836f03cbb6.jpg'),(56,'William','Aguilar','Facultad de Arquitec','Arquitecto','william_aguilar@arquitectura.unam.mx','9876543210','Las Américas, Ecatepec','d47a1c30650787d9c32e4f84b74bfc19.jpg'),(57,'Jessica','Aguilar','FacMed','Médico Cirujano','jessica_aguilar@facmed.unam.mx','1223334444','Tecámac, Edomex','1f04653901587fb4ce34d7171f4e5940.jpg'),(60,'Daniela','Umbral','Derecho Fes Aragón','Abogada','dani_umbral@derecho.unam.mx','5564740689','30-30, México Pachuca','');
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-05 19:19:50
