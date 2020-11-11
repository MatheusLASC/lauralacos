<?php

$smarty = new Template();
$carrinho = new Carrinho();
$smarty->assign ('PROC', $carrinho->GetCarrinhos()); 

$smarty->assign ('CARRINHO', 'Carrinho'); 
$smarty->display('carrinho.tpl');
?>
