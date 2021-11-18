-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 22:42:06
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `san pedro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adelantos`
--

CREATE TABLE `adelantos` (
  `codigo_adelanto` int(10) UNSIGNED NOT NULL,
  `codigo_empleado` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adelantos`
--

INSERT INTO `adelantos` (`codigo_adelanto`, `codigo_empleado`, `fecha`, `cantidad`) VALUES
(26, 32, '2021-10-16', '3000.00'),
(27, 32, '2021-09-12', '5000.00'),
(28, 33, '2021-05-21', '5400.00'),
(29, 33, '2021-03-10', '6100.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `codigo_usuario` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`codigo_usuario`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'Marcelo', 'Troncelliti ', 'Marcelotronce@gmail.com', 'bbb4928f554efc62a017576103e1708e0efa23b2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_venta`
--

CREATE TABLE `codigo_venta` (
  `codigo_venta` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` decimal(10,2) UNSIGNED NOT NULL,
  `codigo_producto` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codigo_venta`
--

INSERT INTO `codigo_venta` (`codigo_venta`, `fecha`, `cantidad`, `codigo_producto`) VALUES
(15, '2021-10-16', '6000.00', 19),
(16, '2021-10-15', '100000.00', 20),
(17, '2021-09-15', '3000.00', 21),
(18, '2021-09-10', '50000.00', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigo_empleado` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codigo_empleado`, `nombre`, `apellido`, `dni`) VALUES
(32, 'Santiago Agustin', 'Troncelliti ', 41544211),
(33, 'Gaston David', 'Falon', 30421345),
(35, 'Agustin', 'Nuñez', 40231421);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE `meses` (
  `nombre` text NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`nombre`, `numero`) VALUES
('enero', 1),
('febrero', 2),
('marzo', 3),
('abril', 4),
('mayo', 5),
('junio', 6),
('julio', 7),
('agosto', 8),
('septiembre', 9),
('octubre', 10),
('noviembre', 11),
('diciembre', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio_costo` decimal(10,2) UNSIGNED NOT NULL,
  `nombre_prove` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `descripcion`, `precio_costo`, `nombre_prove`, `stock`) VALUES
(19, 'Azúcar ', '3000.00', 'Martino', 20),
(20, 'Harina', '2000.00', 'Esteban', 50),
(21, 'Adictivo', '4500.00', 'Pablo Domingo', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codigo_proveedor` int(11) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codigo_proveedor`, `razon_social`, `nombre`) VALUES
(16, 'Harinas ', 'Esteban'),
(17, 'Materia Prima', 'Pablo Domingo'),
(18, 'Azúcar ', 'Martino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adelantos`
--
ALTER TABLE `adelantos`
  ADD PRIMARY KEY (`codigo_adelanto`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- Indices de la tabla `codigo_venta`
--
ALTER TABLE `codigo_venta`
  ADD PRIMARY KEY (`codigo_venta`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo_empleado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codigo_proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adelantos`
--
ALTER TABLE `adelantos`
  MODIFY `codigo_adelanto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `codigo_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `codigo_venta`
--
ALTER TABLE `codigo_venta`
  MODIFY `codigo_venta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `codigo_empleado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
