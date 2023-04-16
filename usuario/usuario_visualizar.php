<?php

    include "../adm/conexaoTech.php";
    include "../adm/seguranca_adm.php";

    if(isset($_GET['cpf'])){

        $cpf = $_GET['cpf'];


        $sql = "select * from usuario where cpf = '$cpf'";
        $seleciona = mysqli_query($conexaoTech,$sql);
        $exibe = mysqli_fetch_array($seleciona); 
        $data = mysqli_fetch_array($seleciona);

        $cpfUser = $exibe['cpf'];
        $nomeUser = $exibe['nome'];
        $dataNasc = $exibe['dataNascimento']; 
        $telefone = $exibe['telefone'];
        $email = $exibe['email'];
        $senha = $exibe['senha'];
        $nivelUser = $exibe['nivel'];



?>

<?php
  include "../adm/base.php";
?>

<section class="principal-secao-global">
  <div class="container-global">
        <h2> Usuário: <?php echo $nomeUser;?></h2> 

        <hr>

        <div class="alterar-produto format-cadastros">
            
            <div class="mb-3">
                <label for="cpfUser" class="form-label">User</label>
                <input type="text" class="form-control" id="cpfUser" name="cpfUser" placeholder="User" value="<?php echo $cpfUser?>" disabled>
            </div>  

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nomeUser" placeholder="Nome" value="<?php echo $nomeUser?>" disabled>
            </div>  

            <div class="mb-3">
                <label for="dataNasc" class="form-label">Data de Nascimento</label>
                <input type="text" class="form-control" id="dataNasc" name="dataNasc" placeholder="Data de nascimento" value="<?php echo date('d/m/Y', strtotime($dataNasc)) ?>" disabled>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="telefone" value="<?php echo $telefone?>" disabled>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $email?>" disabled>
            </div>

            <div class="mb-3">
                <label for="nivelUser" class="form-label">Nível de Usuário</label>
                <input type="text" class="form-control" id="nivelUser" name="nivelUser" placeholder="nivel" value="<?php echo $nivelUser?>" disabled>
            </div>

            <div class="btn-cadastro">
                <a href="usuario_listar.php"><button type="button" class="btn-cadastro-primary">Voltar</button></a>
                
                <a href="usuario_alterar.php?cpf=<?php echo $cpf?>">
                <button class="btn-cadastro-secondary">Editar dados</button></a>
            </div>
        </div>
    </div>
</section>



<?php
    }
    else{
        echo "
        <p>Esta é uma página de tratamento de dados.</p>
        <p>Clique <a href='usuario_listar.php'>aqui</a> para selecionar o usuário que deseja visualizar.</p>
        ";
    }
?>