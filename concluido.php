<?php include('topo.php')?>

<?php

$empresa = $_POST['empresa'];
$telefone = $_POST['telefone'];
$responsavel = $_POST['nome_do_contato'];
$email = $_POST['email'];
$tellbox = isset($_POST['tellbox']) ? $_POST['tellbox'] : "não";
$webcred = isset($_POST['webcred']) ? $_POST['webcred'] : "não";

include('conecta.php');

$query = "INSERT INTO dados_cadastrais (empresa, telefone, responsavel, email, tellbox, webcred) VALUES ('".addslashes($empresa)."' , '$telefone', '".addslashes($responsavel)."', '$email', '$tellbox', '$webcred')";

mysqli_set_charset($conexao,"utf8");

$resultado = mysqli_query($conexao, $query);

mysqli_close($conexao);

if($resultado){
?>
<h1>Empresa cadastrada</h1>
<div id="bloco_form">
	<table class="table table-striped" id="meu-form-cadastro" border="1">
		<tr>
			<td><p>Empresa</p></td> 
			<td><p><?= $empresa ?></p></td>
		</tr>
		<tr>
			<td><p>Telefone</p></td> 
			<td><p><?= $telefone ?></p></td>
		</tr>
		<tr>
			<td><p>Responsavel</p></td> 
			<td><p><?= $responsavel ?></p></td>
		</tr>
		<tr>
			<td><p>Email</p></td> 
			<td><p><?= $email ?></p></td>
		</tr>
		<tr>
			<td><p>TellBox</p></td> 
			<td><p><?= $tellbox ?></p></td>
		</tr>
		<tr>
			<td><p>WebCred</p></td> 
			<td><p><?= $webcred ?></p></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<a href="cadastrar-empresa.php"><input class="btn btn-sucess" type="button" value="Voltar"></a>
				<a href="editar-empresa.php"><input type="button" class="btn btn-info" value="Editar"></a>
				<a href="#"><input type="button" class="btn btn-danger" value="Cancelar"></a>
			</td>	
		</tr>
	</table>
</div>
<?php
}else{
?>
 <h1>Empresa não cadastrada</h1>
<?php 	
}
?>
<?php include('bot.php')?>