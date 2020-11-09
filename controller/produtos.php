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


$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());

//var_dump($produtos->GetProdutos()); -- o null estava aqui pois ele estava acessando a getprodutos

$smarty->assign ('PRODUTOS', 'Loja'); 
$smarty->display('loja.tpl');
//echo '<pre>';
//var_dump($produtos->GetItens());
//echo '<pre>';

?>
