<?php
  include "conexaoTech.php";
  $sql = "SELECT * FROM produto WHERE promocao = 'sim' ORDER BY descricao";
  $seleciona = mysqli_query($conexaoTech, $sql);
?>

<section class="principal-produto-promocao">

  <div class="container-promocao">

  <div class="container">
    <div class="container-card-promocao">
      <?php
      while($exibe=mysqli_fetch_array($seleciona)) {
        $id = $exibe['id'];
      ?>

      <!-- card -->
          <a href="../produto/produto_espec.php?id=<?php echo $id?>">

            <div class="cards-promocao">
              <div class="cards-promocao-foto">
                <div><img src=" <?php echo $exibe ['foto']?>"></div>
              </div>

              <div class="cards-promocao-info">
                <div class="cards-promocao-titulo">
                  <?php echo $exibe['nome']; ?>
                </div>

                <div class="cards-promocao-preco">
                  <div class="cards-promocao-valor">
                     R$ <?php echo number_format($exibe['preco'], 2, ",", "."); ?>
                  </div>

                  <div class="produto-btn-comprar btn-comprar-promocao">
                    <button type="submit" class="submit">Comprar</button>
                  </div>
                </div>

                </div>
                
                <div>

              </div>

            </div>
          </a>
          <hr>
          <?php
      }
      ?>

   </div>
        
          





   </div>

</section> 
