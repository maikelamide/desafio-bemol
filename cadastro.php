<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro</title>
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
<!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- Jquery/Json CEP -->
    <script>
        $(document).ready(function() {
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');
                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;
                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-60 p-r-60 p-t-62 p-b-33">
		<!--
		 <form method="get" action=".">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
      </form>-->
        
			
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title"><!--p-b-53-->
						Vamos lá, criar seu cadastro! 
						<hr>
					</span>
					<span class="login100-form-title"><!--p-b-53-->
						Conclua os passos: 
					</span>
					<div class="row">			
						<ul class="nav nav-pills mb-3 margin-auto" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#passo-um" role="tab" aria-controls="pills-home" aria-selected="true">Passo 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#passo-dois" role="tab" aria-controls="pills-profile" aria-selected="false">Passo 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#passo-tres" role="tab" aria-controls="pills-contact" aria-selected="false">Passo 3</a>
							</li>
						</ul>
						<div class="tab-content p-l-20 p-r-20" id="pills-tabContent">
							<div class="tab-pane fade show active" id="passo-um" role="tabpanel" aria-labelledby="pills-home-tab">								
								<div class="p-t-31 p-b-9">
									<span class="txt1">
										<strong>1 - Dados Pessoais</strong>
									</span>
									<span class="txt1">
										<hr>
										Nome Completo
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="text" name="username">
									<span class="focus-input100"></span>
								</div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									CPF
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="number" name="cpf">
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
									<button class="login100-form-btn" style="background-color: #6075b7">
										Próximo
									</button>
								</div>
							</div>
							<div class="tab-pane fade" id="passo-dois" role="tabpanel" aria-labelledby="pills-profile-tab">
								<div class="p-t-31 p-b-9">
									<span class="txt1">
										<strong>2 - Dados de Endereço</strong>
									</span>
									<span class="txt1">
										<hr>
										CEP
									</span>
									<a href="http://www.buscacep.correios.com.br/sistemas/buscacep/default.cfm?Metodo=menuLogradouro" target="_blank" class="txt2 bo1 m-l-5">
										Não sabe seu CEP?
									</a>
								</div>
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
								<div class="container-login100-form-btn m-t-17">
									<button class="login100-form-btn" style="background-color: #6075b7">
										Próximo
									</button>
								</div>
							</div>
							<div class="tab-pane fade" id="passo-tres" role="tabpanel" aria-labelledby="pills-contact-tab">
								<div class="p-t-31 p-b-9">
									<span class="txt1">
										<strong>3 - Dados de Acesso</strong>
									</span>
									<span class="txt1">
										<hr>
										E-mail
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="email" name="email" >
									<span class="focus-input100"></span>
								</div>
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Senha
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="password" name="senha">
									<span class="focus-input100"></span>
								</div>					
								<div class="p-t-13 p-b-9">
									<span class="txt1">
									Repita a Senha
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Campo obrigatório!">
									<input class="input100" type="password" name="confirmar-senha">
									<span class="focus-input100"></span>
								</div>
								<div class="container-login100-form-btn m-t-17">
									<button class="login100-form-btn" style="background-color: #6075b7">
										Concluir
									</button>
								</div>
							</div>
						</div>
					</div>
					

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Já tem cadastro?
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