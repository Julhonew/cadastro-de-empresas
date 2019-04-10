<?php include('topo.php')?>


<div class="col-xs-12" id="bloco_form" >

	<form action="cadastro-usuario-concluido.php" method="POST">
		<h1>Cadastre um usuario</h1>
		<table class="table" border="1" id="meu-form-cadastro" >
			<tr>
				<td><label>Nome completo:</label>
				<input type="text" class="form-control" name="nome_usuario"></td>
			</tr>
			<tr>
				<td><label>Data de nascimento:</label>
				<input type="date" class="col-md-2 form-control-plaintext " name="data" maxlength="8"></td>
			</tr>
			<tr>
				<td><label>Email:</label>
				<input type="email" class="form-control" name="email"></td>
			</tr>
			<tr>
				<td><label>Login:</label>
				<input type="text" class="form-control" name="login"></td>
			</tr>
			<tr>
				<td><label>Senha</label>
				<input type="password" class="form-control" name="senha"></td>
			</tr>
			<tr>
				<td><label>Administrador: </label>

					<label class="ml-3">Sim: </label>
					<input type="radio" name="admin" value="1">
			
					<label class="ml-1">Não: </label>
					<input type="radio" name="admin" value="0" checked>
				</td>

			</tr>
			<tr>
			<td rowspan="2"><center><input class="btn btn-success" type="submit" name="cadastrar" value="cadastrar"></center></tr>
			<tr>
		</table>
		
	</form>
</div>

<?php include('bot.php')?>