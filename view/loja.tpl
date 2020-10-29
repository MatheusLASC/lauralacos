<div id="loja"> 
    <main>
        <div class="categorias">
            <a href="#">PRONTA ENTREGA</a>
            <a href="#">SOB ENCOMENDA</a>
        </div>
        <ul style="list-style: none">
        
        {foreach from=$PRO item=P}

        
            

        <li class="cards">
            <div class="thumbnail">
                <a href "">
                    <img src="{$P.pro_img}" alt="">

                    <div class="caption">
                        <h2>{$P.pro_nome}</h2>
                        Sob encomenda
                        <h3>{$P.pro_valor}</h3>
        
                        <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">
                        <img class="coracao" src="view/assets/coracao.png" alt="Adicionar aos favoritos">
                    </div>
                </a>    
            </div>
{*             <div class="card">
                <img src="view/assets/quadrado-vazio.svg" alt="LAÇO 002">

                <div class="conteudo">
                    <h2>LAÇO 002</h2>
                    Pronta Entrega
                    <h3>R$ 15,00</h3>
    
                    <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">
                    <img class="coracao" src="view/assets/coracao.png" alt="Adicionar aos favoritos">

                </div>

            </div> *}
{*             <div class="card">
                <img src="view/assets/quadrado-vazio.svg" alt="LAÇO 001">

                <div class="conteudo">
                    <h2>LAÇO 001</h2>
                    Sob encomenda
                    <h3>R$ 10,00</h3>
    
                    <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">
                    <img class="coracao" src="view/assets/coracao.png" alt="Adicionar aos favoritos">
                </div>
            </div> *}
{*             <div class="card">
                <img src="view/assets/quadrado-vazio.svg" alt="LAÇO 002">

                <div class="conteudo">
                    <h2>LAÇO 002</h2>
                    Pronta Entrega
                    <h3>R$ 15,00</h3>
    
                    <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">
                    <img class="coracao" src="view/assets/coracao.png" alt="Adicionar aos favoritos">

                </div>

            </div> *}
            
            
        </li>
        {/foreach}
        
    </main>

</div>

    
