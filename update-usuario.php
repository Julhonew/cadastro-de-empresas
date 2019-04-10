<?php 

	session_start();

	require_once('db.php');

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$login = $_POST['login'];
	
	//Se existir valor na variavel senha faça
	if(isset($_POST['senha'])){
		//Recebe a senha, criptografa, constroi comando
		$senha = md5($_POST['senha']);
		$alter = ", senha = '$senha' ";
	}else{
		//Passa uma string vazia para que não haja nenhum alteração
		$alter = ' ';
	}

	//Faz a alteração nos dados enviados 
	$query = "UPDATE usuarios SET nome_completo = '$nome', email = '$email', data_nasc = '$data', login = '$login' $alter WHERE id = '$id' ";


	$objdb = new db();
	$link = $objdb -> conecta_mysql();

	$resultado = mysqli_query($link, $query);

	header('location: dashboard.php');

?>

