<?php
require './lib/autoload.php';
$smarty = new Template();
/* Rotas :: get_pagina(); */
$categorias = new Categorias();
$categorias->GetCategorias();
//valores para o Template
/* $smarty->assign('NOME', 'MATHEUS'); */
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_HOME', Rotas::pag_Home());
$smarty->assign('CATEGORIAS', $categorias->GetItens());

/* echo Rotas :: pag_Carrinho() .'<br>'; */

$smarty->display('index.tpl');
?>