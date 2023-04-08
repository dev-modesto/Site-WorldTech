<?php
  include "../adm/conexaoTech.php";

  $where = "";
  if (isset($_POST['categoria']) && $_POST['categoria'] != "Todos") {
    $categoria = $_POST['categoria'];
    $where = "WHERE categoria = '$categoria'";
  }

  $sql = "SELECT * FROM produto $where ORDER BY descricao";
  $seleciona = mysqli_query($conexaoTech, $sql);

?>


<?php
  include "../adm/base.php";
?>


<?php

$maxProdutosPorPagina = 17;

$paginaAtual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;

$primeiroProduto = ($paginaAtual - 1) * $maxProdutosPorPagina;
$limit = "LIMIT $primeiroProduto, $maxProdutosPorPagina";
$categoria = isset($_POST['categoria']) && $_POST['categoria'] != "Todos" ? $_POST['categoria'] : null;

$where = $categoria ? "WHERE categoria = '$categoria'" : "";

$sql = "SELECT * FROM produto $where ORDER BY descricao $limit";
$seleciona = mysqli_query($conexaoTech, $sql);

$sqlTotal = "SELECT COUNT(*) as total FROM produto $where";
$resultadoTotal = mysqli_query($conexaoTech, $sqlTotal);
$linhaTotal = mysqli_fetch_assoc($resultadoTotal);
$totalProdutos = $linhaTotal['total'];
$totalPaginas = ceil($totalProdutos / $maxProdutosPorPagina);
?>


<section class="principal-produto">
  <div class="container-card-pdutos">
    <?php while($exibe = mysqli_fetch_array($seleciona)) { ?>

          <div class="carrossel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">

                <!-- botões de indicadores -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="fotos/banner4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="fotos/banner3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="fotos/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="fotos/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="fotos/banner4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>

                <!-- botões anterior e próximo -->
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

      <div class="container-produto">
          <div class="container-produto-titulo">
            <h4>Encontre o produto ideal</h4>
          </div>

          <div class="container-menu-produtos-categorias">

            <form method="post" class="mb-3">
              
              <div class="btn-grupo-categorias" role="group">
                <button type="submit" name="categoria" value="Notebook" class="btn-produtos-categorias">Notebooks</button>
                <button type="submit" name="categoria" value="Tablet" class="btn-produtos-categorias">Tablets</button>
                <button type="submit" name="categoria" value="Smartphone" class="btn-produtos-categorias">Smartphones</button>
                <button type="submit" name="categoria" value="Fone de ouvido" class="btn-produtos-categorias">Fones de ouvido</button>
                <button type="submit" name="categoria" value="Relógio" class="btn-produtos-categorias">Relógios</button>
                <button type="submit" name="categoria" value="Promocao" class="btn-produtos-categorias">Promoção</button>
                <button type="submit" name="categoria" value="Todos" class="btn-produtos-categorias ">Todos os produtos</button>
              </div>
              
            </form>
          </div>

          <!-- ativar este form quando tela smartphone -->
            <form method="post" class="mb-3 filter">

              <div class="input-group filtro-categoria">
                <label for="categoria" class="input-group-text">Categoria:</label>
                  <select id="categoria" name="categoria" class="form-select">
                    <option value="Todos">Todos</option>
                    <option value="Notebook">Notebooks</option>
                    <option value="Tablet">Tablets</option>
                    <option value="Smartphone">Smartphones</option>
                    <option value="Fone de ouvido">Fones de ouvido</option>
                    <option value="Relógio">Relógios</option>
                    <option value="Promoção">Promoção</option>
                    <button value="Relógio">R</button>
                  </select>
                <button type="submit" class="btn btn-primary">Filtrar</button>
              </div>

            </form>

            

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
    <?php } ?>

  </div>

<div class="container-paginação">
  <ul class="paginacao">
    <?php if ($totalPaginas > 1) { ?>
      <li class="page-item <?php if ($paginaAtual == 1) echo "disabled"; ?>">
        <a class="page-link" href="?pagina=<?php echo $paginaAtual - 1; ?>" aria-label="Anterior">
          <i class='bx bx-chevron-left'></i>
        </a>
      </li>

      <?php for ($i = 1; $i <= $totalPaginas; $i++) { ?>
        <li class="page-item pagina-ativa <?php if ($i == $paginaAtual) echo "active"; ?>">
          <a class="page-link link-pagina" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
        </li>
      <?php } ?>

      <li class="page-item <?php if ($paginaAtual == $totalPaginas) echo "disabled"; ?>">
        <a class="page-link" href="?pagina=<?php echo $paginaAtual + 1; ?>" aria-label="Próximo">
          <i class='bx bx-chevron-right'></i>
        </a>
      </li>
    <?php } ?>
  </ul>
</div>


<?php
  include "../adm/rodape.php";
?>