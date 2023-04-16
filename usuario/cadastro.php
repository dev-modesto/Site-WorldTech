<?php
    include "../adm/base.php";
?>

    <section class="cadastro__principal" >
        
        <div class="cadastro__container">
            
        
            <div class="cadastro__titulo">
                <h2>Criar conta</h2>
            </div>
            
            <div class="cadastro__dados">

                <form id="grid-container" name="cadastro" method="post" action="usuario_cadastro.php">
                    
                    <div id="cadastro-nome" class="item1" >
                        <input type="text" name="nome" id="nome" class="input-nome" placeholder="Nome Completo" required>
                    </div>
                    <div id="cadastro-cpf" class="item2">
                        <input type="text" name="cpf" id="cpf" class="input-cpf" placeholder="CPF" required>
                    </div>
                    <div id="cadastro-nascimento" class="item3" >
                        <input type="date" name="dataNascimento" id="dataNascimento" class="input-date" required>
                    </div>
                    <div id="cadastro-telefone" class="item4" >
                        <input type="tel" name="telefone" id="telefone" class="input-telefone" placeholder="Telefone celular" required>
                    </div>
                    <div id="cadastro-email"class="item5" >
                        <input type="email" name="email" id="email" class="input-email" placeholder="E-mail" required>
                    </div>
                    <div id="cadastro-password" class="item6">
                        <input type="password" name="senha" id="senha" class="input-senha" placeholder="Senha" required >
                    </div>

                    <div class="cadastro-btn-criar item7">
                        <button type="submit" class="submi">Criar</button>
                    </div>
                </form>


            </div>
        


    
            <div class="login__cadastro">
                Você já tem uma conta? <a href="../adm/login.php">Fazer login.</a>
            </div>
        </div>


    </section>






<?php
    include "../adm/rodape.php";
?>