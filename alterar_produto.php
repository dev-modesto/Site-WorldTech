<?php

  include "../adm/conexaoTech.php";
  include "../adm/seguranca_adm.php";

// include "../adm/seguranca.php";

if(isset($_GET['id'])){
  //recebe os dados
  $id = $_GET['id'];
//escreve e executa

$sql = "select * from produto where id = $id";
$selecionar = mysqli_query($conexaoTech,$sql);
$exibe =  mysqli_fetch_array($selecionar);
  
  $id = $exibe['id'];
  $nomeProduto = $exibe['nome'];
  $preco = $exibe['preco'];
  $categoria = $exibe['categoria'];
  $descricao = $exibe['descricao'];
  $foto = $exibe['foto'];
?>

<?php
  include "../adm/base.php";
?>

<section class="principal-secao-global">
  <div class="container-cadastro-produto">
    <h1 class='text-center'>Alterar Produtos </h1>
    <hr>
    <form name="cadastro" method="post" action= "update_produto.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">


      <div class="alterar-produto format-cadastros">
          <div class="mb-3">
            <label for="id" class="form-label">id</label>
              <input type="text" class="form-control" id="id" name="id" placeholder="id" value="<?php echo $id?>" disabled>
          </div>  

          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $nomeProduto?>" required>
          </div>  

          <div class="mb-3">
              <label for="preco" class="form-label">Preço R$</label>
              <input type="text" class="form-control" id="preco" name="preco" placeholder="Ex.: 149.99" value="<?php echo $preco?>">
          </div>

          <div class="input-group mb-3" required>
            <label for="categoria" class="input-group-text">Categoria do produto:</label>
              <select id="categoria" name="categoria" class="form-select">
                <option value="<?php echo $categoria?>" selected> <?php echo $categoria?></option>
                <option name="categoria" value="Notebook">Notebook</option>
                <option name="categoria" value="Tablet">Tablet</option>
                <option name="categoria" value="Smartphone">Smartphone</option>
                <option name="categoria" value="Fone de ouvido">Fones de ouvido</option>
                <option name="categoria" value="Relógio">Relógio</option>
                <option name="categoria" value="Promocao">Promoção</option>
              </select>
          </div>

          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição"><?php echo $descricao?></textarea>
          </div>
            
          <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto" placeholder="foto" value="<?php echo $foto?>"required>
          </div>

          <div class="btn-cadastro">
              <a href="produto_listar.php"><button type="button" class="btn-cadastro-primary">Voltar</button></a>
              <button type="submit" class="btn-cadastro-secondary">Alterar</button>
      </div>


    </form>
  </div>
<?php
}
else{
  echo "<p>Esta é uma página de tratamento de dados. </p>";
  echo "<p>Clique <a href='listar_produto.php'> aqui </a> para selecionar o produto selecionado";
}



?>
</section>