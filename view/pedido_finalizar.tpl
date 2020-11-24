<div style="margin: 25px">
<!-- Parte em que a pessoa finaliza o seu pedido-->
<h3 style="font-size: 45px; font-family: var(--font-laura)">Finalizar Pedido</h3>


<!--  table listagem de itens -->
<section class="row ">

   <!--  Manter o alerta -->
    <div style="color: var(--color-vinho); font-size: 20px; margin-bottom: 15px; background-color: var(--color-rosa); padding: 8px; font-weight: bold;">Pedido Finalizado com Sucesso</div>
    <table  style="width: 95%">

       
        <tr style="color: var(--color-vinho);
        font-weight: bold;
        font-size: 20px;">
        
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>Quantidade</td> 
            <td>Sub Total R$</td> 

        </tr>
     
       {foreach from=$PROC item=P}
        
        <tr style="font-size: 18px;">
            
            <td>  {$P.proc_nome} </td>
            <td>  {$P.proc_valor} </td>
            <td> {$P.proc_qtd}  </td>
            <td>  {$P.proc_subTotal} </td>

        </tr>
        
       {/foreach}
        
    </table>
        
</section><!-- fim da listagem itens -->
<br> 
<!-- botoes de baixo e valor total -->
<section id="total">
    
    <div style="font-size: 20px;">
    <h4>
        Total : R$ {$TOTAL}
    </h4>
    <h4>
        Frete : R$ {$FRETE}
    </h4>
    <h4>
        Total do Pedido : R$ {$TOTAL_FRETE}
    </h4>
    </div>


</section>
<br>
    
    <section class="pagamentos">
      <center>
        <button class="finalizar" onclick="PagSeguroLightbox({
    code: '{$PS_COD}'
    }, {
    success : function(transactionCode) {
      alert('Transação efetuada - ' + transactionCode);
        window.location ='{$PAG_RETORNO}/{$REF}';
    },
    abort : function() {
       alert('Erro no processo de pagamento');
         window.location ='{$PAG_ERRO}/{$REF}';
    }
});" style=" background-color: var(--color-rosa);
    width: 800px;
    padding: 8px;
    font-size: 22px;
    font-weight: bold;
    border-radius: 8px;
    border-width: 0;">Pague com o PagSeguro </button>
      </center>
      <script type="text/javascript" src="{$PS_SCRIPT}"></script>
     </section>


<br>
<br>
<br>
<br>
</div>