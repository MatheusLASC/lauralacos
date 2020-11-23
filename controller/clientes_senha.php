<?php 

$smarty = new Template();

Login::MenuCliente();


if(isset($_POST['cli_senha_atual']) && isset($_POST['cli_senha'])){
	$senha_atual = md5($_POST['cli_senha_atual']);
	$senha_nova = $_POST['cli_senha'];
	$email = $_SESSION['CLI']['cli_email'];

	if($senha_atual != $_SESSION['CLI']['cli_pass']){
		echo'<h1 class="alert alert-danger"> A senha atual está incorreta</h1>';
		Rotas::Redirecionar(3, Rotas::pag_CLienteSenha());
		exit();
	}

	$clientes = new Clientes();
	$clientes->SenhaUpdate($senha_nova, $email);
	//echo'<h1 class="alert alert-success"> A senha foi alterada com sucesso, faça login com a nova senha!!</h1>';
	
	//Rotas::Redirecionar(3, Rotas::pag_Logoff());


	echo '<script> alert("A senha foi alterada com sucesso"); </script>';
	$login = new Login();
    $login->GetLogin($email, $senha_nova);
    Rotas::Redirecionar(0, Rotas::pag_MinhaConta());

}else{
	$smarty->display('clientes_senha.tpl');
}




 ?>