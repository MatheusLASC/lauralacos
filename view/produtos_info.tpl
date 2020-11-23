<div id="loja-info"> 
    <main>

        <ul style="list-style: none">
        <!-- ESTRUTURA NOVA -->
        <h1 class="titulo-info">Descrição do produto</h1>
        <div class="grid-info"> 
            
            <br>
            {foreach from=$PRO item=P }    
                <div class="infos">
                    <img class="thumbnail" src="{$P.pro_img}" width="200" height="200" alt="">
                    <div class=info>
                        <h1 class="nome"> {$P.pro_nome}</h2>
                        <h3>Ref. {$P.pro_ref}</h3>
                        <br>
                        <h2 class="desc"> Descrição: {$P.pro_desc}</h2>
                        <h2>Comprimento: {$P.pro_comprimento} cm</h2>
                        <h2>Cor: {$P.pro_cores}</h2>
                        <h2>Tamanho do prendedor: {$P.pro_prendedor} cm</h2>
                        <h2>Possui aplique? {$P.pro_apliques}</h2>
                        <br>
                        <h1 class="preco">R$ {$P.pro_valor}</h1>
                    </div>
                    <br>
                    {if {$P.pro_estoque} >= 1 and {$P.pro_ativo} == 'Sim'}
                    <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                        <input type="hidden" name="pro_id" value="{$P.pro_id}">
                        <input type="hidden" name="acao" value="add">
                        <button  class="comprarInfo">COMPRAR</button>
                    </form> 
                    {else}
                    <h2>Produto Indisponível no momento!</h2>
                  {/if}
                </div>  
            {/foreach}
        </div>
            



    </main> 

</div>