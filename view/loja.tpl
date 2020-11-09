<div id="loja"> 
    <main>
        <div class="lista-categorias">
            <span class="list-group-item-nome active">Categorias</span>

            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right">aaaaaaaa</span></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right">bbbbbbbbbb</span></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right">ccccccccc</span></a>
            
        </div>
        <ul style="list-style: none">
        
        {foreach from=$PRO item=P } 
		           
            <li class="cards">
            </a>    
                    <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">

                        <img class="foto-produto" src="{$P.pro_img}" width="200" height="200" alt="" > 

                        <div class="caption">

                            <h2 class="text-center"> {$P.pro_nome}</h2> 

                            <h3 class="text-center text-danger">{$P.pro_valor}</h3>

                        <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">		                    
                        </div>

                    </a>

                </div>
            </li>

        {/foreach}
    </main>

</div>