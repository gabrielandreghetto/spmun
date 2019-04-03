<?php
//Inclui o Header
require_once('includes/header.php');

//Estabelece Conexão
require_once('php_action/db_connect.php');

//Incia a Sessão
session_start();
$id = $_SESSION['id_usuario'];

//Checa se usuario esta logado
if (!isset($_SESSION['logado'])) {
  header('Location:index.php');
}

?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="row center-align">
  <div class="">
    <div class="col s12 m9 l6 offset-m2 offset-l3">
      <h3>Cadastro Delegação</h3>
      <br>

      <p class="left-align">Você, ao cadastrar a delegação, se tornará automaticamente o Chefe desta Delegação,
        representando em todos os momentos necessários.</p>

      <br>

      <form class="" action="php_action/delegation_create.php" method="post">
        <div class="input-field col s12">
          <input id="nome" type="text" class="validate" name="nome">
          <label for="nome">Nome da Delegação</label>
        </div>

        <div class="input-field col s12">
          <select name="escolar">
            <option value="" disabled selected>Escolha</option>
            <option value="EM">Ensino Medio</option>
            <option value="ES">Ensino Superior</option>
          </select>
          <label>Nivel Escolar</label>
        </div>
        <button type="submit" name="btn-delegation-create" class="waves-effect waves-light btn">Cadastrar</button>
      </form>

    </div>

  </div>

</div>

<br>

<script type="text/javascript">
$(document).ready(function(){
  $('select').formSelect();
});
</script>

<?php
//Inclui o Footer
require_once('includes/footer.php');
?>
