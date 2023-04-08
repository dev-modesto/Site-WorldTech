<?php
    include "base.php";
    include "seguranca_adm.php";
?>


<section class="adm__principal adm">
    <div class="adm__container">
        <h2>Ambiente ADM</h2>

        <div class="adm__container__area">

            <div class="adm__usuarios">
                <a href="../usuario/usuario_listar.php">
                    <img src="img/usuario.jfif" alt="">
                    <p>Usuários</p>
                </a>
            </div>

            <div class="adm__produtos">
                <a href="../produto/produto_listar.php">
                    <img src="img/produto.png" alt="">
                    <p>Produtos</p>
                </a>
            </div>
            
        </div>
    </div>
</section>


<?php
    include "rodape.php";
?>