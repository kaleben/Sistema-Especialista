-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2019 às 14:16
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
-- Banco de dados: `facu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questoes`
--

CREATE TABLE `tb_questoes` (
  `id_pergunta` int(11) NOT NULL,
  `pergunta` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_chamada` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`id_pergunta`, `pergunta`, `resp_chamada`) VALUES
(1, 'Em qual tipo de dispositivo você acha que pode ter sofrido o ataque?', 'entendi'),
(2, 'Costuma atualizar seus apps?', 'celular'),
(3, 'Usa medidas de segurança em seus apps?', 'simid2'),
(4, 'Notou algum comportamento estranho no dispositivo ou em algum app?', 'simid3'),
(5, 'Você não sofreu ataque!', 'padrao4/8/10/13'),
(6, '--', '--'),
(7, 'Usa medidas de segurança em seus apps?', 'naoid2'),
(8, 'Notou algum comportamento estranho no dispositivo ou em algum app?', 'simid7'),
(9, 'Notou algum comportamento estranho no dispositivo ou em algum app?', 'naoid3'),
(10, 'Você realizou alguma operação diferente do comum em seu dispositivo? (Downloads, acessos e etc..)', 'padrao9/13'),
(11, 'Altere seus dados e entre em contato com o app, você pode ter sofrido um ataque!', 'padrao10/15'),
(12, 'O app esta te enviando mensagens ou emails inesperados?', 'padrao4/8/9'),
(13, 'Códigos estranhos estão aparecendo nas mensagens?', 'simid12'),
(14, 'Recentemente algum app ou site solicitou algum dado seu?', 'padrao12/13'),
(15, 'Qual tipo de dado?', 'simid14'),
(16, 'Você realizou alguma operação diferente do comum em seu dispositivo? (Downloads, acessos e etc..)', 'naoid14'),
(17, 'Atenção! Você pode ter sofrido um ataque, atualize seus dados e confira possíveis vírus em seu dispositivo.', 'padrao16'),
(18, 'Usa algum tipo de Antivirus?', 'computador'),
(19, 'Acessou recentemente algum site ou programa que solicitou seus dados?', 'padrao18'),
(20, 'Você não sofreu ataque!', 'padrao22/27'),
(21, 'Quais tipos de dados?', 'padrao19/27'),
(22, 'Você verificou a url do site que acessou ou baixou o programa em questão?', 'padrao21'),
(23, 'Recebeu algum e-mail inesperado sobre um acesso em uma conta sua?', 'padrao19/22'),
(24, 'Você pode ter sofrido um ataque! Atualize seus dados e entre em contato com o suporte no site ou programa.', 'padrao23/25'),
(25, 'Notou algum erro em sua conta bancaria, em sites ou programas? ', 'naoid23'),
(26, 'Entre em contato o administrador do site/programa para certificar-se que tudo está correto com sua conta!', 'naoid25'),
(27, 'Acessou recentemente algum site/programa que solicitou seus dados?', 'simid18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_respostas`
--

CREATE TABLE `tb_respostas` (
  `id_reposta` int(11) NOT NULL,
  `fk_id_pergunta` int(11) NOT NULL,
  `resp_return` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_respostas`
--

INSERT INTO `tb_respostas` (`id_reposta`, `fk_id_pergunta`, `resp_return`, `valor`) VALUES
(1, 1, 'Celular', 'celular'),
(2, 1, 'Computador', 'computador'),
(3, 2, 'Sim', 'simid2'),
(4, 2, 'Não', 'naoid2'),
(5, 3, 'Sim', 'simid3'),
(6, 3, 'Não', 'naoid3'),
(7, 4, 'Sim', 'padrao4/8/9'),
(8, 4, 'Não', 'padrao4/8/10/13'),
(9, 5, 'Terminar!', 'terminar'),
(10, 7, 'Sim', 'simid7'),
(11, 7, 'Não', 'naoid3'),
(12, 8, 'Não', 'padrao4/8/10/13'),
(13, 8, 'Sim', 'padrao4/8/9'),
(14, 9, 'Sim', 'padrao4/8/9'),
(15, 9, 'Não', 'padrao9/13'),
(16, 10, 'Não', 'padrao4/8/10/13'),
(17, 10, 'Sim', 'padrao11/16'),
(18, 11, 'Terminar!', 'terminar'),
(19, 12, 'Sim', 'simid12'),
(20, 12, 'Não', 'padrao12/13'),
(21, 13, 'Sim', 'padrao12/13'),
(22, 13, 'Não', 'padrao9/13'),
(23, 14, 'Sim', 'simid14'),
(24, 14, 'Não', 'naoid14'),
(25, 15, 'Login e Senha', 'padrao10/15'),
(26, 15, 'Código de Verificação', 'padrao10/15'),
(27, 16, 'Sim', 'padrao16'),
(28, 16, 'Não', 'padrao16'),
(29, 17, 'Terminar!', 'terminar'),
(30, 18, 'Sim', 'simid18'),
(31, 18, 'Não', 'naoid18'),
(32, 19, 'Sim', 'padrao19/27'),
(33, 19, 'Não', 'padrao19/22'),
(34, 20, 'Terminar!', 'terminar'),
(35, 21, 'Login e Senha', 'padrao21'),
(36, 21, 'CPF ou Nº de conta do Banco/Cartão de credito..', 'padrao21'),
(37, 22, 'Sim', 'padrao22/27'),
(38, 22, 'Não', 'padrao19/22'),
(39, 23, 'Sim', 'simid23'),
(40, 23, 'Não', 'naoid23'),
(41, 25, 'Sim', 'padrao23/25'),
(42, 25, 'Não', 'naoid25'),
(43, 26, 'Terminar!', 'terminar'),
(44, 24, 'Terminar!', 'terminar'),
(45, 27, 'Sim', 'padrao19/27'),
(46, 27, 'Não', 'padrao19/22');

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
  ADD KEY `fk_id_pergunta` (`fk_id_pergunta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  MODIFY `id_reposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD CONSTRAINT `tb_respostas_ibfk_1` FOREIGN KEY (`fk_id_pergunta`) REFERENCES `tb_questoes` (`id_pergunta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
