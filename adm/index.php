<?php
    //entrada de dados
    include "conexaoTech.php";
    ob_start();
    $sql = "SELECT * FROM produto WHERE destaque = 'sim' ORDER BY descricao";
    $seleciona = mysqli_query($conexaoTech, $sql);
?>

<?php
  include "base.php";
?>


    <div class="carrossel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../produto/fotos/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../produto/fotos/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../produto/fotos/banner5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="icon-carousel" aria-hidden="true">
                    <i class='bx bx-chevron-left'></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="icon-carousel" aria-hidden="true">
                    <i class='bx bx-chevron-right' ></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

 
    <section class="principal-home">
        <div class="container-home">
        
            <div class="container-anuncio">
                <div class="card-anuncio-1">
                </div>
                <div class="card-anuncio-2">
                </div>
            </div>

            <div class="titulo-destaque">
                <h2>Produtos em destaque</h2>
            </div>

            <div class="container-pordutos-destaques">
                <?php
                    include "../produto/produto_destaque.php";
                ?>
            </div>

            <div class="promocao">
                <div class="titulo-destaque">
                    <h2>Promoções</h2>
                </div>
                <?php
                    include "../produto/produto_destaque_promocao.php";
                    ob_end_flush();
                ?>
            </div>
            
        </div>
    </section>

<?php
    include "rodape.php";
?>