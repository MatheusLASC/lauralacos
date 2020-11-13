<?php

$smarty = new Template();

/* require './lib/autoload.php';
$smarty = new Template();
Rotas :: get_pagina(); */ 

//valores para o Template

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_HOME', Rotas::pag_Home());

/* echo Rotas :: pag_Carrinho() .'<br>'; */

// Código a ser utilizado para carregar as imagens das 3 produtos mais recentes (já está ordenado)
// Deve-se fazer na home.tpl uma logica com if para exibir somente os três primeiros
// Deixo aqui embaixo todas as chamada possíveis a serem utilizas
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
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
// trecho a ser utilizado

$smarty->assign ('HOME', 'Home');
$smarty->display('home.tpl');

?>