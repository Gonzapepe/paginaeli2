-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2019 a las 20:25:03
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `store`
--

CREATE TABLE `store` (
  `cod_barras` int(11) NOT NULL,
  `nombre` tinytext,
  `valor` float DEFAULT NULL,
  `descripción` text,
  `foto` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `store`
--

INSERT INTO `store` (`cod_barras`, `nombre`, `valor`, `descripción`, `foto`) VALUES
(1, 'Capitán America', 4800, 'La remera del primer vengador de Marvel, Con un estilo unico y diferente.', '772866-mla31024701141_062019-o-4f3606f9ed5196a00c15622990013785-640-0.jpg'),
(2, 'Hulk', 4800, 'Durante la detonación experimental de una bomba gamma, el científico Robert Bruce Banner salva al adolescente Rick Jones, que ha conducido al campo de pruebas; Banner empuja a Jones a una trinchera para salvarlo, pero es golpeado por la explosión, absorbiendo enormes cantidades de radiación gamma. Así es creado Hulk.', 'remera hulk.png'),
(3, 'Iron Man', 4800, 'Anthony Stark nació con una inteligencia extrema. Después de la muerte de sus padres cuando tenía 21 años, Stark heredó Stark Industries (en español Industrias Stark). Después de ser herido en una zona de guerra, construyó una armadura que ayudaría a mantenerlo con vida. Stark se dió cuenta que gracias a su armadura, él podía ayudar a la gente, así se convirtió en Iron Man. ', 'remera ironman.png'),
(4, 'Thor', 4800, 'El padre de Thor, Odín, decide que su hijo necesita que le enseñe la humildad y, en consecuencia, coloca a Thor (sin recuerdos de la divinidad) en el cuerpo y los recuerdos de un estudiante de medicina humana existente, parcialmente discapacitado, Donald Blake. Después de convertirse en médico y de vacaciones en Noruega, Blake presencia la llegada de una partida de exploración alienígena. Blake huye de los extraterrestres a una cueva. Después de descubrir el martillo de Thor, Mjolnir (disfrazado como un bastón) y golpearlo contra una roca, se transforma en el dios del trueno.', 'thor.png'),
(5, 'Spiderman', 4800, 'A Spiderman lo picó una araña radioactiva y lo dotó de una nueva personalidad: el Hombre Araña. ... Spiderman, o Peter Parker, es un superhéroe que se halla a favor de la ley, de la justicia.', 'spiderman.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `cod_barras` int(11) DEFAULT NULL,
  `talle` tinytext,
  `stock` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`cod_barras`, `talle`, `stock`) VALUES
(1, 'M', 13),
(1, 'S', 15),
(1, 'L', 10),
(1, 'XL', 8),
(2, 'M', 15),
(2, 'S', 15),
(2, 'L', 12),
(2, 'XL', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`cod_barras`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
