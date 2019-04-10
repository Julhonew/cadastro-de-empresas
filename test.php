<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>

		<ul class="nav fixed-top nav-light bg-light nav-pills" id="meu-menu">
		  <li class="nav-item">
		    <a class="nav-link active font-weight-bold" href="dashboard.php">Tudo aqui!</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="consultar-empresas.php">Empresas</a>
		  </li>

		  <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Chamados</a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="chamados.php">Ver todos</a>
		      <a class="dropdown-item" href="cadastrar-chamado.php">Novo chamado</a>
		    </div>
		  </li>

		  <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administração</a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="usuarios.php">Ver usuarios</a>
		      <a class="dropdown-item" href="cadastrar-usuario.php">Cadastrar usuario</a>
		      <a class="dropdown-item" href="cadastrar-empresa.php">Cadastrar empresa</a>
		    </div>
		  </li>
		  <li class="nav-item justify-content-end ">
		    	<a class="nav-link" href="consultar-empresas.php">Olá, <?= $nome?></a>
		    	<button class="btn btn-danger">logoff</button>
		  </li>
		</ul>	

</body>
</html>