<?php  include('topo.php');
	
	require_once('db.php');

	$id = $_POST['id'];
	$alterar = isset($_POST['alterar']);
	$excluir = isset($_POST['excluir']);

	if(isset($alterar) && $alterar == "Alterar" ){
	
	$query = "SELECT * FROM usuarios WHERE id = '$id'";

	$objdb = new db();
	$link = $objdb -> conecta_mysql();

	$resultado = mysqli_query($link, $query);

	$user = mysqli_fetch_array($resultado);

	}else{
		echo "usuario excluido";
		die();
	}

?>

<div class="col-md-6" id="bloco_form" >

	<form action="update-usuario.php" method="post">
		<h1>Alterar dados de usuarios</h1>

			<input type="hidden" name="id" value="<?= $id ?>" >

			<div class="form-group">
				<label>Nome:</label>
				<input type="text" class="form-control" name="nome" value="<?= $user['nome_completo']?>"></td>
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="text" class="form-control" name="email" value="<?=$user['email']?>">
			</div>

			<div class="form-group ">
				<label>Data de nascimento:</label>
				<input type="date" class="form-control col-md-3" name="data" value="<?= $user['data_nasc'] ?>">
			</div>
			
			<div class="form-row">
				<div class="form-group" id="login">
					<label class="ml-1">Login: </label>
						<input type="text" class="form-control ml-1" name="login" value="<?= $user['login'] ?>">
				</div>
				<div class="form-group" id="senha">
					<label class="ml-5">Nova Senha:</label>
						<input type="text" class="form-control ml-5" name="senha" >
				</div>
			</div>


			<div>
				<center><input class="btn btn-success" type="submit" value="Salvar"></center>
			</div>
		</div>
		
	</form>

</div>

<?php include('bot.php')?>