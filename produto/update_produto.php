<?php
include "../adm/conexaoTech.php";
include "../adm/seguranca.php";

if(isset($_POST['id'])){
    
    //entrada de dados
    $id = trim($_POST['id']);
    $descricao = trim($_POST['descricao']);
    $preco = trim($_POST['preco']);
    $nome = trim($_POST['nome']);
    $categoria = trim($_POST['categoria']);

    //processamento
    $sql = "update produto set descricao = '$descricao',preco='$preco',categoria='$categoria',nome ='$nome' where id = '$id' ";
    $alterar = mysqli_query($conexaoTech,$sql);

 
 if($alterar){
    echo "
    <script>
    alert('Usuario atualizado com Sucesso!');
    window.location = 'produto_listar.php';
    </script>
    ";
        }
        else{
    echo "<p> Sistema temporariamente fora do ar. Tente novamente mais tarde <p>";
    echo "<p> Entre em contato com o administrador do site </p>";
    echo mysqli_error($conexaoTech);
        }
    
    
    }
    else{
        echo "<p>Esta é uma página de tratamento de dados. </p>;
        <p>Clique <a href='produto_listar.php'> aqui </a> para selecionar o usuário selecionado";
    }
    
?>