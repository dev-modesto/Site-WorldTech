<?php
  include "../adm/base.php";
  include "../adm/seguranca_adm.php";
?>
<?php
    include "../adm/conexaoTech.php";
    $sql = "select * from produto order by id"; 
    $seleciona = mysqli_query($conexaoTech,$sql);
?>



<section class="principal-secao-global">

  <h1 class="text-center">Produtos Cadastrados</h1>  

  <div class="text-end btn-produto">
    <a href="produto.php">
      <button type="button" class="btn-cadastro-cadastrar btn-cadastro-secondary">Novo Produto</button>
    </a>
  </div>

  <table class="tbl_listar">
      <tr>
          <th>id</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Categoria</th>
          <th>Foto</th>
          <th>Controle</th>
      </tr>

      <?php
          while($exibe = mysqli_fetch_array($seleciona)){
              $id = $exibe['id'];
      ?>

      <tr>
          <td><?php echo $exibe ['id']?></td>
          <td><?php echo $exibe ['nome']?></td>
          <td><?php echo $exibe ['descricao']?></td>
          <td>R$ <?php echo number_format($exibe['preco'], 2, ",", "."); ?></td>
          <td><?php echo $exibe ['categoria']?></td>
          <td><img src=" <?php echo $exibe['foto']?>" width="100px"></td>

        <td>
          <a href="visualizar_produto.php?id=<?php echo $id ?>">
             <span class="material-symbols-outlined" type="button" class="btnNew">visibility</span>
          </a>

          <a href="alterar_produto.php?id=<?php echo $id ?>">
          <span class="material-symbols-outlined" type="button" class="btnNew">edit</span></a>

          <a href="excluir_produto.php?id=<?php echo $id ?>" onclick="return confirm('Confirmar a exclusão do produto?')">
          <span class="material-symbols-outlined" type="button" class="btnNew">delete</span></a>
        </td>

      </tr>

      <?php
          }
      ?>
  </table>
</section>



<?php
    include "../adm/rodape.php";
?>


