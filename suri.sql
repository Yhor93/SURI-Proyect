-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 01:17:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suri`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `car_id` int(11) NOT NULL,
  `car_codigo` varchar(5) NOT NULL,
  `car_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`car_id`, `car_codigo`, `car_descripcion`) VALUES
(2, '002', 'Supervisor'),
(3, '001', 'Inspector'),
(4, '003', 'Operario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inspecciones`
--

CREATE TABLE `inspecciones` (
  `ins_id` int(11) NOT NULL,
  `ins_idubicacion` int(11) NOT NULL,
  `ins_cargo` int(11) DEFAULT NULL,
  `ins_fechahora` datetime DEFAULT NULL,
  `ins_anexos` varchar(80) DEFAULT NULL,
  `ins_observaciones` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inspecciones`
--

INSERT INTO `inspecciones` (`ins_id`, `ins_idubicacion`, `ins_cargo`, `ins_fechahora`, `ins_anexos`, `ins_observaciones`) VALUES
(2, 1, 3, '2022-12-04 00:00:00', 'Ninguno', 'Daños estructurales'),
(5, 2, 4, '2022-12-04 00:00:00', 'Ninguno nada', 'Sin observacion'),
(6, 2, 4, '2022-12-02 00:00:00', 'Se anexan fotografías', 'Hay una avería en los pisos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `tip_id` int(11) NOT NULL,
  `tip_codigo` varchar(2) NOT NULL,
  `tip_descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_identificacion`
--

INSERT INTO `tipo_identificacion` (`tip_id`, `tip_codigo`, `tip_descripcion`) VALUES
(1, 'CC', 'Cedula de Ciudadanía'),
(2, 'TI', 'Tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_inspeccion`
--

CREATE TABLE `tipo_inspeccion` (
  `tip_id` int(11) NOT NULL,
  `tip_descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_tipodocumento` int(11) NOT NULL,
  `usu_numerodocumento` varchar(15) DEFAULT NULL,
  `usu_nombres` varchar(80) DEFAULT NULL,
  `usu_login` varchar(45) DEFAULT NULL,
  `usu_password` varchar(45) DEFAULT NULL,
  `usu_correo` varchar(45) DEFAULT NULL,
  `usu_telefono` varchar(30) DEFAULT NULL,
  `usu_tipousuario` varchar(20) DEFAULT NULL,
  `usu_estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_tipodocumento`, `usu_numerodocumento`, `usu_nombres`, `usu_login`, `usu_password`, `usu_correo`, `usu_telefono`, `usu_tipousuario`, `usu_estado`) VALUES
(12, 0, '15614303', 'Camilo Peña Benitez', 'cpenab', 'e9890509ea34a6bb43270615b5af6d89', 'cpbenitez0311@gmail.com', '3114135541', '3', '1'),
(19, 0, '50893393', 'MILET GONZALEZ ALVAREZ', '', '0742efe46508299f3700cf829ec8e40c', 'miletg@gmail.com', '3023016010', '4', '1'),
(21, 0, '15025327', 'MARISOL VELASQUEZ', 'mvelasquez', '19efbbe1e568a826741fd3f631f70fcc', 'mvelazquez@gmail.com', '777777777', '3', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `car_codigo_UNIQUE` (`car_codigo`);

--
-- Indices de la tabla `inspecciones`
--
ALTER TABLE `inspecciones`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`tip_id`),
  ADD UNIQUE KEY `tip_codigo_UNIQUE` (`tip_codigo`),
  ADD UNIQUE KEY `tip_descripcion_UNIQUE` (`tip_descripcion`);

--
-- Indices de la tabla `tipo_inspeccion`
--
ALTER TABLE `tipo_inspeccion`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inspecciones`
--
ALTER TABLE `inspecciones`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_inspeccion`
--
ALTER TABLE `tipo_inspeccion`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
