<?php 
	
	session_start();

	
	require_once('db.php');

	$login = $_POST['login'];
	$senha = md5($_POST['senha']); 

	//Consulta os dados de login no banco de dados
	$query = "SELECT * FROM usuarios WHERE login = '{$login}' AND senha = '{$senha}' ";

	$objdb = new db();
	$link = $objdb -> conecta_mysql();

	$resultado_id = mysqli_query($link, $query);

	//Verifica se existe usuario
	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		//Verifica se usuario existe
		if(isset($dados_usuario['nome_completo'])){
			//Redireciona para dashboard
			header('location: dashboard.php');
			   $_SESSION['id'] = $dados_usuario['id'];

		}else{
			//Volta para o index
			header('location: index.php?erro=1');

		}

	}else{
		//Caso haja falha na conexão com o banco
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
		header('location: index.php');
		
	}

?>