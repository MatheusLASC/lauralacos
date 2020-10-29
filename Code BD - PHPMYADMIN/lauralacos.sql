-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2020 às 19:47
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
(1, 'Pronta Entrega', 'prontaentrega');

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

INSERT INTO `tb_produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_valor`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_comprimento`, `pro_apliques`, `pro_cores`, `pro_prendedor`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 1, 'Laço Double Cor', '2 Laços com cores diferentes', 10.90, 'laco1', 'lacodouble', 2, 2.00, 1, 1, 1.50, '1', 'Não');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`cate_id`);

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
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
