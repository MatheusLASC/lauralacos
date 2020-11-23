<?php
/* Smarty version 3.1.36, created on 2020-11-22 18:20:29
  from 'C:\xampp\htdocs\lauralacos\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbad61d7439c7_46067381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '783e250e2ac7e3199b0cc1197c0ddb8eb1326e07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\home.tpl',
      1 => 1606080027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbad61d7439c7_46067381 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="home">
    <div class="quem-somos">
        <img src="view/assets/lauraemaria.png" alt="Foto Quem Somos">
        <div>
            <p> 
                Criando laços e enfeites personalizados com amor desde 2019.
            </p>
        </div>
         
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
">
            <img src="view/assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="lojaX">
    <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
    <h1>Ops... Nosso estoque está esgotado, volte mais tarde!</h1>
    <?php } else { ?>
    <h1>Lançamentos</h1>
        <div class="home-cards-loja">
        <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value >= 3) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" alt="laço1">
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_slug'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_img'];?>
" alt="laço2">
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[3]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[3]['pro_slug'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[3]['pro_img'];?>
" alt="laço3">
            </a>
        <?php } elseif ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value == 2) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" alt="laço1">
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_slug'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_img'];?>
" alt="laço2">
            </a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" alt="laço1">
            </a>
        <?php }?>
        </div> 
      
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><span></span>IR PARA LOJA</a>
    <?php }?>
    </div>

</div><?php }
}
