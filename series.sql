-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Maio-2018 às 01:19
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `series`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `id` int(3) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `genero` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `temporada` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` enum('Ativo','Removido') COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`id`, `nome`, `genero`, `foto`, `temporada`, `descricao`, `status`) VALUES
(1, 'The Flash', 'aÃ§Ã£o,drama e ficÃ§Ã£o cientifica', 'img/serie1.jpg', '', '', 'Ativo'),
(2, 'Scorpion', 'Drama e aÃ§Ã£o', 'img/serie2.jpg', '', '', 'Ativo'),
(3, 'Game of Thrones', 'Fantasia, drama e aÃ§Ã£o', 'img/serie3.jpg', '', '', 'Ativo'),
(4, 'Supernatural', 'Drama, terror, aÃ§Ã£o e suspense', 'img/serie4.jpg', '11', 'toop', 'Ativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
