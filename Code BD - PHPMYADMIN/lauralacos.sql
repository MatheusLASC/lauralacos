-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2020 às 22:11
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lauralacos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`cate_id`, `cate_nome`, `cate_slug`) VALUES
(1, 'Pronta Entrega', 'prontaentrega'),
(2, 'Sob Encomenda', 'sobencomenda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_telefone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cli_endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cli_numero` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cli_complemento` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_bairro` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cli_uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cli_datacad` date NOT NULL,
  `cli_horacad` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`cli_id`, `cli_nome`, `cli_telefone`, `cli_email`, `cli_cpf`, `cli_endereco`, `cli_numero`, `cli_complemento`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_pass`, `cli_datacad`, `cli_horacad`) VALUES
(1, 'Matheus Lima de Almeida', '15998340909', 'matheuslima.tipi@gmail.com', '48487164897', 'Rua Bernardino de Campos', '305', NULL, 'Vila Dominguinho', 'Votorantim', 'SP', '18114070', '123', '2020-11-16', '15:30:32'),
(2, 'Amanda Perrone Degrande', '15998124356', 'amanda.perrone@gmail.com', '1234567891', 'Rua da Facens', '40', 'Bloco A', 'Vila Universitária', 'Sorocaba', 'SP', '18140090', 'amofacens10', '2020-11-16', '16:17:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedidos`
--

CREATE TABLE `tb_pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date NOT NULL,
  `ped_hora` time NOT NULL,
  `ped_cliente` int(11) NOT NULL,
  `ped_cod` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ped_ref` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pagstatus` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pagforma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pagtipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pagcod` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ped_fretevalor` double(9,2) DEFAULT 0.00,
  `ped_fretetipo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedidositens`
--

CREATE TABLE `tb_pedidositens` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_valor` double(9,2) NOT NULL,
  `item_qtd` int(6) NOT NULL,
  `item_pedcod` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_ref` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_comprimento` double(9,2) NOT NULL,
  `pro_apliques` int(11) NOT NULL,
  `pro_cores` int(11) NOT NULL,
  `pro_prendedor` double(9,2) NOT NULL,
  `pro_ativo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `pro_frete_free` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_valor`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_ref`, `pro_comprimento`, `pro_apliques`, `pro_cores`, `pro_prendedor`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 1, 'Laço Double Cor', 'Laços com cores diferentes', 10.90, 'laco1.jpg', 'laco-flor', 2, '01111111', 2.00, 1, 1, 1.50, '1', 'Não'),
(2, 2, 'Laço Rose Blue', 'Laços combinando dois tons inspirados na elegância francesa', 12.50, 'laco2.jpg', 'laco-rb', 3, '01222222', 2.00, 1, 2, 1.50, '1', 'Não'),
(3, 1, 'LAÇO AMARELO', 'LAÇO AMARELO COMPRIDO', 12.56, 'laco3.jpg', 'laco-amarelo', 123, '01333333', 12.60, 123, 132, 123.10, '1', 'Não'),
(4, 2, 'laço vermelho', 'laço vermelho curto', 45.50, 'laco4.jpg', 'laco-vermelho', 123, '01444444', 123.10, 1432, 132, 132.10, '1', 'Não');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD PRIMARY KEY (`ped_id`);

--
-- Índices para tabela `tb_pedidositens`
--
ALTER TABLE `tb_pedidositens`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_pedidositens`
--
ALTER TABLE `tb_pedidositens`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
