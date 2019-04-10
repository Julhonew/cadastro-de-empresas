<?php

	if(isset($_POST['$email']) && !empty($_POST['$email'])){
	
		$nome  = addslashes($_POST['$nome']);
		$email = addslashes($_POST['#email']);
		$login = addslashes($_POST['$login']);
		$senha = addslashes($_POST['senha']);

		$mensagem = "test";

		$para = $email;
		$assunto = "Confirmação de cadastro - TUDO AQUI!";
		$body = "Olá, você foi cadastrado no site TUDO AQUI!"."\r\n". 
		"Esses foram os dados cadastrados:"."\r\r\n\n".
		
		"Nome: ".$nome.""."\r\n".
		"$email: ".$email.""."\r\r\n\n".
		
		"Login: ".$login.""."\r\n".
		"Senha: ".$senha.""."\r\r\n\n".
		
		
		"Para confirmar seu cadastro clique no segui a seguir."."\r\n";

		$header = "From:ftp://192.168.100.3"."\r\n".
					"Reply-to: ftp://192.168.100.3"."\r\n";


	if(mail($para,$assunto,$body,$header)){
		echo("Email enviado com sucesso");
	}else{
		echo("Email não enviado");
	}
	

	// }else{
	// 	header('location: cadastrar-usuario.php?erro=1');
	// }


?>