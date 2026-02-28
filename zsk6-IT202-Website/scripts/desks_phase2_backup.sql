-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: localhost    Database: desks
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `desk_types`
--

DROP TABLE IF EXISTS `desk_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `desk_types` (
  `desk_type_id` int NOT NULL AUTO_INCREMENT,
  `desk_type_code` varchar(10) NOT NULL,
  `desk_type_name` varchar(255) NOT NULL,
  `desk_aisle_number` int NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`desk_type_id`),
  UNIQUE KEY `desk_type_code` (`desk_type_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desk_types`
--

LOCK TABLES `desk_types` WRITE;
/*!40000 ALTER TABLE `desk_types` DISABLE KEYS */;
INSERT INTO `desk_types` VALUES (1,'STND','Standing',1,'2026-02-28 18:45:23','2026-02-28 18:45:23'),(2,'EXEC','Executive',2,'2026-02-28 16:57:30','2026-02-28 16:57:30'),(3,'LSHP','L-Shaped',3,'2026-02-28 16:57:32','2026-02-28 16:57:32');
/*!40000 ALTER TABLE `desk_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desk_users`
--

DROP TABLE IF EXISTS `desk_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `desk_users` (
  `desks_users_id` int NOT NULL AUTO_INCREMENT,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `pronouns` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`desks_users_id`),
  UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desk_users`
--

LOCK TABLES `desk_users` WRITE;
/*!40000 ALTER TABLE `desk_users` DISABLE KEYS */;
INSERT INTO `desk_users` VALUES (1,'ronaldo@desks.com','57bcc14106b1159b48342a4078a5e80dd7229416981bbf0d973e4fc66a3e4622','He/Him','Cristiano','Ronaldo','123-456-7890','2026-02-28 16:57:01','2026-02-28 16:57:01'),(2,'messi@desks.com','200da227b7f36fab2f5d35f9ebf0ec2de8342e506a2e1718ae459074a10009f0','He/Him','Lionel','Messi','123-456-7891','2026-02-28 16:57:02','2026-02-28 16:57:02'),(3,'neymar@desks.com','6fde7f87dda5dd013c96e85749cb5c29951b2bcfb05a6a3219aba6138b92dfd0','He/Him','Neymar','Jr','123-456-7892','2026-02-28 16:57:03','2026-02-28 16:57:03');
/*!40000 ALTER TABLE `desk_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desks`
--

DROP TABLE IF EXISTS `desks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `desks` (
  `desk_id` int NOT NULL AUTO_INCREMENT,
  `desk_code` varchar(10) NOT NULL,
  `desk_name` varchar(255) NOT NULL,
  `desk_description` text NOT NULL,
  `desk_brand` varchar(50) NOT NULL,
  `desk_material` varchar(60) NOT NULL,
  `desk_type_id` int DEFAULT '0',
  `desk_buy_price` decimal(10,2) NOT NULL,
  `desk_sell_price` decimal(10,2) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`desk_id`),
  UNIQUE KEY `desk_code` (`desk_code`),
  KEY `desk_type_id` (`desk_type_id`),
  CONSTRAINT `desks_ibfk_1` FOREIGN KEY (`desk_type_id`) REFERENCES `desk_types` (`desk_type_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desks`
--

LOCK TABLES `desks` WRITE;
/*!40000 ALTER TABLE `desks` DISABLE KEYS */;
INSERT INTO `desks` VALUES (1,'UPLV2','Uplift V2 Commercial','Standing desk with programmable height presets and a bamboo desktop surface. Features a dual motor system for smooth and quiet adjustments.','Uplift','Bamboo',NULL,499.00,699.00,'2026-02-28 16:57:52','2026-02-28 16:57:52'),(2,'FLEXE','FlexiSpot E7 Pro','Premium standing desk with anti-collision technology and a solid steel frame. Supports up to 355 pounds and adjusts from 22 to 48 inches.','FlexiSpot','Steel',NULL,479.00,649.00,'2026-02-28 16:57:54','2026-02-28 16:57:54'),(3,'VARI','Vari Electric','Electric standing desk with T-style legs and a laminate finish. Includes a built-in cable management tray and programmable settings.','Vari','Laminate',NULL,545.00,750.00,'2026-02-28 16:57:56','2026-02-28 16:57:56'),(4,'JARV','Jarvis Bamboo','Eco-friendly standing desk made from sustainably sourced bamboo. Features a single motor lift system with a smooth height range of 25 to 51 inches.','Fully','Bamboo',NULL,519.00,729.00,'2026-02-28 16:57:57','2026-02-28 16:57:57'),(5,'BKANT','IKEA BEKANT','Sit-stand desk with electric height adjustment and a clean Scandinavian design. Net mesh cable management keeps cords organized underneath.','IKEA','Particleboard',NULL,349.00,549.00,'2026-02-28 16:57:58','2026-02-28 16:57:58'),(6,'BUSH','Bush Saratoga','Traditional executive desk with elegant detailing and a rich cherry wood finish. Features two file drawers and built-in cable management grommets.','Bush Business','Cherry Wood',2,689.00,999.00,'2026-02-28 16:58:00','2026-02-28 16:58:00'),(7,'SADR','Sauder Heritage Hill','Classic executive desk with a rich stained finish and a large desktop surface. Includes a slide-out keyboard shelf and two storage drawers.','Sauder','Engineered Wood',2,399.00,599.00,'2026-02-28 16:58:01','2026-02-28 16:58:01'),(8,'HOOK','Hooker Kinsey','High-end executive desk with genuine leather inlay crafted from solid hardwood. Dovetail joinery drawers and antique brass hardware complete the luxurious look.','Hooker','Hardwood',2,1200.00,1799.00,'2026-02-28 16:58:03','2026-02-28 16:58:03'),(9,'DMIK','DMI Keswick','Professional executive desk with full pedestal drawers and a traditional crown moulding accent. Built with veneer over solid core construction for lasting durability.','DMI Office','Veneer',2,799.00,1199.00,'2026-02-28 16:58:05','2026-02-28 16:58:05'),(10,'MART','Martin Beaumont','U-shaped executive desk with an optional hutch and solid oak construction. Includes a keyboard tray and central locking system for all drawers.','Martin','Oak',2,899.00,1349.00,'2026-02-28 16:58:06','2026-02-28 16:58:06'),(11,'WLKR','Walker Edison Soreno','Modern L-shaped glass desk with a sliding keyboard tray and tempered safety glass top. Beveled edge design gives it a sleek contemporary look.','Walker Edison','Glass',3,129.00,219.00,'2026-02-28 16:58:08','2026-02-28 16:58:08'),(12,'TRBS','Tribesigns L-Desk','Large L-shaped desk with open shelving and a spacious work surface. Supports up to 400 pounds and includes adjustable leg pads for uneven floors.','Tribesigns','MDF',3,179.00,289.00,'2026-02-28 16:58:10','2026-02-28 16:58:10'),(13,'CUBI','CubiCubi L-Desk','Compact L-shaped desk with a side storage bag and headphone hook. Ideal for small spaces while still providing a generous corner workspace.','CubiCubi','Steel',3,89.00,159.00,'2026-02-28 16:58:11','2026-02-28 16:58:11'),(14,'IRON','Mr IRONSTONE L-Desk','Industrial L-shaped desk with a built-in monitor stand and sturdy metal frame. Features a round corner design for safety and extra legroom.','Mr IRONSTONE','MDF',3,109.00,199.00,'2026-02-28 16:58:12','2026-02-28 16:58:12'),(15,'BSTR','Bestier L-Desk','L-shaped desk with integrated LED lights and built-in power outlets for charging devices. Modern design with a reversible configuration for left or right setup.','Bestier','Engineered Wood',3,159.00,269.00,'2026-02-28 16:58:15','2026-02-28 16:58:15');
/*!40000 ALTER TABLE `desks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-28 13:52:05
