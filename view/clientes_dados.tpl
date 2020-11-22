<!--Importando Script Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<h3 style="font-size: 25px; font-family: var(--font-laura); margin: 25px">Meus Dados</h3>

<div class="cadastro">
    <form name="cadcliente" id="cadcliente" method="post" action="">
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 30em" value="{$CLI_NOME}" required>
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 10em" value="{$CLI_TELEFONE}" required>
                </div>
            </fieldset>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 20em" value="{$CLI_EMAIL}"  required>
            </div>
            <div class="campo">
                <label for="cpf">CPF</label>
                <input id="cpf" name="cpf" type="text" value="{$CLI_CPF}" required readonly/>
            </div>
            <br><br><br><br>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="cep">CEP</label>
		            <input id="cep" type="text" name="cep" style="width: 10em" value="{$CLI_CEP}" required/>
                </div>
                <div class="campo">
                    <label for="endereco">Endereço</label>
		            <input id="endereco" type="text" name="endereco" style="width: 20em" value="{$CLI_ENDERECO}" required/>
                </div>
                <div class="campo">
                    <label for="numero">Número</label>
		            <input id="numero" type="text" name="numero" style="width: 5em"  value="{$CLI_NUMERO}" required/>
                </div>
                <div class="campo">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" name="complemento" value="{$CLI_COMPLEMENTO}" type="text"/>
                </div>
                <div class="campo">
                    <label for="bairro">Bairro</label>
		            <input id="bairro" type="text" name="bairro" value="{$CLI_BAIRRO}" required/>
                </div>
                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 15em" value="{$CLI_CIDADE}" required>
                </div>
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" required>
                        <option value="{$CLI_UF}">{$CLI_UF}</option>
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

<script type="text/javascript">
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
	</script>

    <label style="font-size: 20px">Digite sua senha atual por segurança<br><small style="font-size: 10px;">(sua senha não será alterada)</small></label>
    <br>
           <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <button type="submit" name="submit" class="botao" style="font-weight: bold">Gravar</button>
        </fieldset>
    </form>
</div>