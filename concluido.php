<?php include('topo.php')?>

<?php

$empresa = $_GET['empresa'];
$telefone = $_GET['telefone'];
$responsavel = $_GET['nome_do_contato'];
$email = $_GET['email'];
$tellbox = isset($_GET['tellbox']) ? $_GET['tellbox'] : "não";
$webcred = isset($_GET['webcred']) ? $_GET['webcred'] : "não";

include('conecta.php');

$query = "INSERT INTO dados_cadastrais (empresa, telefone, responsavel, email, tellbox, webcred) VALUES ('{$empresa}' , '{$telefone}', '{$responsavel}', '{$email}', '{$tellbox}', '{$webcred}')";

mysqli_set_charset($conexao,"utf8");

mysqli_query($conexao, $query);

mysqli_close($conexao);

?>
</br></br><div id="bloco_form">
	<table class="table table-striped"  border="1">
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
	</table>
</div>

<?php include('bot.php')?>