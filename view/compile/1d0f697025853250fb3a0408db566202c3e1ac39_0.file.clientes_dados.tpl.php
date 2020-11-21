<?php
/* Smarty version 3.1.36, created on 2020-11-21 19:51:24
  from 'C:\xampp\htdocs\lauralacos\view\clientes_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb961ac508823_27264537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d0f697025853250fb3a0408db566202c3e1ac39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\clientes_dados.tpl',
      1 => 1605984676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb961ac508823_27264537 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Importando Script Jquery-->
	<?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<h3>Meus Dados</h3>

<div class="cadastro">
    <form name="cadcliente" id="cadcliente" method="post" action="">
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 30em" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" required>
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 10em" value="<?php echo $_smarty_tpl->tpl_vars['CLI_TELEFONE']->value;?>
" required>
                </div>
            </fieldset>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 20em" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
"  required>
            </div>
            <div class="campo">
                <label for="cpf">CPF</label>
                <input id="cpf" name="cpf" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" required readonly/>
            </div>
            <br><br><br><br>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="cep">CEP</label>
		            <input id="cep" type="text" name="cep" style="width: 10em" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" required/>
                </div>
                <div class="campo">
                    <label for="endereco">Endereço</label>
		            <input id="endereco" type="text" name="endereco" style="width: 20em" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" required/>
                </div>
                <div class="campo">
                    <label for="numero">Número</label>
		            <input id="numero" type="text" name="numero" style="width: 5em"  value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" required/>
                </div>
                <div class="campo">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" name="complemento" value="<?php echo $_smarty_tpl->tpl_vars['CLI_COMPLEMENTO']->value;?>
" type="text"/>
                </div>
                <div class="campo">
                    <label for="bairro">Bairro</label>
		            <input id="bairro" type="text" name="bairro" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" required/>
                </div>
                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 15em" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" required>
                </div>
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" required>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
</option>
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
                </div>
            </fieldset>

<?php echo '<script'; ?>
 type="text/javascript">
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
					$("#endereco").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#estado").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				}
			});
		});
	<?php echo '</script'; ?>
>

    <label>Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
           <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <button type="submit" name="submit" class="botao">Gravar</button>
        </fieldset>
    </form>
</div><?php }
}
