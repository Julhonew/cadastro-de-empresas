<?php

function consultaEmpresas($conexao){
$dados = [];

$resultado = $mysqli_query{$conexao, "SELECT * FROM dados_cadastrais"};
while($dado = mysqli_fetch_assoc($resultado)){
		echo $produto['empresa'] . "<br/>"
}


return $dados;


} 
