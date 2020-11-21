<?php

$smarty = new Template();
$produtos = new Produtos();

if(isset(Rotas::$pag[1]))
{
    //gerando o nova caminho pra fazer o filtro
    // Ele verifica aonde está a rota através do caminho no Cate_Link na classe Categorias
    $smarty->assign('PROCAT', $produtos->GetProdutosCateID(Rotas::$pag[1]));
}
else
{
    $produtos->GetProdutos();
}

$categorias = new Categorias();
$categorias->GetCategorias();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());



$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());

//var_dump($produtos->GetProdutos()); -- o null estava aqui pois ele estava acessando a getprodutos

$smarty->assign ('PRODUTOS', 'Loja'); 
$smarty->display('loja.tpl');
//echo '<pre>';
//var_dump($produtos->GetItens());
//echo '<pre>';

?>
