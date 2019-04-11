-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.36-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para biblioteca
CREATE DATABASE IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `biblioteca`;

-- Volcando estructura para tabla biblioteca.autores
CREATE TABLE IF NOT EXISTS `autores` (
  `ID_AUTOR` int(11) NOT NULL AUTO_INCREMENT,
  `nombredelAutor` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_AUTOR`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.autores: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `autores` DISABLE KEYS */;
INSERT INTO `autores` (`ID_AUTOR`, `nombredelAutor`) VALUES
	(49, 'Josue Samuel Perez'),
	(56, 'Cristhian Enrique Olivares Lara'),
	(57, 'Luis Joyanes Aguilar'),
	(58, 'Samuel Gomez');
/*!40000 ALTER TABLE `autores` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.carreras
CREATE TABLE IF NOT EXISTS `carreras` (
  `ID_CARRERA` varchar(50) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_CARRERA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.carreras: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` (`ID_CARRERA`, `NOMBRE`) VALUES
	('43', 'Sistemas'),
	('44', 'Gestion Empresarial'),
	('45', 'Innovacion Agricola'),
	('47', 'Electronica'),
	('49', 'Informatica'),
	('50', 'Contabilidad');
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.editoriales
CREATE TABLE IF NOT EXISTS `editoriales` (
  `ID_EDITORIAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_EDITORIAL`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.editoriales: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `editoriales` DISABLE KEYS */;
INSERT INTO `editoriales` (`ID_EDITORIAL`, `NOMBRE`) VALUES
	(24, 'de asociados'),
	(25, 'Editorial Mexicana asociados'),
	(26, 'Editorial'),
	(27, 'Editorial ecuatoriana e'),
	(28, 'dsfd fsdfs');
/*!40000 ALTER TABLE `editoriales` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.libros
CREATE TABLE IF NOT EXISTS `libros` (
  `clave` varchar(50) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` int(11) NOT NULL,
  `editorial` int(11) NOT NULL,
  `numero_paginas` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `autor` (`autor`),
  KEY `editorial` (`editorial`),
  CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `autores` (`ID_AUTOR`),
  CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`editorial`) REFERENCES `editoriales` (`ID_EDITORIAL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.libros: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` (`clave`, `titulo`, `autor`, `editorial`, `numero_paginas`, `stock`) VALUES
	('666', 'sdfdfcc', 56, 27, 32, 43),
	('67gd', 'Electronica', 58, 25, 43, 54),
	('gg2', 'android studio', 56, 25, 143, 432),
	('lol2', 'Todo sobre league of legends', 49, 25, 100, 50),
	('sad', 'java22', 49, 27, 1232, 324),
	('yt', 'Fundamentos de visual basic', 56, 25, 32, 43);
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL DEFAULT '0',
  `PASSWORD` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `USERNAME`, `PASSWORD`) VALUES
	(1, 'robert', '666');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
