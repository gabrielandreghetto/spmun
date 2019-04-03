<?php
//Inclui o Header
require_once('../includes/header.php');

//Estabelece Conexão
require_once('db_connect.php');

//Incia a Sessão
session_start();
$id = $_SESSION['id_usuario'];

//Checa se usuario esta logado
if (!isset($_SESSION['logado'])) {
  header('Location: ../index.php');
}

if (isset($_POST['btn-delegation-create'])) {
  $nome = $_POST['nome'];
  $nivel = $_POST['escolar'];
  $id_head = $_SESSION['id_usuario'];

  $sql_head = "SELECT nome FROM delegates WHERE id = '$id_head'";
  $resultado_head = mysqli_query($connect, $sql_head);
  $dados_head = mysqli_fetch_array($resultado_head);
  $nome_head = $dados_head['nome'];

  // $sql_delegation = "INSERT INTO delegations (nome, nivel, id_head) VALUES ('$nome', '$nivel', '$id_head')";

  // if (mysqli_query($connect, $sql_delegation)) {
  //   $_SESSION['mensagem'] = "sucesso";
  //   $resultado = "Realizado com sucesso!";
  //
  //   // header('Location: ../index.php');
  // } else {
  //   $_SESSION['mensagem'] = "erro";
  //   $resultado = mysqli_error($connect);
  //
  //   // header('Location: ../index.php?erro');
  // }
}




?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="row">
  <div class="col s12 m9 l6 offset-m2 offset-l3">
    <h3>Escolha os delegados</h3>
    <br>
    <?php echo "$nome - $nivel - $nome_head - $resultado";?>
    <br>
    <?php if (isset($_POST['btn-add-delegate'])) {
      $email = $_POST['email_delegate'];

      $sql_delegate = "SELECT id, nome, email FROM delegates WHERE email = '$email'";
      $resultado_delegate = mysqli_query($connect, $sql_delegate);
      $dados_delegate = mysqli_fetch_array($resultado_delegate);
      $id_delegate = $dados_delegate['id'];
      $nome_delegate = $dados_delegate['nome'];
      $email_delegate = $dados_delegate['email'];

      echo "$id_delegate - $nome_delegate - $email_delegate";
    } ?>
    <form class="" action="delegation_create.php" method="post">
      <input type="text" name="email_delegate" value="" placeholder="email do delegado">
      <button type="submit" name="btn-add-delegate">Adicionar</button>
    </form>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function(){
  $('select').formSelect();
});
</script>

<?php
//Inclui o Footer
require_once('../includes/footer.php');
?>
