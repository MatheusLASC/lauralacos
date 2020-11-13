<?php

if(isset($_SESSION['PRO'])) {



	$smarty = new Template();

	$carrinho = new Carrinho();

	$smarty->assign('PROC', $carrinho->GetCarrinhos());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));

	
	$smarty->assign('TEMA', Rotas::get_SiteTEMA());

    $pedido = new Pedidos();

	//teste:
	//$cliente = 1;
	//$cod = 1
    // Unico código que é reutilizavel depois
	// $cod = $_SESSION['pedido'];
	// $ref = '0547ref'
	
	if($pedido->PedidoGravar($cliente,$cod,$ref))
	{
		$pedido->LimparSessao();
	}

	$smarty->display('pedido_finalizar.tpl');

}
else{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}

?>