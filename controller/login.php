<?php

$smarty = new Template();

$login = new Login();



$user = 'amanda@gmail.com';
$senha = '123';

$login->GetLogin($user,$senha);

$smarty->display('login.tpl');
?>