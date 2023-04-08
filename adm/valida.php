<?php   
    include "../adm/conexaoTech.php";

    if(isset($_POST['cpf'])){
        
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        
        $sql = "select * from usuario where cpf = '$cpf'";
        $teste_login = mysqli_query($conexaoTech,$sql);
        $existe = mysqli_num_rows($teste_login);

       

        if($existe){

            $dados = mysqli_fetch_array($teste_login);
            $hash = $dados['senha'];
        
            if(password_verify($senha,$hash)){
                // validação
                if(!isset($_SESSION)){
                    session_start(); // iniciando a sessão
                }
                    $_SESSION['cpf'] = $dados['cpf'];
                    $_SESSION['nome'] = $dados['nome'];
                    $_SESSION['nivel'] = $dados['nivel'];

                    if($dados['nivel'] == 'adm'){
                        header('location: ../adm/index.php');
                    }
                    else{
                        header('location: ../adm/index.php');
                    }

                }
            else{
                
                $userInvalido = "Usuário ou senha inválido.";
                
            }
        }

        else{
            $userInvalido = "Usuário ou senha inválido.";
        }
    
    }else{
        $userInvalido = "";
    }

?>