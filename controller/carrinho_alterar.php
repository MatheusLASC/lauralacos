<?php 

if(!isset($_POST['pro_id']) || $_POST['pro_id'] < 1){
	echo '<h1 class="alert alert-danger"> Erro na operação! </h1>';
	Rotas::Redirecionar(1, Rotas::pag_Carrinho());
	exit();
}

$id = (int)$_POST['pro_id'];

$carrinho = new Carrinho();

try {
	$carrinho->CarrinhoADD($id);
} catch (Exception $e) {
	echo '<h1 class="alert alert-danger"> Erro na operação! </h1>';
}

Rotas::Redirecionar(1, Rotas::pag_Carrinho());

 ?>