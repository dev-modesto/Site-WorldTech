<?php
    include "base.php";
    include "valida.php";
?>


<section class="principal-login" >

    <div class="container-login">
        <div class="titulo-login">
            <h2>Login</h2>
        </div>
        <form class name="form" method="post" action="#">

            <div class="dados-login">
                <div id="login-cpf" >
                <input type="text" id="cpf" name="cpf" placeholder="CPF" required>   
                </div>
                <div id="login-password">
                <input type="password" id="senha" name="senha" placeholder="Senha" required>   
                </div>
            </div>

            <div class="login-btn-entrar">
                <button type="submit" class="submi">Logar</button>
            </div>            
            
        </form>
        <div class="mt-5 text-danger text-center">
            <?php
                echo $userInvalido;
            ?>
        </div>
        
        <div class="login-outros">

            <div class="login-checkbox">
                <input type="checkbox" id="check">
                <label for="checkbox"> Lembrar senha</label>
            </div>
            
            <div class="login-esqueceu">
                <a href="#">Esqueceu a senha?</a>
            </div>

        </div>

        <div class="login-cadastro">
            É seu primeiro acesso? <a href="../usuario/cadastro.php">Cadastre-se</a>
        </div>
    
    </div>

</section>

        



<?php
    include "rodape.php";
?>