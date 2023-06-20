-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2023 às 17:43
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

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
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome_cadastro` varchar(45) NOT NULL,
  `telefone_cadastro` varchar(45) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `rua/avenida` varchar(45) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `casa/trabalho` varchar(45) NOT NULL,
  `informacao_adicional` varchar(45) NOT NULL,
  `email_cadastro` varchar(45) DEFAULT NULL,
  `senha_cadastro` varchar(45) DEFAULT NULL,
  `admim_cadastro` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome_cadastro`, `telefone_cadastro`, `cep`, `estado`, `cidade`, `bairro`, `rua/avenida`, `numero`, `complemento`, `casa/trabalho`, `informacao_adicional`, `email_cadastro`, `senha_cadastro`, `admim_cadastro`) VALUES
('Nylton', '47989130277', '89210-755', 'SC', 'joinville', 'Itaum', 'São Valentim', 22, 'Casa', 'casa', 'Muro branco', 'nyltondudu29@gmail.com', '123', 's'),
('Nylton2', '47989130277', '', '', '', '', '', 0, '', '', '', 'nyltondudu29@gmail.com', '123', 'n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` decimal(3,0) NOT NULL,
  `carrinho_produto` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
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
-- Estrutura da tabela `usuario_atual`
--

CREATE TABLE `usuario_atual` (
  `Codigo_usuario` int(1) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario_atual`
--

INSERT INTO `usuario_atual` (`Codigo_usuario`, `nome`) VALUES
(1, 'batata');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`nome_cadastro`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`nome_produto`);

--
-- Índices para tabela `usuario_atual`
--
ALTER TABLE `usuario_atual`
  ADD PRIMARY KEY (`Codigo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
