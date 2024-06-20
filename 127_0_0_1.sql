-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19/06/2024 às 22:42
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_ecotee`
--
CREATE DATABASE IF NOT EXISTS `bd_ecotee` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci;
USE `bd_ecotee`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senhaconf` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`cod`, `nome`, `email`, `senha`, `senhaconf`) VALUES
(48, '$nome', '$email', '$senha', '$senhaco'),
(2, 'asdf', 'asdf', 'asdf', 'asdf'),
(3, 'asdf', 'asdf', 'asdf', 'asdf'),
(4, '', '', '', ''),
(5, 'gagas', 'gasdga', 'asdfasdf', 'asdfasdf'),
(6, 'gagas', 'gasdga', 'asdfasdf', 'asdfasdf'),
(7, '', '', '2', '3'),
(9, 'GABRIEl', 'gabriel.freitas137@etec', 'asd', 'asd'),
(10, '', '', '', ''),
(12, 'das', 'das', 'das', 'das'),
(13, 'DAS', 'DAS', 'DAS', 'DAS'),
(14, 'ROBERTO', 'roberto@roberto', 'fa', 'fa'),
(15, 'ha', 'ha', 'ha', 'ha'),
(16, 'D', 'D', 'D', 'D'),
(40, 'gaba', 'gab@gab', 'gab', 'gab'),
(39, 'fas', 'fas@fas', 'fas', 'fas'),
(19, 'ga', 'ga', 's', 'a'),
(21, 'gag', 'gag@ga', 'ga', 'ga'),
(22, 'ga', 'ga', 's', 's'),
(23, 'ga', 'ga', 's', 's'),
(25, 'ga', 'ga', 'ga', 'ga'),
(26, 'Gabriela Alves de Freitas', 'alvesgabbiis@gmail.com', 'cbjr1301', 'cbjr1301'),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, 'ga', 'ga', 'ga', 'ga'),
(31, 'Gabrielza', 'gabrielalvesdefreitas24@gmail.com', 'Cbjr1301$', 'Cbjr1301$'),
(32, 'sd', 'gads', 'ds', 'ds'),
(33, 'Gabriela', 'alvesgabbiis@gmail.com', 'cbjr1301', 'cbjr1301'),
(34, 'adm', 'adm', 'adm', 'adm'),
(35, 'gabr', 'gabr', '123', '123'),
(36, 'robertoaoaaass', 'gmail@gmail', '1234', '1234'),
(37, 'asd', 'asd@asd', 'Asd', 'Asd'),
(38, 'asdf', 'asdf@d', 'asdf@', 'asdf@');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `cod_produto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `preco` int NOT NULL,
  `img_produto` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`cod_produto`, `nome`, `preco`, `img_produto`) VALUES
(1, 'Oversized Amarela', 75, 'imgs_produtos/8719b6f99f9aa2835193f2d11e1bb97e.jpg'),
(2, 'Oversized Rosa', 79, 'imgs_produtos/0331553806c8fe3a02b64f46dcb02cc6.jpg'),
(3, 'Oversized Creme', 79, 'imgs_produtos/cc2574bf60656d070f3bb2ffcacb4fb7.jpg'),
(4, 'Oversized Marrom', 90, 'imgs_produtos/9f8bebe6446e84bf61de8808f565b5e2.jpg'),
(8, 'Oversized Lilas', 89, 'imgs_produtos/27b60fb70040a29b9511ba44807fea4f.jpg'),
(7, 'camisa branca slim', 60, 'imgs_produtos/8813b65ca1cc2d50798743da1378e976.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
