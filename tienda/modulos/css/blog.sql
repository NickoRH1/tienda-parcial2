-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2020 a las 10:34:14
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id_usr` int(15) UNSIGNED NOT NULL,
  `autor_usr` varchar(100) NOT NULL,
  `titulo_usr` varchar(100) NOT NULL,
  `fecha_usr` varchar(100) NOT NULL,
  `descripcion_usr` varchar(100) NOT NULL,
  `status_usr` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id_usr`, `autor_usr`, `titulo_usr`, `fecha_usr`, `descripcion_usr`, `status_usr`) VALUES
(1, 'nicko', 'el sello', '12 de junio', 'el mejor', 1),
(2, 'paco', 'mexicano', '05 de noviembre', 'siempre intenso', 1),
(3, 'victor', 'leones', '25 de julio', 'metas personales', 1),
(4, 'alfredo', 'mentiras', '05 de noviembre', 'sea pueesto a redactar', 1),
(5, 'tomas', 'almas', '20 de enero', 'vivir la vida', 1),
(6, 'ana', 'doctrina', '02 de noviembre', 'la vida es un misterio', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id_usr` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
