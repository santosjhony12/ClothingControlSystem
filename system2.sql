-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Fev-2023 às 03:58
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `system2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `advertencia`
--

CREATE TABLE `advertencia` (
  `id_adver` int(200) NOT NULL,
  `re_colaborador` int(10) NOT NULL,
  `nome_colaborador` varchar(30) NOT NULL,
  `descricao_advertencia` varchar(100) NOT NULL,
  `data_advertencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `advertencia`
--

INSERT INTO `advertencia` (`id_adver`, `re_colaborador`, `nome_colaborador`, `descricao_advertencia`, `data_advertencia`) VALUES
(1, 7500073, 'Jhony Santos', 'Não usou a cor da fifo corretamente.', '2022-10-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alterarsenha`
--

CREATE TABLE `alterarsenha` (
  `pk` int(1) NOT NULL,
  `cod` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `armario`
--

CREATE TABLE `armario` (
  `cod` int(200) NOT NULL,
  `depart` int(2) DEFAULT NULL,
  `tipo` varchar(5) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `armario`
--

INSERT INTO `armario` (`cod`, `depart`, `tipo`, `nome`) VALUES
(1, 1, 'A1-G1', NULL),
(2, 1, 'A1-G1', NULL),
(3, 1, 'A1-G2', NULL),
(4, 1, 'A1-G3', NULL),
(5, 1, 'A1-G4', NULL),
(6, 1, 'A1-G5', NULL),
(7, 1, 'A1-G6', NULL),
(8, 1, 'A1-G7', NULL),
(9, 1, 'A2-G1', NULL),
(10, 1, 'A2-G2', NULL),
(11, 1, 'A2-G3', NULL),
(12, 1, 'A2-G4', NULL),
(13, 1, 'A2-G5', NULL),
(14, 1, 'A3-G1', NULL),
(15, 1, 'A3-G2', NULL),
(16, 1, 'A3-G3', NULL),
(17, 1, 'A3-G4', NULL),
(18, 1, 'A3-G5', NULL),
(19, 2, 'A1-G1', NULL),
(20, 2, 'A1-G2', NULL),
(21, 2, 'A1-G3', NULL),
(22, 2, 'A1-G4', NULL),
(23, 2, 'A1-G5', NULL),
(24, 2, 'A1-G6', NULL),
(25, 2, 'A1-G7', NULL),
(26, 2, 'A2-G1', NULL),
(27, 2, 'A2-G2', NULL),
(28, 2, 'A2-G3', NULL),
(29, 2, 'A2-G4', NULL),
(30, 2, 'A2-G5', NULL),
(31, 2, 'A2-G6', NULL),
(32, 2, 'A3-G1', NULL),
(33, 2, 'A3-G2', NULL),
(34, 2, 'A3-G3', NULL),
(35, 2, 'A3-G4', NULL),
(36, 2, 'A3-G5', NULL),
(37, 2, 'A3-G6', NULL),
(38, 3, 'A1-G1', NULL),
(39, 3, 'A1-G2', NULL),
(40, 3, 'A1-G3', NULL),
(41, 3, 'A1-G4', NULL),
(42, 3, 'A1-G5', NULL),
(43, 3, 'A1-G6', NULL),
(44, 3, 'A1-G7', NULL),
(45, 3, 'A2-G1', NULL),
(46, 3, 'A2-G2', NULL),
(47, 3, 'A2-G3', NULL),
(48, 3, 'A2-G4', NULL),
(49, 3, 'A2-G5', NULL),
(50, 3, 'A2-G6', NULL),
(51, 3, 'A3-G1', NULL),
(52, 3, 'A3-G2', NULL),
(53, 3, 'A3-G3', NULL),
(54, 3, 'A3-G4', NULL),
(55, 3, 'A3-G5', NULL),
(56, 3, 'A3-G6', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamento`
--

CREATE TABLE `lancamento` (
  `id_lanc` int(200) NOT NULL,
  `data_lanc` date DEFAULT NULL,
  `tipo` varchar(10) NOT NULL,
  `cod_vest` varchar(5) NOT NULL,
  `cor` varchar(8) NOT NULL,
  `tamanho` varchar(3) NOT NULL,
  `tipo_movimento` varchar(10) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `cod_depart` int(2) NOT NULL,
  `descricao_depart` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `lancamento`
--

INSERT INTO `lancamento` (`id_lanc`, `data_lanc`, `tipo`, `cod_vest`, `cor`, `tamanho`, `tipo_movimento`, `descricao`, `cod_depart`, `descricao_depart`) VALUES
(1, '2022-10-12', 'Macacão', 'A2-G2', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(2, '2022-10-13', 'Macacão', 'A2-G1', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(3, '2022-10-13', 'Macacão', 'A2-G2', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(4, '2022-10-13', 'Macacão', 'A2-G3', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(5, '2022-10-13', 'Macacão', 'A2-G4', 'Cinza', 'M', 'Saída', '', 2, 'Lehr'),
(6, '2022-10-13', 'Macacão', 'A2-G5', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(7, '2022-10-13', 'Jaleco', 'A2-G6', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(8, '2022-10-13', 'Macacão', 'A3-G1', 'Cinza', 'G', 'Saída', '', 2, 'Lehr'),
(9, '2022-10-13', 'Macacão', 'A3-G5', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(10, '2022-10-13', 'Macacão', 'A3-G3', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(11, '2022-10-13', 'Macacão', 'A3-G4', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(12, '2022-10-13', 'Jaleco', 'A3-G6', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(13, '2022-10-13', 'Macacão', 'A1-G1', 'Cinza', 'G', 'Saída', '', 2, 'Lehr'),
(14, '2022-10-13', 'Macacão', 'A1-G2', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(15, '2022-10-13', 'Macacão', 'A1-G3', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(16, '2022-10-13', 'Macacão', 'A1-G4', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(17, '2022-10-13', 'Macacão', 'A1-G5', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(18, '2022-10-13', 'Jaleco', 'A1-G6', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(19, '2022-10-13', 'Macacão', 'A3-G2', 'Cinza', 'GG', 'Saída', '', 2, 'Lehr'),
(20, '2022-10-13', 'Macacão', 'A3-G1', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(21, '2022-10-13', 'Macacão', 'A3-G2', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(22, '2022-10-13', 'Macacão', 'A3-G3', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(23, '2022-10-13', 'Jaleco', 'A3-G4', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(24, '2022-10-13', 'Jaleco', 'A3-G5', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(25, '2022-10-13', 'Jaleco', 'A3-G6', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(26, '2022-10-13', 'Macacão', 'A2-G1', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(27, '2022-10-13', 'Macacão', 'A2-G2', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(28, '2022-10-13', 'Macacão', 'A2-G3', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(29, '2022-10-13', 'Jaleco', 'A2-G4', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(30, '2022-10-13', 'Jaleco', 'A2-G5', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(31, '2022-10-13', 'Jaleco', 'A1-G4', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(32, '2022-10-13', 'Macacão', 'A1-G1', 'Cinza', 'G', 'Saída', '', 1, 'Box'),
(33, '2022-10-13', 'Macacão', 'A1-G2', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(34, '2022-10-13', 'Macacão', 'A1-G3', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(35, '2022-10-13', 'Jaleco', 'A1-G4', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(36, '2022-10-13', 'Macacão', 'A2-G2', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(37, '2022-10-13', 'Jaleco', 'A1-G5', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(38, '2022-10-13', 'Jaleco', 'A1-G6', 'Cinza', 'GG', 'Saída', '', 1, 'Box'),
(39, '2022-10-13', 'Macacão', 'A1-G1', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(40, '2022-10-13', 'Macacão', 'A1-G1', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(41, '2022-10-13', 'Macacão', 'A1-G4', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(42, '2022-10-13', 'Macacão', 'A1-G3', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(43, '2022-10-13', 'Macacão', 'A1-G3', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(44, '2022-10-13', 'Jaleco', 'A1-G6', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(45, '2022-10-13', 'Jaleco', 'A1-G6', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(46, '2022-10-13', 'Macacão', 'A2-G1', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(47, '2022-10-13', 'Macacão', 'A2-G1', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(48, '2022-10-13', 'Macacão', 'A2-G3', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(49, '2022-10-13', 'Jaleco', 'A2-G3', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(50, '2022-10-13', 'Jaleco', 'A2-G4', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(51, '2022-10-13', 'Jaleco', 'A2-G4', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(52, '2022-10-13', 'Jaleco', 'A2-G5', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(53, '2022-10-13', 'Jaleco', 'A2-G5', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(54, '2022-10-13', 'Macacão', 'A3-G1', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(55, '2022-10-13', 'Macacão', 'A3-G1', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(56, '2022-10-13', 'Jaleco', 'A3-G4', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(57, '2022-10-13', 'Jaleco', 'A3-G4', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(58, '2022-10-13', 'Jaleco', 'A3-G5', 'Verde', 'GG', 'Entrada', '', 1, 'Box'),
(59, '2022-10-13', '', 'A3-G5', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(60, '2022-10-13', 'Macacão', 'A1-G1', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(61, '2022-10-13', 'Macacão', 'A1-G1', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(62, '2022-10-13', 'Macacão', 'A1-G2', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(63, '2022-10-13', 'Macacão', 'A1-G2', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(64, '2022-10-13', 'Macacão', 'A1-G3', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(65, '2022-10-13', 'Macacão', 'A1-G4', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(66, '2022-10-13', 'Macacão', 'A1-G4', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(67, '2022-10-13', 'Macacão', 'A1-G5', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(68, '2022-10-13', 'Macacão', 'A1-G5', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(69, '2022-10-13', 'Macacão', 'A1-G3', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(70, '2022-10-13', 'Jaleco', 'A1-G6', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(71, '2022-10-13', 'Jaleco', 'A1-G6', 'Verde', '', 'Entrada', '', 2, 'Lehr'),
(72, '2022-10-13', 'Macacão', 'A2-G1', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(73, '2022-10-13', 'Macacão', 'A2-G1', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(74, '2022-10-13', 'Macacão', 'A2-G2', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(75, '2022-10-13', 'Macacão', 'A2-G2', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(76, '2022-10-13', 'Macacão', 'A2-G3', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(77, '2022-10-13', 'Macacão', 'A2-G3', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(78, '2022-10-13', 'Macacão', 'A2-G4', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(79, '2022-10-13', 'Macacão', 'A2-G4', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(80, '2022-10-13', 'Macacão', 'A2-G5', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(81, '2022-10-13', 'Macacão', 'A2-G5', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(82, '2022-10-13', 'Jaleco', 'A2-G6', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(83, '2022-10-13', 'Jaleco', 'A2-G6', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(84, '2022-10-13', 'Macacão', 'A3-G1', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(85, '2022-10-13', 'Macacão', 'A3-G1', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(86, '2022-10-13', 'Macacão', 'A3-G2', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(87, '2022-10-13', 'Macacão', 'A3-G2', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(88, '2022-10-13', 'Macacão', 'A3-G3', 'Azul', '', 'Entrada', '', 2, 'Lehr'),
(89, '2022-10-13', 'Macacão', 'A3-G3', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(90, '2022-10-13', 'Macacão', 'A3-G4', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(91, '2022-10-13', 'Macacão', 'A3-G4', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(92, '2022-10-13', 'Macacão', 'A3-G5', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(93, '2022-10-13', 'Jaleco', 'A3-G6', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(94, '2022-10-13', 'Jaleco', 'A3-G6', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(95, '2022-10-13', 'Macacão', 'A3-G5', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(96, '2022-10-19', 'Jaleco', 'A1-G1', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(97, '2022-10-19', 'Macacão', 'A1-G3', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(98, '2022-10-19', 'Jaleco', 'A1-G4', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(99, '2022-10-19', 'Jaleco', 'A1-G5', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(100, '2022-10-19', 'Jaleco', 'A1-G6', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(101, '2022-10-19', 'Macacão', 'A2-G1', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(102, '2022-10-19', 'Macacão', 'A2-G2', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(103, '2022-10-19', 'Jaleco', 'A3-G4', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(104, '2022-10-19', 'Jaleco', 'A3-G5', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(105, '2022-10-19', 'Jaleco', 'A2-G5', 'Azul', 'GG', 'Saída', '', 1, 'Box'),
(106, '2022-10-19', 'Macacão', 'A1-G1', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(107, '2022-10-19', 'Macacão', 'A1-G4', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(108, '2022-10-19', 'Macacão', 'A1-G3', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(109, '2022-10-19', 'Macacão', 'A1-G2', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(110, '2022-10-19', 'Jaleco', 'A2-G6', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(111, '2022-10-19', 'Macacão', 'A2-G5', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(112, '2022-10-19', 'Macacão', 'A3-G2', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(113, '2022-10-19', 'Macacão', 'A3-G3', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(114, '2022-10-19', 'Jaleco', 'A3-G6', 'Azul', 'GG', 'Saída', '', 2, 'Lehr'),
(115, '2022-10-20', 'Macacão', 'A1-G1', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(116, '2022-10-20', 'Macacão', 'A1-G2', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(117, '2022-10-20', 'Macacão', 'A1-G3', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(118, '2022-10-20', 'Jaleco', 'A1-G5', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(119, '2022-10-20', 'Jaleco', 'A1-G5', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(120, '2022-10-20', 'Jaleco', 'A1-G6', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(121, '2022-10-20', 'Macacão', 'A2-G1', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(122, '2022-10-20', 'Macacão', 'A1-G2', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(123, '2022-10-20', 'Macacão', 'A2-G3', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(124, '2022-10-20', 'Jaleco', 'A2-G4', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(125, '2022-10-20', 'Jaleco', 'A2-G5', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(126, '2022-10-20', 'Macacão', 'A3-G4', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(127, '2022-10-20', 'Jaleco', 'A3-G5', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(128, '2022-10-20', 'Jaleco', 'A1-G4', 'Cinza', 'GG', 'Entrada', '', 1, 'Box'),
(129, '2022-10-27', 'Macacão', 'A1-G4', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(130, '2022-10-27', 'Jaleco', 'A1-G1', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(131, '2022-10-27', 'Jaleco', 'A1-G6', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(132, '2022-10-27', 'Jaleco', 'A3-G5', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(133, '2022-10-27', 'Macacão', 'A1-G5', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(134, '2022-10-27', 'Jaleco', 'A1-G6', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(135, '2022-10-27', 'Macacão', 'A1-G2', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(136, '2022-10-27', 'Macacão', 'A2-G1', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(137, '2022-10-27', 'Macacão', 'A1-G3', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(138, '2022-10-27', 'Macacão', 'A1-G4', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(139, '2022-10-27', 'Jaleco', 'A2-G5', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(140, '2022-10-27', 'Jaleco', 'A2-G3', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(141, '2022-10-27', 'Jaleco', 'A3-G4', 'Azul', 'GG', 'Entrada', '', 1, 'Box'),
(142, '2022-10-27', 'Macacão', 'A1-G2', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(143, '2022-10-27', 'Macacão', 'A2-G5', 'Verde', 'GG', 'Entrada', '', 2, 'Lehr'),
(144, '2022-10-27', 'Jaleco', 'A2-G6', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(145, '2022-10-27', 'Macacão', 'A1-G1', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(146, '2022-10-27', 'Macacão', 'A3-G2', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(147, '2022-10-27', 'Jaleco', 'A2-G6', 'Cinza', 'GG', 'Entrada', '', 2, 'Lehr'),
(148, '2022-10-27', 'Jaleco', 'A3-G6', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(149, '2022-10-27', 'Macacão', 'A1-G3', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(150, '2022-10-27', 'Macacão', 'A1-G4', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(151, '2022-10-27', 'Macacão', 'A3-G3', 'Azul', 'GG', 'Entrada', '', 2, 'Lehr'),
(152, '2022-10-27', 'Macacão', 'A3-G2', 'Cinza', 'GG', 'Entrada', '', 2, 'Lehr'),
(153, '2022-10-27', 'Macacão', 'A2-G2', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(154, '2022-10-27', 'Macacão', 'A2-G1', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(155, '2022-10-27', 'Macacão', 'A3-G3', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(156, '2022-10-27', 'Jaleco', 'A2-G6', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(157, '2022-10-27', 'Jaleco', 'A3-G6', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(158, '2022-10-27', 'Macacão', 'A2-G5', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(159, '2022-10-27', 'Macacão', 'A1-G4', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(160, '2022-10-27', 'Macacão', 'A1-G1', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(161, '2022-10-27', 'Macacão', 'A1-G3', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(162, '2022-10-27', 'Jaleco', 'A1-G7', 'Verde', 'GG', 'Saída', '', 2, 'Lehr'),
(163, '2022-10-27', 'Macacão', 'A2-G1', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(164, '2022-10-27', 'Macacão', 'A2-G2', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(165, '2022-10-27', 'Jaleco', 'A2-G5', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(166, '2022-10-27', 'Jaleco', 'A2-G3', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(167, '2022-10-27', 'Macacão', 'A3-G1', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(168, '2022-10-27', 'Jaleco', 'A3-G6', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(169, '2022-10-27', 'Jaleco', 'A3-G4', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(170, '2022-10-27', 'Jaleco', 'A3-G5', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(171, '2022-10-27', 'Macacão', 'A1-G2', 'Verde', 'GG', 'Saída', '', 1, 'Box'),
(173, '0000-00-00', '', '', '', '', '', '', 1, 'Box'),
(174, '0000-00-00', '', '', '', '', '', '', 1, 'Box'),
(175, '0000-00-00', '', '', '', '', '', '', 1, 'Box'),
(176, '0000-00-00', '', '', '', '', '', '', 1, 'Box'),
(177, '2023-01-10', '', '', '', '', '', '', 2, 'Lehr'),
(178, '2023-02-17', 'Jaleco', 'A2-G8', 'Azul', 'G', 'SaÃ­da', '', 1, 'Box');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(2) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`) VALUES
(1, 'admin', '28312515rec'),
(2, 'IP0004', 'BRASIL@22nsg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `advertencia`
--
ALTER TABLE `advertencia`
  ADD PRIMARY KEY (`id_adver`);

--
-- Índices para tabela `alterarsenha`
--
ALTER TABLE `alterarsenha`
  ADD PRIMARY KEY (`pk`);

--
-- Índices para tabela `armario`
--
ALTER TABLE `armario`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `lancamento`
--
ALTER TABLE `lancamento`
  ADD PRIMARY KEY (`id_lanc`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `advertencia`
--
ALTER TABLE `advertencia`
  MODIFY `id_adver` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `alterarsenha`
--
ALTER TABLE `alterarsenha`
  MODIFY `pk` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `armario`
--
ALTER TABLE `armario`
  MODIFY `cod` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `lancamento`
--
ALTER TABLE `lancamento`
  MODIFY `id_lanc` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
