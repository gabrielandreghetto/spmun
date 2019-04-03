<?php
//Estabelece Conexão
require_once 'php_action/db_connect.php';

//Inclui o Header
require_once 'includes/header.php';

//Incia a Sessão
session_start();

//Checa se usuario esta logado
if (isset($_SESSION['logado'])) {
  header('Location: delegado.php');
}

if (isset($_POST['btn-login'])) {
  $erros = array();
  $login = mysqli_escape_string($connect, $_POST['email']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

  if (empty($login) or empty($senha)) {
    $erros[] = "<li>Login e senha devem estar preenchidos</li>";
  } else {
    $sql = "SELECT email from delegates where email = '$login'";
    $resultado = mysqli_query($connect, $sql);


    if (mysqli_num_rows($resultado) > 0) {

      $sql = "SELECT id, nome, email, senha from delegates where email = '$login'";
      $resultado = mysqli_query($connect, $sql);
      $dados = mysqli_fetch_array($resultado);

      if (password_verify($senha, $dados['senha'])) {

        mysqli_close($connect);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        // $_SESSION['id_usuario'] = "banana";
        header('Location: delegado.php');
        echo "Funcionou";

      } else {

        $erros[] = "<li> Senha Incorreta </li>";

      }

    } else {
      $erros[] = "<li> Usuario inexistente </li>";
    }

  }
}
?>

<br>
<div class="row">
  <div class="col s12 m9 l6 offset-m2 offset-l3 center-align">
    <h3>Login SPMUN</h3>

    <?php

    if (!empty($erros)) {
      foreach ($erros as $erro) {
        echo $erro;
      }
    }

    ?>

    <hr>

    <form class="" action="login.php" method="post">
      <div class="input-field col s12">
        <input id="email" type="text" class="validate" name="email">
        <label for="email">E-mail</label>
      </div>

      <div class="input-field col s12">
        <input id="senha" type="password" class="validate" name="senha">
        <label for="senha">E-mail</label>
      </div>

      <button type="submit" name="btn-login" class="waves-effect waves-light btn">Login</button>
    </form>
  </div>
</div>


<?php

require_once 'includes/footer.php';

?>
