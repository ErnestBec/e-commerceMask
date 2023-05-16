-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2023 a las 10:23:22
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
-- Base de datos: `e-commercemaskprod`
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

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `id_usr`, `status`) VALUES
(111, 93, 'active'),
(295, 18945, 'pagado'),
(328, 18945, 'pagado'),
(416, 18945, 'pagado'),
(721, 18945, 'pagado'),
(783, 18945, 'pagado'),
(866, 93, 'pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(60) NOT NULL,
  `nomCat` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nomCat`) VALUES
(1, 'antifaces'),
(2, 'bufon'),
(3, 'media cara'),
(4, 'encaje'),
(5, 'samurai');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masvendidos`
--

CREATE TABLE `masvendidos` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `cantidad` int(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `masvendidos`
--

INSERT INTO `masvendidos` (`id`, `id_prod`, `cantidad`) VALUES
(853, 6, 5),
(5387, 11, 8),
(7377, 7, 5),
(9108, 3, 6),
(9628, 1, 7);

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

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id_orden`, `id_usr`, `id_carrito`, `precio_total`, `status`) VALUES
(102, 18945, 721, 299, 'pagado'),
(350, 18945, 783, 299, 'pagado'),
(592, 18945, 295, 2985, 'pagado'),
(893, 93, 866, 2564, 'pagado'),
(1124, 18945, 328, 707, 'pagado'),
(3096, 18945, 416, 2040, 'pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `descuento` float DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `img` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nombre`, `descripcion`, `cantidad`, `precio`, `descuento`, `calificacion`, `img`, `id_cat`) VALUES
(1, 'Thmyo', ' Máscara de media cara con diseño del Fantasma de la Ópera', 3, 299, 15, 5, '../resources/mascaras/mascara1.jpg', 3),
(2, 'YU FENG Jester Bells', '  Máscara veneciana de cara completa, color negro', 10, 499, 10, 4, '../resources/mascaras/mascara2.jpg', 2),
(3, 'Mardi Gras', 'BLEVET Máscara de cara completa para hombre, máscara de bufón.', 4, 109.99, 20, 4, '../resources/mascaras/mascara3.jpg', 2),
(4, 'Myja', 'venecianas retro de encaje de media cara para mujeres', 10, 89, 0, 5, '../resources/mascaras/mascara4.jpg', 1),
(5, 'SIQUK', 'máscara de disfraz de diamantes de imitación,', 10, 152, 42, 4, '../resources/mascaras/mascara5.jpg', 4),
(6, 'CCUFO', 'Máscara Veneciana de Metal Cortado a láser para Mascarada', 5, 154, 3, 4, '../resources/mascaras/mascara29.jpg', 1),
(7, 'IETANG', 'hermosas máscaras venecianas para parejas', 5, 289, 20, 3, '../resources/mascaras/mascara6.jpg', 1),
(8, 'ABOOFAN', 'máscara veneciana de bufón de media cara', 10, 190, 0, 4, '../resources/mascaras/mascara7.jpg', 2),
(9, 'Coolwife', 'máscara veneciana de bufón de media cara', 10, 500, 10, 4, '../resources/mascaras/mascara8.jpg', 3),
(10, 'Griego', 'Máscara metálica para Mascarada', 10, 129, 0, 4, '../resources/mascaras/mascara9.jpg', 3),
(11, 'REV', 'Máscara Antifaz Original para Disfraz de la Serie The Umbrella Academy', 2, 299, 0, 4, '../resources/mascaras/mascara10.jpg', 1),
(12, 'VALO CONCEPT', 'Antifaces Metálicos Lisos de Plástico Semi Flexible.', 10, 119, 3, 4, '../resources/mascaras/mascara30.jpg', 1),
(13, 'Máscara veneciana de encaje', 'cara completa para mujer', 10, 260, 0, 4, '../resources/mascaras/mascara11.jpg', 4),
(14, ' princesa vintage', 'Máscara veneciana negra con elegante collar gótico de encaje', 10, 399, 0, 4, '../resources/mascaras/mascara12.jpg', 4),
(15, 'Mariposa', 'Masquerade Mask Máscara veneciana de mariposa para mujer', 10, 215, 0, 4, '../resources/mascaras/mascara13.jpg', 1),
(16, 'ChuCheng', ' Cubierta de Cara Mardi Gras para Mujer', 10, 69, 3, 4, '../resources/mascaras/mascara14.jpg', 1),
(17, 'Misteriosa', 'máscara veneciana para fiesta de Halloween, máscara de baile de graduación, disfraz de bar', 10, 99, 0, 4, '../resources/mascaras/mascara15.jpg', 3),
(18, 'ForUnique', 'Máscara de máscaras para parejas, mujeres y hombres, paquete de 3 unidades', 10, 299, 0, 4, '../resources/mascaras/mascara16.jpg', 1),
(19, 'Geek-M', 'máscara de disfraz para festivales de Navidad, Año Nuevo', 10, 59, 0, 4, '../resources/mascaras/mascara17.jpg', 4),
(20, 'Hoshin', ' Mardi Gras Deecorations venecianas para mujer', 10, 86, 0, 4, '../resources/mascaras/mascara18.jpg', 1),
(21, 'liweiyu', 'para mujer (azul-negro), 9.5 x 4.1 pulgadas', 10, 79, 0, 4, '../resources/mascaras/mascara19.jpg', 1),
(22, 'Mask It', 'Máscara de satén y lentejuelas', 10, 66, 96, 4, '../resources/mascaras/mascara20.jpg', 2),
(23, 'IETANG RED', ' Un par de hermosas máscaras venecianas para parejas', 10, 96, 0, 4, '../resources/mascaras/mascara21.jpg', 2),
(24, 'Gorgeous', 'Venecianas máscaras máscaras Fiesta Disfraces Accesorio', 10, 69, 0, 4, '../resources/mascaras/mascara22.jpg', 1),
(25, 'AUTOWT', 'Conjunto de Disfraces de Mascarada, 4pcs Mujeres Chicas Negro Gótico', 10, 400, 2, 4, '../resources/mascaras/mascara23.jpg', 4),
(26, 'SIQUK', 'máscara de disfraz de Halloween', 10, 69, 0, 4, '../resources/mascaras/mascara24.jpg', 4),
(27, 'LIANGLIDE', 'Máscara japonesa de látex para cosplay', 10, 119, 0, 4, '../resources/mascaras/mascara25.jpg', 5),
(28, 'Fantasma', ' cubierta de cara de demonio japonés 3D', 10, 300, 0, 4, '../resources/mascaras/mascara26.jpg', 5),
(29, 'Hannya Oni', 'disfraz de cosplay de Prajna NOH', 10, 480, 0, 4, '../resources/mascaras/mascara27.jpg', 5),
(30, 'asky', 'Mascara Samurai', 10, 420, 0, 4, '../resources/mascaras/mascara28.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosencarrito`
--

CREATE TABLE `productosencarrito` (
  `id` int(11) DEFAULT NULL,
  `id_carrito` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  `cantidad` int(13) DEFAULT NULL,
  `status` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productosencarrito`
--

INSERT INTO `productosencarrito` (`id`, `id_carrito`, `id_prod`, `cantidad`, `status`) VALUES
(7392, 416, 3, 5, 'pagado'),
(4772, 328, 3, 1, 'pagado'),
(5993, 295, 6, 10, 'pagado'),
(5104, 295, 7, 5, 'pagado'),
(1581, 866, 6, 5, 'pagado'),
(504, 866, 11, 6, 'pagado'),
(8099, 111, 7, 1, 'pagado'),
(4421, 721, 11, 1, 'pagado'),
(4073, 783, 11, 1, 'pagado');

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
  `rol` varchar(10) DEFAULT NULL,
  `pwd` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usr`, `nombre`, `apellidos`, `telefono`, `correo`, `edad`, `rol`, `pwd`) VALUES
(93, 'Pacho', 'Perea', 8789689, 'er@gmail.com', 21, 'cliente', 'Admin123'),
(354, 'Alejandro', 'Perea', 792284031, 'ale@gmail.com', 21, 'cliente', 'Admin123'),
(18945, 'Ernesto', 'Becerril', 2147483647, 'becedom.156@gmail.com', 21, 'cliente', 'Admin123');

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
  ADD PRIMARY KEY (`id_cat`);

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
