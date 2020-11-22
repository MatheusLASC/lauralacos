<!--  Esta página mostra os pedidos do cliente 
Deixarei numa pasta chamada referências a imagem da tela
Dai você monta estrutura conforme você imagina, mantendo o que precisamos

Foi criado uma tabela no qual os seus itens são exibidos pelo foreach (os dados moveis)

Na lógica do IF se cria um label com o texto do status do pagamento

E o Detalhes é um Action do Forms que redireciona para o Itens do Pedido do Cliente (clientes_itens)
Mantenha o mesmo name e id (cod_pedido) no Detalhes
-->

<br>
<br>

<section class="row" id="pedidos">
        <center>
    <h4 class="text-center">Meus Pedidos</h4>
    

    {if $PEDIDOS_TOTAL > 0}
    <table class="table table-bordered" style="width: 90%">
        
        <tr class="text-danger bg-danger">
            <td>Data</td>
            <td>Hora</td>
            <td>Ref</td>
           
            <td>Status</td>
            <td></td>
        </tr>
        
        {foreach from=$PEDIDOS item=P}
        <tr>
            
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
             <td style="width: 10%"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
       
        </form>    
        </tr>
        {/foreach}
    </table>
       {else}
        <!-- Mensagem para estilizar da forma que prefirir-->
          Você não possui ainda um pedido, faça agora mesmo a sua compra!
        {/if}
      </center>
    
    
</section>
      