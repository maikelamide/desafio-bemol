function validarSenhaForca(){
	var senha = document.getElementById('senha').value;
	var forca = 0;
	//document.getElementById("impSenha").innerHTML = "Senha " + senha;
	if((senha.length >= 4) && (senha.length <= 7)){
		forca += 10;
	}else if(senha.length > 7){
		forca += 25;
	}
	if((senha.length >= 5) && (senha.match(/[a-z]+/))){
		forca += 10;
	}
	if((senha.length >= 6) && (senha.match(/[A-Z]+/))){
		forca += 20;
	}
	if((senha.length >= 7) && (senha.match(/[@#$%&;*]/))){
		forca += 25;
	}
	if(senha.match(/([1-9]+)\1{1,}/)){
		forca += -25;
	}
	mostrarForca(forca);
}

function mostrarForca(forca){
	//document.getElementById("impForcaSenha").innerHTML = "Força: " + forca;

	if(forca < 30 ){
		document.getElementById("msg3").innerHTML = "<span style='color: #ff0000'>Força da senha: Fraca</span>";
	}else if((forca >= 30) && (forca < 50)){
		document.getElementById("msg3").innerHTML = "<span style='color: #FFD700'>Força da senha: Média</span>";
	}else if((forca >= 50) && (forca < 70)){
		document.getElementById("msg3").innerHTML = "<span style='color: #7FFF00'>Força da senha: Forte</span>";
	}else if((forca >= 70) && (forca < 100)){
		document.getElementById("msg3").innerHTML = "<span style='color: #008000'>Força da senha: Excelente</span>";
	}
}