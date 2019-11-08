<?php 

	require "questao.php";
	require "resposta.php";
	require "questao.service.php";
	require "conexao.php";

	$questao = new Questao();
			$conexao = new Conexao();
			$resposta = new Resposta();

			$questaoService = new QuestaoService($conexao, $questao, $resposta);
			$questoes = $questaoService->recuperaPerguntas();

			//print_r($questoes);

?>