<div class="home">
    <div class="quem-somos">
        <img src="view/assets/lauraemaria.png" alt="Foto Quem Somos">
        <div>
            <p> 
                Criando laços e enfeites personalizados com amor desde 2019.
            </p>
        </div>
         
        <a href="{$PAG_SOBRE}">
            <img src="view/assets/botao.svg" alt="Ir para QUEM SOMOS">
        </a>
            
    </div>
    
    <div class="lojaX">
    {if $PRO_TOTAL < 1 }
    <h1>Ops... Nosso estoque está esgotado, volte mais tarde!</h1>
    {else}
    <h1>Lançamentos</h1>
        <div class="home-cards-loja">
        {if $PRO_TOTAL >=3 }
            <a href="{$PRO_INFO}/{$PRO.1.pro_id}/{$PRO.1.pro_slug}">
             <img src="{$PRO.1.pro_img}" alt="laço1">
            </a>
            <a href="{$PRO_INFO}/{$PRO.2.pro_id}/{$PRO.2.pro_slug}">
             <img src="{$PRO.2.pro_img}" alt="laço2">
            </a>
            <a href="{$PRO_INFO}/{$PRO.3.pro_id}/{$PRO.3.pro_slug}">
             <img src="{$PRO.3.pro_img}" alt="laço3">
            </a>
        {else if $PRO_TOTAL == 2}
            <a href="{$PRO_INFO}/{$PRO.1.pro_id}/{$PRO.1.pro_slug}">
             <img src="{$PRO.1.pro_img}" alt="laço1">
            </a>
            <a href="{$PRO_INFO}/{$PRO.2.pro_id}/{$PRO.2.pro_slug}">
             <img src="{$PRO.2.pro_img}" alt="laço2">
            </a>
        {else}
            <a href="{$PRO_INFO}/{$PRO.1.pro_id}/{$PRO.1.pro_slug}">
             <img src="{$PRO.1.pro_img}" alt="laço1">
            </a>
        {/if}
        </div> 
      
        <a href="{$PAG_PRODUTOS}"><span></span>IR PARA LOJA</a>
    {/if}
    </div>

</div>