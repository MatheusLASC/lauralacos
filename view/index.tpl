<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laura Laços - Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Fonte 'LAÇOS' errada, trocar futuramente -->
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{$GET_TEMA}/styles/main.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/falsoheader.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/header.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/sobre.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/rodape.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/responsive.css">

</head>
<body>
    <div class="falsoheader">
        
    </div>
    <div id="header">
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
    
{* <------ meio da página -------> *}

                </ul><!--fim do breadcrumb-->
            {php}
            Rotas::get_Pagina();
            (Rotas::$pag);
            {/php}
    </div>{* 
<------------ fim do meio da página ----------->  *}
    <div class="rodape">
        <div class="mapa-do-site">
            <header>MAPA DO SITE</header>
            <div>
                <nav>
                    <a href="{$PAG_SOBRE}">QUEM SOMOS</a>
                    <a href="{$PAG_PRODUTOS}">LOJA</a>
                    <a href="#"><span></span>PRONTA ENTREGA</a>
                    <a href="#"><span></span>SOB ENCOMENDA</a>
                </nav>
                    
                <nav>
                    <a href="{$PAG_CONTATO}">CONTATO</a>
                    <a href="{$PAG_CARRINHO}">CARRINHO</a>
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
                <a href="#"><img src="{$GET_TEMA}/assets/logo-instagram.svg" alt="logo insta">INSTAGRAM</a>
                <a href="#"><img src="{$GET_TEMA}/assets/logo-whats.svg" alt=""> WHATSAPP</a>
                
            </div>
            
        </div>
    
    </div>
    
</body>
</html>



        

            
