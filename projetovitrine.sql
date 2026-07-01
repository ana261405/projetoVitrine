-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2026 às 14:55
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetovitrine`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida`
--

CREATE TABLE `bebida` (
  `idProduto` int(11) NOT NULL COMMENT '\r\n',
  `volume` decimal(10,0) NOT NULL,
  `recipiente` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `bebida`
--

INSERT INTO `bebida` (`idProduto`, `volume`, `recipiente`) VALUES
(3, 350, 'Lata'),
(8, 300, 'Copo '),
(18, 500, 'Garrafa ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `imagem`, `categoria`) VALUES
(2, 'X-salada', 'Pão, hamburguer de 150g, 2 fatias de queijo mussarela, alface, tomate e cebola roxa. ', 25.00, 'uploads/lanche-salada.jpeg', 1),
(3, 'Coca Cola', 'Refrigerante', 6.00, 'uploads/coca-cola.jfif', 2),
(5, 'Cheese Burguer', 'Pão, hamburguer de 150g, 2 fatias de queijo mussarela, maionese caseira.', 21.00, 'uploads/lanche-cheeseburguer.jpeg', 1),
(7, 'Batata frita', 'Batata frita crocante com tempero da casa, aprox. 150g', 15.00, 'uploads/porcaoBatata.jpeg', 3),
(8, 'Suco de Laranja', 'Suco de laranja natural, com açúcar e gelo', 12.00, 'uploads/sucoLaranja.jpeg', 2),
(17, 'Onion rings', 'Onion rings com aquele tempero especial da casa. Deliciosas, suaves e crocantes. Aprox. 200g. ', 18.00, 'uploads/onion-rings.jpeg', 3),
(18, 'Água', 'Água mineral, sem gás.', 6.00, 'uploads/agua.jpeg', 2),
(19, 'X-bacon ', 'Pão, hamburguer de 150g, 2 fatias de queijo cheddar, 3 fatias de bacon crocante, molho da casa. ', 28.00, 'uploads/bacon.jpeg', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bebida`
--
ALTER TABLE `bebida`
  ADD UNIQUE KEY `idProduto` (`idProduto`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bebida`
--
ALTER TABLE `bebida`
  ADD CONSTRAINT `bebida_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
