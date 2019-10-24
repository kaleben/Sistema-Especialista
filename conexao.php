<?php 

class Conexao {

	private $host = 'localhost';
	private $dbname = 'facul';
	private $user = 'root';
	private $pass = '';

	public function conectar() {

		try {

			$conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->user", "$this->pass");

			return $conn;

		} catch(PDOException $e) {
			echo 'Erro de conexão: ' . $e->getMessage();
		}

	}

}






?>