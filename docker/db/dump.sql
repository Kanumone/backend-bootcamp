-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: bootcamp
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `image_id` int unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(500) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'/resourses/assets/velocity_1.webp','velocity shirt','main'),(2,'/resources/assets/velocity_main.webp','shirt main view','main'),(3,'/resources/assets/velocity_anounce.webp','velocity shirt anounce','anounce'),(4,'/resources/assets/tommy_hat_main.webp','Hat Tommy Hilfiger','main'),(5,'/resources/assets/tommy_hat_1.webp','Tommy Hilfiger hat another view','more'),(6,'/resources/assets/adidas_shoes.webp','Кроссивки adidas','main'),(7,'/resources/assets/befree_t-shirt.webp','Футболка Befree','main'),(8,'/resources/assets/carvan_coat.webp','Пальто Carvan','main'),(9,'/resources/assets/hoodey_main.webp','Толстовка adidas','main'),(10,'/resources/assets/zarina_jacket.webp','Куртка zarina','anounce'),(11,'/resources/assets/levis_jeans.webp','Джинсы levi\'s','anounce'),(12,'/resources/assets/tommy_tailor_jeans.webp','Джинсы Tommy Tailor','main'),(13,'/resources/assets/uniqlo_t-shirt.webp','Футболка Uniqlo','main'),(14,'/resources/assets/puma_shorts.webp','Спортивные шорты PUMA','main'),(15,'/resources/assets/amazfit_bip.jpg','Фитнес браслет Amazfit Bip','anounce');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_image` (
  `product_id` int unsigned NOT NULL,
  `image_id` int unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`image_id`),
  KEY `product_id` (`product_id`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `product_image_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (3,11),(5,15),(6,1),(6,2),(6,3),(7,6),(8,8),(9,14),(10,12),(11,13),(12,7),(13,9),(14,10),(15,4),(15,5);
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_section`
--

DROP TABLE IF EXISTS `product_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_section` (
  `product_id` int unsigned NOT NULL,
  `section_id` int unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`section_id`),
  KEY `product_id` (`product_id`),
  KEY `section_id` (`section_id`),
  CONSTRAINT `product_section_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `product_section_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `sections` (`section_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_section`
--

LOCK TABLES `product_section` WRITE;
/*!40000 ALTER TABLE `product_section` DISABLE KEYS */;
INSERT INTO `product_section` VALUES (1,1),(2,5),(3,9),(4,7),(5,3),(5,8),(6,1),(6,5),(7,4),(8,7),(9,1),(9,4),(10,1),(10,9),(11,1),(12,1),(13,1),(14,7),(15,8);
/*!40000 ALTER TABLE `product_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(10,5) NOT NULL,
  `activity` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Набор носков Demix',799.00000,1,'Носки из хлопка, носить будешь долго\r\nДетали: ногам приятно'),(2,'Рубашка Medicine',1200.00000,1,'Крутая рубашка'),(3,'Джинсы Levi\'s',1589.99000,1,'Популярные джинсы\r\nДетали: натуральный denim'),(4,'Куртка Nordway',5670.00000,1,'Молодежная куртка\r\nДетали: длинная, зимой не замерзнешь, капюшон снимается'),(5,'Amazfit bip',3590.00000,1,'Xiaomi - топ за свои деньги\r\nДетали: смотрите название'),(6,'Рубашка Velocity',3300.00000,1,'Рубашка Velocity, сделана с любовью'),(7,'Кроссовки adidas',7500.00000,1,'Созданы, чтобы ты чувствовал комфорт при хождении каждый день'),(8,'Пальто Carvan',11500.00000,1,'Топовое мужское пальто, придаст брутальности любому мужчине'),(9,'Шорты Puma',1249.00000,1,'Шорты для занятий спорта и прогулок.\r\nДетали: удобные, вышитый логотип'),(10,'Джинсы Tom Tailor',5670.00000,1,'Джинсы как джинсы\r\nДетали: дороговаты'),(11,'Футболка UNIQLO',799.00000,1,'Классная женская футболка\r\nДетали: прикольный цвет'),(12,'Футболка Befree',999.00000,1,'Футболка для повседневной жизни, удобная и практичная'),(13,'Толстовка Adidas',3479.89000,1,'Отличная вещь для работы и занятий спортом'),(14,'Куртка Zarina',10599.00000,1,'Куртка подходит для низких температур\r\nДетали: удлиненная'),(15,'Шапка Tommy Hilfiger',755.00000,1,'Для осени пойдет, модная и молодежная');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sections` (
  `section_id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `level` tinyint unsigned NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'Одежда','Одежда, которая сделает тебя неотразимым',1),(2,'Обувь','Комфортная повседневная обувь',1),(3,'Аксессуары','Все что нужно для дополнения образа',1),(4,'Спорт','Быстрее, выше, сильнее',1),(5,'Рубашки','Великолепный стиль на каждый день',2),(6,'Кроссовки','Удобная спортивная обувь',2),(7,'Верхняя одежда','Верхняя одежда для любой погоды',2),(8,'Часы','Аксессуар, который добавит стиля каждому',2),(9,'Джинсы','Лучшие джинсы на диком западе',2);
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-21  2:20:50
