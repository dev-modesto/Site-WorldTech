<?php

include "../adm/conexaoTech.php";
include "../adm/seguranca.php";

if(isset($_GET['id'])){
//recebe os dados
$id = $_GET['id'];
//escreve e executa a sql
$sql = "delete from produto where id = $id";
$excluir = mysqli_query($conexaoTech,$sql);
//saída
if($excluir){
    echo "<script>
    alert ('Produto exluído com sucesso! ');
    window.location = 'produto_listar.php';
    </script>";
    //redirecionador depáginas do php
    //header
}
else{
    echo "
    <p> Banco de Dados temporariamente fora do ar. Tente novamente mais tarde</p>
    <p> Entre em contato com o suporte ... </p>
    ";
    echo mysqli_error($conexaoTech);
    }
}
else{
    echo "<p>Esta é uma página de tratamento de dados. </p>";
    echo " <p>Clique <a href='produto_listar.php'> aqui </a> para selecionar o usuário selecionado";
}

 