# lauralacos
Projeto de Desenvolvimento WEB - Site Laura Laços - Grupo 12
Desenvolvedores: Matheus Lima de Almeida e Lorraine Paloschi (matéria Desenvolvimento Web e PA VI) e Amanda Perrone (exclusivamente integrante pela matéria de PA VI)


### Descrição do Projeto
Este projeto consiste em um e-commerce para auxiliar duas microempreendedoras, o site foi criado para facilitar o mostruário e aumentar as vendas dos produtos.</p>

	🎲 Como rodar a aplicação/testes (Site Hospedado)
  - Basta acessar o link http://lauralacos-com-br.umbler.net/
  Para usar a versão gratuita de hospedagem será necessário inserir o ```usuario: umbler e a senha: testehospedagem```


	🎲 Pré-requisitos e como rodar a aplicação/testes (Servidor local)

	Antes de começar, você vai precisar ter instalado em sua máquina a seguinte ferramenta:
	Para ter acesso ao servidor local do projeto será necessário usar a ferramenta ```[Xampp]```(https://www.apachefriends.org/pt_br/index.html), que irá controlar o acesso ao banco de dados e ao servidor local.

	🎲 Rodando o Back End (servidor)
	
		
	 Após concluir a instalação do programa, será necessário clonar o projeto dentro da seguinte pasta: C:\xampp\htdocs 
		
	- Abra a aplicação ```XAMPP Control Panel``` e pressione "Start" para os seguintes serviços: ```Apache e MySQL```
		
	- Após isso, o servidor local já estará funcionando. 
		
	- Será necessário acessar a pagina http://localhost/phpmyadmin/ para poder inserir o banco de dados do projeto, para isso você precisará clicar em "Novo" e inserir o nome de "lauralacos". Após a base criada, clique sobre ela e procure o botão "Importar" que está na aba superior do site. Clique em "escolher arquivo" e vá para a pasta: C:\xampp\htdocs\lauralacos\Banco de Dados, selecione o arquivo "lauralacos.sql" e pressione em "Abrir", você será redirecionado ao navegador novamente, basta buscar o botão "Executar" na parte inferior da pagina e pressiona-lo.
		
	- Após o banco de dados inserido, entre na pasta C:\xampp\htdocs\lauralacos\model e abra o arquivo Config.class.php e altere as configurações BD_USER e
    BD_SENHA conforme os dados do seu phpmyadmin. Com isso você já está pronto para acessar a página da loja.
	
	
	
	🎲 Rodando a aplicação
		
	- Para acessar basta abrir em seu navegador de preferencia e digitar ```http://localhost/lauralacos/```
		
	- Para poder realizar uma compra no site, será necessário criar uma conta. E isso será possivel ao acessar a aba "Minha Conta" e selecionando o botão ```"Me cadastrar"```, para finalizar o cadastro basta clicar em "enviar"
		
	- Após logar, o usuário poderá verificar a sua conta, seus pedidos, seus dados, os conteúdos em seu carrinho, solicitar alteração de senha ou encerrar o login. 
		
	- Para realizar uma compra, basta acessar a aba "Loja" do site. Para colocar um produto em seu carrinho basta clicar sobre ele, ele irá redirecionar para uma pagina onde exibirá mais informações do produto e assim você poderá selecionar o botão ```"Comprar"```. Logo após inserir o produto no carrinho você será direcionado para a pagina de carrinho e pode optar por confirmar o pedido ou comprar mais. 
		
	- Para conseguir confirmar o seu pedido, será necessário inserir o CEP para que possa ser calculado a taxa de envio para a sua residencia. Após selecionar o tipo de envio que mais te agrada, basta confirmar o pedido e você será redirecionado para uma pagina para confirmar o conteúdo do seu carrinho e valores e poderá selecionar para finalizar o pedido.
		
	- Após clicar em finalizar pedido, você será redirecionado para a pagina de pagamentos.  Para efetuar uma compra segura, vinculamos o nosso site a API da PagSeguro, que possui certificados de segurança, tornando sua compra totalmente segura. 


	🎲 Status do Projeto
  
	Projeto finalizado, aberto a melhorias

	


	🛠 Tecnologias
  - PHP 7
  - MySql
  - SmartyTemplate
  - JS
  - JQuery 
  - CSS
  - HTML
