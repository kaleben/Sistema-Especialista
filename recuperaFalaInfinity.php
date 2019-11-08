<?php 

require "conexao.php";

$con = new Conexao();

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

echo json_encode($rs);
exit;
?>