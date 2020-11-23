<?php
/* Smarty version 3.1.36, created on 2020-11-23 11:53:23
  from 'C:\xampp\htdocs\lauralacos\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbbcce379f766_79431077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881d54f2e5d9dfde0416d64ea6929d768ada0e01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\pedido_confirmar.tpl',
      1 => 1606143191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbbcce379f766_79431077 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pedido">
    <!--Aqui é a forma onde a pessoa confirma o seu pedido para ai sim poder finalizar-->
    <h3>Confirmar Pedido</h3>

    <!-- botoes e opções de cima -->
    <section class="voltarcarrinho">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="limpar" title="">Voltar para Carrinho</a>
    </section>


    <!--  table listagem de itens -->
    <section class="tabela-pedido">
    
        <center>
        <table class="table table-bordered" style="width: 95%">

    <!--
            <tr> 
                <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
            </tr> -->
        
            <tr class="cabecalho">
                <td></td> 
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
            
            <tr>
                
                <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['proc_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['proc_nome'];?>
"> </td>
                <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_nome'];?>
 </td>
                <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_valor'];?>
 </td>
                <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_qtd'];?>
  </td>
                <td>  R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_subTotal'];?>
 </td>

            </tr>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
        </table>
    
        </center>
            
            
    </section><!-- fim da listagem itens -->
            
            <!-- botoes de baixo e valor total -->
            <section class="total">

                <h4>Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h4>
                <h4> Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
 </h4>
                <br>
                <h3>Total com Frete : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</h3>
                <br>

                <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
                    <button class="finalizar" type="submit">Finalizar Pedido </button>
                </form>

            </section>
            <br>

            
        </form>  
        
        </div>
        
                    
                            
    </section>
        <br>
        <br>
        <br>
        <br>
</div><?php }
}
