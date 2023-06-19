-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2023 às 01:04
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sorvelivery`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome_cadastro` varchar(45) NOT NULL,
  `telefone_cadastro` varchar(45) DEFAULT NULL,
  `CEP` varchar(9) NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `Cidade` varchar(45) NOT NULL,
  `Bairro` varchar(45) NOT NULL,
  `Rua/Avenida` varchar(45) NOT NULL,
  `Numero` varchar(45) NOT NULL,
  `Complemento` varchar(45) NOT NULL,
  `casa/trabalho` varchar(45) NOT NULL,
  `Informação adicional` varchar(45) NOT NULL,
  `email_cadastro` varchar(45) DEFAULT NULL,
  `senha_cadastro` varchar(45) DEFAULT NULL,
  `admim_cadastro` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`nome_cadastro`, `telefone_cadastro`, `CEP`, `Estado`, `Cidade`, `Bairro`, `Rua/Avenida`, `Numero`, `Complemento`, `casa/trabalho`, `Informação adicional`, `email_cadastro`, `senha_cadastro`, `admim_cadastro`) VALUES
('Nylton', '47989130277', '', '', '', '', '', '', '', '', '', 'nyltondudu29@gmail.com', '123', 's'),
('Nylton2', '47989130277', '', '', '', '', '', '', '', '', '', 'nyltondudu29@gmail.com', '123', 'n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` decimal(3,0) NOT NULL,
  `carrinho_produto` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`nome_produto`, `preco_produto`, `carrinho_produto`) VALUES
('burguerqueen', 17, 'n'),
('chococream', 12, 'n'),
('chocomalti', 14, 'n'),
('dalmaflocos', 11, 'n'),
('hotchillypapers', 8, 'n'),
('saborpinkfloyd', 13, 'n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_atual`
--

CREATE TABLE `usuario_atual` (
  `Codigo_usuario` int(1) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario_atual`
--

INSERT INTO `usuario_atual` (`Codigo_usuario`, `nome`) VALUES
(1, 'Nylton');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`nome_cadastro`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`nome_produto`);

--
-- Índices de tabela `usuario_atual`
--
ALTER TABLE `usuario_atual`
  ADD PRIMARY KEY (`Codigo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
