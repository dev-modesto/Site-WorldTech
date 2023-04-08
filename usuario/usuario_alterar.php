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
        $dataNascimento = $exibe['dataNascimento']; 
        $telefone = $exibe['telefone'];
        $email = $exibe['email'];
        $senha = $exibe['senha'];
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        $nivelUser = $exibe['nivel'];
?>

<?php
  include "../adm/base.php";
?>

<section class="principal_usuario_alterar">


            <h1 class='text-center'>Alterar Usuario</h1>

            <hr>
            <form name="cadastro" method="post" action="usuario_update.php">
                <input type="hidden" name="cpf" value="<?php echo $cpfUser?>">

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf" value="<?php echo $cpfUser?>"required disabled></input>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" value="<?php echo $nomeUser?>"required></input>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@provedor.com" value="<?php echo $email?>"required>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?php echo $telefone?>"required></input>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" id="data" name="dataNascimento" placeholder="Data de Nascimento" value="<?php echo $dataNascimento?>"required></input>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="senha" placeholder="Senha" required></input>
                </div>
                <hr>
                <div class="mb-3" required>
                    <label for="nivel">Nível de Usuário</label>
                    <div>
                    <input type="radio" id="nivel" name="nivel" value="usu" <?php if($nivelUser == 'usu') echo "checked"; ?>> Usuário normal <br>
                    <input type="radio" id="nivel" name="nivel" value="adm" <?php if($nivelUser == 'adm') echo "checked"; ?>> Administrador<br>
                    </div>
                </div>
                <div class="btn-cadastro">
                    <a href="usuario_listar.php"><button type="button" class="btn-cadastro-primary">Voltar</button></a>
                    <button type="submit" class="btn-cadastro-secondary">Alterar dados</button>
                </div>

            </form>

            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php

        }
        else{
            echo "
            <p>Esta é uma página de tratamento de dados.</p>
            <p>Clique <a href='usuario_listar.php'>aqui</a> para selecionar o usuário que deseja visualizar.</p>
            
            ";
        }


    ?>

</section>