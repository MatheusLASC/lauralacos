<!--Importando Script Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="cadastro">
    <form action="#" method="post">
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 30em" value=""  required>
                </div>
                 <div class="campo">
                    <label for="telefone">DDD</label>
                    <input type="text" id="ddd" name="ddd" style="width: 4em" value=""  required>
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 10em" value=""  required>
                </div>
            </fieldset>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 20em" value=""  required>
            </div>
            <div class="campo">
                <label for="cpf">CPF</label>
                <input id="cpf" name="cpf" type="text" required/>
            </div>
            <br><br><br><br>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="cep">CEP</label>
		            <input id="cep" type="text" name="cep" style="width: 10em" required/>
                </div>
                <div class="campo">
                    <label for="endereco">Endereço</label>
		            <input id="endereco" type="text" name="endereco" style="width: 20em" required/>
                </div>
                <div class="campo">
                    <label for="numero">Número</label>
		            <input id="numero" type="text" name="numero" style="width: 5em" required/>
                </div>
                <div class="campo">
                    <label for="complemento">Complemento</label>
		            <input id="complemento" name="complemento" type="text"/>
                </div>
                <div class="campo">
                    <label for="bairro">Bairro</label>
		            <input id="bairro" type="text" name="bairro" required/>
                </div>
                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 15em" value="" required>
                </div>
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" required>
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
            <button type="submit" name="submit" class="botao">Enviar</button>
        </fieldset>
    </form>
</div>