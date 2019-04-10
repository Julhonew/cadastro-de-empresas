<?php 
include('topo.php');
include('conecta.php');
 
function consultaUsuarios($conexao){
	$dados = [];

	$resultado = mysqli_query($conexao, "SELECT * FROM usuarios");
	while($dado = mysqli_fetch_assoc($resultado)){
		array_push($dados, $dado);

	}

	return $dados;
}

mysqli_set_charset($conexao,"utf8");

$dados = consultaUsuarios($conexao);
?>
	<form>
		<table id="form-table-pesquisar">
			<tr>
				<td>
					<input class="form-control" type="text" name="campo-pesquisar" placeholder = "Usuario">
				</td>
				<td>
					<input class="btn" type="button" value="pesquisar" id="btn-pesquisar" >
				</td>
			</tr>
		</table>
	</form>
</br>

<table class="table table-striped"  border="1">
	<thead class="thead-dark">
		<tr >
			<th class = "td-center">Nome</td>
			<th class = "td-center">Email</td>
			<th class = "td-center">Login</td>
			<th class = "td-center" width="300px">Opções</td>
		</tr>
	</thead>
<?php
	foreach($dados as $dado){	
?>		
	<tr>
		<td class = "td-center"><p><?= $dado['nome_completo'] ?></p></td>
		<td class = "td-center"><p><?= $dado['email']?></p></td>
		<td class = "td-center"><p><?= $dado['login'] ?></p></td>
		<th class = "td-center" width="300px">
			<form action="modify-users.php" method="POST">
				<input type="hidden" value="<?=$dado['id']?>" name="id">
				<input class="btn btn-default" type="submit" name="alterar" value="Alterar">
				<input class="btn btn-danger"  type="submit" name="excluir" value="X">
			</form>
		</td>
	</tr>
<?php
	}
?>
</table>

<?php include('bot.php')?>






