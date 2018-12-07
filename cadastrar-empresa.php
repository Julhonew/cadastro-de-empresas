<?php include('topo.php')?>
</br><div class="col-xs-8" id="bloco_form">
	<form action="concluido.php" method="get">
		<table class="table" border="1">
			<tr>
				<td><label>Empresa</label>
				<input type="text" class="form-control" name="empresa"></td>
			</tr>
			<tr>
				<td><label>Telefone</label>
				<input type="text" class="form-control" name="telefone"></td>
			</tr>
			<tr>
				<td><label>Responsavel</label>
				<input type="text" class="form-control" name="nome_do_contato"></td>
			</tr>
			<tr>
				<td><label>Email</label>
				<input type="text" class="form-control" name="email"></td>
			</tr>
			<tr>
				<td ><label>TellBox:</label>
				<input type="checkbox" name="tellbox" value="sim"></td>
			</tr>
			<tr>
				<td><label>WebCred: </label>
				<input type="checkbox" name="webcred" value="sim"></td>
			</tr>
			<tr>
			<td rowspan="2"><center><input class="btn btn-success" type="submit" name="cadastrar" value="cadastrar"></center></tr>
			<tr>
		</table>
		
	</form>
</div>

<?php include('bot.php')?>