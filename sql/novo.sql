CREATE TABLE `tb_questoes` (
  `id_pergunta` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(300) NOT NULL,
  `resp_chamada` varchar(200) NOT NULL,
   PRIMARY KEY (`id_pergunta`)
);

CREATE TABLE `tb_respostas` (
  `id_reposta` int(11) NOT NULL,
  `fk_id_pergunta` int(11) NOT NULL,
  `resp_return` varchar(200)  NOT NULL,
  `valor` varchar(200)  NOT NULL,
   PRIMARY KEY(`id_resposta`),
   CONSTRAINT `tb_respostas_ibfk_1` FOREIGN KEY (`fK_id_pergunta`) REFERENCES `tb_questoes` (`id_pergunta`)
);