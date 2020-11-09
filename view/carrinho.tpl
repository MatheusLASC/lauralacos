<div class="carrinho">
    <h3>Meu Carrinho</h3>
    <!-- botoes e opções de cima -->
    <section class="row">
        
        <div>
            <a href="" class="comprar-mais" title="">Comprar Mais</a>
        </div>
        {* <div class="col-md-4">
            
        </div>
            <div class="col-md-4 text-right">
        </div> *}
        
    </section>
    <br>

    <!--  table listagem de itens -->
    <section class="tabela-carrinho">
    
        <table class="table table-bordered" style="width: 95%">
        
            <tr class="cabecalho">
                <td></td> 
                <td>Produto</td> 
                <td>Valor R$</td> 
                <td>X</td> 
                <td>Sub Total R$</td> 
                <td></td> 
                
            </tr>
        
            <tr>
                
                <td> <img src="" alt=""> </td>
                <td> NOME </td>
                <td> VALOR </td>
                <td> QUANTIDADE  </td>
                <td> SUBTOTAL </td>
                <td> 
                    <form name="carrinho_dell" method="post" action="">
                    
                        <input type="hidden" name="pro_id" value="">    
                        <input type="hidden" name="acao" value="del">    
                        
                        <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                    </form>
                </td>
                
            </tr>
            
        </table>

    </section><!-- fim da listagem itens -->
            
            <!-- botoes de baixo e valor total -->
            <section class="total-limpar" id="total">
                        
                <div class="col-md-4 text-right">
            
                </div>
                <h4> Total : R$ </h4>
                
                <!-- botão de limpar-->
                <div class="col-md-4">

                    <form name="limpar" method="post" action="">
                        <input type="hidden" name="acao" value="limpar">
                        <input type="hidden" name="pro_id" value="1">

                        <button class="limpar"><img src="view/assets/lixeira.png"> Limpar Tudo</button>

                    </form>

                </div>
            </section>
            <br>

            <!-- botão finalzar -->
            <button class="confirmar" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
            
            
        </form>  
        
        </div>
              
    </section>
    <br>
    <br>
    <br>
    <br>
</div>

