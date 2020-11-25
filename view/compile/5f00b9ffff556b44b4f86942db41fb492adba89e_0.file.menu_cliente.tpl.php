<?php
/* Smarty version 3.1.36, created on 2020-11-24 21:33:45
  from 'C:\xampp\htdocs\lauralacos\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbda669a92946_76379035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f00b9ffff556b44b4f86942db41fb492adba89e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\menu_cliente.tpl',
      1 => 1606263013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbda669a92946_76379035 (Smarty_Internal_Template $_smarty_tpl) {
?><!--  Esta página é o menu completo das funções do cliente
Deixarei numa pasta chamada referências a imagem da tela
Dai você monta estrutura conforme você imagina, mantendo o que precisamos
-->
<center> 
<div id="menuCliente" style="margin: 25px">
    <h4 style="font-size: 30px; font-family: var(--font-laura)"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
    <br>
    <center> 
  <!--  <section style="display: flex"> -->
    

        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Minha Conta</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Pedidos</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Meus Dados</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Carrinho</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Alterar Senha</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Sair</a>
  
  <!--  </section> -->
    </center> 
</div>
</center> <?php }
}
