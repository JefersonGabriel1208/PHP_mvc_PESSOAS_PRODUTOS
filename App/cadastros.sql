-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/07/2024 às 01:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `formaspagamento`
--

CREATE TABLE `formaspagamento` (
  `id` int(11) NOT NULL,
  `NomeFormasPagamento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `formaspagamento`
--

INSERT INTO `formaspagamento` (`id`, `NomeFormasPagamento`) VALUES
(1, 'BOLETO 30 DIAS'),
(2, 'CARTÃO DE CREDITO'),
(3, 'CARTÃO DE DÉBITO'),
(4, 'CASHBACK'),
(5, 'CHEQUE'),
(6, 'CREDITO LOJA'),
(7, 'DEVOLUÇÃO'),
(8, 'DINHEIRO'),
(9, 'OUTROS'),
(10, 'PIX'),
(11, 'SEM PAGAMENTO'),
(12, 'TRANFERÊNCIA BANCÁRIA'),
(13, 'VALE ALIMENTAÇÃO'),
(14, 'VALE REFEIÇÃO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `RG` varchar(11) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Cel` varchar(45) NOT NULL,
  `Tipo_Pessoa` varchar(45) NOT NULL,
  `data_preenchimento` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `Nome`, `Email`, `Endereco`, `RG`, `CPF`, `Cel`, `Tipo_Pessoa`, `data_preenchimento`) VALUES
(90, 'Jeferson  Gabriel ', 'jeferson.galves@hotmail.com', 'Rua Barão do rio Branco 661 ', '124568', '856265452', '14997228950', 'cliente', '2024-03-12 21:06:09'),
(93, 'Lucilene Alves', 'lucilene@gmail.com', 'rua tal 654', '415666', '4555', '149985868552', 'cliente', '2024-06-30 20:26:34'),
(94, 'Jeferson  Gabriel Alves', 'jeferson.galves@hotmail.com', 'Rua Barão do rio Branco 661 fundos', '06782069818', '', '14997228950', 'cliente', '2024-06-30 21:54:51'),
(95, 'Jeferson  Gabriel Alves', 'jeferson.galves@hotmail.com', 'Rua Barão do rio Branco 661 fundos', '06782069818', '', '14997228943', 'fornecedor', '2024-06-30 21:55:16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `preço` varchar(45) NOT NULL,
  `custo` varchar(45) NOT NULL,
  `data_preenchimento` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preço`, `custo`, `data_preenchimento`) VALUES
(1, 'Ração cachorro pet', '89,90', '82.00', '2024-03-12 22:29:08'),
(2, 'ração de gato', '56,00', '50.00', '2024-03-12 22:32:56'),
(3, 'ração peixe', '30,00 Kg', '20.00', '2024-03-12 22:41:49'),
(4, 'ração passaros', '65,00', '59.00', '2024-03-12 22:47:20'),
(9, 'jarra', '52', '41', '2024-06-30 21:31:28');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `formaspagamento`
--
ALTER TABLE `formaspagamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formaspagamento`
--
ALTER TABLE `formaspagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
