<?php
  include "conexaoTech.php";
  $sql = "SELECT * FROM produto WHERE destaque = 'sim' ORDER BY descricao";
  $seleciona = mysqli_query($conexaoTech, $sql);
?>

<section class="produto__principal">
  <div class="produto__container">
        <div class="container-card-produtos">
          <?php
          while($exibe=mysqli_fetch_array($seleciona)) {
            $id = $exibe['id'];
          ?>

          
            <a href="../produto/produto_espec.php?id=<?php echo $id?>">

              <div class="produtos__cards prod__cards">
                <div class="produtos__cards--foto prod__cards--foto">
                  <div><img src=" <?php echo $exibe ['foto']?>"></div>
                </div>

                <div class="produtos__cards--info prod__cards--info">
                  <div class="produtos__cards--titulo prod__cards--titulo">
                    <?php echo $exibe['nome']; ?>
                  </div>

                  <div class="produtos__cards--preco prod__cards--preco">
                    R$ <?php echo number_format($exibe['preco'], 2, ",", "."); ?>
                  </div>

 
                  <div class="produto-btn-comprar prod-btn-comprar">
                    <button type="submit" class="submit">Comprar</button>
                  </div>
                </div>



              </div>
            </a>
            <?php
        }
        ?>

   </div>

</section> 
