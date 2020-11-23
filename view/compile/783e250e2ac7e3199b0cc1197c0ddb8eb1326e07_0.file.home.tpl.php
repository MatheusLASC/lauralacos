<?php
/* Smarty version 3.1.36, created on 2020-11-22 21:59:14
  from 'C:\xampp\htdocs\lauralacos\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbb0962eb71d9_78142450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '783e250e2ac7e3199b0cc1197c0ddb8eb1326e07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\home.tpl',
      1 => 1606093153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbb0962eb71d9_78142450 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="home">
    <div class="quem-somos">
        <img src="view/assets/lauraemaria.png" alt="Foto Quem Somos">
        <div>
            <p> 
                Criando laços e enfeites personalizados com amor desde 2019.
            </p>
        </div>
         
        <a class="go" href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
">
            <img src="view/assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="lojaXs" style="background-color: var(--color-cinza);
    display: flex;
    flex-direction: column;
    flex: 1;
    justify-content: center;
    margin-top: 100px;">
        <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
        <h1>Ops... Nosso estoque está esgotado, volte mais tarde!</h1>
        <?php } else { ?>
        <h1 style="font-family: var(--font-laura);
        display: flex;
        justify-content: space-around;
        margin-top: 35px;
        margin-bottom: 20px;
        font-size: 3rem;">Lançamentos</h1>
        <div class="home-cards-loja" style="margin: 0 auto;">
        <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value >= 3) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" alt="laço1">
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_slug'];?>
" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_img'];?>
" alt="laço2">
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[3]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[3]['pro_slug'];?>
" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[3]['pro_img'];?>
" alt="laço3">
            </a>
        <?php } elseif ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value == 2) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" alt="laço1">
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_slug'];?>
" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[2]['pro_img'];?>
" alt="laço2">
            </a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" alt="laço1">
            </a>
        <?php }?>
        </div> 
      
        <a class="irLoja" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" style="color: var(--color-vinho);
        background-color: var(--color-rosa);
        border-radius: 80px;
        font-family: 'Source Sans Pro', sans-serif;
        font-weight: bold;
        width: 100%;
        max-width: 200px;
        font-size: 2rem;
        height: 35px;
        display: flex;
        align-items: center;
        margin-top: 25px;
        margin-bottom: 25px;
        transition: 500ms;
        justify-content: center;
        align-self: center;
        cursor: pointer;"><span></span>IR PARA LOJA</a>
        <?php }?>
    </div>

</div><?php }
}
