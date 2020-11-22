<?php
/* Smarty version 3.1.36, created on 2020-11-21 21:22:40
  from 'C:\xampp\htdocs\lauralacos\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb9af508c5864_11499077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6810c56414dde980b34a429398c89aae613f88f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\clientes_pedidos.tpl',
      1 => 1606004557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb9af508c5864_11499077 (Smarty_Internal_Template $_smarty_tpl) {
?><!--  Esta página mostra os pedidos do cliente 
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
    

    <?php if ($_smarty_tpl->tpl_vars['PEDIDOS_TOTAL']->value > 0) {?>
    <table class="table table-bordered" style="width: 90%">
        
        <tr class="text-danger bg-danger">
            <td>Data</td>
            <td>Hora</td>
            <td>Ref</td>
           
            <td>Status</td>
            <td></td>
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        <tr>
            
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
          
            
            <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pagstatus'] == 'NAO') {?> 
             <td style="width: 15%"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pagstatus'];?>
</span></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pagstatus'] == 'Pago') {?>
              <td style="width: 15%"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pagstatus'];?>
</span></td>
            <?php } else { ?>
              <td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pagstatus'];?>
</td>
            <?php }?>
             
        <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
            
             <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
             <td style="width: 10%"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
       
        </form>    
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
       <?php } else { ?>
        <!-- Mensagem para estilizar da forma que prefirir-->
          Você não possui ainda um pedido, faça agora mesmo a sua compra!
        <?php }?>
      </center>
    
    
</section>
      <?php }
}
