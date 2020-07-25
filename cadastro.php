<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro | Conta</title>
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
				<form class="login100-form validate-form flex-sb flex-w" action="./request/cadastrar-usuario.php" method="post" enctype="multipart/form-data" >
					<span class="login100-form-title"><!--p-b-53-->
						Vamos lá, criar seu cadastro! 
						<hr>
					</span>
					<div class="row">			
						<ul class="nav nav-pills mb-3 margin-auto" id="myTab" role="tablist">
							<li class="nav-item"><!-- nav-item -->
								<a class="nav-link active text-center" href="#passo-um" data-toggle="tab" role="tab" aria-controls="passo-um" aria-selected="true">Dados <br> Pessoais</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  text-center" href="#passo-dois" data-toggle="tab" role="tab" aria-controls="passo-dois" aria-selected="false">Dados <br> Endereço</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  text-center" href="#passo-tres" data-toggle="tab" role="tab" aria-controls="passo-tres" aria-selected="false">Dados <br> Acesso</a>
							</li>
						</ul>
						<div class="tab-content p-l-20 p-r-20" id="content">
							<div class="tab-pane fade show active" id="passo-um">
								<div class="p-t-31 p-b-9">
									<span class="txt1">
										Nome Completo
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="nomeCompleto">
									<span class="focus-input100"></span>
								</div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									CPF
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="cpf" onkeyup="mascara('###.###.###-##',this,event,true)" maxlength="14">
									<span class="focus-input100"></span>
								</div>					
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Data Nascimento
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="date" name="dataNascimento">
									<span class="focus-input100"></span>
								</div>
								<div class="container-login100-form-btn m-t-17">
									<a class="login100-form-btn next" style="background-color: #6075b7" href="#passo-dois">
										Próximo <i class="fa fa-arrow-right"></i>
									</a>
								</div>
							</div>
							<div class="tab-pane" id="passo-dois"><!-- role="tabpanel" aria-labelledby="pills-profile-tab" -->
								<div class="p-t-31 p-b-9">
									<span class="txt1">
										CEP
									</span>
									<a href="http://www.buscacep.correios.com.br/sistemas/buscacep/default.cfm?Metodo=menuLogradouro" target="_blank" class="txt2 bo1 m-l-5">
										Não sabe seu CEP?
									</a>
								</div>
								<span id="msg2"></span>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="cep" id="cep" value="" size="10" maxlength="9">
									<span class="focus-input100"></span>
								</div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Estado
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="uf" id="uf" size="2">
									<span class="focus-input100"></span>
								</div>					
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Cidade
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="cidade" id="cidade" size="40">
									<span class="focus-input100"></span>
								</div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Rua/Av.
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="rua" id="rua" size="60">
									<span class="focus-input100"></span>
								</div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Número
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="numero">
									<span class="focus-input100"></span>
								</div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Bairro
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="bairro" id="bairro" size="40">
									<span class="focus-input100"></span>
								</div>
								<div class="row p-l-30 p-r-30">
									<div class="container-login40-form-btn m-t-17 m-r-50">
										<a class="login100-form-btn prev" style="background-color: #6075b7;" href="#passo-um">
											<i class="fa fa-arrow-left"></i> Anterior
										</a>
									</div>
									<div class="container-login40-form-btn m-t-17">
										<a class="login100-form-btn next" style="background-color: #6075b7" href="#passo-tres">
											Próximo <i class="fa fa-arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="passo-tres"><!--role="tabpanel" aria-labelledby="pills-contact-tab" -->
								<div class="p-t-31 p-b-9">
									<span class="txt1">
										E-mail
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="email" name="email" >
									<span class="focus-input100"></span>
								</div>			
								<div type="hidden" id="impSenha"></div> 
								<div type="hidden" id="impForcaSenha"></div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Senha 
									</span>
									<div id="msg3"></div>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="password" name="senha" id="senha" onkeyup="validarSenhaForca()">
									<span class="focus-input100"></span>
								</div>			
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Repita a Senha
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="password" id="confirmarSenha">
									<span class="focus-input100"></span>
								</div>
								<span id="msg"></span>
								<div class="row p-l-30 p-r-30">
									<div class="container-login40-form-btn m-t-17 m-r-50">
										<a class="login100-form-btn" style="background-color: #6075b7" href="#passo-dois">
											<i class="fa fa-arrow-left"></i> Anterior
										</a>
									</div>
									<div class="container-login40-form-btn m-t-17">
										<button class="login100-form-btn" style="background-color: #6075b7" type="submit">
											Concluir <i class="fa fa-check"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Já possui cadastro?
						</span>
						<a href="./" class="txt2 bo1">
							Acessar conta!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>-->
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
	<script src="js/proximo_anterir.js"></script>
	<!-- Jquery/Json CEP -->
	<script src="js/buscar_cep.js"></script>
	<script>
		$('form').on('submit', function () {
			if ($('#senha').val() != $('#confirmarSenha').val()) {
				$("#msg").html('<div class="alert alert-warning" role="alert">Ops, as senhas não coincidem! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				return false;
			}
		});
	</script>
	<script src="./js/verificar_senha.js"></script>
	<script src="./js/mascara.js"></script>
</body>
</html>