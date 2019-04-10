function caixaTexto(mostrar){
		
		if(mostrar == '0'){
			document.getElementById('progresso').style.display='block';
			document.getElementById('falar').style.display='block';
			document.getElementById('tel').style.display='block';
		}else{
			document.getElementById('progresso').style.display='none';
			document.getElementById('falar').style.display='none';
			document.getElementById('tel').style.display='none';
		}

		if(mostrar == '1' ){
			document.getElementById('solucao').style.display='block';
		}else{
			document.getElementById('solucao').style.display='none';
		}

}	