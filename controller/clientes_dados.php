<?php 

$smarty = new Template();

Login::MenuCliente();

foreach($_SESSION['CLI'] as $campo => $valor){
         // conteúdo - echo var_dump($valor);
         // nome do campo - echo var_dump($campo);
         //$_SESSION['CLI']['cli_complemento'] - não aparece
         $smarty->assign(strtoupper($campo), $valor);
     }

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
    if(isset($_POST['complemento']))
    {
        $cli_complemento = NULL;
    }
    else
    {
        $cli_complemento = $_POST['complemento'];
    }
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