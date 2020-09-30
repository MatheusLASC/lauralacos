<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laura Laços - Contato</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Fonte 'LAÇOS' errada, trocar futuramente -->
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{$GET_TEMA}/styles/main.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/header.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/contatos.css">
    <link rel="stylesheet" href="{$GET_TEMA}/styles/rodape.css">

    <link rel="stylesheet" href="{$GET_TEMA}/styles/responsive.css">

</head>
<body>
    <div id="header">
        <div class="logo">
            <img src="{$GET_TEMA}/assets/logo-branco.png" alt="Logo Laura laços">
        </div>
        <nav class="menu">
            <a href="index.html">HOME</a>
            <a href="sobre.html">QUEM SOMOS</a>
            <a href="loja.html">LOJA</a>
            <a href="contato.html">CONTATO</a>
            <a href="#">
                <img src="assets/carrinho.svg" alt="Carrinho">
            </a>
        </nav>
    </div>

    <div id="formularioContato">
        <form action="">
            <h1>Contato</h1>

            <fieldset>
                
                <div class="field">
                    <label for="name">Nome</label>
                    <input type="text" name="name">      
                </div>   
                <div class="field">
                    <label for="email">E-mail</label>
                    <input type="text" name="email">
                </div>
                <div class="field">
                    <label for="celular">Celular</label>
                    <input type="number" name="celular">
                </div>
                <div class="field">
                    <label for="subject">Assunto</label>
                    <input type="text" name="subject">
                </div>
                <div class="field-text">
                    <label for="content">Texto</label>
                    <textarea name="content" id="" cols="30" rows="5"></textarea>
                    <!-- <input type="text" name="content"> -->
                </div>

 
            </fieldset>

            <button type="submit">ENVIAR</button>
        </form>
        
    </div>
    

    

    <div class="rodape">
        <div class="mapa-do-site">
            <header>MAPA DO SITE</header>
            <div>
                <nav>
                    <a href="#">QUEM SOMOS</a>
                    <a href="#">LOJA</a>
                    <a class="ladinho" href="#"><span></span>PRONTA ENTREGA</a>
                    <a class="ladinho" href="#"><span></span>SOB ENCOMENDA</a>
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
                <a href="#"><span></span> FACEBOOK</a>
                <a href="#"><span></span> INSTAGRAM</a>
                <a href="#"><span></span> WHATSAPP</a>
                
            </div>
            
        </div>
    
    </div>
    
</body>
</html>


        

            
