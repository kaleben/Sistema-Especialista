<?php 

class Resposta {

	public $fk_pergunta;
	public $resposta;
	public $value;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}
}


?>