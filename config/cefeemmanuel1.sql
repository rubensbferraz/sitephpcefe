-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: cefeemmanuel1
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `tb_adm`
--

DROP TABLE IF EXISTS `tb_adm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_adm` (
  `idAdm` int NOT NULL,
  `nomeAdm` varchar(50) DEFAULT NULL,
  `senhaAdm` varchar(10) DEFAULT NULL,
  `funcaoAdm` varchar(20) DEFAULT NULL,
  `liberaAdm` varchar(50) DEFAULT NULL,
  `ativoAdm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_adm`
--

LOCK TABLES `tb_adm` WRITE;
/*!40000 ALTER TABLE `tb_adm` DISABLE KEYS */;
INSERT INTO `tb_adm` VALUES (1,'Alda Costa','cefe1234','Diretora','divulgacao',1),(2,'Rafael Camargo','cefe1234','Coordenador','Diretor',1);
/*!40000 ALTER TABLE `tb_adm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_autorespiritual`
--

DROP TABLE IF EXISTS `tb_autorespiritual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_autorespiritual` (
  `id` int NOT NULL AUTO_INCREMENT,
  `espiritoAutor` varchar(60) DEFAULT NULL,
  `id_psicografo` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_autorEspiritual_tb_psicografo1_idx` (`id_psicografo`),
  CONSTRAINT `fk_tb_autorEspiritual_tb_psicografo1` FOREIGN KEY (`id_psicografo`) REFERENCES `tb_psicografo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_autorespiritual`
--

LOCK TABLES `tb_autorespiritual` WRITE;
/*!40000 ALTER TABLE `tb_autorespiritual` DISABLE KEYS */;
INSERT INTO `tb_autorespiritual` VALUES (1,'Emmanuel',1),(2,'André Luiz',1),(3,'Joana de Ângelis',2);
/*!40000 ALTER TABLE `tb_autorespiritual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cidade`
--

DROP TABLE IF EXISTS `tb_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cidade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cidade`
--

LOCK TABLES `tb_cidade` WRITE;
/*!40000 ALTER TABLE `tb_cidade` DISABLE KEYS */;
INSERT INTO `tb_cidade` VALUES (1,'Brasilia','DF'),(2,'Taguatinga','DF');
/*!40000 ALTER TABLE `tb_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_editora`
--

DROP TABLE IF EXISTS `tb_editora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_editora` (
  `id` int NOT NULL AUTO_INCREMENT,
  `editora` varchar(80) DEFAULT NULL,
  `sigla` varchar(5) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `id_cidade` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_editora_tb_cidade1_idx` (`id_cidade`),
  CONSTRAINT `fk_tb_editora_tb_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `tb_cidade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_editora`
--

LOCK TABLES `tb_editora` WRITE;
/*!40000 ALTER TABLE `tb_editora` DISABLE KEYS */;
INSERT INTO `tb_editora` VALUES (1,'Federação Espírita Brasileira','FEB','Av. L2 Norte Qd 603 ','70830-103',1),(2,'Editora Auta de Souza','EAS','Setor D Sul, Área Especial 17','72020-000',2);
/*!40000 ALTER TABLE `tb_editora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_estante`
--

DROP TABLE IF EXISTS `tb_estante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_estante` (
  `id` int NOT NULL AUTO_INCREMENT,
  `precoCompra` double DEFAULT NULL,
  `qtParcelas` varchar(2) DEFAULT NULL,
  `dtCompra` date DEFAULT NULL,
  `enderecoEntrega` varchar(200) DEFAULT NULL,
  `cepEntrega` varchar(11) DEFAULT NULL,
  `pessoaResponsavel` varchar(45) DEFAULT NULL,
  `id_titulo` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_meioPagto` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_carrinho_tb_titulo1_idx` (`id_titulo`),
  KEY `fk_tb_carrinho_tb_usuario1_idx` (`id_usuario`),
  KEY `fk_tb_carrinho_tb_meioPagto1_idx` (`id_meioPagto`),
  CONSTRAINT `fk_tb_carrinho_tb_meioPagto1` FOREIGN KEY (`id_meioPagto`) REFERENCES `tb_meiopagto` (`id`),
  CONSTRAINT `fk_tb_carrinho_tb_titulo1` FOREIGN KEY (`id_titulo`) REFERENCES `tb_titulo` (`id`),
  CONSTRAINT `fk_tb_carrinho_tb_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_estante`
--

LOCK TABLES `tb_estante` WRITE;
/*!40000 ALTER TABLE `tb_estante` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_estante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `perfil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login`
--

LOCK TABLES `tb_login` WRITE;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_mediunica`
--

DROP TABLE IF EXISTS `tb_mediunica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_mediunica` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_psicografo` int NOT NULL,
  `id_tipoobra` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_mediunica_tb_psicografo1_idx` (`id_psicografo`),
  KEY `fk_tb_mediunica_tb_tipoobra1_idx` (`id_tipoobra`),
  CONSTRAINT `fk_tb_mediunica_tb_psicografo1` FOREIGN KEY (`id_psicografo`) REFERENCES `tb_psicografo` (`id`),
  CONSTRAINT `fk_tb_mediunica_tb_tipoobra1` FOREIGN KEY (`id_tipoobra`) REFERENCES `tb_tipoobra` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_mediunica`
--

LOCK TABLES `tb_mediunica` WRITE;
/*!40000 ALTER TABLE `tb_mediunica` DISABLE KEYS */;
INSERT INTO `tb_mediunica` VALUES (1,1,1),(2,2,1);
/*!40000 ALTER TABLE `tb_mediunica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_meiopagto`
--

DROP TABLE IF EXISTS `tb_meiopagto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_meiopagto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipoPagto` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_meiopagto`
--

LOCK TABLES `tb_meiopagto` WRITE;
/*!40000 ALTER TABLE `tb_meiopagto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_meiopagto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_nãomediunico`
--

DROP TABLE IF EXISTS `tb_nãomediunico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_nãomediunico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pesquisador` int NOT NULL,
  `id_tipoobra` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_naomediunico_tb_pesquisador1_idx` (`id_pesquisador`),
  KEY `fk_tb_naomediunico_tb_tipoobra1_idx` (`id_tipoobra`),
  CONSTRAINT `fk_tb_naomediunico_tb_pesquisador1` FOREIGN KEY (`id_pesquisador`) REFERENCES `tb_pesquisador` (`id`),
  CONSTRAINT `fk_tb_naomediunico_tb_tipoobra1` FOREIGN KEY (`id_tipoobra`) REFERENCES `tb_tipoobra` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_nãomediunico`
--

LOCK TABLES `tb_nãomediunico` WRITE;
/*!40000 ALTER TABLE `tb_nãomediunico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_nãomediunico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_palestra`
--

DROP TABLE IF EXISTS `tb_palestra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_palestra` (
  `idPalestra` int NOT NULL AUTO_INCREMENT,
  `dataPalestra` date DEFAULT NULL,
  `oradorPalestra` varchar(45) DEFAULT NULL,
  `temaPalestra` varchar(100) DEFAULT NULL,
  `diretorPalestra` varchar(45) DEFAULT NULL,
  `semanaPalestra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPalestra`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_palestra`
--

LOCK TABLES `tb_palestra` WRITE;
/*!40000 ALTER TABLE `tb_palestra` DISABLE KEYS */;
INSERT INTO `tb_palestra` VALUES (1,'2020-12-13','Antonio Anastasia','Para todos os jovens','Marieta','domingo'),(2,'2020-12-18','Carlos Marcio','testeSexta','João','sexta'),(3,'2020-12-20','Rosenery','Aniversário de Rubens','Betinho','domingo'),(4,'2020-12-25','Viviane','Alan Kardec sempre','Alda Costa','sexta'),(5,'2021-01-03','Mariana','O que voce quer saber','Eduardo','domingo'),(6,'2021-01-01','Rubens','O canto encanta a alma','Alda Costa','sexta'),(7,'2021-01-10','Luiz','Olha o que faço','Mariana ','domingo'),(8,'2021-01-17','Maria','Todos somos mararilhosos','Joãozinho','domingo'),(9,'2021-01-08','Valdemar','Todos felizes','Rosenery/Edna','sexta'),(10,'2021-01-15','Luiz Costa','Maria é Maria','Tião','sexta'),(11,'2021-01-22','Luiz Costa','Tu é o cara','Eduado','sexta'),(12,'2020-12-27','Maria Antonia','Mararilhosos pensamentos','Rosenery','domingo'),(13,'2021-01-24','Viviane','Este ano é ano de transformação','Rubens','domingo');
/*!40000 ALTER TABLE `tb_palestra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pesquisador`
--

DROP TABLE IF EXISTS `tb_pesquisador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pesquisador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pesquisador` varchar(180) DEFAULT NULL,
  `emailPesq` varchar(100) DEFAULT NULL,
  `celularPesq` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pesquisador`
--

LOCK TABLES `tb_pesquisador` WRITE;
/*!40000 ALTER TABLE `tb_pesquisador` DISABLE KEYS */;
INSERT INTO `tb_pesquisador` VALUES (1,'Sociedade Espírita Auta de Souza',NULL,NULL),(2,'Allan Kardec',NULL,NULL);
/*!40000 ALTER TABLE `tb_pesquisador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_psicografo`
--

DROP TABLE IF EXISTS `tb_psicografo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_psicografo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `psicografo` varchar(90) DEFAULT NULL,
  `emailPsi` varchar(180) DEFAULT NULL,
  `celularPsi` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_psicografo`
--

LOCK TABLES `tb_psicografo` WRITE;
/*!40000 ALTER TABLE `tb_psicografo` DISABLE KEYS */;
INSERT INTO `tb_psicografo` VALUES (1,'Francisco Cândido Xavier',NULL,NULL),(2,'Divaldo Pereira Franco',NULL,NULL);
/*!40000 ALTER TABLE `tb_psicografo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipoobra`
--

DROP TABLE IF EXISTS `tb_tipoobra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_tipoobra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipoObra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipoobra`
--

LOCK TABLES `tb_tipoobra` WRITE;
/*!40000 ALTER TABLE `tb_tipoobra` DISABLE KEYS */;
INSERT INTO `tb_tipoobra` VALUES (1,'Médiunico'),(2,'Pesquisa');
/*!40000 ALTER TABLE `tb_tipoobra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_titulo`
--

DROP TABLE IF EXISTS `tb_titulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_titulo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `edicao` varchar(20) DEFAULT NULL,
  `dtPublicacao` date DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `id_editora` int NOT NULL,
  `id_tipoobra` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_titulo_tb_editora_idx` (`id_editora`),
  KEY `fk_tb_titulo_tb_tipoobra1_idx` (`id_tipoobra`),
  CONSTRAINT `fk_tb_titulo_tb_editora` FOREIGN KEY (`id_editora`) REFERENCES `tb_editora` (`id`),
  CONSTRAINT `fk_tb_titulo_tb_tipoobra1` FOREIGN KEY (`id_tipoobra`) REFERENCES `tb_tipoobra` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_titulo`
--

LOCK TABLES `tb_titulo` WRITE;
/*!40000 ALTER TABLE `tb_titulo` DISABLE KEYS */;
INSERT INTO `tb_titulo` VALUES (1,'Pesamento e Vida','Esclarecedor ensinamento moral','19','2020-05-01','97885732880032',30,1,1),(2,'Caminho, Verdade e Vida','Esclarecimento de Emmanuel treichos biblicos','17','1997-08-01','8573280174',25,1,1),(3,'Agenda Reforma Íntma','Agenda','1','2019-11-01','9788583870678',20,2,2);
/*!40000 ALTER TABLE `tb_titulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `cepUsuario` varchar(11) DEFAULT NULL,
  `pais` varchar(25) DEFAULT NULL,
  `EnderecoUsuario` varchar(250) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celularUsuario` varchar(14) DEFAULT NULL,
  `dtNascimento` date DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `emailUsuario` varchar(180) DEFAULT NULL,
  `id_cidade` int NOT NULL,
  `id_login` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_usuario_tb_cidade1_idx` (`id_cidade`),
  KEY `fk_tb_usuario_tb_login1_idx` (`id_login`),
  CONSTRAINT `fk_tb_usuario_tb_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `tb_cidade` (`id`),
  CONSTRAINT `fk_tb_usuario_tb_login1` FOREIGN KEY (`id_login`) REFERENCES `tb_login` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'cefeemmanuel1'
--

--
-- Dumping routines for database 'cefeemmanuel1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-19 15:10:24
