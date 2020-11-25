<center>
<div style="margin:25px">
    <h3 style="     font-size: 30px;
                    font-family: var(--font-laura);"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
    <section>
                
        <div>
            
            <p style=" font-size: 16px"> Caso tenha algum problema entre em contato conosco, informando <br>
            o código de referência:<b> {$REF} </b>
            </p> 
            <br>
            <p style=" font-size: 16px"> Ou tente novamente o pagamento na seção "Pedidos" clicando em "Detalhes",<br>
            você verá seus itens comprados e abaixo o botão "Pague com o PagSeguro"
            </p>  
            <br>
            <p style=" font-size: 16px"> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>  
            <br>
            <p>
            <form name="pagamento" method="post" action="{$PAG_ITENS}">
                <input type="hidden" name="cod_pedido" value="{$REF}">  
                <button style="    background-color: var(--color-vinho);
                                    color: var(--color-rosa);
                                    line-height: 25px;
                                    font-size: 25px;
                                    font-weight: bold;
                                    padding: 10px;
                                    border-width: 0;
                                    border-radius: 15px;"> Fazer Pagamento Agora</button>

            </form>        
            </p>
        </div>
    </section>
</div>
</center>