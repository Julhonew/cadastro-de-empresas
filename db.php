<?php

class db{

	//host
	private $host = 'localhost'; 

	//usuario
	private $usuario = 'root';

	//senha
	private $senha = '';

	//banco de dados
	private $database = 'empresas';

		public function conecta_mysql(){

			//criar a conexao 
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			//ajusta o charset de comunicação entre a aplicação e o banco de dados
			mysqli_set_charset($con , 'utf-8');

			//verificar se houve erro de conexão
			if(mysqli_connect_errno()){
				echo 'Erro ao tentar se conectar com o banco: ' .mysqli_connect_error();
			}

			return $con;

		}

}

?>