<div id="loja"> 
    <main>
        <div class="categorias">
            <a href="#">PRONTA ENTREGA</a>
            <a href="#">SOB ENCOMENDA</a>
        </div>
        <ul style="list-style: none">
        
        {foreach from=$PRO item=P } 
		           
		        <li class="cards">


                </a>    
		                <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">

		                    <img src="{$P.pro_img}" width="200" height="200" alt="" > 

		                    <div class="caption">

		                        <h2 class="text-center"> {$P.pro_nome}</h2> 

		                        <h3 class="text-center text-danger">{$P.pro_valor}</h3>

                            <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">
                            <img class="coracao" src="view/assets/coracao.png" alt="Adicionar aos favoritos">
		                    
                            </div>

		                </a>

                    
		            </div>


		        </li>

		        {/foreach}
        
    </main>

</div>