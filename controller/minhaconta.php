<?php

$smarty = new Template();

//Exibe o menu
Login::MenuCliente();

//Exibe a Mensagem de Bem Vindo na Minha conta
$smarty->display('minha_conta.tpl');
?>