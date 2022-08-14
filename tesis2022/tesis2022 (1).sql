-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2022 a las 23:38:19
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesis2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `direccion` varchar(15) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `ruc` varchar(30) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `observacion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `ci`, `direccion`, `nacionalidad`, `ruc`, `estado_civil`, `telefono`, `correo`, `observacion`) VALUES
(1, 'Cristian Galeano', '4895564', 'Avenida Artigas', 'Paraguayo', '4895564-8', 'Soltero', '0983324344', 'criscg7Galeano@gmail.com', 'Al dia en sus pagos'),
(2, 'Mario Cardozo', '5214458', 'Centro', 'Paraguayo', '5214458-2', 'soltero', '0981451254', 'mariocardozo21@gmail.com', 'Al dia en sus pagos'),
(3, 'Natalia Vázquez ', '4511201', 'Avenida Artigas', 'Paraguaya', '4511201-8', 'Soltera', '0972555847', 'nathyvazquez26@gmail.com', 'Al dia'),
(4, 'Gabriel Cajes', '3458888', 'Avenida Colon ', 'Paraguayo', '3458888-6', 'soltero', '0996323200', 'gabrielcajes@gmail.com', 'Al dia '),
(7, 'Sirley Larroza', '2255414', 'Av. Coronel Bog', 'Paraguaya', '2255414-7', 'Soltera', '0973002887', 'sirleylarro@gmail.com', 'Al dia en sus pagos'),
(8, 'Talia Leguizamon', '2574110', 'Barrio San Fran', 'Paraguaya', '2574110-9', 'Soltera', '0992585301', 'talialegui@gmail.com', 'Al dia en sus pagos'),
(9, 'Dora Ortega Oviedo', '1257694', 'Damas Argentina', 'Paraguaya', '1257694-8', 'Casada', '0981567712', 'doraortega22@gmail.com', 'Al dia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `nombre`) VALUES
(1, 'gasle', '12345', 'Cristian Galeano'),
(2, 'mario', '12345', 'Mario Cardozo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
