<?php include('topo.php')?>

<?php
	
	// require_once('db.php');

$nome = $_POST['nome_usuario'];
$data = $_POST['data'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$admin = $_POST['admin'];

if($admin == 1){
	$adm = "sim";
}else{
	$adm = "não";
}

include('conecta.php');

$query = "INSERT INTO usuarios (nome_completo, email , login , senha, data_nasc, admin) VALUES ('{$nome}' , '{$email}', '{$login}', '{$senha}', '{$data}', '{$admin}')";

	// $objdb = new db();
	// $link = $objdb -> mysqli_query($link, $query);

mysqli_set_charset($conexao,"utf8");

mysqli_query($conexao, $query);

mysqli_close($conexao);

?>
<h1>Empresa cadastrada</h1>
<div id="bloco_form">
	<table class="table table-striped" id="meu-form-cadastro" border="1">
		<tr>
			<td><p>Nome completo</p></td> 
			<td><p><?= $nome ?></p></td>
		</tr>
		<tr>
			<td><p>Data</p></td> 
			<td><p><?= date('d/m/Y', strtotime($data))?></p></td>
		</tr>
		<tr>
			<td><p>Email</p></td> 
			<td><p><?= $email ?></p></td>
		</tr>
		<tr>
			<td><p>Login</p></td> 
			<td><p><?= $login ?></p></td>
		</tr>
		<tr>
			<td><p>Email</p></td> 
			<td><p><?= $email ?></p></td>
		</tr>
		<tr>
			<td><p>Administrador:</p></td> 
			<td><p><?= $adm ?></p></td>
		</tr>

		<tr>
			<td colspan="2" align="center">
				<a href="cadastrar-usuario.php"><input class="btn btn-sucess" type="button" value="Voltar"></a>
				<a href="editar-empresa.php"><input type="button" class="btn btn-info" value="Editar"></a>
				<a href="#"><input type="button" class="btn btn-danger" value="Cancelar"></a>
			</td>	
		</tr>
	</table>
</div>

<?php include('bot.php')?>