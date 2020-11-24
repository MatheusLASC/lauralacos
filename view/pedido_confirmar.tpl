<div class="pedido">
    <!--Aqui é a forma onde a pessoa confirma o seu pedido para ai sim poder finalizar-->
    <h3>Confirmar Pedido</h3>

    <!-- botoes e opções de cima -->
    <section class="voltarcarrinho">
        <a href="{$PAG_CARRINHO}" class="limpar" title="">Voltar para Carrinho</a>
    </section>


    <!--  table listagem de itens -->
    <section class="tabela-pedido">
    
        <center>
        <table class="table table-bordered" style="width: 95%">
        
            <tr class="cabecalho">
                <td></td> 
                <td>Produto</td> 
                <td>Valor R$</td> 
                <td>Quantidade</td> 
                <td>Sub Total R$</td> 
            </tr>
                
        {foreach from=$PROC item=P}
            
            <tr>
                
                <td> <img src="{$P.proc_img}" alt="{$P.proc_nome}"> </td>
                <td>  {$P.proc_nome} </td>
                <td>  {$P.proc_valor} </td>
                <td>  {$P.proc_qtd}  </td>
                <td>  R$ {$P.proc_subTotal} </td>

            </tr>
            
        {/foreach}
            
        </table>
    
        </center>
            
            
    </section><!-- fim da listagem itens -->
            
            <!-- botoes de baixo e valor total -->
            <section class="total">

                <h4>Total : R$ {$TOTAL}</h4>
                <h4> Frete : R$ {$FRETE} </h4>
                <br>
                <h3>Total com Frete : R$ {$TOTAL_FRETE}</h3>
                <br>

                <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
                    <button class="finalizar" type="submit">Finalizar Pedido </button>
                </form>

            </section>
            <br>

            
        </form>  
        
        </div>
        
                    
                            
    </section>
        <br>
        <br>
        <br>
        <br>
</div>