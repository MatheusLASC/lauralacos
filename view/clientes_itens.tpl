<center>
<div style="margin: 25px">
<br>
<h4 style="font-size: 25px; font-family: var(--font-laura); margin-bottom: 15px">Dados do pedido</h4>

<!-- informações sobre o pedido -->
<section >

    <table  style="width: 80%">
        <tr style="color: var(--color-vinho); font-weight: bold; font-size: 20px;">
            
            <td><b>Data:</b> {$ITENS.1.ped_data}</td>
            
            <td><b>Hora:</b> {$ITENS.1.ped_hora}</td>
            
            <td><b>Ref:</b> {$ITENS.1.ped_ref}</td>
            
            <td><b>Status:</b> {$ITENS.1.ped_pagstatus}</td>
            
        </tr>  
        
        
    </table>
    
</section>
<br>

<!-- listagem dos itens -->
<section class="row" id="listaitens">
    
    <table style="width: 80%; border-style: dashed; border-width: 1px; padding: 15px">
        
        <tr style="color: var(--color-vinho); font-weight: bold; font-size: 15px;">
            <td></td>
            <td>Item</td>
            <td>Valor Unitário</td>
            <td>Quantidade</td>
            <td>Sub</td>
        </tr>
        
        {foreach from=$ITENS item=P}
        <tr style="font-size: 16px">
            
            <td><img src="{$P.item_img}" alt=""> </td>
            <td> {$P.item_nome}</td>
            <td class="text-right"> {$P.item_valor}</td>
            <td class="text-center"> {$P.item_qtd}</td>
            <td class="text-right"> R$ {$P.item_sub}</td>
            
        </tr>
        
        {/foreach}
          
    </table>

    
</section>
<br>
        <section class="row" id="resumo">

            <table style="width: 80%">
                <tr style="font-size: 20px; margin: 20px">

                    <td> <b>Frete: </b>R$  {$ITENS.1.ped_fretevalor}</td>

                    <td> <b>Total: </b>R$  {$TOTAL}</td>

                    <td> <b>Final: </b>R$  {$ITENS.1.ped_fretevalor+$TOTAL}</td>

                </tr>  

            </table>
                     
        </section>  
                        
                        
        {if $ITENS.1.ped_pagstatus =='NAO'}          
        <!--  modos de pagamento e outras informações --> 
        <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>     

            <!-- botao de pagamento  -->
            <div class="col-md-4">
               
                BOTÃO DE PAGAMENTO
                
                
                   <img src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
                   <script type="text/javascript" src=""></script>
                
            </div>
            
        </section>

        {/if}


</div>
</center>