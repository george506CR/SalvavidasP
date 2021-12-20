-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 06:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coltrolingresos`
--

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `dptId` int(11) NOT NULL,
  `dptDescripcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`dptId`, `dptDescripcion`) VALUES
(1, 'Desarrollo'),
(3, 'RRHH'),
(4, 'Proveeduria'),
(5, 'Contabilidad'),
(6, 'Análisis'),
(7, 'Redes'),
(8, 'Taller');

-- --------------------------------------------------------

--
-- Table structure for table `entradassalidas`
--

CREATE TABLE `entradassalidas` (
  `etsId` int(11) NOT NULL,
  `etsFecha` date NOT NULL,
  `etsIdFuncionario` int(11) NOT NULL,
  `etsHoraEntrada` datetime NOT NULL,
  `etsHoraSalida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entradassalidas`
--

INSERT INTO `entradassalidas` (`etsId`, `etsFecha`, `etsIdFuncionario`, `etsHoraEntrada`, `etsHoraSalida`) VALUES
(1, '2021-12-18', 5, '2021-12-18 12:28:11', '2021-12-18 12:28:11'),
(2, '2021-12-19', 4, '2021-12-19 12:02:48', '2021-12-19 12:07:52'),
(3, '2021-12-19', 4, '2021-12-19 12:03:30', '2021-12-19 12:05:23'),
(4, '2021-12-19', 4, '2021-12-19 12:05:23', '2021-12-19 12:07:24'),
(5, '2021-12-19', 4, '2021-12-19 12:08:12', '2021-12-19 12:08:37'),
(6, '2021-12-19', 5, '2021-12-19 01:13:13', '2021-12-19 01:15:00'),
(7, '2021-12-19', 5, '2021-12-19 22:51:57', '2021-12-19 22:52:28'),
(8, '2021-12-20', 5, '2021-12-20 10:12:16', '2021-12-20 10:13:37'),
(9, '2021-12-20', 12, '2021-12-20 10:51:42', '2021-12-20 10:57:06'),
(10, '2021-12-20', 12, '2021-12-20 10:57:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `fncId` int(11) NOT NULL,
  `fncIdPersona` int(11) NOT NULL,
  `fncNumeroEmpleado` varchar(10) DEFAULT NULL,
  `fncIdPuesto` int(11) NOT NULL,
  `fncIdHorario` int(11) NOT NULL,
  `fncIdDepartamento` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`fncId`, `fncIdPersona`, `fncNumeroEmpleado`, `fncIdPuesto`, `fncIdHorario`, `fncIdDepartamento`, `email`, `password`) VALUES
(2, 50, NULL, 1, 1, 1, 'test50@gmail.com', ''),
(3, 40, NULL, 1, 1, 3, 'test40@gmail.com', ''),
(4, 22, NULL, 2, 1, 4, 'test22@gmail.com', ''),
(5, 54, NULL, 2, 1, 5, 'george42120@gmail.com', '$2y$10$/WLYtZ4SEMZ1UxUjBx8N8uolSRkrh2FG55IPxJFvDdqT5bfX7XgPK'),
(6, 55, NULL, 1, 1, 4, 'test55@gmail.com', ''),
(7, 56, NULL, 3, 1, 6, 's.viquez@salvavidas.com', NULL),
(12, 59, NULL, 6, 4, 7, 'a.castillo@salvavidas.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `hrrID` int(11) NOT NULL,
  `hrrHoraEntrada` time NOT NULL,
  `hrrHoraSalida` time NOT NULL,
  `hrrNombre` varchar(15) DEFAULT NULL,
  `hrrlunes` tinyint(1) NOT NULL,
  `hrrmartes` tinyint(1) NOT NULL,
  `hrrmiercoles` tinyint(1) NOT NULL,
  `hrrjueves` tinyint(1) NOT NULL,
  `hrrviernes` tinyint(1) NOT NULL,
  `hrrsabado` tinyint(1) NOT NULL,
  `hrrdomingo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`hrrID`, `hrrHoraEntrada`, `hrrHoraSalida`, `hrrNombre`, `hrrlunes`, `hrrmartes`, `hrrmiercoles`, `hrrjueves`, `hrrviernes`, `hrrsabado`, `hrrdomingo`) VALUES
(1, '08:00:00', '17:00:00', 'Oficina', 1, 1, 1, 1, 1, 0, 0),
(2, '16:00:00', '23:00:00', 'Nocturno', 1, 1, 1, 1, 1, 0, 0),
(3, '17:00:00', '12:00:00', 'Nocturno 2', 0, 1, 1, 1, 1, 1, 0),
(4, '06:00:00', '18:00:00', 'Comprimido', 1, 1, 1, 1, 0, 0, 0),
(5, '07:00:00', '15:30:00', 'Diurno', 1, 1, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `psrID` int(11) NOT NULL,
  `psrCedula` varchar(15) NOT NULL,
  `psrNombre` varchar(15) NOT NULL,
  `psrPrimerApellido` varchar(15) NOT NULL,
  `psrSegundoApellido` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`psrID`, `psrCedula`, `psrNombre`, `psrPrimerApellido`, `psrSegundoApellido`) VALUES
(1, '101097283', 'ZENEIDA', 'MORA', 'MORA'),
(2, '101240973', 'VIRGINIA', 'ACUÑA', 'SOLERA'),
(3, '101175238', 'VIDAL', 'AZOFEIFA', 'HERNANDEZ'),
(4, '101141655', 'TRINIDAD', 'VINDAS', 'PEREZ'),
(5, '101200868', 'TARCILA', 'MORA', 'CASCANTE'),
(6, '101153115', 'RECAREDO', 'MURILLO', 'GARITA'),
(7, '101230108', 'RECAREDO', 'VINDAS', 'RUBI'),
(8, '101220606', 'RAFAEL ANGEL', 'LOPEZ', 'MEOÑO'),
(9, '101260226', 'RAFAEL', 'AGUILAR', 'MORA'),
(10, '100842638', 'RAFAEL', 'AGUERO', 'MORA'),
(11, '101075138', 'OFELIA', 'CASTILLO', 'ROJAS'),
(12, '101220466', 'NEFTALI', 'FALLAS', 'PORRAS'),
(13, '101153046', 'MARTA', 'RECIO', 'RECIO'),
(14, '101031563', 'MARINA', 'QUIROS', 'MORA'),
(15, '101130651', 'MARIALIDIA', 'HERRERA', 'ANGULO'),
(16, '101240732', 'MARIAJOSEFA', 'CARVAJAL', 'AGUERO'),
(17, '101210166', 'MARIA DEIDAMIA', 'ACUÑA', 'BONILLA'),
(18, '101260454', 'MARIA DE LOS AN', 'ESQUIVEL', 'ESQUIVEL'),
(19, '101163671', 'MARIA CRISTINA', 'FALLAS', 'MORA'),
(20, '101270810', 'MARIA ANGELICA', 'MENA', 'MENA'),
(21, '101119051', 'MARGARITA', 'VARGAS', 'VARGAS'),
(22, '101031136', 'MANUEL', 'JIMENEZ', 'MEZA'),
(23, '101240972', 'LUZMIRA', 'CHINCHILLA', 'CORDOBA'),
(24, '101053316', 'LUCILA', 'PORRAS', 'AGUERO'),
(25, '101210878', 'JUANA', 'MORA', 'TORRES'),
(26, '101164392', 'JOSE FRANCISCO', 'DUARTE', 'QUESADA'),
(27, '100996791', 'ISABEL', 'VEGA', 'QUIROS'),
(28, '101142031', 'INOCENCIA', 'MEZA', 'VEGA'),
(29, '101200081', 'GUILLERMINA', 'MORALES', 'QUIROS'),
(30, '101260768', 'GIL', 'HIDALGO', 'VINDAS'),
(31, '101220300', 'GABRIEL', 'MARIN', 'PEREZ'),
(32, '101120440', 'ERLINDO', 'FERNANDEZ', 'FALLAS'),
(33, '101270676', 'EMMA', 'GARRO', 'HERNANDEZ'),
(34, '101119140', 'DORA', 'DURAN', 'CHINCHILLA'),
(35, '101007891', 'DORA', 'UMAÑA', 'DURAN'),
(36, '101086526', 'DINORA', 'OBANDO', 'GARCIA'),
(37, '101042358', 'DELFINA', 'SEGURA', 'JIMENEZ'),
(38, '101250782', 'CONSUELO', 'JIMENEZ', 'GUERRERO'),
(39, '101019387', 'CLAUDIA MANUELA', 'ESPINOZA', 'FONSECA'),
(40, '100842598', 'CARMEN', 'CORRALES', 'MORALES'),
(41, '101270543', 'CARMEN', 'MADRIGAL', 'MESEN'),
(42, '101210722', 'CARLOTA', 'FERNANDEZ', 'GONZALEZ'),
(43, '101141576', 'CABIRIA', 'MORGAN', 'DURAN'),
(44, '101220285', 'BETTINA', 'MONGE', 'MORALES'),
(45, '101064216', 'BAUDILIO', 'MORALES', 'CORRALES'),
(46, '101096784', 'ARCELIA', 'CHAVARRIA', 'MARIN'),
(47, '101196490', 'ANGELICA', 'SANCHEZ', 'AZOFEIFA'),
(48, '101240037', 'ANAMARIA', 'PEREZ', 'PEREZ'),
(49, '101240481', 'ALEJANDRO', 'ARAYA', 'BORGE'),
(50, '115670466', 'JAIRO ALFREDO', 'RIVERA', 'CESPEDES'),
(51, 'testgr', 'George01', 'Ramirez01', 'Gonzalez01'),
(52, 'testgr02', 'George02', 'Ramirez02', 'Gonzalez02'),
(53, 'testgr03', 'George03', 'Ramirez03', 'Gonzalez03'),
(54, '114740462', 'George', 'Ramirez', 'Gonzalez'),
(55, 'testgr03', 'test03', 'test03', 'test03'),
(56, '402390650', 'Sebastian', 'Viquez', 'Sanchez'),
(57, '402380575', 'Alberto', 'Villalobos', 'Castillo'),
(58, '108180897', 'Carlos', 'Zuñiga', 'Amador'),
(59, '402380575', 'Alberto', 'Villalobos', 'Castillo'),
(60, 'testgr04', 'George04', 'Ramirez04', 'Gonzalez04');

-- --------------------------------------------------------

--
-- Table structure for table `puesto`
--

CREATE TABLE `puesto` (
  `pstId` int(11) NOT NULL,
  `pstPuesto` varchar(15) NOT NULL,
  `pstSalario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puesto`
--

INSERT INTO `puesto` (`pstId`, `pstPuesto`, `pstSalario`) VALUES
(1, 'Desarrollador', 500000),
(2, 'Desarrollador', 500000),
(3, 'Administrador', 100000),
(4, 'Guarda', 100000),
(5, 'Soporte', 200000),
(6, 'Tecnico', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `visitas`
--

CREATE TABLE `visitas` (
  `vstId` int(11) NOT NULL,
  `vstIdPerona` int(11) NOT NULL,
  `vstIdFuncionario` int(11) NOT NULL,
  `vstIdDepartamento` int(11) NOT NULL,
  `vstHoraEntrada` datetime NOT NULL,
  `vstHorSalida` datetime DEFAULT NULL,
  `vstFecha` date NOT NULL,
  `vstMotivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitas`
--

INSERT INTO `visitas` (`vstId`, `vstIdPerona`, `vstIdFuncionario`, `vstIdDepartamento`, `vstHoraEntrada`, `vstHorSalida`, `vstFecha`, `vstMotivo`) VALUES
(4, 13, 2, 4, '2021-12-17 02:29:03', '2021-12-17 10:36:41', '2021-12-17', ''),
(5, 25, 2, 4, '2021-12-17 02:30:58', NULL, '2021-12-17', ''),
(6, 25, 2, 4, '2021-12-17 06:51:39', NULL, '2021-12-17', ''),
(7, 25, 2, 4, '2021-12-17 06:53:54', NULL, '2021-12-17', ''),
(8, 51, 2, 4, '2021-12-17 07:13:01', NULL, '2021-12-17', ''),
(16, 52, 3, 4, '2021-12-17 07:34:18', NULL, '2021-12-17', ''),
(17, 52, 2, 1, '2021-12-17 07:36:41', NULL, '2021-12-17', ''),
(18, 36, 3, 3, '2021-12-17 11:04:30', NULL, '2021-12-17', ''),
(19, 53, 4, 4, '2021-12-17 11:06:33', NULL, '2021-12-17', ''),
(20, 49, 5, 5, '2021-12-17 07:45:19', NULL, '2021-12-17', ''),
(21, 23, 5, 5, '2021-12-19 01:18:29', '2021-12-19 10:32:37', '2021-12-19', ''),
(22, 22, 3, 3, '2021-12-19 10:34:18', '2021-12-19 10:36:50', '2021-12-19', ''),
(23, 4, 4, 4, '2021-12-19 22:42:20', '2021-12-19 22:45:48', '2021-12-19', ''),
(24, 11, 7, 6, '2021-12-20 10:15:19', '2021-12-20 10:16:37', '2021-12-20', ''),
(25, 60, 12, 7, '2021-12-20 10:59:09', NULL, '2021-12-20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`dptId`);

--
-- Indexes for table `entradassalidas`
--
ALTER TABLE `entradassalidas`
  ADD PRIMARY KEY (`etsId`),
  ADD KEY `etsIdFuncionario` (`etsIdFuncionario`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`fncId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fncIdPersona` (`fncIdPersona`),
  ADD KEY `fncIdPuesto` (`fncIdPuesto`),
  ADD KEY `fncIdHorario` (`fncIdHorario`),
  ADD KEY `fncIdDepartamento` (`fncIdDepartamento`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`hrrID`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`psrID`);

--
-- Indexes for table `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`pstId`);

--
-- Indexes for table `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`vstId`),
  ADD KEY `vstIdPerona` (`vstIdPerona`),
  ADD KEY `vstIdFuncionario` (`vstIdFuncionario`),
  ADD KEY `vstIdDepartamento` (`vstIdDepartamento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `dptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `entradassalidas`
--
ALTER TABLE `entradassalidas`
  MODIFY `etsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `fncId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `hrrID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `psrID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `puesto`
--
ALTER TABLE `puesto`
  MODIFY `pstId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitas`
--
ALTER TABLE `visitas`
  MODIFY `vstId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entradassalidas`
--
ALTER TABLE `entradassalidas`
  ADD CONSTRAINT `entradassalidas_ibfk_1` FOREIGN KEY (`etsIdFuncionario`) REFERENCES `funcionario` (`fncId`);

--
-- Constraints for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`fncIdPersona`) REFERENCES `persona` (`psrID`),
  ADD CONSTRAINT `funcionario_ibfk_2` FOREIGN KEY (`fncIdPuesto`) REFERENCES `puesto` (`pstId`),
  ADD CONSTRAINT `funcionario_ibfk_3` FOREIGN KEY (`fncIdHorario`) REFERENCES `horario` (`hrrID`),
  ADD CONSTRAINT `funcionario_ibfk_4` FOREIGN KEY (`fncIdDepartamento`) REFERENCES `departamento` (`dptId`);

--
-- Constraints for table `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`vstIdPerona`) REFERENCES `persona` (`psrID`),
  ADD CONSTRAINT `visitas_ibfk_2` FOREIGN KEY (`vstIdFuncionario`) REFERENCES `funcionario` (`fncId`),
  ADD CONSTRAINT `visitas_ibfk_3` FOREIGN KEY (`vstIdDepartamento`) REFERENCES `departamento` (`dptId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
