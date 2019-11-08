<?php 

class Conexao {

	private $host = 'localhost';
	private $dbname = 'facu';
	private $user = 'root';
	private $pass = '';

	public function conectar() {

		try {

			$conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->user", "$this->pass");
			$conn->exec("SET CHARACTER SET utf8");
			return $conn;

		} catch(PDOException $e) {
			echo 'Erro de conexão: ' . $e->getMessage();
		}

	}

}






?>