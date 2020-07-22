<?php
    session_start();
    include_once("./connection.php");
	$msg = false;
    //Receber os dados do formulário
    $nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
	$estado = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
	$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
	
	$execute = mysqli_query($connect," INSERT INTO usuarios(nomeCompleto, dataNascimento, cpf, cep, estado, cidade, rua, numero, bairro, email, senha) VALUES ('$nomeCompleto', '$dataNascimento', '$cpf', '$cep', '$estado', '$cidade', '$rua', '$numero', '$bairro', '$email', '$senha')");	
	
	//Verifica se foi salvo
	if(mysqli_affected_rows($connect) > 0){  ?>
		<script>
			//alert('Cadastro realizado com sucesso!');
			document.location.href = '../cadastro-concluido';
		</script>
		<?php
	exit;
	}else{  
		$erro = mysqli_errno($connect);
	?>
		<script>
			alert('Ops, algo deu errado. Tente novamente! <?php echo $erro; ?>');
			document.location.href = '../';
		</script>
		<?php
		exit;
	}
	$connect->close();
?>
	