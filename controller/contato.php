<?php

$smarty = new Template();
$smarty->assign ('CONTATO', 'Página de Contatos');
$smarty->display('contato.tpl');

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

/* echo Rotas :: pag_Carrinho() .'<br>'; */




?>