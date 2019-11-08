-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 08/11/2019 às 00:15
-- Versão do servidor: 5.7.27-0ubuntu0.18.04.1
-- Versão do PHP: 7.3.11-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `facu`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_questoes`
--

CREATE TABLE `tb_questoes` (
  `id_pergunta` int(11) NOT NULL,
  `pergunta` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_chamada` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`id_pergunta`, `pergunta`, `resp_chamada`) VALUES
(1, 'Voce ja sofreu algum tipo de ataque?', 'entendi'),
(2, 'Esse ataque foi recente?', 'sim1'),
(3, 'Seu dispositivo apresentou comportamento estranho?', 'sim2'),
(10, 'Teste pergunta?', 'Testei pergunta');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_respostas`
--

CREATE TABLE `tb_respostas` (
  `id_reposta` int(11) NOT NULL,
  `fk_id_pergunta` int(11) NOT NULL,
  `resp_return` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `tb_respostas`
--

INSERT INTO `tb_respostas` (`id_reposta`, `fk_id_pergunta`, `resp_return`, `valor`) VALUES
(1, 1, 'Sim', 'sim1'),
(2, 1, 'Não', 'nao1'),
(3, 2, 'Sim', 'sim2'),
(5, 2, 'Nao', 'nao2'),
(8, 10, 'Teste Resposta', 'testevalue');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Índices de tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD PRIMARY KEY (`id_reposta`),
  ADD KEY `fk_id_pergunta` (`fk_id_pergunta`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  MODIFY `id_reposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD CONSTRAINT `tb_respostas_ibfk_1` FOREIGN KEY (`fk_id_pergunta`) REFERENCES `tb_questoes` (`id_pergunta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
