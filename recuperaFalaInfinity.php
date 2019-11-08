<?php 

// echo json_encode([ 0 => ["asdfasd"]]);
// exit;

// require "questao.php";
// require "resposta.php";
// require "questao.service.php";
require "conexao.php";



// $questao = new Questao();
// $resposta = new Resposta();
$con = new Conexao();

// $questao->__set('resposta', $_POST['resposta']);
// $questao->__set('resposta', $_GET['resposta']); 

// $questaoService = new QuestaoService($conexao, $questao, $resposta);
// $questoes = $questaoService->recuperar();

$conexao = $con->conectar();

$query = "
		SELECT 
			q.pergunta, r.resp_return, r.valor
		FROM 
			tb_questoes as q 
		INNER JOIN 
			tb_respostas as r 
		ON 
			(q.id_pergunta = r.fk_id_pergunta)
		WHERE 
			q.resp_chamada = :valor
		";

		$stmt = $conexao->prepare($query);
		$stmt->bindValue(':valor',$_GET['resposta'] );
		$stmt->execute();
$rs = $stmt->fetchAll(PDO::FETCH_OBJ);
 
var_dump($rs[1]);
// header('Content-Type: text/html; charset=utf-8');
//    print_r($rs);
//  echo json_encode([ 0 => ["nao"]]);

// header("content-type:application/json; charset=utf-8");
// echo json_encode($rs);
exit;
?>