<?php

$smarty = new Template();
$produtos = new Produtos();
$produtos->GetProdutos();


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_HOME', Rotas::pag_Home());


$smarty->assign ('CARRINHO', 'Carrinho'); 
$smarty->display('carrinho.tpl');

?>
