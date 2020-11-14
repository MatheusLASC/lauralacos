<?php
/* Smarty version 3.1.36, created on 2020-11-14 20:28:14
  from 'C:\xampp\htdocs\lauralacos\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb02fceaf3e72_36748227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '783e250e2ac7e3199b0cc1197c0ddb8eb1326e07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\home.tpl',
      1 => 1605382080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb02fceaf3e72_36748227 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="home">
    <div class="quem-somos">
        <img src="view/assets/quadrado-vazio.svg" alt="Foto Quem Somos">
        <div>
            <p> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas sagittis elementum. Nam feugiat purus at feugiat gravida.
                Etiam id odio eget justo luctus iaculis. Nunc lobortis in justo id aliquet. Mauris metus tortor, auctor id ullamcorper eu, placerat sit amet velit. Donec sed varius turpis. 
            </p>
        </div>
         
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
">
            <img src="view/assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="lojaX">
        <h1>Laços Personalizados</h1>
        <div class="home-cards-loja">
            <img src="view/assets/quadrado-vazio.svg" alt="laço1">
            <img src="view/assets/quadrado-vazio.svg" alt="laço2">
            <img src="view/assets/quadrado-vazio.svg" alt="laço3">
        </div> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><span></span>IR PARA LOJA</a>
    </div>

</div><?php }
}
