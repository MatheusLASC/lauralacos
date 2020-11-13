<?php

if(isset($_SESSION['PROC'])) {

$smarty = new Template();
$carrinho = new Carrinho();
$smarty->assign ('PROC', $carrinho->GetCarrinhos()); 
$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
//$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
//$smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
$smarty->assign('PESO', number_format($carrinho->GetPeso(),3,'.',''));

$smarty->assign ('CARRINHO', 'Carrinho'); 
$smarty->display('carrinho.tpl');

}
else
{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}

?>
