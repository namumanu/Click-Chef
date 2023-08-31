-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Fev-2023 às 14:25
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clickchef`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroadm`
--

CREATE TABLE `cadastroadm` (
  `idAdm` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroalimentos`
--

CREATE TABLE `cadastroalimentos` (
  `idproduto` int(11) NOT NULL,
  `nomeproduto` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastroalimentos`
--

INSERT INTO `cadastroalimentos` (`idproduto`, `nomeproduto`, `preco`, `descricao`, `categoria`, `estoque`) VALUES
(3, 'banana', 3, '1 kilo de batata doce', 'Café da manhã', 34);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrocliente`
--

CREATE TABLE `cadastrocliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `ingredientes` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastroadm`
--
ALTER TABLE `cadastroadm`
  ADD PRIMARY KEY (`idAdm`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `cadastroalimentos`
--
ALTER TABLE `cadastroalimentos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idcompra`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastroadm`
--
ALTER TABLE `cadastroadm`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastroalimentos`
--
ALTER TABLE `cadastroalimentos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `idcompra` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
