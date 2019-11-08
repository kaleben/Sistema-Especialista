<?php 

require "questao.php";
require "resposta.php";
require "questao.service.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;


if ($acao == 'recuperaFalaInfinity') {
	
	$questao = new Questao();
	$resposta = new Resposta();
	$conexao = new Conexao();

	$questao->__set('resposta', $_POST['resposta']);

	$questaoService = new QuestaoService($conexao, $questao, $resposta);
	$questoes = $questaoService->recuperar();

	// print_r($questoes);
	echo json_encode($questoes);

} else if ($acao == 'inserirPergunta') {
	
	$questao = new Questao();

	$questao->__set('pergunta', $_POST['pergunta']);
	$questao->__set('resposta', $_POST['resposta_chamada']);

	$conexao = new Conexao();
	$resposta = new Resposta();

	$questaoService = new QuestaoService($conexao, $questao, $resposta);
	$questaoService->inserirPergunta();

} else if ($acao == 'inserirResposta'){

	$resposta = new Resposta();

	$resposta->__set('fk_pergunta', $_POST['id_pergunta']);
	$resposta->__set('resposta', $_POST['nova_resposta']);
	$resposta->__set('value', $_POST['valor_resposta']);

	$conexao = new Conexao();
	$questao = new Questao();

	$questaoService = new QuestaoService($conexao, $questao, $resposta);
	$questaoService->inserirResposta();

} else if ($acao == 'recuperaAll') {

	$questao = new Questao();
	$conexao = new Conexao();
	$resposta = new Resposta();

	$questaoService = new QuestaoService($conexao, $questao, $resposta);
	$questoes = $questaoService->recuperaAll();

} else if ($acao == 'recuperaPerguntas') {

	$questao = new Questao();
	$conexao = new Conexao();
	$resposta = new Resposta();

	$questaoService = new QuestaoService($conexao, $questao, $resposta);
	$questoes = $questaoService->recuperaPerguntas();

}




////////////////////////////////////////////////////////////////

	/*if ($acao == 'inserirPergunta'){

		//ADICIONAR FILTRO PARA EVITAR TAREFAS DUPLICADAS

		$questao = new Questao();

		$questao->__set('pergunta', $_POST['pergunta']);
		$questao->__set('resposta', $_POST['resposta_chamada']);

		$conexao = new Conexao();

		$questaoService = new QuestaoService($conexao, $questao);
		$questaoService->inserirPergunta();

		header('Location: inserir.php?inclusao=questsuccess');

	} else if ($acao == 'inserirResposta'){

		//ADICIONAR FILTRO PARA EVITAR TAREFAS DUPLICADAS

		$resposta = new Resposta();

		$resposta->__set('fk_pergunta', $_POST['id_pergunta']);
		$resposta->__set('resposta', $_POST['nova_resposta']);
		$resposta->__set('value', $_POST['valor_reposta']);

		$conexao = new Conexao();

		$questaoService = new QuestaoService($conexao, , $resposta);
		$questaoService->inserirResposta();

		header('Location: inserir.php?inclusao=respsuccess');
	}


		*/
	
	

	
	?>