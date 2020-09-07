<?php
require './lib/autoload.php';
$smarty = new Template();
Rotas :: get_pagina();

//valores para o Template
$smarty->assign('NOME', 'MATHEUS');

echo Rotas :: pag_Carrinho() .'<br>';

$smarty->display('index.tpl');
?>