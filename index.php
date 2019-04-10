<!DOCTYPE html>
<html>
<head>
	<title>Consultas de empresas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css/estilo.css">

<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<script>
	
	function verifica(){

			if(document.getElementById('login').value == '' && document.getElementById('senha').value == ''){
				alert('Existem campos não preenchido');
			}

			else if(document.getElementById('login').value == ''){
					alert('Login não preenchido');
				}

			else if(document.getElementById('senha').value == ''){
					alert('Senha não preenchida');
			}
			
	}

</script>

</head>
<body>
	<div id="container-login" class="container-fluid">
		
		<form id="meu-form-login" action="validacao-usuario.php" method="POST">
			<table class="table">
				<tr>
					<label>Login:</label>
					<input class= "form-control" type="text" name="login" id="login"></form></br>
						
					<label class="label">Senha:</label>
					<input class= "form-control" type="password" name="senha" id="senha"></br>
						
					<center><input class="btn" type="submit" value="entrar" onclick="verifica()"></center>	
				</tr>	
	    	</table>
		</form>	  

		<?php

			if ($erro == 1) {
				echo '<font color="red">usuario ou senha incorreto</font>';
			}

		?>

   </div>
</body>
</html>