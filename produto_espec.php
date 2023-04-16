<?php

include "../adm/conexaoTech.php";
include "../adm/base.php";


if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "select * from produto where id= '$id' ";
  $selecionar = mysqli_query($conexaoTech,$sql);
  $exibe = mysqli_fetch_array($selecionar);
  $descricao = $exibe['descricao'];
  $preco = $exibe['preco']; 
  $nome = $exibe['nome'];
  $categoria = $exibe['categoria'];  
  $foto = $exibe['foto'];
  $cod = $exibe['id'];
  // $calculo = $preco*0.10;
  $parcelas12x = $preco+($preco*0.05);
  $mensalidades = $parcelas12x/12;
  
  ?>
<section class="produto__principal__visualizar">

  <div class="produto__container__visualizar">
    <div class="caminho-produto">
      <h6>Produtos/<?php echo " $categoria<span>/</span> $nome <span>/código:26</span>$cod"?></h6>
    </div>
    <div class="produto__container__visualizar--top">

        <div class="produto-visu-imagem">
            <div class="imagem-visu-imagem">
                <img src="<?php echo $foto ?>" alt="">
            </div>
        </div>

        <div class="produto-visu-info">
            <div class="produto-visu-info-titulo">
                <h2><?php echo $nome ?> </h2>
            </div>

            <div class="produto-visu-info-valores">
              <?php 
                  echo "<p class='valorAVista'>R$ " . number_format($preco,2,',','.') . "<span class='a-vista'> à vista</span></p>";
                  // echo "<p>R$ $calculo <span>à vista</span></p>";
                  echo "<p class='parcelas'>R$ " . number_format($parcelas12x,2,',','.') . "<span class='parcelas12x'> em até 12x de </span>" . "<span> R$ " . number_format($mensalidades,2,',','.') . "<span class='parcelas12x'> sem juros </span></p>";
              ?>
            </div>

            <div class="produto-btn-comprar btn-comprar-visu">
                <button type="submit" class="submit">Comprar</button>
            </div>

            <div class="frete">
              <span>Calcular frete e prazo de entrega</span>
              <div class="frete-container">
                <input type="text" name="frete" placeholder="00000-000">
                <div class="btn-frete">
                <button type="submit">Ok</button>
                </div>
              </div>
            </div>
        </div>

      </div>
      <hr>
      <div class="container-produto-visualizar-botton">

          <div class="container-produto-descricao">
          <?php 
                  echo "
                  <h4>Descrição</h4>
                  <p> $descricao </p>
                  ";
                ?>
            </div>
  
      </div>

  </div>

<?php
 
 include "produto_similares.php"

?>

</section>

<?php
  }
  else{
    echo "<p>Esta é uma página de tratamento de dados. </p>";
    echo "<p>Clique <a href='produtos.php'> aqui </a> para selecionar o produto selecionado";
  }

  include "../adm/rodape.php";
?>



