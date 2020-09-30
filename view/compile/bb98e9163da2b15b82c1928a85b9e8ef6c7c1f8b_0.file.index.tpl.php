<?php
/* Smarty version 3.1.36, created on 2020-09-23 15:31:54
  from 'C:\xampp\htdocs\PA6_LauraLacos\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f6b4e4a6e7c67_91848371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb98e9163da2b15b82c1928a85b9e8ef6c7c1f8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PA6_LauraLacos\\view\\index.tpl',
      1 => 1600867913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6b4e4a6e7c67_91848371 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laura Laços - Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Fonte 'LAÇOS' errada, trocar futuramente -->
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/header-home.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/sobre.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/rodape.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/responsive.css">

</head>
<body>
    <div id="header-home">
        <nav class="menu">
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/index.html">HOME</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/sobre.html">QUEM SOMOS</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/loja.html">LOJA</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/contato.html">CONTATO</a>
            <a href="#">
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/carrinho.svg" alt="Carrinho">
            </a>
        </nav>
        <div class="logo">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/logo-branco.png" alt="Logo Laura laços">
        </div>
        
    </div>
    

    <div class="quem-somos">
        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/quadrado-vazio.svg" alt="Foto Quem Somos">
        <div>
            <p> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas sagittis elementum. Nam feugiat purus at feugiat gravida.
            </p>
            <p> 
                Etiam id odio eget justo luctus iaculis. Nunc lobortis in justo id aliquet. Mauris metus tortor, auctor id ullamcorper eu, placerat sit amet velit. Donec sed varius turpis. 
            </p>
        </div>
         
        <a href="#">
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="loja">
        <h1>Laços Personalizados</h1>
        <div class="home-cards-loja">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/quadrado-vazio.svg" alt="laço1">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/quadrado-vazio.svg" alt="laço2">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/quadrado-vazio.svg" alt="laço3">
        </div> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/loja.html"><span></span>IR PARA LOJA</a>
    </div>

    <div class="rodape">
        <div class="mapa-do-site">
            <header>MAPA DO SITE</header>
            <div>
                <nav>
                    <a href="#">QUEM SOMOS</a>
                    <a href="#">LOJA</a>
                    <a href="#"><span></span>PRONTA ENTREGA</a>
                    <a href="#"><span></span>SOB ENCOMENDA</a>
                </nav>
                    
                <nav>
                    <a href="#">CONTATO</a>
                    <a href="#">CARRINHO</a>
                    <a href="#">PERGUNTAS FREQUENTES</a>
                    <a href="#">MÉTODOS DE PAGAMENTO</a>
                </nav>

            </div>  
        </div>

        <div class="contato">
            <header>
                CONTATO
            </header>
            
            <div>
                <a href="#">FACEBOOK</a>
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/logo-instagram.svg" alt="logo insta">INSTAGRAM</a>
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/logo-whats.svg" alt=""> WHATSAPP</a>
                
            </div>
            
        </div>
    
    </div>
    
</body>
</html>



        

            
<?php }
}
