<?php
/* Smarty version 3.1.36, created on 2020-11-22 12:12:02
  from 'C:\xampp\htdocs\lauralacos\view\clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fba7fc2f0db60_19194098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93cfd814d0019b2f347a54dc9ddd6a5f984963e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\clientes_itens.tpl',
      1 => 1606057921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fba7fc2f0db60_19194098 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="margin: 25px">
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
        <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>     

            <!-- botao de pagamento  -->
            <div class="col-md-4">
               
                BOTÃO DE PAGAMENTO
                
                
                   <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                   <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>
                
            </div>
            
        </section>

        <?php }?>


</div><?php }
}
