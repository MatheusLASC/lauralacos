<?php

$smarty = new Template();
$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->display('produtos.tpl');

var_dump($produtos->GetProdutos());


?>
