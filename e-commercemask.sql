-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2023 a las 02:40:00
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e-commercemask`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_usr` int(11) DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(60) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masvendidos`
--

CREATE TABLE `masvendidos` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `cantidad` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_orden` int(11) NOT NULL,
  `id_usr` int(11) DEFAULT NULL,
  `id_carrito` int(11) DEFAULT NULL,
  `precio_total` int(13) DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `descuento` float DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosencarrito`
--

CREATE TABLE `productosencarrito` (
  `id` int(11) DEFAULT NULL,
  `id_carrito` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `cantidad` int(13) DEFAULT NULL,
  `status` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usr` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `telefono` int(13) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `rol` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usr_carrito_fk` (`id_usr`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `id_prod_Fk` (`id_prod`);

--
-- Indices de la tabla `masvendidos`
--
ALTER TABLE `masvendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod_masVendidos_Fk` (`id_prod`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `id_usr_ordenes_fk` (`id_usr`),
  ADD KEY `id_carrito_ordenes_fk` (`id_carrito`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `productosencarrito`
--
ALTER TABLE `productosencarrito`
  ADD KEY `id_carrito_PEC_fk` (`id_carrito`),
  ADD KEY `id_prod_PEC_Fk` (`id_prod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usr`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `id_usr_carrito_fk` FOREIGN KEY (`id_usr`) REFERENCES `usuarios` (`id_usr`);

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `id_prod_Fk` FOREIGN KEY (`id_prod`) REFERENCES `productos` (`id_prod`);

--
-- Filtros para la tabla `masvendidos`
--
ALTER TABLE `masvendidos`
  ADD CONSTRAINT `id_prod_masVendidos_Fk` FOREIGN KEY (`id_prod`) REFERENCES `productos` (`id_prod`);

--
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `id_carrito_ordenes_fk` FOREIGN KEY (`id_carrito`) REFERENCES `carrito` (`id_carrito`),
  ADD CONSTRAINT `id_usr_ordenes_fk` FOREIGN KEY (`id_usr`) REFERENCES `usuarios` (`id_usr`);

--
-- Filtros para la tabla `productosencarrito`
--
ALTER TABLE `productosencarrito`
  ADD CONSTRAINT `id_carrito_PEC_fk` FOREIGN KEY (`id_carrito`) REFERENCES `carrito` (`id_carrito`),
  ADD CONSTRAINT `id_prod_PEC_Fk` FOREIGN KEY (`id_prod`) REFERENCES `productos` (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
