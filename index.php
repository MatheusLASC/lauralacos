<?php

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION))
{
    session_start();
}

/*
if(!isset($_SESSION['PED']['pedido'])){
	$_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
}

if(!isset($_SESSION['PED']['ref'])){
	$_SESSION['ref'] = date('ymdHms');
}
*/

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
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
//$smarty->assign('PAG_HOME', Rotas::pag_Home());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());

if(Login::Logado()){
	$smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}


/* echo Rotas :: pag_Carrinho() .'<br>'; */

$smarty->display('index.tpl');
?>