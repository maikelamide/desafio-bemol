<?php 
	session_start();
	
	require_once 'request/connection.php';
	require_once 'request/login.php';
	
	$error = array();

	if(isset($_POST['entrar'])):
		$email = mysqli_escape_string($connect, $_POST['email']);
		$password = mysqli_escape_string($connect, $_POST['senha']);
		$error = validate($error, $email, $password, $connect);
	endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login | Conta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-60 p-r-60 p-t-62 p-b-33">
				<div>
					<?php 
						if(!empty($error)):
							foreach($error as $e):
							echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
										<span style='color:red;'> <center>".$e."</center></span>
										<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
											<span aria-hidden='true'>&times;</span>
										</button>
									</div>";
							endforeach;	
						endif;
					?>
				</div>
				<form class="login100-form validate-form flex-sb flex-w" action="#" method="POST">
					<span class="login100-form-title"><!--p-b-53-->
						Preencha seus dados para acessar sua conta
						<hr>
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							E-mail
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Campo é obrigatório!">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Senha
						</span>
						<a href="#" class="txt2 bo1 m-l-5">
							Esqueceu?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Campo é obrigatório!">
						<input class="input100" type="password" name="senha">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="entrar">
							Entrar
						</button>
					</div>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Ainda não tem cadastro?
						</span>
						<a href="./cadastro" class="txt2 bo1">
							Criar conta!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>