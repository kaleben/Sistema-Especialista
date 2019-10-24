<?php 

class Questao {

	public $pergunta;
	public $resposta;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}


?>