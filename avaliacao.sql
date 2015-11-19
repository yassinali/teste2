-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2015 às 21:59
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avaliacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categorianome` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categorianome`) VALUES
(1, 'ficcao'),
(2, 'accao'),
(3, 'comedia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `_token` varchar(70) NOT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(2) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `bi` varchar(12) NOT NULL,
  `deleted_at` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`_token`, `id`, `nome`, `idade`, `sexo`, `bairro`, `distrito`, `bi`, `deleted_at`, `created_at`, `updated_at`) VALUES
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 1, 'Mufamaju Ali', 26, 'masculino', 'Matola Tsalala', 'Matola', '1012', '0000-00-00', '0000-00-00', '0000-00-00'),
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 2, 'Amandio Tsungo', 23, 'Masculino', 'Fomento', 'Matola', '325641', '0000-00-00', '0000-00-00', '0000-00-00'),
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 3, 'Bruno', 28, 'Masculino', 'Maputo', 'Maputo', '254', '0000-00-00', '0000-00-00', '0000-00-00'),
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 4, 'Fernando Maposse', 29, 'Masculino', 'Maputo', 'Maputo', '654', '2015-11-18', '0000-00-00', '2015-11-18'),
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 5, 'Zainabo', 25, 'Femenino', 'Patrice Lumumba', 'Maputo', '5248', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `_token` varchar(60) NOT NULL,
  `_method` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `id_categoria_fk` int(11) NOT NULL,
  `sinopse` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`_token`, `_method`, `id`, `titulo`, `id_categoria_fk`, `sinopse`, `created_at`, `updated_at`) VALUES
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 'PUT', 1, 'Agente 47', 0, 'Accao', '2015-11-18 19:12:02', '0000-00-00 00:00:00'),
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 'PUT', 2, 'Agente 47', 0, 'Accao', '2015-11-18 19:12:02', '0000-00-00 00:00:00'),
('kD7IcsnGVxZqHVgRINRcedIAJXAQfsvqajrX8EQX', 'PUT', 3, 'Agente 47', 0, 'Accao', '2015-11-18 19:12:02', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
