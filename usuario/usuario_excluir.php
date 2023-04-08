<?php
    include "../adm/conexaoTech.php";

    if(isset($_GET['cpf'])){
        // entrada 
        $cpf = $_GET['cpf'];

        // processamento 
        $sql = "delete from usuario where cpf = '$cpf'";
        $excluir = mysqli_query($conexaoTech,$sql);

        // saída 
        if($excluir){
            echo"
                <script>
                    alert('Usuario excluido com sucesso!');
                    window.location = 'usuario_listar.php'; 
                </script>
            ";
        }
        else{
            echo"
            
                <p>Banco de Dados temporariamente fora do ar. Tente novamente mais tarde </p>
                <p>Entre em contato com o administrador do site</p>
            ";
            echo mysqli_error($conexaoTech);

        }
    }
?>
