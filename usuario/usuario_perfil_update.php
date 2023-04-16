<?php

    include "../adm/conexaoTech.php";

    if(isset($_POST['cpf'])){


        $nome = trim($_POST['nome']);
        $cpf = trim($_POST['cpf']);
        $dataNascimento = trim($_POST['dataNascimento']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        // $nivel = 'usu';
        

        $sql = "update usuario set nome = '$nome',dataNascimento='$dataNascimento',telefone='$telefone',email='$email',senha='$senhaHash' where cpf = '$cpf'";
        $alterar = mysqli_query($conexaoTech,$sql);

        if($alterar){
            echo "
                <script>
                    alert('Usuario atualizado com sucesso!');
                    window.location = 'usuario_perfil.php';
                </script>
            ";
            
        }else{
            echo "
                <p> Sistema temporariamente fora do ar. Tente novamente mais tarde.</p>
                <p> Entre em contato com o administrador do site. </p>
            ";
            echo mysqli_error($conexaoTech);
        }
    }
?>
