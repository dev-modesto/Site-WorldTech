<?php

  include "../adm/conexaoTech.php";
  include "../adm/base.php";
  include "../adm/seguranca_adm.php";


  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from produto where id= '$id' ";
    $selecionar = mysqli_query($conexaoTech,$sql);
    $exibe = mysqli_fetch_array($selecionar);


    $descricao = $exibe['descricao'];
    $preco = $exibe['preco']; 
    $nomeProduto = $exibe['nome'];
    $categoria = $exibe['categoria'];  
    $foto = $exibe['foto'];
    $id = $exibe['id'];
    
?>

<section class="produto__principal__visualizar">

  <div class="produto__container__visualizar">

    <div>
      <a href="../produto/produto_espec.php?id=<?php echo $id?>">
        <img src="<?php echo $foto ?>" alt="foto do produto" width="250px">
      </a>
    </div>

    <div class="alterar-produto format-cadastros">
      
      <div class="mb-3">
        <label for="id" class="form-label">id</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="id" value="<?php echo $id?>" disabled>
      </div>  

      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $nomeProduto?>" disabled>
      </div>  

      <div class="mb-3">
          <label for="preco" class="form-label">Preço R$</label>
          <input type="text" class="form-control" id="preco" name="preco" placeholder="Ex.: 149.99" value="<?php echo $preco?>" disabled>
      </div>

      <div class="mb-3">
          <label for="categoria" class="form-label">Categoria</label>
          <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria" value="<?php echo $categoria?>" disabled>
      </div>

      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição" disabled><?php echo $descricao?></textarea>
      </div>

      <div class="btn-cadastro">
          <a href="produto_listar.php"><button type="button" class="btn-cadastro-primary">Voltar</button></a>
          <a href="alterar_produto.php?id=<?php echo $id?>">
          <button type="submit" class="btn-cadastro-secondary">Editar dados</button></a>
      </div>

    </div>

</section>


<?php
  }
  else{
    echo "<p>Esta é uma página de tratamento de dados. </p>";
    echo "<p>Clique <a href='listar_produto.php'> aqui </a> para selecionar o produto selecionado";
  }

?>
