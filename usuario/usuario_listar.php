<?php
  include "../adm/base.php";
?>
<?php
    include "../adm/conexaoTech.php";
    include "../adm/seguranca_adm.php";
    $sql = "select * from usuario order by nome"; 
    $seleciona = mysqli_query($conexaoTech,$sql);
?>

<section class="principal_usuario_listar">
  <h1 class="text-center">Listar Usuários</h1>  

  <table class="tbl_listar">
      <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>Data de Nascimento</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Senha</th>
          <th>Nivel</th>
          <th>Controle</th>
      </tr>

      <?php
          while($exibe = mysqli_fetch_array($seleciona)){
              $cpf = $exibe['cpf'];
      ?>

      <tr>
          <td><?php echo $exibe ['nome']?></td>
          <td><?php echo $exibe ['cpf']?></td>
          <td><?php echo date('d/m/Y', strtotime($exibe['dataNascimento'])) ?></td>
          <td><?php echo $exibe ['telefone']?></td>
          <td><?php echo $exibe ['email']?></td>
          <td>***</td>
          <td><?php echo $exibe ['nivel']?></td>


            <td>
          <a href="usuario_visualizar.php?cpf=<?php echo $cpf?>">
             <span class="material-symbols-outlined" type="button" class="btnNew">visibility</span>
          </a>

          <a href="usuario_alterar.php?cpf=<?php echo $cpf?>">
          <span class="material-symbols-outlined" type="button" class="btnNew">edit</span></a>

          <a href="usuario_excluir.php?cpf=<?php echo $cpf?>" onclick="return confirm('Confirmar a exclusão do usuario?')">
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


