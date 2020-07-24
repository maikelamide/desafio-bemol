<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "desafio-bemol";
	
	//$servidor = "108.179.193.168";
    //$usuario = "conhe913_bemol";
    //$senha = "bemol@123";
    //$banco = "conhe913_desafio-bemol";
    $connect = mysqli_connect($servidor, $usuario, $senha) or die ("Sem conexão com o servidor.");
    $select_banco = mysqli_select_db($connect, $banco) or die("Sem acesso ao Banco de Dados. Entre em contato com o Administrador!");
