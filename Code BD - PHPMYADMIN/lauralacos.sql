-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2020 às 23:09
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
  `cli_ddd` int(2) NOT NULL,
  `cli_telefone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `tb_clientes` (`cli_id`, `cli_nome`, `cli_ddd`, `cli_telefone`, `cli_email`, `cli_cpf`, `cli_endereco`, `cli_numero`, `cli_complemento`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_pass`, `cli_datacad`, `cli_horacad`) VALUES
(7, 'Jacira Machado', 15, '99821851', 'jacirabaltazar@gmail.com', '04903731863', 'Rua Bernardino de Campos', '305', '', 'Vila Dominguinho', 'Votorantim', 'SP', '18114070', '7a8ac4181dd1db5adef0fb02bf12e4ab08bc10d3', '2020-11-21', '03:06:51'),
(8, 'Baltazar Domingues', 15, '99830090', 'pa.integra2020@gmail.com', '03211866809', 'Rua Davina da Silva Rosa Gurgel', '60', '', 'Jardim Campos do Conde II', 'Sorocaba', 'SP', '18104070', 'a121f47c643015472f3bc4280fe928a7466e9d1d', '2020-11-21', '03:23:14'),
(12, 'Matheus Lima de Almeida', 15, '99821851', 'matheuslima.tipi@gmail.com', '48487164897', 'Rua Bernardino de Campos', '310', '', 'Vila Dominguinho', 'Votorantim', 'SP', '18114070', '6178e18d6e2e8cff27bfd0be4964336f', '2020-11-21', '20:29:15'),
(14, 'Lorraine Paloschi', 15, '988267473', 'lorraine.paloschi@gmail.com', '41122233344', 'Rua Davina da Silva Rosa Gurgel', '10', '', 'Jardim Campos do Conde II', 'Sorocaba', 'SP', '18104070', '202cb962ac59075b964b07152d234b70', '2020-11-23', '18:40:53');

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

--
-- Extraindo dados da tabela `tb_pedidos`
--

INSERT INTO `tb_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pagstatus`, `ped_pagforma`, `ped_pagtipo`, `ped_pagcod`, `ped_fretevalor`, `ped_fretetipo`) VALUES
(14, '2020-11-21', '21:36:01', 12, '20112121115912', '20112121115912', '', '', '', '', 35.40, NULL),
(15, '2020-11-21', '21:52:47', 12, '20112121114512', '20112121114512', '', '', '', '', 39.00, NULL),
(16, '2020-11-22', '20:47:32', 12, '20112220112912', '20112220112912', '', '', '', '', 39.00, NULL),
(17, '2020-11-22', '20:53:21', 12, '20112220111912', '20112220111912', '', '', '', '', 35.40, NULL);

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

--
-- Extraindo dados da tabela `tb_pedidositens`
--

INSERT INTO `tb_pedidositens` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_pedcod`) VALUES
(18, 4, 45.50, 1, '20112121115912'),
(19, 2, 12.50, 1, '20112121115912'),
(20, 2, 12.50, 1, '20112121114512'),
(21, 4, 12.50, 1, '20112220112912'),
(22, 2, 12.50, 1, '20112220112912'),
(23, 1, 10.90, 1, '20112220112912'),
(24, 4, 12.50, 2, '20112220111912');

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
  `pro_apliques` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `pro_cores` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_prendedor` double(9,2) NOT NULL,
  `pro_ativo` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `pro_fretefree` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_valor`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_ref`, `pro_comprimento`, `pro_apliques`, `pro_cores`, `pro_prendedor`, `pro_ativo`, `pro_fretefree`) VALUES
(1, 1, 'Laço Double Cor', 'Laços com cores diferentes', 10.90, 'laco1.jpg', 'laco-flor', 2, '01111111', 2.00, 'Sim', 'Rosa com combinações em Amarelo ou Azul', 1.50, 'Sim', 'Não'),
(2, 2, 'Laço Rose Blue', 'Laços combinando dois tons inspirados na elegância francesa', 12.50, 'laco2.jpg', 'laco-rb', 3, '01222222', 2.00, 'Sim', 'Rosa com combinação em Azul', 1.50, 'Sim', 'Não'),
(3, 1, 'Laço Amarelo', 'Laço Amarelo comprido', 12.56, 'laco3.jpg', 'laco-amarelo', 3, '01333333', 2.60, 'Sim', 'Amarelo', 1.10, 'Sim', 'Não'),
(4, 2, 'Laço Vermelho', 'Laço vermelho curto', 12.50, 'laco4.jpg', 'laco-vermelho', 3, '01444444', 2.10, 'Sim', 'Vermelho', 1.10, 'Sim', 'Não');

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
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_pedidositens`
--
ALTER TABLE `tb_pedidositens`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
