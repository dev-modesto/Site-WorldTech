<?php

    include "../adm/conexaoTech.php";
    // POST é o método de envio. Estamos verificando se este método foi enviado.

    if(isset($_POST['cpf'])){
        // coletar os dados do formulário
        // (trim) remove os espaços na direita e à esquerda.
        $nome = trim($_POST['nome']);
        $cpf = trim($_POST['cpf']);
        $dataNascimento = trim($_POST['dataNascimento']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $nivel = 'usu';
        
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        $sql = "select * from usuario where cpf = '$cpf'";
        $teste_login = mysqli_query($conexaoTech,$sql);
        $existe = mysqli_num_rows($teste_login);
        
        
    
        if($existe){
            echo"
            <script>
                alert('Este CPF já foi cadastrado. Recupere sua senha ou tente outro CPF.');
                history.back();
            </script>
        ";
        }else{

            $sql = "insert into usuario(nome,cpf,dataNascimento,telefone,email,senha,nivel) values('$nome','$cpf','$dataNascimento','$telefone','$email','$hash','$nivel')";
            $incluir = mysqli_query($conexaoTech,$sql);
            
            //saída - feedback ao usuário 
            if($incluir){
                
                echo "
                <script>
                alert('Usuário cadastrado com sucesso');
                window.location = 'cadastro.php';
                </script>
                ";
            }else{ // tratamento de erro e redirecionamento
                echo "<p> Banco de Dados temporariamente fora do ar. Entre em contato com o administrador do site para reportar o problema </p>";
                echo "<p> Clique <a href='usuario.php'> aqui </a> para retornar ao formulário de cadastro. </p>";
            }
        }

    }else{ // tratamento de erro e redirecionamento
            echo "<p> Esta é uma página de tratamento de dados </p>";
            echo "<p> Clique <a href='cadastro.php'> aqui </a> para acessar o formulário de Cadastro. </p>";   
    }

?>


