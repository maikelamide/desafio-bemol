<?php
    session_start();

    /*-- Verifica se existe os dados da sessão de login --*/
    if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
        /*-- Usuário não logado! Redireciona para a página de login --*/
        echo "<script language='javascript' type='text/javascript'>
            alert('Acesso negado. Você precisa estar logado no sistema.');
            window.location.href='./'</script>";
        exit;
}
