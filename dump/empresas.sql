-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2019 às 16:02
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `empresa` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `tellbox` varchar(3) DEFAULT NULL,
  `webcred` varchar(3) DEFAULT NULL,
  `nome_do_contato` varchar(50) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `relatado` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `solucao` text,
  `progresso` text,
  `nome_retorno` varchar(50) NOT NULL,
  `tel_retorno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`empresa`, `data`, `hora`, `tellbox`, `webcred`, `nome_do_contato`, `titulo`, `relatado`, `status`, `solucao`, `progresso`, `nome_retorno`, `tel_retorno`) VALUES
('queijo cred', '0000-00-00', '00:00:00', '-', '-', '', '', '', '', '', '', '', 0),
('queijo cred', '0000-00-00', '05:55:00', 'sim', '-', 'Ratinho', 'Teste de noticia', 'test', 'SOLUCIONAD', 'foi testado', '', '', 0),
('queijo cred', '0000-00-00', '23:14:00', 'sim', '-', 'Roberto', 'Teste de manual', 'testeando', 'SOLUCIONAD', 'testeado', '', '', 0),
('Estranho CRED', '0000-00-00', '12:45:00', 'sim', '-', 'Ratinho', 'Teste de manual', 'dssdgfs', 'SOLUCIONAD', 'dsgfsdgsgd', '', '', 0),
('queijo cred', '0000-00-00', '05:22:00', 'sim', '-', 'Roberto', 'Teste de manual', 'asda', 'SOLUCIONAD', 'dsafsd', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_cadastrais`
--

CREATE TABLE `dados_cadastrais` (
  `id` int(11) NOT NULL,
  `empresa` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `responsavel` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tellbox` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `webcred` varchar(3) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados_cadastrais`
--

INSERT INTO `dados_cadastrais` (`id`, `empresa`, `telefone`, `responsavel`, `email`, `tellbox`, `webcred`) VALUES
(1, 'queijo cred', 2147483647, 'Ratinho', 'medaqueijo@queijocred.com.br', 'sim', 'sim'),
(2, '', 0, '', '', 'não', 'não'),
(3, 'Estranho CRED', 0, 'Roberto', 'joao@webdec.com.br', 'sim', 'sim'),
(4, 'Mais Cred', 0, 'Roberto', 'Julhonew@gmail.com', 'sim', 'sim'),
(5, 'Mais Cred', 0, 'Roberto', 'joao@webdec.com.br', 'sim', 'sim'),
(6, 'Mais Cred', 0, 'Roberto', 'joao@webdec.com.br', 'sim', 'sim'),
(7, '', 0, '', '', 'não', 'não'),
(8, 'Estranho CRED', 0, 'Roberto', 'joao@webdec.com.br', 'sim', 'não'),
(9, 'sadasdasd', 2147483647, 'sadasdas', 'joao@webdec.com.br', 'sim', 'não'),
(10, 'n', 2147483647, 'Roberto', 'joao@webdec.com.br', 'sim', 'não'),
(11, 'sadas\'s', 2147483647, 'jul', 'Julhonew@gmail.com', 'sim', 'sim'),
(12, 'na faixa cred\'s', 1254789856, 'eu não\'s', 'eunão@nafaixacred.com.br', 'sim', 'não'),
(13, '', 1254789856, '', 'eunão@nafaixacred.com.br', 'sim', 'não'),
(14, 'na faixa cred\'s', 1254789856, 'eu não\'s', 'eunão@nafaixacred.com.br', 'sim', 'não'),
(15, 'na faixa cred\'s', 1254789856, 'eu não\'s', 'eunão@nafaixacred.com.br', 'sim', 'não'),
(16, 'normal\'s cred', 2147483647, 'Julho', 'Julhonew@gmail.com', 'sim', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `admin` int(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `email`, `login`, `senha`, `admin`, `data_nasc`, `log`) VALUES
(2, 'admin', 'Julhonew@gmail.com', 'admin', 'b24331b1a138cde62aa1f679164fc62f', 1, '2018-12-17', '2018-12-17 13:54:44'),
(3, 'Julho Justino', 'Julhonew@gmail.com', 'Julho', '21187d0fa4b11debd18572ce6493ba70', 0, '1996-06-09', '2018-12-17 13:58:34'),
(4, 'me exclua se puder', 'Julhonew@gmail.com', 'Julhonew@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2018-12-17', '2018-12-17 15:52:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados_cadastrais`
--
ALTER TABLE `dados_cadastrais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados_cadastrais`
--
ALTER TABLE `dados_cadastrais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
