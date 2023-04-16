<?php
  include "../adm/base.php";
?>
<!--  -->

<?php
    include "../adm/conexaoTech.php";
    include "../adm/seguranca.php";

    $cpf_usuario = $_SESSION['cpf'];

    $sql = "SELECT * FROM usuario WHERE cpf = '$cpf_usuario'"; 
    $seleciona = mysqli_query($conexaoTech,$sql);
    $exibe = mysqli_fetch_array($seleciona);
?>

<section class="principal-secao-global">
  <div class="container-global">
        <h2> Minha conta</h2> 

        <hr>

        <div class="alterar-produto format-cadastros">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nomeUser" value="<?php echo $exibe['nome'] ?>" disabled>
            </div>  
            
            <div class="mb-3">
                <label for="cpfUser" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpfUser" name="cpfUser" value="<?php echo $exibe['cpf'] ?>" disabled>
            </div>  

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $exibe['email'] ?>" disabled>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $exibe['telefone'] ?>" disabled>
            </div>
            
            <div class="mb-3">
                <label for="dataNasc" class="form-label">Data de Nascimento</label>
                <input type="text" class="form-control" id="dataNasc" name="dataNasc" value="<?php echo date('d/m/Y', strtotime($exibe['dataNascimento'])) ?>" disabled>
            </div>

            <div class="btn-cadastro">
                <a href="../adm/index.php"><button type="button" class="btn-cadastro-primary">Voltar</button></a>
                
                <a href="usuario_perfil_alterar.php?cpf=<?php echo $cpf_usuario ?>">
                <button class="btn-cadastro-secondary">Editar dados</button></a>
            </div>
        </div>
    </div>
</section>

<?php
    include "../adm/rodape.php";
?>