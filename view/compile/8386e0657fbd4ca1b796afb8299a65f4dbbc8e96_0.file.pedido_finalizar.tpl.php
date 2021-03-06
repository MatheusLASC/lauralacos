<?php
/* Smarty version 3.1.36, created on 2020-11-24 21:36:10
  from 'C:\xampp\htdocs\lauralacos\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbda6faae6601_50807221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8386e0657fbd4ca1b796afb8299a65f4dbbc8e96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\pedido_finalizar.tpl',
      1 => 1606263013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbda6faae6601_50807221 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="margin: 25px">
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
     
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROC']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        
        <tr style="font-size: 18px;">
            
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_qtd'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_subTotal'];?>
 </td>

        </tr>
        
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
        
</section><!-- fim da listagem itens -->
<br> 
<!-- botoes de baixo e valor total -->
<section id="total">
    
    <div style="font-size: 20px;">
    <h4>
        Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

    </h4>
    <h4>
        Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

    </h4>
    <h4>
        Total do Pedido : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

    </h4>
    </div>


</section>
<br>
    
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


<br>
<br>
<br>
<br>
</div><?php }
}
