<?php

$smarty = new Template();

if(isset($_POST['nome']) && 
  isset($_POST['telefone']) &&
  isset($_POST['email']) && 
  isset($_POST['cpf']) &&
  isset($_POST['cep']) &&
  isset($_POST['endereco']) &&
  isset($_POST['numero']) &&
  isset($_POST['bairro']) &&
  isset($_POST['cidade']) &&
  isset($_POST['estado'])
)
{
    $cli_nome = $_POST['nome'];
    $cli_telefone = $_POST['telefone'];
    $cli_email = $_POST['email'];
    $cli_cpf = $_POST['cpf'];
    $cli_cep = $_POST['cep'];
    $cli_endereco = $_POST['endereco'];
    $cli_numero = $_POST['numero'];
    if(isset($_POST['complemento']))
    {
        $cli_complemento = '';
    }
    else
    {
        $cli_complemento = $_POST['complemento'];
    }
    $cli_bairro = $_POST['bairro'];
    $cli_cidade = $_POST['cidade'];
    $cli_uf = $_POST['estado'];
    $cli_senha = Sistema::GerarSenha();
    $cli_datacad = Sistema::DataAtualUS();
    $cli_horacad = Sistema::HoraAtual();

    $clientes = new Clientes();

    $clientes->Preparar($cli_nome, $cli_telefone,$cli_email,$cli_cpf,$cli_cep,$cli_endereco, $cli_numero,$cli_complemento,$cli_bairro,$cli_cidade,$cli_uf,$cli_senha, $cli_datacad, $cli_horacad);
    
    $clientes->Inserir();

    //ASSIGNS PARA TEMPLATE
    $smarty->assign('NOME', $cli_nome);
    $smarty->assign('SITE', Config::SITE_NOME);
    $smarty->assign('EMAIL', $cli_email);
    $smarty->assign('SENHA', $cli_senha);
    $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
    $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());

    $email = new EnviarEmail();
    $assunto = 'Cadastro Efetuado - ' . Config::SITE_NOME;
    $msg = $smarty->fetch('email_cliente_cadastro.tpl');
	$destinatarios = array($cli_email, Config::SITE_EMAIL_ADM);
    $email->Enviar($assunto, $msg, $destinatarios);

    echo'<h1 class="alert alert-success"> Cadastro Efetuado!! A senha para fazer login foi enviada para seu email cadastrado. <br>' . 'Acesse seu email e confira!</h1>';
    Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());
}
else
{
    $smarty->display('cadastro.tpl');
}

?>