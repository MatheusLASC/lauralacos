<!--
Foi criado uma tabela no qual os seus itens são exibidos pelo foreach (os dados moveis)

Na lógica do IF se cria um label com o texto do status do pagamento

E o Detalhes é um Action do Forms que redireciona para o Itens do Pedido do Cliente (clientes_itens)
Mantenha o mesmo name e id (cod_pedido) no Detalhes
-->
<center> 
<br>

<section id="pedidos" style="margin: 25px">
        
    <h4 style="font-size: 25px; font-family: var(--font-laura); margin-bottom: 15px">Meus Pedidos</h4>
    
    {if $PEDIDOS_TOTAL > 0}
    <table style="width: 80%; border-style: dashed; border-width: 1px; padding: 15px">
        
        <tr style="color: var(--color-vinho); font-weight: bold; font-size: 20px;">
            <td>Data</td>
            <td>Hora</td>
            <td>Ref</td>
            <td>Status</td>
            <td></td>
        </tr>
        
        {foreach from=$PEDIDOS item=P}
        <tr style="font-size: 18px;">
            
            <td style="width: 10%">{$P.ped_data}</td>
            <td style="width: 10%">{$P.ped_hora}</td>
            <td style="width: 10%">{$P.ped_ref}</td>
          
            
            {if $P.ped_pagstatus == 'NAO'} 
             <td style="width: 15%"><span class="label label-danger">{$P.ped_pagstatus}</span></td>
            {elseif $P.ped_pagstatus == 'Pago'}
              <td style="width: 15%"><span class="label label-success">{$P.ped_pagstatus}</span></td>
            {else}
              <td style="width: 15%">{$P.ped_pagstatus}</td>
            {/if}
             
        <form name="itens" method="post" action="{$PAG_ITENS}">
            
             <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
             <td style="width: 10%"><button style="background-color: var(--color-rosa);
              width: 100px;
              padding: 8px;
              font-size: 18px;
              font-weight: bold;
              border-radius: 8px;
              border-width: 0;">Detalhes</button></td>
       
        </form>    
        </tr>
        {/foreach}
    </table>
       {else}
        <!-- Mensagem para estilizar da forma que prefirir-->
          Você não possui ainda um pedido, faça agora mesmo a sua compra!
        {/if} 

    <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center> {$PAGINAS} </center>
    </section>   
</section>
</center>  