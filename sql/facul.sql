-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2019 às 16:40
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `facul`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questoes`
--

CREATE TABLE `tb_questoes` (
  `id_pergunta` int(11) NOT NULL,
  `pergunta` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `resp_chamada` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`id_pergunta`, `pergunta`, `resp_chamada`) VALUES
(1, 'Voce ja sofreu algum tipo de ataque?', 'entendi'),
(2, 'Esse ataque foi recente?', 'sim1'),
(3, 'Seu dispositivo apresentou comportamento estranho?', 'sim2'),
(10, 'Teste pergunta?', 'Testei pergunta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_respostas`
--

CREATE TABLE `tb_respostas` (
  `id_reposta` int(11) NOT NULL,
  `fk_id_pergunta` int(11) NOT NULL,
  `resp_return` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_respostas`
--

INSERT INTO `tb_respostas` (`id_reposta`, `fk_id_pergunta`, `resp_return`, `valor`) VALUES
(1, 1, 'Sim', 'sim1'),
(2, 1, 'Nao', 'nao1'),
(3, 2, 'Sim', 'sim2'),
(5, 2, 'Nao', 'nao2'),
(8, 10, 'Teste Resposta', 'testevalue');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Índices para tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD PRIMARY KEY (`id_reposta`),
  ADD KEY `fK_id_pergunta` (`fk_id_pergunta`);

--
-- AUTO_INCREMENT de tabelas despejadas
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
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD CONSTRAINT `tb_respostas_ibfk_1` FOREIGN KEY (`fK_id_pergunta`) REFERENCES `tb_questoes` (`id_pergunta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
