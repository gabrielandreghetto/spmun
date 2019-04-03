<?php

require_once('../includes/header.php');

require_once('db_connect.php');

session_start();

function clear($input) {
  global $connect;

  $var = mysqli_escape_string($connect, $input);
  $var = htmlspecialchars($var);

  return $var;
}

if (isset($_POST['btn-delegate-cadastrar'])) {

  $nome = clear($_POST['nome']);
  $email = clear($_POST['email']);
  $telefone = clear($_POST['telefone']);
  $password = password_hash(clear($_POST['senha']), PASSWORD_DEFAULT);
  $celular = clear($_POST['celular']);
  $genero = clear($_POST['genero']);
  $nascimento = clear( $_POST['nascimento']);
  $nacionalidade = clear($_POST['nacionalidade']);
  $residencia = clear($_POST['residencia']);
  $escolar = clear($_POST['escolar']);
  $iescolar = clear($_POST['iescola']);
  $rg = clear($_POST['rg']);
  $rg_uf = clear($_POST['rg_uf']);
  $rne = clear($_POST['rne']);
  $cpf = clear($_POST['cpf']);
  $passport = clear($_POST['passport']);
  $cep = clear($_POST['cep']);
  $rua = clear($_POST['rua']);
  $rua_numero = clear($_POST['rua_numero']);
  $rua_compl = clear($_POST['rua_compl']);
  $rua_bairro = clear($_POST['rua_bairro']);
  $rua_cidade = clear($_POST['rua_cidade']);
  $rua_estado = clear($_POST['rua_estado']);
  $sangue = clear($_POST['sangue']);
  $health = clear($_POST['health']);
  $health_problem = clear($_POST['health_problem']);
  $food_rest = clear($_POST['food_rest']);
  $food_rest_type = clear($_POST['food_rest_type']);
  $ingles = clear($_POST['ingles']);
  $espanhol = clear($_POST['espanhol']);


  $sql = "INSERT INTO delegates (nome, email, telefone, celular, senha, genero, nascimento,
    nacionalidade, residencia_br, nivel, instituicao, rg, rg_uf, rne, cpf, passaporte, cep, rua, numero,
    complem, bairro, cidade, uf, sangue, saude, saude_probl, restr_alim, restr_alim_tipo, ingles, espanhol)
    VALUES ('$nome', '$email', '$telefone', '$celular', '$password', '$genero', '$nascimento', '$nacionalidade', '$residencia',
    '$escolar', '$iescolar', '$rg', '$rg_uf', '$rne', '$cpf', '$passport', '$cep', '$rua', '$rua_numero', '$rua_compl',
    '$rua_bairro', '$rua_cidade', '$rua_estado', '$sangue', '$health', '$health_problem', '$food_rest', '$food_rest_type',
    '$ingles', '$espanhol')";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "sucesso";
    $resultado = "Realizado com sucesso!";

    // header('Location: ../index.php');
  } else {
    $_SESSION['mensagem'] = "erro";
    $resultado = mysqli_error($connect);

    // header('Location: ../index.php?erro');
  }
}

?>

<br>
<div class="row">
  <div class="col s12 l6 push-l3">
    <h3>Cadastro Concluido</h3>
    <br>
    <p><?php echo $resultado; ?></p>

    <div class="col s12">
      <b>Nome:</b> <?php echo "$nome"; ?>
    </div>
    <br>

    <div class="col s12">
      <b>E-mail:</b> <?php echo "$email"; ?>
    </div>
    <br>

    <div class="col s6">
      <b>Telefone:</b> <?php echo "$telefone"; ?>
    </div>

    <div class="col s6">
      <b>Celular:</b> <?php echo "$celular"; ?>
    </div>
    <br>

    <div class="col s6">
      <b>Genero:</b> <?php echo "$genero"; ?>
    </div>

    <div class="col s6">
      <b>Data de Nascimento:</b> <?php echo "$nascimento"; ?>
    </div>
    <br>

    <div class="col s6">
      <b>Nacionalidade:</b> <?php echo "$nacionalidade"; ?>
    </div>

    <div class="col s6">
      <b>Reside no Brasil?</b> <?php echo "$residencia"; ?>
    </div>
    <br>

    <div class="col s6">
      <b>RG:</b> <?php echo "$rg"; ?>
    </div>

    <div class="col s6">
      <b>UF:</b> <?php echo "$rg_uf"; ?>
    </div>

    <div class="col s6">
      <b>RNE:</b> <?php echo "$rne"; ?>
    </div>

    <div class="col s6">
      <b>Passaporte:</b> <?php echo "$passport"; ?>
    </div>

    <div class="col s12">
      <b>CPF:</b> <?php echo "$cpf"; ?>
    </div>
    <br>

    <div class="col s6">
      <b>Nivel:</b> <?php echo "$escolar"; ?>
    </div>

    <div class="col s6">
      <b>Instituicao:</b> <?php echo "$iescolar"; ?>
    </div>

    <div class="col s12">
      <b>CEP:</b> <?php echo "$cep"; ?>
    </div>

    <div class="col s6">
      <b>Rua:</b> <?php echo "$rua"; ?>
    </div>

    <div class="col s6">
      <b>Numero:</b> <?php echo "$rua_numero"; ?>
    </div>

    <div class="col s6">
      <b>Complemento:</b> <?php echo "$rua_compl"; ?>
    </div>

    <div class="col s6">
      <b>Bairro:</b> <?php echo "$rua_bairro"; ?>
    </div>

    <div class="col s6">
      <b>Cidade:</b> <?php echo "$rua_cidade"; ?>
    </div>

    <div class="col s6">
      <b>Estado:</b> <?php echo "$rua_estado"; ?>
    </div>

    <div class="col s6">
      <b>Problemas de saude:</b> <?php echo "$health"; ?>
    </div>

    <div class="col s6">
      <b>Qual:</b> <?php echo "$health_problem"; ?>
    </div>

    <div class="col s6">
      <b>Restricao Alimentar:</b> <?php echo "$food_rest"; ?>
    </div>

    <div class="col s6">
      <b>Qual:</b> <?php echo "$food_rest_type"; ?>
    </div>

    <div class="col s6">
      <b>Ingles:</b> <?php echo "$ingles"; ?>
    </div>

    <div class="col s6">
      <b>Espanhol:</b> <?php echo "$espanhol"; ?>
    </div>

  </div>
</div>

<?php

require_once('../includes/footer.php');

?>
