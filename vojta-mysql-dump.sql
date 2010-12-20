-- MySQL dump 10.13  Distrib 5.1.46, for suse-linux-gnu (x86_64)
--
-- Host: localhost    Database: transportmanager
-- ------------------------------------------------------
-- Server version	5.1.46-log

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
-- Table structure for table `archived_transportations`
--

DROP TABLE IF EXISTS `archived_transportations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archived_transportations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path_id` int(11) DEFAULT NULL,
  `start_station_id` int(11) DEFAULT NULL,
  `end_station_id` int(11) DEFAULT NULL,
  `datum_cas` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archived_transportations`
--

LOCK TABLES `archived_transportations` WRITE;
/*!40000 ALTER TABLE `archived_transportations` DISABLE KEYS */;
/*!40000 ALTER TABLE `archived_transportations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archived_transportations_cargo_wagons`
--

DROP TABLE IF EXISTS `archived_transportations_cargo_wagons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archived_transportations_cargo_wagons` (
  `cargo_wagon_id` int(11) DEFAULT NULL,
  `archived_transportation_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archived_transportations_cargo_wagons`
--

LOCK TABLES `archived_transportations_cargo_wagons` WRITE;
/*!40000 ALTER TABLE `archived_transportations_cargo_wagons` DISABLE KEYS */;
/*!40000 ALTER TABLE `archived_transportations_cargo_wagons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archived_transportations_employees`
--

DROP TABLE IF EXISTS `archived_transportations_employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archived_transportations_employees` (
  `employee_id` int(11) DEFAULT NULL,
  `archived_transportation_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archived_transportations_employees`
--

LOCK TABLES `archived_transportations_employees` WRITE;
/*!40000 ALTER TABLE `archived_transportations_employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `archived_transportations_employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archived_transportations_locomotives`
--

DROP TABLE IF EXISTS `archived_transportations_locomotives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archived_transportations_locomotives` (
  `archived_transportation_id` int(11) NOT NULL,
  `locomotive_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archived_transportations_locomotives`
--

LOCK TABLES `archived_transportations_locomotives` WRITE;
/*!40000 ALTER TABLE `archived_transportations_locomotives` DISABLE KEYS */;
/*!40000 ALTER TABLE `archived_transportations_locomotives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo_wagons`
--

DROP TABLE IF EXISTS `cargo_wagons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo_wagons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wagon_series_id` int(11) DEFAULT NULL,
  `cislo_him` int(11) DEFAULT NULL,
  `cislo_vozu` int(11) DEFAULT NULL,
  `druh_brzdeni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `druh_brzdoveho_valce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvojkoli_revize` int(11) DEFAULT NULL,
  `dvojkoli_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvojkoli_velikost` int(11) DEFAULT NULL,
  `dvojkoli_vyrobce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oprava_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pruznice` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rada` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rezim_vozu` int(11) DEFAULT NULL,
  `roky_revize_dvojkoli_bez_zvednuti_skrine` int(11) DEFAULT NULL,
  `roky_revize_kotle` int(11) DEFAULT NULL,
  `roky_revize_vozu` int(11) DEFAULT NULL,
  `rozvadec` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rucni_brzda` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rychlost_km` int(11) DEFAULT NULL,
  `vlastni_hmotnost` int(11) DEFAULT NULL,
  `zdrze` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo_wagons`
--

LOCK TABLES `cargo_wagons` WRITE;
/*!40000 ALTER TABLE `cargo_wagons` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo_wagons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo_wagons_trains`
--

DROP TABLE IF EXISTS `cargo_wagons_trains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo_wagons_trains` (
  `cargo_wagon_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo_wagons_trains`
--

LOCK TABLES `cargo_wagons_trains` WRITE;
/*!40000 ALTER TABLE `cargo_wagons_trains` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo_wagons_trains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Honza','Sveřepý','sverepy@tm.cz','sverepy',1),(2,'Tomáš','Marný','marny@tm.cz','marny',2),(3,'Pepa','Jožin','jozin@tm.cz','jozin',7);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees_trains`
--

DROP TABLE IF EXISTS `employees_trains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees_trains` (
  `employee_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees_trains`
--

LOCK TABLES `employees_trains` WRITE;
/*!40000 ALTER TABLE `employees_trains` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees_trains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locomotives`
--

DROP TABLE IF EXISTS `locomotives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locomotives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brzda_parkovaci_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzda_primocara_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzda_rucni_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzda_tahova_druh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brzdici_vaha` int(11) DEFAULT NULL,
  `cislo_prukazu_zpusobnosti` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delka_pres_narazniky` int(11) DEFAULT NULL,
  `dvojkoli_revize` int(11) DEFAULT NULL,
  `dvojkoli_velikost` int(11) DEFAULT NULL,
  `dvojkoli_vyrobce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hmotnost` int(11) DEFAULT NULL,
  `inventarni_cislo` int(11) DEFAULT NULL,
  `klimatizace` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `km_revize_celkova` int(11) DEFAULT NULL,
  `km_revize_dvojkoli` int(11) DEFAULT NULL,
  `km_revize_provozni` int(11) DEFAULT NULL,
  `komunikacni_zarizeni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maximalni_rychlost` int(11) DEFAULT NULL,
  `motor_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oprava_napln` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oprava_probihajici` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oznaceni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provozni_cislo` int(11) DEFAULT NULL,
  `rada` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rok_vyroby` int(11) DEFAULT NULL,
  `rychlomer_cislo` int(11) DEFAULT NULL,
  `rychlomer_typ` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vykon` int(11) DEFAULT NULL,
  `vyrobce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vyrobni_cislo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locomotives`
--

LOCK TABLES `locomotives` WRITE;
/*!40000 ALTER TABLE `locomotives` DISABLE KEYS */;
INSERT INTO `locomotives` VALUES (1,'pevná','pulzní','páková','šňůrková',15000,'58492',3500,2009,4500,'Siemens',4500,58749,'větrák',100000,50000,10000,'mobil',150,'koně','nic','nic','Eliška',58493225,'Blesk',1984,45798,'20',786000,'Škoda',584933);
/*!40000 ALTER TABLE `locomotives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locomotives_trains`
--

DROP TABLE IF EXISTS `locomotives_trains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locomotives_trains` (
  `train_id` int(11) DEFAULT NULL,
  `locomotive_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locomotives_trains`
--

LOCK TABLES `locomotives_trains` WRITE;
/*!40000 ALTER TABLE `locomotives_trains` DISABLE KEYS */;
/*!40000 ALTER TABLE `locomotives_trains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `near_stations`
--

DROP TABLE IF EXISTS `near_stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `near_stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station_id` int(11) DEFAULT NULL,
  `next_station_id` int(11) DEFAULT NULL,
  `vzdalenost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `near_stations`
--

LOCK TABLES `near_stations` WRITE;
/*!40000 ALTER TABLE `near_stations` DISABLE KEYS */;
/*!40000 ALTER TABLE `near_stations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paths`
--

DROP TABLE IF EXISTS `paths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paths` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station_id` int(11) DEFAULT NULL,
  `next_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paths`
--

LOCK TABLES `paths` WRITE;
/*!40000 ALTER TABLE `paths` DISABLE KEYS */;
/*!40000 ALTER TABLE `paths` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodicities`
--

DROP TABLE IF EXISTS `periodicities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodicities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodicities`
--

LOCK TABLES `periodicities` WRITE;
/*!40000 ALTER TABLE `periodicities` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodicities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrátor'),(2,'Manager'),(3,'Dispečer'),(4,'IT technik'),(5,'HR'),(6,'Technik'),(7,'Strojvůdce');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_station_id` int(11) DEFAULT NULL,
  `end_station_id` int(11) DEFAULT NULL,
  `datum_cas` datetime DEFAULT NULL,
  `periodicity_id` int(11) DEFAULT NULL,
  `train_id` int(11) DEFAULT NULL,
  `path_id` int(11) DEFAULT NULL,
  `stav_schvaleni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pair` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'__engine_driver_role','7','ID číslo role, která je považována za strojvůdce. Zaměstnanci s touto rolí nemají možnost se přihlásit do systému a budou zobrazování při výběru a přiřazení zdrojů k vlakové soupravě.','2010-12-20 22:53:48','2010-12-20 22:54:25');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `okres` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kraj` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cislo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gps` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stations`
--

LOCK TABLES `stations` WRITE;
/*!40000 ALTER TABLE `stations` DISABLE KEYS */;
INSERT INTO `stations` VALUES (1,'Český Těšín','Karviná','Moravskoslezský','972754478','49.743337,18.623044'),(2,'Bohumín','Karviná','Moravskoslezský','972756483','49.901037,18.358943'),(3,'Ostrava-Svinov','Ostrava','Moravskoslezský','972761288','49.821068,18.209796'),(4,'Přerov','Přerov','Olomoucký','972734411','49.447138,17.445514'),(5,'Brno Hl. n.','Brno','Jihomoravský','972625244','49.191268,16.612267'),(6,'Olomouc Hl.n.','Olomouc','Olomoucký','972742322','49.592478,17.277846'),(7,'Pardubice hl.n.','Pardubice','Pardubický','972322942','50.031984,15.757002'),(8,'Praha hl.n','Praha','Hlavní město Praha','972241243','50.083018,14.435842'),(9,'Jihlava','Jihlava','Vysočina','972646401','49.414512,15.599062'),(10,'České Budějovice','České Budějovice','Jihočeský','972544686','48.974365,14.488188'),(11,'Plzeň hl.n.','Plzeň','Plzeňský','972524232','49.743327,13.388048'),(12,'Karlovy Vary','Karlovy Vary','Karlovarský','972442440','50.235338,12.866519'),(13,'Hradec Králové hl.n.','Hradec Králové','Královehradecký','972342232','50.214701,15.809745'),(14,'Liberec','Liberec','Liberecký','972365530','50.761138,15.04554'),(15,'Studénka','Nový Jičín','Moravskoslezský','972757558','49.707546,18.069077'),(16,'Hranice n. Moravě','Přerov','Olomoucký','97273655','49.56548,17.7427'),(17,'Zlín střed','Zlín','Zlínský','972725106','49.226199,17.65864'),(18,'Valašské Meziříčí','Vsetín','Zlínský','972774458','49.474833,17.961493'),(19,'Vsetín','Vsetín','Zlínský','972775193','49.335481,17.993942'),(20,'Zábřeh na Moravě','Šumperk','Olomoucký','972743352','49.824951,16.916842'),(21,'Česká Třebová','Ústí nad Orlicí','Pardubický','972325463','49.897454,16.446437'),(22,'Ústí nad Orlicí','Ústí nad Orlicí','Pardubický','972324330','49.971439,16.378019'),(23,'Svitavy','Svitavy','Pardubický','972326277','49.75926,16.479508'),(24,'Skalice nad Svitavou','Blansko','Jihomoravský','972622451','49.480087,16.609569'),(26,'Břeclav','Břeclav','Jihomoravský','972632445','48.753812,16.892515'),(27,'Znojmo','Znojmo','Jihomoravský','972634428','48.853075,16.059018');
/*!40000 ALTER TABLE `stations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trains`
--

DROP TABLE IF EXISTS `trains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) DEFAULT NULL,
  `stav_rezervace` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trains`
--

LOCK TABLES `trains` WRITE;
/*!40000 ALTER TABLE `trains` DISABLE KEYS */;
/*!40000 ALTER TABLE `trains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wagon_series`
--

DROP TABLE IF EXISTS `wagon_series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wagon_series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brzdici_vaha` int(11) DEFAULT NULL,
  `cislo` int(11) DEFAULT NULL,
  `delka` int(11) DEFAULT NULL,
  `oznaceni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pocet_naprav` int(11) DEFAULT NULL,
  `rozvor` int(11) DEFAULT NULL,
  `rucni_brzda` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unosnost` int(11) DEFAULT NULL,
  `vyska_nad_temenem_kolejnice` int(11) DEFAULT NULL,
  `vzdalenost_os` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wagon_series`
--

LOCK TABLES `wagon_series` WRITE;
/*!40000 ALTER TABLE `wagon_series` DISABLE KEYS */;
/*!40000 ALTER TABLE `wagon_series` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-12-20 23:58:35
