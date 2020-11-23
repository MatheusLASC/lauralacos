<div class="home">
    <div class="quem-somos">
        <img src="view/assets/lauraemaria.png" alt="Foto Quem Somos">
        <div>
            <p> 
                Criando laços e enfeites personalizados com amor desde 2019.
            </p>
        </div>
         
        <a class="go" href="{$PAG_SOBRE}">
            <img src="view/assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="lojaXs" style="background-color: var(--color-cinza);
    display: flex;
    flex-direction: column;
    flex: 1;
    justify-content: center;
    margin-top: 100px;">
        {if $PRO_TOTAL < 1 }
        <h1>Ops... Nosso estoque está esgotado, volte mais tarde!</h1>
        {else}
        <h1 style="font-family: var(--font-laura);
        display: flex;
        justify-content: space-around;
        margin-top: 35px;
        margin-bottom: 20px;
        font-size: 3rem;">Lançamentos</h1>
        <div class="home-cards-loja" style="margin: 0 auto;">
        {if $PRO_TOTAL >=3 }
            <a href="{$PRO_INFO}/{$PRO.1.pro_id}/{$PRO.1.pro_slug}" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="{$PRO.1.pro_img}" alt="laço1">
            </a>
            <a href="{$PRO_INFO}/{$PRO.2.pro_id}/{$PRO.2.pro_slug}" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="{$PRO.2.pro_img}" alt="laço2">
            </a>
            <a href="{$PRO_INFO}/{$PRO.3.pro_id}/{$PRO.3.pro_slug}" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="{$PRO.3.pro_img}" alt="laço3">
            </a>
        {else if $PRO_TOTAL == 2}
            <a href="{$PRO_INFO}/{$PRO.1.pro_id}/{$PRO.1.pro_slug}" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="{$PRO.1.pro_img}" alt="laço1">
            </a>
            <a href="{$PRO_INFO}/{$PRO.2.pro_id}/{$PRO.2.pro_slug}" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="{$PRO.2.pro_img}" alt="laço2">
            </a>
        {else}
            <a href="{$PRO_INFO}/{$PRO.1.pro_id}/{$PRO.1.pro_slug}" style ="max-width: 40rem;
            padding: 0 30px;">
             <img src="{$PRO.1.pro_img}" alt="laço1">
            </a>
        {/if}
        </div> 
      
        <a class="irLoja" href="{$PAG_PRODUTOS}" style="color: var(--color-vinho);
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
        {/if}
    </div>

</div>