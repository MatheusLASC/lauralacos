<div id="loja-info"> 
    <main>

        <ul style="list-style: none">

        <!--Aviso ao usuário quando uma categoria está vazia -->
        <!-- ESTRUTURA ANTIGA-->

        <!--
        <div class="grid"> 
        {foreach from=$PRO item=P }
            <li class="cards">
                <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">

                    <img class="thumbnail" src="{$P.pro_img}" width="200" height="200" alt="" > 

                    <div class="caption">

                        <h2 class="s"> {$P.pro_nome}</h2> 

                        <h3 class="text-danger">R$ {$P.pro_valor}</h3>

                    </div>     
                </a>
            </li>
  
            <div class="row">
            <br>
            <br>
                <h1 class="text-center">Descrição do produto</h1>
            <br>
            <br>
                <h2> {$P.pro_desc}</h2> 
            <br>
            <br>
                <h2 class="preco">R$ {$P.pro_valor}</h2>
            <br>
            <br>
                <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                    <input type="hidden" name="pro_id" value="{$P.pro_id}">
                    <input type="hidden" name="acao" value="add">
                    <button  class="comprarInfo">Comprar</button>
                </form> 
            </div>  
        </div>


        {/foreach}
        -->
        <!-- ESTRUTURA NOVA -->
        <h1 class="titulo-info">Descrição do produto</h1>
        <div class="grid-info"> 
            
            <br>
            {foreach from=$PRO item=P }    
                <div class="infos">
                    <img class="thumbnail" src="{$P.pro_img}" width="200" height="200" alt="">
                    <div class=info>
                        <h1 class="nome"> {$P.pro_nome}</h2>
                        <h3>Ref. <!--inserir ref--></h3>
                        <br>
                        <h2 class="desc"> Descrição: {$P.pro_desc}</h2>
                        <h2>Comprimento: <!--inserir comp--></h2>
                        <h2>Cor: <!--inserir cor--></h2>
                        <h2>Tamanho do prendedor:<!--inserir tamanho--></h2>
                        <h2>Possui aplique?<!--inserir aplique--></h2>
                        <br>
                        <h1 class="preco">R$ {$P.pro_valor}</h1>
                    </div>
                    <br>
                    <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                        <input type="hidden" name="pro_id" value="{$P.pro_id}">
                        <input type="hidden" name="acao" value="add">
                        <button  class="comprarInfo">COMPRAR</button>
                    </form> 
                </div>  
            {/foreach}
        </div>
            



    </main> 

</div>