-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: bleefs_app
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `admin_email`
--

DROP TABLE IF EXISTS `admin_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_email`
--

LOCK TABLES `admin_email` WRITE;
/*!40000 ALTER TABLE `admin_email` DISABLE KEYS */;
INSERT INTO `admin_email` VALUES (1,'Contact@beetronicsfx.com');
/*!40000 ALTER TABLE `admin_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_appsettings`
--

DROP TABLE IF EXISTS `tbl_appsettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_appsettings` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `api_key` varchar(255) NOT NULL,
  `redirect_url` varchar(255) NOT NULL,
  `permissions` longtext NOT NULL,
  `shared_secret` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_appsettings`
--

LOCK TABLES `tbl_appsettings` WRITE;
/*!40000 ALTER TABLE `tbl_appsettings` DISABLE KEYS */;
INSERT INTO `tbl_appsettings` VALUES (1,'8417a5417dfc47c9ee3c135ed392bdac','https://shopify.beetronicsfx.com/app/getCredentials.php','[\"read_products\",\"write_products\",\"read_customers\",\"write_customers\",\"read_orders\",\"read_content\",\"write_orders\",\"read_themes\",\"write_themes\",\"read_script_tags\",\"write_script_tags\",\"read_fulfillments\",\"write_fulfillments\",\"read_content\",\"write_content\"]','1ccdec4d2e8216c3054035b80f5b9ab9');
/*!40000 ALTER TABLE `tbl_appsettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_choose_a_effect`
--

DROP TABLE IF EXISTS `tbl_choose_a_effect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_choose_a_effect` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `effect_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_choose_a_effect`
--

LOCK TABLES `tbl_choose_a_effect` WRITE;
/*!40000 ALTER TABLE `tbl_choose_a_effect` DISABLE KEYS */;
INSERT INTO `tbl_choose_a_effect` VALUES (35,'High Octave Fuzz','octahive2.png','2017-09-14 00:00:00'),(36,'Overdrive','overhive2.png','2017-09-14 00:00:00'),(37,'Low Octave Fuzz','whoctahell2.png','2017-09-14 00:00:00');
/*!40000 ALTER TABLE `tbl_choose_a_effect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_custom_image`
--

DROP TABLE IF EXISTS `tbl_custom_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_custom_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_custom_image`
--

LOCK TABLES `tbl_custom_image` WRITE;
/*!40000 ALTER TABLE `tbl_custom_image` DISABLE KEYS */;
INSERT INTO `tbl_custom_image` VALUES (1,'images.jpg'),(16,'6890733-mountain-peaks-wallpaper-hd_PZTQDff.jpg'),(17,'589ce26f0c789.jpg'),(18,'hat1.jpg'),(19,'images (1).jpg'),(20,'images (1).jpg'),(21,'images.jpg'),(22,'images.jpg'),(23,'images.jpg'),(24,'images.jpg'),(25,'images.jpg'),(26,'images.jpg'),(27,'1504942705753-1048782728.jpg'),(28,'images.jpg'),(29,'iphone-case.jpg'),(30,'About-us.jpg'),(31,'hat1.jpg'),(32,'images.jpg'),(33,'images.jpg'),(34,'images.jpg'),(35,'images.jpg'),(36,'images.jpg'),(37,'images.jpg'),(38,'images.jpg'),(39,'images.jpg'),(40,'images.jpg'),(41,'1admin.png'),(42,'images.jpg'),(43,'gogetterpdf.jpg'),(44,'images.jpg'),(45,'images.jpg'),(46,'images.jpg'),(47,'images.jpg'),(48,'images.jpg'),(49,'images.jpg'),(50,'images.jpg'),(51,'images.jpg'),(52,'Captura de Tela 2017-09-14 aÌ€s 09.56.34.png'),(53,'images.jpg'),(54,'hat1.jpg'),(55,'images.jpg'),(56,'images.jpg'),(57,'images.jpg'),(58,'images.jpg'),(59,'images.jpg');
/*!40000 ALTER TABLE `tbl_custom_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_dc_jewel_lens`
--

DROP TABLE IF EXISTS `tbl_dc_jewel_lens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dc_jewel_lens` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `dc_jewel_lens` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dc_jewel_lens`
--

LOCK TABLES `tbl_dc_jewel_lens` WRITE;
/*!40000 ALTER TABLE `tbl_dc_jewel_lens` DISABLE KEYS */;
INSERT INTO `tbl_dc_jewel_lens` VALUES (2,'red','image32.png','2017-08-14 00:00:00'),(4,'white','image33.png','2017-08-14 00:00:00'),(8,'black','image34.png','2017-08-14 00:00:00');
/*!40000 ALTER TABLE `tbl_dc_jewel_lens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_footswitch`
--

DROP TABLE IF EXISTS `tbl_footswitch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_footswitch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `footswitch_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_footswitch`
--

LOCK TABLES `tbl_footswitch` WRITE;
/*!40000 ALTER TABLE `tbl_footswitch` DISABLE KEYS */;
INSERT INTO `tbl_footswitch` VALUES (4,'SILVER','image11.png','2017-08-14 00:00:00'),(5,'Gold','image12.png','2017-08-14 00:00:00');
/*!40000 ALTER TABLE `tbl_footswitch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_footswitch_hardware_name`
--

DROP TABLE IF EXISTS `tbl_footswitch_hardware_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_footswitch_hardware_name` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `hardware_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_footswitch_hardware_name`
--

LOCK TABLES `tbl_footswitch_hardware_name` WRITE;
/*!40000 ALTER TABLE `tbl_footswitch_hardware_name` DISABLE KEYS */;
INSERT INTO `tbl_footswitch_hardware_name` VALUES (2,'AVIATION ROUND GOLD','image13.png','2017-08-14 00:00:00'),(3,'MOUNTAIN TOP SILVER','image14.png','2017-08-14 00:00:00'),(4,'SMALL ROUND GOLD 1','image15.png','2017-08-14 00:00:00'),(5,'LARGE ROUND SILVER 1','image16.png','2017-08-14 00:00:00'),(6,'SMALL ROUND GOLD 2','image17.png','2017-08-14 00:00:00'),(7,'SMALL ROUND GOLD 1','1502688525image15.png','2017-08-14 00:00:00');
/*!40000 ALTER TABLE `tbl_footswitch_hardware_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_headers`
--

DROP TABLE IF EXISTS `tbl_headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_headers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `unique_head_key` longtext NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_headers`
--

LOCK TABLES `tbl_headers` WRITE;
/*!40000 ALTER TABLE `tbl_headers` DISABLE KEYS */;
INSERT INTO `tbl_headers` VALUES (1,'choose_a_effect','Choose a circuit',''),(2,'pick_a_color','Pick a color','Here you can have an idea of the color possibilities. We can do plain colors, gradients, color over color, rustic steel, shiny steel. There are endless possibilities. Pick one similar to what you have in mind and let us know your idea.'),(3,'choose_knobs','Knobs','We are knob hoarders! We do our best to stock up on cool and rare knobs, and do have more than is shown here. Please note that certain knobs won\'t fit certain models due to size or configuration. We\'ll let you know in case that happens. Pick your favorites! '),(4,'footswitch_color','Footswitch color','*Please note that the Gold Footswitch may not work with certain footswitch hardware. We will let you know if that is the case. '),(5,'footswitch_hardware','Footswitch hardware','  '),(6,'toggle_hardware','Toggle switch hardware',''),(7,'toggle_switch_tip','Toggle switch tip',''),(8,'jewel_lens','Jewel lens','Certain jewel colors will not work well with the Whoctahell or the Octahive, given the LED color changes. We\'ll advise you on that. Vintage and NOS are subject to availability. '),(9,'dc_power_jack_color','Dc power jack color',''),(10,'logo_badge','Logo badge','The Beetronics Badge adds the final touch to your pedal! We have it in many colors so it will match your design. '),(11,'custom_design_pattern','Custom design, logo, symbol or pattern','<p>the custom designs, symbols, logos or patterns can be done in many different ways.</p>\r\n							<p>rustic, shiny, colorful or blending multiple painting techiniques. </p>\r\n							<p>we are experts when it comes down to finishing. Our finishes have depht and are extremely unique. </p>\r\n							<p>everything is hand made, no printing involved. </p>\r\n							<p>send us your idea and weâ€™ll be able to assist and guide you on what is the best way to get it done. </p>'),(13,'comments_suggestions','Comments, ideas or suggestions',''),(14,'personal_info','Personal info',''),(15,'thank_you','Thank you for your inquire!','We look forward to making you the coolest custom pedal ever!</br>\r\nWeâ€™ll send you a quote in 24 hours or less. '),(16,'picker_color_cmt','Looking for something else? No problem. Please describe the color you are looking for.','');
/*!40000 ALTER TABLE `tbl_headers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_host_settings`
--

DROP TABLE IF EXISTS `tbl_host_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_host_settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `host_name` varchar(255) NOT NULL,
  `host_username` varchar(255) NOT NULL,
  `host_pass` varchar(255) NOT NULL,
  `host_secure` varchar(255) NOT NULL,
  `host_port` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_host_settings`
--

LOCK TABLES `tbl_host_settings` WRITE;
/*!40000 ALTER TABLE `tbl_host_settings` DISABLE KEYS */;
INSERT INTO `tbl_host_settings` VALUES (1,'smtp.webfaction.com','devdemo','india@123','SSL','465','2017-09-18 00:00:00');
/*!40000 ALTER TABLE `tbl_host_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_jewel_lens`
--

DROP TABLE IF EXISTS `tbl_jewel_lens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_jewel_lens` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `jewel_lens` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jewel_lens`
--

LOCK TABLES `tbl_jewel_lens` WRITE;
/*!40000 ALTER TABLE `tbl_jewel_lens` DISABLE KEYS */;
INSERT INTO `tbl_jewel_lens` VALUES (4,'red','image27.png','2017-08-14 00:00:00'),(5,'blue','image28.png','2017-08-14 00:00:00'),(6,'NOS VINTAGE ORANGE','image29.png','2017-08-14 00:00:00'),(7,'NOS PRESS TO TEST YELLOW','image30.png','2017-08-14 00:00:00'),(8,'white','image31.png','2017-08-14 00:00:00');
/*!40000 ALTER TABLE `tbl_jewel_lens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_knobs`
--

DROP TABLE IF EXISTS `tbl_knobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_knobs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `knob_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_knobs`
--

LOCK TABLES `tbl_knobs` WRITE;
/*!40000 ALTER TABLE `tbl_knobs` DISABLE KEYS */;
INSERT INTO `tbl_knobs` VALUES (54,'Big Eye Round','_0001_Big Eye Round.jpg','2017-09-11 00:00:00'),(55,'Large Round 1','_0031_Large Round1.jpg','2017-09-11 00:00:00'),(56,'WH Large Knob','_0011_WH Large Knob.jpg','2017-09-11 00:00:00'),(57,'Squared Pointer','_0002_Squared Pointer.jpg','2017-09-11 00:00:00'),(58,'Old Stereo','_0023_Old Stereo.jpg','2017-09-11 00:00:00'),(59,'Spaceship','_0000_Spaceship.jpg','2017-09-11 00:00:00'),(60,'Spaceship Numbered','_0022_SpaceShip Numbered.jpg','2017-09-11 00:00:00'),(61,'Aluminum Silver','_0003_Aluminum Silver.jpg','2017-09-11 00:00:00'),(62,'Aluminum Red','_0004_Aluminum Red.jpg','2017-09-11 00:00:00'),(63,'Aluminum Green','_0005_Aluminum Green.jpg','2017-09-11 00:00:00'),(64,'Aluminum Blue','_0006_Aluminum Blue.jpg','2017-09-11 00:00:00'),(65,'Aluminum Black','_0007_Aluminum Black.jpg','2017-09-11 00:00:00'),(66,'Little Classic Clear','_0008_Little Classic Clear.jpg','2017-09-11 00:00:00'),(67,'Little Classic Black','_0014_Little Classic Black.jpg','2017-09-11 00:00:00'),(68,'Vintage Pointer','_0009_Vintage Pointer.jpg','2017-09-11 00:00:00'),(69,'Witch Nail','_0010_Witch Nail.jpg','2017-09-11 00:00:00'),(70,'Dotted Smal Round','_0012_Dotted Small Round.jpg','2017-09-11 00:00:00'),(71,'WH Sideknob','_0013_WH Sideknob.jpg','2017-09-11 00:00:00'),(72,'Little Chefe White','_0015_Little Chefe White.jpg','2017-09-11 00:00:00'),(73,'Chefe Clear','_0016_Chefe Clear.jpg','2017-09-11 00:00:00'),(74,'Chefe Green','_0017_Chefe Green.jpg','2017-09-11 00:00:00'),(75,'Chefe Cream','_0018_Chefe Cream.jpg','2017-09-11 00:00:00'),(76,'Chefe Blue','_0019_Chefe Blue.jpg','2017-09-11 00:00:00'),(77,'Classic Purple','_0020_Classic Purple.jpg','2017-09-11 00:00:00'),(78,'Chickenhead WH','_0021_Chickenhead WH.jpg','2017-09-11 00:00:00'),(79,'Pointer OH Black','_0024_Small Pointer OH Black.jpg','2017-09-11 00:00:00'),(80,'Pointer OH Cream','_0025_Small Pointer OH Cream.jpg','2017-09-11 00:00:00'),(81,'Pointer OH Yellow','_0026_Small Pointer OH Yellow.jpg','2017-09-11 00:00:00'),(82,'Pointer OH Red','_0027_Small Pointer OH Red.jpg','2017-09-11 00:00:00'),(83,'Vintage 321','_0029_Vintage 321.jpg','2017-09-11 00:00:00'),(84,'Vintage Small Military','_0030_Vintage Small Round Military.jpg','2017-09-11 00:00:00');
/*!40000 ALTER TABLE `tbl_knobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_logo_badge`
--

DROP TABLE IF EXISTS `tbl_logo_badge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_logo_badge` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `logo_badge` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_logo_badge`
--

LOCK TABLES `tbl_logo_badge` WRITE;
/*!40000 ALTER TABLE `tbl_logo_badge` DISABLE KEYS */;
INSERT INTO `tbl_logo_badge` VALUES (15,'Black/Antique Gold','_0002_Black_Antique Gold.jpg','2017-09-12 00:00:00'),(16,'Black/Antique Nickel','_0005_Black_Antique Nickel.jpg','2017-09-12 00:00:00'),(17,'Seafoam Green/Antique Gold','_0000_Seafoam Green_Antique Gold.jpg','2017-09-12 00:00:00'),(18,'Red/Antique Nickel','_0009_Red_Antique Nickel.jpg','2017-09-12 00:00:00'),(19,'Blue/Antique Nickel','_0007_Blue_Antique Nickel.jpg','2017-09-12 00:00:00'),(20,'Black/Antique Brass','_0001_Black_Antique Brass.jpg','2017-09-12 00:00:00'),(21,'Yellow/Black Nickel','_0003_Yellow_Black Nickel.jpg','2017-09-12 00:00:00'),(22,'Black/Black Nickel','_0008_Black_Black Nickel.jpg','2017-09-12 00:00:00'),(23,'Antique Copper','_0004_Antique Copper.jpg','2017-09-12 00:00:00'),(24,'Purple/Antique Silver','_0006_Purple_Antique Silver.jpg','2017-09-12 00:00:00');
/*!40000 ALTER TABLE `tbl_logo_badge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_picker_color`
--

DROP TABLE IF EXISTS `tbl_picker_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_picker_color` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_picker_color`
--

LOCK TABLES `tbl_picker_color` WRITE;
/*!40000 ALTER TABLE `tbl_picker_color` DISABLE KEYS */;
INSERT INTO `tbl_picker_color` VALUES (24,'Baby Blue over Orange','Colors-Molde_0000_Baby Blue over Orange.jpg','2017-09-12 00:00:00'),(25,'Blue Gradient over Pink','Colors-Molde_0025_Blue Gradient over Pink.jpg','2017-09-12 00:00:00'),(27,'Yellow over Green','Colors-Molde_0006_Yellow over Green.jpg','2017-09-12 00:00:00'),(28,'Light Lime Green with Rustic Steel','Colors-Molde_0005_Light Lime Green with Rustic Metal.jpg','2017-09-12 00:00:00'),(29,'Light Pink with Rustic Steel','Colors-Molde_0001_Light Pink with Rustic Steel.jpg','2017-09-12 00:00:00'),(30,'Orange over Burgundy','Colors-Molde_0002_Orange over Burgundy.jpg','2017-09-12 00:00:00'),(31,'Green with Rustic Steel','Colors-Molde_0003_Green with Rustic Steel.jpg','2017-09-12 00:00:00'),(32,'White with Rustic Steel','Colors-Molde_0004_White with Rustic Steel.jpg','2017-09-12 00:00:00'),(33,'Cream with Rustic Steel','Colors-Molde_0007_Cream with Rustic Metal.jpg','2017-09-12 00:00:00'),(34,'Rustic Steel with Shiny Steel','Colors-Molde_0008_Rustic Steel over Shiny Steel.jpg','2017-09-12 00:00:00'),(35,'Black with Shiny Steel','Colors-Molde_0009_Black with Shiny Steel.jpg','2017-09-12 00:00:00'),(36,'Black over Red','Colors-Molde_0010_Black over Red.jpg','2017-09-12 00:00:00'),(37,'Red with Rustic Metal','Colors-Molde_0011_Red with Rustic Metal.jpg','2017-09-12 00:00:00'),(38,'Cream over Red','Colors-Molde_0012_Cream over Red.jpg','2017-09-12 00:00:00'),(39,'Dark Pink over Light Pink','Colors-Molde_0013_Dark Pink over Light Pink.jpg','2017-09-12 00:00:00'),(40,'Yellow with Rustic Steel','Colors-Molde_0014_Yellow over Rustic Metal.jpg','2017-09-12 00:00:00'),(41,'Baby Blue with Rustic Steel','Colors-Molde_0015_Baby Blue with Rustic Metal.jpg','2017-09-12 00:00:00'),(42,'Orange over Malachite','Colors-Molde_0016_Orange over Malachite.jpg','2017-09-12 00:00:00'),(43,'Yellow over Red with Rustic Metal','Colors-Molde_0017_Yellow over Red with Rustic Metal.jpg','2017-09-12 00:00:00'),(44,'White over Burgundy with Rustic Metal','Colors-Molde_0018_White over Burgundy with Rustic Metal.jpg','2017-09-12 00:00:00'),(45,'Yellow and Green Gradient with Rustic Steel','Colors-Molde_0020_Yellow_Green Gradient over Rustic Steel.jpg','2017-09-12 00:00:00'),(46,'Seafoam Green over Blue','Colors-Molde_0021_Sea Foam Green over Blue.jpg','2017-09-12 00:00:00'),(47,'Yellow over Red','Colors-Molde_0022_Yellow over Red.jpg','2017-09-12 00:00:00'),(48,'Purple over Orange','Colors-Molde_0023_Purple over Orange.jpg','2017-09-12 00:00:00'),(49,'Orange over Black','Colors-Molde_0024_Orange over Black.jpg','2017-09-12 00:00:00'),(50,'White over Tiffany Blue','Colors-Molde_0026_White over Tiffany Blue.jpg','2017-09-12 00:00:00'),(51,'White over Green Gradient','Colors-Molde_0027_White over Green gradient.jpg','2017-09-12 00:00:00'),(52,'Light Pink over Malachite','Colors-Molde_0028_Light Pink Over Malachite.jpg','2017-09-12 00:00:00'),(53,'Army Green over Dark Red','Colors-Molde_0029_Army Green over Dark Red.jpg','2017-09-12 00:00:00'),(54,'White over Blue','Colors-Molde_0030_White over Blue.jpg','2017-09-12 00:00:00'),(55,'Light Green with Rustic Steel','Colors-Molde_0031_Light Green on Rustic Metal.jpg','2017-09-12 00:00:00'),(56,'Multicolor Gradient with Rustic Steel','Colors-Molde_0032_Multicolor Gradient over Rustic Steel.jpg','2017-09-12 00:00:00'),(58,'Yellow over Purple','Colors-Molde_0033_Yellow over Purple.jpg','2017-09-12 00:00:00'),(59,'Malachite Blue Gradient','Colors-Molde_0036_Malachite Blue Gradient.jpg','2017-09-12 00:00:00'),(60,'Light Pink Gradient','Colors-Molde_0037_Light Pink Gradient.jpg','2017-09-12 00:00:00');
/*!40000 ALTER TABLE `tbl_picker_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_toggle_switch_hardware`
--

DROP TABLE IF EXISTS `tbl_toggle_switch_hardware`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_toggle_switch_hardware` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `toggle_switch_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_toggle_switch_hardware`
--

LOCK TABLES `tbl_toggle_switch_hardware` WRITE;
/*!40000 ALTER TABLE `tbl_toggle_switch_hardware` DISABLE KEYS */;
INSERT INTO `tbl_toggle_switch_hardware` VALUES (2,'MODERN BLUE','image18.png','2017-08-14 00:00:00'),(3,'RUSTY PLUMBER','image19.png','2017-08-14 00:00:00'),(4,'MODERN ROUND SILVER','image20.png','2017-08-14 00:00:00'),(5,'SUNSHINE SILVER','image21.png','2017-08-14 00:00:00'),(6,'ORANGE PLUMBER','image22.png','2017-08-14 00:00:00'),(7,'MODERN ROUND SILVER','1502689164image20.png','2017-08-14 00:00:00');
/*!40000 ALTER TABLE `tbl_toggle_switch_hardware` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_toggle_switch_tip`
--

DROP TABLE IF EXISTS `tbl_toggle_switch_tip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_toggle_switch_tip` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `toggle_switch_tip` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_toggle_switch_tip`
--

LOCK TABLES `tbl_toggle_switch_tip` WRITE;
/*!40000 ALTER TABLE `tbl_toggle_switch_tip` DISABLE KEYS */;
INSERT INTO `tbl_toggle_switch_tip` VALUES (4,'White','image23.png','2017-08-14 00:00:00'),(5,'red','image24.png','2017-08-14 00:00:00'),(6,'black','image25.png','2017-08-14 00:00:00'),(7,'silver','image26.png','2017-08-14 00:00:00');
/*!40000 ALTER TABLE `tbl_toggle_switch_tip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usersettings`
--

DROP TABLE IF EXISTS `tbl_usersettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usersettings` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `access_token` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usersettings`
--

LOCK TABLES `tbl_usersettings` WRITE;
/*!40000 ALTER TABLE `tbl_usersettings` DISABLE KEYS */;
INSERT INTO `tbl_usersettings` VALUES (1,'89e1ba5896a6ccfa25418e7cefc3b641','beefx.myshopify.com');
/*!40000 ALTER TABLE `tbl_usersettings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-21  5:25:08
