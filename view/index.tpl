<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laura Laços </title>
    <link rel="icon" href="view/assets/laco-preto.svg">
    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{$GET_TEMA}/styles/main.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/home.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/sobre.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/loja.css">
    <link rel="stylesheet" href="{$GET_TEMA}/contatos/contato.css">
    <link rel="stylesheet" href="{$GET_TEMA}/carrinhos/carrinho.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/login-cadastro.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/rodape.css">

    
    <link rel="stylesheet" href="{$GET_TEMA}/styles/responsive.css">
  <!-- Tentativa falha de chamar o arquivo .js -->
     <script src="{$GET_TEMA}/carrinhos/carrinho.js" type="text/javascript"></script>

</head>
<body>
    <!-- FALSO HEADER -->
    <div class="falsoheader">
        
    </div>
    <!-- HEADER -->
    <div class="header">
        <div class="logo">
            <img src="{$GET_TEMA}/assets/logo-branco.png" alt="Logo Laura laços">
        </div>
        <nav class="menu">
            <a href="{$PAG_HOME}">HOME</a>
            <a href="{$PAG_SOBRE}">QUEM SOMOS</a>
            <a href="{$PAG_PRODUTOS}">LOJA</a>
            <a href="{$PAG_CONTATO}">CONTATO</a>
            <a href="{$PAG_CARRINHO}">
                <img src="{$GET_TEMA}/assets/carrinho.svg" alt="Carrinho">
            </a>
        </nav>
    </div>
    
    <!-- BREAD CRUMB -->
    </ul>
    {php}
    Rotas::get_Pagina();
    (Rotas::$pag);
    {/php}
    <!-- BREAD CRUMB -->
    

    <!-- RODAPÉ -->
    <div class="rodape">
        <div class="mapa-do-site">
            <header>MAPA DO SITE</header>
            <div>
                <nav>
                    <a href="{$PAG_SOBRE}">QUEM SOMOS</a>
                    <a href="{$PAG_PRODUTOS}">LOJA</a>

                    {foreach from=$CATEGORIAS item=C}
                    {if $C.cate_nome == 'Pronta Entrega' } 
                    <a href="{$C.cate_link}"><span></span>PRONTA ENTREGA</a>
                    {/if}

                    {if $C.cate_nome == 'Sob Encomenda' } 
                    <a href="{$C.cate_link}"><span></span>SOB ENCOMENDA</a>
                    {/if}

                    {/foreach}

                </nav>
                    
                <nav>
                    <a href="{$PAG_CONTATO}">CONTATO</a>
                    <a href="{$PAG_CARRINHO}">CARRINHO</a>
                    {* <a href="{$PAG_FAQ}">PERGUNTAS FREQUENTES</a>
                    <a href="{$PAG_PAG}">MÉTODOS DE PAGAMENTO</a> *}
                </nav>

            </div>  
        </div>

        <div class="contato">
            <header>
                CONTATO
            </header>
            
            <div>
                <a href="https://www.facebook.com/Lauraalacos/" target="_blank"><img src="{$GET_TEMA}/assets/logo-face-redondo.png" alt="Facebook" > FACEBOOK</a>
                <a href="https://www.instagram.com/lauralacos_/" target="_blank"><img src="{$GET_TEMA}/assets/logo-insta-redondo.png" alt="Instagram">INSTAGRAM</a>
                <a href="https://www.whatsapp.com/?lang=pt_br" target="_blank"><img src="{$GET_TEMA}/assets/logo-whats-redondo.png" alt="WhatsApp"> WHATSAPP - (54) 99709 1864</a>
              
            </div>
            
        </div>
    
    </div>
    
</body>
</html>



        

            
