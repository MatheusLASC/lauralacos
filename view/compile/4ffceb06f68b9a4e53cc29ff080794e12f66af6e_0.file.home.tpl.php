<?php
/* Smarty version 3.1.36, created on 2020-10-21 00:09:10
  from 'C:\xampp\htdocs\LauraLacos\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8f6006ce4259_63175091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ffceb06f68b9a4e53cc29ff080794e12f66af6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LauraLacos\\view\\home.tpl',
      1 => 1603231750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8f6006ce4259_63175091 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="home">
    <div class="quem-somos">
        <img src="view/assets/quadrado-vazio.svg" alt="Foto Quem Somos">
        <div>
            <p> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas sagittis elementum. Nam feugiat purus at feugiat gravida.
            </p>
            <p> 
                Etiam id odio eget justo luctus iaculis. Nunc lobortis in justo id aliquet. Mauris metus tortor, auctor id ullamcorper eu, placerat sit amet velit. Donec sed varius turpis. 
            </p>
        </div>
         
        <a href="#">
            
            <img src="assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="loja">
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
