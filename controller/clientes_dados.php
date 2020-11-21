<?php 

$smarty = new Template();

Login::MenuCliente();

//Chamando os dados da sessão do cliente
$smarty->assign('CLI_NOME', $_SESSION['CLI']['cli_nome']);
$smarty->assign('CLI_TELEFONE', $_SESSION['CLI']['cli_telefone']);
$smarty->assign('CLI_EMAIL', $_SESSION['CLI']['cli_email']);
$smarty->assign('CLI_CPF', $_SESSION['CLI']['cli_cpf']);
$smarty->assign('CLI_CEP', $_SESSION['CLI']['cli_cep']);
$smarty->assign('CLI_CEP', $_SESSION['CLI']['cli_cep']);
$smarty->assign('CLI_ENDERECO', $_SESSION['CLI']['cli_endereco']);
$smarty->assign('CLI_NUMERO', $_SESSION['CLI']['cli_numero']);

//lógica para complementos nulos
if(isset( $_SESSION['CLI']['cli_complemento']))
{
  $smarty->assign('CLI_COMPLEMENTO', $_SESSION['CLI']['cli_complemento']);
}
else
{
    $smarty->assign('CLI_COMPLEMENTO', '');
}

$smarty->assign('CLI_BAIRRO', $_SESSION['CLI']['cli_bairro']);
$smarty->assign('CLI_CIDADE', $_SESSION['CLI']['cli_cidade']);
$smarty->assign('CLI_UF', $_SESSION['CLI']['cli_uf']);


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
    //variaveis
    $cli_nome = $_POST['nome'];
    $cli_telefone = $_POST['telefone'];
    $cli_email = $_POST['email'];
    $cli_cpf = $_POST['cpf'];
    $cli_cep = $_POST['cep'];
    $cli_endereco = $_POST['endereco'];
    $cli_numero = $_POST['numero'];
    //lógica para atualizar sessão de complementos nulos
    $cli_complemento = $_POST['complemento'];
    $_SESSION['CLI']['cli_complemento'] = $_POST['complemento'];

    $cli_bairro = $_POST['bairro'];
    $cli_cidade = $_POST['cidade'];
    $cli_uf = $_POST['estado'];
    $cli_senha     = $_POST['cli_senha'];
    $cli_datacad  = $_SESSION['CLI']['cli_datacad'];
    $cli_horacad  = $_SESSION['CLI']['cli_horacad'];

     if($_SESSION['CLI']['cli_pass'] != md5($cli_senha)){
     	echo'<div class="alert alert-danger"> <p>A senha para confirmar a alteração está incorreta</p></div>';
     	Rotas::Redirecionar(3,Rotas::pag_ClienteDados());
     	exit();
     }



     $clientes = new Clientes();

     $clientes->Preparar($cli_nome, $cli_telefone,$cli_email,$cli_cpf,$cli_cep,$cli_endereco, $cli_numero,$cli_complemento,$cli_bairro,$cli_cidade,$cli_uf,$cli_senha, $cli_datacad, $cli_horacad);

     if(!$clientes->Editar($_SESSION['CLI']['cli_id'])){
     	echo '<div class="alert alert-danger">Ocorreu um erro ao editar os dados</div>';
     		exit();
     }else{
     	echo '<script> alert("Dados alterados com sucesso! Atualizando os dados do Login..."); </script>';
     	echo '<div class="alert alert-success">Dados atualizados com sucesso!'; 
     	echo '</div>';

     	$login = new Login();
     	$login->GetLogin($cli_email, $cli_senha);
     }

}
else{
	$smarty->display('clientes_dados.tpl');

}


 ?>