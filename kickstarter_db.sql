-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-05-2018 a las 02:30:26
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kickstarter_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
CREATE TABLE IF NOT EXISTS `tbl_categoria` (
  `codigoCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigoCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`codigoCategoria`, `nombre`) VALUES
(1, 'Arte'),
(2, 'Artesanias'),
(3, 'Baile'),
(4, 'Cine y Video'),
(5, 'Comics'),
(6, 'Comida'),
(7, 'Diseno'),
(8, 'Fotografia'),
(9, 'Juegos'),
(10, 'Moda'),
(11, 'Musica'),
(12, 'Periodismo'),
(13, 'Publicaciones'),
(14, 'Teatro'),
(15, 'Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pais`
--

DROP TABLE IF EXISTS `tbl_pais`;
CREATE TABLE IF NOT EXISTS `tbl_pais` (
  `codigoPais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigoPais`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_pais`
--

INSERT INTO `tbl_pais` (`codigoPais`, `nombre`) VALUES
(1, 'Alemania'),
(3, 'Astralia'),
(4, 'Austria'),
(5, 'Belgica'),
(6, 'Canada'),
(7, 'Dinamarca'),
(8, 'España'),
(9, 'Estados Unidos'),
(10, 'Francia'),
(11, 'Hong kong'),
(12, 'Irlanda'),
(13, 'Italia'),
(14, 'Japon'),
(15, 'Luxemburgo'),
(16, 'Noruega'),
(17, 'Nueva Zelanda'),
(18, 'Paises Bajos'),
(19, 'Reino Unido'),
(20, 'Singapur'),
(21, 'Suecia'),
(22, 'Suiza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyectos`
--

DROP TABLE IF EXISTS `tbl_proyectos`;
CREATE TABLE IF NOT EXISTS `tbl_proyectos` (
  `codigoProyecto` int(11) NOT NULL AUTO_INCREMENT,
  `codigoUsuario` int(11) NOT NULL,
  `codigoCategoria` int(11) NOT NULL,
  `codigoPais` int(11) NOT NULL,
  `descripcion` varchar(135) DEFAULT NULL,
  `meta` decimal(49,0) DEFAULT NULL,
  `plazoFinanciamiento` date DEFAULT NULL,
  `urlImagen` varchar(60) DEFAULT NULL,
  `tituloProyecto` varchar(45) DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigoProyecto`),
  KEY `fk_tbl_proyectos_tbl_Usuario1_idx` (`codigoUsuario`),
  KEY `fk_tbl_proyectos_tbl_categoria1_idx` (`codigoCategoria`),
  KEY `fk_tbl_proyectos_tbl_pais1_idx` (`codigoPais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipousuario`
--

DROP TABLE IF EXISTS `tbl_tipousuario`;
CREATE TABLE IF NOT EXISTS `tbl_tipousuario` (
  `codigoTipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipoUsuario` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigoTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipousuario`
--

INSERT INTO `tbl_tipousuario` (`codigoTipo`, `tipoUsuario`) VALUES
(1, 'Administrador'),
(2, 'Tipico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `codigoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `codigoTipoUsuario` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `contrasenia` varchar(45) DEFAULT NULL,
  `tbl_Usuariocol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigoUsuario`),
  KEY `fk_tbl_Usuario_tbl_tipoUsuario_idx` (`codigoTipoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_proyectos`
--
ALTER TABLE `tbl_proyectos`
  ADD CONSTRAINT `fk_tbl_proyectos_tbl_Usuario1` FOREIGN KEY (`codigoUsuario`) REFERENCES `tbl_usuario` (`codigoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_proyectos_tbl_categoria1` FOREIGN KEY (`codigoCategoria`) REFERENCES `tbl_categoria` (`codigoCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_proyectos_tbl_pais1` FOREIGN KEY (`codigoPais`) REFERENCES `tbl_pais` (`codigoPais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `fk_tbl_Usuario_tbl_tipoUsuario` FOREIGN KEY (`codigoTipoUsuario`) REFERENCES `tbl_tipousuario` (`codigoTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
