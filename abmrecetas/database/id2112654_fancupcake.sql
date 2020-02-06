-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2017 at 05:30 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2112654_fancupcake`
--

-- --------------------------------------------------------

--
-- Table structure for table `niveles`
--

CREATE TABLE `niveles` (
  `idnivel` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `niveles`
--

INSERT INTO `niveles` (`idnivel`, `titulo`) VALUES
('a', 'fácil'),
('b', 'intermedio'),
('c', 'difícil'),
('d', 'masomenos');

-- --------------------------------------------------------

--
-- Table structure for table `recetas`
--

CREATE TABLE `recetas` (
  `idreceta` int(5) UNSIGNED ZEROFILL NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ingredientes` text COLLATE utf8_unicode_ci NOT NULL,
  `pasos` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quenivel` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `fechapub` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recetas`
--

INSERT INTO `recetas` (`idreceta`, `titulo`, `ingredientes`, `pasos`, `foto`, `quenivel`, `fechapub`) VALUES
(00001, 'Café y Chocolate', '250g harina leudante, 320g azucar, 100g chips de chocolate, 240c.c café con leche, 2 huevos, 220c.c aceite', 'Mezclar primero los ingredientes secos, es decir la harina, el azúcar y los chips de chocolate. En otro bol batir el café con leche (preparado a gusto), los huevos y el aceite', NULL, 'b', '2017-11-06 00:00:00'),
(00002, 'Cupcakes con Exquisita', 'Caja Bizcochuelo Exquisita de Vainilla o chocolate, 3 Huevos, 220 ccLeche, 1 Postre Exquisita de Vainilla o Chocolate, 1 litro Leche', 'Prepará el postre de vainilla como indica el envase y déjalo enfriar. Prepará el bizcochuelo como indica el envase y rellená los pirotines hasta 1/3 de los mismos. Cociná a 170° durante 15 minutos aproximadamente', NULL, 'a', '2017-11-08 00:00:00'),
(00003, 'Miel, Limón y Vainilla', '50g manteca, 1/2 taza leche, 1/2 taza aceite, 5 cucharadas esencia de vainilla, 5 cucharadas jugo de limón, 250g azúcar, 500g harina, 5 cucharadas miel, ralladura de limon', 'Batir las claras agregando lentamente azúcar. Luego de formar una especie de merengue agregar las yemas y manteca. Agregar lentamente harina a medida que se bate. Formada la mezcla incorporar el jugo de limón, ralladura, miel y la esencia de vainilla', NULL, 'b', '2017-11-10 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`idnivel`);

--
-- Indexes for table `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`idreceta`),
  ADD KEY `quenivel` (`quenivel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recetas`
--
ALTER TABLE `recetas`
  MODIFY `idreceta` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `recetas`
--
ALTER TABLE `recetas`
  ADD CONSTRAINT `recetas_ibfk_1` FOREIGN KEY (`quenivel`) REFERENCES `niveles` (`idnivel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
