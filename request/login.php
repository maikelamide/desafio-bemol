<?php
	require_once(__DIR__.'/../request/connection.php');

	function validate($error, $email, $senha, $connect)
	{	

		# CONSULTA USUÁRIO
	 	$sql = "SELECT email FROM usuarios WHERE email = '$email'";
	 	$result = mysqli_query($connect, $sql);

	 	if(mysqli_num_rows($result) > 0):

	 		$senha = md5($senha);

	 		# CONSULTA SENHA
	 		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	 		$result = mysqli_query($connect, $sql);

	 		if(mysqli_num_rows($result) == 1):
	 			$data = mysqli_fetch_array($result);
	 		 	mysqli_close($connect);

	 		 	# uma sessão é criada para o usuário logado
	 		 	$_SESSION['logado'] = true;
	 		 	$_SESSION['idUser'] = $data['idUser'];
				$_SESSION['nameUser'] = $data['nomeCompleto'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['senha'] = $data['senha'];
	 		 	//$_SESSION['nome_usuario'] = $data['nome']." ".$data['sobrenome'];
				$name = $_SESSION['nameUser'];
				$email =  $_SESSION['email'];
				$senha =  $_SESSION['senha'];
				
				echo "<script language='javascript' type='text/javascript'>
						
						window.location.href='./home'</script>";
				
				//header('Location:home');
				//alert('Seja bem vindo $email .');
	 		 else:
	 		 	$error[] = "E-mail ou senha não conferem. Tente novamente!";
				unset ($_SESSION['email']);
				unset ($_SESSION['senha']);
	 		 	return $error;
	 		 endif;
	 	else:
	 		$error[] = "O usuário não existe. <a href='./cadastro'>Criar uma conta</a>";
			unset ($_SESSION['email']);
			unset ($_SESSION['senha']);
	 		return $error;
	 	endif;
	}
?> 