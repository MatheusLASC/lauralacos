<?php
/* Smarty version 3.1.36, created on 2020-11-16 21:54:44
  from 'C:\xampp\htdocs\lauralacos\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb2e714393da7_88343419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f00b9ffff556b44b4f86942db41fb492adba89e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\menu_cliente.tpl',
      1 => 1605560072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb2e714393da7_88343419 (Smarty_Internal_Template $_smarty_tpl) {
?><!--  Esta página é o menu completo das funções do cliente
Deixarei numa pasta chamada referências a imagem da tela
Dai você monta estrutura conforme você imagina, mantendo o que precisamos
-->
<h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
<section class="row">
    
    <div class="text-center">
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>
        
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>
        <a href="" class="btn btn-warning"> Alterar Senha </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
           
        
    </div>              
    
</section><?php }
}
