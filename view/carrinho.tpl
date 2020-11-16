<!-- JS de validação do frete-->
<script>
$(document).ready(function(){    

   // validar frete
     $('#buscar_frete').click(function(){  
        
      var CEP_CLIENTE = $('#cep_frete').val();
      var PESO_FRETE = $('#peso_frete').val();
       
        if (CEP_CLIENTE.length !== 8 ) {
        alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');  
         $('#frete').addClass(' text-center text-danger');
         $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
        $('#cep_frete').focus();
        } else {
     
       
        $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
        $('#frete').addClass(' text-center text-danger');
      
        // carrego o combo com os bairros
       
        $('#frete').load('controller/frete.php?cepcliente='+CEP_CLIENTE+'&pesofrete='+PESO_FRETE);
 
 } // fim do IF digitei o CEP
      
 
    }); // fim do change
    
   
} ); // fim do ready

</script>

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
    
           <!--  bloco frete Editar Aqui Amanda (mander os names e id iguais)
           Manter tbm o id da session "dadosfrete" -->
           <section class="row" id="dadosfrete">

               
               <div class="col-md-4"></div>
                   
                   
               <div class="col-md-4">
                   
                   <!-- campos para tratar  do  frete -->
                   <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" class="form-control " readonly>
                   
                   <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="digite seu cep" >
                  
                   
                   <input type="hidden" name="frete_valor" id="frete_valor" value="0">
                   
                   
               </div> 
               
              
                   <div class="col-md-4">
                       <!-- botão frete -->
                       <button class="btn btn-warning btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular Frete </button>
                      
                   </div>          
                                     
                                
          </section>  <!-- fim da seção do frete -->
 

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

            <!-- botão finalzar =- Precisei adicionar um form para o finalizar o pedido-->
             <!--Aqui abaixo no span frete exibe o valor calculado do frete baseado no JS
                        Você pode mudar para onde ficar melhor-->
            <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
                <span id="frete"></span>
            <button class="confirmar" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
            </form>
            
            
        </form>  
        
        </div>
              
    </section>
    <br>
    <br>
    <br>
    <br>
</div>

