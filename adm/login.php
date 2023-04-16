<?php
    include "base.php";
    include "valida.php";
?>


<section class="login__principal" >

    <div class="login__container">
        <div class="login__titulo">
            <h2>Login</h2>
        </div>
        <form class name="form" method="post" action="#">

            <div class="login__dados">
                <div id="login__cpf" >
                <input type="text" id="cpf" name="cpf" placeholder="CPF" required>   
                </div>
                <div id="login__password">
                <input type="password" id="senha" name="senha" placeholder="Senha" required>   
                </div>
            </div>

            <div class="login__btn__entrar">
                <button type="submit" class="submi">Logar</button>
            </div>            
            
        </form>
        <div class="mt-5 text-danger text-center">
            <?php
                echo $userInvalido;
            ?>
        </div>
        
        <div class="login__outros">

            <div class="login__checkbox">
                <input type="checkbox" id="check">
                <label for="checkbox"> Lembrar senha</label>
            </div>
            
            <div class="login__esqueceu">
                <a href="#">Esqueceu a senha?</a>
            </div>

        </div>

        <div class="login__cadastro">
            É seu primeiro acesso? <a href="../usuario/cadastro.php">Cadastre-se</a>
        </div>
    
    </div>

</section>

<?php
    include "rodape.php";
?>