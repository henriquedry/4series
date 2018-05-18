-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2018 às 02:05
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
(1, 'The Flash', 'AÃ§Ã£o, Drama e FicÃ§Ã£o cientÃ­fica', 'img/serie1.jpg', '', '', ''),
(2, 'Scorpion', 'Drama e aÃ§Ã£o', 'img/serie2.jpg', '', '', ''),
(3, 'Game of Thrones', 'Fantasia e drama', 'img/serie3.jpg', '', '', ''),
(4, 'Sobrenatural', 'MistÃ©rio, drama e aÃ§Ã£o', 'img/serie3.jpg', '', '', '');

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
