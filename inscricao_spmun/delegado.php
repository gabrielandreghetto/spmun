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

$sql = "SELECT * FROM delegates WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
?>

<div class="row">
  <div class="col s12 l6 push-l3">
    <div class="col s12">
      <h3>Olá <?php echo $dados['nome']; ?>!</h3>
      <hr>
    </div>

    <div class="row center-align">
      <div class="col s12 l4">
        <a href="cadastro-delegacao.php" class="waves-effect waves-light btn">Criar Delegação</a>
      </div>
        <br>
      <div class="col s12 l4">
        <a href="delegacao.php" class="waves-effect waves-light btn disabled">Minha Delegação</a>
      </div>
      <div class="col s12 l4">
        <a href="logout.php" class="waves-effect waves-light btn">Logout</a>
      </div>
    </div>

    <h5>Contato</h5>
    <div class="col s12">
      <b>E-mail:</b> <?php echo $dados['email']; ?>
    </div>
    <div class="col s6">
      <b>Telefone:</b> <?php echo $dados['telefone']; ?>
    </div>
    <div class="col s6">
      <b>Celular:</b> <?php echo $dados['celular']; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 l6 push-l3">
    <h5>Informações</h5>
    <div class="col s6">
      <b>Genero:</b> <?php echo $dados['genero']; ?>
    </div>
    <div class="col s6">
      <b>Data de Nascimento:</b> <?php echo $dados['nascimento']; ?>
    </div>
    <div class="col s6">
      <b>Nacionalidade:</b> <?php echo $dados['nacionalidade']; ?>
    </div>

    <div class="col s6">
      <b>Reside no BR?</b> <?php echo $dados['residencia_br']; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 l6 push-l3">
    <h5>Documentos</h5>
    <div class="col s6">
      <b>RG:</b> <?php echo $dados['rg']; ?>
    </div>
    <div class="col s6">
      <b>UF:</b> <?php echo $dados['rg_uf']; ?>
    </div>
    <div class="col s6">
      <b>RNE:</b> <?php echo $dados['rne']; ?>
    </div>
    <div class="col s6">
      <b>Passaporte:</b> <?php echo $dados['passaporte']; ?>
    </div>
    <div class="col s12">
      <b>CPF:</b> <?php echo $dados['cpf']; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 l6 push-l3">
    <h5>Endereço</h5>
    <div class="col s12">
      <b>CEP:</b> <?php echo $dados['cep']; ?>
    </div>
    <div class="col s6">
      <b>Rua:</b> <?php echo $dados['rua']; ?>
    </div>
    <div class="col s6">
      <b>Numero:</b> <?php echo $dados['numero']; ?>
    </div>
    <div class="col s6">
      <b>Complemento:</b> <?php echo $dados['complem']; ?>
    </div>
    <div class="col s6">
      <b>Bairro:</b> <?php echo $dados['bairro']; ?>
    </div>
    <div class="col s6">
      <b>Cidade:</b> <?php echo $dados['cidade']; ?>
    </div>
    <div class="col s6">
      <b>Estado:</b> <?php echo $dados['uf']; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 l6 push-l3">
    <h5>Escolaridade</h5>
    <div class="col s6">
      <b>Nível:</b> <?php echo $dados['nivel']; ?>
    </div>
    <div class="col s6">
      <b>Instituição:</b> <?php echo $dados['instituicao']; ?>
    </div>
    <div class="col s6">
      <b>Inglês:</b> <?php echo $dados['ingles']; ?>
    </div>
    <div class="col s6">
      <b>Espanhol:</b> <?php echo $dados['espanhol']; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12 l6 push-l3">
    <h5>Saúde</h5>
    <div class="col s12">
      <b>Tipo Sanguineo:</b> <?php echo $dados['sangue']; ?>
    </div>
    <div class="col s6">
      <b>Tem problema de saúde?</b> <?php echo $dados['saude']; ?>
    </div>
    <div class="col s6">
      <b>Qual(is)?</b> <?php echo $dados['saude_probl']; ?>
    </div>
    <div class="col s6">
      <b>Tem restrição alimentar?</b> <?php echo $dados['restr_alim']; ?>
    </div>
    <div class="col s6">
      <b>Qual(is)?</b> <?php echo $dados['restr_alim_tipo']; ?>
    </div>
  </div>
</div>


<?php
//Inclui o Footer
require_once('includes/footer.php');
?>
