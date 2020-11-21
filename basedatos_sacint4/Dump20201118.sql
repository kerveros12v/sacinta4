-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: intsistemaa7
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.2

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
-- Table structure for table `LoginGeneral`
--

DROP TABLE IF EXISTS `LoginGeneral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LoginGeneral` (
  `idlogingeneral` int NOT NULL AUTO_INCREMENT,
  `idcuenta` decimal(21,0) DEFAULT NULL,
  `logincorreo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `numIndentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idlogingeneral`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LoginGeneral`
--

LOCK TABLES `LoginGeneral` WRITE;
/*!40000 ALTER TABLE `LoginGeneral` DISABLE KEYS */;
/*!40000 ALTER TABLE `LoginGeneral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SeteCondicionLaboral`
--

DROP TABLE IF EXISTS `SeteCondicionLaboral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SeteCondicionLaboral` (
  `idSeteCondicionLaboral` int NOT NULL AUTO_INCREMENT,
  `seteCondicionLaboralEmpresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralCedula` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralFecharegistro` date DEFAULT NULL,
  `seteCondicionLaboralacenso` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralsatisfaccion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralAgotamiento` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralRespeto` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralReconocimiento` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralRiesgo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralCambio` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralBonificacion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralTransporte` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteCondicionLaboralCapacitacion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idSeteCondicionLaboral`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SeteCondicionLaboral`
--

LOCK TABLES `SeteCondicionLaboral` WRITE;
/*!40000 ALTER TABLE `SeteCondicionLaboral` DISABLE KEYS */;
/*!40000 ALTER TABLE `SeteCondicionLaboral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accesodepartamento`
--

DROP TABLE IF EXISTS `accesodepartamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accesodepartamento` (
  `idaccesodepartamento` int NOT NULL AUTO_INCREMENT,
  `accesodepartamentocodigo` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `departamentos_iddepartamentos` int NOT NULL,
  `tipousuario_idtipousuario` int NOT NULL,
  `accesodepartamentoAccion` int DEFAULT NULL,
  `accesodepartamentoOculto` int DEFAULT NULL,
  `accesodepartamentoFecha` date DEFAULT NULL,
  `accesodepartamentoUser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idaccesodepartamento`),
  KEY `fk_accesodepartamento_departamentos1_idx` (`departamentos_iddepartamentos`),
  KEY `fk_accesodepartamento_tipousuario1_idx` (`tipousuario_idtipousuario`),
  CONSTRAINT `fk_accesodepartamento_departamentos1` FOREIGN KEY (`departamentos_iddepartamentos`) REFERENCES `departamentos` (`iddepartamentos`),
  CONSTRAINT `fk_accesodepartamento_tipousuario1` FOREIGN KEY (`tipousuario_idtipousuario`) REFERENCES `tipousuario` (`idtipousuario`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesodepartamento`
--

LOCK TABLES `accesodepartamento` WRITE;
/*!40000 ALTER TABLE `accesodepartamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesodepartamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aplicacionbecas`
--

DROP TABLE IF EXISTS `aplicacionbecas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aplicacionbecas` (
  `idAplicacionBecas` int NOT NULL AUTO_INCREMENT,
  `aplicacionbecascodigo` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fktipoBecaId` int NOT NULL,
  `fkfinanciamientoBecaid` int NOT NULL,
  `montoBeca` int DEFAULT NULL,
  `porcientoBecaCoberturaManuntencion` int DEFAULT NULL,
  `porcientoBecaCoberturaArancel` int DEFAULT NULL,
  `fkprimeraRazonBecaId` int NOT NULL,
  `fksegundaRazonBecaId` int NOT NULL,
  `fkterceraRazonBecaId` int NOT NULL,
  `fkcuartaRazonBecaId` int NOT NULL,
  `fkquintaRazonBecaId` int NOT NULL,
  `fksextaRazonBecaId` int NOT NULL,
  `fknumeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `abfechainicio` date DEFAULT NULL,
  `abfechafin` date DEFAULT NULL,
  `abperiodo` int DEFAULT NULL,
  `abobservaciones` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `abactivo` int DEFAULT NULL,
  `aplicacionbecasOculto` int DEFAULT NULL,
  `aplicacionbecasAccion` int DEFAULT NULL,
  `aplicacionbecasfecha` date DEFAULT NULL,
  `aplicacionbecasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idAplicacionBecas`),
  KEY `fk_AplicacionBecas_FinanciamientoBeca1_idx` (`fkfinanciamientoBecaid`),
  KEY `fk_AplicacionBecas_TipoBeca1_idx` (`fktipoBecaId`),
  KEY `fk_AplicacionBecas_SextaRazonBeca1_idx` (`fksextaRazonBecaId`),
  KEY `fk_AplicacionBecas_SegundaRazonBeca1_idx` (`fksegundaRazonBecaId`),
  KEY `fk_AplicacionBecas_PrimeraRazonBeca1_idx` (`fkprimeraRazonBecaId`),
  KEY `fk_AplicacionBecas_TerceraRazonBeca1_idx` (`fkterceraRazonBecaId`),
  KEY `fk_AplicacionBecas_QuintaRazonBeca1_idx` (`fkquintaRazonBecaId`),
  KEY `fk_AplicacionBecas_CuartaRazonBeca1_idx` (`fkcuartaRazonBecaId`),
  KEY `fk_aplicacionbecas_estudiantes1` (`fknumeroIdentificacion`),
  KEY `fk_aplicacionbecas_estudiantes1_idx` (`fknumeroIdentificacion`),
  KEY `fk_aplicacionbecas_PeriodoAcademico_idx` (`abperiodo`),
  CONSTRAINT `fk_AplicacionBecas_CuartaRazonBeca1` FOREIGN KEY (`fkcuartaRazonBecaId`) REFERENCES `cuartarazonbeca` (`cuartaRazonBecaId`),
  CONSTRAINT `fk_aplicacionbecas_estudiantes1` FOREIGN KEY (`fknumeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_AplicacionBecas_FinanciamientoBeca1` FOREIGN KEY (`fkfinanciamientoBecaid`) REFERENCES `financiamientobeca` (`financiamientoBecaid`),
  CONSTRAINT `fk_aplicacionbecas_PeriodoAcademico` FOREIGN KEY (`abperiodo`) REFERENCES `periodoacademico` (`periodoacademicoId`),
  CONSTRAINT `fk_AplicacionBecas_PrimeraRazonBeca1` FOREIGN KEY (`fkprimeraRazonBecaId`) REFERENCES `primerarazonbeca` (`primeraRazonBecaId`),
  CONSTRAINT `fk_AplicacionBecas_QuintaRazonBeca1` FOREIGN KEY (`fkquintaRazonBecaId`) REFERENCES `quintarazonbeca` (`quintaRazonBecaId`),
  CONSTRAINT `fk_AplicacionBecas_SegundaRazonBeca1` FOREIGN KEY (`fksegundaRazonBecaId`) REFERENCES `segundarazonbeca` (`segundaRazonBecaId`),
  CONSTRAINT `fk_AplicacionBecas_SextaRazonBeca1` FOREIGN KEY (`fksextaRazonBecaId`) REFERENCES `sextarazonbeca` (`sextaRazonBecaId`),
  CONSTRAINT `fk_AplicacionBecas_TerceraRazonBeca1` FOREIGN KEY (`fkterceraRazonBecaId`) REFERENCES `tercerarazonbeca` (`terceraRazonBecaId`),
  CONSTRAINT `fk_AplicacionBecas_TipoBeca1` FOREIGN KEY (`fktipoBecaId`) REFERENCES `tipobeca` (`tipoBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aplicacionbecas`
--

LOCK TABLES `aplicacionbecas` WRITE;
/*!40000 ALTER TABLE `aplicacionbecas` DISABLE KEYS */;
/*!40000 ALTER TABLE `aplicacionbecas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignaturas` (
  `asignaturasId` int NOT NULL AUTO_INCREMENT,
  `codigoMateria` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `materia` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `asignaturasOculto` int DEFAULT NULL,
  `asignaturasAccion` int DEFAULT NULL,
  `asignaturasfecha` date DEFAULT NULL,
  `asignaturasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`asignaturasId`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignaturas`
--

LOCK TABLES `asignaturas` WRITE;
/*!40000 ALTER TABLE `asignaturas` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignaturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistenciaestudiantes`
--

DROP TABLE IF EXISTS `asistenciaestudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asistenciaestudiantes` (
  `asistenciaEstudiantesId` int NOT NULL AUTO_INCREMENT,
  `asistenciaestudiantescodigo` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `matriculas_matriculasId` int NOT NULL,
  `fktipoAsistenciaEstudiantesId` int NOT NULL,
  `fkdistributivocursoasignaturaid` int NOT NULL,
  `asistenciaestudiantesOculto` int DEFAULT NULL,
  `asistenciaestudiantesAccion` int DEFAULT NULL,
  `asistenciaestudiantesfecha` date DEFAULT NULL,
  `asistenciaestudiantesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`asistenciaEstudiantesId`),
  KEY `fk_asistenciaestudiantes_tipoasistenciaestudiantes1_idx` (`fktipoAsistenciaEstudiantesId`),
  KEY `fk_asistenciaestudiantes_matriculas1_idx` (`matriculas_matriculasId`),
  KEY `fk_asistenciaestudiantes_distributivocursoasignatura1_idx` (`fkdistributivocursoasignaturaid`),
  CONSTRAINT `fk_asistenciaestudiantes_distributivocursoasignatura1` FOREIGN KEY (`fkdistributivocursoasignaturaid`) REFERENCES `distributivocursoasignatura` (`distributivocursoasignaturaid`),
  CONSTRAINT `fk_asistenciaestudiantes_matriculas1` FOREIGN KEY (`matriculas_matriculasId`) REFERENCES `matriculas` (`matriculasId`),
  CONSTRAINT `fk_asistenciaestudiantes_tipoasistenciaestudiantes1` FOREIGN KEY (`fktipoAsistenciaEstudiantesId`) REFERENCES `tipoasistenciaestudiantes` (`tipoAsistenciaEstudiantesId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistenciaestudiantes`
--

LOCK TABLES `asistenciaestudiantes` WRITE;
/*!40000 ALTER TABLE `asistenciaestudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `asistenciaestudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bachillerato`
--

DROP TABLE IF EXISTS `bachillerato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bachillerato` (
  `bachilleratoId` int NOT NULL AUTO_INCREMENT,
  `fkEstudiantesNumeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fkTiposBacilleratotiposBacilleratoId` int NOT NULL,
  `anioGraduacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `colegios_idColegios` int NOT NULL,
  `bachilleratoOculto` int DEFAULT NULL,
  `bachilleratoAccion` int DEFAULT NULL,
  `bachilleratofecha` date DEFAULT NULL,
  `bachilleratouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`bachilleratoId`),
  KEY `fk_Bachillerato_Estudiantes1_idx` (`fkEstudiantesNumeroIdentificacion`),
  KEY `fk_Bachillerato_TiposBacillerato1_idx` (`fkTiposBacilleratotiposBacilleratoId`),
  KEY `fk_bachillerato_colegios1_idx` (`colegios_idColegios`),
  CONSTRAINT `fk_bachillerato_colegios1` FOREIGN KEY (`colegios_idColegios`) REFERENCES `colegios` (`idColegios`),
  CONSTRAINT `fk_Bachillerato_Estudiantes1` FOREIGN KEY (`fkEstudiantesNumeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_Bachillerato_TiposBacillerato1` FOREIGN KEY (`fkTiposBacilleratotiposBacilleratoId`) REFERENCES `tiposbacillerato` (`tiposBacilleratoId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bachillerato`
--

LOCK TABLES `bachillerato` WRITE;
/*!40000 ALTER TABLE `bachillerato` DISABLE KEYS */;
/*!40000 ALTER TABLE `bachillerato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `becasdocentes`
--

DROP TABLE IF EXISTS `becasdocentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `becasdocentes` (
  `becasDocentesId` int NOT NULL AUTO_INCREMENT,
  `becasdocentescodigo` int NOT NULL,
  `montoBeca` int DEFAULT NULL,
  `fechainicioBeca` date DEFAULT NULL,
  `fechaFinBeca` date DEFAULT NULL,
  `docentes_numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `poseeBeca_poseeBecaId` int NOT NULL,
  `fBDfinanciamientoBecaId` int NOT NULL,
  `tipoBeca_tipoBecaId` int NOT NULL,
  `becasdocentesOculto` int DEFAULT NULL,
  `becasdocentesAccion` int DEFAULT NULL,
  `becasdocentesfecha` date DEFAULT NULL,
  `becasdocentesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`becasDocentesId`),
  KEY `fk_BecasDocentes_PoseeBeca1_idx` (`poseeBeca_poseeBecaId`),
  KEY `fk_BecasDocentes_FinanciamientoBecaDocentes1_idx` (`fBDfinanciamientoBecaId`),
  KEY `fk_BecasDocentes_TipoBeca1_idx` (`tipoBeca_tipoBecaId`),
  KEY `fk_BecasDocentes_Docentes1_idx` (`docentes_numeroIdentificacion`),
  CONSTRAINT `fk_BecasDocentes_Docentes1` FOREIGN KEY (`docentes_numeroIdentificacion`) REFERENCES `docentes` (`numeroIdentificacion`),
  CONSTRAINT `fk_BecasDocentes_FinanciamientoBecaDocentes1` FOREIGN KEY (`fBDfinanciamientoBecaId`) REFERENCES `financiamientobecadocentes` (`financiamientoBecaId`),
  CONSTRAINT `fk_BecasDocentes_PoseeBeca1` FOREIGN KEY (`poseeBeca_poseeBecaId`) REFERENCES `poseebeca` (`poseeBecaId`),
  CONSTRAINT `fk_BecasDocentes_TipoBeca1` FOREIGN KEY (`tipoBeca_tipoBecaId`) REFERENCES `tipobeca` (`tipoBecaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `becasdocentes`
--

LOCK TABLES `becasdocentes` WRITE;
/*!40000 ALTER TABLE `becasdocentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `becasdocentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bimestres`
--

DROP TABLE IF EXISTS `bimestres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bimestres` (
  `idBimestres` int NOT NULL AUTO_INCREMENT,
  `bimestrescodigo` int DEFAULT NULL,
  `bimestre` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `bimestresOculto` int DEFAULT NULL,
  `bimestresAccion` int DEFAULT NULL,
  `bimestresfecha` date DEFAULT NULL,
  `bimestresuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idBimestres`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bimestres`
--

LOCK TABLES `bimestres` WRITE;
/*!40000 ALTER TABLE `bimestres` DISABLE KEYS */;
/*!40000 ALTER TABLE `bimestres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bonodesarrollo`
--

DROP TABLE IF EXISTS `bonodesarrollo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bonodesarrollo` (
  `bonoDesarrolloId` int NOT NULL AUTO_INCREMENT,
  `bonodesarrollocodigo` int DEFAULT NULL,
  `bonoDesarrollo` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `bonodesarrolloOculto` int DEFAULT NULL,
  `bonodesarrolloAccion` int DEFAULT NULL,
  `bonodesarrollofecha` date DEFAULT NULL,
  `bonodesarrollouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`bonoDesarrolloId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bonodesarrollo`
--

LOCK TABLES `bonodesarrollo` WRITE;
/*!40000 ALTER TABLE `bonodesarrollo` DISABLE KEYS */;
/*!40000 ALTER TABLE `bonodesarrollo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendario`
--

DROP TABLE IF EXISTS `calendario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calendario` (
  `idcalendario` int NOT NULL,
  `calendariocodigo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `calendarioactividades` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `calendariofechaactividad` date DEFAULT NULL,
  `calendarioTipo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `calendariomoduloactivo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `calendariooculto` int DEFAULT NULL,
  `calendarioaccion` int DEFAULT NULL,
  `calendariofecha` date DEFAULT NULL,
  `calendariouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idcalendario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendario`
--

LOCK TABLES `calendario` WRITE;
/*!40000 ALTER TABLE `calendario` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `canton`
--

DROP TABLE IF EXISTS `canton`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `canton` (
  `cantonId` int NOT NULL AUTO_INCREMENT,
  `cantoncodigo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `canton` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cantonprovincia` int NOT NULL,
  `cantonOculto` int DEFAULT NULL,
  `cantonAccion` int DEFAULT NULL,
  `cantonfecha` date DEFAULT NULL,
  `cantonuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`cantonId`),
  KEY `fk_canton_provincia1_idx` (`cantonprovincia`),
  CONSTRAINT `fk_canton_provincia1` FOREIGN KEY (`cantonprovincia`) REFERENCES `provincia` (`provinciaId`)
) ENGINE=InnoDB AUTO_INCREMENT=10262 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canton`
--

LOCK TABLES `canton` WRITE;
/*!40000 ALTER TABLE `canton` DISABLE KEYS */;
/*!40000 ALTER TABLE `canton` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargodirectivo`
--

DROP TABLE IF EXISTS `cargodirectivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargodirectivo` (
  `cargoDirectivoId` int NOT NULL AUTO_INCREMENT,
  `cargodirectivocodigo` int DEFAULT NULL,
  `cargoDirectivo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cargodirectivoOculto` int DEFAULT NULL,
  `cargodirectivoAccion` int DEFAULT NULL,
  `cargodirectivofecha` date DEFAULT NULL,
  `cargodirectivouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`cargoDirectivoId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargodirectivo`
--

LOCK TABLES `cargodirectivo` WRITE;
/*!40000 ALTER TABLE `cargodirectivo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargodirectivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargogestiondireccionacademico`
--

DROP TABLE IF EXISTS `cargogestiondireccionacademico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargogestiondireccionacademico` (
  `cargoGestionDireccionAcademicoId` int NOT NULL AUTO_INCREMENT,
  `cargogestiondireccionacademicocodigo` int DEFAULT NULL,
  `cargo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fkcargoDirectivoId` int NOT NULL,
  `cargogestiondireccionacademicoOculto` int DEFAULT NULL,
  `cargogestiondireccionacademicoAccion` int DEFAULT NULL,
  `cargogestiondireccionacademicofecha` date DEFAULT NULL,
  `cargogestiondireccionacademicouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`cargoGestionDireccionAcademicoId`),
  KEY `fk_CargoGestionDireccionAcademico_CargoDirectivo1_idx` (`fkcargoDirectivoId`),
  CONSTRAINT `fk_CargoGestionDireccionAcademico_CargoDirectivo1` FOREIGN KEY (`fkcargoDirectivoId`) REFERENCES `cargodirectivo` (`cargoDirectivoId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargogestiondireccionacademico`
--

LOCK TABLES `cargogestiondireccionacademico` WRITE;
/*!40000 ALTER TABLE `cargogestiondireccionacademico` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargogestiondireccionacademico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carreras`
--

DROP TABLE IF EXISTS `carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carreras` (
  `carrerasId` int NOT NULL AUTO_INCREMENT,
  `codigoCarreras` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `carrera` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estado` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `carreraTituloAOptener` int DEFAULT NULL,
  `fktipoCarrerasId` int NOT NULL,
  `fkmodalidadCarreraId` int NOT NULL,
  `carrerasinstituto` int DEFAULT NULL,
  `carreraOculto` int DEFAULT NULL,
  `carreraAccion` int DEFAULT NULL,
  `carrerafecha` date DEFAULT NULL,
  `carrerauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`carrerasId`),
  KEY `fk_Carreras_TipoCarreras1_idx` (`fktipoCarrerasId`),
  KEY `fk_Carreras_ModalidadCarrera1_idx` (`fkmodalidadCarreraId`),
  CONSTRAINT `fk_Carreras_ModalidadCarrera1` FOREIGN KEY (`fkmodalidadCarreraId`) REFERENCES `modalidadcarrera` (`modalidadCarreraId`),
  CONSTRAINT `fk_Carreras_TipoCarreras1` FOREIGN KEY (`fktipoCarrerasId`) REFERENCES `tipocarreras` (`tipoCarrerasId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carreras`
--

LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoriasmigratoria`
--

DROP TABLE IF EXISTS `categoriasmigratoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoriasmigratoria` (
  `categoriaMigratoriaId` int NOT NULL AUTO_INCREMENT,
  `categoriasmigratoriacodigo` int DEFAULT NULL,
  `categoriaMigratoria` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `categoriasmigratoriaOculto` int DEFAULT NULL,
  `categoriasmigratoriaAccion` int DEFAULT NULL,
  `categoriasmigratoriafecha` date DEFAULT NULL,
  `categoriasmigratoriauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`categoriaMigratoriaId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoriasmigratoria`
--

LOCK TABLES `categoriasmigratoria` WRITE;
/*!40000 ALTER TABLE `categoriasmigratoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoriasmigratoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cicloperiodo`
--

DROP TABLE IF EXISTS `cicloperiodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cicloperiodo` (
  `idcicloperiodo` int NOT NULL AUTO_INCREMENT,
  `cicloperiodocodigo` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ciclo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cicloperiodoOculto` int DEFAULT NULL,
  `cicloperiodoAccion` int DEFAULT NULL,
  `cicloperiodofecha` date DEFAULT NULL,
  `cicloperiodouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idcicloperiodo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cicloperiodo`
--

LOCK TABLES `cicloperiodo` WRITE;
/*!40000 ALTER TABLE `cicloperiodo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cicloperiodo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colegios`
--

DROP TABLE IF EXISTS `colegios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colegios` (
  `idColegios` int NOT NULL AUTO_INCREMENT,
  `colegioscodigo` int DEFAULT NULL,
  `colegio` varchar(125) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `canton_cantonId` int NOT NULL,
  `tipoColegio_tipoColegioId` int NOT NULL,
  `colegiosOculto` int DEFAULT NULL,
  `colegiosAccion` int DEFAULT NULL,
  `colegiosfecha` date DEFAULT NULL,
  `colegiosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idColegios`),
  KEY `fk_Colegios_Canton1_idx` (`canton_cantonId`),
  KEY `fk_Colegios_TipoColegio1_idx` (`tipoColegio_tipoColegioId`),
  CONSTRAINT `fk_Colegios_Canton1` FOREIGN KEY (`canton_cantonId`) REFERENCES `canton` (`cantonId`),
  CONSTRAINT `fk_Colegios_TipoColegio1` FOREIGN KEY (`tipoColegio_tipoColegioId`) REFERENCES `tipocolegio` (`tipoColegioId`)
) ENGINE=InnoDB AUTO_INCREMENT=5720 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colegios`
--

LOCK TABLES `colegios` WRITE;
/*!40000 ALTER TABLE `colegios` DISABLE KEYS */;
/*!40000 ALTER TABLE `colegios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactosemergencia`
--

DROP TABLE IF EXISTS `contactosemergencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactosemergencia` (
  `contactosEmergenciaId` int NOT NULL AUTO_INCREMENT,
  `nombreContactoEmergencia` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `numeroContactosEmergencia` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estudiantes_numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `parentescos_idParentescos` int NOT NULL,
  `contactosperiodo` int NOT NULL,
  `contactosemergenciaOculto` int DEFAULT NULL,
  `contactosemergenciaAccion` int DEFAULT NULL,
  `contactosemergenciafecha` date DEFAULT NULL,
  `contactosemergenciauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`contactosEmergenciaId`),
  KEY `fk_ContactosEmergencia_Parentescos1_idx` (`parentescos_idParentescos`),
  KEY `fk_contactosemergencia_estudiantes1_idx` (`estudiantes_numeroIdentificacion`),
  KEY `fk_contactosemergencia_Periodos1` (`contactosperiodo`),
  CONSTRAINT `fk_contactosemergencia_estudiantes1` FOREIGN KEY (`estudiantes_numeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_ContactosEmergencia_Parentescos1` FOREIGN KEY (`parentescos_idParentescos`) REFERENCES `parentescos` (`idParentescos`),
  CONSTRAINT `fk_contactosemergencia_Periodos1` FOREIGN KEY (`contactosperiodo`) REFERENCES `periodoacademico` (`periodoacademicoId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactosemergencia`
--

LOCK TABLES `contactosemergencia` WRITE;
/*!40000 ALTER TABLE `contactosemergencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactosemergencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuartarazonbeca`
--

DROP TABLE IF EXISTS `cuartarazonbeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cuartarazonbeca` (
  `cuartaRazonBecaId` int NOT NULL AUTO_INCREMENT,
  `cuartarazonbecacodigo` int DEFAULT NULL,
  `cuartaRazonBeca` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cuartarazonbecabool` int DEFAULT NULL,
  `cuartarazonbecaOculto` int DEFAULT NULL,
  `cuartarazonbecaAccion` int DEFAULT NULL,
  `cuartarazonbecafecha` date DEFAULT NULL,
  `cuartarazonbecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`cuartaRazonBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuartarazonbeca`
--

LOCK TABLES `cuartarazonbeca` WRITE;
/*!40000 ALTER TABLE `cuartarazonbeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuartarazonbeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `idCursos` int NOT NULL AUTO_INCREMENT,
  `cursoscodigo` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fkcarrerasId` int NOT NULL,
  `fkparaleloId` int NOT NULL,
  `fknivelAcademicoQueCursaId` int NOT NULL,
  `fkjJornadaAcademicaId` int NOT NULL,
  `fkperiodo` int DEFAULT NULL,
  `cursosOculto` int DEFAULT NULL,
  `cursosAccion` int DEFAULT NULL,
  `cursosfecha` date DEFAULT NULL,
  `cursosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idCursos`),
  KEY `fk_Cursos_Carreras1_idx` (`fkcarrerasId`),
  KEY `fk_Cursos_NivelAcademico1_idx` (`fknivelAcademicoQueCursaId`),
  KEY `fk_Cursos_JornadasAcademicas1_idx` (`fkjJornadaAcademicaId`),
  KEY `fk_Cursos_Paralelo1_idx` (`fkparaleloId`),
  KEY `fk_cursos_Periodo1_idx` (`fkperiodo`),
  CONSTRAINT `fk_Cursos_Carreras1` FOREIGN KEY (`fkcarrerasId`) REFERENCES `carreras` (`carrerasId`),
  CONSTRAINT `fk_Cursos_JornadasAcademicas1` FOREIGN KEY (`fkjJornadaAcademicaId`) REFERENCES `jornadasacademicas` (`jornadaAcademicaId`),
  CONSTRAINT `fk_Cursos_NivelAcademico1` FOREIGN KEY (`fknivelAcademicoQueCursaId`) REFERENCES `nivelacademico` (`nivelAcademicoQueCursaId`),
  CONSTRAINT `fk_Cursos_Paralelo1` FOREIGN KEY (`fkparaleloId`) REFERENCES `paralelo` (`paraleloId`),
  CONSTRAINT `fk_cursos_Periodo1` FOREIGN KEY (`fkperiodo`) REFERENCES `periodoacademico` (`periodoacademicoId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursosperiodoacademico`
--

DROP TABLE IF EXISTS `cursosperiodoacademico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursosperiodoacademico` (
  `periodoAcademicoCursoId` int NOT NULL AUTO_INCREMENT,
  `cursosperiodoacademicocodigo` int DEFAULT NULL,
  `fkperiodoacademicoId` int NOT NULL,
  `fkidCursos` int NOT NULL,
  `cursosperiodoacademicoOculto` int DEFAULT NULL,
  `cursosperiodoacademicoAccion` int DEFAULT NULL,
  `cursosperiodoacademicofecha` date DEFAULT NULL,
  `cursosperiodoacademicouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`periodoAcademicoCursoId`),
  KEY `fk_PeriodoAcademico_has_Cursos_Cursos1_idx` (`fkidCursos`),
  KEY `fk_PeriodoAcademico_has_Cursos_PeriodoAcademico1` (`fkperiodoacademicoId`),
  CONSTRAINT `fk_PeriodoAcademico_has_Cursos_Cursos1` FOREIGN KEY (`fkidCursos`) REFERENCES `cursos` (`idCursos`),
  CONSTRAINT `fk_PeriodoAcademico_has_Cursos_PeriodoAcademico1` FOREIGN KEY (`fkperiodoacademicoId`) REFERENCES `periodoacademico` (`periodoacademicoId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursosperiodoacademico`
--

LOCK TABLES `cursosperiodoacademico` WRITE;
/*!40000 ALTER TABLE `cursosperiodoacademico` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursosperiodoacademico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departamentos` (
  `iddepartamentos` int NOT NULL AUTO_INCREMENT,
  `departamento` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `departamentosSubdivision` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `departamentosparametro` int DEFAULT NULL,
  `departamentosOculto` int DEFAULT NULL,
  `departamentosAccion` int DEFAULT NULL,
  `departamentosfecha` date DEFAULT NULL,
  `departamentosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`iddepartamentos`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desertoresretirados`
--

DROP TABLE IF EXISTS `desertoresretirados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `desertoresretirados` (
  `idDesertoresRetiradosId` int NOT NULL AUTO_INCREMENT,
  `codigoITS` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `provincia_provinciaId` int NOT NULL,
  `tipoRetiroEstudianteId` int NOT NULL,
  `matriculas_matriculasId` int NOT NULL,
  `desertoresretiradosMateria` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fechaDelDocumentoHabilitantePresentado` date DEFAULT NULL,
  `desertoresretiradosOculto` int DEFAULT NULL,
  `desertoresretiradosAccion` int DEFAULT NULL,
  `desertoresretiradosfecha` date DEFAULT NULL,
  `desertoresretiradosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idDesertoresRetiradosId`),
  KEY `fk_desertoresretirados_provincia1_idx` (`provincia_provinciaId`),
  KEY `fk_desertoresretirados_tiporetiroestudiante1_idx` (`tipoRetiroEstudianteId`),
  KEY `fk_desertoresretirados_matriculas1_idx` (`matriculas_matriculasId`),
  CONSTRAINT `fk_desertoresretirados_matriculas1` FOREIGN KEY (`matriculas_matriculasId`) REFERENCES `matriculas` (`matriculasId`),
  CONSTRAINT `fk_desertoresretirados_provincia1` FOREIGN KEY (`provincia_provinciaId`) REFERENCES `provincia` (`provinciaId`),
  CONSTRAINT `fk_desertoresretirados_tiporetiroestudiante1` FOREIGN KEY (`tipoRetiroEstudianteId`) REFERENCES `tiporetiroestudiante` (`tipoRetiroEstudianteId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desertoresretirados`
--

LOCK TABLES `desertoresretirados` WRITE;
/*!40000 ALTER TABLE `desertoresretirados` DISABLE KEYS */;
/*!40000 ALTER TABLE `desertoresretirados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dias`
--

DROP TABLE IF EXISTS `dias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dias` (
  `idDias` int NOT NULL AUTO_INCREMENT,
  `dia` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `diasOculto` int DEFAULT NULL,
  `diasAccion` int DEFAULT NULL,
  `diasfecha` date DEFAULT NULL,
  `diasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idDias`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dias`
--

LOCK TABLES `dias` WRITE;
/*!40000 ALTER TABLE `dias` DISABLE KEYS */;
/*!40000 ALTER TABLE `dias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discapacidad`
--

DROP TABLE IF EXISTS `discapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discapacidad` (
  `discapacidadId` int NOT NULL AUTO_INCREMENT,
  `discapacidadcodigo` int DEFAULT NULL,
  `discapacidad` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `discapacidadbool` tinyint DEFAULT NULL,
  `discapacidadOculto` int DEFAULT NULL,
  `discapacidadAccion` int DEFAULT NULL,
  `discapacidadfecha` date DEFAULT NULL,
  `discapacidaduser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`discapacidadId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discapacidad`
--

LOCK TABLES `discapacidad` WRITE;
/*!40000 ALTER TABLE `discapacidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `discapacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discapacidadesdocentes`
--

DROP TABLE IF EXISTS `discapacidadesdocentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discapacidadesdocentes` (
  `discapacidadesDocentesId` int NOT NULL AUTO_INCREMENT,
  `docentesCarnetConadis` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `docentesPorcentale` int DEFAULT NULL,
  `docentes_numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tipoDiscapacidad_tipoDiscapacidadid` int NOT NULL,
  `discapacidadesdocentesOculto` int DEFAULT NULL,
  `discapacidadesdocentesAccion` int DEFAULT NULL,
  `discapacidadesdocentesfecha` date DEFAULT NULL,
  `discapacidadesdocentesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`discapacidadesDocentesId`),
  KEY `fk_DiscapacidadesDocentes_Docentes1_idx` (`docentes_numeroIdentificacion`),
  KEY `fk_DiscapacidadesDocentes_TipoDiscapacidad1_idx` (`tipoDiscapacidad_tipoDiscapacidadid`),
  CONSTRAINT `fk_DiscapacidadesDocentes_Docentes1` FOREIGN KEY (`docentes_numeroIdentificacion`) REFERENCES `docentes` (`numeroIdentificacion`),
  CONSTRAINT `fk_DiscapacidadesDocentes_TipoDiscapacidad1` FOREIGN KEY (`tipoDiscapacidad_tipoDiscapacidadid`) REFERENCES `tipodiscapacidad` (`tipoDiscapacidadid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discapacidadesdocentes`
--

LOCK TABLES `discapacidadesdocentes` WRITE;
/*!40000 ALTER TABLE `discapacidadesdocentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `discapacidadesdocentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discapacidadesestudiantes`
--

DROP TABLE IF EXISTS `discapacidadesestudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discapacidadesestudiantes` (
  `discapacidadesestudiantesid` int NOT NULL AUTO_INCREMENT,
  `carnetConadisId` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fkEstudiantesNumeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fkTipoDiscapacidadTipoDiscapacidadId` int NOT NULL,
  `porcentajeDiscapacidad` int DEFAULT NULL,
  `discapacidadestperiodo` int DEFAULT NULL,
  `discapacidadesestudiantesOculto` int DEFAULT NULL,
  `discapacidadesestudiantesAccion` int DEFAULT NULL,
  `discapacidadesestudiantesfecha` date DEFAULT NULL,
  `discapacidadesestudiantesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`discapacidadesestudiantesid`),
  KEY `fk_DiscapacidadesEstudiantes_Estudiantes1_idx` (`fkEstudiantesNumeroIdentificacion`),
  KEY `fk_DiscapacidadesEstudiantes_TipoDiscapacidad1_idx` (`fkTipoDiscapacidadTipoDiscapacidadId`),
  KEY `fk_discapacidadesestudiantes_Periodo1_idx` (`discapacidadestperiodo`),
  CONSTRAINT `fk_DiscapacidadesEstudiantes_Estudiantes1` FOREIGN KEY (`fkEstudiantesNumeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_discapacidadesestudiantes_Periodo1` FOREIGN KEY (`discapacidadestperiodo`) REFERENCES `periodoacademico` (`periodoacademicoId`),
  CONSTRAINT `fk_DiscapacidadesEstudiantes_TipoDiscapacidad1` FOREIGN KEY (`fkTipoDiscapacidadTipoDiscapacidadId`) REFERENCES `tipodiscapacidad` (`tipoDiscapacidadid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discapacidadesestudiantes`
--

LOCK TABLES `discapacidadesestudiantes` WRITE;
/*!40000 ALTER TABLE `discapacidadesestudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `discapacidadesestudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distributivocursoasignatura`
--

DROP TABLE IF EXISTS `distributivocursoasignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `distributivocursoasignatura` (
  `distributivocursoasignaturaid` int NOT NULL AUTO_INCREMENT,
  `fkcursosperiodoacademicod` int NOT NULL,
  `fkdistributivosId` int NOT NULL,
  `fkasignaturasId` int NOT NULL,
  PRIMARY KEY (`distributivocursoasignaturaid`),
  KEY `fk_cursosperiodoacademico_has_distributivos_distributivos1_idx` (`fkdistributivosId`),
  KEY `fk_cursosperiodoacademico_has_distributivos_cursosperiodoac_idx` (`fkcursosperiodoacademicod`),
  KEY `fk_cursosperiodoacademico_has_distributivos_asignaturas1_idx` (`fkasignaturasId`),
  CONSTRAINT `fk_cursosperiodoacademico_has_distributivos_asignaturas1` FOREIGN KEY (`fkasignaturasId`) REFERENCES `asignaturas` (`asignaturasId`),
  CONSTRAINT `fk_cursosperiodoacademico_has_distributivos_cursosperiodoacad1` FOREIGN KEY (`fkcursosperiodoacademicod`) REFERENCES `cursosperiodoacademico` (`periodoAcademicoCursoId`),
  CONSTRAINT `fk_cursosperiodoacademico_has_distributivos_distributivos1` FOREIGN KEY (`fkdistributivosId`) REFERENCES `distributivos` (`distributivosId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distributivocursoasignatura`
--

LOCK TABLES `distributivocursoasignatura` WRITE;
/*!40000 ALTER TABLE `distributivocursoasignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `distributivocursoasignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distributivos`
--

DROP TABLE IF EXISTS `distributivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `distributivos` (
  `distributivosId` int NOT NULL AUTO_INCREMENT,
  `distributivosNumero` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fechaVinculacion` date DEFAULT NULL,
  `numeroHorasClaseSemanales` int DEFAULT NULL,
  `numeroHorasAcademicas` int DEFAULT NULL,
  `numeroHorasInvestigacion` int DEFAULT NULL,
  `numeroHorasGestionDireccionAcacemica` int DEFAULT NULL,
  `distributivosTotalHoras` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `docentes_numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `titulosprofecionales_TituloProfecionalId` int NOT NULL,
  `gradosocupacionales_gradoOcupacionalId` int NOT NULL,
  `tiempodedicacion_tiempoDedicacionId` int NOT NULL,
  `proyectosinvestigacion_ProyectosInvestigacionId` int NOT NULL,
  `distributivosOculto` int DEFAULT NULL,
  `distributivosAccion` int DEFAULT NULL,
  `distributivosfecha` date DEFAULT NULL,
  `distributivosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`distributivosId`),
  KEY `fk_distributivos_docentes1_idx` (`docentes_numeroIdentificacion`),
  KEY `fk_distributivos_titulosprofecionales1_idx` (`titulosprofecionales_TituloProfecionalId`),
  KEY `fk_distributivos_gradosocupacionales1_idx` (`gradosocupacionales_gradoOcupacionalId`),
  KEY `fk_distributivos_tiempodedicacion1_idx` (`tiempodedicacion_tiempoDedicacionId`),
  KEY `fk_distributivos_proyectosinvestigacion1_idx` (`proyectosinvestigacion_ProyectosInvestigacionId`),
  CONSTRAINT `fk_distributivos_docentes1` FOREIGN KEY (`docentes_numeroIdentificacion`) REFERENCES `docentes` (`numeroIdentificacion`),
  CONSTRAINT `fk_distributivos_gradosocupacionales1` FOREIGN KEY (`gradosocupacionales_gradoOcupacionalId`) REFERENCES `gradosocupacionales` (`gradoOcupacionalId`),
  CONSTRAINT `fk_distributivos_proyectosinvestigacion1` FOREIGN KEY (`proyectosinvestigacion_ProyectosInvestigacionId`) REFERENCES `proyectosinvestigacion` (`proyectosInvestigacionId`),
  CONSTRAINT `fk_distributivos_tiempodedicacion1` FOREIGN KEY (`tiempodedicacion_tiempoDedicacionId`) REFERENCES `tiempodedicacion` (`tiempoDedicacionId`),
  CONSTRAINT `fk_distributivos_titulosprofecionales1` FOREIGN KEY (`titulosprofecionales_TituloProfecionalId`) REFERENCES `titulosprofecionales` (`tituloProfecionalId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distributivos`
--

LOCK TABLES `distributivos` WRITE;
/*!40000 ALTER TABLE `distributivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `distributivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docenciatecnicosuperior`
--

DROP TABLE IF EXISTS `docenciatecnicosuperior`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docenciatecnicosuperior` (
  `docenciaTecnicoSuperiorId` int NOT NULL AUTO_INCREMENT,
  `docenciatecnicosuperiorcodigo` int DEFAULT NULL,
  `docenciaTecnicoSuperior` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `docenciatecnicosuperiorOculto` int DEFAULT NULL,
  `docenciatecnicosuperiorAccion` int DEFAULT NULL,
  `docenciatecnicosuperiorfecha` date DEFAULT NULL,
  `docenciatecnicosuperioruser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`docenciaTecnicoSuperiorId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docenciatecnicosuperior`
--

LOCK TABLES `docenciatecnicosuperior` WRITE;
/*!40000 ALTER TABLE `docenciatecnicosuperior` DISABLE KEYS */;
/*!40000 ALTER TABLE `docenciatecnicosuperior` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docenciatecnologico`
--

DROP TABLE IF EXISTS `docenciatecnologico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docenciatecnologico` (
  `docenciaTecnologicoId` int NOT NULL AUTO_INCREMENT,
  `docenciatecnologicocodigo` int DEFAULT NULL,
  `docenciaTecnologico` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `docenciatecnologicoOculto` int DEFAULT NULL,
  `docenciatecnologicoAccion` int DEFAULT NULL,
  `docenciatecnologicofecha` date DEFAULT NULL,
  `docenciatecnologicouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`docenciaTecnologicoId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docenciatecnologico`
--

LOCK TABLES `docenciatecnologico` WRITE;
/*!40000 ALTER TABLE `docenciatecnologico` DISABLE KEYS */;
/*!40000 ALTER TABLE `docenciatecnologico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docentes` (
  `tipodocumentoId` int DEFAULT NULL,
  `numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `primerApellido` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `segundoApellido` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `primerNombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `segundoNombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fkDocenteSexoId` int NOT NULL,
  `fkDocenteGeneroId` int NOT NULL,
  `fkDocenteEstadocivilId` int NOT NULL,
  `fkDocentePuebloNacionalidadId` int NOT NULL,
  `direccionDomiciliaria` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fkDocenteProvinciaSufragio` int NOT NULL,
  `numeroCelular` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `correoElectronico` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `numDomicilio` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fkDocenteTipoEnfermedadCatastroficaId` int NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `fkDocentePaisNacionalidadId` int NOT NULL,
  `fechaIngresoIES` date DEFAULT NULL,
  `fechaSalidaIES` date DEFAULT NULL,
  `fkDocenteRelacionLaboralIESId` int NOT NULL,
  `fkDocenteEscalafonDocenteId` int NOT NULL,
  `fkDocenteIngresoConConcursoMeritosId` int NOT NULL,
  `fkDocenteCargoDirectivoId` int NOT NULL,
  `nombreUnidadAcademica` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nroasignaturasdocente` int DEFAULT NULL,
  `nroHorasLaborablesSemanaEnCarreraPrograma` int DEFAULT NULL,
  `nroHorasClaseSemanaCarreraPrograma` int DEFAULT NULL,
  `nroHorasInvestigacionSemanaCarreraPrograma` int DEFAULT NULL,
  `nroHorasAdministrativasSemanaCarreraPrograma` int DEFAULT NULL,
  `nroHorasOtrasActividadesSemanaCarreraPrograma` int DEFAULT NULL,
  `nroHorasVinculacionSociedad` int DEFAULT NULL,
  `salarioMensual` int DEFAULT NULL,
  `fkDocenteDocenciaTecnicoSuperiorId` int NOT NULL,
  `fkDocenteDocenciaTecnologicoId` int NOT NULL,
  `fkDocenteEstaEnPeriodoSabaticoId` int NOT NULL,
  `fechaInicioPeriodoSabatico` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fkDocenteEstaCursandoEstudiosId` int NOT NULL,
  `fkDocenteInstitucionDondeCursaEstudiosId` int NOT NULL,
  `fkDocentePaisEstudiosId` int NOT NULL,
  `tituloAObtener` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usuarioDocentes` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `passwordDocentes` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `niveDeFormacionId` int NOT NULL,
  `accesodepartamento_idaccesodepartamento` int NOT NULL,
  `docentesOculto` int DEFAULT NULL,
  `docentesAccion` int DEFAULT NULL,
  `docentesfecha` date DEFAULT NULL,
  `docentesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`numeroIdentificacion`),
  KEY `fk_Docentes_Sexo1_idx` (`fkDocenteSexoId`),
  KEY `fk_Docentes_Generos1_idx` (`fkDocenteGeneroId`),
  KEY `fk_Docentes_EstadosCiviles1_idx` (`fkDocenteEstadocivilId`),
  KEY `fk_Docentes_Pueblonacionalidad1_idx` (`fkDocentePuebloNacionalidadId`),
  KEY `fk_Docentes_Provincia1_idx` (`fkDocenteProvinciaSufragio`),
  KEY `fk_Docentes_TipoEnfermedadCatastrofica1_idx` (`fkDocenteTipoEnfermedadCatastroficaId`),
  KEY `fk_Docentes_Paises1_idx` (`fkDocentePaisNacionalidadId`),
  KEY `fk_Docentes_RelacionLaboralIES1_idx` (`fkDocenteRelacionLaboralIESId`),
  KEY `fk_Docentes_IngresoConConcursoMeritos1_idx` (`fkDocenteIngresoConConcursoMeritosId`),
  KEY `fk_Docentes_EscalafonDocente1_idx` (`fkDocenteEscalafonDocenteId`),
  KEY `fk_Docentes_CargoGestionDireccionAcademico1_idx` (`fkDocenteCargoDirectivoId`),
  KEY `fk_Docentes_DocenciaTecnicoSuperior1_idx` (`fkDocenteDocenciaTecnicoSuperiorId`),
  KEY `fk_Docentes_DocenciaTecnologico1_idx` (`fkDocenteDocenciaTecnologicoId`),
  KEY `fk_Docentes_EstaEnPeriodoSabatico1_idx` (`fkDocenteEstaEnPeriodoSabaticoId`),
  KEY `fk_Docentes_EstaCursandoEstudios1_idx` (`fkDocenteEstaCursandoEstudiosId`),
  KEY `fk_Docentes_InstitucionDondeCursaEstudios1_idx` (`fkDocenteInstitucionDondeCursaEstudiosId`),
  KEY `fk_Docentes_Paises2_idx` (`fkDocentePaisEstudiosId`),
  KEY `fk_Docentes_Tipo_documento1` (`tipodocumentoId`),
  KEY `fk_Docentes_NiveldeFormacio1_idx` (`niveDeFormacionId`),
  KEY `fk_docentes_accesodepartamento1_idx` (`accesodepartamento_idaccesodepartamento`),
  CONSTRAINT `fk_docentes_accesodepartamento1` FOREIGN KEY (`accesodepartamento_idaccesodepartamento`) REFERENCES `accesodepartamento` (`idaccesodepartamento`),
  CONSTRAINT `fk_Docentes_CargoGestionDireccionAcademico1` FOREIGN KEY (`fkDocenteCargoDirectivoId`) REFERENCES `cargogestiondireccionacademico` (`cargoGestionDireccionAcademicoId`),
  CONSTRAINT `fk_Docentes_DocenciaTecnicoSuperior1` FOREIGN KEY (`fkDocenteDocenciaTecnicoSuperiorId`) REFERENCES `docenciatecnicosuperior` (`docenciaTecnicoSuperiorId`),
  CONSTRAINT `fk_Docentes_DocenciaTecnologico1` FOREIGN KEY (`fkDocenteDocenciaTecnologicoId`) REFERENCES `docenciatecnologico` (`docenciaTecnologicoId`),
  CONSTRAINT `fk_Docentes_EscalafonDocente1` FOREIGN KEY (`fkDocenteEscalafonDocenteId`) REFERENCES `escalafondocente` (`escalafonDocenteId`),
  CONSTRAINT `fk_Docentes_EstaCursandoEstudios1` FOREIGN KEY (`fkDocenteEstaCursandoEstudiosId`) REFERENCES `estacursandoestudios` (`estaCursandoEstudiosId`),
  CONSTRAINT `fk_Docentes_EstadosCiviles1` FOREIGN KEY (`fkDocenteEstadocivilId`) REFERENCES `estadosciviles` (`estadoCivilId`),
  CONSTRAINT `fk_Docentes_EstaEnPeriodoSabatico1` FOREIGN KEY (`fkDocenteEstaEnPeriodoSabaticoId`) REFERENCES `estaenperiodosabatico` (`estaEnPeriodoSabaticoId`),
  CONSTRAINT `fk_Docentes_Generos1` FOREIGN KEY (`fkDocenteGeneroId`) REFERENCES `generos` (`generoId`),
  CONSTRAINT `fk_Docentes_IngresoConConcursoMeritos1` FOREIGN KEY (`fkDocenteIngresoConConcursoMeritosId`) REFERENCES `ingresoconconcursomeritos` (`ingresoConConcursoMeritosId`),
  CONSTRAINT `fk_Docentes_InstitucionDondeCursaEstudios1` FOREIGN KEY (`fkDocenteInstitucionDondeCursaEstudiosId`) REFERENCES `instituciondondecursaestudios` (`institucionDondeCursaEstudiosId`),
  CONSTRAINT `fk_Docentes_NiveldeFormacio1` FOREIGN KEY (`niveDeFormacionId`) REFERENCES `nivelformacion` (`nivelFormacionId`),
  CONSTRAINT `fk_Docentes_Paises1` FOREIGN KEY (`fkDocentePaisNacionalidadId`) REFERENCES `paises` (`paisId`),
  CONSTRAINT `fk_Docentes_Paises2` FOREIGN KEY (`fkDocentePaisEstudiosId`) REFERENCES `paises` (`paisId`),
  CONSTRAINT `fk_Docentes_Provincia1` FOREIGN KEY (`fkDocenteProvinciaSufragio`) REFERENCES `provincia` (`provinciaId`),
  CONSTRAINT `fk_Docentes_Pueblonacionalidad1` FOREIGN KEY (`fkDocentePuebloNacionalidadId`) REFERENCES `pueblonacionalidades` (`pueblonacionalidadId`),
  CONSTRAINT `fk_Docentes_RelacionLaboralIES1` FOREIGN KEY (`fkDocenteRelacionLaboralIESId`) REFERENCES `relacionlaboralies` (`relacionLaboralIESId`),
  CONSTRAINT `fk_Docentes_Sexo1` FOREIGN KEY (`fkDocenteSexoId`) REFERENCES `sexo` (`sexoId`),
  CONSTRAINT `fk_Docentes_Tipo_documento1` FOREIGN KEY (`tipodocumentoId`) REFERENCES `tiposdocumentos` (`tipoDocumentoId`),
  CONSTRAINT `fk_Docentes_TipoEnfermedadCatastrofica1` FOREIGN KEY (`fkDocenteTipoEnfermedadCatastroficaId`) REFERENCES `tipoenfermedadcatastrofica` (`tipoEnfermedadCatastroficaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `empresasId` int NOT NULL AUTO_INCREMENT,
  `nombreEmpresaInstitucion` varchar(125) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ubicacion` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `representanteLega` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `noInformeTecnicodeViabilidad` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fechaInformeTecnicodeViabilidad` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `noDeConvenio` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fechaConvenio` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `contactoEmpresa` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `correoEmpresas` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `departamentocoodinador` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `empresasOculto` int DEFAULT NULL,
  `empresasAccion` int DEFAULT NULL,
  `empresasfecha` date DEFAULT NULL,
  `empresasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`empresasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entornoinstitucionalpracticasprofesionales`
--

DROP TABLE IF EXISTS `entornoinstitucionalpracticasprofesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entornoinstitucionalpracticasprofesionales` (
  `entornoInstitucionalPracticasProfesionalesid` int NOT NULL AUTO_INCREMENT,
  `eipfcodigo` int DEFAULT NULL,
  `entornoInstitucionalPracticasProfesionales` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `eipfOculto` int DEFAULT NULL,
  `eipfAccion` int DEFAULT NULL,
  `eipffecha` date DEFAULT NULL,
  `eipfuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`entornoInstitucionalPracticasProfesionalesid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entornoinstitucionalpracticasprofesionales`
--

LOCK TABLES `entornoinstitucionalpracticasprofesionales` WRITE;
/*!40000 ALTER TABLE `entornoinstitucionalpracticasprofesionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `entornoinstitucionalpracticasprofesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escalafondocente`
--

DROP TABLE IF EXISTS `escalafondocente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `escalafondocente` (
  `escalafonDocenteId` int NOT NULL AUTO_INCREMENT,
  `escalafondocentecodigo` int DEFAULT NULL,
  `escalafonDocente` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `escalafondocenteOculto` int DEFAULT NULL,
  `escalafondocenteAccion` int DEFAULT NULL,
  `escalafondocentefecha` date DEFAULT NULL,
  `escalafondocenteuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`escalafonDocenteId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escalafondocente`
--

LOCK TABLES `escalafondocente` WRITE;
/*!40000 ALTER TABLE `escalafondocente` DISABLE KEYS */;
/*!40000 ALTER TABLE `escalafondocente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estacursandoestudios`
--

DROP TABLE IF EXISTS `estacursandoestudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estacursandoestudios` (
  `estaCursandoEstudiosId` int NOT NULL AUTO_INCREMENT,
  `estacursandoestudioscodigo` int DEFAULT NULL,
  `estaCursandoEstudios` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estacursandoestudiosOculto` int DEFAULT NULL,
  `estacursandoestudiosAccion` int DEFAULT NULL,
  `estacursandoestudiosfecha` date DEFAULT NULL,
  `estacursandoestudiosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`estaCursandoEstudiosId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estacursandoestudios`
--

LOCK TABLES `estacursandoestudios` WRITE;
/*!40000 ALTER TABLE `estacursandoestudios` DISABLE KEYS */;
/*!40000 ALTER TABLE `estacursandoestudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadosciviles`
--

DROP TABLE IF EXISTS `estadosciviles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estadosciviles` (
  `estadoCivilId` int NOT NULL AUTO_INCREMENT,
  `estadoscivilcodigo` int DEFAULT NULL,
  `estadoCivil` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estadoCivilOculto` int DEFAULT NULL,
  `estadoCivilAccion` int DEFAULT NULL,
  `estadoCivilfecha` date DEFAULT NULL,
  `estadoCiviluser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`estadoCivilId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadosciviles`
--

LOCK TABLES `estadosciviles` WRITE;
/*!40000 ALTER TABLE `estadosciviles` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadosciviles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estaenperiodosabatico`
--

DROP TABLE IF EXISTS `estaenperiodosabatico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estaenperiodosabatico` (
  `estaEnPeriodoSabaticoId` int NOT NULL AUTO_INCREMENT,
  `estaEnPeriodoSabatico` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estaenperiodosabaticoOculto` int DEFAULT NULL,
  `estaenperiodosabaticoAccion` int DEFAULT NULL,
  `estaenperiodosabaticofecha` date DEFAULT NULL,
  `estaenperiodosabaticouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`estaEnPeriodoSabaticoId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estaenperiodosabatico`
--

LOCK TABLES `estaenperiodosabatico` WRITE;
/*!40000 ALTER TABLE `estaenperiodosabatico` DISABLE KEYS */;
/*!40000 ALTER TABLE `estaenperiodosabatico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudianteocupacion`
--

DROP TABLE IF EXISTS `estudianteocupacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudianteocupacion` (
  `estudianteOcupacionId` int NOT NULL AUTO_INCREMENT,
  `estudianteocupacioncodigo` int DEFAULT NULL,
  `estudianteOcupacion` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estudianteocupacionOculto` int DEFAULT NULL,
  `estudianteocupacionAccion` int DEFAULT NULL,
  `estudianteocupacionfecha` date DEFAULT NULL,
  `estudianteocupacionuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`estudianteOcupacionId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudianteocupacion`
--

LOCK TABLES `estudianteocupacion` WRITE;
/*!40000 ALTER TABLE `estudianteocupacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudianteocupacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiantes` (
  `fktipodocumentoId` int NOT NULL,
  `numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `primerApellido` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `segundoApellido` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `primerNombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `segundoNombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fksexoId` int NOT NULL,
  `fkGeneroId` int NOT NULL,
  `fkEstadoCivilId` int NOT NULL,
  `fkPuebloNacionalidadId` int NOT NULL,
  `fkTipoSangreId` int NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fkCantonNacimientoId` int NOT NULL,
  `correoElectronico` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `numeroCelular` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `numeroComvencional` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usuarioEstudiantes` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `passwordEstudiantes` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `categoriaMigratoria_categoriaMigratoriaId` int NOT NULL,
  `idiomas` int NOT NULL,
  `accesodepartamento_codigo` int NOT NULL,
  `estudiantesimg` longblob,
  `estudiantesOculto` int DEFAULT NULL,
  `estudiantesAccion` int DEFAULT NULL,
  `estudiantesfecha` date DEFAULT NULL,
  `estudiantesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`numeroIdentificacion`),
  KEY `fk_Estudiantes_Sexo1_idx` (`fksexoId`),
  KEY `fk_Estudiantes_Generos1_idx` (`fkGeneroId`),
  KEY `fk_Estudiantes_EstadosCiviles1_idx` (`fkEstadoCivilId`),
  KEY `fk_Estudiantes_Pueblonacionalidad1_idx` (`fkPuebloNacionalidadId`),
  KEY `fk_Estudiantes_TiposSangre1_idx` (`fkTipoSangreId`),
  KEY `fk_Estudiantes_Canton1_idx` (`fkCantonNacimientoId`),
  KEY `fk_Estudiantes_Tipo_documento` (`fktipodocumentoId`),
  KEY `fk_Estudiantes_categoriaMigratoria1_idx` (`categoriaMigratoria_categoriaMigratoriaId`),
  KEY `fk_IdiomasAncestrales` (`idiomas`),
  KEY `fk_estudiantes_accesodepartamento1_idx` (`accesodepartamento_codigo`),
  CONSTRAINT `fk_estudiantes_accesodepartamento1` FOREIGN KEY (`accesodepartamento_codigo`) REFERENCES `accesodepartamento` (`idaccesodepartamento`),
  CONSTRAINT `fk_Estudiantes_Canton1` FOREIGN KEY (`fkCantonNacimientoId`) REFERENCES `canton` (`cantonId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_Estudiantes_categoriaMigratoria1` FOREIGN KEY (`categoriaMigratoria_categoriaMigratoriaId`) REFERENCES `categoriasmigratoria` (`categoriaMigratoriaId`),
  CONSTRAINT `fk_Estudiantes_EstadosCiviles1` FOREIGN KEY (`fkEstadoCivilId`) REFERENCES `estadosciviles` (`estadoCivilId`),
  CONSTRAINT `fk_Estudiantes_Generos1` FOREIGN KEY (`fkGeneroId`) REFERENCES `generos` (`generoId`),
  CONSTRAINT `fk_Estudiantes_IdiomasAncestrales` FOREIGN KEY (`idiomas`) REFERENCES `idiomasancestrales` (`ididiomaAncestral`),
  CONSTRAINT `fk_Estudiantes_Pueblonacionalidad1` FOREIGN KEY (`fkPuebloNacionalidadId`) REFERENCES `pueblonacionalidades` (`pueblonacionalidadId`),
  CONSTRAINT `fk_Estudiantes_Sexo1` FOREIGN KEY (`fksexoId`) REFERENCES `sexo` (`sexoId`),
  CONSTRAINT `fk_Estudiantes_Tipo_documento` FOREIGN KEY (`fktipodocumentoId`) REFERENCES `tiposdocumentos` (`tipoDocumentoId`),
  CONSTRAINT `fk_Estudiantes_TiposSangre1` FOREIGN KEY (`fkTipoSangreId`) REFERENCES `tipossangres` (`tipoSangreId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantestitulados`
--

DROP TABLE IF EXISTS `estudiantestitulados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiantestitulados` (
  `idEstudiantesTitulados` int NOT NULL AUTO_INCREMENT,
  `codigoITSegresados` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fkinstitutosId` int NOT NULL,
  `fkprovinciaId` int NOT NULL,
  `fkestnumeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fkcarrerasId` int NOT NULL,
  `fkestudiantesTituladosTrabajoTitulacion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estudiantestituladosOculto` int DEFAULT NULL,
  `estudiantestituladosAccion` int DEFAULT NULL,
  `estudiantestituladosfecha` date DEFAULT NULL,
  `estudiantestituladosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idEstudiantesTitulados`),
  KEY `fk_EstudiantesTitulados_Institutos1_idx` (`fkinstitutosId`),
  KEY `fk_EstudiantesTitulados_Provincia1_idx` (`fkprovinciaId`),
  KEY `fk_EstudiantesTitulados_Estudiantes1_idx` (`fkestnumeroIdentificacion`),
  KEY `fk_EstudiantesTitulados_Carreras1_idx` (`fkcarrerasId`),
  CONSTRAINT `fk_EstudiantesTitulados_Carreras1` FOREIGN KEY (`fkcarrerasId`) REFERENCES `carreras` (`carrerasId`),
  CONSTRAINT `fk_EstudiantesTitulados_Estudiantes1` FOREIGN KEY (`fkestnumeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_EstudiantesTitulados_Institutos1` FOREIGN KEY (`fkinstitutosId`) REFERENCES `institutos` (`institutosId`),
  CONSTRAINT `fk_EstudiantesTitulados_Provincia1` FOREIGN KEY (`fkprovinciaId`) REFERENCES `provincia` (`provinciaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantestitulados`
--

LOCK TABLES `estudiantestitulados` WRITE;
/*!40000 ALTER TABLE `estudiantestitulados` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantestitulados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantestitulotercernivel`
--

DROP TABLE IF EXISTS `estudiantestitulotercernivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiantestitulotercernivel` (
  `estudiantesTituloTercerNivelid` int NOT NULL AUTO_INCREMENT,
  `estudiantes_numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tituloTercerNivel_tituloTercerNivelId` int NOT NULL,
  `estudiantestitulotercernivelOculto` int DEFAULT NULL,
  `estudiantestitulotercernivelAccion` int DEFAULT NULL,
  `estudiantestitulotercernivelfecha` date DEFAULT NULL,
  `estudiantestitulotercerniveluser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`estudiantesTituloTercerNivelid`),
  KEY `fk_Estudiantes_has_TituloTercerNivel_TituloTercerNivel1_idx` (`tituloTercerNivel_tituloTercerNivelId`),
  KEY `fk_Estudiantes_has_TituloTercerNivel_Estudiantes1_idx` (`estudiantes_numeroIdentificacion`),
  CONSTRAINT `fk_Estudiantes_has_TituloTercerNivel_Estudiantes1` FOREIGN KEY (`estudiantes_numeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_Estudiantes_has_TituloTercerNivel_TituloTercerNivel1` FOREIGN KEY (`tituloTercerNivel_tituloTercerNivelId`) REFERENCES `titulotercernivel` (`tituloTercerNivelId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantestitulotercernivel`
--

LOCK TABLES `estudiantestitulotercernivel` WRITE;
/*!40000 ALTER TABLE `estudiantestitulotercernivel` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantestitulotercernivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudinatetrabajo`
--

DROP TABLE IF EXISTS `estudinatetrabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudinatetrabajo` (
  `estudinateTrabajoid` int NOT NULL AUTO_INCREMENT,
  `nomempresa` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sectoreconomico` int NOT NULL,
  `estudinatenum` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estudinatetrabajoperiodo` int NOT NULL,
  `estudinatetrabajoOculto` int DEFAULT NULL,
  `estudinatetrabajoAccion` int DEFAULT NULL,
  `estudinatetrabajofecha` date DEFAULT NULL,
  `estudinatetrabajouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`estudinateTrabajoid`),
  KEY `fk_sececo_idx` (`sectoreconomico`),
  KEY `fk_numiden_idx` (`estudinatenum`),
  KEY `fk_estudinatetrabajo_perido1_idx` (`estudinatetrabajoperiodo`),
  CONSTRAINT `fk_estudinatetrabajo_estudiantes1` FOREIGN KEY (`estudinatenum`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_estudinatetrabajo_perido1` FOREIGN KEY (`estudinatetrabajoperiodo`) REFERENCES `periodoacademico` (`periodoacademicoId`),
  CONSTRAINT `fk_estudinatetrabajo_sectoreconomico1` FOREIGN KEY (`sectoreconomico`) REFERENCES `sectoreconomico` (`sectorEconomicoid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudinatetrabajo`
--

LOCK TABLES `estudinatetrabajo` WRITE;
/*!40000 ALTER TABLE `estudinatetrabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudinatetrabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etnias`
--

DROP TABLE IF EXISTS `etnias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `etnias` (
  `etniaId` int NOT NULL AUTO_INCREMENT,
  `etniascodigo` int DEFAULT NULL,
  `etnia` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `etniasOculto` int DEFAULT NULL,
  `etniasAccion` int DEFAULT NULL,
  `etniasfecha` date DEFAULT NULL,
  `etniasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`etniaId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etnias`
--

LOCK TABLES `etnias` WRITE;
/*!40000 ALTER TABLE `etnias` DISABLE KEYS */;
/*!40000 ALTER TABLE `etnias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financiamientobeca`
--

DROP TABLE IF EXISTS `financiamientobeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `financiamientobeca` (
  `financiamientoBecaid` int NOT NULL AUTO_INCREMENT,
  `financiamientobecacodigo` int DEFAULT NULL,
  `financiamientoBeca` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `financiamientobecabool` int DEFAULT NULL,
  `financiamientobecaOculto` int DEFAULT NULL,
  `financiamientobecaAccion` int DEFAULT NULL,
  `financiamientobecafecha` date DEFAULT NULL,
  `financiamientobecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`financiamientoBecaid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financiamientobeca`
--

LOCK TABLES `financiamientobeca` WRITE;
/*!40000 ALTER TABLE `financiamientobeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `financiamientobeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financiamientobecadocentes`
--

DROP TABLE IF EXISTS `financiamientobecadocentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `financiamientobecadocentes` (
  `financiamientoBecaId` int NOT NULL AUTO_INCREMENT,
  `financiamientobecadocentescodigo` int DEFAULT NULL,
  `financiamientoBeca` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `financiamientobecadocentesOculto` int DEFAULT NULL,
  `financiamientobecadocentesAccion` int DEFAULT NULL,
  `financiamientobecadocentesfecha` date DEFAULT NULL,
  `financiamientobecadocentesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`financiamientoBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financiamientobecadocentes`
--

LOCK TABLES `financiamientobecadocentes` WRITE;
/*!40000 ALTER TABLE `financiamientobecadocentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `financiamientobecadocentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formaCalificacion`
--

DROP TABLE IF EXISTS `formaCalificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formaCalificacion` (
  `idformaCalificacion` int NOT NULL AUTO_INCREMENT,
  `formaCalificacionTema` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `formaCalificacionhorasdocente` int DEFAULT NULL,
  `formaCalificacionhorasestudiante` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idformaCalificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formaCalificacion`
--

LOCK TABLES `formaCalificacion` WRITE;
/*!40000 ALTER TABLE `formaCalificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `formaCalificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formacionartesano`
--

DROP TABLE IF EXISTS `formacionartesano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formacionartesano` (
  `idformacionArtesano` int NOT NULL AUTO_INCREMENT,
  `formacionartesanocodigo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `formacionArtesanal` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `formacionartesanoOculto` int DEFAULT NULL,
  `formacionartesanoAccion` int DEFAULT NULL,
  `formacionartesanofecha` date DEFAULT NULL,
  `formacionartesanouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idformacionArtesano`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formacionartesano`
--

LOCK TABLES `formacionartesano` WRITE;
/*!40000 ALTER TABLE `formacionartesano` DISABLE KEYS */;
/*!40000 ALTER TABLE `formacionartesano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `generos` (
  `generoId` int NOT NULL AUTO_INCREMENT,
  `generoscodigo` int DEFAULT NULL,
  `genero` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `generoOculto` int DEFAULT NULL,
  `generoAccion` int DEFAULT NULL,
  `generofecha` date DEFAULT NULL,
  `generouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`generoId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradosocupacionales`
--

DROP TABLE IF EXISTS `gradosocupacionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gradosocupacionales` (
  `gradoOcupacionalId` int NOT NULL AUTO_INCREMENT,
  `gradoOcupacionalCodigo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gradoOcupacional` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gradosocupacionalesOculto` int DEFAULT NULL,
  `gradosocupacionalesAccion` int DEFAULT NULL,
  `gradosocupacionalesfecha` date DEFAULT NULL,
  `gradosocupacionalesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`gradoOcupacionalId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradosocupacionales`
--

LOCK TABLES `gradosocupacionales` WRITE;
/*!40000 ALTER TABLE `gradosocupacionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradosocupacionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haperdidolagratuidad`
--

DROP TABLE IF EXISTS `haperdidolagratuidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `haperdidolagratuidad` (
  `haPerdidoLaGratuidadId` int NOT NULL AUTO_INCREMENT,
  `haperdidolagratuidadcodigo` int DEFAULT NULL,
  `haPerdidoLaGratuidad` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `haperdidolagratuidadOculto` int DEFAULT NULL,
  `haperdidolagratuidadAccion` int DEFAULT NULL,
  `haperdidolagratuidadfecha` date DEFAULT NULL,
  `haperdidolagratuidaduser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`haPerdidoLaGratuidadId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haperdidolagratuidad`
--

LOCK TABLES `haperdidolagratuidad` WRITE;
/*!40000 ALTER TABLE `haperdidolagratuidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `haperdidolagratuidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `harealizadopracticaspreprofesionales`
--

DROP TABLE IF EXISTS `harealizadopracticaspreprofesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `harealizadopracticaspreprofesionales` (
  `haRealizadoPracticasPreprofesionalesid` int NOT NULL AUTO_INCREMENT,
  `harealizadopracticaspreprofesionalescodigo` int DEFAULT NULL,
  `haRealizadoPracticasPreprofesionales` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `hppOculto` int DEFAULT NULL,
  `hppAccion` int DEFAULT NULL,
  `hppfecha` date DEFAULT NULL,
  `hppuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`haRealizadoPracticasPreprofesionalesid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `harealizadopracticaspreprofesionales`
--

LOCK TABLES `harealizadopracticaspreprofesionales` WRITE;
/*!40000 ALTER TABLE `harealizadopracticaspreprofesionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `harealizadopracticaspreprofesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `harepetidoalmenosunamateria`
--

DROP TABLE IF EXISTS `harepetidoalmenosunamateria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `harepetidoalmenosunamateria` (
  `haRepetidoAlMenosUnaMateriaid` int NOT NULL AUTO_INCREMENT,
  `harepetidoalmenosunamateriacodigo` int DEFAULT NULL,
  `haRepetidoAlMenosUnaMateria` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `harepetidoalmenosunamateriaOculto` int DEFAULT NULL,
  `harepetidoalmenosunamateriaAccion` int DEFAULT NULL,
  `harepetidoalmenosunamateriafecha` date DEFAULT NULL,
  `harepetidoalmenosunamateriauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`haRepetidoAlMenosUnaMateriaid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `harepetidoalmenosunamateria`
--

LOCK TABLES `harepetidoalmenosunamateria` WRITE;
/*!40000 ALTER TABLE `harepetidoalmenosunamateria` DISABLE KEYS */;
/*!40000 ALTER TABLE `harepetidoalmenosunamateria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horariodocentes`
--

DROP TABLE IF EXISTS `horariodocentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horariodocentes` (
  `idHorarioDocentes` int NOT NULL AUTO_INCREMENT,
  `horas_idHoras` int NOT NULL,
  `dias_idDias` int NOT NULL,
  `fkdistributivocursoasignaturaid` int NOT NULL,
  `horariodocentesOculto` int DEFAULT NULL,
  `horariodocentesAccion` int DEFAULT NULL,
  `horariodocentesfecha` date DEFAULT NULL,
  `horariodocentesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idHorarioDocentes`),
  KEY `fk_HorarioDocentes_Horas1_idx` (`horas_idHoras`),
  KEY `fk_HorarioDocentes_Dias1_idx` (`dias_idDias`),
  KEY `fk_horariodocentes_distributivocursoasignatura1_idx` (`fkdistributivocursoasignaturaid`),
  CONSTRAINT `fk_HorarioDocentes_Dias1` FOREIGN KEY (`dias_idDias`) REFERENCES `dias` (`idDias`),
  CONSTRAINT `fk_horariodocentes_distributivocursoasignatura1` FOREIGN KEY (`fkdistributivocursoasignaturaid`) REFERENCES `distributivocursoasignatura` (`distributivocursoasignaturaid`),
  CONSTRAINT `fk_HorarioDocentes_Horas1` FOREIGN KEY (`horas_idHoras`) REFERENCES `horas` (`idHoras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horariodocentes`
--

LOCK TABLES `horariodocentes` WRITE;
/*!40000 ALTER TABLE `horariodocentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `horariodocentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horas`
--

DROP TABLE IF EXISTS `horas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horas` (
  `idHoras` int NOT NULL AUTO_INCREMENT,
  `nHora` int DEFAULT NULL,
  `horaInicio` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `horaFin` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `horasOculto` int DEFAULT NULL,
  `horasAccion` int DEFAULT NULL,
  `horasfecha` date DEFAULT NULL,
  `horasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idHoras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horas`
--

LOCK TABLES `horas` WRITE;
/*!40000 ALTER TABLE `horas` DISABLE KEYS */;
/*!40000 ALTER TABLE `horas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idiomasancestrales`
--

DROP TABLE IF EXISTS `idiomasancestrales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `idiomasancestrales` (
  `ididiomaAncestral` int NOT NULL AUTO_INCREMENT,
  `idiomasancestralcodigo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `idioma` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `idiomaetnia` int NOT NULL,
  `idiomaancestralOculto` int DEFAULT NULL,
  `idiomaancestralAccion` int DEFAULT NULL,
  `idiomaancestralfecha` date DEFAULT NULL,
  `idiomaancestraluser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ididiomaAncestral`),
  KEY `fk_idiomasancestrales_etnias1_idx` (`idiomaetnia`),
  CONSTRAINT `fk_idiomasancestrales_etnias1` FOREIGN KEY (`idiomaetnia`) REFERENCES `etnias` (`etniaId`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idiomasancestrales`
--

LOCK TABLES `idiomasancestrales` WRITE;
/*!40000 ALTER TABLE `idiomasancestrales` DISABLE KEYS */;
/*!40000 ALTER TABLE `idiomasancestrales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingresoconconcursomeritos`
--

DROP TABLE IF EXISTS `ingresoconconcursomeritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingresoconconcursomeritos` (
  `ingresoConConcursoMeritosId` int NOT NULL AUTO_INCREMENT,
  `ingresoconconcursomeritoscodigo` int DEFAULT NULL,
  `ingresoConConcursoMeritos` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ingresoconconcursomeritosOculto` int DEFAULT NULL,
  `ingresoconconcursomeritosAccion` int DEFAULT NULL,
  `ingresoconconcursomeritosfecha` date DEFAULT NULL,
  `ingresoconconcursomeritosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ingresoConConcursoMeritosId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingresoconconcursomeritos`
--

LOCK TABLES `ingresoconconcursomeritos` WRITE;
/*!40000 ALTER TABLE `ingresoconconcursomeritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingresoconconcursomeritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingresosestudiante`
--

DROP TABLE IF EXISTS `ingresosestudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingresosestudiante` (
  `ingresosestudianteId` int NOT NULL AUTO_INCREMENT,
  `ingresosestudiantecodigo` int DEFAULT NULL,
  `ingresosestudiante` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ingresosestudianteOculto` int DEFAULT NULL,
  `ingresosestudianteAccion` int DEFAULT NULL,
  `ingresosestudiantefecha` date DEFAULT NULL,
  `ingresosestudianteuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ingresosestudianteId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingresosestudiante`
--

LOCK TABLES `ingresosestudiante` WRITE;
/*!40000 ALTER TABLE `ingresosestudiante` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingresosestudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instituciondondecursaestudios`
--

DROP TABLE IF EXISTS `instituciondondecursaestudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instituciondondecursaestudios` (
  `institucionDondeCursaEstudiosId` int NOT NULL AUTO_INCREMENT,
  `institucionDondeCursaEstudios` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `instituciondondecursaestudiosOculto` int DEFAULT NULL,
  `instituciondondecursaestudiosAccion` int DEFAULT NULL,
  `instituciondondecursaestudiosfecha` date DEFAULT NULL,
  `instituciondondecursaestudiosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`institucionDondeCursaEstudiosId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituciondondecursaestudios`
--

LOCK TABLES `instituciondondecursaestudios` WRITE;
/*!40000 ALTER TABLE `instituciondondecursaestudios` DISABLE KEYS */;
/*!40000 ALTER TABLE `instituciondondecursaestudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institutos`
--

DROP TABLE IF EXISTS `institutos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `institutos` (
  `institutosId` int NOT NULL AUTO_INCREMENT,
  `institutoscodigo` int DEFAULT NULL,
  `institutoNombre` varchar(160) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `canton_cantonId` int NOT NULL,
  `fkidSostenimiento` int NOT NULL,
  `institutosOculto` int DEFAULT NULL,
  `institutosAccion` int DEFAULT NULL,
  `institutosfecha` date DEFAULT NULL,
  `institutosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`institutosId`),
  KEY `fk_Institutos_Canton1_idx` (`canton_cantonId`),
  KEY `fk_Institutos_Sostenimientos1_idx` (`fkidSostenimiento`),
  CONSTRAINT `fk_Institutos_Canton1` FOREIGN KEY (`canton_cantonId`) REFERENCES `canton` (`cantonId`),
  CONSTRAINT `fk_Institutos_Sostenimientos1` FOREIGN KEY (`fkidSostenimiento`) REFERENCES `sostenimientos` (`idSostenimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institutos`
--

LOCK TABLES `institutos` WRITE;
/*!40000 ALTER TABLE `institutos` DISABLE KEYS */;
/*!40000 ALTER TABLE `institutos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jornadasacademicas`
--

DROP TABLE IF EXISTS `jornadasacademicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jornadasacademicas` (
  `jornadaAcademicaId` int NOT NULL AUTO_INCREMENT,
  `jornadaAcademicaCodigo` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `jornadaAcademica` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `jornadasacademicasOculto` int DEFAULT NULL,
  `jornadasacademicasAccion` int DEFAULT NULL,
  `jornadasacademicasfecha` date DEFAULT NULL,
  `jornadasacademicasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`jornadaAcademicaId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jornadasacademicas`
--

LOCK TABLES `jornadasacademicas` WRITE;
/*!40000 ALTER TABLE `jornadasacademicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `jornadasacademicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mallacurricular`
--

DROP TABLE IF EXISTS `mallacurricular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mallacurricular` (
  `idmallacurricular` int NOT NULL AUTO_INCREMENT,
  `iinstitutosId` int NOT NULL,
  `ccarrerasId` int NOT NULL,
  `nnivelAcademicoQueCursaId` int NOT NULL,
  `pperiodoacademicoId` int NOT NULL,
  `asignaturasnivel` int NOT NULL,
  `asignaturasprevia` int NOT NULL,
  `mallacurricularOculto` int DEFAULT NULL,
  `mallacurricularAccion` int DEFAULT NULL,
  `mallacurricularfecha` date DEFAULT NULL,
  `mallacurricularuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idmallacurricular`),
  KEY `fk_mallacurricular_institutos1_idx` (`iinstitutosId`),
  KEY `fk_mallacurricular_carreras1_idx` (`ccarrerasId`),
  KEY `fk_mallacurricular_nivelacademico1_idx` (`nnivelAcademicoQueCursaId`),
  KEY `fk_mallacurricular_periodoacademico1_idx` (`pperiodoacademicoId`),
  KEY `fk_mallacurricular_asignaturas1_idx` (`asignaturasnivel`),
  KEY `fk_mallacurricular_asignaturas2_idx` (`asignaturasprevia`),
  CONSTRAINT `fk_mallacurricular_asignaturas1` FOREIGN KEY (`asignaturasnivel`) REFERENCES `asignaturas` (`asignaturasId`),
  CONSTRAINT `fk_mallacurricular_asignaturas2` FOREIGN KEY (`asignaturasprevia`) REFERENCES `asignaturas` (`asignaturasId`),
  CONSTRAINT `fk_mallacurricular_carreras1` FOREIGN KEY (`ccarrerasId`) REFERENCES `carreras` (`carrerasId`),
  CONSTRAINT `fk_mallacurricular_institutos1` FOREIGN KEY (`iinstitutosId`) REFERENCES `institutos` (`institutosId`),
  CONSTRAINT `fk_mallacurricular_nivelacademico1` FOREIGN KEY (`nnivelAcademicoQueCursaId`) REFERENCES `nivelacademico` (`nivelAcademicoQueCursaId`),
  CONSTRAINT `fk_mallacurricular_periodoacademico1` FOREIGN KEY (`pperiodoacademicoId`) REFERENCES `periodoacademico` (`periodoacademicoId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mallacurricular`
--

LOCK TABLES `mallacurricular` WRITE;
/*!40000 ALTER TABLE `mallacurricular` DISABLE KEYS */;
/*!40000 ALTER TABLE `mallacurricular` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matriculas` (
  `matriculasId` int NOT NULL AUTO_INCREMENT,
  `codigoMatricula` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fechaMatricula` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `montoCreditoEducativo` int DEFAULT '0',
  `montoAyudaEconomica` int DEFAULT '0',
  `fechainicioCarrera` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `enumeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ccarrerasId` int NOT NULL,
  `jjornadaAcademicaId` int NOT NULL,
  `pperiodoacademicoId` int NOT NULL,
  `pparaleloId` int NOT NULL,
  `ttipoMatriculaId` int NOT NULL,
  `nnivelAcademicoQueCursaId` int NOT NULL,
  `rrecibePensionDiferenciadaId` int NOT NULL,
  `eestudianteOcupacionId` int NOT NULL,
  `bbonoDesarrolloId` int NOT NULL,
  `iingresosestudianteId` int NOT NULL,
  `hhaRepetidoAlMenosUnaMateriaid` int NOT NULL,
  `hhaPerdidoLaGratuidadId` int NOT NULL,
  `ingresoTotalHogar` int NOT NULL,
  `fkNivelFormacionMadre` int NOT NULL,
  `fkNivelFormacionPadre` int NOT NULL,
  `cantidadMiembrosHogar` int NOT NULL,
  `matriculasOculto` int DEFAULT NULL,
  `matriculasAccion` int DEFAULT NULL,
  `matriculasfecha` date DEFAULT NULL,
  `matriculasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`matriculasId`),
  KEY `fk_matriculas_estudiantes1_idx` (`enumeroIdentificacion`),
  KEY `fk_matriculas_carreras1_idx` (`ccarrerasId`),
  KEY `fk_matriculas_jornadasacademicas1_idx` (`jjornadaAcademicaId`),
  KEY `fk_matriculas_periodoacademico1_idx` (`pperiodoacademicoId`),
  KEY `fk_matriculas_paralelo1_idx` (`pparaleloId`),
  KEY `fk_matriculas_tipomatricula1_idx` (`ttipoMatriculaId`),
  KEY `fk_matriculas_nivelacademico1_idx` (`nnivelAcademicoQueCursaId`),
  KEY `fk_matriculas_recibepensiondiferenciada1_idx` (`rrecibePensionDiferenciadaId`),
  KEY `fk_matriculas_bonodesarrollo1_idx` (`bbonoDesarrolloId`),
  KEY `fk_matriculas_ingresosestudiante1_idx` (`iingresosestudianteId`),
  KEY `fk_matriculas_harepetidoalmenosunamateria1_idx` (`hhaRepetidoAlMenosUnaMateriaid`),
  KEY `fk_matriculas_haperdidolagratuidad1_idx` (`hhaPerdidoLaGratuidadId`),
  KEY `fk_matriculas_nivelformacion1_idx` (`fkNivelFormacionMadre`),
  KEY `fk_matriculas_nivelformacion2_idx` (`fkNivelFormacionPadre`),
  KEY `fk_matriculas_estudianteocupacion1_idx` (`eestudianteOcupacionId`),
  CONSTRAINT `fk_matriculas_bonodesarrollo1` FOREIGN KEY (`bbonoDesarrolloId`) REFERENCES `bonodesarrollo` (`bonoDesarrolloId`),
  CONSTRAINT `fk_matriculas_carreras1` FOREIGN KEY (`ccarrerasId`) REFERENCES `carreras` (`carrerasId`),
  CONSTRAINT `fk_matriculas_estudianteocupacion1` FOREIGN KEY (`eestudianteOcupacionId`) REFERENCES `estudianteocupacion` (`estudianteOcupacionId`),
  CONSTRAINT `fk_matriculas_estudiantes1` FOREIGN KEY (`enumeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_matriculas_haperdidolagratuidad1` FOREIGN KEY (`hhaPerdidoLaGratuidadId`) REFERENCES `haperdidolagratuidad` (`haPerdidoLaGratuidadId`),
  CONSTRAINT `fk_matriculas_harepetidoalmenosunamateria1` FOREIGN KEY (`hhaRepetidoAlMenosUnaMateriaid`) REFERENCES `harepetidoalmenosunamateria` (`haRepetidoAlMenosUnaMateriaid`),
  CONSTRAINT `fk_matriculas_ingresosestudiante1` FOREIGN KEY (`iingresosestudianteId`) REFERENCES `ingresosestudiante` (`ingresosestudianteId`),
  CONSTRAINT `fk_matriculas_jornadasacademicas1` FOREIGN KEY (`jjornadaAcademicaId`) REFERENCES `jornadasacademicas` (`jornadaAcademicaId`),
  CONSTRAINT `fk_matriculas_nivelacademico1` FOREIGN KEY (`nnivelAcademicoQueCursaId`) REFERENCES `nivelacademico` (`nivelAcademicoQueCursaId`),
  CONSTRAINT `fk_matriculas_nivelformacion1` FOREIGN KEY (`fkNivelFormacionMadre`) REFERENCES `nivelformacion` (`nivelFormacionId`),
  CONSTRAINT `fk_matriculas_nivelformacion2` FOREIGN KEY (`fkNivelFormacionPadre`) REFERENCES `nivelformacion` (`nivelFormacionId`),
  CONSTRAINT `fk_matriculas_paralelo1` FOREIGN KEY (`pparaleloId`) REFERENCES `paralelo` (`paraleloId`),
  CONSTRAINT `fk_matriculas_periodoacademico1` FOREIGN KEY (`pperiodoacademicoId`) REFERENCES `periodoacademico` (`periodoacademicoId`),
  CONSTRAINT `fk_matriculas_recibepensiondiferenciada1` FOREIGN KEY (`rrecibePensionDiferenciadaId`) REFERENCES `recibepensiondiferenciada` (`recibePensionDiferenciadaId`),
  CONSTRAINT `fk_matriculas_tipomatricula1` FOREIGN KEY (`ttipoMatriculaId`) REFERENCES `tipomatricula` (`tipoMatriculaId`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modalidadcarrera`
--

DROP TABLE IF EXISTS `modalidadcarrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modalidadcarrera` (
  `modalidadCarreraId` int NOT NULL AUTO_INCREMENT,
  `modalidadcarreracodigo` int DEFAULT NULL,
  `modalidadCarrera` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `modalidadcarreraOculto` int DEFAULT NULL,
  `modalidadcarreraAccion` int DEFAULT NULL,
  `modalidadcarrerafecha` date DEFAULT NULL,
  `modalidadcarrerauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`modalidadCarreraId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidadcarrera`
--

LOCK TABLES `modalidadcarrera` WRITE;
/*!40000 ALTER TABLE `modalidadcarrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `modalidadcarrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivelacademico`
--

DROP TABLE IF EXISTS `nivelacademico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nivelacademico` (
  `nivelAcademicoQueCursaId` int NOT NULL AUTO_INCREMENT,
  `nivelacademicocodigo` int DEFAULT NULL,
  `nivelAcademicoQueCursa` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nivelacademicoOculto` int DEFAULT NULL,
  `nivelacademicoAccion` int DEFAULT NULL,
  `nivelacademicofecha` date DEFAULT NULL,
  `nivelacademicouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`nivelAcademicoQueCursaId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivelacademico`
--

LOCK TABLES `nivelacademico` WRITE;
/*!40000 ALTER TABLE `nivelacademico` DISABLE KEYS */;
/*!40000 ALTER TABLE `nivelacademico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivelformacion`
--

DROP TABLE IF EXISTS `nivelformacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nivelformacion` (
  `nivelFormacionId` int NOT NULL AUTO_INCREMENT,
  `codigonivelFormacion` int DEFAULT NULL,
  `nivelFormacion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nivelInstruccion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nivelformacionOculto` int DEFAULT NULL,
  `nivelformacionAccion` int DEFAULT NULL,
  `nivelformacionfecha` date DEFAULT NULL,
  `nivelformacionuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`nivelFormacionId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivelformacion`
--

LOCK TABLES `nivelformacion` WRITE;
/*!40000 ALTER TABLE `nivelformacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `nivelformacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notas` (
  `notasid` int NOT NULL AUTO_INCREMENT,
  `bidBimestres` int NOT NULL,
  `categoria` int DEFAULT NULL,
  `fkidformaCalificacion` int NOT NULL,
  `fkdistributivocursoasignaturaid` int NOT NULL,
  `fkidSegundaTerceraMatricula` int NOT NULL,
  `notasOculto` int DEFAULT NULL,
  `notasAccion` int DEFAULT NULL,
  `notasfecha` date DEFAULT NULL,
  `notasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`notasid`),
  KEY `fk_notas_bimestres1_idx` (`bidBimestres`),
  KEY `fk_notas_formaCalificacion1_idx` (`fkidformaCalificacion`),
  KEY `fk_notas_distributivocursoasignatura1_idx` (`fkdistributivocursoasignaturaid`),
  KEY `fk_notas_segundaterceramatricula1_idx` (`fkidSegundaTerceraMatricula`),
  CONSTRAINT `fk_notas_bimestres1` FOREIGN KEY (`bidBimestres`) REFERENCES `bimestres` (`idBimestres`),
  CONSTRAINT `fk_notas_distributivocursoasignatura1` FOREIGN KEY (`fkdistributivocursoasignaturaid`) REFERENCES `distributivocursoasignatura` (`distributivocursoasignaturaid`),
  CONSTRAINT `fk_notas_formaCalificacion1` FOREIGN KEY (`fkidformaCalificacion`) REFERENCES `formaCalificacion` (`idformaCalificacion`),
  CONSTRAINT `fk_notas_segundaterceramatricula1` FOREIGN KEY (`fkidSegundaTerceraMatricula`) REFERENCES `segundaterceramatricula` (`idSegundaTerceraMatricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `numeraciondocumentos`
--

DROP TABLE IF EXISTS `numeraciondocumentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `numeraciondocumentos` (
  `numeracionDocumentosId` int NOT NULL AUTO_INCREMENT,
  `nombreDocumento` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `numeracionSiguiente` int DEFAULT NULL,
  `numeraciondocumentosOculto` int DEFAULT NULL,
  `numeraciondocumentosAccion` int DEFAULT NULL,
  `numeraciondocumentosfecha` date DEFAULT NULL,
  `numeraciondocumentosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`numeracionDocumentosId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `numeraciondocumentos`
--

LOCK TABLES `numeraciondocumentos` WRITE;
/*!40000 ALTER TABLE `numeraciondocumentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `numeraciondocumentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nummatriculas`
--

DROP TABLE IF EXISTS `nummatriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nummatriculas` (
  `idnummatricula` int NOT NULL AUTO_INCREMENT,
  `nummatriculacodigo` int DEFAULT NULL,
  `nummatricula` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nummatriculasOculto` int DEFAULT NULL,
  `nummatriculasAccion` int DEFAULT NULL,
  `nummatriculasfecha` date DEFAULT NULL,
  `nummatriculasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idnummatricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nummatriculas`
--

LOCK TABLES `nummatriculas` WRITE;
/*!40000 ALTER TABLE `nummatriculas` DISABLE KEYS */;
/*!40000 ALTER TABLE `nummatriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `numpubrevistascientifindexadas`
--

DROP TABLE IF EXISTS `numpubrevistascientifindexadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `numpubrevistascientifindexadas` (
  `numPubRevistasCientifIndexadasId` int NOT NULL AUTO_INCREMENT,
  `numPubRevistasCientifIndexadas` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nprciOculto` int DEFAULT NULL,
  `nprciAccion` int DEFAULT NULL,
  `nprcifecha` date DEFAULT NULL,
  `nprciuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`numPubRevistasCientifIndexadasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `numpubrevistascientifindexadas`
--

LOCK TABLES `numpubrevistascientifindexadas` WRITE;
/*!40000 ALTER TABLE `numpubrevistascientifindexadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `numpubrevistascientifindexadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obraspublicaciones`
--

DROP TABLE IF EXISTS `obraspublicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `obraspublicaciones` (
  `obrasPublicacionescId` int NOT NULL AUTO_INCREMENT,
  `fkpubRevistasCienInIndexadasId` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fknumPubRevistasCientifIndexadasId` int NOT NULL,
  `docentesNumeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `obraspublicacionesOculto` int DEFAULT NULL,
  `obraspublicacionesAccion` int DEFAULT NULL,
  `obraspublicacionesfecha` date DEFAULT NULL,
  `obraspublicacionesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`obrasPublicacionescId`),
  KEY `fk_PubRevistasCienInIndexadas_has_NumPubRevistasCientifInde_idx` (`fknumPubRevistasCientifIndexadasId`),
  KEY `fk_PubRevistasCienInIndexadas_has_NumPubRevistasCientifInde_idx1` (`fkpubRevistasCienInIndexadasId`),
  KEY `fk_ObrasPublicaciones_Docentes1_idx` (`docentesNumeroIdentificacion`),
  CONSTRAINT `fk_ObrasPublicaciones_Docentes1` FOREIGN KEY (`docentesNumeroIdentificacion`) REFERENCES `docentes` (`numeroIdentificacion`),
  CONSTRAINT `fk_PubRevistasCienInIndexadas_has_NumPubRevistasCientifIndexa1` FOREIGN KEY (`fkpubRevistasCienInIndexadasId`) REFERENCES `pubrevistascieninindexadas` (`pubRevistasCienInIndexadasId`),
  CONSTRAINT `fk_PubRevistasCienInIndexadas_has_NumPubRevistasCientifIndexa2` FOREIGN KEY (`fknumPubRevistasCientifIndexadasId`) REFERENCES `numpubrevistascientifindexadas` (`numPubRevistasCientifIndexadasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obraspublicaciones`
--

LOCK TABLES `obraspublicaciones` WRITE;
/*!40000 ALTER TABLE `obraspublicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `obraspublicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paises` (
  `paisId` int NOT NULL AUTO_INCREMENT,
  `paisescodigo` int DEFAULT NULL,
  `pais` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `paisesOculto` int DEFAULT NULL,
  `paisesAccion` int DEFAULT NULL,
  `paisesfecha` date DEFAULT NULL,
  `paisesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`paisId`)
) ENGINE=InnoDB AUTO_INCREMENT=1007 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paralelo`
--

DROP TABLE IF EXISTS `paralelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paralelo` (
  `paraleloId` int NOT NULL AUTO_INCREMENT,
  `paralelocodigo` int DEFAULT NULL,
  `paralelo` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `paraleloOculto` int DEFAULT NULL,
  `paraleloAccion` int DEFAULT NULL,
  `paralelofecha` date DEFAULT NULL,
  `paralelouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`paraleloId`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paralelo`
--

LOCK TABLES `paralelo` WRITE;
/*!40000 ALTER TABLE `paralelo` DISABLE KEYS */;
/*!40000 ALTER TABLE `paralelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parentescos`
--

DROP TABLE IF EXISTS `parentescos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parentescos` (
  `idParentescos` int NOT NULL AUTO_INCREMENT,
  `parentescocodigo` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `parentesco` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `parentescosOculto` int DEFAULT NULL,
  `parentescosAccion` int DEFAULT NULL,
  `parentescosfecha` date DEFAULT NULL,
  `parentescosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idParentescos`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parentescos`
--

LOCK TABLES `parentescos` WRITE;
/*!40000 ALTER TABLE `parentescos` DISABLE KEYS */;
/*!40000 ALTER TABLE `parentescos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parroquias`
--

DROP TABLE IF EXISTS `parroquias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parroquias` (
  `idparroquias` int NOT NULL AUTO_INCREMENT,
  `parroquiascodigo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `parroquia` varchar(125) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `parroquiasCanton` int NOT NULL,
  `parroquiaOculto` int DEFAULT NULL,
  `parroquiaAccion` int DEFAULT NULL,
  `parroquiafecha` date DEFAULT NULL,
  `parroquiasUsuario` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idparroquias`),
  KEY `fk_parroquias_Canton_idx` (`parroquiasCanton`),
  CONSTRAINT `fk_parroquias_Canton` FOREIGN KEY (`parroquiasCanton`) REFERENCES `canton` (`cantonId`)
) ENGINE=InnoDB AUTO_INCREMENT=1382 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parroquias`
--

LOCK TABLES `parroquias` WRITE;
/*!40000 ALTER TABLE `parroquias` DISABLE KEYS */;
/*!40000 ALTER TABLE `parroquias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participaenproyectovinculacionsociedad`
--

DROP TABLE IF EXISTS `participaenproyectovinculacionsociedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `participaenproyectovinculacionsociedad` (
  `pappvsid` int NOT NULL AUTO_INCREMENT,
  `participaEnProyectoVinculacionSociedad` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ppvsOculto` int DEFAULT NULL,
  `ppvsAccion` int DEFAULT NULL,
  `ppvsfecha` date DEFAULT NULL,
  `ppvsuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pappvsid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participaenproyectovinculacionsociedad`
--

LOCK TABLES `participaenproyectovinculacionsociedad` WRITE;
/*!40000 ALTER TABLE `participaenproyectovinculacionsociedad` DISABLE KEYS */;
/*!40000 ALTER TABLE `participaenproyectovinculacionsociedad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodoacademico`
--

DROP TABLE IF EXISTS `periodoacademico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `periodoacademico` (
  `periodoacademicoId` int NOT NULL AUTO_INCREMENT,
  `codigoPeriodo` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `periodoAcademico` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cicloperiodo_idcicloperiodo` int NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `observaciones` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `actual` int DEFAULT NULL,
  `periodoacademicoOculto` int DEFAULT NULL,
  `periodoacademicoAccion` int DEFAULT NULL,
  `periodoacademicofecha` date DEFAULT NULL,
  `periodoacademicouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`periodoacademicoId`),
  UNIQUE KEY `codigoPeriodo` (`codigoPeriodo`),
  UNIQUE KEY `periodoacademicoId_UNIQUE` (`periodoacademicoId`),
  KEY `fk_periodoacademico_cicloperiodo1_idx` (`cicloperiodo_idcicloperiodo`),
  CONSTRAINT `fk_periodoacademico_cicloperiodo1` FOREIGN KEY (`cicloperiodo_idcicloperiodo`) REFERENCES `cicloperiodo` (`idcicloperiodo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodoacademico`
--

LOCK TABLES `periodoacademico` WRITE;
/*!40000 ALTER TABLE `periodoacademico` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodoacademico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal` (
  `tipodocumentoId` int NOT NULL,
  `numeroIdentificacion` int NOT NULL,
  `primerApellido` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `segundoApellido` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `primerNombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `segundoNombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sexoId` int NOT NULL,
  `generoId` int NOT NULL,
  `estadocivilId` int NOT NULL,
  `etniaId` int NOT NULL,
  `pueblonacionalidadId` int NOT NULL,
  `direccionDomiciliaria` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `provinciaSufragio` int NOT NULL,
  `numeroCelular` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `correoElectronico` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `numDomicilio` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `porcentajeDiscapacidad` int DEFAULT NULL,
  `numCarnetDiscapacidad` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipoDiscapacidadid` int NOT NULL,
  `tipoEnfermedadCatastroficaId` int NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `paisNacionalidadId` int NOT NULL,
  `tipoPersonalAdministrativo` int NOT NULL,
  `fechaIngresoIES` date DEFAULT NULL,
  `fechaSalidaIES` date DEFAULT NULL,
  `relacionLaboralIESId` int NOT NULL,
  `ingresoConConcursoMeritos` int NOT NULL,
  `nroHorasLaborablesSemana` int DEFAULT NULL,
  `salarioMensual` int DEFAULT NULL,
  `usuarioPersonal` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `passwordPersonal` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `accesodepartamento_idaccesodepartamento` int NOT NULL,
  `personalOculto` int DEFAULT NULL,
  `personalAccion` int DEFAULT NULL,
  `personalfecha` date DEFAULT NULL,
  `personaluser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`numeroIdentificacion`),
  KEY `fk_Personal_Sexo1_idx` (`sexoId`),
  KEY `fk_Personal_Generos1_idx` (`generoId`),
  KEY `fk_Personal_EstadosCiviles1_idx` (`estadocivilId`),
  KEY `fk_Personal_Etnias1_idx` (`etniaId`),
  KEY `fk_Personal_Pueblonacionalidad1_idx` (`pueblonacionalidadId`),
  KEY `fk_Personal_Provincia1_idx` (`provinciaSufragio`),
  KEY `fk_Personal_TipoDiscapacidad1_idx` (`tipoDiscapacidadid`),
  KEY `fk_Personal_TipoEnfermedadCatastrofica1_idx` (`tipoEnfermedadCatastroficaId`),
  KEY `fk_Personal_Paises1_idx` (`paisNacionalidadId`),
  KEY `fk_Personal_CargoGestionDireccionAcademico1_idx` (`tipoPersonalAdministrativo`),
  KEY `fk_Personal_RelacionLaboralIES1_idx` (`relacionLaboralIESId`),
  KEY `fk_Personal_IngresoConConcursoMeritos1_idx` (`ingresoConConcursoMeritos`),
  KEY `fk_Personal_Tipo_documento1` (`tipodocumentoId`),
  KEY `fk_personal_accesodepartamento1_idx` (`accesodepartamento_idaccesodepartamento`),
  CONSTRAINT `fk_personal_accesodepartamento1` FOREIGN KEY (`accesodepartamento_idaccesodepartamento`) REFERENCES `accesodepartamento` (`idaccesodepartamento`),
  CONSTRAINT `fk_personal_cargodirectivo1` FOREIGN KEY (`tipoPersonalAdministrativo`) REFERENCES `cargodirectivo` (`cargoDirectivoId`),
  CONSTRAINT `fk_Personal_CargoGestionDireccionAcademico1` FOREIGN KEY (`tipoPersonalAdministrativo`) REFERENCES `cargogestiondireccionacademico` (`cargoGestionDireccionAcademicoId`),
  CONSTRAINT `fk_Personal_EstadosCiviles1` FOREIGN KEY (`estadocivilId`) REFERENCES `estadosciviles` (`estadoCivilId`),
  CONSTRAINT `fk_Personal_Etnias1` FOREIGN KEY (`etniaId`) REFERENCES `etnias` (`etniaId`),
  CONSTRAINT `fk_Personal_Generos1` FOREIGN KEY (`generoId`) REFERENCES `generos` (`generoId`),
  CONSTRAINT `fk_Personal_IngresoConConcursoMeritos1` FOREIGN KEY (`ingresoConConcursoMeritos`) REFERENCES `ingresoconconcursomeritos` (`ingresoConConcursoMeritosId`),
  CONSTRAINT `fk_Personal_Paises1` FOREIGN KEY (`paisNacionalidadId`) REFERENCES `paises` (`paisId`),
  CONSTRAINT `fk_Personal_Provincia1` FOREIGN KEY (`provinciaSufragio`) REFERENCES `provincia` (`provinciaId`),
  CONSTRAINT `fk_Personal_Pueblonacionalidad1` FOREIGN KEY (`pueblonacionalidadId`) REFERENCES `pueblonacionalidades` (`pueblonacionalidadId`),
  CONSTRAINT `fk_Personal_RelacionLaboralIES1` FOREIGN KEY (`relacionLaboralIESId`) REFERENCES `relacionlaboralies` (`relacionLaboralIESId`),
  CONSTRAINT `fk_Personal_Sexo1` FOREIGN KEY (`sexoId`) REFERENCES `sexo` (`sexoId`),
  CONSTRAINT `fk_Personal_Tipo_documento1` FOREIGN KEY (`tipodocumentoId`) REFERENCES `tiposdocumentos` (`tipoDocumentoId`),
  CONSTRAINT `fk_Personal_TipoDiscapacidad1` FOREIGN KEY (`tipoDiscapacidadid`) REFERENCES `tipodiscapacidad` (`tipoDiscapacidadid`),
  CONSTRAINT `fk_Personal_TipoEnfermedadCatastrofica1` FOREIGN KEY (`tipoEnfermedadCatastroficaId`) REFERENCES `tipoenfermedadcatastrofica` (`tipoEnfermedadCatastroficaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poseebeca`
--

DROP TABLE IF EXISTS `poseebeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poseebeca` (
  `poseeBecaId` int NOT NULL AUTO_INCREMENT,
  `poseebecacodigo` int DEFAULT NULL,
  `poseeBeca` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `poseebecaOculto` int DEFAULT NULL,
  `poseebecaAccion` int DEFAULT NULL,
  `poseebecafecha` date DEFAULT NULL,
  `poseebecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`poseeBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poseebeca`
--

LOCK TABLES `poseebeca` WRITE;
/*!40000 ALTER TABLE `poseebeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `poseebeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `practicasestudiantes`
--

DROP TABLE IF EXISTS `practicasestudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `practicasestudiantes` (
  `practicasEstudiantesId` int NOT NULL AUTO_INCREMENT,
  `estudiantes_numeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fkPracticasPreProfecionalesId` int NOT NULL,
  `fkhaRealizadoPracticasPreprofesionalesid` int NOT NULL,
  `nombreDeLaActividad` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `objetivoDeLaActividad` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `periodoAcademico_periodoacademicoId` int NOT NULL,
  `empresas_empresasId` int NOT NULL,
  `representanteLega` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `practicasestudiantesOculto` int DEFAULT NULL,
  `practicasestudiantesAccion` int DEFAULT NULL,
  `practicasestudiantesfecha` date DEFAULT NULL,
  `practicasestudiantesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`practicasEstudiantesId`),
  KEY `fk_PracticasEstudiantes_PracticasPreProfecionales1_idx` (`fkPracticasPreProfecionalesId`),
  KEY `fk_PracticasEstudiantes_Empresas1_idx` (`empresas_empresasId`),
  KEY `fk_PracticasEstudiantes_PeriodoAcademico1_idx` (`periodoAcademico_periodoacademicoId`),
  KEY `fk_PracticasEstudiantes_Estudiantes1_idx` (`estudiantes_numeroIdentificacion`),
  KEY `fk_PracticasEstudiantes_HaRealizadoPracticasPreprofesionale_idx` (`fkhaRealizadoPracticasPreprofesionalesid`),
  CONSTRAINT `fk_PracticasEstudiantes_Empresas1` FOREIGN KEY (`empresas_empresasId`) REFERENCES `empresas` (`empresasId`),
  CONSTRAINT `fk_PracticasEstudiantes_Estudiantes1` FOREIGN KEY (`estudiantes_numeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_PracticasEstudiantes_HaRealizadoPracticasPreprofesionales1` FOREIGN KEY (`fkhaRealizadoPracticasPreprofesionalesid`) REFERENCES `harealizadopracticaspreprofesionales` (`haRealizadoPracticasPreprofesionalesid`),
  CONSTRAINT `fk_PracticasEstudiantes_PeriodoAcademico1` FOREIGN KEY (`periodoAcademico_periodoacademicoId`) REFERENCES `periodoacademico` (`periodoacademicoId`),
  CONSTRAINT `fk_PracticasEstudiantes_PracticasPreProfecionales1` FOREIGN KEY (`fkPracticasPreProfecionalesId`) REFERENCES `practicaspreprofecionales` (`practicasPreProfecionalesId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `practicasestudiantes`
--

LOCK TABLES `practicasestudiantes` WRITE;
/*!40000 ALTER TABLE `practicasestudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `practicasestudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `practicaspreprofecionales`
--

DROP TABLE IF EXISTS `practicaspreprofecionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `practicaspreprofecionales` (
  `practicasPreProfecionalesId` int NOT NULL AUTO_INCREMENT,
  `nroHorasPracticasPreprofesionalesPorPeriodo` int DEFAULT NULL,
  `entornoInstitucionalPracticasProfesionalesid` int NOT NULL,
  `fksectorEconomicoid` int NOT NULL,
  `practicaspreprofecionalesOculto` int DEFAULT NULL,
  `practicaspreprofecionalesAccion` int DEFAULT NULL,
  `practicaspreprofecionalesfecha` date DEFAULT NULL,
  `practicaspreprofecionalesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`practicasPreProfecionalesId`),
  KEY `fk_PracticasPreProfecionales_EntornoInstitucionalPracticasP_idx` (`entornoInstitucionalPracticasProfesionalesid`),
  KEY `fk_PracticasPreProfecionales_SectorEconomico1_idx` (`fksectorEconomicoid`),
  CONSTRAINT `fk_PracticasPreProfecionales_EntornoInstitucionalPracticasPro1` FOREIGN KEY (`entornoInstitucionalPracticasProfesionalesid`) REFERENCES `entornoinstitucionalpracticasprofesionales` (`entornoInstitucionalPracticasProfesionalesid`),
  CONSTRAINT `fk_PracticasPreProfecionales_SectorEconomico1` FOREIGN KEY (`fksectorEconomicoid`) REFERENCES `sectoreconomico` (`sectorEconomicoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `practicaspreprofecionales`
--

LOCK TABLES `practicaspreprofecionales` WRITE;
/*!40000 ALTER TABLE `practicaspreprofecionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `practicaspreprofecionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primerarazonbeca`
--

DROP TABLE IF EXISTS `primerarazonbeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `primerarazonbeca` (
  `primeraRazonBecaId` int NOT NULL AUTO_INCREMENT,
  `primerarazonbecacodigo` int DEFAULT NULL,
  `primeraRazonBeca` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `primerarazonbecabool` int DEFAULT NULL,
  `primerarazonbecaOculto` int DEFAULT NULL,
  `primerarazonbecaAccion` int DEFAULT NULL,
  `primerarazonbecafecha` date DEFAULT NULL,
  `primerarazonbecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`primeraRazonBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primerarazonbeca`
--

LOCK TABLES `primerarazonbeca` WRITE;
/*!40000 ALTER TABLE `primerarazonbeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `primerarazonbeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provincia` (
  `provinciaId` int NOT NULL AUTO_INCREMENT,
  `provinciacodigo` int DEFAULT NULL,
  `provincia` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `provinciapais` int NOT NULL,
  `provinciaOculto` int DEFAULT NULL,
  `provinciaAccion` int DEFAULT NULL,
  `provinciafecha` date DEFAULT NULL,
  `provinciauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`provinciaId`),
  KEY `fk_provincia_paises1_idx` (`provinciapais`),
  CONSTRAINT `fk_provincia_paises1` FOREIGN KEY (`provinciapais`) REFERENCES `paises` (`paisId`)
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincia`
--

LOCK TABLES `provincia` WRITE;
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectosinvestigacion`
--

DROP TABLE IF EXISTS `proyectosinvestigacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proyectosinvestigacion` (
  `proyectosInvestigacionId` int NOT NULL AUTO_INCREMENT,
  `piTema` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `piOculto` int DEFAULT NULL,
  `piAccion` int DEFAULT NULL,
  `pifecha` date DEFAULT NULL,
  `piuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`proyectosInvestigacionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectosinvestigacion`
--

LOCK TABLES `proyectosinvestigacion` WRITE;
/*!40000 ALTER TABLE `proyectosinvestigacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyectosinvestigacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectosmacro`
--

DROP TABLE IF EXISTS `proyectosmacro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proyectosmacro` (
  `idProyectosMacro` int NOT NULL AUTO_INCREMENT,
  `proyectosmacrocodigo` int DEFAULT NULL,
  `proyectoMacro` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `proyectosmacroOculto` int DEFAULT NULL,
  `proyectosmacroAccion` int DEFAULT NULL,
  `proyectosmacrofecha` date DEFAULT NULL,
  `proyectosmacrouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idProyectosMacro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectosmacro`
--

LOCK TABLES `proyectosmacro` WRITE;
/*!40000 ALTER TABLE `proyectosmacro` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyectosmacro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pubrevistascieninindexadas`
--

DROP TABLE IF EXISTS `pubrevistascieninindexadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pubrevistascieninindexadas` (
  `pubRevistasCienInIndexadasId` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prciCodigo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pubRevistasCienInIndexadas` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `prciOculto` int DEFAULT NULL,
  `prciAccion` int DEFAULT NULL,
  `prcifecha` date DEFAULT NULL,
  `prciuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pubRevistasCienInIndexadasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pubrevistascieninindexadas`
--

LOCK TABLES `pubrevistascieninindexadas` WRITE;
/*!40000 ALTER TABLE `pubrevistascieninindexadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pubrevistascieninindexadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pueblonacionalidades`
--

DROP TABLE IF EXISTS `pueblonacionalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pueblonacionalidades` (
  `pueblonacionalidadId` int NOT NULL AUTO_INCREMENT,
  `pueblonacionalidadescodigo` int DEFAULT NULL,
  `pueblonacionalidad` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pnetnia` int NOT NULL,
  `pueblonacionalidadOculto` int DEFAULT NULL,
  `pueblonacionalidadAccion` int DEFAULT NULL,
  `pueblonacionalidadfecha` date DEFAULT NULL,
  `pueblonacionalidaduser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pueblonacionalidadId`),
  KEY `fk_pueblonacionalidades_1_idx` (`pnetnia`),
  CONSTRAINT `fk_pnetnia_1` FOREIGN KEY (`pnetnia`) REFERENCES `etnias` (`etniaId`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pueblonacionalidades`
--

LOCK TABLES `pueblonacionalidades` WRITE;
/*!40000 ALTER TABLE `pueblonacionalidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `pueblonacionalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quintarazonbeca`
--

DROP TABLE IF EXISTS `quintarazonbeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quintarazonbeca` (
  `quintaRazonBecaId` int NOT NULL AUTO_INCREMENT,
  `quintarazonbecacoldigo` int DEFAULT NULL,
  `quintaRazonBeca` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `quintarazonbecabool` int DEFAULT NULL,
  `quintarazonbecaOculto` int DEFAULT NULL,
  `quintarazonbecaAccion` int DEFAULT NULL,
  `quintarazonbecafecha` date DEFAULT NULL,
  `quintarazonbecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`quintaRazonBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quintarazonbeca`
--

LOCK TABLES `quintarazonbeca` WRITE;
/*!40000 ALTER TABLE `quintarazonbeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `quintarazonbeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recibepensiondiferenciada`
--

DROP TABLE IF EXISTS `recibepensiondiferenciada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recibepensiondiferenciada` (
  `recibePensionDiferenciadaId` int NOT NULL AUTO_INCREMENT,
  `recibepensiondiferenciadacodigo` int DEFAULT NULL,
  `recibePensionDiferenciada` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `recibepensiondiferenciadaOculto` int DEFAULT NULL,
  `recibepensiondiferenciadaAccion` int DEFAULT NULL,
  `recibepensiondiferenciadafecha` date DEFAULT NULL,
  `recibepensiondiferenciadauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`recibePensionDiferenciadaId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recibepensiondiferenciada`
--

LOCK TABLES `recibepensiondiferenciada` WRITE;
/*!40000 ALTER TABLE `recibepensiondiferenciada` DISABLE KEYS */;
/*!40000 ALTER TABLE `recibepensiondiferenciada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacionlaboralies`
--

DROP TABLE IF EXISTS `relacionlaboralies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relacionlaboralies` (
  `relacionLaboralIESId` int NOT NULL AUTO_INCREMENT,
  `relacionlaboraliescodigo` int DEFAULT NULL,
  `relacionLaboralIES` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `relacionlaboraliesOculto` int DEFAULT NULL,
  `relacionlaboraliesAccion` int DEFAULT NULL,
  `relacionlaboraliesfecha` date DEFAULT NULL,
  `relacionlaboraliesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`relacionLaboralIESId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacionlaboralies`
--

LOCK TABLES `relacionlaboralies` WRITE;
/*!40000 ALTER TABLE `relacionlaboralies` DISABLE KEYS */;
/*!40000 ALTER TABLE `relacionlaboralies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `residenciaestudiantes`
--

DROP TABLE IF EXISTS `residenciaestudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `residenciaestudiantes` (
  `residenciaEstudiantesId` int NOT NULL AUTO_INCREMENT,
  `fknumeroIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `direccionDomiciliariaResidencia` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `codigoPostal` int NOT NULL,
  `fkperiodo` int NOT NULL,
  `residenciaestudiantesOculto` int DEFAULT NULL,
  `residenciaestudiantesAccion` int DEFAULT NULL,
  `residenciaestudiantesfecha` date DEFAULT NULL,
  `residenciaestudiantesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`residenciaEstudiantesId`),
  KEY `fk_ResidenciaEstudiantes_Estudiantes1_idx` (`fknumeroIdentificacion`),
  KEY `fk_residenciaestudiantes_periodoacademico1_idx` (`fkperiodo`),
  KEY `fk_residenciaestudiantes_parroquias1_idx` (`codigoPostal`),
  CONSTRAINT `fk_ResidenciaEstudiantes_Estudiantes1` FOREIGN KEY (`fknumeroIdentificacion`) REFERENCES `estudiantes` (`numeroIdentificacion`),
  CONSTRAINT `fk_residenciaestudiantes_parroquias1` FOREIGN KEY (`codigoPostal`) REFERENCES `parroquias` (`idparroquias`),
  CONSTRAINT `fk_residenciaestudiantes_periodoacademico1` FOREIGN KEY (`fkperiodo`) REFERENCES `periodoacademico` (`periodoacademicoId`)
) ENGINE=InnoDB AUTO_INCREMENT=818 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residenciaestudiantes`
--

LOCK TABLES `residenciaestudiantes` WRITE;
/*!40000 ALTER TABLE `residenciaestudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `residenciaestudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectoreconomico`
--

DROP TABLE IF EXISTS `sectoreconomico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sectoreconomico` (
  `sectorEconomicoid` int NOT NULL AUTO_INCREMENT,
  `sectoreconomicocodigo` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sectorEconomico` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sectoreconomicoOculto` int DEFAULT NULL,
  `sectoreconomicoAccion` int DEFAULT NULL,
  `sectoreconomicofecha` date DEFAULT NULL,
  `sectoreconomicouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`sectorEconomicoid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectoreconomico`
--

LOCK TABLES `sectoreconomico` WRITE;
/*!40000 ALTER TABLE `sectoreconomico` DISABLE KEYS */;
/*!40000 ALTER TABLE `sectoreconomico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `segundarazonbeca`
--

DROP TABLE IF EXISTS `segundarazonbeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `segundarazonbeca` (
  `segundaRazonBecaId` int NOT NULL AUTO_INCREMENT,
  `segundarazonbecacodigo` int DEFAULT NULL,
  `segundaRazonBeca` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `segundarazonbecabool` int DEFAULT NULL,
  `segundarazonbecaOculto` int DEFAULT NULL,
  `segundarazonbecaAccion` int DEFAULT NULL,
  `segundarazonbecafecha` date DEFAULT NULL,
  `segundarazonbecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`segundaRazonBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `segundarazonbeca`
--

LOCK TABLES `segundarazonbeca` WRITE;
/*!40000 ALTER TABLE `segundarazonbeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `segundarazonbeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `segundaterceramatricula`
--

DROP TABLE IF EXISTS `segundaterceramatricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `segundaterceramatricula` (
  `idSegundaTerceraMatricula` int NOT NULL AUTO_INCREMENT,
  `institutos_id` int NOT NULL,
  `matriculas_id` int NOT NULL,
  `asignaturas_id` int NOT NULL,
  `nivelacademico_id` int NOT NULL,
  `nummatriculas_id` int NOT NULL,
  `stmOculto` int DEFAULT NULL,
  `stmAccion` int DEFAULT NULL,
  `stmfecha` date DEFAULT NULL,
  `stmuser` varchar(45) CHARACTER SET ujis COLLATE ujis_japanese_ci DEFAULT NULL,
  PRIMARY KEY (`idSegundaTerceraMatricula`),
  KEY `fk_segundaterceramatricula_institutos1_idx` (`institutos_id`),
  KEY `fk_segundaterceramatricula_asignaturas1_idx` (`asignaturas_id`),
  KEY `fk_segundaterceramatricula_nummatriculas1_idx` (`nummatriculas_id`),
  KEY `fk_segundaterceramatricula_nivelacademico1_idx` (`nivelacademico_id`),
  KEY `fk_segundaterceramatricula_matriculas1_idx` (`matriculas_id`),
  CONSTRAINT `fk_segundaterceramatricula_asignaturas1` FOREIGN KEY (`asignaturas_id`) REFERENCES `asignaturas` (`asignaturasId`),
  CONSTRAINT `fk_segundaterceramatricula_institutos1` FOREIGN KEY (`institutos_id`) REFERENCES `institutos` (`institutosId`),
  CONSTRAINT `fk_segundaterceramatricula_matriculas1` FOREIGN KEY (`matriculas_id`) REFERENCES `matriculas` (`matriculasId`),
  CONSTRAINT `fk_segundaterceramatricula_nivelacademico1` FOREIGN KEY (`nivelacademico_id`) REFERENCES `nivelacademico` (`nivelAcademicoQueCursaId`),
  CONSTRAINT `fk_segundaterceramatricula_nummatriculas1` FOREIGN KEY (`nummatriculas_id`) REFERENCES `nummatriculas` (`idnummatricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `segundaterceramatricula`
--

LOCK TABLES `segundaterceramatricula` WRITE;
/*!40000 ALTER TABLE `segundaterceramatricula` DISABLE KEYS */;
/*!40000 ALTER TABLE `segundaterceramatricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setec`
--

DROP TABLE IF EXISTS `setec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setec` (
  `idsetec` int NOT NULL AUTO_INCREMENT,
  `setecAspirante_numeroidentificacionsetec` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fksetecEncuestador` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `setecCertificacion_idsetecCertificacion` int NOT NULL,
  `setecfkcondiciondevida` int NOT NULL,
  `setecfkcondicionlaboral` int DEFAULT NULL,
  `fksecestadocertificacion` int DEFAULT NULL,
  `setecOculto` int DEFAULT NULL,
  `setecAccion` int DEFAULT NULL,
  `setecfecha` date DEFAULT NULL,
  `setecuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idsetec`),
  KEY `fk_setec_setecAspirante1_idx` (`setecAspirante_numeroidentificacionsetec`),
  KEY `fk_setec_setecEncuestador1_idx` (`fksetecEncuestador`),
  KEY `fk_setec_setecCertificacion1_idx` (`setecCertificacion_idsetecCertificacion`),
  KEY `fk_setec_setecCondiciondeVida1_idx` (`setecfkcondiciondevida`),
  KEY `fk_setec_setecCondicionLaboral1_idx` (`setecfkcondicionlaboral`),
  KEY `fk_setec_fksecestadocertificacion1_idx` (`fksecestadocertificacion`),
  CONSTRAINT `fk_setec_CondiciondeVida1` FOREIGN KEY (`setecfkcondiciondevida`) REFERENCES `setecCondiciondeVida` (`idSetecCondiciondeVida`),
  CONSTRAINT `fk_setec_fksecestadocertificacion1` FOREIGN KEY (`fksecestadocertificacion`) REFERENCES `setecestadoscertificacion` (`idsec`),
  CONSTRAINT `fk_setec_setecAspirante1` FOREIGN KEY (`setecAspirante_numeroidentificacionsetec`) REFERENCES `setecaspirante` (`numeroidentificacionsetec`),
  CONSTRAINT `fk_setec_setecCertificacion1` FOREIGN KEY (`setecCertificacion_idsetecCertificacion`) REFERENCES `seteccertificacion` (`idsetecCertificacion`),
  CONSTRAINT `fk_setec_setecEncuestador1` FOREIGN KEY (`fksetecEncuestador`) REFERENCES `setecencuestador` (`idsetecEncuestadornumIdentificacion`),
  CONSTRAINT `fk_setec_SeteCondicionLaboral1` FOREIGN KEY (`setecfkcondicionlaboral`) REFERENCES `SeteCondicionLaboral` (`idSeteCondicionLaboral`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setec`
--

LOCK TABLES `setec` WRITE;
/*!40000 ALTER TABLE `setec` DISABLE KEYS */;
/*!40000 ALTER TABLE `setec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecCondiciondeVida`
--

DROP TABLE IF EXISTS `setecCondiciondeVida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecCondiciondeVida` (
  `idSetecCondiciondeVida` int NOT NULL AUTO_INCREMENT,
  `setecCondiciondeVidaCedula` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecCondiciondeVidaFecha` date DEFAULT NULL,
  `setecjefehogar` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecseguromedico` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecnumhijos` int DEFAULT NULL,
  `setechijomayor` int DEFAULT NULL,
  `setecAsistenciaInstitucion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecvivienda` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecMienbrosHogar` int DEFAULT NULL,
  `setecLuz` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecAgua` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecInternet` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idSetecCondiciondeVida`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecCondiciondeVida`
--

LOCK TABLES `setecCondiciondeVida` WRITE;
/*!40000 ALTER TABLE `setecCondiciondeVida` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecCondiciondeVida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecaspirante`
--

DROP TABLE IF EXISTS `setecaspirante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecaspirante` (
  `numeroidentificacionsetec` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `primerApellidosetec` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `segundoApellidosetec` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `primerNombresetec` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `segundoNombresetec` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `fkgenerosetec` int NOT NULL,
  `fkformacionArtesano` int NOT NULL,
  `instruccionRegistroCivil` int NOT NULL,
  `setecaspiinstriccionseleccionada` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `parroquiasetec` int NOT NULL,
  `direccionsetec` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `correoelectronicoSetec` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `telefonosetec` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `celularsetec` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fktipodiscapacidad` int NOT NULL,
  `fksocioempleo` int NOT NULL,
  `accesodepartamento_idaccesodepartamento` int NOT NULL,
  `setecaspiranteOculto` int DEFAULT NULL,
  `setecaspiranteAccion` int DEFAULT NULL,
  `setecaspirantefecha` date DEFAULT NULL,
  `setecaspiranteuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`numeroidentificacionsetec`),
  KEY `fk_setecAspirante_generos1_idx` (`fkgenerosetec`),
  KEY `fk_setecAspirante_nivelformacion1_idx` (`instruccionRegistroCivil`),
  KEY `fk_setecAspirante_tipodiscapacidad1_idx` (`fktipodiscapacidad`),
  KEY `fk_setecAspirante_formacionArtesano1_idx` (`fkformacionArtesano`),
  KEY `fk_setecAspirante_socioEmpleo1_idx` (`fksocioempleo`),
  KEY `fk_setecaspirante_accesodepartamento1_idx` (`accesodepartamento_idaccesodepartamento`),
  KEY `fk_setecaspirante_parroquias1_idx` (`parroquiasetec`),
  CONSTRAINT `fk_setecaspirante_accesodepartamento1` FOREIGN KEY (`accesodepartamento_idaccesodepartamento`) REFERENCES `accesodepartamento` (`idaccesodepartamento`),
  CONSTRAINT `fk_setecAspirante_formacionArtesano1` FOREIGN KEY (`fkformacionArtesano`) REFERENCES `formacionartesano` (`idformacionArtesano`),
  CONSTRAINT `fk_setecAspirante_generos1` FOREIGN KEY (`fkgenerosetec`) REFERENCES `generos` (`generoId`),
  CONSTRAINT `fk_setecAspirante_nivelformacion1` FOREIGN KEY (`instruccionRegistroCivil`) REFERENCES `nivelformacion` (`nivelFormacionId`),
  CONSTRAINT `fk_setecaspirante_parroquias1` FOREIGN KEY (`parroquiasetec`) REFERENCES `parroquias` (`idparroquias`),
  CONSTRAINT `fk_setecAspirante_socioEmpleo1` FOREIGN KEY (`fksocioempleo`) REFERENCES `socioempleo` (`idsocioempleo`),
  CONSTRAINT `fk_setecAspirante_tipodiscapacidad1` FOREIGN KEY (`fktipodiscapacidad`) REFERENCES `tipodiscapacidad` (`tipoDiscapacidadid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecaspirante`
--

LOCK TABLES `setecaspirante` WRITE;
/*!40000 ALTER TABLE `setecaspirante` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecaspirante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seteccertificacion`
--

DROP TABLE IF EXISTS `seteccertificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seteccertificacion` (
  `idsetecCertificacion` int NOT NULL AUTO_INCREMENT,
  `fkidsetecperfil` int NOT NULL,
  `fechaprueba` date DEFAULT NULL,
  `horaprueba` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `costoCertidicacion` int DEFAULT NULL,
  `setecLugardondeExaminado` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecnombreEmpresaLugar` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecdireccionEmpresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecTelefonoEmpresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seteccertificacionOculto` int DEFAULT NULL,
  `seteccertificacionAccion` int DEFAULT NULL,
  `seteccertificacionfecha` date DEFAULT NULL,
  `seteccertificacionuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idsetecCertificacion`),
  KEY `fk_setecCertificacion_setecperfil1_idx` (`fkidsetecperfil`),
  CONSTRAINT `fk_setecCertificacion_setecperfil1` FOREIGN KEY (`fkidsetecperfil`) REFERENCES `setecperfil` (`idsetecperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seteccertificacion`
--

LOCK TABLES `seteccertificacion` WRITE;
/*!40000 ALTER TABLE `seteccertificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `seteccertificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecencuestador`
--

DROP TABLE IF EXISTS `setecencuestador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecencuestador` (
  `idsetecEncuestadornumIdentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nombre` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `etnias_etniaId` int NOT NULL,
  `setecencuestadorperfil` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecencuestadorOculto` int DEFAULT NULL,
  `setecencuestadorAccion` int DEFAULT NULL,
  `setecencuestadorfecha` date DEFAULT NULL,
  `setecencuestadoruser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idsetecEncuestadornumIdentificacion`),
  KEY `fk_setecEncuestador_etnias1_idx` (`etnias_etniaId`),
  CONSTRAINT `fk_setecEncuestador_etnias1` FOREIGN KEY (`etnias_etniaId`) REFERENCES `etnias` (`etniaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecencuestador`
--

LOCK TABLES `setecencuestador` WRITE;
/*!40000 ALTER TABLE `setecencuestador` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecencuestador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecestadoocupacional`
--

DROP TABLE IF EXISTS `setecestadoocupacional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecestadoocupacional` (
  `setecEstadoOcupacionalId` int NOT NULL AUTO_INCREMENT,
  `setecestadoocupacionalcodigo` int DEFAULT NULL,
  `estadoOcupacional` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `seoOculto` int DEFAULT NULL,
  `seoAccion` int DEFAULT NULL,
  `seofecha` date DEFAULT NULL,
  `seouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`setecEstadoOcupacionalId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecestadoocupacional`
--

LOCK TABLES `setecestadoocupacional` WRITE;
/*!40000 ALTER TABLE `setecestadoocupacional` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecestadoocupacional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecestadoscertificacion`
--

DROP TABLE IF EXISTS `setecestadoscertificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecestadoscertificacion` (
  `idsec` int NOT NULL AUTO_INCREMENT,
  `seccodigo` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `secdetalle` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `secOculto` int DEFAULT NULL,
  `secAccion` int DEFAULT NULL,
  `secFecha` date DEFAULT NULL,
  `secUser` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`idsec`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecestadoscertificacion`
--

LOCK TABLES `setecestadoscertificacion` WRITE;
/*!40000 ALTER TABLE `setecestadoscertificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecestadoscertificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecexperiencialaboral`
--

DROP TABLE IF EXISTS `setecexperiencialaboral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecexperiencialaboral` (
  `idsetecExperienciaLaboral` int NOT NULL AUTO_INCREMENT,
  `fknumidentificacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `experiencianombreEmpresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tiempodetrabajo` int DEFAULT NULL,
  `setecactividadRealizada` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `splOculto` int DEFAULT NULL,
  `splAccion` int DEFAULT NULL,
  `splfecha` date DEFAULT NULL,
  `spluser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idsetecExperienciaLaboral`),
  KEY `fk_setecExperienciaLaboral_setecAspirante1_idx` (`fknumidentificacion`),
  CONSTRAINT `fk_setecExperienciaLaboral_setecAspirante1` FOREIGN KEY (`fknumidentificacion`) REFERENCES `setecaspirante` (`numeroidentificacionsetec`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecexperiencialaboral`
--

LOCK TABLES `setecexperiencialaboral` WRITE;
/*!40000 ALTER TABLE `setecexperiencialaboral` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecexperiencialaboral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecocupacion`
--

DROP TABLE IF EXISTS `setecocupacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecocupacion` (
  `setecOcupacionId` int NOT NULL AUTO_INCREMENT,
  `fkaspirantesetec` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fktipoOcupacion` int DEFAULT NULL,
  `setecocupacionAsignada` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fkestadoOcupacional` int DEFAULT NULL,
  `horasTrabajadasxSemana` int DEFAULT NULL,
  `fkareadepartamento` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`setecOcupacionId`,`fkaspirantesetec`),
  KEY `fk_setecOcupacion_setecEstadoOcupacional1_idx` (`fkestadoOcupacional`),
  KEY `fk_setecOcupacion_setecTipoOcupacion1_idx` (`fktipoOcupacion`),
  KEY `fk_setecOcupacion_setecAspirante1_idx` (`fkaspirantesetec`),
  CONSTRAINT `fk_setecOcupacion_setecAspirante1` FOREIGN KEY (`fkaspirantesetec`) REFERENCES `setecaspirante` (`numeroidentificacionsetec`),
  CONSTRAINT `fk_setecOcupacion_setecEstadoOcupacional1` FOREIGN KEY (`fkestadoOcupacional`) REFERENCES `setecestadoocupacional` (`setecEstadoOcupacionalId`),
  CONSTRAINT `fk_setecOcupacion_setecTipoOcupacion1` FOREIGN KEY (`fktipoOcupacion`) REFERENCES `setectipoocupacion` (`idsetecTipoOcupacion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecocupacion`
--

LOCK TABLES `setecocupacion` WRITE;
/*!40000 ALTER TABLE `setecocupacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecocupacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setecperfil`
--

DROP TABLE IF EXISTS `setecperfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setecperfil` (
  `idsetecperfil` int NOT NULL AUTO_INCREMENT,
  `setecperfilnombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecperfilcodigo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setecperfilOculto` int DEFAULT NULL,
  `setecperfilAccion` int DEFAULT NULL,
  `setecperfilfecha` date DEFAULT NULL,
  `setecperfiluser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idsetecperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setecperfil`
--

LOCK TABLES `setecperfil` WRITE;
/*!40000 ALTER TABLE `setecperfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `setecperfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setectipoocupacion`
--

DROP TABLE IF EXISTS `setectipoocupacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setectipoocupacion` (
  `idsetecTipoOcupacion` int NOT NULL AUTO_INCREMENT,
  `tipoOcupacion` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setectipoocupacioncodigo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `setectipoocupacionoculto` int DEFAULT NULL,
  `setectipoocupacionaccion` int DEFAULT NULL,
  `setectipoocupacionfecha` date DEFAULT NULL,
  `setectipoocupacionuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idsetecTipoOcupacion`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setectipoocupacion`
--

LOCK TABLES `setectipoocupacion` WRITE;
/*!40000 ALTER TABLE `setectipoocupacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `setectipoocupacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexo`
--

DROP TABLE IF EXISTS `sexo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sexo` (
  `sexoId` int NOT NULL AUTO_INCREMENT,
  `sexocodigo` int DEFAULT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sexoOculto` int DEFAULT NULL,
  `sexoAccion` int DEFAULT NULL,
  `sexofecha` date DEFAULT NULL,
  `sexouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`sexoId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexo`
--

LOCK TABLES `sexo` WRITE;
/*!40000 ALTER TABLE `sexo` DISABLE KEYS */;
/*!40000 ALTER TABLE `sexo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sextarazonbeca`
--

DROP TABLE IF EXISTS `sextarazonbeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sextarazonbeca` (
  `sextaRazonBecaId` int NOT NULL AUTO_INCREMENT,
  `sextaRazonBeca` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sextarazonbecacodigo` int DEFAULT NULL,
  `sextarazonbecabool` int DEFAULT NULL,
  `sextarazonbecaOculto` int DEFAULT NULL,
  `sextarazonbecaAccion` int DEFAULT NULL,
  `sextarazonbecafecha` date DEFAULT NULL,
  `sextarazonbecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`sextaRazonBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sextarazonbeca`
--

LOCK TABLES `sextarazonbeca` WRITE;
/*!40000 ALTER TABLE `sextarazonbeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `sextarazonbeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socioempleo`
--

DROP TABLE IF EXISTS `socioempleo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socioempleo` (
  `idsocioempleo` int NOT NULL AUTO_INCREMENT,
  `socioEmpleoregistro` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `socioempleoOculto` int DEFAULT NULL,
  `socioempleoAccion` int DEFAULT NULL,
  `socioempleofecha` date DEFAULT NULL,
  `socioempleouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idsocioempleo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socioempleo`
--

LOCK TABLES `socioempleo` WRITE;
/*!40000 ALTER TABLE `socioempleo` DISABLE KEYS */;
/*!40000 ALTER TABLE `socioempleo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sostenimientos`
--

DROP TABLE IF EXISTS `sostenimientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sostenimientos` (
  `idSostenimiento` int NOT NULL AUTO_INCREMENT,
  `sostenimientoscodigo` int DEFAULT NULL,
  `sostenimiento` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sostenimientosOculto` int DEFAULT NULL,
  `sostenimientosAccion` int DEFAULT NULL,
  `sostenimientosfecha` date DEFAULT NULL,
  `sostenimientosuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idSostenimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sostenimientos`
--

LOCK TABLES `sostenimientos` WRITE;
/*!40000 ALTER TABLE `sostenimientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `sostenimientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tercerarazonbeca`
--

DROP TABLE IF EXISTS `tercerarazonbeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tercerarazonbeca` (
  `terceraRazonBecaId` int NOT NULL AUTO_INCREMENT,
  `tercerarazonbecacodigo` int DEFAULT NULL,
  `terceraRazonBeca` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tercerarazonbecabool` int DEFAULT NULL,
  `tercerarazonbecaOculto` int DEFAULT NULL,
  `tercerarazonbecaAccion` int DEFAULT NULL,
  `tercerarazonbecafecha` date DEFAULT NULL,
  `tercerarazonbecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`terceraRazonBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tercerarazonbeca`
--

LOCK TABLES `tercerarazonbeca` WRITE;
/*!40000 ALTER TABLE `tercerarazonbeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `tercerarazonbeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiempodedicacion`
--

DROP TABLE IF EXISTS `tiempodedicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiempodedicacion` (
  `tiempoDedicacionId` int NOT NULL AUTO_INCREMENT,
  `tiempodedicacioncodigo` int DEFAULT NULL,
  `tiempoDedicacion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tiempodedicacionOculto` int DEFAULT NULL,
  `tiempodedicacionAccion` int DEFAULT NULL,
  `tiempodedicacionfecha` date DEFAULT NULL,
  `tiempodedicacionuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tiempoDedicacionId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiempodedicacion`
--

LOCK TABLES `tiempodedicacion` WRITE;
/*!40000 ALTER TABLE `tiempodedicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiempodedicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoalcanceproyectovinculacion`
--

DROP TABLE IF EXISTS `tipoalcanceproyectovinculacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoalcanceproyectovinculacion` (
  `tipoAlcanceProyectoVinculacionId` int NOT NULL AUTO_INCREMENT,
  `tapvcodigo` int DEFAULT NULL,
  `tapvVinculacion` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tapvOculto` int DEFAULT NULL,
  `tapvAccion` int DEFAULT NULL,
  `tapvfecha` date DEFAULT NULL,
  `tapvuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoAlcanceProyectoVinculacionId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoalcanceproyectovinculacion`
--

LOCK TABLES `tipoalcanceproyectovinculacion` WRITE;
/*!40000 ALTER TABLE `tipoalcanceproyectovinculacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipoalcanceproyectovinculacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoasistenciaestudiantes`
--

DROP TABLE IF EXISTS `tipoasistenciaestudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoasistenciaestudiantes` (
  `tipoAsistenciaEstudiantesId` int NOT NULL AUTO_INCREMENT,
  `taeCodigo` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipoAsistenciaEstudiante` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `taeOculto` int DEFAULT NULL,
  `taeAccion` int DEFAULT NULL,
  `taefecha` date DEFAULT NULL,
  `taesuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoAsistenciaEstudiantesId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoasistenciaestudiantes`
--

LOCK TABLES `tipoasistenciaestudiantes` WRITE;
/*!40000 ALTER TABLE `tipoasistenciaestudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipoasistenciaestudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipobeca`
--

DROP TABLE IF EXISTS `tipobeca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipobeca` (
  `tipoBecaId` int NOT NULL AUTO_INCREMENT,
  `tipobecacodigo` int DEFAULT NULL,
  `tipoBeca` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipobecabool` int DEFAULT NULL,
  `tipobecaOculto` int DEFAULT NULL,
  `tipobecaAccion` int DEFAULT NULL,
  `tipobecafecha` date DEFAULT NULL,
  `tipobecauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoBecaId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipobeca`
--

LOCK TABLES `tipobeca` WRITE;
/*!40000 ALTER TABLE `tipobeca` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipobeca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipocarreras`
--

DROP TABLE IF EXISTS `tipocarreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipocarreras` (
  `tipoCarrerasId` int NOT NULL AUTO_INCREMENT,
  `tipocarrerascodigo` int DEFAULT NULL,
  `tipoCarreras` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipocarrerasOculto` int DEFAULT NULL,
  `tipocarrerasAccion` int DEFAULT NULL,
  `tipocarrerasfecha` date DEFAULT NULL,
  `tipocarrerasuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoCarrerasId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocarreras`
--

LOCK TABLES `tipocarreras` WRITE;
/*!40000 ALTER TABLE `tipocarreras` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipocarreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipocolegio`
--

DROP TABLE IF EXISTS `tipocolegio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipocolegio` (
  `tipoColegioId` int NOT NULL AUTO_INCREMENT,
  `tipocolegiocodigo` int DEFAULT NULL,
  `tipoColegio` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipocolegioOculto` int DEFAULT NULL,
  `tipocolegioAccion` int DEFAULT NULL,
  `tipocolegiofecha` date DEFAULT NULL,
  `tipocolegiouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoColegioId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocolegio`
--

LOCK TABLES `tipocolegio` WRITE;
/*!40000 ALTER TABLE `tipocolegio` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipocolegio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipodiscapacidad`
--

DROP TABLE IF EXISTS `tipodiscapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipodiscapacidad` (
  `tipoDiscapacidadid` int NOT NULL AUTO_INCREMENT,
  `tdcodigo` int DEFAULT NULL,
  `tipoDiscapacidad` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipodiscapacidadbool` int NOT NULL,
  `tdOculto` int DEFAULT NULL,
  `tdAccion` int DEFAULT NULL,
  `tdfecha` date DEFAULT NULL,
  `tduser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoDiscapacidadid`),
  KEY `fk_tipodiscapacidad_discapacidad1_idx` (`tipodiscapacidadbool`),
  CONSTRAINT `fk_tipodiscapacidad_discapacidad1` FOREIGN KEY (`tipodiscapacidadbool`) REFERENCES `discapacidad` (`discapacidadId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodiscapacidad`
--

LOCK TABLES `tipodiscapacidad` WRITE;
/*!40000 ALTER TABLE `tipodiscapacidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipodiscapacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoenfermedadcatastrofica`
--

DROP TABLE IF EXISTS `tipoenfermedadcatastrofica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoenfermedadcatastrofica` (
  `tipoEnfermedadCatastroficaId` int NOT NULL AUTO_INCREMENT,
  `teccodigo` int DEFAULT NULL,
  `tipoEnfermedadCatastrofica` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tecOculto` int DEFAULT NULL,
  `tecAccion` int DEFAULT NULL,
  `tecfecha` date DEFAULT NULL,
  `tecuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoEnfermedadCatastroficaId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoenfermedadcatastrofica`
--

LOCK TABLES `tipoenfermedadcatastrofica` WRITE;
/*!40000 ALTER TABLE `tipoenfermedadcatastrofica` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipoenfermedadcatastrofica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipomatricula`
--

DROP TABLE IF EXISTS `tipomatricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipomatricula` (
  `tipoMatriculaId` int NOT NULL AUTO_INCREMENT,
  `tipomatriculacodigo` int DEFAULT NULL,
  `tipoMatricula` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipomatriculaOculto` int DEFAULT NULL,
  `tipomatriculaAccion` int DEFAULT NULL,
  `tipomatriculafecha` date DEFAULT NULL,
  `tipomatriculauser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoMatriculaId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipomatricula`
--

LOCK TABLES `tipomatricula` WRITE;
/*!40000 ALTER TABLE `tipomatricula` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipomatricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiporetiroestudiante`
--

DROP TABLE IF EXISTS `tiporetiroestudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiporetiroestudiante` (
  `tipoRetiroEstudianteId` int NOT NULL AUTO_INCREMENT,
  `trecodigo` int DEFAULT NULL,
  `tipoRetiroEstudiante` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `treOculto` int DEFAULT NULL,
  `periodoacademicoAccion` int DEFAULT NULL,
  `trefecha` date DEFAULT NULL,
  `treuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoRetiroEstudianteId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiporetiroestudiante`
--

LOCK TABLES `tiporetiroestudiante` WRITE;
/*!40000 ALTER TABLE `tiporetiroestudiante` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiporetiroestudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposbacillerato`
--

DROP TABLE IF EXISTS `tiposbacillerato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiposbacillerato` (
  `tiposBacilleratoId` int NOT NULL AUTO_INCREMENT,
  `tiposbacilleratocodigo` int DEFAULT NULL,
  `tipoBacillerato` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tiposbacilleratoOculto` int DEFAULT NULL,
  `tiposbacilleratoAccion` int DEFAULT NULL,
  `tiposbacilleratofecha` date DEFAULT NULL,
  `tiposbacilleratouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tiposBacilleratoId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposbacillerato`
--

LOCK TABLES `tiposbacillerato` WRITE;
/*!40000 ALTER TABLE `tiposbacillerato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiposbacillerato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposdocumentos`
--

DROP TABLE IF EXISTS `tiposdocumentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiposdocumentos` (
  `tipoDocumentoId` int NOT NULL AUTO_INCREMENT,
  `tipoDocumentocodigo` int DEFAULT NULL,
  `tipoDocumento` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipoDocumentoOculto` int DEFAULT NULL,
  `tipoDocumentoAccion` int DEFAULT NULL,
  `tipoDocumentofecha` date DEFAULT NULL,
  `tipoDocumentouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoDocumentoId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposdocumentos`
--

LOCK TABLES `tiposdocumentos` WRITE;
/*!40000 ALTER TABLE `tiposdocumentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiposdocumentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipossangres`
--

DROP TABLE IF EXISTS `tipossangres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipossangres` (
  `tipoSangreId` int NOT NULL AUTO_INCREMENT,
  `tipossangrescodigo` int DEFAULT NULL,
  `tipoSangre` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tipossangreOculto` int DEFAULT NULL,
  `tipossangreAccion` int DEFAULT NULL,
  `tipossangrefecha` date DEFAULT NULL,
  `tipossangreuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tipoSangreId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipossangres`
--

LOCK TABLES `tipossangres` WRITE;
/*!40000 ALTER TABLE `tipossangres` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipossangres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipousuario` (
  `idtipousuario` int NOT NULL AUTO_INCREMENT,
  `tipousuariocodigo` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipousuario` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tipousuariopemisos` int DEFAULT NULL,
  `tipousuarioOculto` int DEFAULT NULL,
  `tipousuarioAccion` int DEFAULT NULL,
  `tipousuariofecha` date DEFAULT NULL,
  `tipousuariouser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idtipousuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titulosprofecionales`
--

DROP TABLE IF EXISTS `titulosprofecionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `titulosprofecionales` (
  `tituloProfecionalId` int NOT NULL AUTO_INCREMENT,
  `tpCodigo` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tituloProfecional` varchar(160) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tpOculto` int DEFAULT NULL,
  `tpAccion` int DEFAULT NULL,
  `tpfecha` date DEFAULT NULL,
  `tpuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tituloProfecionalId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titulosprofecionales`
--

LOCK TABLES `titulosprofecionales` WRITE;
/*!40000 ALTER TABLE `titulosprofecionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `titulosprofecionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titulotercernivel`
--

DROP TABLE IF EXISTS `titulotercernivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `titulotercernivel` (
  `tituloTercerNivelId` int NOT NULL AUTO_INCREMENT,
  `titulotercernivelcodigo` int DEFAULT NULL,
  `tituloTercerNivel` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `titulotercernivelOculto` int DEFAULT NULL,
  `titulotercernivelAccion` int DEFAULT NULL,
  `titulotercernivelfecha` date DEFAULT NULL,
  `titulotercerniveluser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tituloTercerNivelId`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titulotercernivel`
--

LOCK TABLES `titulotercernivel` WRITE;
/*!40000 ALTER TABLE `titulotercernivel` DISABLE KEYS */;
/*!40000 ALTER TABLE `titulotercernivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vinculacionsociedad`
--

DROP TABLE IF EXISTS `vinculacionsociedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vinculacionsociedad` (
  `inculaciocionSociedadId` int NOT NULL AUTO_INCREMENT,
  `matriculas_matriculasId` int NOT NULL,
  `docentes_nI` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `proyectosmacro_id` int NOT NULL,
  `empresas_empresasId` int NOT NULL,
  `tapv_Id` int NOT NULL,
  `pappvs_id` int NOT NULL,
  `numProyecto` int DEFAULT NULL,
  `proyectoMicro` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `objetivoProyecto` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fechaInicioProyecto` date DEFAULT NULL,
  `fechaFinProyecto` date DEFAULT NULL,
  `fechaPrecentacionProyecto` date DEFAULT NULL,
  `numeroHorasProyecto` int DEFAULT NULL,
  `notaTutor` double DEFAULT NULL,
  `notauvcom` double DEFAULT NULL,
  `notaVinculacion` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fisico` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `digital` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `certificado` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `vinculacion` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `vsOculto` int DEFAULT NULL,
  `vsAccion` int DEFAULT NULL,
  `vsfecha` date DEFAULT NULL,
  `vsuser` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`inculaciocionSociedadId`),
  KEY `fk_vinculacionsociedad_matriculas1_idx` (`matriculas_matriculasId`),
  KEY `fk_vinculacionsociedad_docentes1_idx` (`docentes_nI`),
  KEY `fk_vinculacionsociedad_proyectosmacro1_idx` (`proyectosmacro_id`),
  KEY `fk_vinculacionsociedad_empresas1_idx` (`empresas_empresasId`),
  KEY `fk_vinculacionsociedad_tipoalcanceproyectovinculacion1_idx` (`tapv_Id`),
  KEY `fk_vinculacionsociedad_participaenproyectovinculacionsocied_idx` (`pappvs_id`),
  CONSTRAINT `fk_vinculacionsociedad_docentes1` FOREIGN KEY (`docentes_nI`) REFERENCES `docentes` (`numeroIdentificacion`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_vinculacionsociedad_empresas1` FOREIGN KEY (`empresas_empresasId`) REFERENCES `empresas` (`empresasId`),
  CONSTRAINT `fk_vinculacionsociedad_matriculas1` FOREIGN KEY (`matriculas_matriculasId`) REFERENCES `matriculas` (`matriculasId`),
  CONSTRAINT `fk_vinculacionsociedad_participaenproyectovinculacionsociedad1` FOREIGN KEY (`pappvs_id`) REFERENCES `participaenproyectovinculacionsociedad` (`pappvsid`),
  CONSTRAINT `fk_vinculacionsociedad_proyectosmacro1` FOREIGN KEY (`proyectosmacro_id`) REFERENCES `proyectosmacro` (`idProyectosMacro`),
  CONSTRAINT `fk_vinculacionsociedad_tipoalcanceproyectovinculacion1` FOREIGN KEY (`tapv_Id`) REFERENCES `tipoalcanceproyectovinculacion` (`tipoAlcanceProyectoVinculacionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vinculacionsociedad`
--

LOCK TABLES `vinculacionsociedad` WRITE;
/*!40000 ALTER TABLE `vinculacionsociedad` DISABLE KEYS */;
/*!40000 ALTER TABLE `vinculacionsociedad` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-18 19:45:18
