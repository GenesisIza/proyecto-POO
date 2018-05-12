-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-05-2018 a las 00:01:07
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
(2, 'Astralia'),
(3, 'Austria'),
(4, 'Belgica'),
(5, 'Canada'),
(6, 'Dinamarca'),
(7, 'Espana'),
(8, 'Estados Unidos'),
(9, 'Francia'),
(10, 'Hong kong'),
(11, 'Irlanda'),
(12, 'Italia'),
(13, 'Japon'),
(14, 'Luxemburgo'),
(15, 'Noruega'),
(16, 'Nueva Zelanda'),
(17, 'Paises Bajos'),
(18, 'Reino Unido'),
(19, 'Singapur'),
(20, 'Suecia'),
(21, 'Suiza');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_proyectos`
--

INSERT INTO `tbl_proyectos` (`codigoProyecto`, `codigoUsuario`, `codigoCategoria`, `codigoPais`, `descripcion`, `meta`, `plazoFinanciamiento`, `urlImagen`, `tituloProyecto`, `ubicacion`) VALUES
(14, 1, 1, 2, 'esta es mi descripcion de mi primer proyecto', '5000', '2018-05-25', 'Proyectos/Arte/Arte4', 'my project', 'col torocagua'),
(15, 1, 15, 6, 'increible mano robotica para lo que necesites', '10000', '2018-05-30', 'Proyectos/Tecnologia/Tecnologia4', 'Mano robotica', 'col torocagua'),
(16, 3, 15, 4, 'vamos a darle un buen  uso a la energia solar', '300900', '2018-05-19', 'Proyectos/Tecnologia/Tecnologia5', 'Carrito Solar', 'USA'),
(17, 3, 15, 3, 'el hara el trabajo', '56779', '2018-05-02', 'Proyectos/Tecnologia/Tecnologia3', 'RobLav', 'ciudad Universitaria'),
(18, 2, 15, 14, 'el sera tu mejor amigo, y trabajador', '34566', '2018-05-09', 'Proyectos/Tecnologia/Tecnologia1', 'Creacion de humanoides', 'Siguatepeque'),
(19, 2, 15, 9, 'una nueva forma de transporte en pequenia escala', '67689', '2018-05-17', 'Proyectos/Tecnologia/Tecnologia2', 'carrito con Arduino', 'choluteca'),
(21, 1, 9, 11, 'un juego super divertido y emocionante', '576843', '2018-05-15', 'Proyectos/Juegos/Juegos3', 'Ninio Rata xD', 'col flocilla'),
(22, 4, 9, 6, 'la justicia de la ciudad esta en tus manos', '7809', '2018-05-04', 'Proyectos/Juegos/Juegos5', 'Jugo Ingenioso, para divertirse mucho', 'col prados universitarios'),
(23, 6, 9, 6, 'un juego hecho en casa con la mejor tutoria', '7809', '2018-12-04', 'Proyectos/Juegos/Juegos1', 'juego Programacion2 IS UNAH', 'col sur'),
(24, 7, 9, 6, 'el juego de tu infancia', '7809', '2018-05-04', 'Proyectos/Juegos/Juegos4', 'juega con tu crush', 'col centro America'),
(25, 4, 9, 6, 'otro para ninos rata', '7809', '2018-05-04', 'Proyectos/Juegos/Juegos2', 'clans of clanks', 'col san ignacio'),
(26, 2, 6, 8, 'en ambietes calurosos nada mejor que calmarla de manera sana y saludable', '6979', '2018-06-10', 'Proyectos/Comida/Comida3', 'Paletitas Frutales Artesanales', 'Pedregal'),
(27, 2, 6, 8, 'la mejor comida casera, con sabores de tu tierra', '6979', '2018-06-10', 'Proyectos/Comida/Comida4', 'frijolitos con huevito', 'kennedy'),
(28, 1, 6, 12, 'comida con tus formas favoritas', '868709', '2018-05-17', 'Proyectos/Comida/Comida1', 'Arte culinaria', 'col. cerro grande'),
(29, 2, 6, 8, 'mantente en linea con frutas y yogurt', '6979', '2018-06-10', 'Proyectos/Comida/Comida2', 'Frescas frutas en forma', 'Pedregal'),
(30, 2, 6, 8, 'comida gourmet con altos estandares de calidad', '6979', '2018-06-10', 'Proyectos/Comida/Comida5', 'restaurante Becker, Gourmetfood', 'Pedregal');

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
  PRIMARY KEY (`codigoUsuario`),
  KEY `fk_tbl_Usuario_tbl_tipoUsuario_idx` (`codigoTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`codigoUsuario`, `codigoTipoUsuario`, `nombre`, `correo`, `contrasenia`) VALUES
(1, 1, 'Junacito', 'juancito@gmail.com', 'holamundo'),
(2, 1, 'Emma', 'EmmaSaravia@gmail.com', 'asd.456'),
(3, 1, 'marilin', 'mary@gmail.com', 'asd.456'),
(4, 1, 'natalia', 'naty@gmail.com', 'asd.456'),
(5, 1, 'dan', 'dan@gmail.com', 'asdasd'),
(6, 1, 'derek', 'de@gmail.com', 'recvrev'),
(7, 1, 'mario', 'mario@gmail.com', 'asdasdf');

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
