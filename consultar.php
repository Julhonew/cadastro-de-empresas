<?php 
include('topo.php');
include('conecta.php');

header('Content-Type: text/html; charset=utf-8');
 
function consultarEmpresas($conexao){
	$dados = [];

	$resultado = mysqli_query($conexao, "SELECT * FROM dados_cadastrais");
	while($dado = mysqli_fetch_assoc($resultado)){
		array_push($dados, $dado);

	}
mysqli_set_charset($conexao,"utf8");
	return $dados;
}



$dados = consultarEmpresas($conexao);

foreach($dados as $dado){
	echo $dado['empresa'], '</br>';
	echo $dado['telefone'], '</br>';
	echo $dado['responsavel'], '</br>';
	echo $dado['email'], '</br>';
	echo $dado['tellbox'], '</br>';
	echo $dado['webcred'], '</br> </br>';
}

?>







<?php include('bot.php')?>