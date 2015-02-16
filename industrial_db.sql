-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-02-2015 a las 17:41:11
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.4.35-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `industrial_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `resumen` longtext,
  `abstrac` longtext,
  `introduccion` longtext,
  `metodologia` longtext,
  `contenido` longtext,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archivo_pdf` varchar(100) DEFAULT NULL,
  `id_status` int(11) NOT NULL,
  `conclusiones` longtext,
  `agradecimientos` longtext,
  `referencias` longtext,
  `id_indice_articulo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `fk_status_articulo_idx` (`id_status`),
  KEY `idx_articulo` (`id_indice_articulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `articulo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_autor`
--

CREATE TABLE IF NOT EXISTS `articulo_autor` (
  `id_articulo_autor` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  PRIMARY KEY (`id_articulo_autor`),
  KEY `fk_articulo_idx` (`id_autor`),
  KEY `fk_autor__idx` (`id_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_extra`
--

CREATE TABLE IF NOT EXISTS `contenido_extra` (
  `id_contenido_extra` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` longtext,
  `archivo_pdf` varchar(100) DEFAULT NULL,
  `id_tipo_contenido` int(11) DEFAULT NULL,
  `id_indice_articulo` int(11) DEFAULT NULL,
  `contenido` longtext NOT NULL,
  PRIMARY KEY (`id_contenido_extra`),
  KEY `idx_contenido_extra` (`id_tipo_contenido`),
  KEY `idx_contenido_extra_0` (`id_indice_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indice`
--

CREATE TABLE IF NOT EXISTS `indice` (
  `id_indice` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_revista` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_indice`),
  KEY `fk_revista_idx` (`id_revista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indice_articulo`
--

CREATE TABLE IF NOT EXISTS `indice_articulo` (
  `id_indice_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `id_indice` int(11) NOT NULL,
  `numero` float NOT NULL,
  PRIMARY KEY (`id_indice_articulo`),
  KEY `fk_indice_idx` (`id_indice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE IF NOT EXISTS `recursos` (
  `id_recurso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_recurso` varchar(30) NOT NULL,
  `url_recurso` varchar(100) NOT NULL,
  `id_usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_recurso`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=16384 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista`
--

CREATE TABLE IF NOT EXISTS `revista` (
  `id_revista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `portada` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `volumen` varchar(45) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `subtitulo` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `directorio` longtext,
  `editorial` longtext,
  `id_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_revista`),
  KEY `fk_status_revista_idx` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Recibido'),
(2, 'En revición'),
(3, 'Aprobado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contenido`
--

CREATE TABLE IF NOT EXISTS `tipo_contenido` (
  `id_tipo_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `fk_articulo_indice_articulo_1` FOREIGN KEY (`id_indice_articulo`) REFERENCES `indice_articulo` (`id_indice_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_status_articulo` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `articulo_autor`
--
ALTER TABLE `articulo_autor`
  ADD CONSTRAINT `fk_articulo_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_autor_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contenido_extra`
--
ALTER TABLE `contenido_extra`
  ADD CONSTRAINT `fk_contenido_extra` FOREIGN KEY (`id_tipo_contenido`) REFERENCES `tipo_contenido` (`id_tipo_contenido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contenido_extra_1` FOREIGN KEY (`id_indice_articulo`) REFERENCES `indice_articulo` (`id_indice_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `indice`
--
ALTER TABLE `indice`
  ADD CONSTRAINT `fk_revista` FOREIGN KEY (`id_revista`) REFERENCES `revista` (`id_revista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `indice_articulo`
--
ALTER TABLE `indice_articulo`
  ADD CONSTRAINT `fk_indice` FOREIGN KEY (`id_indice`) REFERENCES `indice` (`id_indice`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `revista`
--
ALTER TABLE `revista`
  ADD CONSTRAINT `fk_status_revista` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
