<div id="loja"> 
    <main>

        <ul style="list-style: none">

    <!--Aviso ao usuário quando uma categoria está vazia -->

        <div class="grid"> 
        {foreach from=$PRO item=P }
            <li class="cards">
                <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">

                    <img class="thumbnail" src="{$P.pro_img}" width="200" height="200" alt="" > 

                    <div class="caption">

                        <h2 class="text-center"> {$P.pro_nome}</h2> 

                        <h3 class="text-center text-danger">R$ {$P.pro_valor}</h3>

                    </div>     
                </a>
            </li>

  
            <div class="row">
            <br>
            <br>
            <hr>
            
            <h1 class="text-center">Descrição do produto</h1>
            <br>
            <br>
            <h2> {$P.pro_desc}</h2> 
            <br>
            <br>
            <h2 class="text-center preco">R$ {$P.pro_valor}</h2>
            <br>
            <br>
             <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                <input type="hidden" name="acao" value="add">
            <button  class="btn btn-success btn-lg">Comprar</button>
             </form> 
            </div>  
        </div>


    {/foreach}

    <hr>
    </div>
    </main>
    </section>

    

</div>