-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2023 a las 04:55:18
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `idActividad` int(11) NOT NULL,
  `Estatus` varchar(10) DEFAULT NULL,
  `NombreActividad` varchar(45) DEFAULT NULL,
  `FechaActividad` date DEFAULT NULL,
  `Participantes` int(11) DEFAULT NULL,
  `CantidadEncuentros` int(11) DEFAULT NULL,
  `HoraInicio` time DEFAULT NULL,
  `HoraCierre` time DEFAULT NULL,
  `responsable_RCedula` int(11) NOT NULL,
  `Salon_idSalon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`idActividad`, `Estatus`, `NombreActividad`, `FechaActividad`, `Participantes`, `CantidadEncuentros`, `HoraInicio`, `HoraCierre`, `responsable_RCedula`, `Salon_idSalon`) VALUES
(1, 'si', 'CUmpleaños', '0000-00-00', 2, 1, '00:00:00', '00:00:00', 28150004, 1),
(2, 'off', 'E3 2023', '0000-00-00', 4, 5, '00:00:00', '00:00:00', 2609796, 1),
(4, 'dsads', 'Juan', '2001-09-22', 3, 2, '14:22:00', '09:29:00', 2609796, 1),
(5, 'joseo', 'Parrandon', '2001-09-22', 2, 2, '02:00:00', '14:00:00', 2609796, 1),
(6, '', 'juan', '0000-00-00', 0, 0, '00:00:00', '00:00:00', 2609796, 1),
(7, 'okok', 'Karmaland', '2023-09-22', 2, 2, '10:00:00', '22:00:00', 28150004, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `focusactividad`
--

CREATE TABLE `focusactividad` (
  `idFocusActividad` int(11) NOT NULL,
  `FocusActividad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indoleactividad`
--

CREATE TABLE `indoleactividad` (
  `idIndoleActividad` int(11) NOT NULL,
  `IndoleActividadcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE `nacionalidad` (
  `idNacionalidad` int(11) NOT NULL,
  `Nacionalidad` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`idNacionalidad`, `Nacionalidad`) VALUES
(1, 'V'),
(2, 'E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitosactividad`
--

CREATE TABLE `requisitosactividad` (
  `idRequisitosActividad` int(11) NOT NULL,
  `RequisitosActividad` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `RCedula` int(11) NOT NULL,
  `Nombre1` varchar(20) DEFAULT NULL,
  `Nombre2` varchar(20) DEFAULT NULL,
  `Apellido1` varchar(20) DEFAULT NULL,
  `Apellido2` varchar(20) DEFAULT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Nacionalidad_idNacionalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`RCedula`, `Nombre1`, `Nombre2`, `Apellido1`, `Apellido2`, `Telefono`, `Nacionalidad_idNacionalidad`) VALUES
(2609796, 'Judy', 'Isabel', 'Torres', 'Silva', '2147483647', 1),
(15579965, 'Jose', 'JOose', 'JOJO', 'JOse', '04121338031', 2),
(28150004, 'pollo', 'pollo', 'pollo', 'pollo', '2147483647', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `idSalon` int(11) NOT NULL,
  `NombreSalon` varchar(45) DEFAULT NULL,
  `CantidadPersonasSalon` int(11) DEFAULT NULL,
  `CantidadSillas` int(11) DEFAULT NULL,
  `Nombredirector` varchar(45) DEFAULT NULL,
  `Nombredirector2` varchar(45) DEFAULT NULL,
  `Apellidodirector` varchar(45) DEFAULT NULL,
  `Apellidodirector2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`idSalon`, `NombreSalon`, `CantidadPersonasSalon`, `CantidadSillas`, `Nombredirector`, `Nombredirector2`, `Apellidodirector`, `Apellidodirector2`) VALUES
(1, 'Dirección', 22, 22, 'Jose', 'Segundo', 'Perez', 'Peña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `idPregunta` int(11) NOT NULL,
  `Pregunta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguridad`
--

INSERT INTO `seguridad` (`idPregunta`, `Pregunta`) VALUES
(1, 'Animal Favorito'),
(2, 'Mes de nacimiento'),
(3, 'Bebida Favorita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoactividad`
--

CREATE TABLE `tipoactividad` (
  `idTipoActividad` int(11) NOT NULL,
  `TipoActividad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `IdUsuario` int(11) NOT NULL,
  `privilegio` varchar(10) NOT NULL,
  `Usuario` varchar(16) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `respuesta` varchar(50) DEFAULT NULL,
  `Seguridad_idPregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`IdUsuario`, `privilegio`, `Usuario`, `clave`, `respuesta`, `Seguridad_idPregunta`) VALUES
(0, '', 'duki', '', '', 1),
(2609796, 'user', 'jsjsjs', '', '', 1),
(15579965, 'user', 'jota', '', '', 2),
(28150004, 'admin', 'Juaner', 'depanajuaner1', 'perro', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`idActividad`),
  ADD KEY `fk_Actividad_responsable1_idx` (`responsable_RCedula`),
  ADD KEY `fk_Actividad_Salon1_idx` (`Salon_idSalon`);

--
-- Indices de la tabla `focusactividad`
--
ALTER TABLE `focusactividad`
  ADD PRIMARY KEY (`idFocusActividad`);

--
-- Indices de la tabla `indoleactividad`
--
ALTER TABLE `indoleactividad`
  ADD PRIMARY KEY (`idIndoleActividad`);

--
-- Indices de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`idNacionalidad`);

--
-- Indices de la tabla `requisitosactividad`
--
ALTER TABLE `requisitosactividad`
  ADD PRIMARY KEY (`idRequisitosActividad`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`RCedula`),
  ADD KEY `fk_responsable_Nacionalidad1_idx` (`Nacionalidad_idNacionalidad`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`idSalon`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `tipoactividad`
--
ALTER TABLE `tipoactividad`
  ADD PRIMARY KEY (`idTipoActividad`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `fk_Seguridad_Pregunta1_idx` (`Seguridad_idPregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `fk_Actividad_Salon1` FOREIGN KEY (`Salon_idSalon`) REFERENCES `salon` (`idSalon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Actividad_responsable1` FOREIGN KEY (`responsable_RCedula`) REFERENCES `responsable` (`RCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `fk_responsable_Nacionalidad1` FOREIGN KEY (`Nacionalidad_idNacionalidad`) REFERENCES `nacionalidad` (`idNacionalidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_Seguridad_Pregunta1` FOREIGN KEY (`Seguridad_idPregunta`) REFERENCES `seguridad` (`idPregunta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
