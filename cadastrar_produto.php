<?php
    include "../adm/conexaoTech.php";
    include "../adm/seguranca_adm.php";

    if (isset($_POST['nome'])){
    //entrada 
    $nome = trim($_POST['nome']);
    $decricao = trim($_POST['descricao']);
    $categoria= trim($_POST['categoria']);
    $preco= trim($_POST['preco']);
    $foto = trim($_POST['foto']);
    $destaque = trim($_POST['destaque']);
    $promocao = trim($_POST['promocao']);


    //processamento
    $nomeFoto = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    $caminho = '../produto/fotos/';

    $foto = $caminho . $nomeFoto;

    // upload do arquivo
    $upload = move_uploaded_file($temp,$foto);
    
    if($upload){

        $sql = "insert into produto(nome,descricao,categoria,preco,foto,destaque,promocao) values('$nome','$decricao','$categoria','$preco','$foto','$destaque','$promocao')";
        $incluir = mysqli_query($conexaoTech,$sql);
    
        //saída - dfeedabck ao usuário
        if($incluir){
            echo "
            <script>
            alert('Produto cadastrado com sucesso');
            window.location = 'produto_listar.php';
            </script>";
        }
    
        else{//tratamento de erro e redirecionamento
            echo "<p> Banco de Dados temporariamene fora do ar, entre em contato com o administrador do site para reportar o problema </p>";
            echo "<p> Clique <a href='produto.php'> aqui </a> para retornar ao formulário de Cadastro. </p> ";
        }
        
    }else{
        echo "<p> Não foi possível fazer o upload do arquivo no momento. Tente novamente mais tarde.</p>";
        echo "<p> Entre em contato com o administrador do site.</p>";
        echo "<p> Clique <a href='produto.php'> aqui</a> para acessar o formulário de cadastro.</p>";
        }

    }else{    // tratamento de arro e redirecionamento
        echo "<p> Esta é uma página de tratamento de dados </p>";
        echo "<p> Clique <a href='produto.php'> aqui </a> para acessar o formulário de Cadastro. </p> ";
        }


?>
