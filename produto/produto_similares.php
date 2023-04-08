<?php
//entrada de dados
$sql = "SELECT * FROM produto where categoria='$categoria' ORDER BY descricao";
$seleciona = mysqli_query($conexaoTech, $sql);
?>


<div class="container-produtos-similares produtos-similares-1">
    <div class="produtos-similares-titulo">
      <h2>Produtos Similares</h2>
    </div>

    <div id="carouselExampleControls" class="carousel slide carrossel-full" data-bs-ride="carousel">
        <div class="carousel-inner carousel-inner-produtos-similares ">
            <?php
            $count = 0;
            while($exibe=mysqli_fetch_array($seleciona)) {
                $id = $exibe['id'];
                if ($count % 3 == 0) {
                    $active = $count == 0 ? "active" : "";
                    echo '<div class="carousel-item ' . $active . '"><div class="row">';
                }
        
                
                echo '
                
                <div class="col-md-4 produtos-similares-carrossel">

                  <div class="cards-produtos">

                    <div class="cards-produtos-foto">
                      <img src="' . $exibe['foto'] . '" class="img-fluid rounded-start" alt="...">
                    </div>
                      
                    <div class="cards-produtos-info">
                      <div class="cards-produtos-titulo">
                        ' . $exibe['nome'] . '
                      </div>
                    </div>

                    <div class="cards-produtos-preco">
                      R$ ' . number_format($exibe['preco'], 2, ',', '.') .'
                    </div>
                    
                    <div class="produto-btn-comprar">
                      <button type="submit" class="submit">Comprar</button>
                    </div>

                  </div>
                
                </div>';
                        
                $count++;
                if ($count % 3 == 0) {
                    echo '</div></div>';
                }
            }
            if ($count % 3 != 0) {
                echo '</div></div>';
            }
            ?>
        </div>
            
            <button class="carousel-control-prev similares-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="icon-carousel" aria-hidden="true">
                <i class='bx bx-chevron-left'></i>
              </span>
              <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next similares-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="icon-carousel" aria-hidden="true">
                <i class='bx bx-chevron-right' ></i>
              </span>
              <span class="visually-hidden">Next</span>
            </button>
    </div>




</div>


