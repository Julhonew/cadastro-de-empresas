<?php include('topo.php')?>

<?php

$empresa = $_POST['empresa'];
$data = date("Y-m-d",strtotime($_POST['data']));
$hora = $_POST['hora'];
$tellbox = isset($_POST['tellbox']) ? $_POST['tellbox'] : "-";
$webcred = isset($_POST['webcred']) ? $_POST['webcred'] : "-";
$nome_do_contato = $_POST['nome_do_contato'];
$titulo = $_POST['titulo'];
$relatado = $_POST['relatado'];
$status = $_POST['status'];
$solucao = $_POST['solucao'];
$progresso = $_POST['progresso'];
$nome_retorno = $_POST['nome_retorno'];
$tel_retorno = $_POST['tel_retorno'];



include('conecta.php');

$query = "INSERT INTO chamados (empresa,
 								data,
  								hora,
								tellbox,
    							webcred,
     							nome_do_contato,
      							titulo,
      							relatado,
      		 					status,
      		 					solucao,
        						progresso,
         						nome_retorno,
          						tel_retorno  
          				)VALUES(				         
				                '{$empresa}',
				         	     {$data},
				         	    '{$hora}',
				         	    '{$tellbox}',
				         	    '{$webcred}',
				         	    '{$nome_do_contato}',
				         	    '{$titulo}',
				         	    '{$relatado}',
				         	    '{$status}',
				         	    '{$solucao}',
				         	    '{$progresso}',
				         	    '{$nome_retorno}',
				         	    '{$tel_retorno}')";

mysqli_set_charset($conexao,"utf8");

mysqli_query($conexao, $query);

mysqli_close($conexao);

header('location: chamados.php');
die();

?>