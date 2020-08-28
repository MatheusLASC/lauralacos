<?php
require './lib/autoload.php';
$smarty = new Template();

//valores para o Template
$smarty->assign('NOME', 'MATHEUS');

$smarty->display('index.tpl');
?>