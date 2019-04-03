<?php

require_once('includes/header.php');

require_once('php_action/db_connect.php');

session_start();

?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


<br>
<div class="row center-align">
  <div class="col s12 m9 l6 offset-m2 offset-l3">
    <h3 class="col s12">Registro Delegado</h3>
    <br>

    <form class="" action="php_action/delegate_create.php" method="post">


      <div class="input-field col s12">
        <input id="nome" type="text" class="validate" name="nome">
        <label for="nome">Nome Completo</label>
      </div>

      <div class="input-field col s12">
        <input id="email" type="email" class="validate" name="email">
        <label for="email">E-mail</label>
      </div>

      <div class="input-field col s6">
        <input id="phone" type="text" class="validate" name="telefone">
        <label for="phone">Telefone</label>
      </div>

      <div class="input-field col s6">
        <input id="cellphone" type="text" class="validate" name="celular">
        <label for="cellphone">Celular</label>
      </div>

      <div class="input-field col s6">
        <input id="password" type="password" class="validate" name="senha">
        <label for="password">Senha</label>
      </div>

      <div class="input-field col s6">
        <input id="repeat-password" type="password" class="validate" name="repete-senha">
        <label for="repeat-password">Repita sua senha</label>
      </div>

      <div class="input-field col s6">
        <select name="genero">
          <option value="" disabled selected>Escolha</option>
          <option value="feminino">Feminino</option>
          <option value="masculino">Masculino</option>
          <option value="outro">Outro</option>
        </select>
        <label>Gênero</label>
      </div>

      <div class="input-field col s6">
        <input id="nascimento" type="date" class="validate" name="nascimento">
        <label for="nascimento">Data de Nascimento</label>
      </div>

      <div class="input-field col s6">
        <select name="nacionalidade">
          <option value="" disabled selected>Escolha</option>
          <option value="br">Brasileira</option>
          <option value="outra">Outra</option>
        </select>
        <label>Nacionalidade</label>
      </div>

      <div class="input-field col s6">
        <select name="residencia">
          <option value="" disabled selected>Escolha</option>
          <option value="S">Sim</option>
          <option value="N">Não</option>
        </select>
        <label>É residente do Brasil?</label>
      </div>

      <div class="input-field col s3">
        <select name="escolar">
          <option value="" disabled selected>Escolha</option>
          <option value="EM">Ensino Medio</option>
          <option value="ES">Ensino Superior</option>
        </select>
        <label>Nivel Escolar</label>
      </div>

      <div class="input-field col s9">
        <input id="school" type="text" class="validate" name="iescola">
        <label for="school">Instituicao de Ensino</label>
      </div>

      <div class="input-field col s9">
        <input id="id_rg" type="number" class="validate" name="rg">
        <label for="id_rg">RG</label>
      </div>

      <div class="input-field col s3">
        <select name="rg_uf">
          <option value="" disabled selected>Escolha</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
        <label>UF</label>
      </div>

      <div class="input-field col s12">
        <input id="id_rne" type="text" class="validate" name="rne">
        <label for="id_rne">RNE</label>
      </div>

      <div class="input-field col s12">
        <input id="id_cpf" type="text" class="validate" name="cpf">
        <label for="id_cpf">CPF</label>
      </div>

      <div class="input-field col s12">
        <input id="id_passport" type="text" class="validate" name="passport">
        <label for="id_passport">Passaporte</label>
      </div>

      <div class="input-field col s12">
        <input id="cep" type="text" required name="cep"/>
        <label for="cep">CEP</label>
      </div>

      <div class="input-field col s9">
        <input id="logradouro" type="text" required name="rua"/>
        <label for="logradouro">Logradouro</label>
      </div>

      <div class="input-field col s3">
        <input id="numero" type="text" name="rua_numero"/>
        <label for="numero">Número</label>
      </div>

      <div class="input-field col s3">
        <input id="complemento" type="text" name="rua_compl"/>
        <label for="complemento">Complemento</label>
      </div>

      <div class="input-field col s9">
        <input id="bairro" type="text" required name="rua_bairro"/>
        <label for="bairro">Bairro</label>
      </div>

      <div class="input-field col s9">
        <input id="cidade" type="text" required name="rua_cidade"/>
        <label for="cidade">Cidade</label>
      </div>

      <div class="input-field col s3">
        <select id="uf" name="rua_estado">
          <option value="" disabled selected>Escolha</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
        <label>Estado</label>
      </div>

      <div class="input-field col s12">
        <select name="sangue">
          <option value="" disabled selected>Escolha</option>
          <option value="a-">A-</option>
          <option value="a+">A+</option>
          <option value="b-">B-</option>
          <option value="b+">B+</option>
          <option value="ab-">AB-</option>
          <option value="ab+">AB+</option>
          <option value="o-">O-</option>
          <option value="o+">O+</option>
        </select>
        <label>Tipo Sanguineo</label>
      </div>

      <div class="input-field col s4">
        <select name="health">
          <option value="" disabled selected>Escolha</option>
          <option value="S">Sim</option>
          <option value="N">Nao</option>
        </select>
        <label>Possui Problema de Saude?</label>
      </div>

      <div class="input-field col s8">
        <input id="health_problem" type="text" name="health_problem"/>
        <label for="health_problem">Qual problema?</label>
      </div>

      <div class="input-field col s4">
        <select name="food_rest">
          <option value="" disabled selected>Escolha</option>
          <option value="S">Sim</option>
          <option value="N">Nao</option>
        </select>
        <label>Possui Restricao Alimentar?</label>
      </div>

      <div class="input-field col s8">
        <input id="health_food" type="text" name="food_rest_type"/>
        <label for="health_food">Qual restricao?</label>
      </div>

      <div class="input-field col s6">
        <select name="ingles">
          <option value="" disabled selected>Escolha</option>
          <option value="Nao fala">Nao falo</option>
          <option value="basico">Basico</option>
          <option value="intermediario">Intermediario</option>
          <option value="avancado">Avancado</option>
          <option value="fluente">Fluente</option>
          <option value="nativo">Nativo</option>
        </select>
        <label>Nivel Ingles</label>
      </div>

      <div class="input-field col s6">
        <select name="espanhol">
          <option value="" disabled selected>Escolha</option>
          <option value="Nao fala">Nao falo</option>
          <option value="basico">Basico</option>
          <option value="intermediario">Intermediario</option>
          <option value="avancado">Avancado</option>
          <option value="fluente">Fluente</option>
          <option value="nativo">Nativo</option>
        </select>
        <label>Nivel Espanhol</label>
      </div>

      <br>

      <div class="center-align">
        <button type="submit" name="btn-delegate-cadastrar" class="waves-effect waves-light btn">Cadastrar</button>
      </div>

    </form>
    <br>
  </div>
</div>

<script type="text/javascript">

$("#phone").mask("+00 00 0000-0000");
$("#cellphone").mask("+00 00 00000-0000");

$("#id_cpf").mask("000.000.000-00");

$(document).ready(function(){
  $('select').formSelect();
});

	$("#cep").focusout(function(){
		//Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
			dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
			success: function(resposta){
				//Agora basta definir os valores que você deseja preencher
				//automaticamente nos campos acima.
				$("#logradouro").val(resposta.logradouro);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
				//Vamos incluir para que o Número seja focado automaticamente
				//melhorando a experiência do usuário
				$("#numero").focus();
			}
		});
	});
</script>

<?php

require_once('includes/footer.php');

?>
