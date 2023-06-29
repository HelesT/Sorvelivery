-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/06/2023 às 02:54
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
  `codigo_cadastro` int(2) NOT NULL,
  `nome_cadastro` varchar(45) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
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
  `admim_cadastro` varchar(1) DEFAULT NULL,
  `foto` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`codigo_cadastro`, `nome_cadastro`, `nome_usuario`, `telefone_cadastro`, `cep`, `estado`, `cidade`, `bairro`, `rua/avenida`, `numero`, `complemento`, `casa/trabalho`, `informacao_adicional`, `email_cadastro`, `senha_cadastro`, `admim_cadastro`, `foto`) VALUES
(6, 'Nylton Eduardo Constâncio', 'Nylton', '47989130277', '89210-755', 'Santa Catarina', 'Joinville', 'Itaum', 'São Valentim', 22, 'Casa', 'trabalho', 'Muro Branco', '', '123', 's', ''),
(12, '', 'mateus', '991910111', '', '', '', '', '', 0, '', '', '', 'Mateus', '123', NULL, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` decimal(3,0) NOT NULL,
  `quantidade_produto` int(2) NOT NULL,
  `tamanho_produto` varchar(45) NOT NULL,
  `acompanhamento_produto` varchar(45) NOT NULL,
  `carrinho_produto` varchar(1) NOT NULL,
  `imagem` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`nome_produto`, `preco_produto`, `quantidade_produto`, `tamanho_produto`, `acompanhamento_produto`, `carrinho_produto`, `imagem`) VALUES
('burguerqueen', 17, 1, 'Pequeno', '', 'n', ''),
('chococream', 12, 2, 'Grande', 'Nozes', 's', ''),
('chocomalti', 14, 1, 'Pequeno', '', 'n', ''),
('dalmaflocos', 11, 99, 'Gigante', 'Leite em pó', 'n', ''),
('hotchillypapers', 8, 1, 'Pequeno', '', 'n', ''),
('saborpinkfloyd', 13, 1, 'Pequeno', '', 'n', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_atual`
--

CREATE TABLE `usuario_atual` (
  `codigo_usuario` int(3) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `acesso` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario_atual`
--

INSERT INTO `usuario_atual` (`codigo_usuario`, `nome_usuario`, `acesso`) VALUES
(6, 'Nylton', 's'),
(12, 'mateus', 'n'),
(13, 'batata', 'n');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`codigo_cadastro`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`nome_produto`);

--
-- Índices de tabela `usuario_atual`
--
ALTER TABLE `usuario_atual`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `codigo_cadastro` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuario_atual`
--
ALTER TABLE `usuario_atual`
  MODIFY `codigo_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
