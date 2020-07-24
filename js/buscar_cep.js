$(document).ready(function() {
            function limpa_formulário_cep() {
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            $("#cep").blur(function() {
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
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
								$("#msg2").html('<div class="alert alert-warning" role="alert">CEP não encontrado.<br> Tente novamente!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
                            }
                        });
                    }
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
						$("#msg2").html('<div class="alert alert-warning" role="alert">Formato de CEP incorreto. Tente novamente, conforme o exemplo: 69000-000 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
                    }
                }
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
					$("#msg2").html('<div class="alert alert-warning" role="alert">Digite um CEP válido para começar! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
                }
            });
        });