<?php 
include('topo.php');
include('conecta.php');
 
function consultarEmpresas($conexao){
	$dados = [];

	$resultado = mysqli_query($conexao, "SELECT * FROM chamados");
	while($dado = mysqli_fetch_assoc($resultado)){
		array_push($dados, $dado);

	}

	return $dados;
}

mysqli_set_charset($conexao,"utf8");

$dados = consultarEmpresas($conexao);
?>
	<form>
		<table id="form-table-pesquisar">
			<tr>
				<td>
					<input class="form-control" type="text" name="campo-pesquisar" placeholder = "Empresa">
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
			<th class = "td-center">Titulo</td>
			<th class = "td-center">Empresa</td>
			<th class = "td-center">Status</td>
			<th class = "td-center">Tellbox</td>
			<th class = "td-center">WebCred</td>
			<th class = "td-center" width="300px">Opções</td>
		</tr>
	</thead>
<?php
	foreach($dados as $dado){	
?>		
	<tr>
		<td class = "td-center"><p><?= $dado['titulo']?></p></td>
		<td class = "td-center"><?= $dado['empresa']?></td>
		<td class = "td-center"><p><?= $dado['status'] ?></p></td>
		<td class = "td-center"><p><?= $dado['tellbox'] ?></p></td>
		<td class = "td-center"><p><?= $dado['webcred'] ?></p></td>
		<th class = "td-center" width="300px">
			<input class="btn btn-info"    type="button" value="Chamados">
			<input class="btn btn-default" type="button" value="Editar">
			<input class="btn btn-danger"  type="button" value="X">
		</td>
	</tr>
<?php
	}
?>
</table>

<?php include('bot.php')?>






