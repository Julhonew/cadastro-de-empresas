<?php include('topo.php')?>
<?php include('conecta.php');

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

<script type="text/javascript">
	

	function caixaTexto(mostrar){
		
		if(mostrar == "em progresso"){
			//Abre uma textarea e dois input text
			document.getElementById('progresso').style.display='block';
			document.getElementById('falar').style.display='block';
			document.getElementById('tel').style.display='block';
		}else{
			//Abre uma textarea
			document.getElementById('progresso').style.display='none';
			document.getElementById('falar').style.display='none';
			document.getElementById('tel').style.display='none';
		}

		if(mostrar == "solucionado" ){
			document.getElementById('solucao').style.display='block';
		}else{
			document.getElementById('solucao').style.display='none';
		}

}	

</script>

<div class="col-md-6" id="bloco_form" >

	<form action="cadastro-chamado-concluido.php" method="post">
		<h1>Chamado</h1>
		<div class="form-group">

			<div>
				<label>Empresa</label>
				<select class="form-control" name="empresa">
					<option></option>
					<?php
					foreach($dados as $dado){	
					?>		
						<option value= "<?=$dado['empresa']?>" ><?= $dado['empresa'] ?></option>
					<?php
					}
					?>
				</select>
			</div>

			</div>	
			
			<div class="form-row">
				<div class="form-group">
					<label>Data</label>
					<input type="date" class="form-control col-md-11" name="data">
				</div>		
				<div class="form-group col-xs-1">
					<label>Horario</label>
					<input type="time" class="form-control" name="hora">	
				</div>
				<div class="form-group col-xs-4">
					<label class="mt-1 ml-2">Relacionado:</label></br>
					<label class="form-check-label ml-2 mt-1">Tellbox:</label>
						<input type="checkbox" name="tellbox" value="sim">
					<label class="form-check-label ml-2 mt-1">WebCred:</label>
						<input type="checkbox" name="webcred" value="sim">
				</div>
			</div>


			<div class="form-group">
				<label>Tratado com:</label>
				<input type="text" class="form-control" name="nome_do_contato"></td>
			</div>


			<center><h6>Conteudo do chamado</h6></center>

			<div class="form-group">
				<label>Titulo</label>
				<input class="form-control" type="text" name="titulo">
			</div>
			
			<div class="form-group">
	    		<label>Relatado:</label>
	   			<textarea class="form-control" rows="3" name="relatado"></textarea>
	  		</div>

	  		<div class="form-group col-xs-4">
				<label class="form-check-label">Solucionado:</label>
					<input type="radio" name="status" value="SOLUCIONADO" id="solucionado"  onclick="caixaTexto('solucionado')">
				<label class="form-check-label ml-2">Em progresso:</label>
					<input type="radio" name="status" value="EM PROGRESSO" id="em_progresso" onclick="caixaTexto('em progresso')">	
			</div>

			<div class="form-group">
	   			<textarea class="form-control visor" id="solucao"   name="solucao" rows="3" placeholder="Solução" ></textarea>
	   			<textarea class="form-control visor" id="progresso" name="progresso" rows="3" placeholder="Status do progresso" ></textarea>
	  		</div>

	  		<div class="form-row">
				<div class="form-group visor" id="falar">
					<label class="ml-1">Falar com:</label>
						<input type="text form-control" name="nome_retorno">
				</div>
				<div class="form-group visor" id="tel">
					<label class="ml-2">Telefone:</label>
						<input type="text form-control" name="tel_retorno">
				</div>
			</div>

			<div>
				<center><input class="btn btn-success" type="submit" value="cadastrar"></center>
			</div>
		</div>
		
	</form>
</div>

<?php include('bot.php')?>