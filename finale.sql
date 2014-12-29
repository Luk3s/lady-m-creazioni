-- MySQL dump 10.10
--
-- Host: localhost    Database: ladym
-- ------------------------------------------------------
-- Server version	5.0.26-community

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
-- Table structure for table `abracciali`
--

CREATE DATABASE ladym;
USE ladym;

DROP TABLE IF EXISTS `abracciali`;
CREATE TABLE `abracciali` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `chiusura` varchar(45) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abracciali`
--

LOCK TABLES `abracciali` WRITE;
/*!40000 ALTER TABLE `abracciali` DISABLE KEYS */;
/*!40000 ALTER TABLE `abracciali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acollane`
--

DROP TABLE IF EXISTS `acollane`;
CREATE TABLE `acollane` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `chiusura` varchar(45) default NULL,
  `montatura` varchar(45) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acollane`
--

LOCK TABLES `acollane` WRITE;
/*!40000 ALTER TABLE `acollane` DISABLE KEYS */;
/*!40000 ALTER TABLE `acollane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aorecchini`
--

DROP TABLE IF EXISTS `aorecchini`;
CREATE TABLE `aorecchini` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `larghezza` varchar(10) default NULL,
  `chiusura` varchar(45) default NULL,
  `montatura` varchar(45) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aorecchini`
--

LOCK TABLES `aorecchini` WRITE;
/*!40000 ALTER TABLE `aorecchini` DISABLE KEYS */;
/*!40000 ALTER TABLE `aorecchini` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aportachiavi`
--

DROP TABLE IF EXISTS `aportachiavi`;
CREATE TABLE `aportachiavi` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aportachiavi`
--

LOCK TABLES `aportachiavi` WRITE;
/*!40000 ALTER TABLE `aportachiavi` DISABLE KEYS */;
/*!40000 ALTER TABLE `aportachiavi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bracciali`
--

DROP TABLE IF EXISTS `bracciali`;
CREATE TABLE `bracciali` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `chiusura` varchar(45) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bracciali`
--

LOCK TABLES `bracciali` WRITE;
/*!40000 ALTER TABLE `bracciali` DISABLE KEYS */;
INSERT INTO `bracciali` VALUES (3,'Bracciale Alba','Bracciale con catena in argento bianco 9.25 con pendenti in agata gialla sfaccettata',4000,'36','22','Moschettone','bracciali'),(5,'Bracciale Corail Rouge','Bracciale con catena in argento bianco 9.25 con pendenti in radice di corallo rosso',5000,'24','21','Gancio molla','bracciali');
/*!40000 ALTER TABLE `bracciali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collane`
--

DROP TABLE IF EXISTS `collane`;
CREATE TABLE `collane` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `chiusura` varchar(45) default NULL,
  `montatura` varchar(45) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collane`
--

LOCK TABLES `collane` WRITE;
/*!40000 ALTER TABLE `collane` DISABLE KEYS */;
INSERT INTO `collane` VALUES (1,'Collana Cuore di Ametista','Collana in schegge di ametista. Il ciondolo è composto da ametista, perle di lago e cristalli',10000,'115','49','','Acciaio','collane'),(2,'Collana Modello Chanel','Collana in agata sfaccettata gialla, verde e marrone, intercalata da pietre di quarzo e azzurrite',6000,'100','37','Moschettone','Argento bianco 9.25','collane'),(4,'Collana Armonia','Stupenda collana che alterna perle di lago della tailandia ed ametista sfaccettata a pietre di onice nero e cristalli di rocca',15589,'100','33','Gancio molla','Argento bianco 9.25','collane');
/*!40000 ALTER TABLE `collane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idtipo`
--

DROP TABLE IF EXISTS `idtipo`;
CREATE TABLE `idtipo` (
  `codice` int(10) unsigned NOT NULL auto_increment,
  `tabella` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idtipo`
--

LOCK TABLES `idtipo` WRITE;
/*!40000 ALTER TABLE `idtipo` DISABLE KEYS */;
INSERT INTO `idtipo` VALUES (1,'collane'),(2,'collane'),(3,'bracciali'),(4,'collane'),(5,'bracciali'),(6,'orecchini'),(7,'orecchini'),(8,'portachiavi');
/*!40000 ALTER TABLE `idtipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orecchini`
--

DROP TABLE IF EXISTS `orecchini`;
CREATE TABLE `orecchini` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `larghezza` varchar(10) default NULL,
  `chiusura` varchar(45) default NULL,
  `montatura` varchar(45) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orecchini`
--

LOCK TABLES `orecchini` WRITE;
/*!40000 ALTER TABLE `orecchini` DISABLE KEYS */;
INSERT INTO `orecchini` VALUES (6,'Orecchini in Onice e Bamboo','Orecchini in corallo di bambù rosso e onice nero sfaccettato. Il cerchio è in onice nero liscio con al centro una sfera in cristallo di rocca',4000,'31','8','3','Monachella in Argento','Argento Bianco','orecchini'),(7,'Orecchini Cherry','Orecchini con perle di lago della tailandia, cristallo di rocca sfaccettato e quarzo cherry',6000,'18','8','1.5','Monachella in Argento','Argento Bianco','orecchini');
/*!40000 ALTER TABLE `orecchini` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portachiavi`
--

DROP TABLE IF EXISTS `portachiavi`;
CREATE TABLE `portachiavi` (
  `codice` int(10) unsigned NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrizione` varchar(256) default NULL,
  `prezzo` int(10) unsigned NOT NULL,
  `peso` varchar(10) default NULL,
  `lunghezza` varchar(10) default NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY  (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portachiavi`
--

LOCK TABLES `portachiavi` WRITE;
/*!40000 ALTER TABLE `portachiavi` DISABLE KEYS */;
INSERT INTO `portachiavi` VALUES (8,'Portachiavi Smeraldo','Portachiavi montato in metallo con cristalli sintetici',3900,'60','13','portachiavi');
/*!40000 ALTER TABLE `portachiavi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-02-22 14:30:56