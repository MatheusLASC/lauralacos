<?php
/* Smarty version 3.1.36, created on 2020-11-24 21:14:10
  from 'C:\xampp\htdocs\lauralacos\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbda1d2eb89b7_06652019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30306cbce243b55c77f306f16eb2c09a82910ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\index.tpl',
      1 => 1606263013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbda1d2eb89b7_06652019 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laura Laços </title>
    <link rel="icon" href="view/assets/laco-preto.svg">

<!-- Imprementação Mapa de Calor (Funciona somente na hospedagem) -  Yandex.Metrika counter -->

<!--


<?php echo '<script'; ?>
 type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69698470, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
<?php echo '</script'; ?>
>

 -->

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/main.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/home.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/sobre.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/loja.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/pedido.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/contatos/contato.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/carrinhos/carrinho.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/login-cadastro.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/styles/responsive.css">
    <!-- JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/contatos/contato.js" type="text/javascript"><?php echo '</script'; ?>
>

</head>
<body>
    <!-- FALSO HEADER -->
    <div class="falsoheader">
        
    </div>
    <!-- HEADER -->
    <div class="header">
        <div class="logo">
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/logo-branco.png" alt="Logo Laura laços">
        </div>
        <nav class="menu">
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">HOME</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
">QUEM SOMOS</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">LOJA</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">CONTATO</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/carrinho.svg" alt="Carrinho">
            </a>
            <!-- Caso a pessoa esteja já logada, vai para conta dela, senão direciona para o Login -->
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">MINHA CONTA</a>
            <!-- Aqui abaixo editar o botão, só manter as questões lógicas
            Pode até ser colocado em outro local da página caso queira -->
            <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
            Olá: <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" style="font-weight: bold">Sair </a> 
            <?php }?>
        </nav>
    </div>
    
    <!-- BREAD CRUMB -->
    </ul>
    <?php 
    Rotas::get_Pagina();
    (Rotas::$pag);
    ?>
    <!-- BREAD CRUMB -->
    

    <!-- RODAPÉ -->
    <div class="rodape">
        <div class="mapa-do-site">
            <header>MAPA DO SITE</header>
            <div>
                <nav>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
">QUEM SOMOS</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">LOJA</a>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['C']->value['cate_nome'] == 'Pronta Entrega') {?> 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><span></span>PRONTA ENTREGA</a>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['C']->value['cate_nome'] == 'Sob Encomenda') {?> 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><span></span>SOB ENCOMENDA</a>
                    <?php }?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </nav>
                    
                <nav>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">CONTATO</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">CARRINHO</a>
                                    </nav>

            </div>  
        </div>

        <div class="contato">
            <header>
                CONTATO
            </header>
            
            <div>
                <a href="https://www.facebook.com/Lauraalacos/" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/logo-face-redondo.png" alt="Facebook" > FACEBOOK</a>
                <a href="https://www.instagram.com/lauralacos_/" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/logo-insta-redondo.png" alt="Instagram">INSTAGRAM</a>
                <a href="https://www.whatsapp.com/?lang=pt_br" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/logo-whats-redondo.png" alt="WhatsApp"> WHATSAPP - (54) 99709 1864</a>
              
            </div>
            
        </div>
    
    </div>
    
</body>
</html>



        

            
<?php }
}
