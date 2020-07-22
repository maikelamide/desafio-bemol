<?php
	//verifico se o usuário está logado na página    
	require "request/authentication.php";
	require "request/login.php";
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
				<?php
					include_once("request/connection.php");
					$idUser = $_SESSION['idUser'];
					$execute = mysqli_query($connect, "SELECT * FROM usuarios WHERE idUser='$idUser'");
					while($result = mysqli_fetch_array($execute)){
					?>
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title"><!--p-b-53-->
						Seja bem-vindo <strong><?php echo $result ['nomeCompleto']; ?></strong>
						<hr>
					</span>
					<div class="container-login100-form-btn m-t-17">
						<a class="login100-form-btn" type="button" href="./">
							ver usuários
						</a>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<a class="login100-form-btn" type="button" href="./request/logout.php">
							sair
						</a>
					</div>
					<div class="w-full text-center p-t-55">
						<i class="fa fa-github"></i>
						<span class="txt2">
							Github deste projeto?
						</span>
						<a href="https://github.com/maikelamide/desafio-bemol" target="_blank" class="txt2 bo1">
							Clique aqui!
						</a>
					</div>
				</form>
				<?php
					}
				?>
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