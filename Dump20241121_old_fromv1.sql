-- MySQL dump 10.13  Distrib 8.0.40, for macos14 (x86_64)
--
-- Host: localhost    Database: campestr_01
-- ------------------------------------------------------
-- Server version	9.0.1

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
-- Table structure for table `banners`
--
CREATE DATABASE campestr_01;
USE campestr_01;

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(110) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `complemento` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (35,'01.png','principal','activo','principal',''),(36,'01-movil.png','principal-movil','activo','principal-movil',''),(37,'02.png','principal','activo','principal',''),(38,'02-movil.png','principal-movil','inactivo','principal-movil',''),(49,'cosarara.jpeg','principal','inactivo','principal','');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(1000) NOT NULL,
  `dos` varchar(1000) NOT NULL,
  `tres` varchar(1000) NOT NULL,
  `cuatro` varchar(100) NOT NULL,
  `cinco` varchar(1000) NOT NULL,
  `seis` varchar(1000) NOT NULL,
  `siete` varchar(100) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `nueve` varchar(100) NOT NULL,
  `diez` varchar(100) NOT NULL,
  `once` varchar(1000) NOT NULL,
  `doce` varchar(100) NOT NULL,
  `trece` varchar(100) NOT NULL,
  `catorce` varchar(1000) NOT NULL,
  `quince` varchar(1000) NOT NULL,
  `dieciseis` varchar(1000) NOT NULL,
  `diecisiete` varchar(1000) NOT NULL,
  `dieciocho` varchar(1000) NOT NULL,
  `diecinueve` varchar(100) DEFAULT NULL,
  `veinte` varchar(100) DEFAULT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `video` varchar(1000) DEFAULT NULL,
  `pdf` varchar(100) DEFAULT NULL,
  `f1` varchar(1000) DEFAULT NULL,
  `f2` varchar(10000) DEFAULT NULL,
  `f3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2034 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (2025,'Valentina González, champion','activo','destacado','orgullo-campestre','','seccion.php?cve=valentina-gonzalez-champion-tennis','Valentina González, champion',' champion of the Irapuato','orgullo','','','ingles','','','','','','valentina-gonzalez-champion-tennis','','','CONGRATULATIONS!! Valentina González, champion of the Irapuato G3, seventh stage of the 2022-23 season of our Tour.         ','','','WhatsApp Image 2023-12-05 at 17.25.48.jpeg','',''),(2024,'Luciana Rodriguez, campeona','activo','destacado','golf-convivencia','','seccion.php?cve=luciana-rodriguez-campeona-singles-femenil','Luciana Rodríguez, campeona','Torneo Nacional G3 Irapuato','orgullo','','','espanol','','','','','','luciana-rodriguez-campeona-singles-femenil','','','¡Es un honor para nosotros anunciar y felicitar a nuestra destacada socia, Luciana Rodríguez, por su brillante desempeño como Campeona en el Torneo Nacional G3 en la categoría Singles 14 Femenil! El torneo se llevó a cabo el pasado mes de noviembre en las instalaciones del prestigioso Club de Golf Santa Margarita, en la ciudad de Irapuato. Luciana demostró su talento excepcional y su dedicación incansable, dejando en alto el nombre de nuestro club. Nos llena de orgullo contar con atletas como Luciana, quienes inspiran a toda nuestra comunidad con su pasión y determinación. ¡Felicitaciones, Luciana, por este merecido triunfo!','','','WhatsApp Image 2023-12-05 at 17.25.41.jpeg','',''),(2031,'Felicitación ','activo','normal','about_us','','seccion.php?cve=felicidades-valentina-gonzalez-finalista ','Felicitamos a Valentina González ','Finalista Singles 14 Femenil ','orgullo','','','espanol','','','','','','felicidades-valentina-gonzalez-finalista ','','','¡Nos complace felicitar a Valentina González, quien en el pasado mes de noviembre se destacó como finalista en la categoría Singles 14 Femenil del Torneo Nacional G3, celebrado en el Club de Golf Santa Margarita, Irapuato, Gto. Su dedicación y talento continúan cosechando éxitos, enalteciendo el orgullo de la familia campestre! ','','','WhatsApp Image 2023-12-05 at 17.25.48.jpeg','','');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendario`
--

DROP TABLE IF EXISTS `calendario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calendario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tres` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuatro` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cinco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `seis` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `siete` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendario`
--

LOCK TABLES `calendario` WRITE;
/*!40000 ALTER TABLE `calendario` DISABLE KEYS */;
INSERT INTO `calendario` VALUES (16,'','lunes','casa-infantil','','principal','','',''),(20,'','martes','casa-infantil','','principal','','',''),(21,'','miercoles','casa-infantil','','principal','','',''),(22,'','jueves','casa-infantil','','principal','','',''),(23,'','viernes','casa-infantil','','principal','','',''),(24,'','sabado','casa-infantil','','principal','','',''),(25,'','domingo','casa-infantil','','principal','','',''),(35,'10','lunes','tenis','','principal','','',''),(36,'4:00 pm','lunes','tenis','Practica Infantil','secundario','','',''),(37,'Miercoles 12','miercoles','tenis','','principal','','',''),(38,'7:00 pm','miercoles','tenis','Practica infantil','secundario','','',''),(40,'Miercoles13','miercoles','hoyo-19','','principal','','',''),(45,'5 ','lunes','club-campestre-de-leon','','principal','','',''),(52,'','martes','club-campestre-de-leon','','principal','','',''),(53,'','miercoles','club-campestre-de-leon','','principal','','',''),(54,'','jueves','club-campestre-de-leon','','principal','','',''),(55,'','viernes','club-campestre-de-leon','','principal','','',''),(56,'','sabado','club-campestre-de-leon','','principal','','',''),(57,'','domingo','club-campestre-de-leon','','principal','','',''),(65,'','lunes','club-campestre-de-leon-tenis','','principal','','',''),(76,'','martes','club-campestre-de-leon-tenis','','principal','','',''),(77,'','miercoles','club-campestre-de-leon-tenis','','principal','','',''),(78,'','jueves','club-campestre-de-leon-tenis','','principal','','',''),(79,'','viernes','club-campestre-de-leon-tenis','','principal','','',''),(80,'','sabado','club-campestre-de-leon-tenis','','principal','','',''),(81,'','domingo','club-campestre-de-leon-tenis','','principal','','',''),(130,' 1','lunes','eng-semi-olympic','','principal','','',''),(131,' 2','martes','eng-semi-olympic','','principal','','',''),(132,' 3','miercoles','eng-semi-olympic','','principal','','',''),(133,'4 ','jueves','eng-semi-olympic','','principal','','',''),(134,' 5','viernes','eng-semi-olympic','','principal','','',''),(135,'6 ','sabado','eng-semi-olympic','','principal','','',''),(136,'7 ','domingo','eng-semi-olympic','','principal','','',''),(140,'','lunes','eng-tennis','','principal','','',''),(141,'','martes','eng-tennis','','principal','','',''),(142,'','miercoles','eng-tennis','','principal','','',''),(143,'','jueves','eng-tennis','','principal','','',''),(144,'','viernes','eng-tennis','','principal','','',''),(145,'','sabado','eng-tennis','','principal','','',''),(146,'','domingo','eng-tennis','','principal','','',''),(153,'10','lunes','golf-torneos','','principal','','',''),(155,' 11','martes','golf-torneos','','principal','','',''),(156,'12','miercoles','golf-torneos','','principal','','',''),(157,'13','jueves','golf-torneos','','principal','','',''),(158,'14 ','viernes','golf-torneos','','principal','','',''),(159,'15 ','sabado','golf-torneos','','principal','','',''),(160,'16 ','domingo','golf-torneos','','principal','','',''),(164,'','lunes','futbol','','principal','','',''),(165,'','martes','futbol','','principal','','',''),(166,'','miercoles','futbol','','principal','','',''),(167,'','jueves','futbol','','principal','','',''),(168,'','viernes','futbol','','principal','','',''),(169,'','sabado','futbol','','principal','','',''),(170,'','domingo','futbol','','principal','','',''),(172,'20 ','lunes','nombre-corto','','principal','','',''),(175,'24 ','viernes','nombre-corto','','principal','','',''),(176,'','sabado','nombre-corto','','principal','','',''),(178,' 10','lunes','nombre_corto','','principal','','',''),(179,'11 ','martes','nombre_corto','','principal','','',''),(180,'','miercoles','nombre_corto','','principal','','',''),(181,'','jueves','nombre_corto','','principal','','',''),(182,'','viernes','nombre_corto','','principal','','',''),(183,'','sabado','nombre_corto','','principal','','',''),(184,'','domingo','nombre_corto','','principal','','',''),(187,'9','lunes','nuevo','desayuno','secundario','','',''),(188,' ','lunes','nuevo','','principal','','',''),(189,'','martes','nuevo','','principal','','',''),(190,'','miercoles','nuevo','','principal','','',''),(191,'','jueves','nuevo','','principal','','',''),(192,'','viernes','nuevo','','principal','','',''),(193,'','sabado','nuevo','','principal','','',''),(194,'','domingo','nuevo','','principal','','',''),(195,'12','lunes','nuevo','comida','secundario','','',''),(196,'9:00','jueves','nuevo','csscss','secundario','','',''),(197,'','lunes','fitness','','principal','','',''),(198,'','martes','fitness','','principal','','',''),(199,'','miercoles','fitness','','principal','','',''),(200,'','jueves','fitness','','principal','','',''),(202,'','viernes','fitness','','principal','','',''),(203,'','sabado','fitness','','principal','','',''),(204,'','domingo','fitness','','principal','','',''),(205,'6:10 am ','lunes','fitness','LessMills CORE     ','secundario','','','Fitness 1'),(206,'6:10 am','martes','fitness','LessMills BODYBUMP','secundario','','','Fitness'),(207,'6:10 am ','miercoles','fitness','LessMills GRIT ','secundario','','','Fitness 1 '),(208,'6:10 AM','jueves','fitness','LessMills BODYPUMP','secundario','','','Fitness 1 '),(209,'6:10 am ','miercoles','fitness','BOX ','secundario','','',' Fitness 3 '),(210,'7:10 am','lunes','fitness','LessMills BODYPUMP','secundario','','','Fitness 1'),(211,'7:10 am','martes','fitness','TRX','secundario','','','Fitness 1'),(212,'7:10 am ','miercoles','fitness','LessMills BODYPUMP ','secundario','','','Fitness 1  '),(213,'7:10 am','jueves','fitness','LessMills CORE','secundario','','','Fitness 1 '),(214,'7:10 AM','viernes','fitness','HIIT','secundario','','','Fitness 1 '),(215,'7:10 am','lunes','fitness','LessMills BODYBALANCE','secundario','','','Fitness 2'),(216,'7:10 am','martes','fitness','HIIT','secundario','','','Fitness 2'),(217,'7:10 am 3','miercoles','fitness','BARRE 3','secundario','','','Fitness 2 3'),(218,'7:10 am','jueves','fitness','HIIT','secundario','','','Fitness 2'),(219,'7:10 am','viernes','fitness','LessMills BODYBALANCE','secundario','','','Fitness 2'),(220,'','lunes','alberca','','principal','','',''),(223,'  ','martes','alberca','','principal','','','');
/*!40000 ALTER TABLE `calendario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(1000) NOT NULL,
  `dos` varchar(1000) NOT NULL,
  `tres` varchar(1000) NOT NULL,
  `cuatro` varchar(100) NOT NULL,
  `cinco` varchar(1000) NOT NULL,
  `seis` varchar(1000) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `ocho` varchar(23) NOT NULL,
  `nueve` varchar(100) NOT NULL,
  `diez` varchar(100) NOT NULL,
  `once` varchar(1000) NOT NULL,
  `doce` varchar(100) NOT NULL,
  `trece` varchar(100) NOT NULL,
  `catorce` varchar(1000) NOT NULL,
  `quince` varchar(1000) NOT NULL,
  `dieciseis` varchar(1000) NOT NULL,
  `diecisiete` varchar(1000) NOT NULL,
  `dieciocho` varchar(1000) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `f1` varchar(1000) NOT NULL,
  `f2` varchar(10000) NOT NULL,
  `f3` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=540 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (519,'TORNILLERIA','activo','si','productos-industriales','editable','categoria.php?cve=tornilleria','Tornilleria','','3','secundario','200','','','','','','         ','tornilleria','         ','Captura de pantalla 2023-02-02 a la(s) 22.31.04.png','combustion.png',''),(527,'PRODUCTOS','activo','si','desplegable','editable','categoria.php?cve=productos-industriales','PRODUCTOS','','4','principal','','','','','','',' ','productos-industriales',' ','Captura de pantalla 2023-02-02 a la(s) 22.31.04.png','',''),(539,'Brocas','activo','si','productos-industriales','editable','categoria.php?cve=brocas','Brocas','','3','secundario','200','','','','','','    ','brocas','    ','Brocas.png','','');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tres` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuatro` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cinco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colores`
--

DROP TABLE IF EXISTS `colores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fondogeneral` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondogeneraltexto` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `color1` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `color2` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `color3` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolor1` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolortexto1` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolor2` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolortexto2` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolor3` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolortexto3` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolor4` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fondocolortexto4` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `link` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `linkhover` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `color4` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `menufondo` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `menutexto` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `menuhover` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `menuborder` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colores`
--

LOCK TABLES `colores` WRITE;
/*!40000 ALTER TABLE `colores` DISABLE KEYS */;
INSERT INTO `colores` VALUES (1,'#ffffff','#787878','#000000','#8a8a8a','#6d9418','#ffffff','#858585','#0d0d0d','#ffffff','#6d9418','#ffffff','#f0f1ee','#ffffff','#787878','#cbbc3a','#cbbc3a','#ffffff','#787878','#cbbc3a','#ffffff');
/*!40000 ALTER TABLE `colores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenidos`
--

DROP TABLE IF EXISTS `contenidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contenidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cero` varchar(1000) NOT NULL,
  `uno` varchar(100) NOT NULL,
  `dos` varchar(100) NOT NULL,
  `tres` varchar(1000) NOT NULL,
  `cuatro` varchar(10000) NOT NULL,
  `cinco` varchar(100) NOT NULL,
  `seis` varchar(1000) NOT NULL,
  `siete` varchar(10000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1037 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenidos`
--

LOCK TABLES `contenidos` WRITE;
/*!40000 ALTER TABLE `contenidos` DISABLE KEYS */;
INSERT INTO `contenidos` VALUES (1023,'nueva','activo','nueva2','subtitulo','','1','12','nueva    ','calabacita.png'),(1024,'nueva','inactivo','mision-vision','','','','6','nueva      ','calabacita.png'),(1025,'VIsion','inactivo','mision-vision','','','','6','nueva       ','calabacita.png'),(1026,'Titulo','activo','482','Subtitulo','400','1','2','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.    ','alberca-3.png'),(1027,'Banner solo imagen ','activo','482','','','5','2','','alberca-4.png'),(1028,'Titulo','activo','481','Subtitulo','400','1','2','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.    ','Captura de pantalla 2023-03-18 a la(s) 22.43.09.png'),(1029,'Banner solo imagen ','activo','481','','','5','2','','Captura de pantalla 2023-03-18 a la(s) 22.43.35.png'),(1030,'Banner solo imagen ','activo','481','','','5','2','','Captura de pantalla 2023-03-18 a la(s) 22.43.53.png'),(1031,'Área de desarrollo ','activo','470','Subtitulo','400','1','2','Disponemos de un área de desarrollo de actividades infantiles enfocada a niños y jóvenes, la cual cuenta con jardín, terraza, salón infantil, salón juvenil, baños y lockers. ','Captura de pantalla 2023-03-18 a la(s) 22.55.11.png'),(1032,'Banner solo imagen ','activo','470','','','5','2','','Captura de pantalla 2023-03-18 a la(s) 22.55.00.png'),(1033,'Banner solo imagen ','activo','470','','','5','2','','Captura de pantalla 2023-03-18 a la(s) 22.54.44.png'),(1034,'Banner solo imagen ','activo','482','','','5','2','','Captura de pantalla 2023-03-18 a la(s) 22.57.30.png'),(1035,'Titulo','activo','469','','400','1','4','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.   ','Captura de pantalla 2023-03-31 a la(s) 15.04.43.png'),(1036,'Titulo','activo','472','','400','1','4','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.    ','Captura de pantalla 2023-03-31 a la(s) 15.09.08.png');
/*!40000 ALTER TABLE `contenidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cupones`
--

DROP TABLE IF EXISTS `cupones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cupones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cantidad` int NOT NULL,
  `min_compra` int DEFAULT NULL,
  `tope` int DEFAULT NULL,
  `validez` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cupones`
--

LOCK TABLES `cupones` WRITE;
/*!40000 ALTER TABLE `cupones` DISABLE KEYS */;
INSERT INTO `cupones` VALUES (1,'FIJO200','fijo',200,500,200,'activo'),(2,'nuevo','fijo',100,100,200,'activo'),(4,'10DESCUENT','porcentaje',10,100,10000,'activo'),(5,'local22','fijo',200,100,10000,'activo');
/*!40000 ALTER TABLE `cupones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descargas`
--

DROP TABLE IF EXISTS `descargas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `descargas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tres` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuatro` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cinco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descargas`
--

LOCK TABLES `descargas` WRITE;
/*!40000 ALTER TABLE `descargas` DISABLE KEYS */;
INSERT INTO `descargas` VALUES (1,'Titulo','6','casa-infantil','casa-club','destacado','','infantil.png'),(39,'Titulo','3','casa-infantil','casa-club','destacado','','infantil.png'),(40,'Titulo','3','hoyo-19','casa-club','destacado','','infantil.png'),(41,'Titulo','6','tenis','casa-club','destacado','','infantil.png'),(42,'Titulo','3','tenis','casa-club','destacado','','infantil.png');
/*!40000 ALTER TABLE `descargas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descuentos`
--

DROP TABLE IF EXISTS `descuentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `descuentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descuento` int NOT NULL,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuentos`
--

LOCK TABLES `descuentos` WRITE;
/*!40000 ALTER TABLE `descuentos` DISABLE KEYS */;
INSERT INTO `descuentos` VALUES (1,'promocion',50,'activo');
/*!40000 ALTER TABLE `descuentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle`
--

DROP TABLE IF EXISTS `detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle` (
  `id` int NOT NULL AUTO_INCREMENT,
  `folio` varchar(20) NOT NULL,
  `idprod` varchar(20) NOT NULL,
  `cantidad` varchar(20) NOT NULL,
  `talla` varchar(12345) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=509 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle`
--

LOCK TABLES `detalle` WRITE;
/*!40000 ALTER TABLE `detalle` DISABLE KEYS */;
INSERT INTO `detalle` VALUES (489,'580681','1553','1','grande'),(490,'277056','1553','1','grande'),(491,'190659','1553','1','grande'),(492,'983264','1553','1','grande'),(493,'763838','1553','1','grande'),(494,'704680','1553','1','grande'),(495,'283140','1553','1','grande'),(496,'913995','1553','1','grande'),(497,'862377','1553','1','grande'),(498,'800644','1553','1','grande'),(499,'325227','1553','1','grande'),(500,'365462','1553','2','grande'),(501,'977604','1553','1','grande'),(502,'589501','1553','1','grande'),(503,'375500','1553','1','grande'),(504,'206900','1553','1','grande'),(505,'665297','1553','1','grande'),(506,'918769','1553','1','grande'),(507,'318085','1553','1','grande'),(508,'204306','1553','1','grande');
/*!40000 ALTER TABLE `detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envio`
--

DROP TABLE IF EXISTS `envio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `envio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `precio` int NOT NULL,
  `min_compra` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envio`
--

LOCK TABLES `envio` WRITE;
/*!40000 ALTER TABLE `envio` DISABLE KEYS */;
INSERT INTO `envio` VALUES (1,'activo',150,1000);
/*!40000 ALTER TABLE `envio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estilos`
--

DROP TABLE IF EXISTS `estilos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estilos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estilos`
--

LOCK TABLES `estilos` WRITE;
/*!40000 ALTER TABLE `estilos` DISABLE KEYS */;
/*!40000 ALTER TABLE `estilos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'Logotipo','activo','logotipo','logo-33.png'),(2,'Fondo Logotipo','activo','fondo-logo','fondo-logo-7.png'),(3,'Fondo Whats','activo','fondo-whats','fondo-mail-2.png'),(4,'Fondo Nosotros Ind','activo','fondo-nosotros','fondo-general.png'),(5,'footer fondo','activo','footer-fondo','fondo-general.png'),(6,'footer top','activo','footer-top','footer-top-2.png'),(8,'Mapa','activo','mapa','mapa-club.png'),(9,'Mapa Movil','activo','mapa-movil','mapa-club-movil.png'),(10,'Mapa','','mapa','mapa-2.png'),(11,'Fondo Top Contacto','activo','fondo-top-contacto','logo-33.png'),(12,'Logotipo abajo','activo','logotipo-abajo','logo-33.png'),(13,'fondo-contacto','activo','contacto-top','contacto-top.png'),(14,'imagen contacto','activo','imagen-contacto','contacto-1.png'),(15,'Fondo Amenidades','activo','fondo-amenidades','fondo-amenidades.png'),(16,'icono','activo','icono','icono.ico');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imgx`
--

DROP TABLE IF EXISTS `imgx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imgx` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imgx`
--

LOCK TABLES `imgx` WRITE;
/*!40000 ALTER TABLE `imgx` DISABLE KEYS */;
INSERT INTO `imgx` VALUES (2,'1575','','Captura de pantalla 2023-03-02 a la(s) 1.00.42.png');
/*!40000 ALTER TABLE `imgx` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informacion`
--

DROP TABLE IF EXISTS `informacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `informacion` (
  `id` int NOT NULL,
  `tipo` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `whatsapp` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `direccion` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `correo2` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `mapa` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `link_whatsapp` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email2` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `web` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `horario` varchar(700) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `whatsapps` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefonos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `correos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informacion`
--

LOCK TABLES `informacion` WRITE;
/*!40000 ALTER TABLE `informacion` DISABLE KEYS */;
INSERT INTO `informacion` VALUES (1,'principal','477 379 7488','clubcampestredeleon.com','Jacaranda del Campestre #136<br />\r\nColonia Campo de Golf<br />\r\nBlvd. Campestre, C.P. 37120 <br />\r\nLeón, Guanajuato México            ','477 214 2100','','https://goo.gl/maps/Bdgyn5yjsqtYpn9U7','4773797488','info@clubcampestredeleon.com','www.clubleoncampestre.com','Club Campestre de León','Lunes <br />\r\n6:00 am a 10:00 am <br />\r\nDe martes a viernes <br />\r\n5:00 am a 10:00 pm <br />\r\nSábados<br />\r\n6:00 am a 10:00 pm<br />\r\nDomingos<br />\r\n6:00 am a 5:00 pm               ','                    ','                 ','                    ');
/*!40000 ALTER TABLE `informacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail`
--

LOCK TABLES `mail` WRITE;
/*!40000 ALTER TABLE `mail` DISABLE KEYS */;
INSERT INTO `mail` VALUES (1,'artwebmx@hotmail.com'),(2,'normaadilopez@gmail.com'),(4,'01'),(5,'01'),(6,'artwebmx@hotmail.com'),(7,'info@nautilus360.com'),(8,'danielagtz681@gmail.com '),(9,'vicff08@icloud.com'),(10,'gtlqpa@qq.com'),(11,'uzodye@qq.com'),(12,'oaeuim@qq.com'),(13,'sqpurp@qq.com'),(14,'yuxgvv@qq.com'),(15,'amaki@couxpn.com'),(16,'zkcnjw@qq.com'),(17,'Jezavalav@gmail.com '),(18,'Jezavalav@gmail.com '),(19,'stevescan@24hinbox.com'),(20,'stevescan@24hinbox.com'),(21,'hatty2001@murahpanel.com'),(22,'stevescan@24hinbox.com'),(23,'mbfraser@timhoreads.com'),(24,'watcher2112@ecocryptolab.com'),(25,'Velazcoe895@gmail.com'),(26,'Velazcoe895@gmail.com'),(27,'watcher2112@ecocryptolab.com'),(28,'lasheika509uoi@outlook.com'),(29,'thhphjtdmt.j@silesia.life'),(30,'thbdjddpdm.j@silesia.life'),(31,'nensihendersonxj31@gmail.com'),(32,'tttdbcwbqp.j@silesia.life'),(33,'amelamelialia@yahoo.com'),(34,'ttcqdjmppt.j@silesia.life'),(35,'greener_ricky1334@yahoo.com'),(36,'tdqbjmhhwb.j@silesia.life'),(37,'tddqmttbdq.j@silesia.life'),(38,'tdcwppdpmp.j@silesia.life'),(39,'tdmbcqcjbt.j@silesia.life'),(40,'tbhhdbptjm.j@silesia.life'),(41,'jmehoff@gmailod.com'),(42,'jmehoff@gmailod.com'),(43,'julie_garnerfs4t@outlook.com'),(44,'tchmwhhttt.j@silesia.life'),(45,'tcbccctbwm.j@silesia.life'),(46,'tcwtbjdwdb.j@silesia.life'),(47,'lonnisosae2006@gmail.com'),(48,'tpqjtdcqjq.j@silesia.life'),(49,'bakerroyen@gmail.com'),(50,'tpcdjhwcqt.j@purline.top'),(51,'azizxkill1@setxko.com'),(52,'melissa.blackwell1992@yahoo.com'),(53,'CoUy_generic_fb6eb157_clubleoncampestre.com@serviseantilogin.com'),(54,'VuWK_generic_fb6eb157_clubleoncampestre.com@serviseantilogin.com'),(55,'twqppqqqhb.j@rightbliss.beauty'),(56,'sgouldbv26@gmail.com'),(57,'qxMJ_generic_fb6eb157_clubleoncampestre.com@serviseantilogin.com'),(58,'phillips.kira1989@yahoo.com'),(59,'tamara_vasquez52vn@outlook.com'),(60,'Sirlverio99@gmail.com'),(61,'iykevanel1996@yahoo.com'),(62,'justinas_bailey6456@yahoo.com'),(63,'zuriel.rios@yahoo.com'),(64,'oefgph@qq.com'),(65,'sandrapowell9435@yahoo.com'),(66,'ronaldam_campbellac@outlook.com'),(67,'friedenspfeifen@omggreatfoods.com'),(68,'azizxkill1@setxko.com'),(69,'azizxkill1@setxko.com'),(70,'eliotc518@gmail.com'),(71,'friedenspfeifen@omggreatfoods.com'),(72,'friedenspfeifen@omggreatfoods.com'),(73,'djylianndj252@gmail.com'),(74,'roofa2000@automisly.org'),(75,'kimberly_harrisonqni6@outlook.com'),(76,'xrum001@24red.ru\r\n'),(77,'xrum001@24red.ru\r\n'),(78,'daniel91warnerppw@outlook.com'),(79,'mcconnbenpi637@gmail.com'),(80,'xrum005@24red.ru\r\n'),(81,'xrum005@24red.ru\r\n'),(82,'xrum005@24red.ru\r\n'),(83,'jmehoff@gmailod.com'),(84,'jmehoff@gmailod.com'),(85,'andrelaicaboss@yahoo.com'),(86,'cbennie711@gmail.com'),(87,'rizibriesuj@dont-reply.me'),(88,'rizibriesuj@dont-reply.me'),(89,'rizibriesuj@dont-reply.me'),(90,'romnik2012@code-gmail.com'),(91,'romnik2012@code-gmail.com'),(92,'stevescan@24hinbox.com'),(93,'stevescan@24hinbox.com'),(94,'gHfG_generic_fb6eb157_clubleoncampestre.com@serviseantilogin.com'),(95,'50IW_generic_fb6eb157_clubleoncampestre.com@serviseantilogin.com'),(96,'ilaeelamiuj@dont-reply.me'),(97,'ilaeelamiuj@dont-reply.me'),(98,'ilaeelamiuj@dont-reply.me'),(99,'tzponw@qq.com'),(100,'lezjrsalbuj@dont-reply.me'),(101,'lezjrsalbuj@dont-reply.me'),(102,'lezjrsalbuj@dont-reply.me'),(103,'bzswyy@qq.com'),(104,'geilakline115@gmail.com'),(105,'amaki@couxpn.com'),(106,'amaki@couxpn.com'),(107,'almirawn1991@gmail.com'),(108,'friedenspfeifen@omggreatfoods.com'),(109,'friedenspfeifen@omggreatfoods.com'),(110,'azizxkill1@setxko.com'),(111,'azizxkill1@setxko.com'),(112,'zzljrijabmuj@dont-reply.me'),(113,'zzljrijabmuj@dont-reply.me'),(114,'zzljrijabmuj@dont-reply.me'),(115,'lorraine_kenny8nmh@outlook.com'),(116,'jmehoff@gmailod.com'),(117,'dswywwqiqdkwnax@yahoo.com'),(118,'konradainballardi@gmail.com'),(119,'zabmlsbrmauj@dont-reply.me'),(120,'zabmlsbrmauj@dont-reply.me'),(121,'zabmlsbrmauj@dont-reply.me'),(122,'ksamanhunpbylx@yahoo.com'),(123,'bereimei55@gmail.com'),(124,'wijiofvqwxph@yahoo.com'),(125,'azizxkill1@setxko.com'),(126,'charlzknox@gmail.com'),(127,'zsibrisriruj@dont-reply.me'),(128,'zsibrisriruj@dont-reply.me'),(129,'zsibrisriruj@dont-reply.me'),(130,'peitonhutchinsonrp@gmail.com'),(131,'dario.1955@yahoo.com'),(132,'aelleejg220@gmail.com'),(133,'jmehoff@gmailod.com'),(134,'jmehoff@gmailod.com'),(135,'pbarrt6368@gmail.com'),(136,'diymptwnwyvhjtlx@yahoo.com'),(137,'payneelsdonay@gmail.com'),(138,'blakesivardzj2005@gmail.com'),(139,'rwvpvnwtnff@yahoo.com');
/*!40000 ALTER TABLE `mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modulos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `seccion` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `alto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ancho` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `modulo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `lugar` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `link` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `link_tipo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `acomodo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idioma` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tres` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuatro` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cinco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f2` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `subtitulo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos`
--

LOCK TABLES `modulos` WRITE;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` VALUES (0,'','','','','','','info2','','','','','','','','','','','','400x600-1.png','Captura de pantalla 2023-07-06 a la(s) 1.01.03.png',''),(56,'HORARIO','470','principal','activo','80','4','amenidades','1','','','0','espanol','','','','','','Martes - Viernes<br />\r\n10 am - 8 pm<br />\r\n<br />\r\nSábado y Viernes de consejo <br />\r\n8 am - 8 pm<br />\r\n<br />\r\nDomingo y días festivos<br />\r\n9 am - 6 pm','horario.png','',''),(69,'7 ','481','principal','activo','80','6','amenidades','1','','','2','espanol','','','','','','canchas duras al aire libre','aire-libre.svg','',''),(70,'2','481','principal','activo','80','6','amenidades','1','','','1','espanol','','','','','','canchas duras techadas','techado.svg','',''),(71,'2 ','481','principal','activo','80','6','amenidades','1','','','4','espanol','','','','','','Canchas de arcilla','arcilla.svg','',''),(72,'1','481','principal','activo','80','6','amenidades','1','','','3','espanol','','','','','','Rebotadero y área de Mini tenis','rebote.svg','',''),(73,'','481','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','46 vertical .png','',''),(74,'','481','celular','activo','500','','galeria','1','','','0','espanol','','','','','','','Sin título (500 x 500 px) (500 x 400 px) (1500 x 600 px).png','',''),(75,'','481','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','48 vertical .png','',''),(76,'','481','celular','activo','500','','galeria','1','','','0','espanol','','','','','','','47 vertical .png','',''),(79,'','470','principal','activo','400','6','info2','1','','','1','espanol','','','','','','Descubre en nuestro corazón, el juego central de Casa Infantil, el lugar donde los pequeños desarrollan sus habilidades motoras mientras se divierten. Ofrecemos diversas actividades, desde películas hasta juegos de mesa y emocionantes proyectos de manualidades, estimulando así su creatividad.','casa infantil  500 x 400 px.png','Diseño sin título (30).png',''),(80,'Horario','472','principal','activo','100','4','amenidades','1','','','0','espanol','','','','','','Martes - Domingo<br />\r\n7:00 am - 13:00 pm','tiempo.svg','',''),(81,'horario','469','principal','activo','80','4','amenidades','1','','','0','espanol','','','','','','Martes - Viernes<br />\r\n13:00 pm - 11:00pm<br />\r\n<br />\r\nSábado<br />\r\n12:00pm - 11:00pm<br />\r\n<br />\r\nDomingo<br />\r\n12:00pm-6:00pm<br />\r\n<br />\r\n  ','tiempo.svg','',''),(82,'Horario','484','principal','activo','80','4','amenidades','1','','','0','espanol','','','','','','Lunes<br />\r\n5 am - 10 am<br />\r\n<br />\r\nMartes - Viernes <br />\r\n5 am -10 pm <br />\r\n<br />\r\nSábado <br />\r\n6 am - 5 pm <br />\r\n<br />\r\nDomingo y días festivos <br />\r\n6 am-3 pm','tiempo.svg','',''),(83,'','469','principal','activo','400','6','info2','1','','','1','espanol','','','','','','En su terraza podrás saborear deliciosos platillos y bebidas mientras te relajas en medio de la belleza de nuestros verdes paisajes.','terraza campo de golf  (500 x 500 px).png','terraza campo de golf  (500 x 500 px).png',''),(84,'','469','principal','activo','500','6','info2','2','','','2','espanol','','','','','','Es un verdadero paraíso al aire libre donde solo o acompañado podrás disfrutar de una vista espectacular del campo de golf y la exuberante naturaleza que lo rodea. ','terraza hoyo 19 vista  (500 x 500 px).png','terraza hoyo 19 vista  (500 x 500 px).png',''),(85,'','469','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','Captura de pantalla 2023-07-28 a la(s) 2.01.37.png','',''),(86,'','469','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','hoyo-111.png','l',''),(87,'','472','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','terraza aranciara ok 1500 x 300 px.png','',''),(89,'','472','celular','activo','500','','galeria','1','','','0','espanol','','','','','','','terraza aranciata (400 x 600 px).png','',''),(91,'Horarios','479','principal','activo','80','4','amenidades','1','','','0','espanol','','','','','','Lunes: cerrado<br />\r\nMartes a viernes 9:00 a 21:30 hrs<br />\r\nSábado 9:00 a 19:00 hrs<br />\r\nDomingo/ días festivos 9:00 a 18:00 hrs<br />\r\n<br />\r\nLas actividades dirigidas tienen prioridad sobre las no dirigidas o de simple recreación, favor de consultar el tráfico semanal y agenda del área.','tiempo.svg','',''),(92,'','484','principal','activo','400','400','info2','1','','','2','espanol','','','','','','En Club Campestre, reconocemos la vital importancia de la flexibilidad en tu horario de entrenamiento. Nos enorgullece ofrecer un gimnasio con horarios amplios, abierto incluso los fines de semana y días festivos, para que puedas ajustar tus rutinas a tu vida diaria con comodidad.<br />\r\n<br />\r\nSumérgete en una experiencia de entrenamiento de primer nivel con nosotros. ¡Tu bienestar es nuestra prioridad!','gym 3  500 x 500 px (2).png','gym 3  500 x 500 px (2).png','Área de fuerza'),(93,'','484','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','Galaeria Inferior Seccion Escritorio 1600 x 500 px.png','',''),(95,'','484','celular','activo','500','','galeria','1','','','0','espanol','','','','','','','Galaeria Inferior Seccion Movil  350 x 500 px.png','',''),(97,'HORARIOS','483','principal','activo','80','4','amenidades','1','','','0','espanol','','','','','','Lunes<br />\r\n5:00 am a 10:00 am<br />\r\n<br />\r\nDe martes a viernes<br />\r\n5:00 am a 10:00 pm<br />\r\n<br />\r\nSábados<br />\r\n6:00 am a 8:00 pm<br />\r\n<br />\r\nDomingos<br />\r\n6:00 am a 6:00 pm','tiempo.svg','',''),(98,'','483','principal','activo','400','','info2','1','','','1','espanol','','','','','','Experimente una convivencia saludable en nuestro entorno relajante, equipado con cómodos camastros, mesas sombreadas y acogedoras salas. Nuestros guardavidas certificados en primeros auxilios aseguran su seguridad y tranquilidad mientras disfruta de momentos divertidos. ','Alberca niñas  500 x 500 px (3).png','Alberca niñas  500 x 500 px (3).png',''),(99,'','483','principal','activo','400','','info2','2','','','2','espanol','','','','','','Explore nuestras clínicas guiadas diseñadas para niños y adultos, una exclusiva oportunidad para que nuestros socios mejoren sus habilidades en el agua y optimicen su disfrute en nuestra piscina.','Captura de pantalla 2023-04-13 a la(s) 23.57.57.png','Captura de pantalla 2023-04-13 a la(s) 23.58.00.png',''),(100,'','483','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','Captura de pantalla 2023-04-14 a la(s) 0.03.48.png','',''),(102,'','483','celular','activo','500','','galeria','1','','','0','espanol','','','','','','','Captura de pantalla 2023-04-14 a la(s) 0.03.51.png','',''),(106,'','482','principal','activo','400','','info2','1','','','2','espanol','','','','','','<br />\r\nEn Club Campestre, la seguridad es nuestra máxima prioridad. Nuestras albercas cuentan con la supervisión constante de guardavidas certificados en primeros auxilios. También brindamos clínicas guiadas para niños y adultos, proporcionando la oportunidad de perfeccionar técnicas y disfrutar al máximo de la natación.','adorable-bebe-nadando-agua_483949-5647.jpg','adorable-bebe-nadando-agua_483949-5647.jpg',''),(109,'','482','escritorio','activo','500','','galeria','1','','','0','espanol','','','','','','','Captura de pantalla 2023-04-14 a la(s) 0.12.56.png','',''),(111,'','482','celular','activo','500','','galeria','1','','','0','espanol','','','','','','','Captura de pantalla 2023-04-14 a la(s) 0.13.09.png','',''),(124,'Hoyo 19 Menu','469','principal','activo','400','4','descargas','1','https://cclrestaurante.wixsite.com/my-site/hoyo-19','_blanck','0','espanol','','','','','','','Captura de pantalla 2023-04-20 a la(s) 13.25.07.png','',''),(125,'Hoyo 19 Vinos - Menu','469','principal','activo','400','4','descargas','1','https://cclrestaurante.wixsite.com/my-site/vinos-hoyo-19','_blanck','0','espanol','','','','','','','Captura de pantalla 2023-04-20 a la(s) 13.29.44.png','',''),(128,'','470','principal','activo','450','','info2','2','','','3','espanol','','','','','','¡En Casa Infantil, cada día es una aventura esperando ser explorada!  Para su comodidad, contamos con Baños con regaderas y lockers.','pagina web 2 500 x 400 px.png','pagina web 2 500 x 400 px.png',''),(129,'HORARIOS','482','principal','activo','80','4','amenidades','1','','','1','espanol','','','','','','Lunes <br />\r\n5 am 10 am<br />\r\n<br />\r\nMartes – viernes <br />\r\n5 am -10 pm <br />\r\n<br />\r\nSábado<br />\r\n6 am - 8 pm<br />\r\n<br />\r\nDomingo <br />\r\n6am - 6 pm<br />\r\n','tiempo.svg','',''),(131,'','464','principal','activo','500','','info2','1','','','2','espanol','','','','','','Destacamos con orgullo nuestro recién remodelado campo de golf de 18 hoyos, reconocido internacionalmente. Además, disfruta de una completa casa club y unas instalaciones insuperables. En nuestro club, nos dedicamos a proporcionar momentos extraordinarios para los amantes del deporte y aquellos que buscan un bienestar total. ','pagina web golf 500 x 400 px (1).png','pagina web golf 500 x 400 px (1).png',''),(132,'','482','principal','activo','600','','info2','1','','','1','espanol','','','','','','Sumérgete en nuestra alberca con temperatura controlada para disfrutar de comodidad durante todo el año. Con iluminación óptima para una visibilidad perfecta, este espacio garantiza seguridad mientras practicas y entrenas. Con 6 carriles anti turbulencia, bancos de salida y banderines para señal de llegada, nuestro entorno está diseñado para elevar tus habilidades en la natación y competir al más alto nivel. Descubre el lugar perfecto para perfeccionar tu rendimiento acuático.','pexels-heart-rules-711187.jpg','pexels-heart-rules-711187.jpg',''),(143,'Horarios','473','principal','activo','100','4','amenidades','1','','','0','espanol','','','','','','Martes a viernes<br />\r\n12 – 8 pm<br />\r\nSábados y Domingos<br />\r\n9 am a 5 pm<br />\r\n','tiempo.svg','',''),(144,'Horarios','475','principal','activo','100','4','amenidades','1','','','0','espanol','','','','','','Martes a Jueves <br />\r\n7 am – 10 pm<br />\r\nViernes <br />\r\n7 am  a 6 pm<br />\r\nSábados y Domingos<br />\r\n7 am a 5 pm','tiempo.svg','',''),(145,'Horarios','474','principal','activo','100','4','amenidades','1','','','0','espanol','','','','','','Lunes de <br />\r\n7 am a 11pm<br />\r\nMartes a Jueves<br />\r\n6 am a 10pm<br />\r\nSábados y Domingo<br />\r\n7 am a 5 pm','tiempo.svg','',''),(146,'Horarios ','478','principal','activo','100','4','amenidades','1','','','0','espanol','','','','','','Starter y Práctica<br />\r\n <br />\r\nMartes a Jueves<br />\r\n7:00 am a 9:30 pm<br />\r\n<br />\r\nViernes<br />\r\n7:00 am a 6:00 pm<br />\r\n<br />\r\nSábado<br />\r\n7:00 am a 5:00 pm<br />\r\n<br />\r\nDomingo de <br />\r\n7:00 am a 4:00 pm','tiempo.svg','',''),(147,'','477','principal','activo','500','','info2','1','','','1','espanol','','','','','','Descubre la excelencia en la perfección de tu técnica en nuestras incomparables instalaciones de práctica. Con cuatro plataformas de mesas de práctica y nueve target greens, todos iluminados para ofrecerte la oportunidad de mejorar incluso en las horas nocturnas. Además, contamos con un green de práctica exclusivo para el putter y una extensa zona de approach de 20 yardas con su respectivo chipping green.<br />\r\n<br />\r\nNuestros Tees, Fairways y Roughs están cubiertos con la resistente hierba Kikuyu, proporcionando un escenario natural y hermoso que realza tu experiencia de práctica. Descubre un espacio diseñado para elevar tu juego a nuevos niveles.','pagina web golf 2 ( 500 x 500 ).png','pagina web golf 2 ( 500 x 500 ).png',''),(148,'','472','escritorio','activo','500','','galeria','','','','1','espanol','','','','','','','aranciata-baner-1.png','',''),(149,'','472','celular','activo','500','','galeria','','','','1','espanol','','','','','','','aranciata-baner-1-mbobil.png','',''),(151,'','469','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-07-28 a la(s) 2.01.43.png','',''),(153,'','469','celular','activo','500','','galeria','','','','0','espanol','','','','','','','hoyo-19-3.png','',''),(154,'','464','principal','activo','500','','info2','0','','','1','espanol','','','','','','Tanto socios como visitantes son invitados a sumergirse en un entorno natural espectacular que armoniza a la perfección deporte, relajación y bienestar. En Club Campestre de León, descubrirás una experiencia única donde cada momento se convierte en una oportunidad para disfrutar de un estilo de vida distinguido.','pagina web golf 1 500 x 400 px.png','pagina web golf 1 500 x 400 px.png',''),(155,'','470','principal','activo','400','','info2','0','','','2','espanol','','','','','','Explora nuestra terraza y hermoso jardín en Casa Infantil, equipados con juegos al aire libre, areneros, columpios, resbaladillas y paredes para escalar. Los niños pueden disfrutar de emocionantes momentos bajo el sol, fomentando la socialización con otros pequeños.','jardin central (500 x 500 px) (1).png','jardin central (500 x 500 px) (1).png',''),(157,'','470','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','casa infantil 1 1500 x 300 px.png','',''),(158,'','470','celular','activo','500','','galeria','','','','0','espanol','','','','','','','casa infantil 1 (400 x 600 px).png','',''),(159,'','470','celular','activo','500','','galeria','','','','0','espanol','','','','','','','casa infantil (400 x 600 px).png','',''),(160,'','479','principal','activo','500','','info2','0','','','3','espanol','','','','','','Contamos con los siguientes servicios: <br />\r\n<br />\r\nClínicas de niños y niñas a partir de los 5 años cumplidos. <br />\r\nClínicas para adolescentes de 11 a 14 años.<br />\r\nClínicas para jóvenes de 15 y 16 años.<br />\r\nParticipación de las categorías en torneos locales y nacionales. <br />\r\nTorneo categoría libre para jóvenes y adultos.<br />\r\nApartados de cancha para partidos de convivencia.','8.png','8.png','servicios'),(161,'','479','principal','activo','500','','info2','0','','','2','espanol','','','','','','No importa tu edad o nivel de habilidad, en Club Campestre, el fútbol es para todos. Ofrecemos una variedad de servicios, desde clínicas para niños y niñas a partir de los 5 años, hasta clínicas para adolescentes y jóvenes. Nuestras categorías participan en torneos locales y nacionales, y también organizamos torneos de categoría libre para jóvenes y adultos. Además, puedes reservar la cancha para partidos de convivencia con amigos  ','9.png','9.png',''),(162,'','479','principal','activo','500','','info2','0','','','1','espanol','','','','','','Nuestra cancha tiene unas dimensiones de 51.9 metros de largo por 34.3 metros de ancho y está equipada con pasto sintético de alta calidad que garantiza un juego uniforme y emocionante. Las porterías, con redes de 5.4 metros de largo por 2.2 metros de altura, son el blanco perfecto para los goles de sus sueños.<br />\r\n<br />\r\nPara la comodidad de los jugadores, hemos instalado bancas techadas y un área de tribunas para los espectadores que deseen animar a sus equipos favoritos. Además, la cancha está iluminada, lo que permite disfrutar de partidos emocionantes incluso después de la puesta de sol.','futbol-1.png','futbol-1.png',''),(163,'','480','principal','activo','500','','info2','0','','','1','espanol','','','','','','Experimenta sesiones enriquecedoras y efectivas con nuestros instructores altamente capacitados en Club Campestre. Estamos comprometidos a ayudarte a alcanzar tus objetivos, ya sea aumentar tu fuerza, mejorar tu flexibilidad, perder peso o simplemente disfrutar de un momento de relajación.<br />\r\n<br />\r\nEn nuestros salones fitness, ofrecemos opciones para todos los gustos y necesidades. Creemos firmemente que mantenerse activo es esencial para lograr una vida equilibrada. Descubre cómo podemos ser parte de tu viaje hacia una vida más saludable y activa.','pagina web  500 x 500 px (1).png','pagina web  500 x 500 px (1).png',''),(165,'','480','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 19.43.49.png','',''),(166,'','480','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 19.46.04.png','',''),(167,'','480','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 19.35.41.png','',''),(168,'','480','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 19.38.40.png','',''),(169,'','481','principal','activo','400','','info2','0','','','2','espanol','','','','','','Servicios con costo: <br />\r\nAcademia de tenis<br />\r\nMini tenis<br />\r\nFormación<br />\r\nDesarrollo<br />\r\nAlta competencia<br />\r\n<br />\r\nLas clínicas son de acuerdo a edad y nivel, por lo que te pedimos consultar horarios.','Sin título (500 x 500 px) (500 x 400 px).png','Sin título (500 x 500 px) (500 x 400 px).png',''),(170,'','481','principal','activo','400','','info2','0','','','4','espanol','','','','','','Servicios adicionales:<br />\r\nClases particulares<br />\r\nPeloteos<br />\r\nServicio de Bolero<br />\r\n<br />\r\nLas clínicas son de acuerdo a edad y nivel por lo que te pedimos consultar horarios','32.png','32.png',''),(171,'','481','principal','activo','400','','info2','0','','','3','espanol','','','','','','Servicios sin costo: <br />\r\nClínicas Club<br />\r\nClínicas Damas<br />\r\nClínicas Caballeros<br />\r\nClínicas Niños de 7 a 10 años<br />\r\nClínicas Adolescentes de 11 a 14 años<br />\r\n<br />\r\nLas clínicas son de acuerdo a edad y nivel, por lo que te pedimos consultar horarios.','tenis clinica  500 x 500 px  (1).png','tenis clinica  500 x 500 px  (1).png',''),(172,'','481','principal','activo','500','','info2','0','','','1','espanol','','','','','','Ya sea que estés buscando un lugar para divertirte con un partido amistoso o estés comprometido en mejorar tu juego, nuestras canchas son el espacio ideal. Abiertas a todos, independientemente de tu nivel de habilidad o experiencia','37.png','37.png',''),(173,'Horarios','481','principal','activo','80','5','amenidades','','','','5','espanol','','','','','','Lunes<br />\r\ncerrado<br />\r\n<br />\r\nMartes a viernes <br />\r\n7:00 a 22:00 hrs<br />\r\n<br />\r\nSábado <br />\r\n7:00 a 18:00 hrs<br />\r\n*Sábado 18:00 a 22:00 hrs con previa reservación, para encendido de luces<br />\r\n<br />\r\nDomingo <br />\r\n9:00 a 18:00 hrs','horario.png','',''),(174,'','483','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','banner-alberca-1.png','',''),(175,'','483','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 23.09.09.png','',''),(177,'','484','principal','activo','400','','info2','0','','','1','espanol','','','','','','Explora un mundo de posibilidades para tus rutinas de entrenamiento con nuestra amplia gama de máquinas de peso libre y peso integrado. Nuestros instructores profesionales, altamente capacitados, están a tu disposición para proporcionarte orientación experta y valiosos consejos que maximizarán tu rendimiento. <br />\r\nAdemás, si buscas un enfoque más personalizado, ofrecemos servicios de instructores personalizados. Estos profesionales trabajarán contigo de manera individual para adaptar tu rutina a tus metas específicas, asegurando que cada sesión de entrenamiento sea efectiva y satisfactoria.<br />\r\nEn nuestro compromiso con tu éxito fitness, te ofrecemos opciones versátiles y servicios de calidad.','Gym 2 500 x 500 px (2).png','Gym 2 500 x 500 px (2).png',''),(178,'','471','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','club-1.png','',''),(179,'','471','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','club-2.png','',''),(180,'','471','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 23.35.09.png','',''),(181,'','471','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 23.34.49.png','',''),(182,'','471','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 23.35.20.png','',''),(183,'','471','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 23.35.28.png','',''),(184,'','471','celular','activo','500','','galeria','','','','0','espanol','','','','','','','Captura de pantalla 2023-10-02 a la(s) 23.35.36.png','',''),(185,'','477','principal','activo','500','','info2','0','','','2','espanol','','','','','','Sumérgete en la maravilla natural de nuestro campo de golf, una auténtica joya enriquecida por más de 4,900 árboles de 28 especies diferentes que embellecen cada rincón, proporcionando una experiencia de golf excepcional.<br />\r\n<br />\r\nEn nuestro firme compromiso con la sostenibilidad, implementamos prácticas ejemplares. Todo nuestro sistema de riego se abastece de agua reciclada, gracias a una avanzada planta de tratamiento con una impresionante capacidad para procesar 2.6 millones de litros diarios de agua tratada. Descubre la fusión perfecta entre la naturaleza exuberante y la responsabilidad ambiental en cada rincón de nuestro campo.','pagina web golf 4 500 x 400 px.png','pagina web golf 4 500 x 400 px.png',''),(186,'','477','principal','activo','500','','info2','0','','','3','espanol','','','','','','En nuestra búsqueda constante de la excelencia en el golf y el respeto por el medio ambiente, presentamos nuestro campo de golf profesional de 18 hoyos. Con una extensión de juego de 6,900 yardas, este escenario es la combinación perfecta entre deporte y sustentabilidad. Descubre cómo fusionamos la pasión por el golf con el compromiso ambiental en cada rincón de nuestro campo.','pagina web golf 5 500 x 400 px.png','pagina web golf 5 500 x 400 px.png',''),(187,'','477','principal','activo','500','','info2','0','','','4','espanol','','','','','','Reflejamos nuestro firme compromiso con la sustentabilidad a través de la creación de arroyos con agua permanente y arroyos secos de captación pluvial en todo nuestro campo. La adaptación de nuestros greens a los estándares de la USGA y la renovación integral de nuestros búnkeres no solo elevan la calidad del juego, sino que también facilitan el mantenimiento y la conservación, haciéndolos más sostenibles. Descubre cómo cada detalle contribuye a la armonía entre nuestro compromiso ambiental y la excelencia en el golf.','pagina web golf 6 500 x 400 px.png','pagina web golf 6 500 x 400 px.png',''),(211,'titulo','518','principal','activo','500','','info2','0','','','1','espanol','','','','','','vcbxccbv','500x500.png','500x500.png','subtitulo'),(212,'nombre','518','principal','activo','150','6','amenidades','','','','0','espanol','','','','','','vcbxxc','aire-libre.svg','',''),(213,'nombre 2','518','principal','activo','80','3','amenidades','','','','0','espanol','','','','','','xcv ','arcilla.svg','',''),(214,'','518','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','1500x600-Banner.png','',''),(215,'','518','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','1500x600-Banner.png','',''),(217,'','518','escritorio','activo','','','pop','','','','0','','','','','','','','500x500.png','',''),(220,'','470','escritorio','activo','500','','galeria','','','','0','espanol','','','','','','','casa infantil  1500 x 300 px (1).png','',''),(222,'','471','escritorio','activo','','','pop','','','','0','','','','','','','','Pantalla horizontal - Torneo anual de golf 2024.jpg','',''),(230,'Entrena al Aire Libre ','486','principal','activo','500','','info2','0','','','1','espanol','','','','','','No te pierdas esta Increíble Clase en la Terraza de la Alberca Recreativa ¡Te esperamos! ','WhatsApp Image 2024-01-12 at 09.46.53.jpeg','WhatsApp Image 2024-01-12 at 09.46.53.jpeg','Super Clase de Box '),(231,'Deliciosos Antojitos Mexicanos ','486','principal','activo','500','','info2','0','','','1','espanol','','','','','','Disfruta del delicioso sabor de la Cenaduría Insurgentes. Te esperamos en la Terraza del Snack Palmas','WhatsApp Image 2024-01-30 at 10.42.45.jpeg','WhatsApp Image 2024-01-30 at 10.42.45.jpeg','Cenaduria Insurgentes '),(232,'¡Los 2 KM más veloces!','486','principal','activo','500','','info2','0','','','1','espanol','','','','','','Inscríbete en la Coordinación de Acuática marcando al teléfono 4772142100 ext 727 ¡Te esperamos!','WhatsApp Image 2024-02-06 at 14.02.19.jpeg','WhatsApp Image 2024-02-06 at 14.02.19.jpeg','Sprinter´s 4X4 '),(233,'','478','escritorio','activo','','','pop','','','','0','','','','','','','','WhatsApp Image 2024-01-05 at 12.15.56.jpeg','',''),(234,'','470','escritorio','activo','','','pop','','','','0','','','','','','','','WhatsApp Image 2024-02-08 at 13.32.04.jpeg','',''),(235,'','486','escritorio','activo','','','pop','','','','0','','','','','','','','calendario eventos febrero.jpeg','',''),(236,'','464','escritorio','activo','','','pop','','','','0','','','','','','','','WhatsApp Image 2024-01-30 at 10.53.46.jpeg','',''),(237,'','482','escritorio','activo','','','pop','','','','0','','','','','','','','WhatsApp Image 2024-02-06 at 14.02.19.jpeg','',''),(238,'','471','escritorio','activo','','','pop','','','','0','','','','','','','','WhatsApp Image 2024-01-30 at 08.52.58.jpeg','','');
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tres` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuatro` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cinco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idioma` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Titulo','6','casa-infantil','casa-club','destacado','','','infantil.png'),(39,'Titulo','3','casa-infantil','casa-club','destacado','','','infantil.png'),(40,'Titulo','3','hoyo-19','casa-club','destacado','','','infantil.png'),(41,'Titulo','6','tenis','casa-club','destacado','','','infantil.png'),(42,'Titulo','3','tenis','casa-club','destacado','','','infantil.png');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos`
--

DROP TABLE IF EXISTS `pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pagos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuenta` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tarjeta` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `paypal` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
INSERT INTO `pagos` VALUES (1,'BBVA  Bancomer','01 2097 0046 8482 7130','2097 0046 8482 7130','careli.landeros@gmail.com');
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `total` varchar(20) NOT NULL,
  `envio` int DEFAULT NULL,
  `descuento` int DEFAULT NULL,
  `precio_final` int DEFAULT NULL,
  `folio` varchar(20) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=490 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (470,'2023-01-08','Pedro Gutierrez','pedro_gutz@hotmail.com','',150,0,350,'580681','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(471,'2023-01-08','Pedro Gutierrez','sex@n360host.com','',150,0,350,'277056','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(472,'2023-01-08','Pedro Gutierrez','pedro_gutz@hotmail.com','',150,0,350,'190659','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(473,'2023-01-08','Pedro Gutierrez','pedro_gutz@hotmail.com','',150,0,350,'983264','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(474,'2023-01-08','Pedro Gutierrez','info@nautilus360.com','',150,0,350,'763838','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(475,'2023-01-08','Pedro Gutierrez','informacion@nautilus360.com','',150,0,350,'704680','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(476,'2023-01-08','Pedro Gutierrez','informacion@nautilus360.com','',150,0,350,'283140','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(477,'2023-01-08','Pedro 3','sex@n360host.com','',150,0,350,'913995','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(478,'2023-01-08','Pedro Gutierrez','informacion@nautilus360.com','',150,0,350,'862377','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(479,'2023-01-08','Pedro Gutierrez','informacion@nautilus360.com','',150,0,350,'800644','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(480,'2023-01-08','Pedro Gutierrez','sex@n360host.com','',150,0,350,'325227','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(481,'2023-01-08','Pedro Gutierrez','elijp1@gmail.com','',150,0,550,'365462','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(482,'2023-01-08','Pedro Gutierrez','elijp1@gmail.com','',150,0,350,'977604','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(483,'2023-01-08','Pedro Gutierrez','artwebmx@hotmail.com','',150,0,350,'589501','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(484,'2023-01-08','Pedro Gutierrez','informacion@nautilus360.com','',150,0,350,'375500','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(485,'2023-01-08','Pedro Gutierrez','elijp1@gmail.com','',150,0,350,'206900','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(486,'2023-01-08','Pedro Gutierrez','elijp1@gmail.com','',150,0,350,'665297','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(487,'2023-01-08','Pedro Gutierrez','elijp1@gmail.com','',150,0,350,'-1','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(488,'2023-01-08','Pedro Gutierrez','elijp1@gmail.com','',150,0,350,'918769','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE'),(489,'2023-01-08','Pedro Gutierrez','elijp1@gmail.com','',150,0,350,'318085','+523315763278','industria 656','Guadalajara','44380','Pago PENDIENTE');
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pop`
--

DROP TABLE IF EXISTS `pop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pop` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tres` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuatro` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cinco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f1` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pop`
--

LOCK TABLES `pop` WRITE;
/*!40000 ALTER TABLE `pop` DISABLE KEYS */;
INSERT INTO `pop` VALUES (1,'','6','tenis','','','','infantil.png'),(39,'','3','casa-infantil','','','','infantil.png'),(40,'','3','hoyo-19','','','','infantil.png');
/*!40000 ALTER TABLE `pop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(1000) NOT NULL,
  `dos` varchar(1000) NOT NULL,
  `tres` varchar(1000) NOT NULL,
  `cuatro` varchar(100) NOT NULL,
  `cinco` varchar(1000) NOT NULL,
  `seis` varchar(1000) NOT NULL,
  `siete` varchar(100) NOT NULL,
  `ocho` varchar(23) NOT NULL,
  `nueve` varchar(100) NOT NULL,
  `diez` varchar(100) NOT NULL,
  `once` varchar(1000) NOT NULL,
  `doce` varchar(100) NOT NULL,
  `trece` varchar(100) NOT NULL,
  `catorce` varchar(1000) NOT NULL,
  `quince` varchar(1000) NOT NULL,
  `dieciseis` varchar(1000) NOT NULL,
  `diecisiete` varchar(1000) NOT NULL,
  `dieciocho` varchar(1000) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `f1` varchar(1000) NOT NULL,
  `f2` varchar(10000) NOT NULL,
  `f3` varchar(250) NOT NULL,
  `f4` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `pdfdos` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1582 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1581,'Broca HSS Recta','activo','RDD01','HSS','Refena Drill','brocas','linea','','','1/64','','52.39','1000','1','','','','','• Geometría estándar para aplicación universal hasta 1000 N/mm²<br />\r\n• Broca helicoidal con geometría estándar universal.<br />\r\n• Excelentes propiedades de uso múltiple y patrón de corte preciso.<br />\r\n• Uso universal: reduce los costes en herramientas y aumenta la flexibilidad<br />\r\n• El tratamiento con vapor garantiza una buena adherencia del refrigerante.','BROCA HSS RECTA.png','','','','BROCA HSS RECTA.pdf','','principal'),(1580,'Tuerca Hexagonal','activo','2020','Galvanizado','Astromex','tornilleria','linea','','','300','','1.65','10','1','','','','','Tornillo ','5858.png','','','','','','principal');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redes`
--

DROP TABLE IF EXISTS `redes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `redes` (
  `Id` int NOT NULL,
  `Foto` varchar(1000) NOT NULL,
  `Link` varchar(1000) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Red` varchar(100) NOT NULL,
  `Nombre` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redes`
--

LOCK TABLES `redes` WRITE;
/*!40000 ALTER TABLE `redes` DISABLE KEYS */;
INSERT INTO `redes` VALUES (0,'<spam class=\"icon-facebook2\"></spam>','https://www.facebook.com/clubcampestredeleon','inactivo','Facebook','m'),(3,'<spam class=\"icon-youtube\"></spam>','https://www.youtube.com/','inactivo','You Tube','you'),(2,'<spam class=\"icon-instagram\"></spam>','https://www.instagram.com/clubcampestreleon/','activo','Instagram','v'),(4,'<spam class=\"icon-linkedin\"></spam>','https://www.linkedin.com/','inactivo','LikedIn','v'),(5,'<spam class=\"icon-twitter\"></spam>','https://www.twetter.com','inactivo','Twitter',''),(6,'<spam class=\"icon-google\"></spam>','https://www.google.com','inactivo','Google+',''),(7,'<spam class=\"icon-tick-tok\"></spam>','https://www.tiktok.com/@clubcampestredeleon','activo','Tiktok','');
/*!40000 ALTER TABLE `redes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secciones`
--

DROP TABLE IF EXISTS `secciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `secciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uno` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `dos` varchar(1000) NOT NULL,
  `tres` varchar(1000) NOT NULL,
  `cuatro` varchar(100) NOT NULL,
  `cinco` varchar(1000) NOT NULL,
  `seis` varchar(1000) NOT NULL,
  `siete` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `ocho` varchar(1000) NOT NULL,
  `nueve` varchar(100) NOT NULL,
  `diez` varchar(100) NOT NULL,
  `once` varchar(1000) NOT NULL,
  `doce` varchar(100) NOT NULL,
  `trece` varchar(100) NOT NULL,
  `catorce` varchar(1000) NOT NULL,
  `quince` varchar(1000) NOT NULL,
  `dieciseis` varchar(1000) NOT NULL,
  `diecisiete` varchar(1000) NOT NULL,
  `dieciocho` varchar(1000) NOT NULL,
  `descripcion` varchar(10000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `f1` varchar(1000) NOT NULL,
  `f2` varchar(10000) NOT NULL,
  `f3` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=519 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secciones`
--

LOCK TABLES `secciones` WRITE;
/*!40000 ALTER TABLE `secciones` DISABLE KEYS */;
INSERT INTO `secciones` VALUES (464,'NOSOTROS','activo','si','menu_derecho','editable','seccion.php?cve=club-campestre-de-leon','¿QUIÉNES SOMOS?','','6','','550','nosotros','espanol','','','','','club-campestre-de-leon','Un prestigioso Club de Golf, Deportivo y Social en la ciudad de León, Guanajuato. Donde la privacidad y la distinción se entrelazan de manera perfecta, creando una armonía única. Nos enorgullece ofrecer a nuestros socios una experiencia exclusiva, donde la excelencia en el servicio se combina con la pasión por el deporte y la construcción de una comunidad sólida.<br />\r\n<br />\r\n                  ','nosotros-8-index.png','Casa club (1500 x 600 px).png','nosotros-2.png'),(470,'CASA INFANTIL','activo','no','casa-club','editable','seccion.php?cve=casa-infantil','CASA INFANTIL','','4','','400','promocion','espanol','','','','','casa-infantil','Bienvenidos a Casa Infantil, donde reconocemos la trascendental importancia de proporcionar a los niños un espacio en el cual puedan aprender y disfrutar simultáneamente en un entorno seguro y estimulante.   ','casa infantil   (300 x 500 px) (1).png','Diseño sin título (31).png','casa infantil 500 x 500 px).png'),(477,'CAMPO GOLF','activo','si','golf','editable','seccion.php?cve=campo-golf','CAMPO GOLF','','4','','500','arriba','espanol','','','','','campo-golf','Sumérgete en una narrativa rica y en constante evolución que es la historia de nuestro campo. Desde sus modestos inicios en 1960 con los primeros 9 hoyos, hasta la expansión del diseño original en 1986 con la incorporación de los segundos nueve hoyos, ideados por el renombrado arquitecto Joe Finger.<br />\r\n<br />\r\nEl año 2007 marcó un hito en nuestra evolución con la transformación integral del campo liderada por el prestigioso diseñador David Fleming. Ahora, en el 2023, nos encontramos inmersos en un emocionante proceso de modernización, guiados por un ambicioso plan maestro a largo plazo desarrollado por Alarcón & Morrish. Este plan asegura un futuro aún más prometedor para nuestras instalaciones. ','campo de golf   (300 x 500 px).png','pagina web campo de golf 1500 x 300 px.png','pagina web  golf 500 x 500 px (1).png'),(478,'CLINICA','activo','si','golf','editable','seccion.php?cve=golf-clinica','CLINICAS DE GOLF','','4','','500','arriba','espanol','','','','','golf-clinica','Un espacio soñado donde la práctica, el aprendizaje y el intercambio de experiencias se fusionan para ofrecerte una oportunidad única donde perfeccionar tu juego y disfrutar del ambiente excepcional de nuestro club.<br />\r\n<br />\r\nDestacamos la diversidad de opciones para todos los amantes del golf:<br />\r\n<br />\r\nClínicas Gratuitas:<br />\r\nPara damas.<br />\r\nPara caballeros.<br />\r\nPara niños.<br />\r\n<br />\r\nAcademia de Golf Infantil (Con Costo): Dirigida a edades de 6 a 18 años.<br />\r\n   ','clinicas  320 x 500 px.png','clinica 1500 x 300 px (2).png','clinica jovenes golf  500 x 500 px.png'),(471,'TORNEOS','activo','si','golf','editable','seccion.php?cve=torneos-de-golf','','','4','','500','arriba','espanol','','','','','torneos-de-golf','En el Club Campestre, fusionamos emoción y prestigio en cada swing. Nos enaltece ser la sede de destacados torneos de golf que definen la excelencia en la región.<br />\r\nNuestro campo, diseñado meticulosamente, está preparado para desafiar a los golfistas más hábiles. Sumérgete en la competencia y la diversión en cada hoyo. ¡Únete a nosotros para vivir momentos emocionantes!    ','torneos ok  320 x 500 px.png','torneo golf 4  1500 x 300 px (2).png','torneos  500 x 500 px.png'),(472,'ROTTETI','activo','si','restaurants','editable','seccion.php?cve=rotteti-restaurante','Rotteti','','4','','500','restaurant','espanol','','','','','rotteti-restaurante','En nuestro acogedor restaurante, te extendemos una cordial invitación para deleitarte con exquisitos desayunos enriquecidos con el inconfundible toque lagunense de Rotteti, la joya culinaria de Lagos de Moreno desde 1992 o disfrutar de una placentera taza de café matutina en grata compañía. Además, nuestra encantadora terraza ofrece vistas espectaculares del campo de golf, la cascada y los exuberantes espacios verdes que abrazan nuestro exclusivo club.      ','DSC09999.jpg','terraza aranciata.png','DSC04719.jpg'),(469,'HOYO 19','activo','si','restaurants','editable','seccion.php?cve=hoyo-19','HOYO 19','','4','','500','restaurant','espanol','','','','','hoyo-19','Un lugar ideal para disfrutar de comidas o cenas en familia, reuniones de negocios o momentos agradables con amigos. Deléitate con carnes a la parrilla, pastas artesanales y empanadas que evocan la tradición culinaria, acompañadas de destilados, cervezas artesanales y cautivadores cócteles.        ','pagina web 3 (300 x 500 px).png','pagina web 1500 x 600 (1).png','Diseño sin título 1 (27).png'),(473,'PALMAS','activo','si','restaurants','editable','seccion.php?cve=palmas','PALMAS','','4','300','400','arriba','espanol','','','','','palmas','Una acogedora terraza para disfrutar en familia con servicio en zona techada y al aire libre, ubicada alrededor de la alberca recreativa y chapoteadoro. Dónde podrás disfrutar de ricos almuerzos y comidas, con platillos como pastas, sopas, mariscos y variedad de snack.','Captura de pantalla 2023-03-31 a la(s) 15.22.48.png','palmas-top.png','Captura de pantalla 2023-03-31 a la(s) 15.23.49.png'),(474,'GYM SNACK','activo','si','restaurants','editable','seccion.php?cve=restaurant-gym','GYM SNACK','','4','300','500','arriba','espanol','','','','','restaurant-gym','Un espacio donde encontrarás alimentos fitness en frío, ideales para seguir cuidándote. Disfruta de sus deliciosos baguettes, tortas, ensaladas, fruta, suplementos, proteínas y batidos que te ayudarán en tu objetivo diario de comer rico y a la vez saludable. ','snak-gym-1.png','snack-gym-top.png','snak-gym-1.png'),(475,'STARTER','activo','si','restaurants','editable','seccion.php?cve=starter','STARTER','','4','300','400','arriba','espanol','','','','','starter','Estratégicamente ubicado entre la zona de práctica y el putting green, te invitamos a disfrutar de una experiencia única. Desde las primeras horas del día, puedes saborear deliciosos desayunos y comidas al aire libre, junto con una amplia selección de snacks. Todo esto mientras contemplas una vista panorámica impresionante del campo de golf.','Captura de pantalla 2023-03-31 a la(s) 15.37.35.png','Sin título (1500 x 300 px) (1500 x 600 px).png','started-1.png'),(479,'FUTBOL','activo','si','casa-club','editable','seccion.php?cve=futbol','FUTBOL','','4','300','500','arriba','espanol','','','','','futbol','En Club Campestre la pasión por el deporte se encuentra con la diversión y el juego en equipo. Nuestra cancha está diseñada para entrenamientos, práctica y recreación de fútbol,<br />\r\ny cuenta con características que la convierten en el lugar perfecto para disfrutar de este deporte.<br />\r\n<br />\r\n  ','futbol 320 x 500 px.png','futbol 1500 x 300 px (2).png','7.png'),(480,'FITNESS','activo','si','casa-club','editable','seccion.php?cve=fitness','FITNESS','','4','','500','especial','espanol','','','','','fitness','Descubre en Club Campestre un exclusivo espacio de fitness diseñado para satisfacer todas las necesidades de nuestros socios en su búsqueda de un estilo de vida más saludable y activo.<br />\r\n<br />\r\nNuestros salones fitness completamente equipados son el escenario perfecto para una variedad de clases, desde BodyPump, BodyAttack, y BodyCombat hasta TRX, Box, HIIT, Yoga, Pilates, Barre, CORE, Ritmos Latinos, BellyDance, Flamenco, y más. Sea cual sea tu nivel de condición física o preferencia, encontrarás la clase ideal para ti. ¡Únete a nosotros en el camino hacia una vida más saludable! ','pagina web fitness 1500 x 300 px (2).jpg','pagina web fitness 1500 x 300 px (1).jpg','bodyattack-1-500x500.jpg'),(481,'TENIS','activo','si','casa-club','editable','seccion.php?cve=club-campestre-de-leon-tenis','','','4','','400','promocion','espanol','','','','','club-campestre-de-leon-tenis','Descubre la pasión y excelencia del tenis en Club Campestre. Nuestras canchas de primer nivel han sido escenario de eventos internacionales como el Challenger Mextenis León Open y torneos juveniles de alto nivel.<br />\r\n  ','pagina web  (300 x 500 px) (1).png','Banner Pagina Inicio Escritorio 1600 x 600 (1600 x 600 px).png','tenis-3.png'),(482,'ALBERCA SEMIOLIMPICA','activo','si','casa-club','editable','seccion.php?cve=alberca_semiolimpica','ALBERCA SEMIOLIMPICA','','4','','600','promocion','espanol','','','','','alberca_semiolimpica','Sumérjase en nuestra alberca Semiolímpica techada: no es solo un lugar para nadar, es un espacio concebido para la excelencia en entrenamiento y enseñanza acuática. Con un diseño impecable y todas las medidas necesarias, te brindamos la plataforma ideal para llevar tu experiencia de natación al siguiente nivel. Descubre la perfección en cada brazada.<br />\r\n<br />\r\n<br />\r\n     ','alberca semiolimpica (300 x 500 px).png','alberca semiolimpica 1500 x 600 (1).png','Baalberca ok  500 x 500 px (1).png'),(483,'ALBERCA','activo','si','casa-club','editable','seccion.php?cve=alberca','ALBERCA','','4','','500','promocion','espanol','','','','','alberca','Sumérjase en un entorno de esparcimiento y serenidad, diseñado meticulosamente para ofrecerle una experiencia acuática inigualable.<br />\r\n<br />\r\n       ','Secciones Pag. de inicio Escritorio   (320 x 500 px).png','Alberca  1500 x 300 px (2).png','Banner Alberca    500 x 500 px (3).png'),(484,'GYM','activo','si','casa-club','editable','seccion.php?cve=gym','GYM','','4','','400','arriba','espanol','','','','','gym','Bienvenido a nuestro exclusivo centro de fitness, cuidadosamente diseñado para cubrir todas tus necesidades de bienestar. Nuestra amplia área de cardio alberga más de 40 máquinas de última generación, que incluyen elípticas, escaleras, remos y cintas de correr de alta calidad, entre otras opciones premium.   <br />\r\nAquí, puedes disfrutar de sesiones de ciclismo intensas y motivadoras, guiadas por instructores expertos que te llevarán a alcanzar tus metas de acondicionamiento físico.<br />\r\nEn nuestro compromiso constante con tu bienestar, te ofrecemos instalaciones de vanguardia y un ambiente propicio para lograr tus objetivos de fitness.','Banner Noticias y Eventos Escritorio y Movil  500 x 500 px (2).png','Imagen superior en Sección  1500 x 300 px (2).png','gym 1  500 x 500 px (2).png'),(485,'TORNEOS GOLF','activo','si','golf','editable','seccion.php?cve=golf-torneos','','','4','','','promocion','espanol','','','','','golf-torneos','Desde la competitividad intensa de la Gira de Profesionales hasta la sofisticación del Torneo Mercedes Trophy y la arraigada tradición del Torneo de Golf Kenworth, cada evento es una oportunidad única. No te pierdas la experiencia; únete a nosotros y sumérgete en la grandeza del golf en su máxima expresión. ','torneos de golf 4  320 x 500 px.png','torneo golf 2 1500 x 300 px (1).png','torneo golf 3 500 x 500 px.png'),(486,'PROMOCIONES','activo','si','sociales','editable','seccion.php?cve=promociones','PROMOCIONES','','4','300','','arriba','espanol','','no','','','promociones','','FEBRERO FRAPPÉ .png','promociones 1500 x 300 px.png','WhatsApp Image 2024-01-30 at 10.41.42.jpeg'),(487,'ORGULLO CAMPESTRE','activo','si','sociales','editable','seccion.php?cve=orgullo-campestre','ORGULLO CAMPESTRE','','4','','500','promocion','espanol','','','','','orgullo-campestre','Descubre #OrgulloCampestre, el espacio dedicado a nuestros socios que brillan en su deporte favorito. Aquí, celebramos los logros y el esfuerzo de aquellos que nos llenan de orgullo con sus hazañas deportivas. Desde récords personales hasta victorias en competencias, cada historia en esta sección es un recordatorio del talento y la pasión que define a nuestra comunidad.       ','orgullo-1.png','orguyo-top.png','Imagen con Info sección Escritorio  500 x 500 px  (1).png'),(489,'ARANCIATA','activo','si','restaurants','editable','seccion.php?cve=eng-aranciata','ARANCIATA','','4','300','400','arriba','ingles','','','','','eng-aranciata','A beautiful place with the best terrace in Le','Captura de pantalla 2023-03-17 a la(s) 16.12.56.png','Captura de pantalla 2023-03-31 a la(s) 15.08.33.png','Captura de pantalla 2023-03-31 a la(s) 15.08.48.png'),(490,'HOYO 19','activo','si','restaurants','editable','seccion.php?cve=eng-hoyo-19','HOYO 19','','4','300','400','arriba','ingles','','','','','eng-hoyo-19','At Hole 19 you can enjoy delicious international cuts and dishes in a family atmosphere, as well as have a good time while enjoying one of the cocktails or drinks they offer for you.','Captura de pantalla 2023-03-17 a la(s) 16.24.48.png','Captura de pantalla 2023-03-31 a la(s) 15.04.36.png','Captura de pantalla 2023-03-31 a la(s) 15.05.00.png'),(488,'ABOUT US','activo','si','menu_izquierdo','editable','seccion.php?cve=about_us','ABOUT US','LEON COUNTRY CLUB','4','400','500','arriba','ingles','','','','','about_us','With more than 60 years of experience, Club Campestre de León is a social and sports club for the whole family. Known for its privacy, exclusivity and quality in its service and facilities, located in the city of León, Guanajuato.','about-1.png','about-2.png','about-3.png'),(491,'TENNIS','activo','si','casa-club','editable','seccion.php?cve=eng-tennis','TENNIS','','4','500','400','promocion','ingles','','','','','eng-tennis','We have 7 outdoor hard courts, 2 covered hard courts, 2 clay courts and 1 rebounding area; we also offer clinics for women, men and children of all levels.','Captura de pantalla 2023-03-18 a la(s) 22.30.50.png','Captura de pantalla 2023-03-18 a la(s) 22.31.12.png','Captura de pantalla 2023-03-18 a la(s) 22.30.59.png'),(494,'CHILDREN\'S HOUSE','activo','no','casa-club','editable','seccion.php?cve=childrens-house','CHILDREN\'S HOUSE','','4','500','400','normal','ingles','','','','','childrens-house','We have a recreational area focused on the smallest of the home with games for them to have fun and where they can also develop social and motor skills.<br />\r\n<br />\r\nDifferent activities and events are constantly carried out so that they can learn and have fun in a different way <strong> (It does not have a childcare service).</strong>','Captura de pantalla 2023-03-18 a la(s) 22.50.20.png','Captura de pantalla 2023-03-18 a la(s) 22.50.55.png','Captura de pantalla 2023-03-18 a la(s) 22.50.30.png'),(493,'SEMI-OLYMPIC POOL','activo','si','casa-club','editable','seccion.php?cve=eng-semi-olympic','SEMI-OLYMPIC POOL','','4','300','400','promocion','ingles','','','','','eng-semi-olympic','Semi-Olympic indoor pool with 6 lanes to train and enjoy; In addition, we offer guided clinics for children and adults. Our pools are supervised at all times by certified first aid lifeguards.','Captura de pantalla 2023-03-17 a la(s) 16.45.13.png','Captura de pantalla 2023-03-18 a la(s) 1.24.31.png','Captura de pantalla 2023-03-18 a la(s) 2.19.13.png'),(495,'SWIMMING POOL','activo','si','casa-club','editable','seccion.php?cve=pool','SWIMMING POOL','','4','300','400','arriba','ingles','','','','','pool','Our recreational pool to enjoy, in addition to offering guided clinics for children and adults. They are supervised at all times by lifeguards certified in first aid.','Captura de pantalla 2023-03-31 a la(s) 14.57.24.png','Captura de pantalla 2023-03-31 a la(s) 14.57.15.png','Captura de pantalla 2023-03-31 a la(s) 14.57.39.png'),(496,'GYM','activo','si','casa-club','editable','seccion.php?cve=gym-eng','GYM','','4','300','400','arriba','ingles','','','','','gym-eng','We offer a gym with state-of-the-art equipment, an excellent environment, and a beautiful view of the golf course. Our service is available from Monday to Sunday with the necessary equipment for quality training and with the option of being<br />\r\nguided or advised by quality instructors. Our variety of group classes will help you train and exercise the way you prefer.','Captura de pantalla 2023-03-31 a la(s) 14.59.28.png','Captura de pantalla 2023-03-31 a la(s) 15.00.37.png','Captura de pantalla 2023-03-31 a la(s) 15.00.50.png'),(497,'SOCCER','activo','si','casa-club','editable','seccion.php?cve=soccer','SOCCER','','4','300','400','arriba','ingles','','','','','soccer','Our soccer field is in excellent condition and meets all the requirements for our youth and children to train or play a game. We have clinics for children, nightly tournaments for adults or with the option to set aside the court and enjoy with your friends.','Copia de TORNAL (500 × 500 px) (1).png','1.png',''),(498,'FITNESS','activo','si','casa-club','editable','seccion.php?cve=fitness-eng','FITNESS','','4','300','','especial','ingles','','','','','fitness-eng','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.     ','Captura de pantalla 2023-03-31 a la(s) 14.54.51.png','Captura de pantalla 2023-03-31 a la(s) 14.50.57.png','Captura de pantalla 2023-03-31 a la(s) 14.51.07.png'),(499,'TOURNAMENTS','activo','si','golf','editable','seccion.php?cve=tournaments','TOURNAMENTS','','4','300','500','arriba','ingles','','','','','tournaments','Spectacular 18-hole golf course that maintains the integrity of the natural environment and offers a challenging game for golfers of all levels. We also offer clinics with instructors for all levels to improve the level of play of our members. (Currently the course is being redesigned by Alarcon-Morrish for a better playing experience.)','Captura de pantalla 2023-04-02 a la(s) 10.45.50.png','Captura de pantalla 2023-04-02 a la(s) 10.45.18.png','Captura de pantalla 2023-04-02 a la(s) 10.46.18.png'),(500,'COEXISTENCE','activo','si','golf','editable','seccion.php?cve=coexistencia','COEXISTENCE','','4','300','500','arriba','ingles','','','','','coexistencia','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  ','Captura de pantalla 2023-04-02 a la(s) 10.46.18.png','Captura de pantalla 2023-04-02 a la(s) 10.46.38.png','Captura de pantalla 2023-04-02 a la(s) 10.52.25.png'),(501,'CLINIC','activo','si','golf','editable','seccion.php?cve=golf-clinic','CLINIC','','4','300','500','arriba','ingles','','','','','golf-clinic','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.   ','Captura de pantalla 2023-04-02 a la(s) 10.46.18.png','Captura de pantalla 2023-04-02 a la(s) 10.53.22.png','Captura de pantalla 2023-04-02 a la(s) 10.52.09.png'),(502,'PALMS','activo','si','restaurants','editable','seccion.php?cve=palms','PALMS','','4','300','400','arriba','ingles','','','','','palms','Palmas snack, where you can enjoy various types of food and drinks during your stay.','Captura de pantalla 2023-03-31 a la(s) 15.22.48.png','Captura de pantalla 2023-03-31 a la(s) 15.23.16.png','Captura de pantalla 2023-03-31 a la(s) 15.23.49.png'),(503,'GYM SNACK','activo','si','restaurants','editable','seccion.php?cve=restaurant-gym-eng','GYM SNACK','','4','300','300','arriba','ingles','','','','','restaurant-gym-eng','Gym snack, where you can enjoy various types of food and drinks during your stay.','545.png','1300.png',''),(504,'STARTER','activo','si','restaurants','editable','seccion.php?cve=starter-eng','STARTER','','4','300','400','arriba','ingles','','','','','starter-eng','starter snack, where you can enjoy various types of food and drinks during your stay.','Captura de pantalla 2023-03-31 a la(s) 15.37.35.png','Captura de pantalla 2023-03-31 a la(s) 15.37.14.png','Captura de pantalla 2023-03-31 a la(s) 15.37.23.png'),(505,'CALENDARS','activo','si','sociales','editable','seccion.php?cve=sociales-calendars','CALENDARS','','4','300','400','arriba','ingles','','','','','sociales-calendars','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.   ','Captura de pantalla 2023-04-02 a la(s) 10.59.22.png','Captura de pantalla 2023-03-31 a la(s) 15.41.20.png','Captura de pantalla 2023-04-02 a la(s) 10.59.22.png'),(506,'GOLF TOURNAMENTS','activo','si','sociales','editable','seccion.php?cve=golf-tournament','GOLF TOURNAMENTS','','4','300','','arriba','ingles','','','','','golf-tournament',' ','Captura de pantalla 2023-04-02 a la(s) 10.46.18.png','Captura de pantalla 2023-04-02 a la(s) 10.45.18.png','Captura de pantalla 2023-04-02 a la(s) 10.46.18.png'),(507,'PROMOTIONS','activo','si','sociales','editable','seccion.php?cve=promotions','PROMOTIONS','','4','300','','arriba','ingles','','no','','','promotions','','Captura de pantalla 2023-04-02 a la(s) 10.45.50.png','Captura de pantalla 2023-04-02 a la(s) 10.51.59.png','Captura de pantalla 2023-04-02 a la(s) 10.52.40.png'),(508,'COUNTRY PRIDE','activo','si','sociales','editable','seccion.php?cve=country-pride','COUNTRY PRIDE','','4','400','','promocion','ingles','','','','','country-pride','     ','Captura de pantalla 2023-03-31 a la(s) 15.42.08.png','Captura de pantalla 2023-03-31 a la(s) 15.41.20.png','Captura de pantalla 2023-04-02 a la(s) 10.52.25.png'),(509,'私たちに関しては','activo','si','menu_izquierdo','editable','seccion.php?cve=nosotros-jap','私たちに関しては','????????','4','400','500','arriba','japones','','','','','nosotros-jap','60 年以上の経験を持つクラブ カンペストレ デ レオンは、家族全員が楽しめる社交スポーツ クラブです。グアナファト州レオン市に位置し、プライバシー、独占性、サービスと施設の質の高さで知られています。 ','about-1.png','about-2.png','about-3.png');
/*!40000 ALTER TABLE `secciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tallas`
--

DROP TABLE IF EXISTS `tallas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tallas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uno` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dos` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tres` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cuatro` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cinco` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `seis` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `siete` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ocho` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nueve` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `diez` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `once` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `doce` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `trece` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `catorce` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `quince` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dieciseis` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `diecisiete` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dieciocho` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `diecinueve` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `veinte` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tallas`
--

LOCK TABLES `tallas` WRITE;
/*!40000 ALTER TABLE `tallas` DISABLE KEYS */;
INSERT INTO `tallas` VALUES (78,'vcb','','','','','','','','','','','','','','','','','','','',''),(79,'Manzana Verde','','','','','','','','','','','','','','','','','','','',''),(80,'Manzana Amarilla','','','','','','','','','','','','','','','','','','','',''),(81,'Manzana Roja','','','','','','','','','','','','','','','','','','','',''),(82,'Platano','','','','','','','','','','','','','','','','','','','',''),(83,'Platano Dominico','','','','','','','','','','','','','','','','','','','',''),(84,'Zanahoria','','','','','','','','','','','','','','','','','','','',''),(85,'Calabacita','','','','','','','','','','','','','','','','','','','',''),(86,'Jitomate','','','','','','','','','','','','','','','','','','','',''),(87,'Frijol Peruano','','','','','','','','','','','','','','','','','','','',''),(88,'Frijol Negro','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `tallas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nivel_acceso` varchar(4) NOT NULL DEFAULT '0',
  `padre` varchar(20) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  `idemp` varchar(11) DEFAULT NULL,
  `depto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb3 PACK_KEYS=1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (119,'pedro','1234','400','si','1',NULL,NULL),(132,'campestreadmin','ClLeCa(2023)','400','si','1',NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-21 17:42:19
