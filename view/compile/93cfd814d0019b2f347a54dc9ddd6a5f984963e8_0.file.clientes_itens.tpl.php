<?php
/* Smarty version 3.1.36, created on 2020-11-24 17:47:15
  from 'C:\xampp\htdocs\lauralacos\view\clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbd71530ca631_22598184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93cfd814d0019b2f347a54dc9ddd6a5f984963e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\clientes_itens.tpl',
      1 => 1606250829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd71530ca631_22598184 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<div style="margin: 25px">
<br>
<h4 style="font-size: 25px; font-family: var(--font-laura); margin-bottom: 15px">Dados do pedido</h4>

<!-- informações sobre o pedido -->
<section >

    <table  style="width: 80%">
        <tr style="color: var(--color-vinho); font-weight: bold; font-size: 20px;">
            
            <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
            
            <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
            
            <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
            
            <td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pagstatus'];?>
</td>
            
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
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        <tr style="font-size: 16px">
            
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
            <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
            <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
            <td class="text-right"> R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
            
        </tr>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
    </table>

    
</section>
<br>
        <section class="row" id="resumo">

            <table style="width: 80%">
                <tr style="font-size: 20px; margin: 20px">

                    <td> <b>Frete: </b>R$  <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_fretevalor'];?>
</td>

                    <td> <b>Total: </b>R$  <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                    <td> <b>Final: </b>R$  <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_fretevalor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                </tr>  

            </table>
                     
        </section>  
                        
                        
        <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pagstatus'] == 'NAO') {?>          
        <!--  modos de pagamento e outras informações --> 
        <section class="pagamentos">
      <center>
        <button class="finalizar" onclick="PagSeguroLightbox({
    code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
    }, {
    success : function(transactionCode) {
      alert('Transação efetuada - ' + transactionCode);
        window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
    },
    abort : function() {
       alert('Erro no processo de pagamento');
         window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
    }
});" style=" background-color: var(--color-rosa);
    width: 800px;
    padding: 8px;
    font-size: 22px;
    font-weight: bold;
    border-radius: 8px;
    border-width: 0;">Pague com o PagSeguro </button>
      </center>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
     </section>
        <?php }?>


</div>
</center><?php }
}
