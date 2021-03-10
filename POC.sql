-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-03-2021 a las 09:37:03
-- Versión del servidor: 5.7.33-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `POC`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Admin`
--

CREATE TABLE `Admin` (
  `Username` varchar(40) NOT NULL,
  `Password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Admin`
--

INSERT INTO `Admin` (`Username`, `Password`) VALUES
('Admin', '1234'),
('Nro2', '2222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Enterprise`
--

CREATE TABLE `Enterprise` (
  `CUIT` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Province` varchar(25) NOT NULL,
  `Locality` varchar(45) NOT NULL,
  `Direction` text NOT NULL,
  `PhoneNro` varchar(10) NOT NULL,
  `Email` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Enterprise`
--

INSERT INTO `Enterprise` (`CUIT`, `Name`, `Province`, `Locality`, `Direction`, `PhoneNro`, `Email`) VALUES
(43215678, 'Seox', 'BS AS', 'Berazategui', 'calle 117 y 7', '32435432', 'seox@gmail.com'),
(123456789, 'Lucilius SA', 'Buenos Aires', 'Bernal', 'entre A y B, Nro 666 piso 6', '66669999', 'lucio@gmail.com'),
(987654321, 'Farfa SRL', 'Cordoba', 'Cosquin', 'entre x y z, Nro 3456', '98987676', 'farfa@outlook.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Job`
--

CREATE TABLE `Job` (
  `Job_ID` int(9) NOT NULL,
  `Details` text,
  `FromDate` date NOT NULL,
  `ToDate` date NOT NULL,
  `IsApproved` tinyint(1) NOT NULL,
  `CUIT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Job`
--

INSERT INTO `Job` (`Job_ID`, `Details`, `FromDate`, `ToDate`, `IsApproved`, `CUIT`) VALUES
(2, NULL, '2021-03-11', '2021-03-27', 1, 1234567890),
(3, 'requiere', '2021-03-27', '2021-03-31', 1, 1234567890),
(4, 'requiere', '2021-03-27', '2021-03-31', 0, 1234567890);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Student`
--

CREATE TABLE `Student` (
  `Student_ID` int(9) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `Document_type` varchar(3) NOT NULL,
  `DocumentNro` int(8) NOT NULL,
  `BithDate` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Career` varchar(40) NOT NULL,
  `Year` int(2) NOT NULL,
  `Details` text,
  `IsApproved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Student`
--

INSERT INTO `Student` (`Student_ID`, `Name`, `Lastname`, `Document_type`, `DocumentNro`, `BithDate`, `Email`, `Career`, `Year`, `Details`, `IsApproved`) VALUES
(1, 'Ann', 'Hecate', 'DNI', 12345678, '2021-03-02', 'ann@gmail.com', 'TPI', 4, '?', 0),
(2, 'Takemi', 'Tae', 'DNI', 21345609, '2021-03-01', 'TT@gmail.com', 'LI', 1, '', 0),
(6, 'nana', 'nanana', 'DNI', 7777777, '2007-07-07', 'siete@gmail.com', 'Ing en Alimentos', 7, NULL, 0),
(7, 'naa', 'nanana', 'DNI', 7777777, '2007-07-07', 'siete@gmail.com', 'Ing en Alimentos', 7, NULL, 0),
(8, 'naa', 'nanana', 'DNI', 7777777, '2007-07-07', 'siete@gmail.com', 'Ing en Alimentos', 7, NULL, 0),
(10, 'Johann', 'D Arc', 'CI', 13645678, '2021-08-08', 'johann@gmail.com', 'LI', 5, '', 0),
(11, 'Johann', 'D Arc', 'CI', 13645678, '2021-08-08', 'johann@gmail.com', 'LI', 5, 'aaakka', 0),
(12, 'Johann', 'D Arc', 'CI', 13645678, '2021-08-08', 'johann@gmail.com', 'LI', 5, 'aaakka', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indices de la tabla `Enterprise`
--
ALTER TABLE `Enterprise`
  ADD PRIMARY KEY (`CUIT`);

--
-- Indices de la tabla `Job`
--
ALTER TABLE `Job`
  ADD PRIMARY KEY (`Job_ID`),
  ADD KEY `Job_ID` (`Job_ID`);

--
-- Indices de la tabla `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Job`
--
ALTER TABLE `Job`
  MODIFY `Job_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Student`
--
ALTER TABLE `Student`
  MODIFY `Student_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
