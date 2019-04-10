<?php 
	session_start();

	require_once('db.php');

	$id = $_SESSION['id'];

	$query = "SELECT * FROM usuarios WHERE id= '$id' ";

	$objdb = new db();
	$link = $objdb -> conecta_mysql();

	$resultado = mysqli_query($link, $query);
	
	$user = mysqli_fetch_array($resultado);

	//Verifica se o usuario é admin
	

	//Verifica se o usuario possui dados
	if(!isset($user['nome_completo'])){
		header('location: index.php?erro=1');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Consultas de empresas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css/estilo.css">
	<link rel="stylesheet" type="text/js"  href="js/js/meu-js.js">

</head>
<body>

	<div class="container-fluid" id="meu-container">

		<ul class="fixed-top nav-light bg-light" id="meu-menu">
			<li class="nav-item float-left">
		    	<a class="nav-link active font-weight-bold" href="dashboard.php">Tudo aqui!</a>
		    </li>

		        <li class="nav-item dropdown float-left">
		    	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Chamados</a>
		    	<div class="dropdown-menu">
		    		<a class="dropdown-item fundo-click" href="cadastrar-chamado.php">Novo chamado</a>
		      		<a class="dropdown-item fundo-click" href="chamados.php">Ver todos</a>
		    	</div>
		    </li>

		    <li class="nav-item float-left">
		    	<a class="nav-link" href="consultar-empresas.php">Empresas</a>
		    </li>

		  	<?php
		    	if($user['admin'] == 1){
			?>	
				<li class="nav-item  float-left">
		    	<a class="nav-link dropdown-toggle"data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administração</a>
		    	<div class="dropdown-menu">
		      		<a class="dropdown-item fundo-click" href="usuarios.php">Ver usuarios</a>
		      		<a class="dropdown-item fundo-click" href="cadastrar-usuario.php">Cadastrar usuario</a>
		      		<a class="dropdown-item fundo-click" href="cadastrar-empresa.php">Cadastrar empresa</a>
		    	</div>
		    </li>

			<?php } ?>
		    


		    <li class="nav-item dropdown float-right">
		    	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Olá, <?= $user['nome_completo'] ?></a>
		    	<div class="dropdown-menu">
		      		<a class="dropdown-item fundo-click" href="meu-perfil.php?id=<?=$id?>">Meu Perfil</a>
		      		<a class="dropdown-item fundo-click" href="index.php">Sair</a>
		    	</div>
		    </li>

		</ul>
			
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  