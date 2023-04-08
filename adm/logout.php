<?php
    session_start(); //inicia a sessão
    $_SESSION = array(); //carrega o array de dados
    session_destroy(); //destroi todas as sessões iniciadas
    header('location: ../adm/index.php'); //redireciona para a area de login
?>