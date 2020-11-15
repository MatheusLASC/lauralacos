<?php
if(!isset($_SESSION))
{
    session_start();
}


if(!isset($_SESSION['pedido']))
{
  //código único baseado no momento do acesso
  //com codificação md5
  $_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
}

require './lib/autoload.php';
$smarty = new Template();
/* Rotas :: get_pagina(); */

/* <---------------------REDIRECIONAMENTO PARA HOME----------------->
header('Location: https://www.facebook.com/', true, 301);
  exit();
 */
//valores para o Template
/* $smarty->assign('NOME', 'MATHEUS'); */

$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->GetItens());

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_HOME', Rotas::pag_Home());

/* echo Rotas :: pag_Carrinho() .'<br>'; */

$smarty->display('index.tpl');
?>