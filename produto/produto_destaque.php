<?php
  include "conexaoTech.php";
  $sql = "SELECT * FROM produto WHERE destaque = 'sim' ORDER BY descricao";
  $seleciona = mysqli_query($conexaoTech, $sql);
?>

<section class="principal-produto">
  <div class="container-produto">

  <div class="container">
      <div class="container-card-produtos">
      <?php
      while($exibe=mysqli_fetch_array($seleciona)) {
        $id = $exibe['id'];
      ?>

      <!-- card -->
          <a href="../produto/produto_espec.php?id=<?php echo $id?>">
            <div class="cards-produtos">
              <div class="cards-produtos-foto">
                <div><img src=" <?php echo $exibe ['foto']?>"></div>
              </div>

              <div class="cards-produtos-info">
                <div class="cards-produtos-titulo">
                  <?php echo $exibe['nome']; ?>
                </div>

                <div class="cards-produtos-preco">
                  R$ <?php echo number_format($exibe['preco'], 2, ",", "."); ?>
                </div>

                </div>
                
                <div>
                <div class="produto-btn-comprar">
                  <button type="submit" class="submit">Comprar</button>
                </div>
              </div>



            </div>
          </a>
          <?php
      }
      ?>
   </div>
        
          





   </div>

</section> 
