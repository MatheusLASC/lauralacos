<?php
/* Smarty version 3.1.36, created on 2020-11-18 03:46:49
  from 'C:\xampp\htdocs\lauralacos\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb48b19b5b738_06960930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8dbd4b39b2969355616f3ce5384bf5a2952b640' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\cadastro.tpl',
      1 => 1605402170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb48b19b5b738_06960930 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cadastro">
    <form action="#" method="post">
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 30em" value="">
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
                </div>
            </fieldset>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 20em" value="">
            </div>
            <div class="campo">
                <label for="cpf">CPF</label>
                <input id="cpf" type="text" required/>
            </div>
            <br><br><br><br>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="cep">CEP</label>
		            <input id="cep" type="text" style="width: 10em" required/>
                </div>
                <div class="campo">
                    <label for="endereco">Endereço</label>
		            <input id="endereco" type="text" style="width: 20em" required/>
                </div>
                <div class="campo">
                    <label for="numero">Número</label>
		            <input id="numero" type="text" style="width: 5em"/>
                </div>
                <div class="campo">
                    <label for="complemento">Complemento</label>
		            <input id="complemento" type="text"/>
                </div>
                <div class="campo">
                    <label for="bairro">Bairro</label>
		            <input id="bairro" type="text" required/>
                </div>
                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 15em" value="">
                </div>
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
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

            <button type="submit" name="submit" class="botao">Enviar</button>
        </fieldset>
    </form>
</div><?php }
}
