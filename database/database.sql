SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-06:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `my-checador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id_empleado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `foto` longblob NOT NULL,
  `correo` varchar(50) NOT NULL,
  `puesto` varchar(30) NOT NULL,
  `hora_entrada` varchar(20) NOT NULL,
  `hora_salida` varchar(20) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellido_paterno`, `apellido_materno`, `foto`, `correo`, `puesto`, `hora_entrada`,`hora_salida`, `fecha_ingreso`) VALUES
(1, 'Arely', 'Zaepeda', 'Ortiz', 'Foto','info@ateneapharma.com','Administrador','9','19','2015-01-01');

alter table `empleado` add `hora_salida` varchar(20) NOT NULL;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
  `id_asistencia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actividad` varchar(45) NOT NULL,
  `es` varchar(10) NOT NULL,
  `detalles` varchar(100)  NOT NULL,
  PRIMARY KEY (`id_asistencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(1, 'Inicio de Labores', 'E', 'General');

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(2, 'Cita con Cliente', 'S', 'Ventas');

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(3, 'Salir de la Oficina', 'S', 'General');

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(4, 'Salir a Comer', 'S', 'General');

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(5, 'Regreso de Comer', 'E', 'General');

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(6, 'Entrar a la Oficina', 'E', 'General');

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(7, 'Regreso de Cita', 'E', 'Ventas');

INSERT INTO `asistencia` (`id_Asistencia`, `actividad`, `es`, `detalles`) VALUES
(8, 'Fin de Labores', 'S', 'General');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_empleado_asistencia`
--

CREATE TABLE IF NOT EXISTS `rel_empleado_asistencia` (
  `id_check` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_asistencia` int(10) unsigned DEFAULT NULL,
  `id_empleado` int(10) unsigned DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `notas` varchar(100) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_check`),
  KEY `FK_rel_empleado_asistencia_1` (`id_empleado`),
  KEY `FK_rel_empleado_asistencia_2` (`id_asistencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rel_empleado_asistencia`
--

INSERT INTO `rel_empleado_asistencia` (`id_check`,`id_asistencia`, `id_empleado`, `fecha`, `notas`, `ubicacion`) VALUES
(1, 1, 1, '2015-01-24 17:15:10','llegue tarde','192.168.0.1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rel_empleado_asistencia`
--
ALTER TABLE `rel_empleado_asistencia`
  ADD CONSTRAINT `FK_rel_empleado_asistencia_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`),
  ADD CONSTRAINT `FK_rel_empleado_asistencia_2` FOREIGN KEY (`id_asistencia`) REFERENCES `asistencia` (`id_asistencia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



/*TABLA PARA REGISTROS ESTADISTICOS: Horas trabajadas, horas desconetadas, sueldo a la quincena, total a pagar quincena*/
/*Seria una tabla uno a uno de empleados, una extension */

SELECT e.*, a.actividad, rea.*
    FROM rel_empleado_asistencia rea
    INNER JOIN empleado e 
    ON e.id_empleado = rea.id_empleado
    INNER JOIN asistencia a
    ON a.id_asistencia = rea.id_asistencia
    GROUP BY rea.id_asistencia
    ORDER BY e.nombre"
