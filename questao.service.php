<?php 
	//CRUD
class QuestaoService {

	private $conexao;
	private $questao;

	public function __construct(Conexao $conexao, Questao $questao, Resposta $resposta) {
		$this->conexao = $conexao->conectar();
		$this->questao = $questao;
		$this->resposta = $resposta;
	}

	public function recuperar() {

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

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':valor', $this->questao->__get('resposta'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function inserirPergunta(){
		$query = "INSERT INTO tb_questoes(pergunta, resp_chamada) VALUES(:pergunta, :resp_chamada)";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':pergunta', $this->questao->__get('pergunta'));
		$stmt->bindValue(':resp_chamada', $this->questao->__get('resposta'));
		$stmt->execute();
	}

	public function inserirResposta(){
		$query = "INSERT INTO tb_respostas(fk_id_pergunta, resp_return, valor) VALUES(:id_pergunta, :resposta, :valor)";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_pergunta', $this->resposta->__get('fk_pergunta'));
		$stmt->bindValue(':resposta', $this->resposta->__get('resposta'));
		$stmt->bindValue(':valor', $this->resposta->__get('value'));
		$stmt->execute();
	}

	public function recuperaPerguntas() {

		$query = "
		SELECT 
			id_pergunta, pergunta
		FROM 
			tb_questoes
		";

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function recuperaAll() {

		$query = "
		SELECT 
			q.pergunta, q.id_pergunta, r.resp_return, r.valor
		FROM 
			tb_questoes as q 
		INNER JOIN 
			tb_respostas as r 
		ON 
			(q.id_pergunta = r.fk_id_pergunta)
		";

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	
}

?>