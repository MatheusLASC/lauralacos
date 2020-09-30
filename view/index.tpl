<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laura Laços - Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Fonte 'LAÇOS' errada, trocar futuramente -->
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <link href="{$GET_TEMA}/styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/header-home.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/sobre.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/rodape.css">

    <link rel="stylesheet" href="{$GET_TEMA}/styles/responsive.css">

</head>
<body>
    <div id="header-home">
        <nav class="menu">
            <a href="{$GET_HOME}">HOME</a>
            <a href="{$PAG_SOBRE}">QUEM SOMOS</a>
            <a href="{$PAG_PRODUTOS}">LOJA</a>
            <a href="{$PAG_CONTATO}">CONTATO</a>
            <a href="{$PAG_CARRINHO}">
                <img src="{$GET_TEMA}/assets/carrinho.svg" alt="Carrinho">
            </a>
        </nav>
        <div class="logo">
            <img src="{$GET_TEMA}/assets/logo-branco.png" alt="Logo Laura laços">
        </div>
        
    </div>
    

    <div class="quem-somos">
        <img src="{$GET_TEMA}/assets/quadrado-vazio.svg" alt="Foto Quem Somos">
        <div>
            <p> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas sagittis elementum. Nam feugiat purus at feugiat gravida.
            </p>
            <p> 
                Etiam id odio eget justo luctus iaculis. Nunc lobortis in justo id aliquet. Mauris metus tortor, auctor id ullamcorper eu, placerat sit amet velit. Donec sed varius turpis. 
            </p>
        </div>
         
        <a href="#">
            
            <img src="{$GET_TEMA}/assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="loja">
        <h1>Laços Personalizados</h1>
        <div class="home-cards-loja">
            {* <ul class="breadcrumb"> *}
            
            <img src="{$GET_TEMA}/assets/quadrado-vazio.svg" alt="laço1">
            <img src="{$GET_TEMA}/assets/quadrado-vazio.svg" alt="laço2">
            <img src="{$GET_TEMA}/assets/quadrado-vazio.svg" alt="laço3">
           {*  </ul><!--fim do breadcrumb--> *}
   {*          {php}
            Rotas::get_Pagina();
            var_dump(Rotas::$pag);
            {/php} *}
            
        </div> 
        <a href="{$GET_TEMA}/styles/loja.html"><span></span>IR PARA LOJA</a>
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
                <a href="#"><img src="{$GET_TEMA}/assets/logo-instagram.svg" alt="logo insta">INSTAGRAM</a>
                <a href="#"><img src="{$GET_TEMA}/assets/logo-whats.svg" alt=""> WHATSAPP</a>
                
            </div>
            
        </div>
    
    </div>
    
</body>
</html>



        

            
