<?php

$smarty = new Template();

$produtos = new Produtos ();
$produtos->GetProdutosID(Rotas::$pag[1]);

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTema());
$smarty->assign('IMAGENS', $produtos->GetItens());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());

/* $ID = Rotas::$pag[1];
foreach ($produtos->GetItens() as $pro) {
	$_SESSION['PROC'][$ID]['ID'] = $pro['pro_id'];
	$_SESSION['PROC'][$ID]['NOME'] = $pro['pro_nome'];
    $_SESSION['PROC'][$ID]['VALOR'] = $pro['pro_valor'];
    $_SESSION['PROC'][$ID]['VALOR_US'] = $pro['pro_valor_us'];
     $_SESSION['PROC'][$ID]['PESO'] = $pro['pro_peso'];
    $_SESSION['PROC'][$ID]['QTD'] = 1;
    $_SESSION['PROC'][$ID]['IMG'] = $pro['pro_img'];
    $_SESSION['PROC'][$ID]['LINK'] = 'sssslink';
    $ID++;
}  */


$smarty->display('produtos_info.tpl')
?>