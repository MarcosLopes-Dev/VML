-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2022 às 00:12
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vml`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(255) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `valor` float NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `valor`, `tipo`, `photo`) VALUES
(1, 'Alcatra', 42.98, 'Bovino', ''),
(2, 'Chã', 34.98, 'Bovino', ''),
(3, 'Contra filé', 46.98, 'Bovino', ''),
(4, 'Carne moída', 21.98, 'Bovino', ''),
(5, 'Patinho', 34.98, 'Bovino', ''),
(6, 'Bola da pá', 34.98, 'Bovino', ''),
(7, 'Palheta', 31.98, 'Bovino', ''),
(8, 'Coxão mole', 31.98, 'Bovino', ''),
(9, 'Fraldinha', 29.98, 'Bovino', ''),
(10, 'Acém', 29.98, 'Bovino', ''),
(11, 'Peito bovino', 29.98, 'Bovino', ''),
(12, 'Costela gaúcha', 21.98, 'Bovino', ''),
(13, 'Costela do acém', 22.98, 'Bovino', ''),
(14, 'Strogonoff de carne', 34.98, 'Bovino', ''),
(15, 'Bucho', 19.98, 'Bovino', ''),
(16, 'Mocotó', 9.98, 'Diversos', ''),
(17, 'Rabada', 25.49, 'Diversos', ''),
(18, 'Figado bovino', 17.98, 'Bovino', ''),
(19, 'Pernil', 14.98, 'Suíno', ''),
(20, 'Carré', 17.98, 'Suíno', ''),
(21, 'Filé de peito', 18.98, 'Frango', ''),
(22, 'Coxa c/ sobre', 8.49, 'Frango', ''),
(23, 'Frango passarinho', 9.98, 'Frango', ''),
(24, 'Coxa pião', 10.98, 'Frango', ''),
(25, 'Frango inteiro', 11.98, 'Diversos', ''),
(26, 'Sobre coxa', 12.98, 'Frango', ''),
(27, 'Drumet', 13.98, 'Frango', ''),
(28, 'Moela', 10.98, 'Frango', ''),
(29, 'Figado de frango', 7.99, 'Frango', ''),
(30, 'Strogonoff de frango', 19.98, 'Frango', ''),
(31, 'Moída de frango', 19.98, 'Frango', ''),
(32, 'Ovos c/30', 16.5, 'Diversos', ''),
(33, 'Ovos c/15', 8.99, 'Diversos', ''),
(34, 'Ovos c/12', 7.5, 'Diversos', ''),
(35, 'Linguiça mineira', 27.98, 'Suíno', ''),
(36, 'Salsicha hot', 10.98, 'Suíno', ''),
(37, 'Salsicha perd', 15.98, 'Suíno', ''),
(38, 'Linguiça toscana', 18.98, 'Suíno', ''),
(39, 'Linguiça de frango', 19.98, 'Frango', ''),
(40, 'Linguiça calabresa', 25.98, 'Suíno', ''),
(41, 'Bacon', 32.98, 'Suíno', ''),
(42, 'Costela suína', 19.98, 'Suíno', ''),
(43, 'Torresmo', 12.98, 'Suíno', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
