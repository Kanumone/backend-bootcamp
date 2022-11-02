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
-- Create database
--
DROP DATABASE IF EXISTS bootcamp;
CREATE DATABASE bootcamp;
USE bootcamp;

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
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'images/velocity_1.webp','velocity shirt','main'),(2,'images/velocity_main.webp','shirt main view','main'),(3,'images/velocity_anounce.webp','velocity shirt anounce','anounce'),(4,'images/tommy_hat_main.webp','Hat Tommy Hilfiger','main'),(5,'images/tommy_hat_1.webp','Tommy Hilfiger hat another view','more'),(6,'images/adidas_shoes.webp','Кроссивки adidas','main'),(7,'images/befree_t-shirt.webp','Футболка Befree','main'),(8,'images/carvan_coat.webp','Пальто Carvan','main'),(9,'images/hoodey_main.webp','Толстовка adidas','main'),(10,'images/zarina_jacket.webp','Куртка zarina','main'),(11,'images/levis_jeans.webp','Джинсы levi\'s','main'),(12,'images/tommy_tailor_jeans.webp','Джинсы Tommy Tailor','main'),(13,'images/uniqlo_t-shirt.webp','Футболка Uniqlo','main'),(14,'images/puma_shorts.webp','Спортивные шорты PUMA','main'),(15,'images/amazfit_bip.jpg','Фитнес браслет Amazfit Bip','main'),(16,'images/zarina_main.jpg','Zarina main photo','main'),(17,'images/jamper_uniqlo.webp','jamper uniqlo','main'),(18,'images/jacket_colins.webp','Jacket colins','main'),(19,'images/pants_colins.webp','Pants colin\'s','main'),(20,'images/shirt_bawer.webp','shirt bawer','main'),(21,'images/socks_demix.jpg','socks demix','main'),(22,'images/medicine.webp','Medicine shirt','main'),(23,'images/nordway.webp','nordway','main');
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
INSERT INTO `product_image` VALUES (1,21),(2,22),(3,11),(4,23),(5,15),(6,1),(6,2),(6,3),(7,6),(8,8),(9,14),(10,12),(11,13),(12,7),(13,9),(14,10),(14,16),(15,4),(15,5),(17,17),(18,18),(19,19),(20,20);
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
INSERT INTO `product_section` VALUES (1,1),(2,1),(2,5),(3,1),(3,9),(4,7),(5,3),(5,8),(6,1),(6,5),(7,4),(8,7),(9,1),(9,4),(10,1),(10,9),(11,1),(12,1),(13,1),(14,7),(15,1),(15,8),(17,1),(18,1),(19,1),(20,1);
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
  `sale_price` decimal(10,5) DEFAULT NULL,
  `promo_price` decimal(10,5) DEFAULT NULL,
  `activity` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `main_section_id` int unsigned NOT NULL,
  `anounce_image_id` int unsigned DEFAULT '1',
  PRIMARY KEY (`product_id`),
  KEY `main_section_id` (`main_section_id`),
  KEY `anounce_image_id` (`anounce_image_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`main_section_id`) REFERENCES `sections` (`section_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`anounce_image_id`) REFERENCES `images` (`image_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Набор носков Demix',799.00000,719.00000,659.00000,1,'Носки из хлопка, носить будешь долго\r\nДетали: ногам приятно',1,21),(2,'Рубашка Medicine',1690.00000,1500.00000,1299.00000,1,'Крутая рубашка',1,22),(3,'Джинсы Levi\'s',1589.99000,1400.00000,1299.00000,1,'Популярные джинсы\r\nДетали: натуральный denim',1,11),(4,'Куртка Nordway',5670.00000,5000.00000,4799.00000,1,'Молодежная куртка\r\nДетали: длинная, зимой не замерзнешь, капюшон снимается',7,23),(5,'Amazfit bip',3590.00000,3359.00000,3190.00000,1,'Xiaomi - топ за свои деньги\r\nДетали: смотрите название',3,15),(6,'Рубашка Velocity',3300.00000,2999.00000,2689.00000,1,'Рубашка Velocity, сделана с любовью',1,2),(7,'Кроссовки adidas',7500.00000,6990.00000,6500.00000,1,'Созданы, чтобы ты чувствовал комфорт при хождении каждый день',1,6),(8,'Пальто Carvan',11500.00000,NULL,8560.00000,1,'Топовое мужское пальто, придаст брутальности любому мужчине',7,8),(9,'Шорты Puma',1249.00000,0.00000,NULL,1,'Шорты для занятий спорта и прогулок.\r\nДетали: удобные, вышитый логотип',4,14),(10,'Джинсы Tom Tailor',5670.00000,0.00000,NULL,1,'Джинсы как джинсы\r\nДетали: дороговаты',1,12),(11,'Футболка UNIQLO',799.00000,0.00000,NULL,1,'Классная женская футболка\r\nДетали: прикольный цвет',1,13),(12,'Футболка Befree',999.00000,0.00000,NULL,1,'Футболка для повседневной жизни, удобная и практичная',1,7),(13,'Толстовка Adidas',3479.89000,0.00000,NULL,1,'Отличная вещь для работы и занятий спортом',1,9),(14,'Куртка Zarina',10599.00000,0.00000,NULL,1,'Куртка подходит для низких температур\r\nДетали: удлиненная',7,16),(15,'Шапка Tommy Hilfiger',755.00000,710.00000,699.00000,1,'Для осени пойдет, модная и молодежная',1,5),(17,'Джемпер UNIQLO',2999.00000,2700.00000,2509.00000,1,'Джемпер выполнен из теплой, мягкой и уютной овечьей шерсти класса премиум. Мы используем редкую шерсть толщиной всего 19,5 микрон, чтобы вы наслаждались комфортом день за днем.',1,17),(18,'Жилет COLIN\'S',3490.00000,2999.00000,2690.00000,1,'Жилет утепленный выполнен из стеганного текстиля с небольшим слоем искусственного утеплителя. Детали: застежка на молнию, воротник-стойка, два боковых кармана.',1,18),(19,'Штаны COLIN\'S',4379.00000,2000.00000,1780.00000,1,'Товар как минимум на 50% состоит из натурального льняного волокна . Для создания товара потребовалось меньше воды и пестицидов, а использование всех частей растения гарантирует безотходное производство. Выбирая этот товар, вы проявляете заботу о себе и бережете планету, поддерживая движение zero waste (ноль отходов).',1,18),(20,'Рубашка Bawer',6487.00000,2590.00000,1999.00000,1,'Рубашка полуприталенная Bawer Regular',1,20);
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
  PRIMARY KEY (`section_id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'Одежда','Одежда, которая сделает тебя неотразимым'),(2,'Обувь','Комфортная повседневная обувь'),(3,'Аксессуары','Все что нужно для дополнения образа'),(4,'Спорт','Быстрее, выше, сильнее'),(5,'Рубашки','Великолепный стиль на каждый день'),(6,'Кроссовки','Удобная спортивная обувь'),(7,'Верхняя одежда','Верхняя одежда для любой погоды'),(8,'Часы','Аксессуар, который добавит стиля каждому'),(9,'Джинсы','Лучшие джинсы на диком западе'),(10,'Зимняя одежда','Одежда высокого качества для низких температур');
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

-- Dump completed on 2022-11-02  2:40:51
