<div style="margin:25px">
    <h3  style="    font-size: 30px;
                    font-family: var(--font-laura);"> Obrigado pelo seu pedido </h3>
    <section>  
        <div class="col-md-6 thumbnail">
            
            <div  style=" font-size: 16px">
                <h4> Informações do pagamento </h4>
                    <p> <b>Código transação:</b> {$CODIGO}</p>
                    <p> <b>Referencia:</b> {$REF}</p>
                    <p> <b>Status do pagamento:</b> {$PAGO}</p>
                    <p> <b>Forma pagamento: </b>{$FORMA_PAG}</p>
            </div>
                <form name="pagamento" method="post" action="{$PAG_ITENS}">
                    <input type="hidden" name="cod_pedido" value="{$REF}">  
                    <button style=" background-color: var(--color-vinho);
                                    color: var(--color-rosa);
                                    line-height: 25px;
                                    font-size: 25px;
                                    font-weight: bold;
                                    padding: 10px;
                                    border-width: 0;
                                    border-radius: 15px;"> Detalhes deste Pedido</button>

                </form>        
        </div> 
    </section>
</div>

